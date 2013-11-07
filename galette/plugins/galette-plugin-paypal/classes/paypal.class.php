<?php

/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * Paypal Galette plugin
 *
 * This page can be loaded directly, or via ajax.
 * Via ajax, we do not have a full html page, but only
 * that will be displayed using javascript on another page
 *
 * PHP version 5
 *
 * Copyright © 2011-2013 The Galette Team
 *
 * This file is part of Galette (http://galette.tuxfamily.org).
 *
 * Galette is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Galette is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Galette. If not, see <http://www.gnu.org/licenses/>.
 *
 * @category  Classes
 * @package   GalettePaypal
 * @author    Johan Cwiklinski <johan@x-tnd.be>
 * @copyright 2011-2013 The Galette Team
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL License 3.0 or (at your option) any later version
 * @version   SVN: $Id$
 * @link      http://galette.tuxfamily.org
 * @since     Available since 0.7dev - 2011-06-03
 */

use Galette\Entity\ContributionsTypes;

use Analog\Analog as Analog;

 /**
 * Preferences for galette
 *
 * @category  Classes
 * @name      Paypal
 * @package   Galette
 * @author    Johan Cwiklinski <johan@x-tnd.be>
 * @copyright 2011-2013 The Galette Team
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL License 3.0 or (at your option) any later version
 * @link      http://galette.tuxfamily.org
 * @since     Available since 0.7dev - 2011-06-03
 */

class Paypal
{

    const TABLE = 'types_cotisation_prices';
    const PK = ContributionsTypes::PK;
    const PREFS_TABLE = 'preferences';

    const PAYMENT_PENDING = 'Pending';
    const PAYMENT_COMPLETE = 'Complete';

    private $_prices = array();
    private $_id = null;
    private $_inactives = array();

    private $_loaded = false;
    private $_error = null;
    private $_amounts_loaded = false;

    /**
    * Default constructor
    */
    public function __construct()
    {
        $this->_loaded = false;
        $this->_error = null;
        $this->_prices = array();
        $this->_inactives = array();
        $this->_id = null;
        $this->_load();
    }

    /**
     * Load preferences form the database and amounts
     *
     * @return void
     */
    private function _load()
    {
        global $zdb;

        try {
            $select = new Zend_Db_Select($zdb->db);
            $select->from(PREFIX_DB . PAYPAL_PREFIX . self::PREFS_TABLE);

            $results = $select->query()->fetchAll();

            foreach ( $results as $row ) {
                switch ( $row->nom_pref ) {
                case 'paypal_id':
                    $this->_id = $row->val_pref;
                    break;
                case 'paypal_inactives':
                    $this->_inactives = explode(',', $row->val_pref);
                    break;
                default:
                    //we've got a preference not intended
                    Analog::log(
                        '[' . get_class($this) . '] unknown preference `' .
                        $row->nom_pref . '` in the database.',
                        Analog::WARNING
                    );
                }
            }
            $this->_loaded = true;
            return $this->_loadAmounts();
        } catch (Exception $e) {
            Analog::log(
                '[' . get_class($this) . '] Cannot load paypal preferences |' .
                $e->getMessage(),
                Analog::ERROR
            );
            //consider plugin is not loaded when missing the main preferences
            //(that includes paypal id)
            $this->_loaded = false;
            $this->_error = $e;
        }
    }

    /**
     * Load amounts from database
     *
     * @return void
     */
    private function _loadAmounts()
    {
        global $zdb;

        $ct = new ContributionsTypes();
        $this->_prices = $ct->getCompleteList();

        try {
            $select = new Zend_Db_Select($zdb->db);
            $select->from(PREFIX_DB . PAYPAL_PREFIX . self::TABLE);

            $results = $select->query()->fetchAll();

            //check if all types currently exists in paypal table
            if ( count($results) != count($this->_prices) ) {
                Analog::log(
                    '[' . get_class($this) . '] There are missing types in ' .
                    'paypal table, Galette will try to create them.',
                    Analog::INFO
                );
            }

            $queries = array();
            foreach ( $this->_prices as $k=>$v ) {
                $_found = false;
                if ( count($results) > 0 ) {
                    //for each entry in types, we want to get the associated amount
                    foreach ( $results as $paypal ) {
                        if ( $paypal->id_type_cotis == $k ) {
                            $_found=true;
                            $this->_prices[$k]['amount'] = (double)$paypal->amount;
                            break;
                        }
                    }
                }
                if ( $_found === false ) {
                    Analog::log(
                        'The type `' . $v['name'] . '` (' . $k . ') does not exist' .
                        ', Galette will attempt to create it.',
                        Analog::INFO
                    );
                    $this->_prices[$k]['amount'] = null;
                    $queries[] = array(
                          'id'   => $k,
                        'amount' => null
                    );
                }
            }
            if ( count($queries) > 0 ) {
                $this->_newEntries($queries);
            }
            //amounts should be loaded here
            $this->_amounts_loaded = true;
        } catch (Exception $e) {
            Analog::log(
                '[' . get_class($this) . '] Cannot load paypal amounts' .
                '` | ' . $e->getMessage(),
                Analog::ERROR
            );
            //amounts are not loaded at this point
            $this->_amounts_loaded = false;
            $this->_error = $e;
        }
    }

    /**
     * Store values in the database
     *
     * @return void
     */
    public function store()
    {
        global $zdb;

        try {
            //store paypal id
            $values = array(
                'nom_pref' => 'paypal_id',
                'val_pref' => $this->_id
            );
            $edit = $zdb->db->update(
                PREFIX_DB . PAYPAL_PREFIX . self::PREFS_TABLE,
                $values,
                $zdb->db->quoteInto('nom_pref = ?', 'paypal_id')
            );

            //store inactives
            $values = array(
                'nom_pref' => 'paypal_inactives',
                'val_pref' => implode($this->_inactives, ',')
            );
            $edit = $zdb->db->update(
                PREFIX_DB . PAYPAL_PREFIX . self::PREFS_TABLE,
                $values,
                $zdb->db->quoteInto('nom_pref = ?', 'paypal_inactives')
            );

            Analog::log(
                '[' . get_class($this) .
                '] Paypal preferences were sucessfully stored',
                Analog::INFO
            );

            return $this->storeAmounts();
        } catch (Exception $e) {
            Analog::log(
                '[' . get_class($this) . '] Cannot store paypal preferences' .
                '` | ' . $e->getMessage(),
                Analog::ERROR
            );
            $this->_error = $e;
            return false;
        }
    }

    /**
     * Store amounts in the database
     *
     * @return boolean
     */
    public function storeAmounts()
    {
        global $zdb;

        try {
            $stmt = $zdb->db->prepare(
                'UPDATE ' . PREFIX_DB . PAYPAL_PREFIX . self::TABLE .
                ' SET amount=:amount WHERE ' . self::PK . '=:id'
            );

            $query = array();
            foreach ( $this->_prices as $k=>$v ) {
                $stmt->bindValue(':id', $k);
                $stmt->bindValue(':amount', (float)$v['amount']);
                $stmt->execute();
            }

            Analog::log(
                '[' . get_class($this) . '] Paypal amounts were sucessfully stored',
                Analog::INFO
            );
            return true;
        } catch (Exception $e) {
            Analog::log(
                '[' . get_class($this) . '] Cannot store paypal amounts' .
                '` | ' . $e->getMessage(),
                Analog::ERROR
            );
            $this->_error = $e;
            return false;
        }
    }

    /**
    * Add missing types in paypal table
    *
    * @param Array $queries Array of items to insert
    *
    * @return true on success, false on failure
    */
    private function _newEntries($queries)
    {
        global $zdb;

        try {
            $stmt = $zdb->db->prepare(
                'INSERT INTO ' . PREFIX_DB . PAYPAL_PREFIX . self::TABLE .
                ' (' . self::PK . ', amount) VALUES (:id, :amount)'
            );

            foreach ( $queries as $q ) {
                $stmt->bindValue(':id', $q['id']);
                $stmt->bindValue(':amount', $q['amount']);
                $stmt->execute();
            }

            return true;
        } catch (Exception $e) {
            Analog::log(
                'Unable to store missing types in paypal table.' .
                $stmt->getMessage() . '(' . $stmt->getDebugInfo() . ')',
                Analog::WARNING
            );
            $this->_error = $e;
            return false;
        }
    }

    /**
     * Get Paypal identifier
     *
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * Get loaded and active amounts
     *
     * @return array
     */
    public function getAmounts()
    {
        global $login;

        $prices = array();
        foreach ( $this->_prices as $k=>$v ) {
            if ( !$this->isInactive($k) ) {
                if ( $login->isLogged() || $v['extra'] == 0 ) {
                    $prices[$k] = $v;
                }
            }
        }
        return $prices;
    }

    /**
     * Get loaded amounts
     *
     * @return array
     */
    public function getAllAmounts()
    {
        return $this->_prices;
    }

    /**
     * Is the plugin loaded?
     *
     * @return boolean
     */
    public function isLoaded()
    {
        return $this->_loaded;
    }

    /**
     * Retrieve informations on error
     *
     * @return array
     */
    public function getError()
    {
        return $this->_error;
    }

    /**
     * Are amounts loaded?
     *
     * @return boolean
     */
    public function areAmountsLoaded()
    {
        return $this->_amounts_loaded;
    }

    /**
     * Set paypal identifier
     *
     * @param string $id identifier
     *
     * @return void
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * Set new prices
     *
     * @param array $ids     array of identifier
     * @param array $amounts array of amounts
     *
     * @return void
     */
    public function setPrices($ids, $amounts)
    {
        foreach ( $ids as $k=>$id) {
            $this->_prices[$id]['amount'] = $amounts[$k];
        }
    }

    /**
     * Check if the specified contribution is active
     *
     * @param int $id type identifier
     *
     * @return boolean
     */
    public function isInactive($id)
    {
        return in_array($id, $this->_inactives);
    }

    /**
     * Set inactives types
     *
     * @param array $inactives array of inactives types
     *
     * @return void
     */
    public function setInactives($inactives)
    {
        $this->_inactives = $inactives;
    }

    /**
     * Unset inactives types
     *
     * @return void
     */
    public function unsetInactives()
    {
        $this->_inactives = array();
    }
}
?>

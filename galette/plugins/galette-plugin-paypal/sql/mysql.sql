--
-- Table structure for table `galette_paypal_types_cotisation_prices`
--

CREATE TABLE galette_paypal_types_cotisation_prices (
  id_type_cotis int(10) unsigned NOT NULL,
  amount double NULL,
  PRIMARY KEY (id_type_cotis),
  CONSTRAINT galette_cotisation_price FOREIGN KEY (id_type_cotis) REFERENCES galette_types_cotisation (id_type_cotis) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `galette_paypal_history`
--

CREATE TABLE galette_paypal_history (
  `id_paypal` int(11) NOT NULL auto_increment,
  `history_date` datetime NOT NULL,
  `amount` double NOT NULL,
  `comments` varchar(255)  COLLATE utf8_unicode_ci,
  `request` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id_paypal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Table structure for table `galette_paypal_preferences`
--

CREATE TABLE galette_paypal_preferences (
  id_pref int(10) unsigned NOT NULL auto_increment,
  nom_pref varchar(100) NOT NULL default '',
  val_pref varchar(200) NOT NULL default '',
  PRIMARY KEY  (id_pref),
  UNIQUE KEY(nom_pref)
) ENGINE=MyISAM DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO galette_paypal_preferences (nom_pref, val_pref) VALUES ('paypal_id', '');
INSERT INTO galette_paypal_preferences (nom_pref, val_pref) VALUES ('paypal_inactives', '4,6,7');

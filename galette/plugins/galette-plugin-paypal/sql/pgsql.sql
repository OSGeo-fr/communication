--
-- Table structure for table galette_paypal_types_cotisation_prices
--
DROP TABLE IF EXISTS galette_paypal_types_cotisation_prices;
CREATE TABLE galette_paypal_types_cotisation_prices (
  id_type_cotis integer REFERENCES galette_types_cotisation ON DELETE CASCADE,
  amount  real DEFAULT '0',
  PRIMARY KEY (id_type_cotis)
);

--
-- Table structure for table galette_paypal_history
--
DROP SEQUENCE IF EXISTS galette_paypal_history_id_seq;
CREATE SEQUENCE galette_paypal_history_id_seq
    START 1
    INCREMENT 1
    MAXVALUE 2147483647
    MINVALUE 1
    CACHE 1;

DROP TABLE IF EXISTS galette_paypal_history;
CREATE TABLE galette_paypal_history (
  id_paypal integer DEFAULT nextval('galette_paypal_history_id_seq'::text) NOT NULL,
  history_date date NOT NULL,
  amount real NOT NULL,
  comments character varying(255),
  request text,
  PRIMARY KEY (id_paypal)
);

--
-- Table structure for table `galette_paypal_preferences`
--
DROP SEQUENCE IF EXISTS galette_paypal_preferences_id_seq;
CREATE SEQUENCE galette_paypal_preferences_id_seq
    START 1
    INCREMENT 1
    MAXVALUE 2147483647
    MINVALUE 1
    CACHE 1;

DROP TABLE IF EXISTS galette_paypal_preferences;
CREATE TABLE galette_paypal_preferences (
  id_pref integer DEFAULT nextval('galette_paypal_preferences_id_seq'::text) NOT NULL,
  nom_pref character varying(100) NOT NULL default '',
  val_pref character varying(200) NOT NULL default '',
  PRIMARY KEY  (id_pref)
);

CREATE UNIQUE INDEX galette_paypal_preferences_unique_idx ON galette_paypal_preferences (nom_pref);

INSERT INTO galette_paypal_preferences (nom_pref, val_pref) VALUES ('paypal_id', '');
INSERT INTO galette_paypal_preferences (nom_pref, val_pref) VALUES ('paypal_inactives', '4,6,7');

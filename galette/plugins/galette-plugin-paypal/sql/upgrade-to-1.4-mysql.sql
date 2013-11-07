ALTER TABLE galette_paypal_types_cotisation_prices 
  DROP FOREIGN KEY galette_cotisation_price;
ALTER TABLE galette_paypal_types_cotisation_prices 
  ADD CONSTRAINT galette_cotisation_price 
    FOREIGN KEY (id_type_cotis) REFERENCES galette_types_cotisation(id_type_cotis) ON DELETE CASCADE;

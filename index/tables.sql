CREATE DATABASE bibliotheque;
use bibliotheque;
DROP SCHEMA IF EXISTS public CASCADE;
CREATE SCHEMA public;

CREATE TABLE te_seance_snc (
	snc_id serial primary key,
	snc_film varchar(255)	
);

CREATE TABLE te_place_plc (
	plc_id serial primary key,
	plc_rang int,
	plc_numéro int
);

CREATE TABLE te_vente_vnt (
	vnt_id serial primary key,
	vnt_plc_id int not null,
	vnt_snc_id int not null,
	vnt_nom varchar(100)
);

ALTER TABLE te_vente_vnt ADD CONSTRAINT c_fk_vnt_plc_id 
FOREIGN KEY (vnt_plc_id) REFERENCES te_place_plc(plc_id);
ALTER TABLE te_vente_vnt ADD CONSTRAINT c_fk_vnt_snc_id 
FOREIGN KEY (vnt_snc_id) REFERENCES te_seance_snc(snc_id);

CREATE DATABASE IF NOT EXISTS restaurant;


use restaurant;

CREATE TABLE IF NOT EXISTS platos1(
cod_plato CHAR(4) PRIMARY KEY,
nom VARCHAR(30) NOT NULL,
tipo VARCHAR(30)
);

CREATE TABLE IF NOT EXISTS distribuidor1(
cod_dist CHAR(4) PRIMARY KEY,
nom VARCHAR(30) NOT NULL,
tel INT(9)
);

CREATE TABLE IF NOT EXISTS vinos1(
cod_vino CHAR(4) PRIMARY KEY,
nom VARCHAR(30) NOT NULL,
precio FLOAT(10),
distribuidor CHAR(4),
FOREIGN KEY (distribuidor) REFERENCES distribuidor1 (cod_dist)
ON UPDATE CASCADE
ON DELETE RESTRICT
);







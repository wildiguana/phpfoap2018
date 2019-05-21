
CREATE DATABASE IF NOT EXISTS restaurant;



CREATE TABLE IF NOT EXISTS platos(
    cod_plato CHAR(4) PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    tipo VARCHAR(30)
);

CREATE TABLE IF NOT EXISTS distribuidor(
    cod_dist CHAR(4) PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    tel INT(9)
);

CREATE TABLE IF NOT EXISTS vinos(
    cod_vino CHAR(4) PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    precio FLOAT(10),
    distribuidor CHAR(4),
    FOREIGN KEY distribuidor (cod_dist) REFERENCES distribuidor (cod_dist)
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

CREATE TABLE IF NOT EXISTS plato_vino(
    cod_plato CHAR(4),
    cod_vino CHAR(4),
    FOREIGN KEY platos (cod_plato) REFERENCES platos (cod_plato)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,
    FOREIGN KEY vinos (cod_vino) REFERENCES vinos (cod_vino)
    ON UPDATE CASCADE
    ON DELETE RESTRICT,
    PRIMARY KEY (cod_plato, cod_vino)
);
create database paises;
use paises;
CREATE TABLE paises (
    id INT AUTO_INCREMENT,
    pais VARCHAR(20),
    continente VARCHAR(20),
    bandera BLOB,
    PRIMARY KEY (id)
);



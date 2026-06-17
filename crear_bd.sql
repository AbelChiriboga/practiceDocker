CREATE DATABASE escuela;

USE escuela;

CREATE TABLE estudiantes(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    carrera VARCHAR(50) NOT NULL
);
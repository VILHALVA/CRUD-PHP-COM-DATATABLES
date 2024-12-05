CREATE DATABASE usuarios_db;

USE usuarios_db;

CREATE TABLE personas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    pais VARCHAR(100) NOT NULL,
    edad INT NOT NULL
);

INSERT INTO personas (nombre, pais, edad)
VALUES
('Juan Perez', 'Argentina', 25),
('Maria Gomez', 'Brasil', 30),
('Carlos Santana', 'México', 27),
('Ana López', 'Chile', 22),
('Pedro Costa', 'Portugal', 35),
('Sofia Hernández', 'Colômbia', 28),
('Miguel Diaz', 'Espanha', 29),
('Lucia Ramirez', 'Peru', 23),
('Fernando Torres', 'Uruguai', 26),
('Isabela Silva', 'Brasil', 32),
('Javier Martinez', 'Argentina', 24),
('Camila Garcia', 'México', 21),
('Andrés Fernández', 'Espanha', 34),
('Elena Cruz', 'Chile', 31),
('Daniel Morales', 'Colômbia', 27),
('Paula Gutierrez', 'Portugal', 36),
('Gabriel Ortiz', 'Peru', 20),
('Victoria Soto', 'Uruguai', 22),
('Alonso Ruiz', 'Espanha', 28),
('Valeria Vargas', 'Brasil', 33),
('Hugo Rojas', 'Argentina', 25),
('Adriana Flores', 'México', 26),
('Nicolas Serrano', 'Chile', 30),
('Marta Andrade', 'Colômbia', 29),
('Sebastian Blanco', 'Portugal', 35),
('Clara Nieto', 'Peru', 31),
('Luis Paredes', 'Uruguai', 27),
('Natalia Medina', 'Espanha', 22),
('Esteban Salazar', 'Brasil', 28),
('Lorena Vargas', 'Argentina', 24),
('Ricardo Fuentes', 'México', 33),
('Patricia Navarro', 'Chile', 32),
('Diego Luna', 'Colômbia', 34),
('Emilia Suarez', 'Portugal', 20),
('Julian Vázquez', 'Peru', 29),
('Irene Pena', 'Uruguai', 21),
('Raul Aguirre', 'Espanha', 27),
('Daniela Castillo', 'Brasil', 31),
('Alejandro Espinoza', 'Argentina', 26),
('Francisca Reyes', 'México', 23),
('Antonio Campos', 'Chile', 25),
('Liliana Aguilar', 'Colômbia', 30),
('Marcelo Molina', 'Portugal', 34),
('Renata Cabrera', 'Peru', 32),
('Cesar Acosta', 'Uruguai', 28),
('Mariana Benitez', 'Espanha', 29),
('Federico Nunez', 'Brasil', 27),
('Alejandra Delgado', 'Argentina', 22),
('Eduardo Miranda', 'México', 35),
('Sandra Solano', 'Chile', 21),
('Matias Cortes', 'Colômbia', 36),
('Teresa Prieto', 'Portugal', 20),
('Joaquín Rivero', 'Peru', 23),
('Luciana Vega', 'Uruguai', 31),
('Bruno Cabrera', 'Espanha', 26),
('Florencia Luna', 'Brasil', 24),
('Agustin Chavez', 'Argentina', 33),
('Samantha León', 'México', 32),
('Hector Solís', 'Chile', 34),
('Claudia Ávila', 'Colômbia', 22),
('Felipe Márquez', 'Portugal', 29),
('Tamara Robles', 'Peru', 28),
('Manuel Esteban', 'Uruguai', 27),
('Santiago Orozco', 'Espanha', 23),
('Laura Camacho', 'Brasil', 25),
('Fabian Ibarra', 'Argentina', 30),
('Veronica Duarte', 'México', 31),
('Rodrigo Navarro', 'Chile', 33),
('Sabrina Iglesias', 'Colômbia', 24),
('Francisco Herrera', 'Portugal', 26),
('Carolina Lara', 'Peru', 36),
('Josefina Peña', 'Uruguai', 20),
('Pablo Zamora', 'Espanha', 21),
('Angel Romero', 'Brasil', 28),
('Monica Serrano', 'Argentina', 29),
('Cristian Zambrano', 'México', 35),
('Melina Fernández', 'Chile', 22),
('Ignacio Sánchez', 'Colômbia', 27),
('Viviana Guzmán', 'Portugal', 23),
('Andres Vega', 'Peru', 32),
('Milagros Ramos', 'Uruguai', 25),
('Oscar Torres', 'Espanha', 34),
('Vanessa Ortiz', 'Brasil', 31),
('Gonzalo Flores', 'Argentina', 24),
('Claudia Jimenez', 'México', 26),
('Jorge Quintero', 'Chile', 36),
('Lorena Arriaga', 'Colômbia', 20),
('Mauricio Beltrán', 'Portugal', 28),
('Catalina Soto', 'Peru', 30),
('Martin Varela', 'Uruguai', 35),
('Isabel Campos', 'Espanha', 33),
('Leonardo Méndez', 'Brasil', 27),
('Araceli González', 'Argentina', 22);



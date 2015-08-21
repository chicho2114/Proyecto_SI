-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 16-05-2014 a las 04:36:14
-- Versión del servidor: 5.5.25a
-- Versión de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `principal`
--
CREATE DATABASE `principal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `principal`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`correo`),
  UNIQUE KEY `correo` (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `apellido`, `edad`, `correo`, `password`) VALUES
('alberto', 'garcia', 50, 'alberto@hotmail.com', '123456'),
('alberto', 'farias', 25, 'albertofarias@gmail.com', '55555'),
('Andrea', 'fernandez', 21, 'andrea@hotmail.com', '123456'),
('Argenis', 'Garcia', 20, 'argenis_2007@hotmail.com', '21443181'),
('benito', 'camejo', 22, 'benito@hotmail.com', '123456789'),
('deivis', 'fernandez', 21, 'deivis@hotmail.com', '11111'),
('deivis', 'rodriguez', 45, 'deivisrodriguez@gmail.com', '55555'),
('diana', 'acevedo', 20, 'diana_acevedo@hotmail.com', '444444'),
('Genesis', 'Garcia', 25, 'genesis@gmail.com', '54321'),
('genesis', 'garcia', 25, 'ggarcia16@hotmail.com', '123456'),
('Ivonne', 'Ortega', 20, 'ivonne@gmail.com', '12345'),
('Jesus', 'Perez', 22, 'jesusperez@gmail.com', '123456'),
('juana', 'fox', 25, 'juanafox@gmail.com', '12345'),
('juan', 'Garcia', 32, 'juangarcia@hotmail.com', '54321'),
('juan', 'perez', 18, 'juanperez@hotmail.com', '123'),
('Carlos', 'Oscariz', 28, 'oscariz@gmail.com', '1234567'),
('pedro', 'gonzalez', 18, 'pedrogonzalez@hotmail.com', '123'),
('PEPE', 'VILLEGAS', 50, 'pepevillegas@gmail.com', '55555'),
('silvester', 'stallone', 50, 'silvester@hotmail.com', 'silvester');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videojuegos`
--

CREATE TABLE IF NOT EXISTS `videojuegos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) NOT NULL,
  `categoria` varchar(20) NOT NULL DEFAULT 'Otros',
  `rating` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `videojuegos`
--

INSERT INTO `videojuegos` (`codigo`, `titulo`, `categoria`, `rating`, `descripcion`, `precio`) VALUES
(1, 'Resident Evil', 'terror', 5, 'Es un juego survival horror que te hará saltar del asiento varias veces.', 300),
(2, 'Resident Evil 2', 'terror', 5, 'Es un juego de survival horror excelente... vive la continuacion de la saga', 300),
(3, 'Resident Evil 3', 'terror', 4, 'Es un juego de survival horror excelente... vive la continuacion de la saga.', 300),
(4, 'FIFA 2006', 'deportivos', 8, 'Un juego muy divertido de futbol', 700),
(5, 'MVP baseball 2005', 'deportivos', 9, 'Un juego de baseball... ', 250),
(8, 'The Last of US', 'aventura', 10, 'Un juego muy bueno :3', 1500),
(17, 'Call of duty', 'accion', 8, 'Un juego de disparos en primera persona', 750);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

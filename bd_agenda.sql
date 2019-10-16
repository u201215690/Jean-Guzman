-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2019 a las 15:11:16
-- Versión del servidor: 5.7.9
-- Versión de PHP: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

DROP TABLE IF EXISTS `evento`;
CREATE TABLE IF NOT EXISTS `evento` (
  `eve_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_id` int(11) NOT NULL,
  `título` varchar(70) CHARACTER SET latin1 NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `hora_inicio` time NOT NULL,
  `fecha_fin` datetime NOT NULL,
  `hora_fin` time NOT NULL,
  `dia_completo` tinyint(1) NOT NULL,
  PRIMARY KEY (`eve_id`),
  KEY `usu_id` (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`eve_id`, `usu_id`, `título`, `fecha_inicio`, `hora_inicio`, `fecha_fin`, `hora_fin`, `dia_completo`) VALUES
(1, 1, 'Demo', '2019-10-19 09:27:26', '09:27:26', '2019-10-20 08:12:37', '08:12:37', 1),
(2, 1, 'Reunion BCP', '2019-10-15 14:30:00', '14:30:00', '2019-10-16 22:30:00', '22:30:00', 0),
(3, 1, 'Reunion Optical', '2019-10-20 15:00:00', '15:00:00', '2019-10-21 22:00:00', '22:00:00', 0),
(4, 1, 'Reunion AKA', '2019-10-01 08:30:00', '08:30:00', '2019-10-02 09:00:00', '09:00:00', 0),
(5, 1, 'Reunion AKA2', '2019-10-03 07:00:00', '07:00:00', '2019-10-04 07:00:00', '07:00:00', 0),
(6, 1, 'Reunion AKA3', '2019-10-25 07:00:00', '07:00:00', '2019-10-26 07:00:00', '07:00:00', 0),
(7, 1, 'Reunion AKA2', '2019-10-07 07:00:00', '07:00:00', '2019-10-08 07:00:00', '07:00:00', 0),
(8, 1, 'Reunion AKA', '2019-10-08 07:00:00', '07:00:00', '2019-10-09 07:00:00', '07:00:00', 0),
(9, 1, 'Reunion AKA3', '2019-10-09 07:00:00', '07:00:00', '2019-10-10 07:00:00', '07:00:00', 0),
(10, 1, 'Reunion BCP', '2019-10-17 07:00:00', '07:00:00', '2019-10-18 07:00:00', '07:00:00', 0),
(11, 1, 'Reunion AKA', '2019-10-11 07:00:00', '07:00:00', '2019-10-12 07:00:00', '07:00:00', 0),
(12, 1, 'Reunion AKA', '2019-10-04 07:00:00', '07:00:00', '2019-10-05 07:00:00', '07:00:00', 0),
(13, 1, 'kkk', '2019-10-05 07:00:00', '07:00:00', '2019-10-05 07:00:00', '07:00:00', 0),
(14, 1, 'Reunion AKA3', '2019-10-13 07:00:00', '07:00:00', '2019-10-13 07:00:00', '07:00:00', 0),
(15, 1, 'Reunion AKA2', '2019-10-12 07:00:00', '07:00:00', '2019-10-12 07:00:00', '07:00:00', 0),
(19, 1, 'kkk', '2019-10-22 07:00:00', '07:00:00', '2019-10-22 07:00:00', '07:00:00', 0),
(20, 1, 'kkk', '2019-10-22 07:00:00', '07:00:00', '2019-10-22 07:00:00', '07:00:00', 0),
(23, 1, 'Reunion AKA', '2019-10-27 07:00:00', '07:00:00', '2019-10-27 07:00:00', '07:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usu_id` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usu_id`, `nombres`, `apellidos`, `correo`, `password`, `fecha_nacimiento`) VALUES
(1, 'Jean', 'Guzman', 'jguzman@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL),
(2, 'Santiago', 'Abregu', 'santiago@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL),
(3, 'Mariano', 'Guzman', 'mariano@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL),
(4, 'Jean', 'Guzman', 'jguzman@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL),
(5, 'Santiago', 'Abregu', 'santiago@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL),
(6, 'Mariano', 'Guzman', 'mariano@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `evento_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `usuario` (`usu_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2023 a las 17:43:55
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tarea3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `username`
--
-- Creación: 03-12-2023 a las 22:16:34
--

DROP TABLE IF EXISTS `username`;
CREATE TABLE IF NOT EXISTS `username` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `nomrepresentante` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL,
  `curso` varchar(10) NOT NULL,
  `fechanacimiento` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncar tablas antes de insertar `username`
--

TRUNCATE TABLE `username`;
--
-- Volcado de datos para la tabla `username`
--

INSERT DELAYED INTO `username` (`id`, `nombre`, `apellido`, `direccion`, `nomrepresentante`, `telefono`, `curso`, `fechanacimiento`) VALUES
(28, 'Dereck', 'Jaramillo', 'ibarra', 'Sonia Pabon', 983288443, '10mo', '2023-12-19'),
(29, 'Widinson', 'Pabon', 'Tumbatu', 'Darwin Pabon', 987663232, '7mo', '2023-12-21'),
(30, 'hrhr', 'rthrth', 'rthrth', 'rthr', 93242323, '6to', '2023-12-03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
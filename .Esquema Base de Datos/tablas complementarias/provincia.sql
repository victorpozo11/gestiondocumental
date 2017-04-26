-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2017 a las 06:18:39
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ctrlasisbk`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `ID_PROVINCIA` int(11) NOT NULL,
  `ID_REGION` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `CODIGO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`ID_PROVINCIA`, `ID_REGION`, `NOMBRE`, `CODIGO`) VALUES
(1, 1, 'AZUAY', 1),
(2, 1, 'BOLIVAR', 2),
(3, 1, 'CA?AR', 3),
(4, 1, 'CARCHI', 4),
(5, 1, 'COTOPAXI', 5),
(6, 1, 'CHIMBORAZO', 6),
(7, 2, 'EL ORO', 7),
(8, 2, 'ESMERALDAS', 8),
(9, 2, 'GUAYAS', 9),
(10, 1, 'IMBABURA', 10),
(11, 1, 'LOJA', 11),
(12, 2, 'LOS RIOS', 12),
(13, 2, 'MANABI', 13),
(14, 3, 'MORONA SANTIAGO', 14),
(15, 3, 'NAPO', 15),
(16, 3, 'PASTAZA', 16),
(17, 1, 'PICHINCHA', 17),
(18, 1, 'TUNGURAHUA', 18),
(19, 3, 'ZAMORA CHINCHIPE', 19),
(20, 4, 'GALAPAGOS', 20),
(21, 3, 'SUCUMBIOS', 21),
(22, 3, 'ORELLANA', 22),
(23, 1, 'SANTO DOMINGO DE LOS TSACHILAS', 23),
(24, 2, 'SANTA ELENA', 24),
(25, 1, 'ZONAS NO DELIMITADAS', 90);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`ID_PROVINCIA`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_REGION`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `ID_PROVINCIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_REGION`) REFERENCES `region` (`ID_REGION`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2017 a las 06:18:44
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
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `ID_CIUDAD` int(11) NOT NULL,
  `ID_PROVINCIA` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `CODIGO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`ID_CIUDAD`, `ID_PROVINCIA`, `NOMBRE`, `CODIGO`) VALUES
(1, 1, 'CUENCA', 101),
(2, 1, 'GIR?N', 102),
(3, 1, 'GUALACEO', 103),
(4, 1, 'NAB?N', 104),
(5, 1, 'PAUTE', 105),
(6, 1, 'PUCARA', 106),
(7, 1, 'SAN FERNANDO', 107),
(8, 1, 'SANTA ISABEL', 108),
(9, 1, 'SIGSIG', 109),
(10, 1, 'O?A', 110),
(11, 1, 'CHORDELEG', 111),
(12, 1, 'EL PAN', 112),
(13, 1, 'SEVILLA DE ORO', 113),
(14, 1, 'GUACHAPALA', 114),
(15, 1, 'CAMILO PONCE ENR?QUEZ', 115),
(16, 2, 'GUARANDA', 201),
(17, 2, 'CHILLANES', 202),
(18, 2, 'CHIMBO', 203),
(19, 2, 'ECHEAND?A', 204),
(20, 2, 'SAN MIGUEL', 205),
(21, 2, 'CALUMA', 206),
(22, 2, 'LAS NAVES', 207),
(23, 3, 'AZOGUES', 301),
(24, 3, 'BIBLI?N', 302),
(25, 3, 'CA?AR', 303),
(26, 3, 'LA TRONCAL', 304),
(27, 3, 'EL TAMBO', 305),
(28, 3, 'D?LEG', 306),
(29, 3, 'SUSCAL', 307),
(30, 4, 'TULC?N', 401),
(31, 4, 'BOL?VAR', 402),
(32, 4, 'ESPEJO', 403),
(33, 4, 'MIRA', 404),
(34, 4, 'MONT?FAR', 405),
(35, 4, 'SAN PEDRO DE HUACA', 406),
(36, 5, 'LATACUNGA', 501),
(37, 5, 'LA MAN?', 502),
(38, 5, 'PANGUA', 503),
(39, 5, 'PUJILI', 504),
(40, 5, 'SALCEDO', 505),
(41, 5, 'SAQUISIL?', 506),
(42, 5, 'SIGCHOS', 507),
(43, 6, 'RIOBAMBA', 601),
(44, 6, 'ALAUSI', 602),
(45, 6, 'COLTA', 603),
(46, 6, 'CHAMBO', 604),
(47, 6, 'CHUNCHI', 605),
(48, 6, 'GUAMOTE', 606),
(49, 6, 'GUANO', 607),
(50, 6, 'PALLATANGA', 608),
(51, 6, 'PENIPE', 609),
(52, 6, 'CUMAND?', 610),
(53, 7, 'MACHALA', 701),
(54, 7, 'ARENILLAS', 702),
(55, 7, 'ATAHUALPA', 703),
(56, 7, 'BALSAS', 704),
(57, 7, 'CHILLA', 705),
(58, 7, 'EL GUABO', 706),
(59, 7, 'HUAQUILLAS', 707),
(60, 7, 'MARCABEL?', 708),
(61, 7, 'PASAJE', 709),
(62, 7, 'PI?AS', 710),
(63, 7, 'PORTOVELO', 711),
(64, 7, 'SANTA ROSA', 712),
(65, 7, 'ZARUMA', 713),
(66, 7, 'LAS LAJAS', 714),
(67, 8, 'ESMERALDAS', 801),
(68, 8, 'ELOY ALFARO', 802),
(69, 8, 'MUISNE', 803),
(70, 8, 'QUININD?', 804),
(71, 8, 'SAN LORENZO', 805),
(72, 8, 'ATACAMES', 806),
(73, 8, 'RIOVERDE', 807),
(74, 8, 'LA CONCORDIA', 808),
(75, 9, 'GUAYAQUIL', 901),
(76, 9, 'ALFREDO BAQUERIZO MORENO (JUJ?N)', 902),
(77, 9, 'BALAO', 903),
(78, 9, 'BALZAR', 904),
(79, 9, 'COLIMES', 905),
(80, 9, 'DAULE', 906),
(81, 9, 'DUR?N', 907),
(82, 9, 'EL EMPALME', 908),
(83, 9, 'EL TRIUNFO', 909),
(84, 9, 'MILAGRO', 910),
(85, 9, 'NARANJAL', 911),
(86, 9, 'NARANJITO', 912),
(87, 9, 'PALESTINA', 913),
(88, 9, 'PEDRO CARBO', 914),
(89, 9, 'SAMBOROND?N', 916),
(90, 9, 'SANTA LUC?A', 918),
(91, 9, 'SALITRE (URBINA JADO)', 919),
(92, 9, 'SAN JACINTO DE YAGUACHI', 920),
(93, 9, 'PLAYAS', 921),
(94, 9, 'SIM?N BOL?VAR', 922),
(95, 9, 'CORONEL MARCELINO MARIDUE?A', 923),
(96, 9, 'LOMAS DE SARGENTILLO', 924),
(97, 9, 'NOBOL', 925),
(98, 9, 'GENERAL ANTONIO ELIZALDE', 927),
(99, 9, 'ISIDRO AYORA', 928),
(100, 10, 'IBARRA', 1001),
(101, 10, 'ANTONIO ANTE', 1002),
(102, 10, 'COTACACHI', 1003),
(103, 10, 'OTAVALO', 1004),
(104, 10, 'PIMAMPIRO', 1005),
(105, 10, 'SAN MIGUEL DE URCUQU?', 1006),
(106, 11, 'LOJA', 1101),
(107, 11, 'CALVAS', 1102),
(108, 11, 'CATAMAYO', 1103),
(109, 11, 'CELICA', 1104),
(110, 11, 'CHAGUARPAMBA', 1105),
(111, 11, 'ESP?NDOLA', 1106),
(112, 11, 'GONZANAM?', 1107),
(113, 11, 'MACAR?', 1108),
(114, 11, 'PALTAS', 1109),
(115, 11, 'PUYANGO', 1110),
(116, 11, 'SARAGURO', 1111),
(117, 11, 'SOZORANGA', 1112),
(118, 11, 'ZAPOTILLO', 1113),
(119, 11, 'PINDAL', 1114),
(120, 11, 'QUILANGA', 1115),
(121, 11, 'OLMEDO', 1116),
(122, 12, 'BABAHOYO', 1201),
(123, 12, 'BABA', 1202),
(124, 12, 'MONTALVO', 1203),
(125, 12, 'PUEBLOVIEJO', 1204),
(126, 12, 'QUEVEDO', 1205),
(127, 12, 'URDANETA', 1206),
(128, 12, 'VENTANAS', 1207),
(129, 12, 'V?NCES', 1208),
(130, 12, 'PALENQUE', 1209),
(131, 12, 'BUENA F?', 1210),
(132, 12, 'VALENCIA', 1211),
(133, 12, 'MOCACHE', 1212),
(134, 12, 'QUINSALOMA', 1213),
(135, 13, 'PORTOVIEJO', 1301),
(136, 13, 'BOL?VAR', 1302),
(137, 13, 'CHONE', 1303),
(138, 13, 'EL CARMEN', 1304),
(139, 13, 'FLAVIO ALFARO', 1305),
(140, 13, 'JIPIJAPA', 1306),
(141, 13, 'JUN?N', 1307),
(142, 13, 'MANTA', 1308),
(143, 13, 'MONTECRISTI', 1309),
(144, 13, 'PAJ?N', 1310),
(145, 13, 'PICHINCHA', 1311),
(146, 13, 'ROCAFUERTE', 1312),
(147, 13, 'SANTA ANA', 1313),
(148, 13, 'SUCRE', 1314),
(149, 13, 'TOSAGUA', 1315),
(150, 13, '24 DE MAYO', 1316),
(151, 13, 'PEDERNALES', 1317),
(152, 13, 'OLMEDO', 1318),
(153, 13, 'PUERTO L?PEZ', 1319),
(154, 13, 'JAMA', 1320),
(155, 13, 'JARAMIJ?', 1321),
(156, 13, 'SAN VICENTE', 1322),
(157, 14, 'MORONA', 1401),
(158, 14, 'GUALAQUIZA', 1402),
(159, 14, 'LIM?N INDANZA', 1403),
(160, 14, 'PALORA', 1404),
(161, 14, 'SANTIAGO', 1405),
(162, 14, 'SUC?A', 1406),
(163, 14, 'HUAMBOYA', 1407),
(164, 14, 'SAN JUAN BOSCO', 1408),
(165, 14, 'TAISHA', 1409),
(166, 14, 'LOGRO?O', 1410),
(167, 14, 'PABLO SEXTO', 1411),
(168, 14, 'TIWINTZA', 1412),
(169, 15, 'TENA', 1501),
(170, 15, 'ARCHIDONA', 1503),
(171, 15, 'EL CHACO', 1504),
(172, 15, 'QUIJOS', 1507),
(173, 15, 'CARLOS JULIO AROSEMENA TOLA', 1509),
(174, 16, 'PASTAZA', 1601),
(175, 16, 'MERA', 1602),
(176, 16, 'SANTA CLARA', 1603),
(177, 16, 'ARAJUNO', 1604),
(178, 17, 'QUITO', 1701),
(179, 17, 'CAYAMBE', 1702),
(180, 17, 'MEJIA', 1703),
(181, 17, 'PEDRO MONCAYO', 1704),
(182, 17, 'RUMI?AHUI', 1705),
(183, 17, 'SAN MIGUEL DE LOS BANCOS', 1707),
(184, 17, 'PEDRO VICENTE MALDONADO', 1708),
(185, 17, 'PUERTO QUITO', 1709),
(186, 18, 'AMBATO', 1801),
(187, 18, 'BA?OS DE AGUA SANTA', 1802),
(188, 18, 'CEVALLOS', 1803),
(189, 18, 'MOCHA', 1804),
(190, 18, 'PATATE', 1805),
(191, 18, 'QUERO', 1806),
(192, 18, 'SAN PEDRO DE PELILEO', 1807),
(193, 18, 'SANTIAGO DE P?LLARO', 1808),
(194, 18, 'TISALEO', 1809),
(195, 19, 'ZAMORA', 1901),
(196, 19, 'CHINCHIPE', 1902),
(197, 19, 'NANGARITZA', 1903),
(198, 19, 'YACUAMBI', 1904),
(199, 19, 'YANTZAZA (YANZATZA)', 1905),
(200, 19, 'EL PANGUI', 1906),
(201, 19, 'CENTINELA DEL C?NDOR', 1907),
(202, 19, 'PALANDA', 1908),
(203, 19, 'PAQUISHA', 1909),
(204, 20, 'SAN CRIST?BAL', 2001),
(205, 20, 'ISABELA', 2002),
(206, 20, 'SANTA CRUZ', 2003),
(207, 21, 'LAGO AGRIO', 2101),
(208, 21, 'GONZALO PIZARRO', 2102),
(209, 21, 'PUTUMAYO', 2103),
(210, 21, 'SHUSHUFINDI', 2104),
(211, 21, 'SUCUMB?OS', 2105),
(212, 21, 'CASCALES', 2106),
(213, 21, 'CUYABENO', 2107),
(214, 22, 'ORELLANA', 2201),
(215, 22, 'AGUARICO', 2202),
(216, 22, 'LA JOYA DE LOS SACHAS', 2203),
(217, 22, 'LORETO', 2204),
(218, 23, 'SANTO DOMINGO', 2301),
(219, 24, 'SANTA ELENA', 2401),
(220, 24, 'LA LIBERTAD', 2402),
(221, 24, 'SALINAS', 2403),
(222, 25, 'LAS GOLONDRINAS', 9001),
(223, 25, 'MANGA DEL CURA', 9003),
(224, 25, 'EL PIEDRERO', 9004);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`ID_CIUDAD`),
  ADD KEY `FK_RELATIONSHIP_6` (`ID_PROVINCIA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `ID_CIUDAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_PROVINCIA`) REFERENCES `provincia` (`ID_PROVINCIA`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

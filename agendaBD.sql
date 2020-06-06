-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 06-06-2020 a las 11:05:35
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agendaBD`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(64) NOT NULL,
  `empresa` varchar(64) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `direccion` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `empresa`, `telefono`, `email`, `direccion`) VALUES
(49, 'NATALIA FUENTES BRAVO', 'Everis', '756802156', '7zeit5d7z@lycos.de', 'RONDA MADRID, 43 (MADRID)'),
(50, 'FLORENTINO CHAVES JORGE', 'Carrefour', '646300266', '2wslqow83@btinternet.com', 'CORREDERA DE ESPAÑA, 24'),
(51, 'ELISABETH FRAILE OLIVER', 'Vodafone', '719428695', 'f0793dhxs6@aol.com', 'CUESTA REAL, 48, 19030, ALOVERA(GUADALAJARA)'),
(52, 'MARTIN CONTRERAS ESPINOSA', 'Prixma', '621191089', 'xde48dw86@lycos.at', 'RONDA REAL, 65, 50167, CASPE(ZARAGOZA)'),
(53, 'JUAN BAUTISTA LOZANO MENDOZA', 'Vea', '611387463', 'e0bynyfm@talk21.com', 'CARRERA IGLESIA, 79, 25640, TORREBESSES(LLEIDA)'),
(54, 'UNAI CARO GUZMAN', 'Impursa', '681412191', 'q3kgnkel@netscape.net', 'RAMBLA PEDRALBES, 53, 46620, CATARROJA(VALENCIA/VALÈNCIA)'),
(55, 'FRANCISCO MANUEL SALA POZO', 'Display', '758534327', '5miyly5mac@btinternet.com', 'RONDA REAL, 57, 10647, ALISEDA(CÁCERES)'),
(56, 'BERNARDO CASTELLANO VERA', 'Macro Print', '785587235', 'fe6ot8y0ja@teacher.com', 'VEREDA MADRID, 4, 28933, PINILLA DEL VALLE(MADRID)'),
(57, 'NOA FRANCO TAPIA', 'Lopst', '720555036', 'ljhpq1c6@post.com', 'TRAVESÍA CATALUNYA, 49, 20077, LIZARTZA(GIPUZKOA)'),
(58, 'MARIA PAZ VALERO PASTOR', 'Ticketet', '746398792', 'f1mb9jc57@msn.com', 'RAMBLA DE ESPAÑA, 7, 08045, SANT MARTÍ SARROCA(BARCELONA)'),
(59, 'Victor Hugo Aguilar', 'Everis', '627100491', 'victor03016@gmail.com', 'Diosa Tanit 5, 1D - Alicante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

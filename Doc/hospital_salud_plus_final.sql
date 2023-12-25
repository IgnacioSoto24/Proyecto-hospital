-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-12-2023 a las 21:38:45
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospital_salud_plus_final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `autor` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `cuerpo` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `imagen` longblob NOT NULL,
  `titulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombres` varchar(100) NOT NULL,
  `apellido1` varchar(100) NOT NULL,
  `apellido2` varchar(100) NOT NULL,
  `fechaNacim` date NOT NULL,
  `ciudadResid` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `rut` varchar(11) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombres`, `apellido1`, `apellido2`, `fechaNacim`, `ciudadResid`, `correo`, `rut`, `contraseña`) VALUES
('Jose Luis', 'Soto', 'Cifuentes', '1970-04-24', 'Viña del mar', 'nacho_2601@hotmail.com', '11546654-2', '$2y$10$JlZUpX/F3KobbPxobTQWfeUuP2gyM/1H16Zghii6vM9qYdULBYPK2'),
('Ignacio', 'Soto', 'Ceballos', '1999-01-26', 'Viña del mar', 'ignacios952@gmail.com', '19615260-1', '$2y$10$dBRLALl7T243kuFLd8jRl.Zipy0Fz6lEoqPab4mAmN5NGejQTTYY2'),
('Ignacio', 'Soto', 'Ceballos', '1999-01-26', 'Viña del mar', 'ignacios952@gmail.com', '19615260-2', '$2y$10$wfNbspo3PBVpUa1icUXrsO07aYBZBYwwaFG48puLMhiQuA4WkrGhO'),
('Ignacio', 'Soto', 'Ceballos', '1998-06-05', 'Viña del mar', 'ignacios952@gmail.com', '19615260-4', '$2y$10$UObU5QNhYUV6XpjLA.kFLOF8zGU9bSVK0QsS32AMpmDhfdkXLiBK2'),
('Ignacio', 'Soto', 'Ceballos', '1997-12-06', 'Viña del mar', 'ignacios952@gmail.com', '19615260-5', '$2y$10$oyokRjxQJr37rF2kvOwwzuDEwAQutCpYsYK6.NqhYhrnBI6acIpdO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`rut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

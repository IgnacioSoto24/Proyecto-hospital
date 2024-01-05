-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2024 a las 04:10:37
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
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `alergias` varchar(100) NOT NULL,
  `antecedentes` varchar(100) NOT NULL,
  `enfermedadesCroni` varchar(100) NOT NULL,
  `rut` varchar(11) NOT NULL,
  `medicamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ficha`
--

INSERT INTO `ficha` (`alergias`, `antecedentes`, `enfermedadesCroni`, `rut`, `medicamento`) VALUES
('pasto', 'tos', 'diabetes', '18925222-1', 'metformina 500ml');

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

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`autor`, `categoria`, `cuerpo`, `id`, `imagen`, `titulo`) VALUES
('Portal Prensa Salud | Grupo Prensa Digital', 'Salud', 'SANTIAGO, diciembre de 2023.-  Con la idea de promover la salud preventiva, Mediclic incorporó las n', 0, 0x6e6f7469636961312e6a7067, 'Mediclic incorpora personal trainer y meditación como nuevas especialidades médicas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `nombres` varchar(100) NOT NULL,
  `apellido1` varchar(100) NOT NULL,
  `apellido2` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL,
  `rut` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`nombres`, `apellido1`, `apellido2`, `cargo`, `contraseña`, `rut`) VALUES
('Jose Luis', 'Soto', 'Cifuentes', 'Medico', '$2y$10$0Tf.NMWmyj.PMFduiCoAFerKpCEamhmcVPXOCQ047KML34YiRzO2W', '11546654-2'),
('Luisa', 'Ceballos', 'Tizka', 'Medico', '$2y$10$cVwPGXSaNr25I4XBy/Zcy.yQvgukX4bwK1oDtG9FM.WjeIZ5sufBC', '16546963-2'),
('Ignacio', 'Soto', 'Ceballos', 'Administrador', '$2y$10$Yw.yT/Xg92BMy6El2sLgDubR5jIGsVTteZ6.8rBZT0QQ76Jy5oH/u', '19615260-1');

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
('Luisa', 'Ceballos', 'Naranjo', '1976-01-05', 'Viña del mar', 'luisa.ce_0501@hotmail.com', '13021963-2', '$2y$10$GW3EmxYvIBoUT4tOSUjEtecQCpFLNKWxHUrcqtRcL3szWOmZfkcwq'),
('Kendra', 'Montes', 'Tizka', '1994-08-27', 'Santiago', 'kendramtizka@gmail.com', '18925222-1', '$2y$10$po6eDxfEKOatQefuEVppIOVcHsZ1DNRLxlrASS824RDSbBiztnZwK');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`rut`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

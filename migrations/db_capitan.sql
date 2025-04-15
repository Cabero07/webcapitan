-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2025 a las 21:25:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_capitan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_matricula_estudiantil_10grado`
--

CREATE TABLE `tbl_matricula_estudiantil_10grado` (
  `id` int(11) NOT NULL,
  `ci` varchar(20) NOT NULL,
  `apellido1ro` varchar(50) NOT NULL,
  `apellido2do` varchar(50) NOT NULL,
  `nombre1ro` varchar(50) NOT NULL,
  `nombre2do` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `sexo` varchar(10) NOT NULL,
  `color_piel` varchar(20) DEFAULT NULL,
  `proc_soc_padre` varchar(50) DEFAULT NULL,
  `proc_soc_madre` varchar(50) DEFAULT NULL,
  `calle` varchar(50) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `apartamento` varchar(10) DEFAULT NULL,
  `piso` varchar(10) DEFAULT NULL,
  `entre_calle` varchar(50) DEFAULT NULL,
  `y_calle` varchar(50) DEFAULT NULL,
  `barrio` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) NOT NULL,
  `consejo_popular` varchar(50) DEFAULT NULL,
  `tomo` varchar(10) DEFAULT NULL,
  `folio` varchar(10) DEFAULT NULL,
  `numero_matricula` varchar(20) NOT NULL,
  `grado` varchar(20) NOT NULL,
  `grupo` varchar(10) DEFAULT NULL,
  `deficiencias` varchar(50) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_matricula_estudiantil_11grado`
--

CREATE TABLE `tbl_matricula_estudiantil_11grado` (
  `id` int(11) NOT NULL,
  `ci` varchar(20) NOT NULL,
  `apellido1ro` varchar(50) NOT NULL,
  `apellido2do` varchar(50) NOT NULL,
  `nombre1ro` varchar(50) NOT NULL,
  `nombre2do` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `sexo` varchar(10) NOT NULL,
  `color_piel` varchar(20) DEFAULT NULL,
  `proc_soc_padre` varchar(50) DEFAULT NULL,
  `proc_soc_madre` varchar(50) DEFAULT NULL,
  `calle` varchar(50) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `apartamento` varchar(10) DEFAULT NULL,
  `piso` varchar(10) DEFAULT NULL,
  `entre_calle` varchar(50) DEFAULT NULL,
  `y_calle` varchar(50) DEFAULT NULL,
  `barrio` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) NOT NULL,
  `consejo_popular` varchar(50) DEFAULT NULL,
  `tomo` varchar(10) DEFAULT NULL,
  `folio` varchar(10) DEFAULT NULL,
  `numero_matricula` varchar(20) NOT NULL,
  `grado` varchar(20) NOT NULL,
  `grupo` varchar(10) DEFAULT NULL,
  `deficiencias` varchar(50) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_matricula_estudiantil_12grado`
--

CREATE TABLE `tbl_matricula_estudiantil_12grado` (
  `id` int(11) NOT NULL,
  `ci` varchar(20) NOT NULL,
  `apellido1ro` varchar(50) NOT NULL,
  `apellido2do` varchar(50) NOT NULL,
  `nombre1ro` varchar(50) NOT NULL,
  `nombre2do` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `sexo` varchar(10) NOT NULL,
  `color_piel` varchar(20) DEFAULT NULL,
  `proc_soc_padre` varchar(50) DEFAULT NULL,
  `proc_soc_madre` varchar(50) DEFAULT NULL,
  `calle` varchar(50) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `apartamento` varchar(10) DEFAULT NULL,
  `piso` varchar(10) DEFAULT NULL,
  `entre_calle` varchar(50) DEFAULT NULL,
  `y_calle` varchar(50) DEFAULT NULL,
  `barrio` varchar(50) DEFAULT NULL,
  `municipio` varchar(50) NOT NULL,
  `consejo_popular` varchar(50) DEFAULT NULL,
  `tomo` varchar(10) DEFAULT NULL,
  `folio` varchar(10) DEFAULT NULL,
  `numero_matricula` varchar(20) NOT NULL,
  `grado` varchar(20) NOT NULL,
  `grupo` varchar(10) DEFAULT NULL,
  `deficiencias` varchar(50) DEFAULT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_profesores_preuniversitario`
--

CREATE TABLE `tbl_profesores_preuniversitario` (
  `id` int(11) NOT NULL,
  `ci` varchar(20) NOT NULL,
  `apellido1ro` varchar(50) NOT NULL,
  `apellido2do` varchar(50) NOT NULL,
  `nombre1ro` varchar(50) NOT NULL,
  `nombre2do` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `sexo` varchar(10) NOT NULL,
  `asignatura` varchar(50) NOT NULL,
  `calle` varchar(50) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `apartamento` varchar(10) DEFAULT NULL,
  `piso` varchar(10) DEFAULT NULL,
  `entre_calle` varchar(50) DEFAULT NULL,
  `y_calle` varchar(50) DEFAULT NULL,
  `barrio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_matricula_estudiantil_10grado`
--
ALTER TABLE `tbl_matricula_estudiantil_10grado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_matricula_estudiantil_11grado`
--
ALTER TABLE `tbl_matricula_estudiantil_11grado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_matricula_estudiantil_12grado`
--
ALTER TABLE `tbl_matricula_estudiantil_12grado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_profesores_preuniversitario`
--
ALTER TABLE `tbl_profesores_preuniversitario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_matricula_estudiantil_10grado`
--
ALTER TABLE `tbl_matricula_estudiantil_10grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_matricula_estudiantil_11grado`
--
ALTER TABLE `tbl_matricula_estudiantil_11grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_matricula_estudiantil_12grado`
--
ALTER TABLE `tbl_matricula_estudiantil_12grado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_profesores_preuniversitario`
--
ALTER TABLE `tbl_profesores_preuniversitario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-10-2017 a las 23:19:08
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db 2017`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Tipo_voluntariado`
--

CREATE TABLE `Tipo_voluntariado` (
  `id_voluntariado` int(4) NOT NULL,
  `nombre_voluntariado` varchar(20) NOT NULL,
  `descripcion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Tipo_voluntariado`
--

INSERT INTO `Tipo_voluntariado` (`id_voluntariado`, `nombre_voluntariado`, `descripcion`) VALUES
(1, 'acomp pedagogico', 'bla bla bla'),
(2, 'ESS', 'Economia social y solidaria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE `Usuario` (
  `id_usuario` int(4) NOT NULL,
  `nombre_usuario` varchar(18) NOT NULL,
  `clave` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Usuario` (`id_usuario`, `nombre_usuario`, `clave`) VALUES (NULL, 'nicolangiano', '*');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Voluntariados`
--

CREATE TABLE `Voluntariados` (
  `cant_voluntarios` int(5) NOT NULL,
  `horarios` varchar(40) NOT NULL,
  `id_espacio` int(4) NOT NULL,
  `id_voluntariado` int(4) NOT NULL,
  `nombre_espacio` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Voluntariados` (`cant_voluntarios`, `horarios`, `id_espacio`, `id_voluntariado`, `nombre_espacio`) VALUES ('5', 'mar-jue 17 a 21', NULL, '1', 'Univ Barrial');
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Tipo_voluntariado`
--
ALTER TABLE `Tipo_voluntariado`
  ADD PRIMARY KEY (`id_voluntariado`);

--
-- Indices de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `Voluntariados`
--
ALTER TABLE `Voluntariados`
  ADD PRIMARY KEY (`id_espacio`,`id_voluntariado`),
  ADD KEY `id_voluntariado` (`id_voluntariado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Tipo_voluntariado`
--
ALTER TABLE `Tipo_voluntariado`
  MODIFY `id_voluntariado` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `id_usuario` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Voluntariados`
--
ALTER TABLE `Voluntariados`
  MODIFY `id_espacio` int(4) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Voluntariados`
--
ALTER TABLE `Voluntariados`
  ADD CONSTRAINT `Voluntariados_ibfk_1` FOREIGN KEY (`id_voluntariado`) REFERENCES `Tipo_voluntariado` (`id_voluntariado`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

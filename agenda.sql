-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-06-2020 a las 23:48:35
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comandos`
--

CREATE TABLE `comandos` (
  `id_comando` int(11) NOT NULL,
  `descripcion_comando` varchar(45) DEFAULT NULL,
  `ruta_comando` varchar(45) DEFAULT NULL,
  `dispositivo_id_dispositivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dispositivo`
--

CREATE TABLE `dispositivo` (
  `id_dispositivo` int(11) NOT NULL,
  `descripcion_dispositivo` varchar(45) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `mac` varchar(20) DEFAULT NULL,
  `tipos_dispositivos_id_tipo_dispostivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dispositivo`
--

INSERT INTO `dispositivo` (`id_dispositivo`, `descripcion_dispositivo`, `ip`, `mac`, `tipos_dispositivos_id_tipo_dispostivo`) VALUES
(1, 'Prueba', '192.168.0.1', '20:50:.550', 8),
(2, 'fdfd', '45.45.45.', '45.45.45', 8),
(3, 'MAQUINA', '192.16.80.0', 'DDS12FD', 8),
(4, 'MAQUINA2', '192.16.8.0.0', '12.45.12.45.1', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico`
--

CREATE TABLE `historico` (
  `id_historico` int(11) NOT NULL,
  `fecha_hora_historico` datetime(6) DEFAULT NULL,
  `comandos_id_comando` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `panel_control`
--

CREATE TABLE `panel_control` (
  `id_panel_control` int(11) NOT NULL,
  `dispositivo_id_dispositivo` int(11) NOT NULL,
  `usuarios_id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `descripcion_permiso` varchar(20) DEFAULT NULL,
  `ruta_permiso` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_dispositivos`
--

CREATE TABLE `tipos_dispositivos` (
  `id_tipo_dispostivo` int(11) NOT NULL,
  `descripcion_tipo_dispositivo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos_dispositivos`
--

INSERT INTO `tipos_dispositivos` (`id_tipo_dispostivo`, `descripcion_tipo_dispositivo`) VALUES
(8, 'JOJ'),
(9, 'OTRODISPO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `nro_doc` varchar(20) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_x_permisos`
--

CREATE TABLE `usuarios_x_permisos` (
  `usuarios_id_usuario` int(11) NOT NULL,
  `permisos_id_permiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comandos`
--
ALTER TABLE `comandos`
  ADD PRIMARY KEY (`id_comando`),
  ADD KEY `fk_comandos_dispositivo1_idx` (`dispositivo_id_dispositivo`);

--
-- Indices de la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD PRIMARY KEY (`id_dispositivo`),
  ADD KEY `fk_dispositivo_tipos_dispositivos_idx` (`tipos_dispositivos_id_tipo_dispostivo`);

--
-- Indices de la tabla `historico`
--
ALTER TABLE `historico`
  ADD PRIMARY KEY (`id_historico`),
  ADD KEY `fk_historico_comandos1_idx` (`comandos_id_comando`);

--
-- Indices de la tabla `panel_control`
--
ALTER TABLE `panel_control`
  ADD PRIMARY KEY (`id_panel_control`),
  ADD KEY `fk_panel_control_dispositivo1_idx` (`dispositivo_id_dispositivo`),
  ADD KEY `fk_panel_control_usuarios1_idx` (`usuarios_id_usuario`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `tipos_dispositivos`
--
ALTER TABLE `tipos_dispositivos`
  ADD PRIMARY KEY (`id_tipo_dispostivo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuarios_x_permisos`
--
ALTER TABLE `usuarios_x_permisos`
  ADD PRIMARY KEY (`usuarios_id_usuario`,`permisos_id_permiso`),
  ADD KEY `fk_usuarios_has_permisos_permisos1_idx` (`permisos_id_permiso`),
  ADD KEY `fk_usuarios_has_permisos_usuarios1_idx` (`usuarios_id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comandos`
--
ALTER TABLE `comandos`
  MODIFY `id_comando` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  MODIFY `id_dispositivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `historico`
--
ALTER TABLE `historico`
  MODIFY `id_historico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `panel_control`
--
ALTER TABLE `panel_control`
  MODIFY `id_panel_control` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipos_dispositivos`
--
ALTER TABLE `tipos_dispositivos`
  MODIFY `id_tipo_dispostivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comandos`
--
ALTER TABLE `comandos`
  ADD CONSTRAINT `fk_comandos_dispositivo1` FOREIGN KEY (`dispositivo_id_dispositivo`) REFERENCES `dispositivo` (`id_dispositivo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `dispositivo`
--
ALTER TABLE `dispositivo`
  ADD CONSTRAINT `fk_dispositivo_tipos_dispositivos` FOREIGN KEY (`tipos_dispositivos_id_tipo_dispostivo`) REFERENCES `tipos_dispositivos` (`id_tipo_dispostivo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `historico`
--
ALTER TABLE `historico`
  ADD CONSTRAINT `fk_historico_comandos1` FOREIGN KEY (`comandos_id_comando`) REFERENCES `comandos` (`id_comando`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `panel_control`
--
ALTER TABLE `panel_control`
  ADD CONSTRAINT `fk_panel_control_dispositivo1` FOREIGN KEY (`dispositivo_id_dispositivo`) REFERENCES `dispositivo` (`id_dispositivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_panel_control_usuarios1` FOREIGN KEY (`usuarios_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios_x_permisos`
--
ALTER TABLE `usuarios_x_permisos`
  ADD CONSTRAINT `fk_usuarios_has_permisos_permisos1` FOREIGN KEY (`permisos_id_permiso`) REFERENCES `permisos` (`id_permiso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_has_permisos_usuarios1` FOREIGN KEY (`usuarios_id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

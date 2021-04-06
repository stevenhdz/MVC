-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 06-04-2021 a las 20:33:19
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `base`
--

CREATE TABLE `base` (
  `id` int(100) NOT NULL,
  `nombreP` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL,
  `fechaC` date NOT NULL,
  `fechaV` datetime NOT NULL,
  `referencia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `base`
--

INSERT INTO `base` (`id`, `nombreP`, `precio`, `categoria`, `stock`, `fechaC`, `fechaV`, `referencia`) VALUES
(2, 'sasaww11', 1222, 'df', 133333, '2021-04-06', '2021-04-07 14:03:13', 'dsdsd'),
(3, 'asas', 1222, 'dsds', 2323, '2021-04-06', '2020-10-10 00:00:00', 'ewe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `base`
--
ALTER TABLE `base`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `base`
--
ALTER TABLE `base`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

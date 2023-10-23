-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 22-10-2023 a las 19:07:58
-- Versión del servidor: 10.8.2-MariaDB-1:10.8.2+maria~focal
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrada`
--

CREATE TABLE `entrada` (
  `nombre_discoteca` varchar(50) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `id` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrada`
--

INSERT INTO `entrada` (`nombre_discoteca`, `nombre_usuario`, `fecha`, `id`, `precio`, `estado`) VALUES
('Moma', '', '2023-10-27', 1, 2, 'Vender'),
('Moma', '', '2023-10-28', 2, 2, 'Vender'),
('Stage Live', '', '2023-10-21', 3, 4, 'Vender'),
('Moma', 'eneko222', '2023-10-26', 4, 1, 'Vender'),
('Sonora', '', '2023-10-27', 5, 10, 'Vendido'),
('Moma', 'eneko222', '2023-11-30', 6, 20, 'Vender'),
('Sonora', '', '2023-10-28', 7, 5, 'Vendido'),
('Sonora', '', '2023-10-29', 8, 50, 'Vendido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre` varchar(50) NOT NULL,
  `dni` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `fecha nacimiento` date NOT NULL,
  `correo electronico` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `saldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre`, `dni`, `telefono`, `fecha nacimiento`, `correo electronico`, `usuario`, `contrasena`, `saldo`) VALUES
('Eneko', '79067255V', 666333222, '2002-10-04', 'enekogarcia222@gmail.com', 'eneko222', '12345678', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entrada`
--
ALTER TABLE `entrada`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entrada`
--
ALTER TABLE `entrada`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

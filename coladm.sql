-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2022 a las 02:08:51
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `congreso`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coladm`
--

CREATE TABLE `coladm` (
  `id` int(5) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `email` varchar(70) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `nivel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coladm`
--

INSERT INTO `coladm` (`id`, `nombre`, `email`, `pass`, `nivel`) VALUES
(1, 'maez', 'maez.aguilar@utp.ac.pa', 'e10adc3949ba59abbe56e057f20f883e', 1),
(2, 'jose gonzales', 'jose.gonzalez@utp.ac.pa', 'e10adc3949ba59abbe56e057f20f883e', 1),
(3, 'maez aguilar', 'maez.aguilar1@utp.ac.pa', 'e10adc3949ba59abbe56e057f20f883e', 2),
(4, 'jose gonzales', 'jose.gonzalez1@utp.ac.pa', 'e10adc3949ba59abbe56e057f20f883e', 2),
(5, 'esteban ramirez', 'esteban.ramirez@utp.ac.pa', 'e10adc3949ba59abbe56e057f20f883e', 1),
(6, 'brayan sanchez', 'brayan.sanchez@utp.ac.pa', 'e10adc3949ba59abbe56e057f20f883e', 1),
(7, 'esteban ramirez', 'estebanantonio695@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 2),
(8, 'brayan sanchez', 'brayan.sanchez1@utp.ac.pa', 'e10adc3949ba59abbe56e057f20f883e', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `coladm`
--
ALTER TABLE `coladm`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `coladm`
--
ALTER TABLE `coladm`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

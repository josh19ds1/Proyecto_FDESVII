-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2022 a las 00:54:24
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
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellidoM` varchar(25) DEFAULT NULL,
  `apellidoP` varchar(25) NOT NULL,
  `ocupacion` varchar(30) DEFAULT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `IEEE` varchar(25) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `Pais` varchar(25) DEFAULT NULL,
  `Provincia` varchar(30) DEFAULT NULL,
  `Distrito` varchar(30) DEFAULT NULL,
  `ciudad` varchar(150) DEFAULT NULL,
  `articulo` varchar(30) DEFAULT NULL,
  `IEU` varchar(150) DEFAULT NULL,
  `UDF` varchar(150) DEFAULT NULL,
  `dayins` datetime DEFAULT NULL,
  `costo` int(20) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `thoras` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `restablecer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidoM`, `apellidoP`, `ocupacion`, `cedula`, `IEEE`, `sexo`, `Pais`, `Provincia`, `Distrito`, `ciudad`, `articulo`, `IEU`, `UDF`, `dayins`, `costo`, `telefono`, `email`, `thoras`, `restablecer`) VALUES
(16, 'Maez Hansen', 'Vasquez', 'Aguilar', 'Estudiante', '8-859-737', 'dddsd2323', 'Transformer', 'PA', 'Panamá', 'Panamá', 'Ciudad', 'yyuu4454', 'Institucion', 'Unidad', NULL, 103, '507-8859-8859', 'maez.segundo@utp.ac.pa', NULL, ''),
(21, 'Maez Hansen', 'Vasquez', 'Aguilar', 'Estudiante', '8-859-737', 'IEEE', 'Helicoptero Apa', 'PA', 'Panamá', 'Panamá', 'Ciudad', 'articulo', 'Institucion', 'Unidad', NULL, 103, '507-8859-8859', 'random232@hotmail.com', NULL, ''),
(22, 'Maez2 Hansen2', 'Vasquez2', 'Aguilar2', 'Estudiante', '08-0859-00737', '', 'Masculino', 'PA', 'Panamá', 'Panamá', 'Ciudad2', '', 'Institucion2', 'Unidad2', NULL, 103, '507-8895-8895', 'jose2@hotmail.com', NULL, ''),
(23, 'Maez3', 'Vasquez3', 'Aguilar3', 'Autor', '8-0859-00737', '', 'Masculino', 'PA', 'Panamá', 'Panamá', 'Ciudad3', '', 'Ciudad35', 'Ciudad34', NULL, 234, '507-8859-8859', 'Ciudad2@hotmail.com', NULL, ''),
(24, 'Maez4', 'Vasquez4', 'Aguilar4', 'Investigador', '8-0859-00859', '', 'Transformer', 'PA', 'Panamá', 'Panamá', 'Ciudad4', '', 'Institucion4', 'Unidad4', NULL, 131, '507-8598-8598', 'juju@hotmail.com', NULL, ''),
(25, 'Maez5', 'Vasquez5', 'Aguilar5', 'Investigador', '08-0859-00859', '', 'Transformer', 'PA', 'Panamá', 'Panamá', 'Ciudad5', '', 'Institucion5', 'Unidad5', NULL, 131, '507-8859-8859', 'maez1-a1guilar@hotmail.com', NULL, ''),
(26, 'maez12 Hansen12', 'Vasquez12', 'Aguilar12', 'Investigador', '08-8589-25589', '', 'Transformer', 'PA', 'Panamá', 'Panamá', 'Ciudad12', '', 'Ins12', 'Uni12', NULL, 131, '507-8589-8859', 'maez1k1nill@gmail.com', NULL, ''),
(27, 'Maez13', 'Vasquez13', 'Ahuilar13', 'Autor', '08-0859-00737', '', 'Otros', 'PA', 'Panamá', 'Panamá', 'Ciudad13', '', 'Ciudad13', 'Ciudad13', NULL, 234, '507-8598-8589', 'joseprueba2@hotmail.com', NULL, ''),
(28, 'Aguilar20', 'Aguilar20', 'Aguilar20', 'Autor', '08-0859-00859', '', 'Masculino', 'PA', 'Panamá', 'Panamá', 'Aguilar20', '', 'Aguilar20', 'Aguilar20', NULL, 234, '507-8598-8598', 'estebanantonio695@gmail.com', NULL, ''),
(29, 'Aguilar21', 'Aguilar21', 'Aguilar21', 'Autor', '08-0859-00859', '', 'Masculino', 'PA', 'Panamá', 'Panamá', 'Aguilar21', '', 'Aguilar21', 'Aguilar21', NULL, 234, '507-8598-8598', 'mae2z-agu2ilar@hotmail.com', NULL, ''),
(30, 'Aguilar25', 'Aguilar25', 'Aguilar25', 'Docente', '08-0859-00859', '', 'Masculino', 'PA', 'Panamá', 'San Miguelito', 'Aguilar25', '', 'Aguilar25', 'Aguilar25', NULL, 144, '507-8598-8547', 'm3aez-ag3uilar@hotmail.com', NULL, ''),
(32, 'Aguilar30', 'Aguilar30', 'Aguilar30', 'Docente', '08-0859-00859', '', 'Masculino', 'PA', 'Los Santos', 'Las Tablas', 'Aguilar30', '', 'Aguilar30', 'Aguilar30', NULL, 144, '507-8859-8859', 'm5aez-agu5ilar@hotmail.com', NULL, ''),
(36, 'Aguilar34', 'Aguilar34', 'Aguilar34', 'Estudiante', '08-8598-88985', '', 'Masculino', 'PA', 'Coclé', 'La Pintada', 'Aguilar34', '', 'Aguilar34', 'Aguilar34', NULL, 103, '507-8856-2145', 'ma7ez-ag7uilar@hotmail.com', NULL, ''),
(39, 'Aguilar7', 'Aguilar7', 'Aguilar7', 'Investigador', '08-0859-00878', '', 'Masculino', 'PA', 'Veraguas', 'La Mesa', 'Aguilar7', '', 'Aguilar7', 'Aguilar7', NULL, 131, '507-6541-4789', '1maez-ag1uilar@hotmail.com', NULL, ''),
(42, 'Aguilar15', 'Aguilar15', 'Aguilar15', 'Autor', '08-0859-00854', '', 'Helicoptero Apa', 'PA', 'Herrera', 'Las Minas', 'Aguilar15', '', 'Aguilar15', 'Aguilar15', NULL, 234, '507-5647-9852', 'mae2z-agui3lar@hotmail.com', NULL, ''),
(44, 'AguilarA', 'AguilarA', 'AguilarA', 'Docente', '08-0859-00859', '', 'Helicoptero Apa', 'PA', 'Coclé', 'Antón', 'AguilarA', '', 'AguilarA', 'AguilarA', NULL, 144, '507-5634-7195', 'maez-aguilar@hotmail.com', NULL, ''),
(45, 'AguilaB', 'AguilaB', 'AguilaB', 'Investigador', '08-0859-00737', '', 'Transformer', 'PA', 'Chiriquí', 'Boquerón', 'AguilaB', '', 'AguilaB', 'AguilaB', NULL, 131, '507-7531-9517', 'maez1-aguilar@hotmail.com', NULL, ''),
(46, 'AguilarC', 'AguilarC', 'AguilarC', 'Autor', '08-0859-00737', '', 'Masculino', 'PA', 'Los Santos', 'Macaracas', 'AguilarC', '', 'AguilarC', 'AguilarC', NULL, 234, '507-8963-3214', 'maez23@hotmail.com', NULL, ''),
(48, 'AguilarD', 'AguilarD', 'AguilarD', 'Investigador', '08-0859-00875', '', 'Masculino', 'PA', 'Darién', 'Pinogana', 'AguilarD', '', 'AguilarD', 'AguilarD', NULL, 131, '507-8521-8547', 'maez-456@hotmail.com', NULL, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

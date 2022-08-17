-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2021 a las 10:18:29
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicio_tecnico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `IDART` int(11) NOT NULL,
  `IDC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `IDC` int(255) NOT NULL,
  `NOMBRE` text NOT NULL,
  `APELLIDO` text NOT NULL,
  `UBICACION` text NOT NULL,
  `CONTACTO` int(12) NOT NULL,
  `CANTIDAD` int(255) NOT NULL,
  `MARCA` varchar(50) NOT NULL,
  `OBSERVACION` text NOT NULL,
  `TIPO` text NOT NULL,
  `ESTADO` varchar(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`IDC`, `NOMBRE`, `APELLIDO`, `UBICACION`, `CONTACTO`, `CANTIDAD`, `MARCA`, `OBSERVACION`, `TIPO`, `ESTADO`) VALUES
(1, 'Oscar', 'Cáceres', 'Las palmas', 961040606, 1, 'Acer', 'a', 'Notebook', 'Disponible'),
(2, 'taina', 'lopez', 'santiago', 961040606, 2, 'Acer', 'se apaga solo', 'Notebook', 'Disponible'),
(11, 'simon', 'Vásquez', 'los loros 145', 961040606, 2, 'Asus', 'no enciende y hace ruidos raro entonces me queria preguntar si pueden asistir gracias', 'Notebook', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle servicio`
--

CREATE TABLE `detalle servicio` (
  `IDDETA` int(255) NOT NULL,
  `IDART` int(255) NOT NULL,
  `IDSER` int(255) NOT NULL,
  `PRECIO` int(255) NOT NULL,
  `DESCRIPCION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `IDHIS` int(255) NOT NULL,
  `IDDETA` int(255) NOT NULL,
  `IDUS` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `IDSER` int(255) NOT NULL,
  `IDUS` int(255) NOT NULL,
  `IDC` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IDUS` int(255) NOT NULL,
  `NOMBRE` text NOT NULL,
  `USUARIO` text NOT NULL,
  `CONTRASEÑA` varchar(50) NOT NULL,
  `CARGO` int(12) DEFAULT NULL,
  `CORREO` varchar(50) NOT NULL,
  `ESTADO` varchar(10) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IDUS`, `NOMBRE`, `USUARIO`, `CONTRASEÑA`, `CARGO`, `CORREO`, `ESTADO`) VALUES
(1, 'Gabriel', 'Skarch', '1234', 1, 'anonymusSkarch@gmail.com', '1'),
(2, 'Oscar2', 'Osque', '1234', 1, 'oscar@gmail.com', '1'),
(3, 'Oscar', 'Osque', '1234', 1, 'oscar@gmail.com', '1'),
(4, 'daniela', 'dani', '12134', 2, 'daniela@gmail.com', '1'),
(5, 'Patricio', 'pato', '123', 2, 'PATRICIO@GMAIL.COM', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`IDART`),
  ADD KEY `IDC` (`IDC`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IDC`);

--
-- Indices de la tabla `detalle servicio`
--
ALTER TABLE `detalle servicio`
  ADD PRIMARY KEY (`IDDETA`),
  ADD KEY `IDART` (`IDART`,`IDSER`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`IDHIS`),
  ADD KEY `IDDETA` (`IDDETA`,`IDUS`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`IDSER`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IDUS`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `IDC` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `detalle servicio`
--
ALTER TABLE `detalle servicio`
  MODIFY `IDDETA` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `IDHIS` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `IDSER` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDUS` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

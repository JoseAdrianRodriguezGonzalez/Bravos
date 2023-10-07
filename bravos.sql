-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2023 a las 16:11:49
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
-- Base de datos: `bravos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Telefono` varchar(10) CHARACTER SET ucs2 COLLATE ucs2_spanish_ci NOT NULL,
  `Contraseña` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Direccion` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Ciudad` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Estado` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `Pais` varchar(20) CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `Codigo postal` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `id` int(7) NOT NULL,
  `Correo` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Nombre`, `Apellidos`, `Telefono`, `Contraseña`, `Direccion`, `Ciudad`, `Estado`, `Pais`, `Codigo postal`, `id`, `Correo`) VALUES
('Jose Adrian', 'Rodriguez Gonzalez', '4646535669', '57bc23b5ff43e5b1b683853d4b8c2831', 'Privada vocacional 111', 'Salamanca', 'GUANAJUATO', 'México', '36700', 89, 'lepopardo@hotmail.com'),
('Pedro', 'García', '0464122082', '57bc23b5ff43e5b1b683853d4b8c2831', 'Tecolutla120', 'Salamanca', 'GUANAJUATO', 'Alemania', '2700', 121, 'jo.adr_rodriguez@hotmail.com'),
('Juan', 'Rodríguez', '4641220821', '57bc23b5ff43e5b1b683853d4b8c2831', 'Vocacional', 'Salamanca', 'Guanaujuato', 'México', '36750', 124, 'zerpardor@gmail.com'),
('Alan', 'Perez', '34567892', 'ba52fbe2da359d675ae02fb95d7f55dd', 'tampico', 'salama', '', '', '', 125, 'kerpador@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

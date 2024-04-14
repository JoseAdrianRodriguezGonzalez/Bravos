-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2024 a las 23:14:40
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
-- Estructura de tabla para la tabla `botín`
--

CREATE TABLE `botín` (
  `Material` text NOT NULL,
  `Forma` text NOT NULL,
  `Color` text NOT NULL,
  `Unidad` int(11) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `botín`
--

INSERT INTO `botín` (`Material`, `Forma`, `Color`, `Unidad`, `link`) VALUES
('Cuero', 'Obal', 'Crazy miel', -1, '-1'),
('Cuero', 'Obal', 'Crazy tabaco', -1, '-1'),
('Cuero', 'Obal', 'Crazy Chocolate', -1, '-1'),
('Cuero', 'Obal', 'Nobuck miel', -1, '-1'),
('Cuero', 'Obal', 'Crazy café', -1, '-1'),
('Poliuretano', 'Obal', 'Crazy miel', -1, '-1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tejidos`
--

CREATE TABLE `tejidos` (
  `Tipo de sombrero` text NOT NULL,
  `Color` text NOT NULL,
  `Nombre` text NOT NULL,
  `Medidas` text NOT NULL,
  `Calidad` text NOT NULL,
  `Precio` int(11) NOT NULL,
  `Unidad` int(11) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tejidos`
--

INSERT INTO `tejidos` (`Tipo de sombrero`, `Color`, `Nombre`, `Medidas`, `Calidad`, `Precio`, `Unidad`, `link`) VALUES
('Durango', 'Blanco', 'FlowerFull', 'Copa 12cm    Ala 11cm', '100x', 2500, 1, ''),
('Durango', 'Blanco', 'Randado Flower', 'Copa 12cm    Ala 11cm', '100x', 2500, 1, ''),
('Durango', 'Blanco', 'Rombos', 'Copa 12cm     Ala 11cm', '100x', 2500, 1, ''),
('Durango', 'Blanco', 'Randado', 'Copa 12cm    Ala 11cm', '100x', 2500, 1, ''),
('Durango', 'Blanco', 'Cross diamond', 'Copa 12cm    Ala 11cm', '100x', 2500, 1, ''),
('Durango', 'Blanco', 'Liso', 'Copa 12cm    Ala 11cm ', '100x', 2500, 1, ''),
('Durango', 'Blanco', 'Ojillo', 'Copa 12cm    Ala 11cm', '100x', 2500, 1, ''),
('Durango', 'Bicolor', 'Mountain', 'Copa 12cm    Ala 11cm', '100x', 2500, 1, ''),
('Durango', 'Bicolor', 'Hexagonal', 'Copa 12cm    Ala 11cm', '100x', 2500, 1, ''),
('Durango', 'Bicolor', 'Randado', 'Copa 12cm    Ala 11cm', '100x', 2500, 1, ''),
('Durango', 'Bicolor', 'Cross Ivory', 'Copa 12cm    Ala 11cm', '100x', 2500, 1, ''),
('Durango', 'Bicolor', 'Line', 'Copa 12cm    Ala 11cm', '100x', 2500, 1, ''),
('Durango', 'Bicolor', 'Diamante', 'Copa 12cm    Ala 11cm', '100x', 2500, 1, ''),
('Durango', 'Bicolor', 'Randado Diamante Ivory', 'Copa 12 cm Ala 11cm ', '100x', 2500, 1, ''),
('Durango', 'Blanco', 'Randado Star Ivory', 'Copa 12 cm Ala 11cm ', '100x', 2500, 1, ''),
('Durango', 'Blanco', 'Randado 3x3', 'Copa 12 cm Ala 11cm ', '100x', 2500, 1, ''),
('Georges', 'Blanco', 'FlowerFull', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Georges', 'Blanco', 'Randado Flower', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Georges', 'Blanco', 'Rombos', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Georges', 'Blanco', 'Randado', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Georges', 'Blanco', 'Cross diamond', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Georges', 'Blanco', 'Liso', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Georges', 'Blanco', 'Ojillo', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Georges', 'Bicolor', 'Mountain', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Georges', 'Bicolor', 'Hexagonal', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Georges', 'Bicolor', 'Randado', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Georges', 'Bicolor', 'Diagonal', 'Copa 11cm    Ala 11cm', '100x', 2500, -1, ''),
('Georges', 'Bicolor', 'Cross Ivory', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Georges', 'Bicolor', 'Line', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Georges', 'Bicolor', 'Diamante', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('George', 'Bicolor', 'Randado Diamante Ivory', 'Copa 11 cm Ala 11 cm', '100x', 2500, 1, ''),
('George', 'Blanco', 'Randado Star Ivory', 'Copa 11 cm Ala 11 cm', '100x', 2500, 1, ''),
('George', 'Blanco', 'Randado 3x3', 'Copa 11 cm Ala 11 cm', '100x', 2500, 1, ''),
('Western', 'Blanco', 'FlowerFull', 'Copa 14.5cm Ala 10.5cm ', '100x', 2500, 1, ''),
('Western', 'Blanco', 'Randado Flower', 'Copa 14.5cm Ala 10.5cm ', '100x', 2500, 1, ''),
('Western', 'Blanco', 'Rombos', 'Copa 14.5cm Ala 10.5cm ', '100x', 2500, 1, ''),
('Western', 'Blanco', 'Randado', 'Copa 14.5cm Ala 10.5cm ', '100x', 2500, 1, ''),
('Western', 'Blanco', 'Cross diamond', 'Copa 14.5cm Ala 10.5cm ', '100x', 2500, 1, ''),
('Western', 'Blanco', 'Liso', 'Copa 14.5cm Ala 10.5cm ', '100x', 2500, 1, ''),
('Western', 'Blanco', 'Ojillo', 'Copa 14.5cm Ala 10.5cm ', '100x', 2500, 1, ''),
('Western', 'Bicolor', 'Mountain', 'Copa 14.5cm Ala 10.5cm ', '100x', 2500, 1, ''),
('Western', 'Bicolor', 'Hexagonal', 'Copa 14.5cm Ala 10.5cm ', '100x', 2500, 1, ''),
('Western', 'Bicolor', 'Randado', 'Copa 14.5cm Ala 10.5cm ', '100x', 2500, 1, ''),
('Western', 'Bicolor', 'Cross Ivory', 'Copa 14.5cm Ala 10.5cm ', '100x', 2500, 1, ''),
('Western', 'Bicolor', 'Line', 'Copa 14.5cm Ala 10.5cm ', '100x', 2500, 1, ''),
('Western', 'Bicolor', 'Diamante', 'Copa 14.5cm Ala 10.5cm ', '100x', 2500, 1, ''),
('Open crown', 'Blanco', 'FlowerFull', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Open crown', 'Blanco', 'Randado Flower', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Open crown', 'Blanco', 'Rombos', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Open crown', 'Blanco', 'Randado', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Open crown', 'Blanco', 'Cross diamond', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Open crown', 'Blanco', 'Liso', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Open crown', 'Blanco', 'Ojillo', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Open crown', 'Bicolor', 'Mountain', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Open crown', 'Bicolor', 'Hexagonal', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Open crown', 'Bicolor', 'Randado', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Open crown', 'Bicolor', 'Cross Ivory', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Open crown', 'Bicolor', 'Line', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Open crown', 'Bicolor', 'Diamante', 'Copa 11cm    Ala 11cm', '100x', 2500, 1, ''),
('Open crown', 'Bicolor', 'Randado Diamante Ivory', 'Copa 11 cm Ala 11 cm', '100x', 2500, 1, ''),
('Open crown', 'Blanco', 'Randado Star Ivory', 'Copa 11 cm Ala 11 cm', '100x', 2500, 1, ''),
('Open crown', 'Blanco', 'Randado 3x3', 'Copa 11 cm Ala 11 cm', '100x', 2500, 1, ''),
('Open crown', 'Blanco', 'Rombos.x', 'Ala 11cm Copa 11 cm', '100x', 2100, 1, ''),
('Open crown', 'Blanco', 'Randado doble rombos', 'Ala 11cm Copa 11 cm', '100x', 2100, 1, ''),
('Open crown', 'Amarillo', 'Sisol', 'Ala 11cm Copa 11 cm', '100x', 1500, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `texana`
--

CREATE TABLE `texana` (
  `Tipo de sombrero` text NOT NULL,
  `Color` text NOT NULL,
  `Tamaño` text NOT NULL,
  `Calidad` text NOT NULL,
  `Precio` int(11) NOT NULL,
  `Unidad` int(11) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `texana`
--

INSERT INTO `texana` (`Tipo de sombrero`, `Color`, `Tamaño`, `Calidad`, `Precio`, `Unidad`, `link`) VALUES
('Durango', 'Negro', 'Copa 12cm    Ala 11cm', '8x', 3500, -1, ''),
('Durango', 'Chocolate', 'Copa 12cm    Ala 11cm', '8x', 3500, -1, ''),
('Durango', 'Silver Belly', 'Copa 12cm    Ala 11cm', '8x', 3500, -1, ''),
('Durango', 'Gris Plomo', 'Copa 12cm    Ala 11cm', '8x', 3500, -1, ''),
('Durango', 'Castor', 'Copa 12cm    Ala 11cm', '8x', 3500, -1, ''),
('Durango', 'Black', 'Copa 12cm    Ala 11cm', '10x', 5500, -1, ''),
('Durango', 'Silver Belly', 'Copa 12cm    Ala 11cm', '10x', 5500, -1, ''),
('Durango', 'Chocolate', 'Copa 12cm    Ala 11cm', '10x', 5500, -1, ''),
('Durango', 'Black', 'Copa 12cm    Ala 11cm', '20x', 5900, -1, ''),
('Durango', 'Chocolate', 'Copa 12cm    Ala 11cm', '20x', 5900, -1, ''),
('Durango', 'Silver Belly', 'Ala 10.5cm copa 12cm', '30x', 8500, -1, ''),
('Durango', 'Chocolate', 'ala  11 cop 12', '30x', 8500, -1, ''),
('Durango', 'Mist gray', 'ala 10.5 copa12', '30x', 8500, -1, ''),
('Durango ', 'Grizzly Silver belly', 'Ala 10.5 copa 12', '30x', 8500, -1, ''),
('Durango', 'Grizzly Gris plomo', 'Ala 11 copa 12', '30x', 8500, -1, ''),
('Durango ', 'Grizzly chocolate', 'Ala 11 copa 12', '30x', 8500, -1, ''),
('Durango ', 'black', 'Ala 11 copa 12', '30x', 8500, -1, ''),
('Durango', 'Castor', 'Ala 11 copa 12', '30x', 8500, -1, ''),
('Durango', 'Black', 'Copa 12 cm Ala 11cm ', '50x', 9000, -1, ''),
('Durango', 'Chocolate', 'Copa 12 cm Ala 11cm ', '50x', 9000, -1, ''),
('Durango', 'mist grey', 'Copa 12 cm Ala 11cm ', '50x', 9000, -1, ''),
('Georges', 'Black', 'Copa 11cm    Ala 11cm', '8x', 3500, -1, ''),
('Georges', 'Chocolate', 'Copa 11cm    Ala 11cm', '8x', 3500, -1, ''),
('Georges', 'Silver Belly', 'Copa 11cm    Ala 11cm', '8x', 3500, -1, ''),
('Georges', 'Gris Plomo', 'Copa 11cm    Ala 11cm', '8x', 3500, -1, ''),
('Georges', 'Mist grey', 'Copa 11cm    Ala 11cm', '8x', 3500, -1, ''),
('Georges', 'Black', 'Copa 11cm    Ala 11cm', '10x', 5500, -1, ''),
('Georges', 'Chocolate', 'Copa 11cm    Ala 11cm', '10x', 5500, -1, ''),
('Georges', 'Silver Belly', 'Copa 11cm    Ala 11cm', '10x', 5500, -1, ''),
('Georges', 'mist grey', 'Copa 11cm    Ala 11cm', '10x', 5500, -1, ''),
('Georges', 'Black', 'Copa 11cm    Ala 11cm', '20x', 5900, -1, ''),
('Georges', 'Chocolate', 'Copa 11cm    Ala 11cm', '20x', 5900, -1, ''),
('Georges', 'Black', 'Copa 11cm    Ala 11cm', '100x', 14500, -1, ''),
('Georges', 'Silver Belly', 'Copa 11cm    Ala 11cm', '100x', 14500, -1, ''),
('Georges', 'Mist grey', 'Copa 11cm    Ala 11cm', '100x', 14500, -1, ''),
('Georges', 'Chocolate', 'Copa 11cm    Ala 11cm', '100x', 14500, -1, ''),
('Georges', 'Black', 'Copa 11cm    Ala 11cm', '200x', 14500, -1, ''),
('Georges', 'mist grey', 'Copa 11cm    Ala 11cm', '200x', 14500, -1, ''),
('Western', 'Black', 'Copa 14.5cm Ala 10.5cm ', '8x', 3500, -1, ''),
('Western', 'Chocolate', 'Copa 14.5cm Ala 10.5cm ', '8x', 3500, -1, ''),
('Western', 'Silver Belly', 'Copa 14.5cm Ala 10.5cm ', '8x', 3500, -1, ''),
('Open crown', 'Negra con vivete turquesa', 'Ala 10.5cm copa 11cm', '6x', 2500, -1, ''),
('Open crown', 'Silver Belly con vivete café', 'Ala 10.5cm copa 11cm', '6x', 2500, -1, ''),
('Open crown', 'Roja con vivete negro', 'Ala 10.5cm copa 11cm', '6x', 2500, -1, ''),
('Open crown', 'Rosa pastel', 'Ala 10.5cm copa 11cm', '6x', 2500, -1, ''),
('Open crown', 'Azul rey', 'Ala 10.5cm copa 11cm', '6x', 2500, -1, ''),
('Open crown', 'Azul pastel', 'Ala 10.5cm copa 11cm', '6x', 2500, -1, ''),
('Open crown', 'Naranja siena', 'Ala 10.5cm copa 11cm', '6x', 2500, -1, ''),
('Open crown', 'Café claro', 'Ala 10.5cm copa 11cm', '6x', 2500, -1, ''),
('Open crown', 'Morado', 'Ala 10.5cm copa 11cm', '6x', 2500, -1, ''),
('Open crown', 'Black', 'Copa 11cm    Ala 11cm', '8x', 3500, -1, ''),
('Open crown', 'Azul navy', 'Copa 11cm    Ala 11cm', '8x', 3500, -1, ''),
('Open crown', 'Gris Plomo', 'Copa 11cm    Ala 11cm', '8x', 3500, -1, ''),
('Open crown', 'Chocolate', 'Copa 11cm    Ala 11cm', '8x', 3500, -1, ''),
('Open crown', 'Silver Belly', 'Copa 11cm    Ala 11cm', '8x', 3500, -1, ''),
('Open crown', 'azul Turquesa', 'Copa 11cm    Ala 11cm', '8x', 3500, -1, ''),
('Open crown', 'Amarillo', 'Copa 11cm    Ala 11cm', '8x', 3500, -1, ''),
('Open crown', 'Castor', 'Copa 11cm    Ala 11cm', '8x', 3500, -1, ''),
('Open crown', 'Chocolate', 'Copa 11cm    Ala 11cm', '20x', 5900, -1, ''),
('Open crown', 'Black', 'Copa 11cm    Ala 11cm', '20x', 5900, -1, '');

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
('Juan', 'Rodríguez', '4641220821', '57bc23b5ff43e5b1b683853d4b8c2831', 'Vocacional', 'Salamanca', 'Guanaujuato', 'México', '36750', 124, 'zerpardor@gmail.com');

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
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

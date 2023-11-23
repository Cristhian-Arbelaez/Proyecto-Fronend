-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2023 a las 06:31:15
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto-fronend`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `prc_ObtenerDatosDashboard` ()   BEGIN
DECLARE total_productos int;
DECLARE total_categorias int;
DECLARE total_proveedores int;

SET total_productos = (SELECT COUNT(*) FROM `producto` WHERE Precio > 0);
SET total_categorias = (SELECT COUNT(*) FROM `categoria` WHERE ID_Categoria > 0);
SET total_proveedores = (SELECT COUNT(*) FROM `proveedor` WHERE ID_Proveedor > 0);

SELECT IFNULL(total_productos,0) AS total_productos,
       IFNULL(total_categorias,0) AS total_categorias,
       IFNULL(total_proveedores,0) AS total_proveedores;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_Categoria` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID_Categoria`, `Nombre`, `Fecha`) VALUES
(1, 'Lácteos', '2023-11-22'),
(2, 'Carnes', '2023-11-22'),
(3, 'Frutas', '2023-11-22'),
(4, 'Verduras', '2023-11-22'),
(5, 'Licores', '2023-11-22'),
(6, 'Bebidas', '2023-11-22'),
(7, 'Panaderia', '2023-11-22'),
(8, 'Cuidado Personal', '2023-11-22'),
(9, 'Aseo Del Hogar', '2023-11-22'),
(10, 'Congelados', '2023-11-22'),
(11, 'Cuidado De La Salud', '2023-11-22'),
(12, 'Electrodomésticos', '2023-11-22'),
(13, 'Tecnología', '2023-11-22'),
(14, 'Jugetería', '2023-11-22'),
(15, 'Articulo Deportivo', '2023-11-22'),
(16, 'Ropa Para Hombre', '2023-11-22'),
(17, 'Ropa Para Mujer', '2023-11-22'),
(18, 'Papelería', '2023-11-22'),
(19, 'Herramientas', '2023-11-22'),
(20, 'Decoración Para El H', '2023-11-22'),
(21, 'Belleza', '2023-11-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_Producto` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Precio` int(11) NOT NULL,
  `ID_Proveedor` int(11) NOT NULL,
  `ID_Categoria` int(11) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_Producto`, `Nombre`, `Precio`, `ID_Proveedor`, `ID_Categoria`, `Fecha`) VALUES
(1, 'Pan', 1000, 1, 7, '2023-11-22'),
(2, 'Jamon', 4000, 5, 2, '2023-11-22'),
(3, 'Carne de Cerdo', 12000, 3, 2, '2023-11-22'),
(4, 'Carne de Res', 14000, 1, 2, '2023-11-22'),
(5, 'Limpido', 4500, 8, 9, '2023-11-22'),
(6, 'Tv', 1200000, 2, 12, '2023-11-22'),
(7, 'Computador Portatil', 2400000, 4, 13, '2023-11-22'),
(8, 'Cerveza Poker', 3000, 7, 5, '2023-11-22'),
(9, 'Jugo Hit', 4500, 10, 6, '2023-11-22'),
(10, 'Hielo', 5000, 20, 10, '2023-11-22'),
(11, 'Destornillador de Pa', 7800, 16, 19, '2023-11-22'),
(12, 'Manzana', 2000, 14, 3, '2023-11-22'),
(13, 'Queso', 5000, 3, 1, '2023-11-22'),
(14, 'Leche', 4000, 1, 1, '2023-11-22'),
(15, 'Juego de Pesas', 230000, 11, 15, '2023-11-22'),
(16, 'Falda', 45000, 13, 17, '2023-11-22'),
(17, 'Cuaderno', 1300, 4, 18, '2023-11-22'),
(18, 'Escuadra', 5600, 15, 18, '2023-11-22'),
(19, 'Bombillo Led', 3500, 2, 20, '2023-11-22'),
(20, 'Lampara', 200000, 4, 20, '2023-11-22'),
(22, 'Espinaca', 4600, 14, 4, '2023-11-23'),
(23, 'Maquillaje', 45000, 22, 21, '2023-11-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `ID_Proveedor` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`ID_Proveedor`, `Nombre`, `Fecha`) VALUES
(1, 'Éxito', '2023-11-22'),
(2, 'Alkosto', '2023-11-22'),
(3, 'Jumbo', '2023-11-22'),
(4, 'Home Center', '2023-11-22'),
(5, 'Tiendas D1', '2023-11-22'),
(6, 'Falabella', '2023-11-22'),
(7, 'Almacenes La 14', '2023-11-22'),
(8, 'Supermercados Ara', '2023-11-22'),
(9, 'Makro', '2023-11-22'),
(10, 'Justo&Bueno', '2023-11-22'),
(11, 'Flamingo', '2023-11-22'),
(12, 'Pepe Ganga', '2023-11-22'),
(13, 'Herpo', '2023-11-22'),
(14, 'Galeria', '2023-11-22'),
(15, 'Mercado Libre', '2023-11-22'),
(16, 'AliExpress', '2023-11-22'),
(17, 'Totto', '2023-11-22'),
(18, 'Tiendas Nike', '2023-11-22'),
(19, 'Tiendas Adidas', '2023-11-22'),
(20, 'Cencosud', '2023-11-22'),
(21, 'Olimpica', '2023-11-23'),
(22, 'Tiendas Isimo', '2023-11-23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_Categoria`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_Producto`),
  ADD KEY `FK_ID_Categoria` (`ID_Categoria`),
  ADD KEY `FK_ID_Proveedor` (`ID_Proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`ID_Proveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `ID_Proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`ID_Proveedor`) REFERENCES `proveedor` (`ID_Proveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`ID_Categoria`) REFERENCES `categoria` (`ID_Categoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

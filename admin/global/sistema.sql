-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-12-2022 a las 21:27:48
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `id` int(11) NOT NULL,
  `caja` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `caja`
--

INSERT INTO `caja` (`id`, `caja`, `estado`) VALUES
(1, 'General', 1),
(2, 'Secundario', 0),
(3, 'Tibur', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_p`
--

CREATE TABLE `categoria_p` (
  `id_categoria` int(11) NOT NULL,
  `nombre_c` varchar(80) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria_p`
--

INSERT INTO `categoria_p` (`id_categoria`, `nombre_c`, `estado`) VALUES
(1, 'Desayunos Típicos', 1),
(2, 'Guarniciones', 1),
(3, 'Platos Principales', 1),
(4, 'Bebidas', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_permisos`
--

CREATE TABLE `detalle_permisos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_permiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_permisos`
--

INSERT INTO `detalle_permisos` (`id`, `id_usuario`, `id_permiso`) VALUES
(4, 1, 1),
(5, 1, 2),
(6, 1, 5),
(8, 2, 1),
(9, 2, 2),
(10, 2, 3),
(11, 2, 4),
(12, 2, 5),
(19, 6, 1),
(20, 6, 2),
(21, 6, 3),
(22, 6, 4),
(23, 6, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(11) NOT NULL,
  `ciudad` varchar(250) NOT NULL,
  `departamento` varchar(250) NOT NULL,
  `distrito` varchar(250) NOT NULL,
  `ubicacion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombre_e` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `ruc` varchar(21) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `descripcion_e` varchar(100) NOT NULL,
  `logo_e` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `nombre_e`, `direccion`, `ruc`, `telefono`, `email`, `descripcion_e`, `logo_e`) VALUES
(1, 'Sabor a charapita Hay que ric', 'por ', '123456789', '32131', 'dfgdfgdfgf', 'tenemos mas de 10 años en el rubro de comida de la selva ', 'default.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `permiso` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `permiso`) VALUES
(1, 'usuarios'),
(2, 'usuarios_inactivo'),
(3, 'registrar_usuarios'),
(4, 'eliminar_usuarios'),
(5, 'cajas'),
(6, 'configuracion'),
(7, 'categorias'),
(8, 'platillos'),
(9, 'registrar_platillos'),
(10, 'platillos_inactivos'),
(11, 'eliminar_platillos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--

CREATE TABLE `platillos` (
  `id_platillos` int(11) NOT NULL,
  `nombre_p` varchar(100) NOT NULL,
  `descripcion_p` varchar(250) NOT NULL,
  `precio_p` decimal(10,2) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `imagen` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `platillos` (`id_platillos`, `nombre_p`, `descripcion_p`, `precio_p`, `id_categoria`, `imagen`, `estado`) VALUES
(1, 'Cecina Ranchera', 'Yucas fritas. plátanos fritos. jugo de papaya o café', '13.00', 1, 'cecina ranchera.png.jpg', 1),
(2, 'Chorizo Ranchero', 'Yucas fritas, plátanos fritos, jugo de papaya o café', '13.00', 1, 'imagen_2022-11-22_232201045.png.jpg', 1),
(3, 'Omelette de Cecina u Omelette de chorizo', 'Yucas fritas, plátanos fritos, jugo de papaya o café', '13.50', 1, 'omelet cecina.jpg.jpg', 1),
(4, 'Típico a la charapita', 'Delicioso Tamal de la Selva. Yucas fritas, plátanos fritos, jugo de papaya o café', '0.00', 1, 'tamal.jpg.jpg', 0),
(5, 'Bisteck de Lomo a lo Pobre(Junior)', 'acompañado de jugo de papaya o café', '17.50', 1, 'bisteck.jpg.jpg', 1),
(6, 'Humita Dulce', '----', '4.50', 2, 'Humitas-dulces-del-Peru.jpg.jpg', 1),
(7, 'Tamal Charapita', '----', '0.00', 2, 'tamal.jpg.jpg', 0),
(8, 'Porción de Cecina', '----', '19.00', 2, 'cecina.jpg.jpg', 1),
(9, 'Porción de chorizo', '----', '19.00', 2, 'chorizo.jpg.jpg', 1),
(10, 'Porción de Plátanos Fritos', '----', '9.50', 2, 'platano.jpg.jpg', 1),
(11, 'Porción de Yucas Fritas', '----', '8.50', 2, 'yuca.jpg.jpg', 1),
(12, 'Porción de Patacones', '----', '10.00', 2, 'patacon.jpg.jpg', 1),
(13, 'Porción de Tacacho', '----', '9.50', 2, 'tacacho.jpg.jpg', 1),
(14, 'Porción de Arroz', '----', '3.00', 2, 'arroz.jpg.jpg', 1),
(15, 'Juane de Gallina', '----', '22.00', 3, 'juane.jpg.jpg', 1),
(16, 'Sopa de Pelotas (Gallina)', '----', '19.00', 3, 'sopa.jpg.jpg', 1),
(17, 'Chicharrón de Pollo', 'Yucas fritas, plátanos fritos', '19.50', 3, 'chicharron pollo.jpg.jpg', 1),
(18, 'Pollo en Especies (Hierbas)', 'Yucas fritas, plátanos fritos y porción de arroz', '23.50', 3, 'pollo especie.jpg.jpg', 1),
(19, 'Pechuga a la Charapita', 'Yucas fritas, plátanos fritos y porción de arroz', '23.00', 3, 'pechuga.jpg.jpg', 1),
(20, 'Costillas de cerdos ahumado en salsa agridulce ', 'Ensalada, yucas fritas y porción de arroz', '36.50', 3, 'costillas.jpg.jpg', 1),
(21, 'Ceviche de Doncella', 'yucas y plátanos sancochados', '37.00', 3, 'ceviche doncella.jpg.jpg', 1),
(22, 'Chicharrón de Doncella o Dorado', 'Yucas fritas, plátanos fritos', '32.00', 3, 'chicharron de donce.jpg.jpg', 1),
(23, 'Bisteck de Doncella o Dorado', 'Yucas fritas, plátanos fritos y porción de arroz', '33.50', 3, 'bisteck donce.jpg.jpg', 1),
(24, 'Sudado de Doncella o Dorado', 'Yucas sancochadas, plátanos fritos y porción de arroz', '35.00', 3, 'sudado de doncella.jpg.jpg', 1),
(25, 'Chicharrón de Doncella o Dorado al Ajo', 'Yucas fritas, plátanos fritos y porción de arroz', '34.50', 3, 'dorado ajo.jpg.jpg', 1),
(26, 'Chilcano de Carachama', 'Yucas Sancochadas', '19.00', 3, 'chilcano carachama.jpg.jpg', 1),
(27, 'Chicharrón de Lagarto', 'Yucas fritas, plátanos fritos', '30.00', 3, 'lagarto.jpg.jpg', 1),
(28, 'Bisteck de Lagarto', 'Yucas fritas, plátanos fritos y porción de arroz', '31.00', 3, 'lagartob.jpg.jpg', 1),
(29, 'Bisteck de Zamaño', 'Yucas fritas, plátanos fritos y porción de arroz', '0.00', 3, 'zamaño.jpg.jpg', 0),
(30, 'Asado de Zamaño', 'Yucas fritas, plátanos fritos y porción de arroz', '36.50', 3, 'asado_zamaño.jpg.jpg', 1),
(31, 'Bisteck de Lomo', 'Yucas fritas, porción de arroz', '25.00', 3, 'bistec lomo.png.jpg', 1),
(32, 'Bisteck de Lomo a lo Pobre', 'Yucas fritas, plátanos fritos, porción de arroz y huevo frito', '27.00', 3, 'bistc pobre.jpg.jpg', 1),
(33, 'Bisteck de Lomo Enecebollada', 'Yucas fritas, plátanos fritos, porción de arroz y huevo frito', '28.00', 3, 'encebollada.jpg.jpg', 1),
(34, 'Cocona, Carambola, Maracuya (P)', 'Jarra Personal', '7.00', 4, 'cocona.jpg.jpg', 1),
(35, 'Camu Camu, Guanábana, Guayaba, Quito Quito, Tropical (P)', 'Jarra Personal', '8.00', 4, 'camu camu.jpg.jpg', 1),
(36, 'Cocona, Carambola, Maracuya (M)', 'Jarra Mediana', '13.00', 4, 'cocona.jpg.jpg', 1),
(37, 'Camu Camu, Guanábana, Guayaba, Quito Quito, Tropical (M)', 'Jarra Mediana', '15.00', 4, 'camu camu.jpg.jpg', 1),
(38, 'Cocona, Carambola, Maracuya (G)', 'Jarra Grande', '15.00', 4, 'cocona.jpg.jpg', 1),
(39, 'Camu Camu, Guanábana, Guayaba, Quito Quito, Tropical (G)', 'Jarra Grande', '18.00', 4, 'camu camu.jpg.jpg', 1),
(40, 'Café Pasado', '----', '4.50', 4, 'cafe.jpg.jpg', 1),
(41, 'Mates de Manzanilla, Anís y Coca', '----', '2.50', 4, 'manzanilla.jpg.jpg', 1),
(42, 'Jugo de Papaya', '----', '3.00', 4, 'papaya.jpg.jpg', 1),
(43, 'Gaseosa Inka Kola, Coca Cola', '500 ml.', '4.50', 4, 'inca-kola-gaseosas-normal-x-500-ml.png.jpg', 1),
(44, 'Cerveza Pilsen', '----', '7.50', 4, '20253489.png.jpg', 1),
(45, 'Cerveza Cusqueña Blanca', '----', '8.50', 4, 'cusqueña.jpg.jpg', 1),
(46, 'Cerveza Cusqueña Negra', '----', '9.00', 4, 'Cusquena_negra.png.jpg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `clave` varchar(150) NOT NULL,
  `id_caja` int(11) NOT NULL,
  `imagen` varchar(360) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `clave`, `id_caja`, `imagen`, `estado`) VALUES
(1, 'admin', 'Angel sifuentes', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 1, 'sabor2.jpg.jpg', 1),
(2, 'vida', 'Vida Informatico', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 1, '', 1),
(4, 'jhens', 'jhens smit', '5796aa3e57f4a1ff13ae19e0f2e206977957f6a375e936243aa9f4c50f54b827', 3, '', 1),
(6, 'ghost', 'Miller', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 2, '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_p`
--
ALTER TABLE `categoria_p`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `detalle_permisos`
--
ALTER TABLE `detalle_permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_permiso` (`id_permiso`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `platillos`
--
ALTER TABLE `platillos`
  ADD PRIMARY KEY (`id_platillos`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `categoria_p`
--
ALTER TABLE `categoria_p`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `detalle_permisos`
--
ALTER TABLE `detalle_permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `platillos`
--
ALTER TABLE `platillos`
  MODIFY `id_platillos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_permisos`
--
ALTER TABLE `detalle_permisos`
  ADD CONSTRAINT `detalle_permisos_ibfk_1` FOREIGN KEY (`id_permiso`) REFERENCES `permisos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detalle_permisos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

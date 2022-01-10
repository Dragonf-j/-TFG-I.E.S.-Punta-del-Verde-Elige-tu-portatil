-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2021 a las 21:18:02
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ordenadores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portatil`
--

CREATE TABLE `portatil` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `ram` int(50) NOT NULL,
  `almacenamiento` varchar(100) NOT NULL,
  `precio_amazon` varchar(100) NOT NULL,
  `precio_pcpcomponentes` varchar(100) NOT NULL,
  `enlace_amazon` varchar(100) NOT NULL,
  `enlace_pccomponetes` varchar(100) NOT NULL,
  `Descripcion` varchar(1000) NOT NULL,
  `Presupuesto` varchar(50) NOT NULL,
  `pulgadas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `portatil`
--

INSERT INTO `portatil` (`id`, `nombre`, `tipo`, `imagen`, `ram`, `almacenamiento`, `precio_amazon`, `precio_pcpcomponentes`, `enlace_amazon`, `enlace_pccomponetes`, `Descripcion`, `Presupuesto`, `pulgadas`) VALUES
(1, 'MSI Pulse GL76 11UEK-055XES', 'Gaming', 'MSI Pulse GL76 11UEK-055XES.jpg', 16, '1TB', '1499', '1499', 'https://www.amazon.es/MSI-Pulse-GL76-11UEK-055XES-RTX3060-6GB/dp/B095C25LYZ/ref=sr_1_1?__mk_es_ES=%C', 'https://www.pccomponentes.com/msi-pulse-gl76-11uek', '', 'elevado', ''),
(2, 'Acer Nitro 5 AN517-53', 'Gaming', '1141-acer-nitro-5-an517-53-intel-core-i5-11300h-8gb-512gb-ssd-gtx1650-173.jpg', 8, '512', '1000', '855', 'https://www.amazon.es/Acer-Nitro-AN515-55-Ordenador-i5-10300H/dp/B08KY6MSL3/ref=sr_1_1?__mk_es_ES=%C', 'https://www.pccomponentes.com/acer-nitro-5-an517-5', '', 'moderado', ''),
(3, 'Asus Zenbook Duo ', 'Workstation', '1.jpg', 16, '512GB', '1944', '1189', 'https://www.amazon.es/ASUS-Pantalla-dualLaptop-i7-1165G7-Capacitivo/dp/B08CR894QJ/ref=sr_1_5?__mk_es', 'https://www.pccomponentes.com/asus-zenbook-duo-ux4', '', 'elevado', ''),
(4, 'Acer Swift 3 SF314-59', 'Basico', 'Acer-Swift-3_SF314-59_Pink_03.png', 8, '256GB', '629', '628', 'https://www.amazon.es/Acer-Swift-Port%C3%A1til-i5-1135G7-Graphics/dp/B08SW2YLVX/ref=sr_1_1_sspa?__mk', 'https://www.pccomponentes.com/acer-swift-3-sf314-5', '', 'moderado', ''),
(5, 'Acer Spin 3', 'convertible', 'Acer-Spin-3_SP314-54N_WP_FP_Silver_modelmain.png', 8, '512', '599', '698', 'https://www.amazon.es/Acer-Spin-convertible-i3-1115G4-integrada/dp/B08SW199MG/ref=sr_1_1_sspa?__mk_e', 'https://www.pccomponentes.com/acer-spin-3-sp313-51', '', '', ''),
(7, 'Asus ROG Zephyrus Duo 15 GX550LXS-HF073T', 'Gaming', 'aus.jpg', 32, '1TB', '3500', '4493', 'https://www.amazon.es/ASUS-ROG-Zephyrus-GX550LXS-HF073T-Ordenador/dp/B08JHDH4R2/ref=sr_1_1?__mk_es_E', 'https://www.pccomponentes.com/asus-rog-zephyrus-duo-15-gx550lxs-hf073t-intel-core-i7-10875h-32gb-1tb', '', 'elevado', ''),
(8, 'Dell Vostro 5402', 'Workstation', '1699-dell-vostro-5402-intel-core-i5-1135g7-8gb-512gb-ssd-14.jpg', 8, '256', '680', '', 'https://www.amazon.es/Dell-Vostro-5402-Ordenador-Bluetooth/dp/B08SQKBXX6/ref=sr_1_1?__mk_es_ES=%C3%8', '', '', 'moderado', ''),
(9, 'Dell Vostro 5391', 'basico', 'dell-vostro-5391-intel-core-i7-10510u-8gb-256gb-ssd-mx250-133.jpg', 8, '256GB', '1523', '', 'https://www.amazon.es/s?k=Dell+Vostro+5391&__mk_es_ES=%C3%85M%C3%85%C5%BD%C3%95%C3%91&ref=nb_sb_noss', '', '', 'elevado', 'pequeño'),
(10, 'Lenovo IdeaPad Flex 5', 'Convertible', '61w6+i+4pbS._AC_SL1500_.jpg', 8, '512GB', '700', '', 'https://www.amazon.es/Lenovo-IdeaPad-Flex-Port%C3%A1til-Convertible/dp/B096KT69X1/ref=sr_1_6?__mk_es', '', '', 'moderado', 'pequeño'),
(11, 'Razer Blade 15 Advanced Model', 'Gaming', '4zu3_Razer_Blade_15_Advanced_Model_2020.jpg', 32, '1 TB', '3399', '', 'https://www.amazon.es/Razer-Blade-Advanced-Model-Processador/dp/B09HSDT2F5/ref=sr_1_1_sspa?__mk_es_E', '', 'Portátil de la marca razer: Color negro con teclado enespañol y con una gráfica RTX 3080 incorporada', 'elevado', 'medio'),
(15, 'HeroBook Plus', 'Básico', '61ra7K2T5nS._AC_SL1200_.jpg', 8, '250', '389', '', 'https://www.amazon.es/CHUWI-Ordenador-HeroBook-Plus-Ultrabook/dp/B0925JVNZ3/ref=sr_1_3_sspa?__mk_es_', '', 'Portátil de la marca chuwi con procesador intel celeron a 2,7Ghz', 'bajo', 'medio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portatiles_has_user`
--

CREATE TABLE `portatiles_has_user` (
  `email_user` varchar(50) NOT NULL,
  `id_portatil` int(11) NOT NULL,
  `Fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `portatiles_has_user`
--

INSERT INTO `portatiles_has_user` (`email_user`, `id_portatil`, `Fecha`) VALUES
('dragonf@prueba.com', 15, '2021-12-14 20:15:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `nombre` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`nombre`, `Email`, `Pass`) VALUES
('a', 'a@a.aa', '1234'),
('Dragonf', 'dragonf@prueba.com', '1234'),
('Dragonf', 'jmjejuan2@gmail.com', 'jesusyjose1A*'),
('Dragonf', 'jmjejuan@gmail.com', 'jesusyjose1A*'),
('Dragonf', 'prueba5@prueba.cpm', '1234'),
('Juan', 'prueba8@prueba.com', '1234'),
('Desi', 'TimeLady@prueba.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `portatil`
--
ALTER TABLE `portatil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `nombre_2` (`nombre`);

--
-- Indices de la tabla `portatiles_has_user`
--
ALTER TABLE `portatiles_has_user`
  ADD KEY `portatiles_has_user_ibfk_1` (`id_portatil`),
  ADD KEY `portatiles_has_user_ibfk_2` (`email_user`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `portatil`
--
ALTER TABLE `portatil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `portatiles_has_user`
--
ALTER TABLE `portatiles_has_user`
  ADD CONSTRAINT `portatiles_has_user_ibfk_1` FOREIGN KEY (`id_portatil`) REFERENCES `portatil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `portatiles_has_user_ibfk_2` FOREIGN KEY (`email_user`) REFERENCES `user` (`Email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

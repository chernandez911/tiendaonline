-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2014 a las 22:28:02
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tiendaonline`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `user` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(2, 'cristian', 'cristian');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre_categoria`) VALUES
(7, 'Cemento'),
(8, 'Pintura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `contrasena` varchar(255) DEFAULT NULL,
  `telefono` bigint(255) DEFAULT NULL,
  `celular` bigint(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellidos`, `email`, `usuario`, `contrasena`, `telefono`, `celular`, `fax`, `direccion`) VALUES
(8, 'Fabio', 'Novo', 'fabiotauro86@hotmail.com', 'fabio', 'fabio', 3103003932, 3103003932, '', 'Manzana D Casa#4'),
(9, 'Dana', 'Fuentes', 'danka@hotmail.com', '7e79bdc7be408156caa7383a6a791aa8181d3355', '7e79bdc7be408156caa7383a6a791aa8181d3355', 3118093419, 3118093419, '', 'Villa Manuela'),
(10, 'Maria', 'Fuentes', 'federica@gmail.com', 'e21fc56c1a272b630e0d1439079d0598cf8b8329', 'e21fc56c1a272b630e0d1439079d0598cf8b8329', 0, 3202569667, '', 'Manzana C casa#39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenesproductos`
--

CREATE TABLE IF NOT EXISTS `imagenesproductos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `imagen` varchar(255) DEFAULT NULL,
  `titulo` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `id_producto` int(255) NOT NULL,
  PRIMARY KEY (`id`,`id_producto`),
  KEY `fk_imagenesproductos_productos1` (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `imagenesproductos`
--

INSERT INTO `imagenesproductos` (`id`, `imagen`, `titulo`, `descripcion`, `id_producto`) VALUES
(4, 'teamo.fw.png', '', '', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineaspedido`
--

CREATE TABLE IF NOT EXISTS `lineaspedido` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `unidades` int(255) DEFAULT NULL,
  `id_pedido` int(255) NOT NULL,
  `id_producto` int(255) NOT NULL,
  PRIMARY KEY (`id`,`id_pedido`,`id_producto`),
  KEY `fk_lineaspedido_pedidos1` (`id_pedido`),
  KEY `fk_lineaspedido_productos1` (`id_producto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `lineaspedido`
--

INSERT INTO `lineaspedido` (`id`, `unidades`, `id_pedido`, `id_producto`) VALUES
(8, 10, 5, 8),
(9, 10, 5, 9),
(10, 1, 6, 9),
(11, 1, 6, 9),
(12, 1, 6, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(255) NOT NULL,
  `fecha` varchar(500) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`id_cliente`),
  KEY `fk_pedidos_clientes` (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id`, `id_cliente`, `fecha`, `estado`) VALUES
(4, 10, '1395186287', '2'),
(5, 10, '1395186540', '0'),
(6, 10, '1395190173', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `peso` int(255) DEFAULT NULL,
  `longitud` int(255) DEFAULT NULL,
  `anchura` int(255) DEFAULT NULL,
  `altura` int(255) DEFAULT NULL,
  `existencias` int(255) DEFAULT NULL,
  `estado_producto` int(255) DEFAULT NULL,
  `destacado` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_categoria`),
  KEY `fk_productos_categoria1` (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `peso`, `longitud`, `anchura`, `altura`, `existencias`, `estado_producto`, `destacado`, `id_categoria`) VALUES
(8, 'Cemento', 'Cemento Argos', 25000, 10, 10, 10, 10, 89, 1, 1, 7),
(9, 'Amor', 'Dana Katherine', 34000, 1, 10, 10, 10, 86, 1, 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE IF NOT EXISTS `registros` (
  `utc` int(100) NOT NULL,
  `ano` int(4) NOT NULL,
  `mes` int(2) NOT NULL,
  `dia` int(2) NOT NULL,
  `hora` int(2) NOT NULL,
  `minuto` int(2) NOT NULL,
  `segundo` int(2) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `navegador` varchar(255) NOT NULL,
  `pagina` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`utc`, `ano`, `mes`, `dia`, `hora`, `minuto`, `segundo`, `ip`, `navegador`, `pagina`) VALUES
(1395183772, 2014, 3, 19, 0, 2, 52, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395183774, 2014, 3, 19, 0, 2, 54, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395183777, 2014, 3, 19, 0, 2, 57, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395183817, 2014, 3, 19, 0, 3, 37, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395184975, 2014, 3, 19, 0, 22, 55, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395185397, 2014, 3, 19, 0, 29, 57, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395185398, 2014, 3, 19, 0, 29, 58, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395185411, 2014, 3, 19, 0, 30, 11, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395185978, 2014, 3, 19, 0, 39, 38, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395186004, 2014, 3, 19, 0, 40, 4, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395186133, 2014, 3, 19, 0, 42, 13, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395186170, 2014, 3, 19, 0, 42, 50, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395186247, 2014, 3, 19, 0, 44, 7, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395186263, 2014, 3, 19, 0, 44, 23, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395186274, 2014, 3, 19, 0, 44, 34, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395186477, 2014, 3, 19, 0, 47, 57, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395186479, 2014, 3, 19, 0, 47, 59, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395186518, 2014, 3, 19, 0, 48, 38, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395186531, 2014, 3, 19, 0, 48, 51, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395186541, 2014, 3, 19, 0, 49, 1, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395187694, 2014, 3, 19, 1, 8, 14, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395187705, 2014, 3, 19, 1, 8, 25, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395188180, 2014, 3, 19, 1, 16, 20, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395188183, 2014, 3, 19, 1, 16, 23, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395188187, 2014, 3, 19, 1, 16, 27, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395190143, 2014, 3, 19, 1, 49, 3, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395190144, 2014, 3, 19, 1, 49, 4, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395190153, 2014, 3, 19, 1, 49, 13, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395190159, 2014, 3, 19, 1, 49, 19, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395190167, 2014, 3, 19, 1, 49, 27, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395190175, 2014, 3, 19, 1, 49, 35, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395190314, 2014, 3, 19, 1, 51, 54, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395261947, 2014, 3, 19, 21, 45, 47, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395261949, 2014, 3, 19, 21, 45, 49, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395261972, 2014, 3, 19, 21, 46, 12, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395261996, 2014, 3, 19, 21, 46, 36, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395262001, 2014, 3, 19, 21, 46, 41, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395262008, 2014, 3, 19, 21, 46, 48, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395264427, 2014, 3, 19, 22, 27, 7, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395264584, 2014, 3, 19, 22, 29, 44, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395264596, 2014, 3, 19, 22, 29, 56, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395264616, 2014, 3, 19, 22, 30, 16, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395264617, 2014, 3, 19, 22, 30, 17, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395264625, 2014, 3, 19, 22, 30, 25, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395264939, 2014, 3, 19, 22, 35, 39, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395265951, 2014, 3, 19, 22, 52, 31, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395265994, 2014, 3, 19, 22, 53, 14, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395266218, 2014, 3, 19, 22, 56, 58, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395266321, 2014, 3, 19, 22, 58, 41, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395266322, 2014, 3, 19, 22, 58, 42, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267079, 2014, 3, 19, 23, 11, 19, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267083, 2014, 3, 19, 23, 11, 23, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267085, 2014, 3, 19, 23, 11, 25, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267090, 2014, 3, 19, 23, 11, 30, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267092, 2014, 3, 19, 23, 11, 32, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395267095, 2014, 3, 19, 23, 11, 35, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395267096, 2014, 3, 19, 23, 11, 36, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395267097, 2014, 3, 19, 23, 11, 37, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395267098, 2014, 3, 19, 23, 11, 38, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395267099, 2014, 3, 19, 23, 11, 39, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395267100, 2014, 3, 19, 23, 11, 40, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395267101, 2014, 3, 19, 23, 11, 41, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267102, 2014, 3, 19, 23, 11, 42, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267103, 2014, 3, 19, 23, 11, 43, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267104, 2014, 3, 19, 23, 11, 44, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267119, 2014, 3, 19, 23, 11, 59, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267134, 2014, 3, 19, 23, 12, 14, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395267137, 2014, 3, 19, 23, 12, 17, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267139, 2014, 3, 19, 23, 12, 19, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267143, 2014, 3, 19, 23, 12, 23, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395267145, 2014, 3, 19, 23, 12, 25, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395267147, 2014, 3, 19, 23, 12, 27, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395267148, 2014, 3, 19, 23, 12, 28, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267151, 2014, 3, 19, 23, 12, 31, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267311, 2014, 3, 19, 23, 15, 11, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395267312, 2014, 3, 19, 23, 15, 12, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267316, 2014, 3, 19, 23, 15, 16, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395267319, 2014, 3, 19, 23, 15, 19, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395267331, 2014, 3, 19, 23, 15, 31, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395268409, 2014, 3, 19, 23, 33, 29, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395268410, 2014, 3, 19, 23, 33, 30, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395268412, 2014, 3, 19, 23, 33, 32, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395268421, 2014, 3, 19, 23, 33, 41, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395268784, 2014, 3, 19, 23, 39, 44, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395269047, 2014, 3, 19, 23, 44, 7, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395269049, 2014, 3, 19, 23, 44, 9, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395269107, 2014, 3, 19, 23, 45, 7, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395269108, 2014, 3, 19, 23, 45, 8, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395269187, 2014, 3, 19, 23, 46, 27, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395269201, 2014, 3, 19, 23, 46, 41, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395269324, 2014, 3, 19, 23, 48, 44, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395269733, 2014, 3, 19, 23, 55, 33, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395269754, 2014, 3, 19, 23, 55, 54, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395269755, 2014, 3, 19, 23, 55, 55, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395270535, 2014, 3, 20, 0, 8, 55, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395270617, 2014, 3, 20, 0, 10, 17, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395270629, 2014, 3, 20, 0, 10, 29, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395270639, 2014, 3, 20, 0, 10, 39, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395270759, 2014, 3, 20, 0, 12, 39, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395270775, 2014, 3, 20, 0, 12, 55, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395270783, 2014, 3, 20, 0, 13, 3, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395270856, 2014, 3, 20, 0, 14, 16, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395270886, 2014, 3, 20, 0, 14, 46, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395270981, 2014, 3, 20, 0, 16, 21, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395270983, 2014, 3, 20, 0, 16, 23, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395271017, 2014, 3, 20, 0, 16, 57, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395271044, 2014, 3, 20, 0, 17, 24, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/confirmar.php'),
(1395271119, 2014, 3, 20, 0, 18, 39, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395271129, 2014, 3, 20, 0, 18, 49, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395271137, 2014, 3, 20, 0, 18, 57, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395271469, 2014, 3, 20, 0, 24, 29, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395271522, 2014, 3, 20, 0, 25, 22, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395271523, 2014, 3, 20, 0, 25, 23, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395271523, 2014, 3, 20, 0, 25, 23, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395271524, 2014, 3, 20, 0, 25, 24, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395271524, 2014, 3, 20, 0, 25, 24, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395271526, 2014, 3, 20, 0, 25, 26, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395271539, 2014, 3, 20, 0, 25, 39, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395271558, 2014, 3, 20, 0, 25, 58, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395271566, 2014, 3, 20, 0, 26, 6, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395271860, 2014, 3, 20, 0, 31, 0, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395272536, 2014, 3, 20, 0, 42, 16, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395272645, 2014, 3, 20, 0, 44, 5, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395272647, 2014, 3, 20, 0, 44, 7, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395272660, 2014, 3, 20, 0, 44, 20, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395272705, 2014, 3, 20, 0, 45, 5, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395272824, 2014, 3, 20, 0, 47, 4, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395272949, 2014, 3, 20, 0, 49, 9, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395272950, 2014, 3, 20, 0, 49, 10, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395273007, 2014, 3, 20, 0, 50, 7, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395328172, 2014, 3, 20, 16, 9, 32, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395328406, 2014, 3, 20, 16, 13, 26, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395328658, 2014, 3, 20, 16, 17, 38, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395328726, 2014, 3, 20, 16, 18, 46, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395328737, 2014, 3, 20, 16, 18, 57, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395328751, 2014, 3, 20, 16, 19, 11, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395328762, 2014, 3, 20, 16, 19, 22, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395329080, 2014, 3, 20, 16, 24, 40, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395329082, 2014, 3, 20, 16, 24, 42, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395329084, 2014, 3, 20, 16, 24, 44, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395329088, 2014, 3, 20, 16, 24, 48, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395329094, 2014, 3, 20, 16, 24, 54, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395329239, 2014, 3, 20, 16, 27, 19, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395329250, 2014, 3, 20, 16, 27, 30, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395329271, 2014, 3, 20, 16, 27, 51, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395329298, 2014, 3, 20, 16, 28, 18, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395330143, 2014, 3, 20, 16, 42, 23, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395330153, 2014, 3, 20, 16, 42, 33, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395330699, 2014, 3, 20, 16, 51, 39, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395330707, 2014, 3, 20, 16, 51, 47, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395330747, 2014, 3, 20, 16, 52, 27, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index2.php'),
(1395330749, 2014, 3, 20, 16, 52, 29, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395330757, 2014, 3, 20, 16, 52, 37, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395330774, 2014, 3, 20, 16, 52, 54, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395330785, 2014, 3, 20, 16, 53, 5, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395331241, 2014, 3, 20, 17, 0, 41, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395332133, 2014, 3, 20, 17, 15, 33, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395332388, 2014, 3, 20, 17, 19, 48, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395332810, 2014, 3, 20, 17, 26, 50, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395333200, 2014, 3, 20, 17, 33, 20, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36', '/tiendaonline/'),
(1395333356, 2014, 3, 20, 17, 35, 56, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395337588, 2014, 3, 20, 18, 46, 28, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395338640, 2014, 3, 20, 19, 4, 0, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395338730, 2014, 3, 20, 19, 5, 30, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395338973, 2014, 3, 20, 19, 9, 33, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395339092, 2014, 3, 20, 19, 11, 32, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395339180, 2014, 3, 20, 19, 13, 0, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395339289, 2014, 3, 20, 19, 14, 49, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395343602, 2014, 3, 20, 20, 26, 42, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395343619, 2014, 3, 20, 20, 26, 59, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395343752, 2014, 3, 20, 20, 29, 12, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395343752, 2014, 3, 20, 20, 29, 12, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395343773, 2014, 3, 20, 20, 29, 33, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395343876, 2014, 3, 20, 20, 31, 16, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395344143, 2014, 3, 20, 20, 35, 43, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395344398, 2014, 3, 20, 20, 39, 58, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395344414, 2014, 3, 20, 20, 40, 14, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395344460, 2014, 3, 20, 20, 41, 0, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395344492, 2014, 3, 20, 20, 41, 32, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php'),
(1395344507, 2014, 3, 20, 20, 41, 47, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/'),
(1395344512, 2014, 3, 20, 20, 41, 52, '::1', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:27.0) Gecko/20100101 Firefox/27.0', '/tiendaonline/index.php');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `imagenesproductos`
--
ALTER TABLE `imagenesproductos`
  ADD CONSTRAINT `fk_imagenesproductos_productos1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `lineaspedido`
--
ALTER TABLE `lineaspedido`
  ADD CONSTRAINT `fk_lineaspedido_pedidos1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_lineaspedido_productos1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_pedidos_clientes` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categoria1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

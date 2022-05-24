-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-05-2022 a las 01:20:52
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `labyermedic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `afp`
--

DROP TABLE IF EXISTS `afp`;
CREATE TABLE IF NOT EXISTS `afp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `afname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `afp`
--

INSERT INTO `afp` (`id`, `afname`) VALUES
(1, 'HABITAD'),
(2, 'POSITIVA'),
(3, 'HABITAD'),
(4, 'POSITIVA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

DROP TABLE IF EXISTS `areas`;
CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id`, `aname`) VALUES
(1, 'Sistemas'),
(2, 'Contabilidad'),
(3, 'RRHH'),
(4, 'DT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

DROP TABLE IF EXISTS `asistencias`;
CREATE TABLE IF NOT EXISTS `asistencias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc` int(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `asistencias`
--

INSERT INTO `asistencias` (`id`, `doc`, `fecha`, `hora`) VALUES
(1, 25813236, '2022-05-11', NULL),
(2, 25813236, '2022-05-11', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

DROP TABLE IF EXISTS `bancos`;
CREATE TABLE IF NOT EXISTS `bancos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`id`, `bname`) VALUES
(1, 'BBVA'),
(2, 'BCP'),
(3, 'INTERBANK'),
(4, 'BBVA'),
(5, 'BCP'),
(6, 'INTERBANK');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

DROP TABLE IF EXISTS `cargos`;
CREATE TABLE IF NOT EXISTS `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargos`
--

INSERT INTO `cargos` (`id`, `cname`) VALUES
(1, 'Sistemas'),
(2, 'RRHH'),
(3, 'Gerente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `ename`) VALUES
(1, 'Yermedic'),
(2, 'JJBoggio'),
(3, 'Yermedic'),
(4, 'JJBoggio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadoc`
--

DROP TABLE IF EXISTS `estadoc`;
CREATE TABLE IF NOT EXISTS `estadoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ecname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estadoc`
--

INSERT INTO `estadoc` (`id`, `ecname`) VALUES
(1, 'Soltero'),
(2, 'Casado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ename` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `ename`) VALUES
(1, 'Habilitado'),
(2, 'Deshabilitado'),
(3, 'Habilitado'),
(4, 'Deshabilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fpagos`
--

DROP TABLE IF EXISTS `fpagos`;
CREATE TABLE IF NOT EXISTS `fpagos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fpname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fpagos`
--

INSERT INTO `fpagos` (`id`, `fpname`) VALUES
(1, 'EFECTIVO'),
(2, 'DEPOSITO'),
(3, 'EFECTIVO'),
(4, 'DEPOSITO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parentescos`
--

DROP TABLE IF EXISTS `parentescos`;
CREATE TABLE IF NOT EXISTS `parentescos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parentescos`
--

INSERT INTO `parentescos` (`id`, `prname`) VALUES
(1, 'Padre'),
(2, 'Madre'),
(3, 'Hermano(a)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pensiones`
--

DROP TABLE IF EXISTS `pensiones`;
CREATE TABLE IF NOT EXISTS `pensiones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `psname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pensiones`
--

INSERT INTO `pensiones` (`id`, `psname`) VALUES
(1, 'AFP'),
(2, 'ONP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

DROP TABLE IF EXISTS `personal`;
CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) DEFAULT NULL,
  `papellido` varchar(255) DEFAULT NULL,
  `fk_tpdoc` int(11) DEFAULT NULL,
  `pdoc` varchar(20) DEFAULT NULL,
  `pnac` varchar(20) DEFAULT NULL,
  `pnacionalidad` varchar(255) DEFAULT NULL,
  `pmovil` varchar(9) DEFAULT NULL,
  `fk_estadoc` int(11) DEFAULT NULL,
  `fk_sexo` int(11) DEFAULT NULL,
  `pfam` int(5) DEFAULT NULL,
  `pdireccion` varchar(255) DEFAULT NULL,
  `pcemerg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `fk_ptc` int(11) DEFAULT NULL,
  `fk_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pdoc` (`pdoc`),
  KEY `fk_tpdoc_id` (`fk_tpdoc`),
  KEY `fk_estacoc_id` (`fk_estadoc`),
  KEY `fk_sexo_id` (`fk_sexo`),
  KEY `fk_ptc_id` (`fk_ptc`),
  KEY `fk_estados_id` (`fk_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `pname`, `papellido`, `fk_tpdoc`, `pdoc`, `pnac`, `pnacionalidad`, `pmovil`, `fk_estadoc`, `fk_sexo`, `pfam`, `pdireccion`, `pcemerg`, `fk_ptc`, `fk_estado`) VALUES
(1, 'Alison Raquel ', '', 1, '', '', '', '', 1, 1, 0, '', '123456', 1, NULL),
(3, 'Alison Raquel ', 'prueba', 1, '75388728', '2022-05-07', 'peruana', '960524905', 1, 1, 0, 'prueba direccion', '960524905', NULL, NULL),
(15, 'María Alexandra ', 'prueba', 1, '12346789', '2022-05-06', '', '', 1, 1, 0, '', '', 1, 1),
(16, 'wifi', 'luna', 1, '25813236', '26-08-1997', 'peruana', '960524905', 1, 1, 0, 'direccion de prueba', '960524905', 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rname`) VALUES
(1, 'Administrador'),
(2, 'RRHH'),
(3, 'RRHH');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexos`
--

DROP TABLE IF EXISTS `sexos`;
CREATE TABLE IF NOT EXISTS `sexos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sexos`
--

INSERT INTO `sexos` (`id`, `sname`) VALUES
(1, 'Masculino'),
(2, 'Femenino'),
(3, 'Masculino'),
(4, 'Femenino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpdoc`
--

DROP TABLE IF EXISTS `tpdoc`;
CREATE TABLE IF NOT EXISTS `tpdoc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tdname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tpdoc`
--

INSERT INTO `tpdoc` (`id`, `tdname`) VALUES
(1, 'DNI'),
(2, 'Carnet de extranjeria'),
(3, 'Pasaporte'),
(4, 'DNI'),
(5, 'Carnet de extranjeria'),
(6, 'Pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) DEFAULT NULL,
  `uape` varchar(255) DEFAULT NULL,
  `unick` varchar(255) DEFAULT NULL,
  `upass` varchar(12) DEFAULT NULL,
  `fk_rol` int(11) DEFAULT NULL,
  `fk_estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_rol_id` (`fk_rol`),
  KEY `fk_estado_id` (`fk_estado`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `uname`, `uape`, `unick`, `upass`, `fk_rol`, `fk_estado`) VALUES
(1, 'admin', 'Luna', 'wifi', '123456', 1, 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
  ADD CONSTRAINT `fk_estacoc_id` FOREIGN KEY (`fk_estadoc`) REFERENCES `estadoc` (`id`),
  ADD CONSTRAINT `fk_estados_id` FOREIGN KEY (`fk_estado`) REFERENCES `estados` (`id`),
  ADD CONSTRAINT `fk_ptc_id` FOREIGN KEY (`fk_ptc`) REFERENCES `parentescos` (`id`),
  ADD CONSTRAINT `fk_sexo_id` FOREIGN KEY (`fk_sexo`) REFERENCES `sexos` (`id`),
  ADD CONSTRAINT `fk_tpdoc_id` FOREIGN KEY (`fk_tpdoc`) REFERENCES `tpdoc` (`id`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_estado_id` FOREIGN KEY (`fk_estado`) REFERENCES `estados` (`id`),
  ADD CONSTRAINT `fk_rol_id` FOREIGN KEY (`fk_rol`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

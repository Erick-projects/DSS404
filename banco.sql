-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 24-03-2024 a las 04:08:53
-- Versión del servidor: 8.0.34
-- Versión de PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `banco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `IdCliente` int NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Dui` int NOT NULL,
  `Email` text NOT NULL,
  `IdCuenta` int NOT NULL,
  `nombreUsuario` varchar(100) DEFAULT NULL,
  `contraseña` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IdCliente`),
  KEY `IdCliente` (`IdCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`IdCliente`, `Nombres`, `Apellidos`, `Dui`, `Email`, `IdCuenta`, `nombreUsuario`) VALUES
(1, 'Alejandro Jose', 'Perez Hernandez', 987654321, 'Alejandro@gmail.com', 1, 'AlejoPerez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_bancaria`
--

DROP TABLE IF EXISTS `cuenta_bancaria`;
CREATE TABLE IF NOT EXISTS `cuenta_bancaria` (
  `IdCuenta` int NOT NULL AUTO_INCREMENT,
  `Saldo` int NOT NULL,
  `TipoDeCuenta` varchar(50) NOT NULL,
  `IdCliente` int NOT NULL,
  `IdMovimiento` int NOT NULL,
  PRIMARY KEY (`IdCuenta`),
  KEY `IdMovimiento` (`IdMovimiento`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cuenta_bancaria`
--

INSERT INTO `cuenta_bancaria` (`IdCuenta`, `Saldo`, `TipoDeCuenta`, `IdCliente`, `IdMovimiento`) VALUES
(1, 500, 'Cuenta De Ahorro', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movimientos`
--

DROP TABLE IF EXISTS `movimientos`;
CREATE TABLE IF NOT EXISTS `movimientos` (
  `IdMovimientos` int NOT NULL AUTO_INCREMENT,
  `TipoDeMovimiento` varchar(50) NOT NULL,
  `Monto` int NOT NULL,
  `Fecha` date NOT NULL,
  `IdCuenta` int NOT NULL,
  `IdCuentaDestino` int NOT NULL,
  PRIMARY KEY (`IdMovimientos`),
  KEY `IdCuenta` (`IdCuenta`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `movimientos`
--

INSERT INTO `movimientos` (`IdMovimientos`, `TipoDeMovimiento`, `Monto`, `Fecha`, `IdCuenta`, `IdCuentaDestino`) VALUES
(1, 'ABONO', 100, '2021-03-24', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

DROP TABLE IF EXISTS `prestamo`;
CREATE TABLE IF NOT EXISTS `prestamo` (
  `IdPrestamo` int NOT NULL AUTO_INCREMENT,
  `Monto` int NOT NULL,
  `Intereses` int NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Plazo` text NOT NULL,
  `IdUsuario` int NOT NULL,
  `IdCliente` int NOT NULL,
  PRIMARY KEY (`IdPrestamo`),
  UNIQUE KEY `IdCliente_2` (`IdCliente`),
  KEY `IdCliente` (`IdCliente`),
  KEY `IdCliente_3` (`IdCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursal`
--

DROP TABLE IF EXISTS `sucursal`;
CREATE TABLE IF NOT EXISTS `sucursal` (
  `IdSucursal` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(40) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `IdGerenteSucursal` int NOT NULL,
  PRIMARY KEY (`IdSucursal`),
  KEY `IdGerenteSucursal` (`IdGerenteSucursal`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `sucursal`
--

INSERT INTO `sucursal` (`IdSucursal`, `Nombre`, `Direccion`, `IdGerenteSucursal`) VALUES
(1, 'Banco de Agricultura Centro', 'San Salvador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `IdUsuario` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(40) NOT NULL,
  `Email` text NOT NULL,
  `Dui` int NOT NULL,
  `TipoUsuario` varchar(50) NOT NULL,
  `Estado` text NOT NULL,
  `IdSucursal` int NOT NULL,
  `nombreUsuario` varchar(100) DEFAULT NULL,
  `contraseña` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IdUsuario`, `Nombre`, `Email`, `Dui`, `TipoUsuario`, `Estado`, `IdSucursal`, `nombreUsuario`, `contraseña`) VALUES
(1, 'Mario', 'Mario@gmail.com', 1234559, 'Cajero', 'Activo', 1, 'Marioo\r\n', 'Mario123'),
(2, 'Julian', 'Julian@gmail.com', 741852963, 'Gerente', 'activo', 1, 'Julian', 'Julian');
COMMIT;

--
-- Restricciones para tablas volcadas
--
--
-- Filtros para la tabla `cuenta_bancaria`
--
ALTER TABLE `cuenta_bancaria`
  ADD CONSTRAINT `fk_cuenta_cliente` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`);

--
-- Filtros para la tabla `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `fk_movimientos_cuenta` FOREIGN KEY (`IdCuenta`) REFERENCES `cuenta_bancaria` (`IdCuenta`);

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `fk_prestamo_cliente` FOREIGN KEY (`IdCliente`) REFERENCES `cliente` (`IdCliente`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_sucursal` FOREIGN KEY (`IdSucursal`) REFERENCES `sucursal` (`IdSucursal`);
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

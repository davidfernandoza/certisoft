CREATE DATABASE IF NOT EXISTS `certificados`;
USE `certificados`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



CREATE TABLE `cargo` (
  `idCargo` int(11) NOT NULL,
  `NombreC` varchar(255) NOT NULL,
  `DescripcionC` varchar(255) DEFAULT NULL,
  `Secretaria_idSecretaria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------

--
-- Table structure for table `certificados`
--

CREATE TABLE `certificados` (
  `idcertificado` int(11) NOT NULL,
  `secretaria` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `subsecretaria` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `nombresecretario` varchar(60) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `cargosecretario` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `firma` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `lema` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `fax` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `pagina` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `certificados`
--

INSERT INTO `certificados` (`idcertificado`, `secretaria`, `subsecretaria`, `nombresecretario`, `cargosecretario`, `firma`, `lema`, `direccion`, `telefono`, `fax`, `pagina`, `correo`) VALUES
(1, 'GENERAL', 'RECURSOS HUMANOS', 'GUILLERMO ANTONIO VALENCIA CARDONA', 'subsecretario de recursos humanos', 'assets/images/firma-derecha2.jpg', 'SANTA ROSA DE CABAL NUESTRO OBJETIVO COMÚN', 'Carrera 14 Nº. 12-08 C.A.M', '3660600', '3660973', 'www.santarosadecabal-risaralda.gov.co', 'talentohumano@santarosadecabal-risaralda.gov.co');

-- --------------------------------------------------------

--
-- Table structure for table `contrato`
--

CREATE TABLE `contrato` (
  `idCE` int(11) NOT NULL,
  `Cargo_idCargo` int(11) NOT NULL,
  `Empleado_Cedula` varchar(10) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaFin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE `empleado` (
  `Cedula` varchar(10) NOT NULL,
  `NombreE` varchar(50) NOT NULL,
  `ApellidoE` varchar(50) NOT NULL,
  `Caja` VARCHAR(60) 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------

--
-- Table structure for table `salario`
--

CREATE TABLE `salario` (
  `Anio` int(11) NOT NULL,
  `Contrato_idCE` int(11) NOT NULL,
  `Salario` double DEFAULT NULL,
  `GastosRepresentacion` double 
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------

--
-- Table structure for table `secretaria`
--

CREATE TABLE `secretaria` (
  `idSecretaria` int(11) NOT NULL,
  `NombreS` varchar(255) NOT NULL,
  `DescripcionS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Telefono` varchar(45) DEFAULT NULL,
  `Email` varchar(45) NOT NULL,
  `Contrasena` blob NOT NULL,
  `Rol` enum('ADMINISTRADOR','REGULAR') NOT NULL,
  `Estado` enum('ACTIVO','INACTIVO') NOT NULL DEFAULT 'ACTIVO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `Nombre`, `Apellido`, `Telefono`, `Email`, `Contrasena`, `Rol`, `Estado`) VALUES
(1, 'GUILLERMO ANTONIO', 'VALENCIA CARDONA', '123', '123@123.com', 0x32366566336539303937396632313332613635306564636133323863633637333732386635666437333439636135313438363132616232383838376330333765663131323066316139623838313664323562333266313438386461643863386132643462386532633338623865653362666263373539303130353530663866354a744f306164756a55666f5563776e634d6130664e6d447a6a4c4b6a394a4b5a355433336d626e493872453d, 'ADMINISTRADOR', 'ACTIVO');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idCargo`),
  ADD KEY `fk_Cargo_Secretaria_idx` (`Secretaria_idSecretaria`);

--
-- Indexes for table `certificados`
--
ALTER TABLE `certificados`
  ADD PRIMARY KEY (`idcertificado`);

--
-- Indexes for table `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`idCE`),
  ADD KEY `fk_Cargo_has_Empleado_Empleado1_idx` (`Empleado_Cedula`),
  ADD KEY `fk_Cargo_has_Empleado_Cargo1_idx` (`Cargo_idCargo`);

--
-- Indexes for table `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`Cedula`);

--
-- Indexes for table `salario`
--
ALTER TABLE `salario`
  ADD PRIMARY KEY (`Anio`,`Contrato_idCE`),
  ADD KEY `fk_Salario_Contrato1_idx` (`Contrato_idCE`);

--
-- Indexes for table `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`idSecretaria`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificados`
--
ALTER TABLE `certificados`
  MODIFY `idcertificado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cargo`
--
ALTER TABLE `cargo`
  ADD CONSTRAINT `fk_Cargo_Secretaria` FOREIGN KEY (`Secretaria_idSecretaria`) REFERENCES `secretaria` (`idSecretaria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `fk_Cargo_has_Empleado_Cargo1` FOREIGN KEY (`Cargo_idCargo`) REFERENCES `cargo` (`idCargo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Cargo_has_Empleado_Empleado1` FOREIGN KEY (`Empleado_Cedula`) REFERENCES `empleado` (`Cedula`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `salario`
--
ALTER TABLE `salario`
  ADD CONSTRAINT `fk_Salario_Contrato1` FOREIGN KEY (`Contrato_idCE`) REFERENCES `contrato` (`idCE`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

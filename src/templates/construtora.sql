-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: construtora
-- ------------------------------------------------------
-- Server version	5.7.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Almoxarifado`
--

DROP TABLE IF EXISTS `Almoxarifado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Almoxarifado` (
  `idAlmoxarifado` int(11) NOT NULL,
  `adress` varchar(45) DEFAULT NULL,
  `capacity` varchar(45) DEFAULT NULL,
  `Login_idLogin` char(45) NOT NULL,
  PRIMARY KEY (`idAlmoxarifado`),
  KEY `fk_Almoxarifado_Login1_idx` (`Login_idLogin`),
  CONSTRAINT `fk_Almoxarifado_Login1` FOREIGN KEY (`Login_idLogin`) REFERENCES `Login` (`idLogin`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Almoxarifado`
--

LOCK TABLES `Almoxarifado` WRITE;
/*!40000 ALTER TABLE `Almoxarifado` DISABLE KEYS */;
INSERT INTO `Almoxarifado` VALUES (0,'Forno Alegre - Inferno','infinito','dummy');
/*!40000 ALTER TABLE `Almoxarifado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Login`
--

DROP TABLE IF EXISTS `Login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Login` (
  `idLogin` char(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `permission` int(11) DEFAULT NULL,
  PRIMARY KEY (`idLogin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Login`
--

LOCK TABLES `Login` WRITE;
/*!40000 ALTER TABLE `Login` DISABLE KEYS */;
INSERT INTO `Login` VALUES ('dummy','123',2),('Hommer','porco_aranha',1);
/*!40000 ALTER TABLE `Login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Obra`
--

DROP TABLE IF EXISTS `Obra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Obra` (
  `idObra` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `adress` varchar(45) DEFAULT NULL,
  `Login_idLogin` char(45) NOT NULL,
  PRIMARY KEY (`idObra`),
  KEY `fk_Obra_Login1_idx` (`Login_idLogin`),
  CONSTRAINT `fk_Obra_Login1` FOREIGN KEY (`Login_idLogin`) REFERENCES `Login` (`idLogin`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Obra`
--

LOCK TABLES `Obra` WRITE;
/*!40000 ALTER TABLE `Obra` DISABLE KEYS */;
INSERT INTO `Obra` VALUES (0,0,'Forno Alegre - Inferno 2','Hommer');
/*!40000 ALTER TABLE `Obra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Recurso`
--

DROP TABLE IF EXISTS `Recurso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Recurso` (
  `CodigoRecurso` int(11) NOT NULL,
  `Descricao` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`CodigoRecurso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Recurso`
--

LOCK TABLES `Recurso` WRITE;
/*!40000 ALTER TABLE `Recurso` DISABLE KEYS */;
/*!40000 ALTER TABLE `Recurso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Solicitacoes`
--

DROP TABLE IF EXISTS `Solicitacoes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Solicitacoes` (
  `idObra` int(11) NOT NULL,
  `codigoRecurso` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`idObra`,`codigoRecurso`),
  KEY `fk_codRecurso` (`codigoRecurso`),
  CONSTRAINT `fk_codRecurso` FOREIGN KEY (`codigoRecurso`) REFERENCES `Recurso` (`CodigoRecurso`),
  CONSTRAINT `fk_idObra` FOREIGN KEY (`idObra`) REFERENCES `Obra` (`idObra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Solicitacoes`
--

LOCK TABLES `Solicitacoes` WRITE;
/*!40000 ALTER TABLE `Solicitacoes` DISABLE KEYS */;
/*!40000 ALTER TABLE `Solicitacoes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Troca de Recursos`
--

DROP TABLE IF EXISTS `Troca de Recursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Troca de Recursos` (
  `Almoxarifado_idAlmoxarifado` int(11) NOT NULL,
  `Obra_idObra` int(11) NOT NULL,
  `Recurso_CodigoRecurso` int(11) NOT NULL,
  `Quantidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`Almoxarifado_idAlmoxarifado`,`Obra_idObra`),
  KEY `fk_Almoxarifado_has_Obra_Obra1_idx` (`Obra_idObra`),
  KEY `fk_Almoxarifado_has_Obra_Almoxarifado1_idx` (`Almoxarifado_idAlmoxarifado`),
  KEY `fk_Troca de Recursos_Recurso1_idx` (`Recurso_CodigoRecurso`),
  CONSTRAINT `fk_Almoxarifado_has_Obra_Almoxarifado1` FOREIGN KEY (`Almoxarifado_idAlmoxarifado`) REFERENCES `Almoxarifado` (`idAlmoxarifado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Almoxarifado_has_Obra_Obra1` FOREIGN KEY (`Obra_idObra`) REFERENCES `Obra` (`idObra`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Troca de Recursos_Recurso1` FOREIGN KEY (`Recurso_CodigoRecurso`) REFERENCES `Recurso` (`CodigoRecurso`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Troca de Recursos`
--

LOCK TABLES `Troca de Recursos` WRITE;
/*!40000 ALTER TABLE `Troca de Recursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `Troca de Recursos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-27 18:05:10

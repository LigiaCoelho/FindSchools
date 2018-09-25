-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: findschools
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.35-MariaDB

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
-- Table structure for table `tb_found`
--

DROP TABLE IF EXISTS `tb_found`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_found` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cidade` varchar(60) NOT NULL,
  `ano_letivo` int(8) NOT NULL,
  `turno` enum('vespertino','matutino','noturno') NOT NULL,
  `escola` varchar(60) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `telefone` varchar(10) NOT NULL,
  `vagas` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_found` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_found`
--

LOCK TABLES `tb_found` WRITE;
/*!40000 ALTER TABLE `tb_found` DISABLE KEYS */;
INSERT INTO `tb_found` VALUES (22,'Sobradinho',2018,'matutino','Escola Classe 13','Ar 05 Ae 01, Sobradinho II - Sobradinho, Brasília - DF','(61) 3485-',40),(23,'Taguatinga',2018,'vespertino','Escola Classe 12','Qnh 06/07 Ae, Taguatinga Norte - Taguatinga, Brasília - DF','613354-568',30),(24,'Gama',2018,'vespertino','Centro de Ensino Fundamental 11 do Gama (CEF 11)','Quadra 01, Área Especial - Setor Sul, Brasília - DF',' (061) 390',45);
/*!40000 ALTER TABLE `tb_found` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-14 19:31:17

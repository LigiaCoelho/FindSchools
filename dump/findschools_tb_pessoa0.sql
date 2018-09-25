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
-- Table structure for table `tb_pessoa`
--

DROP TABLE IF EXISTS `tb_pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pessoa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_resp` text NOT NULL,
  `cpf_resp` varchar(20) NOT NULL,
  `dn_resp` varchar(11) NOT NULL,
  `tel_resp` int(12) NOT NULL,
  `email_resp` varchar(20) NOT NULL,
  `nome_aluno` text NOT NULL,
  `cpf_aluno` int(11) NOT NULL,
  `dn_aluno` varchar(12) NOT NULL,
  `grau` text NOT NULL,
  `protocolo` varbinary(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_pessoa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pessoa`
--

LOCK TABLES `tb_pessoa` WRITE;
/*!40000 ALTER TABLE `tb_pessoa` DISABLE KEYS */;
INSERT INTO `tb_pessoa` VALUES (32,'Ligia','1231234','',0,'teste','2342342423',12313213,'','',''),(33,'Ligia Coelho Martins','295.307.720-09','14041997',984658231,'ligiacmartins97@gmai','Fulano',602149,'','','');
/*!40000 ALTER TABLE `tb_pessoa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-14 19:31:18

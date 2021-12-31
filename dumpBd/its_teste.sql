CREATE DATABASE  IF NOT EXISTS `its_teste` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `its_teste`;
-- MySQL dump 10.13  Distrib 5.7.36, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: its_teste
-- ------------------------------------------------------
-- Server version	5.6.44

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresa` int(255) DEFAULT NULL,
  `nome` varchar(450) DEFAULT NULL,
  `cpf_cnpj` varchar(45) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  `telefone` varchar(45) DEFAULT NULL,
  `email` varchar(450) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `endereco` varchar(45) NOT NULL,
  `numero` int(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `bairro` varchar(150) DEFAULT NULL,
  `cidade` varchar(150) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `rg` varchar(140) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,1,'rafael','42756401870','2021-10-29 12:00:00','4199995412','rafael_@gmail.com','19915501','alecio de souza',101,NULL,NULL,NULL,NULL,NULL),(2,1,'fteste','2316165165165','2021-10-29 12:00:00','4169656569','skhfidu@fdjkvd','19915501','jkzshvfdsi',101,NULL,NULL,NULL,'1994-05-25',NULL),(3,1,'teste3','427.564.018-70','2021-10-29 12:00:00','64656516','fdzfbdbd','23166516','fgsbhrtbtrs',231656,NULL,NULL,NULL,'2022-02-05',NULL),(4,1,'teste4','3216516516165','2021-12-29 20:50:00','56165165','nsaihiashfpia','216565','sndnsovcnos',101,NULL,NULL,NULL,'2021-12-29',NULL),(5,2,'teste5','263165165','2002-03-08 05:30:00','216546','ujshfvioshoigvo','15161616','oidsjgoesg',516,NULL,NULL,NULL,'2022-02-04',NULL),(6,20,'rafael','427.564.018-70','2021-12-29 08:50:00','14991052178','cfgxnhfdgjn','19915-501','Avenida Servidor Alício de Souza Bitencourt',202,NULL,NULL,NULL,'0000-00-00',''),(8,1,'Teste','165.116.516-51561','2002-03-08 10:00:00','(16) 5161-6165','dsgbtrstbhrt','19915-501','Avenida Servidor Alício de Souza Bitencourt',101,NULL,NULL,NULL,'2002-02-25','12.516.156-1'),(9,8,'SS TEC','211.261.654-16165','2021-12-31 18:57:02','(56) 6516-5165','bfhkds@gmail.com','19915501','alecio de souza bitencourt',202,NULL,NULL,NULL,'1995-04-14','56.165.165-1'),(10,8,'ss','12.131.351/6351-61','2021-12-31 19:13:11','(16) 5165-1651','guiguvuuyguy','19915-501','Avenida Servidor Alício de Souza Bitencourt',101,NULL,NULL,NULL,'1994-05-25','15.651.651-6'),(11,0,'ss','121.313.516-35161','2021-12-02 19:13:11','(16) 5165-1651','guiguvuuyguy','19915-501','Avenida Servidor Alício de Souza Bitencourt',10,NULL,NULL,NULL,'0510-00-20','15.651.651-6'),(12,0,'SDD','116.516.516-51651','2021-12-31 22:14:49','(56) 1561-6161','dfgbsrtdbh@gdsfbhtrf.com','19915-510','Rua Alcides Chierentin',202,NULL,NULL,NULL,'1994-05-25','65.695.98'),(13,7,'RR','12.122.222/2222-22','2021-12-31 22:18:30','(34) 654','fdnhfgdned','19915-501','Avenida Servidor Alício de Souza Bitencourt',101,NULL,NULL,NULL,'1995-05-25','51.654.194-9');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `id_empresa` int(45) NOT NULL AUTO_INCREMENT,
  `uf` varchar(145) DEFAULT NULL,
  `razao_social` varchar(450) DEFAULT NULL,
  `cnpj` varchar(450) DEFAULT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` VALUES (2,'AL','rafael','16.165.165/1651-56'),(3,'BA','SA Development','98.498.489/4984-98'),(4,'SP','Teste','28.497.491/0001-47'),(5,'CE','STS','92.259.595/9595-55'),(6,'AL','Teste2','16.515.616/5161-65'),(7,'','teste5','16.516.561/5651-65'),(8,'AL','SS soluções','51.651.651/5614-44'),(9,'PR','nao pode salvar se for menor de idade','16.516.516/1651-66'),(10,'PR','RS soluções','56.565.156/1614-65');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-31 19:29:20

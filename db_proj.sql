-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sigere
-- ------------------------------------------------------
-- Server version	5.7.9

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
-- Table structure for table `tb_data`
--

DROP TABLE IF EXISTS `tb_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_data` (
  `data_id` int(11) NOT NULL AUTO_INCREMENT,
  `data_arduino` double DEFAULT NULL,
  `data_user_id_fk` int(11) NOT NULL,
  `data_eletronic_id_fk` int(11) NOT NULL,
  `data_hora` date DEFAULT NULL,
  `data_valor_real` float DEFAULT NULL,
  PRIMARY KEY (`data_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_data`
--

LOCK TABLES `tb_data` WRITE;
/*!40000 ALTER TABLE `tb_data` DISABLE KEYS */;
INSERT INTO `tb_data` VALUES (1,0.5548,19,5,'2017-12-08',0.5),(2,0.5548,19,5,'2017-12-03',0.5),(3,0.5548,19,3,'2017-12-04',2.5),(4,0.5548,19,3,'2017-12-08',0.62),(5,0.5548,19,1,'2017-12-08',0.65),(6,0.5548,19,1,'2017-12-08',0.25),(7,0.5548,19,1,'2017-12-09',0.5),(8,0.5548,19,1,'2017-12-10',0.15),(9,0.5548,19,1,'2017-12-07',0.5),(10,0.5548,19,1,'2017-11-11',0.41),(11,0.5548,19,1,'2017-12-07',0.51),(12,0.585,19,2,'2017-12-08',0.41),(13,0.511,19,2,'2017-12-07',0.5),(14,0.544,19,5,'2017-12-10',0.41),(15,0.54,19,5,'2017-12-03',0.5);
/*!40000 ALTER TABLE `tb_data` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_eletronic`
--

DROP TABLE IF EXISTS `tb_eletronic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_eletronic` (
  `eletronic_id` int(11) NOT NULL AUTO_INCREMENT,
  `eletronic_type` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`eletronic_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_eletronic`
--

LOCK TABLES `tb_eletronic` WRITE;
/*!40000 ALTER TABLE `tb_eletronic` DISABLE KEYS */;
INSERT INTO `tb_eletronic` VALUES (1,'Geladeira'),(2,'Chuveiro'),(3,'Microondas'),(4,'Televisão'),(5,'Som'),(6,'Computador'),(7,'Tomadas em Geral'),(8,'Outros');
/*!40000 ALTER TABLE `tb_eletronic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_user`
--

DROP TABLE IF EXISTS `tb_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(80) NOT NULL,
  `user_email` varchar(45) NOT NULL,
  `user_password` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_user`
--

LOCK TABLES `tb_user` WRITE;
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` VALUES (19,'Diogo','diogomoura10@gmail.com','1249bd3fbcc3e2dcf7e1d37723c7bf57');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_user_x_tb_eletronic`
--

DROP TABLE IF EXISTS `tb_user_x_tb_eletronic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_user_x_tb_eletronic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user_fk` int(11) NOT NULL,
  `id_eletronic_fk` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_user_x_tb_eletronic`
--

LOCK TABLES `tb_user_x_tb_eletronic` WRITE;
/*!40000 ALTER TABLE `tb_user_x_tb_eletronic` DISABLE KEYS */;
INSERT INTO `tb_user_x_tb_eletronic` VALUES (1,19,1),(8,19,2),(9,19,5),(7,19,3);
/*!40000 ALTER TABLE `tb_user_x_tb_eletronic` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-12  0:51:03

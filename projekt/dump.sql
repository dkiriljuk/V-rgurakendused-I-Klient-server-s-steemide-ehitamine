-- MySQL dump 10.13  Distrib 5.6.35, for Linux (x86_64)
--
-- Host: localhost    Database: projekt_dima
-- ------------------------------------------------------
-- Server version	5.6.35

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
-- Table structure for table `devices`
--

DROP TABLE IF EXISTS `devices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `devices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `manufacture` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devices`
--

LOCK TABLES `devices` WRITE;
/*!40000 ALTER TABLE `devices` DISABLE KEYS */;
INSERT INTO `devices` VALUES (1,'S1-IPA-OFF-TLL','Cisco','Cisco Catalyst 2960','Toompuiestee 37, Tallinn','10.8.18.52','Telnet','dead'),(2,'S1-IPA-OFF-TLL','Cisco','Cisco Catalyst 2960','Toompuiestee 37, Tallinn','10.8.18.53','Telnet','dead'),(21,'S2-IPA-VS1-TLL','Cisco','Cisco Catalyst 2960','Toompuiestee 37, Tallinn','192.168.1.22','SSH','dead'),(22,'S2-IPA-VS1-TLL','Cisco','Cisco Catalyst 2960','Toompuiestee 37, Tallinn','192.168.1.23','SSH','dead'),(51,'S2-IPA-OFF-TLL','Cisco','Cisco 2960','Ädala 4f, Tallinn','172.168.1.1','SSH','dead'),(52,'S2-IPA-OFF-TLL','Juniper','Juniper','Kärberi 7, Tallinn','127.0.0.1','SSH','alive'),(67,'S3-IPA-OFF-TLL','Juniper','SRX100','Ädala 4f, Tallinn','172.88.1.23','Telnet','alive'),(68,'S2-IPA-VS2-TLL','Cisco','SRX100','Kärberi 8, Tallinn','192.168.1.24','SSH','dead'),(69,'S1-IPA-OFF-TTU','Cisco','3750G','Ringtee 25,Tartu','8.8.8.8','SSH','alive'),(70,'S2-IPA-OFF-TTU','Cisco','3750G','Ringtee 20,Tartu','8.8.4.4','Telnet','alive');
/*!40000 ALTER TABLE `devices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='login.php';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'dumap','4b5fd8c561dacddc6def5106719ef28d'),(2,'boris','4b5fd8c561dacddc6def5106719ef28d'),(3,'test','098f6bcd4621d373cade4e832627b4f6');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-29 18:56:08

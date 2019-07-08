-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mobilestore
-- ------------------------------------------------------
-- Server version	5.7.18-log

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
-- Table structure for table `blerja`
--

DROP TABLE IF EXISTS `blerja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blerja` (
  `id_blerja` int(11) NOT NULL AUTO_INCREMENT,
  `id_klienti` int(11) NOT NULL,
  `id_produkti` int(11) NOT NULL,
  `sasia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_blerja`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blerja`
--

LOCK TABLES `blerja` WRITE;
/*!40000 ALTER TABLE `blerja` DISABLE KEYS */;
INSERT INTO `blerja` VALUES (24,1,1,4),(25,1,4,3),(26,1,4,1),(27,2,2,1),(28,2,5,1),(29,2,10,5),(30,1,3,1);
/*!40000 ALTER TABLE `blerja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `klienti`
--

DROP TABLE IF EXISTS `klienti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `klienti` (
  `id_klienti` int(11) NOT NULL AUTO_INCREMENT,
  `emri` varchar(20) NOT NULL,
  `mbiemri` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  PRIMARY KEY (`id_klienti`),
  UNIQUE KEY `uname_UNIQUE` (`uname`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `klienti`
--

LOCK TABLES `klienti` WRITE;
/*!40000 ALTER TABLE `klienti` DISABLE KEYS */;
INSERT INTO `klienti` VALUES (1,'Ahmed','Kralani','ak42549@ubt-uni.net','ak','1234'),(2,'Albert','Zenuni','az41597@ubt-uni.net','az','1234'),(3,'Flamur','Morina','fm41566@ubt-uni.net','fm','1234'),(24,'','','','',''),(25,'asd','asd','asd','rr','rr');
/*!40000 ALTER TABLE `klienti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kompania`
--

DROP TABLE IF EXISTS `kompania`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kompania` (
  `id_kompani` int(11) NOT NULL AUTO_INCREMENT,
  `emri` varchar(45) NOT NULL,
  PRIMARY KEY (`id_kompani`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kompania`
--

LOCK TABLES `kompania` WRITE;
/*!40000 ALTER TABLE `kompania` DISABLE KEYS */;
INSERT INTO `kompania` VALUES (1,'Apple'),(2,'Samsung'),(3,'Google'),(4,'Xiaomi'),(5,'Nokia'),(6,'LG'),(7,'Sony');
/*!40000 ALTER TABLE `kompania` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produkti`
--

DROP TABLE IF EXISTS `produkti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produkti` (
  `id_produkti` int(11) NOT NULL AUTO_INCREMENT,
  `id_kompania` int(11) NOT NULL,
  `emri` varchar(45) NOT NULL,
  `display` varchar(45) NOT NULL,
  `camera` varchar(45) NOT NULL,
  `memory` varchar(45) NOT NULL,
  `batery` varchar(45) NOT NULL,
  `price` varchar(45) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_produkti`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produkti`
--

LOCK TABLES `produkti` WRITE;
/*!40000 ALTER TABLE `produkti` DISABLE KEYS */;
INSERT INTO `produkti` VALUES (1,1,'IphoneX','5.8\'\'','12MP','64GB,3GB RAM','2716 mAh','1150',15),(2,2,'Galaxy S8+','6.2\'\'','12MP','128GB,6GB RAM','3500mAh','650',22),(3,3,'OnePlus 5T','6.0\'\'','16MP','128GB,8GB RAM','3300mAh','500',20),(4,4,'Xiaomi Mi A1','5.5\'\'','12MP','64GB,4GB RAM','3080mAh','220',12),(5,2,'Samsung Galaxy J7 Pro','5.5\'\'','13MP','32GB,3GB RAM','3600mAh','300',13),(6,5,'Nokia 6','5.5\'\'','16MP','32GB,4GB RAM','3000mAh','220',4),(7,6,'LG G6','5.7\'\'','13MP','64GB,4GB RAM','3300mAh','430',14),(8,7,'Sony Xperia XZ','5.2\'\'','23MP','32GB,3GB RAM','2900mAh','440',3),(9,2,'Samsung Galaxy A5','5.2\'\'','16MP','32GB,3GB RAM','3000mAh','430',7),(10,2,'Samsung Galaxy Note8','6.3\'\'','12MP','64GB,6GB RAM','3300mAh','1000',12),(11,1,'Apple iPhone 8','4.7\'\'','12MP','64GB,2GB RAM','1821mAh','800',20),(12,3,'Google Pixel XL','5.5\'\'','12MP','32GB,4GB RAM','3450mAh','630',3);
/*!40000 ALTER TABLE `produkti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shporta`
--

DROP TABLE IF EXISTS `shporta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shporta` (
  `id_shporta` int(11) NOT NULL AUTO_INCREMENT,
  `id_produkti` int(11) NOT NULL,
  `id_klienti` int(11) NOT NULL,
  `sasia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_shporta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shporta`
--

LOCK TABLES `shporta` WRITE;
/*!40000 ALTER TABLE `shporta` DISABLE KEYS */;
/*!40000 ALTER TABLE `shporta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'mobilestore'
--

--
-- Dumping routines for database 'mobilestore'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-06 18:41:00

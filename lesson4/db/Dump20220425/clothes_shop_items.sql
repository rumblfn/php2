-- MySQL dump 10.13  Distrib 8.0.28, for macos11 (x86_64)
--
-- Host: localhost    Database: clothes_shop
-- ------------------------------------------------------
-- Server version	5.7.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text,
  `description` text,
  `price` text,
  `collection` text,
  `options` text,
  `views` int(11) DEFAULT '0',
  `preview_photo_name` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'item1','simple description','$97.53','women',NULL,17,'card2.png'),(2,'item2','simple description2','$52.87','man',NULL,114,'card3.png'),(3,'item3','simple description3','$12.00','women',NULL,14,'card6.png'),(4,'item4','simple description4','$43.00','man',NULL,2,'card1.png'),(5,'item5','simple description5','$53.00','all',NULL,31,'card4.png'),(6,'item6','simple description6','$26.00','all',NULL,9,'card5.png'),(7,'item7','simple description7','$72.50','all',NULL,2,'card9.png'),(8,'item8','simple description8','$12.70','all',NULL,3,'card7.png'),(9,'item9','simple description9','$48.00','all',NULL,1,'card8.png'),(10,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(11,'sdsd','adsd','123',NULL,NULL,0,NULL),(12,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(13,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(14,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(15,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(16,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(17,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(18,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(19,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(20,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(21,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(22,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(23,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(24,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(25,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(26,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(27,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(28,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(29,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(30,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(31,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(32,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(33,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(34,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(35,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(36,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(37,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(38,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(39,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(40,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(41,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(42,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(43,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(44,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(45,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(46,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(47,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(48,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(49,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(50,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(51,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(52,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(53,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(54,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(55,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(56,NULL,NULL,NULL,NULL,NULL,0,NULL),(57,NULL,NULL,NULL,NULL,NULL,0,NULL),(58,NULL,NULL,NULL,NULL,NULL,0,NULL),(59,NULL,NULL,NULL,NULL,NULL,0,NULL),(60,'кросы','','120','','',0,''),(61,NULL,NULL,NULL,NULL,NULL,0,NULL),(62,NULL,NULL,'145',NULL,NULL,0,NULL),(63,NULL,NULL,NULL,NULL,NULL,0,NULL),(65,'кроссовки','КРОССОВКИ FORUM LOW CITY','150',NULL,NULL,0,NULL),(66,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(67,'кроссовки','кроссовки','125',NULL,NULL,NULL,NULL),(68,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,NULL,NULL),(69,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,NULL,NULL),(70,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,NULL,NULL),(71,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,NULL,NULL),(72,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,NULL,NULL),(73,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(74,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-04-25 22:07:02

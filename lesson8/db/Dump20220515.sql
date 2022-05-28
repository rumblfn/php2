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
-- Table structure for table `basket`
--

DROP TABLE IF EXISTS `basket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `basket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` tinytext NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=123 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basket`
--

LOCK TABLES `basket` WRITE;
/*!40000 ALTER TABLE `basket` DISABLE KEYS */;
INSERT INTO `basket` VALUES (1,'111',80),(2,'4sbl2bu0k0t9ntrdafju8usk2p',79),(3,'4sbl2bu0k0t9ntrdafju8usk2p',79),(4,'4sbl2bu0k0t9ntrdafju8usk2p',79),(5,'4sbl2bu0k0t9ntrdafju8usk2p',1),(6,'4sbl2bu0k0t9ntrdafju8usk2p',6),(7,'4sbl2bu0k0t9ntrdafju8usk2p',1),(8,'jg4js9db4mh1q5ftkpru3tjkn0',1),(9,'jg4js9db4mh1q5ftkpru3tjkn0',2),(10,'qj9hhf61rki7crrsspvqe303aj',1),(11,'qj9hhf61rki7crrsspvqe303aj',2),(12,'qj9hhf61rki7crrsspvqe303aj',4),(13,'qj9hhf61rki7crrsspvqe303aj',1),(14,'qj9hhf61rki7crrsspvqe303aj',2),(15,'qj9hhf61rki7crrsspvqe303aj',1),(16,'qj9hhf61rki7crrsspvqe303aj',1),(17,'qj9hhf61rki7crrsspvqe303aj',1),(34,'4dt5jfn19nm3aav04nffc110b8',2),(35,'4dt5jfn19nm3aav04nffc110b8',1),(51,'4g8mtdtttn4os3dkdvk5mrlj3v',1),(52,'4g8mtdtttn4os3dkdvk5mrlj3v',1),(55,'8dm51s68i8ekh6nqtsvi4ohmu6',2),(56,'8dm51s68i8ekh6nqtsvi4ohmu6',2),(57,'8dm51s68i8ekh6nqtsvi4ohmu6',2),(58,'8dm51s68i8ekh6nqtsvi4ohmu6',1),(59,'8dm51s68i8ekh6nqtsvi4ohmu6',2),(62,'rvtf9mo6tpt18n0gdsehd7hjgu',1),(63,'rvtf9mo6tpt18n0gdsehd7hjgu',1),(74,'dvaeg4l5mrr8hohthp4ae8n0nr',1),(75,'dvaeg4l5mrr8hohthp4ae8n0nr',1),(76,'dvaeg4l5mrr8hohthp4ae8n0nr',1),(77,'dvaeg4l5mrr8hohthp4ae8n0nr',2),(78,'dvaeg4l5mrr8hohthp4ae8n0nr',2),(79,'dvaeg4l5mrr8hohthp4ae8n0nr',1),(80,'dvaeg4l5mrr8hohthp4ae8n0nr',1),(81,'dvaeg4l5mrr8hohthp4ae8n0nr',1),(82,'dvaeg4l5mrr8hohthp4ae8n0nr',1),(83,'dvaeg4l5mrr8hohthp4ae8n0nr',2),(84,'dvaeg4l5mrr8hohthp4ae8n0nr',2),(85,'dvaeg4l5mrr8hohthp4ae8n0nr',3),(86,'ui3i70tspep9787qj0fjvcmfo8',1),(87,'ui3i70tspep9787qj0fjvcmfo8',2),(88,'t6s59kud0r4qi1u0lh5ttqr2r9',1),(89,'t6s59kud0r4qi1u0lh5ttqr2r9',2),(90,'v587gaqfn38ms4bqqg267cts34',1),(91,'v587gaqfn38ms4bqqg267cts34',2),(103,'t8nedav27t6g4jrgusedjgtlhv',1),(104,'t8nedav27t6g4jrgusedjgtlhv',2);
/*!40000 ALTER TABLE `basket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(10) unsigned NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_item_id` (`item_id`),
  CONSTRAINT `fk_item_id` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,1,'card2.png'),(2,2,'card3.png'),(3,3,'card6.png'),(4,4,'card1.png'),(5,5,'card4.png'),(6,6,'card5.png'),(7,7,'card9.png'),(8,8,'card7.png'),(9,9,'card8.png');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `items`
--

LOCK TABLES `items` WRITE;
/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` VALUES (1,'item1','simple description','$97.53','women',NULL,17,'card2.png'),(2,'item2','simple description2','$52.87','man',NULL,114,'card3.png'),(3,'item3','simple description3','$12.00','women',NULL,14,'card6.png'),(4,'item4','simple description4','$43.00','man',NULL,2,'card1.png'),(5,'item5','simple description5','$53.00','all',NULL,31,'card4.png'),(6,'item6','simple description6','$26.00','all',NULL,9,'card5.png'),(7,'item7','simple description7','$72.50','all',NULL,2,'card9.png'),(8,'item8','simple description8','$12.70','all',NULL,3,'card7.png'),(9,'item9','simple description9','$48.00','all',NULL,1,'card8.png'),(10,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(11,'sdsd','adsd','123',NULL,NULL,0,NULL),(12,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(13,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(14,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(15,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(16,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(17,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(18,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(19,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(20,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(21,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(22,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(23,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(24,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(25,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(26,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(27,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(28,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(29,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(30,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(31,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(32,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(33,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(34,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(35,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(36,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(37,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(38,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(39,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(40,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(41,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(42,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(43,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(44,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(45,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(46,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(47,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(48,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(49,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(50,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(51,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(52,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(53,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(54,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(55,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(56,NULL,NULL,NULL,NULL,NULL,0,NULL),(57,NULL,NULL,NULL,NULL,NULL,0,NULL),(58,NULL,NULL,NULL,NULL,NULL,0,NULL),(59,NULL,NULL,NULL,NULL,NULL,0,NULL),(60,'кросы','','120','','',0,''),(61,NULL,NULL,NULL,NULL,NULL,0,NULL),(62,NULL,NULL,'145',NULL,NULL,0,NULL),(63,NULL,NULL,NULL,NULL,NULL,0,NULL),(65,'кроссовки','КРОССОВКИ FORUM LOW CITY','150',NULL,NULL,0,NULL),(66,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(67,'кроссовки','кроссовки','125',NULL,NULL,NULL,NULL),(68,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,NULL,NULL),(69,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,NULL,NULL),(70,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,NULL,NULL),(71,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,NULL,NULL),(72,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,NULL,NULL),(73,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(74,'кроссовки','КРОССОВКИ FORUM LOW CITY','125',NULL,NULL,0,NULL),(75,NULL,NULL,NULL,'www',NULL,0,NULL),(76,NULL,NULL,NULL,'www',NULL,0,NULL),(77,NULL,NULL,NULL,'www',NULL,0,NULL),(78,NULL,NULL,NULL,'www',NULL,0,NULL),(79,NULL,NULL,NULL,'www',NULL,0,NULL),(80,'What wa that',NULL,NULL,'collection',NULL,100,NULL);
/*!40000 ALTER TABLE `items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_items`
--

LOCK TABLES `order_items` WRITE;
/*!40000 ALTER TABLE `order_items` DISABLE KEYS */;
INSERT INTO `order_items` VALUES (1,1,10),(2,2,10),(3,1,11),(4,1,12),(5,2,12),(6,8,12),(7,6,12),(8,8,12),(9,3,12),(10,3,12),(11,6,12),(12,1,13),(13,1,14),(14,1,14),(15,1,14),(16,2,14),(17,1,15),(18,1,15);
/*!40000 ALTER TABLE `order_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `telephone_number` varchar(45) NOT NULL,
  `address` varchar(200) NOT NULL,
  `session_id` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (10,'toshamilgis@gmail.com','+79393670149','Аметьевская магистраль','2e153v5jrsj1itr99om0tmg4c1'),(12,'toshamilgis@gmail.com','+79393670149','Аметьевская магистраль','26'),(14,'toshamilgis@gmail.com','+79393670149','Аметьевская магистраль','ot4c0jnj63ar8jpoi96startmv');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(10) unsigned NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `time` timestamp NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_item_id_from_reviews` (`item_id`),
  CONSTRAINT `fk_item_id_from_reviews` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (1,2,'toshamilgis@gmail.com','first order','2022-03-27 19:25:05'),(2,2,'toshamilgis@gmail.com','Second order','2022-03-27 19:39:09'),(3,2,'toshamilval@yandex.ru','Third order','2022-03-27 19:48:11'),(4,5,'toshamilgis@gmail.com','item5 первый отзыв','2022-03-27 19:51:06'),(5,2,'toshamilgis@gmail.com','feedback','2022-03-27 19:51:59'),(6,3,'almazShamilArtem@gmail.com','Отлично','2022-03-27 20:05:03'),(7,2,'toshamilgis@gmail.com','jjjj','2022-04-01 19:43:41');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `surname` text,
  `gender` varchar(6) DEFAULT NULL,
  `login` text NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (13,'Шамиль','Валиахметов','male','toshamilgis@gmail.com','$2y$10$O1xPtFH1TpHgwA5Z/y7tSe222mcMsLQs4L30KZRvgaM5AJsSicmB6'),(14,'Шамиль','Валиахметов','','toshamilval@yandex.ru','$2y$10$Np9mFRGWHZ6sB7ctK2JhIe4LBJRGZJt84Bwr4DvFoxoHtvq/k99X.'),(23,NULL,NULL,NULL,'tosham22ilgis@gmail.com','$2y$10$wZacVf2umJKweffhUuYt8OjV6FdMxrjwY6jTYp/IdUB6fLk9mneOe'),(24,NULL,NULL,NULL,'tosham22i2lgis@gmail.com','$2y$10$X8pjYV4RsGBtIIFS7aXNSOcEntJT6YoVr6khyGpkaN0aOvYUBHuUC'),(25,NULL,NULL,NULL,'guest','$2y$10$19g.RQEz9643doOAmmewZ.6V/upZeiXtHAEbb/1M25rjj14D75Ify'),(26,NULL,NULL,NULL,'rumblfn','$2y$10$2ZPvyZ2LZnlwEITpFt3DaOIWjN4LC7Zemgp3/DAUvQwKsJsWRIwA6'),(27,NULL,NULL,NULL,'admin2','$2y$10$BN00zny0yPaFZwfQCiIe3OVMFrSn31Il8yk0ACQsQgJrawf3iqdgS'),(28,NULL,NULL,NULL,'rumblfn2131','$2y$10$cQ4LErHMpdzkBUfpkkUsiuoxkvRWjs7YTbAUczsrQ94ylnxUKgauq'),(29,NULL,NULL,NULL,'rumblfn213123','$2y$10$x0gLCBymleu3/XtsO0FU5uRCxYhtgdCWW4zFMSs4fogNa.gFiqyrK'),(30,NULL,NULL,NULL,'rumblfn213123123','$2y$10$cmQD7RANZO5YY9fEebekS.cJONuP1S7jTdMCrZYuQpg0UGQrHLM0i'),(31,NULL,NULL,NULL,'rumblfn2131231231','$2y$10$Qd3jwuwp2wJOevinrAL9ZOOL.XB/ENvOzLxMpkUFNgAZGTRG6Hr5u'),(32,NULL,NULL,NULL,'rumblfn21312312311','$2y$10$OGPHxud0C4jQZFHXAaoKVO9AzU1.a0tPd1dAvNZQvy6kEwU1qgdmG'),(33,NULL,NULL,NULL,'rumblfn213123123111','$2y$10$rGTP8u13WQPLkGylS7NXxO3ETLg95FPBBsRmvAvgjmE.5NSBF7gwK'),(34,NULL,NULL,NULL,'toshamilgis77@gmail.com','$2y$10$IyhqBGWOhJ9uleorOQAbDu6XLKK3HDdxKi.4gxIF4LKitOyli4/NK'),(35,NULL,NULL,NULL,'rumblfn3','$2y$10$mqho6jxiHV8J5mmW/FkdceUoo5Qq4Or0nI5ZTYuS58K6ZJ0QbHZie'),(36,NULL,NULL,NULL,'rumblfn4','$2y$10$jP.q/lEvAWSSGBXf1Sg6BezHKzL9JeuBf0ZuVyL4BmOJgVrJLk5lu'),(37,NULL,NULL,NULL,'rumblfn5','$2y$10$5nXfnH.ipO7pOT/ujlN2MuzLstzYVsp2cvuK2rgQk5oxfboLNuCbi'),(38,NULL,NULL,NULL,'rumblfn6','$2y$10$NL1j7aJ87OuvR4It0tv8w.hoyWWBIw/MUYySJYwVcsNC5hhvExmVS'),(39,NULL,NULL,NULL,'rumblfn41','$2y$10$aPo1P4pXgJyrEW00Q.yz3ugtrfeRHzbOdaqEpjcOlJj0Xdpy9ZdW.'),(40,NULL,NULL,NULL,'admin100','$2y$10$7JUMed5FqQaxzYCzPu64jupXDM/UJkO6GtroY4Pp7dZ2CCyIoCuRq'),(41,NULL,NULL,NULL,'rumblfn1','$2y$10$5mtBRk/lBy.URxgNUYI.6.yEwDTxcW1eHUfQIblaox8nOSAr8Fe02'),(42,NULL,NULL,NULL,'admin','$2y$10$/Tdq8fqjgzqozAfVip1f4OYaSzFfCJQGj52eWA1kPs6HQodtrfJ.O'),(43,NULL,NULL,NULL,'testuser','$2y$10$eWnzc73ua1w8QstGj/cCduvvjKyrg12dCENkXDcgaB5yl93fjYMP.');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-15 16:51:35

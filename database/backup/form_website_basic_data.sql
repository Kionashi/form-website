-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: form_website
-- ------------------------------------------------------
-- Server version	5.7.21-0ubuntu0.16.04.1

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
-- Table structure for table `basic_data`
--

DROP TABLE IF EXISTS `basic_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `basic_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `plate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expedition_place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` int(11) NOT NULL,
  `user_type` enum('INTERNAL','EXTERNAL') COLLATE utf8mb4_unicode_ci NOT NULL,
  `finalization_soat` date NOT NULL,
  `data_privacy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` int(10) unsigned NOT NULL,
  `service_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `basic_data_brand_id_foreign` (`brand_id`),
  KEY `basic_data_service_id_foreign` (`service_id`),
  CONSTRAINT `basic_data_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  CONSTRAINT `basic_data_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `basic_data`
--

LOCK TABLES `basic_data` WRITE;
/*!40000 ALTER TABLE `basic_data` DISABLE KEYS */;
INSERT INTO `basic_data` VALUES (1,'123456','Anibal','bloh','somewhere','telefono va aqui','19873236',0,'INTERNAL','1990-12-07','basic-data/1.png',1,1,'2017-11-14 18:40:17','2017-11-15 02:56:01'),(2,'123456','Victor','Cardozo','somewhere','021231831','19873236',2017,'EXTERNAL','1990-07-25','basic-data/2.pdf',328,1,'2017-11-15 03:55:50','2017-11-21 19:09:35'),(3,'123456','Victor2','Cardozo2','somewhere','021231831','19873236',1965,'EXTERNAL','2017-11-24','basic-data/3.pdf',821,1,'2017-11-22 19:41:41','2017-11-22 19:42:12'),(4,'123456','Victor2','Cardozo2','somewhere','021231831','19873236',2013,'INTERNAL','2017-11-24','basic-data/4.png',84,1,'2017-11-22 20:06:35','2017-11-22 20:06:36'),(5,'123456','Victor2','Cardozo2','somewhere','telefono va aqui','19873236',1991,'INTERNAL','2017-11-23','basic-data/5.jpg',328,1,'2017-11-22 20:16:40','2017-11-22 20:16:40'),(6,'123456','Victor2','Cardozo','somewhere','021231831','19873236',1965,'INTERNAL','2017-11-30','basic-data/6.png',849,1,'2017-11-25 00:59:35','2017-11-25 04:33:00'),(7,'123456','victor','bleh','somewhere','021231831','19873236',2014,'INTERNAL','2017-11-15','basic-data/7.png',858,1,'2017-11-26 05:14:00','2017-11-26 05:14:00'),(8,'abc123','Pedro','Perez','Caracas','04265159851','19873235',2013,'INTERNAL','2017-11-30','basic-data/8.png',95,1,'2017-11-27 16:28:15','2017-11-27 16:28:15'),(9,'abc123','bleh','Perez','somewhere','021231831','19873235',2001,'INTERNAL','2017-11-30','basic-data/9.jpg',849,3,'2017-11-27 16:51:48','2017-11-27 17:01:12'),(10,'123456','Victor2','Perez','Caracas','021231831','19873235',1992,'INTERNAL','2017-11-08','basic-data/10.png',2,2,'2017-11-28 00:17:49','2017-11-28 00:17:49'),(11,'123456','Victor2','Cardozo2','somewhere','021231831','19873236',1998,'INTERNAL','2017-11-22','basic-data/11.jpg',329,1,'2017-11-28 00:46:47','2017-11-28 00:46:47'),(12,'abc123','Anibal','Cardozo','somewhere','021231831','19873236',1981,'INTERNAL','2017-11-30',NULL,870,2,'2017-11-28 00:58:16','2017-11-28 00:58:51'),(13,'123456','Victor2','Cardozo2','somewhere','021231831','19873236',2013,'INTERNAL','2017-12-29','basic-data/13.png',821,2,'2017-12-02 00:52:11','2017-12-02 00:52:11'),(14,'123456','Victor2','Perez','somewhere','021231831','19873236',2014,'INTERNAL','2017-12-21',NULL,1,2,'2017-12-04 18:20:30','2017-12-04 18:20:30'),(15,'123456','Victor2','Cardozo2','somewhere','021231831','19873236',1950,'INTERNAL','2017-12-27','basic-data/15.png',1,2,'2017-12-05 17:15:02','2017-12-05 17:15:02'),(16,'123456','Victor2','Cardozo2','somewhere','telefono va aqui','19873236',2001,'INTERNAL','2017-12-27','basic-data/16.png',3027,2,'2017-12-05 22:52:18','2017-12-06 01:19:14'),(17,'abc123','Victor2','Perez','somewhere','telefono va aqui','19873236',2001,'INTERNAL','2018-01-04','basic-data/17.jpg',3027,3,'2017-12-06 18:06:16','2017-12-06 18:06:16'),(18,'123456','Victor2','Cardozo2','somewhere','021231831','19873236',1997,'INTERNAL','2017-12-21','basic-data/18.png',3027,3,'2017-12-06 20:52:19','2017-12-06 20:52:19'),(19,'abc123','Anibal','Cardozo2','Caracas','021231831','19873236',2010,'INTERNAL','2017-12-27','basic-data/19.jpg',2,3,'2017-12-06 20:57:50','2017-12-06 20:57:50'),(20,'123456','Victor2','Perez','somewhere','021231831','19873236',1998,'INTERNAL','2017-12-06','basic-data/20.png',3027,3,'2017-12-06 21:02:54','2017-12-06 21:02:54'),(21,'abc123','Anibal','Cardozo','somewhere','021231831','19873236',2010,'INTERNAL','2017-12-06','basic-data/21.png',2,3,'2017-12-07 01:15:05','2017-12-07 01:15:05'),(22,'abc123','Victor2','Cardozo2','somewhere','021231831','19873236',2001,'INTERNAL','2018-01-05','basic-data/22.png',3027,2,'2017-12-07 17:40:53','2017-12-07 18:01:45'),(23,'abc123','Victor2','Cardozo2','somewhere','021231831','19873236',2001,'INTERNAL','2018-01-04',NULL,3027,2,'2017-12-09 23:24:33','2017-12-09 23:25:37'),(24,'123456','Victor2','Cardozo2','somewhere','021231831','19873235',2018,'INTERNAL','2017-12-09','basic-data/24.jpg',2,2,'2017-12-10 04:06:54','2017-12-10 04:07:30'),(25,'123456','Victor2','Cardozo2','somewhere','telefono va aqui','19873236',2018,'INTERNAL','2017-12-10',NULL,2,2,'2017-12-10 22:43:32','2017-12-10 22:55:26'),(26,'abc123','Victor2','Cardozo2','somewhere','021231831','19873236',1997,'INTERNAL','2017-12-11','basic-data/26.png',3027,3,'2017-12-11 16:36:56','2017-12-11 16:36:57'),(27,'abc123','Victor2','Cardozo2','Caracas','021231831','19873236',2018,'INTERNAL','2017-12-11','basic-data/27.png',1,3,'2017-12-11 19:32:28','2017-12-11 20:19:09'),(28,'abc123','Victor2','Cardozo2','somewhere','021231831','19873236',2003,'INTERNAL','2017-12-12','basic-data/28.png',3,3,'2017-12-12 16:36:18','2017-12-12 16:36:19'),(29,'123456','Victor2','Cardozo2','somewhere','021231831','19873236',2003,'INTERNAL','2017-12-12','basic-data/29.png',3,1,'2017-12-12 17:07:01','2017-12-12 17:07:01'),(30,'abc123','Victor2','Cardozo2','somewhere','021231831','19873236',2007,'INTERNAL','2017-12-12','basic-data/30.png',2,1,'2017-12-12 19:53:15','2017-12-12 19:53:16'),(31,'abc123','Victor2','Cardozo2','Caracas','021231831','19873235',2006,'INTERNAL','2017-12-12','basic-data/31.png',2,4,'2017-12-13 00:19:57','2017-12-13 00:19:57'),(32,'abc123','Anibal','Cardozo','Caracas','021231831','19873235',2006,'INTERNAL','2017-12-14','basic-data/32.png',2,4,'2017-12-14 16:41:55','2017-12-14 16:41:55'),(33,'abc123','Victor','Perez','Caracas','021231831','19873236',2018,'INTERNAL','2017-12-14','basic-data/33.png',2,1,'2017-12-15 01:04:41','2017-12-15 01:08:01'),(34,'abc123','Victor2','Cardozo2','Caracas','021231831','19873236',2006,'INTERNAL','2017-12-14','basic-data/34.png',2,3,'2017-12-15 01:24:04','2017-12-15 01:24:04'),(35,'abc123','Anibal','Cardozo','Caracas','021231831','19873235',2007,'INTERNAL','2017-12-15',NULL,2,3,'2017-12-15 19:03:03','2017-12-15 19:03:03'),(36,'abc123','Anibal','Cardozo','Caracas','telefono va aqui','19873235',2007,'INTERNAL','2017-12-15',NULL,2,3,'2017-12-15 19:35:19','2017-12-15 19:35:19'),(37,'abc123','Anibal','Cardozo','Caracas','021231831','19873236',1990,'INTERNAL','2017-12-15','basic-data/37.jpg',1,3,'2017-12-15 22:20:50','2017-12-15 22:20:52'),(38,'abc123','Anibal','Cardozo','Caracas','021231831','19873236',2005,'INTERNAL','2017-12-15',NULL,2,3,'2017-12-16 00:13:29','2017-12-16 00:13:29'),(39,'123456','Anibal','Perez','Caracas','021231831','19873236',2005,'INTERNAL','2017-12-15','basic-data/39.jpg',2,1,'2017-12-16 04:50:20','2017-12-16 04:50:21'),(40,'abc123','Anibal','Cardozo','Caracas','021231831','19873235',2018,'INTERNAL','2017-12-17','basic-data/40.png',2,3,'2017-12-17 16:55:46','2017-12-17 16:56:08'),(41,'abc123','Anibal','Cardozo','Caracas','04265159851','19873236',2018,'INTERNAL','2017-12-17','basic-data/41.png',2,1,'2017-12-17 17:21:29','2018-01-16 00:31:15'),(42,'abc123','Anibal','Perez','Caracas','021231831','19873236',2006,'INTERNAL','2017-12-17','basic-data/42.png',2,2,'2017-12-17 18:59:32','2017-12-17 18:59:32'),(43,'abc123','Victor2','Cardozo2','Caracas','021231831','19873236',2006,'INTERNAL','2017-12-17','basic-data/43.jpg',2,4,'2017-12-17 23:16:01','2017-12-17 23:16:01'),(44,'asdf123','Victor','Perez','Caracas','021231831','19873236',2006,'INTERNAL','2017-12-17','basic-data/44.jpeg',2,1,'2017-12-18 03:53:21','2017-12-18 03:53:21'),(45,'abc123','Victor2','Cardozo2','somewhere','021231831','19873236',2018,'INTERNAL','2017-12-18','basic-data/45.png',2,2,'2017-12-18 17:29:42','2018-01-24 20:31:55'),(46,'abc123','Anibal','Perez','Caracas','04265159851','19873236',2007,'INTERNAL','2017-12-18','basic-data/46.png',2,1,'2017-12-19 04:42:53','2017-12-19 04:42:53'),(47,'abc123','Victor2','Cardozo2','somewhere','021231831','19873235',2005,'INTERNAL','2017-12-19','basic-data/47.png',2,1,'2017-12-19 18:22:03','2017-12-19 18:22:03'),(48,'abc123','Anibal','Perez','Caracas','04265159851','19873235',2006,'INTERNAL','2017-12-22','basic-data/48.png',2,2,'2017-12-22 21:51:22','2017-12-22 21:51:22'),(49,'AEI321','Victor','Cardozo','Caracas','021231831','19873236',2018,'INTERNAL','2017-12-22','basic-data/49.png',1,2,'2017-12-22 21:55:07','2017-12-22 22:06:55'),(50,'abc123','Victor','Cardozo','Caracas','021231831','19873236',2002,'INTERNAL','2017-12-22','basic-data/50.png',1,1,'2017-12-22 23:56:27','2017-12-22 23:56:27'),(51,'abc123','Anibal','Perez','Caracas','021231831','19873236',2018,'INTERNAL','2017-12-22','basic-data/51.jpg',2,3,'2017-12-23 00:30:49','2017-12-23 00:30:49'),(52,'abc123','Anibal','Cardozo','Caracas','021231831','19873236',2018,'INTERNAL','2018-01-10','basic-data/52.jpg',1,1,'2018-01-11 02:39:59','2018-01-11 02:40:00'),(53,'123456','Victor2','Cardozo2','somewhere','021231831','19873236',1950,'INTERNAL','2018-01-10',NULL,1,1,'2018-01-11 02:40:30','2018-01-11 02:40:30'),(54,'XXXX','YYYY','ZZZZ','2','22222','sad',2018,'INTERNAL','2018-01-11','basic-data/54.png',2,1,'2018-01-11 17:20:48','2018-01-11 17:20:48'),(55,'XXXX','Victor2','ZZZZ','somewhere','021231831','sad',2018,'INTERNAL','2018-01-11',NULL,2,1,'2018-01-11 17:23:27','2018-01-11 17:23:27'),(56,'abc123','Victor2','Cardozo2','somewhere','telefono va aqui','19873235',2018,'INTERNAL','2018-01-12',NULL,3,1,'2018-01-13 00:27:11','2018-01-13 00:27:11'),(57,'123456','Victor2','Perez','somewhere','021231831','19873235',1990,'INTERNAL','2018-01-14',NULL,2,1,'2018-01-14 19:07:16','2018-01-14 19:07:16'),(58,'BRP123','Anibal','Perez','Caracas','021231831','19873235',2018,'INTERNAL','2018-01-17','basic-data/58.png',2,1,'2018-01-18 01:39:29','2018-01-18 01:39:30'),(59,'PRI321','Sebas','El Editor','mexico','123542515','666',2018,'INTERNAL','2018-01-18','basic-data/59.png',3,3,'2018-01-18 13:47:06','2018-01-18 13:47:06');
/*!40000 ALTER TABLE `basic_data` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-16  9:51:42

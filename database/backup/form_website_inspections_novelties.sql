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
-- Table structure for table `inspections_novelties`
--

DROP TABLE IF EXISTS `inspections_novelties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inspections_novelties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `inspection_id` int(10) unsigned NOT NULL,
  `novelty_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inspections_novelties_inspection_id_foreign` (`inspection_id`),
  KEY `inspections_novelties_novelty_id_foreign` (`novelty_id`),
  CONSTRAINT `inspections_novelties_inspection_id_foreign` FOREIGN KEY (`inspection_id`) REFERENCES `inspections` (`id`),
  CONSTRAINT `inspections_novelties_novelty_id_foreign` FOREIGN KEY (`novelty_id`) REFERENCES `novelties` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inspections_novelties`
--

LOCK TABLES `inspections_novelties` WRITE;
/*!40000 ALTER TABLE `inspections_novelties` DISABLE KEYS */;
INSERT INTO `inspections_novelties` VALUES (11,1,2,'2017-12-14 17:30:44','2017-12-14 17:30:44'),(12,1,5,'2017-12-14 17:30:44','2017-12-14 17:30:44'),(13,1,7,'2017-12-14 17:30:44','2017-12-14 17:30:44'),(14,1,10,'2017-12-14 17:30:44','2017-12-14 17:30:44'),(15,1,11,'2017-12-14 17:30:44','2017-12-14 17:30:44'),(26,3,4,'2017-12-17 23:18:15','2017-12-17 23:18:15'),(27,3,5,'2017-12-17 23:18:15','2017-12-17 23:18:15'),(28,3,6,'2017-12-17 23:18:15','2017-12-17 23:18:15'),(29,3,7,'2017-12-17 23:18:15','2017-12-17 23:18:15'),(30,3,13,'2017-12-17 23:18:15','2017-12-17 23:18:15'),(31,4,1,'2017-12-18 17:34:01','2017-12-18 17:34:01'),(32,4,2,'2017-12-18 17:34:01','2017-12-18 17:34:01'),(33,4,3,'2017-12-18 17:34:01','2017-12-18 17:34:01'),(34,4,10,'2017-12-18 17:34:01','2017-12-18 17:34:01'),(35,4,11,'2017-12-18 17:34:01','2017-12-18 17:34:01'),(36,4,13,'2017-12-18 17:34:01','2017-12-18 17:34:01'),(37,5,1,'2017-12-22 22:14:27','2017-12-22 22:14:27'),(38,5,2,'2017-12-22 22:14:27','2017-12-22 22:14:27'),(39,5,3,'2017-12-22 22:14:27','2017-12-22 22:14:27'),(40,5,10,'2017-12-22 22:14:27','2017-12-22 22:14:27'),(41,5,11,'2017-12-22 22:14:27','2017-12-22 22:14:27'),(42,5,12,'2017-12-22 22:14:28','2017-12-22 22:14:28'),(43,2,1,'2018-01-18 19:12:10','2018-01-18 19:12:10'),(44,2,3,'2018-01-18 19:12:10','2018-01-18 19:12:10'),(45,2,5,'2018-01-18 19:12:11','2018-01-18 19:12:11'),(46,2,6,'2018-01-18 19:12:11','2018-01-18 19:12:11');
/*!40000 ALTER TABLE `inspections_novelties` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-16  9:51:43

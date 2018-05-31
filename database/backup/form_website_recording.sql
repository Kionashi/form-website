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
-- Table structure for table `recording`
--

DROP TABLE IF EXISTS `recording`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `recording` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `re_recorded_part` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secretary_expedition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `inspector_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `recording_class_id_foreign` (`class_id`),
  KEY `recording_inspector_id_foreign` (`inspector_id`),
  CONSTRAINT `recording_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`),
  CONSTRAINT `recording_inspector_id_foreign` FOREIGN KEY (`inspector_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recording`
--

LOCK TABLES `recording` WRITE;
/*!40000 ALTER TABLE `recording` DISABLE KEYS */;
INSERT INTO `recording` VALUES (1,'llantas','Revisionlandia','Caracas2','asi es','Descripcion','modificado todo fino',1,1,'2017-11-25 01:09:09','2017-11-25 01:09:09'),(2,'llantas','Revisionlandia','Caracas2','asi es','Descripcion','modificado todo fino',1,1,'2017-11-26 05:15:24','2017-11-26 05:15:24'),(3,'llantas','Revisionlandia','Caracas2','asi es','Descripcion','modificado todo fino',1,3,'2017-11-27 16:29:34','2017-11-27 16:29:34'),(4,'llantas','Revisionlandia','Caracas2','asi es','Descripcion','modificado todo fino',1,1,'2017-11-28 00:48:38','2017-11-28 00:48:38'),(5,'llantas','Revisionlandia','Caracas2','asi es','Descripcion','modificado todo fino',4,1,'2017-12-12 18:02:41','2017-12-12 18:02:41'),(6,'Chasis del motor','Revisionlandia','Caracas','asi es','Descripcion','modificado todo fino',3,3,'2017-12-12 19:55:22','2017-12-12 19:55:22'),(7,'Chasis del motor','Revisionlandia','Caracas','asi es','Descripcion','modificado todo fino',3,3,'2017-12-15 01:08:30','2017-12-15 01:08:30'),(8,'Chasis del motor','Revisionlandia','Caracas','asi es','Descripcion','modificado todo fino',3,1,'2017-12-16 04:51:36','2017-12-16 04:51:36'),(9,'Chasis del motor','Revisionlandia','Caracas2','asi es','Descripcion','modificado todo fino',3,1,'2017-12-17 17:22:37','2017-12-17 17:22:37'),(10,'Chasis del motor','Revisionlandia','Caracas','asi es','Descripcion','modificado todo fino',3,1,'2017-12-19 04:47:32','2017-12-19 04:47:32'),(11,'Chasis del motor','Revisionlandia','Caracas2','asi es','Descripcion','modificado todo fino',3,1,'2017-12-19 18:25:02','2017-12-19 18:25:02'),(12,'Chasis del motor','Revisionlandia','Caracas','asi es','Descripcion','modificado todo fino',1,3,'2017-12-23 00:02:51','2017-12-23 00:02:51');
/*!40000 ALTER TABLE `recording` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-16  9:51:45

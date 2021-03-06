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
-- Table structure for table `service_request`
--

DROP TABLE IF EXISTS `service_request`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_request` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `progress` enum('COMPLETED','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_step` int(11) NOT NULL,
  `status` enum('APPROVED','REJECTED') COLLATE utf8mb4_unicode_ci NOT NULL,
  `reject_reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `basic_data_id` int(10) unsigned DEFAULT NULL,
  `complementary_data_id` int(10) unsigned DEFAULT NULL,
  `recording_id` int(10) unsigned DEFAULT NULL,
  `inspection_id` int(10) unsigned DEFAULT NULL,
  `rtc_id` int(10) unsigned DEFAULT NULL,
  `control_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `service_request_service_id_foreign` (`service_id`),
  KEY `service_request_user_id_foreign` (`user_id`),
  KEY `service_request_basic_data_id_foreign` (`basic_data_id`),
  KEY `service_request_complementary_data_id_foreign` (`complementary_data_id`),
  KEY `service_request_recording_id_foreign` (`recording_id`),
  KEY `service_request_inspection_id_foreign` (`inspection_id`),
  KEY `service_request_rtc_id_foreign` (`rtc_id`),
  KEY `service_request_control_id_foreign` (`control_id`),
  CONSTRAINT `service_request_basic_data_id_foreign` FOREIGN KEY (`basic_data_id`) REFERENCES `basic_data` (`id`),
  CONSTRAINT `service_request_complementary_data_id_foreign` FOREIGN KEY (`complementary_data_id`) REFERENCES `complementary_data` (`id`),
  CONSTRAINT `service_request_control_id_foreign` FOREIGN KEY (`control_id`) REFERENCES `controls` (`id`),
  CONSTRAINT `service_request_inspection_id_foreign` FOREIGN KEY (`inspection_id`) REFERENCES `inspections` (`id`),
  CONSTRAINT `service_request_recording_id_foreign` FOREIGN KEY (`recording_id`) REFERENCES `recording` (`id`),
  CONSTRAINT `service_request_rtc_id_foreign` FOREIGN KEY (`rtc_id`) REFERENCES `rtc` (`id`),
  CONSTRAINT `service_request_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`),
  CONSTRAINT `service_request_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_request`
--

LOCK TABLES `service_request` WRITE;
/*!40000 ALTER TABLE `service_request` DISABLE KEYS */;
INSERT INTO `service_request` VALUES (1,'PENDING',5,'APPROVED',NULL,3,3,36,20,NULL,NULL,1,NULL,'2017-12-15 19:34:55','2017-12-15 19:40:22'),(2,'PENDING',5,'APPROVED',NULL,3,3,37,21,NULL,NULL,2,NULL,'2017-12-15 22:18:18','2017-12-15 22:25:05'),(3,'COMPLETED',6,'APPROVED',NULL,3,3,38,22,NULL,NULL,3,NULL,'2017-12-16 00:13:05','2017-12-16 00:16:15'),(4,'COMPLETED',6,'APPROVED',NULL,1,3,39,23,8,NULL,NULL,NULL,'2017-12-16 04:49:58','2017-12-16 04:51:49'),(5,'COMPLETED',6,'APPROVED',NULL,3,3,40,24,NULL,NULL,4,NULL,'2017-12-17 16:55:28','2017-12-17 16:59:11'),(6,'COMPLETED',2,'REJECTED',NULL,1,3,41,25,9,NULL,NULL,NULL,'2017-12-17 17:21:05','2018-01-16 00:32:52'),(7,'COMPLETED',4,'APPROVED',NULL,2,3,42,26,NULL,2,5,NULL,'2017-12-17 18:59:10','2018-01-18 19:12:11'),(8,'COMPLETED',6,'REJECTED',NULL,4,3,43,27,NULL,3,NULL,NULL,'2017-12-17 23:15:44','2017-12-21 00:54:30'),(9,'PENDING',2,'APPROVED',NULL,1,3,44,28,NULL,NULL,NULL,NULL,'2017-12-18 03:52:45','2017-12-18 03:54:05'),(10,'COMPLETED',1,'APPROVED',NULL,2,3,45,29,NULL,4,6,NULL,'2017-12-18 17:29:14','2018-01-24 20:31:56'),(11,'PENDING',0,'APPROVED',NULL,2,3,NULL,NULL,NULL,NULL,NULL,NULL,'2017-12-18 17:42:27','2017-12-18 17:42:27'),(12,'COMPLETED',6,'REJECTED','cualquier motivo',1,3,46,30,10,NULL,NULL,NULL,'2017-12-19 04:41:47','2017-12-19 04:50:05'),(13,'PENDING',3,'APPROVED',NULL,1,3,47,31,11,NULL,NULL,NULL,'2017-12-19 18:21:25','2017-12-19 18:25:03'),(14,'PENDING',1,'APPROVED',NULL,2,3,48,32,NULL,NULL,NULL,NULL,'2017-12-22 21:50:21','2018-01-16 23:33:46'),(15,'COMPLETED',6,'APPROVED',NULL,2,3,49,33,NULL,5,7,NULL,'2017-12-22 21:54:15','2017-12-22 22:23:49'),(16,'COMPLETED',6,'APPROVED',NULL,1,3,50,34,12,NULL,NULL,NULL,'2017-12-22 23:55:23','2018-01-17 23:40:54'),(17,'PENDING',0,'APPROVED',NULL,3,3,51,NULL,NULL,NULL,NULL,NULL,'2017-12-23 00:30:23','2017-12-23 00:31:23'),(18,'PENDING',1,'APPROVED',NULL,1,3,52,NULL,NULL,NULL,NULL,NULL,'2018-01-11 02:39:29','2018-01-11 02:40:00'),(19,'PENDING',1,'APPROVED',NULL,1,3,53,NULL,NULL,NULL,NULL,NULL,'2018-01-11 02:40:16','2018-01-11 02:40:30'),(20,'PENDING',0,'APPROVED',NULL,1,3,54,NULL,NULL,NULL,NULL,NULL,'2018-01-11 17:19:59','2018-01-11 17:21:32'),(21,'PENDING',0,'APPROVED',NULL,1,3,NULL,NULL,NULL,NULL,NULL,NULL,'2018-01-11 17:21:41','2018-01-11 17:21:41'),(22,'PENDING',1,'APPROVED',NULL,1,3,55,NULL,NULL,NULL,NULL,NULL,'2018-01-11 17:22:37','2018-01-11 17:23:27'),(23,'PENDING',1,'APPROVED',NULL,1,1,56,NULL,NULL,NULL,NULL,NULL,'2018-01-13 00:26:44','2018-01-13 00:27:11'),(24,'PENDING',0,'APPROVED',NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,'2018-01-13 02:18:48','2018-01-13 02:18:48'),(25,'PENDING',0,'APPROVED',NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,'2018-01-13 02:20:07','2018-01-13 02:20:07'),(26,'PENDING',1,'APPROVED',NULL,1,1,57,NULL,NULL,NULL,NULL,NULL,'2018-01-14 18:49:44','2018-01-14 19:07:16'),(27,'PENDING',0,'APPROVED',NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,'2018-01-15 23:20:04','2018-01-15 23:20:04'),(28,'PENDING',0,'APPROVED',NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,'2018-01-15 23:25:59','2018-01-15 23:25:59'),(29,'PENDING',0,'APPROVED',NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,'2018-01-15 23:28:44','2018-01-15 23:28:44'),(30,'PENDING',0,'APPROVED',NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,'2018-01-15 23:35:35','2018-01-15 23:35:35'),(31,'PENDING',0,'APPROVED',NULL,4,1,NULL,NULL,NULL,NULL,NULL,NULL,'2018-01-16 04:12:57','2018-01-16 04:12:57'),(32,'PENDING',2,'APPROVED',NULL,1,1,58,35,NULL,NULL,NULL,NULL,'2018-01-18 00:18:54','2018-01-18 01:56:46'),(33,'PENDING',2,'APPROVED',NULL,3,1,59,36,NULL,NULL,8,NULL,'2018-01-18 13:44:48','2018-01-18 15:07:00'),(34,'PENDING',0,'APPROVED',NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,'2018-01-18 18:40:44','2018-01-18 18:40:44'),(35,'PENDING',0,'APPROVED',NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,'2018-01-19 00:10:36','2018-01-19 00:10:36');
/*!40000 ALTER TABLE `service_request` ENABLE KEYS */;
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

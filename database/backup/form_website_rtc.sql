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
-- Table structure for table `rtc`
--

DROP TABLE IF EXISTS `rtc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rtc` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `engine_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `serial_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chassis_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `back_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `radication_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_class_id` int(10) unsigned NOT NULL,
  `inspector_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rtc_vehicle_class_id_foreign` (`vehicle_class_id`),
  KEY `rtc_inspector_id_foreign` (`inspector_id`),
  CONSTRAINT `rtc_inspector_id_foreign` FOREIGN KEY (`inspector_id`) REFERENCES `users` (`id`),
  CONSTRAINT `rtc_vehicle_class_id_foreign` FOREIGN KEY (`vehicle_class_id`) REFERENCES `vehicle_classes` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rtc`
--

LOCK TABLES `rtc` WRITE;
/*!40000 ALTER TABLE `rtc` DISABLE KEYS */;
INSERT INTO `rtc` VALUES (1,'rtc/1-engine.png','rtc/1-serial.png','rtc/1-chassis.png','rtc/1-security-number.png','rtc/1-front-card.png','rtc/1-back-card.png','666','111','aqui estan los datos de revision','por que te lo ordeno','linea 1','linea 2','linea 3','rtc/1-image1.jpg','rtc/1-image2.jpeg','rtc/1-image3.jpg','rtc/1-image4.jpg','rtc/1-image5.jpg','rtc/1-image6.jpeg',1,1,'2017-12-15 19:40:20','2017-12-15 19:40:22'),(2,'rtc/2-engine.png','rtc/2-serial.png','rtc/2-chassis.png','rtc/2-security-number.png','rtc/2-front-card.png','rtc/2-back-card.png','15987652','551515','aqui estan los datos de revision','por que te lo ordeno','linea 1','linea 2','linea 3','rtc/2-image1.jpeg','rtc/2-image2.jpg','rtc/2-image3.jpeg','rtc/2-image4.jpg','rtc/2-image5.jpeg','rtc/2-image6.jpg',2,1,'2017-12-15 22:25:03','2017-12-15 22:25:05'),(3,'rtc/3-engine.png','rtc/3-serial.png','rtc/3-chassis.png','rtc/3-security-number.png','rtc/3-front-card.png','rtc/3-back-card.png','15987652','111','aqui estan los datos de revision','por que te lo ordeno','linea 1','linea 2','linea 3','rtc/3-image1.jpg','rtc/3-image2.png','rtc/3-image3.png','rtc/3-image4.jpg','rtc/3-image5.png','rtc/3-image6.jpg',1,3,'2017-12-16 00:15:35','2017-12-16 00:15:35'),(4,'rtc/4-engine.png','rtc/4-serial.png','rtc/4-chassis.png','rtc/4-security-number.jpg','rtc/4-front-card.jpg','rtc/4-back-card.jpg','15987652','551515','aqui estan los datos de revision','por que te lo ordeno','linea 1','linea 2','linea 3','rtc/4-image1.png','rtc/4-image2.png','rtc/4-image3.png','rtc/4-image4.png','rtc/4-image5.png','rtc/4-image6.png',1,1,'2017-12-17 16:58:26','2017-12-17 16:58:28'),(5,'rtc/5-engine.png','rtc/5-serial.png','rtc/5-chassis.png','rtc/5-security-number.png','rtc/5-front-card.png','rtc/5-back-card.png','15987652','111','aqui estan los datos de revision','por que te lo ordeno','linea 1','linea 2','linea 3','rtc/5-image1.jpg','rtc/5-image2.jpg','rtc/5-image3.jpg','rtc/5-image4.jpeg','rtc/5-image5.jpg','rtc/5-image6.jpeg',1,1,'2017-12-17 19:05:41','2017-12-17 19:05:41'),(6,'rtc/6-engine.png','rtc/6-serial.png','rtc/6-chassis.png','rtc/6-security-number.png','rtc/6-front-card.jpg','rtc/6-back-card.png','15987652','551515','aqui estan los datos de revision','por que te lo ordeno','linea 1','linea 2','linea 3','rtc/6-image1.png','rtc/6-image2.png','rtc/6-image3.png','rtc/6-image4.jpeg','rtc/6-image5.jpg','rtc/6-image6.jpg',1,1,'2017-12-18 17:35:35','2017-12-18 17:35:36'),(7,'rtc/7-engine.png','rtc/7-serial.png','rtc/7-chassis.png','rtc/7-security-number.png','rtc/7-front-card.png','rtc/7-back-card.png','15987652','N/A','aqui estan los datos de revision','Motivo','linea 1','linea 2','linea 3','rtc/7-image1.png','rtc/7-image2.png','rtc/7-image3.png','rtc/7-image4.png','rtc/7-image5.jpg','rtc/7-image6.jpg',7,1,'2017-12-22 22:22:07','2017-12-22 22:22:08'),(8,'rtc/8-engine.png','rtc/8-serial.jpg','rtc/8-chassis.png','rtc/8-security-number.png','rtc/8-front-card.jpg','rtc/8-back-card.png','111','N/A','aqui estan los datos de revision','Motivo','linea 1','linea 2','linea 3',NULL,NULL,NULL,NULL,NULL,NULL,1,1,'2018-01-18 15:06:50','2018-01-18 15:06:51');
/*!40000 ALTER TABLE `rtc` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-16  9:51:41

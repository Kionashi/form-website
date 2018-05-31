-- MySQL dump 10.13  Distrib 5.7.9, for linux-glibc2.5 (x86_64)
--
-- Host: localhost    Database: form-3
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
  `reject_reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_request`
--

LOCK TABLES `service_request` WRITE;
/*!40000 ALTER TABLE `service_request` DISABLE KEYS */;
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

-- Dump completed on 2018-03-16  9:51:41

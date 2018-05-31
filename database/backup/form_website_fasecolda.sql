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
-- Table structure for table `fasecolda`
--

DROP TABLE IF EXISTS `fasecolda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fasecolda` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(10) unsigned NOT NULL,
  `first_reference_id` int(10) unsigned NOT NULL,
  `second_reference_id` int(10) unsigned NOT NULL,
  `fuel_type_id` int(10) unsigned NOT NULL,
  `vehicle_service_id` int(10) unsigned NOT NULL,
  `cylinder_id` int(10) unsigned NOT NULL,
  `vehicle_class_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fasecolda_brand_id_foreign` (`brand_id`),
  KEY `fasecolda_first_reference_id_foreign` (`first_reference_id`),
  KEY `fasecolda_second_reference_id_foreign` (`second_reference_id`),
  KEY `fasecolda_fuel_type_id_foreign` (`fuel_type_id`),
  KEY `fasecolda_vehicle_service_id_foreign` (`vehicle_service_id`),
  KEY `fasecolda_cylinder_id_foreign` (`cylinder_id`),
  KEY `fasecolda_vehicle_class_id_foreign` (`vehicle_class_id`),
  CONSTRAINT `fasecolda_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  CONSTRAINT `fasecolda_cylinder_id_foreign` FOREIGN KEY (`cylinder_id`) REFERENCES `cylinders` (`id`),
  CONSTRAINT `fasecolda_first_reference_id_foreign` FOREIGN KEY (`first_reference_id`) REFERENCES `references` (`id`),
  CONSTRAINT `fasecolda_fuel_type_id_foreign` FOREIGN KEY (`fuel_type_id`) REFERENCES `fuel_types` (`id`),
  CONSTRAINT `fasecolda_second_reference_id_foreign` FOREIGN KEY (`second_reference_id`) REFERENCES `references` (`id`),
  CONSTRAINT `fasecolda_vehicle_class_id_foreign` FOREIGN KEY (`vehicle_class_id`) REFERENCES `vehicle_classes` (`id`),
  CONSTRAINT `fasecolda_vehicle_service_id_foreign` FOREIGN KEY (`vehicle_service_id`) REFERENCES `vehicle_services` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fasecolda`
--

LOCK TABLES `fasecolda` WRITE;
/*!40000 ALTER TABLE `fasecolda` DISABLE KEYS */;
INSERT INTO `fasecolda` VALUES (1,'33617002',1,2,7579,4,1,3,1,NULL,NULL),(2,'33617003',1,2,2567,5,2,4,2,NULL,NULL),(3,'00206001',2,2,3702,3,1,5,3,NULL,NULL),(4,'03201019',3,678,7194,2,1,6,4,NULL,NULL),(5,'03201023',3,678,6035,1,2,7,1,NULL,NULL),(6,'03201028',3,678,6994,5,2,8,1,NULL,NULL);
/*!40000 ALTER TABLE `fasecolda` ENABLE KEYS */;
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

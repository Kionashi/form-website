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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (21,'2013_11_02_024044_create_user_roles_table',1),(79,'2014_10_12_000000_create_users_table',2),(80,'2014_10_12_100000_create_password_resets_table',2),(81,'2015_11_02_010134_create_services_table',2),(82,'2015_11_02_014831_create_visual_values_table',2),(83,'2015_11_03_021045_create_classes_table',2),(84,'2017_11_02_003444_create_brands_table',2),(89,'2017_11_02_015258_create_visual_value_fields_table',2),(90,'2017_11_02_015622_create_visual_value_field_values_table',2),(92,'2017_11_02_024220_create_user_permissions_table',2),(93,'2017_11_02_024410_create_user_roles_permissions_table',2),(96,'2017_11_03_234021_create_basic_data_table',2),(100,'2017_11_18_195533_create_cylinders_table',3),(101,'2017_11_18_201124_create_colors_table',3),(102,'2017_11_18_190111_create_vehicle_classes_table',4),(103,'2017_11_18_190131_create_vehicle_services_table',4),(104,'2017_11_18_201826_create_fuel_types_table',5),(111,'2017_10_18_201124_create_colors_table',7),(112,'2017_10_18_201826_create_fuel_types_table',8),(117,'2017_11_02_010409_create_recording_table',10),(125,'2017_11_03_030348_create_novelties_table',14),(127,'2017_11_27_143600_create_references_table',14),(131,'2017_11_07_154754_create_request_table',15),(149,'2017_11_02_003950_create_complementary_data_table',21),(159,'2017_11_27_203858_create_fasecolda_table',23),(160,'2017_12_01_000002_create_fasecolda_years_values_table',23),(161,'2017_12_01_011548_create_inspections_table',23),(163,'2017_12_02_014444_create_accessories_table',23),(164,'2017_12_03_030629_create_inspections_novelties_table',23),(165,'2017_12_08_160252_create_visual_value_reports_table',23),(170,'2017_11_24_211341_create_controls_table',25),(172,'2017_11_02_020604_create_rtc_table',26),(173,'2017_12_01_204235_create_service_request_table',26);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-16  9:51:44

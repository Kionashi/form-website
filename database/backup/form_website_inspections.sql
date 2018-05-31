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
-- Table structure for table `inspections`
--

DROP TABLE IF EXISTS `inspections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inspections` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `discount` int(11) NOT NULL,
  `mileage` int(11) NOT NULL,
  `approval` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fasecolda_id` int(10) unsigned NOT NULL,
  `fasecolda_year_value_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inspections_fasecolda_id_foreign` (`fasecolda_id`),
  KEY `inspections_fasecolda_year_value_id_foreign` (`fasecolda_year_value_id`),
  CONSTRAINT `inspections_fasecolda_id_foreign` FOREIGN KEY (`fasecolda_id`) REFERENCES `fasecolda` (`id`),
  CONSTRAINT `inspections_fasecolda_year_value_id_foreign` FOREIGN KEY (`fasecolda_year_value_id`) REFERENCES `fasecolda_years_values` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inspections`
--

LOCK TABLES `inspections` WRITE;
/*!40000 ALTER TABLE `inspections` DISABLE KEYS */;
INSERT INTO `inspections` VALUES (1,20,5000,'si','inspections/1-image1.png','inspections/1-image2.png','inspections/1-image3.png','inspections/1-image4.png','inspections/1-image5.png','inspections/1-image6.png',3,27,'2017-12-14 17:18:16','2017-12-14 17:30:44'),(2,20,5000,'Aprobado','inspections/2-image1.png','inspections/2-image2.png','inspections/2-image3.png','inspections/2-image4.png','inspections/2-image5.png','inspections/2-image6.png',3,27,'2017-12-17 19:03:12','2018-01-18 19:11:58'),(3,20,5000,'aprobación','inspections/3-image1.png','inspections/3-image2.png','inspections/3-image3.png','inspections/3-image4.png','inspections/3-image5.png','inspections/3-image6.png',3,27,'2017-12-17 23:18:08','2017-12-17 23:18:15'),(4,20,5000,'aprobación','inspections/4-image1.png','inspections/4-image2.png','inspections/4-image3.png','inspections/4-image4.jpg','inspections/4-image5.png','inspections/4-image6.png',3,29,'2017-12-18 17:33:54','2017-12-18 17:34:01'),(5,20,5000,'aprobación','inspections/5-image1.png','inspections/5-image2.png','inspections/5-image3.png','inspections/5-image4.png','inspections/5-image5.png','inspections/5-image6.jpg',2,25,'2017-12-22 22:14:19','2017-12-22 22:14:27');
/*!40000 ALTER TABLE `inspections` ENABLE KEYS */;
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

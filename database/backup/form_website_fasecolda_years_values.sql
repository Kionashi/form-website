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
-- Table structure for table `fasecolda_years_values`
--

DROP TABLE IF EXISTS `fasecolda_years_values`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fasecolda_years_values` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `fasecolda_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fasecolda_years_values_fasecolda_id_foreign` (`fasecolda_id`),
  CONSTRAINT `fasecolda_years_values_fasecolda_id_foreign` FOREIGN KEY (`fasecolda_id`) REFERENCES `fasecolda` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fasecolda_years_values`
--

LOCK TABLES `fasecolda_years_values` WRITE;
/*!40000 ALTER TABLE `fasecolda_years_values` DISABLE KEYS */;
INSERT INTO `fasecolda_years_values` VALUES (14,2001,1000,1,NULL,NULL),(15,2002,1200,1,NULL,NULL),(16,2003,1300,1,NULL,NULL),(17,2004,1500,1,NULL,NULL),(18,2010,1600,1,NULL,NULL),(19,2015,1700,1,NULL,NULL),(20,2018,1800,1,NULL,NULL),(21,1989,700,2,NULL,NULL),(22,1990,750,2,NULL,NULL),(23,1995,850,2,NULL,NULL),(24,2001,900,2,NULL,NULL),(25,2018,1200,2,NULL,NULL),(26,2005,2000,3,NULL,NULL),(27,2006,2200,3,NULL,NULL),(28,2007,2500,3,NULL,NULL),(29,2018,2800,3,NULL,NULL),(30,2001,50,4,NULL,NULL),(31,2003,80,4,NULL,NULL),(32,2018,1500,4,NULL,NULL),(33,1990,1000,6,NULL,NULL),(34,2000,2000,6,NULL,NULL),(35,2018,3000,6,NULL,NULL);
/*!40000 ALTER TABLE `fasecolda_years_values` ENABLE KEYS */;
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

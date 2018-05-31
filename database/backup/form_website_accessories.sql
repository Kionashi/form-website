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
-- Table structure for table `accessories`
--

DROP TABLE IF EXISTS `accessories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accessories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `inspection_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `accessories_inspection_id_foreign` (`inspection_id`),
  CONSTRAINT `accessories_inspection_id_foreign` FOREIGN KEY (`inspection_id`) REFERENCES `inspections` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accessories`
--

LOCK TABLES `accessories` WRITE;
/*!40000 ALTER TABLE `accessories` DISABLE KEYS */;
INSERT INTO `accessories` VALUES (1,'Pintura cromada','Pinturex','200',1,1,'2017-12-14 17:30:43','2017-12-14 17:30:43'),(2,'Dados felpudos','Dadex','400',3,1,'2017-12-14 17:30:43','2017-12-14 17:30:43'),(3,'Asientos de cuero','Cuerox','750',4,1,'2017-12-14 17:30:43','2017-12-14 17:30:43'),(4,'Luces de neón','Neonx','15',17,1,'2017-12-14 17:30:43','2017-12-14 17:30:43'),(11,'Pintura cromada','Pinturex','200',1,3,'2017-12-17 23:18:14','2017-12-17 23:18:14'),(12,'Dados felpudos','Dadex','400',2,3,'2017-12-17 23:18:14','2017-12-17 23:18:14'),(13,'Asientos de cuero','Cuerox','750',4,3,'2017-12-17 23:18:14','2017-12-17 23:18:14'),(14,'Pintura cromada','Pinturex','200',1,4,'2017-12-18 17:34:01','2017-12-18 17:34:01'),(15,'Dados felpudos','Dadex','400',3,4,'2017-12-18 17:34:01','2017-12-18 17:34:01'),(16,'Asientos de cuero','Cuerox','750',4,4,'2017-12-18 17:34:01','2017-12-18 17:34:01'),(17,'Pintura cromada','Pinturex','200',1,5,'2017-12-22 22:14:26','2017-12-22 22:14:26'),(18,'Dados felpudos','Dadex','400',3,5,'2017-12-22 22:14:26','2017-12-22 22:14:26'),(19,'Asientos de cuero','Cuerox','750',4,5,'2017-12-22 22:14:26','2017-12-22 22:14:26'),(20,'Pintura cromada','Pinturex','200',1,2,'2018-01-18 19:12:08','2018-01-18 19:12:08'),(21,'Dados felpudos','Dadex','400',3,2,'2018-01-18 19:12:08','2018-01-18 19:12:08'),(22,'Asientos de cuero','Cuerox','750',4,2,'2018-01-18 19:12:09','2018-01-18 19:12:09');
/*!40000 ALTER TABLE `accessories` ENABLE KEYS */;
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

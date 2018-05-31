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
-- Table structure for table `novelties`
--

DROP TABLE IF EXISTS `novelties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `novelties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `novelties`
--

LOCK TABLES `novelties` WRITE;
/*!40000 ALTER TABLE `novelties` DISABLE KEYS */;
INSERT INTO `novelties` VALUES (1,'Numero de chasis empatada',0,'2017-11-30 01:39:02','2017-11-30 01:39:02'),(2,'Vehiculo blindado',0,'2017-11-30 01:39:03','2017-11-30 01:39:03'),(3,'Vehiculo marcado',0,'2017-11-30 01:39:03','2017-11-30 01:39:03'),(4,'No se toma impronta de motor por dificil acceso',0,'2017-11-30 01:39:03','2017-11-30 01:39:03'),(5,'Presenta alto grado de corrosion',0,'2017-11-30 01:39:03','2017-11-30 01:39:03'),(6,'Se sugiere solicitar factura de accesorios para acordar valor asegurado',0,'2017-11-30 01:39:04','2017-11-30 01:39:04'),(7,'Piezas de latoneria en mal estado ',0,'2017-11-30 01:39:04','2017-11-30 01:39:04'),(8,'Pinturas con golpes de piedra ',0,'2017-11-30 01:39:04','2017-11-30 01:39:04'),(9,'Pintura con perdida de brillo ',0,'2017-11-30 01:39:04','2017-11-30 01:39:04'),(10,'Numero de chasis regrabado ',0,'2017-11-30 01:39:04','2017-11-30 01:39:04'),(11,'Carroceria en mal estado ',0,'2017-11-30 01:39:04','2017-11-30 01:39:04'),(12,'Seguridad pasiva afectada',0,'2017-11-30 01:39:04','2017-11-30 01:39:04'),(13,'Chasis fisurado',0,'2017-11-30 01:39:04','2017-11-30 01:39:04');
/*!40000 ALTER TABLE `novelties` ENABLE KEYS */;
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

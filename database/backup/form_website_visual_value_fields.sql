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
-- Table structure for table `visual_value_fields`
--

DROP TABLE IF EXISTS `visual_value_fields`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visual_value_fields` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visual_value_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `visual_value_fields_visual_value_id_foreign` (`visual_value_id`),
  CONSTRAINT `visual_value_fields_visual_value_id_foreign` FOREIGN KEY (`visual_value_id`) REFERENCES `visual_values` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visual_value_fields`
--

LOCK TABLES `visual_value_fields` WRITE;
/*!40000 ALTER TABLE `visual_value_fields` DISABLE KEYS */;
INSERT INTO `visual_value_fields` VALUES (1,'torre derecha',1,NULL,NULL),(2,'torre izquierda',1,NULL,NULL),(3,'torpedo',1,NULL,NULL),(4,'tijera derecha',1,NULL,NULL),(5,'tijera izquierda',1,NULL,NULL),(6,'punta chasis traser izq',1,NULL,NULL),(7,'punta chasis traser der',1,NULL,NULL),(8,'punta chasis delant izq',1,NULL,NULL),(9,'punta chasis delant der',1,NULL,NULL),(10,'piso carroceria',1,NULL,NULL),(11,'paral puerta delant der',1,NULL,NULL),(12,'paral puerta delant izq',1,NULL,NULL),(13,'paral panoramico der',1,NULL,NULL),(14,'paral panoramico izq',1,NULL,NULL),(15,'paral central der',1,NULL,NULL),(16,'paral central izq',1,NULL,NULL),(17,'panel traser',1,NULL,NULL),(18,'larguero der',1,NULL,NULL),(19,'larguero izq',1,NULL,NULL),(20,'guardapolvo del der',1,NULL,NULL),(21,'guardapolvo del izq',1,NULL,NULL),(22,'guardapolv traser der',1,NULL,NULL),(23,'guardapolv traser izq',1,NULL,NULL),(24,'frontal',1,NULL,NULL),(25,'estribo der',1,NULL,NULL),(26,'estribo izq',1,NULL,NULL),(27,'cuna motor',1,NULL,NULL),(28,'puerta trasera izq',2,NULL,NULL),(29,'puerta trasera der',2,NULL,NULL),(30,'puerta delant izq',2,NULL,NULL),(31,'puerta delant der',2,NULL,NULL),(34,'guardafango der',2,NULL,NULL),(35,'guardafango izq',2,NULL,NULL),(36,'costado  izq',2,NULL,NULL),(37,'costado  der',2,NULL,NULL),(38,'capota',2,NULL,NULL),(39,'capot',2,NULL,NULL),(40,'bomper trasero',2,NULL,NULL),(41,'bomper delantero',2,NULL,NULL),(42,'baul',2,NULL,NULL),(43,'tipo pintura',3,'2017-12-13 01:32:02','2017-12-13 01:32:02'),(44,'tipo',3,'2017-12-13 01:32:32','2017-12-13 01:32:32'),(45,'vidr trasero izq',4,'2017-12-13 01:33:01','2017-12-13 01:33:01'),(46,'vidr trasero der',4,'2017-12-13 01:33:29','2017-12-13 01:33:29'),(47,'vidr delant izq',4,'2017-12-13 01:33:44','2017-12-13 01:33:44'),(48,'vidr delant der',4,'2017-12-13 01:33:54','2017-12-13 01:33:54'),(49,'unidad izq',4,'2017-12-13 01:34:07','2017-12-13 01:34:07'),(50,'unidad der',4,'2017-12-13 01:34:13','2017-12-13 01:34:13'),(51,'stop izq',4,'2017-12-13 01:34:37','2017-12-13 01:34:37'),(52,'stop der',4,'2017-12-13 01:34:45','2017-12-13 01:34:45'),(53,'panoram trase',4,'2017-12-13 01:34:59','2017-12-13 01:34:59'),(54,'panoram delat',4,'2017-12-13 01:35:13','2017-12-13 01:35:13'),(55,'luneta izq',4,'2017-12-13 01:35:24','2017-12-13 01:35:24'),(56,'luneta der',4,'2017-12-13 01:35:29','2017-12-13 01:35:29'),(57,'Exploradoras',4,'2017-12-13 01:35:42','2017-12-13 01:35:42'),(58,'espejo interno',4,'2017-12-13 01:35:55','2017-12-13 01:35:55'),(59,'custodio fijo izq',4,'2017-12-13 01:36:06','2017-12-13 01:36:06'),(60,'custodio fijo der',4,'2017-12-13 01:36:10','2017-12-13 01:36:10'),(61,'cocuyos',4,'2017-12-13 01:36:20','2017-12-13 01:36:20'),(62,'velocimetro',5,'2017-12-13 01:36:47','2017-12-13 01:36:47'),(63,'testigos',5,'2017-12-13 01:36:57','2017-12-13 01:36:57'),(64,'tacometro',5,'2017-12-13 01:37:07','2017-12-13 01:37:07'),(65,'radio',5,'2017-12-13 01:37:14','2017-12-13 01:37:14'),(66,'pito',5,'2017-12-13 01:37:21','2017-12-13 01:37:21'),(67,'limpiabrisas',5,'2017-12-13 01:37:32','2017-12-13 01:37:32'),(68,'indicador tempera',5,'2017-12-13 01:37:40','2017-12-13 01:37:40'),(69,'espejos electricos',5,'2017-12-13 01:37:52','2017-12-13 01:37:52'),(70,'elevavidrios electri',5,'2017-12-13 01:38:04','2017-12-13 01:38:04'),(71,'calefaccion',5,'2017-12-13 01:38:15','2017-12-13 01:38:15'),(72,'bloqueo central',5,'2017-12-13 01:38:23','2017-12-13 01:38:23'),(73,'aire acondicionado',5,'2017-12-13 01:38:31','2017-12-13 01:38:31'),(74,'turbo',6,'2017-12-13 01:39:40','2017-12-13 01:39:40'),(75,'transmision/diferencial',6,'2017-12-13 01:39:50','2017-12-13 01:39:50'),(76,'tapa valvulas',6,'2017-12-13 01:39:57','2017-12-13 01:39:57'),(77,'refrigerante',6,'2017-12-13 01:40:06','2017-12-13 01:40:06'),(78,'liquido de frenos',6,'2017-12-13 01:40:12','2017-12-13 01:40:12'),(79,'hidraul. d/cion',6,'2017-12-13 01:40:25','2017-12-13 01:40:25'),(80,'combustible',6,'2017-12-13 01:40:35','2017-12-13 01:40:35'),(81,'carter',6,'2017-12-13 01:40:44','2017-12-13 01:40:44'),(82,'bomba inyeccion',6,'2017-12-13 01:40:52','2017-12-13 01:40:52'),(83,'bomba embrague',6,'2017-12-13 01:41:06','2017-12-13 01:41:06'),(84,'amortiguadores',6,'2017-12-13 01:41:15','2017-12-13 01:41:15'),(85,'aceite compresor',6,'2017-12-13 01:41:25','2017-12-13 01:41:25'),(86,'aceite caja',6,'2017-12-13 01:41:32','2017-12-13 01:41:32'),(87,'aceite bloque motor',6,'2017-12-13 01:41:40','2017-12-13 01:41:40'),(88,'tapiceria techo',7,'2017-12-14 03:23:30','2017-12-14 03:23:30'),(89,'tapiceria sillas',7,'2017-12-14 03:23:41','2017-12-14 03:23:41'),(90,'parasoles',7,'2017-12-14 03:23:52','2017-12-14 03:23:52'),(91,'millare',7,'2017-12-14 03:24:01','2017-12-14 03:24:01'),(92,'guantera',7,'2017-12-14 03:24:08','2017-12-14 03:24:08'),(93,'consola central',7,'2017-12-14 03:24:18','2017-12-14 03:24:18'),(94,'cinturon segurid',7,'2017-12-14 03:24:28','2017-12-14 03:24:28'),(95,'carteras puertas',7,'2017-12-14 03:24:36','2017-12-14 03:24:36'),(96,'bandeja porta obj',7,'2017-12-14 03:24:46','2017-12-14 03:24:46'),(97,'alfombra piso',7,'2017-12-14 03:24:55','2017-12-14 03:24:55'),(98,'reversa',8,'2017-12-14 03:26:16','2017-12-14 03:26:16'),(99,'luz techo',8,'2017-12-14 03:26:26','2017-12-14 03:26:26'),(100,'luz placa',8,'2017-12-14 03:26:46','2017-12-14 03:26:46'),(101,'luz media',8,'2017-12-14 03:26:55','2017-12-14 03:26:55'),(102,'luz baul',8,'2017-12-14 03:27:05','2017-12-14 03:27:05'),(103,'luz baja',8,'2017-12-14 03:27:16','2017-12-14 03:27:16'),(104,'luz alta',8,'2017-12-14 03:27:24','2017-12-14 03:27:24'),(105,'freno',8,'2017-12-14 03:27:35','2017-12-14 03:27:35'),(106,'exploradoras',8,'2017-12-14 03:27:47','2017-12-14 03:27:47'),(107,'estacionarias',8,'2017-12-14 03:27:57','2017-12-14 03:27:57'),(108,'direccionales',8,'2017-12-14 03:28:07','2017-12-14 03:28:07'),(109,'refrigerante',9,'2017-12-14 03:28:30','2017-12-14 03:28:30'),(110,'hidraulico',9,'2017-12-14 03:28:39','2017-12-14 03:28:39'),(111,'frenos',9,'2017-12-14 03:28:46','2017-12-14 03:28:46'),(112,'deposito de agua',9,'2017-12-14 03:28:54','2017-12-14 03:28:54'),(113,'compresor a/c',9,'2017-12-14 03:29:03','2017-12-14 03:29:03'),(114,'aceite motor',9,'2017-12-14 03:29:12','2017-12-14 03:29:12'),(115,'trasera der',10,'2017-12-14 03:29:34','2017-12-14 03:29:34'),(116,'trasera izq',10,'2017-12-14 03:29:45','2017-12-14 03:29:45'),(117,'delant der',10,'2017-12-14 03:29:55','2017-12-14 03:29:55'),(118,'delant izq',10,'2017-12-14 03:30:05','2017-12-14 03:30:05'),(119,'triangulo/conos',11,'2017-12-14 03:30:35','2017-12-14 03:30:35'),(120,'tacos',11,'2017-12-14 03:30:44','2017-12-14 03:30:44'),(121,'llaves fijas',11,'2017-12-14 03:30:56','2017-12-14 03:30:56'),(122,'llaves de espancion',11,'2017-12-14 03:31:28','2017-12-14 03:31:28'),(123,'llanta de repuesto',11,'2017-12-14 03:31:39','2017-12-14 03:31:39'),(124,'linterna',11,'2017-12-14 03:31:48','2017-12-14 03:31:48'),(125,'juego destornilladores',11,'2017-12-14 03:31:58','2017-12-14 03:31:58'),(126,'gato',11,'2017-12-14 03:32:03','2017-12-14 03:32:03'),(127,'extintor vigente',11,'2017-12-14 03:32:26','2017-12-14 03:32:26'),(128,'cruceta',11,'2017-12-14 03:32:36','2017-12-14 03:32:36'),(129,'chaleco reflectivo',11,'2017-12-14 03:32:44','2017-12-14 03:32:44'),(130,'botiquin',11,'2017-12-14 03:32:53','2017-12-14 03:32:53'),(131,'alicate',11,'2017-12-14 03:33:00','2017-12-14 03:33:00');
/*!40000 ALTER TABLE `visual_value_fields` ENABLE KEYS */;
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

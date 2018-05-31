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
-- Table structure for table `complementary_data`
--

DROP TABLE IF EXISTS `complementary_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `complementary_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `turn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodywork` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bodywork_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `import_declaration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chassis_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `import_date` date NOT NULL,
  `plate_date` date NOT NULL,
  `observation` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headquarters` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requested_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insured` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intermediary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cylinder_id` int(10) unsigned NOT NULL,
  `fuel_type_id` int(10) unsigned NOT NULL,
  `color_id` int(10) unsigned NOT NULL,
  `service_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `complementary_data_cylinder_id_foreign` (`cylinder_id`),
  KEY `complementary_data_fuel_type_id_foreign` (`fuel_type_id`),
  KEY `complementary_data_color_id_foreign` (`color_id`),
  KEY `complementary_data_service_id_foreign` (`service_id`),
  CONSTRAINT `complementary_data_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`),
  CONSTRAINT `complementary_data_cylinder_id_foreign` FOREIGN KEY (`cylinder_id`) REFERENCES `cylinders` (`id`),
  CONSTRAINT `complementary_data_fuel_type_id_foreign` FOREIGN KEY (`fuel_type_id`) REFERENCES `fuel_types` (`id`),
  CONSTRAINT `complementary_data_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `vehicle_services` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complementary_data`
--

LOCK TABLES `complementary_data` WRITE;
/*!40000 ALTER TABLE `complementary_data` DISABLE KEYS */;
INSERT INTO `complementary_data` VALUES (1,'DIurno','3','5','bonita',15,'hj','1','sasasa','ssa','2017-12-06','2018-01-04','fssdsaa','no se','alguien','si','no','complementary-data/1primary.jpg','complementary-data/1secondary.png',8,1,1,1,'2017-12-06 18:08:28','2017-12-06 18:08:28'),(2,'DIurno','3','5','bonita',15,'ROJO','1','123','456','2017-12-15','2017-12-21','gggfg','Caracas','sasa','si','sdsd','complementary-data/2primary.jpg','complementary-data/2secondary.jpg',6,1,1,1,'2017-12-06 20:53:07','2017-12-06 20:53:07'),(3,'1','3','que con ella','6',15,'hj','1','123','456','2017-12-13','2017-12-06','asdfg','Caracas','alguien','aseguradora','no','complementary-data/3primary.png','complementary-data/3secondary.png',5,1,1,1,'2017-12-06 20:58:36','2017-12-06 20:58:36'),(4,'1','3','5','bonita',15,'hj','1','123','456','2017-12-06','2017-12-20','esddssdd','Caracas','alguien','aseguradora','buena pregunta','complementary-data/4primary.png','complementary-data/4secondary.png',6,1,1,1,'2017-12-06 21:03:45','2017-12-06 21:03:45'),(5,'1','3','454','6',15,'ROJO','1','123','456','2017-12-06','2017-12-06','sdds','Caracas','alguien','aseguradora','s','complementary-data/5primary.png','complementary-data/5secondary.png',5,1,1,1,'2017-12-07 01:15:51','2017-12-07 01:15:51'),(6,'DIurno','3','5','6',15,'ROJO','1','sasasa','ssa','2017-12-07','2017-12-07','eesdsd','que','obs','sdsdsd','s',NULL,NULL,8,5,1,1,'2017-12-07 17:41:47','2017-12-07 18:03:34'),(7,'1','3','aassa','6',15,'ROJO','1','123','456','2017-12-09','2017-12-09','sds','que','sasa','aseguradora','buena pregunta',NULL,NULL,8,5,1,1,'2017-12-09 23:25:37','2017-12-10 00:54:35'),(8,'DIurno','3','5','bonita',15,'ROJO','1','123','456','2017-12-09','2017-12-09','sadfghjnkml','Caracas','alguien','aseguradora','buena pregunta',NULL,NULL,5,5,1,1,'2017-12-10 04:07:30','2017-12-10 04:07:30'),(9,'1','3','que con ella','321',15,'saassa','1','123','ssa','2017-12-10','2017-12-10','sdewewq','sdds','obs','ser','buena pregunta',NULL,NULL,5,3,2,1,'2017-12-10 23:47:05','2017-12-10 23:47:05'),(10,'1','3','5','6',15,'ROJO','1','123','456','2017-12-11','2017-12-11','gghhg','Caracas','alguien','aseguradora','buena pregunta','complementary-data/10primary.png','complementary-data/10secondary.png',7,3,3,1,'2017-12-11 16:38:30','2017-12-11 16:38:30'),(11,'DIurno','3','que con ella','6',15,'ROJO','1','123','456','2017-12-11','2017-12-11','hng','Caracas','alguien','aseguradora','buena pregunta','complementary-data/11primary.png','complementary-data/11secondary.png',3,5,1,1,'2017-12-11 20:29:45','2017-12-11 20:29:46'),(12,'1','3','5','6',15,'ROJO','1','123','456','2017-12-12','2017-12-12','asdfghjkl;\'','Caracas','alguien','aseguradora','buena pregunta','complementary-data/12primary.png','complementary-data/12secondary.png',6,2,1,2,'2017-12-12 16:42:53','2017-12-12 16:42:55'),(13,'1','3','5','6',15,'hj','1','123','ssa','2017-12-12','2017-12-22','Observaciones','Caracas','alguien','aseguradora','intermediario','complementary-data/13primary.png','complementary-data/13secondary.png',6,2,3,1,'2017-12-12 17:08:11','2017-12-12 17:08:11'),(14,'DIurno','3','5','6',15,'ROJO','4445FSD66D3SF3F','A5DD56SDASA','6sa5sa56as6d464','2017-12-21','2017-12-29','ASDFGHJKL','Caracas','MI','aseguradora','intermediario','complementary-data/14primary.jpg','complementary-data/14secondary.jpg',5,3,4,1,'2017-12-12 19:54:36','2017-12-12 19:54:37'),(15,'DIurno','3','que con ella','6',15,'saassa','4445FSD66D3SF3F','123','456','2017-11-22','2017-11-15','jldjjksdjksddnjdsjkdsjbksdbjkb','Caracas','alguien','aseguradora','intermediario','complementary-data/15primary.png','complementary-data/15secondary.png',5,3,5,1,'2017-12-13 00:21:15','2017-12-13 00:21:16'),(16,'1','3','5','bonita',15,'ROJO','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J8LGD','2017-12-14','2017-12-14','JHGFCXDFGRHTYJKUL','Caracas','alguien','aseguradora','intermediario','complementary-data/16primary.png','complementary-data/16secondary.png',5,3,5,1,'2017-12-14 16:43:10','2017-12-14 16:43:10'),(17,'DIurno','3','carroceria','bonita',15,'saassa','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J8LGD','2017-12-14','2017-12-14','qertdfxsaXcz','Caracas','alguien','aseguradora','intermediario','complementary-data/17primary.png','complementary-data/17secondary.png',5,3,6,1,'2017-12-15 01:07:31','2017-12-15 01:08:06'),(18,'DIurno','3','carroceria','bonita',15,'ROJO','4445FSD66D3SF3F','sasasa','5KJ5B4KKJ2VK6K7J8LGD','2017-12-14','2017-12-14','asdfgh','Caracas','MI','aseguradora','intermediario','complementary-data/18primary.png','complementary-data/18secondary.jpg',5,3,6,1,'2017-12-15 01:26:17','2017-12-15 01:26:17'),(19,'DIurno','3','5','bonita',15,'ROJO','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J8LGD','2017-12-15','2017-12-15','jnhbgvcxcfvgbhnjkl','Caracas','alguien','aseguradora','intermediario',NULL,NULL,5,3,1,1,'2017-12-15 19:03:46','2017-12-15 19:03:46'),(20,'1','3','carroceria','bonita',15,'ROJO','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J8LGD','2017-12-15','2017-12-15','aszdfghjgfdsa','Caracas','alguien','aseguradora','intermediario','complementary-data/20primary.png','complementary-data/20secondary.png',5,3,1,1,'2017-12-15 19:36:08','2017-12-15 19:36:34'),(21,'DIurno','3','carroceria','bonita',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J8LGD','2017-12-15','2017-12-15','sdfghjgfcdxsaerdtfghvbcxdsedfc','Caracas','alguien','aseguradora','intermediario','complementary-data/21primary.png','complementary-data/21secondary.png',4,5,4,1,'2017-12-15 22:22:03','2017-12-15 22:22:04'),(22,'1','3','carroceria','bonita',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J8LGD','2017-12-15','2017-12-15','hgfdsadfghjkilkhgfdsgrthyjhn','Caracas','alguien','aseguradora','intermediario',NULL,NULL,5,3,5,1,'2017-12-16 00:14:10','2017-12-16 00:14:10'),(23,'DIurno','3','carroceria','bonita',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J8LGD','2017-12-15','2017-12-15','asdfghjkljhgfdszSAdfghjkljyiutfgcbvnmjkhjghfg','Caracas','alguien','aseguradora','intermediario','complementary-data/23primary.png','complementary-data/23secondary.jpg',5,3,1,1,'2017-12-16 04:51:15','2017-12-16 04:51:16'),(24,'DIurno','3','carroceria','bonita',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J8LGD','2017-12-17','2017-12-17','khjgfdsfgjhkl;o;hkjgfhdgsfhkjilkhygjfdsfdghjn','Caracas','alguien','aseguradora','intermediario','complementary-data/24primary.png','complementary-data/24secondary.png',5,3,3,1,'2017-12-17 16:57:00','2017-12-17 16:57:00'),(25,'DIurno','3','carroceria','bonita',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J','2017-12-17','2017-12-17','hgrtgfcbn jkliouyfthgcvugfydthxfgcvkjbhjcgn bmjbvkhc n','Caracas','alguien','aseguradora','intermediario','complementary-data/25primary.png','complementary-data/25secondary.png',5,3,10,1,'2017-12-17 17:22:18','2018-01-16 00:32:52'),(26,'DIurno','3','carroceria','bonita',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J','2017-12-17','2017-12-17','JGHDVKVKBCAFKJAFSBKAKJADBKASJKBSAJBKDDSDAKJ SAKJ','Caracas','alguien','aseguradora','intermediario','complementary-data/26primary.jpg','complementary-data/26secondary.jpeg',5,3,7,1,'2017-12-17 19:00:42','2017-12-17 19:00:43'),(27,'DIurno','3','carroceria','tipo carroceria',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J8LGD','2017-12-17','2017-12-17','hjgdfsdhgjghfgdghkyjgvgjhkyijfhvnbjgvngjcbvnhfcbcbvgjxcbvfvcbcnvnvnvvbvb','Caracas','alguien','aseguradora','intermediario','complementary-data/27primary.png','complementary-data/27secondary.png',5,3,7,1,'2017-12-17 23:16:49','2017-12-17 23:16:50'),(28,'DIurno','3','carroceria','bonita',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J8LGD','2017-12-17','2017-12-17','jjscdkadskasdkjsadkjadjkadjkad','Caracas','alguien','aseguradora','intermediario','complementary-data/28primary.png','complementary-data/28secondary.png',5,3,1,1,'2017-12-18 03:54:05','2017-12-18 03:54:05'),(29,'DIurno','3','carroceria','tipo carroceria',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J8LGD','2017-12-18','2017-12-18','sbuadhkzchjadhvkc a jak sh kaskh s khASAKAKDS HES HKZDHVAISSAHVSAHKH hjsdhkvv kjjk as jas','Caracas','alguien','aseguradora','intermediario','complementary-data/29primary.png','complementary-data/29secondary.png',5,3,7,1,'2017-12-18 17:31:40','2017-12-18 17:31:40'),(30,'1','3','5','tipo carroceria',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J','2017-12-07','2017-12-28','dsdssa','Caracas','alguien','aseguradora','intermediario','complementary-data/30primary.png','complementary-data/30secondary.png',5,3,1,1,'2017-12-19 04:46:33','2017-12-19 04:46:33'),(31,'DIurno','3','carroceria','bonita',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J','2017-12-19','2017-12-19','jbasdjkskjasa sjkjkwwksuqkwqask','Caracas','alguien','aseguradora','intermediario','complementary-data/31primary.png','complementary-data/31secondary.png',5,3,5,1,'2017-12-19 18:24:15','2017-12-19 18:24:15'),(32,'turno','3','carroceria','tipo carroceria',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J','2017-12-22','2017-12-22','observación','Caracas','alguien','aseguradora','intermediario','complementary-data/32primary.png','complementary-data/32secondary.png',5,3,8,1,'2017-12-22 21:53:45','2017-12-22 21:53:45'),(33,'turno','3','carroceria','tipo carroceria',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J','2017-12-22','2017-12-22','ssasasaas','Caracas','alguien','aseguradora','intermediario','complementary-data/33primary.png','complementary-data/33secondary.png',4,5,1,2,'2017-12-22 22:09:09','2017-12-22 22:09:10'),(34,'1','3','carroceria','tipo carroceria',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J','2017-12-22','2017-12-22','hjjjhhj','Caracas','sasa','aseguradora','intermediario','complementary-data/34primary.png','complementary-data/34secondary.png',3,4,9,1,'2017-12-23 00:01:08','2017-12-23 00:01:09'),(35,'DIurno','3','carroceria','tipo carroceria',15,'declaracion de importacion','4445FSD66D3SF3F','123','adssdsd','2018-01-17','2018-01-17','gfds','Caracas','MI','aseguradora','buena pregunta','complementary-data/35primary.png','complementary-data/35secondary.png',5,3,1,1,'2018-01-18 01:56:45','2018-01-18 01:56:46'),(36,'1','3','5','bonita',15,'declaracion de importacion','4445FSD66D3SF3F','A5DD56SDASA','5KJ5B4KKJ2VK6K7J','2018-01-18','2018-01-18','aasdasasas','Caracas','sasa','aseguradora','buena pregunta','complementary-data/36primary.png','complementary-data/36secondary.png',8,5,1,2,'2018-01-18 14:25:47','2018-01-18 14:59:51');
/*!40000 ALTER TABLE `complementary_data` ENABLE KEYS */;
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

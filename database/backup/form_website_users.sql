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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_user_role_id_foreign` (`user_role_id`),
  CONSTRAINT `users_user_role_id_foreign` FOREIGN KEY (`user_role_id`) REFERENCES `user_roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Oscar Diaz','admin@admin.com','ACTIVE','$2y$10$gR0rLvRteqVaFR3YQHXzrOYiwVN8YrgOLanPQ8afNnxm6flqDJAvu','XKNcWrgHL2xGWvK1NdZRGMcu0gyAegurmTFLthdX4WysUkuW7vPIuw6lW5J0',1,'2017-11-08 06:25:28','2017-12-24 18:40:13'),(3,'Victor Cardozo2','bigtor.cardozo@gmail.com','ACTIVE','$2y$10$eF5P9F53BWw1s5FJ/R6mquyi3bWOJ8ts3IebkEJZh/4XIHbPmCiYq','0vv8q5HpyWN0mqleYdyIMQSwV1s19Q82kPxsUQSBZey4nFfqaJCnh2aZbwT9',1,'2017-11-15 03:43:49','2018-01-16 19:19:17'),(5,'test','test@test.com','ACTIVE','$2y$10$nGtBOMPPP16CAbB.EXHqBOw.xRndb7YqcUG7AHzZNjae8j4JazErW',NULL,2,'2018-01-16 19:18:54','2018-01-16 19:18:54'),(6,'test3','2@2.com','ACTIVE','$2y$10$hXGZUqSrXT.r1ud4BVA/AOVpSdFB9W4CqkEOh53vhfRZWBzfIV6Ye',NULL,1,'2018-01-17 04:10:48','2018-01-17 00:13:32'),(7,'externo','ext@terno.com','ACTIVE','$2y$10$IpW69IJzYt8EL78WEaSq5e8lF3Ji9Xl.YQsQ93/17awj8Hi157GIG','rOXtnf6WAWlyMfWRc9uVUOBUyks1jofaqdRzyNborFDfm5EUwZVnabazZy2H',3,'2018-01-16 23:44:40','2018-01-24 20:06:02'),(8,'Inspector 1','inspector1@mail.com','ACTIVE','$2y$10$sb2I4ZI1OIRToGrao8YPf.4Skgm3uSkxMVuamH/eg0JZwjkeC0thG',NULL,4,'2018-01-17 17:06:20','2018-01-17 17:06:20'),(9,'Inspector 2','inspector2@mail.com','ACTIVE','$2y$10$SBO.2DLXvu7NBEMEUlaJLOkEvb3EpM35tEcYFc611H9V0bb2JOHwK',NULL,4,'2018-01-17 17:06:46','2018-01-17 17:06:46'),(10,'Inspector deshabilitado','deshab@mail.com','INACTIVE','$2y$10$r6VHzKQm.H6uySy.f6YR2ul7L.6x0otUmNMEsjAkBiYV5CLNXD.zO',NULL,4,'2018-01-17 17:07:31','2018-01-17 17:07:31');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
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

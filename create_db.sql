-- MySQL dump 10.13  Distrib 5.5.47, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: national_electronics
-- ------------------------------------------------------
-- Server version	5.5.47-0ubuntu0.14.04.1

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
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(10) unsigned NOT NULL,
  `brand_name` text COLLATE utf8_unicode_ci NOT NULL,
  `brand_image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `brands_category_id_index` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (7,1,'Blackberry','asdfgh,k/drfgth','2016-04-27 03:01:37','2016-04-29 00:55:20'),(9,1,'LG','','2016-04-27 03:18:14','2016-04-27 03:18:14'),(14,1,'Apple','iPhone','2016-05-04 03:44:36','2016-05-04 03:44:36'),(17,1,'HTC','','2016-05-05 04:05:44','2016-05-05 04:05:44'),(18,1,'Motorola','','2016-05-05 04:11:30','2016-05-05 04:11:30'),(19,1,'Microsoft','','2016-05-05 04:12:55','2016-05-05 04:12:55'),(20,1,'SAMSUNG','','2016-05-05 04:27:24','2016-05-05 04:27:24'),(21,1,'Hyundai','','2016-05-05 04:32:15','2016-05-05 04:32:15'),(22,1,'Sony','','2016-05-05 05:35:35','2016-05-05 05:35:35');
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'GSM Mobile Phones','2016-04-23 22:19:41','2016-05-06 00:38:22'),(6,'Tablets','2016-04-27 03:00:25','2016-05-06 06:39:50'),(7,'Accessories','2016-04-27 03:00:36','2016-05-06 06:40:19');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `companies_customer_id_index` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` VALUES (1,1,'Company Name','Company Contact','Company Address','Company Phone','2016-05-06 01:09:48','2016-05-06 01:09:48');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `business_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `business_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `business_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile_phone` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `web_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `owner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resale_cert` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `validation_date` datetime NOT NULL,
  `bank_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `business_account` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bank_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `business_acct_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bank_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `authorizing_officer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'Business name','Business Address','Businss Phone','Fax Phone',0,'',NULL,'Owner','Contact','Resale Cert','2016-05-06 01:05:10','','','','','','','2016-05-06 01:09:41','2016-05-06 01:09:41');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2016_04_23_221112_create_categories_table',1),('2016_04_23_221119_create_brands_table',1),('2016_04_23_221126_create_products_table',1),('2016_04_23_222105_update_categories',2),('2016_04_23_222208_categories',3),('2016_04_23_222352_brands',4),('2016_04_29_000004_create_customers_table',5),('2016_04_29_004017_create_companies_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int(10) unsigned NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_brand_id_index` (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (18,14,'6S Rose Gold 16GB','','http://cdn2.gsmarena.com/vv/pics/apple/apple-iphone-6s-2.jpg','2016-05-05 04:04:52','2016-05-05 05:17:06'),(19,18,'Moto G XT1068DS','','http://cdn2.gsmarena.com/vv/pics/motorola/motorola-moto-g-1.jpg','2016-05-05 04:12:17','2016-05-05 05:57:50'),(20,19,'640 White Lumia','','http://cdn2.gsmarena.com/vv/pics/nokia/nokia-lumia-640-2.jpg','2016-05-05 04:14:29','2016-05-05 05:02:08'),(21,20,'A3 A310F /DS Black 4G','','http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-a3-2016-1.jpg','2016-05-05 04:31:00','2016-05-05 05:00:02'),(22,7,'Passport Bk','','http://cdn2.gsmarena.com/vv/pics/blackberry/blackberry-passport-att.jpg','2016-05-05 04:31:32','2016-05-05 05:03:37'),(24,20,'Grand Neo White','','http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-grand-neo-1.jpg','2016-05-05 04:49:40','2016-05-05 04:49:40'),(25,21,'E435 Gold 4\"','','http://www.hyundaimobile.us/wp-content/uploads/2015/07/phone_E435_page.jpg','2016-05-05 05:11:58','2016-05-05 05:12:11'),(26,17,'A9 Gold 32GB 4G','','http://cdn2.gsmarena.com/vv/pics/htc/htc-one-a9-4.jpg','2016-05-05 05:20:16','2016-05-05 05:20:45'),(27,17,'A9 Silver 32GB 4G','','http://cdn2.gsmarena.com/vv/pics/htc/htc-one-a9-new1.jpg','2016-05-05 05:21:29','2016-05-05 05:21:29'),(28,17,'A9 Gray 32GB 4G','','http://cdn2.gsmarena.com/vv/pics/htc/htc-one-a9-new2.jpg','2016-05-05 05:21:55','2016-05-05 05:22:11'),(29,19,'950XL Lumia RM1085 White','','http://cdn2.gsmarena.com/vv/pics/microsoft/microsoft-lumia-950-xl-2.jpg','2016-05-05 05:25:47','2016-05-05 05:25:47'),(30,20,'S6 Edge G925F Black','','http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s6-edge-3.jpg','2016-05-05 05:27:46','2016-05-05 05:27:46'),(31,20,'S6 Edge G925F Gold','','http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s6-edge-5.jpg','2016-05-05 05:28:41','2016-05-05 05:29:23'),(32,9,'G2 D802 Red 32GB','','http://cdn2.gsmarena.com/vv/pics/lg/lg-g2-gold-red.jpg','2016-05-05 05:32:16','2016-05-05 05:32:16'),(33,9,'G2 D802 Black 32GB','','http://cdn2.gsmarena.com/vv/pics/lg/lg-g2-d802-4.jpg','2016-05-05 05:32:52','2016-05-05 05:32:52'),(34,22,'C5 Ultra E5553 Black','','http://cdn2.gsmarena.com/vv/pics/sony/sony-xperia-c5-ultra-2.jpg','2016-05-05 05:37:25','2016-05-05 05:37:25'),(35,22,'M4 Aqua E2353 Black 4G','','http://cdn2.gsmarena.com/vv/pics/sony/-sony-xperia-m4-aqua-2.jpg','2016-05-05 05:42:14','2016-05-05 05:42:14'),(36,7,'Priv','','http://cdn2.gsmarena.com/vv/pics/blackberry/blackberry-priv-7.jpg','2016-05-05 05:44:09','2016-05-05 05:44:09'),(37,9,'G3 S D722 White LTE','','http://cdn2.gsmarena.com/vv/pics/lg/lg-g3-beat.jpg','2016-05-05 05:56:24','2016-05-05 05:56:24'),(40,20,'A5 A500H Galaxy Black','','http://cdn2.gsmarena.com/vv/pics/samsung/samsung-a5-1.jpg','2016-05-06 02:30:46','2016-05-06 02:30:46'),(41,20,'A5 A500H Galaxy White','','http://sim-phone.by/files/products/Samsung-A500H-Galaxy-A5-Duos-White.500x500.jpg?fabe1f1a70d0e9d3d0fa9e0cd3ce2872','2016-05-06 02:34:04','2016-05-06 09:41:49'),(42,20,'A9 A9000 Gold','','http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-a9-2016-6.jpg','2016-05-06 03:34:16','2016-05-06 03:34:16'),(43,20,'Grand Prime G131H Black','','http://cdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-grand-prime-sm-g530f-1.jpg','2016-05-06 03:40:45','2016-05-06 03:41:01');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Delete me ','delete@test.com','$2y$10$4k16UvmigAzcQEwPPWX/CuzUOcr0AeCADYMfqNIt1WEfFDJCPia.m','EqCEpaAF1Lh2HnO9vQdN7YXncLZwSNdsl1o8zVJibG1K3kCn0dZr0VLR6j8e','2016-04-27 01:19:16','2016-04-27 01:23:30'),(2,'Sean Skiver ','seanskiver@gmail.com','$2y$10$ccY1rGwbfaCUC8kh/h9gjuKxEPNoXnDkJLoZBX2Ah/4H.5ChbuCqm','ttVQtWycy559T9BoIcpRBvRT0vPT4aoRwgPJaGuHiHZpwkT2jZDIuzTVmeaE','2016-05-04 00:42:59','2016-05-06 06:54:42'),(3,'Admin','admin@admin.com','$2y$10$3.KkjOWx3dwfV.pEP4Tb0epqSUGel8Y7OHWrLV4cLOhqqREXJCvFC','QptxAUBfZx9LCrQavMuqvgQyPTIqwP7xbcI4PHBYd7rc8Bt7QbTokCUmUGVt','2016-05-04 02:32:37','2016-05-04 04:21:58'),(4,'Serigne Lo','los@alfredstate.edu','$2y$10$T7YIJYVPRWdDPih/8HGjIOb5AHh9bYKfOQ3gynT2eVlV5TSmbFwfm','aMpYgYENCpQR1JMBTtCOt5CFMK1QmK9qiX2hYYnmp7XzYDynOhkR7Hic8jJi','2016-05-04 04:26:33','2016-05-06 16:31:24'),(5,'Alex Wilber','wilbera@alfredstate.edu','$2y$10$dnOy0NlU7ig65e/8wVovYu6rc47oYEA/ruc4aLDhn79IFKyzQAOJe','hYFwg2lNtADBUQTkogKmwFGDT9mzNz5o3INk0HAZJMCdKtwl86m0eflhMToc','2016-05-06 02:28:53','2016-05-06 04:25:04');
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

-- Dump completed on 2016-05-07  0:05:25

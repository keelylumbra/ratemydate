-- MySQL dump 10.13  Distrib 5.7.13, for osx10.11 (x86_64)
--
-- Host: localhost    Database: ratemydate
-- ------------------------------------------------------
-- Server version	5.7.13

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
-- Table structure for table `dates`
--

DROP TABLE IF EXISTS `dates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `picture_path1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_path2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture_path3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `site_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture_rate` int(11) NOT NULL,
  `cool_rate` int(11) NOT NULL,
  `repeat_rate` int(11) NOT NULL,
  `nice_rate` int(11) NOT NULL,
  `review` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dates`
--

LOCK TABLES `dates` WRITE;
/*!40000 ALTER TABLE `dates` DISABLE KEYS */;
INSERT INTO `dates` VALUES (1,NULL,NULL,'http://i.imgur.com/Zg4Wz3u.jpg?1','http://i.huffpost.com/gen/2808950/images/o-JON-SNOW-facebook.jpg','https://s.yimg.com/uu/api/res/1.2/SU8AcfDWpwBTfYEgc0etgA--/aD0xMTE4O3c9NjMwO3NtPTE7YXBwaWQ9eXRhY2h5b24-/http://l.yimg.com/os/publish-images/lifestyles/2015-06-16/35d08970-144b-11e5-ae4d-53c06b2c9bf1_Jon-Snow-Game-of-Thrones-Tinder.jpg','crows_before_hoes','tinder',3,3,2,2,'Jon seemed nice enough online. I found it weird that he wore all black and took his dog everywhere we went.'),(2,NULL,NULL,'https://s4.scoopwhoop.com/anj/ewfgd/334132399.jpg','http://images-cdn.9gag.com/photo/a3Bmwdv_700b.jpg','https://i1.wp.com/www.forevergeek.com/wp-content/media/2013/06/Game-of-Thrones-Dating-Profiles-Hodor1.png?resize=350%2C200','door_holder69','tinder',8,3,8,8,'Hodor wasnt much of a talker... maybe he was nervous? He just kept repeating his name the whole time. He was really good at holding the door open though.'),(3,NULL,NULL,'http://laughingsquid.com/wp-content/uploads/2013/04/tumblr_mkfdn7dJE21qzx3jto1_500.png','http://38.media.tumblr.com/f7209174197c7423fd3e1017c60c758b/tumblr_nc5kw5hoZL1qdftrio3_500.jpg','http://i.imgur.com/mv7dWKI.jpg','KINGSLAYER','plenty of fish',9,8,3,5,'Jaime was perfect! Too perfect... So I lurked his facebook and found the post attached... WTF!!!!');
/*!40000 ALTER TABLE `dates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (41,'2013_11_29_214948_create_dates_table',1),(42,'2014_10_12_000000_create_users_table',1),(43,'2014_10_12_100000_create_password_resets_table',1),(44,'2016_12_13_232112_create_rates_table',1);
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
  `created_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `ratings`
--

DROP TABLE IF EXISTS `ratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ratings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_name_id` int(10) unsigned NOT NULL,
  `picture_rate` int(11) NOT NULL,
  `picture_path1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture_path2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture_path3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cool_rate` int(11) NOT NULL,
  `repeat_rate` int(11) NOT NULL,
  `nice_rate` int(11) NOT NULL,
  `review` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ratings_user_name_id_foreign` (`user_name_id`),
  CONSTRAINT `ratings_user_name_id_foreign` FOREIGN KEY (`user_name_id`) REFERENCES `dates` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ratings`
--

LOCK TABLES `ratings` WRITE;
/*!40000 ALTER TABLE `ratings` DISABLE KEYS */;
/*!40000 ALTER TABLE `ratings` ENABLE KEYS */;
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
  `review_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_review_id_foreign` (`review_id`),
  CONSTRAINT `users_review_id_foreign` FOREIGN KEY (`review_id`) REFERENCES `dates` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2017-01-11 10:41:22

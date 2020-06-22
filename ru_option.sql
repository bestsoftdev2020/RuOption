/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 5.7.26 : Database - ru_option
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ru_option` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `ru_option`;

/*Table structure for table `activations` */

DROP TABLE IF EXISTS `activations`;

CREATE TABLE `activations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `activations` */

insert  into `activations`(`id`,`user_id`,`code`,`completed`,`completed_at`,`created_at`,`updated_at`) values 
(1,1,'JQY5jCSqoAslQOkcrbSnA1E5mxs6hLu8',1,'2020-03-02 06:48:12','2020-03-02 06:48:12','2020-03-02 06:48:12'),
(2,5,'BVofPXvzBZSbCbZHszjH2Sz1eng2AbXk',1,'2020-03-19 14:13:27','2020-03-19 14:13:26','2020-03-19 14:13:27'),
(3,6,'oHCPQxt5Cdc42w6WvIpiVrcjy687ab0e',1,'2020-03-19 14:15:51','2020-03-19 14:15:51','2020-03-19 14:15:51'),
(4,9,'pqZbcsZrfAeLXMFfYtgbP2pd1SLvv9ag',1,'2020-03-20 11:35:10','2020-03-20 11:35:10','2020-03-20 11:35:10'),
(5,10,'S9kVgbI6lhOpUX16adhX2twWl4V9UTVN',1,'2020-03-20 11:38:02','2020-03-20 11:38:02','2020-03-20 11:38:02'),
(6,11,'aDFp46lgZddB5tpt5BvHGUZKHnb6nIkf',1,'2020-03-20 11:39:07','2020-03-20 11:39:07','2020-03-20 11:39:07'),
(7,12,'tcOgdqe0WOXISKJLFJ2gqmJ8h6MTqKn2',1,'2020-03-20 11:39:36','2020-03-20 11:39:36','2020-03-20 11:39:36'),
(8,13,'lAnxUIM50iX8dSRWiFzLx7Toei1wIQtO',1,'2020-03-20 11:40:06','2020-03-20 11:40:06','2020-03-20 11:40:06'),
(9,14,'H9BC35I49Ydje8j657XwPnrcfPoijzWO',1,'2020-03-20 18:36:14','2020-03-20 18:36:14','2020-03-20 18:36:14');

/*Table structure for table `activity_log` */

DROP TABLE IF EXISTS `activity_log`;

CREATE TABLE `activity_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `subject_type` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `causer_id` int(11) DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `properties` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=MyISAM AUTO_INCREMENT=264 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `activity_log` */

insert  into `activity_log`(`id`,`log_name`,`description`,`subject_id`,`subject_type`,`causer_id`,`causer_type`,`properties`,`created_at`,`updated_at`) values 
(1,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-02 07:32:08','2020-03-02 07:32:08'),
(2,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-02 07:32:21','2020-03-02 07:32:21'),
(3,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-02 07:38:29','2020-03-02 07:38:29'),
(4,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-02 07:39:20','2020-03-02 07:39:20'),
(5,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-02 07:40:36','2020-03-02 07:40:36'),
(6,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-02 07:40:48','2020-03-02 07:40:48'),
(7,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-02 07:44:09','2020-03-02 07:44:09'),
(8,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-02 07:44:14','2020-03-02 07:44:14'),
(9,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-02 07:44:32','2020-03-02 07:44:32'),
(10,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-02 07:44:40','2020-03-02 07:44:40'),
(11,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-02 08:02:21','2020-03-02 08:02:21'),
(12,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-02 08:02:27','2020-03-02 08:02:27'),
(13,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-02 08:02:50','2020-03-02 08:02:50'),
(14,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-02 08:04:37','2020-03-02 08:04:37'),
(15,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-02 08:12:50','2020-03-02 08:12:50'),
(16,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-02 09:37:40','2020-03-02 09:37:40'),
(17,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-02 09:38:54','2020-03-02 09:38:54'),
(18,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-02 11:42:57','2020-03-02 11:42:57'),
(19,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-02 11:43:07','2020-03-02 11:43:07'),
(20,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-02 14:53:20','2020-03-02 14:53:20'),
(21,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-02 20:17:39','2020-03-02 20:17:39'),
(22,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-02 21:49:32','2020-03-02 21:49:32'),
(23,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-02 21:49:39','2020-03-02 21:49:39'),
(24,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-02 21:57:33','2020-03-02 21:57:33'),
(25,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-02 21:57:46','2020-03-02 21:57:46'),
(26,'John Doe','User Updated by John Doe',1,'App\\User',1,'App\\User','[]','2020-03-02 21:58:35','2020-03-02 21:58:35'),
(27,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-03 00:38:23','2020-03-03 00:38:23'),
(28,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-03 02:12:14','2020-03-03 02:12:14'),
(29,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-03 02:12:20','2020-03-03 02:12:20'),
(30,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-03 02:21:40','2020-03-03 02:21:40'),
(31,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-03 02:22:09','2020-03-03 02:22:09'),
(32,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-03 02:27:58','2020-03-03 02:27:58'),
(33,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-03 02:28:10','2020-03-03 02:28:10'),
(34,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-03 11:40:45','2020-03-03 11:40:45'),
(35,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-03 16:10:16','2020-03-03 16:10:16'),
(36,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-03 19:12:18','2020-03-03 19:12:18'),
(37,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-03 19:12:24','2020-03-03 19:12:24'),
(38,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-04 00:48:32','2020-03-04 00:48:32'),
(39,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-04 02:18:16','2020-03-04 02:18:16'),
(40,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-04 02:56:27','2020-03-04 02:56:27'),
(41,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-04 04:32:31','2020-03-04 04:32:31'),
(42,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-04 05:58:34','2020-03-04 05:58:34'),
(43,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-04 05:58:38','2020-03-04 05:58:38'),
(44,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-04 13:30:40','2020-03-04 13:30:40'),
(45,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-04 22:25:54','2020-03-04 22:25:54'),
(46,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-04 23:21:42','2020-03-04 23:21:42'),
(47,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-05 03:03:05','2020-03-05 03:03:05'),
(48,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-05 03:03:14','2020-03-05 03:03:14'),
(49,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-05 04:28:40','2020-03-05 04:28:40'),
(50,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-05 04:31:23','2020-03-05 04:31:23'),
(51,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-05 10:12:47','2020-03-05 10:12:47'),
(52,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-05 12:46:36','2020-03-05 12:46:36'),
(53,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-05 14:23:54','2020-03-05 14:23:54'),
(54,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-06 04:23:33','2020-03-06 04:23:33'),
(55,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-06 14:06:03','2020-03-06 14:06:03'),
(56,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-06 14:06:08','2020-03-06 14:06:08'),
(57,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-06 14:09:54','2020-03-06 14:09:54'),
(58,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-06 14:10:00','2020-03-06 14:10:00'),
(59,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-07 01:19:05','2020-03-07 01:19:05'),
(60,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-07 16:07:35','2020-03-07 16:07:35'),
(61,'John Doe','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-07 17:04:36','2020-03-07 17:04:36'),
(62,'John Doe','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-07 17:04:59','2020-03-07 17:04:59'),
(63,'Alexander Sedov','User Updated by John Doe',1,'App\\User',1,'App\\User','[]','2020-03-07 17:06:56','2020-03-07 17:06:56'),
(64,'Alexander Sedov','User Updated by Alexander Sedov',1,'App\\User',1,'App\\User','[]','2020-03-07 17:08:17','2020-03-07 17:08:17'),
(65,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-07 22:01:26','2020-03-07 22:01:26'),
(66,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-07 22:01:35','2020-03-07 22:01:35'),
(67,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-07 22:01:44','2020-03-07 22:01:44'),
(68,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-07 22:01:46','2020-03-07 22:01:46'),
(69,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-07 23:22:12','2020-03-07 23:22:12'),
(70,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-07 23:22:14','2020-03-07 23:22:14'),
(71,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-08 00:48:41','2020-03-08 00:48:41'),
(72,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-08 00:48:43','2020-03-08 00:48:43'),
(73,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-08 04:36:40','2020-03-08 04:36:40'),
(74,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-08 08:18:12','2020-03-08 08:18:12'),
(75,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-08 08:26:53','2020-03-08 08:26:53'),
(76,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-08 08:37:49','2020-03-08 08:37:49'),
(77,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-08 08:37:57','2020-03-08 08:37:57'),
(78,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-08 08:38:21','2020-03-08 08:38:21'),
(79,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-08 08:44:20','2020-03-08 08:44:20'),
(80,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-08 09:31:04','2020-03-08 09:31:04'),
(81,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-08 09:31:08','2020-03-08 09:31:08'),
(82,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-08 09:38:48','2020-03-08 09:38:48'),
(83,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-08 15:29:19','2020-03-08 15:29:19'),
(84,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-08 15:31:11','2020-03-08 15:31:11'),
(85,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-08 15:31:28','2020-03-08 15:31:28'),
(86,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-09 03:44:01','2020-03-09 03:44:01'),
(87,'Alexander Sedov','User Updated by Alexander Sedov',1,'App\\User',1,'App\\User','[]','2020-03-09 05:06:20','2020-03-09 05:06:20'),
(88,'Alexander Sedov','User Updated by Alexander Sedov',1,'App\\User',1,'App\\User','[]','2020-03-09 05:07:41','2020-03-09 05:07:41'),
(89,'Alexander Sedov','User Updated by Alexander Sedov',1,'App\\User',1,'App\\User','[]','2020-03-09 05:09:45','2020-03-09 05:09:45'),
(90,'Alexander Sedov','User Updated by Alexander Sedov',1,'App\\User',1,'App\\User','[]','2020-03-09 05:10:48','2020-03-09 05:10:48'),
(91,'Alexander Sedov','User Updated by Alexander Sedov',1,'App\\User',1,'App\\User','[]','2020-03-09 05:11:59','2020-03-09 05:11:59'),
(92,'Alexander Sedov','User Updated by Alexander Sedov',1,'App\\User',1,'App\\User','[]','2020-03-09 05:12:29','2020-03-09 05:12:29'),
(93,'Alexander Sedov','User Updated by Alexander Sedov',1,'App\\User',1,'App\\User','[]','2020-03-09 06:07:50','2020-03-09 06:07:50'),
(94,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-09 12:08:24','2020-03-09 12:08:24'),
(95,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-10 04:23:17','2020-03-10 04:23:17'),
(96,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-10 13:05:55','2020-03-10 13:05:55'),
(97,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-10 13:05:59','2020-03-10 13:05:59'),
(98,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-10 13:47:55','2020-03-10 13:47:55'),
(99,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-10 13:47:57','2020-03-10 13:47:57'),
(100,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-10 13:49:52','2020-03-10 13:49:52'),
(101,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-10 13:49:54','2020-03-10 13:49:54'),
(102,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-10 13:50:57','2020-03-10 13:50:57'),
(103,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-10 13:50:59','2020-03-10 13:50:59'),
(104,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-10 14:01:40','2020-03-10 14:01:40'),
(105,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-10 14:01:42','2020-03-10 14:01:42'),
(106,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-10 18:45:20','2020-03-10 18:45:20'),
(107,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-11 03:12:34','2020-03-11 03:12:34'),
(108,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-11 04:58:28','2020-03-11 04:58:28'),
(109,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-11 05:00:38','2020-03-11 05:00:38'),
(110,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-11 05:03:22','2020-03-11 05:03:22'),
(111,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-11 05:08:43','2020-03-11 05:08:43'),
(112,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-11 12:01:03','2020-03-11 12:01:03'),
(113,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-11 12:31:46','2020-03-11 12:31:46'),
(114,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-11 12:31:49','2020-03-11 12:31:49'),
(115,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-11 12:52:21','2020-03-11 12:52:21'),
(116,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-11 12:52:23','2020-03-11 12:52:23'),
(117,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-11 13:24:46','2020-03-11 13:24:46'),
(118,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-11 13:25:03','2020-03-11 13:25:03'),
(119,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-11 16:55:23','2020-03-11 16:55:23'),
(120,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-12 05:39:56','2020-03-12 05:39:56'),
(121,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-12 09:08:43','2020-03-12 09:08:43'),
(122,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-12 15:46:57','2020-03-12 15:46:57'),
(123,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-12 21:23:30','2020-03-12 21:23:30'),
(124,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-13 14:23:28','2020-03-13 14:23:28'),
(125,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-13 14:34:27','2020-03-13 14:34:27'),
(126,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-13 14:34:30','2020-03-13 14:34:30'),
(127,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-13 14:39:30','2020-03-13 14:39:30'),
(128,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-13 14:39:32','2020-03-13 14:39:32'),
(129,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-13 14:39:58','2020-03-13 14:39:58'),
(130,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-13 14:40:07','2020-03-13 14:40:07'),
(131,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-13 14:46:26','2020-03-13 14:46:26'),
(132,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-13 16:13:03','2020-03-13 16:13:03'),
(133,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-13 16:13:10','2020-03-13 16:13:10'),
(134,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-13 16:47:22','2020-03-13 16:47:22'),
(135,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-14 12:39:18','2020-03-14 12:39:18'),
(136,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-15 17:57:45','2020-03-15 17:57:45'),
(137,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-16 05:25:59','2020-03-16 05:25:59'),
(138,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-16 20:41:17','2020-03-16 20:41:17'),
(139,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-17 04:42:39','2020-03-17 04:42:39'),
(140,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-17 11:39:22','2020-03-17 11:39:22'),
(141,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-17 21:41:22','2020-03-17 21:41:22'),
(142,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-18 06:20:57','2020-03-18 06:20:57'),
(143,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-18 06:31:24','2020-03-18 06:31:24'),
(144,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-18 06:31:38','2020-03-18 06:31:38'),
(145,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-18 06:31:42','2020-03-18 06:31:42'),
(146,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-18 07:06:34','2020-03-18 07:06:34'),
(147,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-18 07:06:50','2020-03-18 07:06:50'),
(148,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-18 07:08:14','2020-03-18 07:08:14'),
(149,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-18 07:08:52','2020-03-18 07:08:52'),
(150,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-18 11:33:54','2020-03-18 11:33:54'),
(151,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-18 11:34:02','2020-03-18 11:34:02'),
(152,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-18 14:12:28','2020-03-18 14:12:28'),
(153,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-18 14:19:25','2020-03-18 14:19:25'),
(154,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-18 14:21:21','2020-03-18 14:21:21'),
(155,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-18 14:55:37','2020-03-18 14:55:37'),
(156,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-18 14:56:30','2020-03-18 14:56:30'),
(157,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-18 14:56:47','2020-03-18 14:56:47'),
(158,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-18 14:59:55','2020-03-18 14:59:55'),
(159,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-18 15:00:01','2020-03-18 15:00:01'),
(160,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-18 15:00:38','2020-03-18 15:00:38'),
(161,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-18 15:00:48','2020-03-18 15:00:48'),
(162,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-18 15:00:51','2020-03-18 15:00:51'),
(163,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-19 00:33:01','2020-03-19 00:33:01'),
(164,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-19 00:34:16','2020-03-19 00:34:16'),
(165,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-19 01:30:34','2020-03-19 01:30:34'),
(166,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-19 02:04:55','2020-03-19 02:04:55'),
(167,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-19 02:04:58','2020-03-19 02:04:58'),
(168,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-19 13:52:04','2020-03-19 13:52:04'),
(169,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-19 13:52:08','2020-03-19 13:52:08'),
(170,'default','New Account created',5,'App\\User',5,'App\\User','[]','2020-03-19 14:13:27','2020-03-19 14:13:27'),
(171,'default','LoggedOut',5,'App\\User',5,'App\\User','[]','2020-03-19 14:15:25','2020-03-19 14:15:25'),
(172,'signup tester','New Account created',6,'App\\User',6,'App\\User','[]','2020-03-19 14:15:51','2020-03-19 14:15:51'),
(173,'signup tester','LoggedOut',6,'App\\User',6,'App\\User','[]','2020-03-19 14:16:51','2020-03-19 14:16:51'),
(174,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-20 01:45:15','2020-03-20 01:45:15'),
(175,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-20 07:53:31','2020-03-20 07:53:31'),
(176,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-20 08:08:48','2020-03-20 08:08:48'),
(177,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-20 08:34:12','2020-03-20 08:34:12'),
(178,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-20 09:39:00','2020-03-20 09:39:00'),
(179,'Joao Marcos Turnbull','LoggedOut',9,'App\\User',9,'App\\User','[]','2020-03-20 11:35:54','2020-03-20 11:35:54'),
(180,'Joao Marcos Turnbull','LoggedOut',9,'App\\User',9,'App\\User','[]','2020-03-20 11:36:03','2020-03-20 11:36:03'),
(181,'Vinicius Cechella','New Google Account created',11,'App\\User',11,'App\\User','[]','2020-03-20 11:39:07','2020-03-20 11:39:07'),
(182,'Vinicius Cechella','LoggedOut',11,'App\\User',11,'App\\User','[]','2020-03-20 11:39:12','2020-03-20 11:39:12'),
(183,'Vinicius Cechella','New Google Account created',12,'App\\User',12,'App\\User','[]','2020-03-20 11:39:36','2020-03-20 11:39:36'),
(184,'Bernardo Moss','New Google Account created',13,'App\\User',13,'App\\User','[]','2020-03-20 11:40:06','2020-03-20 11:40:06'),
(185,'Bernardo Moss','LoggedOut',13,'App\\User',13,'App\\User','[]','2020-03-20 11:40:10','2020-03-20 11:40:10'),
(186,'Vinicius Cechella','LoggedOut',12,'App\\User',12,'App\\User','[]','2020-03-20 11:40:14','2020-03-20 11:40:14'),
(187,'Vinicius Cechella','LoggedOut',12,'App\\User',12,'App\\User','[]','2020-03-20 11:40:35','2020-03-20 11:40:35'),
(188,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-20 13:49:41','2020-03-20 13:49:41'),
(189,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-20 14:54:53','2020-03-20 14:54:53'),
(190,'Joao Marcos Turnbull','New Google Account created',14,'App\\User',14,'App\\User','[]','2020-03-20 18:36:15','2020-03-20 18:36:15'),
(191,'Joao Marcos Turnbull','LoggedOut',14,'App\\User',14,'App\\User','[]','2020-03-20 18:36:49','2020-03-20 18:36:49'),
(192,'Joao Marcos Turnbull','LoggedOut',14,'App\\User',14,'App\\User','[]','2020-03-21 07:44:35','2020-03-21 07:44:35'),
(193,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-21 07:44:46','2020-03-21 07:44:46'),
(194,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-21 07:45:02','2020-03-21 07:45:02'),
(195,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-21 07:45:09','2020-03-21 07:45:09'),
(196,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-21 07:45:38','2020-03-21 07:45:38'),
(197,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-21 07:46:01','2020-03-21 07:46:01'),
(198,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-21 07:46:15','2020-03-21 07:46:15'),
(199,'Joao Marcos Turnbull','LoggedOut',14,'App\\User',14,'App\\User','[]','2020-03-21 20:40:12','2020-03-21 20:40:12'),
(200,'Joao Marcos Turnbull','LoggedOut',14,'App\\User',14,'App\\User','[]','2020-03-21 20:46:27','2020-03-21 20:46:27'),
(201,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-21 20:46:46','2020-03-21 20:46:46'),
(202,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-22 14:36:51','2020-03-22 14:36:51'),
(203,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-23 06:07:08','2020-03-23 06:07:08'),
(204,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-23 12:00:58','2020-03-23 12:00:58'),
(205,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-23 19:50:41','2020-03-23 19:50:41'),
(206,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-24 05:49:54','2020-03-24 05:49:54'),
(207,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-24 15:02:31','2020-03-24 15:02:31'),
(208,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-25 02:00:32','2020-03-25 02:00:32'),
(209,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-25 13:10:47','2020-03-25 13:10:47'),
(210,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-26 03:37:05','2020-03-26 03:37:05'),
(211,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-26 11:10:56','2020-03-26 11:10:56'),
(212,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-26 12:01:45','2020-03-26 12:01:45'),
(213,'Joao Marcos Turnbull','LoggedOut',14,'App\\User',14,'App\\User','[]','2020-03-26 20:01:36','2020-03-26 20:01:36'),
(214,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-26 20:02:19','2020-03-26 20:02:19'),
(215,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-26 23:22:17','2020-03-26 23:22:17'),
(216,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-26 23:22:24','2020-03-26 23:22:24'),
(217,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-27 05:16:34','2020-03-27 05:16:34'),
(218,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-27 05:26:22','2020-03-27 05:26:22'),
(219,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-27 05:28:32','2020-03-27 05:28:32'),
(220,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-27 05:29:10','2020-03-27 05:29:10'),
(221,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-27 05:29:16','2020-03-27 05:29:16'),
(222,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-27 05:29:38','2020-03-27 05:29:38'),
(223,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-27 14:47:57','2020-03-27 14:47:57'),
(224,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-27 14:51:41','2020-03-27 14:51:41'),
(225,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-27 14:51:56','2020-03-27 14:51:56'),
(226,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-27 17:08:57','2020-03-27 17:08:57'),
(227,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-28 18:56:05','2020-03-28 18:56:05'),
(228,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-29 03:40:11','2020-03-29 03:40:11'),
(229,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-29 10:57:50','2020-03-29 10:57:50'),
(230,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-29 10:58:52','2020-03-29 10:58:52'),
(231,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-29 10:58:57','2020-03-29 10:58:57'),
(232,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-30 05:17:28','2020-03-30 05:17:28'),
(233,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-30 05:17:28','2020-03-30 05:17:28'),
(234,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-30 14:52:03','2020-03-30 14:52:03'),
(235,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-30 14:52:30','2020-03-30 14:52:30'),
(236,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-30 14:52:58','2020-03-30 14:52:58'),
(237,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-30 14:59:18','2020-03-30 14:59:18'),
(238,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-30 14:59:24','2020-03-30 14:59:24'),
(239,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-30 15:19:11','2020-03-30 15:19:11'),
(240,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-30 15:42:48','2020-03-30 15:42:48'),
(241,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-30 15:42:50','2020-03-30 15:42:50'),
(242,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-30 15:43:25','2020-03-30 15:43:25'),
(243,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-30 15:43:51','2020-03-30 15:43:51'),
(244,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-30 15:43:53','2020-03-30 15:43:53'),
(245,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-30 15:43:55','2020-03-30 15:43:55'),
(246,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-30 15:44:34','2020-03-30 15:44:34'),
(247,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-30 15:44:53','2020-03-30 15:44:53'),
(248,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-30 15:48:09','2020-03-30 15:48:09'),
(249,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-30 15:48:15','2020-03-30 15:48:15'),
(250,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-30 15:48:26','2020-03-30 15:48:26'),
(251,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-30 15:57:39','2020-03-30 15:57:39'),
(252,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-30 15:57:43','2020-03-30 15:57:43'),
(253,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-03-30 15:58:13','2020-03-30 15:58:13'),
(254,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-03-30 16:27:16','2020-03-30 16:27:16'),
(255,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-04-07 06:23:15','2020-04-07 06:23:15'),
(256,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-05-09 17:52:58','2020-05-09 17:52:58'),
(257,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-05-09 17:53:04','2020-05-09 17:53:04'),
(258,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-05-19 11:33:33','2020-05-19 11:33:33'),
(259,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-05-19 11:35:41','2020-05-19 11:35:41'),
(260,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-05-19 11:35:57','2020-05-19 11:35:57'),
(261,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-05-19 11:38:58','2020-05-19 11:38:58'),
(262,'Alexander Sedov','LoggedIn',1,'App\\User',1,'App\\User','[]','2020-05-19 11:39:13','2020-05-19 11:39:13'),
(263,'Alexander Sedov','LoggedOut',1,'App\\User',1,'App\\User','[]','2020-05-19 12:09:44','2020-05-19 12:09:44');

/*Table structure for table `blog_categories` */

DROP TABLE IF EXISTS `blog_categories`;

CREATE TABLE `blog_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `blog_categories` */

/*Table structure for table `blog_comments` */

DROP TABLE IF EXISTS `blog_comments`;

CREATE TABLE `blog_comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `blog_comments` */

/*Table structure for table `blogs` */

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `blog_category_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `blogs` */

/*Table structure for table `continents` */

DROP TABLE IF EXISTS `continents`;

CREATE TABLE `continents` (
  `code` char(2) NOT NULL COMMENT 'Continent code',
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

/*Data for the table `continents` */

insert  into `continents`(`code`,`name`) values 
('AF','Africa'),
('AS','Asia'),
('CA','América Central'),
('EU','Europa'),
('NA','América do Norte'),
('OC','Oceania'),
('SA','América do Sul');

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `code` char(2) CHARACTER SET utf8 NOT NULL COMMENT 'Two-letter country code (ISO 3166-1 alpha-2)',
  `name` varchar(64) CHARACTER SET utf8 NOT NULL COMMENT 'English country name',
  `pname` varchar(64) CHARACTER SET utf8 NOT NULL COMMENT 'Portuguese country name',
  `nationality` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `full_name` varchar(128) CHARACTER SET utf8 NOT NULL COMMENT 'Full English country name',
  `iso3` char(3) CHARACTER SET utf8 NOT NULL COMMENT 'Three-letter country code (ISO 3166-1 alpha-3)',
  `number` smallint(3) unsigned zerofill NOT NULL COMMENT 'Three-digit country number (ISO 3166-1 numeric)',
  `continent_code` char(2) CHARACTER SET utf8 NOT NULL,
  `display_order` int(3) NOT NULL DEFAULT '900',
  PRIMARY KEY (`country_id`),
  UNIQUE KEY `idx_code` (`code`) USING BTREE,
  KEY `idx_continent_code` (`continent_code`) USING BTREE,
  CONSTRAINT `countries_ibfk_1` FOREIGN KEY (`continent_code`) REFERENCES `continents` (`code`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

/*Data for the table `countries` */

insert  into `countries`(`country_id`,`code`,`name`,`pname`,`nationality`,`full_name`,`iso3`,`number`,`continent_code`,`display_order`) values 
(1,'AD','Andorra','Andorra','Andorran','Principality of Andorra','AND',020,'EU',7),
(2,'AE','United Arab Emirates','Emirados Árabes Unidos','Emirati, Emirian, Emiri','United Arab Emirates','ARE',784,'AS',232),
(3,'AF','Afghanistan','Afeganistão','Afghan','Islamic Republic of Afghanistan','AFG',004,'AS',3),
(4,'AG','Antigua and Barbuda','Antígua e Barbuda','Antiguan or Barbudan','Antigua and Barbuda','ATG',028,'CA',11),
(5,'AI','Anguilla','Anguilla','Anguillan','Anguilla','AIA',660,'NA',9),
(6,'AL','Albania','Albânia','Albanian','Republic of Albania','ALB',008,'EU',4),
(7,'AM','Armenia','Armênia','Armenian','Republic of Armenia','ARM',051,'AS',13),
(8,'AN','Netherlands Antilles','Antilhas Holandesas',NULL,'Netherlands Antilles','ANT',530,'NA',157),
(9,'AO','Angola','Angola','Angolan','Republic of Angola','AGO',024,'AF',8),
(11,'AR','Argentina','Argentina','Argentine','Argentine Republic','ARG',032,'SA',12),
(12,'AS','American Samoa','Samoa Americana','American Samoan','American Samoa','ASM',016,'OC',6),
(13,'AT','Austria','Áustria','Austrian','Republic of Austria','AUT',040,'EU',16),
(14,'AU','Australia','Austrália','Australian','Commonwealth of Australia','AUS',036,'OC',15),
(15,'AW','Aruba','Aruba','Aruban','Aruba','ABW',533,'NA',14),
(16,'AX','Åland','Uma terra','Åland Island','Åland Islands','ALA',248,'EU',246),
(17,'AZ','Azerbaijan','Azerbaijão','Azerbaijani, Azeri','Republic of Azerbaijan','AZE',031,'AS',17),
(18,'BA','Bosnia and Herzegovina','Bósnia e Herzegovina','Bosnian or Herzegovinian','Bosnia and Herzegovina','BIH',070,'EU',29),
(19,'BB','Barbados','Barbados','Barbadian','Barbados','BRB',052,'CA',21),
(20,'BD','Bangladesh','Bangladesh','Bangladeshi','People\'s Republic of Bangladesh','BGD',050,'AS',20),
(21,'BE','Belgium','Bélgica','Belgian','Kingdom of Belgium','BEL',056,'EU',23),
(22,'BF','Burkina Faso','Burkina Faso','Burkinabé','Burkina Faso','BFA',854,'AF',37),
(23,'BG','Bulgaria','Bulgária','Bulgarian','Republic of Bulgaria','BGR',100,'EU',36),
(24,'BH','Bahrain','Bahrein','Bahraini','Kingdom of Bahrain','BHR',048,'AS',19),
(25,'BI','Burundi','Burundi','Burundian','Republic of Burundi','BDI',108,'AF',38),
(26,'BJ','Benin','Benim','Beninese, Beninois','Republic of Benin','BEN',204,'AF',25),
(27,'BL','Saint Barthélemy','São Bartolomeu','Barthélemois','Saint Barthelemy','BLM',652,'NA',185),
(28,'BM','Bermuda','Bermudas','Bermudian, Bermudan','Bermuda','BMU',060,'NA',26),
(29,'BN','Brunei Darussalam','Brunei','Bruneian','Brunei Darussalam','BRN',096,'AS',35),
(30,'BO','Bolivia','Bolívia','Bolivian','Republic of Bolivia','BOL',068,'SA',28),
(31,'BR','Brazil','Brasil','Brazilian','Federative Republic of Brazil','BRA',076,'SA',32),
(32,'BS','Bahamas','Bahamas','Bahamian','Commonwealth of the Bahamas','BHS',044,'CA',18),
(33,'BT','Bhutan','Butão','Bhutanese','Kingdom of Bhutan','BTN',064,'AS',27),
(34,'BV','Bouvet Island','Ilha Bouvet','Bouvet Island','Bouvet Island (Bouvetoya)','BVT',074,'CA',31),
(35,'BW','Botswana','Botswana','Motswana, Botswanan','Republic of Botswana','BWA',072,'AF',30),
(36,'BY','Belarus','Bielorrússia','Belarusian','Republic of Belarus','BLR',112,'EU',22),
(37,'BZ','Belize','Belize','Belizean','Belize','BLZ',084,'CA',24),
(38,'CA','Canada','Canadá','Canadian','Canada','CAN',124,'NA',2),
(39,'CC','Cocos (Keeling) Islands','Ilhas Cocos (Keeling)','Cocos Island','Cocos (Keeling) Islands','CCK',166,'AS',48),
(40,'CD','Congo (Kinshasa)','República Democrática do Congo','Congolese','Democratic Republic of the Congo','COD',180,'AF',51),
(41,'CF','Central African Republic','República Centro-Africana','Central African','Central African Republic','CAF',140,'AF',43),
(42,'CG','Congo (Brazzaville)','República do Congo','Congolese','Republic of the Congo','COG',178,'AF',52),
(43,'CH','Switzerland','Suíça','Swiss','Swiss Confederation','CHE',756,'EU',214),
(44,'CI','Cote dIvoire','Costa do Marfim','Ivorian','Republic of Cote dIvoire','CIV',384,'AF',55),
(45,'CK','Cook Islands','Ilhas Cook','Cook Island','Cook Islands','COK',184,'OC',53),
(46,'CL','Chile','Chile','Chilean','Republic of Chile','CHL',152,'SA',45),
(47,'CM','Cameroon','Camarões','Cameroonian','Republic of Cameroon','CMR',120,'AF',40),
(48,'CN','China','China','Chinese','People\'s Republic of China','CHN',156,'AS',46),
(49,'CO','Colombia','Colômbia','Colombian','Republic of Colombia','COL',170,'SA',49),
(50,'CR','Costa Rica','Costa Rica','Costa Rican','Republic of Costa Rica','CRI',188,'CA',54),
(51,'CU','Cuba','Cuba','Cuban','Republic of Cuba','CUB',192,'CA',57),
(52,'CV','Cape Verde','Cabo Verde','Cabo Verdean','Republic of Cape Verde','CPV',132,'AF',41),
(53,'CX','Christmas Island','Ilha do Natal','Christmas Island','Christmas Island','CXR',162,'AS',47),
(54,'CY','Cyprus','Chipre','Cypriot','Republic of Cyprus','CYP',196,'AS',58),
(55,'CZ','Czech Republic','República Checa','Czech','Czech Republic','CZE',203,'EU',59),
(56,'DE','Germany','Alemanha','German','Federal Republic of Germany','DEU',276,'EU',82),
(57,'DJ','Djibouti','Djibouti','Djiboutian','Republic of Djibouti','DJI',262,'AF',61),
(58,'DK','Denmark','Dinamarca','Danish','Kingdom of Denmark','DNK',208,'EU',60),
(59,'DM','Dominica','Dominica','Dominican','Commonwealth of Dominica','DMA',212,'CA',62),
(60,'DO','Dominican Republic','República Dominicana','Dominican','Dominican Republic','DOM',214,'CA',63),
(61,'DZ','Algeria','Argélia','Algerian','People\'s Democratic Republic of Algeria','DZA',012,'AF',5),
(62,'EC','Ecuador','Equador','Ecuadorian','Republic of Ecuador','ECU',218,'SA',64),
(63,'EE','Estonia','Estónia','Estonian','Republic of Estonia','EST',233,'EU',69),
(64,'EG','Egypt','Egito','Egyptian','Arab Republic of Egypt','EGY',818,'AF',65),
(65,'EH','Western Sahara','Saara Ocidental','Sahrawi, Sahrawian, Sahraouian','Western Sahara','ESH',732,'AF',242),
(66,'ER','Eritrea','Eritreia','Eritrean','State of Eritrea','ERI',232,'AF',68),
(67,'ES','Spain','Espanha','Spanish','Kingdom of Spain','ESP',724,'EU',207),
(68,'ET','Ethiopia','Etiópia','Ethiopian','Federal Democratic Republic of Ethiopia','ETH',231,'AF',70),
(69,'FI','Finland','Finlândia','Finnish','Republic of Finland','FIN',246,'EU',74),
(70,'FJ','Fiji','Fiji','Fijian','Republic of the Fiji Islands','FJI',242,'OC',73),
(71,'FK','Falkland Islands','Ilhas Falkland','Falkland Island','Falkland Islands (Malvinas)','FLK',238,'SA',71),
(72,'FM','Micronesia','Estados Federados da Micronésia','Micronesian','Federated States of Micronesia','FSM',583,'OC',144),
(73,'FO','Faroe Islands','ilhas Faroe','Faroese','Faroe Islands','FRO',234,'EU',72),
(74,'FR','France','França','French','French Republic','FRA',250,'EU',75),
(75,'GA','Gabon','Gabão','Gabonese','Gabonese Republic','GAB',266,'AF',79),
(76,'GB','United Kingdom','Reino Unido','British, UK','United Kingdom of Great Britain & Northern Ireland','GBR',826,'EU',233),
(77,'GD','Grenada','Granada','Grenadian','Grenada','GRD',308,'CA',87),
(78,'GE','Georgia','Geórgia','Georgian','Georgia','GEO',268,'AS',81),
(79,'GF','French Guiana','Guiana Francesa','French Guianese','French Guiana','GUF',254,'SA',76),
(80,'GG','Guernsey','Guernsey','Channel Island','Bailiwick of Guernsey','GGY',831,'EU',91),
(81,'GH','Ghana','Gana','Ghanaian','Republic of Ghana','GHA',288,'AF',83),
(82,'GI','Gibraltar','Gibraltar','Gibraltar','Gibraltar','GIB',292,'EU',84),
(83,'GL','Greenland','Gronelândia','Greenlandic','Greenland','GRL',304,'NA',86),
(84,'GM','Gambia','Gâmbia','Gambian','Republic of the Gambia','GMB',270,'AF',80),
(85,'GN','Guinea','Guiné','Guinean','Republic of Guinea','GIN',324,'AF',92),
(86,'GP','Guadeloupe','Guadalupe','Guadeloupe','Guadeloupe','GLP',312,'NA',88),
(87,'GQ','Equatorial Guinea','Guiné Equatorial','Equatorial Guinean, Equatoguinean','Republic of Equatorial Guinea','GNQ',226,'AF',67),
(88,'GR','Greece','Grécia','Greek, Hellenic','Hellenic Republic Greece','GRC',300,'EU',85),
(89,'GS','South Georgia and South Sandwich Islands','Ilhas Geórgia do Sul e Sandwich do Sul','South Georgia or South Sandwich Islands','South Georgia and the South Sandwich Islands','SGS',239,'CA',206),
(90,'GT','Guatemala','Guatemala','Guatemalan','Republic of Guatemala','GTM',320,'CA',90),
(91,'GU','Guam','Guam','Guamanian, Guambat','Guam','GUM',316,'OC',89),
(92,'GW','Guinea-Bissau','Guiné-Bissau','Bissau-Guinean','Republic of Guinea-Bissau','GNB',624,'AF',93),
(93,'GY','Guyana','Guiana','Guyanese','Co-operative Republic of Guyana','GUY',328,'SA',94),
(94,'HK','Hong Kong','Hong Kong','Hong Kong, Hong Kongese','Hong Kong Special Administrative Region of China','HKG',344,'AS',99),
(95,'HM','Heard and McDonald Islands','Ilhas Heard e McDonald','Heard Island or McDonald Islands','Heard Island and McDonald Islands','HMD',334,'CA',96),
(96,'HN','Honduras','Honduras','Honduran','Republic of Honduras','HND',340,'CA',98),
(97,'HR','Croatia','Croácia','Croatian','Republic of Croatia','HRV',191,'EU',56),
(98,'HT','Haiti','Haiti','Haitian','Republic of Haiti','HTI',332,'CA',95),
(99,'HU','Hungary','Hungria','Hungarian, Magyar','Republic of Hungary','HUN',348,'EU',100),
(100,'ID','Indonesia','Indonésia','Indonesian','Republic of Indonesia','IDN',360,'AS',103),
(101,'IE','Ireland','Irlanda','Irish','Ireland','IRL',372,'EU',106),
(102,'IL','Israel','Israel','Israeli','State of Israel','ISR',376,'AS',108),
(103,'IM','Isle of Man','Ilha de Man','Manx','Isle of Man','IMN',833,'EU',107),
(104,'IN','India','Índia','Indian','Republic of India','IND',356,'AS',102),
(105,'IO','British Indian Ocean Territory','Território Britânico do Oceano Índico','BIOT','British Indian Ocean Territory (Chagos Archipelago)','IOT',086,'AS',33),
(106,'IQ','Iraq','Iraque','Iraqi','Republic of Iraq','IRQ',368,'AS',105),
(107,'IR','Iran','Irão','Iranian, Persian','Islamic Republic of Iran','IRN',364,'AS',104),
(108,'IS','Iceland','Islândia','Icelandic','Republic of Iceland','ISL',352,'EU',101),
(109,'IT','Italy','Itália','Italian','Italian Republic','ITA',380,'EU',109),
(110,'JE','Jersey','Jersey','Channel Island','Bailiwick of Jersey','JEY',832,'EU',112),
(111,'JM','Jamaica','Jamaica','Jamaican','Jamaica','JAM',388,'CA',110),
(112,'JO','Jordan','Jordânia','Jordanian','Hashemite Kingdom of Jordan','JOR',400,'AS',113),
(113,'JP','Japan','Japão','Japanese','Japan','JPN',392,'AS',111),
(114,'KE','Kenya','Quênia','Kenyan','Republic of Kenya','KEN',404,'AF',115),
(115,'KG','Kyrgyzstan','Quirguistão','Kyrgyzstani, Kyrgyz, Kirgiz, Kirghiz','Kyrgyz Republic','KGZ',417,'AS',120),
(116,'KH','Cambodia','Camboja','Cambodian','Kingdom of Cambodia','KHM',116,'AS',39),
(117,'KI','Kiribati','Kiribati','I-Kiribati','Republic of Kiribati','KIR',296,'OC',116),
(118,'KM','Comoros','Comores','Comoran, Comorian','Union of the Comoros','COM',174,'AF',50),
(119,'KN','Saint Kitts and Nevis','São Cristóvão e Névis','Kittitian or Nevisian','Federation of Saint Kitts and Nevis','KNA',659,'NA',187),
(120,'KP','Korea, North','Coreia do Norte','North Korean','Democratic People\'s Republic of Korea','PRK',408,'AS',117),
(121,'KR','Korea, South','Coreia do Sul','South Korean','Republic of Korea','KOR',410,'AS',118),
(122,'KW','Kuwait','Kuwait','Kuwaiti','State of Kuwait','KWT',414,'AS',119),
(123,'KY','Cayman Islands','Ilhas Cayman','Caymanian','Cayman Islands','CYM',136,'NA',42),
(124,'KZ','Kazakhstan','Cazaquistão','Kazakhstani, Kazakh','Republic of Kazakhstan','KAZ',398,'AS',114),
(125,'LA','Laos','Laos','Lao, Laotian','Lao People\'s Democratic Republic','LAO',418,'AS',121),
(126,'LB','Lebanon','Líbano','Lebanese','Lebanese Republic','LBN',422,'AS',123),
(127,'LC','Saint Lucia','Santa Lúcia','Saint Lucian','Saint Lucia','LCA',662,'CA',188),
(128,'LI','Liechtenstein','Liechtenstein','Liechtenstein','Principality of Liechtenstein','LIE',438,'EU',127),
(129,'LK','Sri Lanka','Sri Lanka','Sri Lankan','Democratic Socialist Republic of Sri Lanka','LKA',144,'AS',208),
(130,'LR','Liberia','Libéria','Liberian','Republic of Liberia','LBR',430,'AF',125),
(131,'LS','Lesotho','Lesoto','Basotho','Kingdom of Lesotho','LSO',426,'AF',124),
(132,'LT','Lithuania','Lituânia','Lithuanian','Republic of Lithuania','LTU',440,'EU',128),
(133,'LU','Luxembourg','Luxemburgo','Luxembourg, Luxembourgish','Grand Duchy of Luxembourg','LUX',442,'EU',129),
(134,'LV','Latvia','Letônia','Latvian','Republic of Latvia','LVA',428,'EU',122),
(135,'LY','Libya','Líbia','Libyan','Libyan Arab Jamahiriya','LBY',434,'AF',126),
(136,'MA','Morocco','Marrocos','Moroccan','Kingdom of Morocco','MAR',504,'AF',150),
(137,'MC','Monaco','Mónaco','Monégasque, Monacan','Principality of Monaco','MCO',492,'EU',146),
(138,'MD','Moldova','Moldávia','Moldovan','Republic of Moldova','MDA',498,'EU',145),
(139,'ME','Montenegro','Montenegro','Montenegrin','Republic of Montenegro','MNE',499,'EU',148),
(140,'MF','Saint Martin (French part)','São Martinho (parte francesa)','Saint-Martinoise','Saint Martin','MAF',663,'NA',189),
(141,'MG','Madagascar','Madagáscar','Malagasy','Republic of Madagascar','MDG',450,'AF',132),
(142,'MH','Marshall Islands','Ilhas Marshall','Marshallese','Republic of the Marshall Islands','MHL',584,'OC',138),
(143,'MK','Macedonia','Macedônia do Norte','Macedonian','Republic of Macedonia','MKD',807,'EU',131),
(144,'ML','Mali','Mali','Malian, Malinese','Republic of Mali','MLI',466,'AF',136),
(145,'MM','Myanmar','Mianmar','Burmese','Union of Myanmar','MMR',104,'AS',152),
(146,'MN','Mongolia','Mongólia','Mongolian','Mongolia','MNG',496,'AS',147),
(147,'MO','Macau','Macau','Macanese, Chinese','Macao Special Administrative Region of China','MAC',446,'AS',130),
(148,'MP','Northern Mariana Islands','Ilhas Marianas do Norte','Northern Marianan','Commonwealth of the Northern Mariana Islands','MNP',580,'OC',165),
(149,'MQ','Martinique','Martinica','Martiniquais, Martinican','Martinique','MTQ',474,'NA',139),
(150,'MR','Mauritania','Mauritânia','Mauritanian','Islamic Republic of Mauritania','MRT',478,'AF',140),
(151,'MS','Montserrat','Montserrat','Montserratian','Montserrat','MSR',500,'NA',149),
(152,'MT','Malta','Malta','Maltese','Republic of Malta','MLT',470,'EU',137),
(153,'MU','Mauritius','Maurícia','Mauritian','Republic of Mauritius','MUS',480,'AF',141),
(154,'MV','Maldives','Maldivas','Maldivian','Republic of Maldives','MDV',462,'AS',135),
(155,'MW','Malawi','Malawi','Malawian','Republic of Malawi','MWI',454,'AF',133),
(156,'MX','Mexico','México','Mexican','United Mexican States','MEX',484,'NA',143),
(157,'MY','Malaysia','Malásia','Malaysian','Malaysia','MYS',458,'AS',134),
(158,'MZ','Mozambique','Moçambique','Mozambican','Republic of Mozambique','MOZ',508,'AF',151),
(159,'NA','Namibia','Namíbia','Namibian','Republic of Namibia','NAM',516,'AF',153),
(160,'NC','New Caledonia','Nova Caledônia','New Caledonian','New Caledonia','NCL',540,'OC',158),
(161,'NE','Niger','Níger','Nigerien','Republic of Niger','NER',562,'AF',161),
(162,'NF','Norfolk Island','Ilha Norfolk','Norfolk Island','Norfolk Island','NFK',574,'OC',164),
(163,'NG','Nigeria','Nigéria','Nigerian','Federal Republic of Nigeria','NGA',566,'AF',162),
(164,'NI','Nicaragua','Nicarágua','Nicaraguan','Republic of Nicaragua','NIC',558,'CA',160),
(165,'NL','Netherlands','Países Baixos','Dutch, Netherlandic','Kingdom of the Netherlands','NLD',528,'EU',156),
(166,'NO','Norway','Noruega','Norwegian','Kingdom of Norway','NOR',578,'EU',166),
(167,'NP','Nepal','Nepal','Nepali, Nepalese','State of Nepal','NPL',524,'AS',155),
(168,'NR','Nauru','Nauru','Nauruan','Republic of Nauru','NRU',520,'OC',154),
(169,'NU','Niue','Niue','Niuean','Niue','NIU',570,'OC',163),
(170,'NZ','New Zealand','Nova Zelândia','New Zealand, NZ','New Zealand','NZL',554,'OC',159),
(171,'OM','Oman','Omã','Omani','Sultanate of Oman','OMN',512,'AS',167),
(172,'PA','Panama','Panamá','Panamanian','Republic of Panama','PAN',591,'CA',171),
(173,'PE','Peru','Peru','Peruvian','Republic of Peru','PER',604,'SA',174),
(174,'PF','French Polynesia','Polinésia Francesa','French Polynesian','French Polynesia','PYF',258,'OC',77),
(175,'PG','Papua New Guinea','Papua-Nova Guiné','Papua New Guinean, Papuan','Independent State of Papua New Guinea','PNG',598,'OC',172),
(176,'PH','Philippines','Filipinas','Philippine, Filipino','Republic of the Philippines','PHL',608,'AS',175),
(177,'PK','Pakistan','Paquistão','Pakistani','Islamic Republic of Pakistan','PAK',586,'AS',168),
(178,'PL','Poland','Polónia','Polish','Republic of Poland','POL',616,'EU',177),
(179,'PM','Saint Pierre and Miquelon','São Pedro e Miquelon','Saint-Pierrais or Miquelonnais','Saint Pierre and Miquelon','SPM',666,'NA',190),
(180,'PN','Pitcairn','Pitcairn','Pitcairn Island','Pitcairn Islands','PCN',612,'OC',176),
(181,'PR','Puerto Rico','Porto Rico','Puerto Rican','Commonwealth of Puerto Rico','PRI',630,'NA',179),
(182,'PS','Palestine','Palestino','Palestinian','Occupied Palestinian Territory','PSE',275,'AS',170),
(183,'PT','Portugal','Portugal','Portuguese','Portuguese Republic','PRT',620,'EU',178),
(184,'PW','Palau','Palau','Palauan','Republic of Palau','PLW',585,'OC',169),
(185,'PY','Paraguay','Paraguai','Paraguayan','Republic of Paraguay','PRY',600,'SA',173),
(186,'QA','Qatar','Catar','Qatari','State of Qatar','QAT',634,'AS',180),
(187,'RE','Reunion','Reunião','Réunionese, Réunionnais','Reunion','REU',638,'AF',181),
(188,'RO','Romania','Roménia','Romanian','Romania','ROU',642,'EU',182),
(189,'RS','Serbia','Sérvia','Serbian','Republic of Serbia','SRB',688,'EU',197),
(190,'RU','Russian Federation','Rússia','Russian','Russian Federation','RUS',643,'EU',183),
(191,'RW','Rwanda','Ruanda','Rwandan','Republic of Rwanda','RWA',646,'AF',184),
(192,'SA','Saudi Arabia','Arábia Saudita','Saudi, Saudi Arabian','Kingdom of Saudi Arabia','SAU',682,'AS',195),
(193,'SB','Solomon Islands','Ilhas Salomão','Solomon Island','Solomon Islands','SLB',090,'OC',203),
(194,'SC','Seychelles','Seicheles','Seychellois','Republic of Seychelles','SYC',690,'AF',198),
(195,'SD','Sudan','Sudão','Sudanese','Republic of Sudan','SDN',736,'AF',209),
(196,'SE','Sweden','Suécia','Swedish','Kingdom of Sweden','SWE',752,'EU',213),
(197,'SG','Singapore','Singapura','Singaporean','Republic of Singapore','SGP',702,'AS',200),
(198,'SH','Saint Helena','Santa Helena','Saint Helenian','Saint Helena','SHN',654,'AF',186),
(199,'SI','Slovenia','Eslovênia','Slovenian, Slovene','Republic of Slovenia','SVN',705,'EU',202),
(200,'SJ','Svalbard and Jan Mayen Islands','Ilhas Svalbard e Jan Mayen','Svalbard','Svalbard & Jan Mayen Islands','SJM',744,'EU',211),
(201,'SK','Slovakia','Eslováquia','Slovak','Slovakia (Slovak Republic)','SVK',703,'EU',201),
(202,'SL','Sierra Leone','Serra Leoa','Sierra Leonean','Republic of Sierra Leone','SLE',694,'AF',199),
(203,'SM','San Marino','San Marino','Sammarinese','Republic of San Marino','SMR',674,'EU',193),
(204,'SN','Senegal','Senegal','Senegalese','Republic of Senegal','SEN',686,'AF',196),
(205,'SO','Somalia','Somália','Somali, Somalian','Somali Republic','SOM',706,'AF',204),
(206,'SR','Suriname','Suriname','Surinamese','Republic of Suriname','SUR',740,'SA',210),
(207,'ST','Sao Tome and Principe','São Tomé e Príncipe','São Toméan','Democratic Republic of Sao Tome and Principe','STP',678,'AF',194),
(208,'SV','El Salvador','El Salvador','Salvadoran','Republic of El Salvador','SLV',222,'CA',66),
(209,'SY','Syria','Síria','Syrian','Syrian Arab Republic','SYR',760,'AS',215),
(210,'SZ','Swaziland','Essuatíni','Swazi','Kingdom of Swaziland','SWZ',748,'AF',212),
(211,'TC','Turks and Caicos Islands','Ilhas Turcas e Caicos','Turks and Caicos Island','Turks and Caicos Islands','TCA',796,'NA',228),
(212,'TD','Chad','Chade','Chadian','Republic of Chad','TCD',148,'AF',44),
(213,'TF','French Southern Lands','Terras francesas do sul','French Southern Territories','French Southern Territories','ATF',260,'CA',78),
(214,'TG','Togo','Togo','Togolese','Togolese Republic','TGO',768,'AF',221),
(215,'TH','Thailand','Tailândia','Thai','Kingdom of Thailand','THA',764,'AS',219),
(216,'TJ','Tajikistan','Tajiquistão','Tajikistani','Republic of Tajikistan','TJK',762,'AS',217),
(217,'TK','Tokelau','Tokelau','Tokelauan','Tokelau','TKL',772,'OC',222),
(218,'TL','Timor-Leste','Timor-Leste','Timorese','Democratic Republic of Timor-Leste','TLS',626,'AS',220),
(219,'TM','Turkmenistan','Turquemenistão','Turkmen','Turkmenistan','TKM',795,'AS',227),
(220,'TN','Tunisia','Tunísia','Tunisian','Tunisian Republic','TUN',788,'AF',225),
(221,'TO','Tonga','Tonga','Tongan','Kingdom of Tonga','TON',776,'OC',223),
(222,'TR','Turkey','Turquia','Turkish','Republic of Turkey','TUR',792,'AS',226),
(223,'TT','Trinidad and Tobago','Trinidad e Tobago','Trinidadian or Tobagonian','Republic of Trinidad and Tobago','TTO',780,'CA',224),
(224,'TV','Tuvalu','Tuvalu','Tuvaluan','Tuvalu','TUV',798,'OC',229),
(225,'TW','Taiwan','Taiwan','Chinese, Taiwanese','Taiwan','TWN',158,'AS',216),
(226,'TZ','Tanzania','Tanzânia','Tanzanian','United Republic of Tanzania','TZA',834,'AF',218),
(227,'UA','Ukraine','Ucrânia','Ukrainian','Ukraine','UKR',804,'EU',231),
(228,'UG','Uganda','Uganda','Ugandan','Republic of Uganda','UGA',800,'AF',230),
(229,'UM','United States Minor Outlying Islands','Ilhas Menores Distantes dos Estados Unidos','American','United States Minor Outlying Islands','UMI',581,'OC',234),
(230,'US','United States of America','Estados Unidos','American','United States of America','USA',840,'NA',1),
(231,'UY','Uruguay','Uruguai','Uruguayan','Eastern Republic of Uruguay','URY',858,'SA',236),
(232,'UZ','Uzbekistan','Uzbequistão','Uzbekistani, Uzbek','Republic of Uzbekistan','UZB',860,'AS',237),
(233,'VA','Vatican City','Cidade do Vaticano','Vatican','Holy See (Vatican City State)','VAT',336,'EU',97),
(234,'VC','Saint Vincent and the Grenadines','São Vicente e Granadinas','Saint Vincentian, Vincentian','Saint Vincent and the Grenadines','VCT',670,'NA',191),
(235,'VE','Venezuela','Venezuela','Venezuelan','Bolivarian Republic of Venezuela','VEN',862,'SA',239),
(236,'VG','Virgin Islands, British','Ilhas Virgens Britânicas','British Virgin Island','British Virgin Islands','VGB',092,'NA',34),
(237,'VI','Virgin Islands, U.S.','Ilhas Virgens, EUA','U.S. Virgin Island','United States Virgin Islands','VIR',850,'NA',235),
(238,'VN','Vietnam','Vietnã','Vietnamese','Socialist Republic of Vietnam','VNM',704,'AS',240),
(239,'VU','Vanuatu','Vanuatu','Ni-Vanuatu, Vanuatuan','Republic of Vanuatu','VUT',548,'OC',238),
(240,'WF','Wallis and Futuna Islands','Ilhas Wallis e Futuna','Wallis and Futuna, Wallisian or Futunan','Wallis and Futuna','WLF',876,'OC',241),
(241,'WS','Samoa','Samoa','Samoan','Independent State of Samoa','WSM',882,'OC',192),
(242,'YE','Yemen','Iêmen','Yemeni','Yemen','YEM',887,'AS',243),
(243,'YT','Mayotte','Perdida','Mahoran','Mayotte','MYT',175,'AF',142),
(244,'ZA','South Africa','África do Sul','South African','Republic of South Africa','ZAF',710,'AF',205),
(245,'ZM','Zambia','Zâmbia','Zambian','Republic of Zambia','ZMB',894,'AF',244),
(246,'ZW','Zimbabwe','Zimbabwe','Zimbabwean','Republic of Zimbabwe','ZWE',716,'AF',245);

/*Table structure for table `datatables` */

DROP TABLE IF EXISTS `datatables`;

CREATE TABLE `datatables` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `points` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `job` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sale_date` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `datatables` */

insert  into `datatables`(`id`,`firstname`,`lastname`,`email`,`points`,`notes`,`created_at`,`updated_at`,`age`,`job`,`gender`,`country`,`sale_date`) values 
(1,'Marcelo','Ferry','rtremblay@cruickshank.com','882','Occaecati animi aut sit voluptas et hic sed. Veniam quod sunt sed ipsum et molestias autem.','2020-03-02 06:48:13','2020-03-02 06:48:13',73,'Printing Press Machine Operator','Female','bangladesh','2017-09-26 07:11:43'),
(2,'Katarina','Brakus','huel.karson@kessler.info','316','Distinctio voluptatem possimus molestiae. Consequatur est fuga qui dolor rem totam.','2020-03-02 06:48:13','2020-03-02 06:48:13',29,'Paste-Up Worker','Female','Australia','2017-09-19 10:32:42'),
(3,'Kasey','Hand','hazle.wiegand@yahoo.com','98','Odio natus eius optio sint corrupti tenetur nostrum. Aut et in quibusdam unde.','2020-03-02 06:48:13','2020-03-02 06:48:13',52,'Production Worker','Male','America','2017-09-20 00:58:39'),
(4,'Maudie','Maggio','mable98@hotmail.com','297','Corrupti deleniti velit quia itaque illo sit. Iusto provident sunt mollitia ipsam iste ut.','2020-03-02 06:48:13','2020-03-02 06:48:13',40,'Industrial Production Manager','Female','India','2017-09-27 22:48:20'),
(5,'Rosamond','Lebsack','hoppe.jaiden@cole.com','800','Deleniti sunt commodi vitae ad et cupiditate temporibus. Quam consequatur dolorem praesentium eos.','2020-03-02 06:48:13','2020-03-02 06:48:13',52,'Directory Assistance Operator','Male','India','2017-10-04 12:15:43'),
(6,'Kenyatta','Pfeffer','bradtke.aimee@hotmail.com','285','Sint ut velit voluptatem consequatur. Quia vero ipsa exercitationem. Aut unde expedita ut officia.','2020-03-02 06:48:13','2020-03-02 06:48:13',57,'Cook','Male','Canada','2017-09-23 07:58:44'),
(7,'Kevin','Dach','kling.christophe@wolff.biz','938','Deleniti nulla aut alias fugit quasi quia. Nihil non sed deleniti et nemo provident.','2020-03-02 06:48:13','2020-03-02 06:48:13',46,'Production Planner','Female','America','2017-10-07 07:17:09'),
(8,'Bernita','Klein','ybashirian@lowe.com','155','A eveniet asperiores fuga. Et rerum est perferendis repellat. Aut tempore illum est.','2020-03-02 06:48:13','2020-03-02 06:48:13',51,'Engraver','Female','Australia','2017-10-15 03:37:33'),
(9,'Karlee','Williamson','robel.devon@pacocha.info','752','Provident aliquam aut aut. Quaerat consequatur harum officiis aut.','2020-03-02 06:48:13','2020-03-02 06:48:13',66,'Fence Erector','Female','Canada','2017-09-17 09:51:30'),
(10,'Telly','Ebert','odessa40@hane.com','487','Est maxime nulla et laudantium esse. Et itaque quo quibusdam rerum temporibus consectetur cum.','2020-03-02 06:48:13','2020-03-02 06:48:13',59,'Transportation Worker','Male','India','2017-09-17 19:40:40'),
(11,'Cayla','Douglas','tracy15@hotmail.com','279','Et saepe est nam adipisci. Qui quam impedit aut debitis aut deserunt.','2020-03-02 06:48:13','2020-03-02 06:48:13',40,'Life Scientists','Female','Canada','2017-10-04 16:33:53'),
(12,'Missouri','Olson','melyna08@feest.net','839','Deleniti aliquid cumque perferendis eos ducimus et qui. Vel nostrum saepe adipisci pariatur quis.','2020-03-02 06:48:13','2020-03-02 06:48:13',21,'Movers','Female','Canada','2017-09-21 19:49:54'),
(13,'Fannie','Reinger','darion.mann@yahoo.com','94','Sequi cum dolorum animi cupiditate ut fugiat corporis. Optio sed adipisci ea.','2020-03-02 06:48:13','2020-03-02 06:48:13',54,'Computer-Controlled Machine Tool Operator','Female','bangladesh','2017-10-04 10:56:04'),
(14,'Luther','Marquardt','lillie.kunze@abshire.org','169','Enim mollitia et ut. Nesciunt officiis fuga amet accusamus et voluptas numquam.','2020-03-02 06:48:13','2020-03-02 06:48:13',66,'Social Service Specialists','Female','Canada','2017-09-26 12:24:30'),
(15,'Brant','Moore','makenzie.rempel@hotmail.com','801','Quia iusto molestias fugiat quia velit nesciunt. Magnam alias aliquam ab officia nihil commodi.','2020-03-02 06:48:13','2020-03-02 06:48:13',44,'Plating Operator','Male','America','2017-09-30 20:38:31'),
(16,'Ricardo','Hettinger','ismith@gmail.com','923','Omnis esse quo et quidem qui voluptate. Quas libero omnis ut eum eligendi.','2020-03-02 06:48:13','2020-03-02 06:48:13',48,'Forest Fire Inspector','Female','India','2017-10-04 17:43:21'),
(17,'Elijah','Hauck','qbeier@wiza.net','401','Cumque et illo maxime incidunt et. Nihil officiis quod et. Impedit iste atque cumque.','2020-03-02 06:48:13','2020-03-02 06:48:13',71,'Pastry Chef','Male','India','2017-09-18 07:40:43'),
(18,'Juwan','Beatty','kendall05@farrell.com','492','Odio aliquam vel architecto aut. Fugiat rerum est incidunt. Quo nostrum dolores dolorem amet.','2020-03-02 06:48:13','2020-03-02 06:48:13',50,'Motorcycle Mechanic','Male','Australia','2017-10-12 02:29:20'),
(19,'Katrine','Murray','rborer@nolan.info','810','Expedita velit enim aliquid ea molestiae aliquid consequatur. Enim iste optio dolorem ipsa.','2020-03-02 06:48:13','2020-03-02 06:48:13',71,'Electromechanical Equipment Assembler','Female','Newzealand','2017-10-14 15:30:54'),
(20,'Kennedy','Welch','ferry.aniyah@hotmail.com','474','Voluptatem quod ea impedit dolor. Aut omnis sint nostrum amet recusandae.','2020-03-02 06:48:13','2020-03-02 06:48:13',69,'Electrolytic Plating Machine Operator','Male','Newzealand','2017-09-20 06:54:52'),
(21,'Rosanna','Corwin','bergstrom.keaton@douglas.com','225','Consequatur et omnis in est. Ipsa quia laboriosam explicabo odit.','2020-03-02 06:48:13','2020-03-02 06:48:13',27,'Musician','Male','India','2017-10-14 12:13:06'),
(22,'Levi','Cremin','mkoelpin@hotmail.com','15','Ipsum dolorem error eaque consequatur non. Nam cum vero quasi. Ab nesciunt tenetur labore eum sed.','2020-03-02 06:48:13','2020-03-02 06:48:13',60,'Copy Writer','Female','India','2017-10-17 15:23:23'),
(23,'Milford','Cormier','caitlyn.crooks@hotmail.com','18','Qui rem est in nostrum. Ipsa sed tempora earum illum eos quos. Perspiciatis nisi nihil non.','2020-03-02 06:48:13','2020-03-02 06:48:13',40,'Numerical Control Machine Tool Operator','Male','Australia','2017-09-15 08:11:19'),
(24,'Angelina','Abbott','lora89@jakubowski.com','60','Est enim sit doloribus dicta qui laborum. Officia cum sit aut qui voluptatem eos rerum.','2020-03-02 06:48:13','2020-03-02 06:48:13',48,'Pediatricians','Male','Newzealand','2017-09-25 20:02:28'),
(25,'Miracle','Morar','zieme.kennith@hayes.info','299','Aut recusandae omnis molestiae. Quasi quisquam dicta sit maxime quis quas cupiditate.','2020-03-02 06:48:13','2020-03-02 06:48:13',43,'Fitness Trainer','Female','America','2017-10-09 21:44:17'),
(26,'Zella','Hahn','ollie.weber@rippin.com','72','Dolores voluptas ducimus et quaerat amet. Aspernatur nostrum corrupti ut aut excepturi repellat.','2020-03-02 06:48:13','2020-03-02 06:48:13',56,'Social Sciences Teacher','Female','America','2017-09-28 16:14:29'),
(27,'Summer','Rau','rglover@gmail.com','540','Dicta sed voluptatem sed dolorem. Doloribus assumenda porro et quas at occaecati.','2020-03-02 06:48:13','2020-03-02 06:48:13',75,'Textile Worker','Male','Australia','2017-10-06 02:07:18'),
(28,'Kaley','Rohan','bhammes@jaskolski.com','901','Sit et eos ipsum possimus praesentium. Natus iste nostrum quibusdam dolore atque id rerum.','2020-03-02 06:48:13','2020-03-02 06:48:13',65,'Etcher and Engraver','Female','Canada','2017-09-15 20:07:21'),
(29,'Miguel','Crona','jgusikowski@windler.com','659','Ut veritatis consequatur neque non fugit. Neque consequatur vel delectus velit sed.','2020-03-02 06:48:13','2020-03-02 06:48:13',23,'Social Media Marketing Manager','Female','Canada','2017-10-05 10:38:16'),
(30,'Dolores','Bayer','brakus.bridget@gmail.com','872','Rerum et mollitia quidem adipisci. Maxime temporibus enim est delectus ullam modi.','2020-03-02 06:48:13','2020-03-02 06:48:13',68,'Government Service Executive','Female','India','2017-10-17 21:50:52'),
(31,'Zack','Schaden','iruecker@gmail.com','291','Harum quos aut porro nostrum optio doloremque dolor. Odio ea aperiam harum fugiat.','2020-03-02 06:48:13','2020-03-02 06:48:13',68,'Professor','Female','Australia','2017-09-24 23:41:00'),
(32,'Sylvia','Konopelski','gulgowski.jennyfer@gmail.com','189','Perspiciatis est laboriosam et maxime dicta voluptatibus ad. Est itaque voluptas id at.','2020-03-02 06:48:13','2020-03-02 06:48:13',40,'Film Laboratory Technician','Male','Australia','2017-09-23 10:15:12'),
(33,'Amelia','Rosenbaum','jayce15@hotmail.com','786','A numquam quam voluptas ipsum earum. Est iure voluptate odio voluptatum eum ab.','2020-03-02 06:48:13','2020-03-02 06:48:13',34,'Editor','Male','Canada','2017-10-09 04:50:12'),
(34,'Lexi','Dooley','eleanora.wisoky@yahoo.com','330','Deleniti quidem corrupti id voluptatem. Illum voluptas nemo et eos architecto aut.','2020-03-02 06:48:13','2020-03-02 06:48:13',68,'Embalmer','Female','India','2017-10-10 01:56:35'),
(35,'Lucas','Pfannerstill','valentina.strosin@gmail.com','810','Odit voluptas esse voluptas quibusdam ut unde qui. Voluptatem ut praesentium in.','2020-03-02 06:48:13','2020-03-02 06:48:13',46,'Telemarketer','Male','India','2017-10-06 17:27:58'),
(36,'Whitney','Terry','lawson29@barton.biz','202','Laborum velit aut eius praesentium rem. Dolorem nisi corrupti est. Rem enim in nostrum sunt error.','2020-03-02 06:48:13','2020-03-02 06:48:13',80,'Etcher','Female','Newzealand','2017-10-07 15:39:05'),
(37,'Vicenta','McLaughlin','michel55@gmail.com','307','Et dolores iusto et et illo. Quia velit sint adipisci doloremque quaerat.','2020-03-02 06:48:13','2020-03-02 06:48:13',56,'Inspector','Male','Canada','2017-10-15 13:47:00'),
(38,'Lucile','Conn','ernestina47@connelly.com','920','Odit sit minima sed fugit autem. Ut sit blanditiis beatae optio sunt.','2020-03-02 06:48:13','2020-03-02 06:48:13',66,'Administrative Services Manager','Female','Canada','2017-10-11 03:27:54'),
(39,'Orland','Mante','lmante@hotmail.com','327','Doloribus sit asperiores veritatis est aperiam omnis mollitia. Beatae et nisi nobis doloribus.','2020-03-02 06:48:13','2020-03-02 06:48:13',36,'Social Science Research Assistant','Male','America','2017-09-27 16:46:06'),
(40,'Ines','Keeling','claudine.funk@renner.com','412','Et tempore sunt quia et odio. Accusantium dolorem ullam corrupti minus qui.','2020-03-02 06:48:13','2020-03-02 06:48:13',48,'Photographic Restorer','Male','Australia','2017-09-15 17:26:05'),
(41,'Gabrielle','Kertzmann','favian.heller@yahoo.com','724','Ipsum libero temporibus mollitia ut. Labore quia non alias ipsam possimus eligendi deserunt.','2020-03-02 06:48:13','2020-03-02 06:48:13',50,'Photographic Reproduction Technician','Female','India','2017-09-23 20:10:50'),
(42,'Mallie','Lindgren','ebahringer@yahoo.com','805','A quia consequatur sint. Dolorum nemo suscipit maxime totam. In sint qui commodi.','2020-03-02 06:48:13','2020-03-02 06:48:13',54,'Refractory Materials Repairer','Female','Newzealand','2017-09-30 15:22:08'),
(43,'Luis','Kling','marquardt.adella@hirthe.com','946','Aperiam cumque quo neque. Ipsum vitae error quia iure excepturi. Architecto ex modi eveniet.','2020-03-02 06:48:13','2020-03-02 06:48:13',77,'Technical Specialist','Male','India','2017-10-09 12:35:56'),
(44,'Syble','Yost','wullrich@hotmail.com','731','Autem natus fuga illo. Eius consequatur eum non maxime. Iusto ducimus fuga eius minima.','2020-03-02 06:48:13','2020-03-02 06:48:13',69,'Staff Psychologist','Female','India','2017-10-06 05:14:41'),
(45,'Margret','Lueilwitz','leonor36@hotmail.com','83','Accusantium ab odit facere animi. Ab itaque eos eum et quidem.','2020-03-02 06:48:13','2020-03-02 06:48:13',35,'Rough Carpenter','Male','Australia','2017-10-18 06:43:44'),
(46,'Deborah','Jacobson','winifred05@gmail.com','929','Necessitatibus ut ut et occaecati corrupti. Adipisci voluptatibus accusamus magnam hic.','2020-03-02 06:48:13','2020-03-02 06:48:13',36,'Bookkeeper','Male','bangladesh','2017-10-10 23:12:29'),
(47,'Trey','Mueller','robb68@bradtke.biz','269','Labore amet sed dolorum tempora. Voluptas quis sapiente in sit nisi.','2020-03-02 06:48:13','2020-03-02 06:48:13',37,'Teacher','Female','Canada','2017-09-30 10:46:50'),
(48,'Garrett','Lynch','okeefe.abdul@yahoo.com','964','Quae omnis eum debitis quos fuga nam eius. Qui suscipit aut rerum aut veritatis ex excepturi.','2020-03-02 06:48:13','2020-03-02 06:48:13',62,'Coroner','Male','India','2017-10-12 19:46:34'),
(49,'Veda','Hammes','bulah.bradtke@adams.com','25','Deleniti ut atque beatae sit voluptatem repellendus quis at. Accusamus dolores voluptatem saepe.','2020-03-02 06:48:13','2020-03-02 06:48:13',59,'Electrical and Electronics Drafter','Male','India','2017-10-06 19:31:20'),
(50,'Seth','Schulist','destinee.hilpert@yahoo.com','277','Vel id voluptatem neque. Laudantium unde quod hic atque occaecati esse iusto omnis.','2020-03-02 06:48:13','2020-03-02 06:48:13',55,'Terrazzo Workes and Finisher','Male','India','2017-09-22 21:21:44');

/*Table structure for table `destinations` */

DROP TABLE IF EXISTS `destinations`;

CREATE TABLE `destinations` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_total` int(5) DEFAULT NULL,
  `price_12` int(5) DEFAULT NULL,
  `photo_urls` int(1) DEFAULT NULL,
  `about_dest` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about_weather` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `about_costofliving` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `search_result_description` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attr_1_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attr_1_about` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attr_2_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attr_2_about` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attr_3_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attr_3_about` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attr_4_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attr_4_about` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attr_5_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `attr_5_about` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `continent` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `destinations` */

insert  into `destinations`(`id`,`name`,`price_total`,`price_12`,`photo_urls`,`about_dest`,`about_weather`,`about_costofliving`,`search_result_description`,`attr_1_name`,`attr_1_about`,`attr_2_name`,`attr_2_about`,`attr_3_name`,`attr_3_about`,`attr_4_name`,`attr_4_about`,`attr_5_name`,`attr_5_about`,`country`,`continent`,`tags`,`created_at`,`updated_at`,`deleted_at`) values 
(3,'Qeubec',4500,450,1,'aaaaaa','aaaaaa','bbbbbb','Há filiais da rede Walmart por toda a cidade de Nova York e também mercearias como Whole Foods, Trader Joe\'s e Fairway. Um litro de leite custa em torno de USD 2,3 e uma dúzia de ovos USD 4,3.','bbbbb','bbbbb','ffff','dfgsfdgsdfg','sdfgsdfgsdfg','sdfgsdfgsfd','sdfgsdfg','sdfgsdfg','sdfgsdfg','sdfgsdfgsdf','Canada','América do Norte','Modern','2020-03-02 15:14:40','2020-03-26 03:43:15',NULL),
(2,'Mexico City',2500,250,1,'sdafdsaf','sadfsadfasd','sadfasdf','Há filiais da rede Walmart por toda a cidade de Nova York e também mercearias como Whole Foods, Trader Joe\'s e Fairway. Um litro de leite custa em torno de USD 2,3 e uma dúzia de ovos USD 4,3.','sadfasdf','sadfsadf','sdfsdf','sadfasdfdasf','dsfsdf','sdfasdf','sadfasdf','sadf','sadf','asf','Brazil','América do Sul','Modern','2020-02-11 04:51:21','2020-03-26 03:42:32',NULL),
(1,'New York',2000,200,1,'A cidade de Nova York é a capital do estado americano de Nova York, sede da Organização das Nações Unidas (ONU) e também considerada como a capital cultural do mundo. \r\n\r\nUma cidade muito agitada, sendo a terceira mais populosa da América, atrás apenas de São Paulo e Cidade de México.\r\n\r\nCom grandes atrações como a Estátua da Liberdade, o edifício Empire State, o teatro da Broadway e lojas famosas como a Bloomingdales e a Macy\'s, Nova York é um destino atraente para todos os viajantes em todas as épocas do ano.','Nova York é um bom destino de viagem em qualquer época do ano. No Natal, você pode aproveitar para fazer compras, patinar no gelo, ver as luzes da Times Square e levar as crianças para ver o Papai Noel na Macy\'s. A primavera é a melhor época para aproveitar o Central Park e no verão há moitas atividades ao ar livre e é tempo do New York Fashion Week estreia de novas temporada de teatro da Broadway.','Há filiais da rede Walmart por toda a cidade de Nova York e também mercearias como Whole Foods, Trader Joe\'s e Fairway. Um litro de leite custa em torno de USD 2,3 e uma dúzia de ovos USD 4,3.','Há filiais da rede Walmart por toda a cidade de Nova York e também mercearias como Whole Foods, Trader Joe\'s e Fairway. Um litro de leite custa em torno de USD 2,3 e uma dúzia de ovos USD 4,3.','ESTÁTUA DA LIBERDADE','A Times Square enstá cercada pelas ruas West 42, West 47, Sétima Avenida e a Brodway. Os muitos letreiros coloridos e a multidão que se movimenta durante todo o dia criam uma atmosfera única para quem','TIMES SQUARE','A Times Square enstá cercada pelas ruas West 42, West 47, Sétima Avenida e a Brodway. Os muitos letreiros coloridos e a multidão que se movimenta durante todo o dia criam uma atmosfera única para quem','EMPIRE STATE BUILDING','O arranha-céu mais famoso do mundo tem 102 andares e fica bem no centro de Manhattan. Dos observatórios no alto do edifício pode-se ter uma magnífica vista de 360° da a cidade de Nova York até tarde d','CENTRAL PARK','O Central Park é um refúgio verde bem no meio da cidade, tanto para os habitantes locais. O local perfeito para correr, pedalar, fazer um piquenique em família, namorar ou simplesmente relaxar e ler u','MANHATTAN','Manhattan é a parte mais antiga e mais povoada da cidade. É onde fica Wall Strit, a famosa rua que é considerada o mais importante centro financeiro do mundo e onde fica a bolsa de valores de Nova Yor','United States of America','América do Norte','Modern,Cheap,Ancient','2020-03-05 03:15:54','2020-03-26 03:37:29',NULL),
(4,'Liverpool',3200,300,1,'bbbbb','dsfas','asdfadsfa','Há filiais da rede Walmart por toda a cidade de Nova York e também mercearias como Whole Foods, Trader Joe\'s e Fairway. Um litro de leite custa em torno de USD 2,3 e uma dúzia de ovos USD 4,3.','asdfasdfasdf','sadfasdfasdf','asdfasdfasdf','asdfasdfsdf','asdfasdfadsf','asdfasdfadsf','sadfasdfasdf','sadfasdfas','asdfasdf','sdafasdf','United Kingdom','Europa','Cheap','2020-03-01 15:16:21','2020-03-26 03:42:10',NULL),
(5,'Paris',4400,340,1,'asadfsd','asdfasdf','asdfasdf','Há filiais da rede Walmart por toda a cidade de Nova York e também mercearias como Whole Foods, Trader Joe\'s e Fairway. Um litro de leite custa em torno de USD 2,3 e uma dúzia de ovos USD 4,3.','sadfasdf','asdf','asdfasdf','asdfasdf','asdfasdf','asdfasdfasdf','asdfasf','adfasdf','asdfasdf','asdfasdf','France','Europa','Ancient','2020-02-12 15:25:35','2020-03-26 03:43:04',NULL),
(6,'London',6500,660,1,'asdfasf','asdfasdf','asdfasdf','Há filiais da rede Walmart por toda a cidade de Nova York e também mercearias como Whole Foods, Trader Joe\'s e Fairway. Um litro de leite custa em torno de USD 2,3 e uma dúzia de ovos USD 4,3.','sdfasdf','asdfasdf','asdfasdf','asdfasdf','adsfasdf','adsfasdf','asdfadsf','asdfadsf','asdfasdf','adsfasdf','United Kingdom','Europa','Modern','2020-02-04 15:27:55','2020-03-26 03:42:22',NULL),
(8,'Moscow',5600,600,1,'dsafgasdfadsf','asdfsadf','asdfasdfasdff','Há filiais da rede Walmart por toda a cidade de Nova York e também mercearias como Whole Foods, Trader Joe\'s e Fairway. Um litro de leite custa em torno de USD 2,3 e uma dúzia de ovos USD 4,3.','asdfasdf','asdfasdfasdf','asdfasdfasdf','asdfasdfasdf','asdfasdf','asdfasdf','asdfasdf','asasdfasdfasdf','asdfasdf','asdfasdfasdfasdfasdf','Russian Federation','Europa','Modern,Cheap','2020-03-24 06:00:13','2020-03-26 03:42:43',NULL),
(9,'asdfasdf',344,3434,1,'asdfasdf','asdfasdf','asdfasdf',NULL,'sadfasdf','asdfasdf','asdfasdf','asdfasdf','asdfasdf','asfasdf','asdfasdf','asdfasdf','asdfasdf','asdfasdf','Cape Verde','Africa',NULL,'2020-03-30 05:30:34','2020-03-30 05:30:34',NULL),
(10,'asdfasdf',344,3434,1,'sadfasdfasd','asdfasdf','sadfasdfasd',NULL,'asdfasdf','asdfasdf','asdfasdf','asdfasdf','asdfasdf','asdfsadf','asdfasdf','asdfasdf','asdfasdf','sadfasdf','Cape Verde','Africa',NULL,'2020-03-30 05:33:09','2020-03-30 05:33:09',NULL);

/*Table structure for table `files` */

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `mime` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `files` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'0000_00_00_000000_create_taggable_table',1),
(2,'2014_07_02_230147_migration_cartalyst_sentinel',1),
(3,'2014_10_04_174350_soft_delete_users',1),
(4,'2014_12_10_011106_add_fields_to_user_table',1),
(5,'2015_08_09_200015_create_blog_module_table',1),
(6,'2015_08_11_064636_add_slug_to_blogs_table',1),
(7,'2015_11_10_140011_create_files_table',1),
(8,'2016_01_02_062647_create_tasks_table',1),
(9,'2016_04_26_054601_create_datatables_table',1),
(10,'2016_10_04_103149_add_fields_datatables_table',1),
(11,'2017_09_29_113930_create_activity_log_table',1),
(12,'2017_10_07_070138_create_countries_table',1),
(13,'2017_10_24_130059_add_country_field',1);

/*Table structure for table `payment_methods` */

DROP TABLE IF EXISTS `payment_methods`;

CREATE TABLE `payment_methods` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `method_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `payment_methods` */

insert  into `payment_methods`(`id`,`method_name`) values 
(1,'Credit Card Offline'),
(2,'Credit Card Online'),
(3,'Boleto'),
(4,'Voucher'),
(5,'TED');

/*Table structure for table `payout_wallet` */

DROP TABLE IF EXISTS `payout_wallet`;

CREATE TABLE `payout_wallet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proposal_id` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `method_id` int(2) DEFAULT NULL,
  `transaction_date` timestamp NULL DEFAULT NULL,
  `descr` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `payout_wallet` */

insert  into `payout_wallet`(`id`,`proposal_id`,`amount`,`method_id`,`transaction_date`,`descr`,`created_at`,`updated_at`,`deleted_at`) values 
(3,1,2345,5,'2020-02-18 00:00:00','sdfasdfadsf','2020-03-10 16:20:57','2020-03-10 19:34:50',NULL),
(4,1,234243,2,'2020-10-06 00:00:00','fasdfasdfsdf','2020-03-10 16:20:57','2020-03-10 19:34:50',NULL),
(5,1,2344,3,'2019-09-09 00:00:00','test test test','2020-03-10 19:29:07','2020-03-10 19:34:50',NULL),
(7,3,2344,2,'2020-03-24 00:00:00','asdfasdfasdf','2020-03-24 15:03:18','2020-03-24 15:04:00',NULL);

/*Table structure for table `persistences` */

DROP TABLE IF EXISTS `persistences`;

CREATE TABLE `persistences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `persistences_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `persistences` */

insert  into `persistences`(`id`,`user_id`,`code`,`created_at`,`updated_at`) values 
(10,1,'Tal7RVAiLa90meidCCD67eoSARVYZBVj','2020-03-02 11:43:07','2020-03-02 11:43:07'),
(11,1,'lptETii67bpvFwQFy8HQ7yBYruBXBxIc','2020-03-02 14:53:20','2020-03-02 14:53:20'),
(14,1,'DMrrjhrRONnTs2mIKPjsimmfcMCJmiFg','2020-03-02 21:57:46','2020-03-02 21:57:46'),
(18,1,'pY9P4cgcs3XIAvnphus0uBa2dFagEj5Z','2020-03-03 02:28:10','2020-03-03 02:28:10'),
(19,1,'8MURPpWABdMjuubgdzMzFa28UimqoXaD','2020-03-03 11:40:45','2020-03-03 11:40:45'),
(21,1,'jJQZF38a0WWtcSQ3p2aN25tfk8AfMReT','2020-03-03 19:12:24','2020-03-03 19:12:24'),
(22,1,'uhZDNkcDJ3h19SvdDxa1km2ZLtGT3Vn0','2020-03-04 00:48:31','2020-03-04 00:48:31'),
(23,1,'o5SBRMIwRSCFC5HGBUJeNzjO2FIEKYcl','2020-03-04 02:18:15','2020-03-04 02:18:15'),
(24,1,'WJCTGxVm4D3PPXkrTqxtgLYHsKMFSVKP','2020-03-04 02:56:27','2020-03-04 02:56:27'),
(26,1,'diex0XI3PXK0Xv8Uk8bqgLuSQR17UqKA','2020-03-04 05:58:38','2020-03-04 05:58:38'),
(27,1,'3rGHHQBHxX7tevpeqYd7HsdkpNeUeTJb','2020-03-04 13:30:40','2020-03-04 13:30:40'),
(28,1,'1JzoW5TN4GM2iu1c9qCtENe0KZKF8iVp','2020-03-04 22:25:53','2020-03-04 22:25:53'),
(31,1,'LPGzt32cqURx6ol1B5CIGeC7dfS44dES','2020-03-05 04:31:23','2020-03-05 04:31:23'),
(32,1,'84jI9uE9cqDhMleeXnHx7OPBneNJq3Ir','2020-03-05 10:12:47','2020-03-05 10:12:47'),
(33,1,'GOElyFcKSsxi3RAlQHyPBlXLMJrSNuYB','2020-03-05 12:46:35','2020-03-05 12:46:35'),
(34,1,'lvMa7qli2e4qp0H2yHGlOLx9Fq4UUP7s','2020-03-05 14:23:53','2020-03-05 14:23:53'),
(37,1,'6Ql0Ww79Q1zr7vW9drSGdg0OQlvC1Eg3','2020-03-06 14:10:00','2020-03-06 14:10:00'),
(38,1,'BFgU5pwKfwfl0g5zkkZOr1nLXvw4ZIxW','2020-03-07 01:19:05','2020-03-07 01:19:05'),
(44,1,'28E04quadQWdd7hcwQWjuW3wDp18cHUW','2020-03-08 00:48:43','2020-03-08 00:48:43'),
(45,1,'PvuKuwT1W0lQhZjLELU0fTMY8NFYcxeZ','2020-03-08 04:36:40','2020-03-08 04:36:40'),
(46,1,'DF7X4M1B3SEW0I85kybd56kwztsOvvqC','2020-03-08 08:18:11','2020-03-08 08:18:11'),
(47,1,'5hjhNwaBoYD5q3tOYRSfHlijMJdoFIOK','2020-03-08 08:26:53','2020-03-08 08:26:53'),
(49,1,'wPtROe7Hbn6ZVfRMsWwGAlb4QEW20bwu','2020-03-08 08:38:21','2020-03-08 08:38:21'),
(51,1,'05l3KkkYcjPnHPc85AG9ffr8Z7bZXDhT','2020-03-08 09:31:08','2020-03-08 09:31:08'),
(52,1,'nyyIeh5ORskvzCWxZZbtpPf6nu3zgl6N','2020-03-08 09:38:48','2020-03-08 09:38:48'),
(54,1,'UIbF7lKk2zcu835X9Kc3b32uca7kjHCd','2020-03-08 15:31:28','2020-03-08 15:31:28'),
(55,1,'mdK0hXm6B87A2u0ly2vOGkPpl7tVkKlZ','2020-03-09 03:44:01','2020-03-09 03:44:01'),
(56,1,'z3VUswmuS7p8hXaRkAH3ivGWseJwapT0','2020-03-09 12:08:24','2020-03-09 12:08:24'),
(62,1,'wFQoiPdpI6MGkoq6MR5KI8Xt0ItVdAuH','2020-03-10 14:01:42','2020-03-10 14:01:42'),
(63,1,'riMhZ5WbAd6NOyn5dCpYT9Bl6sckx2Zz','2020-03-10 18:45:20','2020-03-10 18:45:20'),
(66,1,'VgZoZafDmhxZufHyc9V9JKxJr3LnJraX','2020-03-11 05:08:43','2020-03-11 05:08:43'),
(70,1,'DAyD7QOc7KxRabRmHepUL8yqO4DbrgRS','2020-03-11 13:25:02','2020-03-11 13:25:02'),
(71,1,'ibEHHGbRBH1ckUGcEDwJwD02Vfvybr3d','2020-03-11 16:55:21','2020-03-11 16:55:21'),
(72,1,'aXxQGnikhdXygHeD8sGVYhQJ3vy7wHcy','2020-03-12 05:39:55','2020-03-12 05:39:55'),
(73,1,'U9KJg5IoJvEDEVAr0iR0dVl8wiztCdbu','2020-03-12 09:08:43','2020-03-12 09:08:43'),
(74,1,'AYwsbRvEt06SBzur1RGhrhrBUOkKRG3h','2020-03-12 15:46:57','2020-03-12 15:46:57'),
(75,1,'Cde8iq0YhPk1PzlBLY6t16Izi6ghRn7w','2020-03-12 21:23:30','2020-03-12 21:23:30'),
(76,1,'iBy88XytoXYSftEUyifMKsXLp7QQYRWP','2020-03-13 16:47:21','2020-03-13 16:47:21'),
(77,1,'E52CkVF6LhkQlKcIWMO97oxsRTDm20Se','2020-03-14 12:39:17','2020-03-14 12:39:17'),
(78,1,'fvGitwbIsZNj3fdwawPoXYvzHzCLDeGF','2020-03-15 17:57:45','2020-03-15 17:57:45'),
(79,1,'jbjH9CnwMmQZHARweDnLDMF6DcGbhjPd','2020-03-16 05:25:58','2020-03-16 05:25:58'),
(80,1,'f3QfS7hr5ANKPQGsF2d1uP9i5qu3nqBM','2020-03-16 20:41:16','2020-03-16 20:41:16'),
(81,1,'LBOKKB9VDI0oVJIKFfnSFygZhEuLZrcy','2020-03-17 04:42:39','2020-03-17 04:42:39'),
(82,1,'buFPBRUOZCYdTy22liPvo2SJ7hD2kPkO','2020-03-17 11:39:21','2020-03-17 11:39:21'),
(83,1,'9lk2AS7zkrZfaNybkwGvnpTULz2avgQn','2020-03-17 21:41:21','2020-03-17 21:41:21'),
(89,1,'gXCZCSAeBB32sTX006oYDOihJJZMqJS3','2020-03-18 14:12:27','2020-03-18 14:12:27'),
(93,1,'TS33MAjYY9jquCS7kLaUQkXkXqsSnZOz','2020-03-18 15:00:00','2020-03-18 15:00:00'),
(95,1,'GLhzSYoZfgg3o2iuUqpmRimNLWKZ3ARL','2020-03-18 15:00:51','2020-03-18 15:00:51'),
(98,1,'dXs8my8s3reCSFxIMY5Ng91shBliGprG','2020-03-19 02:04:58','2020-03-19 02:04:58'),
(102,1,'FwbT5pmXSWOsDb5xhe6mV3pDD7n3hRA3','2020-03-20 01:45:15','2020-03-20 01:45:15'),
(105,8,'20f8QcbmU02nF9S9zz0D7lzv0hm1YKiG','2020-03-20 10:32:13','2020-03-20 10:32:13'),
(106,8,'2JwO9wyJnL9azU7sgBQfnzliVpnPMN3E','2020-03-20 10:32:50','2020-03-20 10:32:50'),
(109,10,'GL1RNGmSkm4XbHSi5A6CURM9qToG8xdb','2020-03-20 11:38:43','2020-03-20 11:38:43'),
(122,1,'xviMHKFFTE2JpOrFWwEgRLpQyVIGJBoK','2020-03-21 20:46:46','2020-03-21 20:46:46'),
(123,1,'SLRoP0qrCfmZwDrrVJh2mrAU8NXuZBhv','2020-03-22 14:36:51','2020-03-22 14:36:51'),
(124,1,'QdG17HrQGWQTM15YWY1AsJb1XLBCWtus','2020-03-23 06:07:08','2020-03-23 06:07:08'),
(125,1,'PNSbm7MbEkHWBWGY3wobyGscOFzUYAhE','2020-03-23 12:00:57','2020-03-23 12:00:57'),
(126,1,'iWmmywCaowCt0OCPy6ple9kCF4L3bDpj','2020-03-23 19:50:41','2020-03-23 19:50:41'),
(127,1,'RB7y2OtyXVDbGLRzYLH9j6L21BAW21lX','2020-03-24 05:49:54','2020-03-24 05:49:54'),
(128,1,'U8CIArLPHI8xICV35xl0wp5Tl8DFpoqk','2020-03-24 15:02:30','2020-03-24 15:02:30'),
(129,1,'6nGGschwb60AJJuT9li9uEQYItXXJy4F','2020-03-25 02:00:32','2020-03-25 02:00:32'),
(130,1,'vm4WTNdYqiAFp1JOxBz0rPNWKf3l0Sqs','2020-03-25 13:10:47','2020-03-25 13:10:47'),
(131,1,'DC8Pk9HNPorpvV7htPjNZgO288Bv32Eb','2020-03-26 03:37:05','2020-03-26 03:37:05'),
(135,1,'8b1vIHzUqekipZxkaBEvIvM8a0IXVhBh','2020-03-26 23:22:24','2020-03-26 23:22:24'),
(136,1,'o6Tj96jHVGRZStfqHCOVVtamanxQZWhO','2020-03-28 18:56:05','2020-03-28 18:56:05'),
(137,1,'tpVgrkbW5E5ifZBRQuXp1TBIZAlibcXl','2020-03-29 03:40:10','2020-03-29 03:40:10'),
(139,1,'pKAlUaOOufeEC1zwOw98coyQwzJcpEz9','2020-03-29 10:58:57','2020-03-29 10:58:57'),
(140,1,'MpDNFMKS5isUfxrhOvhfQnhbryhUoK99','2020-03-30 05:17:27','2020-03-30 05:17:27'),
(141,1,'orVTLU0hrGhULDetrJo00pkIkvmauRmP','2020-03-30 05:17:28','2020-03-30 05:17:28'),
(145,1,'0DiWETpzbx7u4PSSlXNVoS0flOMaF6jR','2020-03-30 15:42:48','2020-03-30 15:42:48'),
(147,1,'S7ldVLAf2TYgrjAE0pY65tmXGKjYzhWf','2020-03-30 15:43:51','2020-03-30 15:43:51'),
(148,1,'AFfcYpErejlgcQSrVGOoiGKqfoPBREVR','2020-03-30 15:43:53','2020-03-30 15:43:53'),
(154,1,'LOvy11c6BGve00AB9WR7HsKrp8sukh0u','2020-04-07 06:23:15','2020-04-07 06:23:15');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_total` int(5) DEFAULT NULL,
  `price_12` int(5) DEFAULT NULL,
  `photo_urls` int(1) DEFAULT NULL,
  `about_product` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `continent` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `like_products` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`price_total`,`price_12`,`photo_urls`,`about_product`,`city`,`country`,`continent`,`tags`,`like_products`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Sample Destination',3333,333333,1,'asdfasdfasdf','Paris, France','FR','Europe','Snow,Cheap','7',NULL,'2020-03-06 05:53:14',NULL),
(6,'Second product',23424,234234234,1,'ssadfasdfdsa','Moscow, Russia','RU','Europe','Snow,Modern,Cheap','1,7','2020-03-05 01:36:58','2020-03-06 05:53:45',NULL),
(7,'Third Producta',324242,234234,1,'sadfasdfsadfadsfasdf','Castro Valley, CA, U','US','North America','Modern,Cheap','1,6','2020-03-06 05:40:17','2020-03-06 12:49:23',NULL);

/*Table structure for table `proposal_items` */

DROP TABLE IF EXISTS `proposal_items`;

CREATE TABLE `proposal_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proposal_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `price_12` double DEFAULT NULL,
  `cost` double DEFAULT NULL,
  `doc_url` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `proposal_items` */

insert  into `proposal_items`(`id`,`proposal_id`,`name`,`price`,`quantity`,`price_12`,`cost`,`doc_url`,`created_at`,`updated_at`,`deleted_at`) values 
(1,1,'Test Item',125,2,50,200,'1.pdf',NULL,'2020-03-10 20:17:21',NULL),
(2,1,'Item2',345,2,70,400,'2.pdf','2020-03-10 09:05:59','2020-03-10 20:17:21',NULL),
(3,1,'item3',390,3,120,1000,'3.pdf','2020-03-10 09:05:59','2020-03-10 20:17:21',NULL);

/*Table structure for table `proposals` */

DROP TABLE IF EXISTS `proposals`;

CREATE TABLE `proposals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  `start_date` timestamp NULL DEFAULT NULL,
  `expire_date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `proposals` */

insert  into `proposals`(`id`,`name`,`user_id`,`status`,`start_date`,`expire_date`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Test Proposal',4,3,'2020-02-08 00:00:00','2020-03-11 00:00:00','2020-01-26 15:42:21','2020-03-09 15:28:48',NULL),
(2,'Proposal1',2,2,'2020-03-08 00:00:00','2020-05-05 00:00:00','2020-03-10 09:29:53','2020-03-10 09:29:53',NULL),
(3,'adsfafadsf',2,3,'2020-03-17 00:00:00','2020-03-17 00:00:00','2020-03-17 13:00:01','2020-03-17 13:00:01',NULL);

/*Table structure for table `reminders` */

DROP TABLE IF EXISTS `reminders`;

CREATE TABLE `reminders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `code` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `reminders` */

/*Table structure for table `role_users` */

DROP TABLE IF EXISTS `role_users`;

CREATE TABLE `role_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `role_users` */

insert  into `role_users`(`user_id`,`role_id`,`created_at`,`updated_at`) values 
(1,1,'2020-03-02 06:48:12','2020-03-02 06:48:12'),
(5,2,'2020-03-19 14:13:27','2020-03-19 14:13:27'),
(6,2,'2020-03-19 14:15:51','2020-03-19 14:15:51'),
(9,2,'2020-03-20 11:35:10','2020-03-20 11:35:10'),
(10,2,'2020-03-20 11:38:02','2020-03-20 11:38:02'),
(11,2,'2020-03-20 11:39:07','2020-03-20 11:39:07'),
(12,2,'2020-03-20 11:39:36','2020-03-20 11:39:36'),
(13,2,'2020-03-20 11:40:06','2020-03-20 11:40:06'),
(14,2,'2020-03-20 18:36:14','2020-03-20 18:36:14');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`slug`,`name`,`permissions`,`created_at`,`updated_at`) values 
(1,'admin','Admin','{\"admin\":1}','2020-03-02 06:48:12','2020-03-02 06:48:12'),
(2,'user','User',NULL,'2020-03-02 06:48:12','2020-03-02 06:48:12');

/*Table structure for table `search_destination` */

DROP TABLE IF EXISTS `search_destination`;

CREATE TABLE `search_destination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dest_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `search_destination` */

insert  into `search_destination`(`id`,`dest_id`,`user_id`,`time`) values 
(1,1,1,1583179600),
(2,1,1,1580860800),
(3,1,0,1585942162),
(4,2,0,1585942162),
(5,4,0,1585942162),
(6,5,0,1585942162),
(7,1,0,1586685585),
(8,2,0,1586685585),
(9,4,0,1586685585),
(10,5,0,1586685585),
(11,1,0,1586758062),
(12,2,0,1586758062),
(13,4,0,1586758062),
(14,5,0,1586758062),
(15,1,0,1586785321),
(16,2,0,1586785321),
(17,4,0,1586785321),
(18,5,0,1586785321);

/*Table structure for table `search_product` */

DROP TABLE IF EXISTS `search_product`;

CREATE TABLE `search_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `search_product` */

insert  into `search_product`(`id`,`prod_id`,`user_id`,`time`) values 
(1,1,1,1583179600),
(2,1,1,1580860800);

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `settings` */

insert  into `settings`(`id`,`name`,`value`,`timestamp`) values 
(1,'euro_rate','8.2',NULL),
(2,'credit_card_tax','4.6',NULL),
(3,'government_fee','4',NULL),
(4,'net_profit','30',NULL),
(5,'company_cost','1',NULL),
(6,'contact_phone','(11) 1111-1111',NULL);

/*Table structure for table `sold_destination` */

DROP TABLE IF EXISTS `sold_destination`;

CREATE TABLE `sold_destination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dest_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `sold_destination` */

insert  into `sold_destination`(`id`,`dest_id`,`user_id`,`time`) values 
(1,1,1,1580860800),
(2,1,1,1583179600);

/*Table structure for table `sold_product` */

DROP TABLE IF EXISTS `sold_product`;

CREATE TABLE `sold_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `sold_product` */

insert  into `sold_product`(`id`,`prod_id`,`user_id`,`time`) values 
(1,1,1,1580860800),
(2,1,1,1583179600);

/*Table structure for table `tag_list` */

DROP TABLE IF EXISTS `tag_list`;

CREATE TABLE `tag_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tag_list` */

insert  into `tag_list`(`id`,`name`) values 
(1,'Snow'),
(2,'Modern'),
(3,'Cheap'),
(8,'Ancient');

/*Table structure for table `taggable_taggables` */

DROP TABLE IF EXISTS `taggable_taggables`;

CREATE TABLE `taggable_taggables` (
  `tag_id` int(10) unsigned NOT NULL,
  `taggable_id` int(10) unsigned NOT NULL,
  `taggable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `i_taggable_fwd` (`tag_id`,`taggable_id`),
  KEY `i_taggable_rev` (`taggable_id`,`tag_id`),
  KEY `i_taggable_type` (`taggable_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `taggable_taggables` */

/*Table structure for table `taggable_tags` */

DROP TABLE IF EXISTS `taggable_tags`;

CREATE TABLE `taggable_tags` (
  `tag_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `normalized` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`tag_id`),
  KEY `taggable_tags_normalized_index` (`normalized`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `taggable_tags` */

/*Table structure for table `tasks` */

DROP TABLE IF EXISTS `tasks`;

CREATE TABLE `tasks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `finished` tinyint(4) NOT NULL DEFAULT '0',
  `task_description` text COLLATE utf8_unicode_ci NOT NULL,
  `task_deadline` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `tasks` */

/*Table structure for table `throttle` */

DROP TABLE IF EXISTS `throttle`;

CREATE TABLE `throttle` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `throttle` */

insert  into `throttle`(`id`,`user_id`,`type`,`ip`,`created_at`,`updated_at`) values 
(1,NULL,'global',NULL,'2020-05-09 16:45:15','2020-05-09 16:45:15'),
(2,NULL,'ip','127.0.0.1','2020-05-09 16:45:16','2020-05-09 16:45:16'),
(3,NULL,'global',NULL,'2020-05-09 17:50:46','2020-05-09 17:50:46'),
(4,NULL,'ip','127.0.0.1','2020-05-09 17:50:46','2020-05-09 17:50:46'),
(5,NULL,'global',NULL,'2020-05-09 17:50:51','2020-05-09 17:50:51'),
(6,NULL,'ip','127.0.0.1','2020-05-09 17:50:51','2020-05-09 17:50:51'),
(7,NULL,'global',NULL,'2020-05-09 17:52:31','2020-05-09 17:52:31'),
(8,NULL,'ip','127.0.0.1','2020-05-09 17:52:31','2020-05-09 17:52:31');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthday` timestamp NULL DEFAULT NULL,
  `passport_number` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `passport_date_issue` timestamp NULL DEFAULT NULL,
  `passport_date_expiration` timestamp NULL DEFAULT NULL,
  `bio` text COLLATE utf8_unicode_ci,
  `gender` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `pic` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipcode` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cpf` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rg` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comments` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_admin` int(1) NOT NULL DEFAULT '0',
  `google_id` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`permissions`,`last_login`,`first_name`,`last_name`,`birthday`,`passport_number`,`passport_date_issue`,`passport_date_expiration`,`bio`,`gender`,`dob`,`pic`,`country`,`state`,`city`,`address`,`postal`,`whatsapp`,`zipcode`,`cpf`,`rg`,`nationality`,`tags`,`comments`,`is_admin`,`google_id`,`created_at`,`updated_at`,`deleted_at`) values 
(1,'Alexander Sedov','admin@admin.com','$2y$10$lbzjUgqEe7BBw3lmmMh79O4EkK92aow0zxxe26d1mS0mUEp/aZqdu',NULL,'2020-05-19 11:39:13','Alexander','Sedov',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'frqKqZB1Ui.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,'2020-03-02 06:48:12','2020-05-19 11:39:13',NULL),
(2,'Alexander Sedov','test@email.com','',NULL,NULL,NULL,NULL,'1987-03-11 00:00:00','EA84749303','2019-03-05 00:00:00','2021-09-02 00:00:00',NULL,NULL,NULL,NULL,NULL,'SAO PAULO','SAO PAULO','RUA SANTA AMARO, 583 - 1 ANDAR BELA VISTA',NULL,'+5511987321420',NULL,'224.224.224-22','44.444.444-2','Brazilian','Snow,Modern,Ancient','dddd',0,NULL,'2020-03-07 23:27:13','2020-03-07 23:27:28',NULL),
(4,'Test User','user@email.com','',NULL,NULL,NULL,NULL,'2020-03-08 00:00:00','EA84749302','2020-03-08 00:00:00','2020-03-08 00:00:00',NULL,NULL,NULL,NULL,NULL,'SAO PAULO','SAO PAULO','RUA SANTA AMARO, 583 - 1 ANDAR BELA VISTA Temp',NULL,'2342342343',NULL,'224.224.224-23','44.444.444-3','Russian','Snow,Modern,Cheap,Ancient','test test test etest test test test test etest test test test test etest test test test test etest test',0,NULL,'2020-03-08 08:20:32','2020-03-08 08:20:32',NULL),
(5,'test user1','testuser@email.com','$2y$10$nQmTliQtGpWQ4UO44UcuAupYAnKxMtGNiL4CszVBF9M4ztPbLelLi',NULL,'2020-03-19 14:13:27',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,'2020-03-19 14:13:26','2020-03-19 14:13:27',NULL),
(6,'signup tester','tester@email.com','$2y$10$QYzpSBr8C5uLJYAZmAC7p.mgS2NRcKen8A/DfevmGPdn83DOQxZ9m',NULL,'2020-03-19 14:15:51',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,NULL,'2020-03-19 14:15:51','2020-03-19 14:15:51',NULL),
(12,'Vinicius Cechella','cechellafreelance@gmail.com','$2y$10$IlLz8EGWI7hoNPdk/UCineraDkEXzdW8DqwfSmS87EdlbOcjtban.',NULL,'2020-03-20 11:40:29',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'102684344549052478894','2020-03-20 11:39:36','2020-03-20 11:40:29',NULL),
(13,'Bernardo Moss','begrowth.dev@gmail.com','$2y$10$Yyr3lNynKOTJa8zk8HLN0.SMr5pKFghBv.fTTEjrUJlQXejNjEw36',NULL,'2020-03-20 11:40:06',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'113399432322041879158','2020-03-20 11:40:06','2020-03-20 11:40:06',NULL),
(14,'Joao Marcos Turnbull','meuagenteservices@gmail.com','$2y$10$qELrpVcXBx1iZD95eSXgo.g/.mXFdoMPe2KGCApSEX69jsDYnb0Xi',NULL,'2020-03-26 12:02:01',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'117611368547430959457','2020-03-20 18:36:14','2020-03-26 12:02:01',NULL);

/*Table structure for table `view_destination` */

DROP TABLE IF EXISTS `view_destination`;

CREATE TABLE `view_destination` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dest_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `view_destination` */

insert  into `view_destination`(`id`,`dest_id`,`user_id`,`time`) values 
(1,1,1,1583179600),
(2,1,1,1580860800),
(3,1,0,1586758066),
(4,1,0,1586758125),
(5,1,0,1586758133),
(6,1,0,1586758170),
(7,1,0,1586785325);

/*Table structure for table `view_product` */

DROP TABLE IF EXISTS `view_product`;

CREATE TABLE `view_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `view_product` */

insert  into `view_product`(`id`,`prod_id`,`user_id`,`time`) values 
(1,1,1,1583179600),
(2,1,1,1580860800);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

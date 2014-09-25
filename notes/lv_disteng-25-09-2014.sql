/*
SQLyog Community v9.02 
MySQL - 5.6.11 : Database - lv_disteng
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `answers` */

DROP TABLE IF EXISTS `answers`;

CREATE TABLE `answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `collection` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `entry` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `answers` */

insert  into `answers`(`id`,`collection`,`entry`,`answer`) values (1,'publisher','pending','<p>Thank you for registering to use The Distribution Engine service. As soon as your registration has been confirmed, you will receive a confirmation email.</p>'),(2,'shop','pending','<p>Thank you for registering to use The Distribution Engine service. As soon as your registration has been confirmed, you will receive a confirmation email.</p>');

/*Table structure for table `assets` */

DROP TABLE IF EXISTS `assets`;

CREATE TABLE `assets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `assetTypeId` int(11) NOT NULL,
  `originalName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filesize` int(11) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `assets` */

insert  into `assets`(`id`,`name`,`assetTypeId`,`originalName`,`filesize`,`ownerId`,`created_at`,`updated_at`) values (1,'1409238873.jpg',1,'logo-600x600.jpg',79447,1,'2014-08-28 15:14:33','2014-08-28 15:14:33'),(2,'1409247605.jpg',1,'Knockabout-Jester-Logo.jpg',73724,2,'2014-08-28 17:40:05','2014-08-28 17:40:05'),(3,'1409248503.png',1,'subversive-logo[1].png',8047,3,'2014-08-28 17:55:03','2014-08-28 17:55:03'),(4,'1409248655.png',1,'markosia-logo[1].png',39327,4,'2014-08-28 17:57:35','2014-08-28 17:57:35'),(5,'1409248771.png',1,'timebomb-logo.png',12469,5,'2014-08-28 17:59:31','2014-08-28 17:59:31'),(6,'1409249251.png',1,'fanfare-logo[1].png',39702,6,'2014-08-28 18:07:31','2014-08-28 18:07:31'),(7,'1409249366.png',1,'accentuk-logo.png',33324,7,'2014-08-28 18:09:26','2014-08-28 18:09:26');

/*Table structure for table `assettypes` */

DROP TABLE IF EXISTS `assettypes`;

CREATE TABLE `assettypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `assettypes` */

insert  into `assettypes`(`id`,`name`,`status`) values (1,'logo',1);

/*Table structure for table `creators` */

DROP TABLE IF EXISTS `creators`;

CREATE TABLE `creators` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `shortDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `creators` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_06_15_191840_add_regions_table',1),('2014_06_15_213545_add_creators_table',1),('2014_06_15_222110_add_userexts_table',1),('2014_06_22_105138_add_users_table',1),('2014_06_22_111945_add_sitevars_table',1),('2014_06_22_112306_add_usertypes_table',1),('2014_07_22_143359_create_assettypes_table',1),('2014_07_22_165224_create_assets_table',1),('2014_07_25_193623_create_shops_table',1),('2014_07_26_120326_create_publishers_table',1),('2014_07_26_151346_create_answers_table',1);

/*Table structure for table `publishers` */

DROP TABLE IF EXISTS `publishers`;

CREATE TABLE `publishers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userId` int(11) NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `regionId` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `publishers` */

insert  into `publishers`(`id`,`name`,`slug`,`userId`,`address`,`regionId`,`status`,`created_at`,`updated_at`) values (1,'Soaring Penguin Press','soaring-penguin-press',4,'4 Florence Terrace\r\nLondon\r\nUK\r\nSW15 3RU',NULL,1,'2014-08-28 15:14:33','2014-08-28 15:15:33'),(2,'Knockabout  Comics','knockabout-comics',5,'',NULL,0,'2014-08-28 17:40:05','2014-08-28 17:40:05'),(3,'Subversive Comics','subversive-comics',6,'',NULL,0,'2014-08-28 17:55:03','2014-08-28 17:55:03'),(4,'Markosian','markosian',7,'',NULL,0,'2014-08-28 17:57:35','2014-08-28 17:57:35'),(5,'Time Bomb Comics','time-bomb-comics',8,'',NULL,0,'2014-08-28 17:59:30','2014-08-28 17:59:30'),(6,'Fanfare  Ponet Mon','fanfare-ponet-mon',9,'',NULL,0,'2014-08-28 18:07:31','2014-08-28 18:07:31'),(7,'Accent UK','accent-uk',10,'',NULL,0,'2014-08-28 18:09:26','2014-08-28 18:09:26');

/*Table structure for table `regions` */

DROP TABLE IF EXISTS `regions`;

CREATE TABLE `regions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `parentId` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `regions` */

insert  into `regions`(`id`,`name`,`slug`,`description`,`parentId`,`status`,`created_at`,`updated_at`) values (1,'North America','north-america','',0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Canada','canada','',1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'United States of America','unites-states-of-america','',1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `shops` */

DROP TABLE IF EXISTS `shops`;

CREATE TABLE `shops` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userId` int(11) NOT NULL,
  `address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `regionId` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `shops` */

insert  into `shops`(`id`,`name`,`slug`,`userId`,`address`,`regionId`,`status`,`created_at`,`updated_at`) values (1,'30th Century','30th-century',3,'somewhere in Toronto',2,1,'2014-08-25 20:41:58','2014-08-25 20:42:30');

/*Table structure for table `sitevars` */

DROP TABLE IF EXISTS `sitevars`;

CREATE TABLE `sitevars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `sitevars` */

insert  into `sitevars`(`id`,`name`,`value`) values (1,'HEADER__title','The Distribution Engine'),(2,'HEADER__author','John Anderson::Soaring Penguin Ltd.'),(3,'HEADER__copyright','&copy; The Distribution Engine'),(4,'HEADER__tagline','Bringing you the comics you didn\'t know you wanted.');

/*Table structure for table `userexts` */

DROP TABLE IF EXISTS `userexts`;

CREATE TABLE `userexts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `userexts` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pwhash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nonce` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userTypeId` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`username`,`email`,`pwhash`,`nonce`,`userTypeId`,`status`,`created_at`,`updated_at`,`remember_token`) values (1,'John Anderson','spenguinAdmin','info@soaringpenguin.com','$2y$10$ep2Pg0lg.D6LcfDQPof.TeqqvJgiKgw6JnoVFIJOqZpIqvY0X1LbC','146ab15c49e8a9697b191f62664b7de8',1,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(2,'John Anderson','janderson','info@soaringpenguinpress.com','$2y$10$r/oJ2lPLAIjrAofZHw1DjOKqW4ethTLpx3JbfzGO9H6eeoudHTxl6','146ab15c49e8a9697b191f62664b7de8',3,1,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),(3,'Will Morgan','wmorgan','will@hotmail.com','$2y$10$K/Rm0bT7y/2Kizdqlj0ww.tFNpYDCZVoKpmk.y45/lE.pcipmC2nC','$2y$10$QJN7IfAxK4hFu6ydJCy.A.goXxq0ifkQbGtqDhwJC/AGfJO3n6GNi',2,0,'2014-08-25 20:41:58','2014-08-25 20:41:58',NULL),(4,'John Anderson','janderson','info@soaringpenguinpress.com','$2y$10$Nu1ZHasnWlqo/bP/iPgmcerrzuAxNdQpAqVMe3bzqhRWyCh3bTVRS','$2y$10$g5/bGNYQ9f2hPJEK0OdbKOclQVkYyS3L3GvAlhRY2aBNSEDQvVICK',3,0,'2014-08-28 15:14:33','2014-08-28 15:14:33',NULL),(5,'Tony Bennett','tbennett','tony@knockabout.com','$2y$10$8c2CtEYEYH05iaCwqAHR2uYrNQTkScSgIiYegU1MUXT5FALLS3TMq','$2y$10$VmdvrdsJHy7aNlMIWZw0wu5T/HL5rstuGNFA8ussv0lJCJW9cCe7S',3,0,'2014-08-28 17:40:05','2014-08-28 17:40:05',NULL),(6,'Jeremy Biggs','jbiggs','jeremy.biggs@subversivecomics.com','$2y$10$sY6Xj4yb/Kn6cjLMUJ.t5uTZQbIXVN.S6hIVdrpv61Qbx.jNRraYa','$2y$10$/w/o8jdkeHvDWrBqWE6ET.a/v595Z.8Mf.4K0Y2CBELCJh8OZAlyu',3,0,'2014-08-28 17:55:03','2014-08-28 21:27:20','RTIv6BXWZdNSbbTxZPWbnXLdOR51x3N4Omeii4MC5NtVFGvNJvJ3LRlNnZpr'),(7,'Harry Markos','hmarkos','harry@markosia.com','$2y$10$4neCrxs2dT.jZktBTfoc1OGh1V52qlEDrNYAFAQGyM0a7qrPieOcC','$2y$10$EbouZm7krQEQNOkLftklsObNxPXtmNbsoiQ/fGxGr4FLVvKE2FfZG',3,0,'2014-08-28 17:57:35','2014-08-28 21:15:01','c2K6HKiCJDOObdWZYT1pPs2IyvYsWX8xNpO6ga93iOVFfOV8ShlhTNhcK7qB'),(8,'Steve Tanner','stanner','stevetanneruk@hotmail.com','$2y$10$ZY1CXkGY1nI5FsIJejN6E.1W9MG5fy2cXekILJVF4MiJgzXlVcY.6','$2y$10$LrYIuttCScWRXJ5hGcrOW.QHkgMdGZx01oAgDwFotNQYj60/XPsFa',3,0,'2014-08-28 17:59:30','2014-08-28 17:59:30',NULL),(9,'Steve Robson','srobson','stephen@fanfareuk.co.uk','$2y$10$HvBXZJK0EIKTxbkBIb1LIeaJAEtPNPmHMRl2x3KlhAe1jiU1TeCPC','$2y$10$MNEnH5nT44zsPTuBMJR9te3vQpXl.4o8wOo62XYiRk29JZnBVOzgm',3,0,'2014-08-28 18:07:31','2014-08-28 18:07:31',NULL),(10,'Colin Mathieson','cmathieson','accentuk@btinternet.com','$2y$10$HkbkDodgzeLQKTvUvOGvf.KLQHTNcCRx1Mk3UqttYJpCSPkWRAbHm','$2y$10$sM6ydcv8HqwTs5sA7N/06.e9aaKR6bHH6ptaIPG1YNePr90Of2Ixy',3,0,'2014-08-28 18:09:26','2014-08-28 21:15:46','NW4kKqt6hKsxw5jrKAUVlf2jCZpaKJduXbUm6kqeTEYYAXbDvvsZ8SzgQlkw');

/*Table structure for table `usertypes` */

DROP TABLE IF EXISTS `usertypes`;

CREATE TABLE `usertypes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `usertypes` */

insert  into `usertypes`(`id`,`name`,`slug`,`description`) values (1,'Admin','admin','Administration type'),(2,'Shop','shop','Comic Shop type'),(3,'Publisher','publisher','Publisher type');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

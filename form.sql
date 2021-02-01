/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.14-MariaDB : Database - form
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`form` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `form`;

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `userid` int(6) NOT NULL,
  `pageid` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `feedback` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

/*Data for the table `feedback` */

insert  into `feedback`(`id`,`userid`,`pageid`,`datetime`,`feedback`) values 
(15,2,'user_123452','2021-02-01 06:45:01','test_page_2_feedback'),
(24,1,'general123452','2021-02-01 11:27:30','p2-feed');

/*Table structure for table `recommend` */

DROP TABLE IF EXISTS `recommend`;

CREATE TABLE `recommend` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `userid` int(6) NOT NULL,
  `pageid` varchar(255) NOT NULL,
  `datetime` datetime NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

/*Data for the table `recommend` */

insert  into `recommend`(`id`,`userid`,`pageid`,`datetime`,`category`) values 
(22,2,'user_123452','2021-02-01 07:13:10','last_test_page_2'),
(23,1,'general123451','2021-02-01 07:18:06','general_category_1'),
(24,1,'general123452','2021-02-01 07:18:41','general_cate_2');

/*Table structure for table `results` */

DROP TABLE IF EXISTS `results`;

CREATE TABLE `results` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `userid` int(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `holidayExpenditure` varchar(50) NOT NULL,
  `leisureTime` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `results` */

insert  into `results`(`id`,`userid`,`datetime`,`holidayExpenditure`,`leisureTime`) values 
(5,1,'2021-02-01 07:33:50','$1,221.00','121.00'),
(6,1,'2021-02-01 11:27:30','$999.00','888.00');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `code` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`code`) values 
(1,'general','general$%^12345','general12345'),
(2,'user','user$%_!^12345','user_12345');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

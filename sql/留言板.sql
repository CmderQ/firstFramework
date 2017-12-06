/*
SQLyog Ultimate v11.52 (64 bit)
MySQL - 10.1.26-MariaDB 
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

create table `guestbook` (
	`id` bigint (20),
	`title` varchar (765),
	`content` text ,
	`creatime` datetime 
); 
insert into `guestbook` (`id`, `title`, `content`, `creatime`) values('5','dssg','sdgdgrty','2017-12-06 16:37:19');
insert into `guestbook` (`id`, `title`, `content`, `creatime`) values('6','dsfsrgr','sdgdthfth','2017-12-06 16:37:44');
insert into `guestbook` (`id`, `title`, `content`, `creatime`) values('7','dgrdsg','dstgrtey','2017-12-06 16:38:10');

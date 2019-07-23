# Host: localhost  (Version: 5.5.53)
# Date: 2017-05-27 15:55:10
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "students"
#

DROP TABLE IF EXISTS `students`;
CREATE TABLE `students` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `sex` varchar(225) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `del` int(2) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8;

#
# Data for table "students"
#

/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (51,'打算111','女',122211,'18712377078',0,1479779864),(76,'撒1','男',12,'18712377078',0,1479795555),(78,'按时1','男',12,'18712377078',0,1479796194),(79,'12aa萨阿德','女',12,'18712377078',0,1479798687),(80,'阿萨达','女',1111111,'18712377078',0,1479798708),(81,'不包','男',11,'18712377078',0,1479798719),(82,'分分','女',12,'18712377078',0,1479798765),(83,'敲完','女',123123,'18712377078',0,1479798878);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `usertable` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `fbid` bigint(20) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=1 ;

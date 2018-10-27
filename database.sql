create database test;

use test;

CREATE TABLE `ideas` (
  `id` int(11) NOT NULL auto_increment,
  `description` varchar(100) NOT NULL,
  `impact` varchar(100) NOT NULL,
  `successmetrics` varchar(100) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `creationtime` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);

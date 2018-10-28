create database database1;

use database1;

CREATE TABLE `ideas` (
  `id` int(32) NOT NULL auto_increment,
  `description` varchar(1000) NOT NULL,
  `impact` varchar(1000) NOT NULL,
  `successmetrics` varchar(1000) NOT NULL,
  `poster` varchar(1000) NOT NULL,
  `creationtime` varchar(1000) NOT NULL,
  PRIMARY KEY  (`id`)
);

-- MySQL dump 10.13  Distrib 5.6.12, for Win32 (x86)
--
-- Host: localhost    Database: reserv
-- ------------------------------------------------------
-- Server version	5.6.12-log

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
-- Table structure for table `expert`
--

DROP TABLE IF EXISTS `expert`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expert` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `image` varchar(64) NOT NULL DEFAULT 'default.jpg',
  `designation` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `parlour_id` int(7) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_parlour_expert` (`parlour_id`),
  CONSTRAINT `fk_parlour_expert` FOREIGN KEY (`parlour_id`) REFERENCES `parlor` (`profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expert`
--

LOCK TABLES `expert` WRITE;
/*!40000 ALTER TABLE `expert` DISABLE KEYS */;
INSERT INTO `expert` VALUES (1,'Jayeeta Das','default.jpg','Hair Specialist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000001),(2,'Mira Ojha','default.jpg','Makeup Artitst','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000001),(3,'Priyanka Chatterjee','default.jpg','Message Pro','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000001),(4,'Anik Dhar','default.jpg','Hair Dresser','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000001),(5,'Mithun Chakraborty','default.jpg','Waxer','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000001),(6,'Pritty Zinta','default.jpg','Eye Line Specialist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000002),(7,'Rakhi Sawant','default.jpg','Skin Specialist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000002),(8,'Manju Mishra','default.jpg','Skin Specialist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000002),(9,'Pratik Jhunjhunwala','default.jpg','Lead Artist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000002),(10,'Anupam Kher','default.jpg','Western Hair Styler','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000002),(11,'Sachin Tendulkar','default.jpg','Makeup Artist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000002),(12,'Deepika Padukan','default.jpg','Eye Line Specialist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000009),(13,'Rama Mazumdar','default.jpg','Lead Artist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000009),(14,'Soma Rakhit','default.jpg','Western Hair Styler','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000009),(15,'Sachin Rakhit','default.jpg','Hair Specialist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000009),(16,'Hana Montana','default.jpg','Hair Scientist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000009),(17,'Hermoini Granger','default.jpg','Message Pro','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000010),(18,'Emma Watson','default.jpg','Spa Head','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000010),(19,'Luna Lovegood','default.jpg','Advisor','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000010),(20,'Maya wati','default.jpg','Health Advisor','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000010),(21,'Rabridevi','default.jpg','Senior Advision','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000010),(22,'Firoza Khan','default.jpg','Senior Specialist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000010),(23,'Zafreen Ahmed','default.jpg','Eye Line Specialist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000011),(24,'Savita Devi','default.jpg','Skin Specialist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000011),(25,'Jhuma Shaw','default.jpg','Lead Artist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000011),(26,'Swastika Basu','default.jpg','Skin Specialist','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000011),(27,'Neelam Banu','default.jpg','Waxer','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000011),(28,'Hemlata Jaiswal','default.jpg','Senior Advision','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000012),(29,'Sonu Sidh','default.jpg','Junior Assistant','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000012),(30,'Priyan Naidu','default.jpg','Founder','She is one of the most talented people on earth. She single handedly managed 32 marriage ceremonies in one day.',0000012);
/*!40000 ALTER TABLE `expert` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gallery` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `filename` varchar(64) NOT NULL,
  `parlour_id` int(7) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_parlour_gallery` (`parlour_id`),
  CONSTRAINT `fk_parlour_gallery` FOREIGN KEY (`parlour_id`) REFERENCES `parlor` (`profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gallery`
--

LOCK TABLES `gallery` WRITE;
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` VALUES (1,'1.jpg',0000001),(2,'2.jpg',0000001),(3,'3.jpg',0000001),(4,'4.jpg',0000001),(5,'5.jpg',0000001),(6,'6.jpg',0000002),(7,'7.jpg',0000002),(8,'8.jpg',0000002),(9,'9.jpg',0000002),(10,'10.jpg',0000002),(11,'11.jpg',0000002),(12,'12.jpg',0000002),(13,'13.jpg',0000002),(14,'14.jpg',0000002),(15,'15.jpg',0000009),(16,'16.jpg',0000009),(17,'17.jpg',0000009),(18,'18.jpg',0000009),(19,'19.jpg',0000010),(20,'20.jpg',0000010),(21,'21.jpg',0000010),(22,'22.jpg',0000010),(23,'23.jpg',0000010),(24,'24.jpg',0000010),(25,'25.jpg',0000011),(26,'26.jpg',0000011),(27,'27.jpg',0000011),(28,'28.jpg',0000012),(29,'29.jpg',0000012),(30,'30.jpg',0000012);
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parlor`
--

DROP TABLE IF EXISTS `parlor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parlor` (
  `profile_id` int(7) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `block_number` varchar(10) NOT NULL,
  `area_id` int(10) unsigned zerofill DEFAULT NULL,
  `zip_code` char(6) NOT NULL,
  `land_line` char(11) DEFAULT NULL,
  `mobile` char(11) DEFAULT NULL,
  `start_hour` time NOT NULL,
  `end_hour` time NOT NULL,
  `coverpicture_url` varchar(80) DEFAULT NULL,
  `logo_url` varchar(80) DEFAULT NULL,
  `google_map_link` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`profile_id`),
  KEY `fk_parlor_area_id` (`area_id`),
  CONSTRAINT `fk_parlor_area_id` FOREIGN KEY (`area_id`) REFERENCES `ref_area` (`area_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parlor`
--

LOCK TABLES `parlor` WRITE;
/*!40000 ALTER TABLE `parlor` DISABLE KEYS */;
INSERT INTO `parlor` VALUES (0000001,'Future Style','23/A',0000000006,'700006','345353534',NULL,'10:00:00','20:00:00',NULL,NULL,NULL),(0000002,'Fashioncrazy','21/F',0000000006,'700006','45345534',NULL,'10:00:00','20:00:00',NULL,NULL,NULL),(0000003,'Paris Salon','45',0000000006,'700006','3453535435',NULL,'10:00:00','20:00:00',NULL,NULL,NULL),(0000004,'Hairdo Specialist','2/1/1A',0000000009,'700009','34535354',NULL,'10:00:00','20:00:00',NULL,NULL,NULL),(0000005,'Antarika Saj','3A',0000000009,'700009','3434534',NULL,'10:00:00','20:00:00',NULL,NULL,NULL),(0000006,'Spa Center','6',0000000009,'700009','546664564',NULL,'10:00:00','20:00:00',NULL,NULL,NULL),(0000007,'Groom Looks','5/A/B',0000000102,'700102','234242346',NULL,'10:00:00','20:00:00',NULL,NULL,NULL),(0000008,'Habib\'s Gen','9/B',0000000102,'700102','23463424',NULL,'10:00:00','21:00:00',NULL,NULL,NULL),(0000009,'Dressers Heaven','318',0000000102,'700102','7546462',NULL,'10:00:00','21:00:00',NULL,NULL,NULL),(0000010,'Angel Grooming','BH-68',0000000102,'700102','353535',NULL,'10:00:00','21:00:00',NULL,NULL,NULL),(0000011,'Rockstar Salon','29',0000000102,'700102','34535356345',NULL,'10:00:00','22:00:00',NULL,NULL,NULL),(0000012,'Great Salon','66',0000000102,'700102','34543532',NULL,'10:00:00','22:00:00',NULL,NULL,NULL);
/*!40000 ALTER TABLE `parlor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parlor_service`
--

DROP TABLE IF EXISTS `parlor_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parlor_service` (
  `package_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `parlor_package_name` varchar(32) NOT NULL,
  `parlor_id` int(7) unsigned zerofill DEFAULT NULL,
  `rate` double(7,2) NOT NULL,
  `approx_time` double(6,2) NOT NULL,
  PRIMARY KEY (`package_id`),
  KEY `fk_parlor_id` (`parlor_id`),
  CONSTRAINT `fk_parlor_id` FOREIGN KEY (`parlor_id`) REFERENCES `parlor` (`profile_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parlor_service`
--

LOCK TABLES `parlor_service` WRITE;
/*!40000 ALTER TABLE `parlor_service` DISABLE KEYS */;
INSERT INTO `parlor_service` VALUES (0000000001,'Color removal',0000001,45.00,30.00),(0000000002,'Partial foil',0000001,120.00,45.00),(0000000003,'Multi-color',0000001,300.00,72.00),(0000000004,'Hair shampoo',0000001,50.00,30.00),(0000000005,'Hair dandruf treatment',0000001,70.00,39.00),(0000000006,'Total hair treatment',0000001,250.00,42.00),(0000000007,'Hair Curl',0000001,450.00,30.00),(0000000008,'Hair spike',0000001,100.00,60.00),(0000000009,'Bridal Package',0000002,3200.00,240.00),(0000000010,'Color removal',0000002,40.00,40.00),(0000000011,'Full Foil',0000002,250.00,90.00),(0000000012,'Stripe color',0000002,300.00,70.00),(0000000013,'Ponytail highlight',0000002,60.00,30.00),(0000000014,'Hair shampoo',0000002,60.00,50.00),(0000000015,'Hair moisturising',0000002,80.00,72.00),(0000000016,'Hair spike',0000002,100.00,90.00),(0000000017,'Bridal Package',0000009,4000.00,240.00),(0000000018,'Hair shampoo',0000009,55.00,60.00),(0000000019,'Hair dandruf treatment',0000009,80.00,80.00),(0000000020,'Color removal',0000010,60.00,90.00),(0000000021,'Full foil',0000010,250.00,50.00),(0000000022,'Partial foil',0000010,160.00,72.00),(0000000023,'Multi-color',0000010,320.00,90.00),(0000000024,'Ponytail highlight',0000010,60.00,92.00),(0000000025,'Color removal',0000011,45.00,90.00),(0000000026,'Partial foil',0000011,100.00,60.00),(0000000027,'Hair damage repair',0000011,230.00,100.00),(0000000028,'Hair shampoo',0000011,55.00,30.00),(0000000029,'Hair dandruf treatment',0000011,75.00,15.00),(0000000030,'Hair moisturizing',0000011,200.00,15.00),(0000000031,'Hair fall treatment',0000011,250.00,40.00),(0000000032,'Hair curl',0000011,500.00,45.00),(0000000033,'Bridal package',0000012,3500.00,320.00),(0000000034,'Ponytail highlight',0000012,70.00,80.00),(0000000035,'Hair damage repair',0000012,200.00,90.00),(0000000036,'Hair shampoo',0000012,55.00,15.00),(0000000037,'Hair dandruf treatment',0000012,85.00,90.00),(0000000038,'Hair moisturizing',0000012,225.00,90.00);
/*!40000 ALTER TABLE `parlor_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parlor_service_link`
--

DROP TABLE IF EXISTS `parlor_service_link`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parlor_service_link` (
  `package_id` int(10) unsigned zerofill NOT NULL DEFAULT '0000000000',
  `service_id` int(10) unsigned zerofill NOT NULL DEFAULT '0000000000',
  PRIMARY KEY (`package_id`,`service_id`),
  KEY `fk_service_id` (`service_id`),
  CONSTRAINT `fk_package_id` FOREIGN KEY (`package_id`) REFERENCES `parlor_service` (`package_id`),
  CONSTRAINT `fk_service_id` FOREIGN KEY (`service_id`) REFERENCES `service_list` (`service_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parlor_service_link`
--

LOCK TABLES `parlor_service_link` WRITE;
/*!40000 ALTER TABLE `parlor_service_link` DISABLE KEYS */;
INSERT INTO `parlor_service_link` VALUES (0000000001,0000000001),(0000000010,0000000001),(0000000020,0000000001),(0000000025,0000000001),(0000000011,0000000002),(0000000021,0000000002),(0000000033,0000000002),(0000000002,0000000003),(0000000009,0000000003),(0000000022,0000000003),(0000000026,0000000003),(0000000003,0000000004),(0000000023,0000000004),(0000000012,0000000005),(0000000013,0000000006),(0000000024,0000000006),(0000000034,0000000006),(0000000009,0000000008),(0000000027,0000000008),(0000000033,0000000008),(0000000035,0000000008),(0000000004,0000000009),(0000000009,0000000009),(0000000014,0000000009),(0000000017,0000000009),(0000000018,0000000009),(0000000028,0000000009),(0000000036,0000000009),(0000000005,0000000010),(0000000019,0000000010),(0000000029,0000000010),(0000000037,0000000010),(0000000015,0000000011),(0000000017,0000000011),(0000000030,0000000011),(0000000033,0000000011),(0000000038,0000000011),(0000000031,0000000012),(0000000006,0000000013),(0000000009,0000000013),(0000000017,0000000013),(0000000007,0000000015),(0000000009,0000000015),(0000000032,0000000015),(0000000008,0000000016),(0000000016,0000000016);
/*!40000 ALTER TABLE `parlor_service_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_area`
--

DROP TABLE IF EXISTS `ref_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_area` (
  `area_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `city_id` int(10) unsigned zerofill DEFAULT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  PRIMARY KEY (`area_id`),
  KEY `fk_grid` (`x`,`y`),
  KEY `fk_city_id` (`city_id`),
  CONSTRAINT `fk_city_id` FOREIGN KEY (`city_id`) REFERENCES `ref_city` (`city_id`),
  CONSTRAINT `fk_grid` FOREIGN KEY (`x`, `y`) REFERENCES `ref_grid` (`xaxis`, `yaxis`)
) ENGINE=InnoDB AUTO_INCREMENT=158 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_area`
--

LOCK TABLES `ref_area` WRITE;
/*!40000 ALTER TABLE `ref_area` DISABLE KEYS */;
INSERT INTO `ref_area` VALUES (0000000001,'Kolkata G.P.O.',0000000001,0,0),(0000000002,'Cossipore',0000000001,0,0),(0000000003,'Bagbazar',0000000001,0,0),(0000000004,'Shyambazar',0000000001,0,0),(0000000005,'Hatkhola',0000000001,1,0),(0000000006,'Beadon Street',0000000001,1,0),(0000000007,'Burrabazar',0000000001,1,0),(0000000008,'Barisha',0000000001,1,0),(0000000009,'Amherst Street',0000000001,2,0),(0000000010,'Beleghata',0000000001,2,0),(0000000011,'Narkeldanga',0000000001,2,0),(0000000012,'Bowbazar',0000000001,2,0),(0000000013,'Dharmatala',0000000001,3,0),(0000000014,'Entally',0000000001,3,0),(0000000015,'Tangra',0000000001,3,0),(0000000016,'Park Street',0000000001,3,0),(0000000017,'Circus Avenue',0000000001,4,0),(0000000018,'Bartala',0000000001,4,0),(0000000019,'Ballygunge',0000000001,4,0),(0000000020,'Elgin Road',0000000001,4,0),(0000000021,'Fort William',0000000001,5,0),(0000000022,'Hastings',0000000001,5,0),(0000000023,'Kidderpore',0000000001,5,0),(0000000024,'Garden Reach',0000000001,5,0),(0000000025,'Bhowanipore',0000000001,0,1),(0000000026,'Kalighat',0000000001,0,1),(0000000027,'Alipore',0000000001,0,1),(0000000028,'Dum Dum',0000000001,0,1),(0000000029,'Sarat Bose Road',0000000001,1,1),(0000000030,'Ghughudanga',0000000001,1,1),(0000000031,'Dhakuria',0000000001,1,1),(0000000032,'Jadavpur University',0000000001,1,1),(0000000033,'Tollygunge',0000000001,2,1),(0000000034,'Behala',0000000001,2,1),(0000000035,'Alambazar',0000000001,2,1),(0000000036,'Baranagore',0000000001,2,1),(0000000037,'Belgachia',0000000001,3,1),(0000000038,'Sahapur',0000000001,3,1),(0000000039,'Tiljala',0000000001,3,1),(0000000040,'Regent Park',0000000001,3,1),(0000000041,'Paschim Putiary',0000000001,4,1),(0000000042,'Kasba',0000000001,4,1),(0000000043,'South Eastern Railway',0000000001,4,1),(0000000044,'Badartala',0000000001,4,1),(0000000045,'Lake Gardens',0000000001,5,1),(0000000046,'Gobinda Khatik Road',0000000001,5,1),(0000000047,'Naktala',0000000001,5,1),(0000000048,'Shreebhumi',0000000001,5,1),(0000000049,'Nimta',0000000001,0,2),(0000000050,'Sinthee',0000000001,0,2),(0000000051,'Birati',0000000001,0,2),(0000000052,'Calcutta Airport',0000000001,0,2),(0000000053,'New Alipore',0000000001,1,2),(0000000054,'Kankurgachi',0000000001,1,2),(0000000055,'Bangur Avenue',0000000001,1,2),(0000000056,'Belghoria',0000000001,1,2),(0000000057,'Ariadaha',0000000001,2,2),(0000000058,'Kamarhati',0000000001,2,2),(0000000059,'Deshbandhu Nagar',0000000001,2,2),(0000000060,'Parnasree Pally',0000000001,2,2),(0000000061,'Sarsoona',0000000001,3,2),(0000000062,'W.B. Governor\'s Camp',0000000001,3,2),(0000000063,'Thakurpukur',0000000001,3,2),(0000000064,'Salt Lake',0000000001,3,2),(0000000065,'Rabindranagar',0000000001,4,2),(0000000066,'Bidhangarh',0000000001,4,2),(0000000067,'Ultadanga Main Road',0000000001,4,2),(0000000068,'Jodhpur Park',0000000001,4,2),(0000000069,'Esplanade',0000000001,5,2),(0000000070,'Bansdroni',0000000001,5,2),(0000000071,'Middleton Row',0000000001,5,2),(0000000072,'Prinsep Street',0000000001,5,2),(0000000073,'Chittaranjan Avenue',0000000001,0,3),(0000000074,'Motijheel',0000000001,0,3),(0000000075,'Santoshpur',0000000001,0,3),(0000000076,'Dakshineshwar',0000000001,0,3),(0000000077,'Bediapara',0000000001,1,3),(0000000078,'Haltu',0000000001,1,3),(0000000079,'Italgacha',0000000001,1,3),(0000000080,'Mall Road',0000000001,1,3),(0000000081,'Rajbari Colony',0000000001,2,3),(0000000082,'Haridebpur',0000000001,2,3),(0000000083,'Nandan Nagar',0000000001,2,3),(0000000084,'Garia',0000000001,2,3),(0000000085,'K G Bose Sarani',0000000001,3,3),(0000000086,'Bagha Jatin',0000000001,3,3),(0000000087,'New Market',0000000001,3,3),(0000000088,'Brace Bridge',0000000001,3,3),(0000000089,'Lake Town',0000000001,4,3),(0000000090,'Nawpara',0000000001,4,3),(0000000091,'Sech Bhavan',0000000001,4,3),(0000000092,'Regent Estate',0000000001,4,3),(0000000093,'Purba Putiary',0000000001,5,3),(0000000094,'Panchasayar',0000000001,5,3),(0000000095,'Golf Green',0000000001,5,3),(0000000096,'Brahmapur',0000000001,5,3),(0000000097,'Duttabad Cluster',0000000001,0,4),(0000000098,'S.A.I. Complex (Salt Lake)',0000000001,0,4),(0000000099,'Kalikapur',0000000001,0,4),(0000000100,'V.I.P. Nagar',0000000001,0,4),(0000000101,'Prafulla Kanan',0000000001,1,4),(0000000102,'Krishnapur',0000000001,1,4),(0000000103,'Narendrapur',0000000001,1,4),(0000000104,'Joka',0000000001,1,4),(0000000105,'Dhapa',0000000001,2,4),(0000000106,'Bidhannager IB Market',0000000001,2,4),(0000000107,'East Kolkata Township',0000000001,2,4),(0000000108,'Indian Statistical Institute',0000000001,2,4),(0000000109,'Agarpara',0000000001,3,4),(0000000110,'Sodepur',0000000001,3,4),(0000000111,'Ghola Bazar',0000000001,3,4),(0000000112,'Pansila',0000000001,3,4),(0000000113,'Natagarh',0000000001,4,4),(0000000114,'Panihati',0000000001,4,4),(0000000115,'Sukchar',0000000001,4,4),(0000000116,'Balaram Dharma Sopan',0000000001,4,4),(0000000117,'Khardah',0000000001,5,4),(0000000118,'Rahara',0000000001,5,4),(0000000119,'Titagarh',0000000001,5,4),(0000000120,'Barrackpore H.O',0000000001,5,4),(0000000121,'Nilgunj Bazar',0000000001,0,5),(0000000122,'Nona Chandanpukur',0000000001,0,5),(0000000123,'Talpukur',0000000001,0,5),(0000000124,'Barasat H.O',0000000001,0,5),(0000000125,'Noapara',0000000001,1,5),(0000000126,'Navapally',0000000001,1,5),(0000000127,'Hridaypur',0000000001,1,5),(0000000128,'Badu',0000000001,1,5),(0000000129,'Madhyamgram',0000000001,2,5),(0000000130,'Madhyamgram Bazar',0000000001,2,5),(0000000131,'New Barrackpore',0000000001,2,5),(0000000132,'Ganganagar',0000000001,2,5),(0000000133,'Michael Nagar',0000000001,3,5),(0000000134,'Nilachal',0000000001,3,5),(0000000135,'Rajarhat',0000000001,3,5),(0000000136,'Rajarhat Gopalpur',0000000001,3,5),(0000000137,'Budge Budge',0000000001,3,5),(0000000138,'Pujali',0000000001,4,5),(0000000139,'Vivekananda Pally',0000000001,4,5),(0000000140,'Batanagar',0000000001,4,5),(0000000141,'Maheshtala',0000000001,4,5),(0000000142,'Santoshpur (Maheshtala)',0000000001,4,5),(0000000143,'Sarkarpool',0000000001,4,5),(0000000144,'Baruipur H.O',0000000001,5,5),(0000000145,'Malancha Mahinagar',0000000001,5,5),(0000000146,'Kodalia',0000000001,5,5),(0000000147,'Subhasgram',0000000001,5,5),(0000000148,'Harinavi',0000000001,5,5),(0000000149,'Rajpur',0000000001,5,5),(0000000150,'Sonarpur',0000000001,5,5),(0000000151,'Dakshin Jagatdal',0000000001,5,5),(0000000152,'Panchpota',0000000001,5,5),(0000000153,'Laskarpur',0000000001,5,5),(0000000154,'Boral',0000000001,5,5),(0000000155,'Abdalpur',0000000001,5,5),(0000000156,'New Town Rajarhat',0000000001,5,5),(0000000157,'Hatiara',0000000001,5,5);
/*!40000 ALTER TABLE `ref_area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_city`
--

DROP TABLE IF EXISTS `ref_city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_city` (
  `city_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `state_id` int(10) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`city_id`),
  KEY `fk_state_id` (`state_id`),
  CONSTRAINT `fk_state_id` FOREIGN KEY (`state_id`) REFERENCES `ref_state` (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_city`
--

LOCK TABLES `ref_city` WRITE;
/*!40000 ALTER TABLE `ref_city` DISABLE KEYS */;
INSERT INTO `ref_city` VALUES (0000000001,'Kolkata',0000000004),(0000000002,'Asansol',0000000004),(0000000003,'Siliguri',0000000004),(0000000004,'Durgapur',0000000004),(0000000005,'Bardhaman',0000000004),(0000000006,'English Bazar',0000000004),(0000000007,'Baharampur',0000000004),(0000000008,'Habra',0000000004),(0000000009,'Kharagpur',0000000004),(0000000010,'Shantipur',0000000004),(0000000011,'Dankuni',0000000004),(0000000012,'Dhulian',0000000004),(0000000013,'Ranaghat',0000000004),(0000000014,'Haldia',0000000004),(0000000015,'Raiganj',0000000004),(0000000016,'Krishnanagar',0000000004),(0000000017,'Nabadwip',0000000004),(0000000018,'Medinipur',0000000004),(0000000019,'Jalpaiguri',0000000004),(0000000020,'Balurghat',0000000004),(0000000021,'Basirhat',0000000004),(0000000022,'Bankura',0000000004),(0000000023,'Chakdaha',0000000004),(0000000024,'Darjeeling',0000000004),(0000000025,'Alipurduar',0000000004),(0000000026,'Purulia',0000000004),(0000000027,'Jangipur',0000000004),(0000000028,'Bangaon',0000000004),(0000000029,'Cooch Behar',0000000004);
/*!40000 ALTER TABLE `ref_city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_country`
--

DROP TABLE IF EXISTS `ref_country`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_country` (
  `country_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_country`
--

LOCK TABLES `ref_country` WRITE;
/*!40000 ALTER TABLE `ref_country` DISABLE KEYS */;
INSERT INTO `ref_country` VALUES (0001,'India');
/*!40000 ALTER TABLE `ref_country` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_grid`
--

DROP TABLE IF EXISTS `ref_grid`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_grid` (
  `xaxis` int(11) NOT NULL DEFAULT '0',
  `yaxis` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`xaxis`,`yaxis`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_grid`
--

LOCK TABLES `ref_grid` WRITE;
/*!40000 ALTER TABLE `ref_grid` DISABLE KEYS */;
INSERT INTO `ref_grid` VALUES (0,0),(0,1),(0,2),(0,3),(0,4),(0,5),(1,0),(1,1),(1,2),(1,3),(1,4),(1,5),(2,0),(2,1),(2,2),(2,3),(2,4),(2,5),(3,0),(3,1),(3,2),(3,3),(3,4),(3,5),(4,0),(4,1),(4,2),(4,3),(4,4),(4,5),(5,0),(5,1),(5,2),(5,3),(5,4),(5,5);
/*!40000 ALTER TABLE `ref_grid` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_parlor_rating`
--

DROP TABLE IF EXISTS `ref_parlor_rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_parlor_rating` (
  `parlor_id` int(7) unsigned zerofill NOT NULL DEFAULT '0000000',
  `user_id` int(10) unsigned zerofill NOT NULL DEFAULT '0000000000',
  `rate_id` int(1) DEFAULT NULL,
  PRIMARY KEY (`parlor_id`,`user_id`),
  KEY `fk_user` (`user_id`),
  KEY `fk_rate` (`rate_id`),
  CONSTRAINT `fk_parlor` FOREIGN KEY (`parlor_id`) REFERENCES `parlor` (`profile_id`),
  CONSTRAINT `fk_rate` FOREIGN KEY (`rate_id`) REFERENCES `ref_rating` (`id`),
  CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `user_details` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_parlor_rating`
--

LOCK TABLES `ref_parlor_rating` WRITE;
/*!40000 ALTER TABLE `ref_parlor_rating` DISABLE KEYS */;
INSERT INTO `ref_parlor_rating` VALUES (0000001,0000000001,1),(0000002,0000000001,2),(0000009,0000000001,3),(0000010,0000000001,4),(0000011,0000000001,5),(0000001,0000000002,6),(0000012,0000000002,6),(0000009,0000000002,7),(0000011,0000000002,8),(0000002,0000000002,9),(0000012,0000000001,9);
/*!40000 ALTER TABLE `ref_parlor_rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_rating`
--

DROP TABLE IF EXISTS `ref_rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_rating` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `rate_name` varchar(32) NOT NULL,
  `points` double(2,1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_rating`
--

LOCK TABLES `ref_rating` WRITE;
/*!40000 ALTER TABLE `ref_rating` DISABLE KEYS */;
INSERT INTO `ref_rating` VALUES (1,'Don\'t visit',1.0),(2,'Terrible',1.5),(3,'It exists',2.0),(4,'For casual',2.5),(5,'Average',3.0),(6,'Good',3.5),(7,'Great',4.0),(8,'Amazing',4.5),(9,'Best',5.0);
/*!40000 ALTER TABLE `ref_rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ref_state`
--

DROP TABLE IF EXISTS `ref_state`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ref_state` (
  `state_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `country_id` int(4) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`state_id`),
  KEY `fk_country_id` (`country_id`),
  CONSTRAINT `fk_country_id` FOREIGN KEY (`country_id`) REFERENCES `ref_country` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ref_state`
--

LOCK TABLES `ref_state` WRITE;
/*!40000 ALTER TABLE `ref_state` DISABLE KEYS */;
INSERT INTO `ref_state` VALUES (0000000001,'Uttar Pradesh',0001),(0000000002,'Maharashtra',0001),(0000000003,'Bihar',0001),(0000000004,'West Bengal',0001),(0000000005,'Andhra Pradesh',0001),(0000000006,'Madhya Pradesh',0001),(0000000007,'Tamil Nadu',0001),(0000000008,'Rajasthan',0001),(0000000009,'Karnataka',0001),(0000000010,'Gujarat',0001),(0000000011,'Odisha',0001),(0000000012,'Kerala',0001),(0000000013,'Jharkhand',0001),(0000000014,'Assam',0001),(0000000015,'Punjab',0001),(0000000016,'Chhattisgarh',0001),(0000000017,'Haryana',0001),(0000000018,'Jammu and Kashmir',0001),(0000000019,'Uttarakhand',0001),(0000000020,'Himachal Pradesh',0001),(0000000021,'Tripura',0001),(0000000022,'Meghalaya',0001),(0000000023,'Manipur?',0001),(0000000024,'Nagaland',0001),(0000000025,'Goa',0001),(0000000026,'Arunachal Pradesh',0001),(0000000027,'Mizoram',0001),(0000000028,'Sikkim',0001),(0000000029,'Delhi',0001),(0000000030,'Puducherry',0001),(0000000031,'Chandigarh',0001),(0000000032,'Andaman and Nicobar Islands',0001),(0000000033,'Dadra and Nagar Haveli',0001),(0000000034,'Daman and Diu',0001),(0000000035,'Lakshadweep',0001);
/*!40000 ALTER TABLE `ref_state` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_list`
--

DROP TABLE IF EXISTS `service_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_list` (
  `service_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `subcat_id` int(10) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`service_id`),
  KEY `fk_subcat_id` (`subcat_id`),
  CONSTRAINT `fk_subcat_id` FOREIGN KEY (`subcat_id`) REFERENCES `service_subcategory` (`subcat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_list`
--

LOCK TABLES `service_list` WRITE;
/*!40000 ALTER TABLE `service_list` DISABLE KEYS */;
INSERT INTO `service_list` VALUES (0000000001,'Color removal',0000000004),(0000000002,'Full foil',0000000004),(0000000003,'Partial foil',0000000004),(0000000004,'Multi-color',0000000004),(0000000005,'Stripe color',0000000004),(0000000006,'Ponytail highlight',0000000004),(0000000008,'Hair damage repair',0000000005),(0000000009,'Hair shampoo',0000000005),(0000000010,'Hair dandruf treatment',0000000005),(0000000011,'Hair moisturizing',0000000005),(0000000012,'Hair fall treatment',0000000005),(0000000013,'Total hair treatment',0000000005),(0000000015,'Hair curl',0000000002),(0000000016,'Hair spike',0000000002);
/*!40000 ALTER TABLE `service_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_maincategory`
--

DROP TABLE IF EXISTS `service_maincategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_maincategory` (
  `maincat_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`maincat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_maincategory`
--

LOCK TABLES `service_maincategory` WRITE;
/*!40000 ALTER TABLE `service_maincategory` DISABLE KEYS */;
INSERT INTO `service_maincategory` VALUES (0000000001,'Hair');
/*!40000 ALTER TABLE `service_maincategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `service_subcategory`
--

DROP TABLE IF EXISTS `service_subcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `service_subcategory` (
  `subcat_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `maincat_id` int(10) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`subcat_id`),
  KEY `fk_maincat_id` (`maincat_id`),
  CONSTRAINT `fk_maincat_id` FOREIGN KEY (`maincat_id`) REFERENCES `service_maincategory` (`maincat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `service_subcategory`
--

LOCK TABLES `service_subcategory` WRITE;
/*!40000 ALTER TABLE `service_subcategory` DISABLE KEYS */;
INSERT INTO `service_subcategory` VALUES (0000000001,'Hair Cut',0000000001),(0000000002,'Hair Styling',0000000001),(0000000003,'Hair Straight',0000000001),(0000000004,'Hair Color',0000000001),(0000000005,'Hair Treatment',0000000001);
/*!40000 ALTER TABLE `service_subcategory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_details` (
  `user_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `phone` char(10) DEFAULT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(200) NOT NULL,
  `location` int(10) unsigned zerofill DEFAULT NULL,
  `profile_pic` varchar(50) DEFAULT 'default.jpg',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email_uk` (`email`),
  UNIQUE KEY `uk_phone` (`phone`),
  KEY `fk_areaid` (`location`),
  CONSTRAINT `fk_areaid` FOREIGN KEY (`location`) REFERENCES `ref_area` (`area_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_details`
--

LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
INSERT INTO `user_details` VALUES (0000000001,'Gopal Ojha','9748408905','827ccb0eea8a706c4c34a16891f84e7b','gopal.virtual@gmail.com',0000000004,'1.jpg'),(0000000002,'Mira Ojha','9007760927','25d55ad283aa400af464c76d713c07ad','mira@gmail.com',0000000003,'default.jpg');
/*!40000 ALTER TABLE `user_details` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-30 16:34:05

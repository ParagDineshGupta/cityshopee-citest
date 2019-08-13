CREATE DATABASE  IF NOT EXISTS `cityshopee` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cityshopee`;
-- MySQL dump 10.13  Distrib 5.1.53, for Win64 (unknown)
--
-- Host: 127.0.0.1    Database: cityshopee
-- ------------------------------------------------------
-- Server version	5.1.53-community

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
-- Table structure for table `admin_tbl`
--

DROP TABLE IF EXISTS `admin_tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_tbl` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_tbl`
--

LOCK TABLES `admin_tbl` WRITE;
/*!40000 ALTER TABLE `admin_tbl` DISABLE KEYS */;
INSERT INTO `admin_tbl` VALUES (1,'parag','admin1'),(2,'srk','admin2');
/*!40000 ALTER TABLE `admin_tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emergencynumber`
--

DROP TABLE IF EXISTS `emergencynumber`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emergencynumber` (
  `institute` varchar(64) NOT NULL,
  `number` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emergencynumber`
--

LOCK TABLES `emergencynumber` WRITE;
/*!40000 ALTER TABLE `emergencynumber` DISABLE KEYS */;
INSERT INTO `emergencynumber` VALUES ('Bombay Hospital','4001716','HOSPITAL'),('Bhandari Hospital','2552833 , 4003333','HOSPITAL'),('Choithram Hospital','4206757 , 4029369','HOSPITAL'),('CHL Apollo Hospital','4006004','HOSPITAL'),('Suyash Hospital','4064914','HOSPITAL'),('Lifeline Hospital','2575611','HOSPITAL'),('Curewell Hospital','4068280 , 4046881','HOSPITAL'),('Geeta Hospital','2499009','HOSPITAL'),('Gokuldas Hospital','2519214 , 2519221','HOSPITAL'),(' Laxmi Bai Nagar','2416677,2416688, 2416655','FIRESTATION ( INDORE )'),('Gandhi Hall','2431226','FIRESTATION ( INDORE )'),('Moti Tabela','2477777, 2762444','FIRESTATION ( INDORE )'),('G.N.T Market','2480963','FIRESTATION ( INDORE )'),('Pithampur','2480963','FIRESTATION ( INDORE )'),('Indian Airlines Enquiry','143','TRANSPORTATION ( INDORE )'),('Railways Enquiry','139 , 131, 135','TRANSPORTATION ( INDORE )'),('Reservation Railways Enquiry','2521685','TRANSPORTATION ( INDORE )'),('Sarvate Bus Stand','24656888,4038973','TRANSPORTATION ( INDORE )'),('Gangwal Bus Stand','2480688,4026555, 2380688','TRANSPORTATION ( INDORE )'),('Police','100','IMP'),('Ambulance','102,108','IMP'),('Fire control Room','101','IMP'),('Railway Enquiry','131,132,135','IMP'),('Vijay Nagar Bus Stand','2555577','TRANSPORTATION ( INDORE )'),('Mahila Police Station','2547929	4001624	','IMP'),('Police Computerization Center','2510306	2528784','IMP'),('Police Coontrol Room (24 Hours)','2522500-1	4044023','IMP'),('M.Y.H. ','2528301, 2527301','Hospital'),('We Care for You (Indore)','0731-2522111','IMP'),('C.M. HELPLINE','181','IMP'),('CHILD HELPLINE','1098','IMP'),('Khajrana	','2591475','Police Station'),('Juni Indore','2449651	4001634','Police Station'),('Hira Nagar','2553100 4001630','Police Station'),('Chatripura','2349851	4001639','Police Station'),('Choti Gwaltoli','2524400	4001626','Police Station'),('Chandan Nagar			','2780033 4001644','Police Station'),('Bhanwarkuan	','2449948	4001636','Police Station'),('Banganga','2720300	4001629','Police Station'),('Aerodrum','2620100	4001642','Police Station'),('Annapurna','2583032	4001643','Police Station'),('Central Kotwali				','5021950	4001633','Police Station'),('Lasudia','5021950	4001633','Police Station'),('Malharganj','2459100 ','Police Station'),('M.G. Road	','2540100','Police Station');
/*!40000 ALTER TABLE `emergencynumber` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newshops`
--

DROP TABLE IF EXISTS `newshops`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newshops` (
  `val` int(11) unsigned NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newshops`
--

LOCK TABLES `newshops` WRITE;
/*!40000 ALTER TABLE `newshops` DISABLE KEYS */;
INSERT INTO `newshops` VALUES (4);
/*!40000 ALTER TABLE `newshops` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shopee`
--

DROP TABLE IF EXISTS `shopee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shopee` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `shop` varchar(250) NOT NULL,
  `shopkeeper` varchar(120) NOT NULL,
  `shopfile` varchar(500) NOT NULL,
  `shopview` varchar(500) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `altermob` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(120) NOT NULL,
  `shop_type` varchar(500) NOT NULL,
  `delivery_locatons` varchar(500) NOT NULL,
  `date_time` datetime NOT NULL,
  `uname` varchar(120) NOT NULL,
  `password` varchar(30) NOT NULL,
  `sstatus` varchar(30) NOT NULL DEFAULT 'close',
  `close_reason` varchar(510) NOT NULL,
  `opening_time` time NOT NULL,
  `closing_time` time NOT NULL,
  `logo` varchar(60) NOT NULL,
  `simage` varchar(60) NOT NULL,
  `qualitycard` varchar(60) NOT NULL,
  `menu1` varchar(60) NOT NULL,
  `menu2` varchar(60) NOT NULL,
  `menu3` varchar(60) NOT NULL,
  `offercard` varchar(60) NOT NULL,
  UNIQUE KEY `sid` (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shopee`
--

LOCK TABLES `shopee` WRITE;
/*!40000 ALTER TABLE `shopee` DISABLE KEYS */;
INSERT INTO `shopee` VALUES (5,'yash fancy fair','sashi rathore','yashfancyfair6',' ','9926854832','7354169753','sashirathore@gmail.com','bhavarkua','clothing','itPark-bhavarkua-navlakha-towerSquare','2018-03-30 11:55:29','sashi rathore','9926854832','open','','00:00:00','00:00:00','','','','','','',''),(15,'Ram Home Decor','Ram','RamHomeDecor16',' ','9584777921','1234567890','guptaparag1996@hotmail.com','novlakha','homeDecor','iet-itPark-bhavarkua-navlakha','2018-04-27 08:26:34','RamChandra','9584777921','open','Sunday Off','08:00:00','22:00:00','','','','myimage.png','','',''),(8,'neelkaml restaurant','kamlesh singad','neelkamlrestaurant9',' ','7354169752','9926579628','soni.kamal@gmail.com','bhavarakua','food','bhavarkua','2018-03-31 08:20:00','kamlesh singad','7354169752','open','','11:00:00','00:00:00','20150115_130943.jpg','20151226_104226.jpg','Capture.PNG','IMG-20180501-WA0004.jpg','IMG-20180501-WA0001.jpg','','Capture3.PNG'),(9,'Dayal shoes','Ram Dayal','Dayalshoes8',' ','9584777921','7354169753','guptaparag1996@gmail.com','navlakha','footwear','iet-itPark-bhavarkua-navlakha-towerSquare','2018-03-31 08:20:08','Ram Dayal','9584777921','open','','00:00:00','00:00:00','','','','','','',''),(10,'iet stationery','kamal nath','ietstationery10',' ','9584777921','7586468598','kamal@gmil.com','iet davv','stationery','iet-itPark','2018-03-31 08:20:31','kamal nath','9584777921','open','','00:00:00','00:00:00','','','','','','',''),(11,'fresh daily','ravi kumar','freshdaily11',' ','9584777921','6975875697','guptaparag1996@gmail.com','bhavarkua','dailyNeeds','iet-itPark-bhavarkua-navlakha-towerSquare','2018-03-31 08:20:54','ravi kumar','9584777921','open','','00:00:00','00:00:00','','','','','','',''),(12,'saifi electronics','saif ali','saifielectronics13',' ','9584777921','9926796260','saifi@gmail.com','bhavarkua','electronicAppliances','iet-itPark-bhavarkua-navlakha-towerSquare','2018-03-31 08:21:01','saif ali','9584777921','open','','00:00:00','00:00:00','','Screenshot_2017-07-31-19-33-55-1.png','','20180112_172552.jpg','','20180107_084043.jpg','');
/*!40000 ALTER TABLE `shopee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shopkeepers`
--

DROP TABLE IF EXISTS `shopkeepers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shopkeepers` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `shop` varchar(250) NOT NULL,
  `shopkeeper` varchar(120) NOT NULL,
  `mob` varchar(15) NOT NULL,
  `altermob` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(120) NOT NULL,
  `shop_type` varchar(500) NOT NULL,
  `delivery_locatons` varchar(500) NOT NULL,
  `date_time` datetime NOT NULL,
  `check` varchar(20) NOT NULL DEFAULT 'unchecked',
  UNIQUE KEY `sid` (`sid`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shopkeepers`
--

LOCK TABLES `shopkeepers` WRITE;
/*!40000 ALTER TABLE `shopkeepers` DISABLE KEYS */;
INSERT INTO `shopkeepers` VALUES (1,'Parag Food','Parag','9584777921','9993164243','guptaparag1996@gmail.com','11\r\nGajadhar nagar,novlakha','food','iet-itPark-bhavarkua','2018-03-29 08:43:05','checked'),(2,'parag grocery','vipul','9584777921','9993164243','guptaparag1996@gmail.com','IET','grocery','iet-itPark-bhavarkua','2018-03-29 09:13:31','checked'),(3,'khan garments','salman ','9584777921','1234567890','guptaparag1996@gmail.com','qqq','clothing','iet-itPark-bhavarkua','2018-03-29 11:49:35','checked'),(4,'simran kirana','raj','9584777921','1111111111','guptaparag1996@gmail.com','aaa','grocery','iet-itPark-bhavarkua','2018-03-29 12:31:57','checked'),(5,'ram milk','ram','1234567890','9999999999','guptaparag1996@gmail.com','aaa','dailyNeeds','iet-itPark-bhavarkua','2018-03-30 09:27:09','checked'),(6,'yash fancy fair','sashi rathore','9926854832','7354169753','sashirathore@gmail.com','bhavarkua','clothing','itPark-bhavarkua-navlakha-towerSquare','2018-03-30 11:53:00','checked'),(7,'Dayal shoes','Ram Dayal','9584777921','7354169753','guptaparag1996@gmail.com','navlakha','footwear','iet-itPark-bhavarkua-navlakha-towerSquare','2018-03-31 08:12:09','checked'),(8,'Dayal shoes','Ram Dayal','9584777921','7354169753','guptaparag1996@gmail.com','navlakha','footwear','iet-itPark-bhavarkua-navlakha-towerSquare','2018-03-31 08:12:11','checked'),(9,'neelkaml restaurant','kamlesh singad','7354169752','9926579628','soni.kamal@gmail.com','bhavarakua','food','bhavarkua','2018-03-31 08:13:33','checked'),(10,'iet stationery','kamal nath','9584777921','7586468598','kamal@gmil.com','iet davv','stationery','iet-itPark','2018-03-31 08:14:42','checked'),(11,'fresh daily','ravi kumar','9584777921','6975875697','guptaparag1996@gmail.com','bhavarkua','dailyNeeds','iet-itPark-bhavarkua-navlakha-towerSquare','2018-03-31 08:15:41','checked'),(12,'fresh daily','ravi kumar','9584777921','6975875697','guptaparag1996@gmail.com','bhavarkua','dailyNeeds','iet-itPark-bhavarkua-navlakha-towerSquare','2018-03-31 08:15:43','checked'),(13,'saifi electronics','saif ali','9584777921','9926796260','saifi@gmail.com','bhavarkua','electonicAppliances','iet-itPark-bhavarkua-navlakha-towerSquare','2018-03-31 08:16:59','checked'),(14,'bcd','abc','9074490748','9074490749','djkakka@gmail.com','aidasdk','homeDecor','itPark','2018-03-31 08:47:35','checked'),(15,'sachi poin','Gagan','9074490746','9074490746','gudasug@gmail.com','gyuggu','grocery','bhavarkua','2018-03-31 10:41:24','unchecked'),(16,'Ram Home Decor','Ram','9584777921','1234567890','guptaparag1996@hotmail.com','novlakha','homeDecor','iet-itPark-bhavarkua-navlakha','2018-04-27 08:23:16','checked'),(17,'ll','ll','9584777921','1234567890','guptaparag1996@gmail.com','ll','clothing','iet-bhavarkua','2018-04-27 12:28:27','deleted'),(18,'hjhh','hjhh','9584777921','1234567890','guptaparag1996@gmail.com','hyy','grocery','iet-bhavarkua','2018-04-27 12:29:41','deleted'),(19,'ry','juy','9584777921','1234567890','guptaparag1996@gmail.com','yy7','grocery','iet-bhavarkua','2018-04-27 12:37:02','deleted'),(20,'ll','shubham','9584777921','1234567890','guptaparag1996@gmail.com','ll','clothing','iet-bhavarkua','2018-04-27 12:39:42','deleted'),(21,'ll','ravi','9584777921','1234567890','guptaparag1996@gmail.com','ll','clothing','iet-bhavarkua','2018-04-27 12:40:32','deleted'),(22,'ll','anurag','9584777921','1234567890','guptaparag1996@gmail.com','ll','clothing','iet-bhavarkua','2018-04-27 12:42:53','deleted'),(23,'Jain stationary','paro','9584777921','987654321','guptaparag1996@gmail.com','novlakha','grocery_clothing','iet-bhavarkua','2018-05-02 09:33:30','unchecked'),(24,'234567890@','fghjk','9584777921','2312345678','234fgh@fghj','3456789ij@@@@@','clothing','iet-bhavarkua','2018-05-02 10:18:03','unchecked'),(25,'Rahul Kirana ','Rahul','9876543210','1234567890','parag@abcd.in','abcd','grocery','iet-bhavarkua','2019-04-06 01:28:05','unchecked');
/*!40000 ALTER TABLE `shopkeepers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-08-13  7:19:51

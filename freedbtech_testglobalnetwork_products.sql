-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: freedb.tech    Database: freedbtech_testglobalnetwork
-- ------------------------------------------------------
-- Server version	5.7.34-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) NOT NULL,
  `description` text NOT NULL,
  `price` float(10,2) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `QuantityInStock` int(100) NOT NULL,
  `QuantitySold` int(100) NOT NULL,
  `date_registered` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1010 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1000,'Brian Ray \'62 SG Junior - White Fox','Specifications:\r\n\r\nSolidbody Electric Guitar\r\nThicker Mahogany Body\r\nMahogany Neck and Rosewood Fretboard\r\n24-3/4\" Scale Length\r\n12” Fretboard Radius\r\nDog Ear P-90 Pickup\r\nMaster Volume and Tone Controls\r\nPassive ‘Induction Coil’ Circuit activated with Push-Push Knob to Reduce RF Interference and High Gain Noise\r\nConvertible Tailpiece for Wraptail or Vibrola Setup\r\nCustom Trapezoid Inlay Pattern\r\nEbony Block Tailpiece\r\n\r\nIncludes: Hardshell Case, Certificate of Authenticity, Paperwork',212403.91,'guitar-1.jpg',1,0,'March 13, 2020, 5:31 PM'),(1001,'1958 Les Paul Junior Double Cut Reissue - Cherry Red','SPECIFICATIONS\r\nBody Shape: Doublecut\r\nColour: Cherry\r\nBody Style: Solidbody\r\nNumber of Strings: 6\r\nRelic/Aging: No\r\nBody Wood: Mahogany\r\nFinish: Nitro\r\nNeck Wood: Mahogany\r\nFretboard Wood: Rosewood\r\nScale Length: 24.75\"\r\nNumber of Frets: 22\r\nFretboard Radius: 12\"\r\nNut Width: 1-11/16\" (43mm)\r\nBridge/Tailpiece: Fixed\r\nPickup Configuration: P90',192170.14,'guitar-2.jpg',2,0,'March 14, 2020, 3:54 AM'),(1002,'Chuck Berry 1955 ES-350T - Antique Natural','my guitar is ambots hsaub',504949.50,'guitar-3.jpg',3,0,'March 14, 2020, 3:53 AM'),(1003,'Dave Amato Les Paul Axcess Standard - Boston Sunset Fade','Spec\'d by REO Speedwagon guitarist Dave Amato\r\nFigured maple-topped weight-relieved mahogany body delivers classic tone and resonance\r\n\'57 Classic Plus humbuckers yield hot output, along with rich, vintage tone\r\nUltra-playable Extra Chunky neck with Axcess contour heel and white ebony fingerboard\r\nFloyd Rose tremolo for twisting, bending, and diving',257499.50,'guitar-4.jpg',3,0,'March 14, 2020, 3:38 AM'),(1004,'Eric Clapton 1964 Firebird I - Vintage Sunburst','my guitar is ambots hsaub',403949.50,'guitar-5.jpg',3,0,'	 March 14, 2020, 3:58 AM'),(1005,'1957 Les Paul Goldtop Reissue - Double Gold','my guitar is ambots hsaub',237299.50,'guitar-6.jpg',3,0,'March 14, 2020, 3:56 AM'),(1006,'JIMI HENDRIX VOODOO CHILD STRATOCASTER JOURNEYMAN RELIC - OLYMPIC','my guitar is ambots hsaub',232300.00,'guitar-7.jpg',3,0,'March 14, 2020, 3:57 AM'),(1007,'LIMITED EDITION SUPER CUSTOM TELECASTER DELUXE - BLUE SPARKLE','my guitar is ambots hsaub',222200.00,'guitar-8.jpg',3,0,'March 14, 2020, 4:00 AM'),(1008,'1957 Les Paul Custom Reissue - Ebony 2-Pickup','my guitar is ambots hsaub',338299.50,'guitar-9.jpg',3,0,'March 16, 2020, 12:00 AM'),(1009,'1967 Flying V w/ Vibrola - Sparkling Burgundy','my guitar is ambots hsaub',252449.50,'guitar-10.jpg',3,0,'March 15, 2020, 0:00 PM');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-29  1:35:58

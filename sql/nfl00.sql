CREATE DATABASE  IF NOT EXISTS `nfl` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `nfl`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: nfl
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `nfl`
--

DROP TABLE IF EXISTS `nfl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nfl` (
  `playid` int NOT NULL AUTO_INCREMENT,
  `gameid` varchar(32) DEFAULT NULL,
  `stadium` varchar(6) DEFAULT NULL,
  `home` varchar(5) DEFAULT NULL,
  `away` varchar(5) DEFAULT NULL,
  `possession` varchar(5) DEFAULT NULL,
  `playtype` varchar(16) DEFAULT NULL,
  `kickdistance` int DEFAULT NULL,
  `passingyards` int DEFAULT NULL,
  `returnyards` int DEFAULT NULL,
  `airyards` int DEFAULT NULL,
  `yards` int DEFAULT NULL,
  PRIMARY KEY (`playid`)
) ENGINE=InnoDB AUTO_INCREMENT=286138 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nfl`
--

LOCK TABLES `nfl` WRITE;
/*!40000 ALTER TABLE `nfl` DISABLE KEYS */;

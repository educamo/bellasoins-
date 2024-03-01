/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100425
 Source Host           : localhost:3306
 Source Schema         : db_bellasoins

 Target Server Type    : MySQL
 Target Server Version : 100425
 File Encoding         : 65001

 Date: 01/03/2024 13:38:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for appointments
-- ----------------------------
DROP TABLE IF EXISTS `appointments`;
CREATE TABLE `appointments`  (
  `appointmentId` int NOT NULL,
  `clientId` int NOT NULL,
  `nameClient` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phoneNumber` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dateAppoinment` date NOT NULL,
  `hourAppointment` time NOT NULL,
  `companions` int NULL DEFAULT 0,
  PRIMARY KEY (`appointmentId`) USING BTREE,
  INDEX `clients_ibfk_1`(`clientId` ASC) USING BTREE,
  CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`clientId`) REFERENCES `clients` (`clientId`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of appointments
-- ----------------------------

-- ----------------------------
-- Table structure for categoryservices
-- ----------------------------
DROP TABLE IF EXISTS `categoryservices`;
CREATE TABLE `categoryservices`  (
  `categoryServiceId` int NOT NULL,
  `categoryName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `image` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`categoryServiceId`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categoryservices
-- ----------------------------
INSERT INTO `categoryservices` VALUES (1, 'Depilacion', 'Some quick example text to build on the card title and make up the bulk of the card\'s content.', 'image.jpg');

-- ----------------------------
-- Table structure for clients
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients`  (
  `clientId` int NOT NULL,
  `nameClient` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`clientId`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of clients
-- ----------------------------

-- ----------------------------
-- Table structure for services
-- ----------------------------
DROP TABLE IF EXISTS `services`;
CREATE TABLE `services`  (
  `serviceId` int NOT NULL,
  `serviceName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(10, 2) NOT NULL,
  `categoryServiceId` int NOT NULL,
  PRIMARY KEY (`serviceId`) USING BTREE,
  INDEX `categoryServiceId`(`categoryServiceId` ASC) USING BTREE,
  CONSTRAINT `services_ibfk_1` FOREIGN KEY (`categoryServiceId`) REFERENCES `categoryservices` (`categoryServiceId`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of services
-- ----------------------------
INSERT INTO `services` VALUES (1, 'boso', 'dsfdsfd dfdsfds dfdsf', 1.00, 1);
INSERT INTO `services` VALUES (2, 'bikini', 'cvcs fvdcxvcx dscsccx', 3.00, 1);

SET FOREIGN_KEY_CHECKS = 1;

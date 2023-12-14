/*
 Navicat Premium Data Transfer

 Source Server         : SENNOVA
 Source Server Type    : MariaDB
 Source Server Version : 100428 (10.4.28-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : staymagic

 Target Server Type    : MariaDB
 Target Server Version : 100428 (10.4.28-MariaDB)
 File Encoding         : 65001

 Date: 13/12/2023 12:30:59
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for compras
-- ----------------------------
DROP TABLE IF EXISTS `compras`;
CREATE TABLE `compras`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titular` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cuenta` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha_caducidad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `cvc` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fecha_compra` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of compras
-- ----------------------------
INSERT INTO `compras` VALUES (1, 'Sara', '123414', '2023-12-13', '123', '2023-12-13 18:26:04');
INSERT INTO `compras` VALUES (2, 'JP', '12313', '2023-12-13', '123', '2023-12-13 18:30:29');
INSERT INTO `compras` VALUES (3, 'ADASD', '12331', '2023-12-21', '123', '2023-12-13 18:30:38');

SET FOREIGN_KEY_CHECKS = 1;

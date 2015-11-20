/*
Navicat MySQL Data Transfer

Source Server         : MySQL
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : website_db

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-11-21 03:42:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tbl_categories
-- ----------------------------
DROP TABLE IF EXISTS `tbl_categories`;
CREATE TABLE `tbl_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_categories
-- ----------------------------
INSERT INTO `tbl_categories` VALUES ('3', 'Pedro', '2016');

-- ----------------------------
-- Table structure for tbl_products
-- ----------------------------
DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_path` text NOT NULL,
  `cat_id` int(11) NOT NULL,
  `p_s_id` int(11) NOT NULL,
  `promotion_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_products
-- ----------------------------
INSERT INTO `tbl_products` VALUES ('1', 'Belt 101', 'new arrival', 'PrZ1zKkme2P8G8LjzvgXTulips.jpg', '3', '1', '1');
INSERT INTO `tbl_products` VALUES ('2', 'TMT Cap', 'Ploy May', '1ckaaKiIJaOJBuCelUcVKoala.jpg', '3', '1', '1');
INSERT INTO `tbl_products` VALUES ('3', 'abc', 'def', 'ikEmmfNUCD361i1VvGgDJellyfish.jpg', '3', '1', '1');

-- ----------------------------
-- Table structure for tbl_product_status
-- ----------------------------
DROP TABLE IF EXISTS `tbl_product_status`;
CREATE TABLE `tbl_product_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(50) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_product_status
-- ----------------------------
INSERT INTO `tbl_product_status` VALUES ('1', 'Coming', '2015');

-- ----------------------------
-- Table structure for tbl_promotions
-- ----------------------------
DROP TABLE IF EXISTS `tbl_promotions`;
CREATE TABLE `tbl_promotions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_promotions
-- ----------------------------
INSERT INTO `tbl_promotions` VALUES ('1', 'Happy New Year', null, '2015', '2015-11-11', '2015-11-17');

-- ----------------------------
-- Table structure for tbl_slides
-- ----------------------------
DROP TABLE IF EXISTS `tbl_slides`;
CREATE TABLE `tbl_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caption` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbl_slides
-- ----------------------------
INSERT INTO `tbl_slides` VALUES ('2', 'Grand Opening', 'EZpGOlWxW1X4ixhNEgAFslide-1.jpg', '1', '1', 'Discount up to 50%');
INSERT INTO `tbl_slides` VALUES ('3', 'Coming Soon !', 'VM8S0POn9ICRfzL8D2zTslide-2.jpg', '1', '1', 'December 2015');
INSERT INTO `tbl_slides` VALUES ('4', 'Europe Product !', '8TpM87I9hEGEDGLKNyvLslide-3.jpg', '2', '1', 'Big Sale !');

-- ----------------------------
-- Table structure for tbl_users
-- ----------------------------
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `register_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tbl_users
-- ----------------------------

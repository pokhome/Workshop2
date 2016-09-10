/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : cake1

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2016-09-10 09:21:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `groups`
-- ----------------------------
DROP TABLE IF EXISTS `groups`;
CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of groups
-- ----------------------------
INSERT INTO `groups` VALUES ('1', 'admin', '2013-10-12 15:27:46', '2013-10-12 15:27:46');
INSERT INTO `groups` VALUES ('2', 'seller', '2013-10-12 15:27:58', '2013-10-12 15:27:58');
INSERT INTO `groups` VALUES ('3', 'master', '2013-10-12 15:28:10', '2013-10-12 15:28:10');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `groups_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_users_groups_idx` (`groups_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('3', 'pok', 'pok@mailinator.com', '2013-10-12 08:48:26', '2013-10-12 08:48:26', '1');
INSERT INTO `users` VALUES ('4', 'pok', 'pok2@mailinator.com', '2013-10-12 08:49:03', '2013-10-12 08:49:03', '1');
INSERT INTO `users` VALUES ('5', 'pok', 'pok4@mailinator.com', '2013-10-12 09:05:48', '2013-10-12 09:05:48', '2');
INSERT INTO `users` VALUES ('6', 'pok', 'pok3@mailinator.com', '2013-10-12 09:06:39', '2013-10-12 09:06:39', '3');
INSERT INTO `users` VALUES ('7', 'pok', 'pok5@mailinator.com', '2013-10-12 09:15:00', '2013-10-12 09:15:00', '1');

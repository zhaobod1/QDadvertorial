/*
 Navicat MySQL Data Transfer

 Source Server         : conn
 Source Server Version : 50538
 Source Host           : localhost
 Source Database       : advertorial

 Target Server Version : 50538
 File Encoding         : utf-8

 Date: 01/16/2017 02:55:53 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `lurl_class`
-- ----------------------------
DROP TABLE IF EXISTS `lurl_class`;
CREATE TABLE `lurl_class` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `BigClass` varchar(255) DEFAULT NULL,
  `enBigClass` varchar(255) DEFAULT NULL,
  `paixu` int(11) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `lurl_class`
-- ----------------------------
BEGIN;
INSERT INTO `lurl_class` VALUES ('1', '不限', '', '1', '2017-01-16'), ('2', '不能带网址', '', '2', '2017-01-16'), ('3', '网址', '', '3', '2017-01-16'), ('4', '超链接', '', '4', '2017-01-16'), ('6', '二维码', '', '5', '2017-01-16');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;

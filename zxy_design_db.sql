/*
Navicat MySQL Data Transfer

Source Server         : suo
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : zxy_design_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-12-27 13:49:34
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for zxy_activity
-- ----------------------------
DROP TABLE IF EXISTS `zxy_activity`;
CREATE TABLE `zxy_activity` (
  `activity_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `activity_name` varchar(20) NOT NULL,
  `activity_supporter` varchar(30) NOT NULL,
  `activity_member_id` int(10) DEFAULT NULL,
  `activity_content` text,
  `activity_image` int(10) DEFAULT NULL,
  PRIMARY KEY (`activity_id`),
  KEY `activity_image` (`activity_image`),
  CONSTRAINT `activity_image` FOREIGN KEY (`activity_image`) REFERENCES `zxy_activity_image` (`image_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_activity
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_activity_image
-- ----------------------------
DROP TABLE IF EXISTS `zxy_activity_image`;
CREATE TABLE `zxy_activity_image` (
  `image_id` int(11) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `act_image_desc` varchar(20) DEFAULT NULL,
  `image_create_time` int(10) DEFAULT NULL,
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_activity_image
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_activity_member
-- ----------------------------
DROP TABLE IF EXISTS `zxy_activity_member`;
CREATE TABLE `zxy_activity_member` (
  `member_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_name` varchar(20) DEFAULT NULL,
  `member_phone` varchar(11) DEFAULT NULL,
  `member_role` varchar(20) DEFAULT NULL,
  `activity_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`member_id`),
  KEY `activity_member` (`activity_id`),
  CONSTRAINT `activity_member` FOREIGN KEY (`activity_id`) REFERENCES `zxy_activity` (`activity_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_activity_member
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_color
-- ----------------------------
DROP TABLE IF EXISTS `zxy_color`;
CREATE TABLE `zxy_color` (
  `color_id` int(10) NOT NULL,
  `color_code` varchar(12) DEFAULT NULL,
  `color_name` varchar(20) DEFAULT NULL,
  `tiny_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`color_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_color
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_design
-- ----------------------------
DROP TABLE IF EXISTS `zxy_design`;
CREATE TABLE `zxy_design` (
  `design_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `design_code` varchar(10) NOT NULL,
  `design_name` varchar(20) NOT NULL,
  `design_style` int(10) DEFAULT NULL,
  `design_category` int(10) DEFAULT NULL,
  `design_section` int(2) DEFAULT NULL,
  `design_hot` int(2) DEFAULT NULL,
  `design_fans` int(10) DEFAULT NULL,
  `design_fans_order` int(10) DEFAULT NULL,
  `design_show_img` varchar(255) DEFAULT NULL,
  `design_img_id` int(10) DEFAULT NULL,
  `design_profile` text,
  `designer_design` int(10) unsigned DEFAULT NULL,
  `design_devide` int(10) unsigned NOT NULL,
  `design_check` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`design_id`),
  KEY `designer_design` (`designer_design`),
  KEY `design_devide` (`design_devide`),
  KEY `design_style` (`design_style`),
  KEY `design_check` (`design_check`),
  KEY `design_category` (`design_category`),
  KEY `design_image` (`design_img_id`),
  CONSTRAINT `design_category` FOREIGN KEY (`design_category`) REFERENCES `zxy_design_category` (`cate_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `design_check` FOREIGN KEY (`design_check`) REFERENCES `zxy_design_check` (`design_check_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `design_devide` FOREIGN KEY (`design_devide`) REFERENCES `zxy_design_devide` (`devide_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `design_style` FOREIGN KEY (`design_style`) REFERENCES `zxy_design_cate_style` (`style_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `designer_design` FOREIGN KEY (`designer_design`) REFERENCES `zxy_designer` (`designer_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_design
-- ----------------------------
INSERT INTO `zxy_design` VALUES ('1', '', '格子衬衫', null, null, null, '100', null, null, '1.jpg', '1', null, null, '1', null);
INSERT INTO `zxy_design` VALUES ('2', '', '格子长裤', null, null, null, '200', null, null, null, '2', null, null, '1', null);
INSERT INTO `zxy_design` VALUES ('3', '', '假拉链短裤', null, null, null, '300', null, null, null, '3', null, null, '1', null);

-- ----------------------------
-- Table structure for zxy_designer
-- ----------------------------
DROP TABLE IF EXISTS `zxy_designer`;
CREATE TABLE `zxy_designer` (
  `designer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `real_name` varchar(20) NOT NULL,
  `designer_code` varchar(10) NOT NULL,
  `designer_degree` tinyint(10) NOT NULL,
  `designer_speciality` varchar(255) NOT NULL,
  `designer_check` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`designer_id`),
  KEY `designer_check` (`designer_check`),
  CONSTRAINT `designer_check` FOREIGN KEY (`designer_check`) REFERENCES `zxy_designer_check` (`designer_check_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_designer` FOREIGN KEY (`designer_id`) REFERENCES `zxy_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_designer
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_designer_check
-- ----------------------------
DROP TABLE IF EXISTS `zxy_designer_check`;
CREATE TABLE `zxy_designer_check` (
  `designer_check_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `check_start_time` date NOT NULL,
  `check_end_time` date NOT NULL,
  `check_time` datetime NOT NULL,
  `check_manner` int(10) NOT NULL,
  `check_result` tinyint(2) NOT NULL,
  PRIMARY KEY (`designer_check_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_designer_check
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_design_category
-- ----------------------------
DROP TABLE IF EXISTS `zxy_design_category`;
CREATE TABLE `zxy_design_category` (
  `cate_id` int(10) NOT NULL,
  `cate_name` varchar(20) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `if_show` int(3) NOT NULL,
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_design_category
-- ----------------------------
INSERT INTO `zxy_design_category` VALUES ('1', '套装', '0', '0');
INSERT INTO `zxy_design_category` VALUES ('2', '上衣', '0', '0');
INSERT INTO `zxy_design_category` VALUES ('3', '裤子', '0', '0');
INSERT INTO `zxy_design_category` VALUES ('4', '裙子', '0', '0');
INSERT INTO `zxy_design_category` VALUES ('5', '连衣裙', '4', '0');
INSERT INTO `zxy_design_category` VALUES ('6', '西服', '1', '0');
INSERT INTO `zxy_design_category` VALUES ('7', '衬衫', '1', '0');
INSERT INTO `zxy_design_category` VALUES ('8', '短裙', '4', '0');
INSERT INTO `zxy_design_category` VALUES ('9', '鞋子', '0', '0');
INSERT INTO `zxy_design_category` VALUES ('10', '包包', '0', '0');
INSERT INTO `zxy_design_category` VALUES ('11', '旗袍', '1', '0');
INSERT INTO `zxy_design_category` VALUES ('12', 't恤', '2', '0');
INSERT INTO `zxy_design_category` VALUES ('13', '长裙', '4', '0');
INSERT INTO `zxy_design_category` VALUES ('14', '帽子', '0', '0');
INSERT INTO `zxy_design_category` VALUES ('15', '装饰品', '0', '0');

-- ----------------------------
-- Table structure for zxy_design_cate_style
-- ----------------------------
DROP TABLE IF EXISTS `zxy_design_cate_style`;
CREATE TABLE `zxy_design_cate_style` (
  `style_id` int(10) NOT NULL,
  `style_name` varchar(20) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `if_show` int(3) NOT NULL,
  PRIMARY KEY (`style_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_design_cate_style
-- ----------------------------
INSERT INTO `zxy_design_cate_style` VALUES ('1', '清新学生', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('2', '商务白领', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('3', '魅力女士', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('4', '成熟男士', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('5', '中国风', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('6', '欧美风', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('7', '学院风', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('8', '田园清新', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('9', '少数民族', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('10', '个性自然', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('11', '英伦风格', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('12', '典雅时尚', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('13', '现代元素', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('14', '复古潮流', '0', '0');

-- ----------------------------
-- Table structure for zxy_design_check
-- ----------------------------
DROP TABLE IF EXISTS `zxy_design_check`;
CREATE TABLE `zxy_design_check` (
  `design_check_id` int(10) unsigned NOT NULL,
  `check_start_time` datetime NOT NULL,
  `check_end_time` datetime NOT NULL,
  `check_time` time NOT NULL,
  `check_manner` int(10) NOT NULL,
  `check_result` tinyint(3) NOT NULL,
  PRIMARY KEY (`design_check_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_design_check
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_design_devide
-- ----------------------------
DROP TABLE IF EXISTS `zxy_design_devide`;
CREATE TABLE `zxy_design_devide` (
  `devide_id` int(10) unsigned NOT NULL,
  `devide_name` varchar(20) NOT NULL,
  `devide_dir` text NOT NULL,
  PRIMARY KEY (`devide_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_design_devide
-- ----------------------------
INSERT INTO `zxy_design_devide` VALUES ('1', '优秀作品', '');
INSERT INTO `zxy_design_devide` VALUES ('2', '校园作品', '');
INSERT INTO `zxy_design_devide` VALUES ('3', '名人作品', '');

-- ----------------------------
-- Table structure for zxy_design_image
-- ----------------------------
DROP TABLE IF EXISTS `zxy_design_image`;
CREATE TABLE `zxy_design_image` (
  `image_id` int(10) unsigned NOT NULL,
  `image_name` varchar(20) NOT NULL,
  `default_image_url` varchar(255) NOT NULL,
  `small_image_url` varchar(255) DEFAULT NULL,
  `big_image_url` varchar(255) DEFAULT NULL,
  `image_size` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_design_image
-- ----------------------------
INSERT INTO `zxy_design_image` VALUES ('1', '格子衬衫', 'clothesimages/home/gezi.jpg', null, null, '200');
INSERT INTO `zxy_design_image` VALUES ('2', '格仔长裤', 'clothesimages/home/gezi2.jpg', null, null, '200');
INSERT INTO `zxy_design_image` VALUES ('3', '假拉链PU短裤', 'clothesimages/home/gezi3.jpg', null, null, '200');

-- ----------------------------
-- Table structure for zxy_topic
-- ----------------------------
DROP TABLE IF EXISTS `zxy_topic`;
CREATE TABLE `zxy_topic` (
  `topic_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `topic_title` varchar(20) NOT NULL,
  `topic_contents` varchar(255) NOT NULL,
  `topic_image_url` varchar(50) DEFAULT NULL,
  `topic_user_id` int(10) unsigned NOT NULL,
  `topic_comment_sum` int(10) NOT NULL,
  `topic_love_sum` int(10) NOT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `topic_user` (`topic_user_id`),
  CONSTRAINT `topic_user` FOREIGN KEY (`topic_user_id`) REFERENCES `zxy_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_topic
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_topic_comment
-- ----------------------------
DROP TABLE IF EXISTS `zxy_topic_comment`;
CREATE TABLE `zxy_topic_comment` (
  `topic_comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `topic_comment_content` text NOT NULL,
  `topic_comment_love_sum` int(10) DEFAULT NULL,
  `topic_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`topic_comment_id`),
  KEY `topic_comment` (`topic_id`),
  KEY `topic_user_connet` (`user_id`),
  CONSTRAINT `topic_comment` FOREIGN KEY (`topic_id`) REFERENCES `zxy_topic` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `topic_user_connet` FOREIGN KEY (`user_id`) REFERENCES `zxy_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_topic_comment
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_user
-- ----------------------------
DROP TABLE IF EXISTS `zxy_user`;
CREATE TABLE `zxy_user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL DEFAULT '',
  `merged` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(20) NOT NULL DEFAULT '',
  `real_name` varchar(20) DEFAULT NULL,
  `school` varchar(25) NOT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `weixin` varchar(20) DEFAULT NULL,
  `province` varchar(10) DEFAULT NULL,
  `city` varchar(10) DEFAULT NULL,
  `postcode` varchar(8) DEFAULT NULL,
  `regist_time` int(10) unsigned DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT '0',
  `last_ip` varchar(15) DEFAULT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `profile` varchar(255) NOT NULL,
  `points` int(10) unsigned NOT NULL DEFAULT '0',
  `grade` int(10) unsigned NOT NULL DEFAULT '0',
  `university` varchar(50) DEFAULT NULL,
  `attentions` int(10) DEFAULT '0',
  `fans` int(10) NOT NULL DEFAULT '0',
  `regist_ip` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_user
-- ----------------------------
INSERT INTO `zxy_user` VALUES ('1', 'suo123', '1', '123456', '邵锁', '', '', null, null, null, null, '0', '0', null, '0', '', '0', '0', null, '0', '0', null);

-- ----------------------------
-- Table structure for zxy_user_info
-- ----------------------------
DROP TABLE IF EXISTS `zxy_user_info`;
CREATE TABLE `zxy_user_info` (
  `user_info_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nickname` varchar(30) DEFAULT NULL,
  `booldType` varchar(2) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `gender` varchar(4) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `phone_mob` varchar(20) DEFAULT NULL,
  `phonr_tel` varchar(20) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`user_info_id`),
  CONSTRAINT `user_info` FOREIGN KEY (`user_info_id`) REFERENCES `zxy_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_user_info
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_user_like
-- ----------------------------
DROP TABLE IF EXISTS `zxy_user_like`;
CREATE TABLE `zxy_user_like` (
  `idol_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `idol_design_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`idol_id`,`user_id`),
  KEY `user` (`user_id`),
  CONSTRAINT `idol` FOREIGN KEY (`idol_id`) REFERENCES `zxy_designer` (`designer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `zxy_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_user_like
-- ----------------------------

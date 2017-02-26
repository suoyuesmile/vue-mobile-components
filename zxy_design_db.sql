/*
Navicat MySQL Data Transfer

Source Server         : suo
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : zxy_design_db

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-02-07 14:40:24
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
  CONSTRAINT `activity_image` FOREIGN KEY (`activity_image`) REFERENCES `zxy_activity_image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_activity
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_activity_image
-- ----------------------------
DROP TABLE IF EXISTS `zxy_activity_image`;
CREATE TABLE `zxy_activity_image` (
  `id` int(11) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `act_image_desc` varchar(20) DEFAULT NULL,
  `image_create_time` int(10) DEFAULT NULL,
  KEY `image_id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_activity_image
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_activity_member
-- ----------------------------
DROP TABLE IF EXISTS `zxy_activity_member`;
CREATE TABLE `zxy_activity_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `activity` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_member` (`activity`),
  CONSTRAINT `activity_member` FOREIGN KEY (`activity`) REFERENCES `zxy_activity` (`activity_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_activity_member
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_color
-- ----------------------------
DROP TABLE IF EXISTS `zxy_color`;
CREATE TABLE `zxy_color` (
  `id` int(10) NOT NULL,
  `code` varchar(12) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `tiny_image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_color
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_design
-- ----------------------------
DROP TABLE IF EXISTS `zxy_design`;
CREATE TABLE `zxy_design` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `style` int(10) DEFAULT NULL,
  `category` int(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `hot` int(2) DEFAULT NULL,
  `fans` int(10) DEFAULT NULL,
  `fans_order` int(10) DEFAULT NULL,
  `show_img` varchar(255) DEFAULT NULL,
  `img_id` int(10) DEFAULT NULL,
  `profile` text,
  `designer` int(10) unsigned DEFAULT NULL,
  `devide` int(10) unsigned NOT NULL,
  `check` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `designer_design` (`designer`),
  KEY `design_devide` (`devide`),
  KEY `design_style` (`style`),
  KEY `design_check` (`check`),
  KEY `design_category` (`category`),
  KEY `design_image` (`img_id`),
  CONSTRAINT `design_category` FOREIGN KEY (`category`) REFERENCES `zxy_design_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `design_check` FOREIGN KEY (`check`) REFERENCES `zxy_design_check` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `design_devide` FOREIGN KEY (`devide`) REFERENCES `zxy_design_devide` (`devide_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `design_style` FOREIGN KEY (`style`) REFERENCES `zxy_design_cate_style` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `designer_design` FOREIGN KEY (`designer`) REFERENCES `zxy_designer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_design
-- ----------------------------
INSERT INTO `zxy_design` VALUES ('1', 'A100000001', '斑点花纹格子衬衫', '2', '7', '未生产', '100', '123', '124', '1.png', '1', null, '1', '1', null);
INSERT INTO `zxy_design` VALUES ('2', 'A100000002', '黑色小皮外套', '3', '2', '未生产', '200', '222', '333', '2.png', '2', null, '2', '1', null);
INSERT INTO `zxy_design` VALUES ('3', 'A100000003', '粉红条纹淑女T恤', '1', '5', '未生产', '300', '11', '23', '3.png', '3', null, '1', '1', null);
INSERT INTO `zxy_design` VALUES ('4', 'A100000004', '女士风度大外套', '2', '2', '未生产', '400', '334', '344', '4.png', '4', null, '2', '1', null);
INSERT INTO `zxy_design` VALUES ('5', 'A100000005', '黑色酷劲女士卫衣', '4', '2', '未生产', '500', '22', '324', '5.png', '5', null, '1', '2', null);
INSERT INTO `zxy_design` VALUES ('6', 'A100000006', '条纹娇小小T恤', '3', '2', '未生产', '300', '35', '43', '6.png', '6', null, '2', '2', null);
INSERT INTO `zxy_design` VALUES ('7', 'A100000007', '女士黑白条纹长裙', '12', '2', '未生产', '200', '123', '545', '7.png', '7', null, '1', '2', null);
INSERT INTO `zxy_design` VALUES ('8', 'A100000008', '个性女士T恤', '13', '2', '未生产', '355', '223', '344', '8.png', '8', null, '2', '2', null);
INSERT INTO `zxy_design` VALUES ('9', 'A100000009', '翠绿暖暖针织衫', '2', '2', '未生产', '122', '3444', '555', '9.png', '9', null, '1', '3', null);
INSERT INTO `zxy_design` VALUES ('10', 'A100000010', '白色优雅外套', '1', '2', '未生产', '290', '223', '555', '10.png', '10', null, '1', '3', null);
INSERT INTO `zxy_design` VALUES ('11', 'A100000011', '女生酷劲小风衣', '6', '2', '未生产', '112', '2234', '33', '11.png', '11', null, '1', '3', null);
INSERT INTO `zxy_design` VALUES ('12', 'A100000012', '黑白清新淑女套', '8', '2', '未生产', '12', '22', '444', '12.png', '12', null, '1', '3', null);

-- ----------------------------
-- Table structure for zxy_designer
-- ----------------------------
DROP TABLE IF EXISTS `zxy_designer`;
CREATE TABLE `zxy_designer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `relname` varchar(20) NOT NULL,
  `code` varchar(10) NOT NULL,
  `degree` tinyint(10) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `check` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `designer_check` (`check`),
  CONSTRAINT `designer_check` FOREIGN KEY (`check`) REFERENCES `zxy_designer_check` (`designer_check_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_designer` FOREIGN KEY (`id`) REFERENCES `zxy_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_designer
-- ----------------------------
INSERT INTO `zxy_designer` VALUES ('1', '邵锁', '', '1', '', null);
INSERT INTO `zxy_designer` VALUES ('2', '吴忌婷', '', '1', '', null);

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
  `id` int(10) NOT NULL,
  `catname` varchar(20) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `if_show` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_design_category
-- ----------------------------
INSERT INTO `zxy_design_category` VALUES ('1', '帽子', '0', '0');
INSERT INTO `zxy_design_category` VALUES ('2', '上衣', '0', '0');
INSERT INTO `zxy_design_category` VALUES ('3', '裤装', '0', '0');
INSERT INTO `zxy_design_category` VALUES ('4', '裙装', '0', '0');
INSERT INTO `zxy_design_category` VALUES ('5', '鞋子', '0', '0');
INSERT INTO `zxy_design_category` VALUES ('6', '鸭舌帽', '1', '0');
INSERT INTO `zxy_design_category` VALUES ('7', '平顶帽', '1', '0');
INSERT INTO `zxy_design_category` VALUES ('8', '嘻哈帽', '1', '0');
INSERT INTO `zxy_design_category` VALUES ('9', '贝雷帽', '1', '0');
INSERT INTO `zxy_design_category` VALUES ('10', '棒球帽', '1', '0');
INSERT INTO `zxy_design_category` VALUES ('11', '包头帽', '1', '0');
INSERT INTO `zxy_design_category` VALUES ('12', 't恤', '2', '0');
INSERT INTO `zxy_design_category` VALUES ('13', '棉服', '2', '0');
INSERT INTO `zxy_design_category` VALUES ('14', '针织', '2', '0');
INSERT INTO `zxy_design_category` VALUES ('15', '夹克', '2', '0');
INSERT INTO `zxy_design_category` VALUES ('16', '打底', '2', '0');
INSERT INTO `zxy_design_category` VALUES ('17', '衬衫', '2', '0');
INSERT INTO `zxy_design_category` VALUES ('18', '牛仔裤', '3', '0');
INSERT INTO `zxy_design_category` VALUES ('19', '打底裤', '3', '0');
INSERT INTO `zxy_design_category` VALUES ('20', '针织裤', '3', '0');
INSERT INTO `zxy_design_category` VALUES ('21', '皮裤', '3', '0');
INSERT INTO `zxy_design_category` VALUES ('22', '高腰裤', '3', '0');
INSERT INTO `zxy_design_category` VALUES ('23', '阔腿裤', '3', '0');
INSERT INTO `zxy_design_category` VALUES ('24', '连衣裙', '4', '0');
INSERT INTO `zxy_design_category` VALUES ('25', '半身裙', '4', '0');
INSERT INTO `zxy_design_category` VALUES ('26', '打底裙', '4', '0');
INSERT INTO `zxy_design_category` VALUES ('27', '百褶裙', '4', '0');
INSERT INTO `zxy_design_category` VALUES ('28', '皮裙', '4', '0');
INSERT INTO `zxy_design_category` VALUES ('29', '复古裙装', '4', '0');
INSERT INTO `zxy_design_category` VALUES ('30', '高跟鞋', '5', '0');
INSERT INTO `zxy_design_category` VALUES ('31', '皮鞋', '5', '0');
INSERT INTO `zxy_design_category` VALUES ('32', '运动鞋', '5', '0');
INSERT INTO `zxy_design_category` VALUES ('33', '平底鞋', '5', '0');
INSERT INTO `zxy_design_category` VALUES ('34', '布鞋', '5', '0');
INSERT INTO `zxy_design_category` VALUES ('35', '滑板鞋', '5', '0');
INSERT INTO `zxy_design_category` VALUES ('36', '旗袍', '6', '0');
INSERT INTO `zxy_design_category` VALUES ('37', '内衣', '6', '0');
INSERT INTO `zxy_design_category` VALUES ('38', '手套', '6', '0');
INSERT INTO `zxy_design_category` VALUES ('39', '围巾', '6', '0');
INSERT INTO `zxy_design_category` VALUES ('40', 'T恤', '6', '0');
INSERT INTO `zxy_design_category` VALUES ('41', '面罩', '6', '0');

-- ----------------------------
-- Table structure for zxy_design_cate_style
-- ----------------------------
DROP TABLE IF EXISTS `zxy_design_cate_style`;
CREATE TABLE `zxy_design_cate_style` (
  `id` int(10) NOT NULL,
  `styname` varchar(20) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `if_show` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_design_cate_style
-- ----------------------------
INSERT INTO `zxy_design_cate_style` VALUES ('1', '魅力女装', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('2', '成熟男装', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('3', '清新学生', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('4', '国风少年', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('5', '商务白领', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('6', '私服名媛', '1', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('7', '文艺复古', '1', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('8', '甜美可爱', '1', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('9', '街头潮人', '1', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('10', '个性潮流', '2', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('11', '时尚都市', '2', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('12', '文艺国风', '2', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('13', '酷帅装逼', '2', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('14', '清纯校服', '3', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('15', '复古学院', '3', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('16', '青春物语', '3', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('17', '大学时尚', '3', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('18', '中国风', '4', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('19', '欧美风', '4', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('20', '日韩风', '4', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('21', '外星风', '4', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('22', '程序员风', '5', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('23', '社交精英', '5', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('24', '正式派对', '5', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('25', '商业大佬', '5', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('26', '运动装', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('27', '休闲装', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('28', '家里蹲', '0', '0');
INSERT INTO `zxy_design_cate_style` VALUES ('29', '睡觉穿', '0', '0');

-- ----------------------------
-- Table structure for zxy_design_check
-- ----------------------------
DROP TABLE IF EXISTS `zxy_design_check`;
CREATE TABLE `zxy_design_check` (
  `id` int(10) unsigned NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `time` time NOT NULL,
  `manner` int(10) NOT NULL,
  `result` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
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
  `id` int(10) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `default_url` varchar(255) NOT NULL,
  `small_url` varchar(255) DEFAULT NULL,
  `big_url` varchar(255) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_design_image
-- ----------------------------
INSERT INTO `zxy_design_image` VALUES ('1', '格子衬衫', '1.jpg', '1_small.jpg', '1_big.png', '200');
INSERT INTO `zxy_design_image` VALUES ('2', '格仔长裤', '2.jpg', null, '2_big.png', '200');
INSERT INTO `zxy_design_image` VALUES ('3', '假拉链PU短裤', '3.jpg', null, '3_big.png', '200');
INSERT INTO `zxy_design_image` VALUES ('4', '', '', null, '4_big.png', null);
INSERT INTO `zxy_design_image` VALUES ('5', '', '', null, '5_big.png', null);
INSERT INTO `zxy_design_image` VALUES ('6', '', '', null, '6_big.png', null);
INSERT INTO `zxy_design_image` VALUES ('7', '', '', null, '7_big.png', null);
INSERT INTO `zxy_design_image` VALUES ('8', '', '', null, '8_big.png', null);
INSERT INTO `zxy_design_image` VALUES ('9', '', '', null, '9_big.png', null);
INSERT INTO `zxy_design_image` VALUES ('10', '', '', null, '10_big.png', null);
INSERT INTO `zxy_design_image` VALUES ('11', '', '', null, '11_big.png', null);
INSERT INTO `zxy_design_image` VALUES ('12', '', '', null, '12_big.png', null);

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
  CONSTRAINT `topic_user` FOREIGN KEY (`topic_user_id`) REFERENCES `zxy_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
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
  CONSTRAINT `topic_user_connet` FOREIGN KEY (`user_id`) REFERENCES `zxy_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_topic_comment
-- ----------------------------

-- ----------------------------
-- Table structure for zxy_user
-- ----------------------------
DROP TABLE IF EXISTS `zxy_user`;
CREATE TABLE `zxy_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_name` varchar(20) NOT NULL DEFAULT '',
  `merged` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(20) NOT NULL DEFAULT '',
  `relname` varchar(20) DEFAULT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_user
-- ----------------------------
INSERT INTO `zxy_user` VALUES ('1', 'suo123', '1', '123456', '邵锁', '', '', null, null, null, null, '0', '0', null, '0', '', '0', '0', null, '0', '0', null);
INSERT INTO `zxy_user` VALUES ('2', 'wjt123', '1', '123456', '吴忌婷', '', null, null, null, null, null, '0', '0', null, '0', '', '0', '0', null, '0', '0', null);

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
  CONSTRAINT `user_info` FOREIGN KEY (`user_info_id`) REFERENCES `zxy_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
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
  CONSTRAINT `idol` FOREIGN KEY (`idol_id`) REFERENCES `zxy_designer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `zxy_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of zxy_user_like
-- ----------------------------

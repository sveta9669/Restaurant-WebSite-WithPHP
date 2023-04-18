/*
Navicat MySQL Data Transfer

Source Server         : db
Source Server Version : 100427
Source Host           : localhost:3306
Source Database       : webphp

Target Server Type    : MYSQL
Target Server Version : 100427
File Encoding         : 65001

Date: 2023-04-18 11:27:24
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES ('1', 'CheeseBurger1000.png', 'Cheese Burger', '1300');
INSERT INTO `products` VALUES ('2', 'Cheesebuger De Luxe1100.png', 'Cheeseburger De Luxe', '1100');
INSERT INTO `products` VALUES ('3', 'Chefburger De Luxe1300.png', 'Chefburger De Luxe', '1300');
INSERT INTO `products` VALUES ('4', 'Bigger1650.png', 'Bigger', '1650');
INSERT INTO `products` VALUES ('5', 'Double Chefburger1750.png', 'Double Chefburger', '1750');
INSERT INTO `products` VALUES ('6', 'Habanero BBQ Shrimp 1000.jpg', 'Habanero BBQ Shrimp', '1000');
INSERT INTO `products` VALUES ('7', 'Seared Scallops with Brown Butter and Lemon Pan Sauce1100.jpg', 'Seared Scallops', '1100');
INSERT INTO `products` VALUES ('8', 'Braised Chiken Legs with Grapes and Fennel 1200.jpg', 'Braised Chicken Legs', '1200');
INSERT INTO `products` VALUES ('9', 'Grilled Pork Spareribs with Sode Bottle Barbecue Sauce1500.jpg', 'Grilled Pork Spareribs', '1500');
INSERT INTO `products` VALUES ('10', 'Grilled Coconut Shrimp with Shishito Peppers1700.jpg', 'Grilled Coconut Shrimp', '1700');
INSERT INTO `products` VALUES ('11', 'Seafood300.jpg', 'Seafood', '300');
INSERT INTO `products` VALUES ('12', 'Pepperoni350.jpg', 'Pepperoni', '350');
INSERT INTO `products` VALUES ('13', 'Sicilian450.png', 'Sicilian', '450');
INSERT INTO `products` VALUES ('14', 'grilled mushroom500.jpg', 'Grilled mushroom', '500');
INSERT INTO `products` VALUES ('15', 'Mushrooms600.png', 'Mushrooms', '600');
SET FOREIGN_KEY_CHECKS=1;

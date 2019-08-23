-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 24, 2019 at 04:18 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glow`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Soap'),
(2, 'Bath Bomb');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT,
  `invoiceNumber` bigint(255) NOT NULL,
  `dateOrdered` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float(8,2) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullfilled` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `invoiceNumber`, `dateOrdered`, `name`, `price`, `email`, `fullfilled`) VALUES
(1, 2019052459041, '2019-05-24', 'emily', 0.00, 'email@email.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_product`
--

DROP TABLE IF EXISTS `invoice_product`;
CREATE TABLE IF NOT EXISTS `invoice_product` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT,
  `invoiceId` mediumint(255) NOT NULL,
  `productId` mediumint(255) NOT NULL,
  `qty` mediumint(255) NOT NULL,
  `price` float(8,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice_product`
--

INSERT INTO `invoice_product` (`id`, `invoiceId`, `productId`, `qty`, `price`) VALUES
(1, 0, 2, 1, 4.00),
(2, 0, 2, 1, 4.00),
(3, 0, 10, 1, 6.50),
(4, 0, 2, 1, 4.00),
(5, 0, 10, 1, 6.50),
(6, 0, 13, 1, 6.25),
(7, 0, 2, 2, 4.00),
(8, 0, 10, 1, 6.50),
(9, 0, 13, 1, 6.25),
(10, 0, 1, 1, 4.25),
(11, 0, 3, 1, 4.75),
(12, 0, 10, 1, 6.50),
(13, 0, 5, 1, 5.50),
(14, 0, 2, 1, 4.00);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `coverImg` varchar(255) NOT NULL,
  `price` float(8,2) NOT NULL,
  `qty` mediumint(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `featured` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `coverImg`, `price`, `qty`, `sku`, `description`, `featured`) VALUES
(1, 'Geranium Bath Bomb', 'bath-bomb_geranium.jpg', 4.25, 18, 'miyr214f', 'Geranium promotes cellular regeneration and is commonly used to treat athlete\'s foot, burns, bruises, eczema, tonsillitis, asthmas, rheumatism, neuralgia, as well as menstrual & menopausal complaints. It\'s a wonderful choice for combating nervous tension and most stress related issues.', 0),
(2, 'Dandelion Bath Bomb', 'bath-bomb_dandelion.jpg', 4.00, 12, 'oiejh726', 'Rich in magnesium, potassium, calcium, and many other essential minerals and antioxidants, dandelion is a potent healer. Use these dandelion bath bombs when you need relief for achy muscles and sore joints. These soothe the achyness with dandelion\'s anti-inflammatory powers.', 1),
(3, 'Lavender Bath Bomb', 'bath-bomb_lavender.jpg', 4.75, 6, 'soirf468', 'Lavender does wonders for both the skin and the senses. Known for its skin-healing and soothing properties, Lavender also has a rebalancing effect on problem skin. Its also wonderful for soothing the senses of stress and anxiety.', 0),
(4, 'Oatmeal & Honey Bath Bomb', 'bath-bomb_oat.jpg', 3.95, 8, 'ckse5139', 'Fantastic for dry skin, oatmeal baths are well known for their skin-soothing properties. Oats and Honey work together to provide deep moisture and a natural antihistamine quality that soothes itch and irritation.', 0),
(5, 'Nerolii & Chamomile Bath Bomb', 'bath-bomb_patchouli.jpg', 5.50, 22, 'ncksk452', 'Chamomile flowers infuse your water with a hypnotic blend of soothing floral scents, while neroli helps alleviate worries. Use at night so your mind can rest easy before you sink deep into sleep.', 1),
(6, 'Rose Bath Bomb', 'bath-bomb_rose.jpg', 5.25, 7, 'hcjd7854', 'The scent of the rose is as reported to have an uplifting effect on the spirit, relieving  depression and anxiety. Rose has often been used homeopathically to help regulate menses, as an antispasmodicto help with muscle cramps, to help remove toxicity in the body, for anti-aging properties for the skin, to helps fade scars and may help fight infection of small scratches and such on the body, due to it\'s antibacterial properties.', 0),
(7, 'Sweet Orange Bath Bomb', 'bath-bomb_sweet-orange.jpg', 5.75, 14, 'nduf7895', 'Orange lifts the spirit while providing a calming influence on the body. Orange is also great for the skin & there are some indications it may help somewhat with acne. Orange brings peace and happiness to the mind. It is rich in the powerful antioxidant d-limonene and aids in maintaining normal cellular regeneration.', 0),
(8, 'Coffee Soap', 'soap_coffee.jpg', 4.75, 15, 'kfbw4785', 'Coffee is a great source of antioxidants. Washing with a coffee soap helps get those age defying antioxidants into your skin to wash away toxins and cleanse your pores. Caffeine might be a stimulant when you drink it, but on your skin it has a soothing effect. It\'s great for sensitive or sunburned skin. The caffeine constricts blood vessels, so it can help with the appearance of rosacea or redness. Caffeine has also been shown to help with the appearance of cellulite by dehydrating underlying fat cells. When you add coffee grounds to the soap it provides an excellent exfoliant to help sloth off dead skin layers, leaving your skin soft & younger looking.', 0),
(9, 'Geranium Soap', 'soap_geranium.jpg', 3.95, 16, 'vfhg7825', 'Geranium promotes cellular regeneration and is commonly used to treat athlete\'s foot, burns, bruises, eczema, tonsillitis, asthmas, rheumatism, neuralgia, as well as menstrual & menopausal complaints. It\'s a wonderful choice for combating nervous tension and most stress related issues.', 0),
(10, 'Honey Soap', 'soap_honey.jpg', 6.50, 12, 'dhdj5852', 'Honey boasts loads of skin benefits - it\'s moisturizing, clarifying, soothing, and also naturally antibacterial. Because of these properties, honey is fantastic for the treatment of acne and aging and for general complexion brightening.', 1),
(11, 'Lavender Soap', 'soap_lavender.jpg', 4.25, 16, 'vbyf8156', 'Lavender does wonders for both the skin and the senses. Known for its skin-healing and soothing properties, Lavender also has a rebalancing effect on problem skin. Its also wonderful for soothing the senses of stress and anxiety.', 0),
(12, 'Lemon Soap', 'soap_lemon.jpg', 4.50, 22, 'sghj5754', 'Lemon is a great choice for anyone with oily skin or acne. It is not harsh at all though, so is also fine for anyone else. Lemon is great for anti-aging, due to its high vitamin C levels. It also reduces excess oil and is great for reducing acne.', 0),
(13, 'Nerolii & Chamomile Soap', 'soap_nerolii-and-chamomile.jpg', 6.25, 23, 'fnkt7854', 'Chamomile flowers infuse your water with a hypnotic blend of soothing floral scents, while neroli helps alleviate worries. Use at night so your mind can rest easy before you sink deep into sleep.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `productimg`
--

DROP TABLE IF EXISTS `productimg`;
CREATE TABLE IF NOT EXISTS `productimg` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT,
  `productId` mediumint(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `id` mediumint(255) NOT NULL AUTO_INCREMENT,
  `categoryId` mediumint(255) NOT NULL,
  `productId` mediumint(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `categoryId`, `productId`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 3),
(4, 2, 4),
(5, 2, 5),
(6, 2, 6),
(7, 2, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 1, 13);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

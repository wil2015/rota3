-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2016 at 09:30 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magento`
--

-- --------------------------------------------------------

--
-- Table structure for table `catalog_product_entity_varchar`
--

CREATE TABLE `catalog_product_entity_varchar` (
  `value_id` int(11) NOT NULL COMMENT 'Value ID',
  `attribute_id` smallint(5) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Attribute ID',
  `store_id` smallint(5) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Store ID',
  `entity_id` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Entity ID',
  `value` varchar(255) DEFAULT NULL COMMENT 'Value'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Catalog Product Varchar Attribute Backend Table';

--
-- Dumping data for table `catalog_product_entity_varchar`
--

INSERT INTO `catalog_product_entity_varchar` (`value_id`, `attribute_id`, `store_id`, `entity_id`, `value`) VALUES
(14, 70, 0, 2, 'Arroz Agulha'),
(15, 128, 0, 2, NULL),
(16, 84, 0, 2, NULL),
(17, 85, 0, 2, NULL),
(18, 86, 0, 2, NULL),
(19, 115, 0, 2, 'produto-arroz-paraiso'),
(20, 81, 0, 2, 'Arroz Paraiso'),
(21, 83, 0, 2, 'Arroz Paraiso '),
(22, 97, 0, 2, NULL),
(23, 101, 0, 2, NULL),
(24, 103, 0, 2, 'container2'),
(25, 111, 0, 2, NULL),
(26, 130, 0, 2, NULL),
(35, 70, 0, 3, 'Feijao da Fazenda Paraiso'),
(36, 128, 0, 3, NULL),
(37, 84, 0, 3, NULL),
(38, 85, 0, 3, NULL),
(39, 86, 0, 3, NULL),
(40, 115, 0, 3, 'feijao-da-fazenda-paraiso'),
(41, 81, 0, 3, 'Feijao da Fazenda Paraiso'),
(42, 83, 0, 3, 'Feijao da Fazenda Paraiso '),
(43, 97, 0, 3, NULL),
(44, 101, 0, 3, NULL),
(45, 103, 0, 3, 'container2'),
(46, 111, 0, 3, NULL),
(47, 130, 0, 3, NULL),
(56, 70, 0, 4, 'Arroz da Fazenda Vale do Sol'),
(57, 128, 0, 4, NULL),
(58, 84, 0, 4, NULL),
(59, 85, 0, 4, NULL),
(60, 86, 0, 4, NULL),
(61, 115, 0, 4, 'arroz-da-fazenda-vale-do-sol'),
(62, 81, 0, 4, 'Arroz da Fazenda Vale do Sol'),
(63, 83, 0, 4, 'Arroz da Fazenda Vale do Sol '),
(64, 97, 0, 4, NULL),
(65, 101, 0, 4, NULL),
(66, 103, 0, 4, 'container2'),
(67, 111, 0, 4, NULL),
(68, 130, 0, 4, NULL),
(69, 70, 0, 5, 'Gado da Fazenda Vale do Sol'),
(70, 128, 0, 5, NULL),
(71, 84, 0, 5, NULL),
(72, 85, 0, 5, NULL),
(73, 86, 0, 5, NULL),
(74, 115, 0, 5, 'gado-da-fazenda-vale-do-sol'),
(75, 81, 0, 5, 'Gado da Fazenda Vale do Sol'),
(76, 83, 0, 5, 'Gado da Fazenda Vale do Sol '),
(77, 97, 0, 5, NULL),
(78, 101, 0, 5, NULL),
(79, 103, 0, 5, 'container2'),
(80, 111, 0, 5, NULL),
(81, 130, 0, 5, NULL),
(120, 70, 0, 6, 'Arroz Selvagem'),
(121, 128, 0, 6, NULL),
(122, 84, 0, 6, NULL),
(123, 85, 0, 6, NULL),
(124, 86, 0, 6, NULL),
(125, 115, 0, 6, 'arroz-selvagem'),
(126, 81, 0, 6, 'Arroz Selvagem'),
(127, 83, 0, 6, 'Arroz Selvagem '),
(128, 97, 0, 6, NULL),
(129, 101, 0, 6, NULL),
(130, 103, 0, 6, 'container2'),
(131, 111, 0, 6, NULL),
(132, 130, 0, 6, NULL),
(162, 70, 0, 8, 'Arroz Vermelho'),
(163, 128, 0, 8, NULL),
(164, 84, 0, 8, NULL),
(165, 85, 0, 8, NULL),
(166, 86, 0, 8, NULL),
(167, 115, 0, 8, 'arroz-vermelho'),
(168, 81, 0, 8, 'Arroz Vermelho'),
(169, 83, 0, 8, 'Arroz Vermelho '),
(170, 97, 0, 8, NULL),
(171, 101, 0, 8, NULL),
(172, 103, 0, 8, 'container2'),
(173, 111, 0, 8, NULL),
(174, 130, 0, 8, NULL),
(175, 70, 0, 9, 'Arroz Vermelho'),
(176, 128, 0, 9, NULL),
(177, 84, 0, 9, NULL),
(178, 85, 0, 9, NULL),
(179, 86, 0, 9, NULL),
(180, 115, 0, 9, 'arroz-vermelho-1'),
(181, 81, 0, 9, 'Arroz Vermelho'),
(182, 83, 0, 9, 'Arroz Vermelho '),
(183, 97, 0, 9, NULL),
(184, 101, 0, 9, NULL),
(185, 103, 0, 9, 'container2'),
(186, 111, 0, 9, NULL),
(187, 130, 0, 9, NULL),
(364, 70, 1, 4, 'Arroz da Fazenda Vale do Sol'),
(365, 81, 1, 4, 'Arroz da Fazenda Vale do Sol'),
(366, 83, 1, 4, 'Arroz da Fazenda Vale do Sol '),
(367, 84, 1, 4, NULL),
(368, 85, 1, 4, NULL),
(369, 86, 1, 4, NULL),
(370, 97, 1, 4, NULL),
(371, 101, 1, 4, NULL),
(372, 103, 1, 4, 'container2'),
(374, 115, 1, 4, 'arroz-da-fazenda-vale-do-sol'),
(375, 128, 1, 4, NULL),
(397, 70, 0, 11, 'Arroz '),
(398, 128, 0, 11, NULL),
(399, 84, 0, 11, NULL),
(400, 85, 0, 11, NULL),
(401, 86, 0, 11, NULL),
(402, 115, 0, 11, 'arroz-primavera'),
(403, 81, 0, 11, 'Arroz '),
(404, 83, 0, 11, 'Arroz  '),
(405, 97, 0, 11, NULL),
(406, 101, 0, 11, NULL),
(407, 103, 0, 11, 'container2'),
(408, 111, 0, 11, NULL),
(409, 130, 0, 11, NULL),
(434, 84, 11, 2, NULL),
(435, 85, 11, 2, NULL),
(436, 86, 11, 2, NULL),
(437, 128, 11, 2, NULL),
(471, 70, 0, 12, 'Arroz da Fazenda Verão'),
(472, 128, 0, 12, NULL),
(473, 84, 0, 12, NULL),
(474, 85, 0, 12, NULL),
(475, 86, 0, 12, NULL),
(476, 115, 0, 12, 'arroz-da-fazenda-ver-o'),
(477, 81, 0, 12, 'Arroz da Fazenda Verão'),
(478, 83, 0, 12, 'Arroz da Fazenda Verão '),
(479, 97, 0, 12, NULL),
(480, 101, 0, 12, NULL),
(481, 103, 0, 12, 'container2'),
(482, 111, 0, 12, NULL),
(483, 130, 0, 12, NULL),
(508, 84, 8, 4, NULL),
(509, 85, 8, 4, NULL),
(510, 86, 8, 4, NULL),
(511, 128, 8, 4, NULL),
(513, 132, 0, 2, 'vparaiso'),
(527, 133, 0, 2, 'Fazenda Paraiso'),
(536, 132, 0, 3, 'vparaiso'),
(537, 133, 0, 3, 'Fazenda Paraiso'),
(554, 132, 0, 4, 'vsol'),
(555, 133, 0, 4, 'Fazenda Vale do Sol'),
(564, 132, 0, 5, 'vsol'),
(565, 133, 0, 5, 'Fazenda Vale do Sol'),
(574, 132, 0, 6, 'vparaiso'),
(575, 133, 0, 6, 'Fazenda Paraiso');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog_product_entity_varchar`
--
ALTER TABLE `catalog_product_entity_varchar`
  ADD PRIMARY KEY (`value_id`),
  ADD UNIQUE KEY `CATALOG_PRODUCT_ENTITY_VARCHAR_ENTITY_ID_ATTRIBUTE_ID_STORE_ID` (`entity_id`,`attribute_id`,`store_id`),
  ADD KEY `CATALOG_PRODUCT_ENTITY_VARCHAR_ATTRIBUTE_ID` (`attribute_id`),
  ADD KEY `CATALOG_PRODUCT_ENTITY_VARCHAR_STORE_ID` (`store_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog_product_entity_varchar`
--
ALTER TABLE `catalog_product_entity_varchar`
  MODIFY `value_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Value ID', AUTO_INCREMENT=576;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `catalog_product_entity_varchar`
--
ALTER TABLE `catalog_product_entity_varchar`
  ADD CONSTRAINT `CATALOG_PRODUCT_ENTITY_VARCHAR_STORE_ID_STORE_STORE_ID` FOREIGN KEY (`store_id`) REFERENCES `store` (`store_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `CAT_PRD_ENTT_VCHR_ATTR_ID_EAV_ATTR_ATTR_ID` FOREIGN KEY (`attribute_id`) REFERENCES `eav_attribute` (`attribute_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `CAT_PRD_ENTT_VCHR_ENTT_ID_CAT_PRD_ENTT_ENTT_ID` FOREIGN KEY (`entity_id`) REFERENCES `catalog_product_entity` (`entity_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

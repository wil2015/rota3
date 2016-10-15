-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 08, 2016 at 07:43 PM
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
-- Table structure for table `catalog_product_entity`
--

DROP TABLE IF EXISTS `catalog_product_entity`;
CREATE TABLE `catalog_product_entity` (
  `entity_id` int(10) UNSIGNED NOT NULL COMMENT 'Entity ID',
  `attribute_set_id` smallint(5) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Attribute Set ID',
  `type_id` varchar(32) NOT NULL DEFAULT 'simple' COMMENT 'Type ID',
  `sku` varchar(64) DEFAULT NULL COMMENT 'SKU',
  `has_options` smallint(6) NOT NULL DEFAULT '0' COMMENT 'Has Options',
  `required_options` smallint(5) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Required Options',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Catalog Product Table';

--
-- Dumping data for table `catalog_product_entity`
--

INSERT INTO `catalog_product_entity` (`entity_id`, `attribute_set_id`, `type_id`, `sku`, `has_options`, `required_options`, `created_at`, `updated_at`) VALUES
(2, 4, 'simple', 'Arroz-t0001-vparaiso', 0, 0, '2016-06-19 18:58:22', '2016-07-08 04:53:09'),
(3, 4, 'simple', 'Feijao da Fazenda Paraiso', 0, 0, '2016-06-19 18:59:38', '2016-07-08 04:56:51'),
(4, 4, 'simple', 'Arroz-t0010-vfasol-visao2', 0, 0, '2016-06-19 19:00:45', '2016-07-08 04:58:09'),
(5, 4, 'simple', 'Gado da Fazenda Vale do Sol', 0, 0, '2016-06-19 19:01:20', '2016-07-08 04:59:08'),
(6, 4, 'simple', 'Arroz-t0002-vparaiso', 0, 0, '2016-07-06 02:43:03', '2016-07-08 05:00:02'),
(8, 4, 'simple', 'Arroz-t003-vparaiso', 0, 0, '2016-07-06 02:45:36', '2016-07-06 02:53:36'),
(9, 4, 'simple', 'Arroz-t003-vsol', 0, 0, '2016-07-06 02:45:37', '2016-07-06 15:05:59'),
(11, 4, 'simple', 'Arroz - t0001 - vprimavera', 0, 0, '2016-07-06 17:01:24', '2016-07-06 17:01:24'),
(12, 4, 'simple', 'Arroz--arroz-t0001', 0, 0, '2016-07-06 20:22:57', '2016-07-06 20:54:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog_product_entity`
--
ALTER TABLE `catalog_product_entity`
  ADD PRIMARY KEY (`entity_id`),
  ADD KEY `CATALOG_PRODUCT_ENTITY_ATTRIBUTE_SET_ID` (`attribute_set_id`),
  ADD KEY `CATALOG_PRODUCT_ENTITY_SKU` (`sku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catalog_product_entity`
--
ALTER TABLE `catalog_product_entity`
  MODIFY `entity_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Entity ID', AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `catalog_product_entity`
--
ALTER TABLE `catalog_product_entity`
  ADD CONSTRAINT `CAT_PRD_ENTT_ATTR_SET_ID_EAV_ATTR_SET_ATTR_SET_ID` FOREIGN KEY (`attribute_set_id`) REFERENCES `eav_attribute_set` (`attribute_set_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

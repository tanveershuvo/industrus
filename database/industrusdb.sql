-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 07:29 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `industrusdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` int(11) NOT NULL COMMENT '0==admin, 1== marchandiser, 2 ==knitting'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Marchandiser', 'marchandise@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `deaprtments`
--

CREATE TABLE `deaprtments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL,
  `production_per_day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deaprtments`
--

INSERT INTO `deaprtments` (`id`, `department_name`, `production_per_day`) VALUES
(1, 'Knitting & Dyeing', 500),
(2, 'Cutting', 2000),
(3, 'Sewing', 2000),
(4, 'Packaging', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `measurement_pattern`
--

CREATE TABLE `measurement_pattern` (
  `id` int(11) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL,
  `tolerance` varchar(20) NOT NULL,
  `s_size` varchar(20) NOT NULL,
  `m_size` varchar(20) NOT NULL,
  `l_size` varchar(20) NOT NULL,
  `xl_size` varchar(20) NOT NULL,
  `xxl_size` varchar(20) NOT NULL,
  `xxxl_size` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `measurement_pattern`
--

INSERT INTO `measurement_pattern` (`id`, `order_id`, `reference`, `description`, `tolerance`, `s_size`, `m_size`, `l_size`, `xl_size`, `xxl_size`, `xxxl_size`) VALUES
(1, '5eacb4b85135a', 'Ref *', 'Description ', '1', '1', '1', '', '', '', ''),
(2, '5eacb4b85135a', 'ref 2', 'Description  Description ', '2', '1', '1', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_colors_quantity`
--

CREATE TABLE `order_colors_quantity` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `sQuantity` varchar(20) NOT NULL,
  `mQuantity` varchar(20) NOT NULL,
  `lQuantity` varchar(20) NOT NULL,
  `xlQuantity` varchar(20) NOT NULL,
  `xxlQuantity` varchar(20) NOT NULL,
  `xxxlQuantity` varchar(20) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_colors_quantity`
--

INSERT INTO `order_colors_quantity` (`id`, `order_id`, `color`, `sQuantity`, `mQuantity`, `lQuantity`, `xlQuantity`, `xxlQuantity`, `xxxlQuantity`, `total`) VALUES
(1, '5eacb4b85135a', 'Expedita fugit aut ', '510', '572', '506', '280', '222', '333', 2312),
(2, '5eacb4b85135a', 'Possimus voluptate ', '106', '593', '839', '867', '477', '563', 3359),
(3, '5eacb4b85135a', 'Qui quis nisi exerci', '693', '535', '701', '787', '580', '15', 3876);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `orderId` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buyerName` varchar(200) NOT NULL,
  `companyName` varchar(200) NOT NULL,
  `productName` varchar(100) NOT NULL,
  `productPrice` varchar(100) NOT NULL,
  `composition` varchar(100) NOT NULL,
  `fabricsWeight` varchar(100) NOT NULL,
  `samplePcs` varchar(10) NOT NULL,
  `fabricConstruction` varchar(100) NOT NULL,
  `febricDescription` varchar(100) NOT NULL,
  `productSketch` varchar(200) NOT NULL,
  `yarnDescription` varchar(150) NOT NULL,
  `frontMeasurementSketch` varchar(200) NOT NULL,
  `backMeasurementSketch` varchar(200) NOT NULL,
  `collarMeasurementSketch` varchar(200) NOT NULL,
  `frontSewingSkecth` varchar(200) NOT NULL,
  `frontPlacketSkecth` varchar(200) NOT NULL,
  `slideSlitSkecth` varchar(200) NOT NULL,
  `pcs_per_box` varchar(15) NOT NULL,
  `shipmentDate` varchar(100) NOT NULL,
  `detailOrderDate` varchar(100) DEFAULT NULL,
  `sampleOrderDate` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=sampledefault,1=sample_accepted,2=sample_rejected,3=pendingDetails,4 = userImputted,5=order-rejected,7=Order-in-production'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`orderId`, `user_id`, `buyerName`, `companyName`, `productName`, `productPrice`, `composition`, `fabricsWeight`, `samplePcs`, `fabricConstruction`, `febricDescription`, `productSketch`, `yarnDescription`, `frontMeasurementSketch`, `backMeasurementSketch`, `collarMeasurementSketch`, `frontSewingSkecth`, `frontPlacketSkecth`, `slideSlitSkecth`, `pcs_per_box`, `shipmentDate`, `detailOrderDate`, `sampleOrderDate`, `status`) VALUES
('5eacb4b85135a', 1, 'Lareina Castro', 'Gillespie Noble Co', 'Ora Graves', '758', 'Voluptate ipsa expe', 'Quia voluptatem simi', '12', 'Velit fugiat id qui', 'Dicta repellendus O', '20200502014600_banner-1.jpg', 'Nemo dolor at repudi', '20200502014929_banner-2.jpg', '20200502014929_banner-3.jpg', '20200502014929_flag-1.jpg', '20200502014929_hero-1.jpg', '20200502014929_hero-2.jpg', '20200502014929_hero-3.jpg', '12', '05/12/2020', '12/05/2020', '12/05/2020', 4);

-- --------------------------------------------------------

--
-- Table structure for table `order_tasks`
--

CREATE TABLE `order_tasks` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL,
  `assign_days` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_tasks`
--

INSERT INTO `order_tasks` (`id`, `order_id`, `department_id`, `assign_days`, `status`) VALUES
(1, '5eacb4b85135a', 1, 0, 0),
(2, '5eacb4b85135a', 2, 0, 0),
(3, '5eacb4b85135a', 3, 0, 0),
(4, '5eacb4b85135a', 4, 0, 0),
(5, '5eacb4b85135a', 1, 0, 0),
(6, '5eacb4b85135a', 2, 0, 0),
(7, '5eacb4b85135a', 3, 0, 0),
(8, '5eacb4b85135a', 4, 0, 0),
(9, '5eacb4b85135a', 1, 0, 0),
(10, '5eacb4b85135a', 2, 0, 0),
(11, '5eacb4b85135a', 3, 0, 0),
(12, '5eacb4b85135a', 4, 0, 0),
(13, '5eacb4b85135a', 1, 0, 0),
(14, '5eacb4b85135a', 2, 0, 0),
(15, '5eacb4b85135a', 3, 0, 0),
(16, '5eacb4b85135a', 4, 0, 0),
(17, '5eacb4b85135a', 1, 0, 0),
(18, '5eacb4b85135a', 2, 0, 0),
(19, '5eacb4b85135a', 3, 0, 0),
(20, '5eacb4b85135a', 4, 0, 0),
(21, '5eacb4b85135a', 1, 0, 0),
(22, '5eacb4b85135a', 2, 0, 0),
(23, '5eacb4b85135a', 3, 0, 0),
(24, '5eacb4b85135a', 4, 0, 0),
(25, '5eacb4b85135a', 1, 0, 0),
(26, '5eacb4b85135a', 2, 0, 0),
(27, '5eacb4b85135a', 3, 0, 0),
(28, '5eacb4b85135a', 4, 0, 0),
(29, '5eacb4b85135a', 1, 0, 0),
(30, '5eacb4b85135a', 2, 0, 0),
(31, '5eacb4b85135a', 3, 0, 0),
(32, '5eacb4b85135a', 4, 0, 0),
(33, '5eacb4b85135a', 1, 0, 0),
(34, '5eacb4b85135a', 2, 0, 0),
(35, '5eacb4b85135a', 3, 0, 0),
(36, '5eacb4b85135a', 4, 0, 0),
(37, '5eacb4b85135a', 1, 0, 0),
(38, '5eacb4b85135a', 2, 0, 0),
(39, '5eacb4b85135a', 3, 0, 0),
(40, '5eacb4b85135a', 4, 0, 0),
(41, '5eacb4b85135a', 1, 0, 0),
(42, '5eacb4b85135a', 2, 0, 0),
(43, '5eacb4b85135a', 3, 0, 0),
(44, '5eacb4b85135a', 4, 0, 0),
(45, '5eacb4b85135a', 1, 0, 0),
(46, '5eacb4b85135a', 2, 0, 0),
(47, '5eacb4b85135a', 3, 0, 0),
(48, '5eacb4b85135a', 4, 0, 0),
(49, '5eacb4b85135a', 1, 0, 0),
(50, '5eacb4b85135a', 2, 0, 0),
(51, '5eacb4b85135a', 3, 0, 0),
(52, '5eacb4b85135a', 4, 0, 0),
(53, '5eacb4b85135a', 1, 0, 0),
(54, '5eacb4b85135a', 2, 0, 0),
(55, '5eacb4b85135a', 3, 0, 0),
(56, '5eacb4b85135a', 4, 0, 0),
(57, '5eacb4b85135a', 1, 0, 0),
(58, '5eacb4b85135a', 2, 0, 0),
(59, '5eacb4b85135a', 3, 0, 0),
(60, '5eacb4b85135a', 4, 0, 0),
(61, '5eacb4b85135a', 1, 1, 0),
(62, '5eacb4b85135a', 2, -1, 0),
(63, '5eacb4b85135a', 3, 1, 0),
(64, '5eacb4b85135a', 4, 1, 0),
(65, '5eacb4b85135a', 1, 1, 0),
(66, '5eacb4b85135a', 2, 1, 0),
(67, '5eacb4b85135a', 3, 1, 0),
(68, '5eacb4b85135a', 4, 1, 0),
(69, '5eacb4b85135a', 1, 1, 0),
(70, '5eacb4b85135a', 2, 1, 0),
(71, '5eacb4b85135a', 3, 1, 0),
(72, '5eacb4b85135a', 4, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `package_box_details`
--

CREATE TABLE `package_box_details` (
  `id` int(11) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `size` varchar(5) NOT NULL,
  `length` varchar(10) NOT NULL,
  `width` varchar(10) NOT NULL,
  `height` varchar(10) NOT NULL,
  `grossWeight` varchar(10) NOT NULL,
  `nertWeight` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_box_details`
--

INSERT INTO `package_box_details` (`id`, `order_id`, `size`, `length`, `width`, `height`, `grossWeight`, `nertWeight`) VALUES
(1, '5eacb4b85135a', 's', '12', '12', '12', '12', '12'),
(2, '5eacb4b85135a', 'm', '21', '2', '21', '21', '21');

-- --------------------------------------------------------

--
-- Table structure for table `package_description`
--

CREATE TABLE `package_description` (
  `id` int(11) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `package_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `email`, `password`, `company_name`, `phone`, `token`) VALUES
(1, 'Mohammad Murphy', 'tanveershuvos@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Cox and Russell LLC', '6', '');

-- --------------------------------------------------------

--
-- Table structure for table `yarn_color`
--

CREATE TABLE `yarn_color` (
  `id` int(11) NOT NULL,
  `yarn_desc_id` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `yarn_color` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yarn_color`
--

INSERT INTO `yarn_color` (`id`, `yarn_desc_id`, `color`, `yarn_color`) VALUES
(1, '5eacb5893471e', 'Expedita fugit aut ', 'a'),
(2, '5eacb5893471e', 'Possimus voluptate ', 'b'),
(3, '5eacb5893471e', 'Qui quis nisi exerci', 'c'),
(4, '5eacb589794bf', 'Expedita fugit aut ', 'e'),
(5, '5eacb589794bf', 'Possimus voluptate ', 'f'),
(6, '5eacb589794bf', 'Qui quis nisi exerci', 'g');

-- --------------------------------------------------------

--
-- Table structure for table `yarn_description`
--

CREATE TABLE `yarn_description` (
  `id` varchar(25) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `yarn_description`
--

INSERT INTO `yarn_description` (`id`, `order_id`, `reference`, `description`) VALUES
('5eacb5893471e', '5eacb4b85135a', 'Yarn ', 'Yarn Yarn '),
('5eacb589794bf', '5eacb4b85135a', 'Yarn 2', 'Yarn Yarn Yarn Yarn ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deaprtments`
--
ALTER TABLE `deaprtments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measurement_pattern`
--
ALTER TABLE `measurement_pattern`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order_colors_quantity`
--
ALTER TABLE `order_colors_quantity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`orderId`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_tasks`
--
ALTER TABLE `order_tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `package_box_details`
--
ALTER TABLE `package_box_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_description`
--
ALTER TABLE `package_description`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yarn_color`
--
ALTER TABLE `yarn_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yarn_description`
--
ALTER TABLE `yarn_description`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deaprtments`
--
ALTER TABLE `deaprtments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `measurement_pattern`
--
ALTER TABLE `measurement_pattern`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_colors_quantity`
--
ALTER TABLE `order_colors_quantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_tasks`
--
ALTER TABLE `order_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `package_box_details`
--
ALTER TABLE `package_box_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package_description`
--
ALTER TABLE `package_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yarn_color`
--
ALTER TABLE `yarn_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `measurement_pattern`
--
ALTER TABLE `measurement_pattern`
  ADD CONSTRAINT `measurement_pattern_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`orderId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_colors_quantity`
--
ALTER TABLE `order_colors_quantity`
  ADD CONSTRAINT `order_colors_quantity_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`orderId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_login` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_tasks`
--
ALTER TABLE `order_tasks`
  ADD CONSTRAINT `order_tasks_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `deaprtments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_tasks_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`orderId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

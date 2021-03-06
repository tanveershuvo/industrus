-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2020 at 02:20 AM
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
(1, 'Marchandiser', 'marchandise@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1),
(2, 'Knitting', 'knitting@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 2),
(3, 'cutting', 'cutting@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3),
(4, 'sewing', 'sewing@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 4),
(5, 'Package', 'package@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 5),
(6, 'admin', 'admin@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0);

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
  `detailOrderDate` varchar(100) NOT NULL,
  `sampleOrderDate` varchar(100) NOT NULL,
  `finishedDate` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0=sampledefault,1=sample_accepted,2=sample_rejected,3=pendingDetails,4 = userImputted,5=task-allocated,6=Order-in-production, 7 =order_finished'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_tasks`
--

CREATE TABLE `order_tasks` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `department_id` int(11) NOT NULL,
  `assign_days` int(11) NOT NULL,
  `started_at` varchar(50) NOT NULL,
  `finished_at` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `flag` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Table structure for table `package_description`
--

CREATE TABLE `package_description` (
  `id` int(11) NOT NULL,
  `order_id` varchar(20) NOT NULL,
  `reference` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `production_track`
--

CREATE TABLE `production_track` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `production_date` varchar(50) NOT NULL,
  `production_amount` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_costing`
--

CREATE TABLE `product_costing` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `fabAmount` varchar(11) NOT NULL,
  `fabCost` varchar(11) NOT NULL,
  `knitCost` varchar(11) NOT NULL,
  `dyeCost` varchar(11) NOT NULL,
  `stitching` varchar(11) NOT NULL,
  `cutting` varchar(11) NOT NULL,
  `packaging` varchar(11) NOT NULL,
  `totalPrice` varchar(20) NOT NULL,
  `perPiecePrice` varchar(20) NOT NULL
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `package_description`
--
ALTER TABLE `package_description`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `production_track`
--
ALTER TABLE `production_track`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product_costing`
--
ALTER TABLE `product_costing`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `deaprtments`
--
ALTER TABLE `deaprtments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `measurement_pattern`
--
ALTER TABLE `measurement_pattern`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_colors_quantity`
--
ALTER TABLE `order_colors_quantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_tasks`
--
ALTER TABLE `order_tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_box_details`
--
ALTER TABLE `package_box_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package_description`
--
ALTER TABLE `package_description`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `production_track`
--
ALTER TABLE `production_track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_costing`
--
ALTER TABLE `product_costing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `yarn_color`
--
ALTER TABLE `yarn_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- Constraints for table `package_box_details`
--
ALTER TABLE `package_box_details`
  ADD CONSTRAINT `package_box_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`orderId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package_description`
--
ALTER TABLE `package_description`
  ADD CONSTRAINT `package_description_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`orderId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `production_track`
--
ALTER TABLE `production_track`
  ADD CONSTRAINT `production_track_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`orderId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

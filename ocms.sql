-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 05:32 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ocms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `admin_id` int(255) NOT NULL,
  `name` varchar(350) NOT NULL,
  `email` varchar(350) NOT NULL,
  `password` varchar(350) NOT NULL,
  `cpassword` varchar(350) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `admin_checker` int(255) NOT NULL,
  `designation` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`admin_id`, `name`, `email`, `password`, `cpassword`, `contact`, `admin_checker`, `designation`) VALUES
(1, 'Abram JOhn', 'abram-6@outlook.com', '65c863010b3dbfb8ae1aac284e49f6dc9895eb30', '65c863010b3dbfb8ae1aac284e49f6dc9895eb30', '2147483647', 1, 'Admin'),
(2, 'Abram', 'abram6@outlook.com', '65c863010b3dbfb8ae1aac284e49f6dc9895eb30', '65c863010b3dbfb8ae1aac284e49f6dc9895eb30', '2147483647', 0, 'Sub-Admin'),
(3, 'Hamza Asghar', 'hamzaasghar137@gmail.com', 'a2e8a4d2d4baa7a6d9866d6f1d119aebac955bf0', 'a2e8a4d2d4baa7a6d9866d6f1d119aebac955bf0', '03012888533', 0, 'Sub-Admin');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(255) NOT NULL,
  `brand_name` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(1, 'Audi'),
(2, 'Honda'),
(3, 'Toyota'),
(4, 'Jeep');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `car_id` int(255) NOT NULL,
  `car_name` varchar(350) NOT NULL,
  `car_model` int(255) NOT NULL,
  `car_img` varchar(350) NOT NULL,
  `type_1` varchar(350) NOT NULL,
  `type_2` varchar(350) NOT NULL,
  `veh_type` varchar(350) NOT NULL,
  `brand_name` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`car_id`, `car_name`, `car_model`, `car_img`, `type_1`, `type_2`, `veh_type`, `brand_name`) VALUES
(1, 'A6', 2016, 'products_images/add_cars/audi a6.png', 'costom', 'Modification', 'Car', 'Audi'),
(2, 'Corolla', 2013, 'products_images/add_cars/TOYOTA-Corolla 2013.jpg', 'costom', 'Modification', 'Car', 'Toyota'),
(3, 'Civic', 2013, 'products_images/add_cars/honda 2013.jpg', 'costom', 'Modification', 'Car', 'Honda'),
(4, 'Wrangler', 2016, 'products_images/add_cars/ar.2.png', 'costom', 'Modification', 'Jeep', 'Jeep'),
(5, 'A6', 2018, 'products_images/add_cars/2014_audi_s8-wide.jpg', 'costom', 'Modification', 'Car', 'Audi');

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `com_id` int(255) NOT NULL,
  `cos_name` varchar(350) NOT NULL,
  `cos_email` varchar(350) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` varchar(350) NOT NULL,
  `date` varchar(350) NOT NULL,
  `time` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`com_id`, `cos_name`, `cos_email`, `subject`, `message`, `status`, `date`, `time`) VALUES
(3, 'Abram JOhn', 'abram6v@outlook.com', 'helo john players is here ', 'helo john players is here helo john players is here helo john players is here helo john players is here helo john players is here helo john players is here helo john players is here helo john players is here helo john players is here helo john players is here ', 'Read', '06/07/2019', '07:47:39'),
(4, 'Abram JOhn', 'abram6dv@outlook.com', 'helo john players is here !!', 'helo john players is here helo john players is here ', 'Read', '06/07/2019', '09:07:17'),
(5, 'Abram JOhn', 'abramf6v@outlook.com', 'helo john player', 'helo john playerhelo john playerhelo john playerhelo john playerhelo john playerhelo john playerhelo john player', 'Read', '06/07/2019', '09:16:19'),
(10, 'Abram JOhng', 'abram6dv@outlook.com', 'helo john players is here !!', 'j', 'Read', '07/07/2019', '04:48:12'),
(11, 'Abram JOhnfc', 'abracm-6@outlook.com', 'helo john player', 'fc', 'Read', '07/07/2019', '05:01:29'),
(12, 'Abram JOhncc', 'abracm-6@outlook.com', 'helo john players is here !!', 'helo john players is here !!helo john players is here !!helo john players is here !!helo john players is here !!', 'Read', '08/07/2019', '15:29:44'),
(13, 'd', 'd', 'dddd', 'daaa', 'Unread', '19/07/2019', '15:02:10'),
(14, 'f', 'johsn', 'ng;kj', ';knxcjoh', 'Unread', '19/07/2019', '15:13:22'),
(15, 'hamza', 'hamzaasghar137@gmail.com', 'iagsuagjsfuyag', 'jkshsiuahisuaiusaucsyag suyt a', 'Read', '24/08/2019', '15:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `cost_order`
--

CREATE TABLE `cost_order` (
  `cos_ord_id` int(255) NOT NULL,
  `cos_id` varchar(350) NOT NULL,
  `cos_name` varchar(350) NOT NULL,
  `invoice_no` varchar(350) NOT NULL,
  `grand_total` varchar(350) NOT NULL,
  `date` varchar(350) NOT NULL,
  `time` varchar(350) NOT NULL,
  `team_id` varchar(350) NOT NULL,
  `tax` varchar(350) NOT NULL,
  `total` varchar(350) NOT NULL,
  `labour` varchar(350) NOT NULL,
  `status` varchar(350) NOT NULL,
  `car_name` varchar(350) NOT NULL,
  `car_model` varchar(350) NOT NULL,
  `brand_name` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cost_order`
--

INSERT INTO `cost_order` (`cos_ord_id`, `cos_id`, `cos_name`, `invoice_no`, `grand_total`, `date`, `time`, `team_id`, `tax`, `total`, `labour`, `status`, `car_name`, `car_model`, `brand_name`) VALUES
(18, '1', 'Abram JOhn', '416016322', '36575', '13/07/2019', '15:29:46', '2', '350', '35000', '1225', 'Completed', 'A6', '2016', 'Audi'),
(19, '4', 'Shehroz', '491479709', '36575', '13/07/2019', '15:50:55', '1', '350', '35000', '1225', 'Pending', 'Civic', '2013', 'Honda'),
(20, '1', 'Abram JOhn', '1668471106', '36575', '23/07/2019', '09:16:24', '1', '350', '35000', '1225', 'Completed', 'Corolla', '2013', 'Toyota'),
(25, '1', 'Abram JOhn', '879392195', '80800', '23/08/2019', '16:20:59', '0', '800', '80000', '0', 'Pending', 'Civic', '2013', 'Honda'),
(26, '1', 'Abram JOhn', '346694058', '83600', '23/08/2019', '16:21:39', '1', '800', '80000', '2800', 'Completed', 'Corolla', '2013', 'Toyota'),
(27, '1', 'Abram JOhn', '32179478', '45450', '26/08/2019', '12:04:58', '0', '450', '45000', '0', 'Completed', 'Corolla', '2013', 'Toyota'),
(28, '1', 'Abram JOhn', '126417271', '47025', '26/08/2019', '12:12:16', '1', '450', '45000', '1575', 'Pending', 'Corolla', '2013', 'Toyota'),
(29, '1', 'Abram JOhn', '1683363329', '35350', '28/08/2019', '17:29:50', '0', '350', '35000', '0', 'Pending', 'Civic', '2013', 'Honda');

-- --------------------------------------------------------

--
-- Table structure for table `item_order`
--

CREATE TABLE `item_order` (
  `order_id` int(255) NOT NULL,
  `item_name` varchar(350) NOT NULL,
  `invoice_no` varchar(350) NOT NULL,
  `item_qty` varchar(350) NOT NULL,
  `price` varchar(350) NOT NULL,
  `sub_total` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_order`
--

INSERT INTO `item_order` (`order_id`, `item_name`, `invoice_no`, `item_qty`, `price`, `sub_total`) VALUES
(49, 'AEZ Portofino', '416016322', '1', '35000', '35000'),
(50, 'Alloy Rim 2', '491479709', '1', '35000', '35000'),
(51, 'AEZ Portofino Alloy Rim', '1668471106', '1', '35000', '35000'),
(60, 'AEZ Valencia Alloy Rims', '879392195', '1', '35000', '35000'),
(61, 'Zormer SE25 Alloy rims', '879392195', '1', '45000', '45000'),
(62, 'AEZ Valencia', '346694058', '1', '35000', '35000'),
(63, 'Enzo 101 Alloy Rims', '346694058', '1', '45000', '45000'),
(64, 'DOTZ Dakar Alloy Rims', '32179478', '1', '45000', '45000'),
(65, 'DOTZ Dakar Alloy Rims', '126417271', '1', '45000', '45000'),
(66, 'DOTZ Dakar Alloy Rims', '1683363329', '1', '35000', '35000');

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `model_id` int(255) NOT NULL,
  `car_model` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`model_id`, `car_model`) VALUES
(1, '2010'),
(2, '2011'),
(3, '2012'),
(4, '2013'),
(5, '2014'),
(6, '2015'),
(7, '2016'),
(8, '2017'),
(9, '2018'),
(10, '2019');

-- --------------------------------------------------------

--
-- Table structure for table `parts_categories`
--

CREATE TABLE `parts_categories` (
  `prt_id` int(255) NOT NULL,
  `prt_name` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parts_categories`
--

INSERT INTO `parts_categories` (`prt_id`, `prt_name`) VALUES
(1, 'Rims'),
(2, 'Engines'),
(3, 'Seats Covers');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(255) NOT NULL,
  `image` varchar(350) NOT NULL,
  `pname` varchar(350) NOT NULL,
  `company` varchar(350) NOT NULL,
  `price` varchar(350) NOT NULL,
  `car_id` varchar(350) NOT NULL,
  `prt_id` varchar(350) NOT NULL,
  `det_img1` varchar(350) NOT NULL,
  `det_img2` varchar(350) NOT NULL,
  `descript1` varchar(1000) NOT NULL,
  `install_img1` varchar(350) NOT NULL,
  `install_img2` varchar(350) NOT NULL,
  `install_img3` varchar(350) NOT NULL,
  `descript2` varchar(1000) NOT NULL,
  `shop_id` varchar(350) NOT NULL,
  `car_model` varchar(350) NOT NULL,
  `veh_type` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `image`, `pname`, `company`, `price`, `car_id`, `prt_id`, `det_img1`, `det_img2`, `descript1`, `install_img1`, `install_img2`, `install_img3`, `descript2`, `shop_id`, `car_model`, `veh_type`) VALUES
(1, 'AEZ Portofino.audi.jpg', 'AEZ Portofino', 'AEZ', '35000', '1', '1', 'AEZ Portofino dark.audi.jpg', 'AEZ Portofino.audi.jpg', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.\r\nIn the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', 'AUDI 1.1.png', 'AUDI 1.2.png', 'AUDI 1.3.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '2', '2016', 'Car'),
(2, 'DOTZ Dakar.AUDI.jpg', 'DOTZ Dakar', 'DOTZ', '45000', '1', '1', 'DOTZ Dakar.AUDI.jpg', 'DOTZ dakar.AUDI.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.\r\nIn the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', 'AUDI 2.1.png', 'AUDI 2.2.png', 'AUDI 2.3.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '2', '2016', 'Car'),
(3, 'AEZ Valencia.audi.jpg', 'AEZ Valencia', 'AEZ', '45000', '1', '1', 'AEZ Valencia.audi.jpg', 'AEZ Valencia - Copy.audi.jpg', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.\r\nIn the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', 'AUDI 3.1.png', 'AUDI 3.2.png', 'AUDI 3.3.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '2', '2016', 'Car'),
(4, 'advanti_se25.audi.jpg', 'ADVANTI SE25 Alloy rims', 'ADVANTI', '45000', '1', '1', 'advanti_se25.audi.jpg', 'zormer-se25-300.audi.jpg', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.\r\nIn the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', 'AUDI 4.1.png', 'AUDI 4.2.png', 'AUDI 4.3.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '2', '2016', 'Car'),
(5, 'AEZ Portofino dark.jpg', 'AEZ Portofino Alloy Rim', 'AEZ', '35000', '2', '1', 'AEZ Portofino dark.jpg', 'AEZ Portofino.jpg', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.\r\nIn the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', 'AEZ portofino 1.png', 'AEZ portofino 2.png', 'AEZ potofino 3.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '2', '2013', 'Car'),
(6, 'AEZ Valencia - Copy.jpg', 'AEZ Valencia', 'AEZ', '35000', '2', '1', 'AEZ Valencia - Copy.jpg', 'AEZ Valencia.jpg', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.\r\nIn the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', 'AEZ valencia 1.png', 'AEZ valenci 2.png', 'AEZ valencia 3.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '2', '2013', 'Car'),
(7, 'enzo 101.jpg', 'Enzo 101 Alloy Rims', 'AEZ', '45000', '2', '1', 'enzo 101.jpg', 'enzo 1011.webp', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.\r\nIn the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', 'enzo 101 1.png', 'enzo 101 2.png', 'enzo 101 3.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '2', '2013', 'Car'),
(8, 'DOTZ Dakar.jpg', 'DOTZ Dakar Alloy Rims', 'DOTZ', '45000', '2', '1', 'DOTZ Dakar.jpg', 'DOTZ dakar.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.\r\nIn the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', 'DOTZ Dakar 1.png', 'DOTZ Dakar 2.png', 'DOTZ Dakar 3.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '2', '2013', 'Car'),
(9, '4go 5247.jpg', '4go 5247 Alloy Rims', '4go', '45000', '2', '1', '4go 5247.jpg', '4go_yq13.7074.orig.1063.jpg', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.\r\nIn the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '$go 1.png', '4go 2.png', '4go 3.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '2', '2013', 'Car'),
(10, '0003731_18-alutec-poison-polar-silver-alloy-wheels_550.hond.png', 'Alutec Poison Alloy Rims', 'Alutec', '45000', '3', '1', 'Honda 1.2.png', 'alutec_poison_racing_black.HOND.jpg', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.\r\nIn the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', 'Honda 1.1.png', 'Honda 1.2.png', 'Honda 1.3.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '2', '2013', 'Car'),
(11, 'advanti_se25.honda.jpg', 'Zormer SE25 Alloy rims', 'Zormer', '45000', '3', '1', 'advanti_se25.honda.jpg', 'zormer-se25-300.honda.jpg', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.\r\nIn the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', 'Honda 2.1.png', 'Honda 2.2.png', 'HOnda 2.3.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '2', '2013', 'Car'),
(12, 'AEZ Valencia - Copy.Honda.jpg', 'AEZ Valencia Alloy Rims', 'AEZ', '35000', '3', '1', 'AEZ Valencia - Copy.Honda.jpg', '', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.\r\nIn the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', 'Honda 3.1.png', 'Honda 3.2.png', 'Honda 3.3.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '2', '2013', 'Car'),
(13, 'DOTZ Dakar.Honda.jpg', 'DOTZ Dakar Alloy Rims', '', '35000', '3', '1', 'DOTZ Dakar.Honda.jpg', 'DOTZ dakar.Honda.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.\r\nIn the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', 'Honda 4.1.png', 'Honda 4.2.png', 'Honda 4.3.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '2', '2013', 'Car'),
(14, 'bbs_rsgt_0.Honda.jpg', 'GT Hyper Black', 'Hyper', '35000', '3', '1', 'bbs_rsgt_0.Honda.jpg', 'BBS-RS-GT-Hyper-Black-with-Polished-Lip.Honda.jpg', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.\r\nIn the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', 'Honda 5.1.png', 'Honda 5.2.png', 'Honda 5.3.png', 'In the automotive industry, alloy wheels are wheels that are made from an alloy of aluminium or magnesium. ... Alloys of aluminium or magnesium are typically lighter for the same strength, provide better heat conduction, and often produce improved cosmetic appearance over steel wheels.', '2', '2013', 'Car'),
(15, 'd15 5.jpg', 'D15 Engine', 'AZE', '75000', '2', '2', 'd15 5.jpg', '2.jpg', 'The Honda D series inline-four cylinder engine is used in a variety of compact models, most commonly the Honda Civic, CRX, Logo, Stream, and first-generation Integra. Engine displacement ranges between 1.2 and 1.7 liters. The D Series engine is either SOHC or DOHC, and might include VTEC variable valve timing. Power ranges from 62 hp (46 kW) in the Logo to 130 PS (96 kW) in the Civic Si. D-series production commenced 1984 and ended 2005. D-series engine technology culminated with production of the D15B 3-stage VTEC (D15Z7) which was available in markets outside of the United States. Earlier versions of this engine also used a single port fuel injection system Honda called PGM-CARB, signifying the carburetor was computer controlled.', '1.jpg', '3.jpg', '4.jpg', 'The Honda D series inline-four cylinder engine is used in a variety of compact models, most commonly the Honda Civic, CRX, Logo, Stream, and first-generation Integra. Engine displacement ranges between 1.2 and 1.7 liters. The D Series engine is either SOHC or DOHC, and might include VTEC variable valve timing. Power ranges from 62 hp (46 kW) in the Logo to 130 PS (96 kW) in the Civic Si. D-series production commenced 1984 and ended 2005. D-series engine technology culminated with production of the D15B 3-stage VTEC (D15Z7) which was available in markets outside of the United States. Earlier versions of this engine also used a single port fuel injection system Honda called PGM-CARB, signifying the carburetor was computer controlled.', '2', '2013', 'Car'),
(16, 'AR2016-1000_1682_2126.jpg', 'DOTZ Dakar Alloy Rims', 'DOTZ', '45000', '4', '1', 'American Racing AX201.jpg', 'AR2016-1000_1682_2126.jpg', 'This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. \r\n\r\nThis is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. ', 'ar.1.png', 'ar.2.png', 'ar.3.png', 'This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. \r\n\r\nThis is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. \r\n\r\nThis is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. This is alloy rim of the Jeep wangler. ', '2', '2016', 'Jeep'),
(17, 'Jeep 1.jpg', 'Alloy Rim 1', 'factory', '35000', '4', '1', 'Jeep 1.jpg', 'Jeep 2.jpg', 'These are the custom rims for jeep wrangler unlimitted edition.These are the custom rims for jeep wrangler unlimitted edition.These are the custom rims for jeep wrangler unlimitted edition.These are the custom rims for jeep wrangler unlimitted edition.These are the custom rims for jeep wrangler unlimitted edition.', 'Screenshot (332).png', 'Screenshot (333).png', 'Screenshot (334).png', 'These are the custom rims for jeep wrangler unlimitted edition.These are the custom rims for jeep wrangler unlimitted edition.These are the custom rims for jeep wrangler unlimitted edition.These are the custom rims for jeep wrangler unlimitted edition.These are the custom rims for jeep wrangler unlimitted edition.', '1', '2016', 'Jeep'),
(18, 'corolla.jpg', 'Alloy Rim 1', 'factory', '35000', '2', '1', 'corolla.jpg', 'corolla 2.jpg', 'these are the custom rims for toyotta corolla 2013.these are the custom rims for toyotta corolla 2013.these are the custom rims for toyotta corolla 2013.these are the custom rims for toyotta corolla 2013.these are the custom rims for toyotta corolla 2013.', '1.png', '2.png', '3.png', 'these are the custom rims for toyotta corolla 2013.these are the custom rims for toyotta corolla 201ththese are the custom rims for toyotta corolla 2013.these are the custom rims for toyotta corolla 2013.ms for toyotta corolla 2013.these are the custom rims for toyotta corolla 2013.', '1', '2013', 'car'),
(19, 'Audi 1.jpg', 'Alloy Rim 1', 'factory', '35000', '1', '1', 'AUdi 2.jpg', 'AUdi 2.jpg', 'these are custom rims for audi A6.these are custom rims for audi A6.these are custom rims for audi A6.these are custom rims for audi A6.these are custom rims for audi A6.these are custom rims for audi A6.these are custom rims for audi A6.these are custom rims for audi A6.', 'A!.png', 'A2.png', 'A3.png', 'these are custom rims for audi A6.these are custom rims for audi A6.these are custom rims for audi A6.these are custom rims for audi A6.these are custom rims for audi A6.these are custom rims for audi A6.these are custom rims for audi A6.these are custom rims for audi A6.', '1', '2016', 'Car'),
(20, 'Honda.jpg', 'Alloy Rim 2', 'factory', '35000', '3', '1', 'Honda.jpg', 'Honda.jpg', 'These are custom rims for honda civic These are custom rims for honda civic These are custom rims for honda civic These are custom rims for honda civic These are custom rims for honda civic These are custom rims for honda civic These are custom rims for honda civic ', 'H1.png', 'H2.png', 'H3.png', 'These are custom rims for honda civic These are custom rims for honda civic These are custom rims for honda civic These are custom rims for honda civic These are custom rims for honda civic \r\n\r\nThese are custom rims for honda civic These are custom rims for honda civic These are custom rims for honda civic These are custom rims for honda civic ', '1', '2013', 'Car');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `name` varchar(350) NOT NULL,
  `email` varchar(350) NOT NULL,
  `password` varchar(350) NOT NULL,
  `contact` varchar(350) NOT NULL,
  `cpassword` varchar(350) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `contact`, `cpassword`, `address`, `city`) VALUES
(1, 'Abram JOhn', 'abram-6@outlook.com', '65c863010b3dbfb8ae1aac284e49f6dc9895eb30', '03054199387', '65c863010b3dbfb8ae1aac284e49f6dc9895eb30', 'shadman market', 'lahore'),
(2, 'Abram JOhn', 'abram-6@outlook.com', '7c222fb2927d828af22f592134e8932480637c0d', '03054199387', '7c222fb2927d828af22f592134e8932480637c0d', '', ''),
(3, 'Hamza', 'Hamza@gmail.com', '65c863010b3dbfb8ae1aac284e49f6dc9895eb30', '03054199387', '65c863010b3dbfb8ae1aac284e49f6dc9895eb30', 'C-8, Services Hosiptal, ', 'Lahore'),
(4, 'Shehroz', 'shehroz@gmail.com', '65c863010b3dbfb8ae1aac284e49f6dc9895eb30', '03054199387', '65c863010b3dbfb8ae1aac284e49f6dc9895eb30', 'C-8, Services Hosiptal, ', 'Lahore'),
(5, 'Abram J', 'abram66@outlook.com', '65c863010b3dbfb8ae1aac284e49f6dc9895eb30', '03054199387', '65c863010b3dbfb8ae1aac284e49f6dc9895eb30', 'Main Market', 'Lahore');

-- --------------------------------------------------------

--
-- Table structure for table `shop_categories`
--

CREATE TABLE `shop_categories` (
  `shop_id` int(255) NOT NULL,
  `shop_cate` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_categories`
--

INSERT INTO `shop_categories` (`shop_id`, `shop_cate`) VALUES
(1, 'costom'),
(2, 'modification');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(255) NOT NULL,
  `member_1` varchar(350) NOT NULL,
  `member_2` varchar(350) NOT NULL,
  `member_3` varchar(350) NOT NULL,
  `member_4` varchar(350) NOT NULL,
  `labour` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `member_1`, `member_2`, `member_3`, `member_4`, `labour`) VALUES
(1, 'Bob', 'Alex', 'Paul', 'Max', '3000'),
(2, 'Rocky', 'Bobby', 'Sunny', 'Maxxi', '3000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `cost_order`
--
ALTER TABLE `cost_order`
  ADD PRIMARY KEY (`cos_ord_id`);

--
-- Indexes for table `item_order`
--
ALTER TABLE `item_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`model_id`);

--
-- Indexes for table `parts_categories`
--
ALTER TABLE `parts_categories`
  ADD PRIMARY KEY (`prt_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_categories`
--
ALTER TABLE `shop_categories`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `com_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `cost_order`
--
ALTER TABLE `cost_order`
  MODIFY `cos_ord_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `item_order`
--
ALTER TABLE `item_order`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `model_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `parts_categories`
--
ALTER TABLE `parts_categories`
  MODIFY `prt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `shop_categories`
--
ALTER TABLE `shop_categories`
  MODIFY `shop_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

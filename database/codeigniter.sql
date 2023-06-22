-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 09:36 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `role` enum('super','admin','marketing','support','dealer','customar') NOT NULL DEFAULT 'dealer',
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `parent`, `phone`, `role`, `status`) VALUES
(1, 'Super admin', 'super@gmail.com', '12345', 0, '01711765788', 'super', 'active'),
(2, 'Nasim Admin', 'admin@gmail.com', '12345', 1, '645678', 'admin', 'active'),
(3, 'Gazi Nasim(Admin)', 'gazinasim@gmail.com', '12345', 1, '01928788589', 'admin', 'active'),
(4, 'Nasim', 'nasimadmin@gmail.com', '12345', 1, '345678', 'admin', 'active'),
(5, 'Nasim Gazi Marketing', 'marketing@gmail.com', '12345', 2, '4564678', 'marketing', 'active'),
(6, 'Marketing One Ad4', 'marketingadmin4one@gmail.com', '12345', 4, '1234', 'marketing', 'active'),
(7, 'Mamun marketing', 'mamun@gmgh.com', '12345', 2, '19288589', 'marketing', 'active'),
(8, 'MD. Babar Ali', 'mdbabarali@gmail.com', '12345', 5, '4564678', 'dealer', 'inactive'),
(9, 'MD Babu', 'babu@gmail.com', '12345', 7, '1928858', 'dealer', 'inactive'),
(10, 'md panna', 'dealer@gmail.com', '12345', 7, '4564678', 'dealer', 'active'),
(11, 'jasim molla', 'jasim@gmail.com', '12345', 5, '4564678', 'dealer', 'active'),
(12, 'dealer Mamun_firsrt', 'mafirstdler@gmail.com', '12345', 7, '4564678', 'dealer', 'active'),
(13, 'Marketing Two  Ad4', 'marketingadmin4two@gmail.com', '12345', 4, '4564678', 'marketing', 'active'),
(14, 'Markting One(G-Ad)', 'marketingOne@gmail.com', '12345', 3, '4564678', 'marketing', 'active'),
(15, 'MarketingTwo(G-Ad)', 'marketingTwo@gmail.com', '12345', 3, '4564678', 'marketing', 'active'),
(20, 'Dealer One', 'dealerone@gmail.com', '12345', 6, '0876', 'dealer', 'active'),
(22, 'Dealer One2', 'dealerone@gmail.com', '12345', 6, '0876', 'dealer', 'active'),
(29, 'Customar1', 'customar1@gmail.com', '12345', 10, '4564678', 'dealer', 'active'),
(34, 'cname', 'gfhjkl@gmgh.com', '12345', 10, '4564678', 'customar', 'active'),
(35, 'cname', 'gfhjkl@gmgh.com', '12345', 10, '4564678', 'customar', 'active'),
(38, 'customar5', 'customar5@gmail.com', '12345', 10, '4564678', 'customar', 'active'),
(39, 'dealer two', 'dealertwo@gmail.com', '12345', 14, '34567', 'dealer', 'active'),
(40, 'mamunCustomar1', 'mamncustomar1@gmail.com', '12345', 12, '7654e3', 'customar', 'active'),
(42, 'Nasim Gazi', 'dealerrr@email.com', '12345', 14, '19288589', 'dealer', 'active'),
(43, 'Nasim Gazi dealer', 'pnna@gmail.com', '12345', 14, '19288589', 'dealer', 'active'),
(44, 'Tauhid ', 'gazinasim001@gmail.com', '12345', 14, '19288589', 'dealer', 'active'),
(45, 'Ahmad', 'gazinasim001@gmail.com', '12345', 14, '192589', 'dealer', 'active'),
(46, 'Reza', 'gfhjkl@gmgh.com', '12345', 14, '192589', 'dealer', 'active'),
(47, 'Tawhid', 'tawhid@gmail.com', '12345', 14, '41867', 'dealer', 'active'),
(48, 'marketing-of-four', 'iufwrtijerk', '12345', 4, '54895', 'marketing', 'active'),
(49, 'Unus Hosain', 'unus@gmail.com', '12345', 14, '548652', 'dealer', 'active'),
(50, 'Mohamma Usuf', 'usuf@gmail.com', '12345', 14, '548652', 'dealer', 'active'),
(54, 'Nasim Gaziasdfsdgfh', 'gfhjkl@gmgh.com', '618528', 1, '19288589', 'dealer', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, 'Nasim Gazi', 'gfhjkl@gmgh.com', 'ssss', 'msg'),
(2, 'Nasim Gazi', 'gfhjkl@gmgh.com', 'ssss', 'msg'),
(3, 'Nasim Gazi', 'gfhjkl@gmgh.com', 'ssss', 'msg'),
(4, 'GAZI NASIM UDDIN', 'gfhjkl@gmgh.com', 'ssss', '87uygh');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `dealer_price` decimal(10,2) NOT NULL,
  `mrp` decimal(10,2) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `vat` decimal(10,2) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `picture`, `dealer_price`, `mrp`, `unit`, `vat`, `status`) VALUES
(1, 'realme 25s', 'property-2_(1)1.jpg', '11000.00', '1200.00', '1', '5.00', 'active'),
(2, 'oppo A117k', 'property-2_(1)4.jpg', '20000.00', '25000.00', '1', '4.00', 'active'),
(3, 'Nokia', 'property-3_(1)2.jpg', '5000.00', '5500.00', '1', '5.00', 'active'),
(4, 'Nokia Lumia', 'property-4_(1)1.jpg', '50000.00', '55000.00', '1', '3.00', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `proprty_list`
--

CREATE TABLE `proprty_list` (
  `id` int(11) NOT NULL,
  `perps` varchar(20) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `headline` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `size` varchar(20) NOT NULL,
  `bed` varchar(10) NOT NULL,
  `bath` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proprty_list`
--

INSERT INTO `proprty_list` (`id`, `perps`, `picture`, `type`, `price`, `headline`, `address`, `size`, `bed`, `bath`) VALUES
(2, 'For Sell', 'property-1_(1).jpg', 'Appartment', '12,345', 'Golden Urban House For Sell', '123 Street, New York, USA', '1000', '3', '4'),
(7, 'For Rent', 'property-2_(1).jpg', 'Villa', '12,345', 'Golden Urban House For Sell', '123 Street, New York, USA', '1500', '3', '4'),
(8, 'For Rent', 'property-3_(1).jpg', 'Office', '12,345', 'Golden Urban House For Sell', '123 Street, New York, USA', '1000', '3', '4'),
(9, 'For Rent', 'property-4_(1).jpg', 'House', '12,345', 'Golden Urban House For Sell', '123 Street, New York, USA', '1500', '3', '4'),
(10, 'For Sale', 'property-5_(1).jpg', 'Villa', '12,340', 'Golden Urbann House For Sell', '123 Streett, New York, USA', '1501', '2', '3'),
(12, 'For Rent', 'property-6_(1).jpg', 'HousE', '12,400', 'Golden Urban House For Sell', '123 Street, New York, USA', '1500', '1', '1'),
(15, 'For Rent', 'men-01.jpg', 'Appartment', '1200', 'Golden Urban House For Sell', '123 Street, New York, USA', '1500', '4', '3'),
(16, 'For Rent', '330018530_670705058142844_4184054109777314107_n.jpg', 'Appartment', '12,400', 'Golden Urban House For Sell', '123 Street, New York, USA', '1500', '5', '4'),
(17, 'For Rent', 'kid-036.jpg', 'Appartment', '1200', 'Golden Urban House For Sell', '123 Street, New York, USA', '1500', '4', '3'),
(18, 'For Sell', '333593808_3664688710435489_5237373195740798268_n3.jpg', 'Office', '4500', 'Golden Urban House For Sell', '123 Street, New York, USA', '1500', '4', '4'),
(19, 'For Rent', '333593808_3664688710435489_5237373195740798268_n4.jpg', 'Appartment', '4500', 'Golden Urban House For Sell', '123 Street, New York, USA', '1500', '3', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proprty_list`
--
ALTER TABLE `proprty_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `contact_info`
--
ALTER TABLE `contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proprty_list`
--
ALTER TABLE `proprty_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

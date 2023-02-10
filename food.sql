-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 09:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adminsignup`
--

CREATE TABLE `adminsignup` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `confirmpassword` varchar(40) NOT NULL,
  `databirth` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminsignup`
--

INSERT INTO `adminsignup` (`id`, `username`, `email`, `password`, `confirmpassword`, `databirth`, `image`) VALUES
(8, 'Ch Akram', 'akram3912@gmail.com', '12345', '12345', '2001-10-31', 'adminpic/1657776832.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(114, 'Strawberry', '100', 'productimage/1657735575.jpg', '2'),
(115, 'Olivia', '1000', 'productimage/1657735213.jpg', '1'),
(116, 'Orange', '200', 'productimage/1657116498.jpg', '1'),
(117, 'Burger', '350', 'productimage/1656304598.jpg', '1'),
(118, 'Chicken', '200', 'productimage/1656304013.jpg', '1'),
(119, 'Banana juice', '50', 'productimage/1656304906.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(201, 'akram', 'Akram39123@gmail.com', '03043911435', 'Chichawatni', 'cod', 'Burger(1), Orange(1), Chicken(1)', '2800'),
(202, 'danish', 'danish2@gmail.com', '034343434343', 'lahore', 'cards', 'Vegetable(1), Egg Buns(1), Cow milk(1)', '550'),
(204, 'danish', 'danish2@gmail.com', '034034034034', 'sahiwal', 'cards', 'Rice(1)', '1500'),
(205, 'abdullah', 'abdullah39@gmail.com', '03003434423', 'karachi', 'cod', 'Chicken(1)', '200'),
(206, 'Usman', 'usman12@gmail.com', '034343434343', 'ookara', 'netbanking', 'Cow milk(1)', '100'),
(207, 'danish', 'Akram3911823@gmail.com', '034034034034', 'ccw', 'cards', 'Chicken(1)', '200');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `Productname` varchar(50) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `price` varchar(10000) NOT NULL,
  `image` varchar(50) NOT NULL,
  `pcode` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `Productname`, `quantity`, `price`, `image`, `pcode`) VALUES
(47, 'Meat', '1', '1000', 'productimage/1656299756.jpg', 0),
(48, 'Rice', '1', '1500', 'productimage/1656299916.jpg', 0),
(49, 'Chicken', '1', '200', 'productimage/1656304013.jpg', 0),
(50, 'Burger', '1', '350', 'productimage/1656304598.jpg', 0),
(51, 'Egg Buns', '1', '150', 'productimage/1656304672.jpg', 0),
(52, 'Peanut butter', '1', '400', 'productimage/1656304702.jpg', 0),
(53, 'Cow milk', '1', '100', 'productimage/1656304731.jpg', 0),
(55, 'Banana juice', '1', '50', 'productimage/1656304906.jpg', 0),
(56, 'Sauce', '1', '120', 'productimage/1656305157.jpg', 0),
(62, 'Orange', '1', '200', 'productimage/1657116498.jpg', 0),
(69, 'Olivia', '1', '1000', 'productimage/1657735213.jpg', 0),
(72, 'Strawberry', '1', '100', 'productimage/1657735575.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminsignup`
--
ALTER TABLE `adminsignup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminsignup`
--
ALTER TABLE `adminsignup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

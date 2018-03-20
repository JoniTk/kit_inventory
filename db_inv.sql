-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2018 at 07:19 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inv`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `customer_code` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_phone` varchar(24) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_notes` text NOT NULL,
  `customer_status` int(1) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `customer_code`, `customer_name`, `customer_address`, `customer_phone`, `customer_email`, `customer_notes`, `customer_status`, `login_id`) VALUES
(1, 'test_01', 'Test Islam', 'Test Address', '0102920983', 'test@test.com', 'test notes ', 1, 1),
(3, '10001', 'Test house', 'house', '01822270789', 'admin@gmail.com', 'Here comes notes', 1, 1),
(4, 'sadsad', 'sadasd', 'sadasd', 'asdasd', 'dsfs@g.com', 'sdfdsf', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_Fname` varchar(50) NOT NULL,
  `user_Lname` varchar(50) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `gender` int(1) NOT NULL,
  `dob` date NOT NULL,
  `user_image` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `user_Fname`, `user_Lname`, `user_pass`, `user_email`, `gender`, `dob`, `user_image`, `status`) VALUES
(1, 'admin', 'John', 'Doe', 'password', 'admin@admin.com', 1, '2018-03-01', 'http://localhost/inventory/userimg/avatar.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id` int(11) NOT NULL,
  `supplier_code` varchar(255) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `supplier_address` text NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `supplier_phone` varchar(24) NOT NULL,
  `supplier_notes` text NOT NULL,
  `supplier_status` int(1) NOT NULL,
  `login_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id`, `supplier_code`, `supplier_name`, `supplier_address`, `contact_person`, `supplier_phone`, `supplier_notes`, `supplier_status`, `login_id`) VALUES
(1, 'test_01', 'sdfdsf', 'sdfsd', 'fdsfdsf', 'dsfdsfsdf', 'dsfsdf', 1, 1),
(2, 'test_02', 'dfgdfgdf', 'gdfgdf', 'gdfg', 'dfgdfg', 'update notes', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
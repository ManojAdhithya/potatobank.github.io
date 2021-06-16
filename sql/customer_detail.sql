-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 01:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customer detail`
--

-- --------------------------------------------------------

--
-- Table structure for table `cust_det`
--

CREATE TABLE `cust_det` (
  `sno` int(10) NOT NULL COMMENT 'Serial Number',
  `name` varchar(50) NOT NULL COMMENT 'Name of the Customer',
  `Email` varchar(50) NOT NULL COMMENT 'Customer email',
  `Phone No` varchar(12) NOT NULL COMMENT 'Phone Number',
  `Balance` int(20) NOT NULL COMMENT 'Balance in the account'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_det`
--

INSERT INTO `cust_det` (`sno`, `name`, `Email`, `Phone No`, `Balance`) VALUES
(1, 'Mark Maayandi', 'markmaayandi@gmail.com', '9940000001', 61314),
(2, 'Muniyamma', 'muniyamma1211@gmail.com', '9940032145', 42069),
(3, 'Steve Wague', 'stevewague@yahoo.com', '9874654568', 985090),
(4, 'Child Chinna', 'childchinna@outlook.com', '9877546478', 875640),
(5, 'Motta Rajendran', 'motta19rajendran@gmail.com', '8795463127', 88475),
(6, 'Jack Dawson', 'jacktitanic@gmail.com', '7569846321', 1200),
(7, 'Rose DeWitt Bukater', 'rosejacktitanic@gmail.com', '9875756985', 904654),
(8, 'Rick Sanchez', 'picklerick@gmail.com', '9875756984', 7986540),
(9, 'Tun Tun', 'tuntunladoos@outlook.com', '6874563125', 62500),
(10, 'Sasuke Uchiha', 'sasuke25sharingan@gmail.com', '9876543210', 987654);

-- --------------------------------------------------------

--
-- Table structure for table `trans_his`
--

CREATE TABLE `trans_his` (
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans_his`
--

INSERT INTO `trans_his` (`sender`, `receiver`, `amount`, `date`) VALUES
('Mark Maayandi', 'Steve Wague', 435, '2021-06-15 13:50:01'),
('Steve Wague', 'Rose DeWitt Bukater', 5654, '2021-06-15 13:50:20'),
('Mark Maayandi', 'Tun Tun', 500, '2021-06-15 13:50:38'),
('Mark Maayandi', 'Steve Wague', 568, '2021-06-15 14:20:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cust_det`
--
ALTER TABLE `cust_det`
  ADD PRIMARY KEY (`sno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

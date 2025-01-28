-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2017 at 06:35 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dreamcity`
--

-- --------------------------------------------------------

--
-- Table structure for table `provisional_allotment_order`
--

CREATE TABLE `provisional_allotment_order` (
  `id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `dates` date NOT NULL,
  `member_ship_no` bigint(20) NOT NULL,
  `plot_no` varchar(255) NOT NULL,
  `sq_yard` int(11) NOT NULL,
  `person_name` varchar(255) NOT NULL,
  `father_mother_name` varchar(255) NOT NULL,
  `application_date` date NOT NULL,
  `nic_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provisional_allotment_order`
--

INSERT INTO `provisional_allotment_order` (`id`, `no`, `dates`, `member_ship_no`, `plot_no`, `sq_yard`, `person_name`, `father_mother_name`, `application_date`, `nic_no`) VALUES
(2, 99999, '2017-04-12', 9888, '9999', 76, 'arshad', 'musharraf', '2017-04-07', 4215544545);

-- --------------------------------------------------------

--
-- Table structure for table `registerd_letter`
--

CREATE TABLE `registerd_letter` (
  `id` int(11) NOT NULL,
  `share_money` varchar(255) NOT NULL,
  `rs1` bigint(20) NOT NULL,
  `membership_fees` varchar(255) NOT NULL,
  `rs2` bigint(20) NOT NULL,
  `total` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerd_letter`
--

INSERT INTO `registerd_letter` (`id`, `share_money`, `rs1`, `membership_fees`, `rs2`, `total`) VALUES
(1, 'sajid', 1000, '900', 200, 300),
(3, 'khalid', 700, '800', 200, 1700);

-- --------------------------------------------------------

--
-- Table structure for table `share_certificate`
--

CREATE TABLE `share_certificate` (
  `id` int(11) NOT NULL,
  `person_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `residing1` varchar(300) NOT NULL,
  `residing2` varchar(300) NOT NULL,
  `day` bigint(20) NOT NULL,
  `month` bigint(20) NOT NULL,
  `year` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `share_certificate`
--

INSERT INTO `share_certificate` (`id`, `person_name`, `father_name`, `residing1`, `residing2`, `day`, `month`, `year`) VALUES
(4, 'Arshad', 'Musharraf', 'gulshan', 'bahar', 7, 8, 1996),
(5, 'Jawad', 'iqbal', 'sareena', 'sareena', 3, 11, 1999);

-- --------------------------------------------------------

--
-- Table structure for table `site_plan`
--

CREATE TABLE `site_plan` (
  `id` int(11) NOT NULL,
  `plot_no` varchar(150) NOT NULL,
  `property_type` varchar(150) NOT NULL,
  `area_in_sq_yds` int(11) NOT NULL,
  `demarcated_by` varchar(150) NOT NULL,
  `drawn_by` varchar(150) NOT NULL,
  `checked_by` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_plan`
--

INSERT INTO `site_plan` (`id`, `plot_no`, `property_type`, `area_in_sq_yds`, `demarcated_by`, `drawn_by`, `checked_by`) VALUES
(8, '909', 'residential', 55, 'arshad@gmail.com', 'sajid@yahoo.com', 'seerena'),
(11, '21223', 'commercial', 100, 'arshad@gmail.com', 'sajid@yahoo.com', 'seerena'),
(12, '90-0', 'commercial', 99, 'arshad@gmail.com', 'sajid@yahoo.com', 'seerena');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'socialmarketing', 'info');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provisional_allotment_order`
--
ALTER TABLE `provisional_allotment_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registerd_letter`
--
ALTER TABLE `registerd_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share_certificate`
--
ALTER TABLE `share_certificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_plan`
--
ALTER TABLE `site_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provisional_allotment_order`
--
ALTER TABLE `provisional_allotment_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registerd_letter`
--
ALTER TABLE `registerd_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `share_certificate`
--
ALTER TABLE `share_certificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `site_plan`
--
ALTER TABLE `site_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

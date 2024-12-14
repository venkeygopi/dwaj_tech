-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2024 at 12:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dwaj_tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`, `date`) VALUES
(1, 'dwaj', '123', 'dwaj@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `descrp` longtext NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `title`, `link`, `descrp`, `thumbnail`, `date`) VALUES
(20, 'iot-this-is-iot-platform-nbsp-', 'iotggg@gmail.com', 'iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform iot this is iot platform&nbsp;&nbsp;<div>iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform iot this is iot platform&nbsp;&nbsp;</div><div>iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform&nbsp; iot this is iot platform iot this is iot platform&nbsp;&nbsp;</div>', 'download.jfif', '2024/12/14 04:55:31pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

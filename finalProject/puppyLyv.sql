-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2019 at 12:38 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puppyLyv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `breed_info`
--

CREATE TABLE `breed_info` (
  `id` int(11) NOT NULL,
  `breed` varchar(40) NOT NULL,
  `life_expectancy` varchar(40) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `breed_info`
--

INSERT INTO `breed_info` (`id`, `breed`, `life_expectancy`, `weight`, `height`) VALUES
(1, 'beagle', '10-15 years', 'under 20 pounds, 20-30 pounds(13-15 inches)', '13 inches and under, 13-15 inches'),
(2, 'corgi', '12-13 years', 'up to 30 pounds', '10-12 inches'),
(3, 'lhasa apso', '12-15 years', '12-18 pounds', '10-11 inches (male), slightly smaller female'),
(4, 'chihuahua', '14-16 years', 'not exceed 6 pounds', '5-8 inches'),
(5, 'german shepherd', '7-10 years', '65-90 pounds(male), 50-70 pounds(female)', '24-26 inches (male), 22-24 inches(female) '),
(6, 'golden retriever', '10-12 years', '65-75 pounds (male), 55-65 pounds (female)', '23-24 inches(male), 21.5-22.5 inches (female)'),
(7, 'husky', '12-14 years', '45-60 pounds', '21-23.5 inches(male), 20-22 inches(female)'),
(8, 'poodle', '10-18 years', '60-70 pounds(male), 40-50 pounds(female)', 'over 15 inches'),
(9, 'french bulldog', '10-12 years', 'under 28 pounds ', '11-13 inches'),
(10, 'pomeranian', '12-16 years ', '3-7 pounds', '6-7 inches ');

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `dog_id` int(11) NOT NULL,
  `image_url` varchar(512) NOT NULL,
  `breed` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`dog_id`, `image_url`, `breed`) VALUES
(1, 'https://pixabay.com/get/eb33b80628f7013ed1584d05fb1d4393eb7ee6d611ac104490f6c570a5ecbdbc_1280.jpg', 'beagle'),
(2, 'https://pixabay.com/get/ea33b00629f4033ed1584d05fb1d4393eb7ee6d611ac104490f6c570a5ecbdbc_1280.jpg', 'beagle'),
(3, 'https://pixabay.com/get/ea36b10928f7083ed1584d05fb1d4393eb7ee6d611ac104490f6c570a5efbcb9_1280.jpg', 'corgi'),
(4, 'https://pixabay.com/get/ea36b9062ff6083ed1584d05fb1d4393eb7ee6d611ac104490f6c570a5efbcb9_1280.jpg', 'corgi'),
(5, 'https://pixabay.com/get/e835b70e21f3073ed1584d05fb1d4393eb7ee6d611ac104490f6c570a5eeb3b8_1280.jpg', 'golden retriever'),
(6, 'https://pixabay.com/get/ea35b4072bfd023ed1584d05fb1d4393eb7ee6d611ac104490f6c570a5eeb3b8_1280.jpg', 'golden retriever'),
(7, 'https://pixabay.com/get/e835b3082af7043ed1584d05fb1d4393eb7ee6d611ac104490f6c570a5e9b0bc_1280.jpg', 'german shepherd'),
(8, 'https://pixabay.com/get/e832b10a20f61c22d2524518b749439eea73e1dd04b0144493f4c87ba3e8b1_1280.jpg', 'german shepherd'),
(9, 'https://pixabay.com/get/ed34b3092cfd003ed1584d05fb1d4393eb7ee6d611ac104490f6c570a5e8b3be_1280.jpg', 'chihuahua'),
(10, 'https://pixabay.com/get/eb33b00b21f41c22d2524518b749439eea73e1dd04b0144493f4c87ba2ebb3_1280.jpg', 'chihuahua'),
(11, 'https://pixabay.com/get/eb37b10c21f71c22d2524518b749439eea73e1dd04b0144493f4c87ba1e5b0_1280.jpg', 'lhasa apso'),
(12, 'https://pixabay.com/get/e833b50629f51c22d2524518b749439eea73e1dd04b0144493f4c87ba1e5b0_1280.jpg', 'lhasa apso'),
(13, 'https://pixabay.com/get/eb33b60e28f4073ed1584d05fb1d4393eb7ee6d611ac104490f6c570a4e8b3be_1280.jpg', 'husky'),
(14, 'https://pixabay.com/get/ef33b80b20f51c22d2524518b749439eea73e1dd04b0144493f4c87aa2ebb3_1280.jpg', 'husky'),
(15, 'https://pixabay.com/get/e836b20f2df0023ed1584d05fb1d4393eb7ee6d611ac104490f6c570a4ebb6bb_1280.jpg', 'poodle'),
(16, 'https://pixabay.com/get/eb37b10b2df31c22d2524518b749439eea73e1dd04b0144493f4c87aa1eeb6_1280.jpg', 'poodle'),
(17, 'https://pixabay.com/get/e831b0082afc093ed1584d05fb1d4393eb7ee6d611ac104490f6c570a4eab5ba_1280.jpg', 'french bulldog'),
(18, 'https://pixabay.com/get/eb30b20b2efc063ed1584d05fb1d4393eb7ee6d611ac104490f6c570a4eab6b8_1280.jpg', 'french bulldog'),
(19, 'https://pixabay.com/get/e834b30a28f31c22d2524518b749439eea73e1dd04b0144493f4c87aa0e5b3_1280.jpg', 'pomeranian'),
(20, 'https://pixabay.com/get/ea31b00a21fd003ed1584d05fb1d4393eb7ee6d611ac104490f6c570a4eabdbe_1280.jpg', 'pomeranian');

-- --------------------------------------------------------

--
-- Table structure for table `top3`
--

CREATE TABLE `top3` (
  `breed` varchar(50) NOT NULL,
  `img_url` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE `user_comments` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `comments` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_question`
--

CREATE TABLE `user_question` (
  `user_name` varchar(50) NOT NULL,
  `q1` varchar(150) NOT NULL,
  `q2` varchar(150) NOT NULL,
  `q3` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`dog_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `dog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

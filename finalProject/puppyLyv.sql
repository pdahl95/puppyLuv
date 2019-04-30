-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2019 at 10:58 PM
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
(1, 'https://www.pets4homes.co.uk/images/breeds/45/large/effe1a5f6e2d91436a33a90b92928386.jpg', 'beagle'),
(2, 'https://i.pinimg.com/originals/40/d1/9a/40d19a17a043c7084345b088142e3351.jpg', 'beagle'),
(3, 'https://www.thesprucepets.com/thmb/KEkwV1YeL3obCMo0YSPDXTCxjRA=/450x0/filters:no_upscale():max_bytes(150000):strip_icc()/19933184_104417643500613_5541725731421159424_n-5ba0548546e0fb0050edecc0.jpg', 'corgi'),
(4, 'https://vetstreet.brightspotcdn.com/dims4/default/79f1bd2/2147483647/crop/0x0%2B0%2B0/resize/645x380/quality/90/?url=https%3A%2F%2Fvetstreet-brightspot.s3.amazonaws.com%2F83%2F9e8de0a7f411e0a0d50050568d634f%2Ffile%2FPembroke-Welsh-Corgi-3-645mk62711.jpg', 'corgi'),
(5, 'https://s3.amazonaws.com/cdn-origin-etr.akc.org/wp-content/uploads/2017/11/12130118/Golden-Retriever-Standing1.jpg', 'golden retriever'),
(6, 'https://www.keystonepuppies.com/wp-content/uploads/2018/09/Golden-Retriever-Category.jpg', 'golden retriever'),
(7, 'https://goodpuppyfood.com/wp-content/uploads/2018/06/German-Shepherd-puppy-1024x1024.jpg', 'german shepherd'),
(8, 'https://www.yourpurebredpuppy.com/dogbreeds/photos2-G/german-shepherd-05.jpg\r\n', 'german shepherd'),
(9, 'https://s3.amazonaws.com/cdn-origin-etr.akc.org/wp-content/uploads/2017/11/12213613/Chihuahua-onWhite-13.jpg', 'chihuahua'),
(10, 'https://i.pinimg.com/originals/1d/c6/1e/1dc61ea9fee6c0532bc481573f129dc3.jpg', 'chihuahua'),
(11, 'https://c.stocksy.com/a/Oku300/z9/933124.jpg?1551798390', 'lhasa apso'),
(12, 'https://i.pinimg.com/originals/e4/9d/fb/e49dfb05f523cd159ba1bd061bda3658.jpg', 'lhasa apso'),
(13, 'https://i.pinimg.com/originals/3c/d2/a8/3cd2a844037b921028481f9f3f82d21f.jpg', 'husky'),
(14, 'https://i2.wp.com/www.cutepuppiesnow.com/wp-content/uploads/2017/04/Cute_Husky_Puppies-10.jpg', 'husky'),
(15, 'https://i.pinimg.com/originals/91/48/f4/9148f49f6eb30cc350f1b1d297be0f46.jpg', 'poodle'),
(16, 'https://dgicdplf3pvka.cloudfront.net/images/dogbreeds/large/Poodle-Toy.jpg', 'poodle'),
(17, 'https://pixabay.com/get/e831b0082afc093ed1584d05fb1d4393eb7ee6d611ac104490f6c570a4eab5ba_1280.jphttps://secure.img1-fg.wfcdn.com/im/04925927/resize-h800-w800%5Ecompr-r85/4307/43074644/Sleeping++French+Bulldog+Puppy+Statue.jpg', 'french bulldog'),
(18, 'https://images.fineartamerica.com/images-medium-large-5/french-bulldog-puppy-in-garden-greg-cuddiford.jpg', 'french bulldog'),
(19, 'https://vippuppies.com/wp-content/uploads/2016/11/Pomeranian-e1479160880260.jpg', 'pomeranian'),
(20, 'https://thehappypuppysite.com/wp-content/uploads/2018/07/white-pomeranian-long-1024x555.jpg', 'pomeranian');

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

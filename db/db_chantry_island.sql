-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 10, 2017 at 12:12 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: db_chantry_island
--

-- --------------------------------------------------------

--
-- Table structure for table tbl_gallery
--

CREATE TABLE tbl_gallery (
  gallery_id tinyint(3) unsigned NOT NULL,
  gallery_img varchar(150) NOT NULL DEFAULT 'default.jpg',
  gallery_desc varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table tbl_gallery
--

INSERT INTO tbl_gallery (gallery_id, gallery_img, gallery_desc) VALUES
(1, 'img-1.jpg', 'Photo by Karen Smith.'),
(2, 'img-2.jpg', 'Photo by Karen Smith.'),
(3, 'img-3.jpg', 'Photo by Karen Smith.'),
(4, 'img-4.jpg', 'Photo by Carol Walberg.'),
(5, 'img-5.jpg', 'Photo by Vicki Tomori.'),
(6, 'img-6.jpg', 'Photo by Nancy Calder.'),
(7, 'img-7.jpg', 'Photo by Nancy Calder.'),
(8, 'img-8.jpg', 'Photo by Nancy Calder.'),
(9, 'img-9.jpg', 'Photo by Terry Thomas.'),
(10, 'img-10.jpg', 'Photo by Vicki Tomori.'),
(11, 'img-11.jpg', 'Photo by James Swartz.'),
(12, 'img-12.jpg', 'Photo by Vicki Tomori.'),
(13, 'img-13.jpg', 'Photo by Vicki Tomori.'),
(14, 'img-14.jpg', 'Photo by Vicki Tomori.'),
(15, 'img-15.jpg', 'Photo by Vicki Tomori.'),
(16, 'img-16.jpg', 'Photo by Terry Thomas.'),
(17, 'img-17.jpg', 'Photo by Vicki Tomori.'),
(18, 'img-18.jpg', 'Photo by Wayne MacDonald.'),
(19, 'img-19.jpg', 'Photo by James Swartz.'),
(20, 'img-20.jpg', 'Photo by Karen Smith.');

-- --------------------------------------------------------

--
-- Table structure for table tbl_user
--

CREATE TABLE tbl_user (
  user_id tinyint(3) unsigned NOT NULL,
  user_name varchar(100) NOT NULL,
  user_pass varchar(75) NOT NULL,
  user_ip varchar(50) NOT NULL,
  user_level varchar(100) NOT NULL DEFAULT '1',
  user_email varchar(100) NOT NULL,
  user_loginAttempt varchar(10) NOT NULL DEFAULT '0',
  user_lastlogin varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_user
--

INSERT INTO tbl_user (user_id, user_name, user_pass, user_ip, user_level, user_email, user_loginAttempt, user_lastlogin) VALUES
(1, 'admin', 'cf06d2b4550802f1f8d8473b6812172b42fc662479e8e6f2fe70d9c58f30629f', '::1', '1', 'dyson_ryan@hotmail.com', '0', 'March 9, 2017, 6:11 pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_gallery
--
ALTER TABLE tbl_gallery
  ADD PRIMARY KEY (gallery_id);

--
-- Indexes for table tbl_user
--
ALTER TABLE tbl_user
  ADD PRIMARY KEY (user_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_gallery
--
ALTER TABLE tbl_gallery
  MODIFY gallery_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_user
--
ALTER TABLE tbl_user
  MODIFY user_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

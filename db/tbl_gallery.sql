-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 04, 2017 at 07:52 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

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
  gallery_id tinyint(3) UNSIGNED NOT NULL,
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_gallery
--
ALTER TABLE tbl_gallery
  ADD PRIMARY KEY (gallery_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_gallery
--
ALTER TABLE tbl_gallery
  MODIFY gallery_id tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

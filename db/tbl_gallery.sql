-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 04, 2017 at 03:54 AM
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
(1, 'img-1.jpg', 'Aerial view of Chantry Island and the Saugeen River mouth in Southhampton, Ontario. Photo by Karen Smith.'),
(2, 'img-2.jpg', 'Aerial view of Chantry Island and the Saugeen River mouth in Southhampton, Ontario. Photo by Karen Smith.'),
(3, 'img-3.jpg', 'Aerial view of Chantry Island and the Saugeen River mouth in Southhampton, Ontario. Photo by Karen Smith.'),
(4, 'img-4.jpg', 'Chantry Island Lighthouse. Photo by Carol Walberg.'),
(5, 'img-5.jpg', 'Chantry Island Lighthouse. Photo by Donna Savoy.'),
(6, 'default.jpg', 'Image not found'),
(7, 'img-7.jpg', 'Chantry Island Birds. Photo by Nancy Calder.'),
(8, 'img-8.jpg', 'Chantry Island Birds. Photo by Nancy Calder.'),
(9, 'img-9.jpg', 'Inside Light Keeper\'s Cottage. Photo by George Plant.'),
(10, 'img-10.jpg', 'Inside Light Keeper\'s Cottage. Photo by George Plant.'),
(11, 'img-11.jpg', 'Chantry Island Birds. Photo by Nancy Calder.'),
(12, 'img-12.jpg', 'Inside Light Keeper\'s Cottage. Photo by George Plant.'),
(13, 'default.jpg', 'Image not found'),
(14, 'img-14.jpg', 'Chantry Island Gardens. Photo by Donna Savoy.'),
(15, 'img-15.jpg', 'Chantry Island Gardens. Photo by Donna Savoy.'),
(16, 'default.jpg', 'Image not found'),
(17, 'default.jpg', 'Image not found'),
(18, 'img-18.jpg', 'Chantry Island Lighthouse. Photo by Carol Walberg.'),
(19, 'img-19.jpg', 'Aerial views of Chantry Island and the Saugeen River mouth in Southampton, Ontario. A photo by James Swartz.'),
(20, 'default.jpg', 'Image not found');

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

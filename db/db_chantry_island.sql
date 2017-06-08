-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 30, 2017 at 09:35 AM
-- Server version: 5.6.35-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 'db_chantry_island'
--

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_arrive'
--

CREATE TABLE IF NOT EXISTS tbl_arrive (
  arrive_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  arrive_desc text NOT NULL,
  PRIMARY KEY (arrive_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_arrive'
--

INSERT INTO tbl_arrive (arrive_id, arrive_desc) VALUES
(1, 'Come to the Chantry Island Tour Base and Gift Shop located at the south side of the Saugeen River at the harbour in Southampton (see map) and arrive 15 minutes ahead of your scheduled tour. Check in and receive your ticket. You will be directed to the dock for the Peerless II.');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_birds'
--

CREATE TABLE IF NOT EXISTS tbl_birds (
  birds_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  birds_desc text NOT NULL,
  PRIMARY KEY (birds_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_birds'
--

INSERT INTO tbl_birds (birds_id, birds_desc) VALUES
(1, 'In 1957 the Canadian Wildlife Service declared Chantry Island a Federal Migratory Bird Sanctuary to protect the migratory and nesting birds of the island. It is the largest Federal Migratory Bird Sanctuary between James Bay and Point Pelee. There are approximately fifty thousand birds (including chicks) on the island during the breeding season. It is home to nesting colonies of Great Blue Heron, Great Egret, Black-crowned Night-Heron, Herring Gull, Ring-billed Gull and Double-crested Cormorant. Water fowl such as Mallard, American Black Duck, Gadwall, Blue-winged Teal, Green-winged Teal, Northern Pintail, and American Wigeon are also known nesters on the island.');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_bookInfo'
--

CREATE TABLE IF NOT EXISTS tbl_bookInfo (
  bookInfo_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  bookInfo_desc text NOT NULL,
  PRIMARY KEY (bookInfo_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_bookInfo'
--

INSERT INTO tbl_bookInfo (bookInfo_id, bookInfo_desc) VALUES
(1, 'We offer tours throughout the summer season from late May to mid-September. During June and July, we offer the tour daily, check below for the exact schedule. Note, it does change on a yearly basis.');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_breakingBar'
--

CREATE TABLE IF NOT EXISTS tbl_breakingBar (
  breakingBar_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  breakingBar_title varchar(100) NOT NULL,
  breakingBar_link text NOT NULL,
  PRIMARY KEY (breakingBar_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_breakingBar'
--

INSERT INTO tbl_breakingBar (breakingBar_id, breakingBar_title, breakingBar_link) VALUES
(1, 'Marine Heritage Festival July 28-30, 2017', 'https://ourexpressionstudio.com/chantryIsland2017/events.php');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_events'
--

CREATE TABLE IF NOT EXISTS tbl_events (
  events_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  events_title varchar(100) NOT NULL,
  events_date varchar(50) NOT NULL,
  events_thumb varchar(100) NOT NULL DEFAULT 'eventDefault.jpg',
  events_content text NOT NULL,
  PRIMARY KEY (events_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_events'
--

INSERT INTO tbl_events (events_id, events_title, events_date, events_thumb, events_content) VALUES
(5, 'Marine Heritage Festival July 28-30, 2017', 'May 25, 2017', 'Marine Festival.jpg', 'Captain Wayne Sparrow is looking at all the Cardboat Boat entries.  Watch this space for further information.');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_gallery'
--

CREATE TABLE IF NOT EXISTS tbl_gallery (
  gallery_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  gallery_img varchar(150) NOT NULL DEFAULT 'default.jpg',
  gallery_desc varchar(500) NOT NULL,
  PRIMARY KEY (gallery_id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

--
-- Dumping data for table 'tbl_gallery'
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
-- Table structure for table 'tbl_header'
--

CREATE TABLE IF NOT EXISTS tbl_header (
  header_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  header_title varchar(100) NOT NULL,
  header_desc text NOT NULL,
  PRIMARY KEY (header_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_header'
--

INSERT INTO tbl_header (header_id, header_title, header_desc) VALUES
(1, 'Discover Chantry Island - Book your tour today - 519.797.5862', 'Stroll back in time with a visit to the Keeper&#39;s Cottage, restored to its original 1800s condition, and decorated with period furnishings. Marvel at the wonders of nature with a walk through the protected bird sanctuary, and surrounding gardens. Chantry Island Tours are brought to you by The Southampton Marine Heritage Society, a tireless group of dedicated volunteers.');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_hours'
--

CREATE TABLE IF NOT EXISTS tbl_hours (
  hours_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  hours_month varchar(50) NOT NULL,
  hours_tours_1 varchar(150) NOT NULL,
  hours_tours_2 varchar(150) NOT NULL,
  hours_shop_1 varchar(150) NOT NULL,
  hours_shop_2 varchar(150) NOT NULL,
  PRIMARY KEY (hours_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_hours'
--

INSERT INTO tbl_hours (hours_id, hours_month, hours_tours_1, hours_tours_2, hours_shop_1, hours_shop_2) VALUES
(1, 'MAY', '27th-28th: 1:00pm, 3:00pm', '', '27th-28th: 12:00pm - 5:30pm', ''),
(2, 'JUNE', 'Weekends: 1:00pm, 3:00pm', '', 'Weekends: 12:00pm - 5:30pm', ''),
(3, 'JULY', 'Weekdays: 1:00pm, 3:00pm', 'Weekends: 9:30am, 1:00pm, 3:00pm', '7 days a week: 9:00am - 5:30pm', ''),
(4, 'AUGUST', '7 days a week: 9:30am, 1:00pm, 3:00pm', '', '7 days a week: 9:00am - 5:30pm', ''),
(5, 'SEPTEMBER', '1st-4th: 1:00pm, 3:00pm', '', '1st-4th: 9:00am - 5:30pm', '');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_news'
--

CREATE TABLE IF NOT EXISTS tbl_news (
  news_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  news_title varchar(150) NOT NULL,
  news_date varchar(50) NOT NULL,
  news_thumb varchar(200) NOT NULL,
  news_content text NOT NULL,
  PRIMARY KEY (news_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_news'
--

INSERT INTO tbl_news (news_id, news_title, news_date, news_thumb, news_content) VALUES
(6, 'Peerless II heading back from Chantry Island', 'May 25, 2017', 'Peerless II  Chantry Island.jpg', 'Volunteers have worked hard to prepare Chantry Island for the 17the Season of Tours.'),
(7, 'Chantry Island Tour Base and Gift Shop', 'May 25, 2017', 'Inside Chantry Tour Base 2  GD.JPG', 'The gift shop is where you can book your tour to Chantry Island and has a very unique mixture of souvenir and one of a kind hand crafted gifts. '),
(8, 'Marine Heritage Festival July 28-30, 2017', 'May 25, 2017', 'Marine Heritage Festival.jpg', 'Mark your calendar for this Fun Family Festival. '),
(9, 'Fanshawe Students Develop new Website for Marine Heritage Society for our Chantry Island Tours', 'May 25,2017', 'IMG_1389.JPG', 'The Southampton Marine Heritage Society would like to send out a huge Thanks to Professor Justin Brunner and his students who developed a new website for the Marine Heritage Society to help us promote The Chantry Island Tours.  This was done as a whole class project with 26 websites developed and with the help of our volunteers they narrowed it down to 10 then to 4 and then to this new site.  What a wonderful way for our volunteer group to get students involved.');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_rates'
--

CREATE TABLE IF NOT EXISTS tbl_rates (
  rates_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  rates_info varchar(200) NOT NULL,
  PRIMARY KEY (rates_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_rates'
--

INSERT INTO tbl_rates (rates_id, rates_info) VALUES
(1, '30.00');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_user'
--

CREATE TABLE IF NOT EXISTS tbl_user (
  user_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  user_name varchar(100) NOT NULL,
  user_pass varchar(75) NOT NULL,
  user_ip varchar(50) NOT NULL,
  user_level varchar(100) NOT NULL DEFAULT '1',
  user_email varchar(100) NOT NULL,
  user_loginAttempt varchar(10) NOT NULL DEFAULT '0',
  user_lastlogin varchar(100) NOT NULL,
  user_logins int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (user_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_user'
--

INSERT INTO tbl_user (user_id, user_name, user_pass, user_ip, user_level, user_email, user_loginAttempt, user_lastlogin, user_logins) VALUES
(1, 'admin', '31d667fd3527c8e884774c1104ab3bc43cd7b0c7c3ff4bc238527d21906d8879', '173.34.1.125', '1', 'dyson_ryan@hotmail.com', '0', 'May 28, 2017, 9:29 pm', 0),
(2, 'rdyson', '7d49dacaef90b0ab95cf69a1ff4a1de1636bb33137b9da70874bb757d7cc73f8', '0', '2', 'rdyson@uwo.ca', '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_video'
--

CREATE TABLE IF NOT EXISTS tbl_video (
  video_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  video_desc text NOT NULL,
  video_link varchar(200) NOT NULL,
  PRIMARY KEY (video_id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_video'
--

INSERT INTO tbl_video (video_id, video_desc, video_link) VALUES
(1, 'Come out to breathtaking Southampton Ontario and take in the sights and sounds of Chantry Island. Take a tour of the Light Keeper&#39;s Cottage and climb the 106 steps to the top of the lighthouse tower for an unparalleled view of the area.\r\n<br><br>\r\nThe island is also a Federal Migratory Bird Sanctuary. With approximately 50,000 birds on the island during the breeding season, it is surely a sight to behold.', 'https://www.youtube.com/watch?v=7AGUaUcupss');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_volunteer'
--

CREATE TABLE IF NOT EXISTS tbl_volunteer (
  volunteer_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  volunteer_name varchar(100) NOT NULL,
  volunteer_pos varchar(100) NOT NULL,
  volunteer_img varchar(100) NOT NULL DEFAULT 'eventDefault.jpg',
  PRIMARY KEY (volunteer_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

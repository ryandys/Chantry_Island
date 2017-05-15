-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 14, 2017 at 01:18 AM
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
-- Table structure for table tbl_arrive
--

CREATE TABLE tbl_arrive (
  arrive_id tinyint(3) unsigned NOT NULL,
  arrive_desc text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_arrive
--

INSERT INTO tbl_arrive (arrive_id, arrive_desc) VALUES
(1, 'Come to the Chantry Island Tour Base and Gift Shop located at the south side of the Saugeen River at the harbour in Southampton (see map) and arrive 15 minutes ahead of your scheduled tour. Check in and receive your ticket. You will be directed to the dock for the Peerless II.');

-- --------------------------------------------------------

--
-- Table structure for table tbl_birds
--

CREATE TABLE tbl_birds (
  birds_id tinyint(3) unsigned NOT NULL,
  birds_desc text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_birds
--

INSERT INTO tbl_birds (birds_id, birds_desc) VALUES
(1, 'In 1957 the Canadian Wildlife Service declared Chantry Island a Federal Migratory Bird Sanctuary to protect the migratory and nesting birds of the island. It is the largest Federal Migratory Bird Sanctuary between James Bay and Point Pelee. There are approximately fifty thousand birds (including chicks) on the island during the breeding season. It is home to nesting colonies of Great Blue Heron, Great Egret, Black-crowned Night-Heron, Herring Gull, Ring-billed Gull and Double-crested Cormorant. Water fowl such as Mallard, American Black Duck, Gadwall, Blue-winged Teal, Green-winged Teal, Northern Pintail, and American Wigeon are also known nesters on the island.');

-- --------------------------------------------------------

--
-- Table structure for table tbl_bookInfo
--

CREATE TABLE tbl_bookInfo (
  bookInfo_id tinyint(3) unsigned NOT NULL,
  bookInfo_desc text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_bookInfo
--

INSERT INTO tbl_bookInfo (bookInfo_id, bookInfo_desc) VALUES
(1, 'We offer tours throughout the summer season from late May to mid-September. During June and July, we offer the tour daily, check below for the exact schedule. Note, it does change on a yearly basis.');

-- --------------------------------------------------------

--
-- Table structure for table tbl_breakingBar
--

CREATE TABLE tbl_breakingBar (
  breakingBar_id tinyint(3) unsigned NOT NULL,
  breakingBar_title varchar(100) NOT NULL,
  breakingBar_link text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_breakingBar
--

INSERT INTO tbl_breakingBar (breakingBar_id, breakingBar_title, breakingBar_link) VALUES
(1, 'Marine Heritage Festival!', 'https://ourexpressionstudio.com/chantryIsland2017/events.php');

-- --------------------------------------------------------

--
-- Table structure for table tbl_events
--

CREATE TABLE tbl_events (
  events_id tinyint(3) unsigned NOT NULL,
  events_title varchar(100) NOT NULL,
  events_date varchar(50) NOT NULL,
  events_thumb varchar(100) NOT NULL DEFAULT 'eventDefault.jpg',
  events_content text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_events
--

INSERT INTO tbl_events (events_id, events_title, events_date, events_thumb, events_content) VALUES
(1, 'Christmas Parade Southampton 2016', 'December 2nd, 2016', 'eventDefault.jpg', 'The Southampton Christmas Parade always takes place on the First Friday in December. We will be preparing the Peerless II for this annual tradition. Decoration and theme will take place in the Southampton Boathouse the week before. Come and join us and get to be a part of a great group of volunteers sailing down High Street'),
(2, 'Marine Heritage Society / Propeller Club AGM 2016', 'September 30th, 2016', 'eventDefault.jpg', 'The Annual Marine Heritage Society and Propeller Club AGM will take place on Friday, November 25, 2016. Location will be at the Walker House in Southampton. Roast Beef or Chicken are the choices for food. Tickets will be on sale at the Propeller Club meetings and through Marine Heritage Board members. Continue to check postings for further information.'),
(3, 'Doug Johnsons 91st Birthday', 'January 10th, 2017', 'eventDefault.jpg', 'Doug is one of the oldest supporters of the Chantry Island project.'),
(4, 'Retiring from Marine Heritage Board', 'February 28th, 2017', 'eventDefault.jpg', 'Don Nicholson informed the Marine Heritage Board of Directors that he will be stepping aside, as a board member, effective February 28, 2017. Thank you for the opportunity to serve the community of Saugeen Shores by working and volunteering for the Marine Heritage Society,  Chantry Island Tours, and the Propeller Club.    I wish you all the best and continued success in the operation of the Chantry Island Tours. I plan to continue volunteering and support the restoration, tours, projects and help in the transition as past President and Chair.');

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
-- Table structure for table tbl_homeHeader
--

CREATE TABLE tbl_homeHeader (
  homeHeader_id tinyint(3) unsigned NOT NULL,
  homeHeader_title varchar(100) NOT NULL,
  homeHeader_desc text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_homeHeader
--

INSERT INTO tbl_homeHeader (homeHeader_id, homeHeader_title, homeHeader_desc) VALUES
(1, 'Discover Chantry Island - Book your tour today!', 'Stroll back in time with a visit to the Keeper''s Cottage, restored to its original 1800s condition, and decorated with period furnishings. Marvel at the wonders of nature with a walk through the protected bird sanctuary, and surrounding gardens. Chantry Island Tours are brought to you by The Southampton Marine Heritage Society, a tireless group of dedicated volunteers.');

-- --------------------------------------------------------

--
-- Table structure for table tbl_hours
--

CREATE TABLE tbl_hours (
  hours_id tinyint(3) unsigned NOT NULL,
  hours_month varchar(50) NOT NULL,
  hours_tours_1 varchar(150) NOT NULL,
  hours_tours_2 varchar(150) NOT NULL,
  hours_shop_1 varchar(150) NOT NULL,
  hours_shop_2 varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_hours
--

INSERT INTO tbl_hours (hours_id, hours_month, hours_tours_1, hours_tours_2, hours_shop_1, hours_shop_2) VALUES
(1, 'MAY', '27th-28th: 1:00pm, 3:00pm', '', '27th-28th: 12:00pm - 5:30pm', ''),
(2, 'JUNE', 'Weekends: 1:00pm, 3:00pm', '', '17th-18th: 12:00pm - 5:30pm', '24th-25th: 12:00pm - 5:30pm'),
(3, 'JULY', 'Weekdays: 1:00pm, 3:00pm', 'Weekends: 9:30am, 1:00pm, 3:00pm', 'Weekdays: 9:00am - 5:30pm', 'Weekends: 9:00am - 5:30pm'),
(4, 'AUGUST', 'Weekdays: 9:30am, 1:00pm, 3:00pm', 'Weekends: 9:30am, 1:00pm, 3:00pm', 'Weekdays: 9:00am - 5:30pm', 'Weekends: 9:00am - 5:30pm'),
(5, 'SEPTEMBER', '1st-4th: 1:00pm, 3:00pm', '', '1st-4th: 9:00am - 5:30pm', '');

-- --------------------------------------------------------

--
-- Table structure for table tbl_news
--

CREATE TABLE tbl_news (
  news_id tinyint(3) unsigned NOT NULL,
  news_title varchar(150) NOT NULL,
  news_date varchar(50) NOT NULL,
  news_thumb varchar(200) NOT NULL,
  news_content text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_news
--

INSERT INTO tbl_news (news_id, news_title, news_date, news_thumb, news_content) VALUES
(1, 'Southampton Christmas Parade', 'December 2nd, 2016', 'news_img_4.jpg', 'The Peerless II outside the Boathouse in southampton. Photo courtesy Eric Rogers.'),
(2, 'Chantry Island Tour Base', 'January 8th, 2017', 'news_img_3.jpg', 'Inside the Chantry Island Tour Base, where tickets can be purchased for the tours to Chantry Island. The Tour Base will open again in June.'),
(3, 'Doug Johnsons 91st Birthday', 'January 10th, 2017', 'news_img_2.jpg', 'Doug Johnson is giving a short talk about his history with the Propeller Club. He is one of our strongest supporters.'),
(4, 'Doug Johnson Proudly Displays the Famous Saying', 'January 18th, 2017', 'news_img_1.jpg', 'Doug Johnson proudly displays the famous ''Don''t give up the ship'' saying on his hat.'),
(5, 'Paddles and Pieces', 'March 1st, 2017', 'news_img_5.jpg', 'Oars, paddles and pieces of the Tilbury are currently being painted and repaired in preparation of an early Spring and Island work.');

-- --------------------------------------------------------

--
-- Table structure for table tbl_rates
--

CREATE TABLE tbl_rates (
  rates_id tinyint(3) unsigned NOT NULL,
  rates_info varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_rates
--

INSERT INTO tbl_rates (rates_id, rates_info) VALUES
(1, '30.00');

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
  user_lastlogin varchar(100) NOT NULL,
  user_logins int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_user
--

INSERT INTO tbl_user (user_id, user_name, user_pass, user_ip, user_level, user_email, user_loginAttempt, user_lastlogin, user_logins) VALUES
(1, 'admin', '31d667fd3527c8e884774c1104ab3bc43cd7b0c7c3ff4bc238527d21906d8879', '::1', '1', 'dyson_ryan@hotmail.com', '0', 'May 13, 2017, 7:03 pm', 0),
(2, 'rdyson', '7d49dacaef90b0ab95cf69a1ff4a1de1636bb33137b9da70874bb757d7cc73f8', '0', '2', 'rdyson@uwo.ca', '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table tbl_video
--

CREATE TABLE tbl_video (
  video_id tinyint(3) unsigned NOT NULL,
  video_desc text NOT NULL,
  video_link varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_video
--

INSERT INTO tbl_video (video_id, video_desc, video_link) VALUES
(1, 'Come out to breathtaking Southampton Ontario and take in the sights and sounds of Chantry Island. Take a tour of the Light Keeper''s Cottage and climb the 106 steps to the top of the lighthouse tower for an unparalleled view of the area.\r\n\r\nThe island is also a Federal Migratory Bird Sanctuary. With approximately 50,000 birds on the island during the breeding season, it is surely a sight to behold.', 'https://www.youtube.com/watch?v=7AGUaUcupss');

-- --------------------------------------------------------

--
-- Table structure for table tbl_volunteer
--

CREATE TABLE tbl_volunteer (
  volunteer_id tinyint(3) unsigned NOT NULL,
  volunteer_name varchar(100) NOT NULL,
  volunteer_pos varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table tbl_volunteer
--

INSERT INTO tbl_volunteer (volunteer_id, volunteer_name, volunteer_pos) VALUES
(1, 'Don Nicholson', 'Chairman'),
(2, 'Pat O-Connor', 'Vice Chairman'),
(3, 'John Rigby', 'Treasurer'),
(4, 'Stan Young', 'Secretary'),
(5, 'Rick Smith', 'Past Chairman'),
(6, 'Ali Kelly', 'Chantry Island Volunteer'),
(7, 'Jane Kramer', 'Chantry Island Volunteer'),
(8, 'Vicki Tomori', 'Chantry Island Volunteer'),
(9, 'Dan Holmes', 'Chantry Island Volunteer'),
(10, 'Dave Wenn', 'Chantry Island Volunteer'),
(11, 'Ed Braun', 'Chantry Island Volunteer'),
(12, 'John Willetts', 'Chantry Island Volunteer'),
(13, 'Peter Williamson', 'Observer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table tbl_arrive
--
ALTER TABLE tbl_arrive
  ADD PRIMARY KEY (arrive_id);

--
-- Indexes for table tbl_birds
--
ALTER TABLE tbl_birds
  ADD PRIMARY KEY (birds_id);

--
-- Indexes for table tbl_bookInfo
--
ALTER TABLE tbl_bookInfo
  ADD PRIMARY KEY (bookInfo_id);

--
-- Indexes for table tbl_breakingBar
--
ALTER TABLE tbl_breakingBar
  ADD PRIMARY KEY (breakingBar_id);

--
-- Indexes for table tbl_events
--
ALTER TABLE tbl_events
  ADD PRIMARY KEY (events_id);

--
-- Indexes for table tbl_gallery
--
ALTER TABLE tbl_gallery
  ADD PRIMARY KEY (gallery_id);

--
-- Indexes for table tbl_homeHeader
--
ALTER TABLE tbl_homeHeader
  ADD PRIMARY KEY (homeHeader_id);

--
-- Indexes for table tbl_hours
--
ALTER TABLE tbl_hours
  ADD PRIMARY KEY (hours_id);

--
-- Indexes for table tbl_news
--
ALTER TABLE tbl_news
  ADD PRIMARY KEY (news_id);

--
-- Indexes for table tbl_rates
--
ALTER TABLE tbl_rates
  ADD PRIMARY KEY (rates_id);

--
-- Indexes for table tbl_user
--
ALTER TABLE tbl_user
  ADD PRIMARY KEY (user_id);

--
-- Indexes for table tbl_video
--
ALTER TABLE tbl_video
  ADD PRIMARY KEY (video_id);

--
-- Indexes for table tbl_volunteer
--
ALTER TABLE tbl_volunteer
  ADD PRIMARY KEY (volunteer_id);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table tbl_arrive
--
ALTER TABLE tbl_arrive
  MODIFY arrive_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_birds
--
ALTER TABLE tbl_birds
  MODIFY birds_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_bookInfo
--
ALTER TABLE tbl_bookInfo
  MODIFY bookInfo_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_breakingBar
--
ALTER TABLE tbl_breakingBar
  MODIFY breakingBar_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_events
--
ALTER TABLE tbl_events
  MODIFY events_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_gallery
--
ALTER TABLE tbl_gallery
  MODIFY gallery_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_homeHeader
--
ALTER TABLE tbl_homeHeader
  MODIFY homeHeader_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_hours
--
ALTER TABLE tbl_hours
  MODIFY hours_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_news
--
ALTER TABLE tbl_news
  MODIFY news_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_rates
--
ALTER TABLE tbl_rates
  MODIFY rates_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_user
--
ALTER TABLE tbl_user
  MODIFY user_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_video
--
ALTER TABLE tbl_video
  MODIFY video_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table tbl_volunteer
--
ALTER TABLE tbl_volunteer
  MODIFY volunteer_id tinyint(3) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

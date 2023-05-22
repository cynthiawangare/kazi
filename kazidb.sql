-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2022 at 05:31 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kazidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `completedvideos`
--

CREATE TABLE `completedvideos` (
  `completedvideos_id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `cvid` int(11) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `date` timestamp NULL DEFAULT current_timestamp(),
  `isdeleted` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `completedvideos`
--

INSERT INTO `completedvideos` (`completedvideos_id`, `uid`, `cvid`, `status`, `date`, `isdeleted`) VALUES
(1, 7, 25, 'Completed', '2022-04-13 14:50:43', 0),
(2, 7, 25, 'Completed', '2022-04-13 14:50:56', 0),
(3, 7, 23, 'Completed', '2022-04-13 14:56:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `constituents`
--

CREATE TABLE `constituents` (
  `constituents_id` int(11) NOT NULL,
  `county` text DEFAULT NULL,
  `constituency` text DEFAULT NULL,
  `is_deleted` int(2) NOT NULL DEFAULT 0,
  `location_marker` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constituents`
--

INSERT INTO `constituents` (`constituents_id`, `county`, `constituency`, `is_deleted`, `location_marker`) VALUES
(7, '7', 'Westlands', 0, ''),
(8, '7', 'Parklands', 0, ''),
(9, '7', 'Dagoretti', 0, ''),
(10, '7', 'Karen/Langata', 0, ''),
(11, '7', 'Kibera', 0, ''),
(12, '7', 'Roysambu', 0, ''),
(13, '7', 'Ruaraka', 0, ''),
(14, '7', 'Kariobangi', 0, ''),
(15, '7', 'kayole', 0, ''),
(16, '7', 'Embakasi', 0, ''),
(17, '7', 'Mihango', 0, ''),
(18, '7', 'Makadara', 0, ''),
(19, '7', 'kamukunjii', 0, ''),
(20, '7', 'Starehe', 0, ''),
(21, '7', 'Mathare', 0, ''),
(22, '22', 'Gatundu South', 0, ''),
(23, '22', 'Juja', 0, ''),
(24, '22', 'Gatundu North', 0, ''),
(25, '22', 'Thika Town', 0, ''),
(26, '22', 'Ruiru', 0, ''),
(27, '22', 'Githunguri', 0, ''),
(28, '22', 'Kiambu', 0, ''),
(29, '22', 'Kabete', 0, ''),
(30, '22', 'Kikuyu', 0, ''),
(31, '22', 'Limuru', 0, ''),
(32, '22', 'Lari', 0, ''),
(44, '44', 'Molo', 0, ''),
(45, '44', 'Njoro', 0, ''),
(46, '44', 'Naivasha', 0, ''),
(47, '44', 'Gilgil', 0, ''),
(48, '44', 'Kuresoi South', 0, ''),
(49, '44', 'Kuresoi North', 0, ''),
(50, '44', 'Subukia', 0, ''),
(51, '44', 'Rongai', 0, ''),
(52, '44', 'Bahati', 0, ''),
(53, '44', 'Nakuru Town West', 0, ''),
(54, '44', 'Nakuru Town East', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseID` int(11) NOT NULL,
  `coursedescription` text NOT NULL,
  `coursename` text NOT NULL,
  `category` text NOT NULL,
  `isactive` int(11) NOT NULL DEFAULT 0,
  `isdeleted` int(11) DEFAULT 0,
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `coursedescription`, `coursename`, `category`, `isactive`, `isdeleted`, `datecreated`) VALUES
(1, '<p><em>Test</em></p>\r\n', 'english', '2', 0, 0, '2022-03-25 08:00:26'),
(4, '<p>Basics plumbing</p>\r\n', 'Plumbing ', '2', 0, 0, '2022-03-29 07:23:46'),
(5, '<p>A few tips on how to do gardening</p>\r\n', 'Gardening 101', '4', 0, 0, '2022-03-29 08:03:23'),
(6, '<p>Everything you need to learn about painting houses and buildings</p>\r\n', 'Basic painting tips', '5', 0, 0, '2022-03-29 08:11:01'),
(7, '<p>Basic tips on construction</p>\r\n', 'construction 101', '7', 0, 0, '2022-03-29 08:14:24'),
(8, '<p>Step by step tutorial on being an electrician</p>\r\n', 'Electrician training', '3', 0, 0, '2022-03-29 08:17:23'),
(9, '<p>Cleaning step by step tutorials</p>\r\n', 'Cleaning Basics', '1', 0, 0, '2022-03-29 08:21:15'),
(10, '<p>Catering services training</p>\r\n', 'Catering ', '6', 0, 0, '2022-03-29 08:26:09'),
(11, '<p>Construction Basics 101</p>\r\n', 'Construction Basics 2', '7', 0, 0, '2022-03-29 10:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `coursevideos`
--

CREATE TABLE `coursevideos` (
  `videoID` int(11) NOT NULL,
  `courseID` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `videolink` text NOT NULL,
  `videodescription` text NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `isactive` int(11) NOT NULL DEFAULT 1,
  `isdeleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursevideos`
--

INSERT INTO `coursevideos` (`videoID`, `courseID`, `title`, `videolink`, `videodescription`, `datecreated`, `isactive`, `isdeleted`) VALUES
(14, 4, NULL, '<iframe width=\"auto\"  src=\"https://www.youtube.com/embed/5TI1HMsGkA8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'This is a toilet plumbing tutorial', '2022-03-29 10:20:24', 1, 0),
(15, 11, NULL, '<iframe width=\"auto\" src=\"https://www.youtube.com/embed/ExltDReEdno\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Bricklaying 101', '2022-03-29 10:58:55', 1, 0),
(16, 11, NULL, '<iframe width=\"auto\" src=\"https://www.youtube.com/embed/3fP0LZMEV5w\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'House framing explanation', '2022-03-29 11:01:38', 1, 0),
(17, 10, NULL, '<iframe width=\"auto\" src=\"https://www.youtube.com/embed/ZJy1ajvMU1k\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Master 5 basic cooking skills', '2022-03-29 11:02:58', 1, 0),
(18, 10, NULL, '<iframe width=\"auto\" src=\"https://www.youtube.com/embed/-av6cz9upO0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'What you need to be a better chef', '2022-03-29 11:04:15', 1, 0),
(19, 4, NULL, '<iframe width=\"auto\" src=\"https://www.youtube.com/embed/8jxRn-T_LCs\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'All about home plumbing', '2022-03-29 11:06:12', 1, 0),
(20, 9, NULL, '<iframe width=\"auto\" src=\"https://www.youtube.com/embed/LHxsRIxwTrQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'House cleaning 101', '2022-03-29 11:08:12', 1, 0),
(21, 8, NULL, '<iframe width=\"auto\" src=\"https://www.youtube.com/embed/eNUvR7dNlM4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Practical training for electrician courses', '2022-03-29 11:10:58', 1, 0),
(22, 6, NULL, '<iframe width=\"auto\" src=\"https://www.youtube.com/embed/CRXCB_3gLok\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'How to paint a room', '2022-03-29 11:12:37', 1, 0),
(23, 5, NULL, '<iframe width=\"auto\" src=\"https://www.youtube.com/embed/B0DrWAUsNSc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Starting a garden ', '2022-03-29 11:13:40', 1, 0),
(25, 11, 'Building Construction from start to finish in Kenya part 101', '<iframe width=\"560\" height=\"325\" src=\"https://www.youtube.com/embed/n06000VwB6w\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'Building Construction from start to finish in Kenya part 1. The proposed Project was design, drawn and checked by Mark & Myles Engineering L.T.D.', '2022-04-13 12:59:14', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `jobcategory`
--

CREATE TABLE `jobcategory` (
  `categoryID` int(11) NOT NULL,
  `categoryname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobcategory`
--

INSERT INTO `jobcategory` (`categoryID`, `categoryname`) VALUES
(1, 'Househelp\r\n'),
(2, 'Plumbers'),
(3, 'Electrician'),
(4, 'Gardener'),
(5, 'Painter'),
(6, 'Cook'),
(7, 'Construction worker');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `JobID` int(11) NOT NULL,
  `jobtime` text NOT NULL,
  `jobstartdate` text NOT NULL,
  `jobenddate` text NOT NULL,
  `location` text NOT NULL,
  `constituency` text NOT NULL,
  `pay` int(11) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp(),
  `isactive` int(11) NOT NULL DEFAULT 0,
  `isdeleted` int(11) NOT NULL DEFAULT 0,
  `jobdescription` text NOT NULL,
  `moreareadesc` text NOT NULL,
  `category` text NOT NULL,
  `status` text NOT NULL DEFAULT 'Pending..',
  `employerID` int(11) NOT NULL,
  `worker_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`JobID`, `jobtime`, `jobstartdate`, `jobenddate`, `location`, `constituency`, `pay`, `datecreated`, `isactive`, `isdeleted`, `jobdescription`, `moreareadesc`, `category`, `status`, `employerID`, `worker_id`) VALUES
(8, '9 am', '04/07/2022', '04/07/2022', '7', '21', 700, '2022-04-05 10:40:06', 0, 0, 'House Cleaner/Housekeeper ', '', '1', 'Pending..', 8, NULL),
(9, '9 am', '04/14/2022', '04/14/2022', '21', '7', 500, '2022-04-05 10:42:53', 0, 0, 'Housekeeper needed. \r\nSomeone who loves cleaning needed.  No professional experience needed', '', '1', 'Pending..', 10, NULL),
(10, '9 am', '04/15/2022', '04/15/2022', '22', '23', 600, '2022-04-05 10:44:55', 0, 0, 'Housekeeper needed. Cleaning an apartment and washing clothes', '', '1', 'Pending..', 8, NULL),
(11, '9 am', '04/21/2022', '04/21/2022', '7', '21', 1000, '2022-04-05 10:46:39', 0, 0, 'I need someone to come clean for two story house plus the compound', '', '1', 'Pending..', 10, NULL),
(12, '9 am', '04/12/2022', '04/12/2022', '7', '21', 1200, '2022-04-05 10:50:22', 0, 0, 'Come clean a vacation rental in two hours only', '', '1', 'Pending..', 10, NULL),
(13, '9 am', '04/28/2022', '04/28/2022', '7', '8', 1500, '2022-04-05 10:57:07', 0, 0, 'Prepare and cook for all types as per the menu', '', '6', 'Pending..', 8, NULL),
(14, '10am', '03/16/2022', '03/17/2022', '22', '28', 3000, '2022-04-05 11:01:50', 0, 0, 'Chef needed\r\nmaintain kitchen sanitation and safety standards.\r\nFood preparation and plating\r\nA minimum of one (1) year culinary experience\r\n', '', '6', 'Pending..', 10, NULL),
(15, '11am', '04/09/2022', '04/11/2022', '7', '21', 3500, '2022-04-08 14:31:41', 0, 0, 'We have a position with immediate start available for a suitable gardener with previous commercial experience in the care and maintenance of indoor plants. Duties will be to service and maintain indoor plants in a variety of locations such as shopping centers, hotels and offices throughout the Nairobi.\r\nThe position requires an experienced indoor plant technician to carry out maintenance services including indoor plants & some general garden maintenance.Call{phone=0722566999}', 'tests', '7', 'In Progress', 8, 7);

-- --------------------------------------------------------

--
-- Table structure for table `jobstatus`
--

CREATE TABLE `jobstatus` (
  `status_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `last_updated` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobstatus`
--

INSERT INTO `jobstatus` (`status_id`, `user_id`, `job_id`, `status`, `last_updated`) VALUES
(5, 7, 11, 'Applied', '2022-04-08'),
(7, 7, 8, 'Applied', '2022-04-12'),
(8, 3, 15, 'Applied', '2022-04-12'),
(11, 7, 15, 'Applied', '2022-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `location_id` int(11) NOT NULL,
  `county` text DEFAULT NULL,
  `constituency` text DEFAULT NULL,
  `is_deleted` int(2) NOT NULL DEFAULT 0,
  `location_marker` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`location_id`, `county`, `constituency`, `is_deleted`, `location_marker`) VALUES
(7, 'Nairobi County', 'Westlands', 0, ''),
(22, 'Kiambu County', 'Gatundu South', 0, ''),
(44, 'Nakuru County', 'Molo', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `rateID` int(11) NOT NULL,
  `ratingvalue` int(1) NOT NULL,
  `feedback` text NOT NULL,
  `jobID` int(11) NOT NULL,
  `workerID` int(11) NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `reportid` int(11) NOT NULL,
  `reporter` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `reportee` int(11) NOT NULL,
  `title` text NOT NULL,
  `report` text NOT NULL,
  `datecreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reportid`, `reporter`, `jobid`, `reportee`, `title`, `report`, `datecreated`) VALUES
(1, 7, 15, 8, 'test', '<p>test</p>\r\n', '2022-04-13 07:32:51'),
(2, 8, 15, 7, 'hey', '<p>reported</p>\r\n', '2022-04-13 07:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `firstname` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `lastname` text DEFAULT NULL,
  `category` text DEFAULT NULL,
  `username` text DEFAULT NULL,
  `Password` text DEFAULT NULL,
  `photoID` text DEFAULT NULL,
  `IDPhoto` text NOT NULL,
  `location` text DEFAULT NULL,
  `constituency` text DEFAULT NULL,
  `phonenumber` int(11) DEFAULT NULL,
  `nationID` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `job_category` int(11) DEFAULT NULL,
  `cert1` text DEFAULT NULL,
  `cert2` text DEFAULT NULL,
  `cert3` text DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `isdeleted` int(11) DEFAULT 0,
  `dateadded` timestamp NULL DEFAULT current_timestamp(),
  `certifications` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `firstname`, `email`, `lastname`, `category`, `username`, `Password`, `photoID`, `IDPhoto`, `location`, `constituency`, `phonenumber`, `nationID`, `address`, `gender`, `job_category`, `cert1`, `cert2`, `cert3`, `isactive`, `isdeleted`, `dateadded`, `certifications`) VALUES
(5, 'ggg', 'donnart@gmail.com', 'b', 'employer', 'bb', 'd7205ab5fd2331dc91c13ba8fe3be45b', '', '0', '', '', 0, '', 'nairobi', 'Female', NULL, NULL, NULL, NULL, 0, 0, '2022-03-02 13:59:18', ''),
(7, 'Keith', 'keithke@mail.com', 'Kariuki', 'worker', 'KeithK', '827ccb0eea8a706c4c34a16891f84e7b', '251-2510025_transparent-special-offers-png-10-off-christmas-sale.png', 'about-us.jpg', '7', '21', 333355, '43123322', 'nairobi 55', 'Male', 4, '\'UNAUDITED_FINANCIAL_STATEMENTS_AND_OTHER_DISCLOSURES_AS_AT_31ST_March_2.._-1.pdf', '\'UNAUDITED_FINANCIAL_STATEMENTS_AND_OTHER_DISCLOSURES_AS_AT_31ST_March_2.._-21.pdf', '\'UNAUDITED_FINANCIAL_STATEMENTS_AND_OTHER_DISCLOSURES_AS_AT_31ST_March_2.._.pdf', 1, 0, '2022-03-03 08:06:53', ''),
(8, 'Rose', 'rose@gmail.com', 'Muna', 'employer', 'RoseMuna', '827ccb0eea8a706c4c34a16891f84e7b', 'favicon.png', 'sdms.png', '22', '22', 71001001, '12345678', '675675', 'Female', NULL, NULL, NULL, NULL, 1, 0, '2022-03-03 08:38:58', ''),
(10, 'teta', 'tetakarenzi@gmail.com', 'kellie', 'employer', 'teta', 'f5b58b62d9fc1ebc29d83628888f6512', '', '0', '22', '22', 0, '', '5896', 'Female', NULL, NULL, NULL, NULL, 1, 0, '2022-03-20 17:02:42', ''),
(11, 'Rose ', 'rosemuna@gmail.com', 'Muna', 'admin', 'rose', '827ccb0eea8a706c4c34a16891f84e7b', '', '0', '22', '22', 0, '6667757576', 'Nairobi', 'Female', NULL, NULL, NULL, NULL, 1, 0, '2022-03-21 19:38:43', ''),
(12, 'cynthia', 'cynthiandirangu@gmail.com', 'Ndirangu', 'admin', 'cynthia', '3e19b5009c3f24642936caa810c1d4ba', '', '0', '22', '22', 0, '', 'woodvale drive', 'Female', NULL, NULL, NULL, NULL, 1, 0, '2022-04-04 15:01:23', ''),
(13, 'Faith', 'faithwairimu@gmail.com', 'Wairimu', 'employer', 'Faith', '01cfcd4f6b8770febfb40cb906715822', NULL, '0', '22', '22', NULL, NULL, 'Kiambu', 'Male', NULL, NULL, NULL, NULL, 1, 0, '2022-04-08 09:17:20', NULL),
(14, 'Arnold', 'admin@admin.com', 'Wasilwa', 'admin', 'cynthia', '827ccb0eea8a706c4c34a16891f84e7b', NULL, '0', '22', '22', NULL, '121333', 'Kabete', 'Male', NULL, NULL, NULL, NULL, 1, 0, '2022-04-08 09:20:51', NULL),
(15, 'av', 'vn@m.co', 'nnbvb', 'employer', 'hgj', '31664b021282670ef992f5efd5017bf1', NULL, '0', '22', '22', NULL, 'vbv', 'vvb', 'Male', NULL, NULL, NULL, NULL, 1, 0, '2022-04-08 09:24:47', NULL),
(16, 'sdsd', 'eggs@gmail.com', 'sddsd', 'worker', 'asdaasd', '827ccb0eea8a706c4c34a16891f84e7b', NULL, '0', '22', '22', NULL, 'sdsds', 'sdsdsd', 'Female', NULL, NULL, NULL, NULL, 1, 0, '2022-04-08 09:33:08', NULL),
(17, 'Arnold', 'admin@admin.com', 'nnbvb', 'worker', 'cynthia', '01cfcd4f6b8770febfb40cb906715822', NULL, '', '7', '7', NULL, 'sdsds', '675675', 'Male', 5, NULL, NULL, NULL, 1, 0, '2022-04-08 12:17:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `completedvideos`
--
ALTER TABLE `completedvideos`
  ADD PRIMARY KEY (`completedvideos_id`);

--
-- Indexes for table `constituents`
--
ALTER TABLE `constituents`
  ADD PRIMARY KEY (`constituents_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `coursevideos`
--
ALTER TABLE `coursevideos`
  ADD PRIMARY KEY (`videoID`);

--
-- Indexes for table `jobcategory`
--
ALTER TABLE `jobcategory`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`JobID`);

--
-- Indexes for table `jobstatus`
--
ALTER TABLE `jobstatus`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`rateID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`reportid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `completedvideos`
--
ALTER TABLE `completedvideos`
  MODIFY `completedvideos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `constituents`
--
ALTER TABLE `constituents`
  MODIFY `constituents_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `coursevideos`
--
ALTER TABLE `coursevideos`
  MODIFY `videoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `jobcategory`
--
ALTER TABLE `jobcategory`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `JobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jobstatus`
--
ALTER TABLE `jobstatus`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `rateID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `reportid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

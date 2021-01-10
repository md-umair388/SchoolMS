-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2020 at 05:24 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `type`, `description`, `status`) VALUES
(1, 'About Us', 'Affiliated to Central Board of Secondary Education Delhi \r\nAffiliation No  : 2131603 \r\nSchool No : 55091										', 1),
(2, 'Welcome Information', '										To bring a dynamic and harmonious personality of the future citizens of Global society and to infuse in them glorious ideals of Ganga Yamuni culture. Shri Krishna Educational Society Lakhni Patti, Ambedkar Nagar started a school namely as Shri Krishna Children Central Academy Vimawal Ram Nagar Ambedkar Nagar.\r\nRealizing the importance of English in higher education and preparing dynamic citizen of tomorrow to face the global Challenges of the global society, Shri Krishna Central Academy Vimawal Ram Nagar Ambedkar Nagar has started a co- educational English medium school laying emphasis on qualitative education & to adopt the purified ritual of our long aged Indian culture.										', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'alex', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(10) NOT NULL,
  `stdid` int(2) NOT NULL,
  `class` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `attendancevalue` int(2) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `stdid`, `class`, `date`, `attendancevalue`, `status`) VALUES
(1, 123457, '1', '26/07/2019', 2, 1),
(2, 201912, '1', '26/07/2019', 2, 1),
(3, 478596, '3', '26/07/2019', 2, 1),
(4, 123456, '4', '26/07/2019', 2, 1),
(5, 789455, '5', '26/07/2019', 2, 1),
(6, 789456, '7', '26/07/2019', 2, 1),
(7, 123457, '1', '25/07/2019', 1, 1),
(8, 201912, '1', '25/07/2019', 1, 1),
(9, 478596, '3', '25/07/2019', 1, 1),
(10, 123456, '4', '25/07/2019', 1, 1),
(11, 789455, '5', '25/07/2019', 1, 1),
(12, 789456, '7', '25/07/2019', 1, 1),
(13, 123457, '1', '24/07/2019', 0, 1),
(14, 201912, '1', '24/07/2019', 1, 1),
(15, 478596, '3', '24/07/2019', 2, 1),
(16, 123456, '4', '24/07/2019', 2, 1),
(17, 789455, '5', '24/07/2019', 2, 1),
(18, 789456, '7', '24/07/2019', 2, 1),
(19, 123457, '1', '23/07/2019', 1, 1),
(20, 201912, '1', '23/07/2019', 0, 1),
(21, 478596, '3', '23/07/2019', 2, 1),
(22, 123456, '4', '23/07/2019', 0, 1),
(23, 789455, '5', '23/07/2019', 2, 1),
(24, 789456, '7', '23/07/2019', 2, 1),
(25, 123457, '1', '22/07/2019', 2, 1),
(26, 201912, '1', '22/07/2019', 2, 1),
(27, 478596, '3', '22/07/2019', 2, 1),
(28, 123456, '4', '22/07/2019', 0, 1),
(29, 789455, '5', '22/07/2019', 0, 1),
(30, 789456, '7', '22/07/2019', 2, 1),
(31, 123457, '1', '26/07/2019', 2, 1),
(32, 201912, '1', '26/07/2019', 2, 1),
(33, 478596, '3', '26/07/2019', 2, 1),
(34, 123456, '4', '26/07/2019', 2, 1),
(35, 789455, '5', '26/07/2019', 2, 1),
(36, 789456, '7', '26/07/2019', 2, 1),
(37, 123457, '1', '25/07/2019', 1, 1),
(38, 201912, '1', '25/07/2019', 1, 1),
(39, 478596, '3', '25/07/2019', 1, 1),
(40, 123456, '4', '25/07/2019', 1, 1),
(41, 789455, '5', '25/07/2019', 1, 1),
(42, 789456, '7', '25/07/2019', 1, 1),
(43, 123457, '1', '24/07/2019', 0, 1),
(44, 201912, '1', '24/07/2019', 1, 1),
(45, 478596, '3', '24/07/2019', 2, 1),
(46, 123456, '4', '24/07/2019', 2, 1),
(47, 789455, '5', '24/07/2019', 2, 1),
(48, 789456, '7', '24/07/2019', 2, 1),
(49, 123457, '1', '23/07/2019', 1, 1),
(50, 201912, '1', '23/07/2019', 0, 1),
(51, 478596, '3', '23/07/2019', 2, 1),
(52, 123456, '4', '23/07/2019', 0, 1),
(53, 789455, '5', '23/07/2019', 2, 1),
(54, 789456, '7', '23/07/2019', 2, 1),
(55, 123457, '1', '22/07/2019', 2, 1),
(56, 201912, '1', '22/07/2019', 2, 1),
(57, 478596, '3', '22/07/2019', 2, 1),
(58, 123456, '4', '22/07/2019', 0, 1),
(59, 789455, '5', '22/07/2019', 0, 1),
(60, 789456, '7', '22/07/2019', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `description`, `status`) VALUES
(1, 'Test', 'test@gmail.com', 'Test1', 'Test pass or fail....!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `photo`, `date`, `status`) VALUES
(1, 'Test1', '					Test					', 'thD97DI3AU.jpg', '2019-07-25', 1),
(2, 'Test2', 'Test', 'thM157BX3O.jpg', '2019-07-22', 1),
(3, 'Test3', 'Test', 'thUCI91XH1.jpg', '2016-05-22', 1),
(4, 'Test4', 'Test', 'thUKLI7NQO.png', '2015-03-21', 1),
(5, 'Test5', 'Test', 'untitled.png', '2018-07-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) NOT NULL,
  `type` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `type`, `title`, `photo`, `description`, `status`) VALUES
(1, 'Campus', 'Front View', '11_1PC5.jpg', 'Front View					', 1),
(2, 'Cultural Fest', 'Dance', '17_1DSC_0371.jpg', '						Small and cute Children Dance										', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `description`, `photo`, `date`, `status`) VALUES
(1, 'Model1', 'Model										', 'th01VCZ31C.jpg', '2019-07-25', 1),
(2, 'Model2', '	Model									', 'th7W7GBWQF.jpg', '2015-05-25', 1),
(3, 'Model3', 'Model										', 'thC4II0T72.jpg', '2019-02-13', 1),
(4, 'Model4', 'Model										', 'untitled.png', '2019-07-24', 1),
(5, 'Model5', 'Model										', 'untitljed.png', '2019-07-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `stdid` int(10) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`stdid`, `photo`, `status`) VALUES
(0, '', 1),
(123456, 'th7W7GBWQF.jpg', 1),
(123457, 'thC4II0T72.jpg', 1),
(201912, 'th7W7GBWQF.jpg', 1),
(456147, '', 1),
(478596, 'th7W7GBWQF.jpg', 1),
(789452, 'starting and ending.PNG', 1),
(789455, 'th7W7GBWQF.jpg', 1),
(789456, 'th7W7GBWQF.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `photo`, `status`) VALUES
(1, 'Front', 'Front View of Academy', '11_1PC5.jpg', 1),
(2, 'Teacher', 'Group Of Teacher', '12_1STAFF.jpg', 1),
(3, 'Prayer', 'Prayer Time						', '13_1GLAURAY.jpg', 1),
(4, 'Class', 'Smart Class', '14_1PC3.jpg', 1),
(5, 'Welcome Fuction', 'Dance						', '17_1DSC_0371.jpg', 1),
(6, 'Drama', 'Motivation Drama	', '18_1DSC_0406.jpg', 1),
(7, 'Motivation Drama', 'Motivation Drama						', '20_1DSC_0365.jpg', 1),
(8, 'Dance', 'Dance', '22_1DSC_0329.jpg', 1),
(9, 'Dance', 'Small Children Dance						', '19_1DSC_0328.jpg', 1),
(10, 'Motivation Drama', 'Motivation Drama						', '25_1DSC_0389.jpg', 1),
(11, 'Motivation Drama', 'Motivation Drama						', '27_1DSC_0390.jpg', 1),
(12, 'Prize', 'Prize', '21_1DSC_0417.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `stdtrcer`
--

CREATE TABLE `stdtrcer` (
  `stdid` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdtrcer`
--

INSERT INTO `stdtrcer` (`stdid`, `name`, `photo`, `status`) VALUES
(123456, 'Aamir', 'th01VCZ31C.jpg', '1'),
(123457, 'Amit', 'th7W7GBWQF.jpg', '1'),
(201912, 'Umair', 'th01VCZ31C.jpg', '1'),
(456147, 'KHO', 'javascript-logo.png', '1'),
(789456, 'ABCSED', 'img_frontend.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stdid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(5) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stdid`, `name`, `class`, `status`) VALUES
(0, '', '', 0),
(123456, 'Aamir', '4', 1),
(123457, 'Amit', '1', 1),
(201912, 'Umair', '1', 1),
(456147, 'KHO', '5', 1),
(478596, 'ABC', '3', 1),
(789452, 'Srk', '11', 1),
(789455, 'Alex', '5', 1),
(789456, 'ABCSED', '7', 1);

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `stdid` int(2) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`stdid`, `fathername`, `mothername`, `contact`, `gender`, `dob`, `address`, `status`) VALUES
(0, '', '', '', '', '', '', 1),
(123456, 'SA', 'HA', '8526314790', 'Male', '07/12/1999', 'Hgaddtasjhgd Sdhf Ashjdasdas Dasjda Djasx Asdhgs S', 1),
(123457, 'ABX', 'AVCF', '4561234567', 'Male', '08/23/2015', 'Shdgajhs Adghasdjahsdvd ', 1),
(201912, 'ABC DEF', 'DWEqwe', '4561237896', 'Male', '12/15/2007', 'AQWSED SWERDF DFT', 1),
(456147, '', '', '', '', '', '', 1),
(478596, 'QWERT', 'Asdasasfaasqz', '4546779865', 'Female', '09/23/2015', 'Sgajhcvashj Bhjvhj', 1),
(789452, 'qwer', 'qwer', '7894561230', 'Male', '11/12/14', 'Hgaddtasjhgd Sdhf Ashjdasdas Dasjda Djasx Asdhgs S', 1),
(789455, 'QWERT', 'YUIOP', '8795461254', 'Male', '01/25/2015', 'Hgaddtasjhgd Sdhf Ashjdasdas Dasjda Djasx Asdhgs S ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `password`, `status`) VALUES
(159632, 'Admin', 'e10adc3949ba59abbe56e057f20f883e', 1),
(192018, 'Alex', 'e10adc3949ba59abbe56e057f20f883e', 0),
(192019, 'Alex Ami', 'e10adc3949ba59abbe56e057f20f883e', 1),
(789456, 'Mr. R R Yadav', 'e10adc3949ba59abbe56e057f20f883e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `tname`, `position`, `photo`, `status`) VALUES
(1, 'Mr. R R Yadav', 'Manager', 'manager.jpg', 1),
(2, 'Mr. R S Gupta', 'Principal', 'principal.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` int(10) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `tname`, `subject`, `photo`, `description`, `status`) VALUES
(1, 'Umair', 'Computer', 'author2.jpg', '						Btecghft hgcfg										', 1),
(2, 'Aamir', 'Computer', 'author2.jpg', '						Btecghft hgcfg										', 1),
(3, 'Amit', 'Computer', 'author2.jpg', '						Btecghft hgcfg										', 1),
(4, 'Abhi', 'Computer', 'author2.jpg', '						Btecghft hgcfg										', 1),
(5, 'Sbh', 'Computer', 'author2.jpg', '						Btecghft hgcfg										', 1),
(6, 'Arjun', 'Computer', 'author2.jpg', '						Btecghft hgcfg										', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uname` (`username`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`stdid`),
  ADD UNIQUE KEY `stdid` (`stdid`),
  ADD UNIQUE KEY `stdid_2` (`stdid`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stdtrcer`
--
ALTER TABLE `stdtrcer`
  ADD PRIMARY KEY (`stdid`),
  ADD UNIQUE KEY `stdid` (`stdid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stdid`),
  ADD UNIQUE KEY `stdid` (`stdid`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`stdid`),
  ADD UNIQUE KEY `stdid` (`stdid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

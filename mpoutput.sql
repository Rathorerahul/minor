-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2018 at 04:49 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--
-- Creation: Apr 01, 2018 at 02:08 PM
--

CREATE TABLE `adminlogin` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `adminlogin`:
--

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'rahul', 'rahul1234'),
(2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--
-- Creation: Apr 17, 2018 at 08:57 PM
--

CREATE TABLE `city` (
  `cityId` int(2) NOT NULL,
  `cityName` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `city`:
--

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cityId`, `cityName`, `status`) VALUES
(1, 'Indore', 'city'),
(2, 'dewas', 'city'),
(3, 'Rau', 'town'),
(4, 'Mhow', 'town'),
(5, 'Pithampur', 'town');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--
-- Creation: Apr 20, 2018 at 08:58 AM
--

CREATE TABLE `feedback` (
  `feedId` int(10) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `experience` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `feedback`:
--

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedId`, `userId`, `Name`, `description`, `experience`) VALUES
(1, 'sriturajrathore@gmail.com', 'rahul', 'good good good good good good good good good good good good good good good good good good good good good good good good good good good good good good good good good good', 'average'),
(2, 'sriturajrathore@gmail.com', 'Anand Boys Hostel', 'bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad bad', 'average');

-- --------------------------------------------------------

--
-- Table structure for table `flat`
--
-- Creation: Apr 20, 2018 at 01:53 AM
--

CREATE TABLE `flat` (
  `Pid` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `Bathrooms` int(3) NOT NULL,
  `Balcony` int(3) NOT NULL,
  `BHK` int(3) NOT NULL,
  `Floor` int(3) NOT NULL,
  `TFloor` int(3) NOT NULL,
  `AFor` varchar(50) NOT NULL,
  `Tenants` varchar(50) NOT NULL,
  `AFrom` date NOT NULL,
  `Rent` int(11) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `flat`:
--

--
-- Dumping data for table `flat`
--

INSERT INTO `flat` (`Pid`, `Name`, `Address`, `Bathrooms`, `Balcony`, `BHK`, `Floor`, `TFloor`, `AFor`, `Tenants`, `AFrom`, `Rent`, `Description`, `Images`) VALUES
(1, 'Gokul Society', '422 sudama Nagar Indore', 4, 2, 4, 4, 6, 'Male', 'Family', '2018-05-10', 20000, 'good abkanskfkan WHFIKNKHFKLQ', '5ad94b0ae5a14.png'),
(2, 'Gokul Society', '422 sudama Nagar Indore', 4, 2, 4, 4, 6, 'Male', 'Family', '2018-05-10', 20000, 'good abkanskfkan WHFIKNKHFKLQ', '5ad94b204fc57.png'),
(3, 'Gokul Society', '422 sudama Nagar Indore', 4, 2, 4, 4, 6, 'Male', 'Family', '2018-05-10', 20000, 'good abkanskfkan WHFIKNKHFKLQ', '5ad94b2672304.png'),
(4, 'Lion', 'The Horizon Residency11/5, South Tukoganj, Indore, Madhya Pradesh', 2, 1, 2, 3, 5, 'Family', 'Male', '2018-04-03', 5000, 'A luxury 4 BHK Villa with a big covered area of 4910 sqft available on rent at the prestigious Brigade Orchards in Devanahalli, Bangalore. This ready to move in villa is ideal for a large family looking for a no hassle stay.', 'ht12.jpg'),
(5, 'Listen villa', '57, ratnalok colony scheme 53 near medanta hospital vijay nagar indore, Indore, Madhya Pradesh', 2, 1, 3, 3, 5, 'Professional', 'Male', '2018-04-30', 8000, 'A luxury 4 BHK Villa with a big covered area of 4910 sqft available on rent at the prestigious Brigade Orchards in Devanahalli, Bangalore. This ready to move in villa is ideal for a large family looking for a no hassle stay.', 'ht2.jpg'),
(6, 'Gokul Society', '422 sudama Nagar Indore', 20, 20, 20, 10, 30, 'Female', 'professionals', '2018-04-21', 50000, 'njksjkgvzcjksvjkdvbjk.dvjk.zjkvbk.', '5adc89e93b897.png'),
(7, 'Gokul Society', '422 sudama Nagar Indore', 20, 20, 20, 10, 30, 'Female', 'professionals', '2018-04-21', 50000, 'njksjkgvzcjksvjkdvbjk.dvjk.zjkvbk.', '5adc8a15dc211.png'),
(8, 'Gokul Society', 'annapurana ,Indore', 5, 5, 5, 5, 5, 'Female', 'Family', '2018-06-25', 50000, 'shuhuhzvhlugzusdzhjjsahjlhjdhjahjdsk', '5adc8b31f005f.jpg'),
(9, 'Gokul Society', 'annapurana ,Indore', 5, 5, 5, 5, 5, 'Female', 'Family', '2018-06-25', 50000, 'shuhuhzvhlugzusdzhjjsahjlhjdhjahjdsk', '5adc8bb3d5f19.jpg'),
(10, 'Gokul Society', '422 sudama Nagar Indore', 4, 4, 4, 4, 4, 'Male', 'Students', '0004-04-04', 40000, '', ''),
(11, 'Gokul Society', '422 sudama Nagar Indore', 4, 4, 4, 4, 4, 'Male', 'Students', '0004-04-04', 40000, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--
-- Creation: Apr 19, 2018 at 09:28 PM
--

CREATE TABLE `hostel` (
  `Pid` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `HostelFor` varchar(10) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `Availability` int(11) NOT NULL,
  `Charges` int(11) NOT NULL,
  `Services` varchar(500) NOT NULL,
  `Images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `hostel`:
--

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`Pid`, `Name`, `Address`, `HostelFor`, `Description`, `Availability`, `Charges`, `Services`, `Images`) VALUES
(1, 'Anand Boys Hostel', '422 sudama Nagar Indore', 'Boys', '', 5, 2000, 'Cupboards Study Table AC,  Wifi Fridge', ''),
(2, 'Anand Boys Hostel', '422 sudama Nagar Indore', 'Boys', '', 5, 2000, 'Cupboards Study Table AC,  Wifi Fridge', ''),
(3, 'Anand Boys Hostel', '422 sudama Nagar Indore', 'Boys', '', 5, 2000, 'Cupboards Study Table AC,  Wifi Fridge', ''),
(4, 'Anand Boys Hostel', '422 sudama Nagar Indore', 'Boys', '', 5, 2000, 'Cupboards Study Table AC,  Wifi Fridge', '5ad90f12c78b4.jpg'),
(5, 'Anand Boys Hostel', '422 sudama Nagar Indore', 'Boys', '', 4, 5000, 'Cupboards  Wifi Fridge', '5ad90fcc00256.jfif'),
(6, 'Youth Hostel', 'A 207, Rafael Tower, 8/2 Old Palasia Indore., Indore, Madhya Pradesh', 'Boys', 'near to parks,malls,super markets,vegetable shops,milk shops\r\n', 3, 1500, 'Free & fast Wi-FI is available in every room of the hostel.\r\nairconditionAir condition (heating / cooling) in every room.\r\nfree coffee and teaUnlimeted Coffee & Tea & Milk all day long', 'ht1.jpg'),
(7, 'oasis Boys Hostel', 'oasis boys Hostel, Behind Shalimar Township, Near Bombay Hospital, Indore., Indore, Madhya Pradesh', 'Boys', 'near to parks,malls,super markets,vegetable shops,milk shops\r\n', 2, 2000, 'Free & fast Wi-FI is available in every room of the hostel.\r\nairconditionAir condition (heating / cooling) in every room.', 'ht2.jpg'),
(8, 'Hostel Smyle Inn ', 'Hostel Smyle Inn ,01 janki nagar nx,AB road,indore, Indore, Madhya Pradesh', 'Girls', 'Highgenic food ,self cooking allowed, very close to manyata teck park ,elements mall and bangalore international airpot', 2, 2500, 'Unlimeted Coffee & Tea & Milk all day long\r\nhostel balconyTwo Balconies and front garden with table tennis outside', 'ht3.jpg'),
(9, 'Roots Hostel ', 'Roots Hostel ,AB Bypass road, infront of Delhi Public School Indore, Indore, Madhya Pradesh', 'Girls', 'Highgenic food ,self cooking allowed, very close to manyata teck park ,elements mall and bangalore international airpot\r\n', 4, 3000, 'Living area with microwawe, fridge, toaster, computer, cable TV, balcony..\r\ncable televisionCable TV with more then 40 programs and numerous movies to coose', 'ht5.jpg'),
(10, 'osisi Hostels', 'annapurana ,Indore', 'Girls', 'good good goodgoodgoodgoodgoodgoodgoodgoodgoodgoodgoodgoodgoodgoodgood', 2, 3100, 'Cupboards Study Table  Wifi', '5ad9c7d6b9b56.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--
-- Creation: Apr 15, 2018 at 11:48 AM
--

CREATE TABLE `inquiry` (
  `inqId` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `inqDate` datetime NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `inquiry`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pg`
--
-- Creation: Apr 20, 2018 at 06:08 AM
--

CREATE TABLE `pg` (
  `Pid` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `AFor` varchar(20) NOT NULL,
  `FD` varchar(100) NOT NULL,
  `Floor` int(10) NOT NULL,
  `TFloor` int(10) NOT NULL,
  `Occupancy` varchar(20) NOT NULL,
  `NRooms` int(10) NOT NULL,
  `Tenants` varchar(20) NOT NULL,
  `AB` varchar(10) NOT NULL,
  `Rent` varchar(20) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `Images` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `pg`:
--

-- --------------------------------------------------------

--
-- Table structure for table `pgfeature`
--
-- Creation: Apr 06, 2018 at 03:34 AM
--

CREATE TABLE `pgfeature` (
  `pid` int(11) NOT NULL,
  `floorno` int(11) NOT NULL,
  `totalfloors` int(11) NOT NULL,
  `noofrooms` int(11) NOT NULL,
  `occupancy` int(11) NOT NULL,
  `tenanttype` text NOT NULL,
  `ageofpg` int(11) NOT NULL,
  `attachedbathrooms` text NOT NULL,
  `attachedbalcony` text NOT NULL,
  `avilablefor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `pgfeature`:
--

-- --------------------------------------------------------

--
-- Table structure for table `propertyinfo`
--
-- Creation: Apr 22, 2018 at 12:58 PM
--

CREATE TABLE `propertyinfo` (
  `pid` varchar(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `ptype` varchar(50) NOT NULL,
  `posteddate` date NOT NULL,
  `pfor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `propertyinfo`:
--   `uid`
--       `userinfo` -> `id`
--

--
-- Dumping data for table `propertyinfo`
--

INSERT INTO `propertyinfo` (`pid`, `uid`, `ptype`, `posteddate`, `pfor`) VALUES
('1', 25, 'flat', '2018-04-18', ''),
('11|flat', 33, 'flat', '0000-00-00', 'Rent'),
('2', 25, 'flat', '2018-04-18', ''),
('3', 26, 'PG', '2018-04-18', ''),
('5', 28, 'PG', '2018-04-19', ''),
('6', 28, 'flat', '2018-04-19', 'Sale'),
('7', 26, 'Flat', '2018-04-19', 'all'),
('8', 33, 'flat', '0000-00-00', 'Rent'),
('9', 33, 'flat', '0000-00-00', 'Rent');

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--
-- Creation: Apr 09, 2018 at 05:30 AM
--

CREATE TABLE `rent` (
  `pid` int(11) NOT NULL,
  `rent` int(11) NOT NULL,
  `scheme` int(11) NOT NULL,
  `other charges` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `rent`:
--

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--
-- Creation: Apr 19, 2018 at 10:36 PM
--

CREATE TABLE `shop` (
  `Pid` int(11) NOT NULL,
  `Address` varchar(500) NOT NULL,
  `SqFt` float NOT NULL,
  `AvailableFrom` date NOT NULL,
  `AvailableFor` varchar(500) NOT NULL,
  `Rent` int(11) NOT NULL,
  `NBB` varchar(300) NOT NULL,
  `Floor` varchar(11) NOT NULL,
  `TFloor` int(11) NOT NULL,
  `Description` varchar(1100) NOT NULL,
  `Images` varchar(100) NOT NULL,
  `PostedDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `shop`:
--

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`Pid`, `Address`, `SqFt`, `AvailableFrom`, `AvailableFor`, `Rent`, `NBB`, `Floor`, `TFloor`, `Description`, `Images`, `PostedDate`) VALUES
(1, '422 sudama Nagar Indore', 1500, '2018-05-05', 'ATM Bank', 50000, 'Sabji Mandi', '1', 3, '', '5ad91f5937d5a.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--
-- Creation: Apr 03, 2018 at 04:22 PM
--

CREATE TABLE `userinfo` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `customertype` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `userinfo`:
--

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `name`, `email`, `password`, `mobile`, `customertype`) VALUES
(6, 'rahulR', 'rr1234@gmail.com', 'NE1NTVo1bjBZQXg4N2ZUVU51TlNVdz09 ', '7894561230', 'Agent'),
(7, 'rahulRathore', 'rr124@gmail.com', 'UVdWbEd3bTJmR3p4RVA4N3NlUURRQT09 ', '7894561230', 'Agent'),
(8, 'pranita', 'pranita@gmail.com', 'eHBUZ2pHQVlZeWVXeDNEODJ3cEQxQT09 ', '8120192979', 'Buyer/owner'),
(9, 'pranita u', 'pranita@gmail.com', 'MGpSc1BqUFUwQXY5TnYwMVl5UTlrQT09 ', '8120192979', 'Builder'),
(10, 'lucky', 'lucky@gmail.com', 'WkNYYWhiWTBQZ2hIckdiSlJKM25xUT09 ', '9009435343', 'Builder'),
(11, 'rajeev', 'rahul@gmail', 'em5jK2xpdjhQOUxTbSs1dlV4RTkxQT09 ', '', 'Agent'),
(12, 'Neha', 'neha21@gmail.com', 'UVdWbEd3bTJmR3p4RVA4N3NlUURRQT09 ', '548721369', 'Buyer/owner'),
(13, '', '', 'MUxURkNBKzFHSXJHMDZMMkZDaFByQT09 ', '', 'Agent'),
(14, 'rr', 'afsfssd@gmail.com', 'em5jK2xpdjhQOUxTbSs1dlV4RTkxQT09 ', '1234567890', ''),
(15, 'praveen', 'praveen@gmail.com', 'em5jK2xpdjhQOUxTbSs1dlV4RTkxQT09 ', '1234567890', 'Buyer/owner'),
(16, 'praveena', 'praveena@gmail.com', 'em5jK2xpdjhQOUxTbSs1dlV4RTkxQT09 ', '1234567890', 'Agent'),
(17, 'praveena', 'praveena@gmail.com', 'em5jK2xpdjhQOUxTbSs1dlV4RTkxQT09 ', '1234567890', 'Agent'),
(18, 'praveena', 'praveena@gmail.com', 'em5jK2xpdjhQOUxTbSs1dlV4RTkxQT09 ', '1234567890', 'Agent'),
(19, 'praveena', 'praveena@gmail.com', 'UlNkNTRlZ3BVRG50bmJPVGkzN1lCZz09 ', '1234567890', 'Agent'),
(20, 'praveena', 'praveena@gmail.com', 'em5jK2xpdjhQOUxTbSs1dlV4RTkxQT09 ', '1234567890', 'Agent'),
(21, 'praveena', 'praveena@gmail.com', 'em5jK2xpdjhQOUxTbSs1dlV4RTkxQT09 ', '1234567890', 'Agent'),
(22, 'praveena', 'praveena@gmail.com', 'em5jK2xpdjhQOUxTbSs1dlV4RTkxQT09 ', '1234567890', 'Agent'),
(23, 'praveena', 'praveena@gmail.com', 'd3ZWczJiejBVcXA3YWtIYnBSOW9OZz09 ', '1234567890', 'Agent'),
(24, 'ram', 'ram1@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '1234567890', 'Builder'),
(25, 'sumit', 'sumit@gmail.com', '397aa26b5908400f043291c2fb7acc9fd23cadd74d69b711ccfef23b39e01529', '9999999999', 'Buyer/owner'),
(26, 'govinda', 'gogo@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '1234567890', 'Buyer/owner'),
(27, 'rajeev', 'ranjan@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '9999999999', 'Builder'),
(28, 'rahul', 'rahul9@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '7894561230', 'Buyer/owner'),
(29, 'rituraj', 'ritu@gmail.com', 'd98e253c610c35e51c5cf9374d860f381e4932c51ab16f771e046fa30cdfdbae', '9998887771', 'Buyer/owner'),
(30, 'rituraj', 'ritu1@gmail.com', 'd98e253c610c35e51c5cf9374d860f381e4932c51ab16f771e046fa30cdfdbae', '9998887771', 'Buyer/owner'),
(31, 'sneha', 'sneha@gmail.com', 'f34836741a64df33b46c45cbce0a18d53495339ff00d6d6d5619aee4e13036bb', '9998887771', 'Builder'),
(32, 'sneha', 'sneha1@gmail.com', 'f34836741a64df33b46c45cbce0a18d53495339ff00d6d6d5619aee4e13036bb', '9998887771', 'Builder'),
(33, 'Rahul Rathore', 'sriturajrathore99@gmail.com', 'c775e7b757ede630cd0aa1113bd102661ab38829ca52a6422ab782862f268646', '9998887771', 'Buyer/owner'),
(34, 'rajeev gadha', 'rajeevgadha@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '1234567890', 'Buyer/owner'),
(35, 'Neha', 'neha2441@gmail.com', '8bb0cf6eb9b17d0f7d22b456f121257dc1254e1f01665370476383ea776df414', '9425575011', 'Buyer/owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityId`),
  ADD UNIQUE KEY `cityName` (`cityName`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedId`);

--
-- Indexes for table `flat`
--
ALTER TABLE `flat`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`inqId`);

--
-- Indexes for table `pg`
--
ALTER TABLE `pg`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `propertyinfo`
--
ALTER TABLE `propertyinfo`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `Foreign Key` (`uid`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`Pid`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flat`
--
ALTER TABLE `flat`
  MODIFY `Pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `inqId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pg`
--
ALTER TABLE `pg`
  MODIFY `Pid` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `propertyinfo`
--
ALTER TABLE `propertyinfo`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`uid`) REFERENCES `userinfo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

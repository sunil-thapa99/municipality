-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 07:47 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `municipality`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(10) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`) VALUES
(8, 'assets/img/20180724071335.jpg'),
(9, 'assets/img/20180724130326.jpg'),
(10, 'assets/img/20180726072620.jpg'),
(11, 'assets/img/20180726072722.jpg'),
(12, 'assets/img/20180726072820.jpg'),
(13, 'assets/img/20180726074210.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `birthPlace` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `dobAD` date NOT NULL,
  `dobBS` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `citizenship` int(20) NOT NULL,
  `citizenshipIssuePlace` varchar(255) NOT NULL,
  `citizenshipIssueDate` date NOT NULL,
  `passportNum` varchar(20) NOT NULL,
  `passportIssueDate` date NOT NULL,
  `passportIssuePlace` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `ward` varchar(5) NOT NULL,
  `townVillage` varchar(255) NOT NULL,
  `houseNumber` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phNumber` int(10) NOT NULL,
  `landline` int(10) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `annualIncome` int(20) NOT NULL,
  `fatherName` varchar(255) NOT NULL,
  `fatherOccupation` varchar(255) NOT NULL,
  `fatherPhNumber` int(10) NOT NULL,
  `motherName` varchar(255) NOT NULL,
  `motherOccupation` varchar(255) NOT NULL,
  `motherPhNumber` int(10) NOT NULL,
  `grandFatherName` varchar(255) NOT NULL,
  `grandMotherName` varchar(255) NOT NULL,
  `image_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `fname`, `mname`, `lname`, `birthPlace`, `nationality`, `dobAD`, `dobBS`, `gender`, `citizenship`, `citizenshipIssuePlace`, `citizenshipIssueDate`, `passportNum`, `passportIssueDate`, `passportIssuePlace`, `district`, `municipality`, `ward`, `townVillage`, `houseNumber`, `email`, `phNumber`, `landline`, `occupation`, `annualIncome`, `fatherName`, `fatherOccupation`, `fatherPhNumber`, `motherName`, `motherOccupation`, `motherPhNumber`, `grandFatherName`, `grandMotherName`, `image_id`) VALUES
(2, 'qwerqwer', 'xbvxcvb', 'asfdxcv', 'Kathmandu', 'xcviobuoi', '2018-07-11', '2045-02-12', 'Male', 788945651, 'Kathmandu', '2045-02-12', '65132', '2018-07-11', 'qwerfd', 'Kathmandu', 'zxcvzhtry', '12', 'joijoijoi', '12', 'asdfasdf@gmail.com', 54131365, 789465, 'ijoixcjv', 46546152, 'zyxicuvyzxc', 'ermt,remtn,', 12121313, 'zoxcvpozixpc', 'potyipoiet', 987654321, 'vjvkovc', 'qwerqwer', 8),
(3, 'Sunil', '', 'Thapa', 'Kathmandu', 'Nepal', '1999-03-17', '2055-12-03', 'Male', 24, 'Kathmandu', '2074-01-24', '', '0000-00-00', '', 'Kathmandu', 'Kathmandu', '12', 'Nayabazar', '0123', 'sunil43thapa@gmail.com', 2147483647, 0, 'Student', 999999, 'Lok Bahadur Thapa', 'Business Man', 2147483647, 'Tej Kumari Thapa', 'House Wife', 2147483647, 'Kamal Bahadur Thapa', 'Suntali Thapa', 9),
(4, 'tikaram ', '', 'joshi', 'Kathmandu', 'Nepal', '2017-09-13', '2049-07-21', 'Male', 45584152, 'Kathmandu', '2049-07-21', '', '0000-00-00', '', 'Kathmandu', 'kathmandu', '11', 'balkumari', '2', 'malikaincorporate@gmail.com', 2147483647, 0, 'business', 10000100, 'abc', 'abc', 25465444, 'abc', 'test', 5121525, 'abc', 'abc', 12),
(5, 'Kushal ', '', 'Sharma', 'Lalitpur', 'Nepali', '1987-05-28', '2044-02-14', 'Male', 53084305, 'Lalitpur', '2063-12-30', '', '0000-00-00', '', 'Kathmandu', 'biratnagar', '19', 'rani', '411', 'kushalthedoctor@gmail.com', 2147483647, 0, 'business', 20000000, 'Ajay Sharma', 'Business', 2147483647, 'Bharti Devi Sharma', 'House Wife', 2147483647, 'Bhisma dev Sharma', 'Sushila Devi Sharma', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `person_image_id` (`image_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_image_id` FOREIGN KEY (`image_id`) REFERENCES `image` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

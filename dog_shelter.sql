-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 09:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dog_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `dog_shelter`
--

CREATE TABLE `dog_shelter` (
  `DogShelterID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `LOCATION` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dog_shelter`
--

INSERT INTO `dog_shelter` (`DogShelterID`, `username`, `password`, `name`, `LOCATION`, `email`, `phone_number`) VALUES
(123, 'test123', 'test123', 'test', 'test', 'test', 'test'),
(259384, 'richdogs', 'richdogs232', 'Rich Dogs', 'Richmond', 'richdogs@gmail.com', '2321892834'),
(343281, 'test2', 'test2', 'Dogs in DC', 'Washington D.C.', 'dogsindc@gmail.com', '7049390401'),
(343283, 'CvilleDogs', '830cville', 'Charlottesville Dog Shelter', 'Charlottesville', 'cvilledogs@gmail.com', '8309298444'),
(432464, 'JimRyan', 'Ilovedogs', 'Jim’s Dog Shelter', ' Charlottesville', 'jim.ryan@gmail.com', '2290384923'),
(545242, '', '', 'One Loudoun Dog Shelter', 'Ashburn', 'OLDS@gmail.com', '5713948395'),
(554837, '', '', 'Happy Pups Shelter', 'Reston', 'happypups@gmail.com', '5612873894'),
(746247, '', '', 'Sunny Sands Shelter', 'Virginia Beach', 'sunnysands@gmail.com', '1374828394'),
(833192, '', '', 'Blacksburg Dogs', 'Blacksburg', 'blacksburgdogs@gmail.com', '1123824943'),
(866491, '', '', 'Paws for Applause', 'Fairfax', 'pawsshelter@gmail.com', '8002255989'),
(877241, '', '', 'Friends of Dogs No Kill Shelter', 'Charlottesville', 'FDNKS@gmail.com', '1234555555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dog_shelter`
--
ALTER TABLE `dog_shelter`
  ADD PRIMARY KEY (`DogShelterID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

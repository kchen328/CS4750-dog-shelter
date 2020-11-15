-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2020 at 09:06 PM
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
-- Table structure for table `potential_adopter`
--

CREATE TABLE `potential_adopter` (
  `AdopterID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL CHECK (`age` >= 18),
  `LOCATION` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `living_style` varchar(255) DEFAULT NULL,
  `number_of_kids` int(11) DEFAULT NULL,
  `number_of_adults` int(11) DEFAULT NULL,
  `activeness_level` varchar(255) DEFAULT NULL,
  `max_age` int(11) DEFAULT NULL,
  `max_price` int(11) DEFAULT NULL,
  `hypoallergenic` tinyint(1) DEFAULT NULL,
  `additional_information` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potential_adopter`
--

INSERT INTO `potential_adopter` (`AdopterID`, `username`, `password`, `first_name`, `last_name`, `gender`, `age`, `LOCATION`, `email`, `living_style`, `number_of_kids`, `number_of_adults`, `activeness_level`, `max_age`, `max_price`, `hypoallergenic`, `additional_information`) VALUES
(6843, 'ReneePark', 'RPark', 'Renee', 'Park', 'F', 41, 'Lovettsville', 'rfpark@yahoo@com', 'Single family home', 0, 1, 'low', 20, 200, 1, ' '),
(12345, 'test', 'test', 'Cathy', 'Nguyen', 'F', 21, 'Charlottesville', 'cathysemail@virginia.edu', 'City apartment', 0, 1, 'low', 20, 10000, 1, 'I have a cat at home it would have to get along with'),
(12346, '', '', 'Kat', 'Kemper', 'F', 20, 'Charlottesville', 'kat@virginia.edu', 'City apartment', 0, 2, 'low', 5, 500, 0, 'None'),
(14300, '', '', 'Quincy', 'Ray', 'F', 21, 'Ashburn', 'qaray@neu.edu', 'suburban home', 0, 1, 'low', 20, 300, 1, 'I go to school virtually so I can take care of a dog'),
(22123, '', '', 'Shreyas', 'Mehta', 'M', 20, 'Charlottesville', 'shreyascville@virginia.edu', 'City apartment', 0, 4, 'low', 2, 100, 0, 'I have a 3 roommates who have dogs'),
(22356, '', '', 'Frank', 'Senato', 'M', 35, 'Charlottesville', 'frankieps3@gmail.edu', 'City apartment', 2, 1, 'low', 10, 100, 1, ' '),
(23456, '', '', 'Kelly', 'Chen', 'F', 20, '123 Main Street', 'fakeemail@virginia.edu', 'Suburban home', 0, 3, 'low', 20, 10000, 0, 'None'),
(33333, '', '', 'Catherine', 'Le', 'F', 50, 'Ashburn', 'dogloveraddress@vt.edu', 'Single family home', 3, 2, 'any', 100, 5000, 1, 'Nope'),
(39202, '', '', 'Max', 'Smith', 'M', 50, 'Chicago', 'maxwell@gmail.com', 'City apartment', 5, 1, 'medium', 2, 250, 0, 'I have two cats'),
(39209, '', '', 'Anna', 'Brower', 'F', 21, 'Charlottesville', 'annab@gmail.com', 'Suburban', 0, 3, 'High', 10, 350, 0, 'None'),
(44543, '', '', 'Lindsay', 'Bowden', 'F', 20, 'Charlottesville', 'lindsyd@virginia.edu', 'House', 0, 4, 'low', 20, 10000, 1, 'I live in a sorority house so she would have to be social'),
(55355, '', '', 'Tim', 'French', 'M', 22, 'Charlottesville', 'tjf8921@virginia.edu', 'House', 0, 8, 'low', 5, 150, 0, ' '),
(69900, '', '', 'Jason', 'Mandoza', 'M', 27, 'Farmville', 'DJasonmandoza@yahoo.com', 'shared house', 5, 0, 'low', 20, 150, 1, 'I have a cat'),
(77733, '', '', 'Patrick', 'Leonard', 'M', 21, 'Charlottesville', 'patrickpj@virginia.edu', 'City apartment', 0, 2, 'low', 20, 10000, 1, 'We have a large dog who gets along well with big dogs'),
(90877, '', '', 'Cristiano', 'Ronaldo', 'M', 35, 'Los Angeles', 'therealcristianoronaldo@gmail.com', 'Family home', 4, 2, 'high', 25, 10000000, 0, 'I have a big backyard'),
(98760, '', '', 'John', 'Doe', 'M', 54, '000 Fake Address', 'johndoe@gmail.com', 'Farmhouse', 2, 2, 'high', 10, 200, 0, 'Must be ok with other animals');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `potential_adopter`
--
ALTER TABLE `potential_adopter`
  ADD PRIMARY KEY (`AdopterID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

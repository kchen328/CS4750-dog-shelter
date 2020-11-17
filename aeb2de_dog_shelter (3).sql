
--
-- Table structure for table `dog`
--

CREATE TABLE `dog` (
  `DogID` int NOT NULL,
  `Preferred_environment` varchar(255) DEFAULT NULL,
  `Dog_breed` varchar(255) DEFAULT NULL,
  `dog_size` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `activeness_level` varchar(255) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `name` varchar(120) NOT NULL,
  `dog_shelter` varchar(255) DEFAULT NULL,
  `current_location` varchar(255) DEFAULT NULL,
  `shots_uptodate` tinyint(1) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `hypoallergenic` tinyint(1) DEFAULT NULL,
  `price` int NOT NULL,
  `ok_with_kids` tinyint(1) DEFAULT NULL,
  `ok_with_other_pets` tinyint(1) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dog`
--

INSERT INTO `dog` (`DogID`, `Preferred_environment`, `Dog_breed`, `dog_size`, `color`, `activeness_level`, `age`, `name`, `dog_shelter`, `current_location`, `shots_uptodate`, `gender`, `hypoallergenic`, `price`, `ok_with_kids`, `ok_with_other_pets`, `description`, `image`) VALUES
(1, 'Apartment', 'Pomeranian', 'small', 'white', 'high', 2, 'Bella', 'Charlottesville Dog Shelter', 'Charlottesville', 0, 'F', 0, 100, 0, 0, 'very high energy', '1.jpg'),
(2, 'Any', 'Japanese Chin', 'small', 'black and white', 'medium', 11, 'Panda', 'Dogs in DC', 'Washington D.C.', 1, 'M', 0, 50, 1, 0, 'friendly dog looking for a home!', '2.jpg'),
(3, 'Any', 'Lab', 'large', 'brown', 'high', 9, 'Buddy', 'Friends of Dogs No Kill Shelter', 'Charlottesville', 1, 'M', 0, 80, 1, 1, 'loves to play fetch', '3.jpg'),
(4, 'Farmhouse', 'Beagle', 'medium', 'brown and white', 'high', 1, 'Benny', 'Dogs in DC', 'Washington D.C.', 1, 'M', 0, 90, 0, 1, 'loving beagle looking for a forever home', '4.jpg'),
(5, 'City', 'Poodle', 'medium', 'black', 'low', 3, 'Princess', 'Friends of Dogs No Kill Shelter', 'Charlottesville', 0, 'F', 1, 200, 1, 1, 'looking for her castle to stay in!', '5.jpg'),
(6, 'Suburban', 'Greyhound', 'large', 'white', 'high', 2, 'Bunny', 'Dogs in DC', 'Washington D.C', 1, 'F', 0, 200, 1, 1, 'loves kids and loves long walks ', '6.jpg'),
(7, 'Suburban', 'Chihuahua', 'small', 'black', 'low', 14, 'Jim', 'Dogs in DC', 'Washington D.C.', 1, 'M', 0, 250, 1, 1, 'very friendly and great with kids!', '7.jpg'),
(8, 'City', 'French Bulldog', 'small', 'grey', 'medium', 1, 'Frank', 'Charlottesville Dog Shelter', 'Charlottesville', 0, 'M', 0, 150, 1, 0, 'looking for a loving home!', '8.jpg'),
(9, 'Any', 'Shiba Inu', 'medium', 'tan and white', 'medium', 5, 'Toast', 'One Loudoun Dog Shelter', 'Ashburn', 0, 'M', 0, 100, 1, 0, 'loves playing fetch!', '9.jpg'),
(10, 'Suburban', 'Bulldog', 'medium', 'brown and white', 'low', 8, 'Bobby', 'Rich Dogs', 'Richmond', 1, 'M', 0, 200, 1, 1, 'loves belly rubs!', '10.jpg'),
(11, 'Any', 'Golden Retriever', 'large', 'yellow', 'high', 3, 'Goldie', 'Happy Pups Shelter', 'Reston', 1, 'F', 1, 250, 1, 1, 'loves to swim!', '11.jpg'),
(12, 'Suburban', 'Mixed', 'medium', 'brown', 'medium', 7, 'Lola', 'Sunny Sands Shelter', 'Virginia Beach', 1, 'F', 0, 50, 1, 1, 'need to watch her diet', '12.jpg'),
(13, 'Any', 'German Shepherd', 'large', 'black and brown', 'high', 6, 'Sammie', 'Jim’s Dog Shelter', 'Charlottesville', 1, 'M', 0, 300, 1, 1, 'looking for a home!', '13.jpg'),
(14, 'Any', 'Bichon Frise', 'medium', 'white', 'low', 2, 'Alfie', 'Jim’s Dog Shelter', 'Charlottesville', 1, 'M', 1, 400, 1, 0, 'very fluffy!', '14.jpg'),
(15, 'Any', 'Golden Retriever', 'large', 'yellow', 'medium', 7, 'Wasabi', 'Paws for Applause', 'Fairfax', 1, 'M', 0, 200, 0, 0, 'anxious with kids and other pets', '15.jpg'),
(16, 'Apartment', 'Shih Tzu', 'small', 'grey and white', 'low', 2, 'Lisa', 'Blacksburg Dogs', 'Blacksburg', 1, 'F', 1, 100, 1, 1, 'loves eating chicken', '16.jpg'),
(17, 'Any', 'Chow chow', 'large', 'brown', 'medium', 5, 'Mia', 'One Loudoun Dog Shelter', 'Ashburn', 1, 'F', 0, 300, 1, 1, 'very fluffy', '17.jpg'),
(18, 'Suburban', 'Beagle', 'medium', 'brown and white', 'low', 5, 'Kayla', 'Sunny Sands Shelter', 'Virginia Beach', 1, 'F', 0, 200, 0, 1, 'needs specialized diet', '18.jpg'),
(19, 'Any', 'Cocker Spaniel', 'medium', 'brown', 'medium', 4, 'Mickey', 'Paws for Applause', 'Fairfax', 1, 'M', 0, 100, 1, 1, 'Minnie’s brother', '19.jpg'),
(20, 'Any', 'Cocker Spaniel', 'medium', 'brown and white', 'medium', 4, 'Minnie', 'Paws for Applause', 'Fairfax', 1, 'F', 0, 100, 1, 1, 'Mickey’s sister', '20.jpg'),
(21, 'Any', 'Shar Pei', 'large', 'brown', 'low', 12, 'Jack', 'Blacksburg Dogs', 'Blacksburg', 1, 'M', 0, 150, 1, 1, 'a very chill dog', '21.jpg'),
(22, 'Any', 'Samoyed', 'large', 'white', 'medium', 1, 'Snow', 'Jim’s Dog Shelter', 'Charlottesville', 0, 'F', 0, 500, 1, 0, 'fluffy', '22.jpg'),
(23, 'Any', 'Mixed', 'small', 'black', 'high', 9, 'Love', 'Happy Pups Shelter', 'Reston', 1, 'F', 0, 60, 1, 1, 'very friendly and playful', '23.jpg'),
(24, 'Any', 'Husky', 'large', 'black and white', 'high', 3, 'Fido', 'One Loudoun Dog Shelter', 'Ashburn', 1, 'M', 0, 300, 0, 0, 'chases animals around', '24.jpg'),
(25, 'Any', 'Dachshund', 'small', 'black and brown', 'medium', 5, 'Sausage', 'Sunny Sands Shelter', 'Virginia Beach', 1, 'F', 0, 250, 1, 1, 'will steal treats', '25.jpg'),
(26, 'Any', 'Rottweiler', 'large', 'black and brown', 'high', 3, 'Spike', 'Happy Pups Shelter', 'Reston', 1, 'M', 0, 200, 1, 1, 'very friendly and looking for a home!', '26.jpg'),
(27, 'Rural or suburban', 'Lab-Pitt mix', 'large', 'yellow', 'low', 4, 'Luke Bryan', 'Happy Pups Shelter', 'Reston', 0, 'F', 1, 150, 1, 1, 'Very timid, big softie', '27.jpg'),
(28, 'Rural or suburban', 'Pitt bull', 'large', 'brindle', 'medium', 1, 'Toby', 'One Loudoun Dog Shelter', 'Ashburn', 0, 'M', 0, 100, 1, 1, 'Came from hard background, scared of other dogs', '28.jpg'),
(29, 'Rural or suburban', 'Staffordshire Terrier', 'large', 'Brown', 'medium', 1, 'George', 'One Loudoun Dog Shelter', 'Ashburn', 0, 'M', 0, 100, 1, 1, 'Needs big backyard', '29.jpg'),
(30, 'Rural or suburban', 'Lab mix', 'large', 'Brown', 'medium', 1, 'Luna', 'Rich Dogs', 'Richmond', 0, 'F', 0, 100, 1, 1, 'Best friends with Beca', '30.jpg'),
(31, 'Any', 'Beagle mix', 'medium', 'Brown', 'medium', 1, 'Beca', 'Rich Dogs', 'Richmond', 0, 'F', 0, 100, 1, 1, 'Best friends with Luna', '31.jpg'),
(32, 'Any', 'Lab mix', 'large', 'Brown', 'medium', 1, 'Beamer', 'Dogs in DC', 'Washington D.C.', 0, 'M', 0, 100, 1, 1, 'Great with kids, dogs, and cats', '32.jpg'),
(33, 'Rural', 'Shepherd mix', 'large', 'Brown', 'medium', 1, 'Boomer', 'Charlottesville Dog Shelter', 'Charlottesville', 0, 'M', 0, 100, 1, 1, 'Great with kids, dogs, and cats', '33.jpg'),
(34, 'Rural', 'German Shepherd', 'large', 'Brown', 'medium', 1, 'Sage', 'Blacksburg Dogs', 'Blacksburg', 0, 'M', 0, 100, 1, 1, 'Not good with men', '34.jpg'),
(35, 'Rural', 'Shepherd mix', 'large', 'Brown', 'medium', 1, 'Stella', 'Blacksburg Dogs', 'Blacksburg', 0, 'F', 0, 150, 1, 1, '', '35.jpg'),
(36, 'Rural', 'Hound mix', 'medium', 'Brown', 'medium', 1, 'Rose', 'Happy Pups Shelter', 'Reston', 0, 'F', 0, 150, 1, 1, '', '36.jpg'),
(37, 'Any', 'Mixed', 'medium', 'Brown', 'medium', 1, 'Darrell', 'Charlottesville Dog Shelter', 'Charlottesville', 0, 'M', 0, 200, 1, 1, 'Great with other dogs!', '37.jpg'),
(38, 'Any', 'Lab', 'large', 'Black', 'medium', 1, 'Jake', 'Charlottesville Dog Shelter', 'Charlottesville', 0, 'M', 0, 200, 1, 1, 'Scared of other dogs', '38.jpg'),
(39, 'Any', 'Lab', 'large', 'Yellow', 'medium', 1, 'Iris', 'Charlottesville Dog Shelter', 'Charlottesville', 0, 'F', 0, 200, 1, 1, 'Great with small dogs', '39.jpg'),
(40, 'Any', 'Lab mix', 'large', 'Brown', 'medium', 1, 'Rettenah', 'Sunny Sands Shelter', 'Virginia Beach', 0, 'F', 0, 300, 1, 1, 'Blind', '40.jpg'),
(41, 'Any', 'Lab mix', 'large', 'Yellow', 'medium', 1, 'Buddy', 'Rich Dogs', 'Richmond', 0, 'M', 0, 300, 1, 1, '', '41.jpg'),
(42, 'Any', 'Beagle mix', 'medium', 'Brown', 'medium', 1, 'Underdog', 'Dogs in DC', 'Washington D.C.', 0, 'M', 0, 300, 1, 1, '', '42.jpg'),
(43, 'Rural', 'Doberman', 'Large', 'Black', 'high', 9, 'Dino', 'Jim’s Dog Shelter', 'Charlottesville', 0, 'M', 0, 300, 1, 0, '', '43.jpg'),
(44, 'Rural', 'Lab', 'Large', 'Black', 'high', 4, 'Jimmy', 'Jim’s Dog Shelter', 'Charlottesville', 0, 'M', 0, 300, 1, 0, '', '44.jpg'),
(45, 'Rural', 'Husky mix', 'Large', 'black and white', 'high', 4, 'Maya', 'Friends of Dogs No Kill Shelter', 'Charlottesville', 0, 'F', 0, 300, 1, 0, '', '45.jpg'),
(46, 'Any', 'Terrier mix', 'Small', 'black and brown', 'medium', 3, 'Shadow', 'Dogs in DC', 'Washington D.C.', 0, 'M', 0, 300, 1, 1, '', '46.jpg'),
(47, 'Any', 'Lab', 'Large', 'Brown', 'medium', 2, 'Aspen', 'Friends of Dogs No Kill Shelter', 'Charlottesville', 0, 'M', 0, 100, 1, 1, '', '47.jpg'),
(48, 'Any', 'Lab mix', 'large', 'yellow', 'medium', 6, 'Paul', 'Jim’s Dog Shelter', 'Charlottesville', 0, 'M', 0, 100, 1, 1, '', '48.jpg'),
(49, 'Any', 'Shepherd mix', 'large', 'black and brown', 'medium', 6, 'Maxim', 'Friends of Dogs No Kill Shelter', 'Charlottesville', 0, 'M', 0, 100, 1, 1, '', '49.jpg'),
(50, 'Any', 'Rottweiler-Lab mix', 'medium', 'black and brown', 'medium', 6, 'Rosie', 'Paws for Applause', 'Fairfax', 0, 'F', 0, 150, 1, 1, '', '50.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dog_shelter`
--

CREATE TABLE `dog_shelter` (
  `DogShelterID` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dog_shelter`
--

INSERT INTO `dog_shelter` (`DogShelterID`, `username`, `password`, `name`, `location`, `email`, `phone_number`) VALUES
(1, '', '', 'Friends of Dogs No Kill Shelter', 'Charlottesville', 'FDNKS@gmail.com', '1234555555'),
(2, '', 'aa', 'Charlottesville Dog Shelter', 'Charlottesville', 'cvilledogs@gmail.com', '8309298444'),
(3, '', 'b', 'One Loudoun Dog Shelter', 'Ashburn', 'OLDS@gmail.com', '5713948395'),
(4, '', '', 'Paws for Applause', 'Fairfax', 'pawsshelter@gmail.com', '8002255989'),
(5, '', '', 'One Loudoun Dog Shelter', 'Ashburn', 'OLDS@gmail.com', '5713948395'),
(6, '', '', 'Blacksburg Dogs', 'Blacksburg', 'blacksburgdogs@gmail.com', '1123824943'),
(7, '', '', 'Happy Pups Shelter', 'Reston', 'happypups@gmail.com', '5612873894'),
(8, '', '', 'Rich Dogs', 'Richmond', 'richdogs@gmail.com', '2321892834'),
(9, '', '', 'Sunny Sands Shelter', 'Virginia Beach', 'sunnysands@gmail.com', '1374828394'),
(10, '', '', 'Jims Dog Shelter', ' Charlottesville', 'jim.ryan@gmail.com', '2290384923'),
(11, '', '', 'Anna', 'Charlottesville', 'anna@email.com', '8900002'),
(12, '', '', 'Anna', 'Charlottesville', 'anna@email.com', '8900002'),
(17, 'a', 'a', 'a', 'a', 'a', 'a'),
(18, 'tests', '$2y$10$VRcBnSmMbMxXMgoxU9lMKOYObj.7vluyuzwTkdrtPgI4CBWy1CAiG', 'tests', 'test', 'test', 'test'),
(20, 'testing1', '$2y$10$w/hYRF9KGqLmxNp6B9wo1ea4zZMv71KAiHCoGleTKEna8CyNUoZbO', 'test test', '85 Engineer\'s Way', 'test@virginia.edu', '474774'),
(21, 'annatest', 'annatest', 'annatest', 'annatest', 'dsafksl', '7573647'),
(22, 'admin', '$2y$10$mqk/wRloDzs3kkRx9tcDl.lYFbbYry3zrJaC51LMU6Rk.ehzaadLK', 'sadfk', 'home', 'dfsakl', 'sadfaskl');

-- --------------------------------------------------------

--
-- Table structure for table `dog_underlying_conditions`
--

CREATE TABLE `dog_underlying_conditions` (
  `DogID` int NOT NULL,
  `underlying_conditions` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dog_underlying_conditions`
--

INSERT INTO `dog_underlying_conditions` (`DogID`, `underlying_conditions`) VALUES
(2, 'broken'),
(2, 'hurt'),
(2, 'Missing eye'),
(2, 'Missing leg');

-- --------------------------------------------------------

--
-- Table structure for table `interested_in`
--

CREATE TABLE `interested_in` (
  `AdopterID` int NOT NULL,
  `DogID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `interested_in`
--

INSERT INTO `interested_in` (`AdopterID`, `DogID`) VALUES
(6, 1),
(14, 1),
(1, 6),
(1, 14),
(1, 22),
(1, 24),
(1, 25),
(1, 26);

-- --------------------------------------------------------

--
-- Table structure for table `potential_adopter`
--

CREATE TABLE `potential_adopter` (
  `AdopterID` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `age` int DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `living_style` varchar(255) DEFAULT NULL,
  `number_of_kids` int DEFAULT NULL,
  `number_of_adults` int DEFAULT NULL,
  `activeness_level` varchar(255) DEFAULT NULL,
  `max_age` int DEFAULT NULL,
  `max_price` int DEFAULT NULL,
  `hypoallergenic` tinyint(1) DEFAULT NULL,
  `additional_information` varchar(255) DEFAULT NULL
) ;

--
-- Dumping data for table `potential_adopter`
--

INSERT INTO `potential_adopter` (`AdopterID`, `username`, `password`, `first_name`, `last_name`, `gender`, `age`, `location`, `email`, `living_style`, `number_of_kids`, `number_of_adults`, `activeness_level`, `max_age`, `max_price`, `hypoallergenic`, `additional_information`) VALUES
(1, 'test', 'test', 'Cathy', 'Nguyen', 'F', 21, 'Charlottesville', 'cathysemail@virginia.edu', 'City apartment', 0, 1, 'low', 20, 10000, 1, 'I have a cat at home it would have to get along with'),
(2, '', '', 'Catherine', 'Le', 'F', 50, 'Ashburn', 'dogloveraddress@vt.edu', 'Single family home', 3, 2, 'any', 100, 5000, 1, 'Nope'),
(3, '', '', 'John', 'Doe', 'M', 54, '000 Fake Address', 'johndoe@gmail.com', 'Farmhouse', 2, 2, 'high', 10, 200, 0, 'Must be ok with other animals'),
(4, '', '', 'Kelly', 'Chen', 'F', 20, '123 Main Street', 'fakeemail@virginia.edu', 'Suburban home', 0, 3, 'low', 20, 10000, 0, 'None'),
(5, '', '', 'Cristiano', 'Ronaldo', 'M', 35, 'Los Angeles', 'therealcristianoronaldo@gmail.com', 'Family home', 4, 2, 'high', 25, 10000000, 0, 'I have a big backyard'),
(6, '', '', 'Kat', 'Kemper', 'F', 20, 'Charlottesville', 'kat@virginia.edu', 'City apartment', 0, 2, 'low', 5, 500, 0, 'None'),
(7, '', '', 'Anna', 'Brower', 'F', 21, 'Charlottesville', 'annab@gmail.com', 'Suburban', 0, 3, 'High', 10, 350, 0, 'None'),
(8, '', '', 'Max', 'Smith', 'M', 50, 'Chicago', 'maxwell@gmail.com', 'City apartment', 5, 1, 'medium', 2, 250, 0, 'I have two cats'),
(9, 'ReneePark', 'RPark', 'Renee', 'Park', 'F', 41, 'Lovettsville', 'rfpark@yahoo@com', 'Single family home', 0, 1, 'low', 20, 200, 1, ' '),
(10, '', '', 'Frank', 'Senato', 'M', 35, 'Charlottesville', 'frankieps3@gmail.edu', 'City apartment', 2, 1, 'low', 10, 100, 1, ' '),
(11, '', '', 'Quincy', 'Ray', 'F', 21, 'Ashburn', 'qaray@neu.edu', 'suburban home', 0, 1, 'low', 20, 300, 1, 'I go to school virtually so I can take care of a dog'),
(12, '', '', 'Patrick', 'Leonard', 'M', 21, 'Charlottesville', 'patrickpj@virginia.edu', 'City apartment', 0, 2, 'low', 20, 10000, 1, 'We have a large dog who gets along well with big dogs'),
(13, '', '', 'Jason', 'Mandoza', 'M', 27, 'Farmville', 'DJasonmandoza@yahoo.com', 'shared house', 5, 0, 'low', 20, 150, 1, 'I have a cat'),
(14, '', '', 'Tim', 'French', 'M', 22, 'Charlottesville', 'tjf8921@virginia.edu', 'House', 0, 8, 'low', 5, 150, 0, ' '),
(15, '', '', 'Shreyas', 'Mehta', 'M', 20, 'Charlottesville', 'shreyascville@virginia.edu', 'City apartment', 0, 4, 'low', 2, 100, 0, 'I have a 3 roommates who have dogs'),
(16, '', '', 'Lindsay', 'Bowden', 'F', 20, 'Charlottesville', 'lindsyd@virginia.edu', 'House', 0, 4, 'low', 20, 10000, 1, 'I live in a sorority house so she would have to be social'),
(45, '', '', 'a', 'a', 'a', 32, 'a', 'a', 'a', 1, 2, 'very', 1, 2, 0, 'a'),
(46, '', '', 'a', 'a', 'femal', 25, 'llk', 'lakjelj', 'lkjl', 3, 2, 'very', 1, 2, 0, 'none'),
(47, '', '', 'abe', 'a', 'femal', 25, 'llk', 'email', 'lkjl', 3, 2, 'very', 1, 2, 0, 'none'),
(48, '', '', 'abe', 'a', 'femal', 25, 'llk', 'another', 'lkjl', 3, 2, 'very', 1, 2, 0, 'none'),
(50, '', '', 'abe', 'a', 'femal', 25, 'llk', 'kjljlkjlkjwlkj', 'lkjl', 3, 2, 'very', 1, 2, 0, 'none'),
(52, '', '', 'abe', 'a', 'femal', 25, 'llk', 'kjljlkjlkjweelkj', 'lkjl', 3, 2, 'very', 1, 2, 0, 'none'),
(54, '', '', 'abe', 'a', 'femal', 25, 'llk', 'final', 'lkjl', 3, 2, 'very', 1, 2, 0, 'none'),
(57, '', '', 'abe', 'a', 'femal', 25, 'llk', 'what', 'lkjl', 3, 2, 'very', 1, 2, 0, 'none'),
(59, '', '', 'kjl', 'ljl', 'klj', 30, 'lkj', 'klj', 'lkj', 1, 1, 'high', 1, 1, 1, 'None'),
(61, '', '', 'kjlkj', 'lkjlkjl', 'kl', 49, 'kjklj', 'bkjlkejrl', 'hao', 10, 10, 'kjk', 1, 1, 0, 'jlk'),
(64, 'new', 'pass', 'Lacy', 'Lone', 'Fem', 39, 'Charlottesville', 'email@email', 'Home', 3, 3, 'Very', 10, 10, 0, 'None'),
(65, 'test890', '$2y$10$RyWa6J87jDnRt1XgqpJ05eIDHf4aEb9z2tyKnUwgk02oLq7gZg176', 'test890', 'test890', 'F', 22, 'test890', 'test890', 'test890', 2, 3, 'slow', 12, 500, 0, 'dfjakslfjdklsafj'),
(68, 'anna', '$2y$10$8/cAIVJcArRDlp0jQfuyoelya6TjElCp1SL16s2Q1dcGrhfyGmRAK', 'test', 'test', 'F', 22, '85 Engineer\'s Way', 'test@virginia.edu', 'test890', 2, 2, 'low', 22, 22, 1, 'dsankl');

-- --------------------------------------------------------

--
-- Table structure for table `potential_adopter_dog_breed`
--

CREATE TABLE `potential_adopter_dog_breed` (
  `AdopterID` int NOT NULL,
  `dog_breed` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `potential_adopter_dog_breed`
--

INSERT INTO `potential_adopter_dog_breed` (`AdopterID`, `dog_breed`) VALUES
(1, 'Pitt bull'),
(45, 'any'),
(46, 'Shiba Inu'),
(46, 'Shih Tzu'),
(46, 'Staffordshire Terrier'),
(47, 'any'),
(47, 'Shiba Inu'),
(47, 'Shih Tzu'),
(47, 'Staffordshire Terrier'),
(48, 'grey and white'),
(48, 'Shiba Inu'),
(48, 'Shih Tzu'),
(48, 'Staffordshire Terrier'),
(48, 'white with brown spots'),
(50, 'grey and white'),
(50, 'Shiba Inu'),
(50, 'Shih Tzu'),
(50, 'Staffordshire Terrier'),
(50, 'white with brown spots'),
(52, 'grey and white'),
(52, 'Shiba Inu'),
(52, 'Shih Tzu'),
(52, 'Staffordshire Terrier'),
(52, 'white with brown spots'),
(54, 'Shiba Inu'),
(54, 'Shih Tzu'),
(54, 'Staffordshire Terrier'),
(57, 'Shiba Inu'),
(57, 'Shih Tzu'),
(57, 'Staffordshire Terrier'),
(59, 'Shar Pei'),
(59, 'Shiba Inu'),
(59, 'Staffordshire Terrier'),
(61, 'Shih Tzu'),
(61, 'Staffordshire Terrier'),
(64, 'Samoyed'),
(64, 'Shepherd mix'),
(64, 'Shiba Inu'),
(65, 'any'),
(68, 'any'),
(68, 'Terrier mix');

-- --------------------------------------------------------

--
-- Table structure for table `potential_adopter_dog_color`
--

CREATE TABLE `potential_adopter_dog_color` (
  `AdopterID` int NOT NULL,
  `dog_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `potential_adopter_dog_color`
--

INSERT INTO `potential_adopter_dog_color` (`AdopterID`, `dog_color`) VALUES
(1, 'black'),
(45, 'any'),
(47, 'any'),
(59, 'tan and white'),
(59, 'white'),
(59, 'white with brown spots'),
(61, 'tan and white'),
(61, 'white'),
(61, 'white with brown spots'),
(64, 'brindle'),
(64, 'brown and white'),
(64, 'tan and white'),
(65, 'any'),
(68, 'any'),
(68, 'yellow');

-- --------------------------------------------------------

--
-- Table structure for table `potential_adopter_dog_size`
--

CREATE TABLE `potential_adopter_dog_size` (
  `AdopterID` int NOT NULL,
  `dog_size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `potential_adopter_dog_size`
--

INSERT INTO `potential_adopter_dog_size` (`AdopterID`, `dog_size`) VALUES
(1, 'small'),
(45, 'small'),
(47, 'small'),
(48, 'large'),
(48, 'small'),
(50, 'large'),
(50, 'small'),
(52, 'large'),
(52, 'small'),
(54, 'large'),
(54, 'small'),
(57, 'large'),
(57, 'small'),
(59, 'small'),
(61, 'medium'),
(64, 'medium'),
(65, 'medium'),
(65, 'small'),
(68, 'small');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`DogID`);

--
-- Indexes for table `dog_shelter`
--
ALTER TABLE `dog_shelter`
  ADD PRIMARY KEY (`DogShelterID`);

--
-- Indexes for table `dog_underlying_conditions`
--
ALTER TABLE `dog_underlying_conditions`
  ADD PRIMARY KEY (`DogID`,`underlying_conditions`);

--
-- Indexes for table `interested_in`
--
ALTER TABLE `interested_in`
  ADD PRIMARY KEY (`AdopterID`,`DogID`),
  ADD KEY `DogID` (`DogID`);

--
-- Indexes for table `potential_adopter`
--
ALTER TABLE `potential_adopter`
  ADD PRIMARY KEY (`AdopterID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `potential_adopter_dog_breed`
--
ALTER TABLE `potential_adopter_dog_breed`
  ADD PRIMARY KEY (`AdopterID`,`dog_breed`);

--
-- Indexes for table `potential_adopter_dog_color`
--
ALTER TABLE `potential_adopter_dog_color`
  ADD PRIMARY KEY (`AdopterID`,`dog_color`);

--
-- Indexes for table `potential_adopter_dog_size`
--
ALTER TABLE `potential_adopter_dog_size`
  ADD PRIMARY KEY (`AdopterID`,`dog_size`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dog`
--
ALTER TABLE `dog`
  MODIFY `DogID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `dog_shelter`
--
ALTER TABLE `dog_shelter`
  MODIFY `DogShelterID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `potential_adopter`
--
ALTER TABLE `potential_adopter`
  MODIFY `AdopterID` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dog_underlying_conditions`
--
ALTER TABLE `dog_underlying_conditions`
  ADD CONSTRAINT `dog_underlying_conditions_ibfk_1` FOREIGN KEY (`DogID`) REFERENCES `dog` (`DogID`) ON DELETE CASCADE;

--
-- Constraints for table `interested_in`
--
ALTER TABLE `interested_in`
  ADD CONSTRAINT `interested_in_ibfk_1` FOREIGN KEY (`DogID`) REFERENCES `dog` (`DogID`) ON DELETE CASCADE,
  ADD CONSTRAINT `interested_in_ibfk_2` FOREIGN KEY (`AdopterID`) REFERENCES `potential_adopter` (`AdopterID`) ON DELETE CASCADE;

--
-- Constraints for table `potential_adopter_dog_breed`
--
ALTER TABLE `potential_adopter_dog_breed`
  ADD CONSTRAINT `potential_adopter_dog_breed_ibfk_1` FOREIGN KEY (`AdopterID`) REFERENCES `potential_adopter` (`AdopterID`) ON DELETE CASCADE;

--
-- Constraints for table `potential_adopter_dog_color`
--
ALTER TABLE `potential_adopter_dog_color`
  ADD CONSTRAINT `potential_adopter_dog_color_ibfk_1` FOREIGN KEY (`AdopterID`) REFERENCES `potential_adopter` (`AdopterID`) ON DELETE CASCADE;

--
-- Constraints for table `potential_adopter_dog_size`
--
ALTER TABLE `potential_adopter_dog_size`
  ADD CONSTRAINT `potential_adopter_dog_size_ibfk_1` FOREIGN KEY (`AdopterID`) REFERENCES `potential_adopter` (`AdopterID`) ON DELETE CASCADE;
COMMIT;

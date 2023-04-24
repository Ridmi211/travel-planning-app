-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2022 at 12:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dream_tour_srilanka`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`ID`, `username`, `password`) VALUES
(8, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Name`, `Email`, `Message`) VALUES
(13, 'Ridmi', 'r@gmail.com', 'I\'m from USA .Can we adjust the mentioned period of time in packages and apply them.                                    '),
(14, 'Peter Parker', 'Peter@gmail.com', '      Are the price ranges negotiable with the increase in people in a team.                                  '),
(15, 'Thenuka bandara', 'thenuka65@gmailo.com', '                            Test text.....        Test text.....     Test text.....     Test text.....     Test text.....     Test text.....     Test text.....                      '),
(16, 'Wijitha Perera', 'Pererea8@gmail.com', '                            Test text.....        Test text.....     Test text.....     Test text.....     Test text.....     Test text.....     Test text.....                      '),
(17, 'Sahan Wijesekara', 'Sahan@gmail.com', '                              Test text.....        Test text.....     Test text.....     Test text.....     Test text.....     Test text.....     Test text.....                    '),
(18, 'Kim So Huyun', 'kim38@gmail.com', '                           Test text.....        Test text.....     Test text.....     Test text.....     Test text.....     Test text.....     Test text.....                       '),
(19, 'Sameera Karunarathna', 'samera35@gmail.com', '                               Test text.....        Test text.....     Test text.....     Test text.....     Test text.....     Test text.....     Test text.....                   '),
(20, 'Janaki kabral', 'Janaki45@gmail.com', '                           Test text.....        Test text.....     Test text.....     Test text.....     Test text.....     Test text.....     Test text.....                       '),
(21, 'Peter pan', 'petr@gmail.com', '                                 Test text.....        Test text.....     Test text.....     Test text.....     Test text.....     Test text.....     Test text.....                 '),
(22, 'Barry allen', 'Barry@gmail.com', '                       Test text.....        Test text.....     Test text.....     Test text.....     Test text.....     Test text.....     Test text.....                           ');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `package` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `cost` decimal(18,2) NOT NULL,
  `what_to_do` text NOT NULL,
  `providing` text NOT NULL,
  `description` text NOT NULL,
  `Picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package`, `period`, `place`, `cost`, `what_to_do`, `providing`, `description`, `Picture`) VALUES
(87, 'The surfing beach ,Arugambay', '5 days', 'Arugambay,Trincomalee', '5000.00', 'Accommodations are provided in vacation houses near the beach area .Special seafood menu is available .', '1 surfing board and BBQ grill is freely provided', '        This is the perfect beach for enjoying surfing in Sri Lanka. You can enjoy the beach area.Wonder in the night streets full of lights and beauty                                ', './places_images/87.jpg'),
(91, '8th Wonder of the world', '2 days', 'Sigiriya', '3500.00', 'Accommodations are available in hotels,vacation homes or in campsites.', '', '                                        Come to visit the 8th wonder of the world .rock fortress made by king Kashyapa.You can witness the ancient sigiri arts,\"katapath pawura\",automated water fountains and the ruins of the kingdom as well                                    ', './places_images/91.jpg'),
(92, 'World heritage city - Kandy', '4 days', 'Kandy', '6500.00', 'Hotel queens,Golden crown hotel,Grand Kandyan and Mahaweli Reach Hotels are available for accommodations.If not you can have a camp site in Udawalawa forest ', 'Free boat ride in Bogambara lake is provided', '              Visit Temple of tooth relic   .Udawalawa forest,Ambakke and Gadaladeniya Temple with artistic values.Enjoy boat rides in the lake,Enjoy in the Mahaweli river ,Visit the world heritage Kandy town.Feel the comfortable climate                     ', './places_images/92.jpg'),
(93, 'Nuwara Eliya', '10 days', 'Nuwara Eliya', '15000.00', 'Vacation houses are available for accommodation', 'A BBQ grill is freely provided', '                        Enjoy the cold climate in Nuwara Eliya. Visit tea plantations; Horton Plains National Park, Gregory Lake, and Sita Temple.And also water falls like Dunhida ella ,Diyaluma ella, Ravana ella   etc.            ', './places_images/93.jpg'),
(95, 'Peradeniya Botanical garden', '2 days', 'Peradeniya ,Kandy', '3000.00', 'Hotel queens,Golden crown hotel,Grand Kandyan and Mahaweli Reach Hotels are available for accommodations.If not you can have a camp site in Udawalawa forest ', '', '          As Sri Lanka\'s largest garden peradeniya garden is elegant and spacious with 147-acres. Plenty of time is needed to stroll Peradeniya\'s imposing Avenue of Royal Palms. There are some 4,000 different species of plants at Peradeniya Gardens.   Two visits to the different parts of the garden is arranged in 2 consecutive days                          ', './places_images/95.jpg'),
(96, 'Anuradhapura', '5 days', 'Anuradhapura', '10000.00', 'Accommodations are available in hotels,vacation homes or in campsites.', 'Flowers to the temples will be freely provided', '            Anuradhapura is one of the ancient capitals of Sri Lanka.There you can visit creations of ancients kings like   Jaya Sri Maha Bodhiya, Thuparamaya, Lovamahapaya, Ruwanwelisaya Stupa, Mirisaweti Stupa, Abhayagiri Stupa, Jetavanaramaya, and Lankaramaya.Also visit mihintale.\r\nEnjoy in large tanks like \"nuwara wewa\" ,\"thisa wewa\"   as well                       ', './places_images/96.jpg'),
(97, 'Polonnaruwa', '6 days', 'Polonnaruwa', '12000.00', 'Accommodations are available in vacation houses or in campsites.', '', '                  Polonnaruwa is also an ancient roya city .There one can visit The Lankatilaka , The Quadrangle , Minneriya tank and Kaudulla National Parks ,Gal Vihara ,. Polonnaruwa Museum etc.                      ', './places_images/97.jpg'),
(98, ' Commercial capital - Colombo', '5 days', 'Colombo', '20000.00', 'Accommodations are available in hotels', '', '           Colombo is the commercial capital in Sri lanka .There you can visit , Lotus Tower ·, National Museum of Colombo · , Sri Lanka Planetarium , Viharamahadevi Park , National Zoological Gardens of Sri Lanka etc. and also you can visit the city                          ', './places_images/98.jpg'),
(99, 'Ella ', '2 days', 'Badulla', '7000.00', 'Accommodations are available in hotels or vacation houses', '', '                   You can take a picturesque \r\n train ride to Ella when travelling from Western side of the country. And in ella you can visit Little Adam\'s Peak, Ravana\'s Cave, Rawana Falls, Nine Arch Bridge etc.                    ', './places_images/99.jpg'),
(101, 'Meemure', '4 days', 'Between Kandy District and Matale Distric', '15000.00', 'Accommodations are available in vacation homes or in campsites. ', '1 Camping tent will be freely provided with a BBQ grill', '                           Meemure is one of the most remote villages in Sri Lanka.There you can go on hiking ,visit water falls,go camping,go on sliding boats,you can feel the freedom in a rural village                                                      ', './places_images/101.jpg'),
(105, 'Galle', '4 days', 'Galle', '11500.00', 'Accommodations are available in luxurious hotels near beach area', '', '             Visit Galle dutch fort, lighthouse and church Visit Galle museum .Visit beautiful Unawatuna beach.Enjoy boat rides.                           ', './places_images/105.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone number` int(50) NOT NULL,
  `Package` int(255) NOT NULL,
  `Visit_date` date NOT NULL,
  `No_people` int(50) NOT NULL,
  `Country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`ID`, `Username`, `Name`, `Email`, `Phone number`, `Package`, `Visit_date`, `No_people`, `Country`) VALUES
(20, 'Peter', 'Peter Parker', 'Parker@gmail.com', 346467456, 92, '2022-03-31', 6, 'USA'),
(21, 'hello', 'Chamithu Rathnayaka', 'Chamithu2@gmali.com', 774212242, 101, '2022-03-16', 10, 'Sri Lanka'),
(22, 'tom', 'Tom wayne', 'tom@gmail.com', 987743773, 96, '2022-04-08', 12, 'Australia'),
(27, 'Uditha', 'Uditha Wikramasinghe ', 'uditha4@gmail.com', 745556765, 101, '2022-03-30', 5, 'Sri Lanka'),
(28, 'keshani', 'Keshani Wijesekara', 'Keshani67@gmail.com', 704422681, 93, '2022-04-04', 22, 'Sri Lanka'),
(29, 'rob', 'Robert Pattinson', 'rob@gmail.com', 764554323, 105, '2022-04-21', 6, 'England'),
(30, 'tony', 'Tony stark', 'tony90@gmail.com', 123456789, 96, '2022-03-24', 8, 'USA'),
(31, 'ajith', 'Ajith Anurada', 'ajith08@gmail.com', 2147483647, 96, '2022-03-26', 10, 'Sri Lanka'),
(32, 'taylor', 'Taylor Lautner', 'taylor@gmail.com', 2147483647, 87, '2022-04-05', 9, 'USA'),
(33, 'emy', 'Emy Levato', 'emy@gmail.com', 998765654, 98, '2022-03-28', 33, 'New Zealand'),
(34, 'tom', 'isira', 'rss@gmail.com', 2261, 87, '2022-04-04', 44, 'England');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Phone.no` int(50) NOT NULL,
  `E-mail` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Phone.no`, `E-mail`, `username`, `password`) VALUES
(5, 'Lincoln Burrows', 714232546, 'linkoln@gmail.com', 'linkoln', '123'),
(10, 'Peter Parker', 2147483647, 'Parker@gmail.com', 'Peter', 'Peter'),
(12, 'Michael Scofield', 724356675, 'Mick@gmail.com', 'Micke', 'm123'),
(13, 'Gimhani Amarasinghe', 87676654, 'gimhani@gmail.com', 'gimi', 'gimi11'),
(14, 'Asna Adhham', 774654644, 'asna@gmail.com', 'asna', 'asna55'),
(15, 'Edward Collin', 987667575, 'eddie@gmail.com', 'eddie', '123'),
(16, 'Stephen Amell', 876873268, 'Amell@gmail.com', 'steve', '123st'),
(17, 'Grant Gustin', 9876763, 'grant@gmail.com', 'Grant', 'G123'),
(18, 'Rebbeca Stewart', 97473672, 'rebeca@gmail.com', 'rebecca', 'R123'),
(19, 'Tom wayne', 2147483647, 'tom@gmail.com', 'tom', '123t'),
(20, 'Uditha Wikramasinghe ', 775443454, 'Uditha4@gmail.com', 'Uditha', '245u'),
(21, 'Keshani Wijesekara', 704422681, 'keshani67@gmail.cpm', 'keshani', '121k'),
(22, 'Robert Pattinson', 987886765, 'rob@gmail.com', 'rob', '123r'),
(23, 'Tony stark', 123456789, 'tony90@gmail.com', 'tony', '987'),
(25, 'Ajith Anurada', 2147483647, 'Ajith08@gmail.com', 'ajith', '456'),
(26, 'Taylor Lautner', 2147483647, 'taylor@gmail.com', 'taylor', '123t'),
(27, 'Emy Levato', 779867654, 'emy@gmail.com', 'emy', '123e'),
(28, 'Pavani Wijesundara', 97657644, 'p@gmail.com', 'pani', '123p');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_pakage` (`Package`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `FK_pakage` FOREIGN KEY (`Package`) REFERENCES `packages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

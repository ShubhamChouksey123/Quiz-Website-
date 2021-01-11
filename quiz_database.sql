-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2021 at 03:01 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15886018_quiz`
--
CREATE DATABASE IF NOT EXISTS `id15886018_quiz` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id15886018_quiz`;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `sno` int(5) NOT NULL,
  `Question` text NOT NULL,
  `option_A` text NOT NULL,
  `option_B` text NOT NULL,
  `option_C` text NOT NULL,
  `option_D` text NOT NULL,
  `ans` int(2) NOT NULL,
  `dif` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`sno`, `Question`, `option_A`, `option_B`, `option_C`, `option_D`, `ans`, `dif`) VALUES
(1, 'Which animal is called the ship of desert ?', 'Camel', 'Cow', 'Dog', 'Tiger', 0, 1),
(3, 'The place in India receiving the lowest rainfall is?', 'Jodhpur', 'Jaipur', 'Leh', 'Srinagar', 2, 1),
(4, 'Macmohan Line demarcates the boundary between which countries?', 'USA and Canada', 'Nepal and India', 'India and China', 'India and Myanmar', 2, 2),
(5, 'Where is the National Stock Exchange ?', 'Chennai', 'Mumbai', 'New Delhi', 'Kolkata', 1, 1),
(6, 'Who is the First “Governor general” of India ?', 'Rovert Clive', 'Lord amherst', 'Lord william bentinck', 'None of these', 2, 2),
(7, ' Water gas is a mixture of ?', 'NH4 and H5', 'CO and H2', 'CH4 and H2', 'CO2 and H2', 1, 2),
(8, 'If a patient has type A blood, they could receive blood from ?\r\n', 'B', 'A', 'AB', 'O', 1, 2),
(9, 'The Indus Valley houses were built in which of the following present day city ?', 'Mahe', 'Karaikal', 'Pondicherry', 'none of these', 2, 2),
(10, 'Which bank is called bankers bank of India?', 'State Bank of India', 'Punjab National Bank', 'Reserve Bank of India', 'ICICI Bank', 2, 1),
(11, 'Which is the smallest country in the world?\r\n', 'Vatican City', 'Bhutan', 'Singapore', 'Shri Lanka', 0, 1),
(12, 'Grand Central Terminal, Park Avenue, New York is the world\'s ', 'largest railway station', 'longest railway station', 'highest railway station', 'none of the above', 0, 1),
(13, 'Entomology is the science that studies ?', 'microbes', 'reptiles', 'insects', 'fishes', 2, 2),
(14, 'Garampani sanctuary is located at ', 'Diphu, Assam', 'Gangtok, Sikkim', 'Junagarh, Gujarat', 'Kohima, Nagaland', 0, 3),
(15, 'Which of the following is not the field of physics?', 'Latent Heat', 'Nuclear fusion', 'Refractive Index', 'Stock Value', 3, 1),
(16, 'It is easier to roll a stone up a sloping road than to lift it vertical upwards because ', 'Work done in lifting the stone is equal to rolling it.\r\nC.', 'Work done in rolling is more than in lifting', 'work done in both is same but the rate of doing work is less in rolling.\r\n \r\n  \r\n', 'work done in rolling a stone is less than in lifting it.', 3, 1),
(17, 'The absorption of ink by blotting paper involves :', 'Siphon action', 'due to viscosity of link', 'Diffusion of ink through the blotting\r\nD.', 'capillary action phenomenon ', 3, 1),
(18, 'Nuclear sizes are measured in :', 'Meter', 'Angstrom', 'Fermi', 'Newton', 2, 1),
(19, 'A light year is a unit of :', 'Time', 'intensity of light', 'Distance ', 'Speed', 2, 1),
(20, 'light from the sun reaches earth in :', '2 min', '4 min', '10 min', '8 min', 3, 1),
(21, 'Stars appear to move from east to west because :', 'All-stars move from east to west', 'The earth rotates from west to east.', 'The earth rotates from east to west.', 'The background of stars move from east to west.', 1, 1),
(22, 'Planet do not twinkle because :', 'They emit light of a constant intensity\r\n', 'Their distance from the earth does not change with time\r\n', 'They are very far away from the earth resulting in a decrease in the intensity of light\r\n', 'They are nearer to earth and hence we receive a greater amount of light.\r\n', 3, 1),
(23, 'Metals are good conductors of electricity because :\r\n', 'They contain free electrons.', 'The atoms are lightly packed.\r\n \r\n  ', 'They have a high melting point.', 'none of the above ', 0, 1),
(24, 'For which of the following disciple is  Nobel Price awarded?', 'Literature, Peace and Economics', 'Physiology or Medicine', 'Physics and Chemistry', 'All of the above', 3, 1),
(25, 'Hitler\'s party which came into power in 1933 is known as?', 'Democratic Party', 'Nazi Party', 'Labour Party', 'Ku-Klux-Klan\r\n', 1, 1),
(26, 'Galileo was an Italian astronomer', 'developed the telescope', 'discovered four satellites of Jupiter', 'discovered that the movement of the pendulum produces a regular time measurement\r\n', 'All of the above', 3, 1),
(27, 'Sound waves in the air are?', 'transverse', 'longitudinal', 'electromagnetic', 'polarised', 1, 1),
(28, 'RADAR is used for :', 'locating submerged submarines.', 'detecting and locating the position of objects such as Aeroplanes.', 'locating geostationary satellites.', 'receiving a signals in a radio receiver.\r\n', 1, 1),
(29, 'It takes much longer to cook food in the hills than in the plains because?', 'in the hills the atmospheric pressure is lower than that in the plains and therefore water boils at a temperature lower than 100oC causing an increase in cooking time\r\n \r\n', 'due to low atmospheric pressure on the hills, the water boils at a temperature higher than 100oC and therefore water takes longer to boil', 'in the hills the atmospheric density is low and therefore a lot of heat is lost to the atmosphere', 'in the hills the humidity is high and therefore a lot of heat is absorbed by the atmosphere leaving very little heat for cooking', 0, 2),
(30, 'Light travels fastest in?', 'Vaccum', 'Glass', 'Water', 'Metal ', 0, 1),
(31, 'which of the following phenomena is considered responsible for global warming?\r\n', 'Green house effect ', 'Dry Farming ', 'Monsoon', 'trade winds ', 0, 1),
(32, 'Greenland is under the rule of ', 'Turkey ', 'Denmark', 'Portugal', 'Germany ', 2, 2),
(33, 'India\'s major contact with the outside world for the last two millennia have been by the sea thereby earning the title for India ', 'The Mistress of the Eastern Seas', 'The Mistress of the Southern Seas', 'The Mistress of the Western Seas\r\n', 'The Mistress of the Northern Seas\r\n', 0, 1),
(34, 'Which country is also known as the sugar bowl of the world?', 'China', 'Cuba', 'Australia', 'UK', 1, 2),
(35, 'The light of the distant star is affected by ', 'the earth atmosphere ', 'interstellar dust', 'both (a) and (b)', 'None of the above', 2, 1),
(36, 'The landmass of which of the following continent is least?\r\n', 'Africa', 'Asia', 'Europe ', 'Australia', 3, 1),
(37, 'Which of the following is tropical grassland?', 'Taiga', 'pampas', 'prairies', 'Savannah', 3, 2),
(38, 'Which city of India is also known as \'Electronic City of India\'?', 'Pune', 'Banglore ', 'Mumbai', 'Gurgaon', 1, 1),
(39, '\'Char Minar\' is situated in?', 'Banglore ', 'Agra', 'Delhi', 'Hyderabad', 3, 1),
(40, 'The world-famous \'Khajuraho\' sculptures is located in?', 'Orissa', 'Gujarat', 'Madhya Pradesh', 'Maharastra', 2, 1),
(41, 'The office of the UN general assembly is in?', 'Zursich', 'Paris', 'New York ', 'Vienna', 3, 2),
(42, 'Besides the UK, USA Germany, and Japan the G-7 countries include?', 'France, Netherlands, and Russia\r\n \r\n  ', 'Canada, France, and Italy', 'Canada, Italy and Netherlands', 'France, Netherlands and Russia\r\n', 1, 2),
(43, 'Who is called the father of English poetry?', 'Milton', 'Wordsworth', 'Chaucer', 'Charles Dickens', 2, 2),
(44, '.mov extension refers usually to what kind of files?', 'Image file', 'Audio file', 'Animation/movie file\r\n \r\n ', 'MS Office document', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `sno` int(4) NOT NULL,
  `score` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `dt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`sno`, `score`, `name`, `email`, `dt`) VALUES
(1, 0, '', '', '2021-01-05 19:04:42'),
(2, 1, 'Test_Shubham', 'test@gamil.com', '2021-01-05 19:05:54'),
(4, 0, 'Shubham', 'abc@gmail.com', '2021-01-05 19:05:07'),
(5, 0, 'Shubham', 'abc@gmail.com', '2021-01-05 19:06:58'),
(20, 1, 'Test_4', 'abc_4@gmail.com', '2021-01-05 18:59:35'),
(153, 0, 'Test', 'test@gmail.com', '2021-01-10 17:29:36'),
(154, 0, 'Test', 'test@gmail.com', '2021-01-10 17:29:56'),
(168, 0, 'Test_', 'test@gmail.com', '2021-01-11 12:05:20'),
(169, 3, 'fake', 'faketest@gmail.com', '2021-01-11 12:06:01'),
(170, 1, 'Hello', 'hello@gmail.com', '2021-01-11 12:06:38'),
(171, 1, 'Testing', 'Test@gmail.com', '2021-01-11 12:07:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `sno` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 10:04 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmovie`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `type` varchar(250) NOT NULL,
  `Date` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone_no`, `type`, `Date`) VALUES
(18, 'J', 'jd@gmail.com', '931203129', '2D', '01-09-2021');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `message` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `genre` varchar(256) NOT NULL,
  `duration` varchar(256) NOT NULL,
  `releasedate` varchar(256) NOT NULL,
  `director` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `language` varchar(256) NOT NULL,
  `poster` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `genre`, `duration`, `releasedate`, `director`, `description`, `language`, `poster`) VALUES
(1, 'Shershah', 'Action Drama', '2hr 15min', '12 August 2021', 'Vishnuvardhan', 'This is a story of a PVC awardee brave Indian soldier - Capt. Vikram Batra, who shot to fame and became a household name during the Kargil War in 1999.', 'Hindi', 'newrelease1.jpg'),
(2, 'Toofan', 'Action Drama Sport', '2hr 42min', '16 July 2021', 'Rakeysh Omprakash Mehra', 'The story of a boxer and the struggles he faces on his journey to get to the national level competition.', 'Hindi', 'newrelease2.jpg'),
(3, 'Mortal kombat', 'Action Fantasy Adventure', '1hr 50min', '23April 2021', 'Simon McQuoid', 'MMA fighter Cole Young seeks out Earth\'s greatest champions in order to stand against the enemies of Outworld in a high stakes battle for the universe.', 'English', 'newrelease3.jpg'),
(4, 'Venom', 'Action Thriller', '2hr 20min', '15 October 2021', 'Andy Serkis', 'Tom Hardy returns to the big screen as the lethal protector Venom, one of MARVEL\'s greatest and most complex characters.', 'English', 'newrelease4.jpg'),
(5, 'The Tomorrow War', 'Action  Adventure', '2hr 20min', '2 July 20201', 'Chris Mckay', 'A family man is drafted to fight in a future war where the fate of humanity relies on his ability to confront the past.', 'English', 'newrelease5.jpg'),
(6, 'Mumbai Saga', 'Action Crime', '2hr 15min', '19 March 2021', 'Sanjay Gupta', 'The plot of the movie is set in the era of the 80s and 90s which were marked as a transformed period of Mumbai.', 'Hindi', 'comingsoon2.jpg'),
(7, 'Mimi', 'Comedy Drama', '2hr 13min', '26 July 2021', 'Rajesh Bhatia, Laxman Utekar', 'Mimi is introduced by Bhanu to an American couple as a surrogate in exchange for Rs 2 million. She decides to have the baby even when they change their mind and tells her parent that Bhanu is the father.', 'Hindi', 'comingsoon4.jpg'),
(8, 'Oxygen', 'Drama Fantasy Scifi', '1hr 41min', '12 May 2021', 'Alexandre Aja', 'A woman wakes in a cryogenic chamber with no recollection of how she got there. As she\'s running out of oxygen, she must rebuild her memory to find a way out of her nightmare.', 'English', 'comingsoon3.jpg'),
(9, 'Stowaway', 'Drama Scifi Thriller', '1hr 56min', '24 June 2021', 'Joe Penna', 'A three-person crew on a mission to Mars faces an impossible choice when an unplanned passenger jeopardizes the lives of everyone on board.', 'English', 'comingsoon5.png'),
(10, 'Space Sweepers', 'Action Adventure Drama', '2hr 16min', '5 February 2021', 'Sung-hee-jo', 'Set in the year 2092 and follows the crew of a space junk collector ship called The Victory. When they discover a humanoid robot named Dorothy that\'s known to be a weapon of mass destruction, they get involved in a risky business deal.', 'English', 'comingsoon6.jpg'),
(11, 'Redemption Day', 'Action Thriller Drama ', '1hr 49min', '8 January 2021', 'Hicham Haji', 'When the love of his life is kidnapped and held for ransom by terrorists, a war hero Brad Paxton races against the clock to rescue her in a daring and deadly operation that pits him against the most powerful and shadowy forces.', 'English', 'comingsoon1.jpg'),
(12, 'Sherni', 'Action Drama', '2hr 10min', '18 June 2021', 'Amit Masurkar', 'An upright Forest Officer who strives for balance in a world of man-animal conflict while she also seeks her true calling in a hostile environment.', 'Hindi', 'comingsoon7.jpg'),
(13, 'Outside The Wire', 'Action Adventure Fantasy', '1hr 55min', '15 January 2021', 'Mikael Håfström', 'In the near future, a drone pilot sent into a war zone finds himself paired with a top-secret android officer on a mission to stop a nuclear attack.', 'English', 'comingsoon8.jpeg'),
(14, 'The Little Things', 'Crime Drama Mystery', '2hr 8min', '29 January 2021', 'John Lee Hancock', 'Kern County Deputy Sheriff Joe Deacon is sent to Los Angeles for what should have been a quick evidence-gathering assignment. Instead, he becomes embroiled in the search for a serial killer who is terrorizing the city.', 'English', 'comingsoon9.jpg'),
(15, 'Xtreme', 'Action Adventure Crime', '1hr 51min', '4 June 2021', 'Daniel Benmayor', 'Two years after the murder of his son and father, a retired hitman sets in motion a carefully crafted revenge plan against the killer: his own brother.', 'English', 'comingsoon10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

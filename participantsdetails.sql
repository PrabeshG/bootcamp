-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 05:53 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bootcampweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `participantsdetails`
--

CREATE TABLE `participantsdetails` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `comments` text NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `education` varchar(200) NOT NULL,
  `semester` varchar(200) NOT NULL,
  `college` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `participantsdetails`
--

INSERT INTO `participantsdetails` (`id`, `name`, `email`, `contact`, `address`, `comments`, `age`, `gender`, `education`, `semester`, `college`) VALUES
(1, 'Prabesh Ghimire', 'prabeshghimire321@gmail.com', '9865046396', 'Bharatpur', 'This is a beautiful thing i have done so far.Bye', 20, '', '+2', '2nd', ''),
(5, 'Khalid Hosseini', 'khaled@gmail.com', '983489563', 'Uk', 'THIS IS A BEAUTIFUL THING I HAVE EVER DONE SO FAR.', 25, 'male', '', '', ''),
(7, 'Buddha', 'buddha@gmail.com', '897583433343', 'Indonesia', 'THIS IS A BEAUTIFUL THING I HAVE EVER DONE SO FAR.', 25, 'male', '', '', ''),
(19, 'Nabin Chhetri', 'naren.kc78@gmail.com', '984508588', 'Bharatpur-23,Jagatpur', 'This is a beautiful thing i have ever done.', 15, 'male', 'Bachelor Running', '1st', 'Lumbini ICT'),
(23, 'Asim Pathak', 'asim@gamil.com', '94758746865', 'Narayangargh', 'this is fun.', 20, '', '11', '', ''),
(24, 'Sandip sitaula', 'klknasojdo@gjdsnsj.com', '2424242242', 'ssskksks', 'lfdlknkdfk', 15, 'male', 'Bachelor', '4', 'bal'),
(25, 'Sandip sitaula', 'klknasojdo@gjdsnsj.com', '2424242242', 'ssskksks', 'lfdlknkdfk', 15, 'male', 'Bachelor', '4', 'bal'),
(26, 'Harish Kharel', 'kharel.hck@gmail.com', '9851198642', 'Nawalprashi', 'Teacher', 30, 'male', '', '', ''),
(27, 'Susmita Kharel', 'susmita@gmail.com', '98947353673', 'Pokhara', 'This one is girl.', 22, '', '+2', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participantsdetails`
--
ALTER TABLE `participantsdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participantsdetails`
--
ALTER TABLE `participantsdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

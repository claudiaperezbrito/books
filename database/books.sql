-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2019 at 06:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booksdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book` text NOT NULL,
  `author` text NOT NULL,
  `setting` text NOT NULL,
  `adaptation` text NOT NULL,
  `settingtwo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book`, `author`, `setting`, `adaptation`, `settingtwo`) VALUES
(1, 'Harry Potter & the Sorcerer\\\'s Stone', 'J.K. Rowling', 'Hogwarts', 'film', 'London, England'),
(2, 'GOT: A Song of Ice and Fire', 'George R. R. Martin', 'Westeros', 'television', 'Croatia,Iceland, Spain'),
(3, 'Death on the Nile', 'Agatha Christie', 'Egypt (Nile River)', 'film', 'Egypt (Nile River)'),
(4, 'Angels & Demons', 'Dan Brown', 'Vatican, Rome', 'film', 'Vatican, Rome'),
(5, 'Gone Girl', 'Gillian Flyn', 'NYC, Missouri', 'film', 'Missouri'),
(6, 'Crazy, Rich Asians', 'Kevin Kwan', 'NYC, Singapore', 'film', 'Malaysia, Singapore'),
(7, 'Wuthering Heights', 'Emily Bronte', 'South England', 'television', 'South England'),
(8, 'The Hunger Games', 'Suzanne Collins', 'Panem', 'film', 'North Carolina'),
(9, 'A Thousand Splendid Suns', 'Khaled Hosseini', 'Afghanistan', 'not yet', ''),
(10, 'One Hundred Years of Solitude', 'Gabriel Garcia Marquez', 'Colombia', 'not yet', ''),
(11, 'The Old Man and the Sea', 'Ernest Hemingway', 'Cuba', 'not yet', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

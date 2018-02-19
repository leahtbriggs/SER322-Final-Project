-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2018 at 03:53 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.25-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `BOOK`
--

CREATE TABLE `BOOK` (
  `ISBN` bigint(13) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `pages` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `pubID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BOOK`
--

INSERT INTO `BOOK` (`ISBN`, `title`, `author`, `pages`, `genre`, `pubID`) VALUES
(9789176373903, 'The Great Gatsby', 'F. Scott Fitzgerald', 124, 'classic', 103),
(9780439708184, 'Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 309, 'fantasy', 104),
(9780553418026, 'The Martian', 'Andy Weir', 400, 'Science Fiction', 102),
(9781501139154, 'Leonardo Da Vinci', 'Walter Isaacson', 624, 'Biography', 101),
(9781501160776, 'Beartown', 'Fredrik Backman', 432, 'Fiction', 101),
(9781558322301, 'Truffles', 'Dede Wilson', 96, 'Cooking', 105);

-- --------------------------------------------------------

--
-- Table structure for table `BOOK_REVIEW`
--

CREATE TABLE `BOOK_REVIEW` (
  `bookISBN` bigint(13) NOT NULL,
  `user` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `rating` int(11) NOT NULL,
  `reviewText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BOOK_REVIEW`
--

INSERT INTO `BOOK_REVIEW` (`bookISBN`, `user`, `date`, `rating`, `reviewText`) VALUES
(9789176373903, 'hermione', '2018-02-01', 5, 'Marvelous book! Gatsby every time!'),
(9781501139154, 'severus', '2017-11-15', 5, 'I had no idea that Da Vinci wasn\'t his last name. The more you know tee hee'),
(9781558322301, 'harry', '2018-02-01', 3, 'I just really love candy but idk these truffles are meh.'),
(9780553418026, 'ron', '2018-02-02', 5, 'That\'s it, I\'m going to Mars right meow.'),
(9781501160776, 'minerva', '2018-02-01', 2, 'Back to Harry Potter books, please.'),
(9780439708184, 'harry', '2018-02-03', 5, 'If I could give this a rating of infinity, I would. Go gettem Harry!');

-- --------------------------------------------------------

--
-- Table structure for table `CUSTOMER`
--

CREATE TABLE `CUSTOMER` (
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CUSTOMER`
--

INSERT INTO `CUSTOMER` (`Fname`, `Lname`, `username`, `password`) VALUES
('Emma', 'Watson', 'hermione', 'granger'),
('Rupert', 'Grint', 'ron', 'weasley'),
('Daniel', 'Radcliffe', 'harry', 'potter'),
('Maggie', 'Smith', 'minerva', 'mcgonagall'),
('Alan', 'Rickman', 'severus', 'snape'),
('Tom', 'Hanks', 'forrest', 'gump');

-- --------------------------------------------------------

--
-- Table structure for table `PUBLISHER`
--

CREATE TABLE `PUBLISHER` (
  `pID` int(11) NOT NULL,
  `pName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PUBLISHER`
--

INSERT INTO `PUBLISHER` (`pID`, `pName`) VALUES
(101, 'Simon & Schuster'),
(102, 'Random House'),
(103, 'Penguin Books'),
(104, 'Scholastic'),
(105, 'Harvard Common Press');

-- --------------------------------------------------------

--
-- Table structure for table `PUBLISHER_LOCATION`
--

CREATE TABLE `PUBLISHER_LOCATION` (
  `pID` int(11) NOT NULL,
  `zipcode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PUBLISHER_LOCATION`
--

INSERT INTO `PUBLISHER_LOCATION` (`pID`, `zipcode`) VALUES
(101, 10020),
(102, 10022),
(103, 7073),
(104, 10012),
(105, 2118);

-- --------------------------------------------------------

--
-- Table structure for table `ZIPCODE`
--

CREATE TABLE `ZIPCODE` (
  `zipcode` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ZIPCODE`
--

INSERT INTO `ZIPCODE` (`zipcode`, `city`, `state`) VALUES
(10022, 'New York City', 'New York'),
(10022, 'New York City', 'New York'),
(7073, 'East Rutherford', 'New Jersey'),
(2118, 'Boston', 'Massachusetts'),
(10012, 'New York City', 'New York');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

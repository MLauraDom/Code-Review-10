-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 05:30 PM
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
-- Database: `fswd14_cr10_lauramoldovan_biglibrary`
--
CREATE DATABASE IF NOT EXISTS `fswd14_cr10_lauramoldovan_biglibrary` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `fswd14_cr10_lauramoldovan_biglibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `picture` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `ISBN` varchar(50) DEFAULT NULL,
  `descript` text DEFAULT NULL,
  `pType` varchar(10) DEFAULT NULL,
  `author_first_name` varchar(50) DEFAULT NULL,
  `author_last_name` varchar(50) DEFAULT NULL,
  `publisher_name` varchar(50) DEFAULT NULL,
  `publisher_adress` varchar(100) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `avail` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `picture`, `title`, `ISBN`, `descript`, `pType`, `author_first_name`, `author_last_name`, `publisher_name`, `publisher_adress`, `publish_date`, `avail`) VALUES
(1, 'alchemist.jpg', 'The Alchemist', '978-0-06-235530-0', 'Every few decades a book is published that changes the lives of its readers forever. This is such a book - a beautiful parable about learning to listen to your heart, read the omens strewn along life\'s path and, above all, follow your dreams. ', 'Book', 'Paulo', 'Coelho', 'Harper Collins Publ. USA', '195 Broadway, New York City, New York, U.S.', '1988-01-01', 1),
(2, 'warior.jpg', 'Warior of the Light', '978-0062090010', 'Every short passage invites us to live out our dreams, to embrace the uncertainty of life, and to rise to our own unique destiny.', 'Book', 'Paulo', 'Coelho', 'Harper Collins Publ. USA', '195 Broadway, New York City, New York, U.S.', '1994-03-12', 0),
(3, 'resur.jpg', 'The Resurrectionist', '978-1594746161', 'An extraordinary biography. A gallery of astonishing work. The legacy of a madman.', 'DVD', 'E.B.', 'Hudspet', 'My Book', '7906 West Ramblewood St. Westbury, NY', '2013-05-01', 0),
(4, 'kyba.jpg', 'The Kybalion', '978-1721791361', 'The Kybalion: Hermetic Philosophy, originally published in 1908 under the pseudonym of \"the Three Initiates\", is a book claiming to be the essence of the teachings of Hermes Trismegistus.', 'CD', 'Konrad', 'Halver', 'Aurinia', 'Bramfelder Str. 102A, 22305 Hamburg, Germany', '2018-06-23', 1),
(5, 'secret.jpg', 'The Secret', '978-3442337903', 'In 2006, a groundbreaking feature-length film revealed the great mystery of the universe—The Secret—and, later that year, Rhonda Byrne followed with a book that became a worldwide bestseller.', 'Book', 'Rhonda', 'Byrne', 'Arkana', 'Hainbundstr. 17, 37085 Göttingen, Germany', '2007-04-10', 0),
(6, 'die.jpeg', 'They Both Die at the End', '978-0-06-245780-6', 'Adam Silvera reminds us that there\'s no life without death and no love without loss in this devastating yet uplifting story about two people whose lives change over the course of one unforgettable day.', 'CD', 'Adam', 'Silvera', 'Harper Collins Publ. USA', '195 Broadway, New York City, New York, U.S.', '2000-05-18', 1),
(7, 'lostime.jpg', 'In Search of Lost Time', '9782291082538', 'In Search of Lost Time , also translated as Remembrance of Things Past—is a novel in seven volumes, written by Marcel Proust (1871–1922).', 'Book', 'Marcel', 'Proust', 'Slash Books', '8777 Maiden Ave. Vista, CA 92083', '2019-12-30', 1),
(8, 'harry.jpg', 'Harry Potter Boxed Set', '978-1408898659', 'The Complete Collection (Adult Paperback): Contains: Philosopher\'s Stone / Chamber of Secrets / Prisoner of Azkaban / Goblet / Phoenix / Half-Blood Prince / Deathly Hollows', 'Book', 'J.K.', 'Rowling', 'Slash Books', '8777 Maiden Ave. Vista, CA 92083', '2021-08-05', 1),
(9, 'power.jpeg', 'The Power', '978-605--448266-5', '\"The Secret\" revealed the law of attraction. Now Rhonda Byrne reveals the biggest secret in the universe - \"The Power\", the power to get everything you want.', 'CD', 'Rhonda', 'Byrne', 'Arkana', 'Hainbundstr. 17, 37085 Göttingen, Germany', '2008-02-23', 1),
(10, 'magic.jpeg', 'The Magic', '978-1-4516-7344-9', 'One word changes everything...No matter who you are or where you are, no matter what your current circumstances, The Magic is going to change your entire life!', 'DVD', 'Rhonda', 'Byrne', 'Arkana', 'Hainbundstr. 17, 37085 Göttingen, Germany', '2009-09-30', 1),
(11, 'smoke.jpg', 'The Easy Way to Stop Smoking', '978-1405923316', 'MAKE 2021 THE YEAR YOU QUIT SMOKING, WITH THE HELP OF ALLEN CARR. Read this book and you\'ll never smoke another cigarette again.', 'Book', 'Allen', 'Carr', 'Hudspet', '7906 West Ramblewood St. Westbury, NY', '2021-05-20', 1),
(12, 'astro.jpg', 'Astronomie für Dummies', '978-3527717989', 'Finden auch Sie die Weiten des Kosmos faszinierend und fragen sich, wie Wissenschaftler so viel über Objekte in unerreichbarer Ferne wissen können? \"Astronomie für Dummies\" bringt Ihnen das Universum näher.', 'DVD', 'Stephen P.', 'Maran', 'Aurinia', 'Bramfelder Str. 102A, 22305 Hamburg, Germany', '2015-09-23', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

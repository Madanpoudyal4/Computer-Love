-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 02:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itech3108_30338401_a1`
--

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`id`, `title`) VALUES
(1, 'Dell'),
(2, 'acer'),
(3, 'mac'),
(4, 'HP'),
(5, 'LG');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(25) NOT NULL,
  `user_id` int(25) NOT NULL,
  `computer_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `computer_id`) VALUES
(100, 1, '1'),
(101, 1, '2'),
(102, 2, '1'),
(103, 2, '2'),
(104, 3, '1'),
(105, 3, '3'),
(106, 4, '1'),
(107, 1, '4'),
(108, 1, '4'),
(109, 1, '5'),
(110, 1, '4'),
(111, 1, '5'),
(112, 1, '1'),
(113, 1, '2'),
(114, 1, '1'),
(115, 1, '2'),
(116, 1, '4'),
(117, 1, '5'),
(118, 1, '3'),
(119, 1, '4'),
(120, 1, '2'),
(121, 1, '3'),
(122, 1, '1'),
(123, 1, '5'),
(124, 1, '1'),
(125, 1, '3'),
(126, 1, '3'),
(127, 1, '4'),
(128, 1, '1'),
(129, 1, '3'),
(130, 1, '3'),
(131, 1, '4'),
(132, 38, '2'),
(133, 38, '3'),
(134, 38, '3'),
(135, 38, '4');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `from_user_id` int(25) NOT NULL,
  `to_user_id` int(25) NOT NULL,
  `message_date` datetime NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`from_user_id`, `to_user_id`, `message_date`, `text`) VALUES
(2, 34, '2020-05-05 02:19:42', 'hello a'),
(1, 5, '2020-05-05 02:27:09', 'hello testing'),
(1, 2, '2020-05-05 02:42:08', ''),
(1, 38, '2020-05-07 05:07:25', 'hello a');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) DEFAULT NULL,
  `photo_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `profile`, `photo_url`) VALUES
(1, 'madan', 'madan.poudyal4@gmail.com', '$2y$07$xdfN4i29zUiuyL/y7iIMCehCMhqOEGe7eHFJeEuYuFMAisKgHJG5e', 'hello everyone!', 'https://cdn.mos.cms.futurecdn.net/ntFmJUZ8tw3ULD3tkBaAtf.jpg'),
(2, 'tutor', 'tutor@gmail.com', '$2y$12$0SM7zfbupHNhD8Vu6iBCVeunUIdzdXL.6HmTsT7ZSvh3qrK/zVhsK', 'this is me tutor', 'https://www.bigstockphoto.com/images/homepage/module-6.jpg'),
(3, 'john', 'j@gmail.com', '$2y$07$xdfN4i29zUiuyL/y7iIMCehCMhqOEGe7eHFJeEuYuFMAisKgHJG5e', 'Profile 3', 'https://miro.medium.com/max/1200/1*mk1-6aYaf_Bes1E3Imhc0A.jpeg'),
(4, 'testing', 'testing@gmail.com', '$2y$07$xdfN4i29zUiuyL/y7iIMCehCMhqOEGe7eHFJeEuYuFMAisKgHJG5e', 'profile 4', 'https://images.unsplash.com/photo-1503023345310-bd7c1de61c7d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1000&q=80'),
(5, 'testing1', 'testing1@gmail.com', '$2y$07$xdfN4i29zUiuyL/y7iIMCehCMhqOEGe7eHFJeEuYuFMAisKgHJG5e', 'profile 5', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSz3oe7au6Voj7bwkAdVqEhbemBlvOSDNsybGBb-1nN_q4gPhB3&usqp=CAU'),
(35, 'abcde', 'abcde@gmail.com', '$2y$07$xdfN4i29zUiuyL/y7iIMCehCMhqOEGe7eHFJeEuYuFMAisKgHJG5e', '', ''),
(36, 'computer', 'computer@gmail.com', '$2y$07$xdfN4i29zUiuyL/y7iIMCehCMhqOEGe7eHFJeEuYuFMAisKgHJG5e', '', ''),
(37, 'manoj', 'ram@g.com', '$2y$07$xdfN4i29zUiuyL/y7iIMCehCMhqOEGe7eHFJeEuYuFMAisKgHJG5e', '', ''),
(38, 'kumar', 'kumar@ya.com', '$2y$07$xdfN4i29zUiuyL/y7iIMCehCMhqOEGe7eHFJeEuYuFMAisKgHJG5e', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

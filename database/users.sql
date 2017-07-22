-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 07:11 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 test by dedi*/;

--
-- Database: `authentikasidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `token`, `created_at`, `updated_at`) VALUES
(1, 'dedi.ap@gmail.com', '$2y$10$o8XDOCMfkGDKBQgr5gh6G.wptnQVOojEIIDrokCMur0kvPfKJTZWm', 0, '7JMl4xuNpO1dgba2', '2017-07-21 02:09:20', '0000-00-00'),
(2, 'dedi@luhurbangunperkasa.com', '$2y$10$X2n9mYnw.HkUueCU3cWyP.NmMpbJQ.h5A3pWOLf3h7dMUk8kbut96', 0, 'hx2aI74rJK8MU6XR', '2017-07-21 15:16:12', '0000-00-00'),
(3, 'asdf@asd.com', '$2y$10$lLKK9MJF84sz37hetnd/UeEjLqQubMH8yH5bWsfEjSwmF2KZMb8XW', 1, 'bftvj4SpRFDgKQGw', '2017-07-21 15:21:10', '0000-00-00'),
(4, 'coba@yahoo.com', '$2y$10$zCM/1sKYauKZTAPUFIbsQOVwTV53eEYdCEO79R5mH0.duVouap.u.', 0, 'BgXOf3ezLrlvHZAJ', '2017-07-21 15:52:45', '0000-00-00'),
(5, 'xcv@yahoo.com', '$2y$10$X7D7tU4nyCziuvgFDtwrhu4Mov75lTuHiV/FrPpganyRfCHbsONdG', 1, 'QE9BF3M4AxwJjLYq', '2017-07-21 16:31:31', '0000-00-00'),
(6, 'qwe@sf.com', '$2y$10$pvcUHzkti1hdUnLNfRQ0XOnhKEn8Gaf9vMeK2ApkQvUxOGYjYJAyi', 1, 'L7w9KrlnT4VAqQCj', '2017-07-21 16:33:29', '0000-00-00'),
(7, 'xcb@sd.com', '$2y$10$5JhY1G3Kem05l4aWULmQp.lFuA2jFwJNJ8lCgBY5DnTT7eLeeR1ne', 1, 'Kh34xRkcLj8ZrSyt', '2017-07-21 16:44:09', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

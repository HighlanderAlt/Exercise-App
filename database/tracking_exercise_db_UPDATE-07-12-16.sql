-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2016 at 12:48 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracking_exercise_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `exercise_id` int(11) NOT NULL,
  `exercise_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exercise`
--

INSERT INTO `exercise` (`exercise_id`, `exercise_name`) VALUES
(1, 'Incline Barbell Bench Press'),
(2, 'Flat Barbell Bench Press'),
(3, 'Barbell Pullover'),
(4, 'Bent-Over Barbell Row'),
(5, 'Bent-Over Long Bar Row'),
(6, 'Barbell Deadlift'),
(7, 'Stiff-Legged Barbell Deadlift'),
(8, 'Barbell Lunge'),
(9, 'Barbell Squat'),
(10, 'Front Barbell Squat'),
(11, 'Standing Barbell Calf Raise'),
(12, 'Seated Barbell Calf Raise'),
(13, 'Behind The Neck Shoulder Press'),
(14, 'Front Barbell Shoulder Press'),
(15, 'Front Barbell Raise '),
(16, 'Barbell Shrug'),
(17, 'Standing Barbell Curl'),
(18, 'Preacher Barbell Curl'),
(19, 'Reverse Barbell Curl'),
(20, 'Seated Barbell Tricep Extension'),
(21, 'Laying Barbell Tricep Extension'),
(22, 'Close-Grip Bench Press'),
(23, 'Sit  Up'),
(24, 'Leg Raise');

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `routine_id` int(5) NOT NULL,
  `routine_name` text NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`routine_id`, `routine_name`, `user_id`) VALUES
(1, 'Chest and Biceps', 0),
(2, 'Back', 0),
(3, 'Legs', 0),
(4, 'Shoulders and Abs', 0),
(5, 'Chest', 0),
(6, 'Shoulders', 0),
(7, 'Arms', 0),
(8, 'Back and Triceps', 0),
(9, 'Chest and Triceps', 0),
(10, 'Legs, Back and Biceps', 0),
(11, 'Chest, Shoulders and Triceps', 0),
(12, 'Back and Biceps', 0);

-- --------------------------------------------------------

--
-- Table structure for table `routine_exercises`
--

CREATE TABLE `routine_exercises` (
  `routine_exercise_id` int(5) NOT NULL,
  `routine_id` int(5) NOT NULL,
  `exercise_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine_exercises`
--

INSERT INTO `routine_exercises` (`routine_exercise_id`, `routine_id`, `exercise_id`, `user_id`) VALUES
(1, 5, 1, 1),
(2, 5, 2, 1),
(3, 5, 3, 1),
(4, 2, 4, 0),
(5, 2, 5, 0),
(6, 2, 6, 0),
(7, 3, 7, 0),
(8, 3, 8, 0),
(9, 3, 9, 0),
(10, 3, 10, 0),
(11, 3, 11, 0),
(12, 3, 12, 0),
(13, 6, 13, 0),
(14, 6, 14, 0),
(15, 6, 15, 0),
(16, 6, 16, 0),
(17, 7, 17, 0),
(18, 7, 18, 0),
(19, 7, 19, 0),
(20, 7, 20, 0),
(21, 7, 21, 0),
(22, 7, 22, 0),
(23, 1, 1, 0),
(24, 1, 2, 0),
(25, 1, 3, 0),
(26, 1, 17, 0),
(27, 1, 18, 0),
(28, 1, 19, 0),
(29, 8, 4, 0),
(30, 8, 5, 0),
(31, 8, 6, 0),
(32, 8, 20, 0),
(33, 8, 21, 0),
(34, 8, 22, 0),
(35, 9, 1, 0),
(36, 9, 2, 0),
(37, 9, 3, 0),
(38, 9, 20, 0),
(39, 9, 21, 0),
(40, 9, 22, 0),
(41, 12, 4, 0),
(42, 12, 5, 0),
(43, 12, 6, 0),
(44, 12, 17, 0),
(45, 12, 18, 0),
(46, 12, 19, 0),
(47, 10, 7, 0),
(48, 10, 8, 0),
(49, 10, 9, 0),
(50, 10, 10, 0),
(51, 10, 11, 0),
(52, 10, 12, 0),
(53, 10, 4, 0),
(54, 10, 5, 0),
(55, 10, 6, 0),
(56, 10, 17, 0),
(57, 10, 18, 0),
(58, 10, 19, 0),
(59, 11, 1, 0),
(60, 11, 2, 0),
(61, 11, 3, 0),
(62, 11, 13, 0),
(63, 11, 14, 0),
(64, 11, 15, 0),
(65, 11, 16, 0),
(66, 11, 20, 0),
(67, 11, 21, 0),
(68, 11, 22, 0),
(69, 4, 13, 0),
(70, 4, 14, 0),
(71, 4, 23, 0),
(72, 4, 24, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_routine`
--

CREATE TABLE `user_routine` (
  `user_routine_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `routine_id` int(5) NOT NULL,
  `routine_date` date NOT NULL,
  `routine_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_routine`
--

INSERT INTO `user_routine` (`user_routine_id`, `user_id`, `routine_id`, `routine_date`, `routine_time`) VALUES
(239, 5, 1, '2016-12-07', '10:20:55'),
(240, 5, 3, '2016-12-07', '10:23:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_routine_exercises`
--

CREATE TABLE `user_routine_exercises` (
  `user_routine_exercise_id` int(5) NOT NULL,
  `user_routine_id` int(5) NOT NULL,
  `exercise_id` int(5) NOT NULL,
  `set_id` int(5) NOT NULL,
  `reps` int(3) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `exercise_date` date NOT NULL,
  `ex_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_routine_exercises`
--

INSERT INTO `user_routine_exercises` (`user_routine_exercise_id`, `user_routine_id`, `exercise_id`, `set_id`, `reps`, `weight`, `exercise_date`, `ex_time`) VALUES
(802, 239, 1, 1, 10, '120.00', '2016-12-07', '10:20:57'),
(803, 239, 1, 2, 10, '120.00', '2016-12-07', '10:20:57'),
(804, 239, 1, 3, 10, '120.00', '2016-12-07', '10:20:57'),
(805, 239, 2, 1, 10, '120.00', '2016-12-07', '10:20:58'),
(806, 239, 2, 2, 10, '120.00', '2016-12-07', '10:20:58'),
(807, 239, 2, 3, 10, '120.00', '2016-12-07', '10:20:58'),
(808, 239, 3, 1, 10, '120.00', '2016-12-07', '10:20:59'),
(809, 239, 3, 2, 10, '120.00', '2016-12-07', '10:20:59'),
(810, 239, 3, 3, 10, '120.00', '2016-12-07', '10:20:59'),
(811, 239, 17, 1, 10, '120.00', '2016-12-07', '10:21:00'),
(812, 239, 17, 2, 10, '120.00', '2016-12-07', '10:21:00'),
(813, 239, 17, 3, 10, '120.00', '2016-12-07', '10:21:00'),
(814, 239, 18, 1, 10, '120.00', '2016-12-07', '10:21:00'),
(815, 239, 18, 2, 10, '120.00', '2016-12-07', '10:21:01'),
(816, 239, 18, 3, 10, '120.00', '2016-12-07', '10:21:01'),
(817, 239, 19, 1, 10, '120.00', '2016-12-07', '10:21:01'),
(818, 239, 19, 2, 10, '120.00', '2016-12-07', '10:21:02'),
(819, 239, 19, 3, 10, '120.00', '2016-12-07', '10:21:02'),
(820, 240, 7, 1, 10, '120.00', '2016-12-07', '10:23:03'),
(821, 240, 7, 2, 10, '120.00', '2016-12-07', '10:23:03'),
(822, 240, 7, 3, 10, '120.00', '2016-12-07', '10:23:04'),
(823, 240, 8, 1, 10, '120.00', '2016-12-07', '10:23:04'),
(824, 240, 8, 2, 10, '120.00', '2016-12-07', '10:23:05'),
(825, 240, 8, 3, 10, '120.00', '2016-12-07', '10:23:05'),
(826, 240, 9, 1, 10, '120.00', '2016-12-07', '10:23:06'),
(827, 240, 9, 2, 10, '120.00', '2016-12-07', '10:23:06'),
(828, 240, 9, 3, 10, '120.00', '2016-12-07', '10:23:07'),
(829, 240, 10, 1, 10, '120.00', '2016-12-07', '10:23:07'),
(830, 240, 10, 2, 10, '120.00', '2016-12-07', '10:23:08'),
(831, 240, 10, 3, 10, '120.00', '2016-12-07', '10:23:08'),
(832, 240, 11, 1, 10, '120.00', '2016-12-07', '10:23:08'),
(833, 240, 11, 2, 10, '120.00', '2016-12-07', '10:23:09'),
(834, 240, 11, 3, 10, '120.00', '2016-12-07', '10:23:09'),
(835, 240, 12, 1, 10, '120.00', '2016-12-07', '10:23:10'),
(836, 240, 12, 2, 10, '120.00', '2016-12-07', '10:23:10'),
(837, 240, 12, 3, 10, '120.00', '2016-12-07', '10:23:11');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(5) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Samual', 'Ross', 'samual.ross@example.com', '1234'),
(2, 'Britney', 'Ewalt', 'britney.ewalt@example.com', ''),
(3, 'Boris', 'Ivanov', 'boris.ivanov@example.com', ''),
(4, 'Tanya', 'Rotshchild', 'tanya.moneybags@example.com', ''),
(5, 'demo', 'demo', 'demo@example.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exercise`
--
ALTER TABLE `exercise`
  ADD PRIMARY KEY (`exercise_id`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`routine_id`);

--
-- Indexes for table `routine_exercises`
--
ALTER TABLE `routine_exercises`
  ADD PRIMARY KEY (`routine_exercise_id`),
  ADD KEY `routine_id` (`routine_id`),
  ADD KEY `exercise_id` (`exercise_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_routine`
--
ALTER TABLE `user_routine`
  ADD PRIMARY KEY (`user_routine_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `routine_id` (`routine_id`),
  ADD KEY `routine_id_2` (`routine_id`);

--
-- Indexes for table `user_routine_exercises`
--
ALTER TABLE `user_routine_exercises`
  ADD PRIMARY KEY (`user_routine_exercise_id`),
  ADD KEY `user_routine_id` (`user_routine_id`),
  ADD KEY `exercise_id` (`exercise_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exercise`
--
ALTER TABLE `exercise`
  MODIFY `exercise_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `routine_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `routine_exercises`
--
ALTER TABLE `routine_exercises`
  MODIFY `routine_exercise_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `user_routine`
--
ALTER TABLE `user_routine`
  MODIFY `user_routine_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;
--
-- AUTO_INCREMENT for table `user_routine_exercises`
--
ALTER TABLE `user_routine_exercises`
  MODIFY `user_routine_exercise_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=838;
--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `routine_exercises`
--
ALTER TABLE `routine_exercises`
  ADD CONSTRAINT `routine_exercises_ibfk_2` FOREIGN KEY (`exercise_id`) REFERENCES `exercise` (`exercise_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `routine_exercises_ibfk_3` FOREIGN KEY (`routine_id`) REFERENCES `routine` (`routine_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_routine`
--
ALTER TABLE `user_routine`
  ADD CONSTRAINT `user_routine_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_table` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `user_routine_ibfk_2` FOREIGN KEY (`routine_id`) REFERENCES `routine` (`routine_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_routine_exercises`
--
ALTER TABLE `user_routine_exercises`
  ADD CONSTRAINT `user_routine_exercises_ibfk_3` FOREIGN KEY (`user_routine_id`) REFERENCES `user_routine` (`user_routine_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_routine_exercises_ibfk_4` FOREIGN KEY (`exercise_id`) REFERENCES `routine_exercises` (`exercise_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

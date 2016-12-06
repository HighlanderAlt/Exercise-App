-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2016 at 06:20 AM
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
(12, 'Back and Biceps', 0),
(13, 'TEST', 5);

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
(72, 4, 24, 0),
(73, 13, 13, 5),
(74, 13, 14, 5);

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
  MODIFY `routine_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `routine_exercises`
--
ALTER TABLE `routine_exercises`
  MODIFY `routine_exercise_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `user_routine`
--
ALTER TABLE `user_routine`
  MODIFY `user_routine_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;
--
-- AUTO_INCREMENT for table `user_routine_exercises`
--
ALTER TABLE `user_routine_exercises`
  MODIFY `user_routine_exercise_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=670;
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

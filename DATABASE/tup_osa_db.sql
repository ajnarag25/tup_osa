-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2022 at 02:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tup_osa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `image`, `name`, `username`, `password`, `email`) VALUES
(1, 'upload/Admin-Profile-PNG-Clipart.png', 'Administrator OSA', 'administrator', 'admin123', 'tupc.osasystem@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `course` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `good_moral`
--

CREATE TABLE `good_moral` (
  `id` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `yr_attendance` varchar(100) NOT NULL,
  `yr_graduate` varchar(100) NOT NULL,
  `proof` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_submit` varchar(100) NOT NULL,
  `date_claim` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `id_request`
--

CREATE TABLE `id_request` (
  `id` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `req_type` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `id_pic` text NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `sched_submit` varchar(100) NOT NULL,
  `sched_claim` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `id_validation`
--

CREATE TABLE `id_validation` (
  `id` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `id_condition` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_submit` varchar(100) NOT NULL,
  `date_claim` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `apply` varchar(100) NOT NULL,
  `school_yr` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dbirth` varchar(100) NOT NULL,
  `pbirth` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `paddress` text NOT NULL,
  `elementary` varchar(100) NOT NULL,
  `e_address` text NOT NULL,
  `e_syattend` varchar(100) NOT NULL,
  `e_awards` varchar(100) NOT NULL,
  `junior` varchar(100) NOT NULL,
  `j_address` text NOT NULL,
  `j_syattend` varchar(100) NOT NULL,
  `j_awards` varchar(100) NOT NULL,
  `senior` varchar(100) NOT NULL,
  `s_address` text NOT NULL,
  `s_syattend` varchar(100) NOT NULL,
  `s_awards` varchar(100) NOT NULL,
  `academic_probation` text NOT NULL,
  `desciplinary_probation` text NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `f_nationality` varchar(100) NOT NULL,
  `f_occupation` varchar(100) NOT NULL,
  `f_company` text NOT NULL,
  `f_number` varchar(100) NOT NULL,
  `f_contact` varchar(100) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_nationality` varchar(100) NOT NULL,
  `m_occupation` varchar(100) NOT NULL,
  `m_company` text NOT NULL,
  `m_number` varchar(100) NOT NULL,
  `m_contact` varchar(100) NOT NULL,
  `siblings` int(11) NOT NULL,
  `birth_order` varchar(100) NOT NULL,
  `hospitalized` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `essay1` text NOT NULL,
  `essay2` text NOT NULL,
  `req_date` varchar(100) NOT NULL,
  `sched_date` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `social1` varchar(100) NOT NULL,
  `social2` varchar(100) NOT NULL,
  `otp` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usg_voting`
--

CREATE TABLE `usg_voting` (
  `id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usg_voting`
--

INSERT INTO `usg_voting` (`id`, `status`) VALUES
(1, 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `violations`
--

CREATE TABLE `violations` (
  `id` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `yr_section` varchar(100) NOT NULL,
  `offense1` varchar(100) NOT NULL,
  `offense2` varchar(100) NOT NULL,
  `offense3` text NOT NULL,
  `offense4` text NOT NULL,
  `td` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `president` varchar(100) NOT NULL,
  `vicepres` varchar(100) NOT NULL,
  `secretary` varchar(100) NOT NULL,
  `treasure` varchar(100) NOT NULL,
  `senator` varchar(100) NOT NULL,
  `governor` varchar(100) NOT NULL,
  `mayor` varchar(100) NOT NULL,
  `vicemayor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `good_moral`
--
ALTER TABLE `good_moral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_request`
--
ALTER TABLE `id_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_validation`
--
ALTER TABLE `id_validation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usg_voting`
--
ALTER TABLE `usg_voting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `violations`
--
ALTER TABLE `violations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `good_moral`
--
ALTER TABLE `good_moral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `id_request`
--
ALTER TABLE `id_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `id_validation`
--
ALTER TABLE `id_validation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usg_voting`
--
ALTER TABLE `usg_voting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

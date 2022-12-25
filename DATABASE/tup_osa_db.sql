-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 06:00 PM
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
  `partylist` varchar(100) NOT NULL,
  `vote` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `name`, `image`, `course`, `position`, `partylist`, `vote`) VALUES
(3, 'Vinix Matthew Narag', 'upload/Admin-Profile-PNG-Clipart.png', 'BET-COET', 'Vice President', '', 13),
(4, 'aaa', 'upload/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg', 'BGT-AT', 'President', '', 49),
(5, 'bbb', 'upload/images.png', 'BET-ET', 'President', '', 16),
(6, 'ccc', 'upload/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg', 'BET-ESET', 'Vice President', '', 17),
(7, 'ddd', 'upload/images.png', 'BET-COET', 'Secretary', '', 11),
(8, 'eee', 'upload/images.png', 'BET-ET', 'Secretary', '', 12),
(9, 'fff', 'upload/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg', 'BET-PPT', 'Secretary', '', 3),
(10, 'ggg', 'upload/images.png', 'BGT-AT', 'Secretary', '', 3),
(11, 'hhh', 'upload/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg', 'BET-ET', 'Treasurer', '', 21),
(12, 'iii', 'upload/images.png', 'BSIE-ICT', 'Treasurer', '', 4),
(13, 'jjj', 'upload/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg', 'BET-PPT', 'Senator', '', 4),
(14, 'kkk', 'upload/images.png', 'BGT-AT', 'Senator', '', 4),
(15, 'lll', 'upload/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg', 'BSCE', 'Senator', '', 4),
(16, 'mmm', 'upload/images.png', 'BET-PPT', 'Senator', '', 3),
(17, 'nnn', 'upload/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg', 'BET-AD', 'Senator', '', 6),
(18, 'ooo', 'upload/images.png', 'BET-COET', 'Senator', '', 6),
(19, 'ppp', 'upload/images.png', 'BSCE', 'Senator', '', 15),
(20, 'qqq', 'upload/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg', 'BSME', 'Governor', '', 5),
(21, 'rrr', 'upload/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg', 'BSEE', 'Governor', '', 5),
(22, 'sss', 'upload/images.png', 'BET-AD', 'Governor', '', 4),
(23, 'ttt', 'upload/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg', 'BET-ET', 'Governor', '', 2),
(24, 'uuu', 'upload/images.png', 'BSIE-IA', 'Governor', '', 5),
(25, 'vvv', 'upload/images.png', 'BET-CT', 'Governor', '', 18),
(26, 'www', 'upload/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg', 'BET-ESET', 'Governor', '', 6),
(27, 'xxx', 'upload/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg', 'BET-AD', 'Mayor', '', 19),
(34, 'Aj Narag', 'upload/images.png', 'BET-COET', 'Senator', '', 9),
(35, 'Bermon', 'upload/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg', 'BET-ESET', 'President', 'N/A', 2),
(36, 'Aj Narag', 'upload/images.png', 'BET-COET', 'Vice President', 'Pogi', 1),
(37, 'qwe', 'upload/images.png', 'BET-ET', 'Vice Mayor', 'N/A', 20);

-- --------------------------------------------------------

--
-- Table structure for table `comselec`
--

CREATE TABLE `comselec` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comselec`
--

INSERT INTO `comselec` (`id`, `image`, `name`, `username`, `password`, `email`) VALUES
(1, 'upload/Profile-PNG-Clipart.png', 'Comselec OSA', 'comselec', 'comselec123', 'tup.osasystem@gmail.com');

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
  `date_claim` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `good_moral`
--

INSERT INTO `good_moral` (`id`, `student_id`, `name`, `course`, `contact`, `email`, `purpose`, `yr_attendance`, `yr_graduate`, `proof`, `status`, `date_submit`, `date_claim`, `message`) VALUES
(4, 'TUPC-18-0717', 'Avor John A. Narag', 'BET-COET', '09089637505', 'ajnarag25@gmail.com', 'Scholarship', '4 years', '2022', 'uploads/1670513552Admin-Profile-PNG-Clipart.png', 'DECLINED', '2022/12/08', 'PENDING', 'SORRY LODS GOODMORAL DI TANGGAP'),
(5, 'TUPC-18-0717', 'Avor John A. Narag', 'BET-COET', '09089637505', 'ajnarag25@gmail.com', 'Para sa liga boss', 'N/A', 'N/A', 'uploads/16709952596.DL.jpg', 'PENDING', '2022/12/14', 'PENDING', 'N/A');

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
  `signature` text NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `sched_submit` varchar(100) NOT NULL,
  `sched_claim` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `id_request`
--

INSERT INTO `id_request` (`id`, `student_id`, `name`, `email`, `req_type`, `course`, `contact`, `birthday`, `id_pic`, `signature`, `contact_person`, `contact_no`, `address`, `status`, `sched_submit`, `sched_claim`, `message`) VALUES
(3, 'TUPC-18-0717', 'Avor John A. Narag', 'ajnarag25@gmail.com', 'Replacement (lost ID)', 'BET-COET', '09089637505', '1999-08-25', 'uploads/1670996755319270803_555776956387734_185498102251204505_n.jpg', 'uploads/signatures/167099675541fIV+4JzDL.jpg', 'Hazel Narag', '09555497138', 'blk 3 lot 8 meadow park subdivision, molino 4', 'PENDING', '2022/12/14', 'PENDING', 'N/A');

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
  `status` varchar(100) NOT NULL,
  `date_submit` varchar(100) NOT NULL,
  `date_claim` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `id_validation`
--

INSERT INTO `id_validation` (`id`, `student_id`, `name`, `course`, `contact`, `email`, `address`, `birthday`, `status`, `date_submit`, `date_claim`, `message`) VALUES
(3, 'TUPC-18-0717', 'Avor John A. Narag', 'BET-COET', '09089637505', 'ajnarag25@gmail.com', 'blk 3 lot 8 meadow park subdivision, molino 4', '1999-08-25', 'PENDING', '2022/12/14', 'PENDING', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `list_scholar`
--

CREATE TABLE `list_scholar` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `list_scholar`
--

INSERT INTO `list_scholar` (`id`, `name`, `description`) VALUES
(1, 'Asian Development Bank Spouses Association Scholarship', 'Asian Development Bank Spouses Association Scholarship is a scholarship that provides a financial help for the students'),
(2, 'Teritiary Education Subsidy', 'Teritiary Education Subsidy is a scholarship that provides a financial help for the students');

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
  `status` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id`, `student_id`, `apply`, `school_yr`, `name`, `course`, `contact`, `email`, `dbirth`, `pbirth`, `age`, `sex`, `nationality`, `religion`, `address`, `paddress`, `elementary`, `e_address`, `e_syattend`, `e_awards`, `junior`, `j_address`, `j_syattend`, `j_awards`, `senior`, `s_address`, `s_syattend`, `s_awards`, `academic_probation`, `desciplinary_probation`, `f_name`, `f_nationality`, `f_occupation`, `f_company`, `f_number`, `f_contact`, `m_name`, `m_nationality`, `m_occupation`, `m_company`, `m_number`, `m_contact`, `siblings`, `birth_order`, `hospitalized`, `details`, `essay1`, `essay2`, `req_date`, `sched_date`, `status`, `message`) VALUES
(2, 'TUPC-18-0717', 'Teritiary Education Subsidy', '2022-2023', 'Avor John A. Narag', 'BET-COET', '09089637505', 'ajnarag25@gmail.com', '1999-08-25', 'Marikina', 22, 'Male', 'Filipino', 'Christian', 'blk 3 lot 8 meadow park subdivision, molino 4', 'Pangasinan', 'T. Alonzo Elementary School', 'Quezon city', '2008', 'N/A', 'St. John Fisher School', 'Bacoor, Cavite', '2012', 'N/A', 'APEC Schools', 'Bacoor, Cavite', '2018', 'N/A', 'N/A', 'N/A', 'Nixon', 'Filipino', 'Salesman', 'Bacoor', 'N/A', '09165982748', 'Hazel', 'Filipino', 'N/A', 'N/A', 'N/A', '09555497138', 2, '3rd', 'No', 'N/A', 'Malupet po', 'Need lang po', '2022/12/08', '2022-12-15 03:17', 'SUCCESS', 'madaling araw punta ka lods'),
(3, 'TUPC-18-0717', 'Asian Development Bank Spouses Association Scholarship', '2022-2023', 'Avor John A. Narag', 'BET-COET', '09089637505', 'ajnarag25@gmail.com', '2000-08-25', 'Marikina', 23, 'Male', 'Filipino', 'Christian', 'blk 3 lot 8 meadow park subdivision, molino 4', 'Pangasinan', 'T. Alonzo Elementary School', 'Quezon city', '2008', 'N/A', 'St. John Fisher School', 'Bacoor, Cavite', '2012', 'N/A', 'APEC Schools', 'Bacoor, Cavite', '2018', 'N/A', 'N/A', 'N/A', 'Nixon', 'Filipino', 'Salesman', 'Bacoor', 'N/A', '09165982748', 'Hazel', 'Filipino', 'N/A', 'N/A', 'N/A', '09555497138', 5, '3rd', 'No', 'N/A', 'Pogi po', 'Need lang talaga', '2022/12/13', 'PENDING', 'PENDING', 'N/A');

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

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `image`, `student_id`, `name`, `course`, `email`, `contact`, `username`, `password`, `social1`, `social2`, `otp`, `status`) VALUES
(1, 'uploads/default.png', 'TUPC-18-0717', 'Avor John A. Narag', 'BET-COET', 'ajnarag25@gmail.com', '09089637505', 'ajnarag25', '$2y$10$X.Cl/Is30BfZ7SKR4C9fqu45QgQeJeTRC8NQu65WRQnUhp1thPtj2', 'N/A', 'N/A', 0, 'VERIFIED');

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

--
-- Dumping data for table `violations`
--

INSERT INTO `violations` (`id`, `student_id`, `name`, `course`, `yr_section`, `offense1`, `offense2`, `offense3`, `offense4`, `td`, `status`) VALUES
(9, 'TUPC-18-0717', 'Avor John A. Narag', 'BET-ESET', '4B', 'Major', 'Deadly and Dangerous Weapons', 'First', 'Suspension for one semester', '0', 'ONGOING'),
(10, 'TUPC-18-0615', 'Vinix Matthew Narag', 'BET-ESET', '2A', 'Major', 'Unautorized Activities/Illegal Assemblies', 'First', 'Expulsion', '11', 'ONGOING');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `id` int(11) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`id`, `student_id`, `email`) VALUES
(3, 'TUPC-18-0717', 'ajnarag25@gmail.com');

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
-- Indexes for table `comselec`
--
ALTER TABLE `comselec`
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
-- Indexes for table `list_scholar`
--
ALTER TABLE `list_scholar`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `comselec`
--
ALTER TABLE `comselec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `good_moral`
--
ALTER TABLE `good_moral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `id_request`
--
ALTER TABLE `id_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `id_validation`
--
ALTER TABLE `id_validation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `list_scholar`
--
ALTER TABLE `list_scholar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usg_voting`
--
ALTER TABLE `usg_voting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `violations`
--
ALTER TABLE `violations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 05:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buk_siwes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `bank_name` text NOT NULL,
  `acc_no` text NOT NULL,
  `sort_code` text NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bank_name`, `acc_no`, `sort_code`, `reg_no`, `status`) VALUES
(1, 'ACCESS BANK', '0976549876', '5647555656', 'UG/2020/CS/2019', '1'),
(2, 'GTBank', '1234597653', '0967675645', 'NDCS2020/897', '1');

-- --------------------------------------------------------

--
-- Table structure for table `form8`
--

CREATE TABLE `form8` (
  `id` int(5) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `yos` varchar(10) NOT NULL,
  `noi` varchar(200) NOT NULL,
  `noe` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `sec` varchar(100) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `now` varchar(5) NOT NULL,
  `allowance` varchar(100) NOT NULL,
  `passport` varchar(255) NOT NULL,
  `brief` varchar(200) NOT NULL,
  `place` varchar(200) NOT NULL,
  `toweeks` varchar(10) NOT NULL,
  `spe` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form8`
--

INSERT INTO `form8` (`id`, `fname`, `surname`, `reg_no`, `dept`, `yos`, `noi`, `noe`, `address`, `sec`, `start`, `end`, `now`, `allowance`, `passport`, `brief`, `place`, `toweeks`, `spe`) VALUES
(1, '', '', 'NDCS2020/897', 'Cyber Security', '2019', 'Bayero University Kano', 'Briatek NI', 'gombe', 'ICT', '2022-06-07', '2022-12-20', '24', 'none', 'upload_images/.jpg', 'php', 'ICT', '22', '1'),
(16, 'Adedapo', 'daniel', 'UG/2020/CS/2019', 'Cyber Security', '2020', 'Bayero University Kano', 'Briatek NI', 'gombe', 'ICT', '2022-06-09', '2022-06-29', '24', 'none', 'upload_images/.jpg', 'php and sql', 'ICT', '22', '1'),
(31, '', '', 'jfjfg', 'Computer Science', '', '', '', '', '', '2022-06-10', '2022-06-30', '', '', '', '', '', '', ''),
(32, '', '', 'uygyug', 'Computer Science', '', '', '', '', '', '2022-06-10', '2022-06-30', '', '', '', '', '', '', ''),
(33, '', '', 'jguvgv', 'Computer Science', '', '', '', '', '', '2022-06-10', '2022-06-30', '', '', '', '', '', '', ''),
(34, '', '', 'vkjvjv', 'Computer Science', '', '', '', '', '', '2022-06-10', '2022-06-30', '', '', '', '', '', '', ''),
(35, '', '', 'jv', 'Cyber Security', '', '', '', '', '', '2022-06-10', '2022-06-30', '', '', '', '', '', '', ''),
(36, '', '', 'jhgvjhgv', 'Information Technology', '', '', '', '', '', '2022-06-10', '2022-06-30', '', '', '', '', '', '', ''),
(37, '', '', 'kjhbkjhbj', 'Computer Science', '', '', '', '', '', '2022-06-10', '2022-06-30', '', '', '', '', '', '', ''),
(38, '', '', 'NDCS/2020/1234', 'Information Technology', '', '', '', '', '', '2022-06-21', '2023-01-09', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(6) NOT NULL,
  `title` varchar(5) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `reg_no` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `password` varchar(20) NOT NULL,
  `letter` varchar(255) NOT NULL,
  `letter_status` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `title`, `fname`, `surname`, `reg_no`, `email`, `mobile`, `gender`, `dept`, `level`, `duration`, `start`, `end`, `password`, `letter`, `letter_status`, `status`) VALUES
(1, 'Mr', 'Suleaiman', 'Mender', 'UG/CS/18/3032', 'sule@gmailcom', '09087654321', 'Male', 'Computer Science', '300', 'Six (6) Months', '2022-05-30', '2022-08-30', '123456', '', '', '1'),
(2, 'Mr', 'Daniel ', 'Alu', 'UG/CS/21/0023', 'danielalu@yahoo.com', '09076543212', 'Male', 'Cyber Security', '400', 'Six (6) Months', '2022-05-30', '2022-08-24', '123456', '', '', '1'),
(8, 'Mr.', 'Doos', 'Dikaaaaa', 'NDCS2019/234', 'abdulqadirbarambu@gmail.com', '08058765432', 'Male', 'Computer Science', '300', 'Three (3) Months', '2022-05-30', '2022-08-09', '123456', '', '', '1'),
(13, 'Mr.', 'Ayomide', 'Dikaaaaa', 'NDCS2019/236', 'ajbdjhg@gmail.com', '08058765432', 'Female', 'Information Technology', '300', 'Three (3) Months', '2022-05-30', '2022-07-19', '123456', '', '', '1'),
(14, 'Miss.', 'MARYAM', 'BABAYO', 'UGCS/2020/123', 'maryambab@yahoo.com', '07045678765', 'Female', 'Information Technology', '400', 'Six (6) Months', '2022-05-30', '2022-08-23', '123456', '', '', '1'),
(15, 'Mrs.', 'Adamu', 'MAryam', 'UGCS18290', 'adamumm@yahoo.com', '09076543123', 'Female', 'Information Technology', '400', 'Three (3) Months', '2022-05-31', '2022-09-20', '123456', '', '', '1'),
(16, 'Miss.', 'Precious', 'David', 'UGCS201609', 'preciousdav@gmail.com', '09065643546', 'Female', 'Information Technology', '300', 'Three (3) Months', '2022-05-31', '2022-08-31', '123456', '', '', '1'),
(17, 'Mrs.', 'Ada', 'Chima', 'UGCS/3021/2022', 'adachima@gmail.com', '09034123456', 'Female', 'Information Technology', '400', 'Three (3) Months', '2022-06-01', '2022-09-26', '123456', '', '', '1'),
(18, 'Mr.', 'Adedapo', 'Daniel', 'UG/2020/CS/2019', 'danielade@yahoo.com', '09087654321', 'Male', 'Cyber Security', '300', 'Six (6) Months', '2022-06-04', '2022-12-19', '123456', 'upload_letter/.png', '1', '1'),
(19, 'Mr.', 'Adamu', 'Muhammad', 'NDCS2020/897', 'adamualii@yahoo.com', '09098765674', 'Male', 'Cyber Security', '300', 'Six (6) Months', '2022-06-07', '2022-12-20', '123456', 'upload_letter/.png', '1', '1'),
(20, 'Mrs.', 'Sarah', 'Dauda', 'NDCS2020/654', 'daudasarah@yahoo.com', '09023657843', 'Female', 'Information Technology', '300', 'Three (3) Months', '2022-06-07', '2022-11-30', '123456', '', '', '1'),
(21, 'Miss.', 'Shina', 'Peter', 'NDCS2020/098', 'shina@yahoo.com', '09054676321', 'Male', 'Software Engineering', '400', 'Three (3) Months', '2022-06-07', '2022-12-25', '123456', '', '', '1'),
(22, 'Miss.', 'Adeola', 'Kudirat', 'NDCS2020/658', 'adekudi@yahoo.com', '09076543897', 'Female', 'Cyber Security', '400', 'Six (6) Months', '2022-06-07', '2022-12-25', '123456', '', '', '1'),
(37, 'Mr.', 'ade', 'oluwa', 'yyudhjd', 'athah@gmail.com', '09076543123', 'Male', 'Computer Science', '300', 'Three (3) Months', '2022-06-10', '2022-06-30', '123456', '', '', '1'),
(38, 'Mr.', 'gafar', 'Dika', 'jfjfg', 'athah@gmail.com', '09076543123', 'Male', 'Computer Science', '300', 'Three (3) Months', '2022-06-10', '2022-06-30', '123456', '', '', '1'),
(39, 'Mr.', 'hun', 'uub', 'uygyug', 'kfgh@yahoo.com', '09034587654', 'Male', 'Computer Science', '300', 'Three (3) Months', '2022-06-10', '2022-06-30', '123456', '', '', '1'),
(40, 'Mr.', 'hgfjfg', 'gjgvgh', 'jguvgv', 'jh@yahoo.com', '07045678765', 'Male', 'Computer Science', '300', 'Three (3) Months', '2022-06-10', '2022-06-30', '123456', '', '', '1'),
(41, 'Mr.', 'kjhgjhkv', 'kvkjhvkjhv', 'vkjvjv', 'preciousdav@gmail.com', '09034567898', 'Others', 'Computer Science', '400', 'Six (6) Months', '2022-06-10', '2022-06-30', '123456', '', '', '1'),
(42, 'Mr.', 'lhg', 'hvjkhv', 'jv', 'hbhb@yahoo.com', '09034123456', 'Others', 'Cyber Security', '400', 'Three (3) Months', '2022-06-10', '2022-06-30', '123456', '', '', '1'),
(43, 'Mr.', 'yugyug', 'jkhvkjhv', 'jhgvjhgv', 'hbhb@yahoo.com', '09034123456', 'Female', 'Information Technology', '400', 'Six (6) Months', '2022-06-10', '2022-06-30', '123456', '', '', '1'),
(44, 'Mr.', 'iuggy', 'oiygog', 'oogyouy', 'hbhb@yahoo.com', '08058765432', 'Female', 'Computer Science', '400', 'Three (3) Months', '2022-06-10', '2022-06-30', '123456', '', '', '1'),
(45, 'Mr.', 'jhvjk', 'jkhvkjhvjh', 'kjhbkjhbj', 'ahmad29999@gmail.com', '09034123456', 'Male', 'Computer Science', '300', 'Three (3) Months', '2022-06-10', '2022-06-30', '123456', '', '', '1'),
(46, 'Mr.', 'Hauwa', 'Gafar', 'NDCS/2020/1234', 'hauwagafr@gmail.com', '09077653962', 'Male', 'Information Technology', '300', 'Six (6) Months', '2022-06-21', '2023-01-09', '123456', '', '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- Indexes for table `form8`
--
ALTER TABLE `form8`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reg_no` (`reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form8`
--
ALTER TABLE `form8`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

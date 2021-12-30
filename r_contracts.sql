-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2021 at 10:26 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `r_contracts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(11) NOT NULL,
  `user_email_id` varchar(60) NOT NULL,
  `name_of_company` varchar(250) NOT NULL,
  `employer_email` varchar(250) NOT NULL,
  `company_website` varchar(250) NOT NULL,
  `employer_phn` int(11) NOT NULL,
  `sub_by` varchar(250) NOT NULL,
  `sub_for_company` varchar(20) NOT NULL,
  `blacklisted` set('YES','NO') NOT NULL,
  `createdDtae` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `user_email_id`, `name_of_company`, `employer_email`, `company_website`, `employer_phn`, `sub_by`, `sub_for_company`, `blacklisted`, `createdDtae`) VALUES
(13, 'user@gmail.com', 'sumant kr.', 's@gmail.com', 'http://www.s.com', 2147483644, 'sjhbdhb', 'CAT SOFTWARE', 'NO', '2021-09-26 19:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `contract_media`
--

CREATE TABLE `contract_media` (
  `mediaId` int(11) NOT NULL,
  `contractor_id` varchar(60) NOT NULL,
  `media_files` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contract_media`
--

INSERT INTO `contract_media` (`mediaId`, `contractor_id`, `media_files`) VALUES
(9, '13', 'assets/images/contractorMedia/dcp-t510w-inktank-mfp1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paperworks_documents`
--

CREATE TABLE `paperworks_documents` (
  `id` int(11) NOT NULL,
  `paper_work_id` int(11) NOT NULL,
  `user_paperwork_document` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT 'Active-1,Delete-0',
  `created_date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paperworks_documents`
--

INSERT INTO `paperworks_documents` (`id`, `paper_work_id`, `user_paperwork_document`, `status`, `created_date_time`) VALUES
(17, 3, 'assets/images/paperMedia/dcp-t310-inktank-mfp2.jpg', 1, '2021-09-27 09:39:04'),
(18, 3, 'assets/images/paperMedia/dcp-t310-inktank-mfp3.jpg', 1, '2021-09-27 09:39:04'),
(19, 3, 'assets/images/paperMedia/dcp-t710w-inktank-mfp3.jpg', 1, '2021-09-27 09:39:04');

-- --------------------------------------------------------

--
-- Table structure for table `paper_work`
--

CREATE TABLE `paper_work` (
  `id` int(11) NOT NULL,
  `user_email_id` varchar(255) NOT NULL,
  `name_of_candidate` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `employer_company_name` varchar(255) NOT NULL,
  `employer_website` varchar(255) NOT NULL,
  `sub_by_rec_name` varchar(255) NOT NULL,
  `manager_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paper_work`
--

INSERT INTO `paper_work` (`id`, `user_email_id`, `name_of_candidate`, `email`, `phone`, `employer_company_name`, `employer_website`, `sub_by_rec_name`, `manager_name`) VALUES
(3, 'user@gmail.com', 'sumant', 'sumant@gmail.com', '8709566789', 'cattechnologies', 'http://www.cattechnologies.com', 'jdhfjkdshj', 'djfjdshj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(10, 'user', 'user@gmail.com', '01cfcd4f6b8770febfb40cb906715822');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contract_media`
--
ALTER TABLE `contract_media`
  ADD PRIMARY KEY (`mediaId`);

--
-- Indexes for table `paperworks_documents`
--
ALTER TABLE `paperworks_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paper_work`
--
ALTER TABLE `paper_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contract_media`
--
ALTER TABLE `contract_media`
  MODIFY `mediaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `paperworks_documents`
--
ALTER TABLE `paperworks_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `paper_work`
--
ALTER TABLE `paper_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 04:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catagories`
--

CREATE TABLE `tbl_catagories` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) DEFAULT NULL,
  `cat_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_catagories`
--

INSERT INTO `tbl_catagories` (`id`, `cat_name`, `cat_description`) VALUES
(24, ' Personal', 'Personal interest own Hobby'),
(25, ' Natural', 'Nature and environment'),
(26, ' Climate', 'Nature ,environment and climate'),
(28, ' Tech', 'technological topics'),
(29, ' Design', 'Desinging');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) DEFAULT NULL,
  `post_content` longtext DEFAULT NULL,
  `post_img` varchar(255) DEFAULT NULL,
  `post_user` varchar(255) DEFAULT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `post_summary` text DEFAULT NULL,
  `post_status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`post_id`, `post_title`, `post_content`, `post_img`, `post_user`, `post_date`, `post_summary`, `post_status`) VALUES
(8, 'A natureal refreshment', 'Vivid ecosystems dance, harmonizing lifes rhythm.\r\nMountains whisper ancient tales, guarding Earths embrace.\r\nRivers weave liquid stories through landscapes untamed.\r\nFlora paints the canvas of existence, vibrant and free.\r\nNatures symphony, a masterpiece of creations symphony.', 'linus-nylund-JP23z_-dA74-unsplash.jpg', 'Shagor', '2023-08-10 09:33:55', 'Vivid ecosystems dance, harmonizing lifes rhythm.\r\nMountains whisper ancient tales, guarding Earths embrace.\r\nRivers weave liquid stories through landscapes untamed.\r\nFlora paints the canvas of existence, vibrant and free.\r\nNatures symphony, a masterpiece of creations symphony.', 1),
(9, 'Moon lite night', 'Sunset paints the sky in hues of fire, bidding day adieu.\r\nStars emerge, adorning nights velvet canopy with distant dreams.\r\nWaves caress shores, recounting tales of journeys taken.\r\nForests stand as ancient realms, sheltering myriad secrets.\r\nLifes cycles continue, weaving patterns through times embrace.', 'hector-falcon-Bge7mEbDX78-unsplash.jpg', 'Shagor', '2023-08-10 09:43:28', 'Sunset paints the sky in hues of fire, bidding day adieu.\r\nStars emerge, adorning nights velvet canopy with distant dreams.\r\nWaves caress shores, recounting tales of journeys taken.\r\nForests stand as ancient realms, sheltering myriad secrets.\r\nLifes cycles continue, weaving patterns through times embrace.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `password`, `status`) VALUES
(1, 'shagor', 'shagor@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(5, 'SHAGOR KUMAR DAS', 's@gmail.com', '1245', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_catagories`
--
ALTER TABLE `tbl_catagories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_catagories`
--
ALTER TABLE `tbl_catagories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

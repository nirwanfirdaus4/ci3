-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2018 at 09:21 AM
-- Server version: 5.6.36
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `incridible`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(5) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `isi` varchar(1000) NOT NULL,
  `tanggal` date NOT NULL,
  `creator` varchar(50) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `kategori`, `isi`, `tanggal`, `creator`, `gambar`) VALUES
(1, 'Builder Convency', 'company', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora cumque adipisci atque ab quam, non, maiores nostrum. Necessitatibus, sit quae magnam nesciunt totam culpa reiciendis amet molestiae libero natus iusto.', '2018-05-15', 'Near-One', 'Background.jpg'),
(2, 'Savana Guest Housed', 'personal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora cumque adipisci atque ab quam, non, maiores nostrum. Necessitatibus, sit quae magnam nesciunt totam culpa reiciendis amet molestiae libero natus iusto.', '2018-05-15', 'david_jone', 'p2.png'),
(5, 'Water_Burn', 'Personal', 'mafalfmalmalmlamlamdklamlmd', '2018-05-15', 'kasdkasd', 'Screenshot_(2).png'),
(6, 'gg', 'gg', 'gdggggg', '2018-05-15', 'g', '1.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(25) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Company website'),
(2, 'Personal website');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

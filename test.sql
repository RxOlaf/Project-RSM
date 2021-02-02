-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 12:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `form_input`
--

CREATE TABLE `form_input` (
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_input`
--

INSERT INTO `form_input` (`nama`, `email`, `telepon`, `judul`, `pesan`) VALUES
('asdw', 'rollandputra19@gmail.com', '0', 'Kritik', 'dwadaw'),
('asdw', 'rollandputra19@gmail.com', '821', 'Kritik', 'asdqdqdq'),
('rolland', 'rolland@example.com', '2147483647', 'Saran', 'Belajar lebih giat'),
(' ', 'rolland@example.com', '2147483647', 'Subject', ''),
('  ', 'rolland@example.com', '1234567891234', 'Subject', ' '),
('  ', 'rolland@example.com', '0821-1111-111', 'Subject', ' '),
(' ', 'rolland@example.com', '0821-1111-111', 'Subject', ' '),
('  ', 'rolland@example.com', '0821-1111-111', 'Subject', ' '),
(' ', 'rolland@example.com', '0821-1111-111', 'Subject', '  '),
(' ', 'rolland@example.com', '0821-1111-111', 'Subject', ' '),
('', 'rolland@example.com', '0821-1111-111', 'Subject', '  '),
(' ', 'rolland@example.com', '0821-1111-111', 'Subject', ' '),
('', 'rolland@example.com', '0821-1111-111', 'Subject', ''),
('', 'rolland@example.com', '0821-1111-111', 'Subject', ' '),
('', 'rolland@example.com', '0821-1111-111', 'Subject', ''),
(' aa', 'rolland@example.com', '0821-1111-111', 'Subject', ''),
('', '', '', 'Subject', ''),
('', 'rolland@example.com', '0821-1111-111', 'Subject', ''),
('', '', '', '', ''),
('', '', '', 'Subject', ''),
('', '', '', 'Subject', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

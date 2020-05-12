-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2018 at 08:09 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `Electoral's Name` varchar(30) NOT NULL,
  `Voter_ID` varchar(20) NOT NULL,
  `Date Of Birth` varchar(12) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Place` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`Electoral's Name`, `Voter_ID`, `Date Of Birth`, `Gender`, `Place`) VALUES
('SAROJ DEVI', 'ABL1199074', '22/11/1962', 'F', 'JIND'),
('LALITA BANSAL', 'FBS1406461', '13/05/1975', 'F', 'JIND'),
('SHELLY', 'FBS1971043', '18/10/1970', 'F', 'JIND'),
('SUNITA', 'FBS2055572', '17/06/1975', 'F', 'JIND'),
('SURESH', 'FBS2055580', '18/09/1973', 'M', 'JIND'),
('SHARDA DEVI', 'HR/09/48/396452', '14/01/1968', 'F', 'JIND'),
('VINAY', 'HR/09/48/396453', '05/07/1968', 'M', 'JIND'),
('VINOD KUMAR', 'HR/09/48/396666', '15/03/1961', 'M', 'JIND'),
('PRAHLAD RAI', 'HR/09/48/402452', '01/02/1964', 'M', 'JIND'),
('SUNITA RANI', 'HR/09/48/402455', '17/08/1980', 'F', 'JIND'),
('SUSHILA', 'HR/09/48396667', '20/12/1962', 'F', 'JIND'),
('PARVEEN', 'HR/09/49/396451', '21/07/1963', 'M', 'JIND'),
('POORNIMA', 'IXP/0995175', '14./01/1998', 'F', 'JIND'),
('PANKAJ KUMAR', 'MQM/1451772', '23/09/1966', 'M', 'JIND'),
('REKHA DEVI', 'MQM/1451780', '15/02/1970', 'F', 'JIND'),
('KRISHAN KUMAR', 'SBJ1211655', '23/10/1961', 'M', 'JIND'),
('MADHU GUPTA', 'SBJ1211663', '13/05/1980', 'F', 'JIND'),
('VISHAL', 'SVB0133710', '02/04/1990', 'M', 'JIND'),
('ADITI BANSAL', 'SVB0284125', '09/09/1990', 'F', 'JIND'),
('AMAN', 'SVB0735605', '17/09/1997', 'M', 'JIND'),
('ANSHUL', 'SVB0744680', '05/12/1998', 'M', 'JIND'),
('SHOBHIT', 'SVB0765917', '24/06/1997', 'M', 'JIND');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Voter_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

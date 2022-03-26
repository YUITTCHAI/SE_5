-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2022 at 04:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `idcompany` int(11) NOT NULL,
  `namecompany` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `detail` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`idcompany`, `namecompany`, `address`, `phone`, `detail`) VALUES
(1, 'CAT', 'bangkok', '911', 'back-end'),
(2, 'TRUE', 'Bangkok', '1150', 'Full-Stack');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `idrequest` int(11) NOT NULL,
  `uid` varchar(10) NOT NULL,
  `idcompany` int(10) NOT NULL,
  `idstatus` int(10) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `requestdate` date NOT NULL,
  `syear` int(10) NOT NULL,
  `reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`idrequest`, `uid`, `idcompany`, `idstatus`, `startdate`, `enddate`, `requestdate`, `syear`, `reason`) VALUES
(1, '6020551920', 1, 2, '2022-03-01', '2022-05-01', '2022-02-02', 0, 'asdfl;kkkkkkkkkkkasdfasdfasdf'),
(2, '6020551920', 2, 1, '2022-04-01', '2022-05-15', '2022-03-24', 2563, ''),
(3, '6020551920', 1, 2, '2022-05-01', '2022-05-30', '2022-03-24', 0, ''),
(4, '6020551920', 1, 3, '2022-05-01', '2022-05-30', '2022-03-24', 0, 'llllllllllllllllllllllllllllllllllllllllllllllllllllllasdf,;alskfas'),
(5, '6020551920', 1, 1, '2022-05-01', '2022-05-30', '2022-03-24', 2562, '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `idstatus` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`idstatus`, `status`) VALUES
(1, 'waiting'),
(2, 'approve'),
(3, 'decline');

-- --------------------------------------------------------

--
-- Stand-in structure for view `table_request`
-- (See below for the actual view)
--
CREATE TABLE `table_request` (
`idrequest` int(11)
,`uid` varchar(10)
,`name` varchar(100)
,`surname` varchar(100)
,`idcompany` int(10)
,`namecompany` varchar(50)
,`idstatus` int(10)
,`status` varchar(50)
,`startdate` date
,`enddate` date
,`requestdate` date
,`syear` int(10)
,`reason` varchar(200)
);

-- --------------------------------------------------------

--
-- Table structure for table `typeuser`
--

CREATE TABLE `typeuser` (
  `idTypeuser` int(11) NOT NULL,
  `nametype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typeuser`
--

INSERT INTO `typeuser` (`idTypeuser`, `nametype`) VALUES
(1, 'nisit'),
(2, 'professor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `major` varchar(100) NOT NULL,
  `idTypeuser` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `password`, `name`, `surname`, `email`, `phone`, `major`, `idTypeuser`) VALUES
('6020551920', '1111', 'peerapat', 'limprakhon', 'peerapat.li@ku.th', '0877367740', 'Computer', 1),
('p1234', '1234', 'sek', 'loso', 'sek555@gmail.com', '088445641', 'Computer', 2);

-- --------------------------------------------------------

--
-- Structure for view `table_request`
--
DROP TABLE IF EXISTS `table_request`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `table_request`  AS SELECT `request`.`idrequest` AS `idrequest`, `request`.`uid` AS `uid`, `user`.`name` AS `name`, `user`.`surname` AS `surname`, `request`.`idcompany` AS `idcompany`, `company`.`namecompany` AS `namecompany`, `request`.`idstatus` AS `idstatus`, `status`.`status` AS `status`, `request`.`startdate` AS `startdate`, `request`.`enddate` AS `enddate`, `request`.`requestdate` AS `requestdate`, `request`.`syear` AS `syear`, `request`.`reason` AS `reason` FROM (((`user` join `request`) join `company`) join `status`) WHERE `user`.`uid` = `request`.`uid` AND `request`.`idcompany` = `company`.`idcompany` AND `request`.`idstatus` = `status`.`idstatus``idstatus`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`idcompany`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`idrequest`),
  ADD KEY `idstatus` (`idstatus`),
  ADD KEY `idcompany` (`idcompany`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idstatus`);

--
-- Indexes for table `typeuser`
--
ALTER TABLE `typeuser`
  ADD PRIMARY KEY (`idTypeuser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `idTypeuser` (`idTypeuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `idcompany` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `idrequest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `typeuser`
--
ALTER TABLE `typeuser`
  MODIFY `idTypeuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`idcompany`) REFERENCES `company` (`idcompany`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`idstatus`) REFERENCES `status` (`idstatus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_ibfk_3` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`idTypeuser`) REFERENCES `typeuser` (`idTypeuser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

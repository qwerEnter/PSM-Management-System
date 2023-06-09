-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 08:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psm_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `Coordinator_ID` varchar(10) NOT NULL,
  `Coordinator_Name` varchar(255) NOT NULL,
  `Coordinator_Faculty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`Coordinator_ID`, `Coordinator_Name`, `Coordinator_Faculty`) VALUES
('CT20000', 'Ali bin abu bakar', 'FKOM');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Item_ID` varchar(10) NOT NULL,
  `Technician_ID` varchar(10) NOT NULL,
  `Item_Name` varchar(255) NOT NULL,
  `Item_Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Item_ID`, `Technician_ID`, `Item_Name`, `Item_Quantity`) VALUES
('1', 'TC20000', 'PCB Board', 14),
('2', 'TC20000', 'Motion Sensor', 10);

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `Lect_ID` varchar(10) NOT NULL,
  `Lect_Name` varchar(255) NOT NULL,
  `Lect_PhoneNo` int(11) NOT NULL,
  `Lect_OfficeNo` int(11) NOT NULL,
  `Lect_Email` varchar(50) NOT NULL,
  `Lect_OfficeAdd` varchar(50) NOT NULL,
  `Lect_Faculty` varchar(50) NOT NULL,
  `Lect_Position` varchar(50) NOT NULL,
  `Lect_Expertise` varchar(100) NOT NULL,
  `Lect_Photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`Lect_ID`, `Lect_Name`, `Lect_PhoneNo`, `Lect_OfficeNo`, `Lect_Email`, `Lect_OfficeAdd`, `Lect_Faculty`, `Lect_Position`, `Lect_Expertise`, `Lect_Photo`) VALUES
('LT20000', 'Dr Syafiq', 154832473, 988574888, 'syafiq123@gmail.com', 'No 2, Level 1, FKOM office', 'Faculty of Computing', 'DS52-A-PENSYARAH UNIVERSITI', 'Algorithm and Complexity', '1642456501-flower.jpg'),
('LT20001', 'Dr Kamarulnizam', 129483948, 958885775, 'kamarul@ump.edu.my', 'No 14, Level2, FKOM office', 'Faculty of Computing', 'DS52-A-PENSYARAH UNIVERSITI', 'Web Development', '1642457895-flower.jpg'),
('LT20002', 'Professor Madya', 195845060, 923185723, 'madya@ump.edu.my', 'No 09, Level 2, FKOM office', 'Faculty of Computing', 'DS54-A-Professor Madya', 'Computer Science', '1642458036-flower.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lectures_title`
--

CREATE TABLE `lectures_title` (
  `lectTitle_id` int(11) NOT NULL,
  `lect_name` varchar(11) NOT NULL,
  `lect_matric` varchar(40) NOT NULL,
  `title_project` varchar(11) NOT NULL,
  `title_description` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lectures_title`
--

INSERT INTO `lectures_title` (`lectTitle_id`, `lect_name`, `lect_matric`, `title_project`, `title_description`) VALUES
(1, 'AZLINA', '', 'SYAHADAH', 'MUALAF SYST');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `Request_ID` int(10) NOT NULL,
  `Stud_ID` varchar(10) NOT NULL,
  `Item_ID` varchar(10) NOT NULL,
  `Request_Amount` int(11) NOT NULL,
  `Request_Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`Request_ID`, `Stud_ID`, `Item_ID`, `Request_Amount`, `Request_Status`) VALUES
(1, 'ST20000', '1', 3, 'Approved'),
(2, 'ST20000', '2', 4, 'pending'),
(3, 'ST20000', '2', 5, 'pending'),
(4, 'ST20000', '1', 3, 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Stud_ID` varchar(10) NOT NULL,
  `Stud_Name` varchar(255) NOT NULL,
  `Stud_PhoneNo` int(11) NOT NULL,
  `Stud_Email` varchar(50) NOT NULL,
  `Stud_Add` varchar(50) NOT NULL,
  `Stud_Faculty` varchar(50) NOT NULL,
  `Stud_Course` varchar(50) NOT NULL,
  `Stud_Skills` varchar(255) NOT NULL,
  `Stud_Interest` varchar(255) NOT NULL,
  `Stud_Photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Stud_ID`, `Stud_Name`, `Stud_PhoneNo`, `Stud_Email`, `Stud_Add`, `Stud_Faculty`, `Stud_Course`, `Stud_Skills`, `Stud_Interest`, `Stud_Photo`) VALUES
('ST20000', 'Ken', 1238596857, 'ken123@ump.edu.my', 'no 2, Jalan Abc, Taman A, 42000 Pelabuhan Klang, S', 'Faculty of Computing', 'Networking', 'Java', 'Artificial Intelligence, Object-Oriented Progamming', '1642457632-flower.jpg'),
('ST20001', 'Alex', 127485748, 'alex@gmail.com', 'no 24, Jalan abc , Taman Tas, Kuantan', 'Faculty of Computing', 'Software Engineering', 'Java, C#, HTML, CSS, Kotlin, Dart', 'Artificial Intelligence, Data Mining, Cloud Computing', '1642457788-flower.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `SV_ID` varchar(10) NOT NULL,
  `Lect_ID` varchar(10) NOT NULL,
  `SV_Achievement` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`SV_ID`, `Lect_ID`, `SV_Achievement`) VALUES
('SV20000', 'LT20000', '1st place Arduino'),
('SV20001', 'LT20001', '1st place in PSM 1');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor slot`
--

CREATE TABLE `supervisor slot` (
  `SV_SlotID` varchar(10) NOT NULL,
  `SV_ID` varchar(10) NOT NULL,
  `SV_SlotNo` int(11) NOT NULL,
  `SV_SlotStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supervisor slot`
--

INSERT INTO `supervisor slot` (`SV_SlotID`, `SV_ID`, `SV_SlotNo`, `SV_SlotStatus`) VALUES
('SL20000', 'SV20000', 2, 'Open'),
('SL20001', 'SV20001', 4, 'Full');

-- --------------------------------------------------------

--
-- Table structure for table `sv hunting information`
--

CREATE TABLE `sv hunting information` (
  `InformationID` varchar(10) NOT NULL,
  `SV_ID` varchar(10) NOT NULL,
  `SV_SlotID` varchar(10) NOT NULL,
  `SV_InfoNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sv hunting information`
--

INSERT INTO `sv hunting information` (`InformationID`, `SV_ID`, `SV_SlotID`, `SV_InfoNum`) VALUES
('I01', 'SV20000', 'SL20000', 1),
('I02', 'SV20001', 'SL20001', 2);

-- --------------------------------------------------------

--
-- Table structure for table `technician`
--

CREATE TABLE `technician` (
  `Technician_ID` varchar(10) NOT NULL,
  `Technician_Name` varchar(255) NOT NULL,
  `Technician_Faculty` varchar(50) NOT NULL,
  `Technician_Email` varchar(50) NOT NULL,
  `Technician_Contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technician`
--

INSERT INTO `technician` (`Technician_ID`, `Technician_Name`, `Technician_Faculty`, `Technician_Email`, `Technician_Contact`) VALUES
('TC20000', 'Ali', 'FKOM', 'ali321@hotmail.com', 123323494);

-- --------------------------------------------------------

--
-- Table structure for table `timeslot`
--

CREATE TABLE `timeslot` (
  `id` int(11) NOT NULL,
  `Lect_Name` varchar(50) NOT NULL,
  `Lect_ID` varchar(10) NOT NULL,
  `Lect_Faculty` varchar(50) NOT NULL,
  `Lect_Expertise` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `TimeStart` int(11) NOT NULL,
  `TimeEnd` int(11) NOT NULL,
  `Stud_ID` varchar(10) NOT NULL,
  `Stud_Name` varchar(50) NOT NULL,
  `Stud_Faculty` varchar(50) NOT NULL,
  `Stud_Course` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timeslot`
--

INSERT INTO `timeslot` (`id`, `Lect_Name`, `Lect_ID`, `Lect_Faculty`, `Lect_Expertise`, `Date`, `TimeStart`, `TimeEnd`, `Stud_ID`, `Stud_Name`, `Stud_Faculty`, `Stud_Course`) VALUES
(1, 'Dr Kamarulnizam', 'LT20001', 'FKOM', 'Web Development', '2022-01-17', 10, 12, 'ST20000', 'Ken', 'FKOM', 'Software Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `title_id` int(11) NOT NULL,
  `stud_name` varchar(11) NOT NULL,
  `stud_matric` varchar(11) NOT NULL,
  `title` varchar(11) NOT NULL,
  `title_description` varchar(11) NOT NULL,
  `status` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`title_id`, `stud_name`, `stud_matric`, `title`, `title_description`, `status`) VALUES
(6, 'izzlin', 'CB20123', 'blabla', 'SSSS', 'Reject'),
(7, 'NUR IZZLIN ', 'CB20123', 'ABC SYSTEM', 'kid know AB', 'Reject');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `user_username` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `user_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `user_username`, `user_pass`, `user_type`) VALUES
(1, 'CB20123', '1234', 'student'),
(2, 'LC18278', '1234', 'Admin'),
(3, 'IN325432', '1234', 'industry'),
(5, 'LC1235', '0000', 'Faculty_Supervisor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`Coordinator_ID`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Item_ID`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`Lect_ID`);

--
-- Indexes for table `lectures_title`
--
ALTER TABLE `lectures_title`
  ADD PRIMARY KEY (`lectTitle_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`Request_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Stud_ID`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`SV_ID`),
  ADD KEY `FK1` (`Lect_ID`);

--
-- Indexes for table `supervisor slot`
--
ALTER TABLE `supervisor slot`
  ADD PRIMARY KEY (`SV_SlotID`),
  ADD KEY `FK2` (`SV_ID`);

--
-- Indexes for table `sv hunting information`
--
ALTER TABLE `sv hunting information`
  ADD PRIMARY KEY (`InformationID`),
  ADD KEY `FK3` (`SV_ID`),
  ADD KEY `FK4` (`SV_SlotID`);

--
-- Indexes for table `technician`
--
ALTER TABLE `technician`
  ADD PRIMARY KEY (`Technician_ID`);

--
-- Indexes for table `timeslot`
--
ALTER TABLE `timeslot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`title_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lectures_title`
--
ALTER TABLE `lectures_title`
  MODIFY `lectTitle_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `Request_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `timeslot`
--
ALTER TABLE `timeslot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `title_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD CONSTRAINT `FK1` FOREIGN KEY (`Lect_ID`) REFERENCES `lecturers` (`Lect_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `supervisor slot`
--
ALTER TABLE `supervisor slot`
  ADD CONSTRAINT `FK2` FOREIGN KEY (`SV_ID`) REFERENCES `supervisor` (`SV_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sv hunting information`
--
ALTER TABLE `sv hunting information`
  ADD CONSTRAINT `FK3` FOREIGN KEY (`SV_ID`) REFERENCES `supervisor` (`SV_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK4` FOREIGN KEY (`SV_SlotID`) REFERENCES `supervisor slot` (`SV_SlotID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `scholarship`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getscholarships` ()   select * from adminupload$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userid` int(11) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `emailid`, `password`) VALUES
(1, 'tariq@gmail.com', '123');


--
-- Table structure for table `adminupload`
--

CREATE TABLE `adminupload` (
  `donid` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `eligibility` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `link` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminupload`
--

INSERT INTO `adminupload` (`donid`, `title`, `eligibility`, `category`, `phone`, `emailid`, `link`) VALUES
(4, 'UCA Finance', 'Freshman', 'Application', 996123455, 'finance@ucentralasia.org', 'www.ucentralasia.org'),
(5, 'UCA IT', 'Juniors', 'Application', 996123455, 'IT@ucentralasia.org', 'www.ucentralasia.org'),
(6, 'OSCE Academy', 'Sophomores', 'Merit based', 996465652, 'vacancies@osce-academy.net', 'osce-academy.net'),
(7, 'M Vector', 'All grades', 'Application', 996353782, 'hr@m-vector.com', 'www.m-vector.com');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `appid` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `date` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `gender` char(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `current_gpa` float NOT NULL,
  `c_gpa` float NOT NULL,
  `college` varchar(50) NOT NULL,
  `year` int(4) NOT NULL,
  `stream` varchar(30) NOT NULL,
  `resume` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`appid`, `name`, `date`, `emailid`, `phone`, `gender`, `address`, `current_gpa`, `c_gpa`, `college`, `year`, `stream`, `resume`) VALUES
(5, 'Ali', 'April, 2023', 'ali@gmail.com', 83737282, 'Male', 'Naryn', 85, 70, 'AbC college', 2019, 'CS', NULL),
(6, 'Aslam', 'March, 2023', 'aslam@gmail.com', 84536282, 'Male', 'Khorog', 83, 79, 'DEF college', 2020, 'Engineering', NULL),
(7, 'Mehek', 'March, 2021', 'mehek@gmail.com', 2147483647, 'Female', 'Gilgit', 89, 99, 'XYZ college', 2022, 'Medical', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `appliedid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`appliedid`, `name`, `emailid`, `title`) VALUES
(1, 'Zafar', 'zafar@gmail.com', ''),
(3, 'Maaz', 'maaz@gmail.com', ''),
(4, 'Naila', 'naila@gmail.com', ''),
(45, 'Tariq', 'aziz@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `username`, `phoneno`, `emailid`, `password`) VALUES
(1, 'John', 2635351, 'john@gmail.com', 'johnjohn'),
(2, 'Mathew', 7627251, 'mathew@gmail.com', 'wethepeople'),
(3, 'Sara', 35272412, 'sara@gmail.com', 'saranew');

--
-- Triggers `register`
--
DELIMITER $$
CREATE TRIGGER `backup` AFTER INSERT ON `register` FOR EACH ROW INSERT INTO register_backup VALUES (null,NEW.username,NEW.phoneno,NEW.emailid,NEW.password)
$$
DELIMITER ;


--
-- Table structure for table `register_backup`
--

CREATE TABLE `register_backup` (
  `userid` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phoneno` int(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_backup`
--

INSERT INTO `register_backup` (`userid`, `username`, `phoneno`, `emailid`, `password`) VALUES
(1, 'sidra', 44526272, 'sidra@gmail.com', 'sidra'),
(2, 'Amar', 1235262, 'amar@gmail.com', 'amarpass'),
(3, 'Maria', 12356272, 'maria@gmail.com', 'marianew'),
(4, 'Saad', 11725321, 'saad@gmail.com', 'saadsad');


--
-- Table structure for table `studenttest`
--

CREATE TABLE `studenttest` (
  `stdid` int(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `year` int(5) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studenttest`
--

INSERT INTO `studenttest` (`stdid`, `name`, `title`, `address`, `year`, `duration`) VALUES
(2, 'Kashif', 'Internship', 'Bishkek', 2019, '3 months'),
(3, 'Zaib', 'Intership', 'Dushanbe', 2017, '2 months'),
(5, 'Meher', 'Intersnhip', 'Naryn', 2019, '3 months');



ALTER TABLE `admin`
  ADD PRIMARY KEY (`userid`);


ALTER TABLE `adminupload`
  ADD PRIMARY KEY (`donid`);


ALTER TABLE `application`
  ADD PRIMARY KEY (`appid`);


ALTER TABLE `applied`
  ADD PRIMARY KEY (`appliedid`);


ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);


ALTER TABLE `register_backup`
  ADD PRIMARY KEY (`userid`);


ALTER TABLE `studenttest`
  ADD PRIMARY KEY (`stdid`);



ALTER TABLE `admin`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;


ALTER TABLE `adminupload`
  MODIFY `donid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


ALTER TABLE `application`
  MODIFY `appid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;


ALTER TABLE `applied`
  MODIFY `appliedid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;


ALTER TABLE `register`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;


ALTER TABLE `register_backup`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;


ALTER TABLE `studenttest`
  MODIFY `stdid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;


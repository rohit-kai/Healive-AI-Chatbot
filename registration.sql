-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2025 at 02:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` varchar(11) NOT NULL,
  `adminpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `adminpassword`) VALUES
('1', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `bookapp`
--

CREATE TABLE `bookapp` (
  `AppoID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `patientID` int(11) NOT NULL,
  `docID` int(11) NOT NULL,
  `symptoms` text NOT NULL,
  `medical_report` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookapp`
--

INSERT INTO `bookapp` (`AppoID`, `Date`, `Time`, `patientID`, `docID`, `symptoms`, `medical_report`) VALUES
(3, '2025-02-28', '05:54:00', 1, 1, 'symptoms', 'medical_report'),
(4, '2025-02-28', '07:24:00', 4, 2, 'high presser', '../../uploads/max.pdf'),
(5, '2025-02-22', '07:22:00', 4, 3, 'high BP', '../../uploads/vishal.pdf'),
(6, '2025-02-19', '06:09:00', 5, 1, 'heart surgry', '../../uploads/mayur.pdf'),
(7, '2025-02-21', '16:22:00', 1, 1, 'gyanac', '../../uploads/kai (13).pdf'),
(8, '2025-04-25', '15:23:00', 1, 2, 'dengu', '../../uploads/healive.jpg'),
(9, '2025-02-27', '16:14:00', 1, 4, 'Desosiative identity desoder', '../../uploads/vishal.pdf'),
(10, '2025-04-09', '15:35:06', 5, 4, 'ringworm', '../../uploads/mayur.pdf'),
(11, '2025-04-10', '15:35:07', 18, 1, 'dignocis', '../../uploads/mayur.pdf'),
(12, '2025-04-17', '15:35:08', 15, 6, 'maleria', '../../uploads/mayur.pdf'),
(13, '2025-04-11', '15:35:10', 16, 2, 'nec pain', '../../uploads/mayur.pdf'),
(14, '2025-04-12', '15:35:11', 13, 5, 'polio', '../../uploads/mayur.pdf'),
(15, '2025-03-20', '15:35:16', 11, 1, 'kolora', '../../uploads/mayur.pdf'),
(16, '2025-01-01', '15:35:17', 2, 2, 'covid+', '../../uploads/mayur.pdf'),
(17, '2025-01-01', '15:35:18', 7, 2, 'hiv+', '../../uploads/mayur.pdf'),
(18, '2025-03-20', '15:35:19', 10, 1, 'left liver damage', '../../uploads/mayur.pdf'),
(19, '2025-01-01', '15:35:20', 4, 4, 'kidney failure', '../../uploads/mayur.pdf'),
(56, '0000-00-00', '00:00:00', 1, 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `message`, `submitted_at`) VALUES
(1, 'akhi', 'akhi@gmail.com', 'ist more informative website', '2025-04-22 10:35:27'),
(2, 'sourabh', 'sourabh@gmail.com', 'website is not useful', '2025-04-10 10:34:12'),
(3, 'ritesh', 'ritesh@gmail.com', 'this very easy website that handle easily', '2025-04-16 10:32:28'),
(4, 'max', 'praful@gmail.com', 'make more sutaibla website.', '2025-02-14 19:37:24'),
(6, 'rey', 'ray@gmail.com', 'this is very nice website', '2025-02-19 21:05:54'),
(7, 'max', 'praful@gmail.com', 'this chatbot is very nice', '2025-02-19 21:09:42'),
(8, 'sourabh', 'sourabh@gmail.com', 'chatbot have more information about medical', '2025-02-19 21:10:28'),
(9, 'mayur', 'mayu@gmail.com', 'i like chatbot', '2025-02-19 21:10:55'),
(10, 'ritesh', 'rite@gmail.com', 'more liked symtoms ', '2025-02-19 21:12:13'),
(11, 'mayur', 'mayu@gmail.com', 'i like chatbot', '2025-02-19 21:15:00'),
(12, 'shrikant', 'shirkant@gmail.com', 'chatbot is very usfulll for information about medical instruction', '2025-04-21 10:36:24'),
(13, 'vard', 'vard@gmail.com', 'midical information on the chatbot is usefull', '2025-04-23 10:37:56'),
(14, 'shreyas ', 'shreyas@gmail.com', 'this chatbot is userfriendly interface', '2025-04-14 10:39:34'),
(15, 'pranesh', 'pranesh@gmail.com', 'this web that provide most useful informatin about medical ', '2025-04-14 10:40:43'),
(16, 'max', 'max@gmail.com', 'that chatbot is very nice improovr the medical info', '2025-04-16 10:42:02'),
(17, 'kai', 'kai@gmail.com', 'imvroov the user interface', '2025-04-10 10:43:41'),
(18, 'kavre', 'kavare@gmail.com', 'ui improovement', '2025-04-12 10:44:37'),
(19, 'mahesh', 'mahesh@gmail.com', 'security is very poor', '2025-04-12 10:46:50'),
(20, 'ganapati', 'ganapati@gmail.com', 'this very poor qyt web suite', '2025-04-13 10:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `description`
--

CREATE TABLE `description` (
  `descID` int(11) NOT NULL,
  `patientID` int(11) NOT NULL,
  `descName` varchar(30) NOT NULL,
  `treatment` varchar(50) NOT NULL,
  `note` varchar(200) NOT NULL,
  `doctorIDdesc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `description`
--

INSERT INTO `description` (`descID`, `patientID`, `descName`, `treatment`, `note`, `doctorIDdesc`) VALUES
(1, 1, 'gum diseases', 'rootcanal', 'rootcanal is okye', 1),
(2, 19, 'hari', 'ringworm', 'anticeptic creme', 1),
(4, 1, 'kai', 'diagonosec', 'keep in ventiletter', 1),
(5, 16, 'kolora', 'diagonosis and keep in icu', 'keep in ventiletter and the symtamcs', 1),
(6, 15, 'covid+', 'anidocse', 'corontain', 2),
(7, 15, 'hiv+', 'opration ', 'patient under observation', 3),
(8, 14, 'ivm', 'ivm tretment', 'keep in the gaynaclogies doctors', 5),
(9, 11, 'foot pain', 'plastered foot', 'keep it dry ', 1),
(10, 7, 'hiv+', 'diagonosis and keep in icu', 'in observation', 5),
(11, 8, 'nek pain', 'keep in nek band', 'x-rey and keep that band', 6),
(12, 10, 'first aid', 'drassing', 'keep it dry', 3),
(13, 17, 'gum diseases', 'rootcanal', 'dont take junk food', 6),
(14, 4, 'apendix', 'opretion on apendixx', 'apendix removal form body', 2),
(15, 12, 'mental health', 'psyco therepy', 'check the mental health twices in month', 5),
(16, 3, 'low BP', 'steay on sline', 'keep in observation for few days\r\n', 4),
(17, 9, 'hand facture', 'dressing', 'keep for few days', 1),
(18, 17, 'polio', 'one leg damage that ', 'polio makes leg unuse', 1),
(19, 2, 'lever damage', 'opration for lever cut', 'pateint keep in observation', 3),
(20, 17, 'pancreas damage', 'opration for pancreas change', 'there is less chance to live', 2);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DoctorID` int(11) NOT NULL,
  `Doctorname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `categorey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`DoctorID`, `Doctorname`, `email`, `Address`, `ContactNumber`, `password`, `categorey`) VALUES
(1, 'shreyas', 'ujumakikai8975@gmail.com', 'mjik road', '01234567843', '1234', 'Dentistry'),
(2, 'hrishikesh chavan', 'hrish@gmail.com', 'miraj', '9988776655', '1234', 'Bone'),
(3, 'pranesh Howale', 'praful@gmail.com', 'rmg road sangli', '1122266544', '123', 'surgery'),
(4, 'roc dongare', 'roc@gmail.com', 'parshnath nagar', '7865432145', '1234', 'Heart'),
(5, 'akhilesh dg', 'akhilesh452gmail.com', 'sangli', '7676767676', '123', 'heart'),
(6, 'pranesh howale', 'pranesh28@gmail.com', 'miraj', '7978767554', '123', 'mental health'),
(7, 'ravi teja', 'ravi@gmail.com', 'channai', '0982567412', '1234', 'Dentistry'),
(8, 'pavan kalyan', 'pavan@gmail.com', 'kk r road channai', '7896543201', '1234', 'Dentistry'),
(9, 'naga chaitanya', 'chaitanya@gamil.com', 'lk appartment sANGLI', '9876547896', '1234', 'dentistry'),
(10, 'ahil patil', 'ahilpatil@gamil.com', 'gokul nagar miraj', '3468943215', '1234', 'dentistry'),
(11, 'vikas keswani', 'vikas@gmail.com', 'kagwadw mala ich', '1890467234', '1234', 'Bone'),
(12, 'ankush kesarwani', 'ankush@gmail.com', 'langota mala ich', '1904728492', '1234', 'Bone'),
(13, 'shubham redekar', 'shubham@gmail.com', 'km nearest jlk app ich', '908548916', '1234', 'Bone'),
(14, 'jagdish madaum', 'jay@gmail.com', 'kalpana road ich', '8922354145', '1234', 'Bone'),
(15, 'arpan kadhariya', 'arpan@gmail.com', 'jharkhand', '9098757893', '1234', 'Surgury'),
(16, 'Adity Bharti', 'Aditya@gmail.com', 'kl app jharkhand', '90064781928', '1234', 'Surgury'),
(17, 'shivam khadari', 'shivam@gmail.com', 'labal ich', '904365825', '1234', 'Surgury'),
(18, 'praveen ligammm', 'praveen@gmail.com', 'kla chennai ', '8293018336', '1234', 'surgury'),
(19, 'shreyas mali', 'shre@gamil.com', 'kumtha', '9856378356', '1234', 'heart'),
(20, 'amit shingh', 'amit@gmail.com', 'kjg ich', '9046729185', '1234', 'heart');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `donarID` int(11) NOT NULL,
  `donarname` varchar(50) NOT NULL,
  `donaraddress` varchar(50) NOT NULL,
  `donarnumber` varchar(40) NOT NULL,
  `donaremail` varchar(50) NOT NULL,
  `donarblood` varchar(11) NOT NULL,
  `organ` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donarID`, `donarname`, `donaraddress`, `donarnumber`, `donaremail`, `donarblood`, `organ`) VALUES
(1, 'kai ', 'mjik road', ' 01234567843', 'ujumakikai8975@gmail.com', 'a', 'blood'),
(2, 'max', 'kalambi', '09876543212', 'praful@gmail.com', 'b', 'blood'),
(3, 'hari kavare', 'tasgaon', '9975229505', 'harikavare32@gmail.com', 'o-', 'blood'),
(4, 'akhil onde', 'sangli', '7678790898', 'akhilonde98@gmail.com', 'o', 'blood'),
(5, 'santosh hajare', 'vita', '7576787970', 'santosh7654@gmail.com', 'o', 'blood'),
(6, 'disha koli', 'tasgaon', '7676767676', 'dishakoli123@mail.com', 'B', 'blood'),
(7, 'amit mali', 'miraj', '7678797565', 'maliamit142@gmail.com', 'o-', 'blood'),
(8, 'gita dange', 'miraj', '9090909090', 'gitadange123@gmail.com', 'A', 'blood'),
(9, 'ganesh patil', 'miraj', '9887766565', 'ganesh12@gmail.compatil', 'o-', 'blood'),
(10, 'vinesh patil', 'sagli', '9755265705', 'vinesh5622gmail.com', 'o', 'blood'),
(11, 'Mahesh mali', 'sangli', '8765432111', 'mahesh12@gmail.com', 'B', 'blood'),
(12, 'Shriknt mali', 'sangli', '9766265705', 'shrikantmali12gmail.com', 'A', 'blood'),
(13, 'disha mitwani', 'sagngli', '7678797565', 'dish@gmail.com', 'A', 'blood'),
(14, 'prashant donmne', 'sangli', '9975229505', 'preshant@gmail.com', 'o-', 'blood'),
(15, 'sumit kasal', 'tasgaon', '9273282331', 'sumit@gmail.com', 'B', 'blood'),
(16, 'hari mote', 'tasgaon', '1234567890', 'hari@gmail.com', 'B', 'blood'),
(17, 'vishali bane', 'miraj', '7678797565', 'vishali@gmail.com', 'B', 'blood'),
(18, 'vish aane', 'tasgaon', '9975229505', 'vishali@gmail.com', 'B', 'blood'),
(19, 'viree hkke', 'tasgaon', '9975229505', 'vishali@gmail.com', 'B', 'blood'),
(20, 'viree lame', 'tasgaon', '9975229505', 'vishali@gmail.com', 'B', 'blood');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `pID` int(11) NOT NULL,
  `feedback` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`pID`, `feedback`) VALUES
(1, 'it is an very useful for an healthcare servises.'),
(1, 'segtssrg'),
(1, 'this is the best web site for medical emergenceZ'),
(2, 'it an best for healthcare srvice'),
(2, 'this is faltu web site'),
(3, 'user friendly'),
(4, 'op site'),
(6, 'its best experiance'),
(7, 'Amezing'),
(8, 'midical advise is best'),
(10, 'incridibal'),
(11, 'best for learn'),
(11, 'satisfactory servis'),
(12, 'koledgeseeker'),
(13, 'not a bad'),
(15, 'more improovement'),
(15, 'nice chatbot'),
(16, 'informatiom is poor'),
(17, 'easy to find hospital'),
(18, 'its nice');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(40) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Bloodtype` varchar(10) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`UserID`, `Name`, `Address`, `ContactNumber`, `Email`, `Password`, `Bloodtype`, `Date`) VALUES
(1, 'kai', 'mjik road', '01234567843', 'ujumakikai8975@gmail.com', '202cb962ac59075b964b07152d234b70', 'a', '2025-03-11'),
(2, 'max', 'kalambi', '09876543212', 'praful@gmail.com', '202cb962ac59075b964b07152d234b70', 'b', '2025-03-18'),
(3, 'vishu', 'Dudhagoan', '123897645321', 'vishu@gmail.com', '202cb962ac59075b964b07152d234b70', 'ab', '2025-03-19'),
(4, 'sourabh', 'kalambi', '9875421346', 'sourabh@gmail.com', '202cb962ac59075b964b07152d234b70', 'B', '2025-03-20'),
(5, 'akhi', 'madhavnagar', '8698754321', 'akhi@gmail.com', '202cb962ac59075b964b07152d234b70', 'o', '2025-03-21'),
(6, 'ray', 'walnesswadi', '098523156', 'ray@gmail.com', '202cb962ac59075b964b07152d234b70', 'o', '2025-03-22'),
(7, 'ritesh', 'gokul ghag', '45678932', 'rite@gmail.com', '202cb962ac59075b964b07152d234b70', 'a', '2025-03-23'),
(8, 'mayur', 'tabemal', '897645256', 'mayu@gmail.com', '202cb962ac59075b964b07152d234b70', 'b', '2025-03-24'),
(9, 'vrushabh', 'kalpana road', '8976543290', 'viru@gmail.com', '202cb962ac59075b964b07152d234b70', 'b', '2025-03-26'),
(10, 'shrikant mali', 'sangli', '9766265705', 'shrikantmali12@gmail.com', '123', 'A', '2025-01-02'),
(11, 'Mahesh mali', 'sangli', '8765432111', 'mahesh12@gmai.com', '123', 'B', '2025-03-11'),
(12, 'vinesh patil', 'sangli', '9755265705', 'vinesh562gmail.com', '123', 'O', '2025-03-19'),
(13, 'geanesh patil', 'miraj', '9887766565', 'ganeshpatil12@gmail.com', '123', 'O-', '2025-01-01'),
(14, 'Gita dange', 'miraj', '9090909090', 'gitadange123@gmail.com', '123', 'A', '2025-03-20'),
(15, 'amit mali', 'miarj', '7678797565', 'maliamit142gmail.com', '123', 'O-', '2025-03-19'),
(16, 'disha koli', 'tasgaon', '7676767676', 'dishakoli123@gmail.com', '123', 'B', '2025-03-20'),
(17, 'santosh hajare', 'vita', '7576787970', 'santosh7654@gmal.com', '123', 'O', '2025-03-18'),
(18, 'akhi londe', 'sangli', '7678790898', 'akhlilonde98@gmail.com', '123', 'O', '2025-03-18'),
(19, 'hari kavare', 'tasgaon', '9975229505', 'harikavare32@gmail.com', '123', 'O-', '2025-03-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `AdminID` (`AdminID`);

--
-- Indexes for table `bookapp`
--
ALTER TABLE `bookapp`
  ADD PRIMARY KEY (`AppoID`),
  ADD UNIQUE KEY `Time` (`Time`),
  ADD KEY `patientoapp` (`patientID`),
  ADD KEY `doctopatient` (`docID`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `description`
--
ALTER TABLE `description`
  ADD PRIMARY KEY (`descID`),
  ADD KEY `descpatientID` (`patientID`),
  ADD KEY `descDoctorID` (`doctorIDdesc`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DoctorID`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donarID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD UNIQUE KEY `feedback_2` (`feedback`),
  ADD KEY `feedback` (`pID`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookapp`
--
ALTER TABLE `bookapp`
  MODIFY `AppoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `description`
--
ALTER TABLE `description`
  MODIFY `descID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `DoctorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donarID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookapp`
--
ALTER TABLE `bookapp`
  ADD CONSTRAINT `doctopatient` FOREIGN KEY (`docID`) REFERENCES `doctor` (`DoctorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patientoapp` FOREIGN KEY (`patientID`) REFERENCES `patients` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `description`
--
ALTER TABLE `description`
  ADD CONSTRAINT `descDoctorID` FOREIGN KEY (`doctorIDdesc`) REFERENCES `doctor` (`DoctorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `descpatientID` FOREIGN KEY (`patientID`) REFERENCES `patients` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback` FOREIGN KEY (`pID`) REFERENCES `patients` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

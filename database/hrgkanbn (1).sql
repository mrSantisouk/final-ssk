-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2024 at 03:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrgkanbn`
--

-- --------------------------------------------------------

--
-- Table structure for table `from_khumhrg`
--

CREATE TABLE `from_khumhrg` (
  `from_id` int(11) NOT NULL,
  `hn` varchar(50) NOT NULL,
  `story` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `old` int(100) NOT NULL,
  `national` varchar(50) NOT NULL,
  `employment` varchar(50) NOT NULL,
  `family_number` int(255) NOT NULL,
  `date` date NOT NULL,
  `new_nuay` int(255) NOT NULL,
  `vinllage` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `joutpasong` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `from_khumhrg`
--

INSERT INTO `from_khumhrg` (`from_id`, `hn`, `story`, `name`, `old`, `national`, `employment`, `family_number`, `date`, `new_nuay`, `vinllage`, `district`, `province`, `joutpasong`) VALUES
(3, 'ຄະນະກຳມະການ', 'ແອບແຊບ', 'ທ ສາຍເພັດ ວົງດາລາ ', 17, 'ລາວ', 'ກຳມະກອນ', 112233, '0000-00-00', 23, 'ອານຸ', 'ປາກຊັນ', 'ວຽງຈັນ', 'ຂໍເມຍ'),
(4, 'ອຈ ', 'ສວາກຫ', 'ສວກຫາດ', 45, 'ສກຫາດ', 'ສກຫາດ', 21333, '0000-00-00', 13, 'ກວງຫດສ', 'ດກຫດສກ', 'ເຊກອງ', 'ດກຫດຫກດ'),
(5, 'ອຈ ', 'ສວາກຫ', 'ສວກຫາດ', 45, 'ສກຫາດ', 'ສກຫາດ', 21333, '0000-00-00', 13, 'ກວງຫດສ', 'ດກຫດສກ', 'ເຊກອງ', 'ດກຫດຫກດ'),
(6, 'ອຈ ', 'ສວາກຫ', 'ສວກຫາດ', 45, 'ສກຫາດ', 'ສກຫາດ', 21333, '0000-00-00', 13, 'ກວງຫດສ', 'ດກຫດສກ', 'ເຊກອງ', 'ດກຫດຫກດ'),
(7, 'ອຈ ', 'ສວາກຫ', 'ສວກຫາດ', 45, 'ສກຫາດ', 'ສກຫາດ', 21333, '0000-00-00', 13, 'ກວງຫດສ', 'ດກຫດສກ', 'ເຊກອງ', 'ດກຫດຫກດ'),
(8, '', '', '', 0, '', '', 0, '0000-00-00', 0, '', '', '', ''),
(9, '', '', '', 0, '', '', 0, '0000-00-00', 0, '', '', '', ''),
(10, '', '', '', 0, '', '', 0, '0000-00-00', 0, '', '', '', ''),
(11, '', '', '', 0, '', '', 0, '0000-00-00', 0, '', '', '', ''),
(12, '', '', '', 0, '', '', 0, '0000-00-00', 0, '', '', '', ''),
(13, '', '', '', 0, '', '', 0, '0000-00-00', 0, '', '', '', ''),
(14, '', '', '', 0, '', '', 0, '0000-00-00', 0, '', '', '', ''),
(15, '', '', '', 0, '', '', 0, '0000-00-00', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `from_pavud`
--

CREATE TABLE `from_pavud` (
  `from_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `birth` date NOT NULL,
  `homeland` varchar(25) NOT NULL,
  `homeland_district` varchar(25) NOT NULL,
  `homeland_province` varchar(25) NOT NULL,
  `karnkhueanwai` varchar(255) NOT NULL,
  `father_name` varchar(25) NOT NULL,
  `father_birth` date NOT NULL,
  `father_national` varchar(25) NOT NULL,
  `province` varchar(25) NOT NULL,
  `Race` varchar(25) NOT NULL,
  `national` varchar(25) NOT NULL,
  `nuaynow` int(11) NOT NULL,
  `Ethnicity` varchar(25) NOT NULL,
  `Religion` varchar(25) NOT NULL,
  `level_of_education` varchar(25) NOT NULL,
  `Special_subject` varchar(25) NOT NULL,
  `Special_class` varchar(25) NOT NULL,
  `father_employment` varchar(25) NOT NULL,
  `father_nuay_now` int(11) NOT NULL,
  `father_village` varchar(25) NOT NULL,
  `father_district` varchar(25) NOT NULL,
  `father_province` varchar(50) NOT NULL,
  `mother_name` varchar(25) NOT NULL,
  `mother_birth` date NOT NULL,
  `mother_Race` varchar(50) NOT NULL,
  `mother_national` varchar(25) NOT NULL,
  `mother_employment` varchar(25) NOT NULL,
  `mother_nuay` int(25) NOT NULL,
  `mother_village` varchar(25) NOT NULL,
  `morther_district` varchar(25) NOT NULL,
  `mother_province` varchar(50) NOT NULL,
  `family_name` varchar(255) NOT NULL,
  `address` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `father_race` varchar(25) NOT NULL,
  `village` varchar(25) NOT NULL,
  `district` varchar(25) NOT NULL,
  `employment_now` int(11) NOT NULL,
  `date_sungkut` date NOT NULL,
  `nar_t_hup_phit_srp` varchar(25) NOT NULL,
  `brn_u_pajumkarn` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `from_phuksaohuamkun`
--

CREATE TABLE `from_phuksaohuamkun` (
  `Form_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `birth` date NOT NULL,
  `employment` varchar(25) NOT NULL,
  `national` varchar(25) NOT NULL,
  `village` varchar(25) NOT NULL,
  `district` varchar(25) NOT NULL,
  `province` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `family_number` int(50) NOT NULL,
  `issued_by` varchar(50) NOT NULL,
  `work` varchar(25) NOT NULL,
  `work_village` varchar(25) NOT NULL,
  `work_district` varchar(25) NOT NULL,
  `work_province` varchar(50) NOT NULL,
  `telephone_number` int(11) NOT NULL,
  `father_name` varchar(25) NOT NULL,
  `father_old` int(10) NOT NULL,
  `father_employment` varchar(25) NOT NULL,
  `father_village` varchar(25) NOT NULL,
  `father_district` varchar(25) NOT NULL,
  `father_province` varchar(25) NOT NULL,
  `mother_name` varchar(25) NOT NULL,
  `mother_old` varchar(10) NOT NULL,
  `mother_employment` varchar(25) NOT NULL,
  `mother_village` varchar(25) NOT NULL,
  `mother_district` varchar(25) NOT NULL,
  `mother_province` varchar(25) NOT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `from_phuksaohuamkun`
--

INSERT INTO `from_phuksaohuamkun` (`Form_id`, `name`, `birth`, `employment`, `national`, `village`, `district`, `province`, `date`, `family_number`, `issued_by`, `work`, `work_village`, `work_district`, `work_province`, `telephone_number`, `father_name`, `father_old`, `father_employment`, `father_village`, `father_district`, `father_province`, `mother_name`, `mother_old`, `mother_employment`, `mother_village`, `mother_district`, `mother_province`, `reason`) VALUES
(0, 'ດັຫດ', '2024-05-03', 'ຊາວນາ', 'ຫັກັຫກ', 'ຫັກ', 'ັຫກ', 'ັຫກັຫ', '2024-05-02', 123, 'ັກັຫກ', 'ັຫກ', 'ຫັກ', 'ັຫກ', 'ສວາ', 89, 'າສວ', 12, 'ຫັກສັ', 'ສວຫາຫວສ', 'ສວຫກດາ', 'ກວສຫດາ', 'ສວກຫາດ', 'ກຫຫດກ', 'ັຫັດກຫ', 'ກຫດຫດ', 'ກຫດ', 'ກຫດ', 'ກຫດກຫດກຫ'),
(1, 'ກຫດ', '2024-05-03', 'ຫັກຫັກ', 'ກຫັກ', 'ກຫັກ', 'ກັຫກ', 'ກັຫກ', '2024-05-08', 546, 'າຫດວາ', 'ກຫດກວສ', 'ສາວກາຫດວ', 'ວສດກຫວສດ', 'ສດວາກສຫວດາ', 586, 'ກຫດ', 57, 'ສຫກດາ', 'ກຫດ', 'ດກຫດ', 'ດກຫດ', 'ກຫດຫກດ', 'ດ', 'ກຫດຫກ', 'ກດຫດ', 'ກດຫດ', 'ກດຫດ', 'ດກຫດກຫດ');

-- --------------------------------------------------------

--
-- Table structure for table `from_yungyuen`
--

CREATE TABLE `from_yungyuen` (
  `from_id` int(11) NOT NULL,
  `organization` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sungkut_date` date NOT NULL,
  `Responsibilities` varchar(50) NOT NULL,
  `sungkut` varchar(50) NOT NULL,
  `person` varchar(255) NOT NULL,
  `old` int(10) NOT NULL,
  `Position` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `from_yungyuen`
--

INSERT INTO `from_yungyuen` (`from_id`, `organization`, `name`, `sungkut_date`, `Responsibilities`, `sungkut`, `person`, `old`, `Position`) VALUES
(3, 'susaka', 'ທ ສັນຕິສຸກ ພິມມະສອນ', '2027-02-10', 'ບໍລິຫານ', 'ສົມບູນເັຟີນິເຈີ', 'ພະນັກງານ', 23, 'ຜູ້ບໍລິຫານ');

-- --------------------------------------------------------

--
-- Table structure for table `from_yungyuentu`
--

CREATE TABLE `from_yungyuentu` (
  `from_pdf_id` int(11) NOT NULL,
  `from_number` varchar(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `old` int(100) NOT NULL,
  `employment` varchar(50) NOT NULL,
  `national` varchar(25) NOT NULL,
  `current` varchar(25) NOT NULL,
  `khoum` int(255) NOT NULL,
  `nuay` int(255) NOT NULL,
  `home_number` int(255) NOT NULL,
  `family_namber` int(255) NOT NULL,
  `date` date NOT NULL,
  `district` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `mother_name` varchar(50) NOT NULL,
  `father_village` varchar(50) NOT NULL,
  `father_district` varchar(50) NOT NULL,
  `father_province` varchar(50) NOT NULL,
  `picture` longblob DEFAULT NULL,
  `saiphuea` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `from_yungyuentu`
--

INSERT INTO `from_yungyuentu` (`from_pdf_id`, `from_number`, `name`, `old`, `employment`, `national`, `current`, `khoum`, `nuay`, `home_number`, `family_namber`, `date`, `district`, `province`, `father_name`, `mother_name`, `father_village`, `father_district`, `father_province`, `picture`, `saiphuea`) VALUES
(1, 'vcfd/8888', 'fhgdfhf', 56, 'gfgfgfd', 'gffgf', 'fgfgf', 55, 55, 555, 555, '0000-00-00', 'dfgg', 'ຄຳມວນ', 'dggdg', 'dgdgg', 'dgdgd', 'dgdgd', 'ສາລະວັນ', 0x496e6b656473656e5f4c492e6a7067, ''),
(2, '', '', 0, '', '', '', 0, 0, 0, 0, '0000-00-00', '', '', '', '', '', '', '', 0x66726f6d312e6a706567, ''),
(3, '', '', 0, '', '', '', 0, 0, 0, 0, '0000-00-00', '', '', '', '', '', '', '', 0x66726f6d332e6a706567, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `Admin_type` varchar(25) NOT NULL,
  `Admin_name` varchar(10) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `Admin_type`, `Admin_name`, `Username`, `Password`, `email`) VALUES
(1, 'admin', 'tommy', 'admin', '12345', 'tommy@email.com'),
(2, 'admin', 'do', 'ado', '12345', 'do@mail.com'),
(3, 'benz', 'benz', 'benz', '$2y$10$wmIhavB1m9SB5dHhAY', 'benz@gmail.com'),
(4, 'benz', 'ben', 'benz', '$2y$10$Qcd62efVCB2PKqrOiV', 'ben@mail.com'),
(5, 'benn', 'benn', 'benn', '$2y$10$8Q70KftZ6AlWxi1f1u', 'benn@mail.com'),
(6, 'doo', 'doo', 'do', '$2y$10$0QW82J/Og9nD2bxat9', 'doo@mail.com'),
(7, 'doo', 'doo', 'do', '$2y$10$N9Pd.H2o5o0eqRmdF.', 'doo@mail.com'),
(8, 'doo', 'doo', 'do', '$2y$10$rZZpO9sLOSF1S.9LBu', 'doo@mail.com'),
(9, 'doo', 'doo', 'do', '$2y$10$LpZGPeOA1p/bMyNdbv', 'doo@mail.com'),
(10, 'doo', 'doo', 'do', '$2y$10$7R.eB2uGvoJ1mUqScy', 'doo@mail.com'),
(11, 'doo', 'doo', 'do', '$2y$10$1r0nDD85uFVDVRsuTb', 'doo@mail.com'),
(12, 'doo', 'doo', 'do', '$2y$10$RYJ.6MUKQPntluOF0D', 'doo@mail.com'),
(13, 'doo', 'doo', 'do', '$2y$10$/GaT6hI9IXib12qqAj', 'doo@mail.com'),
(14, 'benn', 'benn', 'benn', '$2y$10$EEwY0hfI8dXaIE9.xt', 'benn@mail.com'),
(15, 'benn', 'benn', 'benn', '$2y$10$cn0BOaHgzwuo2h99sF', 'benn@mail.com'),
(16, 'benn', 'benn', 'benn', '$2y$10$GAga2I6XYnNhu5MrTX', 'benn@mail.com'),
(17, 'benn', 'benn', 'benn', '$2y$10$DjRzeWf3S0k.AYaMnE', 'benn@mail.com'),
(18, 'do7', 'dop', 'dopp', '$2y$10$vHrzHKpv7IUlkUq68J', 'dop@mail.com'),
(19, 'do7', 'dop', 'dopp', '$2y$10$zaqBgBYD4LTSQk/Je8', 'dop@mail.com'),
(20, 'ນາຍບ້ານ', 'ສາ', 'admin', '$2y$10$yjL/h3f7SXxe4GW3we', 'saiyphet@mail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `Feedback_id` int(11) NOT NULL,
  `Feedback_date` date NOT NULL,
  `Feedback_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`Feedback_id`, `Feedback_date`, `Feedback_detail`) VALUES
(1, '2024-05-31', 'asdasdad'),
(2, '2024-05-31', 'asdasdad'),
(3, '2024-05-31', 'ດີຫລາຍ'),
(4, '2024-05-31', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_form`
--

CREATE TABLE `tbl_form` (
  `Form_id` int(11) NOT NULL,
  `Form_name` varchar(25) NOT NULL,
  `Form_price` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_form`
--

INSERT INTO `tbl_form` (`Form_id`, `Form_name`, `Form_price`) VALUES
(1, 'ໃບຄຳຮ້ອງຂໍ້ຖືບັດພັກເຊົ່າ', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guest`
--

CREATE TABLE `tbl_guest` (
  `Guest_ID` int(11) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `Gender` char(1) NOT NULL,
  `Birthday` date NOT NULL,
  `Age` varchar(25) NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Family_number` varchar(25) NOT NULL,
  `Family_date` date NOT NULL,
  `Issued_by` varchar(25) NOT NULL,
  `National` varchar(25) NOT NULL,
  `Villege` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Province` varchar(25) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Jobs` varchar(50) NOT NULL,
  `Job_address` varchar(50) NOT NULL,
  `Father_name` varchar(25) NOT NULL,
  `Father_age` varchar(25) NOT NULL,
  `Father_job` varchar(25) NOT NULL,
  `Father_address` varchar(25) NOT NULL,
  `Mother_name` varchar(25) NOT NULL,
  `Mother_age` varchar(25) NOT NULL,
  `Mother_job` varchar(25) NOT NULL,
  `Mother_address` varchar(25) NOT NULL,
  `Unit` int(11) NOT NULL,
  `Owner` varchar(50) NOT NULL,
  `Target` varchar(50) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guest_payment`
--

CREATE TABLE `tbl_guest_payment` (
  `Guest_pay_id` int(11) NOT NULL,
  `Pay_type` varchar(25) NOT NULL,
  `Pay_datetime` date NOT NULL,
  `Pay_total` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guest_request`
--

CREATE TABLE `tbl_guest_request` (
  `Guest_req_id` int(11) NOT NULL,
  `Guest_req_status` varchar(25) NOT NULL,
  `Guest_req_date` date NOT NULL,
  `Req_qty` varchar(25) NOT NULL,
  `Total` varchar(25) NOT NULL,
  `Finish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_information`
--

CREATE TABLE `tbl_information` (
  `Info_id` int(11) NOT NULL,
  `Info_topic` varchar(11) NOT NULL,
  `Info_detail` varchar(30) NOT NULL,
  `Info_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_information`
--

INSERT INTO `tbl_information` (`Info_id`, `Info_topic`, `Info_detail`, `Info_date`) VALUES
(7, '0', '0', '2024-05-31');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_province`
--

CREATE TABLE `tbl_province` (
  `province` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_province`
--

INSERT INTO `tbl_province` (`province`) VALUES
('ຄຳມວນ'),
('ຈຳປາສັກ'),
('ຊຽງຂວາງ'),
('ນະຄອນຫຼວງວຽງຈັນ'),
('ບໍລິຄຳໄຊ'),
('ບໍ່ແກ້ວ'),
('ຜົ້ງສາລີ'),
('ວຽງຈັນ'),
('ສະຫວັນນະເຂດ'),
('ສາລະວັນ'),
('ຫົວພັນ'),
('ຫຼວງພະບາງ'),
('ອັດຕະປື'),
('ອຸດົມໄຊ'),
('ເຊກອງ'),
('ໄຊຍະບູລີ'),
('ໄຊສົມບູນ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `User_id` int(11) NOT NULL,
  `F_name` varchar(20) NOT NULL,
  `L_name` varchar(20) NOT NULL,
  `Gender` varchar(1) NOT NULL,
  `Birthday` date NOT NULL,
  `Tel` varchar(20) NOT NULL,
  `Age` varchar(25) NOT NULL,
  `Jobs` varchar(25) NOT NULL,
  `Religion` varchar(25) NOT NULL,
  `National` varchar(25) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Villege` varchar(25) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Province` varchar(25) NOT NULL,
  `Picture` varchar(255) NOT NULL,
  `Father_name` varchar(25) NOT NULL,
  `Mother_name` varchar(25) NOT NULL,
  `Family_number` int(25) NOT NULL,
  `Family_date` date NOT NULL,
  `House_number` int(25) NOT NULL,
  `Unit` int(11) NOT NULL,
  `Card_number` int(11) NOT NULL,
  `Card_date` date NOT NULL,
  `Card_issued_by` date NOT NULL,
  `Road` varchar(25) NOT NULL,
  `Time` time NOT NULL,
  `Content` varchar(1000) NOT NULL,
  `Dear` varchar(255) NOT NULL,
  `Day` date NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`User_id`, `F_name`, `L_name`, `Gender`, `Birthday`, `Tel`, `Age`, `Jobs`, `Religion`, `National`, `Status`, `Villege`, `City`, `Province`, `Picture`, `Father_name`, `Mother_name`, `Family_number`, `Family_date`, `House_number`, `Unit`, `Card_number`, `Card_date`, `Card_issued_by`, `Road`, `Time`, `Content`, `Dear`, `Day`, `Username`, `Password`) VALUES
(1, 'auntisouk', 'thamavong', 'M', '2024-06-07', '123', '12', 'dsf', 'sad', 'sfsdf', 'sfsf', 'dfsfds', 'dsfsf', 'dsfsf', 'dsfsf', 'sfsdf', 'sdffs', 123, '2024-06-07', 231, 0, 1231, '2024-06-07', '0000-00-00', 'sada', '00:00:12', 'asdsa', 'dsad', '0000-00-00', 'asd', 0),
(2, 'auntisouk', 'thamavong', 'F', '2024-06-07', '123', '2', 'asdsa', 'asdsa', 'dsad', 'dsad', 'dsad', 'dsd', 'ເຊກອງ', 'asdad', 'asdasd', 'asd', 0, '2024-06-07', 231, 231, 1212, '2024-06-07', '2024-06-07', 'asdasd', '00:00:00', 'asdas', 'asdasd', '2024-06-07', 'sadasd', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_payment`
--

CREATE TABLE `tbl_user_payment` (
  `User_pay_id` int(11) NOT NULL,
  `Pay_tyoe` varchar(25) NOT NULL,
  `Pay_datetime` date NOT NULL,
  `Pay_total` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_request`
--

CREATE TABLE `tbl_user_request` (
  `User_req_id` int(11) NOT NULL,
  `User_req_status` varchar(50) NOT NULL,
  `User_req_date` date NOT NULL,
  `Req_qty` int(11) NOT NULL,
  `Total` varchar(25) NOT NULL,
  `Finish_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_fullname` varchar(255) DEFAULT NULL,
  `u_username` varchar(255) DEFAULT NULL,
  `u_password` varchar(255) DEFAULT NULL,
  `u_level` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_fullname`, `u_username`, `u_password`, `u_level`) VALUES
(1, 'benz', 'krissana', '1234', 'administrator'),
(2, 'tommy', 'tommy', '81dc9bdb52d04dc20036dbd8313ed055', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `from_khumhrg`
--
ALTER TABLE `from_khumhrg`
  ADD PRIMARY KEY (`from_id`);

--
-- Indexes for table `from_pavud`
--
ALTER TABLE `from_pavud`
  ADD PRIMARY KEY (`from_id`);

--
-- Indexes for table `from_phuksaohuamkun`
--
ALTER TABLE `from_phuksaohuamkun`
  ADD PRIMARY KEY (`Form_id`);

--
-- Indexes for table `from_yungyuen`
--
ALTER TABLE `from_yungyuen`
  ADD PRIMARY KEY (`from_id`);

--
-- Indexes for table `from_yungyuentu`
--
ALTER TABLE `from_yungyuentu`
  ADD PRIMARY KEY (`from_pdf_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`Feedback_id`);

--
-- Indexes for table `tbl_form`
--
ALTER TABLE `tbl_form`
  ADD PRIMARY KEY (`Form_id`);

--
-- Indexes for table `tbl_guest`
--
ALTER TABLE `tbl_guest`
  ADD PRIMARY KEY (`Guest_ID`);

--
-- Indexes for table `tbl_guest_payment`
--
ALTER TABLE `tbl_guest_payment`
  ADD PRIMARY KEY (`Guest_pay_id`);

--
-- Indexes for table `tbl_guest_request`
--
ALTER TABLE `tbl_guest_request`
  ADD PRIMARY KEY (`Guest_req_id`);

--
-- Indexes for table `tbl_information`
--
ALTER TABLE `tbl_information`
  ADD PRIMARY KEY (`Info_id`);

--
-- Indexes for table `tbl_province`
--
ALTER TABLE `tbl_province`
  ADD PRIMARY KEY (`province`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `tbl_user_payment`
--
ALTER TABLE `tbl_user_payment`
  ADD PRIMARY KEY (`User_pay_id`);

--
-- Indexes for table `tbl_user_request`
--
ALTER TABLE `tbl_user_request`
  ADD PRIMARY KEY (`User_req_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `from_khumhrg`
--
ALTER TABLE `from_khumhrg`
  MODIFY `from_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `from_pavud`
--
ALTER TABLE `from_pavud`
  MODIFY `from_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `from_yungyuen`
--
ALTER TABLE `from_yungyuen`
  MODIFY `from_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `from_yungyuentu`
--
ALTER TABLE `from_yungyuentu`
  MODIFY `from_pdf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `Feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_form`
--
ALTER TABLE `tbl_form`
  MODIFY `Form_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_guest`
--
ALTER TABLE `tbl_guest`
  MODIFY `Guest_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_information`
--
ALTER TABLE `tbl_information`
  MODIFY `Info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

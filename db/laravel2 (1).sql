-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 10:15 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint(20) NOT NULL,
  `regulationUpload` varchar(100) DEFAULT NULL,
  `allotmentLetterUpload` varchar(100) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `refrence_id` varchar(100) DEFAULT NULL,
  `designation` varchar(50) NOT NULL,
  `fathers_name` varchar(50) NOT NULL,
  `mothers_name` varchar(50) NOT NULL,
  `date_of_joining` varchar(100) DEFAULT NULL,
  `department_name` varchar(50) NOT NULL,
  `present_posting` varchar(50) DEFAULT NULL,
  `upload_joining_letter` varchar(50) NOT NULL,
  `scale` varchar(50) NOT NULL,
  `present_salary` varchar(100) NOT NULL,
  `pay_including_special_pay_of_any` varchar(50) NOT NULL,
  `marital_status` enum('single','married') NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `spouse_name` varchar(50) NOT NULL,
  `number_of_family_members` varchar(50) NOT NULL,
  `any_house` enum('himHer','spouse') NOT NULL,
  `legally_separated` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `upload_photo` varchar(50) NOT NULL,
  `loan` enum('yes','no') NOT NULL,
  `load_detail` text NOT NULL,
  `date_of_loan` varchar(100) NOT NULL,
  `loan2` enum('yes','no') DEFAULT NULL,
  `load_detail2` varchar(100) DEFAULT NULL,
  `date_of_loan2` varchar(100) DEFAULT NULL,
  `flat_allotted` enum('yes','no') NOT NULL,
  `accommodation_detail` text DEFAULT NULL,
  `areas_where_he_wants_to` varchar(50) NOT NULL,
  `ponty_as_date` date NOT NULL,
  `pontyAsDatenew` text DEFAULT NULL,
  `pontyAsDatenew2` text DEFAULT NULL,
  `pontyAsDatenew3` text DEFAULT NULL,
  `pontyAsDatenewSelected` varchar(100) DEFAULT NULL,
  `executive_engineer` varchar(50) NOT NULL,
  `superintending_engineer` varchar(50) NOT NULL,
  `signature_upload` varchar(50) NOT NULL,
  `action_by` varchar(50) NOT NULL,
  `approved_sectional_officer` varchar(50) DEFAULT NULL,
  `approved_estate_officer` varchar(50) DEFAULT NULL,
  `approved_executive_engineer` varchar(50) DEFAULT NULL,
  `approved_superintendent_engineer` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `recommendation_sectional` varchar(100) DEFAULT NULL,
  `recommendation_estate` varchar(100) DEFAULT NULL,
  `recommendation_executive` varchar(100) DEFAULT NULL,
  `recommendation_superintendent` varchar(100) DEFAULT NULL,
  `recommendation_sectional_file` varchar(100) DEFAULT NULL,
  `recommendation_estate_file` varchar(100) DEFAULT NULL,
  `recommendation_executive_file` varchar(100) DEFAULT NULL,
  `recommendation_superintendent_file` varchar(100) DEFAULT NULL,
  `file_number` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `regulationUpload`, `allotmentLetterUpload`, `name`, `refrence_id`, `designation`, `fathers_name`, `mothers_name`, `date_of_joining`, `department_name`, `present_posting`, `upload_joining_letter`, `scale`, `present_salary`, `pay_including_special_pay_of_any`, `marital_status`, `mobile_number`, `spouse_name`, `number_of_family_members`, `any_house`, `legally_separated`, `date`, `upload_photo`, `loan`, `load_detail`, `date_of_loan`, `loan2`, `load_detail2`, `date_of_loan2`, `flat_allotted`, `accommodation_detail`, `areas_where_he_wants_to`, `ponty_as_date`, `pontyAsDatenew`, `pontyAsDatenew2`, `pontyAsDatenew3`, `pontyAsDatenewSelected`, `executive_engineer`, `superintending_engineer`, `signature_upload`, `action_by`, `approved_sectional_officer`, `approved_estate_officer`, `approved_executive_engineer`, `approved_superintendent_engineer`, `status`, `recommendation_sectional`, `recommendation_estate`, `recommendation_executive`, `recommendation_superintendent`, `recommendation_sectional_file`, `recommendation_estate_file`, `recommendation_executive_file`, `recommendation_superintendent_file`, `file_number`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'www', '8518215680', 'wwww', 'www', 'www', '2020-07-23', 'fff', 'ffff', '1595441717.jpg', 'fff', '4444', 'fff', 'married', 'fff', 'ff', 'fff', 'spouse', 'fff', '2020-07-23', '1595441717.png', 'no', 'gggg', '2020/07/23', 'yes', NULL, '2020/07/23', 'no', NULL, 'Badda, Dhaka', '2020-07-23', NULL, NULL, NULL, NULL, '1595441717.png', '1595441717.jpg', '1595441717.jpg', '1', '1', '1', NULL, NULL, '3', '', '', '', '', '', NULL, NULL, NULL, NULL, '2020-06-30 02:59:24', '2020-07-24 12:43:50'),
(2, NULL, NULL, 'sdfs', '8518215620', 'sdfsdf', 'sdf', 'sdfsdf', '2020-07-22', 'sdfsdf', 'sdfsdf', '1595440419.png', 'sdfsf', '', 'sdfsdf', 'married', 'sdf', 'sdfsf', 'sdfsdf', 'spouse', 'sdfsdf', '2020-07-22', '1595440419.png', 'no', 'fghfgh', '', 'yes', '', '', 'no', 'fghfgh', '1', '2020-07-22', NULL, NULL, NULL, NULL, '1595440419.png', '1595440419.png', '1595440419.jpg', '1', '1', NULL, NULL, NULL, '2', '', '', '', '', '', NULL, NULL, NULL, NULL, '2020-06-30 06:31:18', '2020-07-23 04:41:47'),
(3, NULL, NULL, 'rrr', '8518215630', 'rrr', 'rrr', 'rrr', '2020-07-15', 'rrr', 'rrr', '1594633179.jpg', 'rr', '', 'rrrr', 'married', '1750637792', 'rr', 'rrr', 'spouse', 'rrr', '2020-07-15', '1594633179.jpg', 'no', 'rrrr', '', 'yes', '', '', 'no', 'rrrr', '3', '2020-07-09', NULL, NULL, NULL, NULL, '1594633179.png', '1594633179.png', '1594633179.png', '2', '1', '1', NULL, NULL, '3', 'ffff', 'ggg', '', '', '', NULL, NULL, NULL, 'fffffffff', '2020-07-13 03:39:39', '2020-08-12 01:25:32'),
(4, NULL, NULL, 'qwqwq', '8518215631', 'qwqwqw', 'qwqwqw', 'qwqwqwqw', '2020-07-31', 'qwqwqw', 'qwqwqw', '1594670788.jpg', 'ffffff', '', 'qwqw', 'married', '1750637792', 'qwqw', 'qwqw', 'spouse', 'qwqw', '2020-07-22', '1594670788.jpg', 'no', 'qwqw', '', 'yes', '', '', 'no', 'qwqw', '3', '2020-07-23', NULL, NULL, NULL, NULL, '1594670788.jpg', '1594670788.jpg', '1594670788.jpg', '1', '1', '1', NULL, NULL, '3', 'dfgdfgdfg', 'dfgdfg', '', '', '', NULL, NULL, NULL, '123456', '2020-07-13 14:06:28', '2020-08-12 01:34:22'),
(5, NULL, NULL, 'aaaaddd', '8518215632', 'ddddd', 'sdfsdf', 'sdfsdf', '2020-07-30', 'sdfsdf', 'sdfsdfdsf', '1595359403.jpg', 'sfsdf', '', 'sdfsdf', 'married', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'spouse', 'sdfsdf', '2020-07-16', '1595359403.png', 'no', 'sdfsdf', '', 'yes', '', '', 'no', 'sdfsdf', '3', '2020-07-30', NULL, NULL, NULL, NULL, '1595359403.png', '1595359403.png', '1595359403.png', '3', '1', '1', NULL, NULL, '3', 'dfgfdg', 'dfgdfg', '', '', '', NULL, NULL, NULL, '12', '2020-07-22 02:23:23', '2020-08-12 01:35:28'),
(6, NULL, NULL, 'sdfsdf', '8518215633', 'sdfsdfsdf', 'sdfsdf', 'sdfsdf', '2020-07-31', 'sdfs', 'sdfsdf', '1595359779.png', 'sdfsdf', '', 'sdfsdf', 'married', 'sdfsdf', 'sdf', 'sdfsd', 'spouse', 'sdfsdf', '2020-07-30', '1595359779.png', 'no', 'sdfsdf', '', 'yes', '', '', 'no', 'sdfsdf', '2', '2020-07-22', NULL, NULL, NULL, NULL, '1595359779.png', '1595359779.jpg', '1595359779.jpg', '4', NULL, NULL, NULL, NULL, '1', '', '', '', '', '', NULL, NULL, NULL, NULL, '2020-07-22 02:29:39', '2020-07-22 02:29:39'),
(7, NULL, NULL, 'backupwordpress', '8518215634', 'sdfsdfs', 'dfgdf', 'gdfgdfg', '2020-07-30', 'dfgdfg', 'sdfsdfdsf', '1595360007.jpg', 'dfgdfg', '', 'dfgdfg', 'married', 'dfgdfg', 'dfg', 'dfgdfg', 'spouse', 'dfgdfg', '2020-07-21', '1595360007.png', 'no', 'dfgdfg', '', 'yes', '', '', 'no', 'dfgdfg', '3', '2020-07-29', NULL, NULL, NULL, NULL, '1595360007.png', '1595360007.png', '1595360007.jpg', '5', NULL, NULL, NULL, NULL, '1', '', '', '', '', '', NULL, NULL, NULL, NULL, '2020-07-22 02:33:27', '2020-07-22 02:33:27'),
(10, NULL, NULL, 'sdfsdf', '8518215636', 'sdfsdf', 'dgdfg', 'dfgdfg', '2020-07-21', 'dfg', 'dfgdfg', '1595367579.png', 'dfgdfg', '', 'dfgdfg', 'married', 'sdfsdf', 'dfg', 'dfgdfg', 'spouse', 'dfgdfg', '2020-07-30', '1595367579.png', 'no', 'dfgdfg', '', 'yes', '', '', 'no', 'dfgdfg', '2', '2020-07-30', NULL, NULL, NULL, NULL, '1595367579.jpg', '1595367579.png', '1595367579.png', '8', NULL, NULL, NULL, NULL, '1', '', '', '', '', '', NULL, NULL, NULL, NULL, '2020-07-22 04:39:39', '2020-07-22 04:39:39'),
(12, NULL, NULL, 'abirn', '4227818501', 'abirde', 'abirf', 'abirm', '2020-07-23', 'abird', 'abirp', '1595562489.jpg', '4', '33333', 'dfgdfg', 'married', '6555', 'hhhh', 'nnnn', 'spouse', 'llll', '2020-07-24', '1595562489.jpg', 'no', '777', '2020/07/24', 'no', '666', '2020/07/24', 'no', 'gggg', 'Badda, Dhaka', '2020-07-25', 'hghg', NULL, NULL, NULL, '1595562489.jpg', '1595562489.jpg', '1595562489.jpg', '12', '1', '1', '1', '1', '4', 'thik ase', 'weeee', 'yyyyy', 'gggg', '', '', '', '', NULL, '2020-07-24 10:48:09', '2020-07-24 11:20:31'),
(13, NULL, NULL, 'sdfsdf', '2783537537', 'dfgdfgdfg', 'dfg', 'dfgdfg', '2020-07-23', 'dfg', 'dfg', '1595564560.jpg', '4', 'dfg', 'dfgdfg', 'married', 'dfgdfg', 'dfg', 'dfg', 'spouse', 'dfgdfg', '2020-07-15', '1595564560.jpg', 'no', 'dfgdfg', '2020/07/23', 'no', 'dfg', '2020/07/23', 'no', 'dfgdfg', 'Kuril, Dhaka', '2020-07-23', 'dfgdfgdfg', NULL, NULL, NULL, '1595564560.jpg', '1595564560.jpg', '1595564560.exe', '13', '1', '1', '1', '1', '4', 'this is section command', 'ess recc', 'excuuu', 'suu', '1595565284.jpg', '1595565946.jpg', '1595566031.jpg', '1595566052.jpg', NULL, '2020-07-24 11:22:40', '2020-07-24 11:47:32'),
(14, NULL, NULL, 'wwww', '9462017154', 'sdfsdf', 'wwwwff', 'wwwm', '2020-07-23', 'sdfs', 'abirp', '1595567532.jpg', 'sdfsdf', 'dfg', 'dfgdfg', 'married', '6555', 'dfg', 'dfgdfg', 'spouse', 'dfgdfg', '2020-07-23', '1595567532.jpg', 'no', '456456', '2020/07/23', 'no', 'dfg', '2020/07/23', 'no', 'dfgdfg', 'Kuril, Dhaka', '2020-07-16', 'dfgdfg', NULL, NULL, NULL, '1595567532.jpg', '1595567532.png', '1595567532.png', '14', '1', '1', '1', '1', '4', 'sectoipon', 'esss', 'exxxxxxx', 'suuuuu', '1595567583.jpg', '1595567633.png', '1595567666.png', '1595567702.jpg', NULL, '2020-07-24 12:12:12', '2020-07-24 12:15:02'),
(15, NULL, NULL, 'aaaa', '7706327038', 'sdfsdfdsf', 'sssss', 'sssss', '2020-07-23', 'ssss', '4444', '1595568299.png', '444', '444', '444', 'married', '5555', 'dfg', 'dfgdfg', 'spouse', 'dfgdfg', '2020-07-23', '1595568299.png', 'no', 'dfgfg', '2020/07/23', 'no', 'dfgdfg', '2020/07/23', 'no', 'dfgdfg', 'Badda Dhaka', '2020-07-24', 'hghg', NULL, NULL, NULL, '1595568299.png', '1595568299.jpg', '1595568299.png', '15', '1', NULL, NULL, NULL, '5', 'dgfdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-24 12:24:59', '2020-08-11 09:51:39'),
(16, NULL, NULL, 'anika', '3244365763', 'anika', 'anika', 'anika', '2020-07-23', '2020/08/22', '2020/08/19', '1597126309.jpg', '3', '3', '3', 'married', '6555', 'dfg', 'dfgdfg', 'spouse', 'dfgdfg', '2020-08-27', '1597126309.jpg', 'no', '456456', '2020/08/27', 'no', 'dfgdfg', '2020/08/26', 'no', '333', 'Kuril, Dhaka', '2020-08-21', 'hghg', NULL, NULL, NULL, '1597126309.jpg', '1597126309.jpg', '1597126309.jpg', '16', '1', '1', NULL, NULL, '3', 'good', 'sdfsdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-11 13:11:49', '2020-08-11 16:15:21'),
(17, '1597260238.jpg', '1597260238.jpg', 'animarany', '6160864387', 'animarany', 'animarany', 'animarany', '2020-07-15', '2020/08/28', '2020/08/25', '1597178002.jpg', '6', '6', '6', 'married', '6', '6', '6', 'spouse', '6', '2020-08-28', '1597178002.jpg', 'no', '66', '2020/08/27', 'no', '66', '2020/08/29', 'no', '6666', 'KhilKhet, Dhaka', '2020-08-11', 'Semi paka Tin shed home of divisional Sub-Assistant Engineers located at North Basabo.', 'Divisional officers quarter no-1 located at Zigatola', 'Semi paka Tin shed home of divisional Sub-Assistant Engineers located at North Basabo.', NULL, '1597178002.jpg', '1597178002.jpg', '1597178002.jpg', '18', '1', '1', '1', '1', '4', 'sdfsdf', 'sfsdff', 'dfgdfg', 'dfgdfg', NULL, NULL, NULL, '1597260238.jpg', 'sdfsdf3333', '2020-08-12 03:33:22', '2020-08-13 03:11:19'),
(18, NULL, NULL, 'abirkhan', '8144744631', 'abirkhan', 'abirkhan', 'abirkhan', '2020/07/24', '2020/08/14', '2020/08/20', '1597245384.pdf', '4', '4', '3', 'married', '3453453', '4', '4', 'spouse', '6', '2020-09-05', '1597245384.docx', 'no', '456456', '2020/08/21', 'no', '456456', '2020/08/29', 'no', '444', 'Kuril, Dhaka', '2020-08-21', 'Residence of divisional Sub-Assistant Engineers located at the premises of Elenbari Resource Division', 'Residence of divisional Sub-Assistant Engineers adjacent to Prime Minister Office at Tejgaon.', 'Residence of divisional Sub-Assistant Engineers adjacent to Prime Minister Office at Tejgaon.', NULL, '1597245384.pdf', '1597245384.docx', '1597245384.jpg', '20', '1', '1', '1', '1', '4', 'dd', 'dddd', 'www', 'dddd', NULL, NULL, NULL, NULL, '1234567', '2020-08-12 22:16:24', '2020-08-13 03:13:05'),
(19, NULL, NULL, 'bachcha', '7172210225', 'bachcha', 'bachcha', 'bachcha', 'bachcha', '2020/08/21', '2020/08/21', '1597246374.jpg', '4', '4', '3', 'married', '456456', '6', 'dfgf', 'spouse', '6', '2020-08-28', '1597246374.jpg', 'no', '456456', '2020/08/20', 'no', 'dfg', '2020/08/11', 'no', 'fff', 'Kuril, Dhaka', '2020-08-20', 'Divisional officers quarter no-2located at Zigatola', 'Residence of divisional Sub-Assistant Engineers adjacent to Prime Minister Office at Tejgaon.', 'Residence of divisional Sub-Assistant Engineers under Sher-E-Bangla Nagar PWD Division-1', NULL, '1597246374.jpg', '1597246374.pdf', '1597246374.jpg', '21', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-12 22:32:54', '2020-08-12 22:32:54'),
(20, NULL, NULL, 'bachchakhan', '9085024092', 'bachchakhan', 'bachchakhan', 'bachchakhan', 'bachchakhan', '2020/08/29', '2020/08/26', '1597246459.jpg', '4', '44', '4', 'married', '4', 'r', 'r', 'spouse', 'r', '2020-08-27', '1597246459.jpg', 'no', '456456', '2020/08/26', 'no', 'dfg', '2020/08/26', 'no', 'rrr', 'Kuril, Dhaka', '2020-08-12', 'Residence of divisional Sub-Assistant Engineers at Motijhil Commercial Area (behind Bangladesh Bank)', 'Three unit Residence of divisional Sub-Assistant Engineers inside Ramna Store at 64 Park Avenew', 'Divisional officers quarter no-1 located at Zigatola', NULL, '1597246459.jpg', '1597246459.jpg', '1597246459.jpg', '22', '1', '1', '1', '1', '4', 'fff', 'fffff', 'dddd', 'dddddddd', NULL, NULL, NULL, NULL, '12345678', '2020-08-12 22:34:19', '2020-08-13 03:10:52'),
(21, NULL, NULL, 'suman', '3430183113', 'suman', 'suman', 'suman', 'suman', '2020/08/21', '2020/08/27', '1597252782.jpg', '5', '5', '5', 'married', '6555', 'fff', 'fff', 'spouse', 'ddfgdfg', '2020-08-28', '1597252782.jpg', 'no', 'dfgdfg', '2020/08/21', 'no', 'dfg', '2020/08/28', 'no', 'fff', 'Kuril, Dhaka', '2020-08-12', 'Divisional officers quarter no-3 located at Zigatola', 'Semi paka Tin shed home of divisional Sub-Assistant Engineers adjacent to Sobhanbagh garage.', 'Residence of divisional Sub-Assistant Engineers at Motijhil Commercial Area (behind Bangladesh Bank)', NULL, '1597252782.jpg', '1597252782.jpg', '1597252782.jpg', '23', NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-08-13 00:19:42', '2020-08-13 00:19:42'),
(22, '1597259257.jpg', '1597259257.jpg', 'pakhi', '8396014712', 'pakhi', 'pakhi', 'pakhi', 'pakhi', '2020/08/12', '2020/08/12', '1597255395.jpg', '5', '5', '5', 'married', 'varati', '5', '5', 'spouse', '5', '2020-08-12', '1597255395.jpg', 'no', '5', '2020/08/12', 'no', '666', '2020/08/12', 'no', 'gggg', 'Kuril, Dhaka', '2020-08-12', 'Residence of divisional Sub-Assistant Engineers at AgargaonTaltola.', 'Semi paka Tin shed home of divisional Sub-Assistant Engineers adjacent to Sobhanbagh garage.', 'Divisional officers quarter no-3 located at Zigatola', NULL, '1597255395.jpg', '1597255395.jpg', '1597255395.jpg', '24', '1', '1', '1', '1', '4', 'gfghfgh', 'fghfgh', 'ggggg', 'ggggg', NULL, NULL, NULL, '1597259257.jpg', '67890', '2020-08-13 00:22:52', '2020-08-13 03:10:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

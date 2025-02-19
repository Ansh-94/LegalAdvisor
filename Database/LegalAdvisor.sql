-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2025 at 07:57 PM
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
-- Database: `legaladvisor`
--

-- --------------------------------------------------------

--
-- Table structure for table `citymaster`
--

CREATE TABLE `citymaster` (
  `CityMasterID` int(10) NOT NULL,
  `StateMasterID` int(10) NOT NULL,
  `CityName` varchar(50) NOT NULL,
  `Flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `citymaster`
--

INSERT INTO `citymaster` (`CityMasterID`, `StateMasterID`, `CityName`, `Flag`) VALUES
(1, 1, 'Visakhapatnam', 0),
(2, 1, 'Vijayawada', 0),
(3, 1, 'Guntur', 0),
(4, 1, 'Nellore', 0),
(5, 1, 'Kurnool', 0),
(6, 1, 'Rajahmundry', 0),
(7, 1, 'Kakinada', 0),
(8, 1, 'Tirupati', 0),
(9, 1, 'Kadapa', 0),
(10, 1, 'Anantapur', 0),
(11, 1, 'Eluru', 0),
(12, 1, 'Vizianagaram', 0),
(13, 1, 'Srikakulam', 0),
(14, 1, 'Ongole', 0),
(15, 1, 'Machilipatnam', 0),
(16, 1, 'Tenali', 0),
(17, 1, 'Bhimavaram', 0),
(18, 1, 'Madanapalle', 0),
(19, 1, 'Nandyal', 0),
(20, 1, 'Proddatur', 0),
(21, 1, 'Gudivada', 0),
(22, 1, 'Narasaraopet', 0),
(23, 1, 'Hindupur', 0),
(24, 1, 'Tadepalligudem', 0),
(25, 1, 'Bapatla', 0),
(26, 1, 'Dharmavaram', 0),
(27, 1, 'Srikalahasti', 0),
(28, 1, 'Chilakaluripet', 0),
(29, 1, 'Guntakal', 0),
(30, 1, 'Markapur', 0),
(31, 1, 'Nagari', 0),
(32, 1, 'Peddapuram', 0),
(33, 1, 'Piduguralla', 0),
(34, 1, 'Pithapuram', 0),
(35, 1, 'Rayachoti', 0),
(36, 1, 'Samalkot', 0),
(37, 1, 'Sullurpeta', 0),
(38, 1, 'Tuni', 0),
(39, 1, 'Uravakonda', 0),
(40, 1, 'Vinukonda', 0),
(41, 1, 'Yemmiganur', 0),
(42, 1, 'Yerraguntla', 0),
(43, 1, 'Pulivendula', 0),
(44, 1, 'Adoni', 0),
(45, 1, 'Macherla', 0),
(46, 1, 'Amalapuram', 0),
(47, 1, 'Tanuku', 0),
(48, 1, 'Palakollu', 0),
(49, 1, 'Mangalagiri', 0),
(50, 1, 'Ponnur', 0),
(51, 1, 'Kanigiri', 0),
(52, 1, 'Kandukur', 0),
(53, 1, 'Gudur', 0),
(54, 1, 'Venkatagiri', 0),
(55, 1, 'Rayadurg', 0),
(56, 1, 'Kalyandurg', 0),
(57, 1, 'Parvathipuram', 0),
(58, 1, 'Palasa', 0),
(59, 1, 'Amudalavalasa', 0),
(60, 1, 'Nuzvid', 0),
(61, 1, 'Koduru', 0),
(62, 1, 'Bethamcherla', 0),
(63, 1, 'Allagadda', 0),
(64, 1, 'Banaganapalle', 0),
(65, 1, 'Dhone', 0),
(66, 1, 'Jammalamadugu', 0),
(67, 1, 'Kadiri', 0),
(68, 1, 'Tadipatri', 0),
(69, 1, 'Rajampet', 0),
(70, 1, 'Pamarru', 0),
(71, 1, 'Narasapuram', 0),
(72, 1, 'Ramachandrapuram', 0),
(73, 1, 'Mandapeta', 0),
(74, 1, 'Repalle', 0),
(75, 2, 'Itanagar', 0),
(76, 2, 'Naharlagun', 0),
(77, 2, 'Pasighat', 0),
(78, 2, 'Tawang', 0),
(79, 2, 'Tezu', 0),
(80, 2, 'Bomdila', 0),
(81, 2, 'Ziro', 0),
(82, 2, 'Roing', 0),
(83, 2, 'Daporijo', 0),
(84, 2, 'Changlang', 0),
(85, 2, 'Likabali', 0),
(86, 3, 'Bongaigaon', 0),
(87, 3, 'Dibrugarh', 0),
(88, 3, 'Dispur', 0),
(89, 3, 'Guwahati', 0),
(90, 3, 'Jorhat', 0),
(91, 3, 'Nagaon', 0),
(92, 3, 'Silchar', 0),
(93, 3, 'Tezpur', 0),
(94, 3, 'Tinsukia', 0),
(95, 4, 'Arrah', 0),
(96, 4, 'Begusarai', 0),
(97, 4, 'Bhagalpur', 0),
(98, 4, 'Darbhanga', 0),
(99, 4, 'Gaya', 0),
(100, 4, 'Hajipur', 0),
(101, 4, 'Katihar', 0),
(102, 4, 'Muzaffarpur', 0),
(103, 4, 'Patna', 0),
(104, 4, 'Purnia', 0),
(105, 4, 'Sasaram', 0),
(106, 5, 'Ambikapur', 0),
(107, 5, 'Bhatapara', 0),
(108, 5, 'Bhilai', 0),
(109, 5, 'Bilaspur', 0),
(110, 5, 'Durg', 0),
(111, 5, 'Jagdalpur', 0),
(112, 5, 'Korba', 0),
(113, 5, 'Raipur', 0),
(114, 6, 'Mapusa', 0),
(115, 6, 'Margao', 0),
(116, 6, 'Panaji', 0),
(117, 6, 'Ponda', 0),
(118, 6, 'Vasco da Gama', 0),
(119, 7, 'Ahmedabad', 0),
(120, 7, 'Amreli', 0),
(121, 7, 'Anand', 0),
(122, 7, 'Anjar', 0),
(123, 7, 'Bardoli', 0),
(124, 7, 'Bharuch', 0),
(125, 7, 'Bhavnagar', 0),
(126, 7, 'Bhuj', 0),
(127, 7, 'Bilimora', 0),
(128, 7, 'Chhota Udepur', 0),
(129, 7, 'Dahod', 0),
(130, 7, 'Deesa', 0),
(131, 7, 'Dhoraji', 0),
(132, 7, 'Dwarka', 0),
(133, 7, 'Gandhidham', 0),
(134, 7, 'Gandhinagar', 0),
(135, 7, 'Godhra', 0),
(136, 7, 'Gondal', 0),
(137, 7, 'Halol', 0),
(138, 7, 'Himmatnagar', 0),
(139, 7, 'Jamnagar', 0),
(140, 7, 'Jetpur', 0),
(141, 7, 'Junagadh', 0),
(142, 7, 'Kalol', 0),
(143, 7, 'Keshod', 0),
(144, 7, 'Khambhat', 0),
(145, 7, 'Kheda', 0),
(146, 7, 'Mahesana', 0),
(147, 7, 'Mahuva', 0),
(148, 7, 'Morbi', 0),
(149, 7, 'Nadiad', 0),
(150, 7, 'Navsari', 0),
(151, 7, 'Palanpur', 0),
(152, 7, 'Patan', 0),
(153, 7, 'Porbandar', 0),
(154, 7, 'Rajkot', 0),
(155, 7, 'Rajpipla', 0),
(156, 7, 'Surat', 0),
(157, 7, 'Surendranagar', 0),
(158, 7, 'Unjha', 0),
(159, 7, 'Vadodara', 0),
(160, 7, 'Valsad', 0),
(161, 7, 'Vapi', 0),
(162, 7, 'Veraval', 0),
(163, 7, 'Visnagar', 0),
(164, 7, 'Vyara', 0),
(165, 7, 'Wadhwan', 0),
(166, 8, 'Ambala', 0),
(167, 8, 'Ambala Cantt', 0),
(168, 8, 'Bahadurgarh', 0),
(169, 8, 'Bhiwani', 0),
(170, 8, 'Charkhi Dadri', 0),
(171, 8, 'Faridabad', 0),
(172, 8, 'Fatehabad', 0),
(173, 8, 'Gohana', 0),
(174, 8, 'Gurgaon', 0),
(175, 8, 'Hansi', 0),
(176, 8, 'Hisar', 0),
(177, 8, 'Jind', 0),
(178, 8, 'Kaithal', 0),
(179, 8, 'Karnal', 0),
(180, 8, 'Kurukshetra', 0),
(181, 8, 'Ladwa', 0),
(182, 8, 'Mahendragarh', 0),
(183, 8, 'Narnaul', 0),
(184, 8, 'Narwana', 0),
(185, 8, 'Palwal', 0),
(186, 8, 'Panchkula', 0),
(187, 8, 'Panipat', 0),
(188, 8, 'Pehowa', 0),
(189, 8, 'Rewari', 0),
(190, 8, 'Rohtak', 0),
(191, 8, 'Safidon', 0),
(192, 8, 'Sirsa', 0),
(193, 8, 'Sonipat', 0),
(194, 8, 'Thanesar', 0),
(195, 8, 'Tohana', 0),
(196, 8, 'Yamunanagar', 0),
(197, 9, 'Arki', 0),
(198, 9, 'Baijnath', 0),
(199, 9, 'Baddi', 0),
(200, 9, 'Banjar', 0),
(201, 9, 'Bharmour', 0),
(202, 9, 'Bhuntar', 0),
(203, 9, 'Bilaspur', 0),
(204, 9, 'Chamba', 0),
(205, 9, 'Dalhousie', 0),
(206, 9, 'Dharamshala', 0),
(207, 9, 'Hamirpur', 0),
(208, 9, 'Joginder Nagar', 0),
(209, 9, 'Jubbal', 0),
(210, 9, 'Kangra', 0),
(211, 9, 'Kasauli', 0),
(212, 9, 'Kullu', 0),
(213, 9, 'Keylong', 0),
(214, 9, 'Mandi', 0),
(215, 9, 'Manali', 0),
(216, 9, 'Mashobra', 0),
(217, 9, 'Nahan', 0),
(218, 9, 'Nalagarh', 0),
(219, 9, 'Palampur', 0),
(220, 9, 'Paonta Sahib', 0),
(221, 9, 'Parwanoo', 0),
(222, 9, 'Rampur', 0),
(223, 9, 'Reckong Peo', 0),
(224, 9, 'Rohru', 0),
(225, 9, 'Sangla', 0),
(226, 9, 'Sarahan', 0),
(227, 9, 'Shimla', 0),
(228, 9, 'Solan', 0),
(229, 9, 'Sundarnagar', 0),
(230, 9, 'Theog', 0),
(231, 9, 'Una', 0),
(232, 10, 'Bokaro', 0),
(233, 10, 'Chaibasa', 0),
(234, 10, 'Chatra', 0),
(235, 10, 'Deoghar', 0),
(236, 10, 'Dhanbad', 0),
(237, 10, 'Dumka', 0),
(238, 10, 'Garhwa', 0),
(239, 10, 'Giridih', 0),
(240, 10, 'Godda', 0),
(241, 10, 'Gomoh', 0),
(242, 10, 'Gumia', 0),
(243, 10, 'Ghatshila', 0),
(244, 10, 'Hazaribagh', 0),
(245, 10, 'Jamshedpur', 0),
(246, 10, 'Jamtara', 0),
(247, 10, 'Koderma', 0),
(248, 10, 'Lohardaga', 0),
(249, 10, 'Medininagar', 0),
(250, 10, 'Mihijam', 0),
(251, 10, 'Pakur', 0),
(252, 10, 'Ramgarh', 0),
(253, 10, 'Ranchi', 0),
(254, 10, 'Sahibganj', 0),
(255, 10, 'Simdega', 0),
(256, 11, 'Bagalkot', 0),
(257, 11, 'Ballari', 0),
(258, 11, 'Belagavi', 0),
(259, 11, 'Bengaluru', 0),
(260, 11, 'Bhadravati', 0),
(261, 11, 'Bidar', 0),
(262, 11, 'Chamarajanagar', 0),
(263, 11, 'Chikkaballapur', 0),
(264, 11, 'Chikkamagaluru', 0),
(265, 11, 'Chitradurga', 0),
(266, 11, 'Davangere', 0),
(267, 11, 'Dharwad', 0),
(268, 11, 'Gadag', 0),
(269, 11, 'Hassan', 0),
(270, 11, 'Haveri', 0),
(271, 11, 'Hospet', 0),
(272, 11, 'Hubballi', 0),
(273, 11, 'Kalaburagi', 0),
(274, 11, 'Karwar', 0),
(275, 11, 'Kolar', 0),
(276, 11, 'Koppal', 0),
(277, 11, 'Madikeri', 0),
(278, 11, 'Mandya', 0),
(279, 11, 'Mangaluru', 0),
(280, 11, 'Mysuru', 0),
(281, 11, 'Raichur', 0),
(282, 11, 'Ramanagara', 0),
(283, 11, 'Shivamogga', 0),
(284, 11, 'Tumakuru', 0),
(285, 11, 'Udupi', 0),
(286, 11, 'Vijayapura', 0),
(287, 11, 'Yadgir', 0),
(288, 12, 'Alappuzha', 0),
(289, 12, 'Adoor', 0),
(290, 12, 'Angamaly', 0),
(291, 12, 'Attingal', 0),
(292, 12, 'Chalakudy', 0),
(293, 12, 'Changanassery', 0),
(294, 12, 'Cherthala', 0),
(295, 12, 'Erattupetta', 0),
(296, 12, 'Guruvayur', 0),
(297, 12, 'Idukki', 0),
(298, 12, 'Irinjalakuda', 0),
(299, 12, 'Kanhangad', 0),
(300, 12, 'Kannur', 0),
(301, 12, 'Kasaragod', 0),
(302, 12, 'Kayamkulam', 0),
(303, 12, 'Kochi', 0),
(304, 12, 'Kodungallur', 0),
(305, 12, 'Kollam', 0),
(306, 12, 'Kottarakkara', 0),
(307, 12, 'Kottayam', 0),
(308, 12, 'Koyilandy', 0),
(309, 12, 'Kozhikode', 0),
(310, 12, 'Malappuram', 0),
(311, 12, 'Manjeri', 0),
(312, 12, 'Mavelikkara', 0),
(313, 12, 'Nedumangad', 0),
(314, 12, 'Neyyattinkara', 0),
(315, 12, 'Ottapalam', 0),
(316, 12, 'Palakkad', 0),
(317, 12, 'Pathanamthitta', 0),
(318, 12, 'Perinthalmanna', 0),
(319, 12, 'Ponnani', 0),
(320, 12, 'Punalur', 0),
(321, 12, 'Thalassery', 0),
(322, 12, 'Thiruvalla', 0),
(323, 12, 'Thiruvananthapuram', 0),
(324, 12, 'Thrissur', 0),
(325, 12, 'Tirur', 0),
(326, 12, 'Vadakara', 0),
(327, 12, 'Varkala', 0),
(328, 13, 'Ashoknagar', 0),
(329, 13, 'Balaghat', 0),
(330, 13, 'Barwani', 0),
(331, 13, 'Betul', 0),
(332, 13, 'Bhopal', 0),
(333, 13, 'Burhanpur', 0),
(334, 13, 'Chhatarpur', 0),
(335, 13, 'Chhindwara', 0),
(336, 13, 'Damoh', 0),
(337, 13, 'Dewas', 0),
(338, 13, 'Dhar', 0),
(339, 13, 'Guna', 0),
(340, 13, 'Gwalior', 0),
(341, 13, 'Harda', 0),
(342, 13, 'Indore', 0),
(343, 13, 'Itarsi', 0),
(344, 13, 'Jabalpur', 0),
(345, 13, 'Katni', 0),
(346, 13, 'Khandwa', 0),
(347, 13, 'Khargone', 0),
(348, 13, 'Mandsaur', 0),
(349, 13, 'Morena', 0),
(350, 13, 'Narsinghpur', 0),
(351, 13, 'Neemuch', 0),
(352, 13, 'Panna', 0),
(353, 13, 'Raisen', 0),
(354, 13, 'Rajgarh', 0),
(355, 13, 'Ratlam', 0),
(356, 13, 'Rewa', 0),
(357, 13, 'Sagar', 0),
(358, 13, 'Satna', 0),
(359, 13, 'Sehore', 0),
(360, 13, 'Seoni', 0),
(361, 13, 'Shivpuri', 0),
(362, 13, 'Sidhi', 0),
(363, 13, 'Singrauli', 0),
(364, 13, 'Ujjain', 0),
(365, 13, 'Vidisha', 0),
(366, 14, 'Ahmednagar', 0),
(367, 14, 'Akola', 0),
(368, 14, 'Amravati', 0),
(369, 14, 'Aurangabad', 0),
(370, 14, 'Bhiwandi', 0),
(371, 14, 'Chandrapur', 0),
(372, 14, 'Dhule', 0),
(373, 14, 'Jalgaon', 0),
(374, 14, 'Kolhapur', 0),
(375, 14, 'Latur', 0),
(376, 14, 'Mumbai', 0),
(377, 14, 'Nagpur', 0),
(378, 14, 'Nanded', 0),
(379, 14, 'Nashik', 0),
(380, 14, 'Navi Mumbai', 0),
(381, 14, 'Pune', 0),
(382, 14, 'Sangli', 0),
(383, 14, 'Solapur', 0),
(384, 14, 'Thane', 0),
(385, 14, 'Ulhasnagar', 0),
(386, 14, 'Vasai-Virar City', 0),
(387, 15, 'Bishnupur', 0),
(388, 15, 'Churachandpur', 0),
(389, 15, 'Imphal', 0),
(390, 15, 'Jiribam', 0),
(391, 15, 'Kakching', 0),
(392, 15, 'Kangpokpi', 0),
(393, 15, 'Nambol', 0),
(394, 15, 'Senapati', 0),
(395, 15, 'Tamenglong', 0),
(396, 15, 'Thoubal', 0),
(397, 15, 'Ukhrul', 0),
(398, 16, 'Baghmara', 0),
(399, 16, 'Cherrapunji', 0),
(400, 16, 'Jowai', 0),
(401, 16, 'Mairang', 0),
(402, 16, 'Nongpoh', 0),
(403, 16, 'Nongstoin', 0),
(404, 16, 'Shillong', 0),
(405, 16, 'Tura', 0),
(406, 17, 'Aizawl', 0),
(407, 17, 'Champhai', 0),
(408, 17, 'Kolasib', 0),
(409, 17, 'Lawngtlai', 0),
(410, 17, 'Lunglei', 0),
(411, 17, 'Mamit', 0),
(412, 17, 'Saiha', 0),
(413, 17, 'Serchhip', 0),
(414, 18, 'Dimapur', 0),
(415, 18, 'Kohima', 0),
(416, 18, 'Dimapur', 0),
(417, 18, 'Kohima', 0),
(418, 18, 'Mokokchung', 0),
(419, 18, 'Mon', 0),
(420, 18, 'Phek', 0),
(421, 18, 'Tuensang', 0),
(422, 18, 'Wokha', 0),
(423, 18, 'Zunheboto', 0),
(424, 19, 'Balasore', 0),
(425, 19, 'Bhadrak', 0),
(426, 19, 'Bhubaneswar', 0),
(427, 19, 'Cuttack', 0),
(428, 19, 'Dhenkanal', 0),
(429, 19, 'Jagatsinghpur', 0),
(430, 19, 'Jajpur', 0),
(431, 19, 'Jharsuguda', 0),
(432, 19, 'Kendrapara', 0),
(433, 19, 'Keonjhar', 0),
(434, 19, 'Koraput', 0),
(435, 19, 'Malkangiri', 0),
(436, 19, 'Mayurbhanj', 0),
(437, 19, 'Nabarangpur', 0),
(438, 19, 'Nayagarh', 0),
(439, 19, 'Nuapada', 0),
(440, 19, 'Puri', 0),
(441, 19, 'Rayagada', 0),
(442, 19, 'Sambalpur', 0),
(443, 19, 'Sonepur', 0),
(444, 20, 'Amritsar', 0),
(445, 20, 'Bathinda', 0),
(446, 20, 'Chandigarh', 0),
(447, 20, 'Jalandhar', 0),
(448, 20, 'Ludhiana', 0),
(449, 20, 'Mohali', 0),
(450, 20, 'Patiala', 0),
(451, 20, 'Phagwara', 0),
(452, 21, 'Ajmer', 0),
(453, 21, 'Alwar', 0),
(454, 21, 'Bharatpur', 0),
(455, 21, 'Bhilwara', 0),
(456, 21, 'Bikaner', 0),
(457, 21, 'Chittorgarh', 0),
(458, 21, 'Jaipur', 0),
(459, 21, 'Jaisalmer', 0),
(460, 21, 'Jodhpur', 0),
(461, 21, 'Kota', 0),
(462, 21, 'Mount Abu', 0),
(463, 21, 'Pali', 0),
(464, 21, 'Rajsamand', 0),
(465, 21, 'Sikar', 0),
(466, 21, 'Sri Ganganagar', 0),
(467, 21, 'Tonk', 0),
(468, 21, 'Udaipur', 0),
(469, 22, 'Gangtok', 0),
(470, 22, 'Geyzing', 0),
(471, 22, 'Jorethang', 0),
(472, 22, 'Mangan', 0),
(473, 22, 'Namchi', 0),
(474, 22, 'Nayabazar', 0),
(475, 22, 'Rangpo', 0),
(476, 22, 'Ravangla', 0),
(477, 22, 'Singtam', 0),
(478, 23, 'Chennai', 0),
(479, 23, 'Coimbatore', 0),
(480, 23, 'Cuddalore', 0),
(481, 23, 'Dindigul', 0),
(482, 23, 'Erode', 0),
(483, 23, 'Hosur', 0),
(484, 23, 'Kanchipuram', 0),
(485, 23, 'Karaikudi', 0),
(486, 23, 'Kaveri', 0),
(487, 23, 'Krishnagiri', 0),
(488, 23, 'Madurai', 0),
(489, 23, 'Nagercoil', 0),
(490, 23, 'Pollachi', 0),
(491, 23, 'Pudukkottai', 0),
(492, 23, 'Salem', 0),
(493, 23, 'Thanjavur', 0),
(494, 23, 'Thoothukudi', 0),
(495, 23, 'Tiruchirappalli', 0),
(496, 23, 'Tirunelveli', 0),
(497, 23, 'Tiruppur', 0),
(498, 23, 'Vellore', 0),
(499, 24, 'Adilabad', 0),
(500, 24, 'Hyderabad', 0),
(501, 24, 'Karimnagar', 0),
(502, 24, 'Khammam', 0),
(503, 24, 'Mahbubnagar', 0),
(504, 24, 'Nalgonda', 0),
(505, 24, 'Nizamabad', 0),
(506, 24, 'Ranga Reddy', 0),
(507, 24, 'Warangal', 0),
(508, 25, 'Agartala', 0),
(509, 25, 'Belonia', 0),
(510, 25, 'Dharmanagar', 0),
(511, 25, 'Kailasahar', 0),
(512, 25, 'Khowai', 0),
(513, 25, 'Kumarghat', 0),
(514, 25, 'Longtarai Valley', 0),
(515, 25, 'Sabroom', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `LawyerID` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `BarRegistration` varchar(255) NOT NULL,
  `Specialization` varchar(100) NOT NULL,
  `Experience` int(11) NOT NULL,
  `StateMasterID` int(10) NOT NULL,
  `CityMasterID` int(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `ConsultationFee` decimal(10,2) DEFAULT NULL,
  `HourlyRate` decimal(10,2) DEFAULT NULL,
  `Bio` text DEFAULT NULL,
  `RecentCases` varchar(255) NOT NULL,
  `ProfilePicture` varchar(255) DEFAULT NULL,
  `CreatedAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`LawyerID`, `FullName`, `BarRegistration`, `Specialization`, `Experience`, `StateMasterID`, `CityMasterID`, `Email`, `Phone`, `ConsultationFee`, `HourlyRate`, `Bio`, `RecentCases`, `ProfilePicture`, `CreatedAt`) VALUES
(3, 'Nai Aryan', '76786786', 'Criminal Law', 5, 0, 0, 'scacas@gmail.com', '6484894854', 510000.00, 1000.00, 'ewhuehwiughuew', '', '', '2025-02-16 07:54:44'),
(4, 'ansh meghani', '5544545454', 'Criminal Law', 5, 0, 0, '1248@sbcsrbox.com', '6484894857', 10000000.00, 1000.00, 'efhuewhuewhuew', '', '', '2025-02-16 08:13:16'),
(5, 'kartik', '4645465484', 'Civil Rights', 4, 0, 0, 'hixav73307@daypey.com', '6445454545', 10000000.00, 11111.00, 'fdndfndfndfn', '', '', '2025-02-16 08:15:47'),
(6, 'paresh kukadiya', '6487468484', 'Criminal Law', 7, 0, 0, '1150@sbcsrbox.com', '27684687846', 300000.00, 300.00, 'mehgbvdsjgfchvsmn bcvefrjkekvsdkjvgjerbgvjkhsgdvjkvb', '', '', '2025-02-16 09:05:18'),
(7, 'Microsoft', '78645353', 'Criminal Law', 44, 0, 0, 'meghaniansh942005@gmail.com', '27684687846', 654654.00, 0.00, '', '', '', '2025-02-16 10:09:27'),
(15, 'kamlesh', '987645654654646', 'Corporate Law', 5, 0, 0, 'asa@gmail.com', '2768468784', 365.00, 465.00, 'fgdgl;sndfg;lhdf;rkdjhtgjklrntdh', '', '', '2025-02-16 12:41:43'),
(16, 'rakesh', '545465468465489', 'Civil Rights', 45, 0, 0, 'xsdfyz@gmail.com', '1546546546', 4242.00, 4524.00, 'sjdfvjksvdfsabbfjogsajfasdfhasvfysgafhsbauygfjbwafkgufsakbfuysgfhkwgjabuy', '', '', '2025-02-16 12:44:43'),
(17, 'Vivek Vara', '684665798764', 'civil', 5, 7, 1, 'vhsd@gmail.com', '8978456245', 6456554.00, NULL, NULL, '', NULL, '2025-02-18 18:07:40'),
(20, 'Vivek Vara', '6835247586', 'civil', 5, 7, 159, 'vhasd@gmail.com', '8979456245', 6456554.00, 321.00, 'sdafgasgfdiasyufgsagdu', '', NULL, '2025-02-18 18:09:50'),
(21, 'gsdgsfd', '987654321852147', 'civil', 4, 1, 1, 'fuy@gmail.com', '4653219781', 978465.00, 4654.00, 'fgdhfdghfdh', 'dfghfgdhfh', '\".$ProfilePicture.\"', '2025-02-18 18:45:12'),
(22, '', '', '', 0, 0, 0, '', '', 0.00, 0.00, '', '', '', '2025-02-18 18:46:22'),
(23, 'zdzdfvd xz', '656545665446546', 'Criminal Law', 65, 15, 396, 'Kartxvcik@gmail.com', '6786786554', 99999999.99, 465.00, 'fhdfhdfghdfgsfg', 'fghfghfghdfghd', '', '2025-02-18 18:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `statemaster`
--

CREATE TABLE `statemaster` (
  `StateMasterID` int(10) NOT NULL,
  `StateName` varchar(50) NOT NULL,
  `Flag` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statemaster`
--

INSERT INTO `statemaster` (`StateMasterID`, `StateName`, `Flag`) VALUES
(1, 'Andhra Pradesh', 0),
(2, 'Arunachal Pradesh', 0),
(3, 'Assam', 0),
(4, 'Bihar', 0),
(5, 'Chhattisgarh', 0),
(6, 'Goa', 0),
(7, 'Gujarat', 0),
(8, 'Haryana', 0),
(9, 'Himachal Pradesh', 0),
(10, 'Jharkhand', 0),
(11, 'Karnataka', 0),
(12, 'Kerala', 0),
(13, 'Madhya Pradesh', 0),
(14, 'Maharashtra', 0),
(15, 'Manipur', 0),
(16, 'Meghalaya', 0),
(17, 'Mizoram', 0),
(18, 'Nagaland', 0),
(19, 'Odisha', 0),
(20, 'Punjab', 0),
(21, 'Rajasthan', 0),
(22, 'Sikkim', 0),
(23, 'Tamil Nadu', 0),
(24, 'Telangana', 0),
(25, 'Tripura', 0),
(26, 'Uttar Pradesh', 0),
(27, 'Uttarakhand', 0),
(28, 'West Bengal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usermaster`
--

CREATE TABLE `usermaster` (
  `UserMasterID` int(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usermaster`
--

INSERT INTO `usermaster` (`UserMasterID`, `UserName`, `Password`, `Email`) VALUES
(1, 'Kartik', '12345', 'Kartik@gmail.com'),
(2, 'Ansh', '11111', 'meghaniansh@gmail.co');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citymaster`
--
ALTER TABLE `citymaster`
  ADD PRIMARY KEY (`CityMasterID`),
  ADD KEY `CityMasterID` (`StateMasterID`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`LawyerID`),
  ADD UNIQUE KEY `bar_registration` (`BarRegistration`),
  ADD UNIQUE KEY `email` (`Email`);

--
-- Indexes for table `statemaster`
--
ALTER TABLE `statemaster`
  ADD PRIMARY KEY (`StateMasterID`);

--
-- Indexes for table `usermaster`
--
ALTER TABLE `usermaster`
  ADD PRIMARY KEY (`UserMasterID`),
  ADD UNIQUE KEY `UserName` (`UserName`),
  ADD UNIQUE KEY `Password` (`Password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citymaster`
--
ALTER TABLE `citymaster`
  MODIFY `CityMasterID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=516;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `LawyerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `statemaster`
--
ALTER TABLE `statemaster`
  MODIFY `StateMasterID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `usermaster`
--
ALTER TABLE `usermaster`
  MODIFY `UserMasterID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `citymaster`
--
ALTER TABLE `citymaster`
  ADD CONSTRAINT `CityMasterID` FOREIGN KEY (`StateMasterID`) REFERENCES `citymaster` (`CityMasterID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

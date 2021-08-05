-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2015 at 06:55 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `job_uae`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_info`
--

CREATE TABLE IF NOT EXISTS `academic_info` (
  `academic_id` int(6) NOT NULL AUTO_INCREMENT,
  `js_id` int(6) NOT NULL,
  `degree` varchar(200) NOT NULL,
  `major_subject` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `division` varchar(50) NOT NULL,
  `marks_cgpa` varchar(50) NOT NULL,
  `institute` varchar(200) NOT NULL,
  `passing_year` varchar(50) NOT NULL,
  PRIMARY KEY (`academic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `academic_info`
--

INSERT INTO `academic_info` (`academic_id`, `js_id`, `degree`, `major_subject`, `country`, `division`, `marks_cgpa`, `institute`, `passing_year`) VALUES
(4, 5, '3', 'computer', '1', '1st', '3.1', 'bzu', '2014');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(6) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `password`) VALUES
(1, 'asim@yahoo.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE IF NOT EXISTS `apply` (
  `apply_id` int(6) NOT NULL AUTO_INCREMENT,
  `job_id` int(6) NOT NULL,
  `js_id` int(6) NOT NULL,
  PRIMARY KEY (`apply_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`apply_id`, `job_id`, `js_id`) VALUES
(1, 2, 1),
(2, 1, 1),
(3, 1, 5),
(4, 13, 5),
(5, 11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `career_level`
--

CREATE TABLE IF NOT EXISTS `career_level` (
  `career_id` int(6) NOT NULL AUTO_INCREMENT,
  `career_name` varchar(100) NOT NULL,
  PRIMARY KEY (`career_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `career_level`
--

INSERT INTO `career_level` (`career_id`, `career_name`) VALUES
(1, 'intern'),
(2, 'Student'),
(3, 'Fresh'),
(4, 'Experienced'),
(5, 'Officer'),
(6, 'Manager'),
(7, 'Executive'),
(8, 'Senior Executive'),
(9, 'Other'),
(10, 'Not required');

-- --------------------------------------------------------

--
-- Table structure for table `city_state`
--

CREATE TABLE IF NOT EXISTS `city_state` (
  `city_id` int(6) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(100) NOT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `city_state`
--

INSERT INTO `city_state` (`city_id`, `city_name`) VALUES
(1, 'Abu Dhabi'),
(2, 'Ajman'),
(3, 'Al Ain'),
(4, 'Fujairah'),
(5, 'Ras al Khaimah'),
(6, 'Sharjah'),
(7, 'Umm ul Quwain');

-- --------------------------------------------------------

--
-- Table structure for table `company_type`
--

CREATE TABLE IF NOT EXISTS `company_type` (
  `company_type_id` int(6) NOT NULL AUTO_INCREMENT,
  `company_type_name` varchar(100) NOT NULL,
  PRIMARY KEY (`company_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `company_type`
--

INSERT INTO `company_type` (`company_type_id`, `company_type_name`) VALUES
(1, 'General Partnership'),
(2, 'Simple Limited Partnership'),
(3, 'Joint Participation'),
(4, 'Public Joint Stock Company'),
(5, 'Private Joint Stock Company'),
(6, 'Limited Liability Company'),
(7, 'Partnership Limited by Shares');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(64) NOT NULL COMMENT 'ISO 3166-1 official English short name (Gazetteer order, w/o diacritics)',
  PRIMARY KEY (`country_id`),
  KEY `name` (`country_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=250 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'Afghanistan'),
(2, 'Aland Islands'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'American Samoa'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctica'),
(10, 'Antigua and Barbuda'),
(11, 'Argentina'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Bahamas'),
(18, 'Bahrain'),
(19, 'Bangladesh'),
(20, 'Barbados'),
(21, 'Belarus'),
(22, 'Belgium'),
(23, 'Belize'),
(24, 'Benin'),
(25, 'Bermuda'),
(26, 'Bhutan'),
(27, 'Bolivia, Plurinational State of'),
(28, 'Bonaire, Sint Eustatius and Saba'),
(29, 'Bosnia and Herzegovina'),
(30, 'Botswana'),
(31, 'Bouvet Island'),
(32, 'Brazil'),
(33, 'British Indian Ocean Territory'),
(34, 'Brunei Darussalam'),
(35, 'Bulgaria'),
(36, 'Burkina Faso'),
(37, 'Burundi'),
(38, 'Cambodia'),
(39, 'Cameroon'),
(40, 'Canada'),
(41, 'Cape Verde'),
(42, 'Cayman Islands'),
(43, 'Central African Republic'),
(44, 'Chad'),
(45, 'Chile'),
(46, 'China'),
(47, 'Christmas Island'),
(48, 'Cocos (Keeling) Islands'),
(49, 'Colombia'),
(50, 'Comoros'),
(51, 'Congo'),
(52, 'Congo, The Democratic Republic of the'),
(53, 'Cook Islands'),
(54, 'Costa Rica'),
(55, 'Cote d''Ivoire'),
(56, 'Croatia'),
(57, 'Cuba'),
(58, 'Curacao'),
(59, 'Cyprus'),
(60, 'Czech Republic'),
(61, 'Denmark'),
(62, 'Djibouti'),
(63, 'Dominica'),
(64, 'Dominican Republic'),
(65, 'Ecuador'),
(66, 'Egypt'),
(67, 'El Salvador'),
(68, 'Equatorial Guinea'),
(69, 'Eritrea'),
(70, 'Estonia'),
(71, 'Ethiopia'),
(72, 'Falkland Islands (Malvinas)'),
(73, 'Faroe Islands'),
(74, 'Fiji'),
(75, 'Finland'),
(76, 'France'),
(77, 'French Guiana'),
(78, 'French Polynesia'),
(79, 'French Southern Territories'),
(80, 'Gabon'),
(81, 'Gambia'),
(82, 'Georgia'),
(83, 'Germany'),
(84, 'Ghana'),
(85, 'Gibraltar'),
(86, 'Greece'),
(87, 'Greenland'),
(88, 'Grenada'),
(89, 'Guadeloupe'),
(90, 'Guam'),
(91, 'Guatemala'),
(92, 'Guernsey'),
(93, 'Guinea'),
(94, 'Guinea-Bissau'),
(95, 'Guyana'),
(96, 'Haiti'),
(97, 'Heard Island and McDonald Islands'),
(98, 'Holy See (Vatican City State)'),
(99, 'Honduras'),
(100, 'Hong Kong'),
(101, 'Hungary'),
(102, 'Iceland'),
(103, 'India'),
(104, 'Indonesia'),
(105, 'Iran, Islamic Republic of'),
(106, 'Iraq'),
(107, 'Ireland'),
(108, 'Isle of Man'),
(109, 'Israel'),
(110, 'Italy'),
(111, 'Jamaica'),
(112, 'Japan'),
(113, 'Jersey'),
(114, 'Jordan'),
(115, 'Kazakhstan'),
(116, 'Kenya'),
(117, 'Kiribati'),
(118, 'Korea, Democratic People''s Republic of'),
(119, 'Korea, Republic of'),
(120, 'Kuwait'),
(121, 'Kyrgyzstan'),
(122, 'Lao People''s Democratic Republic'),
(123, 'Latvia'),
(124, 'Lebanon'),
(125, 'Lesotho'),
(126, 'Liberia'),
(127, 'Libyan Arab Jamahiriya'),
(128, 'Liechtenstein'),
(129, 'Lithuania'),
(130, 'Luxembourg'),
(131, 'Macao'),
(132, 'Macedonia, The Former Yugoslav Republic of'),
(133, 'Madagascar'),
(134, 'Malawi'),
(135, 'Malaysia'),
(136, 'Maldives'),
(137, 'Mali'),
(138, 'Malta'),
(139, 'Marshall Islands'),
(140, 'Martinique'),
(141, 'Mauritania'),
(142, 'Mauritius'),
(143, 'Mayotte'),
(144, 'Mexico'),
(145, 'Micronesia, Federated States of'),
(146, 'Moldova, Republic of'),
(147, 'Monaco'),
(148, 'Mongolia'),
(149, 'Montenegro'),
(150, 'Montserrat'),
(151, 'Morocco'),
(152, 'Mozambique'),
(153, 'Myanmar'),
(154, 'Namibia'),
(155, 'Nauru'),
(156, 'Nepal'),
(157, 'Netherlands'),
(158, 'New Caledonia'),
(159, 'New Zealand'),
(160, 'Nicaragua'),
(161, 'Niger'),
(162, 'Nigeria'),
(163, 'Niue'),
(164, 'Norfolk Island'),
(165, 'Northern Mariana Islands'),
(166, 'Norway'),
(167, 'Occupied Palestinian Territory'),
(168, 'Oman'),
(169, 'Pakistan'),
(170, 'Palau'),
(171, 'Panama'),
(172, 'Papua New Guinea'),
(173, 'Paraguay'),
(174, 'Peru'),
(175, 'Philippines'),
(176, 'Pitcairn'),
(177, 'Poland'),
(178, 'Portugal'),
(179, 'Puerto Rico'),
(180, 'Qatar'),
(181, 'Reunion'),
(182, 'Romania'),
(183, 'Russian Federation'),
(184, 'Rwanda'),
(185, 'Saint Barthelemy'),
(186, 'Saint Helena, Ascension and Tristan da Cunha'),
(187, 'Saint Kitts and Nevis'),
(188, 'Saint Lucia'),
(189, 'Saint Martin (French part)'),
(190, 'Saint Pierre and Miquelon'),
(191, 'Saint Vincent and The Grenadines'),
(192, 'Samoa'),
(193, 'San Marino'),
(194, 'Sao Tome and Principe'),
(195, 'Saudi Arabia'),
(196, 'Senegal'),
(197, 'Serbia'),
(198, 'Seychelles'),
(199, 'Sierra Leone'),
(200, 'Singapore'),
(201, 'Sint Maarten (Dutch part)'),
(202, 'Slovakia'),
(203, 'Slovenia'),
(204, 'Solomon Islands'),
(205, 'Somalia'),
(206, 'South Africa'),
(207, 'South Georgia and the South Sandwich Islands'),
(208, 'South Sudan'),
(209, 'Spain'),
(210, 'Sri Lanka'),
(211, 'Sudan'),
(212, 'Suriname'),
(213, 'Svalbard and Jan Mayen'),
(214, 'Swaziland'),
(215, 'Sweden'),
(216, 'Switzerland'),
(217, 'Syrian Arab Republic'),
(218, 'Taiwan, Province of China'),
(219, 'Tajikistan'),
(220, 'Tanzania, United Republic of'),
(221, 'Thailand'),
(222, 'Timor-Leste'),
(223, 'Togo'),
(224, 'Tokelau'),
(225, 'Tonga'),
(226, 'Trinidad and Tobago'),
(227, 'Tunisia'),
(228, 'Turkey'),
(229, 'Turkmenistan'),
(230, 'Turks and Caicos Islands'),
(231, 'Tuvalu'),
(232, 'Uganda'),
(233, 'Ukraine'),
(234, 'United Arab Emirates'),
(235, 'United Kingdom'),
(236, 'United States'),
(237, 'United States Minor Outlying Islands'),
(238, 'Uruguay'),
(239, 'Uzbekistan'),
(240, 'Vanuatu'),
(241, 'Venezuela, Bolivarian Republic of'),
(242, 'Viet Nam'),
(243, 'Virgin Islands, British'),
(244, 'Virgin Islands, U.S.'),
(245, 'Wallis and Futuna'),
(246, 'Western Sahara'),
(247, 'Yemen'),
(248, 'Zambia'),
(249, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `cv_id` int(6) NOT NULL AUTO_INCREMENT,
  `js_id` int(6) NOT NULL,
  `cv_name` varchar(200) NOT NULL,
  `cv_original_name` varchar(255) NOT NULL,
  `cv_location` varchar(255) NOT NULL,
  PRIMARY KEY (`cv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`cv_id`, `js_id`, `cv_name`, `cv_original_name`, `cv_location`) VALUES
(1, 1, '05 - 01 - 15-1420414728.JPG', 'irfan bosan.JPG', 'cv/05 - 01 - 15-1420414728.JPG'),
(2, 5, '07 - 01 - 15-1420587344.docx', 'New Microsoft Word Document.docx', 'cv/07 - 01 - 15-1420587344.docx');

-- --------------------------------------------------------

--
-- Table structure for table `degree_level`
--

CREATE TABLE IF NOT EXISTS `degree_level` (
  `degree_id` int(11) NOT NULL AUTO_INCREMENT,
  `degree_name` varchar(255) NOT NULL,
  PRIMARY KEY (`degree_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `degree_level`
--

INSERT INTO `degree_level` (`degree_id`, `degree_name`) VALUES
(1, 'A-Level/Intermediate'),
(2, 'ACCA'),
(3, 'Bachelor of Accounting &amp; Finance'),
(4, 'Bachelor of Agriculture (BSc Agriculture)'),
(5, 'Bachelor of Business Administration (BBA)'),
(6, 'Bachelor of Commerce (B Com)'),
(7, 'Bachelor of Computer Science (BCS)'),
(8, 'Bachelor of Environmental Sciences'),
(9, 'Bachelor of Fine Arts (BFA)'),
(10, 'Bachelor of Forestry'),
(11, 'Bachelor of Hotel Management'),
(12, 'Bachelor of Humanities'),
(13, 'Bachelor of Information Technology'),
(14, 'Bachelor of Mass Communication'),
(15, 'Bachelor of Music'),
(16, 'Bachelor of Pharmacy (B Pharm)'),
(17, 'Bachelor of Psychology'),
(18, 'Bachelor of Sociology'),
(19, 'Bachelor of Statistics'),
(20, 'Bachelor of Technology (B Tech)'),
(21, 'Bachelor of Veterinary Science'),
(22, 'Bachelors'),
(23, 'BS Engg'),
(24, 'BS Engg - Bachelor of Chemical Engineering'),
(25, 'BS Engg - Bachelor of Civil Engineering'),
(26, 'BS Engg - Bachelor of Computer Engineering'),
(27, 'BS Engg - Bachelor of Electrical Engineering'),
(28, 'BS Engg - Bachelor of Industrial &amp; Manufacturing Engineering'),
(29, 'BS Engg - Bachelor of Industrial Engineering'),
(30, 'BS Engg - Bachelor of Material Engineering'),
(31, 'BS Engg - Bachelor of Mechanical Engineering'),
(32, 'BS Engg - Bachelor of Metallurgy Engineering'),
(33, 'BS Engg - Bachelor of Petrochemical Engineering'),
(34, 'BS Engg - Bachelor of Polymer Engineering'),
(35, 'BS Engg - Bachelor of Telecommunication Engineering'),
(36, 'BS Engg - Bachelor of Textile Engineering'),
(37, 'Chartered Accountant (CA)'),
(38, 'CMA - Cost &amp; Management Accountant'),
(39, 'D Sc - Doctor of Science'),
(40, 'D.Pharmacy'),
(41, 'DAE - Diploma of Associate Engineer'),
(42, 'Diploma'),
(43, 'Diploma in AutoCad'),
(44, 'DVM / M. Phil'),
(45, 'FCPS/ MCPS'),
(46, 'FRCS'),
(47, 'LHD'),
(48, 'LLB'),
(49, 'LLD'),
(50, 'LLM'),
(51, 'M Engg - Master of Computer Engineering'),
(52, 'M Engg - Master of Engineering'),
(53, 'M Phil'),
(54, 'M Phil / M.Sc / M.A English / M.A Education / M.A ELM / EPM / M.B.A with B.Ed or /M.Ed.'),
(55, 'M.Sc'),
(56, 'M.Sc / M.A Education / MS TQM / Mechanical Engineer '),
(57, 'M.Sc / M.A English / M.A Education / M.A ELM / EPM / M.B.A with B.Ed or /M.Ed.'),
(58, 'M.Sc / M.A Social Sciences / M.A English / M.A Education / M.A ELM / EPM with B.Ed /M.Ed.'),
(59, 'M.Sc / Physics / Chemistry /Biology / Math / M.A English / M.A Urdu / M.A Islamiat / M.A Social Studies.'),
(60, 'MA in English'),
(61, 'Master of Agriculture (M Sc Agriculture)'),
(62, 'Master of Architecture'),
(63, 'Master of Business Administration (MBA)'),
(64, 'Master of Business Administration (MBA-HR)'),
(65, 'Master of Business Administration (MBA-Marketing)'),
(66, 'Master of Commerce (M Com)'),
(67, 'Master of Comptuer Science (MCS)'),
(68, 'Master of Development Studies'),
(69, 'Master of Environmental Sciences'),
(70, 'Master of Fine Arts'),
(71, 'Master of Information Technology (MIT)'),
(72, 'Master of Management Sciences'),
(73, 'Master of Mass Communication'),
(74, 'Master of Social Science'),
(75, 'Master of Sociology'),
(76, 'Masters'),
(77, 'Masters  of Electronics'),
(78, 'Masters (MA)'),
(79, 'Masters (MSc)'),
(80, 'Matriculation/O-Level'),
(81, 'MBBS'),
(82, 'Middle'),
(83, 'MPA - Master of Public Administration'),
(84, 'Nursing'),
(85, 'Others'),
(86, 'PhD - Doctor of Philosophy');

-- --------------------------------------------------------

--
-- Table structure for table `driving_license`
--

CREATE TABLE IF NOT EXISTS `driving_license` (
  `driving_lic_id` int(6) NOT NULL AUTO_INCREMENT,
  `driving_lic_type` varchar(100) NOT NULL,
  PRIMARY KEY (`driving_lic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `driving_license`
--

INSERT INTO `driving_license` (`driving_lic_id`, `driving_lic_type`) VALUES
(1, 'UAE'),
(2, 'GCC'),
(3, 'Transferable'),
(4, 'No License'),
(5, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `employer_registration`
--

CREATE TABLE IF NOT EXISTS `employer_registration` (
  `employer_id` int(6) NOT NULL AUTO_INCREMENT,
  `employer_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `e_email` varchar(50) NOT NULL,
  `e_tel` varchar(15) NOT NULL,
  `e_url` varchar(100) NOT NULL,
  `e_city` varchar(40) NOT NULL,
  `e_address` varchar(100) NOT NULL,
  `e_profile` varchar(1000) NOT NULL,
  `e_office_locatin` varchar(200) NOT NULL,
  `e_contact_mobile` varchar(15) NOT NULL,
  PRIMARY KEY (`employer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `employer_registration`
--

INSERT INTO `employer_registration` (`employer_id`, `employer_name`, `password`, `e_email`, `e_tel`, `e_url`, `e_city`, `e_address`, `e_profile`, `e_office_locatin`, `e_contact_mobile`) VALUES
(2, 'amer khan baloch', 'amerk', 'amerk@yahoo.com', '0097155939478', 'http://www.google.com', '2', 'multan', 'fghdfhd bdfhdfj', 'dubai', '00971559394780'),
(3, 'inam construction company', 'inamk', 'inam@yahoo.com', '03017788788', 'http://www.bzu.com', '2', 'dfh', 'fh', 'fh', '2323'),
(4, 'tahir', 'younis', 'tahir@yahoo.com', '0097155939478', 'http://www.google.com', '1', 'y', 'fj', 'multan', '12345698');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `experience_id` int(6) NOT NULL AUTO_INCREMENT,
  `experience_name` varchar(200) NOT NULL,
  PRIMARY KEY (`experience_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`experience_id`, `experience_name`) VALUES
(1, 'Fresher'),
(2, '1 Year'),
(3, '2 Years'),
(4, '3 Years'),
(5, '4 Years'),
(6, '5 Years'),
(7, '6 Years'),
(8, '7 Years'),
(9, '8 Years'),
(10, '9 Years'),
(11, '10 Years'),
(12, '11 Years'),
(13, '12 Years'),
(14, '13 Years'),
(15, '14 Years'),
(16, '15 Years'),
(17, '16 Years'),
(18, '17 Years'),
(19, '18 Years'),
(20, '19 Years'),
(21, '20 Years'),
(22, '21 Years'),
(23, '22 Years'),
(24, '23 Years'),
(25, '24 Years'),
(26, '25 Years'),
(27, '26 Years'),
(28, '27 Years'),
(29, '28 Years'),
(30, '29 Years'),
(31, '30 Years');

-- --------------------------------------------------------

--
-- Table structure for table `highest_academic_achievement`
--

CREATE TABLE IF NOT EXISTS `highest_academic_achievement` (
  `degree_id` int(6) NOT NULL AUTO_INCREMENT,
  `degree_name` varchar(100) NOT NULL,
  PRIMARY KEY (`degree_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `highest_academic_achievement`
--

INSERT INTO `highest_academic_achievement` (`degree_id`, `degree_name`) VALUES
(1, 'high_school/secondry'),
(2, 'bachelors_degree'),
(3, 'masters_degree'),
(4, 'm_phil'),
(5, 'phd'),
(6, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `industry`
--

CREATE TABLE IF NOT EXISTS `industry` (
  `industry_id` int(6) NOT NULL AUTO_INCREMENT,
  `industry_name` varchar(200) NOT NULL,
  PRIMARY KEY (`industry_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `industry`
--

INSERT INTO `industry` (`industry_id`, `industry_name`) VALUES
(1, 'Accounting / Finance'),
(2, 'Advertising / Public Relations'),
(3, 'Arts / Entertainmen'),
(4, 'Banking'),
(5, 'Beauty and Fashion'),
(6, 'Clerical / Administrative'),
(7, 'Construction / Facilities'),
(8, 'Customer Service'),
(9, 'Education / Training / Teachings'),
(10, 'Electrician'),
(11, 'Engineering/Architecture'),
(12, 'Labour Services'),
(13, 'Management'),
(14, 'Marketing/Internet'),
(15, 'Oil and Petroleum'),
(16, 'others'),
(17, 'Resturant/Food Services'),
(18, 'Sales'),
(19, 'Transportation'),
(20, 'Web Developers');

-- --------------------------------------------------------

--
-- Table structure for table `job_role`
--

CREATE TABLE IF NOT EXISTS `job_role` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_role`
--

INSERT INTO `job_role` (`job_id`, `job_name`) VALUES
(1, 'Accounting'),
(2, 'Accounts/Tax/CS/Audit'),
(3, 'Administration'),
(4, 'Advertising'),
(5, 'Advertising / Media'),
(6, 'Agriculture'),
(7, 'Architecture'),
(8, 'Audit'),
(9, 'Automotive'),
(10, 'Banking'),
(11, 'Banking/Financial Services'),
(12, 'BPO'),
(13, 'Broadcast, film and interactive media'),
(14, 'Business Development'),
(15, 'Call Center'),
(16, 'Chemicals'),
(17, 'Chemicals/Petrochemicals'),
(18, 'Clerical/Administration'),
(19, 'Client Services'),
(20, 'Computers/Electronics'),
(21, 'Construction'),
(22, 'Construction / Cement / Metals'),
(23, 'Construction/Civil Engg'),
(24, 'Construction/Maintenance'),
(25, 'Consultant'),
(26, 'Corporate Affairs'),
(27, 'Courier/Logistics'),
(28, 'Creative Arts'),
(29, 'Customer Support'),
(30, 'Design &amp; Graphics'),
(31, 'Distribution &amp; Logistics'),
(32, 'Drama and Entertainment'),
(33, 'Dry Cleaning'),
(34, 'Education'),
(35, 'Engineering'),
(36, 'Engineering and Architecture'),
(37, 'Equipment operator/Inspector'),
(38, 'Fashion'),
(39, 'Fast Moving Consumer Goods (FMCG)'),
(40, 'Finance'),
(41, 'Food'),
(42, 'Government'),
(43, 'Government Jobs'),
(44, 'Graphics Designer'),
(45, 'H.R/Education and Training'),
(46, 'Hardware'),
(47, 'Health &amp; Medicine'),
(48, 'Healthcare/Medical'),
(49, 'Hospitality and Tourism'),
(50, 'Hospitality/Tourism'),
(51, 'Hotel / Restaurant Management'),
(52, 'Hotels/Restaurants'),
(53, 'Household'),
(54, 'Human resources and recruitment'),
(55, 'Import &amp; Export'),
(56, 'Information Technologies (IT) / Software'),
(57, 'Information Technology'),
(58, 'Insurance'),
(59, 'ISP'),
(60, 'Law Enforcement'),
(61, 'Legal Services'),
(62, 'Livestock / Poultry '),
(63, 'Logistics / Freight Forwarding'),
(64, 'Management Consulting'),
(65, 'Manufacturing'),
(66, 'Marketing'),
(67, 'Marketing/Sales'),
(68, 'N.G.O./Social Services'),
(69, 'Oil, Gas and Petroleum'),
(70, 'Other'),
(71, 'Overseas Employment'),
(72, 'Petroleum/Oil and Gas'),
(73, 'Pharmaceuticals'),
(74, 'Pharmaceuticals/Clinical Research'),
(75, 'Planning &amp; Development'),
(76, 'Procurement &amp; Supply Chain'),
(77, 'Production'),
(78, 'Production/Manufacturing'),
(79, 'Property &amp; Real Estate'),
(80, 'Public Relations'),
(81, 'Publishing'),
(82, 'Publishing/Printing'),
(83, 'Purchase/Logistics'),
(84, 'Recruitment/Employment Firms'),
(85, 'Repair &amp; Maintenance'),
(86, 'Research'),
(87, 'Retail'),
(88, 'Retailing'),
(89, 'Sales'),
(90, 'Science'),
(91, 'Secretary/Front Office'),
(92, 'Security'),
(93, 'Services'),
(94, 'Social care'),
(95, 'Software'),
(96, 'Software Development'),
(97, 'Sports'),
(98, 'Takafu'),
(99, 'Taxation'),
(100, 'Teaching'),
(101, 'Telecom/Communication'),
(102, 'Telecommunication'),
(103, 'Telemarketing'),
(104, 'Textiles'),
(105, 'Training'),
(106, 'Transport and logistics'),
(107, 'Travel / Airlines'),
(108, 'Web Development');

-- --------------------------------------------------------

--
-- Table structure for table `j_s_reg`
--

CREATE TABLE IF NOT EXISTS `j_s_reg` (
  `js_id` int(6) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `birth_day` date NOT NULL,
  `marital_status` varchar(50) NOT NULL,
  `visa_type` varchar(100) NOT NULL,
  `driving_license` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `h_academic` varchar(200) NOT NULL,
  `picture` varchar(500) NOT NULL,
  PRIMARY KEY (`js_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `j_s_reg`
--

INSERT INTO `j_s_reg` (`js_id`, `email`, `password`, `first_name`, `last_name`, `mobile_no`, `gender`, `birth_day`, `marital_status`, `visa_type`, `driving_license`, `country`, `religion`, `h_academic`, `picture`) VALUES
(1, 'inam@yahoo.com', 'inamk', 'inam', 'khan', '12345678', 'Male', '1989-08-01', '1', '1', '1', '14', '18', '2', '3630202272639.jpg'),
(2, 'asim_mcs40@yahoo.com', 'asimk', 'ASIM', 'khan', '0301746949', 'Male', '1989-01-08', '1', '2', '1', '17', '15', '1', '3630202272639.jpg'),
(3, 'traza666@gmail.com', 'tariq', 'tariq', 'raza', '0301778878', 'Male', '1989-12-28', '1', '1', '1', '15', '17', '1', 'tariq pic.jpg'),
(4, 'zameer@gmail.com', 'zameer', 'zameer', 'sandeelo', '03007009214', 'Male', '1992-12-31', '1', '11', '1', '169', '1', '1', 'asim pic.jpg'),
(5, 'amerk@yahoo.com', 'amerk', 'amer', 'khan', '0301746949', 'Male', '1992-12-31', '1', '10', '1', '18', '18', '1', 'tariq pic.jpg'),
(6, 'ehsan@yahoo.com', 'ehsan', 'ehsan', 'khan baloch', '03007009214', 'Male', '1950-12-31', '1', '2', '2', '18', '17', '2', 'MDS06664 - Copy.jpg'),
(7, 'shahid@gmail.com', 'shahid', 'shahid', 'meo', '0301749719', 'Male', '1991-12-31', '1', '1', '1', '4', '1', '1', 'tariq id.jpg'),
(8, 'razia@gmail.com', 'razia', 'ASIM', 'khan', '12345678', 'Male', '1991-12-31', '1', '1', '1', '6', '16', '1', 'tariq id.jpg'),
(9, 'sohrab@gmail.com', 'sohrab', 'sohrab', 'khan', '0301778878', 'Male', '1951-12-01', '1', '1', '1', '9', '14', '1', 'asim id.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `marital_status`
--

CREATE TABLE IF NOT EXISTS `marital_status` (
  `marital_s_id` int(6) NOT NULL AUTO_INCREMENT,
  `marital_s_name` varchar(100) NOT NULL,
  PRIMARY KEY (`marital_s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `marital_status`
--

INSERT INTO `marital_status` (`marital_s_id`, `marital_s_name`) VALUES
(1, 'Single'),
(2, 'Married'),
(3, 'Divorced'),
(4, 'Widow(er)'),
(5, 'Separated');

-- --------------------------------------------------------

--
-- Table structure for table `post_job`
--

CREATE TABLE IF NOT EXISTS `post_job` (
  `job_id` int(6) NOT NULL AUTO_INCREMENT,
  `employer_id` int(6) NOT NULL,
  `company_name` varchar(200) NOT NULL,
  `company_type` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `industry` varchar(150) NOT NULL,
  `job_role` varchar(200) NOT NULL,
  `vacancies` varchar(200) NOT NULL,
  `job_description` varchar(200) NOT NULL,
  `salary_method` varchar(400) NOT NULL,
  `salary_range` varchar(100) NOT NULL,
  `gander` varchar(50) NOT NULL,
  `age_limit` varchar(50) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `expiry_date` date NOT NULL,
  `career_level` varchar(100) NOT NULL,
  `commitment` varchar(100) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `post_job`
--

INSERT INTO `post_job` (`job_id`, `employer_id`, `company_name`, `company_type`, `city`, `industry`, `job_role`, `vacancies`, `job_description`, `salary_method`, `salary_range`, `gander`, `age_limit`, `experience`, `expiry_date`, `career_level`, `commitment`) VALUES
(1, 1, 'iqbal', 'General Partnership', '1', '1', '1', '20', 'gfnf', 'Per Year', '1200-2000', ' Does not Matter', '19-18', '2', '2014-01-01', '1', 'Full Time'),
(2, 1, 'alhamra tours', 'General Partnership', '1', '1', '2', '20', 'dfg', 'Per Month', '1200-500000', 'Male', '19-19', '2', '2014-01-17', '1', 'Full Time'),
(3, 1, 'alhamra tours', 'Public Joint Stock Company', '3', '9', '11', '20', 'rhye', 'Per Month', '1200-500000', 'Female', '32-34', '15', '2015-11-14', '1', 'Part Time'),
(4, 1, 'alhamra tours', 'Joint Participation', '1', '8', '5', '20', 'asf', 'Per Month', '1200-500000', ' Does not Matter', '30-28', '1', '2014-01-15', '1', 'Full Time'),
(5, 1, 'alhamra tours', 'Joint Participation', '2', '4', '5', '20', 'xcb', 'Per Month', '1200-500000', ' Does not Matter', '20-19', '3', '2014-02-14', '1', 'Part Time'),
(7, 1, '', '0', '', '', '', '', '', '0', '-', '0', '-', '', '0000-00-00', '', '0'),
(8, 1, '', '0', '', '', '', '', '', '0', '-', '0', '-', '', '0000-00-00', '', '0'),
(9, 1, '', '0', '', '', '', '', '', '0', '-', '0', '-', '', '0000-00-00', '', '0'),
(10, 1, '', '0', '', '', '', '', '', '0', '-', '0', '-', '', '0000-00-00', '', '0'),
(11, 3, 'alhamra tours', '2', '1', '2', '2', '20', 'hrh', 'Per Month', '1200-500000', ' Does not Matter', '34-33', '3', '2015-01-02', '1', 'Full Time'),
(12, 3, 'alhamra tours', '1', '2', '15', '15', '20', 'ty', 'Per Month', '1200-500000', ' Does not Matter', '18-19', '1', '2014-02-01', '2', 'Full Time'),
(13, 3, 'alhamra tours', '1', '1', '8', '10', '100', 'fd', 'Per Month', '1200-500000', ' Does not Matter', '18-19', '2', '2014-01-01', '1', 'Full Time');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE IF NOT EXISTS `religion` (
  `religion_id` int(6) NOT NULL AUTO_INCREMENT,
  `religion_name` varchar(100) NOT NULL,
  PRIMARY KEY (`religion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`religion_id`, `religion_name`) VALUES
(1, 'Islam'),
(2, 'Christianity'),
(3, 'Hinduism'),
(4, 'Atheism'),
(5, 'Bahai'),
(6, 'Budhhism'),
(7, 'Candomble'),
(8, 'Druz'),
(9, 'Jainism'),
(10, 'Judaism'),
(11, 'Mormon'),
(12, 'Paganism'),
(13, 'Rastafari'),
(14, 'Santeria'),
(15, 'Shinto'),
(16, 'Sikhism'),
(17, 'Taoism'),
(18, 'Unitarianism'),
(19, 'Zoroastrianism');

-- --------------------------------------------------------

--
-- Table structure for table `visa_type`
--

CREATE TABLE IF NOT EXISTS `visa_type` (
  `visa_type_id` int(6) NOT NULL AUTO_INCREMENT,
  `visa_type_name` varchar(100) NOT NULL,
  PRIMARY KEY (`visa_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `visa_type`
--

INSERT INTO `visa_type` (`visa_type_id`, `visa_type_name`) VALUES
(1, 'Visit'),
(2, 'Residence - Company'),
(3, 'Residence - Husband'),
(4, 'Residence - Father'),
(5, 'Residence - Wife'),
(6, 'Residence - Mother'),
(7, 'UAE National'),
(8, 'GCC National'),
(9, 'Transit'),
(10, 'Tourist'),
(11, 'Other');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

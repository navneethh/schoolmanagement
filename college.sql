-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2015 at 11:17 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `acadamics`
--

CREATE TABLE IF NOT EXISTS `acadamics` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `adescription` text NOT NULL,
  `aname` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `acadamics`
--

INSERT INTO `acadamics` (`aid`, `adescription`, `aname`) VALUES
(1, 'F.Sc - Pre-Medical \r\n\r\nSubjects:\r\n	English\r\n	Biology\r\n	Chemistry\r\n	Physics ', 'FSC( Pre Medical) 2 Years'),
(2, '\r\nF.Sc - Pre-Engineering    \r\n\r\nSubjects:\r\n	English\r\n	Mathematics\r\n	Chemistry\r\n	Physics ', 'FSC (Pre Engineering) 2 Years'),
(3, '\r\nF.Sc - Computer Science \r\n\r\nSubjects:\r\n	English\r\n	Mathematics\r\n	Computer Sciences\r\n	Physics ', 'FSC (Computer Science) 2 Years'),
(4, 'F.A General Science \r\n\r\nSubjects:\r\n \r\nEnglish\r\nComputer Sciences\r\nMaths\r\nStatistics\r\n', 'FA (General Science) 2 Years');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `aname` text NOT NULL,
  `adetails` text NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`aid`, `aname`, `adetails`) VALUES
(22, 'Social Activities', 'To promote social concepts and moral values in practical life, Science Society, Literary Society, Iqra Society, Editorial Board for the College magazine, etc. are functioning which prepare the students for English speeches, quiz-competitions, science fairs and other related activities.'),
(23, 'Sports Activities', '	To enhance the mental and physical potentials of students, an open area is reserved for a number of in-door and out-door games. The physical education instructor coaches and trains the students for inter-Class and inter-Colleges tournaments during the regular game-periods as per the timetable. The College provides facilities for playing cricket, hockey, foot-ball, net-ball, volley-ball, basket-ball, badminton, table-tennis and athletics.'),
(24, 'Tours', '	To enrich the observations and experiences of students about practical life, every year domestic and international study / recreational tours are arranged under the supervision of senior faculty members.'),
(25, 'Blood Donation ', 'The Purpose of this page is to grow community of blood donors and let people help giving Blood in donations\r\nit would be a great help of those needy person time to time whom you will donate blood by you will.\r\n"Save LIFE "\r\nAllah keep every one healthy n wealthy (Ameen)');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(20) NOT NULL DEFAULT '',
  `pass` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `albumpics`
--

CREATE TABLE IF NOT EXISTS `albumpics` (
  `pic` text NOT NULL,
  `name` text NOT NULL,
  `picid` int(11) NOT NULL AUTO_INCREMENT,
  `albumid` int(11) NOT NULL,
  PRIMARY KEY (`picid`,`albumid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `albumpics`
--

INSERT INTO `albumpics` (`pic`, `name`, `picid`, `albumid`) VALUES
('Sadia Mansoor30.jpg', 'Pooja (Computer)', 15, 4),
('images6.jpeg', 'Suraj (Engineering)', 16, 4),
('images26.jpeg', 'Rekha (Computer)', 14, 4),
('images21.jpeg', 'Deepa (English)', 17, 4),
('images17.jpeg', 'Dinesh (Biology)', 27, 4),
('image.jpeg', 'Deepa(Computer)', 38, 4),
('sliderimg1.PNG', 'Park 2', 47, 9),
('sliderimg3.png', 'River', 46, 9),
('sliderimg2.png', 'Park', 45, 9),
('jaipur (1).jpg', 'jaipur', 44, 9);

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `albumid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `desc` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`albumid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`albumid`, `name`, `desc`) VALUES
(4, 'Toppers', 'All Toppers of College'),
(9, 'Tour', 'All tourist Images');

-- --------------------------------------------------------

--
-- Table structure for table `disciplines`
--

CREATE TABLE IF NOT EXISTS `disciplines` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `disciplines`
--

INSERT INTO `disciplines` (`fid`, `fname`) VALUES
(3, 'Psychology'),
(5, 'English and Literature'),
(6, 'Computer Science'),
(7, 'Mathematics'),
(8, 'Statistics'),
(9, 'Bio Informatics'),
(10, 'Micro Biology');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE IF NOT EXISTS `facilities` (
  `facid` int(11) NOT NULL AUTO_INCREMENT,
  `facname` varchar(50) NOT NULL DEFAULT '',
  `facdescription` text NOT NULL,
  `pic` text NOT NULL,
  PRIMARY KEY (`facid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`facid`, `facname`, `facdescription`, `pic`) VALUES
(26, 'Building', 'Indo Global College operates in a purpose-built building having spacious and well-ventilated classrooms. An auditorium with a reasonable seating-capacity is available for variety of functions and other activities of the college.', 'images.jpeg'),
(27, 'Laboratories', 'Indo Global College has separate laboratories for Physics, Chemistry and Biology which are \r\nwell-equipped for performing Practicals and Demonstrations. It has a full-fledged Computer Laboratory too, with latest computers and related accessories which not only facilitates the students in carrying out the curricular obligations, but helps them in acquainting with the latest computer technology. Free internet facility is available to the students during working days.\r\n', 'images8.jpg'),
(28, 'Indo Global Library', 'Indo Global has a library which has variety of books on different subjects to enrich the knowledge of students. It has regular subscription of standard English and Urdu newspapers and journals. It also has a collection of standard English-novels? videos related to the syllabus, for students to watch, which are arranged by the respective teachers.', 'Aly Ahmed29.jpg'),
(29, 'Transport', 'Indo Global has a fleet of buses for the students and the faculty which covers almost all the  parts of Mardan i.e. City, Cantonment etc.', 'images4.jpg'),
(30, 'Cafeteria', 'Indo Global has a cafeteria which caters to the needs of the students with light refreshments. ', 'images3.jpg'),
(31, 'Dispensery', '	A dispensary with a qualified doctor is available for students in case of any emergency.\r\n', 'images2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `facualty`
--

CREATE TABLE IF NOT EXISTS `facualty` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `qualification` varchar(100) NOT NULL DEFAULT '',
  `contact` varchar(100) NOT NULL DEFAULT '',
  `pic` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=167 ;

--
-- Dumping data for table `facualty`
--

INSERT INTO `facualty` (`pid`, `fid`, `name`, `qualification`, `contact`, `pic`) VALUES
(123, 10, 'Mr adnan', 'M Phil', '767565463', 'images15.jpeg'),
(124, 2, 'Amjad Kumar', 'MA Hindi', '656666098', 'images18.jpeg'),
(125, 1, 'Raja ', 'BA', '03218976675', 'images7.jpeg'),
(164, 9, 'Karishma Kapoor', 'Bsc', '03439837373', 'images23.jpeg'),
(165, 9, 'Bimlesh Kumari', 'MSC', '03469833737', 'images14.jpeg'),
(166, 0, 'Poonam', 'Msc', '9874563210', 'Urfi Khalid.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `name`, `email`, `desc`) VALUES
(10, 'pooja', 'hanspooja006@gmail.com', 'zdcfdv'),
(11, '', '', ''),
(9, 'pooja', 'hanspooja006@gmail.com', 'hjdsbgf hgaf fegf');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(10) NOT NULL,
  `eng` int(10) NOT NULL,
  `maths` int(10) NOT NULL,
  `chem` int(10) NOT NULL,
  `bio` int(10) NOT NULL,
  `stat` int(10) NOT NULL,
  `phy` int(10) NOT NULL,
  `com` int(10) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`m_id`, `sid`, `eng`, `maths`, `chem`, `bio`, `stat`, `phy`, `com`) VALUES
(5, 33, 78, 56, 78, 45, 45, 46, 87),
(4, 63, 98, 89, 78, 87, 66, 56, 80),
(3, 32, 78, 98, 78, 99, 60, 71, 74),
(6, 65, 85, 98, 97, 86, 87, 78, 99),
(7, 34, 98, 78, 99, 78, 90, 78, 45),
(8, 64, 45, 56, 78, 82, 78, 89, 88),
(9, 66, 78, 78, 89, 77, 45, 98, 99);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `heading` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`nid`, `heading`, `details`, `date`) VALUES
(7, 'Admission Open 2015', 'Indo Global College ADMISSIONS OPEN IN F.Sc (PRE-MEDICAL, PRE-ENGINERING, COMPUTER SCIENCE) FA(GENERAL SCIENCE, HUMANITIES) ', '2015-12-04'),
(8, 'Winter Vacation 2015', 'Winter Vacation will be held from 23th December 2013 to 2nd January 2014', '2015-12-04'),
(6, 'Hiking Club organizes trekking in Bara Gali ', 'Congratulations to the Hiking Club and its faculty adviser, Assoc Prof Javed Hayat, for organizing a trip to the mountains of Bara Gali north of Islamabad on the weekend of Nov 8-10.  About 310 students participated, a remarkable number, and Vice Principal Dr Yar Muhammad, Administrative Officer Shah Mahmood, and Estate Manager Haroon Azam were among the 15 faculty and staff who assisted Mr Javed with the event.  It snowed during the trek, spectacular fireworks were viewed on Saturday evening, and a good time was had by all.  Shabash!  ', '2015-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE IF NOT EXISTS `results` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `sid` int(11) NOT NULL,
  `tmarks` int(11) NOT NULL,
  `omarks` int(11) NOT NULL,
  PRIMARY KEY (`rid`),
  UNIQUE KEY `sid` (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`rid`, `sid`, `tmarks`, `omarks`) VALUES
(1, 10, 103, 54),
(2, 11, 549, 130),
(3, 12, 330, 160),
(4, 13, 440, 203),
(5, 14, 440, 188),
(6, 28, 440, 202),
(7, 29, 440, 193),
(8, 3, 440, 224),
(9, 2, 440, 162),
(10, 15, 440, 169),
(11, 16, 440, 142),
(12, 17, 440, 273),
(13, 21, 440, 107),
(14, 20, 440, 165),
(15, 19, 440, 113),
(16, 18, 440, 171),
(17, 22, 385, 0),
(18, 23, 440, 164),
(19, 24, 440, 144),
(20, 25, 390, 0),
(21, 26, 440, 145),
(22, 27, 440, 204);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `class` int(11) NOT NULL,
  `name` text NOT NULL,
  `shift` text NOT NULL,
  `room_no` text NOT NULL,
  `email` text NOT NULL,
  `skills` text NOT NULL,
  `others` text NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `class`, `name`, `shift`, `room_no`, `email`, `skills`, `others`) VALUES
(3, 2, 'asad', 'Evening', '3', 'aa', 'qq', 'ww'),
(2, 2, 'akmal', 'Evening', '4', 'asss', 'as', 'as'),
(21, 3, 'Khaliq', 'Morning', '19', 'khaliq@yahoo.com', 'nil', 'nil'),
(20, 3, 'Zaman', 'Morning', '18', 'zaman@yahoo.com', 'nil', 'nil'),
(19, 3, 'Hafiz', 'Morning', '16', 'hafiz@yahoo.com', 'nil', 'nil'),
(18, 3, 'Shehzad', 'Morning', '17', 'shehzad2yahoo.com', 'nil', 'nil'),
(11, 1, 'zaidi', 'Morning', '9', 'zaidi@yahoo.com', 'nil', 'nil'),
(12, 1, 'Hassan', 'Morning', '8', 'hassan@yahoo.com', 'nil', 'nil'),
(13, 1, 'Ahmed', 'Morning', '10', 'ahmed@yahoo.com', 'nil', 'nil'),
(14, 1, 'Adeel', 'Morning', '11', 'adeel@yahoo.com', 'nil', 'nil'),
(15, 2, 'asim', 'Morning', '12', 'asim@yahoo.com', 'nil', 'nil'),
(16, 2, 'Mohib', 'Morning', '13', 'mohib@yahoo.com', 'nil', 'nil'),
(17, 2, 'Shafiq', 'Morning', '14', 'shafiq@yahoo.com', 'nil', 'nil'),
(22, 3, 'Hanif', 'Morning', '20', 'hanif@yahoo.com', 'nil', 'nil'),
(23, 4, 'Khuram', 'Morning', '21', 'khuram@yahoo.com', 'nil', 'nil'),
(24, 4, 'Hamza', 'Morning', '22', 'Hamza@yahoo.com', 'nil', 'nil'),
(25, 4, 'Shahab', 'Morning', '23', 'shahab@yahoo.com', 'nil', 'nil'),
(26, 4, 'Bilal', 'Morning', '24', 'bilal@yahoo.com', 'nil', 'nil'),
(32, 2, 'Deepa Devi', 'Morning', '5', 'deepa123@gmail.com', 'Drawing', 'nil'),
(28, 1, 'Jamal', 'Morning', '2', 'jamal@yahoo.com', 'nil', 'nil'),
(29, 1, 'sufyan', 'Morning', '1', 'sufyan.897@gmail.com', 'nil', 'nil'),
(30, 1, 'Dinesh', 'Morning', '3', 'dineshkumar@gmail.com', 'sports', 'Drawing'),
(31, 2, 'Dinesh', 'Morning', '4', 'dineshkumar@gmail.com', 'sports', 'Drawing'),
(33, 3, 'lalit', 'Morning', '3', 'lalitkumar@gmail.com', 'sports', 'nil');

-- --------------------------------------------------------

--
-- Table structure for table `student_admission`
--

CREATE TABLE IF NOT EXISTS `student_admission` (
  `st_id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `st_name` varchar(100) NOT NULL,
  `st_fname` varchar(100) NOT NULL,
  `st_gender` varchar(20) NOT NULL,
  `st_address` text NOT NULL,
  `st_paddress` text NOT NULL,
  `st_contact` varchar(100) NOT NULL,
  `st_religion` varchar(20) NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `student_admission`
--

INSERT INTO `student_admission` (`st_id`, `aid`, `st_name`, `st_fname`, `st_gender`, `st_address`, `st_paddress`, `st_contact`, `st_religion`) VALUES
(66, 3, 'lalit', 'anil', 'Male', 'fbd', 'fbd', '9876543210', 'Hinduism'),
(65, 2, 'Deepa Devi', 'Heera lal', 'Female', 'Shiv Colony', 'Shiv Colony', '9874563210', 'Hinduism'),
(32, 3, 'fahad sheikh', 'sheikh bukhari', 'Male', 'peshawar', 'as above', '03239015678', 'islam'),
(33, 3, 'muhammad usman', 'muhammad afzal', 'Male', 'peshawar', 'as above', '03452781967', 'islam'),
(34, 3, 'amir khan', 'muhammad iqbal', 'Male', 'peshawar', 'as above', '0312679549', 'islam'),
(35, 3, 'sardar hmed ', 'hafeez ', 'Male', 'peshawar', 'as above ', '03237845631', 'islam'),
(36, 4, 'saqib ', 'muhammad hanif', 'Male', 'peshawar', 'as above', '03452878941', 'islam'),
(37, 4, 'anjum ', 'hanif khan', 'Male', 'peshawar', 'as above', '02326718934', 'islam'),
(38, 4, 'tufail ahmed', 'ali ahmed', 'Male', 'peshawar', 'as', '03227851490', 'islam'),
(39, 4, 'nadeem khan', 'jamil khan', 'Male', 'peshawar', 'as above', '03216731893', 'islam'),
(40, 4, 'sohail bukhari', 'ahmed bukhari', 'Male', 'peshawar', 'as above', '03451678932', 'islam'),
(64, 4, 'lashika', 'raj kumar', 'Female', 'FBD', 'as above', '6547893210', 'Hinduism'),
(63, 1, 'Suresh', 'Hari lal', 'Male', 'FBD', 'FBD', '9876543210', 'Hinduism');

-- --------------------------------------------------------

--
-- Table structure for table `studunt_academic`
--

CREATE TABLE IF NOT EXISTS `studunt_academic` (
  `aca_id` int(11) NOT NULL AUTO_INCREMENT,
  `st_id` int(11) NOT NULL,
  `aca_exam` varchar(50) NOT NULL,
  `aca_year` varchar(20) NOT NULL,
  `aca_roll` int(30) NOT NULL,
  `aca_marksobtained` int(11) NOT NULL,
  `aca_totalmarks` int(11) NOT NULL,
  `aca_bise` varchar(50) NOT NULL,
  PRIMARY KEY (`aca_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `studunt_academic`
--

INSERT INTO `studunt_academic` (`aca_id`, `st_id`, `aca_exam`, `aca_year`, `aca_roll`, `aca_marksobtained`, `aca_totalmarks`, `aca_bise`) VALUES
(13, 6, 'metric', '2005', 21323, 855, 1100, 'bannu'),
(14, 7, 'Metric', '2005', 4568, 756, 850, 'peshawar'),
(15, 8, 'Matric', '2010', 6, 782, 1050, 'peshawar'),
(16, 9, 'metric', '2011', 7, 887, 1050, 'peshawar'),
(17, 10, 'metric', '2011', 8, 786, 1100, 'peshawar'),
(18, 11, 'metric', '2010', 9, 895, 1050, 'peshawar'),
(19, 12, 'metric', '2011', 10, 673, 1050, 'peshawar'),
(20, 13, 'metric', '2010', 11, 898, 1100, 'peshawar'),
(21, 14, 'metric', '2012', 12, 876, 1050, 'peshawar'),
(22, 15, 'metric', '2010', 13, 986, 1100, 'peshawar'),
(23, 16, 'metric', '2012', 14, 787, 1100, 'peshawar'),
(24, 17, 'metric', '2011', 14, 876, 1100, 'peshawar'),
(25, 18, 'metric', '2012', 15, 854, 1050, 'peshawar'),
(26, 19, 'metric', '2011', 16, 732, 1050, 'peshawar'),
(27, 20, 'metric', '2011', 17, 889, 1100, 'peshawar'),
(28, 21, 'metric', '2011', 18, 925, 1100, 'peshawar'),
(29, 22, 'metric', '2012', 19, 943, 1050, 'peshawar'),
(30, 23, 'metric', '2011', 20, 756, 1050, 'peshawar'),
(31, 24, 'metric', '2012', 21, 841, 1100, 'peshawar'),
(32, 25, 'metric', '2011', 22, 813, 1050, 'peshawar'),
(33, 26, 'metric', '2012', 23, 923, 1100, 'peshawar'),
(34, 27, 'metric', '2011', 24, 956, 1100, 'peshawar'),
(35, 28, 'metric', '2012', 25, 845, 1050, 'peshawar'),
(36, 29, 'metric', '2011', 26, 869, 1050, 'peshawar'),
(37, 30, 'metric', '2012', 27, 890, 1050, 'peshawar'),
(38, 31, 'metric', '2011', 27, 834, 1100, 'peshawar'),
(39, 32, 'metric', '2011', 28, 935, 1100, 'peshawar'),
(40, 33, 'metric', '2012', 29, 831, 1050, 'peshawar'),
(41, 34, 'metric', '2012', 30, 754, 1050, 'peshawar'),
(42, 35, 'metric', '2011', 31, 721, 1050, 'peshawar'),
(43, 37, 'metric', '2012', 32, 799, 1050, 'peshawar'),
(44, 38, 'metric', '2012', 32, 871, 1050, 'peshawar'),
(45, 39, 'metric', '2011', 33, 764, 1050, 'peshawar'),
(46, 40, 'metric', '2012', 34, 789, 1100, 'peshawar'),
(47, 41, 'metric ', '2011', 35, 894, 1050, 'peshawar'),
(48, 42, 'metric ', '2012', 36, 990, 1100, 'peshawar'),
(49, 43, 'metric', '2011', 37, 897, 1050, 'peshawar'),
(50, 44, 'metric', '2012', 38, 823, 1050, 'peshawar'),
(51, 45, 'metric ', '2011', 39, 951, 1050, 'peshawar'),
(52, 46, 'metric', '2012', 40, 864, 1050, 'peshawar'),
(53, 47, 'metric', '2012', 30, 876, 1050, 'peshawar'),
(54, 48, 'metric', '2012', 35, 897, 1100, 'pesh'),
(55, 49, 'metric', '2012', 33, 765, 1100, 'pesh'),
(56, 50, 'metric', '2012', 36, 888, 1050, 'pesh'),
(57, 51, 'Metric', '2012', 678, 876, 1050, 'Mardan'),
(58, 52, 'Metric', '2012', 5678, 897, 1050, 'Mardan'),
(59, 53, 'Metric', '2012', 7869, 870, 1050, 'Mardan'),
(60, 64, '12th', '2014', 124456, 380, 400, 'HBSE'),
(61, 64, '12th', '2014', 2114315232, 354, 400, 'HBSE'),
(62, 64, '12th', '2014', 2114315232, 200, 400, 'HBSE'),
(66, 65, '12th', '2014', 456, 478, 500, 'HBSE'),
(65, 64, '12th', '2014', 124456, 200, 400, 'HBse'),
(67, 66, '12th', '2014', 789, 390, 400, 'HBSE');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `dmc_id` int(10) NOT NULL AUTO_INCREMENT,
  `r_id` int(10) NOT NULL,
  `eng` float NOT NULL,
  `maths` float NOT NULL,
  `chem` float NOT NULL,
  `bio` float NOT NULL,
  `com` float NOT NULL,
  `phy` float NOT NULL,
  `st` int(10) NOT NULL,
  PRIMARY KEY (`dmc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`dmc_id`, `r_id`, `eng`, `maths`, `chem`, `bio`, `com`, `phy`, `st`) VALUES
(1, 1, 10, 10, 5, 1, 1, 5, 1),
(2, 2, 10, 10, 10, 30, 20, 10, 20),
(3, 3, 12, 32, 12, 12, 10, 30, 30),
(4, 4, 23, 42, 23, 32, 12, 13, 23),
(5, 5, 32, 12, 32, 23, 23, 12, 21),
(6, 6, 23, 23, 12, 12, 23, 21, 23),
(7, 7, 32, 23, 23, 12, 12, 23, 32),
(8, 8, 15, 51, 21, 41, 23, 24, 12),
(9, 9, 13, 12, 12, 23, 12, 42, 12),
(10, 10, 41, 21, 13, 23, 12, 23, 12),
(11, 11, 13, 12, 12, 13, 12, 13, 32),
(12, 12, 11, 51, 15, 51, 13, 41, 23),
(13, 13, 12, 21, 2, 23, 1, 12, 12),
(14, 14, 10, 21, 10, 23, 23, 13, 32),
(15, 15, 13, 12, 10, 12, 12, 13, 21),
(16, 16, 23, 51, 23, 23, 1, 23, 2),
(17, 17, 0, 0, 0, 0, 0, 0, 0),
(18, 18, 12, 51, 10, 2, 12, 12, 32),
(19, 19, 12, 12, 12, 5, 23, 13, 32),
(20, 20, 0, 0, 0, 0, 0, 0, 0),
(21, 21, 23, 21, 10, 12, 1, 30, 2),
(22, 22, 2, 23, 42, 24, 12, 23, 32),
(23, 8, 50, 52, 63, 45, 85, 46, 44),
(24, 8, 50, 52, 63, 45, 85, 46, 44),
(25, 0, 74, 56, 47, 89, 87, 65, 78),
(26, 0, 74, 56, 47, 89, 87, 65, 78),
(27, 0, 74, 56, 47, 89, 87, 65, 78),
(28, 0, 74, 56, 47, 89, 87, 65, 78);

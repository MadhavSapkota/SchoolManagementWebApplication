-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 07:37 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(101) NOT NULL,
  `username` varchar(101) NOT NULL,
  `password` varchar(101) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `assignments_record`
--

CREATE TABLE IF NOT EXISTS `assignments_record` (
  `id` int(55) NOT NULL,
  `module_code` varchar(101) NOT NULL,
  `title` varchar(101) NOT NULL,
  `description` varchar(500) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `file` varchar(5000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments_record`
--

INSERT INTO `assignments_record` (`id`, `module_code`, `title`, `description`, `document_name`, `date`, `file`) VALUES
(12, 'scn20', 'physics week 2', 'quantum physics', 'ass.doc', '2018-03-01', 'sapemp.PNG'),
(13, 'chem', 'organic chemistry', 'week 4 ', 'organic.doc', '2018-04-26', 'NLP.docx'),
(26, 'phy', 'ddd', 'ddd', 'ddd', '2018-04-04', 'sapemp.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_record`
--

CREATE TABLE IF NOT EXISTS `attendance_record` (
  `id` int(55) NOT NULL,
  `module_code` varchar(101) NOT NULL,
  `title` varchar(101) NOT NULL,
  `description` varchar(500) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `student_id` varchar(101) NOT NULL,
  `file` varchar(5000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance_record`
--

INSERT INTO `attendance_record` (`id`, `module_code`, `title`, `description`, `document_name`, `date`, `student_id`, `file`) VALUES
(23, 'phy', 'Week4', '4 days', 'week4.doc', '2018-04-10', '123', 'week4.doc'),
(24, 'phy', 'hshh', 'hhhh', 'hhh', '2018-04-10', '123', 'sapemp.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `contents_record`
--

CREATE TABLE IF NOT EXISTS `contents_record` (
  `id` int(55) NOT NULL,
  `course_id` varchar(55) NOT NULL,
  `module_code` varchar(55) NOT NULL,
  `chapter` varchar(101) NOT NULL,
  `description` varchar(500) NOT NULL,
  `video` varchar(1000) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contents_record`
--

INSERT INTO `contents_record` (`id`, `course_id`, `module_code`, `chapter`, `description`, `video`, `link`) VALUES
(1, 'Science', 'phy', 'first', 'measurement', '<iframe width="300" height="190" src="https://www.youtube.com/embed/2JXmga1vzbE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', 'https://www.youtube.com/watch?v=2JXmga1vzbE'),
(2, 'Science', 'phy', 'second', 'Motion along a straight line', '<iframe width="300" height="190" src="https://www.youtube.com/embed/EhsEIRAImM8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', 'https://en.wikipedia.org/wiki/Motion_(physics)'),
(3, 'Science', 'phy', 'third', 'Vector', '<iframe width="300" height="190" src="https://www.youtube.com/embed/4QnsrZV1rKw" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', 'https://bit.ly/2j3nlyu'),
(4, 'Science', 'phy', 'four', 'motion in 2 & 3 dimension', '<iframe width="300" height="190" src="https://www.youtube.com/embed/h9Ipz-7rKu0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>', '--https://bit.ly/2j3nlyu');

-- --------------------------------------------------------

--
-- Table structure for table `courses_record`
--

CREATE TABLE IF NOT EXISTS `courses_record` (
  `course_id` int(55) NOT NULL,
  `course_name` varchar(101) NOT NULL,
  `course_code` varchar(101) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_record`
--

INSERT INTO `courses_record` (`course_id`, `course_name`, `course_code`) VALUES
(8, 'science', 'scn');

-- --------------------------------------------------------

--
-- Table structure for table `events_record`
--

CREATE TABLE IF NOT EXISTS `events_record` (
  `event_id` int(11) NOT NULL,
  `title` varchar(101) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_record`
--

INSERT INTO `events_record` (`event_id`, `title`, `date`, `description`) VALUES
(1, 'clock', '2018-03-15', '<p>connect in..</p>\r\n<p>dhcacg&nbsp;</p>'),
(2, 'clock b connect in', '2018-03-15', '<p>connect in..</p>\r\n<p>dhcacg&nbsp; hd chdhd dgd dgd</p>\r\n<p>dhdhdh dh dhd&nbsp;</p>'),
(6, 'video', '2018-03-07', '<p>&lt;iframe width="560" height="315" src="https://www.youtube.com/embed/Vvnliarkw48" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen&gt;&lt;/iframe&gt;</p>'),
(7, 'video', '2018-04-12', '<p>&lt;iframe width="560" height="315" src="https://www.youtube.com/embed/CRvcm7GKrF0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen&gt;&lt;/iframe&gt;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `modules_record`
--

CREATE TABLE IF NOT EXISTS `modules_record` (
  `module_id` int(55) NOT NULL,
  `module_name` varchar(101) NOT NULL,
  `module_code` varchar(101) NOT NULL,
  `course_id` varchar(101) NOT NULL,
  `tutor_id` varchar(101) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modules_record`
--

INSERT INTO `modules_record` (`module_id`, `module_name`, `module_code`, `course_id`, `tutor_id`) VALUES
(7, 'Physics', 'phy', '8', '7'),
(8, 'chemistry', 'che', '8', '100');

-- --------------------------------------------------------

--
-- Table structure for table `parents_record`
--

CREATE TABLE IF NOT EXISTS `parents_record` (
  `id` int(55) NOT NULL,
  `first_name` varchar(101) NOT NULL,
  `middle_name` varchar(101) NOT NULL,
  `last_name` varchar(101) NOT NULL,
  `address` varchar(101) NOT NULL,
  `phone_num` varchar(55) NOT NULL,
  `email` varchar(101) NOT NULL,
  `password` varchar(101) NOT NULL,
  `student_id` varchar(101) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents_record`
--

INSERT INTO `parents_record` (`id`, `first_name`, `middle_name`, `last_name`, `address`, `phone_num`, `email`, `password`, `student_id`) VALUES
(6, 'hari', 'bhadur', 'kc', 'hhh', '888', 'hari@manpari.com', 'hari', '123');

-- --------------------------------------------------------

--
-- Table structure for table `students_grade`
--

CREATE TABLE IF NOT EXISTS `students_grade` (
  `id` int(55) NOT NULL,
  `module_code` varchar(101) NOT NULL,
  `acessment_code` varchar(101) NOT NULL,
  `student_id` varchar(101) NOT NULL,
  `grade` varchar(101) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_grade`
--

INSERT INTO `students_grade` (`id`, `module_code`, `acessment_code`, `student_id`, `grade`, `description`) VALUES
(12, 'phy', '1st', '123', 'B+', 'not good');

-- --------------------------------------------------------

--
-- Table structure for table `students_record`
--

CREATE TABLE IF NOT EXISTS `students_record` (
  `id` int(11) NOT NULL,
  `first_name` varchar(101) NOT NULL,
  `middle_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `student_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_num` int(100) NOT NULL,
  `address` varchar(101) NOT NULL,
  `course_code` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_record`
--

INSERT INTO `students_record` (`id`, `first_name`, `middle_name`, `last_name`, `student_id`, `email`, `password`, `phone_num`, `address`, `course_code`) VALUES
(16, 'suman', '', 'kc', '123', 'suman@kc.com', 'suman', 8888, 'hhh', 'scn'),
(17, 'saroj', '', 'lamichanne', '111', 'saroj@gmail.com', 'saroj', 999, 'baniyatar', 'scn');

-- --------------------------------------------------------

--
-- Table structure for table `students_submit`
--

CREATE TABLE IF NOT EXISTS `students_submit` (
  `id` int(55) NOT NULL,
  `module_code` varchar(101) NOT NULL,
  `student_id` varchar(101) NOT NULL,
  `assesment_code` varchar(101) NOT NULL,
  `description` varchar(500) NOT NULL,
  `document_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teachers_record`
--

CREATE TABLE IF NOT EXISTS `teachers_record` (
  `id` int(55) NOT NULL,
  `first_name` varchar(101) NOT NULL,
  `middle_name` varchar(101) NOT NULL,
  `last_name` varchar(101) NOT NULL,
  `address` varchar(101) NOT NULL,
  `tutor_id` varchar(100) NOT NULL,
  `email` varchar(101) NOT NULL,
  `password` varchar(101) NOT NULL,
  `phone_num` int(101) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `about` varchar(500) NOT NULL,
  `course_code` varchar(101) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers_record`
--

INSERT INTO `teachers_record` (`id`, `first_name`, `middle_name`, `last_name`, `address`, `tutor_id`, `email`, `password`, `phone_num`, `subject`, `about`, `course_code`) VALUES
(7, 'Sita', '', 'kc', 'hh', '100', 'sita@kc.com', 'sita', 888, 'Physics', 'Kei', 'scn'),
(8, 'manoj', 'kumar', 'pandey', 'samakhusi', '102', 'manoj@gmail.com', 'manoj', 997777, 'Nepali', 'joined in 2014', 'scn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignments_record`
--
ALTER TABLE `assignments_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_code` (`module_code`),
  ADD KEY `id` (`id`),
  ADD KEY `module_code_2` (`module_code`);

--
-- Indexes for table `attendance_record`
--
ALTER TABLE `attendance_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_code` (`module_code`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `module_code_2` (`module_code`),
  ADD KEY `student_id_2` (`student_id`);

--
-- Indexes for table `contents_record`
--
ALTER TABLE `contents_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `module_code` (`module_code`);

--
-- Indexes for table `courses_record`
--
ALTER TABLE `courses_record`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `course_code` (`course_code`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `events_record`
--
ALTER TABLE `events_record`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `modules_record`
--
ALTER TABLE `modules_record`
  ADD PRIMARY KEY (`module_id`),
  ADD UNIQUE KEY `module_code` (`module_code`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `module_code_2` (`module_code`),
  ADD KEY `tutor_id` (`tutor_id`),
  ADD KEY `module_code_3` (`module_code`),
  ADD KEY `module_code_4` (`module_code`),
  ADD KEY `tutor_id_2` (`tutor_id`);

--
-- Indexes for table `parents_record`
--
ALTER TABLE `parents_record`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `students_grade`
--
ALTER TABLE `students_grade`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `module_code` (`module_code`),
  ADD KEY `acessment_code` (`acessment_code`);

--
-- Indexes for table `students_record`
--
ALTER TABLE `students_record`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD KEY `student_id_2` (`student_id`),
  ADD KEY `course_code` (`course_code`);

--
-- Indexes for table `students_submit`
--
ALTER TABLE `students_submit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers_record`
--
ALTER TABLE `teachers_record`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tutor_id` (`tutor_id`),
  ADD KEY `course_code` (`course_code`),
  ADD KEY `tutor_id_2` (`tutor_id`),
  ADD KEY `course_code_2` (`course_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(101) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `assignments_record`
--
ALTER TABLE `assignments_record`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `attendance_record`
--
ALTER TABLE `attendance_record`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `contents_record`
--
ALTER TABLE `contents_record`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `courses_record`
--
ALTER TABLE `courses_record`
  MODIFY `course_id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `events_record`
--
ALTER TABLE `events_record`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `modules_record`
--
ALTER TABLE `modules_record`
  MODIFY `module_id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `parents_record`
--
ALTER TABLE `parents_record`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `students_grade`
--
ALTER TABLE `students_grade`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `students_record`
--
ALTER TABLE `students_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `students_submit`
--
ALTER TABLE `students_submit`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teachers_record`
--
ALTER TABLE `teachers_record`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance_record`
--
ALTER TABLE `attendance_record`
  ADD CONSTRAINT `attendance_record_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students_record` (`student_id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `parents_record`
--
ALTER TABLE `parents_record`
  ADD CONSTRAINT `parents_record_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students_record` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students_grade`
--
ALTER TABLE `students_grade`
  ADD CONSTRAINT `students_grade_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `students_record` (`student_id`);

--
-- Constraints for table `teachers_record`
--
ALTER TABLE `teachers_record`
  ADD CONSTRAINT `teachers_record_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `courses_record` (`course_code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

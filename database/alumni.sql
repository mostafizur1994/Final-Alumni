-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 12, 2021 at 06:40 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog-id` int(11) NOT NULL,
  `blog-img` varchar(50) NOT NULL,
  `blog-title` varchar(255) NOT NULL,
  `blog-description` longtext NOT NULL,
  `blog` longtext NOT NULL,
  `blog-time` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog-id`, `blog-img`, `blog-title`, `blog-description`, `blog`, `blog-time`) VALUES
(8, 'su-2.jpg', 'Southeast University', 'Southeast University, SEU Alumni is an online social platform which is our running students, alumni, and honorable faculty lead initiative to share the opportunity information across the world...', '<h1>A Brief Introduction About</h1>\r\nSoutheast University, SEU Alumni is an online social platform which is our running students, alumni, and honorable faculty lead initiative to share the opportunity information across the world. SEU Alumni share the information about all types of career opportunities which is mostly related to the opportunity of international conferences, jobs, internships, seminar, forums, awards, grants, fellowships, campaign etc.\r\n\r\n<br>\r\n<br>\r\n\r\n <h2>Vision and Mission</h2>\r\n              Our mission is to create a diverse platform of opportunity for all the currently running and alumni students so that they can easily access their desirable and suitable opportunity from anywhere in the world. We are aiming to a strong contribution towards building a desirable career through sharing the opportunity information around the world.\r\n\r\n<br>\r\n<br>\r\n\r\n<h2>SEU Alumni Team</h2>\r\n              Reading an alumni group should be fun, not a chore! By assembling a team of volunteers to manage the group, you can share responsibilities, make new friends, generate diverse ideas and support one another as a team. Having a group of involved alumni also helps with leadership continuity – in case a leader moves or is unable to continue volunteering, other alumni are available to step in on an interim basis to continue group activities.\r\n              <br>\r\n              Because of the number and variety of events that the groups are expected to host, it is necessary that alumni chapters and societies have at least a four-person leadership team. Suggested leadership team positions are chair, vice chair (chair-elect) and communications. The fourth position should be selected by the group. A list of suggestions is included below.\r\n\r\n <h1>Other Group Leadership Positions:</h1>\r\n              <h3 class=\"mb-3 mt-3\" style=\"font-weight: bold; padding-top: 1rem;\">\r\n                Events Coordinator\r\n              </h3>\r\n              <ul>\r\n                <li>\r\n                  Generates new event ideas to engage alumni.\r\n                </li>\r\n                <li>\r\n                  Brings these ideas to the Leadership Team along with an implementation plan, venue information, contact person, estimated cost, etc.\r\n                </li>\r\n                <li>\r\n                  Works with the venue and other members of the leadership team to coordinate and host the event\r\n                </li>\r\n              </ul>\r\n              <h3 class=\"mb-3 mt-3\" style=\"font-weight: bold;\">\r\n                Program Coordinator\r\n              </h3>\r\n              <ul>\r\n                <li>\r\n                  Develop programs and events that revolve around a televised athletic event(s)\r\n                </li>\r\n                <li>\r\n                  Serve as point of contact for the venue and guests\r\n                </li>\r\n                <li>\r\n                  Secure location and maintain relationship with the management of the establishment\r\n                </li>\r\n              </ul>\r\n              <h3 class=\"mb-3 mt-3\" style=\"font-weight: bold;\">\r\n                Student Outreach Coordinator\r\n              </h3>\r\n              <ul>\r\n                <li>\r\n                  Attend watch parties (or identify an alternate if unable to attend), set up decorations, greet guests and troubleshoot any issues with the venue\r\n                </li>\r\n                <li>\r\n                  Serves as the main link between the group and students/potential students in the area.\r\n                </li>\r\n                <li>\r\n                  Coordinates events that involve and/or partners with student organizations\r\n                </li>\r\n              </ul>\r\n', '2021-02-12'),
(9, 'blog-post2.jpg', 'Prize Giving Ceremony of Inter-Department Quiz Competition on Bangabandhu Held', 'Southeast University organized an “Inter-Department Quiz Competition on Bangabandhu” on 15 March 2020 at its own campus. The prize giving ceremony of this competition was held on 11 February 2021 at SEU Seminar Hall, Banani, Dhaka. The initiative was taken to mark the birth centenary of the Father of the Nation Bangabandhu Sheikh Mujibur Rahman.', 'Southeast University organized an “Inter-Department Quiz Competition on Bangabandhu” on 15 March 2020 at its own campus. The prize-giving ceremony of this competition was held on 11 February 2021 at SEU Seminar Hall, Banani, Dhaka. The initiative was taken to mark the birth centenary of the Father of the Nation Bangabandhu Sheikh Mujibur Rahman. More than two hundred students of various Departments participated in this quiz competition. Of them, ten participants were declared as the winners.\r\n<br>\r\n<br>\r\nIn the prize-giving ceremony, Maj Gen Kazi Fakhurddin Ahmed (Retd.), Registrar, SEU gave his opening speech. Prof. Dr. Engr. Muhibul Haque Bhuyan, Chairman, EEE Department and Convener of the Quiz Competition Organizing Committee announced the winners while Prof. Dr. ANM Meshquat Uddin, Adviser, BoT, SEUT delivered his speech as the Chief Guest. In the prize-giving ceremony, Deans of various Schools, Chairpersons of various departments, faculty members, officials and students of SEU were present.', '2021-02-12'),
(10, 'blog-post3.jpg', 'Southeast University Organized a Discussion Session on Bangabandhu\'s Homecoming Day', 'Southeast University (SEU) organized an online discussion session on 14 January to celebrate the Father of the Nation Bangabandhu Sheikh Mujibur Rahman\'s Homecoming Day 2021.', 'Southeast University (SEU) organized an online discussion session on 14 January to celebrate the Father of the Nation Bangabandhu Sheikh Mujibur Rahman\'s Homecoming Day 2021. Prof. Dr. AFM Mafizul Islam, Vice Chancellor of Southeast University presided over the program while Mr. Sheikh Kabir Hossain, Prominent Educationist and Chairman of the Association of Private Universities of Bangladesh (APUB) and Chairman of the Board of Trustees, Fareast International University graced the program as Chief Guest. Mr. Md. Rezaul Karim, Chairman, Board of Trustees, Southeast University was the Guest of Honor. Prof. Dr. ANM Meshquat Uddin, Adviser of BoT, SEUT delivered the Welcome Speech. Among others, Registrar, Deans, Chairmen and Directors of various departments, teachers, officials and students of SEU were present in the program.', '2021-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login-id` int(11) NOT NULL,
  `login-name` varchar(100) NOT NULL,
  `login-email` varchar(100) NOT NULL,
  `login-password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login-id`, `login-name`, `login-email`, `login-password`) VALUES
(1, 'Umair', 'something@gmail.com', '12345'),
(2, 'Ussjlkf', 'something1@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog-id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

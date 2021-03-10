-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 07:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `Category`, `image`) VALUES
(14, 'Computer Engineer', 'image/com.jpg'),
(15, 'Dentist', 'image/den.jpg'),
(16, 'Armed Forces', 'image/arm.jfif'),
(17, 'Doctor Homeopathi', 'image/doc.jpg\r\n'),
(18, 'Fashion Designer', 'image/fes.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `home_data`
--

CREATE TABLE `home_data` (
  `id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `Answered_by` varchar(50) NOT NULL,
  `No_of_steps` int(11) NOT NULL,
  `Step_1` text NOT NULL,
  `Step_2` text NOT NULL,
  `Step_3` text NOT NULL,
  `Step_4` text NOT NULL,
  `Step_5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_data`
--

INSERT INTO `home_data` (`id`, `title`, `Answered_by`, `No_of_steps`, `Step_1`, `Step_2`, `Step_3`, `Step_4`, `Step_5`) VALUES
(1, 'Computer Engineer', 'CE1', 3, 'Step 1 for Computer Engineer', 'Step 2 for Computer Engineer', 'Step 3 for Computer Engineer', '', ''),
(2, 'Dentist', 'D1', 3, 'Step 1 for Dentist', 'Step 2 for Dentist', 'Step 3 for Dentist', '', ''),
(3, 'Dentist', 'D2', 2, 'Step 1 for Dentist 2', 'Step 2 for Dentist2', '', '', ''),
(4, 'Armed Forces', 'A1', 3, 'Class XI-XII/Junior College\r\nArts: If you’re interested in subjects like political science, history, etc., choose arts in junior college. With a background in arts, you can pursue a law specialization with the army.', 'Entrance Exams\r\nYou will need to appear for the NDA/NA exam. Once you have completed Class 12, you will be eligible for this exam. It is conducted by the Union Public Service Commission (UPSC) twice a year. This test will be conducted offline and will be followed by a Service Selection Board (SSB) interview. The exam covers English and General Knowledge.', 'Graduation\r\nNDA: After Class 12, register with the National Defence Academy, Pune. They have a three-year course you can get into. This course is certified by Jawaharlal Nehru University (JNU). Post these three years, you will undergo a one-year training programme based on the specialisation you choose.\r\n\r\nAlternatively, you can register with the NDA and pursue a graduation course of your choice. Once you graduate, you can come back and take the one-year-training programme. At the NDA, you will be given professional training and can choose from 31 extracurricular activities including golf, gliding, wind-surfing and others. ', '', ''),
(5, 'Armed Forces', 'A2', 3, 'Firstly you need to do graduation. and from the last year you are elligible for giving entrance exam.', ' In the final year of graduation, you will have to pass the Combined Defence Service Exam', 'Clear the Service Selection Board (SSB) interview and qualify as medically fit to join the IMA. ', '', ''),
(6, 'Armed Forces', 'A3', 4, 'One way to join armed forces without nda or cds for Science stream students with thw PCM in 12th. They need to pass their 12th with more than 80% marks. Although this cut off vary every year.', 'After 12th they can apply for TES and according to their cut-off marks they sort-listed the students.', 'After sort listed in cut-offs all they have to give ssbs where they are tested for the technical knowledge. ', 'And after clearing the ssbs cadet directly appear in IMA for training. But here the cadet is only eligible for army not for navy or air forces.', ''),
(7, 'Doctor Homeopathi', 'DH', 5, 'Class XI - XII/Junior College : While in high school or junior college, select the science stream and study the core subjects of science - physics, chemistry and biology.', 'Entrance Exams : To become a homeopathic doctor, you have to finish a diploma or degree course in homeopathy. Both courses require you to take entrance exams conducted by various state and independent bodies in India. Your admission in the medical institution of your choice will depend on the rank you secure in the entrance examination.', 'Graduation : You can choose to graduate with a degree in Bachelor of Homeopathy Medicine & Surgery (BHMS), which is a four-year course, or a diploma in Homeopathy Medicine & Surgery (DHMS), which is a three-year course. Choosing a degree or diploma depends on the depth in which you want to pursue homeopathy.', 'Internship Training : You must intern for six months to one year in order to  successfully graduate in your chosen degree or diploma of homeopathy.  The internship usually takes place at the hospital attached to your college. In this period of time, you will gain practical experience like studying patient cases, evaluating their symptoms, and managing sick people, all based on principles of homoeopathy, under expert supervision.\r\n ', 'Land a Job : Through college placements, you can find a job in the public or private sector. After some years of experience, you can also choose to become self-employed by setting up your own practice.\r\n\r\nCongratulations, you are now officially a homeopathic doctor!'),
(8, 'Fashion Designer', 'FD', 5, 'Class XI-XII/Junior College\r\n\r\nChoose arts if you’re interested in studying the humanities. Score at least 50% in your Class 12to get into a fashion college.', 'Portfolio Building\r\n\r\nDuring your college years, start building your portfolio. This will help you fare better in college and university applications. Take up art classes to better your drawing skills. This will help you bring your concepts to life through your portfolio.', 'Entrance Exam\r\n\r\nThere are several colleges that offer a Bachelors of Design course, like the National Institute of Fashion Technology (NIFT), Pearl Academy, Delhi (PAF) which requires you to have at least 50% in Class 12, Amity University which requires you to have at least 50% in Class 12, etc. These exams evaluate you on the basis of your illustration skills, your interpersonal skills, and your creativity with materials.', 'Graduation\r\n\r\nApply to the National Institute of Fashion Technology (NIFT), which offers four-year undergraduate courses in fashion designing like BDes (Bachelor of Design) in fashion design, leather design, textile design, etc.  You could also apply to Pearl Academy (Delhi), which offers a two-year diploma in Fashion Design, or Amity University for its four-year Bachelor of Design course.', 'Get a Job\r\n\r\nAfter graduation, you can work with a senior designer or set up your own business. You could also work with stores or boutiques looking for freshers. You could take up a job as a stylist or an assistant buyer; this will help you understand trends if you wish to start designing your own line of clothing.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Category` (`Category`);

--
-- Indexes for table `home_data`
--
ALTER TABLE `home_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `home_data`
--
ALTER TABLE `home_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

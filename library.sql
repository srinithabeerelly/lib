-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 04:44 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first`, `last`, `username`, `password`, `email`, `contact`, `pic`) VALUES
(1, 'Fantastic ', 'Five', 'admin', 'library', 'library123@gmail.com', '1234567890', 'p.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(100) NOT NULL,
  `name` varchar(120) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `ebook` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `name`, `authors`, `edition`, `status`, `quantity`, `course`, `ebook`) VALUES
(1, 'Advanced Engineering Mathematics', ' Erwin Kreyszig', '10th', 'Available', 4, 'Mathematics and Calculus', 'https://drive.google.com/file/d/1WrAUiaxLAb4WPjSu2tDCMoGnciNa_ea_/view?usp=sharing'),
(2, 'Introduction to Real Analysis ', ' William F. Trench', 'Null', 'Available', 2, 'Mathematics and Calculus', 'https://drive.google.com/file/d/1wM2R0zLOJ70KTFrIwSdJNo5e_05lj7v6/view?usp=sharing'),
(3, 'Linear Algebra ', ' Kenneth Hoffman', '2nd', 'Available', 4, 'Mathematics and Calculus', 'https://drive.google.com/file/d/1CFc5Dsogvb5IPDJLPPzK84S1x-tV8gJ4/view?usp=sharing'),
(4, 'THOMAS\' Calculus                              \r\n', 'George B. Thomas JR.', '14th', 'Available', 4, 'Mathematics and Calculus', 'https://drive.google.com/file/d/1XJX-uCGeW1iHZKsUEXS7l7CsnAIYRSCV/view?usp=sharing '),
(5, 'Introduction to Real Analysis                                  \r\n', 'Sadhan Kumar Mapa', '5th', 'Available', 4, 'Mathematics and Calculus', 'https://drive.google.com/file/d/1Hy8ZeZ7KmDLOjK1D0Fhk2x9mfEm8YzlR/view?usp=sharing'),
(6, 'Multi Variable Calculus and Linear Algebra, with Applications to Differential Equations and Probability', 'Tom M. Apostol', '2nd', 'Available', 4, 'Mathematics and Calculus', 'https://drive.google.com/file/d/1_27TyQN3Uz_g4t3HMTeN0FNxuRCfetew/view?'),
(7, 'A Basic Course in Real Analysis\r\n', 'Ajit Kumar, S. Kumarsan ', 'Null', 'Available', 4, 'Mathematics and Calculus', 'https://drive.google.com/file/d/1MgTJ-5nPbvJwzFZTgq0-7wvBwBnwrh55/view?usp=sharing '),
(8, 'Higher Algebra                         \r\n', 'H. S. Hall, S. R. Knight ', 'Null', 'Available', 4, 'Mathematics and Calculus', 'https://drive.google.com/file/d/14xaDiiI7DXJBT8BiTDswBl3d345r1IXP/view?usp=sharing'),
(9, 'Calculus and Analytic Geometry \r\n                 \r\n', ' George B. Thomas Jr., Ross Finney', '9th', 'Available', 4, 'Mathematics and Calculus', 'https://drive.google.com/file/d/1YkMDCha9jlYmc7lFHJzjIHxMSUbY50pj/view?usp=sharing'),
(10, 'DISCRETE AND COMBINATORIAL MATHEMATICS\r\n', 'KENNETH H. ROMEN', 'Null', 'Available', 4, 'Discrete Structures', 'https://drive.google.com/file/d/1ZrJGg3bIjghDlfFkkEfR7b5gxVQCch5Y/view?usp=sharing\r\n'),
(11, 'Data Structures with C                        \r\n', ' Seymour Lipschutz', 'Null', 'Available', 4, 'Data Structures', 'https://drive.google.com/file/d/1XNNe2O5xUxgH_u_J4wCTyFVhKPQ0XCi8/view?usp=sharing   '),
(12, 'Introduction to Algorithms \r\n', 'Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, Clifford stein ', '3rd', 'Available', 4, 'Data Structures', 'https://drive.google.com/file/d/18IvCFJ_96C6aasQnV4mOYpfPhxh_juO7/view?usp=sharing'),
(13, 'Introduction to Algorithms       ', 'Thomas H. Cormen', '2nd', 'Available', 4, 'Data Structures', 'https://drive.google.com/file/d/1HSpGsCiqiJ_U3TPuCAg8Xc5SIhttyDjl/view?usp=sharing  '),
(14, 'Digital Design                                       \r\n', ' M. Morris Mano, Michael D. Ciletti', '5th', 'Available', 4, 'Digital Logic Design', 'https://drive.google.com/file/d/1WkKMbqXynwPqExTC3EJCZoFSvOJcYjku/view?usp=sharing   '),
(15, 'Artificial Intelligence A Modern Approach                      \r\n', 'Stuart Russell, Peter Norvig', '4th', 'Available', 4, 'Artificial Intelligence', 'https://drive.google.com/file/d/1XK8nsFmUcS2QnBgEqpvOhjQwxXp1J3WF/view?usp=sharing  '),
(16, 'Introduction to the Theory of Computation  ', 'Michael Sipser ', '3rd', 'Available', 4, 'Artificial Intelligence', 'https://drive.google.com/file/d/1WjBSJKytPQtGh24c91QqZD8HzcZwUGPy/view?usp=sharing   '),
(17, 'Engineering Drawing ', 'N. D. Bhatt', '50th', 'Available', 4, 'Engineering Drawings', 'https://drive.google.com/file/d/1XDdENlwCSnQA5l-uNyIoAHyAJSVlF0m8/view?usp=sharing'),
(18, 'The History of Medicine-A very short introduction       ', 'William Bynum ', 'Null', 'Available', 4, 'Medical Humanities', 'https://drive.google.com/file/d/1txcGtZp56crjY1ZMcjGRmtpQFneIUB5U/view?usp=sharing'),
(19, 'LISSA A story about Medical Promise, Friendship, and Revolution \r\n ', 'Null', 'Null', 'Available', 4, 'Medical Humanities', 'https://drive.google.com/file/d/1aiXpBaRIGATcc9T63lJjn42gJpvHV0C7/view?usp=sharing  '),
(20, 'Strange Harvest: organ transplants,denatured Bodies and Transformed self    ', 'Lesley A. Sharp', 'Null', 'Available', 4, 'Medical Humanities', 'https://drive.google.com/file/d/1XsmOKlolfMpPso485J4BfewkOrewasu-/view?usp=sharing  '),
(21, 'Valuing Deaf Worlds in Urban India\r\n', 'Michele Friedner ', 'Null', 'Available', 4, 'Medical Humanities', 'https://drive.google.com/file/d/1XpczWUO4VLH0kxe7Fa_gvnhtJCmXY_y0/view?usp=sharing    '),
(22, 'The Key concept : The Body', ' Lisa Blackman ', 'Null', 'Available', 4, 'Medical Humanities', 'https://drive.google.com/file/d/1-IDeSVIXawsQLAQL3PPPOVqPVaqssPoD/view?usp=sharing'),
(23, 'Financial Markets and Institution                        \r\n', 'Frederic S. Mishkin, Stanley G. Eakins', '9th', 'Available', 3, 'Financial Markets', 'https://drive.google.com/file/d/1i2hv4nHWHdjDQpNQ3LMVUQYFA2lmUnwM/view?usp=sharing'),
(24, 'The C++ Programming Language', 'Bjarne Stroustrup', '4th', 'Available', 4, 'Programming: C++ language', 'https://drive.google.com/file/d/1WlMS3OvypuhriHpCQq4dVZjAQklJn0D2/view?usp=sharing  '),
(25, 'An Introduction to Programming through C++                           \r\n', 'Abhiram Ranade ', 'Null', 'Available', 4, 'Programming: C++ language', 'https://drive.google.com/file/d/10Ot1XVXPxR5B_AcnmSHPnyvKkMpvTELM/view?usp=sharing'),
(26, 'C Programming Language                        \r\n', 'Brian W. Kernighan, Dennis M. Ritchie', '2nd', 'Available', 4, 'Programming: C language', 'https://drive.google.com/file/d/1F5EKhxwYs04V2QbXItTvRrGoa8b_AiN3/view?usp=sharing  '),
(27, 'Let Us C ', 'Yashvant P. Kanetkar ', '5th', 'Available', 4, 'Programming: C language', 'https://drive.google.com/file/d/1mqlzM5LUshnjbdxHjL_9cgvBxmrUMJ1M/view?usp=sharing  '),
(28, 'Learn PYTHON 3 the hard way', 'Zed A. Shaw ', 'Null', 'Available', 4, 'Programming: Python', 'https://drive.google.com/file/d/1hEJayszoDo6pKfVZu7lV4mdIEjcw8PVF/view?usp=sharing'),
(29, 'Python Essential Reference', ' David M. Beazley', '4th', 'Available', 4, 'Programming: Python', 'https://drive.google.com/file/d/1rTV5OnAJrpiLo6M0IkGjsvMj5fQk1AKi/view?usp=sharing'),
(30, 'Introduction to Machine Learning with Python         ', ' Andreas C. Muller & Sarah Guido', 'Null', 'Available', 4, 'Programming: Python', 'https://drive.google.com/file/d/1RlZrMovuC6VDCNVj5AsHV5v6rTE0jitt/view?usp=sharing    '),
(31, 'Natural Language Processing with Python', 'Steven Bird, Ewan Klein & Edward Loper', 'Null', 'Available', 4, 'Programming: Python', 'https://drive.google.com/file/d/1pokI9CBiM_1hUwNfs6qft-ju0DXwSw4L/view?usp=sharing '),
(32, 'PostgreSQL Up and Running', 'Regina Obe, Leo Hsu', '3rd', 'Available', 4, 'Programming: SQL', 'https://drive.google.com/file/d/1tYKv_77ZvII0h1jIBUj9F-csG1kgoyBV/view?usp=sharing'),
(33, 'Learning Javascript  ', 'Ethan Brown', '3rd', 'Available', 4, 'Programming: Java Script', 'https://drive.google.com/file/d/15DEjy4_WV_SKY1eO3vqgdWjCy4k-Fcb-/view?usp=sharing'),
(34, 'Javascript: The Good Parts', 'Douglas Crockford', 'Null', 'Available', 4, 'Programming: Java Script', 'https://drive.google.com/file/d/1VLdo8_T6EJR7zJ1XMZGDJJlHx5d1wEjD/view?usp=sharing'),
(35, 'Beginning LINUX Programming ', 'Neil Matthew, Richard Stones', '4th', 'Available', 4, 'Programming: Linux', 'https://drive.google.com/file/d/1Wlja-f2oHQC6RcASql3r-PQSralmAPDn/view?usp=sharing'),
(36, 'Understanding LINUX Kernel', 'Daniel P. Bovet and Marco Cesati', '3rd', 'Available', 4, 'Programming: Linux', 'https://drive.google.com/file/d/1n8zuxnxehskfLtkOzZz8bl0V7M7XGrh4/view?usp=sharing'),
(37, 'The UNIX Programming Environment ', ' Brian W. Kernighan, Rob Pike ', 'Null', 'Available', 4, 'Programming: Linux', 'https://drive.google.com/file/d/1b6IPdO86SWc_wJnzL-Fvjb_DxO-yqp1R/view?usp=sharing'),
(38, 'Agile For Everybody: Creating Fast, Flexible And Customer-First Organizations', 'Matt Lemay', 'Null', 'Available', 1, 'Programming: Agile', 'https://drive.google.com/file/d/1p-BEh5g8SN0lHq2Cof4U2xTQQ10J4FL7/view?usp=sharing  '),
(39, 'Programming Language Pragmatics', 'Michael L.Scott', '3rd', 'Available', 4, 'Programming', 'https://drive.google.com/file/d/1LkgaRr7XgLRHuDz0Kdl0jh4w12mkaro5/view?usp=sharing'),
(40, 'Effective DevOps  ', 'Jennifer Davis & Ryn Daniels', 'Null', 'Available', 4, 'Programming', 'https://drive.google.com/file/d/1RtxSzWekpPiwDoTtqf9uMOeYIX1GM5cA/view?usp=sharing   '),
(41, 'Hands-on GUI Programming on C++ and Qt5 ', 'Lee Zhi Eng ', 'Null', 'Available', 4, 'Programming', 'https://drive.google.com/file/d/1od1FF3lV4O-EbrXFxnMW-6kNCyD66nue/view?usp=sharing'),
(42, 'Learning TensorFlow: A Guide to Building Deep Learning Systems\r\n', 'Tom Hope, Yehezkel S. Resheff & Itay Lieder', 'Null', 'Available', 4, 'Programming', 'https://drive.google.com/file/d/1b55z_8Zxp3dzjQNXBCljyA89IPimCU6O/view?usp=sharing '),
(43, 'Network Warrior ', 'Gary A. Donabue', '2nd', 'Available', 4, 'Programming', 'https://drive.google.com/file/d/1F0WETRAvgC26GhFm2Zdq7bXvPz-fcoyt/view?usp=sharing'),
(44, 'Hands- On Programming with R                         \r\n', 'Garrett Grolemund', 'Null', 'Available', 4, 'Programming', 'https://drive.google.com/file/d/127WrqNCCk7k9lhNnzuv05fRud7cyx_R8/view?usp=sharing'),
(46, 'Cloud Native DevOps with Kubernetes ', 'John Arundal & Justin Domingus', 'Null', 'Available', 4, 'Programming', 'https://drive.google.com/file/d/1Dt5yWzO_cVIS9eyhKcGGkXyO2_1Vmx0i/view?usp=sharing  '),
(47, 'Assembly Language and Programming', 'Peter Abel', '4th', 'Available', 4, 'Programming', 'https://drive.google.com/file/d/1wvGkL0IMe516rMdzAL8QVY59i3fy-r-I/view?usp=sharing '),
(48, 'Verilog HDL: A Guide to Digital Design and Synthesis  ', 'Null', '2nd', 'Available', 4, 'Hardware Desriptive Language', 'https://drive.google.com/file/d/1wVwEbWolmGmJnrmBzFbuvR5W56WZNclc/view?usp=sharing'),
(49, 'Principle of Macroeconomics', 'N. Gregory Mankiw', '8th', 'Available', 4, 'Principle of Macro-economics', 'https://drive.google.com/file/d/1eJe0Aud86DHhNtLLj-A_8WdWlG8Rkj3v/view?usp=sharing '),
(50, 'Practical Statistics for Data Scientists                  \r\n', 'Peter Bruce and Andrew Bruce', 'Null', 'Available', 4, 'Practical Statistics for Data Scientists', 'https://drive.google.com/file/d/1MmAaCuNVk6mzdD5Oz9h4VAqLv2cxICyl/view?usp=sharing ');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`) VALUES
(30, 'manasa1', 'Please issue book id 3 for me as soon as possible'),
(31, 'Yugalgarg', 'Ok sure!!'),
(32, 'Yugalgarg', 'Thank you for your response'),
(33, 'Yugalgarg', 'Ok sure!!'),
(36, '', 'mkm'),
(37, 'Yugalgarg', 'Helloooo!!'),
(38, 'manasa1', 'Please issue book');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `returned` varchar(100) NOT NULL,
  `day` int(50) NOT NULL,
  `fine` double NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`username`, `bid`, `returned`, `day`, `fine`, `status`) VALUES
('Promi', 1, '2019-05-21', 31, 3.1, 'not paid'),
('Afifa', 1, '2019-05-21', 1, 0.1, 'not paid');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `approve` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `return` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`username`, `bid`, `approve`, `issue`, `return`) VALUES
('manasa1', 38, 'Yes', '2021-08-01', '2021-08-08'),
('manasa1', 2, '<p style=\"color:yellow; background-color:red;\">EXPIRED</p>', '2021-07-20', '2021-07-27'),
('manasa1', 23, 'Yes', '2021-07-31', '2021-08-07'),
('manasa1', 44, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roll` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`first`, `last`, `username`, `password`, `roll`, `email`, `contact`, `pic`) VALUES
('Swamireddy', 'Manasa', 'manasa1', '123456', 'CS20B1022', 'swamireddymanasa28@gmail.com', '9490375566', 'p.jpg'),
('Umaid', 'shan', 'Ushan', '123456', '12', 'abc@gmail.com', '1234567890', 'p.jpg'),
('Yugal', 'Garg', 'Yugalgarg', '123456', '0', 'yugalgarg7@gmail.com', '8209810441', 'p.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD UNIQUE KEY `bid` (`bid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

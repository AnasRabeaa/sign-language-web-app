-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 05:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE `bookmark` (
  `user_id` varchar(20) NOT NULL,
  `playlist_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookmark`
--

INSERT INTO `bookmark` (`user_id`, `playlist_id`) VALUES
('Ny5KCsPeDgMaaVPj1KYg', 'DWk2cphaASizavTV0gbQ'),
('RXC4djaEPEEq4AagEcZf', 'DWk2cphaASizavTV0gbQ');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` varchar(20) NOT NULL,
  `content_id` varchar(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `tutor_id` varchar(20) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content_id`, `user_id`, `tutor_id`, `comment`, `date`) VALUES
('FlRfKsQYcYeG64xNllZ8', 'RLCb20UhmRvGZP0nW26a', 'Ny5KCsPeDgMaaVPj1KYg', 'AqOGl1kGxkLZWKMD3JLs', 'good job', '2023-03-17'),
('VzRMVy454FCRcE2EdFK0', '9jRUTaZRAA6LO6CQNw02', 'RXC4djaEPEEq4AagEcZf', 'AqOGl1kGxkLZWKMD3JLs', 'test', '2023-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `number`, `message`) VALUES
('Anas', 'alaa.student@gmail.com', 101401231, 'Letters');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` varchar(20) NOT NULL,
  `tutor_id` varchar(20) NOT NULL,
  `playlist_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `video` varchar(100) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `tutor_id`, `playlist_id`, `title`, `description`, `video`, `thumb`, `date`, `status`) VALUES
('n4X39QGxHZKVqOuHz1ok', 'AqOGl1kGxkLZWKMD3JLs', 'DWk2cphaASizavTV0gbQ', 'ASL Numbers 1-10 _ Sign Language', 'ASL Numbers 1-10 _ Sign Language for Kids', '1wJzUm5U6gl9kIReWIzW.mp4', 'Hl00ovzEyXgDh8R5OKdp.webp', '2023-03-17', 'active'),
('4V7bXKIe1xMHgSJ3yszp', 'AqOGl1kGxkLZWKMD3JLs', '3VQjhPfsaHPXoQbRh7zT', 'American Sign Language Alphabet _ Learn American Sign Language Letters', 'American Sign Language Alphabet _ Learn American Sign Language Letters', 'wpRNNWR3407Nsbv68tDK.mp4', '8Ji8EIL616SN06UMkVKS.webp', '2023-03-17', 'active'),
('5PNvcwCo7u0uv00rUsfR', 'AqOGl1kGxkLZWKMD3JLs', '3VQjhPfsaHPXoQbRh7zT', 'ASL Basics _ Learn How to Sign Numbers 1-20 in American Sign Language', 'ASL Basics _ Learn How to Sign Numbers 1-20 in American Sign Language', 'yh7eSZxoaFNcSGDnmXkA.mp4', 'LRUb5MUQlkBLr7aKglY0.webp', '2023-03-17', 'active'),
('eJGdzB9znmLCRp2I2Vns', 'AqOGl1kGxkLZWKMD3JLs', 'FWWfNpIrKgXjUxLwsYbG', 'Numbers 1 to 30 _ ASL - American Sign Language', 'Numbers 1 to 30 _ ASL - American Sign Language', 'r6PB1ITlO0iQvO02yOxJ.mp4', 'wnEtUhKJ1kkhuCKiVe8s.jpg', '2023-03-17', 'active'),
('RLCb20UhmRvGZP0nW26a', 'AqOGl1kGxkLZWKMD3JLs', 'FWWfNpIrKgXjUxLwsYbG', 'ASL Numbers 1-10 _ Sign Language', 'ASL Numbers 1-10 _ Sign Language', 'E9lU9FZaIFhbDqM3rjhV.mp4', 'ShCes7bke1S62rsDyhLd.png', '2023-03-17', 'active'),
('BYfPyd45MAwn2TT3QdMI', 'AqOGl1kGxkLZWKMD3JLs', 'eDuUYCtdvSCn5d9b1fKv', 'Topic-Comment Structure in ASL', 'Topic-Comment Structure in ASL', 'OhfX0qUM9n9za8NJ6KJV.mp4', '4dYvebWi6KIUNSVQc12b.jfif', '2023-03-17', 'active'),
('HDRfzwbaevaCjJmifums', 'AqOGl1kGxkLZWKMD3JLs', 'eDuUYCtdvSCn5d9b1fKv', 'Days of the Week - ASL Vocabulary', 'Days of the Week - ASL Vocabulary', 'jTjQDwdLG9jgHlYxAs3V.mp4', 'E2BsJwIeXRli6yrD5Gjp.webp', '2023-03-17', 'active'),
('9jRUTaZRAA6LO6CQNw02', 'AqOGl1kGxkLZWKMD3JLs', 'nAJBqYDyv2zwlgYxFTA5', 'test', 'test', 'h5BBMfELDfKjpYydDhHS.mp4', 'eWUMhNgFNgSZderlG9Rw.jpg', '2023-03-17', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `user_id` varchar(20) NOT NULL,
  `tutor_id` varchar(20) NOT NULL,
  `content_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`user_id`, `tutor_id`, `content_id`) VALUES
('Ny5KCsPeDgMaaVPj1KYg', 'AqOGl1kGxkLZWKMD3JLs', 'RLCb20UhmRvGZP0nW26a'),
('RXC4djaEPEEq4AagEcZf', 'AqOGl1kGxkLZWKMD3JLs', '9jRUTaZRAA6LO6CQNw02');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id` varchar(20) NOT NULL,
  `tutor_id` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) NOT NULL DEFAULT 'deactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id`, `tutor_id`, `title`, `description`, `thumb`, `date`, `status`) VALUES
('DWk2cphaASizavTV0gbQ', 'AqOGl1kGxkLZWKMD3JLs', 'Sign Language for Kids - Online Course', 'Are you a parent or educator with a child who wants to learn sign language? We make it fun and easy to learn the fundamentals of sign language in our online ASL kids course! Your kids can learn at their own pace or follow our 10-week program.', 'u4iRA6t813Zfj3tdwwSM.webp', '2023-03-17', 'active'),
('3VQjhPfsaHPXoQbRh7zT', 'AqOGl1kGxkLZWKMD3JLs', 'Alphabet  &  Letters', 'American Sign Language Alphabet _ Learn American Sign Language Letters', 'TqsSCt0cgeTmtkZOQ0eR.webp', '2023-03-17', 'active'),
('FWWfNpIrKgXjUxLwsYbG', 'AqOGl1kGxkLZWKMD3JLs', 'Numbers in sign Language ', '_The 7 Days of the Week_ in Sign Language!', 'kgg8QEZ2zPebdu5YNNqW.jpg', '2023-03-17', 'active'),
('eDuUYCtdvSCn5d9b1fKv', 'AqOGl1kGxkLZWKMD3JLs', 'ASL Basics', 'How to sign Zero in American Sign Language', '5hnB98klhrYC9aNb1SfU.png', '2023-03-17', 'active'),
('AWf5OVKmytPeAxXwOD9R', 'AqOGl1kGxkLZWKMD3JLs', 'WH-Words in ASL', 'WH-Words in ASL', 'cSUayFhCzA8DOhkfb6EM.png', '2023-03-17', 'active'),
('vPrpOfxwYugfsxqCI7kb', 'AqOGl1kGxkLZWKMD3JLs', 'Topic-Comment Structure in ASL', 'Topic-Comment Structure in ASL', 'bRLXtXH2A2phR4cbQfor.jfif', '2023-03-17', 'active'),
('nAJBqYDyv2zwlgYxFTA5', 'AqOGl1kGxkLZWKMD3JLs', 'test', 'test', 'Ysc0veLjxtLwR0yK6zdo.jpg', '2023-03-17', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `name`, `profession`, `email`, `password`, `image`) VALUES
('AqOGl1kGxkLZWKMD3JLs', 'alaa', 'teacher', 'admin@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'Om5dYbSPprDNBh85zF8K.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
('Ny5KCsPeDgMaaVPj1KYg', 'alaa', 'alaa.student@gmail.c', '7c222fb2927d828af22f592134e8932480637c0d', 'jQxCQvJ9VqjO9yY9i5gV.jpg'),
('RXC4djaEPEEq4AagEcZf', 'Sara', 'sara.student@gmail.c', '7c222fb2927d828af22f592134e8932480637c0d', '5Bp4BqfgsRxgUPUsLLun.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

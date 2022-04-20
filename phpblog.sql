-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 20, 2022 at 06:59 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'News'),
(2, 'Events'),
(3, 'Tutorials'),
(4, 'Misc');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `title`, `body`, `author`, `tags`, `date`) VALUES
(1, 2, 'PHP International Conference 2022', '<p>Maecenas egestas arcu quis ligula mattis placerat. Fusce fermentum. Ut non enim eleifend felis pretium feugiat. Praesent nonummy mi in odio. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi.\r\nNulla porta dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Aliquam eu nunc. Fusce fermentum odio nec arcu. Fusce fermentum odio nec arcu.</p>\r\n<p>Maecenas egestas arcu quis ligula mattis placerat. Fusce fermentum. Ut non enim eleifend felis pretium feugiat. Praesent nonummy mi in odio. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi.\r\nNulla porta dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Aliquam eu nunc. Fusce fermentum odio nec arcu. Fusce fermentum odio nec arcu.</p>\r\n\r\n', 'Panama', 'PHP News, PHP Events', '2022-04-19 10:50:30'),
(2, 1, 'PHP 8.3 Released', '<p>Maecenas egestas arcu quis ligula mattis placerat. Fusce fermentum. Ut non enim eleifend felis pretium feugiat. Praesent nonummy mi in odio. Donec interdum, metus et hendrerit aliquet, dolor diam sagittis ligula, eget egestas libero turpis vel mi.\r\nNulla porta dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Aliquam eu nunc. Fusce fermentum odio nec arcu. Fusce fermentum odio nec arcu.</p>', 'Panada', 'PHP News', '2022-04-19 10:50:30'),
(6, 4, 'Panama The Guy', 'Nullam vel sem. In ac felis quis tortor malesuada pretium. In consectetuer turpis ut velit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Pellentesque ut neque.\r\n\r\nNam ipsum risus, rutrum vitae, vestibulum eu, molestie vel, lacus. Etiam ultricies nisi vel augue. Vivamus consectetuer hendrerit lacus. Cras varius. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.', 'Hyelnat', 'The Guy, Older', '2022-04-20 14:43:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

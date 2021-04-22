-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 05:43 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jsondb`
--

-- --------------------------------------------------------

--
-- Table structure for table `json_details`
--

CREATE TABLE `json_details` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `json_details`
--

INSERT INTO `json_details` (`id`, `userId`, `title`, `body`) VALUES
(1, 1, 'sunt aut facere repellat provident occaecati excep', 'quia et suscipitsuscipit recusandae consequuntur e'),
(2, 1, 'qui est esse', 'est rerum tempore vitaesequi sint nihil reprehende'),
(3, 1, 'ea molestias quasi exercitationem repellat qui ips', 'et iusto sed quo iurevoluptatem occaecati omnis el'),
(4, 1, 'eum et est occaecati', 'ullam et saepe reiciendis voluptatem adipiscisit a'),
(5, 1, 'nesciunt quas odio', 'repudiandae veniam quaerat sunt sedalias aut fugia'),
(6, 1, 'dolorem eum magni eos aperiam quia', 'ut aspernatur corporis harum nihil quis provident '),
(7, 1, 'magnam facilis autem', 'dolore placeat quibusdam ea quo vitaemagni quis en'),
(8, 1, 'dolorem dolore est ipsam', 'dignissimos aperiam dolorem qui eumfacilis quibusd'),
(9, 1, 'nesciunt iure omnis dolorem tempora et accusantium', 'consectetur animi nesciunt iure doloreenim quia ad'),
(10, 1, 'optio molestias id quia eum', 'quo et expedita modi cum officia vel magnidoloribu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `json_details`
--
ALTER TABLE `json_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `json_details`
--
ALTER TABLE `json_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

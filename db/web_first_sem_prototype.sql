-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Vært: 127.0.0.1
-- Genereringstid: 15. 09 2022 kl. 08:37:07
-- Serverversion: 10.1.38-MariaDB
-- PHP-version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_first_sem_prototype`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(256) NOT NULL,
  `fk` int(11) NOT NULL,
  `fk_target` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `user_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `fk`, `fk_target`, `likes`, `date`, `user_fk`) VALUES
(1, 'Aargh! Thats the scallywag from Hearthstone', 1, 1, 0, '2022-09-14-20-25-56', 3),
(2, 'Aaaaargh! I face ya in that stupid game all the time', 1, 2, 0, '2022-09-14-20-27-28', 4),
(3, 'I hate pirate decks...', 1, 2, 0, '2022-09-14-21-08-42', 5);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(128) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `likes` int(11) DEFAULT NULL,
  `date` varchar(20) NOT NULL,
  `sticky` int(11) NOT NULL,
  `user_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `description`, `image`, `likes`, `date`, `sticky`, `user_fk`) VALUES
(1, 'Argh lads ever heard of Patches the Pirate?', 'Chaaaaaaaaaaaarge!', '12030213_120434.png', 0, '2022-09-14-20-22-52', 0, 4);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL,
  `password` varchar(110) NOT NULL,
  `liked_posts` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`user_id`, `name`, `password`, `liked_posts`) VALUES
(1, '2', '2', NULL),
(2, 'a', 'a', NULL),
(3, 'Worthy Opponant', 'a', NULL),
(4, 'Niclas', 'hashed', NULL),
(5, 'Pirate Hater', 'fpirates', NULL);

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indeks for tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tilføj AUTO_INCREMENT i tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

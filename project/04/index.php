<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Lesson 04</title>
		<link rel="stylesheet" href="review.css">
	</head>
	
	<body>
    
		<header id="page-header">
			<img src="http://bacs200.unco.edu/BACS_200/img/Bear.png" alt="Bear" width="150">
			<h1>SQL Shenanigans</h1>
		</header>
        
		<main>
            <aside>
                <h2>Parts of this Page</h2>
                <ul>
                    <li>My SQL file!</li>
				</ul>
            </aside>
			<hr>

			<h2>SQL</h2>


				<p>By: Jessica Herold</p>
          <p>=<img src="Capture.jpg" alt="Screenshot" width="1292"></p>


<p>-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2018 at 04:00 PM
-- Server version: 5.6.39-83.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jessigc3_subscribers`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(3) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
</p>

			<h2>My SQL</h2>

        </main>
		<hr>
        <footer>
		<h2>Google Search</h2>
			<p>Use this form to search for content on Google.</p>

			<form action="http://google.com/search" target="_blank">
				<input type="search" name="q" size="30" maxlength="255">
				<input type="submit">
			</form>
		<hr>
            <p>By: <b>Jessica Herold</b> , <i> Feb 5 - Greeley, CO</i></p>
            <p>&copy; Copyright 2018 - Jessica, Jessie, Jess</p>
        </footer>
    </body>
</html>
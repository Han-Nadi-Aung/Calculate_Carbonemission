-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 13, 2023 at 02:37 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `caremit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admilogin`
--

CREATE TABLE `admilogin` (
  `AID` int(11) NOT NULL,
  `Aname` varchar(225) NOT NULL,
  `Apwd` varchar(225) NOT NULL,
  `Aemail` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admilogin`
--

INSERT INTO `admilogin` (`AID`, `Aname`, `Apwd`, `Aemail`) VALUES
(1, 'Admin', 'Admin2003#', 'admin2004@gmail.com'),
(2, 'Apple', 'Apple20045^', 'apple222@gmail.com'),
(3, 'Khin', 'Khin223$', 'khin2003@gmail.com'),
(4, 'rrr', 'rrrrr', 'rrrr@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customerlogin`
--

CREATE TABLE `customerlogin` (
  `ccid` int(11) NOT NULL,
  `cnamee` varchar(225) NOT NULL,
  `cpwdd` varchar(225) NOT NULL,
  `cemaill` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerlogin`
--

INSERT INTO `customerlogin` (`ccid`, `cnamee`, `cpwdd`, `cemaill`) VALUES
(1, 'Hanna', 'hanna2004', 'hanna2004@gmail.com'),
(2, 'apple', 'apple', 'apple123@gmail.com'),
(3, 'Ko Aung', 'aung123@', 'aung669@gmail.com'),
(4, 'Nadi', 'Nadi88', 'nadi2221@gmail.com'),
(5, 'Nadi', 'nadi2004', 'nadi2003@gmail.com'),
(6, 'Han Nadi Aung', 'hanna29912@', 'hannadiag1003@gmail.com'),
(7, 'Khin', 'khin10023@', 'khin100922@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `HID` int(11) NOT NULL,
  `Himg` mediumtext NOT NULL,
  `Hname` mediumtext NOT NULL,
  `Hdesc` varchar(10000) NOT NULL,
  `Hcal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`HID`, `Himg`, `Hname`, `Hdesc`, `Hcal`) VALUES
(1, 'NetflixRX (1).jfif', 'Netflix \r\n                ', 'Netflix provides the service of streaming videos. This emits 1.67 g of carbon dioxide per minute totally from data servers. According to reports, in 2019, 63.5 grams are emitted in 30 minutes in Australia. Otherwise, in Norway, it only emitted\r\n                        0.74 grams. To clarify clearly, 4 miles drive is the same as the carbon dioxide emission rate on streaming videos for 45 hours.\r\n                ', 1.67),
(2, 'f31160a633767d91beadb8cb142f1cd8.jpg', 'Instagram', 'Due to the reports of 2020, streaming videos can able to function on the Instagram platform. For streaming videos, to estimate it is just around 0.62 to 0.72 grams per minute emits carbon dioxide. This amount is emitted while making host on videos or viewing videos on live streaming.', 0.62),
(3, 'Captwwwure.PNG', 'You-Tube', 'YouTube emits 0.46 grams of carbon dioxide per minute. On the YouTube platform, it can able to stream videos and service of sharing videos. This can be applied to many mobile devices such as Pc, tablets, I-pads, MacBook, laptops, and others.', 0.46),
(4, 'Disney+ icon.jfif ', 'Disney +', 'This is also one of the streaming platforms. This service, includes classics, Marvel, Nat Geo, Disney, Star Wars, series, and updated releases. For a minute, it emits about 6.67 grams of carbon dioxide totally.', 6.67),
(5, 'unnamed.png', 'Fubo TV ', 'FuboTV is an American over-the-top internet television service which offers live TV streaming, on-demand video, and cloud-based DVR services. It offers several subscription plans. The service can be accessed on a variety of devices, including smart TVs, streaming devices, smartphones, and tablets. Basically it emits 0.92 grams of carbon dioxide per minute.', 0.92),
(6, 'prime.png', 'Prime', 'This is the provision of numerous kinds of sports, series, movies, and videos. This is also one of the streaming videos. On prime video, it can able to stream videos such as sports, movies, shows, Amazon Originals, and others. It emits 0.92 grams of carbon dioxide being emitted for a minute.', 0.92),
(7, 'Hulu logo.jfif', 'Hulu', 'This provides the most updated and the best movies shown on this platform. This is also the American streaming service platform which is mostly possessed by The Walt Disney. For the emission, it is estimated about 7.35 grams during a minute on the emission of carbon dioxide. But when the video is provided with high-quality, good resolution and other performance of display on videos are perfect it actually emits about 7 gigabytes for an hour.\r\n              ', 7.35),
(8, 'HBO Max loago.jfif', 'HBO MAX', 'HBO Max is mostly similar to either Hulu or Netflix. This serves for streaming updated videos by demand. On this platform, it provides more than an amount of 10,000 hours of authentic videos and others registered videos. This emits 0.92 grams of carbon dioxide according to an estimation on a minute.               ', 0.92),
(9, 'Wirecast Go.jfif', 'Wirecast Go ', 'This is the application of streaming video on live sessions by the use of Telestream. They allow end-users to videocast their live videos with mobile phones and other devices on famous platforms of video streaming. For example, YouTube, Facebook and etc. This is available on both IOS and android phones. For a minute, it actually emits 0.92 grams of carbon dioxide.\r\n               ', 0.92),
(10, '01d5f333caf5064213ae7e0a76017006.jpg', 'Twitch', 'Especially favor streaming the video game. Moreover, it can able to stream other features such as music, imaginative content, and others. This application is friendlier to live streamers and viewers as they can follow, chat, and donate money to the streamers whom they stan.It emits 1 gram for a minute of carbon dioxide as it either depending on the calculation of 3 hours of streaming with 165 grams emitted within that duration time.\r\n               ', 1),
(11, 'e406192290967ba61e8277e7dbfde0a5.jpg', 'Tik Tok', 'It can only stream short video from uploaded accounts.There is a platforms to show creativity, talent, reviews, inspirations and vlogs.It is mostly popular between young people. This is launched in 2016 September by Chinese technology company. It actually emits 2.63 grams of carbon dioxide for a minute for streaming videos.\r\n                   ', 2.63);

-- --------------------------------------------------------

--
-- Table structure for table `usagehistory`
--

CREATE TABLE `usagehistory` (
  `UID` int(11) NOT NULL,
  `ccid` int(11) NOT NULL,
  `Uamount` varchar(225) NOT NULL,
  `Umin` varchar(225) NOT NULL,
  `Uplat` varchar(225) NOT NULL,
  `Utotal` varchar(225) NOT NULL,
  `Date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usagehistory`
--

INSERT INTO `usagehistory` (`UID`, `ccid`, `Uamount`, `Umin`, `Uplat`, `Utotal`, `Date`) VALUES
(93, 2, '11', ' 11', '  Twitch', ' 4015 ', ' 2023-05-04 23:50:02'),
(94, 2, '28.93', ' 11', '  Tik Tok', ' 10559.45 ', ' 2023-05-04 23:50:14'),
(95, 2, '28.93', ' 11', '  Tik Tok', ' 10559.45 ', ' 2023-05-05 00:02:20'),
(96, 2, '28.93', ' 11', '  Tik Tok', ' 10559.45 ', ' 2023-05-05 00:02:30'),
(97, 2, '28.93', ' 11', '  Tik Tok', ' 10559.45 ', ' 2023-05-05 00:02:40'),
(98, 2, '28.93', ' 11', '  Tik Tok', ' 10559.45 ', ' 2023-05-05 00:02:47'),
(99, 2, '28.93', ' 11', '  Tik Tok', ' 10559.45 ', ' 2023-05-05 00:02:56'),
(100, 2, '28.93', ' 11', '  Tik Tok', ' 10559.45 ', ' 2023-05-05 00:03:10'),
(101, 2, '28.93', ' 11', '  Tik Tok', ' 10559.45 ', ' 2023-05-05 00:03:22'),
(102, 2, '28.93', ' 11', '  Tik Tok', ' 10559.45 ', ' 2023-05-05 00:03:34'),
(103, 2, '28.93', ' 11', '  Tik Tok', ' 10559.45 ', ' 2023-05-05 00:03:46'),
(104, 2, '28.93', ' 11', '  Tik Tok', ' 10559.45 ', ' 2023-05-05 00:03:57'),
(105, 2, '28.93', ' 11', '  Tik Tok', ' 10559.45 ', ' 2023-05-05 00:04:15'),
(106, 1, '30.36', ' 33', '  Fubo TV ', ' 11081.4 ', ' 2023-05-05 00:42:12'),
(107, 2, '20.24', ' 22', '  HBO MAX', ' 7387.6 ', ' 2023-05-05 10:31:10'),
(108, 4, '20.46', ' 33', '  Instagram', ' 7467.9 ', ' 2023-05-05 13:30:16'),
(109, 2, '6.9', ' 15', '  You-Tube', ' 2518.5 ', ' 2023-05-05 14:11:23'),
(110, 1, '75.15', ' 45', '  Netflix \r\n                ', ' 27429.75 ', ' 2023-05-08 15:36:41'),
(111, 1, '1.24', ' 2', '  Instagram', ' 452.6 ', ' 2023-05-08 15:37:12'),
(112, 1, '2.48', ' 4', '  Instagram', ' 905.2 ', ' 2023-05-15 16:11:09'),
(113, 1, '91.08', ' 99', '  HBO MAX', ' 33244.2 ', ' 2023-05-15 16:21:51'),
(114, 1, '41.4', ' 45', '  Prime', ' 15111 ', ' 2023-05-15 20:43:33'),
(115, 1, '93.52', ' 56', '  Netflix \r\n                ', ' 34134.8 ', ' 2023-05-16 13:17:05'),
(116, 1, '36.8', ' 40', '  Wirecast Go ', ' 13432 ', ' 2023-05-19 00:36:48'),
(117, 1, '1.67', ' 1', '  Netflix \r\n                ', ' 609.55 ', ' 2023-05-19 09:12:40'),
(118, 1, '0.62', ' 1', '  Instagram', ' 226.3 ', ' 2023-05-19 09:17:50'),
(119, 1, '0.46', ' 1', '  You-Tube', ' 167.9 ', ' 2023-05-19 09:18:56'),
(120, 1, '6.67', ' 1', '  Disney +', ' 2434.55 ', ' 2023-05-19 09:19:32'),
(121, 1, '0.92', ' 1', '  Fubo TV ', ' 335.8 ', ' 2023-05-19 09:21:11'),
(122, 1, '0.92', ' 1', '  Prime', ' 335.8 ', ' 2023-05-19 09:21:51'),
(123, 1, '7.35', ' 1', '  Hulu', ' 2682.75 ', ' 2023-05-19 09:23:38'),
(124, 1, '0.92', ' 1', '  HBO MAX', ' 335.8 ', ' 2023-05-19 09:24:07'),
(125, 1, '0.92', ' 1', '  Wirecast Go ', ' 335.8 ', ' 2023-05-19 09:24:34'),
(126, 1, '1', ' 1', '  Twitch', ' 365 ', ' 2023-05-19 09:24:53'),
(127, 1, '1', ' 1', '  Twitch', ' 365 ', ' 2023-05-19 09:26:01'),
(128, 1, '2.63', ' 1', '  Tik Tok', ' 959.95 ', ' 2023-05-19 09:26:31'),
(129, 1, '10.12', ' 11', '  Wirecast Go ', ' 3693.8 ', ' 2023-05-19 09:56:32'),
(130, 1, '89.42', ' 34', '  Tik Tok', ' 32638.3 ', ' 2023-05-19 09:57:01'),
(131, 1, '404.25', ' 55', '  Hulu', ' 147551.25 ', ' 2023-05-19 09:57:12'),
(132, 1, '32.86', ' 53', '  Instagram', ' 11993.9 ', ' 2023-05-19 09:57:26'),
(133, 1, '34.72', ' 56', '  Instagram', ' 12672.8 ', ' 2023-05-19 10:01:05'),
(134, 1, '60.72', ' 66', '  Wirecast Go ', ' 22162.8 ', ' 2023-05-19 10:01:29'),
(135, 1, '56.12', ' 61', '  Fubo TV ', ' 20483.8 ', ' 2023-05-19 10:01:47'),
(136, 1, '53.44', ' 32', '  Netflix \r\n                ', ' 19505.6 ', ' 2023-05-19 10:02:06'),
(137, 1, '1.67', ' 1', '  Netflix \r\n                ', ' 609.55 ', ' 2023-06-13 22:11:58'),
(138, 1, '0.62', ' 1', '  Instagram', ' 226.3 ', ' 2023-06-13 22:13:14'),
(139, 1, '0.46', ' 1', '  You-Tube', ' 167.9 ', ' 2023-06-13 22:13:32'),
(140, 1, '0.62', ' 1', '  Instagram', ' 226.3 ', ' 2023-06-13 22:13:44'),
(141, 1, '0.46', ' 1', '  You-Tube', ' 167.9 ', ' 2023-06-13 22:13:57'),
(142, 1, '6.67', ' 1', '  Disney +', ' 2434.55 ', ' 2023-06-13 22:14:15'),
(143, 1, '0.92', ' 1', '  Fubo TV ', ' 335.8 ', ' 2023-06-13 22:14:37'),
(144, 1, '0.92', ' 1', '  Prime', ' 335.8 ', ' 2023-06-13 22:14:57'),
(145, 1, '7.35', ' 1', '  Hulu', ' 2682.75 ', ' 2023-06-13 22:15:18'),
(146, 1, '0.92', ' 1', '  HBO MAX', ' 335.8 ', ' 2023-06-13 22:15:35'),
(147, 1, '0.92', ' 1', '  Wirecast Go ', ' 335.8 ', ' 2023-06-13 22:15:54'),
(148, 1, '1', ' 1', '  Twitch', ' 365 ', ' 2023-06-13 22:16:10'),
(149, 1, '2.63', ' 1', '  Tik Tok', ' 959.95 ', ' 2023-06-13 22:16:19'),
(150, 5, '1.24', ' 2', '  Instagram', ' 452.6 ', ' 2023-06-14 01:42:39'),
(151, 1, '5.26', ' 2', '  Tik Tok', ' 1919.9 ', ' 2023-06-19 13:19:26'),
(152, 3, '1', ' 1', '  Twitch', ' 365 ', ' 2023-06-20 22:55:34'),
(153, 7, '1.24', ' 2', '  Instagram', ' 452.6 ', ' 2023-06-21 00:30:37'),
(154, 1, '3.34', ' 2', '  Netflix \r\n                ', ' 1219.1 ', ' 2023-06-26 16:13:03'),
(155, 1, '1.38', ' 3', '  You-Tube', ' 503.7 ', ' 2023-06-26 16:13:20'),
(156, 1, '1.24', ' 2', '  Instagram', ' 452.6 ', ' 2023-07-01 23:03:16'),
(157, 1, '1.24', ' 2', '  Instagram', ' 452.6 ', ' 2023-07-01 23:05:43'),
(158, 1, '13.34', ' 2', '  Disney +', ' 4869.1 ', ' 2023-07-21 00:09:34'),
(159, 1, '2.76', ' 3', '  Prime', ' 1007.4 ', ' 2023-07-21 00:10:05'),
(160, 2, '1.86', ' 3', '  Instagram', ' 678.9 ', ' 2023-07-21 14:31:25'),
(161, 2, '4.6', ' 5', '  Wirecast Go ', ' 1679 ', ' 2023-07-21 14:31:50'),
(162, 2, '0.62', ' 1', '  Instagram', ' 226.3 ', ' 2023-07-21 14:37:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admilogin`
--
ALTER TABLE `admilogin`
  ADD PRIMARY KEY (`AID`);

--
-- Indexes for table `customerlogin`
--
ALTER TABLE `customerlogin`
  ADD PRIMARY KEY (`ccid`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`HID`);

--
-- Indexes for table `usagehistory`
--
ALTER TABLE `usagehistory`
  ADD PRIMARY KEY (`UID`),
  ADD KEY `Ccid` (`ccid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admilogin`
--
ALTER TABLE `admilogin`
  MODIFY `AID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customerlogin`
--
ALTER TABLE `customerlogin`
  MODIFY `ccid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `HID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `usagehistory`
--
ALTER TABLE `usagehistory`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usagehistory`
--
ALTER TABLE `usagehistory`
  ADD CONSTRAINT `Ccid` FOREIGN KEY (`ccid`) REFERENCES `customerlogin` (`ccid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2021 at 05:14 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goan_matka`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '3fc0a7acf087f549ac2b266baf94b8b1');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `date` date NOT NULL,
  `open_patti` int(11) DEFAULT NULL,
  `open_ank` int(11) DEFAULT NULL,
  `close_patti` int(11) DEFAULT NULL,
  `close_ank` int(11) DEFAULT NULL,
  `holiday` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0-working, 1-hoilday'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `type`, `date`, `open_patti`, `open_ank`, `close_patti`, `close_ank`, `holiday`) VALUES
(8, 3, '2021-10-24', NULL, 0, 0, 0, 1),
(9, 1, '2021-10-23', NULL, NULL, NULL, NULL, 1),
(10, 1, '2021-10-08', 456, 4, 455, 5, 0),
(11, 1, '2021-10-08', 456, 4, 455, 5, 0),
(12, 1, '2021-10-08', 456, 4, 455, 5, 0),
(13, 1, '2021-10-16', 154, 4, 455, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL,
  `que` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `open_time`, `close_time`, `que`) VALUES
(1, 'KALYAN', '03:25:00', '14:16:00', 1),
(2, 'MAIN NIGHT', '11:00:00', '18:00:00', 5),
(3, 'test', '07:00:00', '22:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id` int(11) NOT NULL,
  `que` int(11) DEFAULT NULL,
  `type` int(11) NOT NULL,
  `header` text DEFAULT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id`, `que`, `type`, `header`, `content`) VALUES
(1, 2, 1, 'Golden Ank', '<p>1-2-3-1</p>'),
(3, 1, 2, 'DpBoss Net Weekly Patti Or Penal Chart From 18-10-2021 To 24-10-2021 For Kalyan, Milan, Kalyan Night, Rajdhani, Time, Main Bazar, Mumbai Royal Night', '<p class=\"ql-align-center\">1=&gt;470 290 119 380</p><p class=\"ql-align-center\"><br></p><p class=\"ql-align-center\">2=&gt;589 570 138 480</p><p class=\"ql-align-center\"><br></p><p class=\"ql-align-center\">3=&gt;139 238 148 580</p><p class=\"ql-align-center\"><br></p><p class=\"ql-align-center\">4=&gt;680 112 239 149</p><p class=\"ql-align-center\"><br></p><p class=\"ql-align-center\">5=&gt;357 799 159 690</p><p class=\"ql-align-center\"><br></p><p class=\"ql-align-center\">6=&gt;268 790 169 358</p><p class=\"ql-align-center\"><br></p><p class=\"ql-align-center\">7=&gt;269 368 458 160</p><p class=\"ql-align-center\"><br></p><p class=\"ql-align-center\">8=&gt;350 116 260 170</p><p class=\"ql-align-center\"><br></p><p class=\"ql-align-center\">9=&gt;289 379 180 360</p><p class=\"ql-align-center\"><br></p><p class=\"ql-align-center\">0=&gt;460 280 370 190</p>'),
(5, 4, 2, 'DpBoss Net Weekly Jodi Chart From 18-10-2021 To 24-10-2021 For Kalyan Milan Kalyan Night, Rajdhani Time, Main Bazar, Mumbai Royal Night Market', '<p class=\"ql-align-center\">50-55-51-57</p><p class=\"ql-align-center\">91-96-92-97</p><p class=\"ql-align-center\">31-36-34-39</p><p class=\"ql-align-center\">74-79-73-78</p><p class=\"ql-align-center\">23-28-1-26</p><p class=\"ql-align-center\">84-89-85-80</p>'),
(6, 1, 3, 'MILAN MORNING', '<p class=\"ql-align-center\">3-8-4-9</p><p class=\"ql-align-center\">34-39-84-89-93-98-43-48</p><p class=\"ql-align-center\">789-157-148-135-450-125</p>'),
(7, 1, 4, 'a', '<p class=\"ql-align-center\">कल्याण सिंगल जोड़ी स्कीम दिनांक-20-10-2021</p><p class=\"ql-align-center\">&nbsp;बुधवार के लिए यह ट्रिक,स्कीम जोड़ी के टोटल और क्लोज़ ओपन&nbsp;होने की दशा पर आधारित है। हमारे द्वारा बहुत प्रयास किया गया है पर आपको छोटे रूप में लाइन दिखा रहे है चलिए आपको दिखाते हैं</p><p class=\"ql-align-center\">&nbsp;&nbsp;सिंगल जोड़ी की लाइन--&gt;</p><p class=\"ql-align-center\">आज से&nbsp;17 हफ्ते पहले</p><p class=\"ql-align-center\">शुरुआत तारीख -09-08-2021</p><p class=\"ql-align-center\"> सो&nbsp;&nbsp;मं&nbsp;&nbsp;बुध&nbsp;&nbsp;गुरु&nbsp;&nbsp;शुक्र&nbsp;शनि</p><p class=\"ql-align-center\">&nbsp;26&nbsp;××&nbsp;66&nbsp;&nbsp;××&nbsp;&nbsp;&nbsp;××&nbsp;&nbsp;&nbsp;××</p><p class=\"ql-align-center\">&nbsp;66&nbsp;××&nbsp;66&nbsp;&nbsp;××&nbsp;&nbsp;&nbsp;××&nbsp;&nbsp;&nbsp;&nbsp;××</p><p class=\"ql-align-center\"> जब भी पहले वीक सोमवार&nbsp;जोड़ी 26 आता है&nbsp;तो जोड़ी का क्लोज़&nbsp;या ओपन 2 या 6 शनिवार को आता है,शनिवार जोड़ी 66</p><p class=\"ql-align-center\">बनता है ,अगले वीक में बुधवार जोड़ी 66 फिर से आने पर</p><p class=\"ql-align-center\">&nbsp;आगे देखें,,,</p><p class=\"ql-align-center\">लाइन को छोटे रूप में दिखा दिया है&nbsp;शनिवार जोड़ी 43 जोड़ी</p><p class=\"ql-align-center\">&nbsp;आने के तत्पश्चात</p><p class=\"ql-align-center\">&nbsp;&nbsp;×× ×× ××</p><p class=\"ql-align-center\">××××××××××××××</p><p class=\"ql-align-center\">फाइनल सेट 18 हफ्ते नीचे</p><p class=\"ql-align-center\">सो&nbsp;&nbsp;मं&nbsp;&nbsp;&nbsp;बुध&nbsp;&nbsp;गुरु&nbsp;शुक्र&nbsp;शनि</p><p class=\"ql-align-center\">××&nbsp;&nbsp;××&nbsp;&nbsp;91&nbsp;&nbsp;&nbsp;××&nbsp;&nbsp;××&nbsp;&nbsp;××</p><p class=\"ql-align-center\">74&nbsp;&nbsp;××&nbsp;&nbsp;??&nbsp;&nbsp;&nbsp;××&nbsp;&nbsp;××&nbsp;&nbsp;××</p><p class=\"ql-align-center\">????????????</p><p class=\"ql-align-center\">{आज&nbsp;बुधवार&nbsp;जोड़ी }</p><p class=\"ql-align-center\"> क्या आएगा ट्रिक स्कीम का आधार है</p><p class=\"ql-align-center\">हमारे अध्य्यन के कठिन मेहनत से आज कल्याण बाजार में&nbsp;आज शनिवार जोड़ी टोटल 2&nbsp;&nbsp;होना चाहिए और&nbsp;-अंक 3-8-2-4 -ओपन में आना चाहिए और जोड़ी 38-83-29-47 की फैमिली से आना चाहिए ओपन पत्ती&nbsp;238 या</p><p class=\"ql-align-center\">378-345-789आना चाहिए \"\"धन्यवाद\"\"\" प्रोफेसर:-&nbsp;डी*पी*बॉस</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

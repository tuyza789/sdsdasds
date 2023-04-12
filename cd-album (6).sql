-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2022 at 11:39 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cd-album`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(6) NOT NULL,
  `ad_name` varchar(200) NOT NULL,
  `ad_usr` varchar(200) NOT NULL,
  `ad_pwd` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_usr`, `ad_pwd`) VALUES
(0, 'mew', 'mew', 25),
(1, 'sarika', 'sarika', 25);

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id_a` int(11) NOT NULL,
  `name_a` varchar(200) NOT NULL,
  `art_a` varchar(200) NOT NULL,
  `price_a` int(11) NOT NULL,
  `album_a` varchar(200) NOT NULL,
  `detail_a` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `type_a` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id_a`, `name_a`, `art_a`, `price_a`, `album_a`, `detail_a`, `type_a`) VALUES
(100001, 'Polycat', 'เวลาเธอยิ้ม', 1790, '80 kisses', 'POLYCAT 1st Album ในรูปแบบ \r\nCassette Tape พร้อมรูปถ่ายโพลารอยด์วง Polycat\r\nLimited Run Number [1-557]\r\nMade In Canada\r\nเพลงในอัลบั้ม: เพื่อนไม่จริง,ภักดี,\r\nเพื่อนพระเอก,เวลาเธอยิ้ม,มันเป็นใคร\r\n\r\n\r\n', 1),
(100002, 'Paradox', 'ฤดูร้อน', 1490, 'On the beach', 'ALBUM HI-RES SERIES Paradox อัลบั้ม Summer \r\nMade in USA Remastered 24 bit (ปี 2562)\r\nเพลงในอัลบั้ม: ฤดูร้อน,sexy,ทาส,\r\nบ่วงไฟ,ขอ', 1),
(100003, 'Three man down', 'ฝนตกไหม', 1650, 'The City won\'t Be Lonely Anymore', 'CD Three Man Down \r\nชุด This City Won\'t Be Lonely Anymore\r\nเพลงในอัลบั้ม: เดาไม่เก่ง,ข้างกัน\r\nเลือกคนที่เขารักเรา,คุยคนเดียวเก่ง\r\nFriend Zone', 1),
(100004, 'TillyBirds', 'ลู่วิ่ง', 1700, 'It\'s Gonna Be OK', 'Boxset Tilly Birds อัลบั้ม It’s Gonna Be OK \r\nมือ 1 ซีลปิด Limited 5,000 Copies (ปี 2564)\r\nเพลงในอัลบั้ม: เพื่อนเล่นไม่เล่นเพื่อน,เบื่อคนขี้เบื่อ\r\nเดอะแบก,ติดตรงที่ฉัน,ลู่วิ่ง', 1),
(100005, 'BlackBeans', 'Him', 1700, 'You(Are) Mean a Lot to Me', 'BLACKBEANS : You (Are) Mean a Lot to Me\r\nสภาพมือหนึ่ง \r\nผลิตมาจำนวนจพกัด เพียง 650แผ่นเท่านั้น\r\n(ปัจจุบันนี้หายากแล้วสำหรับอัลบั้มนี้)\r\nเพลงในอัลบั้ม: Open Your Eyes,Blue Postcard\r\nAbout Love,This Nig', 1),
(100006, '4eve', 'Trick or Treat', 999, 'Trick or Treat', 'การ์ดจากอัลบั้ม Tales of 4EVE : THE FIRST ALBUM \r\nอัลบั้มแรกของ7สาว 4EVE\r\nเพลงในอัลบั้ม: Booty Bomb\r\nTrick or Treat,ภาพหลอน,\r\nNobody\'s Perfact', 1),
(100007, 'Ink Waruntorn', 'อยากเริ่มต้นใหม่กับคนเดิม', 1900, 'INK', '“ INK ”\r\nINK WARUNTORN ALBUM “ INK ”\r\n10 TRACKS\r\n10 COLORS OF INK WARUNTORN\r\nในรูปแบบ VINYL & CASSETTE TAPE\r\nเพลงในอัลบั้ม: อยากเริ่มต้นใหม่กับคนเดิม,\r\nลบไม่ได้ช่วยให้ลืม,สายตาหลอกกันไม่ได้,\r\nกลับก่อน', 1),
(100008, 'Pixxie', 'มูเตลู', 1200, 'BLOOM', 'PiXXiE 1st FULL ALBUM : BLOOM\r\nเพลงอัลบั้ม : มูเตลู\r\nเด็ด\r\nNot Bad\r\nไม่ได้ก็ไม่เอา\r\nเกินต้าน', 1),
(100009, 'Proxie', 'คนไม่คุย', 450, 'Silent Mode', 'Silent Mode 1st album\r\nเพลงในอัลบั้ม : คนไม่คุย\r\nรักบ้าบอ', 1),
(100010, 'BAMMM', 'ปล่อยจอย', 750, 'เศร้าศาสตร์', '1st FULL ALBUM : เศร้าศาสตร์ (So Sad)\r\nเพลงในอัลบั้ม : ปล่อยจอย\r\nเอ๋ง\r\nใครเพื่อนแก\r\nฉันจะฉาปเธอ\r\nSad O\'Cllock', 1),
(100011, 'Nont Tanont', 'วันครบเลิก', 1090, 'Cigarette Candy & Vanilla Sky', 'THE FIRST ALBUM OF NONT TANONT\r\nเพลงในอัลบั้ม : วันครบเลิก\r\nผ้าพันแผล\r\nโต๊ะริม\r\nทุกนาทีที่สวยงาม\r\nแค่แอบหวัง', 1),
(100012, 'Pretzelle', 'ก็เธอน่ะน่ารัก', 590, 'Ready or Not?', 'Mini Album PRETZELLE DAY ใน 1 ชุด ประกอบด้วย\r\nPhotobook  40 หน้า\r\nCD 1 แผ่น\r\nTrading Card 2 แผ่น\r\nเพลงในอัลบั้ม: ก็เธอน่ะน่ารัก,\r\nถ้ามันคือเรื่องจริง,Ready or Not,\r\nOh My God!,อยากเจอเธอแล้ว', 1),
(200001, 'BlackPink', 'Pink Venom', 1240, 'BORN PINK', '[BLACKPINK] อัลบั้ม 2nd ALBUM \r\n[BORN PINK] DIGIPACK ver.\r\nเพลงในอัลบั้ม: Pink Venom,\r\nShut Down,Type Girl,\r\nHard to Love,Tally', 2),
(200002, 'Newjeans', 'Hype Boy\r\n', 1100, 'Newjeans 1st EP\'New Jeans', '[NewJeans] อัลบั้ม 1st EP \'New Jeans\' \r\n[Bluebook ver./ Weverse ver.]\r\nเพลงในอัลบั้ม: Attention,\r\nHype Boy,cookie,Hurt', 2),
(200003, 'BTS', 'Dynamite', 1850, 'Butter', 'ภายใน 1 ชุดประกอบด้วย\r\n- PHOTO BOOK 1 เล่ม (แยกตามเวอร์ชั่น)\r\n- LYRIC CARDS 2 ชิ้น\r\n- INSTANT PHOTO CARD 1 ชิ้น\r\nเพลงในอัลบั้ม: Butter,\r\nPermission to Dance', 2),
(200004, 'ASPA', 'Next Level', 1600, 'The 1st Mini Album', 'TREASURE 1st MINI ALBUM\r\n[THE SECOND STEP : CHAPTER ONE] PHOTOBOOK ver.\r\nเพลงในอัลบั้ม: aenergy,Savage,\r\nI\'ll Make You Cry,Next Level,Iconic\r\n\r\n', 2),
(200005, 'AB6IX', 'stay young', 1200, 'SALUE:A NEW Hope', 'AB6IX - The 3rd Mini Album Repackage \r\n[SALUTE : A NEW HOPE]\r\nเพลงในอัลบั้ม: stay young,\r\nMirror,Salute,Bloom,Encore', 2),
(200006, 'TREASURE', 'Jikjin', 1750, 'The Second Step:Chapter One', '[TREASURE]  THE SECOND \r\nSTEP : CHAPTER ONE + POSTER\r\nเพลงในอัลบั้ม: Jikjin,U,Darari,\r\nIt\'s OKAY', 2),
(200007, 'IVE', 'After Like', 1390, 'IVE 3rd single Album', 'IVE - 3rd SINGLE ALBUM [After Like]\r\nเพลงในอัลบั้ม: After Like,\r\nMy Satisfaction', 2),
(200008, 'Red Velvent', 'Feel My Rhythm', 1600, 'The Reve Festival 2022', '[RED VELVET] Mini Album \r\n[The ReVe Festival 2022 - Feel My Rhythm] \r\n(Orgel Ver. /ReVe Ver.)\r\nเพลงในอัลบั้ม: Feel My Rhythm,\r\nRainbow Halo,Beg for Me,\r\nIn My Dreams,BAMBOLEO', 2),
(300001, 'The 1975', 'I\'m in love with you', 1800, 'Note On A Conditional Form', 'Note On A Conditional Form\r\nเพลงในอัลบั้ม: The 1975,\r\nPeople,Streaming,Roadkill,Guys', 3),
(300002, 'Ed Sheeran', 'Perfect duet', 1690, '=', 'เพลงในอัลบั้ม: Tides,Shivers,\r\nFrist Times,Bad Habits,2Step', 3),
(300003, 'Keshi', 'always', 1450, 'always', 'เพลงในอัลบั้ม: always,drunk,\r\ntalk,us,besied you', 3),
(300004, 'Taylor Swift', 'You belong with me', 1500, 'Taylor Swift', 'เพลงในอัลบั้ม: state of grace,\r\nRed,I Knew You Were Trouble,\r\nI Almost Do,Stay Stay Stay', 3);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `cus_name` varchar(200) NOT NULL,
  `cus_phone` varchar(10) NOT NULL,
  `cus_adress` varchar(200) NOT NULL,
  `cus_user` varchar(20) NOT NULL,
  `cus_pwd` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `cus_phone`, `cus_adress`, `cus_user`, `cus_pwd`) VALUES
(000001, 'เอกชัย แน่นอุดร', '08123456', '123 ม.5 ต.ท่าขอนยาง อ.กันทรวิชัย จ.มหาสารคาม 44150', 'Ekachai', 25),
(000002, 'สมหมาย ขันทอง', '08234567', '101 ม.4 ต.หนองบัว อ.เมือง จ.อุดรธานี 410000', 'Sommai', 11001100),
(000003, 'สมโภช ทองน้ำเที่ยง', '08345678', '115 ม.2 ต.กุมภวาปี อ.กุมภวาปี จ.อุดรธานี 41110', 'Sompoch', 11110000),
(000021, 'sarika', '0981177043', '365 moo 5', 'sarika', 81),
(000025, 'hg2232', '2222', '235', 'meww', 81),
(000028, 'นางสาวสาริกา พันชมภู', '0981177043', '364 หมู่ 2 ตำบลกุมภวาปี', 'phanchomphu', 25),
(000029, 'อาจารย์ที่เคารพ', '0000025', '33 หมู่ 4', 'eak', 81),
(000031, 'สาริกา', '0981174023', '364 หมู่ 5', 'sari', 81);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `o_id` int(6) NOT NULL,
  `o_total` int(11) NOT NULL,
  `o_date` datetime NOT NULL,
  `o_member` int(6) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`o_id`, `o_total`, `o_date`, `o_member`) VALUES
(35, 1700, '2022-11-20 04:14:03', 000021),
(36, 3650, '2022-11-20 04:14:16', 000021),
(39, 1650, '2022-11-20 05:13:07', 000005),
(44, 3190, '2022-11-20 20:47:36', 000028),
(46, 3490, '2022-11-22 00:56:47', 000021),
(48, 3390, '2022-11-22 13:35:41', 000030),
(49, 1790, '2022-11-22 14:13:29', 000031),
(50, 1490, '2022-11-22 14:14:22', 000031);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `od_id` int(11) NOT NULL,
  `o_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `pid` int(11) NOT NULL,
  `item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`od_id`, `o_id`, `pid`, `item`) VALUES
(9, 000010, 100008, 1),
(10, 000010, 100001, 1),
(11, 000010, 100007, 1),
(12, 000010, 100004, 2),
(13, 000011, 100012, 1),
(14, 000012, 100007, 1),
(15, 000012, 100005, 1),
(16, 000012, 200003, 1),
(17, 000012, 100011, 1),
(50, 000026, 200006, 1),
(51, 000026, 200002, 1),
(88, 000035, 100004, 1),
(89, 000036, 200003, 1),
(90, 000036, 300001, 1),
(92, 000039, 100003, 1),
(98, 000044, 100004, 1),
(99, 000044, 100002, 1),
(103, 000046, 100001, 1),
(104, 000046, 100004, 1),
(107, 000048, 100002, 1),
(108, 000048, 100007, 1),
(109, 000049, 100001, 1),
(110, 000050, 100002, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `pt_id` int(3) NOT NULL,
  `pt_name` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`pt_id`, `pt_name`) VALUES
(1, 'T-Pop'),
(2, 'K-Pop'),
(3, 'International');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id_a`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`pt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2222223;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cus_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `o_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `od_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

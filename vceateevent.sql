-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 07:33 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vceateevent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` int(255) NOT NULL,
  `state` int(255) NOT NULL,
  `city` int(255) NOT NULL,
  `zipcode` int(255) NOT NULL,
  `pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`, `email`, `mobile`, `status`, `first_name`, `last_name`, `address`, `country`, `state`, `city`, `zipcode`, `pic`) VALUES
(1, 'admin@gmail.com', '1234', 'khan.arbani@gmail.com', '7424911889', 0, 'Harshita', 'Agrawal', 'behide shanti tower,jalori gat,Jodhpur', 1, 1, 0, 342001, 'masonry-6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_setting`
--

CREATE TABLE `admin_setting` (
  `id` int(225) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 1 COMMENT '1active/0dactive',
  `createdate` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_setting`
--

INSERT INTO `admin_setting` (`id`, `title`, `icon`, `logo`, `active`, `createdate`, `modified`) VALUES
(1, 'iFresh', 'ifreshLogo', 'ifreshLogo.png', 1, '2020-09-05', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `bannerid` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `textt` varchar(255) NOT NULL,
  `banner_section` text NOT NULL,
  `bannerstatus` int(1) NOT NULL DEFAULT 1 COMMENT '1enable,0disable',
  `bannerpic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`bannerid`, `title`, `heading`, `textt`, `banner_section`, `bannerstatus`, `bannerpic`) VALUES
(15, 'Careful Planning', 'Perfect Planning', 'Your Occasion Deserves Our Careful Planning.', 'planing', 1, 'planing1.jpg'),
(17, 'Lifetime Experience', 'Event Execution', 'Sit Back While We create The Experience Of A Lifetime.', 'planing', 1, 'planing2.jpg'),
(22, '24*7 Support', '24*7 Support', 'We Deliver Love, Laughter and Happily Ever After.', 'home', 1, 'jhgcbnv.jpg'),
(24, 'background', 'bottom background', 'We Deliver Love, Laughter and Happily Ever After.', 'home', 1, 'kjhgcv.jpeg'),
(30, 'about', 'about', 'about us', 'about', 1, 'mjhgtttr.jpg'),
(32, 'Professionalism', 'Client Dealing', 'The Sole Reason We Are In Business Is To Make Life Less Difficult For Our Clients', 'planing', 1, 'bhgftsdzx.png');

-- --------------------------------------------------------

--
-- Table structure for table `bookpackage`
--

CREATE TABLE `bookpackage` (
  `packackagebookid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `pkgid` int(255) NOT NULL,
  `inquery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookpackage`
--

INSERT INTO `bookpackage` (`packackagebookid`, `name`, `contact`, `pkgid`, `inquery_date`) VALUES
(21, 'Raana', '7332555555', 6, '2021-10-06'),
(96, 'Rahti', '6220212325', 6, '2021-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `ctid` int(255) NOT NULL,
  `stid` int(255) NOT NULL,
  `cityname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`ctid`, `stid`, `cityname`) VALUES
(1, 1, 'jodhpur'),
(2, 1, 'jaipur'),
(3, 1, 'jaisalmer'),
(4, 1, 'jalor');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(255) NOT NULL,
  `catid` int(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `category` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gname` varchar(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `bdayname` varchar(255) NOT NULL,
  `edate` timestamp NOT NULL DEFAULT current_timestamp(),
  `etime` text NOT NULL,
  `verifystatus` int(1) NOT NULL DEFAULT 0,
  `relative_name` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `mobile` varchar(25) NOT NULL,
  `altmobile` varchar(25) NOT NULL,
  `venue` text NOT NULL,
  `background` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `catid`, `email`, `category`, `name`, `lname`, `gname`, `bname`, `bdayname`, `edate`, `etime`, `verifystatus`, `relative_name`, `relation`, `mobile`, `altmobile`, `venue`, `background`, `city`, `status`) VALUES
(39, 3, 'harshitaagarwal963@gmail.', 0, 'Vidhi', 'Jain', '', '', 'Paridhi', '2021-10-30 13:30:00', '19:00:00', 1, '', 'Sister', '9166746889', '', 'Marugarh Venture Resort', 'kjuhy.jpg', 'JODHPUR', 1),
(40, 3, 'agrawalharshi2697@gmail.c', 0, 'Minal', 'Mehta', '', '', 'Raahini', '2021-01-28 18:30:00', '19:00', 1, '', 'Mother', '9166746889', '', 'Airforce home', 'YP3A1316.JPG', 'Jodhpur', 1),
(41, 1, 'harshitaagarwal963@gmail.', 0, 'harshita', 'agarwal', 'Vikas', 'Ishita', '', '2021-10-01 18:30:00', '02:00', 1, '', '', '07424911889', '07424911889', 'Marugarh Venture Resort', 'IMG_6561.jpg', 'jodhpur', 1),
(42, 5, 'premjalani@gmail.com', 0, 'javed  ', 'khan', '', '', 'adm', '2021-10-20 04:47:00', '10:17:00', 2, '', '', '9460768158', '07424911889', 'vf;lskflkslfds', 'IMG_6561.jpg', 'JODHPUR', 1),
(43, 2, 'harshitaagarwal963@gmail.', 0, 'harshita', 'agarwal', 'tobaco', 'manager', '', '2021-10-07 13:19:00', '18:49:00', 1, '', '', '07424911889', '07424911889', 'fldmslfm.,dsmf', 'IMG_6561.jpg', 'jodhpur', 1),
(45, 1, 'M.DAVE84@GMAIL.COM', 0, 'SHWETA', 'fwrafsfa', 'kkkk', 'rrrr', '', '2021-10-07 12:55:00', '18:25:00', 1, '', '', '6376222190', '6376222190', 'kolkata', 'IMG_6565.jpg', 'Jodhpur', 1),
(47, 1, 'harshitaagarwal963@gmail.', 0, 'Brijesh ', 'Bafna', 'Jain', 'Bafna', '', '2021-11-19 18:30:00', '14:00:00', 1, '', '', '7424911889', '', 'Amritam Palace', 'lkjhgf.jpg', 'JODHPUR', 1),
(48, 1, 'M.DAVE84@GMAIL.COM', 0, 'Rafique', 'pathan', 'Rafique', 'Tasleem', '', '2021-10-17 12:57:00', '18:27:00', 1, '', '', '6376222190', '07424911889', 'fdasfkasfl', 'kklll.jpg', 'Jodhpur', 1),
(49, 1, 'M.DAVE84@GMAIL.COM', 0, 'SHWETA', 'DAVE', 'Mahesh', 'meena', '', '2021-10-17 13:11:00', '18:41:00', 1, '', '', '6376222190', '9460768158', 'nkkjlkjk', 'kklll.jpg', 'Jodhpur', 1),
(50, 1, 'M.DAVE84@GMAIL.COM', 0, 'naved', 'shamma', 'Raju', 'nita', '', '2021-10-06 15:03:00', '20:33:00', 0, '', '', '6376222190', '6376222190', 'jaipur', 'kklll.jpg', 'Jodhpur', 1),
(51, 1, 'premjalani@gmail.com', 0, 'data1', 'data1', 'g1', 'b1', '', '2021-10-12 12:27:00', '17:57:00', 0, '', '', '9460768158', '9460768158', 'reqwr', 'kklll.jpg', 'JODHPUR', 1),
(52, 1, 'harshitaagarwal963@gmail.', 0, 'harshita', 'agarwal', 'narendra', 'komal', '', '2021-10-17 17:26:00', '22:56:00', 1, '', '', '07424911889', '9460768158', 'daejfhs', 'kklll.jpg', 'jodhpur', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `inquery_date` date NOT NULL,
  `venue` varchar(255) NOT NULL,
  `ocacasion` varchar(255) NOT NULL,
  `guest` varchar(50) NOT NULL,
  `budget` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `contact`, `email`, `date`, `inquery_date`, `venue`, `ocacasion`, `guest`, `budget`, `message`, `status`) VALUES
(7, 'sharya', '7332555555', 'shareya@gmail.co', '2021-10-15', '2021-10-05', 'kolkata', 'bday', '200', '2000000', 'fdafsad', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contry`
--

CREATE TABLE `contry` (
  `contryid` int(255) NOT NULL,
  `contry` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contry`
--

INSERT INTO `contry` (`contryid`, `contry`) VALUES
(1, 'India'),
(2, 'Nepal'),
(3, 'bhootan'),
(4, 'america');

-- --------------------------------------------------------

--
-- Table structure for table `cutomar_details`
--

CREATE TABLE `cutomar_details` (
  `cust_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `mobilealt` varchar(255) NOT NULL,
  `countryid` int(255) NOT NULL,
  `stateid` int(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zipcode` int(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cutomar_details`
--

INSERT INTO `cutomar_details` (`cust_id`, `first_name`, `last_name`, `dob`, `email`, `mobile`, `mobilealt`, `countryid`, `stateid`, `city`, `zipcode`, `address`) VALUES
(17, 'mr', 'khan', '2020-09-11', 'khan.arbani@gmail.com', '9001979342', '9001979342', 1, 1, '1', 344022, 'fdsaknf fasfd		'),
(19, 'Mohammad', 'Rafique', '2020-10-12', 'info.rafique687@gmail.com', '9799184788', '9799184788', 1, 1, '1', 340022, 'asdfklanfn');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(255) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_photo` varchar(255) NOT NULL,
  `upload_video` varchar(255) NOT NULL,
  `video_url` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `event_name`, `description`, `event_date`, `event_photo`, `upload_video`, `video_url`, `status`) VALUES
(1, 'Destination Wedding', 'We offer unique concepts in Destination Weddings', '2021-09-11', 'kjhgflk.jpeg,lkjh.jpg,wdmain.jpg,mandapp.jpeg,<br />\r\n<b>Warning</b>:  POST Content-Length of 125447794 bytes exceeds the limit of 41943040 bytes in <b>Unknown</b> on line <b>0</b><br />\r\n,kkkkk.jpg,12 Endlessly Fun Gender Reveal Party Games.jpg,IMG_6647.', '', '', 1),
(3, 'Corporate & Confrences', 'This gallery have all photp related to Corporate & Confrences', '0000-00-00', 'Screenshot_20210305-210940_Instagram.jpg', '', '', 1),
(4, 'Theme Birthday Party', 'Theme Birthday Party photo', '0000-00-00', 'kkkk.jpg', '', '', 1),
(5, 'Family Celebration', 'Family Celebration', '0000-00-00', 'QXVF6905.JPG', '', '', 1),
(6, 'Baby Shower', 'Baby Shower', '0000-00-00', 'bbshawer.jpg', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `evencteidd` int(255) NOT NULL,
  `parent_cateid` int(255) NOT NULL,
  `eventvideo_photo_url` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1active,0inactive',
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`evencteidd`, `parent_cateid`, `eventvideo_photo_url`, `status`, `title`) VALUES
(9, 3, 'corp.jpg', 1, 'corporate'),
(10, 3, 'bm.jpg', 1, 'business meeting'),
(11, 4, 'vbv.jpg', 1, 'bp'),
(12, 3, 'logisticss.jpg', 1, 'crp'),
(14, 5, 'engmnt.jpg', 1, 'eng'),
(15, 6, 'babyshower.jpg', 1, 'bs'),
(16, 25, 'bfd.jpg', 1, 'bday'),
(17, 4, 'IMG_6565.jpg', 1, 't bday paty towo'),
(18, 1, 'hgff.jpg,hgfcx.jpg,vcxx.jpeg', 1, 'Haldi'),
(19, 1, 'jkhvbgc.jpg', 1, 'Haldi'),
(20, 1, '62d1cd48da75fbef1a8c996b18d374cf.jpg,3af706568ec0cf2bfc68589938cb6e53.jpg,a1eb2be8426f58397b3277e062aa4104.jpg,da15d3afa3a0cddd2267f458553ef2b0.jpg,8ccdce0cb9675937ed9e749da5593bcb.jpg,c071b23a697dd7106351dc4f08886a08.jpg', 1, 'Mehandi');

-- --------------------------------------------------------

--
-- Table structure for table `inquety`
--

CREATE TABLE `inquety` (
  `inquryid` int(255) NOT NULL,
  `inqury_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `inquery_email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `inquery_date` date NOT NULL,
  `reply_status` int(1) NOT NULL DEFAULT 1 COMMENT '1not reply,2 replyed',
  `replygetid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquety`
--

INSERT INTO `inquety` (`inquryid`, `inqury_name`, `mobile`, `inquery_email`, `subject`, `message`, `inquery_date`, `reply_status`, `replygetid`) VALUES
(3, 'fdsf kkkkkkkkkkkkk', '', 'info@adiyogitechnosoft.com', '20-10-02', 'khan.arbani@gmail.com', '2020-10-02', 1, 0),
(5, 'Rafique', '', 'khan.arbani@gmail.com', '20-10-02', 'khan.arbani@gmail.com', '2020-10-02', 2, 0),
(12, 'Mohammad Rafique', '', 'info.rafique687@gmail.com', 'test 2 difok', 'dfsafafdas fdas', '2020-10-19', 1, 0),
(13, 'Mohammad', '', 'info.rafique687@gmail.com', 'fdafs', 'fdasf', '2020-10-23', 1, 0),
(14, 'Mohammad', '', 'info.rafique687@gmail.com', 'rewqr', 'rewqr', '2020-10-23', 1, 0),
(15, 'Mohammad', '', 'info.rafique687@gmail.com', 'dasf', 'fdasfsa', '2020-10-23', 1, 0),
(16, 'Mohammad', '', 'info.rafique687@gmail.com', 'testing', 'gedgfdsf', '2020-10-23', 1, 0),
(17, 'Mohammad', '', 'info.rafique687@gmail.com', 'fgsdg', 'gfdsg', '2020-10-23', 1, 0),
(18, 'Mohammad', '', 'info.rafique687@gmail.com', 'fgsdg', 'gfdsg', '2020-10-23', 1, 0),
(19, 'Mohammad Rafique', '', 'info.rafique687@gmail.com', 'testing', 'ZFZFD', '2020-11-02', 1, 0),
(20, 'Mohammad Rafique', '', 'info.rafique687@gmail.com', 'fdsa', 'fdas', '2020-11-02', 1, 0),
(21, 'Mohammad', '', 'info.rafique687@gmail.com', 'testing', 'fwg', '2020-11-05', 1, 0),
(22, 'Mohammad', '', 'info.rafique687@gmail.com', 'testing', 'fwg', '2020-11-05', 1, 0),
(23, 'llr me,m', '', 'M.DAVE84@GMAIL.COM', '', 'gfdgds', '2021-09-10', 1, 0),
(24, 'Nadeem', '', 'nasdim@gmail.com', '', 'thanks fksjf', '2021-09-10', 1, 0),
(25, 'kamlesh', '', 'kamal@gmail.com', '', 'yess test', '2021-09-10', 1, 0),
(26, '', '', '', '', '', '2021-09-13', 1, 0),
(27, '', '', '', '', '', '2021-10-01', 1, 0),
(28, 'viya sharma', '9166746889', 'agrawalharshi2697@gmail.com', '', 'mkjhgftdszxcv bnjkjihuygtfrdc', '2021-10-02', 1, 0),
(29, 'viya sharma', '9166746889', 'agrawalharshi2697@gmail.com', '', 'mkjhgftdszxcv bnjkjihuygtfrdc', '2021-10-02', 1, 0),
(30, 'viya sharma', '9166746889', 'agrawalharshi2697@gmail.com', '', 'mkjhgftdszxcvnjkjihuygtfrdc', '2021-10-02', 1, 0),
(31, 'viya', '9166746889', 'agrawalharshi2697@gmail.com', '', 'mkjhgftdszxcvnjkjihuygtfrdc', '2021-10-02', 1, 0),
(32, '', '', '', '20-10-02', 'fdsmnfsfnaam', '2021-10-04', 1, 1),
(33, 'harshita agarwal', '07424911889', 'harshitaagarwal963@gmail.com', '', 'hjhjhkj', '2021-10-04', 1, 0),
(34, 'harshita agarwal', '07424911889', 'harshitaagarwal963@gmail.com', '', 'hjhjhkj', '2021-10-04', 1, 0),
(35, 'harshita agarwal', '07424911889', 'harshitaagarwal963@gmail.com', '', 'fdh', '2021-10-04', 1, 0),
(36, 'harshita agarwal', '07424911889', 'harshitaagarwal963@gmail.com', '', 'fdh', '2021-10-04', 1, 0),
(37, 'harshita agarwal', '07424911889', 'harshitaagarwal963@gmail.com', '', 'nm', '2021-10-04', 1, 0),
(38, 'harshita agarwal', '07424911889', 'harshitaagarwal963@gmail.com', '', 'nm', '2021-10-04', 1, 0),
(39, 'harshita agarwal', '07424911889', 'harshitaagarwal963@gmail.com', '', 'nm', '2021-10-04', 1, 0),
(40, 'harshita agarwal', '07424911889', 'harshitaagarwal963@gmail.com', '', 'nm', '2021-10-04', 1, 0),
(41, 'harshita agarwal', '07424911889', 'harshitaagarwal963@gmail.com', '', 'm', '2021-10-04', 1, 0),
(42, 'harshita agarwal', '07424911889', 'harshitaagarwal963@gmail.com', '', 'm', '2021-10-04', 1, 0),
(43, 'harshiii', '9166746889', 'agrawalhaeshi2697@gmail.com', '', 'jhgfxc cvbnmj', '2021-10-06', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(255) NOT NULL,
  `root_cate` int(255) NOT NULL,
  `sub_cate` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_status` int(1) NOT NULL DEFAULT 1 COMMENT '1active/2deactive/0delete',
  `item_pic` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logistics`
--

CREATE TABLE `logistics` (
  `service_id` int(255) NOT NULL,
  `sevices_name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `service_des` varchar(255) NOT NULL,
  `service_status` int(1) NOT NULL DEFAULT 1,
  `service_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logistics`
--

INSERT INTO `logistics` (`service_id`, `sevices_name`, `icon`, `service_des`, `service_status`, `service_pic`) VALUES
(2, 'Bride-Groom Entry', 'vc', 'Grand Entry Concepts', 1, 'jhjn.jpg,kjhg.jpg,oiuygtfd.jpg,bgentery.jpeg'),
(3, 'Hospitality', 'vc', 'Hospitality Management Services', 1, 'hospitality.jpg'),
(4, 'Artist Management', 'vc', 'We are dealing in Artist Management', 1, 'kjhgf.jpg,artis.JPEG'),
(5, 'Haldi Mehandi Programme', 'vc', 'Unique Haldi and Mehandi Setup', 1, 'mnbv.jpg,kjhg.jpg,mehndi.jpg'),
(6, 'E-Invitation', 'vc', 'E-Invitations for Weddings ', 1, 'invitation.jpeg'),
(7, 'E-Invitation', 'f', '.						', 0, 'invitation.jpeg'),
(10, 'Venue Selection', 'vc', 'Find the Best Venue for your Event', 1, 'hahahah.jpg,venue.JPG'),
(11, 'Venue Selection', 'fa', '.								', 0, 'venue.JPG'),
(12, 'Pre Wedding Shoot', 'vc', 'Book your Pre Wedding shoot with us', 1, 'hjgfvdcsx.jpg,pree.jpg'),
(13, 'Logistics', 'vc', 'Book your Logistics services with us', 1, 'logisticss.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`, `date`) VALUES
(3, 'harshitaagarwal963@gmail.com', '2021-09-15'),
(7, 'premjalani@gmail.com', '2021-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `packageid` int(255) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `caption` text NOT NULL,
  `package_price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `service_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packageid`, `package_name`, `caption`, `package_price`, `image`, `service_status`) VALUES
(4, 'Birthday Party Packages', 'By : Vcreate event', '1500', '\r\n\r\n\r\n\r\n	kklll.jpg,\r\n\r\n\r\n\r\n	mjhngbfvcx.jpg,\r\n\r\n\r\n\r\n	its my birthday meme.jpg,\r\n\r\n\r\n\r\n	mjhngbfvcx.jpg,\r\n\r\n\r\n\r\n	hhh.jpg,\r\n\r\n\r\n\r\n	c2.jpg,\r\n\r\n\r\n\r\n	c3.jpg,\r\n\r\n\r\n\r\n	c2.jpg,\r\n\r\n\r\n\r\n	vcreate.png', 1),
(5, 'Baby Shower', 'By : Vcreate Event', '2000', '\r\n\r\n\r\n\r\n	llkklk.jpg,\r\n\r\n\r\n\r\n	comingsoon.jpg', 1),
(6, 'Kitty Party', 'By : Vcreate Event', '3000', '\r\n\r\n\r\n\r\n	jhg.jpg,\r\n\r\n\r\n\r\n	hhh.jpg,\r\n\r\n\r\n\r\n	hh.jpg,\r\n\r\n\r\n\r\n	coming1.jpg,\r\n\r\n\r\n\r\n	comingsoon.jpg', 1),
(8, 'Get Together', 'By : Vcreate Event', '5000', '\r\n\r\n\r\n\r\n	kjkhuyuk.jpg,\r\n\r\n\r\n\r\n	hjhjh,\r\n\r\n\r\n\r\n	.jpg,\r\n\r\n\r\n\r\n	coming1.jpg,\r\n\r\n\r\n\r\n	c3.jpg', 1),
(9, 'Group Reunion', 'BY : VCREATE EVENT', '5000', '\r\n\r\n\r\n\r\n	kjhgfjhgf.jpg', 1),
(10, 'Surprise Party', 'BY : VCREATE EVENT', '3000', '\r\n\r\n\r\n\r\n	nbvcfd.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_gallery`
--

CREATE TABLE `portfolio_gallery` (
  `galleryid` int(255) NOT NULL,
  `partyid` int(255) NOT NULL,
  `eventvideo_photo_url` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio_gallery`
--

INSERT INTO `portfolio_gallery` (`galleryid`, `partyid`, `eventvideo_photo_url`, `status`, `title`) VALUES
(8, 25, 'vvvkka.jpg', 1, 'baby shawer'),
(12, 23, 'bfd.jpg,jhgfc.jpg,jhngf.jpeg,ke.jpg,kkkww.jpg,lkjhgf.jpg,vilsl.jpg,vvvkka.jpg', 1, 'Rafique'),
(13, 23, 'jhgfc.jpg,bfd.jpg,kyt.jpg,lkjhgf.jpg,vvvkka.jpg', 1, 'Kaynaat'),
(14, 23, 'bfd.jpg,ke.jpg', 1, 'Haldi'),
(21, 41, 'IMG_6561.jpg,IMG_6565.jpg,IMG_6567.jpg,IMG_6611.jpg', 1, 'kkk'),
(22, 40, 'YP3A1071.JPG,YP3A1086.JPG,YP3A1158.JPG,YP3A1175.JPG,YP3A1269.JPG,YP3A1288.JPG,YP3A1301.JPG,YP3A0923.JPG,YP3A0927.JPG,YP3A0931.JPG,YP3A1028.JPG,YP3A1040.JPG', 1, 'Raahini Birthday'),
(23, 40, 'https://youtu.be/d6v4h6un9Vc', 1, 'Raahini Birthday');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(255) NOT NULL,
  `parent_id` int(255) NOT NULL DEFAULT 0 COMMENT '0 mean main product',
  `main_cate` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_pic` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '1active,2inactive,0delete',
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `parent_id`, `main_cate`, `product_name`, `product_pic`, `status`, `price`, `description`) VALUES
(1, 0, 0, 'Destination Weddings', 'Screenshot (11).png', 1, '', 'fdnsgkjjdskjf');

-- --------------------------------------------------------

--
-- Table structure for table `send_maildetails`
--

CREATE TABLE `send_maildetails` (
  `mail_id` int(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `mailreceiver` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `send_maildetails`
--

INSERT INTO `send_maildetails` (`mail_id`, `subject`, `message`, `attachment`, `date`, `mailreceiver`) VALUES
(1, 'test', 'fdsjalfjakfkjajsfklj', 'dsfsd', '2020-09-12', 'rafiq@gnail.com,alihasan@gmail.com,iniyaz@gmail.com'),
(2, 'test2', 'ters2 fjdslafulksajf', 'fdsaf', '2020-09-30', 'fdsafasdfas@gmnia.com,ra@gmail.com,kk@gmial.com'),
(3, 'pppppppppd', '<p>gsdfg</p>\r\n', '', '2020-09-28', 'info.rafique687@gmail.com,khan.arbani@gmail.com'),
(4, 'database', '<p>fdsaf</p>\r\n', '', '2020-09-28', 'khan.arbani@gmail.com,info.rafique687@gmail.com'),
(5, 'with pic', '<p>sd</p>\r\n', 'apple-touch-icon.png', '2020-09-28', 'khan.arbani@gmail.com,info.rafique687@gmail.com'),
(6, 'fdaf', '<p>fdas</p>\r\n', '', '2020-09-28', 'khan.arbani@gmail.com,info.rafique687@gmail.com'),
(7, 'testing', '<p>dfsg</p>\r\n', '', '2020-10-10', 'khan.arbani@gmail.com'),
(8, 'fs', '<p>fdsa</p>\r\n', '', '2020-10-10', 'info.rafique687@gmail.com'),
(9, 'fs', '<p>fdsa</p>\r\n', '', '2020-10-10', 'info.rafique687@gmail.com'),
(10, 'dfsa', '<p>fdsaf</p>\r\n', '', '2020-10-10', 'info.rafique687@gmail.com,khan.arbani@gmail.com,'),
(11, 'testing', '<p>ghhhhhh</p>\r\n', '', '2020-10-13', 'info.rafique687@gmail.com,fdkasj@df.com,');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(255) NOT NULL,
  `sevices_name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `service_des` varchar(255) NOT NULL,
  `service_status` varchar(255) NOT NULL,
  `service_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `sevices_name`, `icon`, `service_des`, `service_status`, `service_pic`) VALUES
(1, 'Destination Wedding', ' ', 'wedding planning services all over india', '1', 'wedd.jpeg,weddingss.jpg,WhatsApp Image 2021-04-13 at 5.13.15 PM (2).jpeg,7 Dicas Para Economizar No Ch\\u00e1 De Bebe.jpg,.jpg,'),
(2, 'Corporate & Confrences', ' ', 'Corporate Meetings and Conference Manager', '1', 'kjhg.jpg,,mkjhg.jpg,kjhb.jpg,oijuhyg.jpg,Sewa Backdrop R8 Jakarta Barat - jual sewa partisi pameran.jpg,corp.jpg,corp.jpg,corp.jpg,IMG-20210218-WA0061.jpg,'),
(3, 'Theme Birthday Party', ' ', 'Theme based Birthday Parties', '1', 'lkjnhbgvf.jpg,Umbrella.jpg,'),
(4, 'Family Celebration ', ' j', 'Family Get Together', '1', 'fam.jpg,family.jpg,'),
(5, 'Baby Shower', ' ', 'New member in family is on way', '1', 'bbb.jpg,bbshower.JPG,'),
(6, 'Surprise Party', ' ', 'Surprise your loved one', '1', 'srrpp.jpg,srp.jpg,With You Forever [slow update].jpg,srp.jpg,surprise.jpg,'),
(7, 'Anniversary Celebration', ' ', 'Celebrate your Anniversaries with us', '1', 'mujhgf.jpg,lkjhbgvfc.jpg,Twitter.jpg,nbvcfd.png,150 Sweet & Romantic Valentine\'s Home Decorations That Are Really Easy To Do - Hike n Dip.png,nbvcfd.png,annivesary.png,'),
(8, 'Engagement Ceremony', ' ', 'Engagement Ceremony Decor', '1', 'kjhgf.png,engage.jpg,'),
(9, 'Live Concert', ' ', 'Live Concert Planning', '1', 'mhgf.jpg,liveconcern.jpg,'),
(10, 'Kitty Party', ' ', 'Kitty Parties Arrangement', '1', 'jhgfd.jpg,nnnn.jpg,');

-- --------------------------------------------------------

--
-- Table structure for table `setting_table`
--

CREATE TABLE `setting_table` (
  `sessting_id` int(255) NOT NULL,
  `section_id` int(255) NOT NULL DEFAULT 1,
  `field_name` varchar(255) NOT NULL,
  `field_value` varchar(5000) NOT NULL,
  `field_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting_table`
--

INSERT INTO `setting_table` (`sessting_id`, `section_id`, `field_name`, `field_value`, `field_type`) VALUES
(1, 1, 'Site name', 'VCREATEEVENT', 'text'),
(2, 1, 'Mobile', '946 076 8158 | 742 491 1889', 'text'),
(3, 1, 'Email', 'info@vcreate.co.in', 'text'),
(4, 1, 'Logo', 'whitelogo.png', 'file'),
(5, 1, 'Fevicon', 'vcreate3.png', 'file'),
(15, 2, 'Title', 'About Us', 'text'),
(16, 2, 'SEO Meta', 'Best Wedding Planner India, Wedding Planning Services, Event Planner, Event Management, Event Planner Jodhpur, Rajasthan', 'text'),
(19, 2, 'Short Description', 'Vcreate is a professional top wedding planner and event management company in Jodhpur, Rajasthan India, provide best wedding planning, catering, Engagement Decoration, photography, Udaipur wedding planner, Jaipurr, Goa Wedding Planner and honeymoon packages\r\nWedding Planner in Jodhpur, India. With our top event planners we give you an amazing wedding experience to make your dream wedding come true', 'textarea'),
(20, 2, 'About', '<div style=\"text-align:center\">At <strong>Vcreate</strong>, we believe in creating magic because every wedding is suppose to be</div>\r\n\r\n<div style=\"text-align:center\">about making fairy tales come true.<br />\r\nYou dream it and we deliver it in most enchantingly possible way.<br />\r\n<strong>Vcreate</strong> have just begun on its journey of providing you the experience of your</div>\r\n\r\n<div style=\"text-align:center\">lifetime. Before that our director have worked along side the best professionals</div>\r\n\r\n<div style=\"text-align:center\">and garnered experience in the field.<br />\r\nWe believe in crafted creativity to bring uniqueness to the wedding and is very</div>\r\n\r\n<div style=\"text-align:center\">peculiar about careful, flawless and precise execution.<br />\r\n<strong>Vcreate</strong> specializes in Weddings, Hospitality, Production, Theme Events and Get</div>\r\n\r\n<div style=\"text-align:center\">Together. We create a perfect blend of Tradition and&nbsp;&nbsp;Modern elements to provide</div>\r\n\r\n<div style=\"text-align:center\">the essence ofour culture and at the same time bring novelty to your event.</div>\r\n\r\n<div style=\"text-align:center\">From picking you up from the airport, checking you in, to planning every expect</div>\r\n\r\n<div style=\"text-align:center\">of your&nbsp;&nbsp;wedding like, venue selection, arranging Indian and International artists,</div>\r\n\r\n<div style=\"text-align:center\">decor suggestions,to gifting option.<br />\r\nwe ensure that you and your guests will endure best in class experience. We</div>\r\n\r\n<div style=\"text-align:center\">have a close relation with experts in every field and our team is capable</div>\r\n\r\n<div style=\"text-align:center\">to handle every nuance.</div>\r\n', 'fck'),
(23, 3, 'Title', 'FAQ', 'text'),
(24, 3, 'SEO Meta Key', 'Key words', 'tex'),
(25, 3, 'Shord Description', 'Wedding Planner', 'textarea'),
(26, 3, 'Content', '<p>Wedding Planner in Jodhpur, India. With our top event planners we give you an amazing wedding experience to make your dream wedding come true</p>\r\n', 'fck'),
(27, 4, 'Privacy Policy', 'Privacy policy title', 'text'),
(29, 4, 'SEO script', 'seo meta tag', 'text'),
(30, 4, 'short Description', 'short description about Privacy policy', 'textarea'),
(31, 4, 'content', '<p>Our agreements with certain business customers may contain provisions about the collection, use, storage and disposal of information collected through the Services and offline. If a provision of a customer agreement conflicts or otherwise is inconsiste', 'fck'),
(32, 5, 'Title', 'Services', 'text'),
(33, 5, 'Seo  Meta Script', 'Wedding Planner India, Rajasthan, Destination Wedding, Event Management', 'text'),
(34, 5, 'Short Descripton', 'Vcreate is a professional top wedding planner and event management company in Jodhpur, Rajasthan India, provide best wedding planning, catering, Engagement Decoration, photography, Udaipur wedding planner, Jaipur, Goa Wedding Planner and honeymoon packages', 'textarea'),
(35, 5, 'Content', '<p>Best Wedding Services all over India.</p>\r\n', 'fck'),
(36, 6, 'Face Book Url', 'https://www.facebook.com/VCreateACE/', 'text'),
(37, 6, 'Instagram', 'https://www.instagram.com/invites/contact/?i=1i0vb0n0nocok&utm_content=5g5dn90', 'text'),
(38, 6, 'LinkedIn', 'https://www.linkedin.com/in/vcreate-ace-a50a0a197', 'text'),
(39, 6, 'Twitter', 'https://twitter.com/VcreateACE/status/1434057051592822789?t=iABuPAuRsuuItIKcMLOTpA&s=19', 'text'),
(40, 6, 'Google+', '', 'text'),
(41, 7, 'Title', 'Vcreate Event', 'text'),
(42, 7, 'Seo  Meta Script', 'As a concept, trade marketing is completely misunderstood. Yet it\'s incredibly important, so today I\'m going to explain what trade marketing is, why it’s important, who uses it and how.\nI\'ll cover trade marketing examples, tools and techniques, plus help', 'text'),
(43, 1, 'Location', 'Behind Shanti Tower, Near Bharat Printing Press, Jalori Bari, 342001\r\nIndia', 'textarea'),
(44, 1, 'Map Location', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3577.293127823414!2d73.01496521435132!3d26.284595793175754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418c4a9cef223f%3A0x8ed3200e63deb913!2sShanti%20Tower!5e0!3m2!1sen!2sin!4v1629787932995!5m2!1sen!2sin																																																																																																																																																																																																																																																							', 'textarea'),
(45, 1, 'Live Chat', '<!--Start of Tawk.to Script-->\r\n<script type=\"text/javascript\">\r\nvar Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n(function(){\r\nvar s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\ns1.async=true;\r\ns1.src=\'https://embed.tawk.to/61433fcdd326717cb681cc61/1fg3uu2rl\';\r\ns1.charset=\'UTF-8\';\r\ns1.setAttribute(\'crossorigin\',\'*\');\r\ns0.parentNode.insertBefore(s1,s0);\r\n})();\r\n</script>\r\n<!--End of Tawk.to Script-->																														', 'textarea'),
(46, 8, 'faq', 'fdaf', 'fck'),
(47, 7, 'Short Descripton', 'We Provide a full range of Event Services, Birthday party, Content Management Systems (CMS), Search Engine Optimisation (SEO), Social Media and Web Solutions for any business, anywhere.\r\nWe Provid High Quality and cost effective Services.\r\nW', 'textarea'),
(48, 7, 'Content', '<p>Our Event with certain business customers may contain provisions about the collection, use, storage and disposal of information collected through the Services and offline. If a provision of a customer agreement conflicts or otherwise is inconsiste', 'fck'),
(49, 1, 'You tube Home url', 'https://www.youtube.com/embed/v-f8Hvg3DFQ', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor_request`
--

CREATE TABLE `sponsor_request` (
  `sponsor_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `inquery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsor_request`
--

INSERT INTO `sponsor_request` (`sponsor_id`, `name`, `contact`, `email`, `inquery_date`) VALUES
(2, 'SHWETA DAVE', '9221215458', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(3, 'SHWETA DAVE', '9221215458', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(4, 'SHWETA DAVE', '788252545888', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(5, 'SHWETA DAVE', '922124578', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(6, 'SHWETA DAVE', '95532326545', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(7, 'SHWETA DAVE', '6665658987', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(8, 'SHWETA DAVE', '8552525458', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(9, 'SHWETA DAVE', '9662526589', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(10, 'SHWETA DAVE', '8552525555', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(11, 'SHWETA DAVE', '5224547874', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(12, 'SHWETA DAVE', '5555858888', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(13, 'SHWETA DAVE', '7774444444', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(14, 'SHWETA DAVE', '7774444444', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(15, 'SHWETA DAVE', '8885858888', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(16, 'SHWETA DAVE', '9993656988', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(17, 'SHWETA DAVE', '9666565666', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(18, 'SHWETA DAVE', '9999999999', 'M.DAVE84@GMAIL.COM', '2021-09-13'),
(19, 'SHWETA DAVE', '9552524587', 'M.DAVE84@GMAIL.COM', '2021-09-14'),
(20, 'Raana', '8557854789', 'M.DAVE84@GMAIL.COM', '2021-09-14'),
(21, 'SHWETA DAVE', '8888888', 'M.DAVE84@GMAIL.COM', '2021-09-14'),
(22, ' db', '5', 'vdv@gm.com', '2021-09-14'),
(23, 'SHWETA DAVE', '5', 'M.DAVE84@GMAIL.COM', '2021-09-14'),
(24, 'SHWETA DAVE', '2', 'M.DAVE84@GMAIL.COM', '2021-09-14'),
(25, 'SHWETA DAVE', '44', 'M.DAVE84@GMAIL.COM', '2021-09-14'),
(26, 'SHWETA DAVE', '4444444444', 'M.DAVE84@GMAIL.COM', '2021-09-14'),
(27, 'SHWETA DAVE', '7332555555', 'M.DAVE84@GMAIL.COM', '2021-09-14'),
(28, 'SHWETA DAVE', '4444444444', 'dsharhf', '2021-09-14'),
(29, 'Vinita Sharma', '8947864403', 'want to become a sponsor', '2021-10-02'),
(30, 'MJNGFVDS', '7424911889', 'HARSJJJG', '2021-10-04'),
(31, 'fads', '7332555555', 'fdaf', '2021-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `stateid` int(255) NOT NULL,
  `contery_id` int(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`stateid`, `contery_id`, `state`) VALUES
(1, 1, 'Rajasthan'),
(2, 1, 'Gujrat');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `dp` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `name`, `designation`, `dp`, `twitter`, `facebook`, `instagram`, `linkedin`, `status`) VALUES
(1, 'Mohammad Rafique', 'developer', '5b7ad435200000420034abec.jpeg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(2, 'piyush sharma', ' android devloper', '1483514496-9388.jpg', '  twiter', '  facebook', '  insta', '  in', 0),
(3, 'Mohammad Rafiquegf', 'developer', '1483514496-9388.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(4, 'Mohammad ', 'developer', '', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(5, 'Mohammad ', 'developer', '5b7ad435200000420034abec.jpeg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(6, 'Dharmendra sir', 'Mean Devloper', 'team-1.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(7, 'Dharmendra sir', 'Mean Devloper', 'team-3.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(8, 'Dharmendra sir', 'Mean Devloper', 'team-1.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(9, 'piyush sharma', ' android devloper', 'team-3.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(10, 'Nikhil', 'Nodjs', 'services-4.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(11, 'Mohammad Rafique', 'Php Devloper', 'team-1.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(12, 'Nikhil', 'Nodjs', 'team-3.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(13, 'Nikhil', 'Nodjs', 'team-1.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 0),
(14, 'Dharmendra sir', 'Mean Devloper', 'tm1.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 1),
(15, 'Nikhil', 'Nodjs', 'tm2.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 1),
(16, 'Nikhil', 'Nodjs', 'tm4.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 1),
(17, 'Nikhil', 'Nodjs', 'tm1.jpg', 'twitter', 'facebook', 'insta', 'linkedin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 1,
  `review_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `review`, `image`, `status`, `review_date`) VALUES
(1, 'rafique', 'nfnfnsfksnff\r\nfdnf,nsdf', 'defualt.png', 0, '2021-09-10 09:37:14'),
(2, 'nidhi', 'fesjdfkjdsf', 'ppp.jpg,RLWT1487.JPG', 0, '2021-09-10 10:35:29'),
(3, 'kvc', 'fjltlretlkjre', 'ppp.jpg,RLWT1487.JPG', 0, '2021-09-10 10:36:08'),
(4, 'vikas', 'it was nice working with them', 'bfd.jpg', 0, '2021-09-30 09:30:52'),
(5, 'vikas', 'kjhgfcdxhjnbgvccnmgyt kjhfkjytresdtyutfdsfujkhgfdx lkjhgfdxclkkjhgbvcxcvjkhbgxczliuyghtfd lkjhgfcxklnbv cbnk,mnbvcxcvklkjhgfds lkmjhcxfoiutgfdsftyutdssdyugf lkjhgfcvmnbvcxvmnbv cnm,mn bvchjkljhdsaalkjhgxczclmnbv ;lkjhgfcvblkjuytrsdzxcvkliuytrds  p;juhgfdc xkloiuewaZ ;loiutszx klopiter \';lkjhgfdhjliou76543wqeasfhioy6treb ;liuytdx l;ews ;ptdlkjhg', 'bfd.jpg', 0, '2021-09-30 09:33:10'),
(6, 'Vikas and Ishita', 'We choose the right people as Vcreate Events to plan and execute our wedding. And we have been trough the best experience for our best day', 'lkjuhygtf.jpg', 1, '2021-10-02 20:21:44'),
(7, 'Minal Mehta', 'Thank you so much Harshita for making my baby\'s first birthday more memorable the way i wanted to. Words are not enough to describe your potential towards your work. God bless you for your upcoming future. Still can\'t thank enough for making our day the best way possible on this short notice.', 'kjhgjhgf.JPG', 1, '2021-10-02 20:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `textsmessage`
--

CREATE TABLE `textsmessage` (
  `sms_id` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `customerno` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `textsmessage`
--

INSERT INTO `textsmessage` (`sms_id`, `message`, `customerno`, `date`) VALUES
(1, '										\r\n	dsaff															', '9001979342,9799184788', '2020-09-12'),
(2, '										\r\n			dvsf													', '9001979342,9799184788', '2020-09-12'),
(3, '										\r\n							cc									', '9001979342,9799184788', '2020-09-28'),
(4, '										\r\n	fdsafkjgjhsagdfhgsfa															', '9001212145,8552525654,', '2020-10-12'),
(5, '			adfsaf							\r\n																', '8221212525,7441412458,', '2020-10-12'),
(6, '										\r\n			fdsa													', '9223333333,', '2020-10-12'),
(7, '				czc						\r\n																', '9001212352,', '2020-10-12'),
(8, '										\r\n			gfh													', '9799184788,9001979342', '2020-10-13'),
(9, 'safdsa', '9001212145,9001979342', '2020-10-13'),
(10, 'gfdsf														', '9799184788,9001979342', '2020-10-13'),
(11, ',mjnbmnb', '  9001979342', '2020-10-13'),
(12, '										\r\n		ttrthg																\r\n																								', '9799184788,9001979342', '2020-10-13'),
(13, 'vdsg', '9799184788,9001979342', '2020-10-13'),
(14, 'dsg', 'info.rafique687@gmail.com', '2020-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `whatsmessage`
--

CREATE TABLE `whatsmessage` (
  `whatapp_id` int(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `attach` varchar(255) NOT NULL,
  `customerno` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `whatsmessage`
--

INSERT INTO `whatsmessage` (`whatapp_id`, `message`, `attach`, `customerno`, `date`) VALUES
(1, '			fgsdjgkjsfhg							\r\n																', 'xyz.file', '9799184788,9001979342', '2020-09-12'),
(2, '			fgsdjgkjsfhg							\r\n																', 'xyz.file', '9799184788,9001979342', '2020-09-12'),
(3, '			fgsdjgkjsfhg							\r\n																', 'xyz.file', '9799184788,9001979342', '2020-09-12'),
(4, '			fgsdjgkjsfhg							\r\n																', 'xyz.file', '9799184788,9001979342', '2020-09-12'),
(5, '			sgdsfg							\r\n																', 'xyz.file', '9799184788,9001979342', '2020-09-12'),
(6, '	csdsf									\r\n																', 'xyz.file', '9001979342,9799184788', '2020-09-12'),
(7, '										\r\n		dsfa														', 'xyz.file', '9001979342,9799184788', '2020-09-12'),
(8, '										\r\n	dfs															', 'xyz.file', '9001979342,9799184788', '2020-09-12'),
(9, '				gfdgd						\r\n																', 'xyz.file', '9001979342', '2020-10-10'),
(10, '										\r\n			adfsfa													', 'xyz.file', '9001212425,7445254578,', '2020-10-12'),
(11, '					fasf					\r\n																', 'xyz.file', '9001212545,', '2020-10-12'),
(12, 'fasfas', 'xyz.file', '', '2020-10-12'),
(13, 'frkfguya', 'xyz.file', '9001979342,7441212456,', '2020-10-12'),
(14, 'fdasf', 'xyz.file', '9001979342,8552121256,', '2020-10-12'),
(15, 'hgf', 'xyz.file', '9001979342,', '2020-10-12'),
(16, '										\r\n																', 'xyz.file', 'info.rafique687@gmail.com,khan.arbani@gmail.com', '2020-10-13'),
(17, '										\r\n																', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(18, '										\r\n																', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(19, '										\r\n																', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(20, '										\r\n																', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(21, '										\r\n																', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(22, '										\r\n																', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(23, '										\r\n																', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(24, '			hghf							\r\n																		\r\n																								', 'xyz.file', '9799184788,9001979342', '2020-10-13'),
(25, 'dsafjlkjfljlk', 'xyz.file', '9001979342,8552525654', '2020-10-13'),
(26, 'fdsajkfj							\r\n																', '', '9799184788,9001979342', '2020-10-13'),
(27, 'kkk', '', '9001979342', '2020-10-13'),
(28, 'gggg', '', '  9001979342', '2020-10-13'),
(29, 'fdsaf', '', '9799184788,9001979342', '2020-10-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_setting`
--
ALTER TABLE `admin_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`bannerid`);

--
-- Indexes for table `bookpackage`
--
ALTER TABLE `bookpackage`
  ADD PRIMARY KEY (`packackagebookid`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`ctid`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contry`
--
ALTER TABLE `contry`
  ADD PRIMARY KEY (`contryid`);

--
-- Indexes for table `cutomar_details`
--
ALTER TABLE `cutomar_details`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`evencteidd`);

--
-- Indexes for table `inquety`
--
ALTER TABLE `inquety`
  ADD PRIMARY KEY (`inquryid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `logistics`
--
ALTER TABLE `logistics`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`packageid`);

--
-- Indexes for table `portfolio_gallery`
--
ALTER TABLE `portfolio_gallery`
  ADD PRIMARY KEY (`galleryid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `send_maildetails`
--
ALTER TABLE `send_maildetails`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `setting_table`
--
ALTER TABLE `setting_table`
  ADD PRIMARY KEY (`sessting_id`);

--
-- Indexes for table `sponsor_request`
--
ALTER TABLE `sponsor_request`
  ADD PRIMARY KEY (`sponsor_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`stateid`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textsmessage`
--
ALTER TABLE `textsmessage`
  ADD PRIMARY KEY (`sms_id`);

--
-- Indexes for table `whatsmessage`
--
ALTER TABLE `whatsmessage`
  ADD PRIMARY KEY (`whatapp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_setting`
--
ALTER TABLE `admin_setting`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `bannerid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `bookpackage`
--
ALTER TABLE `bookpackage`
  MODIFY `packackagebookid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `ctid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contry`
--
ALTER TABLE `contry`
  MODIFY `contryid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cutomar_details`
--
ALTER TABLE `cutomar_details`
  MODIFY `cust_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `evencteidd` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `inquety`
--
ALTER TABLE `inquety`
  MODIFY `inquryid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logistics`
--
ALTER TABLE `logistics`
  MODIFY `service_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `packageid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `portfolio_gallery`
--
ALTER TABLE `portfolio_gallery`
  MODIFY `galleryid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `send_maildetails`
--
ALTER TABLE `send_maildetails`
  MODIFY `mail_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `setting_table`
--
ALTER TABLE `setting_table`
  MODIFY `sessting_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `sponsor_request`
--
ALTER TABLE `sponsor_request`
  MODIFY `sponsor_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `stateid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `team_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `textsmessage`
--
ALTER TABLE `textsmessage`
  MODIFY `sms_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `whatsmessage`
--
ALTER TABLE `whatsmessage`
  MODIFY `whatapp_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

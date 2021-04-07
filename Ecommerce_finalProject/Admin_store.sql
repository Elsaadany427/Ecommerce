-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2021 at 12:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Admin_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `ip_add`, `qty`, `size`) VALUES
(54, '127.0.0.1', 1, 'L'),
(62, '127.0.0.1', 1, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'Men', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores reprehenderit explicabo nostrum ad eaque sunt atque vero cumque culpa placeat. Quasi harum consequuntur ratione quis quod quia eos architecto. Sed.\r\n'),
(2, 'Women', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores reprehenderit explicabo nostrum ad eaque sunt atque vero cumque culpa placeat. Quasi harum consequuntur ratione quis quod quia eos architecto. Sed.\r\n'),
(3, 'Kids', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores reprehenderit explicabo nostrum ad eaque sunt atque vero cumque culpa placeat. Quasi harum consequuntur ratione quis quod quia eos architecto. Sed.\r\n'),
(5, 'Boys', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores reprehenderit explicabo nostrum ad eaque sunt atque vero cumque culpa placeat. Quasi harum consequuntur ratione quis quod quia eos architecto. Sed.\r\n'),
(6, 'Others', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`) VALUES
(36, 5, 1, '2021-01-08 01:58:29', 'T-shirt', 'T-shirt1.jpeg', 'T-shirt2.jpeg', 'T-shirt3.jpeg', 45, 'T-shirt', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. </p>'),
(37, 5, 1, '2021-01-08 01:58:52', 'T-shirt', 'T-shirt4.jpeg', 'T-shirt5.jpeg', 'T-shirt6.jpeg', 78, 'T-shirt', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. </p>'),
(38, 5, 1, '2021-01-08 01:59:12', 'T-shirt', 'T-shirt7.jpeg', 'T-shirt8.jpeg', 'T-shirt9.jpeg', 88, 'T-shirt', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. </p>'),
(39, 5, 1, '2021-01-08 01:59:41', 'T-shirt', 'T-shirt10.jpeg', 'T-shirt11.jpeg', 'T-shirt11.jpeg', 66, 'T-shirt', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. </p>'),
(40, 5, 2, '2021-01-08 02:00:11', 'T-shirt', 'girlsT-shirt1.jpeg', 'girlsT-shirt2.jpeg', 'girlsT-shirt3.jpeg', 23, 'T-shirt', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. </p>'),
(41, 5, 2, '2021-01-08 02:00:56', 'T-shirt', 'girlsT-shirt4.jpeg', 'girlsT-shirt5.jpeg', 'girlsT-shirt6.jpeg', 26, 'T-shirt', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. </p>'),
(42, 5, 3, '2021-01-08 02:01:33', 'T-shirt', 'kidsT-shirt1.jpeg', 'kidsT-shirt2.jpeg', 'kidsT-shirt3.jpeg', 125, 'T-shirt', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. </p>'),
(43, 5, 3, '2021-01-08 02:01:56', 'T-shirt', 'kidsT-shirt4.jpeg', 'kidsT-shirt5.jpeg', 'kidsT-shirt6.jpeg', 120, 'T-shirt', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. </p>'),
(44, 5, 5, '2021-01-08 02:02:24', 'T-shirt', 'boysT-shirt1.jpeg', 'boysT-shirt2.jpeg', 'boysT-shirt3.jpeg', 11, 'T-shirt', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. </p>'),
(45, 5, 6, '2021-01-08 02:02:47', 'T-shirt', 'other1.jpeg', 'other2.jpeg', 'other3.jpeg', 110, 'T-shirt', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. </p>'),
(46, 2, 2, '2021-01-08 03:46:55', 'Girls Bags', 'girlsbag1.jpeg', 'girlsbag2.jpeg', 'girlsbag3.jpeg', 98, 'Bags', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.</p>'),
(47, 2, 2, '2021-01-08 03:47:15', 'Girls Bags', 'girlsbag4.jpeg', 'girlsbag5.jpeg', 'girlsbag6.jpeg', 98, 'Bags', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.</p>'),
(48, 4, 2, '2021-01-08 03:50:15', 'Coat', 'girlscoat1.jpeg', '', '', 55, 'Coat', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem</p>'),
(49, 4, 2, '2021-01-08 03:50:28', 'Coat', 'girlscoat2.jpeg', '', '', 46, 'Coat', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem</p>'),
(50, 4, 2, '2021-01-08 03:50:47', 'Coat', 'girlscoat3.jpeg', 'girlscoat4.jpeg', 'girlscoat5.jpeg', 89, 'Coat', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem</p>'),
(51, 2, 1, '2021-01-08 03:53:32', 'Watches', 'watches1.jpeg', '', '', 265, 'Watches', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.</p>'),
(52, 2, 1, '2021-01-08 03:53:43', 'Watches', 'watches2.jpeg', '', '', 265, 'Watches', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.</p>'),
(53, 2, 1, '2021-01-08 03:53:52', 'Watches', 'watches3.jpeg', '', '', 269, 'Watches', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.</p>'),
(54, 3, 1, '2021-01-08 03:56:52', 'Shoes', 'shoes1.jpeg', 'shoes2.jpeg', 'shoes3.jpeg', 632, 'Shoes', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. </p>'),
(55, 3, 1, '2021-01-08 03:57:13', 'Shoes', 'shoes4.jpeg', 'shoes5.jpeg', 'shoes6.jpeg', 524, 'Shoes', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. </p>'),
(57, 1, 1, '2021-01-08 03:59:44', 'Jacket', 'jacket1.jpeg', 'jacket2.jpeg', 'jacket3.jpeg', 123, 'Jacket', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. </p>'),
(61, 1, 1, '2021-01-08 18:06:18', 'Jacket', 'jacket4.jpeg', 'jacket5.jpeg', 'jacket6.jpeg', 121, 'Jacket', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.</p>'),
(62, 3, 1, '2021-01-08 23:56:33', 'Shoes', 'Screenshot from 2021-01-09 01-55-38.png', '', '', 66, 'Shoes', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'jacket', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores reprehenderit explicabo nostrum ad eaque sunt atque vero cumque culpa placeat. Quasi harum consequuntur ratione quis quod quia eos architecto. Sed.\r\n'),
(2, 'Accessories', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores reprehenderit explicabo nostrum ad eaque sunt atque vero cumque culpa placeat. Quasi harum consequuntur ratione quis quod quia eos architecto. Sed.\r\n'),
(3, 'Shoes', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores reprehenderit explicabo nostrum ad eaque sunt atque vero cumque culpa placeat. Quasi harum consequuntur ratione quis quod quia eos architecto. Sed.\r\n'),
(4, 'Coats', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores reprehenderit explicabo nostrum ad eaque sunt atque vero cumque culpa placeat. Quasi harum consequuntur ratione quis quod quia eos architecto. Sed.\r\n'),
(5, 'T-shirt', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores reprehenderit explicabo nostrum ad eaque sunt atque vero cumque culpa placeat. Quasi harum consequuntur ratione quis quod quia eos architecto. Sed.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

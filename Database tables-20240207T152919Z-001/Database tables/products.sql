-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 02:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eneki`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(5) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `item_size` varchar(10) NOT NULL,
  `item_qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `item_name`, `item_size`, `item_qty`) VALUES
(1, 'Shirt(Male)', 'XS', 0),
(2, 'Shirt(Male)', 'S', 0),
(3, 'Shirt(Male)', 'M', 0),
(4, 'Shirt(Male)', 'L', 0),
(5, 'Shirt(Male)', 'XL', 0),
(6, 'Shirt(Male)', 'XXL', 0),
(7, 'Jeans(Male)', 'XS', 0),
(8, 'Jeans(Male)', 'S', 0),
(9, 'Jeans(Male)', 'M', 0),
(10, 'Jeans(Male)', 'L', 0),
(11, 'Jeans(Male)', 'XL', 0),
(12, 'Jeans(Male)', 'XXL', 0),
(13, 'T-Shirt(Male)', 'XS', 0),
(14, 'T-Shirt(Male)', 'S', 0),
(15, 'T-Shirt(Male)', 'M', 0),
(16, 'T-Shirt(Male)', 'L', 0),
(17, 'T-Shirt(Male)', 'XL', 0),
(18, 'T-Shirt(Male)', 'XXL', 0),
(19, 'Pant(Male)', 'XS', 0),
(20, 'Pant(Male)', 'S', 0),
(21, 'Pant(Male)', 'M', 0),
(22, 'Pant(Male)', 'L', 0),
(23, 'Pant(Male)', 'XL', 0),
(24, 'Pant(Male)', 'XXL', 0),
(25, 'Top(Female)', 'XS', 0),
(26, 'Top(Female)', 'S', 0),
(27, 'Top(Female)', 'M', 0),
(28, 'Top(Female)', 'L', 0),
(29, 'Top(Female)', 'XL', 0),
(30, 'Top(Female)', 'XXL', 0),
(31, 'Kurta(Female)', 'XS', 0),
(32, 'Kurta(Female)', 'S', 0),
(33, 'Kurta(Female)', 'M', 0),
(34, 'Kurta(Female)', 'L', 0),
(35, 'Kurta(Female)', 'XL', 0),
(36, 'Kurta(Female)', 'XXL', 0),
(37, 'Saree', 'XS', 0),
(38, 'Saree', 'S', 0),
(39, 'Saree', 'M', 0),
(40, 'Saree', 'L', 0),
(41, 'Saree', 'XL', 0),
(42, 'Saree', 'XXL', 0),
(43, 'Shirt(Female)', 'XS', 0),
(44, 'Shirt(Female)', 'S', 0),
(45, 'Shirt(Female)', 'M', 0),
(46, 'Shirt(Female)', 'L', 0),
(47, 'Shirt(Female)', 'XL', 0),
(48, 'Shirt(Female)', 'XXL', 0),
(49, 'T-Shirt(Female)', 'XS', 0),
(50, 'T-Shirt(Female)', 'S', 0),
(51, 'T-Shirt(Female)', 'M', 0),
(52, 'T-Shirt(Female)', 'L', 0),
(53, 'T-Shirt(Female)', 'XL', 0),
(54, 'T-Shirt(Female)', 'XXL', 0),
(55, 'Jeans(Female)', 'XS', 0),
(56, 'Jeans(Female)', 'S', 0),
(57, 'Jeans(Female)', 'M', 0),
(58, 'Jeans(Female)', 'L', 0),
(59, 'Jeans(Female)', 'XL', 0),
(60, 'Jeans(Female)', 'XXL', 0),
(61, 'Shoes(Male)', '3', 0),
(62, 'Shoes(Male)', '4', 0),
(63, 'Shoes(Male)', '5', 0),
(64, 'Shoes(Male)', '6', 0),
(65, 'Shoes(Male)', '7', 0),
(66, 'Shoes(Male)', '8', 0),
(67, 'Shoes(Male)', '9', 0),
(68, 'Shoes(Male)', '10', 0),
(69, 'Slippers(Male)', '3', 0),
(70, 'Slippers(Male)', '4', 0),
(71, 'Slippers(Male)', '5', 0),
(72, 'Slippers(Male)', '6', 0),
(73, 'Slippers(Male)', '7', 0),
(74, 'Slippers(Male)', '8', 0),
(75, 'Slippers(Male)', '9', 0),
(76, 'Slippers(Male)', '10', 0),
(77, 'Sandles(Male)', '3', 0),
(78, 'Sandles(Male)', '4', 0),
(79, 'Sandles(Male)', '5', 0),
(80, 'Sandles(Male)', '6', 0),
(81, 'Sandles(Male)', '7', 0),
(82, 'Sandles(Male)', '8', 0),
(83, 'Sandles(Male)', '9', 0),
(84, 'Sandles(Male)', '10', 0),
(85, 'Shoes(Feamale)', '3', 0),
(86, 'Shoes(Feamale)', '4', 0),
(87, 'Shoes(Feamale)', '5', 0),
(88, 'Shoes(Feamale)', '6', 0),
(89, 'Shoes(Feamale)', '7', 0),
(90, 'Shoes(Feamale)', '8', 0),
(91, 'Shoes(Feamale)', '9', 0),
(92, 'Shoes(Feamale)', '10', 0),
(93, 'Slippers(Female)', '3', 0),
(94, 'Slippers(Feamale)', '4', 0),
(95, 'Slippers(Feamale)', '5', 0),
(96, 'Slippers(Feamale)', '6', 0),
(97, 'Slippers(Feamale)', '7', 0),
(98, 'Slippers(Feamale)', '8', 0),
(99, 'Slippers(Feamale)', '9', 0),
(100, 'Slippers(Feamale)', '10', 0),
(101, 'Sandles(Female)', '3', 0),
(102, 'Sandles(Female)', '4', 0),
(103, 'Sandles(Female)', '5', 0),
(104, 'Sandles(Female)', '6', 0),
(105, 'Sandles(Female)', '7', 0),
(106, 'Sandles(Female)', '8', 0),
(107, 'Sandles(Female)', '9', 0),
(108, 'Sandles(Female)', '10', 0),
(109, 'Wheat', '0', 0),
(110, 'Rice', '0', 0),
(111, 'Sugar', '0', 0),
(112, 'Tea', '0', 0),
(113, 'Moong Dal', '0', 0),
(114, 'Chana Dal', '0', 0),
(115, 'Arhar Dal', '0', 0),
(116, 'Toor Dal', '0', 0),
(117, 'Lal Masoor Dal', '0', 0),
(118, 'Urad Dal', '0', 0),
(119, 'Sofa', '0', 0),
(120, 'Bed', '0', 0),
(121, 'Chair', '0', 0),
(122, 'Table', '0', 0),
(123, 'Almirah', '0', 0),
(124, 'NoteBooks', '0', 0),
(125, 'Books', '0', 0),
(126, 'Pen Packet', '0', 0),
(127, 'Pencil Packet', '0', 0),
(128, 'Utensils', '0', 0),
(129, 'BedSheet', '0', 0),
(130, 'Blanket', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `item_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

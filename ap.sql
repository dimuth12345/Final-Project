-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 04:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ap`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `address` varchar(200) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(21) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`id`, `fullname`, `address`, `username`, `password`, `email`) VALUES
(1, 'admin', 'gale', 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_featured_photo` varchar(50) NOT NULL,
  `p_price` decimal(7,2) NOT NULL,
  `size` varchar(7) NOT NULL,
  `colour` varchar(50) NOT NULL,
  `qty` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `p_name`, `p_featured_photo`, `p_price`, `size`, `colour`, `qty`) VALUES
(32, 'Boys Denim', 'bk5.jpg', 4700.00, 'Small', 'Red', 1),
(33, 'women Skirt', 'pg2.jpg', 1290.00, 'Small', 'Red', 1),
(34, 'Women Skirt', 'pg1.jpg', 2090.00, 'Small', 'Red', 2),
(35, 'women skirt', 'pg6.jpg', 1895.00, 'Small', 'Red', 1),
(36, ' Men Free style Cotton Shirt', 'pb3.jpg', 3500.00, 'Small', 'Red', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(21) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fullname`, `address`, `mobile_no`, `username`, `password`, `email`) VALUES
(1, 'Dimuth', 'galle,colombo', 0, 'dimuth', '123', 'admin@gmail.com'),
(2, 'cariya', 'galle', 0, 'cariya', 'cariya', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `features_product`
--

CREATE TABLE `features_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_featured_photo` varchar(50) NOT NULL,
  `p_old_price` decimal(7,2) NOT NULL,
  `p_new_price` decimal(7,2) NOT NULL,
  `p_qty` int(11) NOT NULL,
  `p_description` text NOT NULL,
  `p_condition` text NOT NULL,
  `p_return_policy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features_product`
--

INSERT INTO `features_product` (`p_id`, `p_name`, `p_featured_photo`, `p_old_price`, `p_new_price`, `p_qty`, `p_description`, `p_condition`, `p_return_policy`) VALUES
(1, ' Men trouser ', 'bk1.jpg', 5200.00, 4900.00, 1250, ' Men trouser ', 'good condition', ' 7 day return');

-- --------------------------------------------------------

--
-- Table structure for table `kids_collection`
--

CREATE TABLE `kids_collection` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(80) NOT NULL,
  `p_featured_photo` varchar(50) NOT NULL,
  `p_old_price` decimal(7,2) NOT NULL,
  `p_new_price` decimal(7,2) NOT NULL,
  `p_qty` int(11) NOT NULL,
  `p_description` text NOT NULL,
  `p_condition` text NOT NULL,
  `p_return_policy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `latest_product`
--

CREATE TABLE `latest_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(80) NOT NULL,
  `p_featured_photo` varchar(50) NOT NULL,
  `p_old_price` decimal(7,2) NOT NULL,
  `p_new_price` decimal(7,2) NOT NULL,
  `p_qty` int(11) NOT NULL,
  `p_description` text NOT NULL,
  `p_condition` text NOT NULL,
  `p_return_policy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `latest_product`
--

INSERT INTO `latest_product` (`p_id`, `p_name`, `p_featured_photo`, `p_old_price`, `p_new_price`, `p_qty`, `p_description`, `p_condition`, `p_return_policy`) VALUES
(1, 'Ladies Denim short', 'sg1.jpg', 3800.00, 2900.00, 500, 'Ladies\' shorts are a popular and versatile clothing item for women. They are typically designed with a shorter length, ranging from above the knee to mid-thigh. Offering comfort and style, ladies\' shorts are ideal for casual occasions and warm weather. They come in various fabrics, colors, and styles, catering to different preferences and fashion trends.', 'Experience superior quality and style with these denim shorts for ladies. Crafted from high-quality denim fabric, these shorts offer durability and comfort. With their classic design and versatile appeal, they are a perfect addition to any casual outfit. Embrace a trendy and timeless look with these stylish denim shorts.', '7 day '),
(2, 'ladies frock', 'lg1.jpg', 2100.00, 2090.00, 500, 'A super quality frock is an exquisite and well-crafted dress that showcases exceptional craftsmanship and attention to detail. Made with premium materials, it offers a luxurious feel and impeccable fit. With its elegant design and superior construction, a super quality frock is sure to make a statement and enhance any special occasion or event.', 'A super quality frock is an exquisite and well-crafted dress that showcases exceptional craftsmanship and attention to detail. Made with premium materials, it offers a luxurious feel and impeccable fit. With its elegant design and superior construction, a super quality frock is sure to make a statement and enhance any special occasion or event.', '7 day return'),
(3, 'Men\'s cotton Branded shirt', '116.jpg', 4200.00, 4100.00, 1000, 'A men\'s cotton branded shirt is a stylish and comfortable garment designed for the modern gentleman. Crafted from high-quality cotton fabric, it offers breathability and durability. With the added touch of a recognizable brand, it showcases sophistication and fashion-forwardness. Perfect for both casual and formal occasions, this shirt is a versatile wardrobe staple.', 'A men\'s cotton branded shirt is a stylish and comfortable garment designed for the modern gentleman. Crafted from high-quality cotton fabric, it offers breathability and durability. With the added touch of a recognizable brand, it showcases sophistication and fashion-forwardness. Perfect for both casual and formal occasions, this shirt is a versatile wardrobe staple.', '7 day return'),
(4, 'Boys Denim', 'bk5.jpg', 5200.00, 4700.00, 1000, 'A men\'s cotton branded shirt is a stylish and comfortable garment designed for the modern gentleman. Crafted from high-quality cotton fabric, it offers breathability and durability. With the added touch of a recognizable brand, it showcases sophistication and fashion-forwardness. Perfect for both casual and formal occasions, this shirt is a versatile wardrobe staple.', 'A men\'s cotton branded shirt is a stylish and comfortable garment designed for the modern gentleman. Crafted from high-quality cotton fabric, it offers breathability and durability. With the added touch of a recognizable brand, it showcases sophistication and fashion-forwardness. Perfect for both casual and formal occasions, this shirt is a versatile wardrobe staple.', '7 Day Return'),
(5, 'Ladies new denim', 'dkg5.jpg', 3800.00, 1200.00, 1000, 'Ladies\' shorts are a popular and versatile clothing item for women. They are typically designed with a shorter length, ranging from above the knee to mid-thigh. Offering comfort and style, ladies\' shorts are ideal for casual occasions and warm weather. They come in various fabrics, colors, and styles, catering to different preferences and fashion trends.', 'Ladies\' shorts are a popular and versatile clothing item for women. They are typically designed with a shorter length, ranging from above the knee to mid-thigh. Offering comfort and style, ladies\' shorts are ideal for casual occasions and warm weather. They come in various fabrics, colors, and styles, catering to different preferences and fashion trends.', '7 Day return'),
(6, 'Ladies denim Short', 'sg5.jpg', 4195.00, 3995.00, 1000, 'Ladies denim Short', 'good contrition ', '7 return '),
(7, ' Men trouser ', 'bk2.jpg', 5200.00, 4900.00, 1250, ' Men trouser ', 'good condition', ' 7 day return');

-- --------------------------------------------------------

--
-- Table structure for table `logch`
--

CREATE TABLE `logch` (
  `LogSerial` int(11) NOT NULL,
  `UserName` varchar(80) NOT NULL,
  `LI` datetime NOT NULL,
  `LO` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mens_collection`
--

CREATE TABLE `mens_collection` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_featured_photo` varchar(50) NOT NULL,
  `p_old_price` decimal(7,2) NOT NULL,
  `p_new_price` decimal(7,2) NOT NULL,
  `p_qty` int(11) NOT NULL,
  `p_description` text NOT NULL,
  `p_condition` text NOT NULL,
  `p_return_policy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mens_collection`
--

INSERT INTO `mens_collection` (`p_id`, `p_name`, `p_featured_photo`, `p_old_price`, `p_new_price`, `p_qty`, `p_description`, `p_condition`, `p_return_policy`) VALUES
(1, ' Men trouser ', 'bk1.jpg', 5200.00, 4900.00, 1250, ' Men trouser ', 'good condition', ' 7 day return'),
(2, ' Men linen Shirt', 'bk2.jpg', 3100.00, 2995.00, 2000, ' Men linen Shirt', 'good condition', ' 7 day return'),
(3, ' Men Free style Cotton Shirt', 'pb3.jpg', 3800.00, 3500.00, 2000, ' Men Free style Cotton Shirt', 'good condition', ' 7 day return');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `p_name` varchar(255) NOT NULL,
  `p_featured_photo` varchar(255) NOT NULL,
  `p_price` decimal(10,2) NOT NULL,
  `colour` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `cus_add` text NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `exp_month` varchar(2) NOT NULL,
  `exp_year` varchar(4) NOT NULL,
  `cvc` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`p_name`, `p_featured_photo`, `p_price`, `colour`, `size`, `qty`, `customer_name`, `cus_add`, `card_number`, `exp_month`, `exp_year`, `cvc`) VALUES
('ladies frock', 'lg1.jpg', 2090.00, 'Red', 'Small', 1, '', '', '', '', '', ''),
('Men branded Shirt', 'pb6.jpg', 4900.00, 'Red', 'Small', 2, 'Dimuth Chathuranga', 'No27,Sudugalahena,Maliduwa, Booossa', '11111111111111111111', '11', '1111', '1111');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `size` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `card_expiry` varchar(7) NOT NULL,
  `card_cvc` varchar(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `card_number`, `card_expiry`, `card_cvc`, `created_at`) VALUES
(1, '23443', '323232', '2232', '2023-06-28 10:11:12'),
(2, '323232', '2323232', '232', '2023-06-28 10:11:27'),
(3, 'iudfahfaf', '4444242', '3434', '2023-06-28 10:12:40'),
(4, '232332', '332333', '3323', '2023-07-16 15:04:22'),
(5, '232332', '332333', '3323', '2023-07-16 15:05:12'),
(8, '65656565', '656566', '666', '2023-07-16 15:15:18'),
(10, '56656', '6565', '6565', '2023-07-16 15:19:37'),
(11, '565', '656', '656', '2023-07-16 15:22:40'),
(12, '65665', '6565', '6656', '2023-07-16 15:24:51'),
(13, '565656', '656', '565', '2023-07-16 15:32:18'),
(14, '4343', '  343', '4343', '2023-07-16 15:43:38'),
(15, '32322', '3232', '2323', '2023-07-16 15:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(80) NOT NULL,
  `email_address` varchar(200) NOT NULL,
  `address` varchar(80) NOT NULL,
  `city` varchar(21) NOT NULL,
  `zipcode` varchar(11) NOT NULL,
  `state` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `expiry_month` varchar(5) NOT NULL,
  `expiry_year` varchar(5) NOT NULL,
  `cvc` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `popular_product`
--

CREATE TABLE `popular_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(80) NOT NULL,
  `p_featured_photo` varchar(50) NOT NULL,
  `p_old_price` decimal(7,2) NOT NULL,
  `p_new_price` decimal(7,2) NOT NULL,
  `p_qty` int(11) NOT NULL,
  `p_description` text NOT NULL,
  `p_condition` text NOT NULL,
  `p_return_policy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popular_product`
--

INSERT INTO `popular_product` (`p_id`, `p_name`, `p_featured_photo`, `p_old_price`, `p_new_price`, `p_qty`, `p_description`, `p_condition`, `p_return_policy`) VALUES
(1, 'women skirt', 'pg6.jpg', 1995.00, 1895.00, 1499, 'A women\'s skirt is a versatile and feminine garment that adds flair to any outfit. Designed to be worn around the waist and flow down the legs, it offers comfort and freedom of movement. Available in various lengths, styles, and fabrics, women\'s skirts are a timeless fashion piece that can be dressed up or down for different occasions.', 'A women\'s skirt is a versatile and feminine garment that adds flair to any outfit. Designed to be worn around the waist and flow down the legs, it offers comfort and freedom of movement. Available in various lengths, styles, and fabrics, women\'s skirts are a timeless fashion piece that can be dressed up or down for different occasions.', '7 day return'),
(2, 'Men Branded Shirt ', 'pb2.jpg', 4300.00, 3900.00, 499, 'Men\'s shirts are essential wardrobe staples that offer both style and versatility. Made from various fabrics, including cotton, they provide comfort and breathability. With a range of designs, patterns, and colors available, men\'s shirts can be easily dressed up or down, making them suitable for any occasion or outfit.', 'Men\'s shirts are essential wardrobe staples that offer both style and versatility. Made from various fabrics, including cotton, they provide comfort and breathability. With a range of designs, patterns, and colors available, men\'s shirts can be easily dressed up or down, making them suitable for any occasion or outfit.', '7 day return'),
(3, 'women Skirt', 'pg2.jpg', 1365.00, 1290.00, 994, 'A women\'s skirt is a versatile and feminine garment that adds flair to any outfit. Designed to be worn around the waist and flow down the legs, it offers comfort and freedom of movement. Available in various lengths, styles, and fabrics, women\'s skirts are a timeless fashion piece that can be dressed up or down for different occasions.', 'A women\'s skirt is a versatile and feminine garment that adds flair to any outfit. Designed to be worn around the waist and flow down the legs, it offers comfort and freedom of movement. Available in various lengths, styles, and fabrics, women\'s skirts are a timeless fashion piece that can be dressed up or down for different occasions.', '7 day return'),
(4, 'Men branded Shirt', 'pb6.jpg', 5200.00, 4900.00, 1499, 'A men\'s cotton branded shirt is a stylish and comfortable garment designed for the modern gentleman. Crafted from high-quality cotton fabric, it offers breathability and durability. With the added touch of a recognizable brand, it showcases sophistication and fashion-forwardness. Perfect for both casual and formal occasions, this shirt is a versatile wardrobe staple.', 'A men\'s cotton branded shirt is a stylish and comfortable garment designed for the modern gentleman. Crafted from high-quality cotton fabric, it offers breathability and durability. With the added touch of a recognizable brand, it showcases sophistication and fashion-forwardness. Perfect for both casual and formal occasions, this shirt is a versatile wardrobe staple.', '7 day return'),
(5, 'women frock', 'pg8.jpg', 3900.00, 3600.00, 999, 'A women\'s frock is a fashionable and feminine dress that exudes grace and charm. With its flowing silhouette and elegant design, it is a versatile choice for various occasions. From casual outings to formal events, a women\'s frock offers a flattering and stylish option that showcases individual style and sophistication.', 'A women\'s frock is a fashionable and feminine dress that exudes grace and charm. With its flowing silhouette and elegant design, it is a versatile choice for various occasions. From casual outings to formal events, a women\'s frock offers a flattering and stylish option that showcases individual style and sophistication.', '7 day return'),
(6, 'Women Skirt', 'pg1.jpg', 3800.00, 2090.00, 500, 'A women\'s skirt is a versatile and feminine garment that adds flair to any outfit. Designed to be worn around the waist and flow down the legs, it offers comfort and freedom of movement. Available in various lengths, styles, and fabrics, women\'s skirts are a timeless fashion piece that can be dressed up or down for different occasions.', 'A women\'s skirt is a versatile and feminine garment that adds flair to any outfit. Designed to be worn around the waist and flow down the legs, it offers comfort and freedom of movement. Available in various lengths, styles, and fabrics, women\'s skirts are a timeless fashion piece that can be dressed up or down for different occasions.', '7 day return'),
(7, 'Men patch Denim', 'pb1.jpg', 5200.00, 5100.00, 999, 'Men\'s patch denim is a trendy and rugged choice for casual wear. These jeans feature patches or decorative stitching, adding a touch of uniqueness and personality. Made from durable denim fabric, they offer a stylish and edgy look. Men\'s patch denim is perfect for those seeking a cool and fashion-forward aesthetic.', 'Men\'s patch denim is a trendy and rugged choice for casual wear. These jeans feature patches or decorative stitching, adding a touch of uniqueness and personality. Made from durable denim fabric, they offer a stylish and edgy look. Men\'s patch denim is perfect for those seeking a cool and fashion-forward aesthetic.', '7 day return');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(80) NOT NULL,
  `p_featured_photo` varchar(50) NOT NULL,
  `p_old_price` decimal(7,2) NOT NULL,
  `p_new_price` decimal(7,2) NOT NULL,
  `p_qty` int(11) NOT NULL,
  `p_description` text NOT NULL,
  `p_condition` text NOT NULL,
  `p_return_policy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `womens_collection`
--

CREATE TABLE `womens_collection` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(80) NOT NULL,
  `p_featured_photo` varchar(50) NOT NULL,
  `p_old_price` decimal(7,2) NOT NULL,
  `p_new_price` decimal(7,2) NOT NULL,
  `p_qty` int(11) NOT NULL,
  `p_description` text NOT NULL,
  `p_condition` text NOT NULL,
  `p_return_policy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `womens_collection`
--

INSERT INTO `womens_collection` (`p_id`, `p_name`, `p_featured_photo`, `p_old_price`, `p_new_price`, `p_qty`, `p_description`, `p_condition`, `p_return_policy`) VALUES
(1, ' Women Denim Short', 'sg2.jpg', 3100.00, 2995.00, 1250, ' women denim shprt', 'good condition', ' 7 day return'),
(2, ' Women Denim Short', 'sg3.jpg', 5200.00, 4900.00, 1250, ' women denim shprt', 'good condition', ' 7 day return'),
(3, ' Frock', 'lg1.jpg', 3800.00, 3500.00, 1250, ' Women Frock', 'good condition', ' 7 day return'),
(4, ' Frock', 'lg2.jpg', 3800.00, 2995.00, 1000, ' Women Frock', 'good condition', ' 7 day return');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features_product`
--
ALTER TABLE `features_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `kids_collection`
--
ALTER TABLE `kids_collection`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `latest_product`
--
ALTER TABLE `latest_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `logch`
--
ALTER TABLE `logch`
  ADD PRIMARY KEY (`LogSerial`);

--
-- Indexes for table `mens_collection`
--
ALTER TABLE `mens_collection`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `popular_product`
--
ALTER TABLE `popular_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `womens_collection`
--
ALTER TABLE `womens_collection`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `features_product`
--
ALTER TABLE `features_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kids_collection`
--
ALTER TABLE `kids_collection`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `latest_product`
--
ALTER TABLE `latest_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `logch`
--
ALTER TABLE `logch`
  MODIFY `LogSerial` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mens_collection`
--
ALTER TABLE `mens_collection`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popular_product`
--
ALTER TABLE `popular_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `womens_collection`
--
ALTER TABLE `womens_collection`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

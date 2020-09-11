-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2019 at 09:22 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flavour_thief_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `Name` varchar(240) NOT NULL,
  `Email` varchar(240) NOT NULL,
  `Password` varchar(240) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Address` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `Name`, `Email`, `Password`, `PhoneNo`, `Address`) VALUES
(2, 'Someone', 'some@gmail.com', '123', 191111111, 'Dhaka'),
(3, 'Efti', 'mac@gmail.com', '123', 1916590193, 'Mirpur-2');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ItemID` int(11) NOT NULL,
  `ItemName` varchar(40) DEFAULT NULL,
  `ShopName` varchar(240) DEFAULT NULL,
  `Price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ItemID`, `ItemName`, `ShopName`, `Price`) VALUES
(1, 'Chicken Wings', 'BFC', 90),
(2, 'Spicy Chicken', 'BFC', 80),
(3, 'Boneless Chicken', 'BFC', 100),
(4, 'Fries', 'BFC', 150),
(5, 'Chicken Balls', 'BFC', 25),
(6, 'Fried Rice', 'BFC', 250),
(7, 'Espresso', 'Northend Coffee', 150),
(8, 'Americano', 'Northend Coffee', 130),
(9, 'Latte', 'Northend Coffee', 175),
(10, 'Macchiato', 'Northend Coffee', 150),
(11, 'Cappucino', 'Northend Coffee', 180),
(12, 'Moroccan Mint', 'Northend Coffee', 150),
(13, 'Bashmaati Kacchi', 'Sultan Dine', 399),
(14, 'Bashmaati Kacchi with Chicken Roast', 'Sultan Dine', 460),
(15, 'Murag Polao', 'Sultan Dine', 350),
(16, 'Chicken Tandori', 'Sultan Dine', 180),
(17, 'Beef Rezala', 'Sultan Dine', 150),
(18, 'Borhani', 'Sultan Dine', 50),
(19, 'Beef Cheese Delight', 'Takeout', 230),
(20, 'Chicken Cheese Delight', 'Takeout', 230),
(21, 'Beef Supreme', 'Takeout', 350),
(22, 'Chicken Supreme', 'Takeout', 350),
(23, 'Beef and Bacon', 'Takeout', 400),
(24, 'Fries', 'Takeout', 100),
(25, 'Pizza Roma', 'Pizza Guy', 850),
(26, 'Vegetarian\'s Nightmare', 'Pizza Guy', 900),
(27, 'Mashroom Pizza', 'Pizza Guy', 750),
(28, 'Meatball Pizza', 'Pizza Guy', 800),
(29, 'Chef\'s Special', 'Pizza Guy', 1000),
(30, 'Beef Pepperoni', 'Pizza Guy', 900),
(31, 'Beef Sheek Kabab', 'Tava', 120),
(32, 'Chicken Tandoori', 'Tava', 100),
(33, 'Reshmi Kabab', 'Tava', 250),
(34, 'Chicken Grill', 'Tava', 360),
(35, 'Special Nan', 'Tava', 50),
(36, 'Paratha', 'Tava', 25),
(37, 'Garlic Mashroom', 'Suger Bun', 180),
(38, 'Chicken Saslic', 'Suger Bun', 120),
(39, 'Buffalo Wings', 'Suger Bun', 200),
(40, 'Pasta', 'Suger Bun', 350),
(41, 'Pizza', 'Suger Bun', 850),
(42, 'Mixed Salad', 'Suger Bun', 180),
(43, 'Chicken Burger', 'Chillox', 180),
(44, 'Beef Burger', 'Chillox', 180),
(45, 'Chicken Double Decker ', 'Chillox', 250),
(46, 'Beef Double Decker', 'Chillox', 250),
(47, 'Smoky BBQ Chicken Burger', 'Chillox', 200),
(48, 'Beef and Bacon Burger', 'Chillox', 350),
(49, 'Mejban Platter', 'Mejjan Hayle Ayun', 450),
(50, 'Mejban Ghost', 'Mejjan Hayle Ayun', 800),
(51, 'Plain Polao', 'Mejjan Hayle Ayun', 150),
(52, 'Beef Rezala', 'Mejjan Hayle Ayun', 350),
(53, 'Doi', 'Mejjan Hayle Ayun', 200),
(54, 'Daal Ghost', 'Mejjan Hayle Ayun', 400),
(55, 'Hydrabadi Biriyani', 'Handi', 380),
(56, 'Mutton Biriyani', 'Handi', 450),
(57, 'Afghan Chikcken Biryani', 'Handi', 180),
(58, 'Golap Jamun', 'Handi', 80),
(59, 'Chicken Tandoori', 'Handi', 150),
(60, 'Chicken Biriyani', 'Handi', 200);

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `OrderItemID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  `ItemID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`OrderItemID`, `OrderID`, `ItemID`, `Quantity`) VALUES
(15, 25, 1, 2),
(16, 26, 1, 2),
(17, 26, 2, 2),
(18, 27, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `TotalCost` float DEFAULT NULL,
  `Status` varchar(11) NOT NULL,
  `OrderTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `CustomerID`, `TotalCost`, `Status`, `OrderTime`) VALUES
(25, 1, 180, 'Pending', '2019-08-17 12:16:07'),
(26, 3, 340, 'Pending', '2019-08-17 19:01:39'),
(27, 3, 600, 'Pending', '2019-08-17 19:20:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Contact No` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `Username`, `Password`, `Contact No`, `Email`, `Address`) VALUES
(1, 'Will David', 'abc', '1234', '01500668899', 'will@gmail.com', '22/A,Ramna. Dhaka'),
(2, 'Jonathan Kane', 'kane89', '4567', '01655668833', 'kane@hotmail.com', '58/B, Pallabi,Mirpur. Dhaka'),
(3, 'Mathew Joey', 'joey42', '1234', '01866995522', 'joey@yahoo.com', 'R-15, H-34, Block-D. Bashundhara R/A. Dhaka'),
(4, 'Jane Willam ', 'jane78', '4567', '01400885533', 'jane@gmail.com', '56/C, Ittyadi Lane, Kyallnpur. Dhaka'),
(5, 'Mustafa Karim', 'karim29', '1234', '01755669933', 'mustafa@gmai.com', 'R-01, Block-B, Banasree. Dhaka'),
(6, 'Nibedita Ahmed', 'ahmed95', '4567', '01322889977', 'nibedita@yahoo.com', '78/GHA, Adabor. Dhaka'),
(7, 'Shams', 'Shams73', '1234', '0195566333', 'shams@gmail.com', '89 Brick Lane, AK Khan. Chattogram'),
(8, 'Sonchita Rahman', 'rahman52', '1234', '01722669900', 'sonchita@hotmail.com', 'Eqity Anitry Complex. New Market. Chattogram.'),
(9, 'Mahmud Hasan', 'hasan76', '4567', '01533669988', 'mahmud@gmail.com', '78/C. Alangkar Mor. Chattogram'),
(10, 'Komolilka Bose', 'bose82', '1234', '01855332299', 'bose@yahoo.com', '85/A. Block-D. Nijhum R/A. Chattogram');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(50) NOT NULL,
  `first name` varchar(50) NOT NULL,
  `last name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`OrderItemID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `OrderItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

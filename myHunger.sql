-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2022 at 09:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myHunger`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `adorer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `idproducts` int(11) NOT NULL,
  `title` text NOT NULL,
  `price` float NOT NULL,
  `meal_type` text NOT NULL,
  `summary` text NOT NULL,
  `cuisine` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idproducts`, `title`, `price`, `meal_type`, `summary`, `cuisine`, `image`) VALUES
(3, 'Ramen', 11, 'Lunch', 'This is Chicken Ramen. It contains chicken, noodles, vegetable soup etc.', 'Chinese', 'ramenLunch5.jpeg'),
(4, 'Hyderabadi Biryani', 16, 'Dinner', 'This is a traditional South Indian dish named Hyderabadi Biryani. \r\nIt contains rice, Indian spices, and veggies.', 'Indian', 'Hyderabadi BiryaniDinner1.jpeg'),
(6, 'Broccoli with Feta Cheese', 5, 'sides', 'This crunchy roasted broccoli salad with pine nuts and feta is full of flavor', 'NA', 'Broccoli with Feta Cheesesides9.jpeg'),
(11, 'Lasagna Al Forno', 11, 'Lunch', 'This is a Classic Italian Lasagna.\r\nIt includes Beef, pancetta, carrots and celery.', 'Italian', 'Lasagna Al FornoLunch7.png'),
(12, 'Meaty Manicotti', 15, 'Dinner', 'This simple dish has been very popular at family gatherings and potlucks.\r\nIt includes manicotti shells, cheese, beef and spaghetti sauce.', 'Italian', 'Meaty ManicottiDinner2.jpeg'),
(13, 'Alfredo Pasta', 6, 'Sides', ' Creamy and rich, yet never heavy, this Lighter Spinach Alfredo.', 'Italian', 'Alfredo PastaSides7.jpeg'),
(14, 'Thai Spring Rolls', 6, 'Sides', ' Thai Spring Rolls are crispy, crunchy crowd pleasers.\r\nIt contains shrimps, veggies.', 'Thai', 'Thai Spring RollsSides5.jpeg'),
(15, 'Vegan Khao Pad (Thai Fried Rice)', 15, 'Dinner', 'Classic Thai fried rice with eggs, green onions, fresh tomatoes and your choice of pork, chicken or beef. \r\n', 'Thai', 'Vegan Khao Pad (Thai Fried Rice)Dinner2.jpeg'),
(16, 'Chole Bhature', 11, 'Lunch', 'Chole Bhature is one of the mouth-watering, spicy, exotic dish from North India.\r\nIt contains chickpeas, and veggies.', 'Indian', 'Chole BhatureLunch9.jpeg'),
(17, 'Pani Puri', 5, 'Sides', 'This popular street food doesn’t need any introduction! Potato, onion, chickpeas, coriander chutney.', 'Indian', 'Pani PuriSides5.jpeg'),
(18, 'Classic Indian Lassi', 3, 'Drinks', ' This is a sweet creamy thick lassi.', 'Indian', 'Classic Indian LassiDrinks2.png'),
(19, 'Loaded Poutine Fries', 5, 'Sides', 'This is a Authentic, Canadian Poutine right at home.', 'Canadian', 'Loaded Poutine FriesSides5.jpeg'),
(20, 'Filter Coffee', 3, 'Drinks', 'This is a Filter Coffee', 'Common', 'Filter CoffeeDrinks8.webp'),
(22, 'Juice', 2, 'Drinks', '  You can select any Fruit Juice', 'Common', 'JuiceDrinks1.png');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE `resume` (
  `idresume` int(11) NOT NULL,
  `Name` text NOT NULL,
  `tag` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `img` text NOT NULL,
  `about` text NOT NULL,
  `grade1` text NOT NULL,
  `school1` text NOT NULL,
  `year1` text NOT NULL,
  `grade2` text NOT NULL,
  `school2` text NOT NULL,
  `year2` text NOT NULL,
  `skills` text NOT NULL,
  `experience` text NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`idresume`, `Name`, `tag`, `email`, `phone`, `img`, `about`, `grade1`, `school1`, `year1`, `grade2`, `school2`, `year2`, `skills`, `experience`, `age`) VALUES
(1, 'John Doe', 'I like Coffee and i like to Cook.', 'email@happyfaces.ca', '(807) - 358 - 1234', '10.png', ' I am a lorem ipsum text. I am passionate about Cooking,\r\n\r\nCleaning and decorations.\r\n\r\nI love lorem ipsum text. I am always excited about lorem ipsum text lorm ipsum text lorem ipsum.', 'Grade 8', 'Abc school thunderbay', 'August 2010', 'Grade 10', 'XYZ school toronto', 'May 2015', 'Cooking, Decoration, Lorem, Ipsum, Text', 'Cooking lessons at shelter house (June - July, 2017)', 25),
(2, 'Keval Motivaras', 'I play with PHP and drink Coffee.', 'email@happyfaces.ca', '(807) - 358 - 1234', 'k.png', ' I am a lorem ipsum text. I am passionate about Cooking,\r\n\r\nCleaning and decorations.\r\n\r\nI love lorem ipsum text. I am always excited about lorem ipsum text lorm ipsum text lorem ipsum.', 'Bachelor\'s in IT', 'SVIT, India', 'May 2019', 'PGD in ICT Solutions', 'Confederaion College', 'August 2021', 'Web Design, Painting, Cricket, Cooking', 'Cooking lessons at shelter house (May - December, 2020)', 23),
(4, 'Jagravi Patel', 'I like Coffee and i like to Cook.', 'patel98jagravi@gmail.com', '(807) - 358 - 1388', 'jagravi.png', ' I am a lorem ipsum text. I am passionate about Cooking,\r\n\r\nCleaning and decorations.\r\n\r\nI love lorem ipsum text. I am always excited about lorem ipsum text lorm ipsum text lorem ipsum.', 'Bachelor\'s in IT', 'GTU, India', 'May 2019\r\n', 'PGD in ICT Solutions\r\n', 'Confederaion College', 'August 2021', 'PowerBI, Tableiu, Analytics, SQL, Dart', 'Data Analyst (1 Year)', 24);

-- --------------------------------------------------------

--
-- Table structure for table `staff_email`
--

CREATE TABLE `staff_email` (
  `idse` int(11) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_email`
--

INSERT INTO `staff_email` (`idse`, `email`) VALUES
(1, 'staff@g.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idsuer` int(11) NOT NULL,
  `acc_type` text NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` text NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idsuer`, `acc_type`, `fname`, `lname`, `mobile`, `email`, `pwd`) VALUES
(1, 'Member', 'admin', 'admin', 890678956, 'admin@g.com', '$2y$10$xviGasCxUtP8isEQhciPRuPO2J5vwV5q7V9x/1WYoFQ850BtLIy0m'),
(2, 'Member', 'paukumar', 'chabela', 123, 'paubhau@gmail.com', '$2y$10$ClBYhRbvqgMSW.UMwJkfa.AaN.u.P5mqrIYL1r5t5SX7TARUGP06y'),
(3, 'Staff', 'Staff', 'Staff', 1234567890, 'staff@g.com', '$2y$10$WdVaiYNYJCkkBIaUn0zf1uLagQvD2TgAyBjX666Bryi14Dym3bL9G'),
(4, 'Member', 'Pablo', 'Pumpkin', 807, 'keval.motivaras@gmail.com', '$2y$10$Kt2EociobWvbq/etAWXqyeFv/ani6UJNqjQwP8AINezz352.PEdly'),
(5, 'Member', 'vaidehi', 'darji', 123, 'vai@gmail.com', '$2y$10$TrQoo4b/G4QzfCI2dJSv2O37SXmDPOEytJBHQIsOwP.uBHTvrqyRq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`adorer`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idproducts`);

--
-- Indexes for table `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`idresume`);

--
-- Indexes for table `staff_email`
--
ALTER TABLE `staff_email`
  ADD PRIMARY KEY (`idse`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idsuer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `adorer` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idproducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `resume`
--
ALTER TABLE `resume`
  MODIFY `idresume` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff_email`
--
ALTER TABLE `staff_email`
  MODIFY `idse` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idsuer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

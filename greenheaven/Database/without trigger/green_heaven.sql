-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2017 at 08:44 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green_heaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_address`
--

CREATE TABLE `billing_address` (
  `order_id` char(10) NOT NULL,
  `billing_name` varchar(50) NOT NULL,
  `contuct_no` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `same_delivery_address` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `id` int(11) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_name` varchar(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Not Approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coment`
--

INSERT INTO `coment` (`id`, `entry_date`, `product_name`, `product_id`, `fullname`, `message`, `status`) VALUES
(30, '2017-12-02 05:52:13', '', 0, 'hjghjg', 'jghjgjgjhgjhj gh jghjg', 'Approved'),
(31, '2017-12-02 05:52:17', '', 0, 'jtyutynutyut', 'utyututnutyutu tyu tytyuty', 'Approved'),
(35, '2017-12-03 04:25:10', '', 0, 'fffffffffff', 'fffffffffffffff', 'Approved'),
(37, '2017-12-02 17:18:35', '', 0, 'gfhfg gghj', 'fghf fghf hfh  fgh fg', 'Not Approved');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `entry_date`, `name`, `email`, `contact_no`, `subject`, `message`) VALUES
(2, '2017-12-02 11:22:57', 'milon', 'milon@gmail.com', '01882555555', 'ssdsd', 'sdgsdg sgsgsdgs'),
(4, '2017-12-02 11:27:47', 'asadul Islam', 'asadul@gmail.com', '8801935025870', 'samadas', 'ffsdf sdfsdfs'),
(5, '2017-12-02 11:28:34', 'gossdg', 'dalaa@gmail.com', '8801722276314', 'assfaf', 'asfasfasf'),
(6, '2017-12-02 11:32:15', 'alert', 'hamidul@gail.com', '8801722276314', 'dfgd', 'alert(\"dfsdf\")'),
(7, '2017-12-02 11:36:10', '', 'asad@gmail.com', '8801722145263', 'ttfhfghf', 'function delete(){\n var d = sdds\n}'),
(8, '2017-12-02 23:16:13', 'khadiza', 'khadiza@gmail.com', '8801778596325', 'hghg', 'fgdfg dfgdfgdf gdg df');

-- --------------------------------------------------------

--
-- Table structure for table `decoration_plants`
--

CREATE TABLE `decoration_plants` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `botanical_name` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `width` varchar(50) NOT NULL,
  `color` varchar(20) NOT NULL,
  `sunlight` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decoration_plants`
--

INSERT INTO `decoration_plants` (`id`, `name`, `botanical_name`, `height`, `width`, `color`, `sunlight`, `description`, `price`, `stock`, `image_name`) VALUES
(2, 'Caktas', 'Cactaceae', '20', '5', 'Green', 'Low', 'A cactus is a member of the plant family Cactaceae', '20.00', '4', 'images/1512366390.jpg'),
(3, 'Cultivated cacti ', 'Caryophyllales', '5', '10', 'Green', 'Low', ' succulent plants in both the Old and New World', '10.00', '-47', 'images/1512366505.jpg'),
(4, 'Maney plants', ' plants', '10', '10', 'Green', 'Low Medium', 'very old decoration plants', '30.00', '-46', 'images/1512366785.jpg'),
(5, 'Reca catechu', 'Areca catechu', '20', '10', 'Green', 'High medium', 'Areca catechu is grown for its commercially important seed crop, the areca nut.', '40.00', '-45', 'images/1512367156.png'),
(6, 'Bahari plants', 'Bahari', '10', '7', 'Green', 'High medium', 'The seed contains alkaloids such as arecaidine and arecoline, which, when chewed', '10.00', '-44', 'images/1512367248.jpg'),
(7, 'Arecaidine', 'Arecaidine', '7', '10', '', 'Medium high', 'The seed contains alkaloids such as arecaidine and arecoline, which, when chewed', '20.00', '-55', 'images/1512367372.jpg'),
(8, 'Decoration', 'plants', '10', '10', 'Green', 'High medium', 'Parker Metal Decoration Company Plant was listed', '20.00', '-42', 'images/1512367574.jpg'),
(9, 'Bonshi', 'Japanese white pine', '10', '10', 'Green', 'Low Medium', 'Bonshai plants', '60.00', '2', 'images/1512367851.jpg'),
(10, 'Green caktas', 'caktas', '3', '4', 'Green', 'Low', 'caktesi plants', '50.00', '-66', 'images/1512367978.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_ address`
--

CREATE TABLE `delivery_ address` (
  `order_id` char(10) NOT NULL,
  `delivery_name` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `shape` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `purpose` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`id`, `name`, `type`, `brand`, `shape`, `color`, `origin`, `purpose`, `price`, `stock`, `image_name`) VALUES
(29, 'Tools', 'Spades and digging tools', 'Spear & Jackson', 'Round', 'Silvar', 'Bangladesh', 'planting', '400', '46', 'images/1510382670.jpg'),
(30, 'Hand pot', 'Spades and digging tools', 'Amtech', 'Long', 'Silvar', 'Bangladesh', 'Planting the plant', '120', '-45', 'images/1512188727.jpg'),
(31, 'Sijer', 'Pruners and cutting tools', 'Spear & Jackson', 'Long', 'Silvar', 'Japan', ' leading marketplace for the buying and selling of used equipment.', '10', '6', 'images/1512372663.jpg'),
(32, 'Tools', 'plant protection and support', 'Amtech', 'Squire', 'Black', 'Japan', ' leading marketplace for the buying and selling of used equipment.', '10', '46', 'images/1512372775.jpg'),
(33, 'knife', 'Pruners and cutting tools', 'Agri-Feb', 'Long', 'Silvar', 'Bangladesh', ' leading marketplace for the buying and selling of used equipment.', '4', '-43', 'images/1512372834.jpg'),
(34, 'Rolar', 'plant protection and support', 'Unbranded', 'Squire', 'Black', 'Bangladesh', ' leading marketplace for the buying and selling of used equipment.', '5', '-39', 'images/1512372903.jpg'),
(35, 'Tools', 'Spades and digging tools', 'Spear & Jackson', 'Squire', 'Black', 'China', ' leading marketplace for the buying and selling of used equipment.', '5', '46', 'images/1512372972.jpg'),
(36, 'Tools', 'Spades and digging tools', 'True', 'width', 'Silvar', 'Thailand', ' leading marketplace for the buying and selling of used equipment.', '6', '46', 'images/1512373015.jpg'),
(37, 'Smart Monitor', 'plant protection and support', 'Agri-Feb', 'Round', 'Black', 'Thailand', ' leading marketplace for the buying and selling of used equipment.', '7', '-42', 'images/1512373077.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `name` varchar(50) NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Not Approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `entry_date`, `name`, `rating`, `message`, `status`) VALUES
(2, '2017-11-06 12:09:33', 'asdd', 4, 'dfgfdg', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `flower_plants`
--

CREATE TABLE `flower_plants` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `botanical_name` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `width` varchar(20) NOT NULL,
  `color` varchar(50) NOT NULL,
  `sunlight` varchar(20) NOT NULL,
  `fragrant` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flower_plants`
--

INSERT INTO `flower_plants` (`id`, `name`, `botanical_name`, `height`, `width`, `color`, `sunlight`, `fragrant`, `description`, `price`, `stock`, `image_name`) VALUES
(1, 'Chinarose', 'Hibiscus rosa-sinensis', '3', '1', 'Red', 'Medium', 'Yes', 'Chinarose is a beautiful flower. This plants is important of our nursery.', '50.00', '8', 'images/1512367122.jpg'),
(2, 'Kadam', 'Neolamarckia cadamba', '4', '2', 'Yellow', 'High medium', 'No', 'Kadam is beautiful flowers.', '70.00', '30', 'images/1512367389.jpg'),
(3, 'Cosmos', 'Cosmos bipinnatus', '2', '1', 'Red', 'Low high', 'Yes', 'Cosmos is cute little flower.', '40.00', '30', 'images/1512367763.jpg'),
(4, 'Dalia', 'dahlia pinnata', '4', '2.5', 'Red', 'Medium', '', 'Dalia is a red color flower.', '90.00', '51', 'images/1512367863.jpg'),
(5, 'Belly', 'belly', '3', '2', 'White', 'High medium', '', 'Belly is high fragrant flower.', '60.00', '216', 'images/1512367943.jpg'),
(6, 'Merigold', 'merigold', '4', '1.5', 'Yellow', 'High medium', '', 'Merigold flower plant available in Bangladesh.', '80.00', '31', 'images/1512368107.jpg'),
(7, 'Rose', 'Rosa', '3', '1.5', 'Orange', 'High medium', '', 'Rose flower plant available in the world.', '90.00', '32', 'images/1512368257.jpg'),
(8, 'Sunflower', 'Helianthus annuus', '5', '3', 'Yellow', 'Medium', '', 'Sunflower is increase beautiness in our garden.', '100.00', '14', 'images/1512368407.jpg'),
(9, 'Nayantara', 'Madagascar periwinkle', '3', '2', 'Pink', 'Low Medium', '', 'It is very common flower of our country.', '67.00', '26', 'images/1512368547.jpg'),
(10, 'Lantana', 'Lantana camara', '5', '3', 'Yellow', 'Medium', 'Yes', 'Lantana flower plant is road side flower of Bangladesh.', '40.00', '409', 'images/1512368650.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fruit_plants`
--

CREATE TABLE `fruit_plants` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `botanical_name` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `width` varchar(50) NOT NULL,
  `color` varchar(20) NOT NULL,
  `sunlight` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruit_plants`
--

INSERT INTO `fruit_plants` (`id`, `name`, `botanical_name`, `height`, `width`, `color`, `sunlight`, `description`, `price`, `stock`, `image_name`) VALUES
(7, 'Mango Plant', 'Mangifera indica', '1000', '300', 'Green', 'Low Medium', 'Its a seasonal food', '100.00', '29', 'images/1512368058.jpg'),
(8, 'Papaya Plant', 'Carica papaya', '500', '200', 'Green', 'High medium', 'You can plant it all the year round', '5.00', '47', 'images/1512368234.jpg'),
(9, 'Apple Plant', 'Malus domestica', '200', '50', 'Red', 'Low high', 'Its a testy fruit to all', '15.00', '42', 'images/1512368449.jpg'),
(10, 'Orange Plant', 'Citrus X sinensis', '100', '50', 'Orange', 'Low high', 'This is a creampie fruit ', '15.00', '15', 'images/1512368639.jpg'),
(11, 'Borol Plant', 'Ziziphus mauritiana', '400', '50', 'Green', 'High medium', 'It provides testy fruit', '20.00', '42', 'images/1512369766.jpg'),
(13, 'Lemon Plant', 'Citrus Ã— limon', '70', '20', 'Green', 'High medium', 'This fruit contains  vitamin C', '40.00', '28', 'images/1512370247.jpg'),
(14, 'Cocunut Plant', ' Cocos nucifera', '500', '60', 'Green', 'High', 'You can plant it in yeird', '70.00', '48', 'images/1512370510.jpg'),
(15, 'Pine Apple Plant', ' Ananas comosus', '50', '20', 'Green', 'High medium', 'It can be plant as like agricultural plant', '15.00', '50', 'images/1512371086.jpg'),
(16, 'Guyava Plant', 'Psidium guajava', '200', '50', 'Green', 'High', 'Tasty and plantiful fruit', '10.00', '47', 'images/1512371230.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `gardening_plants`
--

CREATE TABLE `gardening_plants` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `botanical_name` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `width` varchar(100) NOT NULL,
  `color` varchar(20) NOT NULL,
  `sunlight` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gardening_plants`
--

INSERT INTO `gardening_plants` (`id`, `name`, `botanical_name`, `height`, `width`, `color`, `sunlight`, `description`, `price`, `stock`, `image_name`) VALUES
(1, 'Caktasia', 'Caktas', '2', '1.5', 'Green', 'Low high', 'The most recent articles are listed nearest the top of each category heading.', '20.00', '53', 'images/1512369513.jpg'),
(2, 'Ucaliktas', 'Ucaliktas', '10', '5', 'Green', 'Low high', 'frame brick industrial building, ranging from one to three stories in height', '20.00', '-36', 'images/1512369586.jpg'),
(3, 'Roggon', 'Roggon', '30', '10', 'Green', 'Low Medium', 'frame brick industrial building, ranging from one to three stories in height', '20.00', '-47', 'images/1512369643.jpg'),
(4, 'Vermont', 'Vermont', '10', '10', 'Green', 'High medium', 'articles include those on perennials, flowers, and many other gardening topics', '10.00', '-36', 'images/1512369765.jpg'),
(6, 'Jaw plants', 'jaw', '3', '2', 'Green', 'High medium', ' mainly multicellular, predominantly photosynthetic eukaryotes of the kingdom Plantae.', '70.00', '-42', 'images/1512370641.jpg'),
(7, 'Meheguni', 'Meheguni', '10', '3', 'Green', 'High medium', ' Multicellular, predominantly photosynthetic eukaryotes of the kingdom Plantae.', '20.00', '-19', 'images/1512370808.jpg'),
(8, 'Akhas moni', 'Akhas moni', '2', '1', 'Green', 'Low high', 'Green plants have cell walls containing cellulose and obtain most of their energy from sunlight via photosynthesis by primary ', '4.00', '-32', 'images/1512371376.jpg'),
(9, 'Ant plant', 'Ant plant', '1', '.3', 'Green', 'Low high', 'Plants have cell walls containing cellulose and obtain most of their energy from sunlight via photosynthesis by primary ', '5.00', '-40', 'images/1512371453.jpg'),
(10, 'Fragaria x ananassa.', 'Fragaria x ananassa.', '2', '1', 'Green', 'Low Medium', 'There are about 300â€“315 thousand species of plants, of which the great majority, some 260â€“290 thousand', '7.00', '-57', 'images/1512371594.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `medicinal_plant`
--

CREATE TABLE `medicinal_plant` (
  `id` int(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `botanical_name` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `width` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `sunlight` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,0) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicinal_plant`
--

INSERT INTO `medicinal_plant` (`id`, `name`, `botanical_name`, `height`, `width`, `color`, `sunlight`, `description`, `price`, `stock`, `image_name`) VALUES
(65, 'Holy Basil Plant', 'Ocimum tenuiflorum', '120', '1.02', 'Green', 'High medium', 'This is perfect for herbal medicin.', '85', '45', 'images/1.jpg'),
(68, 'Alovera Plant', 'barbadensis Mill', '140', '8', 'Green', 'Low Medium', 'This is wonderful flower plant', '25', '45', 'images/2.jpg'),
(70, 'Myrobalan Plant', 'Terminalia chebula', '250', '85', 'Gray', 'High', 'This is best for herbal medicin', '10', '45', 'images/3.jpg'),
(71, 'Indian Basil Plant ', 'Terminalia chebula', '12', '2.5', 'Gray', 'Low', 'hjjkhj gkhg ghjkghk', '60', '45', 'images/4.jpg'),
(72, 'Thankoni Plant', 'Terminalia chebula', '12', '2.5', 'Blue', 'Low Medium', 'jghjg jkhjk  jk  hhgh', '62', '45', 'images/5.jpg'),
(75, 'Lotas', 'Lotas', '12', '2.5', 'Gray', 'Low Medium', 'This is wonder ful plawer plant', '62', '45', 'images/7.jpg'),
(82, 'Juice', 'Jambura', '150', '2', 'Blue', 'Low Medium', 'hgjghjgjgjjghj', '250', '45', 'images/8.jpg'),
(83, 'hhgjgh', 'Jambura', '111111', '2.91', 'Blue', 'Low Medium', 'hjghjghmghmgmmg ghgh', '225', '44', 'images/9.jpg'),
(84, 'Wood aple', 'Jambura', '12', '2.5', 'Blue', 'Low', 'kghklhkjhkhj  hjghj', '170', '45', 'images/10.jpg'),
(86, 'Jambura', 'hjghjg', '33', '33', 'Blue', 'Low', 'hhhhhhhhhhhhhhhh', '33', '42', 'images/11.jpg'),
(88, 'Wood aple', 'ghjghjghj', '12', '2.5', 'Blue', 'Low Medium', 'dfhdfh dhdf', '95', '45', 'images/12.jpg'),
(93, 'Jambura', 'ghjghjghj', '12', '2.5', 'Blue', 'Low Medium', 'hjghj dfg dfgdd', '88', '45', 'images/13.jpg'),
(94, 'Palmyra', 'ghjghjghj', '12', '2.5', 'Green', 'Low', 'dfghdfh dh dfghd fgdf', '58', '45', 'images/14.jpg'),
(95, 'Wood aple', 'ghjghjghj', '12555', '2.5', 'Gray', 'Low Medium', 'fghfghf hfghfgh ', '50', '45', 'images/15.jpg'),
(102, 'ghfghfg', 'fghfgh', '54242', '554', 'Gray', 'Medium', 'ghjghjdhd d fdff', '70', '45', 'images/1509869928.jpg'),
(103, 'Agora', 'Agora', '5', '2.', 'Green', 'Medium', 'This is very important medicinal plant for health.', '133', '45', 'images/1509899861.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `total_price` varchar(50) NOT NULL,
  `current_status` varchar(20) NOT NULL DEFAULT 'Not Approved'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`order_id`, `order_date`, `fullname`, `email`, `contact_no`, `address`, `total_price`, `current_status`) VALUES
(1, '2017-12-17 15:44:23', 'Tanzin Akter', 'tanzin@gmail.com', '0174452639', 'sdgsdgsdg dfdfg dfgdf ', '1295', 'Not Approved'),
(2, '2017-12-17 15:46:20', 'ghjghj ghjghjg', 'azarul@gmail.com', '4534534', 'jkhjkhjkhk', '1331', 'Approved'),
(3, '2017-12-17 15:48:13', 'Afroza', 'afroza@gmail.com', '01755859632', 'fgh herherherhe', '240', 'Approved'),
(4, '2017-12-17 16:56:55', 'Shuvo', 'suvo@gmail.com', '01755859632', 'fgsdfgsg g dfgdfgdgdss', '1170', 'Approved'),
(5, '2017-12-17 17:29:07', 'dfghdfhdhdfh', 'asasd@gdr.hjkhj', '5454524504545', 'iyuityit ityit', '400', 'Approved'),
(6, '2017-12-17 17:33:02', 'Md Aazharul Islam', 'greenheaven32@gmail.com', '01723679431', 'rgeg er gerger', '200', 'Approved'),
(7, '2017-12-18 10:47:35', 'Md Aazharul Islam', 'greenheaven32@gmail.com', '12345655', 'hjghjggh ghjg', '20', 'Approved'),
(8, '2017-12-18 15:47:31', 'Rakesh Sarkar', 'admin@gmail.com', '12345655', 'hjghj gjgh jghjgh', '1110', 'Approved'),
(9, '2017-12-18 15:48:10', 'Kamal Hosen', 'admin@gmail.com', '12345655', 'hjg gh jghjg', '813', 'Approved'),
(10, '2017-12-18 15:48:59', 'Afroza Ahmed', 'tanzin@gmail.com', '01723679431', 'jk ghjghjg jgh jg j gjg', '410', 'Approved'),
(11, '2017-12-18 15:50:59', 'Rakesh Sarkar', 'tanzin@gmail.com', '01755859632', 'nbmbnmbbm bmb', '681', 'Not Approved'),
(12, '2017-12-18 15:51:57', 'Tanzin', 'naly@gmail.com', '01911735608', 'dcdsf sfsfsdfs', '140', 'Approved'),
(16, '2017-12-18 16:01:06', 'Mahmuda', 'mahmuda@gmail.com', '01933568512', 'gg gdgfdfgdfdg dgd', '145', 'Approved'),
(17, '2017-12-19 02:31:08', 'Morshed Alam', 'naly@gmail.com', '01912051253', 'rgg sdfg sdfg sd sdf gsg', '900', 'Not Approved'),
(18, '2017-12-19 02:31:08', 'Morshed Alam', 'naly@gmail.com', '01912051253', 'rgg sdfg sdfg sd sdf gsg', '900', 'Approved'),
(19, '2017-12-19 02:37:59', 'afroza', 'afroza@gmail.com', '01456325896', 'fsdg dfg fdgdfgdf gdf ', '1022', 'Not Approved'),
(20, '2017-12-19 04:41:41', 'dfdfd', 'greenheaven32@gmail.com', '546466', 'hvbjghjh ', '320', 'Approved'),
(21, '2017-12-19 04:44:27', 'dfdfd', 'greenheaven32@gmail.com', '546466', 'hvbjghjh ', '320', 'Approved'),
(22, '2017-12-19 04:45:01', 'asd', 'sddf@rtre.com', '54354', 'dfgdfg', '50', 'Approved'),
(23, '2017-12-19 04:54:07', 'gfhfghfg', 'greenheaven32@gmail.com', '01911456253', 'fghf fg fg ', '50', 'Approved'),
(24, '2017-12-19 04:57:45', 'azharul', 'azharul@gmail.com', '01912051253', 'fgjhfgj fg ', '50', 'Not Approved'),
(25, '2017-12-19 04:57:45', 'azharul', 'azharul@gmail.com', '01912051253', 'fgjhfgj fg ', '50', 'Approved'),
(26, '2017-12-19 05:00:59', 'Morshed Alam', 'admin@gmail.com', '01911456253', 'hgjghjg gh ', '440', 'Approved'),
(27, '2017-12-19 05:24:44', 'azharul', 'azharul@gmail.com', '01911456253', 'fgh ghfg hh fg fg ', '900', 'Approved');

--
-- Triggers `orderlist`
--
DELIMITER $$
CREATE TRIGGER `delete_order_product` AFTER DELETE ON `orderlist` FOR EACH ROW BEGIN
DELETE FROM order_details WHERE id = OLD.order_id;
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` varchar(50) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `unit_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `product_id`, `product_name`, `quantity`, `unit_price`) VALUES
(2, '10', ' Green caktas ', '1', '50.00'),
(2, '3', ' Cultivated cacti  ', '2', '10.00'),
(2, '30', ' Hand pot ', '2', '120'),
(2, '31', ' Sijer ', '1', '10'),
(2, '32', ' Tools ', '4', '10'),
(2, '33', ' knife ', '1', '4'),
(2, '34', ' Rolar ', '2', '5'),
(2, '36', ' Tools ', '7', '6'),
(2, '4', ' Maney plants ', '4', '30.00'),
(2, '68', ' Alovera Plant ', '1', '25'),
(2, '70', ' Myrobalan Plant ', '1', '10'),
(2, '71', ' Indian Basil Plant  ', '1', '60'),
(2, '82', ' Juice ', '2', '250'),
(2, '9', ' Bonshi ', '1', '60.00'),
(3, '10', ' Lantana ', '6', '40.00'),
(4, '2', ' Ucaliktas ', '1', '20.00'),
(4, '29', ' Tools ', '2', '400'),
(4, '3', ' Roggon ', '3', '20.00'),
(4, '31', ' Sijer ', '1', '10'),
(4, '4', ' Maney plants ', '2', '30.00'),
(4, '6', ' Jaw plants ', '2', '70.00'),
(4, '7', ' Meheguni ', '4', '20.00'),
(5, '10', ' Lantana ', '10', '40.00'),
(6, '10', ' Lantana ', '5', '40.00'),
(7, '8', ' Papaya Plant ', '1', '5.00'),
(7, '9', ' Apple Plant ', '1', '15.00'),
(8, '34', ' Rolar ', '1', '5'),
(8, '36', ' Tools ', '1', '6'),
(8, '4', ' Maney plants ', '1', '30.00'),
(8, '5', ' Reca catechu ', '1', '40.00'),
(8, '7', ' Arecaidine ', '2', '20.00'),
(8, '72', ' Thankoni Plant ', '2', '62'),
(8, '82', ' Juice ', '2', '250'),
(8, '83', ' hhgjgh ', '1', '225'),
(9, '82', ' Juice ', '2', '250'),
(9, '86', ' Jambura ', '1', '33'),
(10, '2', ' Ucaliktas ', '2', '20.00'),
(10, '3', ' Roggon ', '3', '20.00'),
(10, '4', ' Vermont ', '2', '10.00'),
(10, '6', ' Jaw plants ', '3', '70.00'),
(10, '7', ' Meheguni ', '4', '20.00'),
(11, '65', ' Holy Basil Plant ', '1', '85'),
(11, '70', ' Myrobalan Plant ', '1', '10'),
(11, '71', ' Indian Basil Plant  ', '1', '60'),
(11, '82', ' Juice ', '1', '250'),
(11, '93', ' Jambura ', '2', '88'),
(11, '95', ' Wood aple ', '2', '50'),
(17, '5', ' Capsicum ', '6', '70.00'),
(17, '6', ' Eggplant ', '5', '80.00'),
(17, '9', ' Bean ', '2', '40.00'),
(18, '5', ' Capsicum ', '6', '70.00'),
(18, '6', ' Eggplant ', '5', '80.00'),
(18, '9', ' Bean ', '2', '40.00'),
(19, '10', ' Fragaria x ananassa. ', '6', '7.00'),
(19, '29', ' Tools ', '2', '400'),
(19, '6', ' Jaw plants ', '2', '70.00'),
(19, '7', ' Meheguni ', '2', '20.00'),
(20, '1', ' Chinarose ', '2', '50.00'),
(20, '2', ' Kadam ', '2', '70.00'),
(20, '3', ' Cosmos ', '2', '40.00'),
(21, '1', ' Chinarose ', '2', '50.00'),
(21, '2', ' Kadam ', '2', '70.00'),
(21, '3', ' Cosmos ', '2', '40.00'),
(22, '1', ' Chinarose ', '1', '50.00'),
(23, '1', ' Chinarose ', '1', '50.00'),
(24, '1', ' Chinarose ', '1', '50.00'),
(25, '1', ' Chinarose ', '1', '50.00'),
(26, '10', ' Lantana ', '11', '40.00'),
(27, '1', ' Caktasia ', '2', '20.00'),
(27, '10', ' Lantana ', '2', '40.00'),
(27, '13', ' Lemon Plant ', '2', '40.00'),
(27, '14', ' Cocunut Plant ', '2', '70.00'),
(27, '4', ' Tomato ', '2', '50.00'),
(27, '5', ' Capsicum ', '2', '70.00'),
(27, '8', ' Sunflower ', '2', '100.00'),
(27, '9', ' Bonshi ', '2', '60.00');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image_name` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'offline'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fullname`, `email`, `contact_no`, `username`, `password`, `image_name`, `status`) VALUES
(1, 'Md. Azharul Islam', 'greenheaven32@gmail.com', '01911735608', 'azharul', '8a7287c3d19604e86379febe55939d9b', 'images/azharul.jpg', 'online'),
(2, 'tanjin liza', 'tanjinliza@gmail.com', '01755393433', 'liza', 'a119cba2d2273d1a7e79e5268db28384', 'images/tanzin.jpg', 'offline'),
(3, 'Mahmuda Afrose', 'afrosenaly@gmail.com', '01676933669', 'mahmuda', 'e10adc3949ba59abbe56e057f20f883e', 'image/mahmuda.jpg', 'offline'),
(4, 'afruza ahmed', 'afrojaahmed61@gmail.com', '01760959898', 'afruza ', 'e10adc3949ba59abbe56e057f20f883e', 'images/afruza.jpg', 'offline'),
(64, 'Md Azharul Islam', 'azharul787@gmail.com', '01911735608', 'azharul', 'e10adc3949ba59abbe56e057f20f883e', '', 'offline'),
(65, 'Md Azharul Islam', 'azharul@gmail.com', '01911735608', 'azharul', 'e10adc3949ba59abbe56e057f20f883e', '', 'online'),
(66, 'Md Milon Hosen', 'liza@gmail.com', '01722245632', 'milon', 'e10adc3949ba59abbe56e057f20f883e', '', 'offline'),
(67, 'Fahmida Yesmin', 'fahmida@yahoo.com', '8801913765634', 'fahmida', 'd6b0ab7f1c8ab8f514db9a6d85de160a', '', 'offline'),
(73, 'Kamal Hosen', 'kamal@gmail.com', '01755859632', 'kamal', 'e10adc3949ba59abbe56e057f20f883e', '', 'offline'),
(74, 'Abdaul Basir', 'abasir@gmail.com', '01744526382', 'basir', 'e10adc3949ba59abbe56e057f20f883e', '', 'offline'),
(75, 'Robin Das', 'robin@gmail.com', '01722785863', 'Robin', 'e10adc3949ba59abbe56e057f20f883e', '', 'offline'),
(76, 'Liton Mahmud', 'liton@gmail.com', '01855963225', 'liton', 'e10adc3949ba59abbe56e057f20f883e', '', 'offline');

-- --------------------------------------------------------

--
-- Table structure for table `sold_stock`
--

CREATE TABLE `sold_stock` (
  `id` int(10) NOT NULL,
  `entry_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `product_id` int(50) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sold_stock`
--

INSERT INTO `sold_stock` (`id`, `entry_date`, `product_id`, `product_name`, `quantity`) VALUES
(1, '0000-00-00 00:00:00', 9, ' Bean ', 2),
(2, '0000-00-00 00:00:00', 9, ' Bonshi ', 1),
(3, '2017-12-17 23:29:57', 10, ' Lantana ', 10),
(4, '2017-12-17 23:33:38', 10, ' Lantana ', 5),
(5, '2017-12-18 16:46:49', 7, ' Meheguni ', 4),
(6, '2017-12-18 21:39:42', 9, ' Apple Plant ', 1),
(7, '2017-12-18 21:52:10', 95, ' Wood aple ', 2),
(8, '2017-12-18 22:10:24', 86, ' Jambura ', 1),
(9, '2017-12-18 22:34:20', 10, ' Lantana ', 6),
(10, '2017-12-18 22:34:52', 9, ' Bonshi ', 1),
(11, '2017-12-18 22:35:03', 7, ' Meheguni ', 4),
(12, '2017-12-18 22:35:37', 10, ' Lantana ', 10),
(13, '2017-12-18 22:36:41', 10, ' Lantana ', 5),
(14, '2017-12-18 22:37:23', 9, ' Apple Plant ', 1),
(15, '2017-12-18 22:38:33', 83, ' hhgjgh ', 1),
(16, '2017-12-18 22:40:11', 86, ' Jambura ', 1),
(17, '2017-12-19 10:13:50', 9, ' Bean ', 2),
(18, '2017-12-19 10:17:05', 86, ' Jambura ', 1),
(19, '2017-12-19 10:17:23', 7, ' Meheguni ', 4),
(20, '2017-12-19 10:42:10', 1, ' Chinarose ', 2),
(21, '2017-12-19 10:42:10', 2, ' Kadam ', 2),
(22, '2017-12-19 10:42:10', 3, ' Cosmos ', 2),
(23, '2017-12-19 10:45:22', 1, ' Chinarose ', 1),
(24, '2017-12-19 11:18:24', 1, 'Chinarose', 2),
(25, '2017-12-19 11:18:24', 2, 'Kadam', 2),
(26, '2017-12-19 11:18:24', 3, 'Cosmos', 2),
(27, '2017-12-19 11:25:25', 1, 'Caktasia', 2),
(28, '2017-12-19 11:25:25', 10, 'Lantana', 2),
(29, '2017-12-19 11:25:25', 13, 'Lemon Plant', 2),
(30, '2017-12-19 11:25:25', 14, 'Cocunut Plant', 2),
(31, '2017-12-19 11:25:25', 4, 'Tomato', 2),
(32, '2017-12-19 11:25:25', 5, 'Capsicum', 2),
(33, '2017-12-19 11:25:25', 8, 'Sunflower', 2),
(34, '2017-12-19 11:25:25', 9, 'Bonshi', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stock_entry`
--

CREATE TABLE `stock_entry` (
  `id` int(11) NOT NULL,
  `entry_date` datetime NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_entry`
--

INSERT INTO `stock_entry` (`id`, `entry_date`, `product_type`, `product_name`, `product_id`, `quantity`) VALUES
(1, '2017-12-05 12:00:00', 'flower_plants', 'Nayantara', 0, 55),
(2, '2017-12-05 12:00:00', 'flower_plants', 'Merigold', 0, 55),
(3, '2017-12-05 12:00:00', 'flower_plants', 'Rose', 0, 55),
(4, '2017-12-05 12:00:00', 'flower_plants', 'Lantana', 0, 500),
(5, '2017-12-11 12:00:00', 'flower_plants', 'Chinarose', 0, 22),
(6, '2017-12-11 12:00:00', 'fruit_plants', 'Guyava', 0, 100),
(7, '2017-12-11 12:00:00', 'fruit_plants', 'Guyava', 0, 100),
(8, '2017-12-13 12:00:00', 'fruit_plants', 'Guyava', 0, 100),
(9, '2017-12-11 12:00:00', 'fruit_plants', 'Guyava', 0, 22),
(10, '2017-12-04 12:00:00', 'vegetable_plant', 'Eggplant', 0, 22),
(11, '2017-12-04 12:00:00', 'vegetable_plant', 'Chili', 0, 22),
(13, '2017-12-04 12:00:00', 'vegetable_plant', 'Capsicum', 0, 22),
(14, '2017-12-03 12:00:00', 'vegetable_plant', 'Capsicum', 0, 11),
(15, '2017-12-03 12:00:00', 'decoration_plants', 'Caktas', 0, 11),
(16, '2017-12-05 12:00:00', 'fruit_plants', 'Papaya', 0, 33),
(17, '2017-12-11 12:00:00', 'fruit_plants', 'Papaya', 0, 333),
(18, '2017-12-13 12:00:00', 'gardening_plants', 'Meheguni', 0, 36),
(19, '1970-01-01 01:00:00', 'fruit_plants', 'Apple', 0, 0),
(20, '2017-12-04 12:00:00', 'flower_plants', 'Sunflower', 0, 10),
(21, '2017-12-10 12:00:00', 'flower_plants', 'Chinarose', 0, 10),
(22, '2017-12-10 12:00:00', 'fruit_plants', 'Mango', 0, 10),
(23, '2017-12-10 12:00:00', 'fruit_plants', 'Mango', 0, 20),
(24, '2017-12-10 12:00:00', 'fruit_plants', 'Mango', 0, 20),
(25, '2017-12-10 12:00:00', 'flower_plants', 'Rose', 0, 9),
(27, '2017-12-12 12:00:00', 'vegetable_plant', 'Tomato', 0, 3),
(28, '2017-12-12 12:00:00', 'vegetable_plant', 'Tomato', 0, 30),
(29, '2017-12-02 12:00:00', 'vegetable_plant', 'Tomato', 0, 30),
(30, '2017-12-02 12:00:00', 'vegetable_plant', 'Chili', 0, 100),
(31, '2017-12-02 12:00:00', 'vegetable_plant', 'Cauliflower', 0, 36),
(32, '2017-12-02 12:00:00', 'gardening_plants', 'Caktasia', 0, 36),
(33, '2017-12-03 12:00:00', 'equipments', 'Tools', 0, 46),
(34, '2017-12-03 12:00:00', 'equipments', 'Hand', 0, 46),
(35, '2017-12-03 12:00:00', 'medicinal_plant', 'Holy', 0, 40),
(36, '2017-12-06 12:00:00', 'equipments', 'Sijer', 0, 50),
(37, '2017-12-11 12:00:00', 'decoration_plants', 'Cultivated', 0, 50),
(38, '2017-12-09 12:00:00', 'decoration_plants', 'Bonshi', 0, 50),
(39, '2017-12-09 12:00:00', 'gardening_plants', 'Caktasia', 0, 55),
(40, '2017-12-09 12:00:00', 'fruit_plants', 'Orange', 0, 50),
(41, '2017-12-18 12:00:00', 'vegetable_plant', 'Capsicum', 0, 40),
(42, '2017-12-18 12:00:00', 'decoration_plants', 'Caktas', 0, 40);

-- --------------------------------------------------------

--
-- Table structure for table `vegetable_plant`
--

CREATE TABLE `vegetable_plant` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `botanical_name` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `width` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `sunlight` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` varchar(50) NOT NULL,
  `image_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vegetable_plant`
--

INSERT INTO `vegetable_plant` (`id`, `name`, `botanical_name`, `height`, `width`, `color`, `sunlight`, `description`, `price`, `stock`, `image_name`) VALUES
(4, 'Tomato', 'Solanum lycopersicum', '4', '3', 'Red', 'Medium', 'Tomato contain lots of vitamin. ', '50.00', '24', 'images/1512372286.jpg'),
(5, 'Capsicum', 'Capsicum annuum', '4', '2', 'Green', 'Low Medium', 'Capsicum is very useful vegetable.', '70.00', '2', 'images/1512372380.jpg'),
(6, 'Eggplant', 'Solanum melongena', '4', '2.5', 'Purple', 'High medium', 'Eggplant is a vegetable.', '80.00', '-25', 'images/1512372564.jpg'),
(7, 'Banana', 'Musa', '3.5', '1.5', 'Green', 'Medium', 'Banana is very tasty vegetable.', '60.00', '-43', 'images/1512372666.jpg'),
(8, 'Potato', 'Solanum tuberosum', '2.5', '2', 'Yellow', 'Low', 'Potato is a vegetable.', '40.00', '-37', 'images/1512372853.jpg'),
(9, 'Bean', 'Phaseolus', '1', '1', 'Green', 'Medium', 'Bean is vegetable of winter seasons.', '40.00', '-50', 'images/1512373026.jpg'),
(10, 'Carrot', 'Daucus carota subsp. sativus', '1', '2', 'Orange', 'Medium', 'Carrot is very colorful vegetable.', '70.00', '-66', 'images/1512373242.jpg'),
(11, 'Cauliflower', 'Brassica oleracea var. botrytis', '1', '2', 'Yellow', 'High medium', 'Cauliflower is beautiful vegetable.', '50.00', '0', 'images/1512373384.jpg'),
(12, 'Chili pepper', 'Capsicum annuum', '4', '2', 'Green', 'Low Medium', 'Chili pepper contain vitamin C.', '100.00', '-46', 'images/1512373502.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_address`
--
ALTER TABLE `billing_address`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decoration_plants`
--
ALTER TABLE `decoration_plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_ address`
--
ALTER TABLE `delivery_ address`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flower_plants`
--
ALTER TABLE `flower_plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fruit_plants`
--
ALTER TABLE `fruit_plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gardening_plants`
--
ALTER TABLE `gardening_plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicinal_plant`
--
ALTER TABLE `medicinal_plant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`,`product_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sold_stock`
--
ALTER TABLE `sold_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock_entry`
--
ALTER TABLE `stock_entry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vegetable_plant`
--
ALTER TABLE `vegetable_plant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coment`
--
ALTER TABLE `coment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `decoration_plants`
--
ALTER TABLE `decoration_plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `flower_plants`
--
ALTER TABLE `flower_plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `fruit_plants`
--
ALTER TABLE `fruit_plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `gardening_plants`
--
ALTER TABLE `gardening_plants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `medicinal_plant`
--
ALTER TABLE `medicinal_plant`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `sold_stock`
--
ALTER TABLE `sold_stock`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `stock_entry`
--
ALTER TABLE `stock_entry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `vegetable_plant`
--
ALTER TABLE `vegetable_plant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

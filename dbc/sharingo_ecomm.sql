-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2020 at 06:26 PM
-- Server version: 10.4.8-MariaDB
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
-- Database: `sharingo_ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`) VALUES
(3, 13, 24, 1),
(4, 13, 7, 8),
(5, 13, 14, 1),
(6, 13, 25, 1),
(7, 13, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(1, 'First Aid', 'First Aid'),
(2, 'Prescription', 'Prescription'),
(3, 'Personal and Family care', 'Personal and Family care'),
(4, 'Devices', 'Devices');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(14, 9, 11, 2),
(15, 9, 13, 5),
(16, 9, 3, 2),
(17, 9, 1, 3),
(18, 10, 13, 3),
(19, 10, 2, 4),
(20, 10, 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `price`, `photo`, `date_view`, `counter`) VALUES
(1, 1, 'Bandages', 'First Aid bandages', 'Bandages', 3, 'bandage.jpg', '2020-07-04', 1),
(2, 1, 'Crocin Advance', 'crocin', 'Crocin Advance', 25, 'caa4.jpg', '2019-05-02', 1),
(3, 1, 'Kerlix bandage', 'good to use for much bleed', 'Kerlix bandage', 15, 'kerlix bandage.jpg', '2019-06-14', 2),
(4, 1, 'Elastic Bandage', 'elastic bandage', 'Elastic Bandage', 20, 'elastic.jpg', '2019-03-01', 1),
(5, 1, 'Dettol', 'antiseptic', 'Dettol', 78, 'dettol1.jpg', '2019-03-01', 1),
(6, 1, 'Savlon', 'savlon', 'Savlon', 65, 'savlon3.jpg', '2019-03-01', 1),
(7, 1, 'Crocin', 'crocin', 'Crocin', 20, 'crocin3.jpg', '2019-03-02', 2),
(8, 1, 'VicksVapoRub', 'vicks', 'VicksVapoRub', 30, 'vicks2.jpg\r\n', '0000-00-00', 2),
(9, 1, 'VicksAction 500', 'vicks action 500', 'VicksAction 500', 2, 'action1.jpg', '0000-00-00', 2),
(10, 1, 'First Aid Kit', 'fa kit', 'First Aid Kit', 350, 'fa1.jpg', '2019-07-01', 1),
(11, 1, 'First Aid', 'first aid', 'First Aid', 400, 'fa5.jpg', '0000-00-00', 2),
(12, 3, 'Life Boy', 'lifeboy', 'Life Boy', 28, 'lifeb1.jpg', '2019-06-13', 2),
(13, 3, 'Ponds', 'ponds', 'Ponds', 40, 'ponds3.jpg', '0000-00-00', 2),
(14, 3, 'Vasline', 'vasline', 'Vasline', 88, 'vas2.jpg', '2019-03-08', 1),
(15, 3, 'Dermi Cool', 'dermi', 'Dermi Cool', 55, 'dermi4.jpg', '0000-00-00', 2),
(16, 3, 'White tone', 'white', 'White tone', 88, 'wt34.jpg', '0000-00-00', 2),
(17, 3, 'Nycil', 'nycil', 'Nycil', 48, 'nycil1.jpg', '0000-00-00', 2),
(18, 3, 'Panteen', 'panteen', 'Panteen', 92, 'pant5.jpg', '0000-00-00', 2),
(19, 3, 'Coco', 'oil', 'Coco', 85, 'coco1.jpg', '2019-05-26', 2),
(20, 3, 'Parachute', 'oil', 'Parachute', 54, 'parachute1.jpg', '0000-00-00', 2),
(21, 3, 'Dove', 'dove', 'Dove', 86, 'dove1.jpg', '0000-00-00', 2),
(22, 3, 'Nivea', 'nivea', 'Nivea', 95, 'niv3.jpg', '0000-00-00', 2),
(23, 3, 'L\'oreal', 'oreal', 'L\'oreal', 111, 'lo1.jpg', '0000-00-00', 2),
(24, 2, 'Adril Lotion', '', 'Adril Lotion', 30, 'Adril1.jpg', '2019-06-13', 1),
(25, 2, 'Dazit', '', 'Dazit', 23, 'dazit1.jpg', '2019-06-24', 3),
(26, 2, 'Lasma Lc', '', 'Lasma Lc', 43, 'las1.jpg', '2019-03-02', 1),
(27, 2, 'Almantin', '', 'Almantin', 44, 'ad1.jpg', '0000-00-00', 2),
(28, 2, 'Alam 0.25', '', 'Alam 0.25', 57, 'alam2.jpg', '0000-00-00', 2),
(29, 2, 'Buspin', '', 'Buspin', 43, 'buspin1.jpg', '0000-00-00', 2),
(30, 2, 'Acamprol 333mg', '', 'Acamprol 333mg', 125, 'acam3.jpg', '0000-00-00', 2),
(31, 2, 'Esperal Tablet', '', 'Esperal Tablet', 180, 'es1.jpg', '0000-00-00', 2),
(32, 2, 'Naltima 50mg Tablet', '', 'Naltima 50mg Tablet', 220, 'nalti1.jpg', '0000-00-00', 2),
(33, 2, 'Arava 10mg', '', 'Arava 10mg', 340, 'ara1.jpg', '0000-00-00', 2),
(34, 2, 'Kondro', '', 'Kondro', 44, 'kon1.jpg', '0000-00-00', 2),
(35, 2, 'AB Flo 100mg', '', 'AB Flo 100mg', 78, 'ab1.jpg', '0000-00-00', 2),
(36, 2, 'Freefil SR 400mg Tablet', '', 'Freefil SR 400mg Tablet', 55, 'free1.jpg', '0000-00-00', 2),
(37, 2, 'Dospin', '', 'Dospin', 45, 'dospin1.jpg', '0000-00-00', 2),
(38, 2, 'Abirone', '', 'Abirone', 35, 'abiron1.jpg', '0000-00-00', 2),
(39, 2, 'Dabaz 200mg injection', '', 'Dabaz 200mg injection', 250, 'dabaz1.jpg', '0000-00-00', 2),
(40, 2, 'Kemocarb 150mg Injection ', '', 'Kemocarb 150mg Injection ', 45, 'kemocarb1.jpg', '0000-00-00', 2),
(41, 2, 'Epitaz 50mg Injection', '', 'Epitaz 50mg Injection', 55, 'epiz.jpg', '0000-00-00', 2),
(42, 2, 'Dermadew Face Wash 100ml', '', 'Dermadew Face Wash 100ml', 50, 'handh.jpg', '0000-00-00', 2),
(43, 2, 'Cetafresh Cleansing Lotion 200ml', '', 'Cetafresh Cleansing Lotion 200ml', 230, 'cipla.jpg', '0000-00-00', 2),
(44, 2, 'Cofsils Cough Syrup 100ml', '', 'Cofsils Cough Syrup 100ml', 60, 'cofsils.jpg', '0000-00-00', 2),
(45, 2, 'Labocof Tablet 10\'S', '', 'Labocof Tablet 10\'S', 25, 'lab.jpg', '0000-00-00', 2),
(46, 2, '8X Shampoo 60ml', '', '8X Shampoo 60ml', 550, '8x.jpg', '0000-00-00', 2),
(47, 2, 'Ketafung Lotion 100ml', '', 'Ketafung Lotion 100ml', 450, 'cat.jpg', '0000-00-00', 2),
(48, 2, 'Doxin 25mg Capsule 10\'S', '', 'Doxin 25mg Capsule 10\'S', 50, 'doxin.jpg', '0000-00-00', 2),
(49, 2, 'Midzol 5mg Injection 5ml', '', 'Midzol 5mg Injection 5ml', 25, 'mid.jpg', '0000-00-00', 2),
(50, 2, 'Glimet Tablet 10\'S', '', 'Glimet Tablet 10\'S', 35, 'gilmet.jpg', '0000-00-00', 2),
(51, 2, 'Huminsulin 30/70 40IU Injection 1X10ml', '', 'Huminsulin 30/70 40IU Injection 1X10ml', 100, 'himu.jpg', '0000-00-00', 2),
(52, 2, 'Electrokind L Lemon Liquid 200ml', '', 'Electrokind L Lemon Liquid 200ml', 35, 'electro.jpg', '0000-00-00', 2),
(53, 2, 'Norflax-200', '', 'Norflax-200', 86, 'nor.jpg', '0000-00-00', 2),
(54, 2, 'Candi Wax Softener Ear Drops 10ml', '', 'Candi Wax Softener Ear Drops 10ml', 55, 'codi.jpg', '0000-00-00', 2),
(55, 2, 'Clotrin Ear Drops 10ml', '', 'Clotrin Ear Drops 10ml', 96, 'clotrin.jpg', '0000-00-00', 2),
(56, 2, 'Crocin Mixed Fruit Flavour 240mg Suspension 60ml', '', 'Crocin Mixed Fruit Flavour 240mg Suspension 60ml', 65, 'crocin.jpg', '0000-00-00', 2),
(57, 2, 'Pyrexon 650mg Tablet 6\'S', '', 'Pyrexon 650mg Tablet 6\'S', 50, 'pyro.jpg', '0000-00-00', 2),
(58, 2, 'Ludura Cream 10gm', '', 'Ludura Cream 10gm', 40, 'ludura.jpg', '0000-00-00', 2),
(59, 2, 'Surfaz B Cream 15gm', '', 'Surfaz B Cream 15gm', 70, 'sur.jpg', '0000-00-00', 2),
(60, 2, 'Britiblu Eye Drops 5ml\r\n', '', 'Britiblu Eye Drops 5ml\r\n', 110, 'brit.jpg', '0000-00-00', 2),
(61, 2, 'Travisight Eye Drops 3ml', '', 'Travisight Eye Drops 3ml', 60, 'travi.jpg', '0000-00-00', 2),
(62, 2, 'Epofer 10000IU Injection 1\'S', '', 'Epofer 10000IU Injection 1\'S', 450, 'epo1.jpg', '0000-00-00', 2),
(63, 2, '\r\nTransfer 4000IU Injection(Pfs)\r\n', '', '\r\nTransfer 4000IU Injection(Pfs)\r\n', 500, 'transfer.jpg', '0000-00-00', 2),
(64, 2, 'Hair 4U Cpx Serum 60ml', '', 'Hair 4U Cpx Serum 60ml', 550, 'hair.jpg', '0000-00-00', 2),
(65, 2, 'Minotress 5% Topical Solution 60ml', '', 'Minotress 5% Topical Solution 60ml', 400, 'min.jpg', '0000-00-00', 2),
(66, 2, 'Dopar 200mg Injection 5ml', '', 'Dopar 200mg Injection 5ml', 450, 'dopar.jpg', '0000-00-00', 2),
(67, 2, 'Simenda 12.5mg Injection', '', 'Simenda 12.5mg Injection', 690, 'sim1.jpg', '0000-00-00', 2),
(68, 2, 'Rosycap Asp 10/150mg Tablet 10\'S', '', 'Rosycap Asp 10/150mg Tablet 10\'S', 105, 'ros.jpg', '0000-00-00', 2),
(69, 2, 'Dispitor 10mg Tablet 10\'S', '', 'Dispitor 10mg Tablet 10\'S', 200, 'dis.jpg', '0000-00-00', 2),
(70, 2, 'Inzofresh 5mg Tablet 10\'S\r\n', '', 'Inzofresh 5mg Tablet 10\'S\r\n', 130, 'info.jpg', '0000-00-00', 2),
(71, 2, 'Pedicloryl Syrup 30ml', '', 'Pedicloryl Syrup 30ml', 120, 'pedi.jpg', '0000-00-00', 2),
(72, 2, 'Concor 10mg Tablet 10\'S', '', 'Concor 10mg Tablet 10\'S', 345, 'conc.jpg', '0000-00-00', 2),
(73, 2, 'Starcad Beta 25mg Tablet 10\'S\r\n', '', 'Starcad Beta 25mg Tablet 10\'S\r\n', 450, 'star.jpg', '0000-00-00', 2),
(74, 2, 'Delpoclav DS 457mg Dry Syrup 30ml\r\n', '', 'Delpoclav DS 457mg Dry Syrup 30ml\r\n', 34, 'del.jpg', '0000-00-00', 2),
(75, 2, 'Abixim 200mg Tablet 10\'S', '', 'Abixim 200mg Tablet 10\'S', 65, 'abi.jpg', '0000-00-00', 2),
(76, 2, 'Potrate 10mg Tablet 10\'S', '', 'Potrate 10mg Tablet 10\'S', 36, 'pot.jpg', '0000-00-00', 2),
(77, 2, 'Ketaminos Tablet 10\'S', '\r\n', 'Ketaminos Tablet 10\'S', 340, 'keti.jpg', '0000-00-00', 2),
(78, 2, 'Larinate XP 60mg Injection 1\'S\r\n', '', 'Larinate XP 60mg Injection 1\'S\r\n', 75, 'lar.jpg', '0000-00-00', 2),
(79, 2, 'Nivaquine Pds Tablet 10\'S', '', 'Nivaquine Pds Tablet 10\'S', 59, 'nia.jpg', '0000-00-00', 2),
(80, 2, 'Migon 5mg Tablet 10\'S', '', 'Migon 5mg Tablet 10\'S', 64, 'mi.jpg', '0000-00-00', 2),
(81, 2, 'Migran Tablet 10\'S', '', 'Migran Tablet 10\'S', 56, 'mig.jpg', '0000-00-00', 2),
(82, 2, 'Cyclopam Injection 30ml', '', 'Cyclopam Injection 30ml', 190, 'cyclo.jpg', '0000-00-00', 2),
(83, 2, 'Hyocimax Injection 1ml', '', 'Hyocimax Injection 1ml', 78, 'hy.jpg', '0000-00-00', 2),
(84, 2, 'Nervz G Tablet 10\'S\r\n', '', 'Nervz G Tablet 10\'S\r\n', 560, 'ner.jpg', '0000-00-00', 2),
(85, 2, 'Gabamin Tablet 10\'', '', 'Gabamin Tablet 10\'', 340, 'gab.jpg', '0000-00-00', 2),
(86, 2, 'Fixon Cream 50gm\r\n', '', 'Fixon Cream 50gm\r\n', 45, 'fix.jpg', '0000-00-00', 2),
(87, 2, 'Omnident Gel 70gm', '', 'Omnident Gel 70gm', 78, 'omi2.jpg', '0000-00-00', 2),
(88, 2, 'Lorsaid OD Tablet 10\'S\r\n', '', 'Lorsaid OD Tablet 10\'S\r\n', 78, 'lor.jpg', '0000-00-00', 2),
(89, 2, 'R Compound Tablet 50\'S', '', 'R Compound Tablet 50\'S', 38, 'rc1.jpg', '0000-00-00', 2),
(90, 2, 'Oxitres 600mg Tablet 10\'S', '', 'Oxitres 600mg Tablet 10\'S', 68, 'ox.jpg', '0000-00-00', 2),
(91, 2, 'Kelfer 250mg Capsule 50\'S', '', 'Kelfer 250mg Capsule 50\'S', 67, 'kelfer1.jpg', '0000-00-00', 2),
(92, 2, 'Flucort Skin Cream 20gm', '', 'Flucort Skin Cream 20gm', 120, 'fluc.jpg', '0000-00-00', 2),
(93, 2, 'Betsalic Cream 20gm\r\n', '', 'Betsalic Cream 20gm\r\n', 230, 'beta.jpg', '0000-00-00', 2),
(94, 2, 'Nicogum Chew Gum 4mg Tablet 10\'S', '', 'Nicogum Chew Gum 4mg Tablet 10\'S', 30, 'nic.jpg', '0000-00-00', 2),
(95, 2, 'Smokefree 2mg Gum 10\'S\r\n', '', 'Smokefree 2mg Gum 10\'S\r\n', 50, 'smoke.jpg', '0000-00-00', 2),
(96, 2, 'Stretchrid Cream 50gm', '', 'Stretchrid Cream 50gm', 65, 'stretch.jpg', '0000-00-00', 2),
(97, 2, 'Exuva Lotion 100ml', '', 'Exuva Lotion 100ml', 112, 'luva.jpg', '0000-00-00', 2),
(98, 2, 'Capreotec 1gm Injection 1ml', '', 'Capreotec 1gm Injection 1ml', 660, 'cap.jpg', '0000-00-00', 2),
(99, 2, 'Gestapro Kit 1\'S', '', 'Gestapro Kit 1\'S', 119, 'ges.jpg', '0000-00-00', 2),
(100, 2, 'Onco Bcg 40mg Vaccine', '', 'Onco Bcg 40mg Vaccine', 550, 'on.jpg', '0000-00-00', 2),
(101, 2, 'SII TD Vac Injection 1\'S', '', 'SII TD Vac Injection 1\'S', 450, 'sii.jpg', '0000-00-00', 2),
(102, 2, 'Famcimac 500mg Tablet 3\'S\r\n', '', 'Famcimac 500mg Tablet 3\'S\r\n', 65, 'fam.jpg', '0000-00-00', 2),
(103, 2, 'Pegihep 120mcg Injection 1\'S', '', 'Pegihep 120mcg Injection 1\'S', 67, 'peg.jpg', '0000-00-00', 2),
(104, 2, 'Nozia Tablet 2\'S', '', 'Nozia Tablet 2\'S', 320, 'noz.jpg', '0000-00-00', 2),
(105, 2, 'Emnil Syrup 30ml', '', 'Emnil Syrup 30ml', 120, 'emi.jpg', '0000-00-00', 2),
(106, 2, 'M Prost 200mcg Tablet 4\'S', '', 'M Prost 200mcg Tablet 4\'S', 58, 'pr.jpg', '0000-00-00', 2),
(107, 2, 'Cadlon Liquid 100ml', '', 'Cadlon Liquid 100ml', 45, 'cad.jpg', '0000-00-00', 2),
(108, 2, 'Drez Solution 500ml', '', 'Drez Solution 500ml', 78, 'drez.jpg', '0000-00-00', 2),
(109, 2, 'Rablet D 40mg Capsule 10\'S\r\n', '', 'Rablet D 40mg Capsule 10\'S\r\n', 50, 'rab.jpg', '0000-00-00', 2),
(110, 2, 'Pantakind Fast 40mg Tablet 10\'S', '', 'Pantakind Fast 40mg Tablet 10\'S', 56, 'panta.jpg', '0000-00-00', 2),
(111, 4, 'Artificial limbs', '', 'limb', 2000, 'limb.jpg', '2019-03-02', 1),
(112, 4, 'Bedpan', '', 'bad', 450, 'bad.jpg', '2019-06-14', 1),
(113, 4, 'Cannula', '', 'can', 350, 'can.jpg', '2019-03-02', 1),
(114, 4, 'Cathether', '', 'cath', 200, 'cath.jpg', '2019-03-02', 1),
(115, 4, 'Colostomy bag', '', 'stoma', 590, 'stoma.jpg', '2019-03-02', 2),
(116, 4, 'CPAP machine', '', 'cpa', 3000, 'cpa.jpg', '2019-03-02', 1),
(117, 4, 'Crutch', '', 'car', 1000, 'car.jpg', '2019-03-02', 1),
(118, 4, 'Diabetic Shoes', '', 'clay', 2500, 'clay.jpg', '2019-03-02', 1),
(119, 4, 'Feeding tube', '', 'feeding', 345, 'feeding.jpg', '2019-03-02', 1),
(120, 4, 'Glucose meter', '', 'glucose', 500, 'glucose.jpg', '2019-03-01', 2),
(121, 4, 'Heating pad', '', 'heat', 200, 'heat.jpg', '2019-03-01', 0),
(122, 4, 'Hospital bed', '', 'hos', 5000, 'hos.jpg', '2019-03-01', 0),
(123, 4, 'Infusion pump', '', 'in', 4500, 'in.jpg', '2019-03-01', 0),
(124, 4, 'Nasal cannula', '', 'nasal', 350, 'nasal.jpg', '2019-03-01', 0),
(125, 4, 'Nebulizer', '', 'res', 2500, 'res.jpg', '2019-03-01', 0),
(126, 4, 'Oxygen concentrator', '', 'oxygen', 3500, 'oxygen.jpg', '2019-03-01', 0),
(127, 4, 'Oxygen Cylinder', '', 'cy', 1000, 'cy.jpg', '2019-03-01', 0),
(128, 4, 'Patient lift', '', 'lift', 5000, 'lift.jpg', '2019-03-01', 0),
(129, 4, 'Pill splitter', '', 'spil', 100, 'spil.jpg', '2019-03-01', 0),
(130, 4, 'Pulse oximeter', '', 'fin', 550, 'fin.jpg', '2019-03-01', 0),
(131, 4, 'Traction splint', '', 'tra', 650, 'tra.jpg', '2019-03-01', 0),
(132, 4, 'Walker', '', 'walker', 400, 'walker.jpg', '2019-03-01', 0),
(133, 4, 'Ventilator', '', 'ven', 6000, 'ven.jpg', '2019-03-01', 0),
(134, 4, 'Wheelchair', '', 'wheel', 590, 'wheel.jpg', '2019-03-01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `pay_id`, `sales_date`) VALUES
(9, 9, 'PAY-1RT494832H294925RLLZ7TZA', '2018-05-10'),
(10, 9, 'PAY-21700797GV667562HLLZ7ZVY', '2018-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$.bxFT71qRyIQPwFOxizik.fn3PLyo5BCe5jeeio0dWfRvaZlwx/9y', 1, 'Code', 'Projects', '', '', 'thanos1.jpg', 1, '', '', '2018-05-01'),
(13, 'rajshah9172@gmail.com', '$2y$10$.bxFT71qRyIQPwFOxizik.fn3PLyo5BCe5jeeio0dWfRvaZlwx/9y', 0, 'Raj', 'Shah', 'B 304 Dharti pooja apt,cabin cross road Bhayandar East', 'efggeg', 'a2.png', 1, 'dyYLIrSvcUuN', 'lbUzgFZ73L5Iq9t', '2019-03-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

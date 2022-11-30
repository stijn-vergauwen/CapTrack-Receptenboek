-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 02:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `receptenboek`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `title` varchar(40) NOT NULL,
  `amount` float NOT NULL COMMENT 'the amount for this recipe''s default amount of people'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `recipe_id`, `title`, `amount`) VALUES
(1, 1, 'eetlepels chai kruiden', 3),
(2, 1, 'ml neutrale olijfolie', 150),
(3, 1, 'gr witte basterdsuiker', 280),
(4, 1, 'gr Griekse yoghurt (plantaardig)', 250),
(5, 1, 'gr zelfrijzend bakmeel', 320),
(6, 1, 'theelepels vanille extract', 1),
(7, 1, 'eieren', 2),
(8, 1, 'ml (plantaardige) melk', 60),
(9, 1, 'zakje zwarte thee', 1),
(10, 1, 'kneepje honing', 1),
(11, 1, 'gr poedersuiker', 160),
(12, 1, 'eetlepel (plantaardige) melk', 1);

-- --------------------------------------------------------

--
-- Table structure for table `preparation_steps`
--

CREATE TABLE `preparation_steps` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `list_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preparation_steps`
--

INSERT INTO `preparation_steps` (`id`, `recipe_id`, `body`, `list_order`) VALUES
(1, 1, 'Start met het maken van de chai kruidenmix of gebruik een kant-en-klare versie.', 1),
(2, 1, 'Verwarm de oven voor op 170° graden.', 2),
(3, 1, 'Doe de (plantaardige) melk in een pannetje en voeg de chai kruidenmix, de vanille extract en wat honing toe.', 3),
(4, 1, 'Roer dit goed door met een garde. Verhit dit op het vuur totdat deze warm is, laat hem niet koken. Zodra de melk warm is, voeg je het theezakje toe en laat circa 5 minuten trekken.', 4),
(5, 1, 'Ga ondertussen verder met de cake: Mix de olie, eieren, (plantaardige) yoghurt, suiker en het snufje zout door elkaar. Voeg 60 ml van het chai latte mengsel toe en mix nog een keer goed door.', 5),
(6, 1, 'Zeef het bakmeel en mix totdat het een glad mengsel is.', 6),
(7, 1, 'Vet de bakvorm goed in met een beetje olie en/of bekleed met bakpapier.', 7),
(8, 1, 'Giet het beslag in de vorm en zet ongeveer 60 minuten in de oven.', 8),
(9, 1, 'Maak ondertussen de glazuurlaag. Neem 1 eetlepel/de rest van het chaimengsel en voeg daar al roerend met een garde beetje bij beetje de poedersuiker aan toe totdat je een dikke glazuur krijgt. Het moet nog net ‘lopen’ als je het met een lepel eruit schept.', 9),
(10, 1, 'Controleer met een sateprikker of de cake gaar is. Laat de cake daarna afkoelen en haal uit de vorm.', 10),
(11, 1, 'Giet de topping over de cake heen en bestrooi eventueel nog met wat extra chaikruidenmix of andere specerijen.', 11),
(12, 1, 'Tips: Voeg 1 of 2 verse steranijs toe aan de warme melk als dit niet in je chaikruidenmix verwerkt zit.', 12),
(13, 1, 'Voeg eventueel nog wat walnoten toe aan het beslag voor een lekkere crunch.', 13),
(14, 1, 'Maak er ook eens een heerlijke chai tea latte of kurkuma latte bij.', 14);

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `added` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `duration` varchar(30) NOT NULL,
  `difficulty` int(3) NOT NULL,
  `default_people_amount` int(11) NOT NULL,
  `thumbnail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `added`, `title`, `description`, `duration`, `difficulty`, `default_people_amount`, `thumbnail`) VALUES
(1, '2022-11-28 13:40:47', 'Chai latte cake', 'Je favoriete herfstspecerijen verwerkt in een luchtige cake. Lekker met een chai latte drankje erbij.', '20 min + 1 uur oventijd', 3, 10, '../Img/chai-latte-cake.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preparation_steps`
--
ALTER TABLE `preparation_steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `preparation_steps`
--
ALTER TABLE `preparation_steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

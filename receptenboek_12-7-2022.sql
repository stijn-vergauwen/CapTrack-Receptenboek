-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 02:26 PM
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
  `title` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `title`) VALUES
(1, 'chai kruiden'),
(2, 'olijfolie'),
(3, 'witte basterdsuiker'),
(4, 'Griekse yoghurt (plantaardig)'),
(5, 'zelfrijzend bakmeel'),
(6, 'vanille extract'),
(7, 'eieren'),
(8, '(plantaardige) melk'),
(9, 'zakje zwarte thee'),
(10, 'honing'),
(11, 'poedersuiker'),
(12, '(plantaardige) melk'),
(13, 'zout'),
(14, 'ui'),
(15, 'knoflook'),
(16, 'olie'),
(17, 'wortel'),
(18, 'bleekselderij'),
(19, 'rundergehakt'),
(20, 'oregano'),
(21, 'tijm'),
(22, 'tomatenpuree'),
(23, 'tomaten'),
(24, 'tomaten blokjes'),
(25, 'runderbouillon'),
(26, 'peper'),
(27, 'mozarella'),
(28, 'lasagnebladen'),
(29, 'geraspte kaas'),
(30, 'boter'),
(31, 'bloem');

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
(14, 1, 'Maak er ook eens een heerlijke chai tea latte of kurkuma latte bij.', 14),
(15, 2, 'Verwarm de oven voor op 200° graden.', 1),
(16, 2, 'Snipper de ui en knoflook. Fruit dit aan in een grote pan met 1 eetlepel olie.', 2),
(17, 2, 'Snijd de wortel en bleekselderij in kleine stukjes en voeg toe aan de pan.', 3),
(18, 2, 'Voeg na een paar minuten het gehakt toe en bak mee.', 4),
(19, 2, 'Voeg de oregano en tijm toe samen met de tomatenpuree.', 5),
(20, 2, 'Doe dan de tomatenblokjes en gezeefde tomaten erbij en kruimel het bouillonblokje erbij. Laat de saus circa 30 minuten pruttelen.', 6),
(21, 2, 'Breng de saus eventueel nog extra op smaak met een snufje peper en zout.', 7),
(22, 2, 'Maak ondertussen de bechamelsaus. Smelt de boter in een pannetje en voeg de bloem toe. Bak deze roux 3 minuutjes zachtjes.', 8),
(23, 2, 'Giet dan beetje bij beetje de melk erbij en roer met een garde tot een gladde saus. Breng de bechamelsaus op smaak met een beetje peper en zout en eventueel nootmuskaat.', 9),
(24, 2, 'Snijd de mozzarella in dunne plakjes.', 10),
(25, 2, 'Vet de ovenschaal in met een beetje olie of boter.', 11),
(26, 2, 'Giet een klein beetje van de tomatensaus op de bodem. Leg hier 3 lasagnevellen op. Schep hier een beetje tomatensaus op en verdeel hier wat bechamelsaus over. Leg hier een paar plakjes mozzarella op. Dek af met lasagnebladen en herhaal dit tot de ingrediënten op zijn en eindig met een laag tomatensaus, bechamelsaus en mozzarella.', 12),
(27, 2, 'Bestrooi de lasagne bolognese met de geraspte kaas en zet 45 minuten in de oven.', 13),
(28, 2, 'Voor een vegetarische variant vervang je het rundergehakt door vegetarisch gehakt.', 14);

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
(1, '2022-11-28 13:40:47', 'Chai latte cake', 'Je favoriete herfstspecerijen verwerkt in een luchtige cake. Lekker met een chai latte drankje erbij.', '1 uur 20 min', 2, 10, '../Img/Thumbnails/chai-latte-cake.jpg'),
(2, '2022-12-05 13:07:08', 'Lasagne bolognese', 'Het traditionele recept voor lasagne bolognese met een kruidige gehaktsaus en een romige bechamelsaus.', '1 uur 45 min', 2, 4, '../Img/Thumbnails/lasagne-bolognese.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recipes_ingredients`
--

CREATE TABLE `recipes_ingredients` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL,
  `amount` float DEFAULT NULL COMMENT 'ingredient amount per person',
  `amount_type` varchar(15) DEFAULT NULL COMMENT 'measurement type for amount'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes_ingredients`
--

INSERT INTO `recipes_ingredients` (`id`, `recipe_id`, `ingredient_id`, `amount`, `amount_type`) VALUES
(1, 1, 1, 0.3, 'eetlepels'),
(2, 1, 2, 15, 'ml'),
(3, 1, 3, 28, 'gr'),
(4, 1, 4, 25, 'gr'),
(5, 1, 5, 32, 'gr'),
(6, 1, 6, 0.1, 'theelepels'),
(7, 1, 7, 0.2, NULL),
(8, 1, 8, 6, 'ml'),
(9, 1, 9, 0.1, NULL),
(10, 1, 10, NULL, 'kneepje'),
(11, 1, 11, 16, 'gr'),
(12, 1, 13, NULL, 'snufje'),
(13, 2, 14, 0.25, NULL),
(14, 2, 15, NULL, 'tenen'),
(15, 2, 16, 0.5, 'eetlepels'),
(16, 2, 17, 50, 'gr'),
(17, 2, 18, 31, 'gr'),
(18, 2, 19, 125, 'gr'),
(19, 2, 20, 0.25, 'theelepels'),
(20, 2, 21, 0.25, 'theelepels'),
(21, 2, 22, 17.5, 'gr'),
(22, 2, 23, 100, 'gr'),
(23, 2, 24, 100, 'gr'),
(24, 2, 25, 0.25, 'blokje'),
(25, 2, 26, NULL, 'snufje'),
(26, 2, 13, NULL, 'snufje'),
(27, 2, 27, 0.5, 'bollen'),
(28, 2, 28, 3, NULL),
(29, 2, 29, NULL, 'handje'),
(30, 2, 30, 12.5, 'gr'),
(31, 2, 31, 15, 'gr'),
(32, 2, 12, 150, 'ml');

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
-- Indexes for table `recipes_ingredients`
--
ALTER TABLE `recipes_ingredients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `preparation_steps`
--
ALTER TABLE `preparation_steps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `recipes_ingredients`
--
ALTER TABLE `recipes_ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

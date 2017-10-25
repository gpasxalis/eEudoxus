-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 07 Σεπ 2016 στις 21:21:34
-- Έκδοση διακομιστή: 10.1.9-MariaDB
-- Έκδοση PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `eeudoxos`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `institution`
--

CREATE TABLE `institution` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `institution`
--

INSERT INTO `institution` (`id`, `name`) VALUES
(1, 'Ανωτάτη Σχολή Καλών Τεχνών'),
(2, 'Αριστοτέλειο Πανεπιστήμιο Θεσσαλονίκης'),
(3, 'Γεωπονικό Πανεπιστήμιο Αθηνών'),
(4, 'Δημοκρίτειο Πανεπιστήμιο Θράκης'),
(5, 'Διεθνές Πανεπιστήμιο της Ελλάδος'),
(6, 'Εθνικό Καποδιστριακό Πανεπιστήμιο Αθηνών'),
(7, 'Εθνικό Μετσόβιο Πολυτεχνείο'),
(8, 'Ελληνικό Ανοικτό Πανεπιστήμιο'),
(9, 'Ιόνιο Πανεπιστήμιο'),
(10, 'Οικονομικό Πανεπιστήμιο Αθηνών'),
(11, 'Πάντειο Πανεπιστήμιο'),
(12, 'Πανεπιστήμιο Αιγαίου'),
(13, 'Πανεπιστήμιο Δυτικής Μακεδονίας'),
(14, 'Πανεπιστήμιο Θεσσαλίας'),
(15, 'Πανεπιστήμιο Ιωαννίνων'),
(16, 'Πανεπιστήμιο Κρήτης'),
(17, 'Πανεπιστήμιο Μακεδονίας'),
(18, 'Πανεπιστήμιο Πάτρας'),
(19, 'Πανεπιστήμιο Πειραιά'),
(20, 'Πανεπιστήμιο Πελοποννήσου'),
(21, 'Πολυτεχνείο Κρήτης'),
(22, 'Χαροκόπειο Πανεπιστήμιο');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Άδειασμα δεδομένων του πίνακα `student`
--

INSERT INTO `student` (`id`, `username`, `password`) VALUES
(1, 'andkon14@yahoo.gr', 'c94c5af31ff18b663c9d56687e22a5ef263ce679'),
(2, 'p12niko', '7c4a8d09ca3762af61e59520943dc26494f8941b');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `institution`
--
ALTER TABLE `institution`
  ADD PRIMARY KEY (`id`);

--
-- Ευρετήρια για πίνακα `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `institution`
--
ALTER TABLE `institution`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT για πίνακα `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

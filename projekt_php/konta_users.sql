-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Sty 2022, 15:46
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `konta_users`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dodaj`
--

CREATE TABLE `dodaj` (
  `id` int(11) NOT NULL,
  `wykonawca` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `tytul` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dodane`
--

CREATE TABLE `dodane` (
  `id` int(11) NOT NULL,
  `wykonawca` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `tytul` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `dodane`
--

INSERT INTO `dodane` (`id`, `wykonawca`, `tytul`, `email`) VALUES
(102, 'dsa', '23132', 'dsa'),
(103, 'dsa', '321', 'dsa'),
(104, 'dsa', '312', 'dsa'),
(105, 'dasdas', '2313', 'dsa'),
(106, '432432', '423423', 'dsa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `konta`
--

CREATE TABLE `konta` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `konta`
--

INSERT INTO `konta` (`id`, `mail`, `password`, `user_name`) VALUES
(1, 'dsa', '321', 'dsa'),
(2, 'gg', '123', 'dsa'),
(3, 'siema@wp.pl', '123', 'Toja'),
(5, 'toja@wp.pl', '123', 'on'),
(6, 'czesc@onet.pl', '123', '123'),
(7, 'sdad', 'dsad', 'das'),
(8, 'gfdgdfgfdg', 'gdf', 'gfd'),
(9, 'xxxx', 'xxx', 'xxx'),
(11, 'xx', 'xx', 'xx'),
(12, 'xxc', 'xxc', 'xxc'),
(13, 'cos@wp.pl', 'fdoijfdsg', 'dasdsadaogjsd');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dodaj`
--
ALTER TABLE `dodaj`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `dodane`
--
ALTER TABLE `dodane`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `konta`
--
ALTER TABLE `konta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `dodaj`
--
ALTER TABLE `dodaj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT dla tabeli `dodane`
--
ALTER TABLE `dodane`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT dla tabeli `konta`
--
ALTER TABLE `konta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

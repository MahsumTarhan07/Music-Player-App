-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Eyl 2022, 22:48:11
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `musicplayer`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `music_genre`
--

CREATE TABLE `music_genre` (
  `ID` int(11) NOT NULL,
  `MUSİC_NAME` varchar(30) NOT NULL,
  `MUSİC_FİLE` varchar(50) NOT NULL,
  `MUSİC_GENRE` varchar(30) NOT NULL,
  `USER_İD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `music_genre`
--

INSERT INTO `music_genre` (`ID`, `MUSİC_NAME`, `MUSİC_FİLE`, `MUSİC_GENRE`, `USER_İD`) VALUES
(1, 'Ahmet Kaya', 'None', 'CLASSİC_MUSİC', 6),
(2, 'Müsülüm', '', '', 6);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `register_users`
--

CREATE TABLE `register_users` (
  `ID` int(11) NOT NULL,
  `NAMES` text NOT NULL,
  `LASTNAME` text NOT NULL,
  `EMAİL` text NOT NULL,
  `PHONE` text NOT NULL,
  `PASSWORDS` text NOT NULL,
  `NİCK_NAME` varchar(20) NOT NULL,
  `FACEBOOK` text NOT NULL,
  `INSTAGRAM` text NOT NULL,
  `TİKTOK` text NOT NULL,
  `REGİSTRATİON _TİME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `register_users`
--

INSERT INTO `register_users` (`ID`, `NAMES`, `LASTNAME`, `EMAİL`, `PHONE`, `PASSWORDS`, `NİCK_NAME`, `FACEBOOK`, `INSTAGRAM`, `TİKTOK`, `REGİSTRATİON _TİME`) VALUES
(1, 'Mahsum', 'Tarhan', '1mahsumtarhan@gmail.com', '5456319392', '68', '', '', '', '', '2022-09-12 19:28:58'),
(2, 'Oktay', 'berk', 'mahsumtarhan1@gmail.com', '5455294647', '0', '', '', '', '', '2022-09-13 14:34:18'),
(3, 'Cemil', 'berk', 'mahsumtarhan1@gmail.com', '5456319392', '1', '', '', '', '', '2022-09-13 14:36:41'),
(4, 'Mahsum', 'Tarhan', '1mahsumtarhan@gmail.com', '5456319392', 'a14b883f851ccbb379a06cf31ce6d5ad87b1aa2c80ba0b3790bf3759d7576814', '', '', '', '', '2022-09-13 14:44:36'),
(5, 'Mahsum', 'devloper', 'mahsumtarhan1@gmail.com', '5427974510', '04f96727bb95e8cd75455822a7472e99a3fa14ce8098ffc5ce4a73ef07dde3fe', '', '', '', '', '2022-09-13 14:55:40'),
(6, 'dev', 'dev', 'dev@gmail.com', '5453177589', '1f327e3f77a047776d2fb19c43dba643bba371c036ba8ec51c6180aa06dd1006', '', '', '', '', '2022-09-13 18:22:19');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `music_genre`
--
ALTER TABLE `music_genre`
  ADD PRIMARY KEY (`ID`);

--
-- Tablo için indeksler `register_users`
--
ALTER TABLE `register_users`
  ADD PRIMARY KEY (`ID`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `music_genre`
--
ALTER TABLE `music_genre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `register_users`
--
ALTER TABLE `register_users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Kas 2017, 11:42:11
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `currancy`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `currancy`
--

CREATE TABLE `currancy` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `currancy`
--

INSERT INTO `currancy` (`id`, `type`, `price`, `location`) VALUES
(1, 1, '12.00', 1),
(2, 1, '10.00', 1),
(3, 1, '2.50', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `currency`
--

CREATE TABLE `currency` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` int(11) NOT NULL,
  `selling` decimal(10,4) NOT NULL,
  `buying` decimal(10,4) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `currency`
--

INSERT INTO `currency` (`id`, `type`, `location`, `selling`, `buying`, `date`) VALUES
(1, 'USD', 1, '3.9495', '3.9337', '2017-11-26'),
(2, 'EUR', 1, '4.6831', '4.6644', '2017-11-26'),
(3, 'USD', 2, '3.9471', '3.9404', '2017-11-26'),
(4, 'EUR', 2, '4.7119', '4.7063', '2017-11-26'),
(5, 'USD', 3, '3.9552', '3.9563', '2017-11-26'),
(6, 'EUR', 3, '4.7184', '4.7210', '2017-11-26');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `currancy`
--
ALTER TABLE `currancy`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `currancy`
--
ALTER TABLE `currancy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

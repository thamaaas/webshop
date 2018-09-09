-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Gép: localhost:3306
-- Létrehozás ideje: 2018. Aug 31. 17:44
-- Kiszolgáló verziója: 5.7.22-0ubuntu18.04.1
-- PHP verzió: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `zoldseg`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `product`
--

CREATE TABLE `product` (
  `product_id` tinyint(3) NOT NULL,
  `product_name` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `product_cat` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `product_country` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `product_class` varchar(4) COLLATE utf8_hungarian_ci NOT NULL,
  `product_unit` tinyint(1) NOT NULL,
  `product_amount` int(5) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_pic` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `product_description` varchar(300) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_cat`, `product_country`, `product_class`, `product_unit`, `product_amount`, `product_price`, `product_pic`, `product_description`) VALUES
(1, 'sárgarépa', 'zöldség gyökér magyar', 'hun', 'A', 1, 300, 120, 'src=\"img/product/srepa.jpg\"', 'Elsőosztályú magyar sárgarépa.'),
(2, 'sárgabarack', 'gyümölcs barack nyári szezonális magyar', 'hun', 'A', 1, 30, 600, 'src=\"img/product/sbarack.jpg\"', 'Magyar sárgabarack'),
(3, 'fehérrépa', 'zöldség gyökér petrezselyem gumó', 'hun', 'A', 1, 20, 1200, 'src=\"img/product/srepa.jpg\"', 'Magyar fehérrépa'),
(4, 'konyhás fehérrépa', 'zöldség gyökér petrezselyem gumó konyhás', 'hun', 'b', 1, 30, 900, 'src=\"img/product/srepa.jpg\"', 'Konyhás fehérrépa'),
(5, 'fehérszőlő', 'gyümölcs szőlő szezonális', 'argentin', 'a', 1, 10, 650, 'src=\"img/product/szolo.jpg\"', 'Import elsőosztályú fehérszőlő'),
(6, 'avokádó', 'gyümölcs egzotikus', 'svéd', 'a', 2, 10, 520, 'src=\"img/product/avokado.jpg\"', 'Avokádó gumó'),
(7, 'Lórépa', 'zöldség gyökér ló répa sárga', 'hun', 'd', 5, 3000, 90, 'src=\"img/product/srepa.jpg\"', 'Takarmány répa, főként állatoknak.'),
(8, 'Vöröshagyma', 'hagyma vörös zöldség gumó', 'hun', 'A', 1, 0, 300, '', 'Kiváló minőségű magyar vöröshagyma.');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE `user` (
  `user_id` smallint(3) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `user_passwd` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `user_last_in` date NOT NULL,
  `user_reg_date` date NOT NULL,
  `user_permission` int(11) NOT NULL,
  `user_email` varchar(70) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_passwd`, `user_last_in`, `user_reg_date`, `user_permission`, `user_email`) VALUES
(1, 'thamas', '5fd924625f6ab16a19cc9807c7c506ae1813490e4ba675f843d5a10e0baacdb8', '2018-07-15', '2018-07-04', 1, 'thamas@mrrendszergazda.pontkukac'),
(2, 'domi', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '2018-06-06', '2018-05-02', 0, 'domicica@huhu.eu');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- A tábla indexei `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `product`
--
ALTER TABLE `product`
  MODIFY `product_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT a táblához `user`
--
ALTER TABLE `user`
  MODIFY `user_id` smallint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

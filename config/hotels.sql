-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time:  7 дек 2019 в 17:09
-- Версия на сървъра: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotels`
--
CREATE DATABASE hotels;
-- --------------------------------------------------------

--
-- Структура на таблица `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image_url` varchar(256) NOT NULL,
  `apartment_price` int(11) NOT NULL,
  `room_price` int(11) NOT NULL,
  `type` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `description`, `image_url`, `apartment_price`, `room_price`, `type`) VALUES
(1, 'Хотел Стражите - Банско', 'Сгушен в подножието на Пирин планина, грaд Банско е притегателна сила за български и чуждестранни туристи през целия период на годината. Еднакво атрактивен през четирите сезона на година, градът предлага разнообразни условия за почивка и отдих. Хотел Стражите се намира само на 10 мин. пеша от центъра на курорта и на метри от начална станция на Гондола лифт.', 'images/mountains/planinski3.jpg', 200, 110, 'mountain'),
(2, 'Хотел Рила - Боровец', 'Хотел Рила е най-впечатляващият хотелски комплекс в Боровец. Хотелът има отлично местоположение - намира се в самото подножие на ски пистите и на 200 м от Кабинковия лифт, на 50 м от 4-седалков лифт Мартинови бараки и на 50 м от 4-седалков лифт Ситняково Експрес. Четиризвездният хотел e предпочитана дестинация от всяка възраст през всеки сезон. След мащабен ремонт и обновление през 2015г. хотел Рила посреща гостите си с изцяло нов дизайн като новото лице на Боровец.Построен през 1990 г. по оригинален френски идейно-архитектурен проект, той е един от най-големите скирски хотели на Балканския полуостров. Хотелът предоставя избор от барове и ресторанти: ресторантите Рила и Искър, бар-тераса Панорама, нощния бар, дискотека, Лоби бар. Хотел Рила предлага всички удобства за провеждане на бизнес семинари и конференции. Трите конферентни зали имат капацитет от 50 до 100 места. Снабдени са с Интернет връзка и най-модерно оборудване за изнасяне на презентации.', 'images/mountains/planinski1.jpg', 180, 95, 'mountain'),
(3, 'Къща Боряна', 'Къща за отдих Боряна се намира в с. Павелско, общ.Чепеларе, обл.Смолянска на 50 км. от град Пловдив по посока пътя за град Смолян; на 27 км. преди курортен комплекс Пампорово и на 19 км. преди град Чепеларе.', 'images/cultural/cultural3.jpg', 80, 50, 'culture'),
(4, 'Хотел Двореца - Велинград', 'СПА хотел Двореца се намира недалеч от центъра на Велинград, сред красив боров парк. Разположен на един от скатовете на Чепинската котловина, хотелът предлага прекрасен изглед към планината, града и минералните си басейни.Хотелът разполага със 110 луксозни стаи, минерални басейни, джакузита, лоби бар, сладкарница, ресторант с лятна градина, фитнес, тенис корт, паркинг и много други удобства. За конгресни прояви хотел Двореца разполага с 3 конферентни зали - зала Родопи, зала Сютка и зала Острец, просторни и удобни с естествено осветление, с капацитет съответно 120, 35, 20 места. Хотелът има самостоятелен бизнес център с постоянен Интернет достъп, копирни и факс услуги. Прекрасната тераса до конферентните зали предлага възможности за провеждане на кафе-паузи на открито, с изглед към минералите басейни и града.', 'images/cultural/cultural2.jpg', 120, 70, 'culture'),
(5, 'Инфинити Хотел Парк и СПА - Велинград', 'Инфинити Хотел Парк и СПА е на-новият и най-модерен комплекс във Велинград с екслузивен СПА и Wellness център от веригата Victoria SPA.Инфинити Хотел Парк и СПА разполага със СПА център от веригата Victoria SPA: 2 броя закрити термални басейна, /плувен и акватоничен/, 2 бр. детски басейни, 3 броя джакузи, леден шоков басейн, парна баня, билкова парна баня, приключенски душ, пътека на Кнайп, горска пътека, контрастен басейн, финланска сауна, билкова сауна, инфрачервена сауна, солна баня, турска баня, релакс зона, фитнес център. Панорамен СПА център с панорамен басейн Инфинити, джакузи и сауна Барове и ресторант.', 'images/cultural/cultural1.jpg', 80, 50, 'culture'),
(6, 'Грийн Лайф Бийч Ризорт до Созопол', 'Комплекс Грийн Лайф Бийч Ризорт се намира в местността Каваците, край Созопол. Вълшебна атмосфера, съчетаваща ласките на морето и слънчевите лъчи, спокойствието на залива и красивите панорамни гледки, прохладата на гората и природната екзотика на плажните дюни - всичко това предлага Грийн Лайф Бийч Ризорт. Комплексът е с разчупена структура, състояща се от тринадесет съседни сгради, с басейни и места за слънчеви бани, зелени зони и прекрасен прилежащ спокоен, луксозен и романтичен плаж. Допълнителна атракция и акцент върху активния, здравословен начин на живот са тенис кортът, футболното и баскетболно игрище. Комплексът разполага с: Басейни - намират се в отделни части на комплекса и са с различна големина и форма. Край всеки басейн са разположени шезлонги и чадъри. Овалният басейн е с детска секция и шатри за релакс или масаж. Можете да се отдадете на пълен релакс на метри от разхлаждащата вода, а малките ни гости имат възможността да играят до насита.', 'images/see-hotels/kavacite.jpg', 100, 50, 'sea'),
(7, 'Хотел Марина Сандс', 'Хотел Марина Сандс открива врати за първи път през 2018 година. Марина Сандс е разположен на 50 метра от най-големия чист и красив южен плаж на Обзор в областта Мишелика. За тези, които желаят да релаксират на кристално-чистия басейн са разположени шезлонги и чадъри, масички и шатри. Изхранването се осъществява в бутиковия ресторант на Марина Сандс, където освен разнообразен бюфет за закуска, обяд и вечеря, както и най-добрите напитки, е разположен Шоукукинг, като комплимент към гостите с интернационална или средиземноморска кухня – свежо приготвена на място пред госта. Хотелът разполага с 3 асансьора, безплатен подземен и надземен паркинг, фитнес, стая за багаж, денонощна рецепция и охрана.', 'images/see-hotels/obzor.jpg', 90, 40, 'sea'),
(8, 'Хотел Перелик - Пампорово', 'Емблематичният за Пампорово хотелски комплекс Перелик е разположен в централната част на курортния комплекс. Дизайнът на хотела следва нова модерна линия съчетала в себе си съвременните тенденции в интериора, които в унисон с красотата на Родопа планина, създават усещане за спокойствие и домашен уют.Хотелски комплекс Перелик е изцяло реновиран през 2017 година в категория четири звезди в частта хотелски стаи, рецепция, лоби бар, основен ресторант и а-ла-карт ресторант. На разположение на гостите са още напълно реновирани лоби бар, рецепция и ресторант с капацитет от 350 до 400 места, с място за шоу готвене и мокър бар за напитки. Реновиран а-ла-карт ресторант с изцяло нов интериор в топли и уютни цветове, модерен нощен клуб и прилежащ към него бар за напитки, апрес-ски бар, боулинг бар и зала с 6 писти, бизнес център и конферентна зала с 400 места, зала за билярд и електронни игри.', 'images/mountains/planinski2.jpg', 80, 40, 'mountain'),
(9, 'Приморско дел Сол\r\n', 'Приморско дел Сол (преди Гранд хотел Приморско) е разположен на метри от северния плаж в град Приморско. Комплексът разполага с хотелска част и отделни сгради с апартаменти.', 'images/see-hotels/primorsko.jpg', 100, 70, 'sea');

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$QjvDqWUO0xcued5JB3Kak.NxdCiIVgQ5pxfbPpaFHdJ4wLw73U0Qy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
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
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

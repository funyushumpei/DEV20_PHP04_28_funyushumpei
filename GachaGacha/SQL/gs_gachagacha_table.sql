-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2021 年 6 朁E25 日 17:55
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_gachagacha_table`
--

CREATE TABLE IF NOT EXISTS `gs_gachagacha_table` (
`id` int(12) NOT NULL,
  `character_id` int(12) NOT NULL,
  `character_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `character_img` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_gachagacha_table`
--

INSERT INTO `gs_gachagacha_table` (`id`, `character_id`, `character_name`, `character_img`, `datetime`) VALUES
(1, 1, 'スペシャルウィーク', 'specialweek.png', '2021-06-23 09:40:14'),
(2, 2, 'サイレンススズカ', 'silencesuzuka.png', '2021-06-23 10:10:48'),
(3, 3, 'トウカイテイオー', 'tokaiteio.png', '2021-06-23 10:11:09'),
(4, 4, 'マルゼンスキー', 'maruzensky.png', '2021-06-23 10:11:28'),
(5, 5, 'フジキセキ', 'fujikiseki.png', '2021-06-23 10:11:58'),
(6, 6, 'オグリキャップ', 'oguricap.png', '2021-06-23 10:12:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_gachagacha_table`
--
ALTER TABLE `gs_gachagacha_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_gachagacha_table`
--
ALTER TABLE `gs_gachagacha_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

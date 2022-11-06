-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2022 年 11 月 06 日 10:15
-- サーバのバージョン： 5.7.34
-- PHP のバージョン: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `jquerytest`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `female`
--

CREATE TABLE `female` (
  `id` int(11) NOT NULL,
  `femalenumber` varchar(5) NOT NULL COMMENT '番号',
  `femalename` text NOT NULL COMMENT '名前',
  `femalenote` text NOT NULL COMMENT 'メモ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `female`
--

INSERT INTO `female` (`id`, `femalenumber`, `femalename`, `femalenote`) VALUES
(1, 'A001', '馬場典子', '５０間近の美魔女'),
(2, 'A002', '小澤陽子', 'アラサーの色気'),
(3, 'A003', '森香澄', '若手最高の乳袋'),
(4, 'A004', '上野愛奈', 'お人形みたい'),
(5, 'A005', '堤玲奈', 'キュート'),
(6, 'A006', '良原安美', 'スレンダー美女'),
(7, 'A007', '相場詩織', '秋田のスレンダー');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `female`
--
ALTER TABLE `female`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `female`
--
ALTER TABLE `female`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

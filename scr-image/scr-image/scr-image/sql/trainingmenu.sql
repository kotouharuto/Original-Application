-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2020 年 7 月 29 日 10:27
-- サーバのバージョン： 5.7.26
-- PHP のバージョン: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- データベース: `tr_ng`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `trainingmenu`
--

CREATE TABLE `trainingmenu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) DEFAULT NULL,
  `num` int(11) NOT NULL,
  `setnum` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `trainingmenu`
--
ALTER TABLE `trainingmenu`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `trainingmenu`
--
ALTER TABLE `trainingmenu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


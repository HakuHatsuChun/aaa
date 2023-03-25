-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 3 月 25 日 14:36
-- サーバのバージョン： 10.4.21-MariaDB
-- PHP のバージョン: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db5`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_content_table`
--

CREATE TABLE `gs_content_table` (
  `id` int(12) NOT NULL,
  `title` varchar(64) NOT NULL COMMENT '記事のタイトル',
  `yoyaku` text NOT NULL COMMENT '記事の要約',
  `content` varchar(5000) NOT NULL COMMENT '記事の内容',
  `img` varchar(256) DEFAULT NULL COMMENT '画像のPATH',
  `date` datetime NOT NULL COMMENT '登録日',
  `update_time` datetime DEFAULT NULL COMMENT '更新日（NULL許容）',
  `tag` text DEFAULT NULL,
  `category` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='記事のテーブル';

--
-- テーブルのデータのダンプ `gs_content_table`
--

INSERT INTO `gs_content_table` (`id`, `title`, `yoyaku`, `content`, `img`, `date`, `update_time`, `tag`, `category`) VALUES
(36, 'タイトル２', 'なんかかいてみました', 'うおおおおおおおおおおおおおおしっぱいしっぱいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいいい', '', '2022-06-17 00:38:50', NULL, 'あああああ', 'いいいいいい'),
(37, '３３３３３', '', '３３３３３３', '', '2022-06-17 00:38:55', NULL, '', ''),
(44, 'しょうゆ', '醤油だと思っていたのに', 'じつはポン酢でした', '20230305114510_trainer_back.png', '2023-03-05 19:45:10', NULL, 'あああああ', '料理'),
(45, 'jfhg', 'jhgjghck.h', 'ktjzhjtfkygluhi;fldtksrtjrkflg;hiulyfdktysrjtzxfhkjlh;ifktdyjrstdgxfc', '20230305114728_trainer_back.png', '2023-03-05 19:47:28', NULL, '', ''),
(46, 'j', 'jk', 'kj', '20230305114808_trainer_back.png', '2023-03-05 19:48:08', NULL, '', ''),
(47, 'fsf', 'あsd', 'あsd', NULL, '2023-03-11 21:18:15', NULL, NULL, NULL),
(48, 'バイトでの失敗', 'シフトの間違いからの大失敗をした1日の話', 'シフトを勘違いしてしまい大遅刻をかました日のこと。\r\n迷惑をかけてしまったが頑張ろうと意気込んでいたが、レジの打ち間違えによる大失敗。', NULL, '2023-03-25 21:25:18', NULL, 'シフトを勘違いしてしまい大遅刻をかました日のこと。\r\n迷惑をかけてしまったが頑張ろうと意気込んでいたが、レジの打ち間違えによる大失敗。', 'シフトを勘違いしてしまい大遅刻をかました日のこと。\r\n迷惑をかけてしまったが頑張ろうと意気込んでいたが、レジの打ち間違えによる大失敗。'),
(49, 'ああああ', 'っっっっっっっっっっっっっっっっs', 'だしfはlぢうgふぁ；いうdh；ふあいdhlfかhldくs。', NULL, '2023-03-25 22:03:30', NULL, 'だしfはlぢうgふぁ；いうdh；ふあいdhlfかhldくs。', 'だしfはlぢうgふぁ；いうdh；ふあいdhlfかhldくs。');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_user_table`
--

CREATE TABLE `gs_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_user_table`
--

INSERT INTO `gs_user_table` (`id`, `name`, `lid`, `lpw`) VALUES
(1, 'テスト１管理者', 'test1', '$2y$10$amJsJbnjco8Gyz9bytkawOgWcKDu2PC/hf6daAkGYFZ35nmoq1ETu'),
(2, 'テスト2一般', 'test2', '$2y$10$Jrod7Xts/VPa0ThZhT33AedMO7D2rHLA.qqDLqYGvimBqsP5Xliia'),
(3, 'テスト３', 'test3', '$2y$10$hT8NciYWQ3.lO0QLfz1UHOySxqHYFVN3f3p2tTLQKiIgw0kBvO6g.'),
(4, '堀　斗真', 'oihugjghf', 'aaaaa'),
(5, 'ミミッキュ', 'root', 'aaaaa'),
(6, '山田太郎', 'mukou', 'aiueo');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_content_table`
--
ALTER TABLE `gs_content_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `gs_user_table`
--
ALTER TABLE `gs_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_content_table`
--
ALTER TABLE `gs_content_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- テーブルの AUTO_INCREMENT `gs_user_table`
--
ALTER TABLE `gs_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

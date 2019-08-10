-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2019-08-10 07:39:42
-- 服务器版本： 10.3.16-MariaDB
-- PHP 版本： 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `loginsystemtut`
--

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` varchar(255) NOT NULL COMMENT 'PRIMARY KEY',
  `pwdUsers` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `pwdUsers`) VALUES
(111, 'zhang', '112233'),
(112, 'tang', 'tang'),
(114, 'ddd', 'd'),
(115, 'e', 'e'),
(116, 'zoe', 'a'),
(117, 'coco', '2'),
(118, 'bird', 'bird'),
(120, 'cat', 'cat'),
(121, 'pig', 'pig'),
(122, 'frog', 'frog'),
(123, 'dog', 'dog'),
(124, 'sun', 'sun'),
(125, 'moon', 'moon'),
(126, 'star', 'star'),
(127, 'stone', '$2y$10$GlEFWagC3euN7l6RcZou.OOi1eAg2KyS1LlZrkFf7ExRsvWqMOyZu'),
(128, 'fly', '$2y$10$0UHIf9GduTF4fDJ7Q9e4yODGSu3U1.mR5wE5JycXLcJnlBXdf.0R2');

--
-- 转储表的索引
--

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

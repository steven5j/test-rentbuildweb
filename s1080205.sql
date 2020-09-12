-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 
-- 伺服器版本： 10.3.16-MariaDB
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
-- 資料庫： `project01`
--

-- --------------------------------------------------------

--
-- 資料表結構 `house_page_data_area`
--

CREATE TABLE `house_page_data_area` (
  `id` int(10) UNSIGNED NOT NULL,
  `area` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `house_page_data_area`
--

INSERT INTO `house_page_data_area` (`id`, `area`) VALUES
(41, '龍潭區'),
(42, '中壢區'),
(43, '平鎮區');

-- --------------------------------------------------------

--
-- 資料表結構 `house_page_data_building`
--

CREATE TABLE `house_page_data_building` (
  `id` int(10) UNSIGNED NOT NULL,
  `area` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `real_estate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `situation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parking_space` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Real_estate_Pyeong` int(11) NOT NULL,
  `land_Pyeong` int(11) NOT NULL,
  `traffic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `House_features` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `house_page_data_building`
--

INSERT INTO `house_page_data_building` (`id`, `area`, `real_estate`, `picture`, `address`, `situation`, `type`, `parking_space`, `Real_estate_Pyeong`, `land_Pyeong`, `traffic`, `House_features`) VALUES
(30, '龍潭區', '龍潭自由街', '龍潭區_龍潭自由街_20190917085553_869984.jpg', '桃園市龍潭區自由街', '住宅', '透天', '有', 28, 14, '公車站', '工業區附近、804醫院、國軍特戰基地'),
(32, '中壢區', '中壢中央西路', '中壢區_中壢中央西路_20190917091507_2018411中壢夜市物件_180730_0009.jpg', '中壢市中央西路**巷**號', '住宅', '公寓', '有', 26, 6, '公車站', '近中壢夜市、中壢高商'),
(33, '中壢區', '中壢八德路', '中壢區_中壢八德路_20190917092000_P_20170909_113424.jpg', '中壢區八德路**巷**號', '住宅', '公寓', '有', 34, 7, '火車站、河流步道、火車站', '近家樂福、中壢火車站'),
(34, '中壢區', '中壢永康街', '中壢區_中壢永康街_20190917130911_中壢永康_190115_0004.jpg', '桃園市中壢區永康街**段**巷**號', '住宅', '公寓', '無', 45, 7, '公車站', '5樓+6樓頂家');

-- --------------------------------------------------------

--
-- 資料表結構 `house_page_data_room`
--

CREATE TABLE `house_page_data_room` (
  `id` int(11) UNSIGNED NOT NULL,
  `room_num` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `real_estate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rental_status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_occupation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_gender` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_surname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rental_price` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rental_price_period` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `situation` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pyeong` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `characteristic` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `house_page_data_room`
--

INSERT INTO `house_page_data_room` (`id`, `room_num`, `room_title`, `real_estate`, `picture`, `rental_status`, `t_occupation`, `t_gender`, `t_surname`, `start_date`, `end_date`, `rental_price`, `rental_price_period`, `type`, `situation`, `floor`, `Pyeong`, `equipment`, `characteristic`) VALUES
(4, 'A1', '木質溫馨房', '中壢中央西路', '中壢中央西路_木質溫馨房_20190917094410_20180729中壢夜市物件4間套房_180730_0009.jpg', '出租中', '老師', 'Mr.', '陳', '2019/09/17', '2020/09/17', '7500', '月', '公寓', '獨立套房', '4', '8', '桌子 椅子 衣櫃 床 熱水器 電視 冰箱 冷氣 洗衣機 網路 第四台 沙發 天然 瓦斯', '全新裝潢'),
(5, 'A2', '木質溫馨房', '中壢中央西路', '中壢中央西路_木質溫馨房_20190917100024_P_20180729_121753_vHDR_Auto.jpg', '出租中', '老師', 'Mr.', '王', '2019/09/17', '2020/09/17', '7500', '月', '公寓', '獨立套房', '4', '8', '桌子 椅子 衣櫃 床 熱水器 電視 冰箱 冷氣 洗衣機 網路 第四台 沙發 ', '全新裝潢'),
(6, 'A3', '木質溫馨房', '中壢中央西路', '中壢中央西路_木質溫馨房_20190917100151_P_20180729_122001_vHDR_Auto.jpg', '出租中', '老師', 'Mr.', '林', '2019/09/17', '2020/09/17', '8000', '月', '公寓', '獨立套房', '4', '8', '桌子 椅子 衣櫃 床 熱水器 電視 冰箱 冷氣 洗衣機 網路 第四台 沙發 ', '全新裝潢'),
(7, 'E', '木質溫馨房', '中壢八德路', '中壢八德路_木質溫馨房_20190917100350_201816八德物件E房_190427_0021.jpg', '出租中', '工程師', 'Mr.', '邱', '2019/09/17', '2020/09/17', '7500', '月', '公寓', '獨立套房', '5', '6', '桌子 椅子 衣櫃 床 熱水器 電視 冰箱 冷氣 洗衣機 網路 第四台 沙發 ', '全新裝潢'),
(8, 'B', '木質溫馨房', '中壢八德路', '中壢八德路_木質溫馨房_20190917100647_八德路B房_190427_0002.jpg', '出租中', '業務', 'Mr.', '連', '2019/09/17', '2020/09/17', '7000', '月', '公寓', '獨立套房', '5', '6', '桌子 椅子 衣櫃 床 熱水器 電視 冰箱 冷氣 洗衣機 網路 第四台 沙發 ', '全新裝潢'),
(9, 'D', '木質溫馨房', '中壢八德路', '中壢八德路_木質溫馨房_20190917101613_八德路D房_190427_0007.jpg', '出租中', '作業員', 'Mr.', '白', '2019/09/17', '2020/09/17', '7000', '月', '公寓', '獨立套房', '5', '6', '桌子 椅子 衣櫃 床 熱水器 電視 冰箱 冷氣 洗衣機 網路 第四台 沙發 ', '全新裝潢'),
(10, 'A', '木質溫馨房', '中壢永康街', '中壢永康街_木質溫馨房_20190917131123_中壢永康_190115_0007.jpg', '出租中', '工程師', 'Mr.', '陳', '2019/09/17', '2020/09/17', '7500', '月', '公寓', '獨立套房', '5', '9', '桌子 椅子 衣櫃 床 熱水器 電視 冰箱 冷氣 洗衣機 網路 第四台 沙發', '全新裝潢'),
(11, 'B', '木質溫馨房', '中壢永康街', '中壢永康街_木質溫馨房_20190917131227_中壢永康_190115_0002.jpg', '出租中', '業務', 'Mr.', '張', '2019/09/17', '2020/09/17', '7500', '月', '公寓', '獨立套房', '5', '9', '桌子 椅子 衣櫃 床 熱水器 電視 冰箱 冷氣 洗衣機 網路 第四台 沙發', '採光好');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `acc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `acc`, `pwd`) VALUES
(1, 'admin', '1234');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `house_page_data_area`
--
ALTER TABLE `house_page_data_area`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `house_page_data_building`
--
ALTER TABLE `house_page_data_building`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `house_page_data_room`
--
ALTER TABLE `house_page_data_room`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `house_page_data_area`
--
ALTER TABLE `house_page_data_area`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `house_page_data_building`
--
ALTER TABLE `house_page_data_building`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `house_page_data_room`
--
ALTER TABLE `house_page_data_room`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

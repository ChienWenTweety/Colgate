-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2019 年 01 月 08 日 03:41
-- 伺服器版本: 10.1.37-MariaDB
-- PHP 版本： 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `colgate`
--

-- --------------------------------------------------------

--
-- 資料表結構 `assembly`
--

CREATE TABLE `assembly` (
  `AID` int(11) NOT NULL,
  `assembly_PID` int(11) NOT NULL,
  `product_name` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `material_1` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `material_1_amount` int(11) NOT NULL,
  `material_2` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `material_2_amount` int(11) NOT NULL,
  `material_3` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `material_3_amount` int(10) NOT NULL,
  `material_4` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `material_4_amount` int(10) NOT NULL,
  `material_5` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `material_5_amount` int(10) NOT NULL,
  `material_6` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `material_6_amount` int(10) NOT NULL,
  `time_day` int(11) NOT NULL
  `order_day` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `assembly`
--

INSERT INTO `assembly` (`AID`, `assembly_PID`, `product_name`, `material_1`, `material_1_amount`, `material_2`, `material_2_amount`, `material_3`, `material_3_amount`, `material_4`, `material_4_amount`, `material_5`, `material_5_amount`, `material_6`, `material_6_amount`, `time_day`) VALUES
(1, 1, '竹炭牙刷', '竹炭細毛', 250, '一般毛', 450, '刷柄', 1, '0', 0, '0', 0, '0', 0, 5, 5),
(2, 2, '超細牙刷', '超細細毛', 250, '一般毛', 450, '刷柄', 1, '0', 0, '0', 0, '0', 0, 5, 5),
(3, 3, '旋轉牙刷', '螺旋細毛', 250, '一般毛', 450, '刷柄', 1, '0', 0, '0', 0, '0', 0, 5, 5),
(4, 4, '牙膏(南瓜)', '小蘇打粉', 2, '複合式礦泥', 13, '玫瑰細鹽', 3, '甘油', 2, '水', 15, '南瓜香料', 3, 7, 5),
(5, 5, '牙膏(茄子)', '小蘇打粉', 2, '複合式礦泥', 13, '玫瑰細鹽', 3, '甘油', 2, '水', 15, '茄子香料', 3, 7, 5),
(6, 6, '牙膏(釋迦)', '小蘇打粉', 2, '複合式礦泥', 13, '玫瑰細鹽', 3, '甘油', 2, '水', 15, '釋迦香料', 3, 7, 5),
(7, 7, '漱口水(薄荷)', '水', 300, '獨家配方', 196, '薄荷', 4, '瓶身', 1, '瓶蓋', 1, '0', 0, 8, 5),
(8, 8, '漱口水(綠茶)', '水', 300, '獨家配方', 196, '綠茶萃取物', 4, '瓶身', 1, '瓶蓋', 1, '0', 0, 8, 5),
(9, 9, '漱口水(酷涼橙橘)', '水', 300, '獨家配方', 196, '橙橘萃取物', 4, '瓶身', 1, '瓶蓋', 1, '0', 0, 8, 5);

-- --------------------------------------------------------

--
-- 資料表結構 `colgate_order`
--

CREATE TABLE `colgate_order` (
  `order_id` int(10) NOT NULL,
  `cus_CID` int(11) NOT NULL,
  `cus_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `phone_no.` int(10) NOT NULL,
  `toothbrush_bam_price` int(11) NOT NULL,
  `toothbrush_bam_quan` int(10) NOT NULL,
  `toothbrush_thin_price` int(11) NOT NULL,
  `toothbrush_thin_quan` int(11) NOT NULL,
  `toothbrush_spiral_price` int(11) NOT NULL,
  `toothbrush_spiral_quan` int(11) NOT NULL,
  `mouthwash_mint_price` int(11) NOT NULL,
  `mouthwash_mint_quan` int(11) NOT NULL,
  `mouthwash_tea_price` int(11) NOT NULL,
  `mouthwash_tea_quan` int(11) NOT NULL,
  `mouthwash_orange_price` int(11) NOT NULL,
  `mouthwash_orange_quan` int(11) NOT NULL,
  `toothpaste_pum_price` int(11) NOT NULL,
  `toothpaste_pum_quan` int(11) NOT NULL,
  `toothpaste_egg_price` int(11) NOT NULL,
  `toothpaste_egg_quan` int(11) NOT NULL,
  `toothpaste_buddhist_price` int(11) NOT NULL,
  `toothpaste_buddhist_quan` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `colgate_order`
--

INSERT INTO `colgate_order` (`order_id`, `cus_CID`, `cus_name`, `phone_no.`, `toothbrush_bam_price`, `toothbrush_bam_quan`, `toothbrush_thin_price`, `toothbrush_thin_quan`, `toothbrush_spiral_price`, `toothbrush_spiral_quan`, `mouthwash_mint_price`, `mouthwash_mint_quan`, `mouthwash_tea_price`, `mouthwash_tea_quan`, `mouthwash_orange_price`, `mouthwash_orange_quan`, `toothpaste_pum_price`, `toothpaste_pum_quan`, `toothpaste_egg_price`, `toothpaste_egg_quan`, `toothpaste_buddhist_price`, `toothpaste_buddhist_quan`, `Total`) VALUES
(1, 10, '艾爾帕西諾', 980813111, 50, 2, 50, 0, 50, 0, 105, 1, 105, 0, 105, 0, 90, 0, 90, 0, 90, 2, 385),
(2, 7, '湯姆哈迪', 987653241, 50, 0, 50, 0, 50, 0, 105, 1, 105, 2, 105, 0, 90, 1, 90, 1, 90, 0, 495),
(3, 19, '白冰冰', 938276412, 50, 1, 50, 1, 50, 1, 105, 1, 105, 1, 105, 1, 90, 1, 90, 1, 90, 1, 645),
(4, 18, '辛蒂克勞馥', 980813998, 50, 0, 50, 0, 50, 0, 105, 0, 105, 0, 105, 0, 90, 0, 90, 3, 90, 0, 270),
(5, 5, '史努比', 998600066, 50, 2, 50, 0, 50, 0, 105, 0, 105, 1, 105, 0, 90, 0, 90, 1, 90, 0, 295);

-- --------------------------------------------------------

--
-- 資料表結構 `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_date` date NOT NULL,
  `worker_amount` int(11) NOT NULL,
  `pre_PID` int(11) NOT NULL,
  `product_name_sold` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `product_sold` int(11) NOT NULL,
  `pre_product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `company`
--

INSERT INTO `company` (`company_id`, `company_date`, `worker_amount`, `pre_PID`, `product_name_sold`, `product_sold`, `pre_product_quantity`) VALUES
(1, '2018-01-31', 24, 1, '竹炭牙刷', 20000, 19500),
(2, '2018-01-31', 24, 2, '超細牙刷', 20200, 20200),
(3, '2018-01-31', 24, 3, '旋轉牙刷', 19500, 19580),
(4, '2018-01-31', 10, 4, '牙膏(南瓜)', 19800, 19000),
(5, '2018-01-31', 10, 5, '牙膏(茄子)', 19400, 19600),
(6, '2018-01-31', 10, 6, '牙膏(釋迦)', 19800, 20000),
(7, '2018-01-31', 8, 7, '漱口水(薄荷)', 20000, 20500),
(8, '2018-01-31', 8, 8, '漱口水(綠茶)', 20000, 20500),
(9, '2018-01-31', 8, 9, '漱口水(酷涼橙橘)', 20100, 20000),
(10, '2018-02-28', 24, 1, '竹炭牙刷', 19580, 20000),
(11, '2018-02-28', 24, 2, '超細牙刷', 20000, 20100),
(12, '2018-02-28', 24, 3, '旋轉牙刷', 19560, 19580),
(13, '2018-02-28', 10, 4, '牙膏(南瓜)', 19400, 19500),
(14, '2018-02-28', 10, 5, '牙膏(茄子)', 19500, 19560),
(15, '2018-02-28', 10, 6, '牙膏(釋迦)', 20000, 19900),
(16, '2018-02-28', 8, 7, '漱口水(薄荷)', 20300, 20300),
(17, '2018-02-28', 8, 8, '漱口水(綠茶)', 20100, 20400),
(18, '2018-02-28', 8, 9, '漱口水(酷涼橙橘)', 20000, 20020),
(19, '2018-03-31', 24, 1, '竹炭牙刷', 19500, 19580),
(20, '2018-03-31', 24, 2, '超細牙刷', 20500, 20000),
(21, '2018-03-31', 24, 3, '旋轉牙刷', 19670, 19800),
(22, '2018-03-31', 10, 4, '牙膏(南瓜)', 19600, 19500),
(23, '2018-03-31', 10, 5, '牙膏(茄子)', 19800, 19900),
(24, '2018-03-31', 10, 6, '牙膏(釋迦)', 19080, 19400),
(25, '2018-03-31', 8, 7, '漱口水(薄荷)', 20600, 20700),
(26, '2018-02-28', 8, 8, '漱口水(綠茶)', 20500, 20600),
(27, '2018-02-28', 8, 9, '漱口水(酷涼橙橘)', 20040, 20000),
(28, '2018-04-30', 24, 1, '竹炭牙刷', 19580, 20000),
(29, '2018-04-30', 24, 2, '超細牙刷', 20500, 20300),
(30, '2018-04-30', 24, 3, '旋轉牙刷', 19050, 20000),
(31, '2018-04-30', 10, 4, '牙膏(南瓜)', 19050, 19100),
(32, '2018-04-30', 10, 5, '牙膏(茄子)', 19040, 19300),
(33, '2018-04-30', 10, 6, '牙膏(釋迦)', 20000, 20000),
(34, '2018-04-30', 8, 7, '漱口水(薄荷)', 20700, 20700),
(35, '2018-04-30', 8, 8, '漱口水(綠茶)', 20600, 20400),
(36, '2018-04-30', 8, 9, '漱口水(酷涼橙橘)', 20000, 20010);

-- --------------------------------------------------------

--
-- 資料表結構 `customer`
--

CREATE TABLE `customer` (
  `CID` int(11) NOT NULL,
  `cus_name` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `cus_phone` int(11) NOT NULL,
  `avg_monetary` int(11) NOT NULL,
  `recency` int(11) NOT NULL,
  `frequency` int(11) NOT NULL,
  `colgate_toothpaste_price` int(11) NOT NULL,
  `colgate_toothbrush_price` int(11) NOT NULL,
  `colgate_mouthwash_price` int(11) NOT NULL,
  `total_toothpaste_price` int(11) NOT NULL,
  `total_toothbrush_price` int(11) NOT NULL,
  `total_mouthwash_price` int(11) NOT NULL,
  `response_percentage` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `customer`
--

INSERT INTO `customer` (`CID`, `cus_name`, `cus_phone`, `avg_monetary`, `recency`, `frequency`, `colgate_toothpaste_price`, `colgate_toothbrush_price`, `colgate_mouthwash_price`, `total_toothpaste_price`, `total_toothbrush_price`, `total_mouthwash_price`, `response_percentage`) VALUES
(1, '雪寶', 987654321, 200, 20, 3, 20000, 2390, 982, 180000, 4000, 982, 3.4),
(2, '艾莎', 980818762, 3908, 1, 18, 38909, 662, 0, 49000, 2090, 87200, 9.8),
(3, '查理布朗', 976236817, 278, 20, 7, 20010, 380, 9990, 189000, 8730, 165000, 6.1),
(4, '貝兒', 965222222, 501, 4, 15, 80890, 9910, 550, 210000, 9910, 550, 6.3),
(5, '史努比', 977777777, 389, 10, 7, 182760, 0, 880, 200000, 15000, 20100, 5.7),
(6, '傑森史塔森', 976211118, 128, 29, 2, 880, 22891, 825, 41098, 22891, 1900, 2.8),
(7, '湯姆哈迪', 987653241, 871, 5, 16, 4900, 3567, 800, 189020, 4000, 900, 8),
(8, '芭芭拉史翠珊', 981624538, 1981, 7, 19, 19820, 18800, 1765, 32890, 34210, 3400, 8.8),
(9, '莉莉柯林斯', 971624533, 180, 30, 7, 450, 900, 450, 20000, 1500, 9800, 1.3),
(10, '艾爾帕西諾', 912345678, 312, 19, 9, 1000, 2198, 0, 34890, 54320, 100, 5.9),
(11, '約翰走路', 966666982, 140, 30, 4, 80, 80, 1690, 12990, 7690, 2000, 3.8),
(12, '血腥瑪麗', 917234832, 217, 21, 6, 890, 720, 1220, 21320, 8900, 1220, 4.3),
(13, '英格麗寶曼', 912873645, 1290, 5, 14, 11900, 2901, 21090, 11900, 2901, 21090, 9),
(14, '詹姆斯麥艾維', 912054999, 170, 34, 2, 3100, 300, 760, 54321, 6009, 6750, 3.6),
(15, '安伯賀德', 977127305, 220, 23, 6, 20000, 1250, 8380, 32000, 76890, 8380, 2.7),
(16, '東尼帕克', 928176255, 529, 7, 15, 6890, 0, 0, 12890, 16400, 100, 5.7),
(17, '泰森錢德勒', 988123110, 418, 10, 9, 29990, 12880, 44000, 34890, 15000, 45000, 7.3),
(18, '辛蒂克勞馥', 980813998, 860, 3, 13, 6800, 1280, 45309, 7800, 23990, 55000, 6.7),
(19, '白冰冰', 938276412, 300, 28, 8, 3091, 280, 12900, 3091, 2890, 21300, 4.3),
(20, '奧夏', 913872654, 760, 7, 20, 6533, 490, 0, 76890, 490, 43880, 6.3),
(21, '張曼玉', 987629990, 872, 2, 13, 28900, 7890, 12540, 78270, 7890, 25400, 7.8),
(22, '梁朝偉', 942399111, 540, 11, 7, 2550, 9000, 23490, 28760, 17450, 25000, 6.7),
(23, '王家衛', 937651990, 1220, 3, 16, 55500, 0, 1270, 74390, 5860, 1270, 8.3),
(24, '安迪威廉斯', 976442118, 290, 16, 4, 8490, 250, 315, 19800, 780, 6380, 2.1);

-- --------------------------------------------------------

--
-- 資料表結構 `material`
--

CREATE TABLE `material` (
  `material_id` int(11) NOT NULL,
  `material_date` date NOT NULL,
  `material_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `inventory_quan` int(11) NOT NULL,
  `safety_stock` int(11) NOT NULL,
  `holding_cost` int(11) NOT NULL,
  `order_cost` int(11) NOT NULL,
  `Purchase_cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `material`
--

INSERT INTO `material` (`material_id`, `material_date`, `material_name`, `inventory_quan`, `safety_stock`, `holding_cost`, `order_cost`, `Purchase_cost`) VALUES
(1, '2018-02-16', '竹炭細毛', 2500000, 50000, 5, 10, 20),
(2, '2018-02-16', '超細細毛', 2500000, 50000, 5, 10, 20),
(3, '2018-02-16', '螺旋細毛', 2570000, 40000, 5, 10, 20),
(4, '2018-02-16', '一般毛', 50000000, 600000, 5, 10, 15),
(5, '2018-02-16', '刷柄', 50000, 3000, 5, 10, 25),
(6, '2018-03-11', '小蘇打粉', 800000, 5000, 5, 10, 20),
(7, '2018-03-11', '複合式礦泥', 390000, 2400, 5, 10, 30),
(8, '2018-03-11', '玫瑰細鹽', 390000, 2800, 5, 10, 10),
(9, '2018-03-11', '甘油', 80000, 2000, 5, 10, 10),
(10, '2018-03-11', '水', 1500000, 39000, 5, 10, 5),
(11, '2018-03-11', '南瓜香料', 30000, 200, 5, 10, 20),
(12, '2018-03-11', '茄子香料', 30000, 200, 5, 10, 20),
(13, '2018-03-11', '釋迦香料', 2890, 500, 5, 10, 20),
(14, '2018-03-07', '水', 90000000, 67820, 5, 10, 5),
(15, '2018-03-07', '獨家配方', 1960000, 85300, 5, 10, 35),
(16, '2018-03-07', '薄荷', 120000, 2000, 5, 10, 20),
(17, '2018-03-07', '綠茶萃取物', 123000, 2300, 5, 10, 5),
(18, '2018-03-07', '橙橘萃取物', 120000, 600, 5, 10, 5),
(19, '2018-03-07', '瓶身', 100000, 500, 5, 10, 20),
(20, '2018-03-07', '瓶蓋', 100000, 500, 5, 10, 20);

-- --------------------------------------------------------

--
-- 資料表結構 `product`
--

CREATE TABLE `product` (
  `PID` int(11) NOT NULL,
  `product_AID` int(11) NOT NULL,
  `product_date` date NOT NULL,
  `product_name` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pro_inventory` int(11) NOT NULL,
  `pro_safety_stock` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `breakeven_value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `product`
--

INSERT INTO `product` (`PID`, `product_AID`, `product_date`, `product_name`, `pro_inventory`, `pro_safety_stock`, `product_price`, `breakeven_value`) VALUES
(1, 1, '2018-01-11', '竹炭牙刷', 20000, 5000, 50, 3.33),
(2, 2, '2018-01-11', '超細牙刷', 30000, 5000, 50, 3.33),
(3, 3, '2018-01-11', '旋轉牙刷', 19800, 5000, 50, 3.33),
(4, 4, '2018-02-21', '牙膏(南瓜)', 30000, 5000, 90, 3.33),
(5, 5, '2018-02-21', '牙膏(茄子)', 10000, 5000, 90, 3.33),
(6, 6, '2018-02-21', '牙膏(釋迦)', 20500, 4000, 90, 3.33),
(7, 7, '2018-02-21', '漱口水(薄荷)', 9000, 2000, 105, 3.33),
(8, 8, '2018-03-17', '漱口水(綠茶)', 6900, 2000, 105, 3.33),
(9, 9, '2018-03-17', '漱口水(酷涼橙橘)', 990, 200, 105, 3.33);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `assembly`
--
ALTER TABLE `assembly`
  ADD PRIMARY KEY (`AID`),
  ADD KEY `assembly_PID` (`assembly_PID`);

--
-- 資料表索引 `colgate_order`
--
ALTER TABLE `colgate_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `cus_CID` (`cus_CID`);

--
-- 資料表索引 `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `pre_PID` (`pre_PID`);

--
-- 資料表索引 `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CID`);

--
-- 資料表索引 `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`material_id`);

--
-- 資料表索引 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PID`),
  ADD KEY `product_AID` (`product_AID`);

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `assembly`
--
ALTER TABLE `assembly`
  ADD CONSTRAINT `assembly_ibfk_1` FOREIGN KEY (`assembly_PID`) REFERENCES `product` (`PID`);

--
-- 資料表的 Constraints `colgate_order`
--
ALTER TABLE `colgate_order`
  ADD CONSTRAINT `colgate_order_ibfk_1` FOREIGN KEY (`cus_CID`) REFERENCES `customer` (`CID`);

--
-- 資料表的 Constraints `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_1` FOREIGN KEY (`pre_PID`) REFERENCES `product` (`PID`);

--
-- 資料表的 Constraints `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`product_AID`) REFERENCES `assembly` (`AID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

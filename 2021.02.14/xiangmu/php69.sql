-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018-08-11 17:44:50
-- 服务器版本： 5.5.24
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php69`
--

-- --------------------------------------------------------

--
-- 表的结构 `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `imgsrc` varchar(100) DEFAULT NULL,
  `intro` text,
  `hits` int(11) NOT NULL DEFAULT '0',
  `addate` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `photos`
--

INSERT INTO `photos` (`id`, `title`, `imgsrc`, `intro`, `hits`, `addate`) VALUES
(1, '天津旅游', './images/5b6e9b347aa6c.jpg', '2016年7月1日，在庆祝建党95周年大会上，习近平便指出：我们要以识才的慧眼、爱才的诚意、用才的胆识、容才的雅量、聚才的良方，广开进贤之路，把党内和党外、国内和国外等各方面优秀人才吸引过来、凝聚起来，努力形成人人渴望成才、人人努力成才、人人皆可成才、人人尽展其才的良好局面。', 1, 1533975348),
(2, '产品', './images/5b6e9c2fa538a.jpg', '到此一游', 404, 1533975599),
(3, 'fsdhfhksl', './images/5b6e9c465c0d5.jpg', '速度更快速度很快了个黄色的颗粒高科老师的机关傀儡圣诞节快乐圣诞节反抗精神亢奋', 1, 1533975622),
(4, '微微一笑很倾城', './images/5b6e9c49c93b2.jpg', '我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊我家微微啊', 1, 1533975625),
(5, '优化', './images/5b6e9c4a82edb.jpg', 'jhokhjlnlnl', 1, 1533975626),
(6, '111', './images/5b6e9c4b6b80e.jpg', '所发生的所多多多多多多多多第三方士大夫', 0, 1533975627),
(7, 'zsdfgnklds', './images/5b6e9c5814089.jpg', '抵扣积分够了UI灵活管理局答复后果六点回来的火龙果叫大伙赶紧打哈考虑过回来看过华莱士gasglass个哈昂攻击力收到了非公开表达和公布的华莱士给客户第十八个辣豆腐干', 0, 1533975640),
(8, '恭喜发财 完事如意 心想事成', './images/5b6e9c6ac58a9.jpg', '恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成', 0, 1533975658),
(9, '金丝猴', './images/5b6e9c6e3be4d.jpg', '时代的回忆，青春的记忆\r\n', 100, 1533975662),
(10, '风景', './images/5b6e9c6fab7c8.jpg', '风景', 162, 1533975663),
(11, 'dasfdsa ', './images/5b6e9c726efa6.jpg', 'sdaf ', 0, 1533975666),
(12, '345', './images/5b6e9c731a453.png', '没有意思！！！！', 1, 1533975667),
(13, '哈哈哈', './images/5b6e9c732fc18.jpg', '。。。。。', 0, 1533975667),
(14, '今天吃了个大鸡腿', './images/5b6e9c78b9876.jpg', 'xxxxx', 0, 1533975672),
(15, '发的所发生的按时撒', './images/5b6e9c7d3f470.jpg', '安抚撒的撒', 1, 1533975677),
(16, '┗|｀O′|┛ 嗷~~', './images/5b6e9c7d42350.jpg', 'piu piu piu', 0, 1533975677),
(17, '恭喜发财 完事如意 心想事成', './images/5b6e9c86609ba.jpg', '恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成', 0, 1533975686),
(18, '前女友', './images/5b6e9c8a3d817.jpg', '肤白貌美气质佳', 0, 1533975690),
(19, '产品图片', './images/5b6e9c8ac3ca6.jpg', '............................', 0, 1533975690),
(20, 'daffodil第三方上的', './images/5b6e9c8b4fd4c.jpg', '范德萨范德萨发生', 1, 1533975691),
(21, '恭喜发财 完事如意 心想事成', './images/5b6e9c8c2f20e.jpg', '恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成', 0, 1533975692),
(22, 'php最好玩', './images/5b6e9c8f89c07.jpg', '无敌是多么的空虚~', 0, 1533975695),
(23, '绝地求生', './images/5b6e9c8fd2440.jpg', '《绝地求生》(PUBG) 是一款战术竞技型射击类沙游戏。\r\n该游戏中，玩家需要在游戏地图上收集各种资源，并在不断缩小的安全区域内对抗其他玩家，让自己生存到最后。游戏《绝地求生》除获得G-STAR最高奖项总统奖以及其他五项大奖 ，还打破了7项吉尼斯纪录。', 0, 1533975695),
(24, '图片1', './images/5b6e9c9173514.png', 'sadsadsadsa', 0, 1533975697),
(25, '恭喜发财 完事如意 心想事成', './images/5b6e9c91aa409.jpg', '恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成', 0, 1533975697),
(26, '林肯加长', './images/5b6e9c941711a.jpg', '大爷，欢迎光临！！！', 1, 1533975700),
(27, '111', './images/5b6e9c9829ecb.jpg', '。。。。。', 0, 1533975704),
(28, '123', './images/5b6e9c99b847e.jpg', '123', 0, 1533975705),
(29, '恭喜发财 完事如意 心想事成', './images/5b6e9c9c39d9c.jpg', '恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成', 0, 1533975708),
(30, '543', './images/5b6e9c9f338b6.jpg', '科比', 0, 1533975711),
(31, '地方的神色', './images/5b6e9ca0b766e.jpg', '的发斯蒂芬斯蒂芬打发斯蒂芬', 0, 1533975712),
(32, '冬雨', './images/5b6e9ca250e28.jpg', '好看', 0, 1533975714),
(33, '123', './images/5b6e9ca8c7df3.jpg', 'just a photo', 0, 1533975720),
(34, '111', './images/5b6e9caa87ee7.jpg', 'meinv', 0, 1533975722),
(35, 'sssssssss', './images/5b6e9cb6731a0.jpg', 'fdsafasdfasdf', 0, 1533975734),
(36, '恭喜发财 完事如意 心想事成', './images/5b6e9cbb3eec2.jpg', '恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成恭喜发财 完事如意 心想事成', 0, 1533975739),
(37, '旅游攻略', './images/5b6e9cc87974f.jpg', '旅游攻略旅游攻略旅游攻略', 0, 1533975752),
(38, '小猪猪', './images/5b6e9cce287b3.jpg', '小猪猪小猪猪小猪猪小猪猪', 0, 1533975758),
(39, 'HAHAH', './images/5b6e9cd44fdfc.jpg', '大美妞', 0, 1533975764),
(40, '你的照片', './images/5b6e9cdbe4a97.jpg', '大幅度发的所发生的是多少东方闪电', 0, 1533975771),
(41, '社会主义好', './images/5b6e9ce2a3150.png', '爱国敬业诚信友善', 0, 1533975778),
(42, '葫芦娃', './images/5b6e9ce799244.jpg', '', 123, 1533975783),
(43, '啦啦啦', './images/5b6e9cf640f79.jpg', '123', 0, 1533975798),
(44, '啦啦啦', './images/5b6e9d01bab5b.jpg', '123', 0, 1533975809),
(45, '的分隔符更合适的分公司', './images/5b6e9d0289e48.jpg', '东方故事电饭锅是都否', 0, 1533975810),
(46, '啦啦啦', './images/5b6e9d042e9b5.jpg', '123', 0, 1533975812),
(47, '啦啦啦', './images/5b6e9d05bdb20.jpg', '123', 0, 1533975813),
(48, '啦啦啦', './images/5b6e9d07eaa5d.jpg', '123', 0, 1533975815),
(49, '啦啦啦', './images/5b6e9d0992893.jpg', '123', 0, 1533975817),
(50, '啦啦啦', './images/5b6e9d0c3b2ba.jpg', '123', 0, 1533975820),
(51, '绝地求生-MiNi14', './images/5b6e9d0cca7d4.jpg', '《绝地求生》中Mini-14以低后座高射速和不错的伤害受到了很多玩家的欢迎,但想要玩好这把武器并不是件简单的事情', 1, 1533975820),
(52, '啦啦啦', './images/5b6e9d0dc7d14.jpg', '123', 0, 1533975821),
(53, '啦啦啦', './images/5b6e9d0f804ee.jpg', '123', 0, 1533975823),
(54, '啦啦啦', './images/5b6e9d10e3b16.jpg', '123', 0, 1533975824),
(55, '啦啦啦', './images/5b6e9d12778f7.jpg', '123', 0, 1533975826),
(56, '11', './images/5b6e9d12e9562.jpg', '11', 0, 1533975826),
(57, '啦啦啦', './images/5b6e9d145f2c4.jpg', '123', 0, 1533975828),
(58, '美女在线', './images/5b6e9d1568387.jpg', 'zz', 0, 1533975829),
(59, '啦啦啦', './images/5b6e9d197fb72.jpg', '123', 0, 1533975833),
(60, '啦啦啦', './images/5b6e9d1c8520e.jpg', '123', 0, 1533975836),
(61, '啦啦啦', './images/5b6e9d1e3706f.jpg', '123', 1, 1533975838),
(62, '啦啦啦', './images/5b6e9d20570a0.jpg', '123', 0, 1533975840),
(63, '啦啦啦', './images/5b6e9d2a8b6d9.jpg', '123', 0, 1533975850),
(64, '啦啦啦', './images/5b6e9d2c5c558.jpg', '123', 0, 1533975852),
(65, '啦啦啦', './images/5b6e9d2de31f1.jpg', '123', 0, 1533975853),
(66, '啦啦啦', './images/5b6e9d2f8a856.jpg', '123', 0, 1533975855),
(67, '啦啦啦', './images/5b6e9d3142860.jpg', '123', 0, 1533975857),
(68, '啦啦啦', './images/5b6e9d334154a.jpg', '123', 0, 1533975859),
(69, '啦啦啦', './images/5b6e9d34adbfd.jpg', '123', 0, 1533975860),
(70, '啦啦啦', './images/5b6e9d3833ba5.jpg', '123', 0, 1533975864),
(71, '小女友', './images/5b6e9d38e53a6.jpg', 'q', 0, 1533975864),
(72, '啦啦啦', './images/5b6e9d39c9689.jpg', '123', 0, 1533975865),
(73, '啦啦啦', './images/5b6e9d3b5c8b2.jpg', '123', 0, 1533975867),
(74, 'aasdsa', './images/5b6e9d3bce51d.jpg', 'asdasd', 2, 1533975867),
(75, '啦啦啦', './images/5b6e9d3d38ae4.jpg', '123', 0, 1533975869),
(76, '啦啦啦', './images/5b6e9d3f3e918.jpg', '123', 0, 1533975871),
(77, '我的桌面', './images/5b6e9d5bcf413.png', '精神病医院的主题色', 1, 1533975899),
(78, '啦啦啦', './images/5b6e9db81028e.png', '123', 0, 1533975992),
(79, '啦啦啦', './images/5b6e9db9af5cc.png', '123', 0, 1533975993),
(80, '啦啦啦', './images/5b6e9dbb20125.png', '123', 0, 1533975995),
(81, '啦啦啦', './images/5b6e9dbc9c1db.png', '123', 0, 1533975996),
(82, '啦啦啦', './images/5b6e9dbf2773c.png', '123', 0, 1533975999),
(83, '啦啦啦', './images/5b6e9dc159882.png', '123', 0, 1533976001),
(84, '啦啦啦', './images/5b6e9dc2a57a5.png', '123', 0, 1533976002),
(85, '啦啦啦', './images/5b6e9dc419d96.png', '123', 0, 1533976004),
(86, '啦啦啦', './images/5b6e9dc5979a5.png', '123', 0, 1533976005),
(87, '啦啦啦', './images/5b6e9dc72c726.png', '123', 0, 1533976007),
(88, '啦啦啦', './images/5b6e9dc91a29c.png', '123', 0, 1533976009),
(89, '啦啦啦', './images/5b6e9dcb0f72c.png', '123', 0, 1533976011),
(90, '啦啦啦', './images/5b6e9dccb01db.png', '123', 0, 1533976012),
(91, '啦啦啦', './images/5b6e9dce3e1fb.png', '123', 0, 1533976014),
(92, '啦啦啦', './images/5b6e9dd016994.png', '123', 0, 1533976016),
(93, '啦啦啦', './images/5b6e9dd2048f2.png', '123', 0, 1533976018),
(94, '啦啦啦', './images/5b6e9de9b4ea7.png', '123', 0, 1533976041),
(95, '上传失败', './images/5b6e9df42293a.png', '404', 0, 1533976052),
(96, '上传失败', './images/5b6e9df59edd8.png', '404', 1, 1533976053),
(97, '上传失败', './images/5b6e9df6dc680.png', '404', 0, 1533976054),
(98, '上传失败', './images/5b6e9df85bc3c.png', '404', 0, 1533976056),
(99, '上传失败', './images/5b6e9dfcf005c.png', '404', 0, 1533976060),
(100, '上传失败', './images/5b6e9dfe48127.png', '404', 0, 1533976062),
(101, '上传失败', './images/5b6e9e000f364.png', '404', 0, 1533976064),
(102, '上传失败', './images/5b6e9e016e723.png', '404', 0, 1533976065),
(103, '上传失败', './images/5b6e9e041afcb.png', '404', 0, 1533976068),
(104, '上传失败', './images/5b6e9e059c28b.png', '404', 0, 1533976069),
(105, '上传失败', './images/5b6e9e076a9f9.png', '404', 0, 1533976071),
(106, '上传失败', './images/5b6e9e09191a9.png', '404', 0, 1533976073),
(107, '上传失败', './images/5b6e9e0a73f17.png', '404', 0, 1533976074),
(108, '上传失败', './images/5b6e9e0c38a44.png', '404', 0, 1533976076),
(109, '上传失败', './images/5b6e9e0dacdf8.png', '404', 0, 1533976077),
(110, '上传失败', './images/5b6e9e0fd37a4.png', '404', 0, 1533976079),
(111, '上传失败', './images/5b6e9e1160c0b.png', '404', 0, 1533976081),
(112, '上传失败', './images/5b6e9e1313623.png', '404', 0, 1533976083),
(113, '上传失败', './images/5b6e9e149ba2d.png', '404', 0, 1533976084),
(114, '上传失败', './images/5b6e9e1678047.png', '404', 0, 1533976086),
(115, '上传失败', './images/5b6e9e18273ae.png', '404', 0, 1533976088),
(116, '上传失败', './images/5b6e9e19805c4.png', '404', 0, 1533976089),
(117, '上传失败', './images/5b6e9e1b00f09.png', '404', 0, 1533976091),
(118, '上传失败', './images/5b6e9e1cb69ac.png', '404', 0, 1533976092),
(119, '上传失败', './images/5b6e9e1f36f42.png', '404', 0, 1533976095),
(120, '上传失败', './images/5b6e9e20a8be6.png', '404', 0, 1533976096),
(121, '上传失败', './images/5b6e9e221c237.png', '404', 0, 1533976098),
(122, '上传失败', './images/5b6e9e241c692.png', '404', 0, 1533976100),
(123, '上传失败', './images/5b6e9e27f060f.png', '404', 0, 1533976103),
(124, '上传失败', './images/5b6e9e298d092.png', '404', 0, 1533976105),
(125, '上传失败', './images/5b6e9e2b250dc.png', '404', 0, 1533976107),
(126, '上传失败', './images/5b6e9e2ce18e2.png', '404', 0, 1533976108),
(127, '上传失败', './images/5b6e9e2f4c6b2.png', '404', 0, 1533976111),
(128, '上传失败', './images/5b6e9e312a43d.png', '404', 0, 1533976113),
(129, '上传失败', './images/5b6e9e32a5553.png', '404', 0, 1533976114),
(130, '上传失败', './images/5b6e9e3445e57.png', '404', 0, 1533976116),
(131, '上传失败', './images/5b6e9e367d976.png', '404', 0, 1533976118),
(132, '上传失败', './images/5b6e9e38322cf.png', '404', 0, 1533976120),
(133, '上传失败', './images/5b6e9e3976cc0.png', '404', 0, 1533976121),
(134, '上传失败', './images/5b6e9e3aefe96.png', '404', 0, 1533976122),
(135, '上传失败', './images/5b6e9e3c72333.png', '404', 0, 1533976124),
(136, '上传失败', './images/5b6e9e3e118ae.png', '404', 0, 1533976126),
(137, '上传失败', './images/5b6e9e3f9815f.png', '404', 0, 1533976127),
(138, '上传失败', './images/5b6e9e41278ef.png', '404', 1, 1533976129),
(139, '精神病医院的主题色', './images/5b6e9e858cdb0.png', '这种颜色能让人快速冷静下来', 7, 1533976197),
(140, '精神病医院的主题色', './images/5b6e9ee93d6fd.png', '能让人快速冷静下来', 5, 1533976297),
(141, 'title', './images/5b6ea2219d2d6.jpg', 'd', 2, 1533977121),
(143, '美女在线', './images/5b6ea3d2593ec.jpg', 'a', 4, 1533977554),
(144, '美女在线', './images/5b6ea3e371e5e.jpg', 'z', 3, 1533977571),
(145, '美女在线', './images/5b6ea3ef76b46.jpg', 'x', 16, 1533977583),
(146, '美女在线', './images/5b6ea4108f17b.jpg', 'x', 3, 1533977616),
(147, '2', './images/5b6ea418ba6b7.jpg', 'x', 4, 1533977624),
(148, '地方大幅度', './images/5b6ea812c3c0b.jpg', '恭喜发财恭喜发财恭喜发财恭喜发财', 2333, 1533978642),
(149, '老罗牛逼', './images/5b6ea89ddca4f.png', '', 514, 1533978781),
(150, '恭喜发财 完事如意 心想事成', './images/5b6eace4c6561.jpg', '实打实奥迪阿萨德是', 2, 1533979876),
(151, '曹', './images/5b6eae22be533.jpg', '社会淫', 5, 1533980194),
(152, '曹', './images/5b6eaeb7ab2a1.png', '', 16, 1533980343);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` char(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
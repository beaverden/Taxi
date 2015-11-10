-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.6.26 - MySQL Community Server (GPL)
-- ОС Сервера:                   Win32
-- HeidiSQL Версия:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры базы данных taxi
CREATE DATABASE IF NOT EXISTS `taxi` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `taxi`;


-- Дамп структуры для таблица taxi.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы taxi.admin: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `password`) VALUES
	(1, '$2y$10$0.HpJ8teGtCnjHB2IaFwJu.pAqI9zCnnsBLEmLyFIbrkQa/UYugaW');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


-- Дамп структуры для таблица taxi.comments
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment` varchar(140) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `ip` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы taxi.comments: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `comment`, `name`, `email`, `ip`, `created_at`, `updated_at`) VALUES
	(3, 'Отлично!', 'Денис', '', '', '2015-11-03 21:12:58', '2015-11-03 21:12:58'),
	(4, 'Хорошее обслуживание!', 'Василий', '', '', '2015-11-03 21:52:54', '2015-11-03 21:52:54'),
	(20, 'Мне нравится!', 'Иван', '', '', '2015-11-04 22:04:21', '2015-11-04 22:04:21'),
	(21, 'Удобно!', 'Андрей', '', '', '2015-11-04 22:10:59', '2015-11-04 22:10:59');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;


-- Дамп структуры для таблица taxi.crew
CREATE TABLE IF NOT EXISTS `crew` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `photo` varchar(60) NOT NULL,
  `info` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы taxi.crew: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `crew` DISABLE KEYS */;
INSERT INTO `crew` (`id`, `name`, `photo`, `info`, `created_at`, `updated_at`) VALUES
	(1, 'Иван Иванов', '/img/photos/images.jpg', 'Стаж работы - 5 лет.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'Иван Иванов', '/img/photos/images.jpg', 'Стаж работы - 5 лет.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'Иван Иванов', '/img/photos/images.jpg', 'Стаж работы - 5 лет.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `crew` ENABLE KEYS */;


-- Дамп структуры для таблица taxi.firewall
CREATE TABLE IF NOT EXISTS `firewall` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(39) NOT NULL,
  `whitelisted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `firewall_ip_address_unique` (`ip_address`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы taxi.firewall: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `firewall` DISABLE KEYS */;
/*!40000 ALTER TABLE `firewall` ENABLE KEYS */;


-- Дамп структуры для таблица taxi.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы taxi.migrations: ~9 rows (приблизительно)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2015_10_30_154506_create_crew_table', 1),
	('2015_11_02_210130_create_crew_table', 2),
	('2015_11_02_223000_create_comments_table', 3),
	('2015_11_04_205940_create_orders_table', 4),
	('2015_11_04_212705_add_ip_column', 5),
	('2015_11_06_205748_create_super_user_table', 6),
	('2015_11_06_205748_create_admin_table', 7),
	('2015_11_08_154928_add_status_column', 8),
	('2015_11_10_214558_create_firewall_tables', 9),
	('2015_11_10_221931_add_ip_column', 10);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Дамп структуры для таблица taxi.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `adress` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `ip` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы taxi.orders: ~8 rows (приблизительно)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `name`, `phone`, `adress`, `destination`, `status`, `ip`, `created_at`, `updated_at`) VALUES
	(3, 'Денис', '12345', 'Рейхстаг', 'Москва', 1, '127.0.0.1', '2015-11-04 21:34:15', '2015-11-10 22:16:08'),
	(4, 'Дани', '12345', 'Город', 'Город', 0, '192.168.0.100', '2015-11-04 22:18:49', '2015-11-08 16:51:48'),
	(5, 'Алана', '12345', 'Город', 'Город', 0, '192.168.0.100', '2015-11-04 22:23:26', '2015-11-08 16:23:01'),
	(6, 'Бан', '12345', 'Город', 'Город', 0, '192.168.0.100', '2015-11-08 19:05:30', '2015-11-08 19:05:30'),
	(7, 'Бан', '12345', 'Город', 'Город', 0, '192.168.0.100', '2015-11-08 19:06:47', '2015-11-08 19:06:47'),
	(8, 'Бан', '12345', 'Город', 'Город', 0, '192.168.0.100', '2015-11-08 19:07:57', '2015-11-08 19:07:57'),
	(9, 'Бан', '12345', 'Город', 'Город', 0, '192.168.0.100', '2015-11-08 19:09:35', '2015-11-08 19:09:35'),
	(10, 'Бан', '12345', 'А', 'Б', 0, '127.0.0.1', '2015-11-08 19:17:07', '2015-11-08 19:17:07');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы taxi.admin: ~1 rows (приблизительно)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, '$2y$10$Yj2nDc1Qd9pGMyJVJGyP..mZsM5V2M43wI8LpKIi0Ucl2C3b5x4Ti', 'sGftiRlfEceyBKf1OoNeVN49PQZSlsTspNAiXt0OL5FPf3EKU66X7x6eyNMU', '0000-00-00 00:00:00', '2016-01-06 19:33:31');
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы taxi.comments: ~2 rows (приблизительно)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` (`id`, `comment`, `name`, `email`, `ip`, `created_at`, `updated_at`) VALUES
	(25, 'It\'s cool!', 'Ivan', '', '127.0.0.1', '2016-03-28 13:04:40', '2016-03-28 13:04:40');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;


-- Дамп структуры для таблица taxi.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tel` varchar(30) NOT NULL,
  `info` varchar(140) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы taxi.contacts: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `tel`, `info`, `created_at`, `updated_at`) VALUES
	(1, '0-797-707-704', 'Dispatcher', '0000-00-00 00:00:00', '2015-12-13 20:14:34'),
	(5, '911', 'Ambulance', '2015-12-13 20:42:35', '2015-12-13 20:42:35'),
	(6, '123', 'Sample street', '2015-12-19 18:09:46', '2015-12-19 18:09:46'),
	(7, '321', 'Sample house', '2015-12-19 18:10:06', '2015-12-19 18:10:06');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;


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

-- Дамп данных таблицы taxi.crew: ~3 rows (приблизительно)
/*!40000 ALTER TABLE `crew` DISABLE KEYS */;
INSERT INTO `crew` (`id`, `name`, `photo`, `info`, `created_at`, `updated_at`) VALUES
	(1, 'Ivan Ivanov', '/img/photos/images.jpg', 'Work experience - 5 years.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'Vodka Balalayka', '/img/photos/images.jpg', 'Work experience - 5 years.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы taxi.firewall: ~2 rows (приблизительно)
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
	('2015_11_10_221931_add_ip_column', 10),
	('2015_11_13_180214_add_remember_token', 11),
	('2015_11_13_180851_add_timestamps', 12),
	('2015_12_04_205434_create_contacts_table', 13);
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы taxi.orders: ~8 rows (приблизительно)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `name`, `phone`, `adress`, `destination`, `status`, `ip`, `created_at`, `updated_at`) VALUES
	(12, 'Sample name', '123456', 'Hollywood', 'Hell', 0, '127.0.0.1', '2016-03-28 13:08:44', '2016-03-28 13:08:44');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 08 Mar 2016, 17:34:38
-- Sunucu sürümü: 5.6.28-0ubuntu0.14.04.1
-- PHP Sürümü: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `copy`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `username` varchar(20) NOT NULL,
  `name_surname` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `old` date NOT NULL,
  `active` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_id` (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(125) NOT NULL,
  `bank_no` varchar(34) NOT NULL,
  `bank_tel` varchar(15) NOT NULL,
  `bank_address` varchar(125) NOT NULL,
  `bank_active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `boughtproducts`
--

CREATE TABLE IF NOT EXISTS `boughtproducts` (
  `bp_id` int(11) NOT NULL AUTO_INCREMENT,
  `bp_stock_id` int(11) NOT NULL,
  `bp_amount` int(11) NOT NULL,
  `bp_price` float NOT NULL,
  `bp_bi_id` int(11) NOT NULL,
  PRIMARY KEY (`bp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `buyinvoice`
--

CREATE TABLE IF NOT EXISTS `buyinvoice` (
  `bi_id` int(11) NOT NULL AUTO_INCREMENT,
  `bi_desc` varchar(125) NOT NULL,
  `bi_admin_id` int(11) NOT NULL,
  `bi_no` varchar(45) NOT NULL,
  `bi_seller_id` int(11) NOT NULL,
  `bi_date` date NOT NULL,
  `bi_cancel` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`bi_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(25) CHARACTER SET utf8 NOT NULL,
  `category_sub` int(11) NOT NULL,
  `category_detail` varchar(45) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(125) NOT NULL,
  `company_address` varchar(125) NOT NULL,
  `company_web` varchar(125) NOT NULL,
  `company_mail` varchar(30) NOT NULL,
  `company_tel` varchar(15) NOT NULL,
  PRIMARY KEY (`company_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(125) NOT NULL,
  `cust_tel` varchar(20) NOT NULL,
  `cust_mail` varchar(50) NOT NULL,
  `cust_web` varchar(125) NOT NULL,
  `cust_address` varchar(125) NOT NULL,
  `cust_status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_date` date NOT NULL,
  `event_level` int(11) NOT NULL,
  `event_detail` varchar(125) NOT NULL,
  `event_admin_id` int(11) NOT NULL,
  `event_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `images_id` int(11) NOT NULL AUTO_INCREMENT,
  `images_stock_id` int(11) NOT NULL,
  `images_cover` int(11) NOT NULL,
  `images_title` varchar(255) NOT NULL,
  PRIMARY KEY (`images_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `insertedservice`
--

CREATE TABLE IF NOT EXISTS `insertedservice` (
  `insertedservice_id` int(11) NOT NULL AUTO_INCREMENT,
  `insertedservice_service_id` int(11) NOT NULL,
  `insertedservice_servicetype` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `insertedservice_tax` int(11) NOT NULL,
  `insertedservice_price` float NOT NULL,
  PRIMARY KEY (`insertedservice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `invoice_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(20) NOT NULL,
  `invoice_description` varchar(350) NOT NULL,
  `invoice_customer_id` int(11) NOT NULL,
  `invoice_admin` int(11) NOT NULL,
  `invoice_discount` float(11,2) NOT NULL,
  `invoice_providers` int(11) NOT NULL,
  `invoice_providers_price` float NOT NULL,
  `invoice_date` date NOT NULL,
  `invoice_cancelled` int(11) NOT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `invoiceadj`
--

CREATE TABLE IF NOT EXISTS `invoiceadj` (
  `invoiceadj_id` int(11) NOT NULL AUTO_INCREMENT,
  `invoiceadj_name` varchar(3) NOT NULL,
  PRIMARY KEY (`invoiceadj_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `invoicedproducts`
--

CREATE TABLE IF NOT EXISTS `invoicedproducts` (
  `ip_id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_admin_id` int(11) NOT NULL,
  `ip_stock_id` int(11) NOT NULL,
  `ip_name` varchar(125) NOT NULL,
  `ip_amount` int(11) NOT NULL,
  `ip_price` float NOT NULL,
  `ip_tax` float NOT NULL,
  `ip_total` float NOT NULL,
  `ip_invoice_id` int(11) NOT NULL,
  PRIMARY KEY (`ip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `language`
--

CREATE TABLE IF NOT EXISTS `language` (
  `language_id` int(11) NOT NULL AUTO_INCREMENT,
  `language_name` varchar(11) NOT NULL,
  `language_active` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_customer_id` int(11) NOT NULL,
  `payments_pp_id` int(11) NOT NULL,
  `payment_invoice_id` int(11) NOT NULL,
  `payment_bi_id` int(11) DEFAULT NULL,
  `payment_seller_id` int(11) DEFAULT NULL,
  `payment_service_id` int(11) NOT NULL,
  `payment_bank_id` int(11) NOT NULL,
  `payment_admin_id` int(11) NOT NULL,
  `payment_type` int(11) NOT NULL,
  `payment_in_out` varchar(3) NOT NULL,
  `payment_amount` float(11,2) NOT NULL,
  `payment_desc` varchar(250) NOT NULL,
  `payment_date` date NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `paytype`
--

CREATE TABLE IF NOT EXISTS `paytype` (
  `paytype_id` int(11) NOT NULL AUTO_INCREMENT,
  `paytype_name` varchar(125) COLLATE utf8_turkish_ci NOT NULL,
  `paytype_active` int(11) NOT NULL,
  PRIMARY KEY (`paytype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `providers`
--

CREATE TABLE IF NOT EXISTS `providers` (
  `providers_id` int(11) NOT NULL AUTO_INCREMENT,
  `providers_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `providers_tel` varchar(12) COLLATE utf8_turkish_ci NOT NULL,
  `providers_address` varchar(125) COLLATE utf8_turkish_ci NOT NULL,
  `providers_web` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `providers_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`providers_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `providerspyments`
--

CREATE TABLE IF NOT EXISTS `providerspyments` (
  `pp_id` int(11) NOT NULL AUTO_INCREMENT,
  `pp_desc` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `pp_service_id` int(11) NOT NULL,
  `pp_providers_id` int(11) NOT NULL,
  `pp_bank_id` int(11) NOT NULL,
  `pp_price` float NOT NULL,
  `pp_ok` int(11) NOT NULL,
  PRIMARY KEY (`pp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `seller`
--

CREATE TABLE IF NOT EXISTS `seller` (
  `seller_id` int(11) NOT NULL AUTO_INCREMENT,
  `seller_name` varchar(50) NOT NULL,
  `seller_iban` varchar(30) NOT NULL,
  `seller_address` text NOT NULL,
  `seller_tel` varchar(15) NOT NULL,
  `seller_mail` varchar(30) NOT NULL,
  `seller_web` varchar(60) NOT NULL,
  PRIMARY KEY (`seller_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `stock`
--

CREATE TABLE IF NOT EXISTS `stock` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_no` varchar(13) NOT NULL,
  `stock_category_id` int(11) NOT NULL,
  `stock_name` varchar(125) NOT NULL,
  `stock_short_detail` varchar(60) NOT NULL,
  `stock_detail` longtext NOT NULL,
  `stock_price_in` float NOT NULL DEFAULT '0',
  `stock_price_out` float NOT NULL DEFAULT '0',
  `stock_amount` int(11) NOT NULL DEFAULT '0',
  `stock_tax_id` int(11) NOT NULL DEFAULT '0',
  `stock_seller_id` int(11) NOT NULL DEFAULT '0',
  `stock_admin` int(11) NOT NULL,
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tax`
--

CREATE TABLE IF NOT EXISTS `tax` (
  `tax_id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_tax` int(3) NOT NULL,
  PRIMARY KEY (`tax_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 25, 2025 at 09:40 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('cars', 'O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:11:{i:0;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:1;s:4:\"name\";s:4:\"RAV4\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"gt4rt7\";s:4:\"year\";i:2021;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"2500.00\";s:12:\"availability\";i:1;s:5:\"image\";s:48:\"SUV/Toyota/krish-parmar-PmSwFm4Lw1c-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 13:53:07\";s:10:\"updated_at\";s:19:\"2025-02-25 10:33:06\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:1;s:4:\"name\";s:4:\"RAV4\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"gt4rt7\";s:4:\"year\";i:2021;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"2500.00\";s:12:\"availability\";i:1;s:5:\"image\";s:48:\"SUV/Toyota/krish-parmar-PmSwFm4Lw1c-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 13:53:07\";s:10:\"updated_at\";s:19:\"2025-02-25 10:33:06\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:1;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:2;s:4:\"name\";s:5:\"Camry\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"de4ty7\";s:4:\"year\";i:2022;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"3000.00\";s:12:\"availability\";i:1;s:5:\"image\";s:51:\"Sedan/Toyota/anthony-fomin-Rj_jGoAFgR4-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:37:49\";s:10:\"updated_at\";s:19:\"2025-02-19 14:37:49\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:2;s:4:\"name\";s:5:\"Camry\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"de4ty7\";s:4:\"year\";i:2022;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"3000.00\";s:12:\"availability\";i:1;s:5:\"image\";s:51:\"Sedan/Toyota/anthony-fomin-Rj_jGoAFgR4-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:37:49\";s:10:\"updated_at\";s:19:\"2025-02-19 14:37:49\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:2;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:3;s:4:\"name\";s:4:\"CR-V\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"der54t\";s:4:\"year\";i:2023;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"2800.00\";s:12:\"availability\";i:0;s:5:\"image\";s:46:\"SUV/Honda/a-n-v-e-s-h-vjwwhm3iTd4-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:40:46\";s:10:\"updated_at\";s:19:\"2025-02-19 14:40:46\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:3;s:4:\"name\";s:4:\"CR-V\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"der54t\";s:4:\"year\";i:2023;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"2800.00\";s:12:\"availability\";i:0;s:5:\"image\";s:46:\"SUV/Honda/a-n-v-e-s-h-vjwwhm3iTd4-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:40:46\";s:10:\"updated_at\";s:19:\"2025-02-19 14:40:46\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:3;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:4;s:4:\"name\";s:5:\"Civic\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"w34frt\";s:4:\"year\";i:2023;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"3200.00\";s:12:\"availability\";i:0;s:5:\"image\";s:42:\"Sedan/Honda/brian-ZoIPyC_f1oE-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:42:12\";s:10:\"updated_at\";s:19:\"2025-02-25 10:33:06\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:4;s:4:\"name\";s:5:\"Civic\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"w34frt\";s:4:\"year\";i:2023;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"3200.00\";s:12:\"availability\";i:0;s:5:\"image\";s:42:\"Sedan/Honda/brian-ZoIPyC_f1oE-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:42:12\";s:10:\"updated_at\";s:19:\"2025-02-25 10:33:06\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:4;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:5;s:4:\"name\";s:17:\"Corolla Hatchback\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"fty6u7\";s:4:\"year\";i:2024;s:8:\"car_type\";s:9:\"Hatchback\";s:16:\"daily_rent_price\";s:7:\"3500.00\";s:12:\"availability\";i:0;s:5:\"image\";s:56:\"Hatchback/Toyota/gregory-dupont-GMvThAzwACc-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:43:42\";s:10:\"updated_at\";s:19:\"2025-02-19 14:43:42\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:5;s:4:\"name\";s:17:\"Corolla Hatchback\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"fty6u7\";s:4:\"year\";i:2024;s:8:\"car_type\";s:9:\"Hatchback\";s:16:\"daily_rent_price\";s:7:\"3500.00\";s:12:\"availability\";i:0;s:5:\"image\";s:56:\"Hatchback/Toyota/gregory-dupont-GMvThAzwACc-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:43:42\";s:10:\"updated_at\";s:19:\"2025-02-19 14:43:42\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:5;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:6;s:4:\"name\";s:3:\"Fit\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"set678\";s:4:\"year\";i:2023;s:8:\"car_type\";s:9:\"Hatchback\";s:16:\"daily_rent_price\";s:7:\"3800.00\";s:12:\"availability\";i:1;s:5:\"image\";s:57:\"Hatchback/Honda/rati-kukhianidze-Zqkggjuco7o-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:44:47\";s:10:\"updated_at\";s:19:\"2025-02-19 14:44:47\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:6;s:4:\"name\";s:3:\"Fit\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"set678\";s:4:\"year\";i:2023;s:8:\"car_type\";s:9:\"Hatchback\";s:16:\"daily_rent_price\";s:7:\"3800.00\";s:12:\"availability\";i:1;s:5:\"image\";s:57:\"Hatchback/Honda/rati-kukhianidze-Zqkggjuco7o-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:44:47\";s:10:\"updated_at\";s:19:\"2025-02-19 14:44:47\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:6;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:13;s:4:\"name\";s:7:\"Corolla\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"t24cor\";s:4:\"year\";i:2024;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"2700.00\";s:12:\"availability\";i:0;s:5:\"image\";s:21:\"Sedan/Toyota/img1.jpg\";s:10:\"created_at\";s:19:\"2025-02-23 11:16:40\";s:10:\"updated_at\";s:19:\"2025-02-24 11:47:17\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:13;s:4:\"name\";s:7:\"Corolla\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"t24cor\";s:4:\"year\";i:2024;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"2700.00\";s:12:\"availability\";i:0;s:5:\"image\";s:21:\"Sedan/Toyota/img1.jpg\";s:10:\"created_at\";s:19:\"2025-02-23 11:16:40\";s:10:\"updated_at\";s:19:\"2025-02-24 11:47:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:7;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:14;s:4:\"name\";s:7:\"Corolla\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"bt7u9i\";s:4:\"year\";i:2022;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"2600.00\";s:12:\"availability\";i:1;s:5:\"image\";s:24:\"Sedan/Toyota/bestami.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:17:39\";s:10:\"updated_at\";s:19:\"2025-02-24 15:17:39\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:14;s:4:\"name\";s:7:\"Corolla\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"bt7u9i\";s:4:\"year\";i:2022;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"2600.00\";s:12:\"availability\";i:1;s:5:\"image\";s:24:\"Sedan/Toyota/bestami.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:17:39\";s:10:\"updated_at\";s:19:\"2025-02-24 15:17:39\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:8;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:15;s:4:\"name\";s:5:\"Civic\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"mt3et6\";s:4:\"year\";i:2023;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"2600.00\";s:12:\"availability\";i:1;s:5:\"image\";s:52:\"Sedan/Honda/somalia-veteran-dVmtrMw6H8A-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:21:52\";s:10:\"updated_at\";s:19:\"2025-02-24 15:21:52\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:15;s:4:\"name\";s:5:\"Civic\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"mt3et6\";s:4:\"year\";i:2023;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"2600.00\";s:12:\"availability\";i:1;s:5:\"image\";s:52:\"Sedan/Honda/somalia-veteran-dVmtrMw6H8A-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:21:52\";s:10:\"updated_at\";s:19:\"2025-02-24 15:21:52\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:9;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:16;s:4:\"name\";s:4:\"CR-V\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"ntir78\";s:4:\"year\";i:2023;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"3000.00\";s:12:\"availability\";i:1;s:5:\"image\";s:47:\"SUV/Honda/alvano-putra-TdAatXFLWak-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:36:22\";s:10:\"updated_at\";s:19:\"2025-02-24 15:36:22\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:16;s:4:\"name\";s:4:\"CR-V\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"ntir78\";s:4:\"year\";i:2023;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"3000.00\";s:12:\"availability\";i:1;s:5:\"image\";s:47:\"SUV/Honda/alvano-putra-TdAatXFLWak-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:36:22\";s:10:\"updated_at\";s:19:\"2025-02-24 15:36:22\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:10;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:17;s:4:\"name\";s:13:\"Corolla Cross\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"mtyg76\";s:4:\"year\";i:2024;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"3100.00\";s:12:\"availability\";i:1;s:5:\"image\";s:49:\"SUV/Toyota/gabriel-tovar-aNwtUkpb3cU-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:38:30\";s:10:\"updated_at\";s:19:\"2025-02-24 15:38:30\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:17;s:4:\"name\";s:13:\"Corolla Cross\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"mtyg76\";s:4:\"year\";i:2024;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"3100.00\";s:12:\"availability\";i:1;s:5:\"image\";s:49:\"SUV/Toyota/gabriel-tovar-aNwtUkpb3cU-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:38:30\";s:10:\"updated_at\";s:19:\"2025-02-24 15:38:30\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}', 1740476352),
('cars_page_1', 'O:31:\"Illuminate\\Pagination\\Paginator\":10:{s:8:\"\0*\0items\";O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:9:{i:0;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:1;s:4:\"name\";s:4:\"RAV4\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"gt4rt7\";s:4:\"year\";i:2021;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"2500.00\";s:12:\"availability\";i:0;s:5:\"image\";s:48:\"SUV/Toyota/krish-parmar-PmSwFm4Lw1c-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 13:53:07\";s:10:\"updated_at\";s:19:\"2025-02-24 14:00:49\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:1;s:4:\"name\";s:4:\"RAV4\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"gt4rt7\";s:4:\"year\";i:2021;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"2500.00\";s:12:\"availability\";i:0;s:5:\"image\";s:48:\"SUV/Toyota/krish-parmar-PmSwFm4Lw1c-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 13:53:07\";s:10:\"updated_at\";s:19:\"2025-02-24 14:00:49\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:1;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:2;s:4:\"name\";s:5:\"Camry\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"de4ty7\";s:4:\"year\";i:2022;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"3000.00\";s:12:\"availability\";i:1;s:5:\"image\";s:51:\"Sedan/Toyota/anthony-fomin-Rj_jGoAFgR4-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:37:49\";s:10:\"updated_at\";s:19:\"2025-02-19 14:37:49\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:2;s:4:\"name\";s:5:\"Camry\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"de4ty7\";s:4:\"year\";i:2022;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"3000.00\";s:12:\"availability\";i:1;s:5:\"image\";s:51:\"Sedan/Toyota/anthony-fomin-Rj_jGoAFgR4-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:37:49\";s:10:\"updated_at\";s:19:\"2025-02-19 14:37:49\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:2;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:3;s:4:\"name\";s:4:\"CR-V\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"der54t\";s:4:\"year\";i:2023;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"2800.00\";s:12:\"availability\";i:0;s:5:\"image\";s:46:\"SUV/Honda/a-n-v-e-s-h-vjwwhm3iTd4-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:40:46\";s:10:\"updated_at\";s:19:\"2025-02-19 14:40:46\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:3;s:4:\"name\";s:4:\"CR-V\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"der54t\";s:4:\"year\";i:2023;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"2800.00\";s:12:\"availability\";i:0;s:5:\"image\";s:46:\"SUV/Honda/a-n-v-e-s-h-vjwwhm3iTd4-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:40:46\";s:10:\"updated_at\";s:19:\"2025-02-19 14:40:46\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:3;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:4;s:4:\"name\";s:5:\"Civic\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"w34frt\";s:4:\"year\";i:2023;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"3200.00\";s:12:\"availability\";i:1;s:5:\"image\";s:42:\"Sedan/Honda/brian-ZoIPyC_f1oE-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:42:12\";s:10:\"updated_at\";s:19:\"2025-02-19 14:42:12\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:4;s:4:\"name\";s:5:\"Civic\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"w34frt\";s:4:\"year\";i:2023;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"3200.00\";s:12:\"availability\";i:1;s:5:\"image\";s:42:\"Sedan/Honda/brian-ZoIPyC_f1oE-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:42:12\";s:10:\"updated_at\";s:19:\"2025-02-19 14:42:12\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:4;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:5;s:4:\"name\";s:17:\"Corolla Hatchback\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"fty6u7\";s:4:\"year\";i:2024;s:8:\"car_type\";s:9:\"Hatchback\";s:16:\"daily_rent_price\";s:7:\"3500.00\";s:12:\"availability\";i:0;s:5:\"image\";s:56:\"Hatchback/Toyota/gregory-dupont-GMvThAzwACc-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:43:42\";s:10:\"updated_at\";s:19:\"2025-02-19 14:43:42\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:5;s:4:\"name\";s:17:\"Corolla Hatchback\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"fty6u7\";s:4:\"year\";i:2024;s:8:\"car_type\";s:9:\"Hatchback\";s:16:\"daily_rent_price\";s:7:\"3500.00\";s:12:\"availability\";i:0;s:5:\"image\";s:56:\"Hatchback/Toyota/gregory-dupont-GMvThAzwACc-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:43:42\";s:10:\"updated_at\";s:19:\"2025-02-19 14:43:42\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:5;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:6;s:4:\"name\";s:3:\"Fit\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"set678\";s:4:\"year\";i:2023;s:8:\"car_type\";s:9:\"Hatchback\";s:16:\"daily_rent_price\";s:7:\"3800.00\";s:12:\"availability\";i:1;s:5:\"image\";s:57:\"Hatchback/Honda/rati-kukhianidze-Zqkggjuco7o-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:44:47\";s:10:\"updated_at\";s:19:\"2025-02-19 14:44:47\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:6;s:4:\"name\";s:3:\"Fit\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"set678\";s:4:\"year\";i:2023;s:8:\"car_type\";s:9:\"Hatchback\";s:16:\"daily_rent_price\";s:7:\"3800.00\";s:12:\"availability\";i:1;s:5:\"image\";s:57:\"Hatchback/Honda/rati-kukhianidze-Zqkggjuco7o-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-19 14:44:47\";s:10:\"updated_at\";s:19:\"2025-02-19 14:44:47\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:6;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:13;s:4:\"name\";s:7:\"Corolla\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"t24cor\";s:4:\"year\";i:2024;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"2700.00\";s:12:\"availability\";i:0;s:5:\"image\";s:21:\"Sedan/Toyota/img1.jpg\";s:10:\"created_at\";s:19:\"2025-02-23 11:16:40\";s:10:\"updated_at\";s:19:\"2025-02-24 11:47:17\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:13;s:4:\"name\";s:7:\"Corolla\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"t24cor\";s:4:\"year\";i:2024;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"2700.00\";s:12:\"availability\";i:0;s:5:\"image\";s:21:\"Sedan/Toyota/img1.jpg\";s:10:\"created_at\";s:19:\"2025-02-23 11:16:40\";s:10:\"updated_at\";s:19:\"2025-02-24 11:47:17\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:7;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:14;s:4:\"name\";s:7:\"Corolla\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"bt7u9i\";s:4:\"year\";i:2022;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"2600.00\";s:12:\"availability\";i:1;s:5:\"image\";s:24:\"Sedan/Toyota/bestami.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:17:39\";s:10:\"updated_at\";s:19:\"2025-02-24 15:17:39\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:14;s:4:\"name\";s:7:\"Corolla\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"bt7u9i\";s:4:\"year\";i:2022;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"2600.00\";s:12:\"availability\";i:1;s:5:\"image\";s:24:\"Sedan/Toyota/bestami.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:17:39\";s:10:\"updated_at\";s:19:\"2025-02-24 15:17:39\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:8;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:15;s:4:\"name\";s:5:\"Civic\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"mt3et6\";s:4:\"year\";i:2023;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"2600.00\";s:12:\"availability\";i:1;s:5:\"image\";s:52:\"Sedan/Honda/somalia-veteran-dVmtrMw6H8A-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:21:52\";s:10:\"updated_at\";s:19:\"2025-02-24 15:21:52\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:15;s:4:\"name\";s:5:\"Civic\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"mt3et6\";s:4:\"year\";i:2023;s:8:\"car_type\";s:5:\"Sedan\";s:16:\"daily_rent_price\";s:7:\"2600.00\";s:12:\"availability\";i:1;s:5:\"image\";s:52:\"Sedan/Honda/somalia-veteran-dVmtrMw6H8A-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:21:52\";s:10:\"updated_at\";s:19:\"2025-02-24 15:21:52\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:10:\"\0*\0perPage\";i:9;s:14:\"\0*\0currentPage\";i:1;s:7:\"\0*\0path\";s:21:\"http://127.0.0.1:8000\";s:8:\"\0*\0query\";a:0:{}s:11:\"\0*\0fragment\";N;s:11:\"\0*\0pageName\";s:4:\"page\";s:10:\"onEachSide\";i:3;s:10:\"\0*\0options\";a:2:{s:4:\"path\";s:21:\"http://127.0.0.1:8000\";s:8:\"pageName\";s:4:\"page\";}s:10:\"\0*\0hasMore\";b:1;}', 1740391138),
('cars_page_2', 'O:31:\"Illuminate\\Pagination\\Paginator\":10:{s:8:\"\0*\0items\";O:39:\"Illuminate\\Database\\Eloquent\\Collection\":2:{s:8:\"\0*\0items\";a:2:{i:0;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:16;s:4:\"name\";s:4:\"CR-V\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"ntir78\";s:4:\"year\";i:2023;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"3000.00\";s:12:\"availability\";i:1;s:5:\"image\";s:47:\"SUV/Honda/alvano-putra-TdAatXFLWak-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:36:22\";s:10:\"updated_at\";s:19:\"2025-02-24 15:36:22\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:16;s:4:\"name\";s:4:\"CR-V\";s:5:\"brand\";s:5:\"Honda\";s:5:\"model\";s:6:\"ntir78\";s:4:\"year\";i:2023;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"3000.00\";s:12:\"availability\";i:1;s:5:\"image\";s:47:\"SUV/Honda/alvano-putra-TdAatXFLWak-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:36:22\";s:10:\"updated_at\";s:19:\"2025-02-24 15:36:22\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}i:1;O:14:\"App\\Models\\Car\":30:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:4:\"cars\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:19:\"preventsLazyLoading\";b:0;s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:28:\"\0*\0escapeWhenCastingToString\";b:0;s:13:\"\0*\0attributes\";a:11:{s:2:\"id\";i:17;s:4:\"name\";s:13:\"Corolla Cross\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"mtyg76\";s:4:\"year\";i:2024;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"3100.00\";s:12:\"availability\";i:1;s:5:\"image\";s:49:\"SUV/Toyota/gabriel-tovar-aNwtUkpb3cU-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:38:30\";s:10:\"updated_at\";s:19:\"2025-02-24 15:38:30\";}s:11:\"\0*\0original\";a:11:{s:2:\"id\";i:17;s:4:\"name\";s:13:\"Corolla Cross\";s:5:\"brand\";s:6:\"Toyota\";s:5:\"model\";s:6:\"mtyg76\";s:4:\"year\";i:2024;s:8:\"car_type\";s:3:\"SUV\";s:16:\"daily_rent_price\";s:7:\"3100.00\";s:12:\"availability\";i:1;s:5:\"image\";s:49:\"SUV/Toyota/gabriel-tovar-aNwtUkpb3cU-unsplash.jpg\";s:10:\"created_at\";s:19:\"2025-02-24 15:38:30\";s:10:\"updated_at\";s:19:\"2025-02-24 15:38:30\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:21:\"\0*\0attributeCastCache\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:13:\"usesUniqueIds\";b:0;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:8:{i:0;s:4:\"name\";i:1;s:5:\"brand\";i:2;s:5:\"model\";i:3;s:4:\"year\";i:4;s:8:\"car_type\";i:5;s:16:\"daily_rent_price\";i:6;s:12:\"availability\";i:7;s:5:\"image\";}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}}s:28:\"\0*\0escapeWhenCastingToString\";b:0;}s:10:\"\0*\0perPage\";i:9;s:14:\"\0*\0currentPage\";i:2;s:7:\"\0*\0path\";s:21:\"http://127.0.0.1:8000\";s:8:\"\0*\0query\";a:0:{}s:11:\"\0*\0fragment\";N;s:11:\"\0*\0pageName\";s:4:\"page\";s:10:\"onEachSide\";i:3;s:10:\"\0*\0options\";a:2:{s:4:\"path\";s:21:\"http://127.0.0.1:8000\";s:8:\"pageName\";s:4:\"page\";}s:10:\"\0*\0hasMore\";b:0;}', 1740391150),
('otp_greenhouse803@gmail.com', 'i:1113;', 1740475200);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int NOT NULL,
  `car_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `daily_rent_price` decimal(10,2) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `brand`, `model`, `year`, `car_type`, `daily_rent_price`, `availability`, `image`, `created_at`, `updated_at`) VALUES
(1, 'RAV4', 'Toyota', 'gt4rt7', 2021, 'SUV', 2500.00, 1, 'SUV/Toyota/krish-parmar-PmSwFm4Lw1c-unsplash.jpg', '2025-02-19 07:53:07', '2025-02-25 04:33:06'),
(2, 'Camry', 'Toyota', 'de4ty7', 2022, 'Sedan', 3000.00, 1, 'Sedan/Toyota/anthony-fomin-Rj_jGoAFgR4-unsplash.jpg', '2025-02-19 08:37:49', '2025-02-19 08:37:49'),
(3, 'CR-V', 'Honda', 'der54t', 2023, 'SUV', 2800.00, 0, 'SUV/Honda/a-n-v-e-s-h-vjwwhm3iTd4-unsplash.jpg', '2025-02-19 08:40:46', '2025-02-19 08:40:46'),
(4, 'Civic', 'Honda', 'w34frt', 2023, 'Sedan', 3200.00, 0, 'Sedan/Honda/brian-ZoIPyC_f1oE-unsplash.jpg', '2025-02-19 08:42:12', '2025-02-25 04:33:06'),
(5, 'Corolla Hatchback', 'Toyota', 'fty6u7', 2024, 'Hatchback', 3500.00, 0, 'Hatchback/Toyota/gregory-dupont-GMvThAzwACc-unsplash.jpg', '2025-02-19 08:43:42', '2025-02-19 08:43:42'),
(6, 'Fit', 'Honda', 'set678', 2023, 'Hatchback', 3800.00, 1, 'Hatchback/Honda/rati-kukhianidze-Zqkggjuco7o-unsplash.jpg', '2025-02-19 08:44:47', '2025-02-19 08:44:47'),
(13, 'Corolla', 'Toyota', 't24cor', 2024, 'Sedan', 2700.00, 0, 'Sedan/Toyota/img1.jpg', '2025-02-23 05:16:40', '2025-02-24 05:47:17'),
(14, 'Corolla', 'Toyota', 'bt7u9i', 2022, 'Sedan', 2600.00, 1, 'Sedan/Toyota/bestami.jpg', '2025-02-24 09:17:39', '2025-02-24 09:17:39'),
(15, 'Civic', 'Honda', 'mt3et6', 2023, 'Sedan', 2600.00, 1, 'Sedan/Honda/somalia-veteran-dVmtrMw6H8A-unsplash.jpg', '2025-02-24 09:21:52', '2025-02-24 09:21:52'),
(16, 'CR-V', 'Honda', 'ntir78', 2023, 'SUV', 3000.00, 1, 'SUV/Honda/alvano-putra-TdAatXFLWak-unsplash.jpg', '2025-02-24 09:36:22', '2025-02-24 09:36:22'),
(17, 'Corolla Cross', 'Toyota', 'mtyg76', 2024, 'SUV', 3100.00, 1, 'SUV/Toyota/gabriel-tovar-aNwtUkpb3cU-unsplash.jpg', '2025-02-24 09:38:30', '2025-02-24 09:38:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2025_02_18_162201_create_users_table', 1),
(4, '2025_02_18_162221_create_cars_table', 1),
(5, '2025_02_18_162245_create_rentals_table', 2),
(6, '2025_02_18_171315_create_sessions_table', 2),
(8, '2025_02_23_120307_add_status_to_rentals_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

DROP TABLE IF EXISTS `rentals`;
CREATE TABLE IF NOT EXISTS `rentals` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `car_id` bigint UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `total_cost` decimal(10,2) NOT NULL,
  `status` enum('Processing','Approved','Ongoing','Completed','Canceled') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Processing',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rentals_user_id_foreign` (`user_id`),
  KEY `rentals_car_id_foreign` (`car_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`id`, `user_id`, `car_id`, `start_date`, `end_date`, `total_cost`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, 1, '2025-02-22', '2025-02-24', 7500.00, 'Completed', '2025-02-22 04:08:27', '2025-02-25 04:33:06'),
(6, 1, 13, '2025-02-24', '2025-02-26', 8100.00, 'Ongoing', '2025-02-23 07:10:10', '2025-02-24 05:33:59'),
(11, 1, 4, '2025-02-25', '2025-02-28', 12800.00, 'Ongoing', '2025-02-23 11:10:40', '2025-02-25 04:33:06'),
(12, 7, 5, '2025-02-24', '2025-02-25', 7000.00, 'Ongoing', '2025-02-23 11:20:14', '2025-02-24 05:33:59');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8f63MnCk6flbkcHjILDH1WLNSpBIIaAzROOBnV5o', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOW41WFdLSXJqSG1oTjlhbDlpc1JXNWlITTNRVVAxM2I5YlRlV1FGbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1740468009),
('JCqxOHKRplsBb8sNPe9FgYdxBXgveqYSvbj9m9Id', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36 Edg/133.0.0.0', 'YTozOntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6IlZoQThFQ0pvVmg2cGVOYXpwNVU4RXhIa0hVWUhiSG1WaGZkZzBveGUiO30=', 1740476324),
('YbLE0OnZTJv9VyNHi9roMpo1fhoLyCj4qpgYjUec', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:135.0) Gecko/20100101 Firefox/135.0', 'YTo1OntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6IkhPdGliSWVXYlR3WHBBcmFTeFhrSE5FcXlzQVBnMXAwVEhjdU42dkwiO3M6Mzoib3RwIjtpOjM5OTQ7czoxMDoidXNlcl9lbWFpbCI7czoyMzoiZ3JlZW5ob3VzZTgwM0BnbWFpbC5jb20iO30=', 1740476218),
('YNBKQkgIocvAaZeD7bS3QLMGT8Cdu0WzQBH2cFru', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36 Edg/133.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkM2dmhvMlk1YWd6N2tINDEwNTU4ZDhZZlZ3aTNOcnNWRnRXTm4wdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1740474356);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','customer') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Rifat Bin Alam', 'greenhouse803@gmail.com', 'customer', '$2y$12$4UkQtQT3eR3AaWRBJ1w4auldO8eIm4gZz6pkjjFWnu.RPEbLBv.WW', '2025-02-19 09:47:34', '2025-02-25 09:09:48'),
(3, 'atiq', 'abirrifat21@gmail.com', 'admin', '$2y$12$3TOCHRCPxmpzsh/5KvnZ0ubfL.9DedYjMIBv08b1hIgFLeMw/LISO', '2025-02-22 05:48:03', '2025-02-22 05:48:03'),
(5, 'Nusrat Jahan', 'nusrat.it@purbanigroup.com', 'customer', '$2y$12$oT7aaNRe/DRgEddxuw4tDe0ZPiQsmhy4luSj.1MIu.ZDt.rkHDAsC', '2025-02-23 10:29:16', '2025-02-23 10:41:00'),
(7, 'Elias', 'elias.it@purbanigroup.com', 'customer', '$2y$12$VF0K.OHWvDuQCe50D3eJ6.jkuz63Q9STAZ4MzkgGlrqK9k.IX5CgS', '2025-02-23 11:17:58', '2025-02-23 11:17:58');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rentals`
--
ALTER TABLE `rentals`
  ADD CONSTRAINT `rentals_car_id_foreign` FOREIGN KEY (`car_id`) REFERENCES `cars` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rentals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

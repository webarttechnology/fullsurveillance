-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 10:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullsurveillance`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `uuid` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `uuid`, `quantity`, `created_at`, `updated_at`) VALUES
(198, 4, NULL, NULL, '1', '2023-11-30 23:49:07', '2023-11-30 23:49:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` text DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Camera', 'http://127.0.0.1:8000/admin/img/category/1648870062_logo.png', 'Active', '2023-11-21 00:53:27', '2023-11-22 00:51:11'),
(3, 'gdffhdfh', 'http://127.0.0.1:8000/admin/img/category/1058981929_logo.png', 'Active', '2023-11-22 22:25:43', '2023-11-22 22:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` enum('Pending','Resolve') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Safikul', 'safikul@gmail.com', 'Hello', 'hi', 'Pending', '2023-11-30 04:19:04', '2023-11-30 04:19:04'),
(2, 'gdffhdfh', 'test@gmail.com', 'Hello', 'hfgfj', 'Pending', '2023-11-30 04:21:17', '2023-11-30 04:21:17'),
(3, 'Safikul', 'admin@gmail.com', 'Hello', 'l][', 'Resolve', '2023-11-30 04:23:56', '2023-11-30 04:23:56'),
(4, 'Safikul', 'test@gmail.com', 'gfh', 'k;;;', 'Pending', '2023-11-30 04:51:08', '2023-11-30 04:51:08'),
(5, 'Safikul', 'safikul@gmail.com', 'Hello', 'k kjhkj', 'Pending', '2023-11-30 04:57:40', '2023-11-30 04:57:40'),
(6, 'Safikul', 'safikul@gmail.com', 'gjh', 'hj', 'Pending', '2023-11-30 04:59:22', '2023-11-30 04:59:22'),
(7, 'Safikul', 'safikul@gmail.com', 'gjh', 'hj', 'Pending', '2023-11-30 04:59:30', '2023-11-30 04:59:30'),
(8, 'gdffhdfh', 'test@gmail.com', 'jkllj', 'ljlkj', 'Pending', '2023-11-30 05:01:56', '2023-11-30 05:01:56'),
(9, 'Safikul', 'test@gmail.com', 'Hello', 'Hello Message', 'Pending', '2023-11-30 05:05:25', '2023-11-30 05:05:25'),
(10, 'Safikul', 'admin@gmail.com', 'gfh', 'hjk', 'Pending', '2023-11-30 05:06:57', '2023-11-30 05:06:57'),
(11, 'Safikul', 'test@gmail.com', 'Hello', 'hgkhkkghk', 'Pending', '2023-11-30 05:23:46', '2023-11-30 05:23:46'),
(12, 'Safikul', 'test@gmail.com', 'ghkhk', 'gkgkhk', 'Pending', '2023-11-30 05:25:26', '2023-11-30 05:25:26'),
(13, 'gdffhdfh', 'test@gmail.com', 'gfh', 'hjj', 'Pending', '2023-11-30 05:28:10', '2023-11-30 05:28:10'),
(14, 'Safikul', 'admin@gmail.com', 'Hello', 'fggjj', 'Pending', '2023-12-01 00:24:25', '2023-12-01 00:24:25'),
(15, 'Safikul', 'safikul@gmail.com', 'gfh', 'fggh', 'Pending', '2023-12-01 00:26:21', '2023-12-01 00:26:21'),
(16, 'gdffhdfh', 'admin@gmail.com', 'Hello', 'fggj', 'Pending', '2023-12-01 00:27:24', '2023-12-01 00:27:24'),
(17, 'Safikul', 'test@gmail.com', 'Hello', 'hfj', 'Pending', '2023-12-01 00:30:09', '2023-12-01 00:30:09'),
(18, 'Safikul', 'test@gmail.com', 'fgjgfj', 'fjkgk', 'Pending', '2023-12-01 00:32:15', '2023-12-01 00:32:15'),
(19, 'Quyn Finley', 'xitagaru@mailinator.com', '213524125', 'Veniam officia sit', 'Pending', '2023-12-01 02:11:57', '2023-12-01 02:11:57'),
(20, 'Dalton Yang', 'zuzare@mailinator.com', '1234567890', 'Dolore quia dolor et', 'Pending', '2023-12-01 02:13:37', '2023-12-01 02:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `coupon_name` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `quntity` varchar(255) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `minimum_amount` varchar(255) DEFAULT NULL,
  `maximum_discount_amount` varchar(255) DEFAULT NULL,
  `type` enum('Percentage','Fixed') DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `user_id`, `coupon_name`, `amount`, `quntity`, `start_date`, `end_date`, `minimum_amount`, `maximum_discount_amount`, `type`, `status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Safikul', '50', NULL, '2023-11-01', '2023-11-30', '100', '10', 'Percentage', 'Active', '2023-11-26 23:52:27', '2023-11-27 00:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_11_17_110931_create_permission_tables', 1),
(11, '2023_11_21_053744_create_categories_table', 2),
(12, '2023_11_21_092152_create_sub_categories_table', 3),
(13, '2023_11_21_103632_create_products_table', 4),
(14, '2023_11_22_035412_create_product_images_table', 5),
(16, '2023_11_23_040144_create_carts_table', 6),
(17, '2023_11_24_095109_create_wishlists_table', 7),
(20, '2023_11_27_040847_create_coupons_table', 8),
(25, '2023_11_27_094520_create_orders_table', 9),
(26, '2023_11_27_094521_create_order_billing_addresses_table', 9),
(27, '2023_11_27_094541_create_order_ship_addresses_table', 9),
(28, '2023_11_27_094707_create_order_details_table', 9),
(29, '2023_11_30_092746_create_contacts_table', 10),
(30, '2023_11_30_065648_create_ratings_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `coupon_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `coupon_amount` varchar(255) DEFAULT NULL,
  `payable_amount` varchar(255) DEFAULT NULL,
  `order_generate_id` varchar(255) DEFAULT NULL,
  `payment_gateway_id` varchar(255) DEFAULT NULL,
  `order_note` text DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `type` enum('COD','Online') DEFAULT NULL,
  `status` enum('Pending','Success','Delivered') DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `coupon_id`, `amount`, `coupon_amount`, `payable_amount`, `order_generate_id`, `payment_gateway_id`, `order_note`, `method`, `type`, `status`, `created_at`, `updated_at`) VALUES
(6, 4, NULL, '390', '0', '390', '601255', 'pi_3OHOQpSCgMR7q6bk1u3e7T7y', 'Dignissimos excepteu', 'stripe', 'Online', 'Success', '2023-11-28 04:52:16', '2023-11-28 04:53:15'),
(7, 4, NULL, '180', '0', '180', '658901', NULL, 'Quasi sint in neque', 'stripe', 'Online', 'Pending', '2023-11-29 02:50:15', '2023-11-29 02:50:15'),
(8, 4, NULL, '90', '0', '90', '580508', NULL, 'Sunt quae enim et s', 'stripe', 'Online', 'Pending', '2023-11-29 02:59:50', '2023-11-29 02:59:50'),
(9, 4, NULL, '90', '0', '90', '612761', NULL, 'Qui occaecat elit c', 'stripe', 'Online', 'Pending', '2023-11-29 03:06:35', '2023-11-29 03:06:35'),
(10, 4, NULL, '90', '0', '90', '553023', NULL, 'Mollit quia tenetur', 'stripe', 'Online', 'Pending', '2023-11-29 03:11:42', '2023-11-29 03:11:42'),
(11, 4, NULL, '90', '0', '90', '953639', NULL, 'Ut praesentium aut e', 'paypal', 'Online', 'Pending', '2023-11-30 00:33:19', '2023-11-30 00:33:19'),
(12, 4, NULL, '90', '0', '90', '430902', NULL, 'Ut praesentium aut e', 'paypal', 'Online', 'Success', '2023-11-30 00:39:31', '2023-11-30 00:45:11'),
(13, 1, NULL, '90', '0', '90', '346312', NULL, 'Quis beatae minima d', 'paypal', 'Online', 'Pending', '2023-11-30 00:47:42', '2023-11-30 00:47:42'),
(14, 1, NULL, '90', '0', '90', '176444', NULL, 'Praesentium animi q', 'paypal', 'Online', 'Pending', '2023-11-30 00:49:57', '2023-11-30 00:49:57'),
(15, 1, NULL, '90', '0', '90', '349984', 'PAYID-MVUCTWY3DX001727E313530J', 'Id veniam suscipit', 'paypal', 'Online', 'Success', '2023-11-30 00:51:11', '2023-11-30 00:51:27'),
(16, 4, NULL, '90', '0', '90', '681860', 'pi_3OIODgSCgMR7q6bk1FZVt1XF', 'Aliquid atque totam', 'stripe', 'Online', 'Success', '2023-11-30 22:50:46', '2023-11-30 22:52:57'),
(17, 4, NULL, '470', '0', '470', '725721', 'pi_3OIOgPSCgMR7q6bk1qauWk2j', 'Quis assumenda conse', 'stripe', 'Online', 'Success', '2023-11-30 23:20:31', '2023-11-30 23:22:56'),
(18, 4, NULL, '190', '0', '190', '350077', 'PAYID-MVUWOOI19519856GE010301R', 'Fugit distinctio E', 'paypal', 'Online', 'Success', '2023-11-30 23:25:18', '2023-11-30 23:25:39'),
(19, 4, NULL, '190', '0', '190', '842119', 'PAYID-MVUWPOQ3R058725WK732130E', 'Velit est natus mag', 'paypal', 'Online', 'Success', '2023-11-30 23:27:27', '2023-11-30 23:27:45'),
(20, 4, NULL, '190', '0', '190', '166890', 'PAYID-MVUWTXY3M370480EG077321V', 'Modi laboris qui dol', 'paypal', 'Online', 'Success', '2023-11-30 23:36:36', '2023-11-30 23:36:52'),
(21, 4, NULL, '100', '0', '100', '788012', 'PAYID-MVUXTDY0GK93611PF791402J', 'Sed est architecto', 'paypal', 'Online', 'Success', '2023-12-01 00:43:32', '2023-12-01 00:43:49'),
(22, 4, NULL, '90', '0', '90', '601801', 'PAYID-MVUYNBQ5GS3238997035001F', 'Adipisci in ipsam qu', 'paypal', 'Online', 'Success', '2023-12-01 01:38:51', '2023-12-01 01:39:07'),
(23, 4, NULL, '90', '0', '90', '567020', 'PAYID-MVUY6RQ5XL05324TT0772914', 'Quaerat nihil mollit', 'paypal', 'Online', 'Success', '2023-12-01 02:16:11', '2023-12-01 02:16:28'),
(24, 4, NULL, '90', '0', '90', '270105', 'PAYID-MVUY7QY6W604388N2479800T', 'Enim porro et aut ne', 'paypal', 'Online', 'Success', '2023-12-01 02:18:16', '2023-12-01 02:18:36'),
(25, 4, NULL, '90', '0', '90', '441044', 'PAYID-MVUZCRI5DV55646CH402533E', 'Architecto minus ill', 'paypal', 'Online', 'Success', '2023-12-01 02:24:42', '2023-12-01 02:25:03'),
(26, 4, NULL, '90', '0', '90', '108368', 'PAYID-MVUZDRY5RE043035T1961304', 'Laborum voluptas quo', 'paypal', 'Online', 'Success', '2023-12-01 02:26:53', '2023-12-01 02:27:07'),
(27, 4, NULL, '90', '0', '90', '243189', 'PAYID-MVU2RKQ4MC39406U44143548', 'Qui nostrud excepteu', 'paypal', 'Online', 'Success', '2023-12-01 04:04:30', '2023-12-01 04:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `order_billing_addresses`
--

CREATE TABLE `order_billing_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `street` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_billing_addresses`
--

INSERT INTO `order_billing_addresses` (`id`, `user_id`, `order_id`, `f_name`, `l_name`, `company_name`, `country`, `street`, `city`, `district`, `zip`, `mobile`, `email`, `created_at`, `updated_at`) VALUES
(6, 4, 6, 'Vernon', 'Cabrera', 'Wilder Guy Trading', 'Quia veniam incidid', 'Voluptates proident', 'Eum ut inventore lab', 'Quia veniam dicta m', 'Excepteur veritatis', '+1 (581) 568-1986', 'vefef@mailinator.com', '2023-11-28 04:52:16', '2023-11-28 04:52:16'),
(7, 4, 7, 'Adrian', 'Burt', 'Reynolds Montoya Inc', 'Quos beatae doloribu', 'Laborum natus iste s', 'Non sit sunt quis eo', 'Rem reprehenderit e', 'Quisquam sunt odio a', '+1 (805) 731-9698', 'xiqu@mailinator.com', '2023-11-29 02:50:15', '2023-11-29 02:50:15'),
(8, 4, 8, 'Geoffrey', 'Hopkins', 'Ramos Jimenez Co', 'Pariatur Odio magni', 'Quaerat ullamco sed', 'Commodo ut distincti', 'Dolor ea sint conseq', 'Nostrum quo velit it', '+1 (846) 174-5435', 'muwaseryx@mailinator.com', '2023-11-29 02:59:50', '2023-11-29 02:59:50'),
(9, 4, 9, 'Lee', 'Blanchard', 'Burns Walters Co', 'Quibusdam provident', 'Voluptatibus volupta', 'Aut adipisci dolorem', 'Aliquid laborum Cum', 'Rem tempor numquam m', '+1 (358) 328-2979', 'fabogaro@mailinator.com', '2023-11-29 03:06:35', '2023-11-29 03:06:35'),
(10, 4, 10, 'Tasha', 'Mueller', 'Wells Le Co', 'Dolorum et doloremqu', 'Esse reprehenderit p', 'Veniam omnis ad in', 'Nihil omnis molestia', 'Iusto quo dolorem qu', '+1 (287) 865-5203', 'bekicowy@mailinator.com', '2023-11-29 03:11:42', '2023-11-29 03:11:42'),
(11, 4, 11, 'Lydia', 'Sherman', 'Walsh Espinoza Traders', 'Error sint ab aut es', 'Quia non tempor sunt', 'Qui reprehenderit e', 'Est ad qui eu velit', 'Aspernatur ratione p', '+1 (498) 173-4893', 'rivyg@mailinator.com', '2023-11-30 00:33:19', '2023-11-30 00:33:19'),
(12, 4, 12, 'Lydia', 'Sherman', 'Walsh Espinoza Traders', 'Error sint ab aut es', 'Quia non tempor sunt', 'Qui reprehenderit e', 'Est ad qui eu velit', 'Aspernatur ratione p', '+1 (498) 173-4893', 'rivyg@mailinator.com', '2023-11-30 00:39:31', '2023-11-30 00:39:31'),
(13, 1, 13, 'Hammett', 'Petty', 'Prince and Harris Associates', 'Sunt vel a nulla in', 'Laborum Eu quidem t', 'Modi optio dolore m', 'Consequatur aliqua', 'Dolore veniam exerc', '+1 (172) 896-2286', 'vovul@mailinator.com', '2023-11-30 00:47:42', '2023-11-30 00:47:42'),
(14, 1, 14, 'Nero', 'Nash', 'Fields Ochoa Co', 'Sint aperiam sunt a', 'In nostrum laborum', 'Ab laboriosam qui e', 'Eos sapiente dolore', 'Nostrud iste vero la', '+1 (866) 575-2415', 'caqofidus@mailinator.com', '2023-11-30 00:49:57', '2023-11-30 00:49:57'),
(15, 1, 15, 'Cathleen', 'Beasley', 'Myers and Cooley Traders', 'Qui eaque adipisicin', 'Autem quis architect', 'Amet voluptate nisi', 'Qui id omnis obcaec', 'Tenetur nostrum lore', '+1 (431) 853-3543', 'vewilys@mailinator.com', '2023-11-30 00:51:11', '2023-11-30 00:51:11'),
(16, 4, 16, 'Jared', 'Vasquez', 'Ortiz and Barber LLC', 'Dolore laborum eveni', 'Recusandae Enim eni', 'Ea voluptate sit omn', 'Non sit illum rerum', 'Commodi obcaecati ex', '+1 (211) 721-3478', 'polywejyl@mailinator.com', '2023-11-30 22:50:46', '2023-11-30 22:50:46'),
(17, 4, 17, 'Brynne', 'Barton', 'Conner and Mccall Plc', 'Sed unde laudantium', 'Quia et sunt odit ve', 'Est sit nobis reru', 'Aliquid dicta sunt', 'Sint ex vel omnis ex', '+1 (751) 421-1556', 'cuky@mailinator.com', '2023-11-30 23:20:31', '2023-11-30 23:20:31'),
(18, 4, 18, 'Kathleen', 'Glover', 'Holloway Rivers Plc', 'Dolores neque sit ve', 'Facere mollit tempor', 'Perspiciatis fugiat', 'Eos magna aut saepe', 'Quis labore dolores', '+1 (223) 443-2008', 'loxabu@mailinator.com', '2023-11-30 23:25:18', '2023-11-30 23:25:18'),
(19, 4, 19, 'Stacey', 'Dillon', 'Alexander Hatfield Inc', 'Quaerat ea sunt dele', 'Ut itaque quisquam a', 'Ipsa sunt officiis', 'Tempor voluptatibus', 'Rerum repudiandae qu', '+1 (458) 457-8467', 'kopujel@mailinator.com', '2023-11-30 23:27:27', '2023-11-30 23:27:27'),
(20, 4, 20, 'Elvis', 'George', 'Carpenter and Contreras Associates', 'Aliquip consequatur', 'Optio omnis repudia', 'Unde sit architecto', 'Expedita excepturi e', 'Tempore quaerat neq', '+1 (696) 554-9061', 'hahaqy@mailinator.com', '2023-11-30 23:36:36', '2023-11-30 23:36:36'),
(21, 4, 21, 'Raya', 'Mcintosh', 'Roy Patrick Trading', 'Sit sed tenetur volu', 'Deserunt consequatur', 'Vel et adipisicing v', 'Doloremque accusamus', 'Aliquip perferendis', '+1 (926) 125-6112', 'bapo@mailinator.com', '2023-12-01 00:43:32', '2023-12-01 00:43:32'),
(22, 4, 22, 'Ahmed', 'Harris', 'Stokes and Franklin Inc', 'Lorem asperiores aut', 'Est nesciunt esse', 'Voluptatem lorem dig', 'Sit et voluptatem do', 'Dolores eveniet lib', '+1 (721) 124-3707', 'kice@mailinator.com', '2023-12-01 01:38:51', '2023-12-01 01:38:51'),
(23, 4, 23, 'Forrest', 'Woodard', 'Bauer Gentry Trading', 'Qui est sunt ea aspe', 'Et eveniet labore d', 'Officia sed sit dolo', 'Pariatur Pariatur', 'Laboriosam ad nemo', '+1 (684) 458-2112', 'neve@mailinator.com', '2023-12-01 02:16:11', '2023-12-01 02:16:11'),
(24, 4, 24, 'Mercedes', 'Keller', 'Steele and Mueller Traders', 'Consequatur necessi', 'Est lorem dolores qu', 'Nam voluptates ipsa', 'Voluptatem Est tota', 'Culpa illum rerum n', '+1 (696) 932-6189', 'gixugupym@mailinator.com', '2023-12-01 02:18:16', '2023-12-01 02:18:16'),
(25, 4, 25, 'Acton', 'Barton', 'Barlow Collins Traders', 'Est est minima dolo', 'Dolor proident solu', 'Aliqua Iste consequ', 'Quis qui vel eu qui', 'Nemo voluptatibus iu', '+1 (803) 611-4151', 'tupofexir@mailinator.com', '2023-12-01 02:24:42', '2023-12-01 02:24:42'),
(26, 4, 26, 'Shana', 'Morgan', 'Avila Mann Associates', 'Et mollit neque dolo', 'Sunt facilis molesti', 'Voluptatem similiqu', 'Et cupiditate nesciu', 'Nulla quisquam susci', '+1 (787) 678-8785', 'nynopud@mailinator.com', '2023-12-01 02:26:53', '2023-12-01 02:26:53'),
(27, 4, 27, 'Indira', 'Foley', 'Holman and Mathews Plc', 'Mollitia est exercit', 'Dolores quas animi', 'Quos optio a accusa', 'Exercitation asperna', 'Irure ex cum ullam e', '+1 (558) 848-5474', 'hajyvy@mailinator.com', '2023-12-01 04:04:30', '2023-12-01 04:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_name` text DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `total_amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `user_id`, `order_id`, `product_id`, `product_name`, `amount`, `quantity`, `total_amount`, `created_at`, `updated_at`) VALUES
(6, 4, 6, 1, 'Game Triger Finger New Insulated PH-X', '100', '3', '300', '2023-11-28 04:52:16', '2023-11-28 04:52:16'),
(7, 4, 6, 4, 'New Model Camera', '90', '1', '90', '2023-11-28 04:52:17', '2023-11-28 04:52:17'),
(8, 4, 7, 4, 'New Model Camera', '90', '2', '180', '2023-11-29 02:50:15', '2023-11-29 02:50:15'),
(9, 4, 8, 4, 'New Model Camera', '90', '1', '90', '2023-11-29 02:59:50', '2023-11-29 02:59:50'),
(10, 4, 9, 4, 'New Model Camera', '90', '1', '90', '2023-11-29 03:06:35', '2023-11-29 03:06:35'),
(11, 4, 10, 4, 'New Model Camera', '90', '1', '90', '2023-11-29 03:11:42', '2023-11-29 03:11:42'),
(12, 4, 11, 4, 'New Model Camera', '90', '1', '90', '2023-11-30 00:33:19', '2023-11-30 00:33:19'),
(13, 4, 12, 4, 'New Model Camera', '90', '1', '90', '2023-11-30 00:39:31', '2023-11-30 00:39:31'),
(14, 1, 13, 4, 'New Model Camera', '90', '1', '90', '2023-11-30 00:47:42', '2023-11-30 00:47:42'),
(15, 1, 14, 4, 'New Model Camera', '90', '1', '90', '2023-11-30 00:49:57', '2023-11-30 00:49:57'),
(16, 1, 15, 4, 'New Model Camera', '90', '1', '90', '2023-11-30 00:51:11', '2023-11-30 00:51:11'),
(17, 4, 16, 4, 'New Model Camera', '90', '1', '90', '2023-11-30 22:50:46', '2023-11-30 22:50:46'),
(18, 4, 17, 1, 'Game Triger Finger New Camera', '100', '2', '200', '2023-11-30 23:20:31', '2023-11-30 23:20:31'),
(19, 4, 17, 4, 'New Model Camera', '90', '3', '270', '2023-11-30 23:20:31', '2023-11-30 23:20:31'),
(20, 4, 18, 1, 'Game Triger Finger New Camera', '100', '1', '100', '2023-11-30 23:25:18', '2023-11-30 23:25:18'),
(21, 4, 18, 4, 'New Model Camera', '90', '1', '90', '2023-11-30 23:25:18', '2023-11-30 23:25:18'),
(22, 4, 19, 1, 'Game Triger Finger New Camera', '100', '1', '100', '2023-11-30 23:27:27', '2023-11-30 23:27:27'),
(23, 4, 19, 4, 'New Model Camera', '90', '1', '90', '2023-11-30 23:27:27', '2023-11-30 23:27:27'),
(24, 4, 20, 1, 'Game Triger Finger New Camera', '100', '1', '100', '2023-11-30 23:36:36', '2023-11-30 23:36:36'),
(25, 4, 20, 4, 'New Model Camera', '90', '1', '90', '2023-11-30 23:36:36', '2023-11-30 23:36:36'),
(26, 4, 21, 1, 'Game Triger Finger New Camera', '100', '1', '100', '2023-12-01 00:43:32', '2023-12-01 00:43:32'),
(27, 4, 22, 4, 'New Model Camera', '90', '1', '90', '2023-12-01 01:38:51', '2023-12-01 01:38:51'),
(28, 4, 23, 4, 'New Model Camera', '90', '1', '90', '2023-12-01 02:16:11', '2023-12-01 02:16:11'),
(29, 4, 24, 4, 'New Model Camera', '90', '1', '90', '2023-12-01 02:18:16', '2023-12-01 02:18:16'),
(30, 4, 25, 4, 'New Model Camera', '90', '1', '90', '2023-12-01 02:24:42', '2023-12-01 02:24:42'),
(31, 4, 26, 4, 'New Model Camera', '90', '1', '90', '2023-12-01 02:26:53', '2023-12-01 02:26:53'),
(32, 4, 27, 4, 'New Model Camera', '90', '1', '90', '2023-12-01 04:04:30', '2023-12-01 04:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `order_ship_addresses`
--

CREATE TABLE `order_ship_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `street` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_ship_addresses`
--

INSERT INTO `order_ship_addresses` (`id`, `user_id`, `order_id`, `f_name`, `l_name`, `company_name`, `country`, `street`, `city`, `district`, `zip`, `mobile`, `email`, `created_at`, `updated_at`) VALUES
(6, 4, 6, 'Oprah', 'Best', 'Lee Nicholson Associates', 'Libero repellendus', 'Mollit nulla qui qui', 'Doloribus optio asp', 'Consectetur consequ', 'Ipsum error aliquam', '+1 (641) 116-3189', 'lywyvu@mailinator.com', '2023-11-28 04:52:16', '2023-11-28 04:52:16'),
(7, 4, 7, 'Beatrice', 'Hodges', 'Merrill Wade LLC', 'Quia eius corrupti', 'Voluptas porro nobis', 'Omnis voluptatem qui', 'Eaque duis sint nihi', 'Et ut accusamus aut', '+1 (605) 191-7662', 'wehy@mailinator.com', '2023-11-29 02:50:15', '2023-11-29 02:50:15'),
(8, 4, 8, 'Geoffrey', 'Hopkins', 'Ramos Jimenez Co', 'Pariatur Odio magni', 'Quaerat ullamco sed', 'Commodo ut distincti', 'Dolor ea sint conseq', 'Nostrum quo velit it', '+1 (846) 174-5435', 'muwaseryx@mailinator.com', '2023-11-29 02:59:50', '2023-11-29 02:59:50'),
(9, 4, 9, 'Lee', 'Blanchard', 'Burns Walters Co', 'Quibusdam provident', 'Voluptatibus volupta', 'Aut adipisci dolorem', 'Aliquid laborum Cum', 'Rem tempor numquam m', '+1 (358) 328-2979', 'fabogaro@mailinator.com', '2023-11-29 03:06:35', '2023-11-29 03:06:35'),
(10, 4, 10, 'Beatrice', 'French', 'Wiggins Casey Traders', 'Quae cumque excepteu', 'Aut sunt dignissimo', 'Sit praesentium opti', 'Ullamco corrupti mo', 'Cupidatat illum qui', '+1 (857) 902-1689', 'qajis@mailinator.com', '2023-11-29 03:11:42', '2023-11-29 03:11:42'),
(11, 4, 11, 'Dorian', 'Sloan', 'Fowler Everett Plc', 'Qui do dolore laboru', 'Cum dolore ipsam ull', 'Facere excepturi nul', 'Iste earum laudantiu', 'Id deserunt natus eu', '+1 (224) 115-6103', 'suqekobu@mailinator.com', '2023-11-30 00:33:19', '2023-11-30 00:33:19'),
(12, 4, 12, 'Dorian', 'Sloan', 'Fowler Everett Plc', 'Qui do dolore laboru', 'Cum dolore ipsam ull', 'Facere excepturi nul', 'Iste earum laudantiu', 'Id deserunt natus eu', '+1 (224) 115-6103', 'suqekobu@mailinator.com', '2023-11-30 00:39:31', '2023-11-30 00:39:31'),
(13, 1, 13, 'Yoshi', 'Whitley', 'Witt and Hyde Co', 'Tempora optio commo', 'Recusandae Ut iste', 'Ex laudantium delec', 'Error sapiente moles', 'Distinctio Perspici', '+1 (148) 793-2731', 'begoxob@mailinator.com', '2023-11-30 00:47:42', '2023-11-30 00:47:42'),
(14, 1, 14, 'Nero', 'Nash', 'Fields Ochoa Co', 'Sint aperiam sunt a', 'In nostrum laborum', 'Ab laboriosam qui e', 'Eos sapiente dolore', 'Nostrud iste vero la', '+1 (866) 575-2415', 'caqofidus@mailinator.com', '2023-11-30 00:49:57', '2023-11-30 00:49:57'),
(15, 1, 15, 'Omar', 'Holman', 'White and Fletcher Associates', 'Non id similique quo', 'Repellendus Volupta', 'Culpa tenetur conse', 'Dolor vel id perspic', 'Consequatur natus r', '+1 (476) 945-8785', 'zomaj@mailinator.com', '2023-11-30 00:51:11', '2023-11-30 00:51:11'),
(16, 4, 16, 'Jared', 'Vasquez', 'Ortiz and Barber LLC', 'Dolore laborum eveni', 'Recusandae Enim eni', 'Ea voluptate sit omn', 'Non sit illum rerum', 'Commodi obcaecati ex', '+1 (211) 721-3478', 'polywejyl@mailinator.com', '2023-11-30 22:50:46', '2023-11-30 22:50:46'),
(17, 4, 17, 'Hermione', 'Lynn', 'Woodard Bond LLC', 'Voluptas eveniet mo', 'Nemo nostrum et aute', 'Velit quos dolor eo', 'Enim ea enim ad non', 'Maxime ipsum aperiam', '+1 (164) 609-2886', 'wywykixope@mailinator.com', '2023-11-30 23:20:31', '2023-11-30 23:20:31'),
(18, 4, 18, 'Kathleen', 'Glover', 'Holloway Rivers Plc', 'Dolores neque sit ve', 'Facere mollit tempor', 'Perspiciatis fugiat', 'Eos magna aut saepe', 'Quis labore dolores', '+1 (223) 443-2008', 'loxabu@mailinator.com', '2023-11-30 23:25:18', '2023-11-30 23:25:18'),
(19, 4, 19, 'Katell', 'Poole', 'Walter and Wolf Co', 'Reiciendis sunt adip', 'Eos et laborum ipsa', 'Et architecto occaec', 'Accusantium aliquam', 'Sed quasi laboris pl', '+1 (612) 737-1414', 'kacic@mailinator.com', '2023-11-30 23:27:27', '2023-11-30 23:27:27'),
(20, 4, 20, 'Kiayada', 'Rice', 'Hays and Avila Inc', 'Non ut aut voluptate', 'Quisquam asperiores', 'Debitis impedit ani', 'Corrupti aut offici', 'Odit cupidatat assum', '+1 (446) 898-1845', 'jypapoj@mailinator.com', '2023-11-30 23:36:36', '2023-11-30 23:36:36'),
(21, 4, 21, 'Raya', 'Mcintosh', 'Roy Patrick Trading', 'Sit sed tenetur volu', 'Deserunt consequatur', 'Vel et adipisicing v', 'Doloremque accusamus', 'Aliquip perferendis', '+1 (926) 125-6112', 'bapo@mailinator.com', '2023-12-01 00:43:32', '2023-12-01 00:43:32'),
(22, 4, 22, 'Aileen', 'Chang', 'Hinton and Atkinson Co', 'Dolore molestiae qui', 'Perspiciatis sed en', 'Vero laboriosam mag', 'Saepe molestiae nesc', 'Est sed laboriosam', '+1 (675) 195-1827', 'wiqedovyd@mailinator.com', '2023-12-01 01:38:51', '2023-12-01 01:38:51'),
(23, 4, 23, 'Dustin', 'Mason', 'Ball and Workman Inc', 'Sed quae suscipit no', 'Quisquam sit ut in i', 'Qui est iure volupt', 'Esse eiusmod quibusd', 'Aute sunt sed facer', '+1 (766) 252-3007', 'cujanytuzu@mailinator.com', '2023-12-01 02:16:11', '2023-12-01 02:16:11'),
(24, 4, 24, 'Delilah', 'Kline', 'Sellers Rhodes Trading', 'Laboris esse elit m', 'Voluptate aut volupt', 'Eos in ut temporibus', 'Accusantium eum dolo', 'Nesciunt sit iure v', '+1 (203) 995-9799', 'gazinyxami@mailinator.com', '2023-12-01 02:18:16', '2023-12-01 02:18:16'),
(25, 4, 25, 'Dakota', 'Brewer', 'Tanner Kirkland Plc', 'Temporibus non eum o', 'Molestiae numquam il', 'Qui obcaecati et qui', 'Nobis ut libero dign', 'Eveniet voluptate i', '+1 (776) 992-7289', 'dibife@mailinator.com', '2023-12-01 02:24:42', '2023-12-01 02:24:42'),
(26, 4, 26, 'Charlotte', 'Woods', 'Park Butler Plc', 'Voluptas dignissimos', 'Odio quia aliquid am', 'Est ratione et quam', 'In autem minim fugit', 'Sint quam reiciendis', '+1 (335) 624-4924', 'myde@mailinator.com', '2023-12-01 02:26:53', '2023-12-01 02:26:53'),
(27, 4, 27, 'Indira', 'Foley', 'Holman and Mathews Plc', 'Mollitia est exercit', 'Dolores quas animi', 'Quos optio a accusa', 'Exercitation asperna', 'Irure ex cum ullam e', '+1 (558) 848-5474', 'hajyvy@mailinator.com', '2023-12-01 04:04:30', '2023-12-01 04:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `actual_price` varchar(255) DEFAULT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `desc` longtext DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `name`, `actual_price`, `discount_price`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Game Triger Finger New Camera', '150', '100', '<p>Hello Safikul</p>', 'Active', '2023-11-21 06:23:33', '2023-11-30 01:12:59'),
(4, 2, 2, 'New Model Camera', '120', '90', '<p>Hello Safikul</p>', 'Active', '2023-11-21 06:23:33', '2023-11-22 00:51:37');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `img`, `color`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'http://127.0.0.1:8000/admin/img/product/1562026947_camera3.png', 'White', 'Active', '2023-11-21 23:05:31', '2023-11-22 01:03:19'),
(4, 4, 'http://127.0.0.1:8000/admin/img/product/1562026947_camera3.png', 'White', 'Active', '2023-11-21 23:05:31', '2023-11-22 01:03:19');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `star_rating` int(11) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2023-11-20 04:05:14', '2023-11-20 04:05:14'),
(2, 'User', 'web', '2023-11-20 04:05:14', '2023-11-20 04:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` text DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `img`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'fgfd11', 'http://127.0.0.1:8000/admin/img/category/1058702207_logo.png', 'Active', '2023-11-21 04:46:59', '2023-11-21 05:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` enum('Active','Inactive','','') DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `mobile`, `password`, `deleted_at`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, NULL, '$2y$12$jt6Sc70ZM/ESILBltFgL1.kOKfGXoulEFSm9enXMmcz7FhYLS5aJm', NULL, NULL, NULL, '2023-11-20 04:05:14', '2023-11-21 01:45:56'),
(2, 'Safikul Islam', 'safikul@gmail.com', NULL, '9647088307', '$2y$12$mNPxR9wSdt83rC07Vmqdwu1AFAHR7KjpUaSq2OhJTMrvhNkKjXC8C', NULL, 'Active', NULL, '2023-11-20 04:07:58', '2023-11-21 01:38:19'),
(4, 'Safikul', 'safikul1@gmail.com', NULL, '0123456789', '$2y$12$YxctVagwdkIRe4TdOm8M9.ctNZohAKXoEz6ppJpjxIRB7LvS7B3nu', NULL, 'Active', NULL, '2023-11-20 23:22:45', '2023-11-21 06:52:25'),
(5, 'testtes', 'teste@gmail.com', NULL, '9123456789', '$2y$12$L3e8Pb9sZhqt369APQS14uubQzcoh5obt8/LXNdb7EsnOtutdVRc2', NULL, 'Active', NULL, '2023-11-21 01:12:30', '2023-11-21 01:12:30'),
(6, 'Safikul', 'safikul12@gmail.com', NULL, '0123459789', '$2y$12$2N25JEhwX5o2r93vackBl.yUrMc.eKpIUJxmsJNASatyPRS59f2e2', NULL, 'Active', NULL, '2023-11-22 04:27:43', '2023-11-22 04:27:43'),
(7, 'Safikul', 'safikul22@gmail.com', NULL, '2012548741', '$2y$12$3jSOJvmUxaI7uQKfWbCoBOaFKuth10nvDf2d6kAMBdehZFPSU0wpq', NULL, 'Active', NULL, '2023-11-24 01:30:40', '2023-11-24 01:30:40');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `uuid` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coupons_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_billing_addresses`
--
ALTER TABLE `order_billing_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_billing_addresses_user_id_foreign` (`user_id`),
  ADD KEY `order_billing_addresses_order_id_foreign` (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_user_id_foreign` (`user_id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `order_ship_addresses`
--
ALTER TABLE `order_ship_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_ship_addresses_user_id_foreign` (`user_id`),
  ADD KEY `order_ship_addresses_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`),
  ADD KEY `ratings_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_billing_addresses`
--
ALTER TABLE `order_billing_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `order_ship_addresses`
--
ALTER TABLE `order_ship_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `coupons`
--
ALTER TABLE `coupons`
  ADD CONSTRAINT `coupons_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_billing_addresses`
--
ALTER TABLE `order_billing_addresses`
  ADD CONSTRAINT `order_billing_addresses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_billing_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `order_details_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_ship_addresses`
--
ALTER TABLE `order_ship_addresses`
  ADD CONSTRAINT `order_ship_addresses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_ship_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

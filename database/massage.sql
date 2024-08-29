-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Aug 25, 2024 at 05:37 AM
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
-- Database: `massage`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `street_address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(7, 'Tokuyo', 'tokuyo', NULL, 1, '2024-08-25 03:14:14', '2024-08-25 03:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('0f0c349cf3dcdcea272cc5e8b74e5031e7de1f7e', 'i:1;', 1724505314),
('0f0c349cf3dcdcea272cc5e8b74e5031e7de1f7e:timer', 'i:1724505314;', 1724505314),
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:2;', 1724413535),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1724413535;', 1724413535),
('51c22407f53b03c2d01795d213e37e8e8424414c', 'i:1;', 1724502978),
('51c22407f53b03c2d01795d213e37e8e8424414c:timer', 'i:1724502978;', 1724502978),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1724555454),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1724555454;', 1724555454);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(32, 'Ghế massage cao cấp', 'ghe-massage-cao-cap', NULL, 1, '2024-08-25 03:12:40', '2024-08-25 03:12:40'),
(33, 'Ghế massage phổ thông', 'ghe-massage-pho-thong', NULL, 1, '2024-08-25 03:13:04', '2024-08-25 03:13:04'),
(34, 'Ghế massage giá rẻ', 'ghe-massage-gia-re', NULL, 1, '2024-08-25 03:13:12', '2024-08-25 03:13:12'),
(35, 'Máy chạy bộ cao cấp', 'may-chay-bo-cao-cap', NULL, 1, '2024-08-25 03:13:27', '2024-08-25 03:13:27'),
(36, 'Máy chạy bộ phổ thông', 'may-chay-bo-pho-thong', NULL, 1, '2024-08-25 03:13:35', '2024-08-25 03:13:35'),
(37, 'Máy chạy bộ giá rẻ', 'may-chay-bo-gia-re', NULL, 1, '2024-08-25 03:13:42', '2024-08-25 03:13:42');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_29_070828_create_categories_table', 2),
(5, '2024_07_29_070904_create_brands_table', 2),
(6, '2024_07_29_070909_create_products_table', 2),
(7, '2024_07_29_070953_create_orders_table', 2),
(8, '2024_07_29_070956_create_order_items_table', 2),
(9, '2024_07_29_071014_create_addresses_table', 2),
(10, '2024_08_13_015824_add_themes_settings_to_users_table', 3),
(11, '2024_08_13_133521_update_grand_total_in_orders_table', 4),
(12, '2024_08_13_133825_update_amount_fields_in_order_items_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `grand_total` decimal(20,2) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `status` enum('new','processing','shipped','delivered','canceled') NOT NULL DEFAULT 'new',
  `currency` varchar(255) DEFAULT NULL,
  `shipping_amount` decimal(10,2) DEFAULT NULL,
  `shipping_method` varchar(255) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `right_sphere` decimal(8,2) DEFAULT 0.00,
  `right_cylinder` decimal(8,2) DEFAULT 0.00,
  `right_axis` decimal(8,2) DEFAULT 0.00,
  `right_add` decimal(8,2) DEFAULT 0.00,
  `left_sphere` decimal(8,2) DEFAULT 0.00,
  `left_cylinder` decimal(8,2) DEFAULT 0.00,
  `left_axis` decimal(8,2) DEFAULT 0.00,
  `left_add` decimal(8,2) DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `unit_amount` decimal(30,4) NOT NULL,
  `total_amount` decimal(30,4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Lưu Ý Khi Mua Hàng', 'Luu-y', '<h1>Lưu Ý Khi Mua Hàng</h1><p>Kính mắt Eye Plus rất vui khi được đồng hành cùng trải nghiệm mua sắm và sử dụng các dịch vụ về kính mắt tại đây. Hiện tại, nếu còn bất cứ thông tin cần hỗ trợ, quý khách hàng có thể tham khảo các lưu ý quan trọng để tránh bỏ lỡ các quyền lợi đặc biệt hoặc liên hệ hotline để nhận được tư vấn viên hướng dẫn chi tiết.</p><p><figure data-trix-attachment=\"{&quot;contentType&quot;:&quot;image&quot;,&quot;height&quot;:100,&quot;url&quot;:&quot;https://kinhmateyeplus.com/wp-content/uploads/2016/01/images878965_8B_SKCD_2.jpg&quot;,&quot;width&quot;:100}\" data-trix-content-type=\"image\" class=\"attachment attachment--preview\"><img src=\"https://kinhmateyeplus.com/wp-content/uploads/2016/01/images878965_8B_SKCD_2.jpg\" width=\"100\" height=\"100\"><figcaption class=\"attachment__caption\"></figcaption></figure><br><br><a href=\"https://kinhmateyeplus.com/kham-mien-phi/#1b78de369da5c7d65\"><span style=\"text-decoration: underline;\">Ưu Đãi Cho VIP Member</span></a></p><p><br><br><a href=\"https://kinhmateyeplus.com/kham-mien-phi/#7984ba6fca766e06a\"><span style=\"text-decoration: underline;\">Chính Sách Bảo Hành &amp; Đổi Sản Phẩm</span></a></p><p>Các sản phẩm tại kính mắt Eye Plus đều được áp dụng chính sách bảo hành hậu mãi:</p><ul><li>Hỗ trợ đổi sản phẩm trong vòng 7 ngày (không áp dụng với tròng kính)</li><li>Bảo hành 1 năm về tân trang, nắn chỉnh gọng, thay ve ốc định kỳ</li><li>Nhiều chương trình ưu đãi, phần quà đi kèm</li></ul><p>Thông tin chi tiết cần tìm hiều về chính sách bảo hành và đổi hàng, quý khách hàng vui lòng liên hệ tại <a href=\"http://kinhmateyeplus.com/quy-dinh-bao-hanh-san-pham/\"><span style=\"text-decoration: underline;\">kinhmateyeplus.com/quy-dinh-bao-hanh-san-pham/</span></a></p><p>Hoặc liên hệ trực tiếp hotline: 0904.915.377 để được hỗ trợ nhanh nhất.</p><p><br><br><a href=\"https://kinhmateyeplus.com/kham-mien-phi/#40309dc26dac62482\"><span style=\"text-decoration: underline;\">Bảng Báo Giá Tròng Kính Mắt</span></a></p><p>Eye Plus tự hào là đơn vị cung cấp dòng sản phẩm tròng kính chất lượng, chính hãng đến từ nhiều thương hiệu uy tín trong và ngoài nước. Các sản phẩm tròng kính hội tụ đầy đủ yếu tố:</p><ul><li>Sản phẩm tốt với đa dạng chức năng và công dụng, phù hợp với nhiều nhu cầu sử dụng khác nhau</li><li>Mức giá ưu đãi cùng nhiều chương trình quà tặng hấp dẫn</li><li>Dịch vụ tốt cùng giàn máy tiên tiến, hiện đại</li></ul><p>Thông tin chi tiết về các loại tròng kính, truy cập tại: <a href=\"http://kinhmateyeplus.com/danh-muc/trong-kinh/\"><span style=\"text-decoration: underline;\">kinhmateyeplus.com/danh-muc/trong-kinh/</span></a></p><p>Liên hệ hotline 45647356657 để nhận tư vấn và hỗ trợ nhanh nhất.</p><p><br><br><a href=\"https://kinhmateyeplus.com/kham-mien-phi/#1c1c35ac5dbd56af2\"><span style=\"text-decoration: underline;\">Nhận Tư Vấn Từ Online</span></a></p><p>Với những khác hàng ở xa, không có điều kiện trực tiếp đến cửa hàng, Eye Plus vẫn hỗ trợ tư vấn và hoàn thiện đơn hàng nhanh chóng và thuận tiện:</p><ul><li>Tư vấn viên hỗ trợ nhiệt tình</li><li>Chuyển phát nhanh chỉ từ 2 – 5 ngày</li><li>Hỗ trợ giải quyết các vấn đề phát sinh trong quá trình chuyển giao đơn</li><li>Ship COD toàn quốc, nhận hàng mới thanh toán</li><li>Riêng với các dịch vụ cắt mắt online, vui lòng liên hệ trực tiếp hotline: 0904.915.377 để được tư vấn chi tiết.</li></ul><p>Thông tin liên hệ nhanh:</p><p><strong>Fanpage:</strong> <a href=\"https://www.facebook.com/kinhmateyeplus/\"><span style=\"text-decoration: underline;\">Kính Mắt Eye plus</span></a></p><p><strong>Instagram:</strong> <a href=\"https://www.instagram.com/kinhmat.eyeplus/?hl=vi\"><span style=\"text-decoration: underline;\">Kính Mắt Eye Plus</span></a></p><p><strong>Shopee:</strong> <a href=\"https://shopee.vn/hung121191\"><span style=\"text-decoration: underline;\">Kính Mắt Eye Plus</span></a></p><p><br><br><a href=\"https://kinhmateyeplus.com/kham-mien-phi/#52e0000545a2a19e6\"><span style=\"text-decoration: underline;\">Cách Lựa Chọn Kính</span></a></p><p>Cần thêm thông tin về sản phẩm, dịch vụ kính mắt hoặc các chương trình hiện tại, quý khách hàng vui lòng liên hệ qua hệ thống online và offline tại kính mắt Eye Plus:</p><p><strong>Fanpage</strong>: <a href=\"https://www.facebook.com/kinhmateyeplus/\"><span style=\"text-decoration: underline;\">Kính Mắt Eye plus</span></a></p><p><strong>Instagram</strong>: <a href=\"https://www.instagram.com/kinhmat.eyeplus/?hl=vi\"><span style=\"text-decoration: underline;\">Kính Mắt Eye Plus</span></a></p><p><strong>Shopee</strong>: <a href=\"https://shopee.vn/hung121191\"><span style=\"text-decoration: underline;\">Kính Mắt Eye Plus</span></a></p><p><br><br></p><p><br><br></p><p><br></p>', '2024-08-23 10:53:43', '2024-08-24 08:44:03'),
(2, 'Cách thức mua hàng', 'cach-thuc-mua-hang', '<h3>Đặt hàng dễ dàng với 3 bước đơn giản tại Kính Mắt Eye Plus</h3><p><strong>Bước 1 : Chọn sản phẩm cần mua và click vào nút “Thêm Vào Giỏ”</strong></p><p>Sau khi tìm được sản phẩm cần mua:</p><ul><li>Cách 1: Bạn ấn nút “Thêm Vào Giỏ” trực tiếp tại giao diện trang chủ hoặc danh mục sản phẩm</li><li>Cách 2: Ấn vào sản phẩm xem chi tiết mô tả, nhập số lượng sản phẩm cần mua và ấn nút “Thêm Vào Giỏ”</li></ul><p><strong>Bước 2 : Vào giỏ hàng và tiếp tục ấn nút thanh toán&nbsp;</strong></p><p>Tại góc phải trên cùng của website, nhấp vào nút “Thanh Toán” khi số lượng hàng mua đã đủ. Ngoài ra, bạn có thể ấn nút “View Cart” nếu cần nhập lại số lượng hàng, ấn nút “X” vào sản phẩm không muốn mua hoặc nhầm lẫn</p><p><strong>Bước 3 : Nhập thông tin mua hàng đầy đủ và ấn nút “Đặt Hàng”</strong></p><p>Quý khách nhập đầy đủ thông tin các mục có dấu sao (*) và gi chú nếu cần nhắc nhở thêm, sau đó ấn nút “Đặt Hàng” để hoàn tất việc mua bánSau khi tạo đơn hàng thành công, Eye Plus sẽ gửi email về đơn hàng và sẽ có nhân viên liên hệ trực tiếp với quý khách qua điện thoại để xác nhận và giao hàng tới tận tay</p><p>Eye Plus rất vui khi được đồng hành cùng quý khách hàng trong trải nghiệm mua sắm tại đây, nếu có bất cứ vấn đề cần hỗ trợ, quý khách hàng có thể để lại thông tin vào hộp Chat bên phải màn hình hoặc liên hệ hotline: 0904915377 để được hỗ trợ nhanh nhất.</p><p><br></p>', '2024-08-23 10:55:09', '2024-08-23 10:55:09'),
(3, 'Số điện thoại', 'so-dien-thoai', '<p>0338596789</p>', '2024-08-23 19:02:28', '2024-08-23 19:02:28'),
(4, 'Địa chỉ', 'dia-chi', '<p>Đồng Nai</p>', '2024-08-23 19:04:29', '2024-08-23 19:04:29'),
(5, 'Email', 'email', '<p>martian@martian.vn</p>', '2024-08-23 19:04:53', '2024-08-23 19:04:53');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `description` longtext DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `promotion` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `in_stock` tinyint(1) NOT NULL DEFAULT 1,
  `on_sale` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('I2t7swLxZwbQP02yJ0VNm2NRREz1BuvQu7DyOpZf', NULL, '66.249.71.130', 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 5X Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.84 Mobile Safari/537.36 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN0s0Ymh0VThZZE5zMkQ5UVRFVzg4RDN6NGxGNHNXTTBnbTJKU1l3QiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vYnZkaWVuYmllbnBodS5jb20udm4vZ2lvLWhhbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1724549912),
('muhIHmzG8QeXVYOwz0pdd9Y5Spv4dDBIecG7hUXn', NULL, '113.173.201.25', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 OPR/112.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSkhoUmJuajhzaUlEeGdOOHJuT0Z4NGN4SEtLNUVibzJjQzY5Rk1lNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHBzOi8vZHJta2V5LnZuL2dpby1oYW5nIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1724553057),
('PbVX4R3awxhPkAtH3ixF0qIhqHO1jCqGfI4Q0aqt', NULL, '66.249.65.65', 'Mozilla/5.0 (compatible; Googlebot/2.1; +http://www.google.com/bot.html)', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSzhoUU43V21sMWtGbjZhMThxdG5IU05xU1JSYk9WYXZCWjJpR2NxUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHBzOi8vYnZkaWVuYmllbnBodS5jb20udm4vZ2lvLWhhbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1724549916),
('Q4w6iGbtwpQvODyMFgFaWLUXjhWSeN7sQbmv8A4M', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 OPR/112.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieGNBMzc4bzJXSVo4aURjVXltRFpwSDNNWkxiYXFQUldXQmFZTVBxMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1724556957),
('sk3P6jETXgvUntd2XDal0OidpsZaSBl1c5WgpoVa', 1, '171.254.65.161', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiUFllU2k5Tk9rZTZIdjdEOTdOWGdXdXhacFdyRE5mUW9HeUt1bmd5OCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJGpyNE9nTlEzNWtKcjUwdXhsTTVhNmVCYkhCR21wVHVyYVJLc3hOZGFQLmtHZzZSL3RDOVllIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNzoiaHR0cHM6Ly9idmRpZW5iaWVucGh1LmNvbS52bi9naW8taGFuZyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1724552234),
('WRopVDDaSjtoBReqVtbo7icR1Vc5zqan3haDbStL', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 OPR/112.0.0.0', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiTUhTa3V6NkR6dVNzWENnN1NrZzRiYUgzY3VxQW82V091VVhzQ01qUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkanI0T2dOUTM1a0pyNTB1eGxNNWE2ZUJiSEJHbXBUdXJhUktzeE5kYVAua0dnNlIvdEM5WWUiO3M6ODoiZmlsYW1lbnQiO2E6MDp7fX0=', 1724556388),
('wsKpvLvPa1Fha2xBrBfQOJtkpU6J6ZJEbKgOXcjh', 1, '171.254.65.161', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVTM5NVEwSnNsZWc1U1hvaExPbTFQNmNaakRRMldlZ2dBTVRGSGVlMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHBzOi8vYnZkaWVuYmllbnBodS5jb20udm4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1724550868);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `theme` varchar(255) DEFAULT 'default',
  `theme_color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `theme`, `theme_color`) VALUES
(1, 'admin', 'admin@gmail.com', '2024-07-31 01:51:41', '$2y$12$jr4OgNQ35kJr50uxlM5a6eBbHBGmpTuraRKsxNdaP.kGg6R/tC9Ye', 'W1A4oJa13sJODqC8uB05vnQUAtJi2VGbeX3Ld15kfg3jipGxcjPHzJXnn5xW', '2024-07-29 00:07:15', '2024-07-30 18:50:19', 'default', NULL),
(2, '2509roblox', '2509rsoblox@gmail.com', '2024-07-30 13:13:37', '$2y$12$5nbtRhoIz8ex2xXv0DVt0e/8taPckUOJsLaYXH7lWCzkAZtUuQknu', NULL, '2024-07-29 00:28:53', '2024-07-30 06:13:52', 'default', NULL),
(3, '2509roblox', '2509rosblox@gmail.com', '2024-07-29 07:37:32', '$2y$12$h5HMdiggSexR6BAyd8KPxOIo6toiEdko31pSQzU.VYiZtwcJo6RHy', NULL, '2024-07-29 00:37:51', '2024-07-29 00:37:51', 'default', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_order_id_foreign` (`order_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=525;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

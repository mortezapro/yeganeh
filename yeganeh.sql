-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Sep 21, 2024 at 09:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yeganeh`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL DEFAULT 'thumbnail.png',
  `indexable` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: Noindex,1: Index',
  `content` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `canonical` varchar(255) DEFAULT NULL COMMENT 'Canonical Url',
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  `seo_image` varchar(255) NOT NULL DEFAULT 'thumbnail.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `thumbnail`, `indexable`, `content`, `created_at`, `updated_at`, `canonical`, `seo_title`, `seo_description`, `seo_image`) VALUES
(1, 'اسکن', 'scan', 'thumbnail.png', 1, NULL, '2024-09-01 15:43:01', '2024-09-21 12:22:27', NULL, NULL, NULL, 'thumbnail.png'),
(3, 'هوش مصنوعی', 'ai', 'thumbnail.png', 1, NULL, '2024-09-21 12:17:33', '2024-09-21 16:12:44', NULL, 'هوش مصنوعی', NULL, 'thumbnail.png'),
(4, 'خدمات آنلاین', 'online-service', 'thumbnail.png', 1, NULL, '2024-09-21 12:22:07', '2024-09-21 12:22:07', NULL, NULL, NULL, 'thumbnail.png'),
(5, 'تبدیل تصویر به متن', 'ocr', 'thumbnail.png', 1, NULL, '2024-09-21 12:23:00', '2024-09-21 12:23:00', NULL, NULL, NULL, 'thumbnail.png'),
(6, 'پردازش هوشمند اسناد', 'idp', 'thumbnail.png', 1, NULL, '2024-09-21 12:23:40', '2024-09-21 12:23:40', NULL, NULL, NULL, 'thumbnail.png'),
(7, 'امور اداری', 'administrative', 'thumbnail.png', 1, NULL, '2024-09-21 16:00:30', '2024-09-21 16:00:30', NULL, NULL, NULL, 'thumbnail.png');

-- --------------------------------------------------------

--
-- Table structure for table `categorizables`
--

CREATE TABLE `categorizables` (
  `categorizable_id` bigint(20) NOT NULL,
  `category_model_id` bigint(20) NOT NULL,
  `categorizable_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorizables`
--

INSERT INTO `categorizables` (`categorizable_id`, `category_model_id`, `categorizable_type`) VALUES
(1, 4, 'App\\Models\\CategoryModel'),
(5, 1, 'App\\Models\\PostModel'),
(5, 4, 'App\\Models\\CategoryModel'),
(6, 3, 'App\\Models\\CategoryModel'),
(6, 4, 'App\\Models\\CategoryModel'),
(7, 1, 'App\\Models\\PostModel'),
(10, 1, 'App\\Models\\PostModel'),
(11, 1, 'App\\Models\\PostModel'),
(14, 1, 'App\\Models\\PostModel'),
(18, 3, 'App\\Models\\PostModel'),
(19, 3, 'App\\Models\\PostModel'),
(20, 3, 'App\\Models\\PostModel'),
(21, 7, 'App\\Models\\PostModel');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `content` longtext NOT NULL,
  `reply_id` bigint(20) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0:initialRegistration, 1010:enabled,1015:disabled',
  `commentable_id` bigint(20) NOT NULL,
  `commentable_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `galleriables`
--

CREATE TABLE `galleriables` (
  `galleriable_id` bigint(20) NOT NULL,
  `gallery_model_id` bigint(20) NOT NULL,
  `galleriable_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `path` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_page_posts`
--

CREATE TABLE `home_page_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` tinyint(4) NOT NULL COMMENT '1: partnership, 2:offer, 3: bug fix',
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_09_18_080835_create_messages_table', 1),
(6, '2024_09_19_125846_create_blog_table', 1),
(7, '2021_11_25_194107_create_posts_table', 2),
(8, '2021_11_25_195144_create_category_table', 2),
(9, '2021_12_12_161145_create_comment_table', 2),
(10, '2021_12_15_163855_create_permission_table', 2),
(11, '2021_12_15_164142_create_permission_user_table', 2),
(12, '2021_12_15_192032_create_role_table', 2),
(13, '2021_12_15_192153_create_permission_role_table', 2),
(14, '2021_12_15_192727_create_role_user_table', 2),
(15, '2021_12_26_125410_create_categorizables_table', 2),
(16, '2021_12_27_154144_create_galleries_table', 2),
(17, '2021_12_28_071425_create_galleriables_table', 2),
(18, '2021_12_31_204007_create_search_history_table', 2),
(19, '2021_12_31_204008_create_page_table', 2),
(20, '2021_12_31_204009_create_menu_table', 2),
(21, '2021_12_31_205352_create_redirect_table', 2),
(22, '2022_05_14_154730_create_home_page_posts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `indexable` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: Noindex,1: Index',
  `layout_id` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0: simple,1:professional',
  `canonical` varchar(255) DEFAULT NULL COMMENT 'Canonical Url',
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  `seo_image` varchar(255) NOT NULL DEFAULT 'thumbnail.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `display_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL DEFAULT 'thumbnail.png',
  `description` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1020 COMMENT '1010:draft , 1020: published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `indexable` tinyint(4) NOT NULL DEFAULT 1 COMMENT '0: Noindex,1: Index',
  `canonical` varchar(255) DEFAULT NULL COMMENT 'Canonical Url',
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  `seo_image` varchar(255) NOT NULL DEFAULT 'thumbnail.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `thumbnail`, `description`, `content`, `user_id`, `status`, `created_at`, `updated_at`, `indexable`, `canonical`, `seo_title`, `seo_description`, `seo_image`) VALUES
(18, 'سامسونگ قابلیت‌های جدید هوش‌ مصنوعی در موبایل‌های خود را به نمایش گذاشت', 'samsung-new-galaxy-ai-features-for-one-ui', '0_27-910x600.jpg', '<p><span style=\"color:rgb(22,32,91);\">سامسونگ پیش‌نمایشی از امکانات جدید گلکسی AI منتشر کرده است که نسخه ۶.۱.۱ رابط کاربری OneUI ارائه می‌شوند.</span></p>', '<p><span style=\"color:rgb(18,26,73);\">سامسونگ در جدیدترین نسخه از رابط کاربری خود امکانات متعددی را در زمینه افزایش بهره‌وری با استفاده از گلکسی AI در اختیار کاربران قرار می‌دهد که می‌توانند انجام بسیاری از امور را آسان‌تر کنند. این شرکت اخیراً نحوه عملکرد ویژگی‌های مختلف را به نمایش گذاشته‌ است.</span></p><h4><span style=\"color:rgb(18,26,73);\">امکانات تازه هوش‌مصنوعی گلکسی AI چیست و چه کاربردی دارند؟</span></h4><p><span style=\"color:rgb(18,26,73);\">شرکت‌های سازنده گوشی‌های هوشمند سعی دارند تا در به‌کارگیری قابلیت‌های مبتنی‌بر هوش‌ مصنوعی، از رقبای خود عقب نمانند و سامسونگ نیز به‌عنوان بزرگ‌ترین تولیدکننده گوشی‌های هوشمند در سراسر جهان، امکانات گوناگونی را در اختیار کاربران خود قرار می‌دهد. ویژگی‌هایی که به‌تازگی و در قالب نسخه ۶.۱.۱ رابط کاربری OneUI در دسترس قرار گرفتند، بیشتر روی یادداشت‌برداری آسان و جستجوی سریع تمرکز دارند که می‌توانند تجربه لذت‌بخش‌تر هنگام استفاده از دستگاه‌های سری گلکسی را برای دارندگان این محصولات به ارمغان آورد.</span></p><p><span style=\"color:rgb(18,26,73);\">تبدیل طرح‌های ساده به تصویر (Sketch to Image) یکی از مواردی است که سامسونگ روی آن مانور زیادی داشته و می‌تواند در زمان کوتاهی، تصاویر ساخته‌شده با هوش‌مصنوعی براساس طرح‌های اولیه و خام کاربران را ایجاد کند. طبیعی است که ویژگی مذکور در گوشی‌های سامسونگ با پشتیبانی از قلم، کاربرد بیشتری داشته باشد که ازجمله آنها می‌توان به سری گلکسی فولد و گلکسی S اولترا اشاره کرد. کاربران می‌توانند پیش از دریافت خروجی، استایل دلخواه خود را انتخاب کنند تا نتیجه‌ای نزدیک‌تر به انتظار خود در اختیار داشته‌ باشند.</span></p><p>&nbsp;</p><figure class=\"image\"><img src=\"http://localhost:8000/ckeditor/1_1726942057.gif\"></figure><p>جستجوی سریع و آسان با استفاده از قابلیت Circle to Search گوگل، یکی دیگر از مواردی است که به مجموعه گلکسی AI اضافه شده‌ است و نه‌تنها روی گوشی‌های پرچم‌دار سامسونگ قابل استفاده‌ است؛ بلکه دارندگان برخی دیگر از محصولات این شرکت هم می‌توانند از آن بهره ببرند. همچنین کاربرد آن تنها محدود به جستجوی تصاویر مشابه در اینترنت نیست؛ بلکه می‌توان پاسخ به سوالاتی مثل معادلات ریاضی همراه با راه‌حل را هم از طریق آن دریافت کرد. کاربر پس از باز کردن اپلیکیشن دوربین و عکس‌برداری از سؤال موردنظر، می‌تواند دور آن دایره‌ای ترسیم کند تا از طریق هوش‌مصنوعی گوگل، پاسخ خود را مشاهده کند.</p><p>قلم گوشی‌های هوشمند، ابزاری کاربردی برای یادداشت‌برداری است و اکنون سامسونگ تلاش کرده با استفاده از امکانات مبتنی‌بر هوش‌ مصنوعی، طیف وسیع‌تری از قابلیت‌ها را برای کاربران خود ارائه کند. یکی از همین ویژگی‌ها، Note Assist نام دارد که کاربر به‌کمک آن می‌تواند اقدام به ضبط صدا در محیط اپلیکیشن یادداشت‌برداری سامسونگ کند. پس از پایان ضبط، هوش‌ مصنوعی اقدام به تبدیل گفته‌های موجود در فایل صوتی به متن می‌کند. همچنین اگر کاربر علاقه داشته‌ باشد، می‌تواند به‌جای متن کامل، خلاصه‌ای از نکات کلیدی موجود در متن را دریافت کند و درون یادداشت خود قرار دهد. متأسفانه ویژگی مذکور فعلاً تنها در اپ سامسونگ ارائه می‌شود و مشخص نیست که آیا در آینده شاهد به‌کارگیری آن در سایر برنامه‌ها مثل گوگل Keep نیز خواهیم بود یا خیر.</p><p>درنهایت قابلیت ترجمه سریع، از دیگر مواردی است که به لطف هوش مصنوعی در گوشی‌های سری گلکسی امکان‌پذیر شده‌ است. ترجمه تماس‌های صوتی یا ترجمه هم‌زمان از کاربردهای این قابلیت هستند؛ اما در رابط کاربری جدید OneUI می‌توان به آسانی در اسناد PDF هم به آن دسترسی داشت. این ویژگی که تحت عنوان PDF Overlay Translation ارائه می‌شود، از طریق اپلیکیشن یادداشت‌برداری سامسونگ در دسترس قرار دارد و تنها کافیست تا کاربر، اقدام به باز کردن فایل موردنظر خود با استفاده از اپ مدیریت فایل My File کند که به‌شکل پیش‌فرض روی گوشی‌های سامسونگ نصب شده‌ است.</p><h4>قابلیت‌های هوش‌مصنوعی سامسونگ روی چه گوشی‌هایی ارائه می‌شود؟</h4><p>آخرین نسل از گوشی‌های هوشمند تاشوی سامسونگ شامل گلکسی فولد ۶ و گلکسی فلیپ ۶ به‌شکل پیش‌فرض به نسخه ۶.۱.۱ رابط کاربری OneUI مجهز هستند؛ درنتیجه دارندگان این محصولات می‌توانند بدون نیاز به نصب بسته‌های به‌روزرسانی، از امکانات هوش‌ مصنوعی گفته شده در بالا بهره ببرند. این به‌روزرسانی برای سایر پرچم‌داران سامسونگ ازجمله سری گلکسی S24 و S23 در کنار گلکسی زد فولد ۵ و زد فلیپ ۵ هم منتشر شده‌ است و حتی پرچم‌داران سال ۲۰۲۲ هم آن را دریافت می‌کنند. همچنین برخی از دستگاه‌های میان‌رده منتخب مثل گلکسی A55 و A35 هم پذیرای قابلیت‌های متنوع گلکسی AI خواهند بود. سامسونگ در نظر دارد تا امکانات متنوع هوش‌ مصنوعی را روی بیش از ۲۰۰ میلیون از دستگاه‌ها در اختیار کاربران خود قرار دهد.</p>', 1, 1020, '2024-09-21 10:51:41', '2024-09-21 14:39:49', 1, NULL, 'سامسونگ قابلیت‌های جدید هوش‌ مصنوعی در موبایل‌های خود را به نمایش گذاشت', 'سامسونگ پیش‌نمایشی از امکانات جدید گلکسی AI منتشر کرده است که نسخه ۶.۱.۱ رابط کاربری OneUI ارائه می‌شوند.', 'thumbnail.png'),
(19, 'با بهترین ابزارهای هوش مصنوعی برای حذف اشیاء ناخواسته از عکس آشنا شوید', 'best-object-removal-ai-tools', 'ai-remove-image-910x600.jpg', '<p><span style=\"color:rgb(22,32,91);\">یکی از مهم‌ترین قابلیت‌های فعلی هوش مصنوعی، امکان حذف اشیاء ناخواسته از عکس‌ها است. در این مطلب به معرفی 8 ابزار پرداخته‌ایم.</span></p>', '<p>یکی از قابلیت‌های هوش مصنوعی برای تصاویر که از همان ابتدا با توجه خوبی مواجه شد، امکان حذف اشیا یا قسمت‌های ناخواسته عکس است. درحال‌حاضر ابزارهای زیادی وجود دارند که این قابلیت را ارائه می‌کنند و در این مطلب به معرفی بهترین ابزارهای حذف اشیا از عکس با هوش مصنوعی می‌پردازیم.</p><p>معرفی بهترین ابزارهای حذف اشیا از عکس با هوش مصنوعی<br>وضوح و کیفیت تصاویر در دنیای دیجیتال امروزی تاثیر زیادی روی تعامل و درک کاربران دارد. بااین‌حال زمانی که یک عکس جدیدی می‌گیرید، ممکن است متوجه وجود اشیاء یا حتی انسان‌هایی شوید که به‌طور ناخواسته در عکس شما وجود دارند و احساس آن را خراب می‌کنند.</p><p>در این شرایط، معمولاً مجبور هستیم تا عکس دیگری با همان تنظیمات و موقعیت بگیریم، اما ابزارهای هوش مصنوعی که در ادامه به آن‌ها اشاره می‌کنیم، این کار را به‌سادگی برای شما انجام می‌دهند.</p><figure class=\"image\"><img src=\"http://localhost:8000/ckeditor/Snapedit-1024x576.jpg_1726941776.webp\"></figure><p style=\"margin-right:0px;\"><strong>SnapEdit </strong>یک برنامه ویرایش عکس است که امکان حذف اشیاء ناخواسته با هوش مصنوعی را نیز فراهم می‌کند. این ابزار با تشخیص هوشمندانه و حذف مواردی که باعث خرابی عکس شما شده‌اند، بدون اینکه کیفیت اصلی تصویر را کاهش بدهد، می‌تواند باعث بهبود آن شود.</p><p style=\"margin-right:0px;\">علاوه بر حذف صرفاً اشیا، SnapEdit کیفیت کلی تصاویر را با تنظیم روشنایی، کنتراست و اشباع افزایش می‌دهد و اطمینان حاصل می‌کند که خروجی نهایی از نظر بصری جذاب است.</p><h4 style=\"margin-right:0px;\">دانلود SnapEdit برای اندروید و iOS</h4><p style=\"margin-right:0px;\"><strong>Remove Objects</strong> یک بازار نوآورانه برای گوشی‌های آیفون و اندرویدی است که می‌تواند به‌سادگی و در سریع‌ترین زمان ممکن عناصر ناخواسته عکس‌ها را حذف کند. این برنامه از هوش مصنوعی پیشرفته‌ای استفاده می‌کند تا شما بتوانید تمام موارد ناخواسته عکس‌های خود را حذف کنید.</p><p style=\"margin-right:0px;\">فرایند حدف اشیاء با این اپلیکیشن به‌گونه‌ای انجام می‌شود که کیفیت و بافت‌های تصویر اصلی به هیچ وجه آسیب نمی‌بینند. از جمله دیگر ویژگی‌های قابل‌توجه آن می‌توان به رابط‌کاربری کاربرپسند و قابلیت‌های ویرایش همه‌جانبه اشاره کرد.</p><h4 style=\"margin-right:0px;\">دانلود اپلیکیشن Remove Objects برای موبایل</h4><p style=\"margin-right:0px;\">در ادامه معرفی بهترین ابزارهای حذف اشیا از عکس با هوش مصنوعی به معرفی <strong>AniEraser </strong>می‌پردازیم. این برنامه با فناوری پیشرفته هوش مصنوعی خود، به شما کمک می‌کند تا بدون زحمت عناصری مانند واترمارک، افراد دیگر، حیوانات و اشیاء مختلف را از عکس‌های خود حذف کنید.</p><p style=\"margin-right:0px;\">این ابزار به‌ویژه برای تولیدکنندگان محتوا مفید است که نیاز دارند در محتواهای خود از تصاویر بی‌عیب‌و‌نقص استفاده کنند.</p>', 1, 1020, '2024-09-21 10:51:52', '2024-09-21 14:35:50', 1, NULL, 'با بهترین ابزارهای هوش مصنوعی برای حذف اشیاء ناخواسته از عکس آشنا شوید', 'یکی از مهم‌ترین قابلیت‌های فعلی هوش مصنوعی، امکان حذف اشیاء ناخواسته از عکس‌ها است. در این مطلب به معرفی 8 ابزار پرداخته‌ایم.', 'thumbnail.png'),
(20, 'همه‌چیز درباره کوپایلت؛ معرفی کامل هوش مصنوعی مایکروسافت', 'complete-guide-microsoft-copilot', 'copilot-1-910x600.jpg', '<p><span style=\"color:rgb(22,32,91);\">مایکروسافت کوپایلت ازجمله چت‌بات‌های هوش مصنوعی کاربردی است که شما را در این مطلب به‌طور کامل با آن آشنا می‌کنیم.</span></p>', '&lt;p&gt;مایکروسافت ازجمله شرکت‌هایی است که توجه ویژه‌ای به فناوری هوش مصنوعی دارد. این شرکت علاوه‌بر سرمایه‌گذاری هنگفت روی استارتاپ OpenAI، سازنده ChatGPT، چت بات هوش مصنوعی خود با نام مایکروسافت Copilot را نیز روانه بازار کرده است که در موارد بسیار زیادی می‌توان از آن کمک گرفت. در این مطلب بیشتر با هوش مصنوعی کوپایلت، انواع آن و قابلیت‌های هرکدام آشنا خواهید شد.&lt;/p&gt;&lt;h2 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;هوش مصنوعی مایکروسافت کوپایلت چیست؟&lt;/strong&gt;&lt;/h2&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;مایکروسافت کوپایلت ابزار هوش مصنوعی بسیار کاربردی است که برای بهینه‌سازی بهره‌وری، الهام‌بخشیدن به خلاقیت شما و ارتقاء قابلیت‌های همکاری در اکوسیستم مایکروسافت از قدرت یادگیری ماشین و پردازش زبان طبیعی بهره می‌برد. این ابزار به‌عنوان یک دستیار دیجیتال پیشرفته، انجام وظایف و کارهای شما را با ارائه پیشنهادات هوشمند و داده‌های ارزشمند آسان می‌کند.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;چت‌بات کوپایلت، قدرت هوش مصنوعی OpenAI و موتور جستجوی بینگ را با فناوری Prometheus با یکدیگر ترکیب می‌کند تا بتواند براساس اطلاعات موجود در دنیای وب، پاسخ سوال‌های شما را کاملاً به سبک انسانی ارائه کند.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;از طریق کوپایلت می‌توان کارهایی نظیر کدنویسی، نوشتن، تولید تصویر و پیداکردن پاسخ سوالات خود را انجام داد. همچنین به‌گونه‌ای طراحی‌شده است تا بتواند از طریق محصولات مایکروسافت مانند Microsoft 365 یا Dynamics 365 و حتی GitHub به آن دسترسی داشته باشید.&lt;/p&gt;&lt;h2 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;آیا کوپایلت از GPT-4 استفاده می‌کند؟&lt;/strong&gt;&lt;/h2&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;مایکروسافت کوپایلت ابزار هوش مصنوعی بسیار کاربردی است که برای بهینه‌سازی بهره‌وری، الهام‌بخشیدن به خلاقیت شما و ارتقاء قابلیت‌های همکاری در اکوسیستم مایکروسافت از قدرت یادگیری ماشین و پردازش زبان طبیعی بهره می‌برد. این ابزار به‌عنوان یک دستیار دیجیتال پیشرفته، انجام وظایف و کارهای شما را با ارائه پیشنهادات هوشمند و داده‌های ارزشمند آسان می‌کند.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;چت‌بات کوپایلت، قدرت هوش مصنوعی OpenAI و موتور جستجوی بینگ را با فناوری Prometheus با یکدیگر ترکیب می‌کند تا بتواند براساس اطلاعات موجود در دنیای وب، پاسخ سوال‌های شما را کاملاً به سبک انسانی ارائه کند.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;از طریق کوپایلت می‌توان کارهایی نظیر کدنویسی، نوشتن، تولید تصویر و پیداکردن پاسخ سوالات خود را انجام داد. همچنین به‌گونه‌ای طراحی‌شده است تا بتواند از طریق محصولات مایکروسافت مانند Microsoft 365 یا Dynamics 365 و حتی GitHub به آن دسترسی داشته باشید.&lt;/p&gt;&lt;h2 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;آیا کوپایلت از GPT-4 استفاده می‌کند؟&lt;/strong&gt;&lt;/h2&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;از نظر فنی، بله! کوپایلت همانطور که گفتیم که از مدل Prometheus مبتنی بر GPT-4 از OpenAI استفاده می‌کند. البته خود مایکروسافت ادعا می‌کند که Copilot اکنون از GPT-4 Turbo استفاده می‌کند.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;GPT-4 Turbo مدل هوش مصنوعی جدیدتری از OpenAI است که دانش و اطلاعات آن تا آوریل سال 2023 به‌روز است. اطلاعات GPT-4 تا سپتامبر 2021 را شامل می‌شوند. بنابراین، GPT-4 توربو با اطلاعات بیشتری که دارد می‌تواند سریع و دقیق‌تر به سوالات شما پاسخ بدهد.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;نکته&lt;/strong&gt;: کوپایلت از ChatGPT استفاده نمی‌کند. برای درک بهتر این موضوع، باید به این نکته اشاره کرد که ChatGPT اپلیکیشنی است که به مدل‌های OpenAI مانند GPT-3.5 و GPT-4 متصل می‌شود تا تجربه یک چت‌بات را در اختیار کاربران قرار دهد.&lt;/p&gt;&lt;h2 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;مزایای استفاده از هوش مصنوعی Copilot&lt;/strong&gt;&lt;/h2&gt;&lt;figure class=&quot;image&quot;&gt;&lt;img src=&quot;http://localhost:8000/ckeditor/copilot1-1024x576.jpg_1726942759.webp&quot;&gt;&lt;/figure&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;از افزایش کارایی و بهره‌وری گرفته تا کاهش حجم و استرس کار، مایکروسافت کوپایلت طیف وسیعی از مزیت‌ها را برای کاربران و کسب‌و‌کارها ارائه می‌کند که در ادامه به چند نمونه اشاره خواهیم کرد:&lt;/p&gt;&lt;h3 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;افزایش بهره‌وری و کارایی&lt;/strong&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;کوپایلوت با توانایی‌هایی از جمله خودکارسازی وظایف، ارائه پیشنهادهای هوشمندانه و ساده‌کردن حجم کار، کارایی و بهره‌وری کارمندان در محل کار را به میزان قابل‌توجهی می‌تواند افزایش دهد.&lt;/p&gt;&lt;h3 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;کاهش حجم و استرس کار&lt;/strong&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;ابزار هوش مصنوعی مایکروسافت گزینه‌ای مناسبی برای انجام وظایف تکراری و ارائه آمار و داده‌های ارزشمند است تا به این طریق بتواند حجم کاری کارمندان را کاهش دهد و به‌همین ترتیب باعث کاهش استرس و بهبود کلی فضای کار شود.&lt;/p&gt;&lt;h3 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;بهبود قابلیت‌های همکاری و خلاقیت&lt;/strong&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;قابلیت‌های همکاری و ارائه پیشنهادات خلاقانه از جمله ویژگی‌های بارز هوش مصنوعی کوپایلت محسوب می‌شود که تعامل اعضای یک تیم با یکدیگر را بهبود می‌بخشد.&lt;/p&gt;&lt;h3 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;مدیریت سرمایه&lt;/strong&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;حتی کسب‌و‌کارها برای مدیریت سرمایه و پس‌انداز می‌توانند از داده‌ها و پیشنهادات ارزشمند کوپایلت در این زمینه کمک بگیرند.&lt;/p&gt;&lt;h3 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;ارتباط با محصولات دیگر مایکروسافت&lt;/strong&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;شاید مهم‌ترین جنبه هوش مصنوعی Copilot در مقایسه با رقبای خود، امکان استفاده از آن در محصولات دیگر مایکروسافت است که در ادامه به این موضوع بیشتر خواهیم پرداخت.&lt;/p&gt;&lt;h2 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;آیا هوش مصنوعی کوپایلت مایکروسافت رایگان است؟&lt;/strong&gt;&lt;/h2&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;کوپایلت یک ابزار هوش مصنوعی کاملاً رایگان است اما مایکروسافت اشتراک «Copilot Pro» را نیز برای آن ارائه می‌کند که با چند قابلیت اضافی همراه است.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;نسخه رایگان شما را از طریق مدل GPT-4 Turbo به چت‌بات آن متصل می‌کند و با آن می‌توانید از طریق متن، تصویر و صدا به جستجوی سوالات خود بپردازید، به پلاگین‌های کوپایلت دسترسی داشته باشید و 15 توکن روزانه برای تولید تصویر با هوش مصنوعی داشته باشید.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;درمقابل، Copilot Pro ماهانه 20 دلار هزینه دارد و در زمان اوج مصرف، اولویت دسترسی به GPT-4 و GPT-4 Turbo را برای شما ارائه می‌کند. همچنین با آن می‌توانید چت‌بات‌های کوپایلت‌محور شخصی خود را بسازید. با این اشتراک در برنامه های مایکروسافت 365 نیز می‌توانید از کوپایلت کمک بگیرید و روزانه 100 توکن برای تولید تصویر داشته باشید.&lt;/p&gt;&lt;h2 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;آشنایی با نسخه‌های مختلف هوش مصنوعی کوپایلت&lt;/strong&gt;&lt;/h2&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;مایکروسافت کوپایلت در واقع مجموعه‌ای از ابزارهای هوش مصنوعی است که به‌منظور کمک به کاربران در زمینه‌های مختلفی توسعه داده شده است. غول فناوری ابزار هوش مصنوعی خود را در نسخه‌های مختلفی به کاربران ارائه می‌کند تا براساس نیاز خود بتوانند گزینه مدنظرشان را انتخاب کنند.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;در ادامه به توضیح هر یک از نسخه‌های مختلف مایکروسافت کوپایلوت می‌پردازیم که در تصویر زیر به‌صورت تفکیک‌شده آمده‌آند:&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;نسخه رایگان&lt;/strong&gt; &lt;strong&gt;کوپایلت&lt;/strong&gt;: نسخه اصلی مایکروسافت کوپایلت که در گذشته به آن بینگ چت یا Bing Chat Enterprise هم گفته می‌شد، برای انجام کارهای روزانه مناسب است و می‌تواند پیداکردن اطلاعات موردنیاز شما را ساده کند و تجربه بهبودیافته‌ای برای جستجوی آنلاین به شما ارائه کند. این نسخه از طریق ویندوز 11، مرورگر مایکروسافت اِج (Edge) و اپلیکیشن موبایل قابل دسترس است. هرچند این نسخه می‌تواند پاسخ سوالات عمومی را به شما ارائه کند، اما همیشه برای ارائه اطلاعات خاص یا دقیق مناسب نیست.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;ویژگی‌های اصلی این نسخه شامل موارد زیر می‌شود:&lt;/p&gt;&lt;ul&gt;&lt;li&gt;بدون نیاز به پرداخت هزینه&lt;/li&gt;&lt;li&gt;مناسب برای کاربران عمومی و کسب‌و‌کارهای کوچک&lt;/li&gt;&lt;li&gt;ارائه پاسخ براساس منابع داخلی، منابع خارجی از طریق بینگ و برخی منابع دارای داده‌های سفارشی&lt;/li&gt;&lt;/ul&gt;&lt;h3 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;کوپایلت پرو:&lt;/strong&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;با پرداخت &lt;strong&gt;20 دلار در ماه&lt;/strong&gt; (به ازای هر کاربر) نیز می‌توانید به نسخه پرو کوپایلت دسترسی پیدا کنید که ویژگی‌هایی مانند &lt;strong&gt;GPT-4&lt;/strong&gt; و &lt;strong&gt;GPT-4 Turbo&lt;/strong&gt; را به شما ارائه می‌کند. با وجود این ویژگی، در مقایسه با نسخه اصلی، پاسخ‌های شما سریع‌تر تولید خواهند شد. البته در حال حاضر فاصله بین ارائه پاسخ در دو نسخه بسیار ناچیز است.&lt;/p&gt;&lt;h3 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;کوپایلت برای بهره‌وری:&lt;/strong&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;این نسخه که از آن با‌ عنوان Microsoft 365 Copilot یاد می‌شود، با ارائه پیشنهادات هوشمند و خودکارسازی وظایف در &lt;strong&gt;برنامه‌های مایکروسافت 365&lt;/strong&gt;، مانند اکسل، ورد، تیمز و پاورپوینت حجم کاری شما را کاهش می‌دهد و به شما کمک می‌کند تا در زمان کمتر کارهای بیشتری را انجام دهید.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;برای مثال، با این نسخه از هوش مصنوعی Copilot می‌توانید در Word به تولید متن و جدول بپردازید، ایمیل‌های خود را در Outlook خلاصه کنید و در اکسل طراحی‌های پایتون داشته باشید.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;این نسخه با هزینه &lt;strong&gt;30 دلار در ماه&lt;/strong&gt; قابل استفاده است.&lt;/p&gt;&lt;h3 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;کوپایلوت امنیتی:&lt;/strong&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;این نسخه که &lt;strong&gt;Microsoft Security Copilot&lt;/strong&gt; نام دارد، هوش مصنوعی را با تکنیک‌های امنیت سایبری ترکیب می‌کند تا از کاربران بیشتر در برابر حملات سایبری محافظت شود.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;مهمترین مزیتی که این نسخه برای کاربران فراهم می‌کند شامل تجزیه‌وتحلیل داده‌ها برای شناسایی الگوهای غیرقانونی می‌شود که به شناسایی سریع و دقیق حملات سایبری با مکانیسم‌های پاسخ خودکار کمک می کند.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;Microsoft Security Copilot با محصولات امنیتی مختلف مایکروسافت مانند Microsoft Sentinel و Microsoft Intune ترکیب می‌شود. قیمت این نسخه &lt;strong&gt;ساعتی 4 دلار&lt;/strong&gt; و ماهانه &lt;strong&gt;2,920 دلار&lt;/strong&gt; (تخمینی) اعلام شده است.&lt;/p&gt;&lt;h3 style=&quot;margin-right:0px;&quot;&gt;&lt;strong&gt;Copilot برای خدمات و فروش:&lt;/strong&gt;&lt;/h3&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;مایکروسافت در رویداد Ignite 2023 از دو نسخه اضافی برای کوپایلت رونمایی کرد که &lt;strong&gt;Copilot for Service&lt;/strong&gt; و &lt;strong&gt;Copilot for Sales&lt;/strong&gt; نام دارند. این دو نسخه از هوش مصنوعی در زمینه بهینه‌سازی عملیات‌های تجاری شرکت‌ها استفاده می‌کنند.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;طبق توضیحات مایکروسافت، شرکت‌ها می‌توانند Copilot for Service را به برنامه‌های ارتباط با مشتریان (CRM) خود اضافه کنند تا پاسخ‌های موردنیاز مشتریان را از طریق هوش مصنوعی به آن‌ها بدهند و «منابع» مربوط به هر مشتری را دریافت کنند.&lt;/p&gt;&lt;p style=&quot;margin-right:0px;&quot;&gt;Copilot for Sales نیز به‌عنوان همراهی برای فروشندگان عمل می‌کند و به شرکت‌ها در زمینه «افزایش بهره‌وری» و «شخصی‌سازی تعاملات با مشتریان» کمک می‌کند تا بتوانند معاملات بیشتری را ثبت کنند.&lt;/p&gt;', 1, 1020, '2024-09-21 14:51:35', '2024-09-21 14:51:35', 1, NULL, 'همه‌چیز درباره کوپایلت؛ معرفی کامل هوش مصنوعی مایکروسافت', 'مایکروسافت کوپایلت ازجمله چت‌بات‌های هوش مصنوعی کاربردی است که شما را در این مطلب به‌طور کامل با آن آشنا می‌کنیم.', 'thumbnail.png'),
(21, 'نامه نگاری چیست؟ اصول صحیح مکاتبات اداری و سازمانی چگونه است؟', 'whats-letter-writing', 'نامه-نگاری-scaled.jpg', '<p>پیرو مقاله نامه اداری، نامه نگاری اداری یا سازمانی با نوشتن نامه معمولی و دوستانه متفاوت است. در نوشتن نامه اداری یا سازمانی حتما باید اصول نامه نگاری را رعایت کنیم. و از کلمات اداری محترمانه استفاده کنیم.</p>', '<p style=\"margin-right:0px;text-align:justify;\">نامه نگاری آن هم اداری دارای قواعد و اصول خاصی است. در نگاه اول ممکن است پیچیده باشد. اما در عین حال بسار ساده و روان است. در این مقاله قصد داریم در خصوص اصول نامه نگاری اداری و نحوه نوشتن نامه اداری صحبت کنیم. پس با ما همراه باشید.</p><h2><strong>نامه‌ نگاری چیست؟</strong></h2><p style=\"margin-right:0px;text-align:justify;\">نامه‌نگاری به فرایند نوشتن و ارسال نامه به شخص یا افراد دیگر اطلاق می‌شود. نامه‌نگاری می‌تواند به شکل رسمی یا غیررسمی باشد و برای ارتباط با دوستان، خانواده، همکاران و حتی برای ارتباط با مقامات دولتی و تجاری استفاده می‌شود.</p><p style=\"margin-right:0px;text-align:justify;\">نامه‌ها معمولاً شامل متنی هستند که شامل اطلاعات، احساسات، انتقادات و درخواست‌های مختلفی است. در نامه‌های رسمی، عنوان، تاریخ، آدرس فرستنده و گیرنده، شروع و پایان نامه، امضا و مهر فرستنده قرار داده می‌شود. در نامه‌نگاری غیررسمی، این موارد ممکن است کمتر به کار رود.</p><p style=\"margin-right:0px;text-align:justify;\">نامه‌نگاری یکی از روش‌های مؤثر برای برقراری ارتباطات شخصی و حرفه‌ای است و می‌تواند به عنوان یک ابزار ارتباطی بسیار کارآمد در اختیار افراد قرار گیرد.</p><h2><strong>نامه‌ نگاری اداری چیست؟</strong></h2><p style=\"margin-right:0px;text-align:justify;\">نامه‌ نگاری اداری به فرایند نوشتن و ارسال نامه در محیط کاری و اداری اشاره دارد. در این نوع از نامه‌نگاری، از قالب‌ها و نمونه‌های استاندارد برای نوشتن نامه‌های رسمی و اداری استفاده می‌شود.</p><p style=\"margin-right:0px;text-align:justify;\">نامه‌های اداری ممکن است شامل درخواست‌های مختلفی باشند، مانند درخواست اخذ مجوز، درخواست ارسال مستندات، درخواست تمدید قرارداد و غیره. در نامه‌های اداری، باید از اصول نگارشی مناسبی استفاده شود و نامه باید به صورت رسمی و با دقت کامل نوشته شود.</p><p>کارشناسان اداری برای سهولت انجام کار از مینوت نامه استفاده می کنند.</p><h2><strong>برای نوشتن نامه‌ اداری، باید از اصطلاحات خاصی استفاده کنیم؟</strong></h2><p style=\"margin-right:0px;text-align:justify;\">در <strong>نوشتن نامه‌های اداری</strong> باید از اصطلاحات خاصی که در محیط کاری استفاده می‌شوند، استفاده کرد. این اصطلاحات شامل اصطلاحات حقوقی، مدیریتی، مالی و رسمی دیگر هستند. به عنوان مثال، در نامه‌هایی که مربوط به مسائل حقوقی هستند، باید اصطلاحات قانونی و حقوقی مناسبی را به کار برد.</p><p style=\"margin-right:0px;text-align:justify;\">همچنین در نامه‌های مربوط به مسائل مدیریتی، باید از اصطلاحات و عباراتی که در مدیریت کاربرد دارند، استفاده شود. به عبارت دیگر می توانیم از اصطلاحات و <strong>کلمات محترمانه اداری</strong> استفاده کنیم.</p><p style=\"margin-right:0px;text-align:justify;\">در هر صورت، باید به یاد داشت که در نوشتن نامه‌های اداری، باید از اصطلاحات سختگیرانه و بسیار پیچیده خودداری کرد و باید از اصطلاحاتی استفاده کرد که به راحتی درک و فهمیدن آن‌ها توسط مخاطبان کمک می‌کند. همچنین باید از نوشتن جملات پیچیده و بلند خودداری کرده و جملات را به شکل ساده و روان بیان کرد.</p><h2><strong>نحوه نوشتن نامه اداری و نامه نگاری</strong></h2><p style=\"margin-right:0px;text-align:justify;\">برای <strong>نوشتن نامه اداری</strong>، می‌توانید از قالب‌های استاندارد و معمول مانند قالب زیر استفاده کنید و سپس متن نامه را براساس موضوع مورد نظر خود نوشته و با امضاء و مهر فرستنده به پایان برسانید:</p><p style=\"margin-right:0px;text-align:justify;\">[عنوان نامه]</p><p style=\"margin-right:0px;text-align:justify;\">[نام و نشانی فرستنده]<br>[تاریخ]</p><p style=\"margin-right:0px;text-align:justify;\">[نام و نشانی گیرنده]</p><p style=\"margin-right:0px;text-align:justify;\">معمولاً با سلام و احوال‌پرسی شروع می‌شود.</p><p style=\"margin-right:0px;text-align:justify;\">سپس، در قسمت متن نامه، به صورت خلاصه و واضح، موضوعی که قصد بیان آن را دارید را بیان کنید. در ادامه، باید توضیحات لازم درباره موضوع را بیان کرده و درخواست، پیشنهاد یا مشکل خود را بیان کنید. در این قسمت باید از جملات ساده و روان و اصطلاحاتی که در محیط کاری استفاده می‌شوند، استفاده کنید.</p><p style=\"margin-right:0px;text-align:justify;\">در انتها، با سپاس از توجه و انجام درخواست شما، به امضاء و مهر فرستنده بپردازید.</p><p style=\"margin-right:0px;text-align:justify;\">البته باید توجه داشت که قالب نامه اداری بسته به نوع نامه و مخاطبان ممکن است تغییر کند. همچنین باید در نوشتن نامه اداری، از اصول نگارشی مناسبی استفاده کرده و به دقت املا و نوشتار خود را بررسی کرد.</p><p style=\"margin-right:0px;text-align:justify;\">امروزه سیستم های اداری مثل <strong>نرم افزار دبیرخانه</strong> یا <strong>نرم افزار اتوماسیون اداری</strong> انواع قالب های نامه اداری را در خود دارند. که کار کاربران را بسیار ساده و آسان کرده است.</p><h2><strong>نمونه نامه نگاری اداری برای درخواست مرخصی</strong></h2><p style=\"margin-right:0px;text-align:justify;\">البته لازم به ذکر است که قالب و محتوای نامه اداری بسته به نوع نامه و مخاطبان ممکن است تغییر کند. اما به عنوان یک نمونه کلی برای درخواست مرخصی، می‌توانید از قالب زیر استفاده کنید:</p><p style=\"margin-right:0px;text-align:justify;\">[عنوان نامه]</p><p style=\"margin-right:0px;text-align:justify;\">[نام و نشانی فرستنده]<br>[تاریخ]</p><p style=\"margin-right:0px;text-align:justify;\">[نام و نشانی گیرنده]</p><p style=\"margin-right:0px;text-align:justify;\">با سلام و احترام،</p><p style=\"margin-right:0px;text-align:justify;\">اینجانب [نام و نام خانوادگی شما] که در [نام سازمان/شرکت] به عنوان [سمت شما در سازمان/شرکت] خدمت می‌کند، درخواست مرخصی [نوع مرخصی مانند سالیانه، استحقاقی و غیره] خود را از تاریخ [تاریخ شروع مرخصی] تا تاریخ [تاریخ پایان مرخصی] به مدت [تعداد روزهای مرخصی] دارم.</p><p style=\"margin-right:0px;text-align:justify;\">در این مدت، به علت مرخصی، اینجانب قادر به انجام کارهای مربوط به شغلی خود نخواهد بود. در صورتی که در این مدت نیاز به اطلاعات بیشتری دارید، می‌توانید با اینجانب تماس بگیرید.</p><p style=\"margin-right:0px;text-align:justify;\">با تشکر،<br>[امضاء و مهر فرستنده]</p><h2><strong>اصول نامه نگاری صحیح</strong><br>&nbsp;</h2><p style=\"margin-right:0px;text-align:justify;\">نوشتن یک <strong>نامه اداری ساده</strong> و خوب و موفق نیاز به رعایت اصول نامه نگاری و نگارشی است. در زیر به برخی اصول نامه نگاری و نگارش نامه اشاره می‌کنم:</p><ol><li><strong>پرهیز از استفاده از جملات بلند و پیچیده:</strong> در نوشتن نامه باید از جملات ساده و روان استفاده کرد و از جملات بلند و پیچیده خودداری کرد.</li><li><strong>استفاده از قالب‌های استاندارد:</strong> از قالب‌های استاندارد برای نوشتن نامه استفاده کنید. این قالب‌ها شامل عنوان، تاریخ، نام و نشانی فرستنده و گیرنده، متن نامه و امضاء می‌شوند.</li><li><strong>املا و نوشتار دقیق:</strong> در نوشتن نامه، باید به دقت املا و نوشتار خود را بررسی کرد و از اشتباهات املایی و نوشتاری خودداری کرد.</li><li><strong>استفاده از زبان رسمی:</strong> در نوشتن نامه باید از زبان رسمی و مودبانه استفاده کرد و از اصطلاحات نامناسب و غیررسمی خودداری کرد.</li><li><strong>رعایت اصول اخلاقی و قوانین:</strong> در نوشتن نامه باید از اصول اخلاقی و قوانین رعایت کرد و از بیان مطالبی که مخالف با اخلاق و قوانین هستند، خودداری کرد.</li><li><strong>توجه به مخاطب:</strong> در نوشتن نامه باید به مخاطب خود توجه کرد و با توجه به مخاطب خود، از سبک و اصطلاحات مناسب استفاده کرد.</li><li><strong>استفاده از مطالب مرتبط:</strong> در نوشتن نامه باید به موضوع مورد نظر خود توجه کرد. و از مطالب مرتبط و دقیق استفاده کرد.</li></ol><h3><strong>اصول نامه نگاری صحیح و رسمی</strong><br>&nbsp;</h3><ol><li><strong>استفاده از اصطلاحات و واژگان متناسب:</strong> در نوشتن نامه باید از اصطلاحات و واژگان متناسب با حوزه خود استفاده کرد. و از اصطلاحات غیرمعمول و سختگیرانه خودداری کرد</li><li><strong>موضوع نامه:</strong> باید موضوع نامه را با دقت و روشنی بیان کرد و از جزئیات لازم برای درک موضوع استفاده کرد.</li><li><strong>ساختار نامه:</strong> باید ساختار مناسب برای نامه انتخاب کرد و در نوشتن آن به ترتیب و ارتباط بین پاراگراف‌ها توجه کرد.</li><li><strong>مدت زمان نوشتن نامه:</strong> برای نوشتن یک نامه موفق، باید به مدت زمان نوشتن آن توجه کرد و به دقت و با دقت آن را نگارش کرد.</li><li><strong>فرستادن کپی:</strong> در برخی موارد، فرستادن کپی از نامه می‌تواند مفید باشد. برای مثال، اگر به چند نفر نامه بنویسید، می‌توانید به همه آنها کپی از نامه را ارسال کنید، تا همه با محتوای نامه آشنا شوند.</li><li><strong>پایان نامه:</strong> در پایان نامه، باید با تشکر از مخاطبان، نام و امضاء خود را درج کرد.</li></ol><p style=\"margin-right:0px;text-align:justify;\">در کل، برای نوشتن یک نامه کاری موفق، باید به جزییات و اصول نگارشی توجه کرد و به دقت و با دقت آن را نگارش کرد. همچنین، باید همیشه به مخاطب خود توجه کرده و به سبک و اصطلاحات مناسب استفاده کرد.</p><h2><strong>تاریخچه نامه نگاری در ایران</strong></h2><p style=\"margin-right:0px;text-align:justify;\">نامه نگاری یکی از قدیمی‌ترین رسانه‌های ارتباطی است. از دوران باستان و در تمامی فرهنگ‌ها و ادیان، مورد استفاده بوده است. از نگارش نامه‌های شاهنامه تا نامه‌های رسمی و اداری امروزی، نامه نگاری یکی از مهم‌ترین و پایدارترین شیوه‌های ارتباطی انسان با هم بوده است. در ایران نیز، نامه نگاری از دوران باستان و با ظهور فرهنگ ادبیات و پیشرفت فرهنگی، به عنوان یکی از مهم‌ترین شیوه‌های ارتباطی در ایران شناخته شد.</p><p style=\"margin-right:0px;text-align:justify;\">در دوران باستان، نامه نگاری به عنوان یکی از شیوه‌های ارتباطی میان مردم، استفاده می‌شد. برای مثال، در شاهنامه فردوسی، نامه‌هایی بین شاهان و سرداران، شاهان و مشاوران، شاهان و پادشاهان دیگر، به طور مکرر ذکر شده‌اند.</p><p style=\"margin-right:0px;text-align:justify;\">در دوران اسلامی نیز، نامه نگاری به عنوان یکی از مهم‌ترین شیوه‌های ارتباطی استفاده می‌شد. در این دوران، نامه‌هایی بین حکام و امرا، شخصیت‌های دینی، مورخان و ادبیاتیان نوشته می‌شد. در ایران، اشعار بسیاری در قالب نامه‌ها به یادگار مانده است که نشان دهنده اهمیت نامه نگاری در دوران اسلامی است.</p><p style=\"margin-right:0px;text-align:justify;\">در دوران قاجاریه نیز، نامه نگاری به عنوان یکی از شیوه‌های ارتباطی مهم، استفاده می‌شد. نامه‌هایی بین شاه و مشاوران، شاه و پادشاهان دیگر، شاه و امرا، و شخصیت‌های دیگر نوشته شدند.</p><p style=\"margin-right:0px;text-align:justify;\">از دوران پهلوی نیز، نامه نگاری به عنوان یکی از شیوه‌های ارتباطی مهم استفاده شد. در این دوران، نامه‌هایی بین مسئولین دولتی، سیاسی، اداری و اقتصادی نوشته می‌شد.</p><p style=\"margin-right:0px;text-align:justify;\">در کل، نامه نگاری به عنوان یکی از قدیمی‌ترین و مهم‌ترین شیوه‌های ارتباطی در ایران، از دوران باستان تا به امروز به کار گرفته شده است.</p><h2><strong>آیین و روش نامه نگاری اداری و سازمانی</strong></h2><p style=\"margin-right:0px;text-align:justify;\">نامه نگاری اداری با سایر نامه ها تفاوت بسیار زیادی دارد. در یک نامه اداری لحن رسمی همراه با رعایت ادب و احترام نکته‌ی بسیار مهمی است. در صورتی که نامه از ضوابط و قواعد یک نامه اداری تبعیت نکند، ممکن است از آن برداشت‌های زیادی انجام شود که این امر می‌تواند بسیار ناخوشایند باشد. پس برای انتقال پیام خود در یک نامه باید آن‌را واضح، روان و مودبانه بنویسیم. نکاتی که در ذیل آورده می‌شود، آیین و روشی است که به وسیله آن می‌توان نامه اداری هوشمندانه و تاثیرگذاری نوشت.</p><ul><li style=\"text-align:justify;\">در نوشتن یک نامه اداری باید سلسله مراتب به خوبی رعایت شود. اینکه بدانیم برای چه فردی، با چه مقامی قرار است نامه بنویسیم بسیار مهم است.</li><li style=\"text-align:justify;\">نامه باید با ذکر نام و یاد خدا، شماره، تاریخ و اینکه پیوست همراه نامه است یا نه شروع شود.</li><li style=\"text-align:justify;\">اگر در پاسخ به نامه‌ی دیگری نامه می‌نویسید. باید در آغاز نامه شماره و تاریخ نامه ای که در حال پاسخ دادن به آن هستید، بنویسید.</li><li style=\"text-align:justify;\">اگر نامه بین دو سازمان جابه‌جا می‌شود بهتر است. نام سازمان مبدا نوشته و سپس نام سازمان مقصد نوشته شود.</li><li style=\"text-align:justify;\">متن نامه را تا جایی که می‌توانید رسا و واضح ذکر کنید.</li><li style=\"text-align:justify;\">از تکرار بی معنی و بی‌مورد کلمات شدیدا خودداری کیند.</li><li style=\"text-align:justify;\">در نامه‌های اینترنتی تایپ همه نامه با فونت بزرگ اصلا جالب نیست. تا حد ممکن فونت تیتر و عنوان را نسبت به بقیه متن تغییر دهید.</li><li style=\"text-align:justify;\">در آخر نامه به اندازه یک خط از متن فاصله گذاشته و در قسمت چپ امضا کنید و تاریخ بزنید.</li><li style=\"text-align:justify;\">به هیچ عنوان غلط املایی نداشته باشید.</li><li style=\"text-align:justify;\">اگر قرار باشد که نامه به بخش‌های دیگری نیز ارجاع شود. باید در قسمت پایین نامه این نکته ذکر شود.</li><li style=\"text-align:justify;\">جایی برای نوشتن حاشیه و نکات درنظر بگیرید.</li></ul>', 1, 1020, '2024-09-21 15:59:34', '2024-09-21 16:01:26', 1, NULL, 'نامه نگاری چیست؟ اصول صحیح مکاتبات اداری و سازمانی چگونه است؟', 'پیرو مقاله نامه اداری، نامه نگاری اداری یا سازمانی با نوشتن نامه معمولی و دوستانه متفاوت است. در نوشتن نامه اداری یا سازمانی حتما باید اصول نامه نگاری را رعایت کنیم. و از کلمات اداری محترمانه استفاده کنیم.', 'thumbnail.png');

-- --------------------------------------------------------

--
-- Table structure for table `redirects`
--

CREATE TABLE `redirects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 301 COMMENT '301, 302',
  `status` int(11) NOT NULL,
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
  `display_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'writer', 'نویسنده', '2024-09-19 10:43:18', '2024-09-19 10:43:18'),
(2, 'editor', 'ویراستار', '2024-09-19 10:43:37', '2024-09-19 10:43:37'),
(3, 'admin', 'مدیر', '2024-09-20 10:43:37', '2024-09-20 10:43:37'),
(4, 'store-admin', 'مدیر فروشگاه', '2024-09-19 10:44:10', '2024-09-19 10:44:10'),
(5, 'super-admin', 'مدیر کل', '2024-09-18 10:44:28', '2024-09-18 10:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `search_history`
--

CREATE TABLE `search_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `search_text` varchar(255) NOT NULL,
  `count` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Morteza Goodarzi', 'goodarzi.morteza73@gmail.com ', NULL, '$2y$12$l8ifia0CDYtWj1dGDJbg0u6iny.mncTJx4QOSyopX9KKJRbqQ.tN2', NULL, '2024-09-05 10:02:19', '2024-09-05 10:02:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `categorizables`
--
ALTER TABLE `categorizables`
  ADD PRIMARY KEY (`categorizable_id`,`category_model_id`,`categorizable_type`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleriables`
--
ALTER TABLE `galleriables`
  ADD PRIMARY KEY (`galleriable_id`,`gallery_model_id`,`galleriable_type`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_posts`
--
ALTER TABLE `home_page_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_page_posts_post_id_foreign` (`post_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_link_unique` (`link`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`permission_id`,`user_id`),
  ADD KEY `permission_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `redirects`
--
ALTER TABLE `redirects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `redirects_from_unique` (`from`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `search_history`
--
ALTER TABLE `search_history`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_page_posts`
--
ALTER TABLE `home_page_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `redirects`
--
ALTER TABLE `redirects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `search_history`
--
ALTER TABLE `search_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `home_page_posts`
--
ALTER TABLE `home_page_posts`
  ADD CONSTRAINT `home_page_posts_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

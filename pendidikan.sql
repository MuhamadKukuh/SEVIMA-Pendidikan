-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 02:26 AM
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
-- Database: `pendidikan`
--

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `consultaion_id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `consultation_content` text NOT NULL,
  `status` enum('Public','Private') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`consultaion_id`, `student_id`, `consultation_content`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Quo repudiandae voluptatem earum in. Repellat ullam corrupti sit tempora. Cupiditate animi sunt in vel et qui.', 'Public', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(2, 3, 'Ipsa error vero explicabo accusantium in. Error quo sed id sed corporis. Eaque nihil nihil et. Blanditiis ea aspernatur et et.', 'Public', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(3, 1, 'Ea deserunt iure eum at. Non voluptatem aut voluptatem inventore. Et rerum qui magnam. Et blanditiis quod et et reiciendis natus.', 'Public', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(4, 2, 'Quia voluptate quasi tempore blanditiis sint voluptas. Eaque optio quia ut minima. Quia qui quisquam velit cum ullam blanditiis illum labore.', 'Public', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(5, 1, 'Maxime culpa dolor commodi est incidunt tenetur. Perspiciatis minima quis alias et ipsa. Dolor totam et facere enim magni voluptatem enim. Adipisci provident rerum ut eaque.', 'Public', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(6, 1, 'Et qui iste consequatur. Sunt optio dolore vero non voluptatem rem illo. Natus et repellendus voluptates at. Et quam quos esse tenetur praesentium maiores. Praesentium et ut suscipit velit totam ut.', 'Public', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(7, 3, 'Minus nihil soluta ullam aliquam et non. Et optio sed nisi aut. Velit ratione eligendi id temporibus consequatur perspiciatis. Et nihil et sint ut.', 'Public', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(8, 1, 'Deleniti sint ea eveniet ab officiis. Distinctio sed quia et nihil doloribus cumque. Rerum corporis esse optio modi est recusandae.', 'Public', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(9, 3, 'Necessitatibus consequuntur in ut illum illum. Deserunt ad cum assumenda qui. Numquam quia commodi molestiae qui maiores voluptatem. Ut et illum repellat inventore et nihil id reiciendis.', 'Public', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(10, 1, 'Sed vel sunt eos iure ad. Et nihil vel ut rem vero sunt est provident. Sit aut consequatur vero. Perferendis enim ipsam a molestiae corporis eius rerum.', 'Public', '2023-06-24 13:58:26', '2023-06-24 13:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `consultation_feedback`
--

CREATE TABLE `consultation_feedback` (
  `feedback_id` bigint(20) UNSIGNED NOT NULL,
  `feedback` text NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `consultation_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultation_feedback`
--

INSERT INTO `consultation_feedback` (`feedback_id`, `feedback`, `teacher_id`, `consultation_id`, `created_at`, `updated_at`) VALUES
(1, 'Consequuntur amet facilis voluptatem qui fugit. Eum inventore eaque veniam est suscipit.', 1, 6, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(2, 'Non deleniti assumenda non ratione vel fuga rerum. Enim ea nisi assumenda aspernatur accusantium.', 1, 7, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(3, 'Nisi consequuntur possimus doloremque fugit earum repellat. Iusto officiis ut culpa sit at enim earum. Dolore optio neque rem rem sint.', 7, 1, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(4, 'Eum velit harum facilis id illo tenetur eum. Nisi est aut dolores in repellat. Rem voluptates velit qui.', 4, 10, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(5, 'Iusto sint sequi omnis praesentium autem qui. Veniam laudantium et atque illo sed quo. Alias velit enim iusto et.', 4, 1, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(6, 'Voluptates recusandae eum veniam occaecati sapiente. Aspernatur voluptas qui eius corporis harum pariatur.', 10, 10, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(7, 'Praesentium ad sed suscipit impedit qui. Consequuntur neque qui voluptate.', 7, 10, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(8, 'Reiciendis consequuntur nihil aut. Veniam possimus minima aut. Voluptatem illo eum excepturi ullam doloremque.', 7, 6, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(9, 'Odit ipsam ipsa accusamus non temporibus magnam iste. Error eum placeat non amet. Incidunt magnam est et est vel non.', 1, 1, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(10, 'Dolorem deleniti doloribus et praesentium. Voluptas aut ut tempora corporis sed deleniti aut ipsam.', 4, 1, '2023-06-24 13:58:26', '2023-06-24 13:58:26');

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
-- Table structure for table `learning_materials`
--

CREATE TABLE `learning_materials` (
  `material_id` bigint(20) UNSIGNED NOT NULL,
  `material_title` varchar(100) NOT NULL,
  `material_cover` varchar(255) DEFAULT NULL,
  `material_content` text NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `learning_materials`
--

INSERT INTO `learning_materials` (`material_id`, `material_title`, `material_cover`, `material_content`, `teacher_id`, `subject_id`, `created_at`, `updated_at`) VALUES
(1, 'Mya Goldner', NULL, 'Rem asperiores incidunt voluptate eos dolorem. Quas consequatur quaerat error itaque. Dolor a reprehenderit est. Architecto et minus consequatur dignissimos et asperiores.', 9, 2, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(2, 'Verner Lueilwitz III', NULL, 'Aut omnis quod dolorem corrupti odit. Et optio amet eum ea. Et esse praesentium ut rerum natus nisi. Doloremque consequatur est nulla incidunt maxime. Nulla voluptas nobis laboriosam suscipit deleniti ipsa. Corrupti impedit nihil dolor voluptates dolor hic dolores omnis.', 5, 5, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(3, 'Ansley Kling', NULL, 'Rerum laudantium fugiat voluptas dolor eos similique vel. Aperiam ex sit voluptatem neque ipsa nisi voluptatem. Non enim quo nisi inventore quas. Excepturi ea molestias id quis et. Tempora id qui et quae illum repellendus. Suscipit vitae porro consequatur qui animi aspernatur dignissimos.', 3, 4, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(5, 'Isac Rowe', NULL, 'Et voluptas id optio molestias ut rerum repudiandae. Deleniti possimus expedita illo adipisci corporis voluptatem. Fugiat aut earum rerum ut nam et et. Placeat repudiandae quia ipsam ipsam quis ratione quia.', 9, 5, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(6, 'Ms. Emelia Koss', NULL, 'Laudantium ea voluptatem ducimus minus. Distinctio enim blanditiis consequatur eveniet. Nihil voluptates atque reprehenderit repudiandae voluptas tenetur pariatur aliquid. Aut optio pariatur quas blanditiis. Quidem delectus natus ullam aut omnis. Et facere voluptatum maiores cumque.', 1, 3, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(7, 'Daphne Luettgen', NULL, 'Corporis magni dolor molestias architecto cumque illum. Nulla odio veniam consectetur nulla. Ea eaque sapiente eos quia non. Ipsa error provident rerum a doloremque eveniet. Cupiditate cum corrupti perspiciatis velit ab. Ratione vitae quo atque cumque saepe voluptas.', 9, 4, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(8, 'Bethel Nienow', NULL, 'Labore quaerat rerum vero. Fuga magni ratione aut tenetur. Laboriosam amet saepe voluptatem blanditiis omnis eos. Itaque debitis libero ut provident sint.', 6, 5, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(9, 'Ashleigh Torp', NULL, 'Ipsam ducimus incidunt culpa corporis dignissimos. Nulla eveniet aut dolorem sequi perspiciatis et sit. Sunt praesentium ab ipsa ea veritatis minus in. Voluptatem eligendi rerum odio amet unde quia dolorum commodi.', 2, 2, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(10, 'Xavier Kovacek', NULL, 'Alias nihil iusto voluptatem et. Et hic ipsam id dolores quisquam sapiente quas. Atque in nisi expedita expedita laboriosam corrupti. Dolores eum autem dolore similique officia et maxime. Unde iusto est et voluptatem soluta eos.', 10, 2, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(11, 'BAB 1 Materi ABCD Updated', NULL, 'Duar <b>dasdgsajhgdajhd Idasdad<i>fasdadasd ddd dsds</i></b>', 4, 1, '2023-06-24 15:57:34', '2023-06-24 16:18:40'),
(12, 'BAB 1 Materi ABCD', 'images/e6pxEAEJ7NS9Yocp8h9f8dImFA0GBj9x6H2kJKwk.jpg', 'Duar <b>dasdgsajhgdajhd Idasdad<i>fasdadasd ddd</i></b>', 4, 1, '2023-06-24 15:58:25', '2023-06-24 16:42:28');

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
(5, '2023_06_24_064347_create_students_table', 1),
(6, '2023_06_24_064405_create_teachers_table', 1),
(7, '2023_06_24_064725_create_learning_materials_table', 1),
(8, '2023_06_24_064907_create_study_programs_table', 1),
(9, '2023_06_24_064948_create_consultations_table', 1),
(10, '2023_06_24_065002_create_consultation_feedback_table', 1),
(11, '2023_06_24_070423_create_school_classes_table', 1),
(12, '2023_06_24_070852_create_subjects_table', 1),
(13, '2023_06_24_072919_create_roles_table', 1);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Student', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(2, 'Teacher', '2023-06-24 13:58:26', '2023-06-24 13:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `school_classes`
--

CREATE TABLE `school_classes` (
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_classes`
--

INSERT INTO `school_classes` (`class_id`, `class`, `created_at`, `updated_at`) VALUES
(1, '10', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(2, '11', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(3, '12', '2023-06-24 13:58:26', '2023-06-24 13:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `nik` char(12) NOT NULL,
  `nis` char(12) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `address` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `class_id` bigint(20) UNSIGNED NOT NULL,
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `nik`, `nis`, `full_name`, `address`, `user_id`, `class_id`, `program_id`, `created_at`, `updated_at`) VALUES
(1, '36608914', '285507413', 'Dr. Darrion Okuneva V', '362 Donnelly Cove Apt. 935\nPourosville, RI 93948-7184', 6, 3, 1, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(2, '969729738', '180326233', 'Prof. Michel Bergnaum', '9614 Cartwright Stravenue\nPort Uliseston, DE 68138-7111', 3, 3, 1, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(3, '590337055', '612457266', 'Donny Doyle', '2031 Jakubowski Prairie Suite 291\nWest Dee, MD 38265-2552', 1, 1, 2, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(4, '160684208', '998424656', 'Dr. Jayde Abernathy Jr.', '51966 Renner Manor\nSouth Keanu, AZ 09967', 10, 1, 1, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(5, '542308679', '760971093', 'Aleen Gerhold', '77923 Finn Ramp Suite 837\nSeamusside, GA 65895', 2, 3, 2, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(6, '32994290', '107025628', 'Mr. Arlo Spinka PhD', '39214 Rosina Wall Apt. 771\nKuhnport, SD 29365', 4, 2, 2, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(7, '940643193', '826929510', 'Jasper Hickle', '57730 Dakota Mount Suite 219\nLake Edythe, MI 31450', 9, 1, 2, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(8, '382204832', '472465713', 'Aron Kling IV', '20533 Zieme Dale\nNew Emanuel, KY 46139-5161', 8, 3, 2, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(9, '975002470', '296164144', 'Dedrick McLaughlin', '6469 Grant Plaza Apt. 317\nPort Pink, AZ 49100-9072', 7, 1, 2, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(10, '281928099', '685339478', 'Sonia Kunde PhD', '279 Dax Bypass\nWest Jaeden, AL 83657-2893', 5, 2, 2, '2023-06-24 13:58:26', '2023-06-24 13:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `study_programs`
--

CREATE TABLE `study_programs` (
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `program` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_programs`
--

INSERT INTO `study_programs` (`program_id`, `program`, `created_at`, `updated_at`) VALUES
(1, 'IPA', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(2, 'IPS', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(3, 'Campuran', '2023-06-24 13:58:26', '2023-06-24 13:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'Sejarah', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(2, 'Matematika', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(3, 'Bahasa Indonesia', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(4, 'Bahasa Inggris', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(5, 'Sejarah Indonesia', '2023-06-24 13:58:26', '2023-06-24 13:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `nip` char(12) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `nip`, `teacher_name`, `user_id`, `program_id`, `created_at`, `updated_at`) VALUES
(1, '520006485', 'Urban Zemlak', 12, 3, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(2, '863146562', 'Miss Gabriella Farrell I', 18, 2, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(3, '137755575', 'Dianna King', 16, 3, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(4, '76358126', 'Annalise Wiegand', 11, 3, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(5, '231418257', 'Viva Romaguera IV', 14, 1, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(6, '882015643', 'Sally Hills V', 17, 2, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(7, '729870534', 'Mrs. Icie Veum DDS', 15, 1, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(8, '526604627', 'Jada Price', 20, 2, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(9, '939178641', 'Jude Schowalter', 13, 2, '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(10, '179642506', 'Mrs. Lurline Altenwerth', 19, 3, '2023-06-24 13:58:26', '2023-06-24 13:58:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` char(14) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `phone_number`, `email_verified_at`, `role_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ncassin@example.com', '27690869', '2023-06-24 13:58:26', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ESedtiYGZn', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(2, 'hyman.ondricka@example.net', '506692895', '2023-06-24 13:58:26', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'a8mGxueUua', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(3, 'roberts.janiya@example.org', '133958771', '2023-06-24 13:58:26', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8tebG2OJfF', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(4, 'nikita56@example.net', '585945438', '2023-06-24 13:58:26', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NyA1Yb7Jkf', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(5, 'ross96@example.net', '987954434', '2023-06-24 13:58:26', 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BV6EUcCMMr', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(6, 'boyer.nicholas@example.net', '963693296', '2023-06-24 13:58:26', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'BknIjVgCAD', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(7, 'ipacocha@example.org', '811684837', '2023-06-24 13:58:26', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'HPm9uZIpVW', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(8, 'davis.demarco@example.net', '471428639', '2023-06-24 13:58:26', 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xptPOPMyIuqOlJA8bvfmrpPjWLpVhR1ieKv06oM5y2jYt9cyFAQLKkr1Lh6I', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(9, 'mayert.damion@example.org', '975270798', '2023-06-24 13:58:26', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'jesaHPLeLL', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(10, 'tremaine10@example.net', '848508607', '2023-06-24 13:58:26', 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2kf96rvBDO', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(11, 'shirley00@example.net', '580202620', '2023-06-24 13:58:26', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'PNOvEptQS6JtnQjWW5iqoih6DUlAHILCb5FWjl1KIjx5LHrfmH7z00jPqTLX', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(12, 'madaline55@example.net', '577027193', '2023-06-24 13:58:26', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '4s2WUTkcb4', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(13, 'chloe60@example.org', '793210379', '2023-06-24 13:58:26', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rrE5o4ngA4', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(14, 'schoen.zachary@example.org', '494248082', '2023-06-24 13:58:26', 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'QEo6W2ZuMT', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(15, 'rgaylord@example.com', '67528800', '2023-06-24 13:58:26', 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CUr7r8ruWD', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(16, 'effie.corwin@example.org', '505110605', '2023-06-24 13:58:26', 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XBrMeT70ASW2xTdTIRc5IGrAwKEhGdGiviw1B166egyDYCLWDacMSOPNyWgi', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(17, 'jakob.greenfelder@example.net', '354251509', '2023-06-24 13:58:26', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Jf7HfESccD', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(18, 'bjacobson@example.com', '14435177', '2023-06-24 13:58:26', 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Qeb5WPmCGz', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(19, 'reynolds.sister@example.com', '239444344', '2023-06-24 13:58:26', 2, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'wlCM7PEYUl', '2023-06-24 13:58:26', '2023-06-24 13:58:26'),
(20, 'jordon37@example.com', '825429190', '2023-06-24 13:58:26', 1, '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NVd53H8Wko', '2023-06-24 13:58:26', '2023-06-24 13:58:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`consultaion_id`);

--
-- Indexes for table `consultation_feedback`
--
ALTER TABLE `consultation_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `learning_materials`
--
ALTER TABLE `learning_materials`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `roles_role_unique` (`role`);

--
-- Indexes for table `school_classes`
--
ALTER TABLE `school_classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `students_nik_unique` (`nik`),
  ADD UNIQUE KEY `students_nis_unique` (`nis`);

--
-- Indexes for table `study_programs`
--
ALTER TABLE `study_programs`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `teachers_nip_unique` (`nip`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `consultaion_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `consultation_feedback`
--
ALTER TABLE `consultation_feedback`
  MODIFY `feedback_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `learning_materials`
--
ALTER TABLE `learning_materials`
  MODIFY `material_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_classes`
--
ALTER TABLE `school_classes`
  MODIFY `class_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `study_programs`
--
ALTER TABLE `study_programs`
  MODIFY `program_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

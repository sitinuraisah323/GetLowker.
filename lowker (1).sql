-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 03:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lowker`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeryphoto`
--

CREATE TABLE `galeryphoto` (
  `kode` int(11) NOT NULL,
  `judul_gambar` varchar(100) DEFAULT NULL,
  `file_gambar` varchar(100) DEFAULT NULL,
  `description` tinytext DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gambars`
--

CREATE TABLE `gambars` (
  `id_gambar` int(10) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kotas`
--

CREATE TABLE `kotas` (
  `id_kota` bigint(20) UNSIGNED NOT NULL,
  `id_provinsi` int(5) NOT NULL,
  `nama_kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kotas`
--

INSERT INTO `kotas` (`id_kota`, `id_provinsi`, `nama_kota`, `created_at`, `updated_at`) VALUES
(3101, 31, 'Kabupaten Kepulauan Seribu', NULL, NULL),
(3171, 31, 'Kota Jakarta Selatan', NULL, NULL),
(3172, 31, 'Kota Jakarta Timur', NULL, NULL),
(3173, 31, 'Kota Jakarta Pusat', NULL, NULL),
(3174, 31, 'Kota Jakarta Barat', NULL, NULL),
(3175, 31, 'Kota Jakarta Utara', NULL, NULL),
(3201, 32, 'Kabupaten Bogor', NULL, NULL),
(3202, 32, 'Kabupaten Sukabumi', NULL, NULL),
(3203, 32, 'Kabupaten Cianjur', NULL, NULL),
(3204, 32, 'Kabupaten Bandung', NULL, NULL),
(3205, 32, 'Kabupaten Garut', NULL, NULL),
(3206, 32, 'Kabupaten Tasikmalaya', NULL, NULL),
(3207, 32, 'Kabupaten Ciamis', NULL, NULL),
(3208, 32, 'Kabupaten Kuningan', NULL, NULL),
(3209, 32, 'Kabupaten Cirebon', NULL, NULL),
(3210, 32, 'Kabupaten Majalengka', NULL, NULL),
(3211, 32, 'Kabupaten Sumedang', NULL, NULL),
(3212, 32, 'Kabupaten Indramayu', NULL, NULL),
(3213, 32, 'Kabupaten Subang', NULL, NULL),
(3214, 32, 'Kabupaten Purwakarta', NULL, NULL),
(3215, 32, 'Kabupaten Karawang', NULL, NULL),
(3216, 32, 'Kabupaten Bekasi', NULL, NULL),
(3217, 32, 'Kabupaten Bandung Barat', NULL, NULL),
(3218, 32, 'Kabupaten Pangandaran', NULL, NULL),
(3271, 32, 'Kota Bogor', NULL, NULL),
(3272, 32, 'Kota Sukabumi', NULL, NULL),
(3273, 32, 'Kota Bandung', NULL, NULL),
(3274, 32, 'Kota Cirebon', NULL, NULL),
(3275, 32, 'Kota Bekasi', NULL, NULL),
(3276, 32, 'Kota Depok', NULL, NULL),
(3277, 32, 'Kota Cimahi', NULL, NULL),
(3278, 32, 'Kota Tasikmalaya', NULL, NULL),
(3279, 32, 'Kota BANJAR', NULL, NULL),
(3301, 33, 'Kabupaten Cilacap', NULL, NULL),
(3302, 33, 'Kabupaten Banyumas', NULL, NULL),
(3303, 33, 'Kabupaten Purbalingga', NULL, NULL),
(3304, 33, 'Kabupaten Banjarnegara', NULL, NULL),
(3305, 33, 'Kabupaten Kebumen', NULL, NULL),
(3306, 33, 'Kabupaten Purworejo', NULL, NULL),
(3307, 33, 'Kabupaten Wonosobo', NULL, NULL),
(3308, 33, 'Kabupaten Magelang', NULL, NULL),
(3309, 33, 'Kabupaten Boyolali', NULL, NULL),
(3310, 33, 'Kabupaten Klaten', NULL, NULL),
(3311, 33, 'Kabupaten Sukoharjo', NULL, NULL),
(3312, 33, 'Kabupaten Wonogiri', NULL, NULL),
(3313, 33, 'Kabupaten Karanganyar', NULL, NULL),
(3314, 33, 'Kabupaten Sragen', NULL, NULL),
(3315, 33, 'Kabupaten Grobogan', NULL, NULL),
(3316, 33, 'Kabupaten Blora', NULL, NULL),
(3317, 33, 'Kabupaten Rembang', NULL, NULL),
(3318, 33, 'Kabupaten Pati', NULL, NULL),
(3319, 33, 'Kabupaten Kudus', NULL, NULL),
(3320, 33, 'Kabupaten Jepara', NULL, NULL),
(3321, 33, 'Kabupaten Demak', NULL, NULL),
(3322, 33, 'Kabupaten Semarang', NULL, NULL),
(3323, 33, 'Kabupaten Temanggung', NULL, NULL),
(3324, 33, 'Kabupaten Kendal', NULL, NULL),
(3325, 33, 'Kabupaten Batang', NULL, NULL),
(3326, 33, 'Kabupaten Pekalongan', NULL, NULL),
(3327, 33, 'Kabupaten Pemalang', NULL, NULL),
(3328, 33, 'Kabupaten Tegal', NULL, NULL),
(3329, 33, 'Kabupaten Brebes', NULL, NULL),
(3371, 33, 'Kota Magelang', NULL, NULL),
(3372, 33, 'Kota Surakarta', NULL, NULL),
(3373, 33, 'Kota Salatiga', NULL, NULL),
(3374, 33, 'Kota Semarang', NULL, NULL),
(3375, 33, 'Kota Pekalongan', NULL, NULL),
(3376, 33, 'Kota Tegal', NULL, NULL),
(3401, 34, 'Kabupaten kulon progo', NULL, NULL),
(3402, 34, 'Kabupaten bantul', NULL, NULL),
(3403, 34, 'Kabupaten gunung kidul', NULL, NULL),
(3404, 34, 'Kabupaten sleman', NULL, NULL),
(3471, 34, 'Kota yogyakarta', NULL, NULL),
(3501, 35, 'Kabupaten Pacitan', NULL, NULL),
(3502, 35, 'Kabupaten Ponorogo', NULL, NULL),
(3503, 35, 'Kabupaten Trenggalek', NULL, NULL),
(3504, 35, 'Kabupaten Tulungagung', NULL, NULL),
(3505, 35, 'Kabupaten Blitar', NULL, NULL),
(3506, 35, 'Kabupaten Kediri', NULL, NULL),
(3507, 35, 'Kabupaten Malang', NULL, NULL),
(3508, 35, 'Kabupaten Lumajang', NULL, NULL),
(3509, 35, 'Kabupaten Jember', NULL, NULL),
(3510, 35, 'Kabupaten Banyuwangi', NULL, NULL),
(3511, 35, 'Kabupaten Bondowoso', NULL, NULL),
(3512, 35, 'Kabupaten Situbondo', NULL, NULL),
(3513, 35, 'Kabupaten Probolinggo', NULL, NULL),
(3514, 35, 'Kabupaten Pasuruan', NULL, NULL),
(3515, 35, 'Kabupaten Sidoarjo', NULL, NULL),
(3516, 35, 'Kabupaten Mojokerto', NULL, NULL),
(3517, 35, 'Kabupaten Jombang', NULL, NULL),
(3518, 35, 'Kabupaten Nganjuk', NULL, NULL),
(3519, 35, 'Kabupaten Madiun', NULL, NULL),
(3520, 35, 'Kabupaten Magetan', NULL, NULL),
(3521, 35, 'Kabupaten Ngawi', NULL, NULL),
(3522, 35, 'Kabupaten Nojonegoro', NULL, NULL),
(3523, 35, 'Kabupaten Tuban', NULL, NULL),
(3524, 35, 'Kabupaten Lamongan', NULL, NULL),
(3525, 35, 'Kabupaten Gresik', NULL, NULL),
(3526, 35, 'Kabupaten Bangkalan', NULL, NULL),
(3527, 35, 'Kabupaten Sampang', NULL, NULL),
(3528, 35, 'Kabupaten Pamekasan', NULL, NULL),
(3529, 35, 'Kabupaten Sumenep', NULL, NULL),
(3571, 35, 'Kota Kediri', NULL, NULL),
(3572, 35, 'Kota Blitar', NULL, NULL),
(3573, 35, 'Kota Malang', NULL, NULL),
(3574, 35, 'Kota Probolinggo', NULL, NULL),
(3575, 35, 'Kota Pasuruan', NULL, NULL),
(3576, 35, 'Kota Mojokerto', NULL, NULL),
(3577, 35, 'Kota Madiun', NULL, NULL),
(3578, 35, 'Kota Surabaya', NULL, NULL),
(3579, 35, 'Kota Batu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lowkers`
--

CREATE TABLE `lowkers` (
  `id_lowker` int(10) UNSIGNED NOT NULL,
  `id_perusahaan` int(10) NOT NULL,
  `posisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gaji` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kualifikasi` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lowkers`
--

INSERT INTO `lowkers` (`id_lowker`, `id_perusahaan`, `posisi`, `lokasi`, `level`, `tipe`, `gaji`, `pendidikan`, `kualifikasi`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 1, 'Programmer', 'Kabupaten Kepulauan Seribu', 'Fresh Graduate', 'Full Time', '4 - 6 Juta', 'Minimal D3 Ilmu Komputer', '- Pria dan Wanita\r\n- Menguasai bahasa PHP\r\n- Menguasai framework Laravel/CI\r\n- Menguasai HTML, CSS dan Javascript\r\n- Bisa mengguanakan Database Mysql\r\n- Bisa mengggunakan API dan GIT', '- Membuat atau mengembangkan aplikasi web/mobile\r\n- Melakukan tugas sesuai requirement project manager\r\n- Melakukan pengembangan REST API', NULL, NULL),
(2, 2, 'PHP Programmer', 'Kota Semarang', 'Staff (non-management & non-supervisor)', 'Tetap', '5 - 10 Juta', 'Diploma/D1/D2/D3, Sarjana / S1', 'Pria 25 -35 tahun, jujur, berintegritas, loyal, berdedikasi dan bisa bekerja bersama tim.\r\nMenguasai PHP (Framework) Terbiasa menggunakan database mySQL atau SQL server serta Menguasai bahasa pemrogramman HTML, CSS, PHP.', 'Bertanggung jawab dalam membuat dan pengembangan aplikasi berbasis web, termasuk merancang database dan mengembangkan skrip-skrip agar aplikasi berjalan sesuai dengan fungsinya. Mengembangkan komponen back-end dan front-end yang menghubungkan aplikasi dengan layanan web lainnya.  Membuat modul PHP, mudah dalam pengujiannya serta dapat digunakan secara berulang, menganalisis, meninjau, dan menulis ulang program. Memberikan solusi pemecahan masalah bug dan penambahan berbagai fitur baru.', '2021-08-24 15:42:41', '2021-08-24 15:42:41'),
(3, 3, 'Front End Developer', 'Kota Jakarta Selatan', 'Staff (non-management & non-supervisor)', 'Purna Waktu / Full Time', '4 - 6 Juta', 'Diploma/D1/D2/D3', 'Pria, Usia 23 – 35 Tahun, Jujur dan Teliti\r\n– Programming-languages: HTML, PHP, Javascript, JSON, CSS.\r\n– Programming-tools: Visual Code. Adobe HD is optional.\r\n– Programming-libraries: Bootstrap, Angular.\r\n– Punya selera yang baik untuk UX/UI.', 'Perusahaan Bergerak dibidang Teknologi Informasi membutuhkan FrontEnd Developer yang kompeten dibidangnya.\r\n– Mengembangkan fitur baru untuk pengguna menggunakan React.js\r\n– Membangun komponen yang dapat digunakan kembali dan perpustakaan front-end untuk digunakan di masa mendatang.\r\n– Menerjemahkan desain dan gambar rangka menjadi kode berkualitas tinggi\r\n– Mengoptimalkan komponen untuk kinerja maksimum di berbagai perangkat dan browser berkemampuan web.', '2021-08-25 10:26:07', '2021-08-25 10:26:07'),
(4, 4, 'Fullstack Developer', 'Kabupaten Bogor', 'Staff (non-management & non-supervisor)', 'Purna Waktu / Full Time', '4 - 6 Juta', 'Diploma/D1/D2/D3, Sarjana / S1, SMA / SMK / STM', 'Laki-laki maks 28 Th\r\n1 tahun dibidang Programmer\r\nMenguasai React JS', 'Mengembangkan Messenger APP', '2021-08-25 10:36:13', '2021-08-25 10:36:13'),
(5, 5, 'Fullstack Developer', 'Kota Jakarta Utara', 'Staff (non-management & non-supervisor)', 'Purna Waktu / Full Time', '4 - 6 Juta', 'Diploma/D1/D2/D3, Sarjana / S1, SMA / SMK / STM', 'Laki-laki maks 28 Th\r\n1 tahun dibidang Programmer\r\nMenguasai React JS', 'Mengembangkan Messenger APP', '2021-08-25 10:40:30', '2021-08-25 10:40:30'),
(17, 6, 'Wordpress Developer', 'Kabupaten Malang', 'Fresh Graduate', 'Purna Waktu / Full Time', '4 - 5 Juta', 'Diploma/D1/D2/D3', 'Qualifications\r\nCandidate requirements:\r\nMinimum 2 years WordPress development experience\r\nHave strong PHP application development skills, with full-lifecycle and testing experience\r\nHave experience building and maintaining WordPress sites\r\nHave experience building and supporting WordPress plugins\r\nHave experience creating and maintaining javascript-based front end systems that can be translated/utilized for both web and app use\r\nHave an eye for design, and be able to extrapolate existing design language when implementing new features or elements\r\nBe a self-sufficient, fully-invested member of the team\r\nBe interested in a long-term engagement with a deep investment in learning the products and team\r\nBe involved with the long term growth and planning of the product\r\nCommunication experience in English\r\nSkills and Technologies\r\nCandidate skills & technologies requirements:\r\nAble to work independently\r\nStrong PHP\r\nStrong WordPress or Laravel, or both\r\nAn understanding of basic design principles (alignment, hierarchy, contrast, repetition, proximity, balance, color, space)', 'We are looking for Word Press Developer (not Word Press installer or just user).\r\n \r\nResponsibilities\r\nCandidate responsibilities:\r\nInstall a standard set of proprietary set of WordPress plugins and customize an existing theme to utilize new functionality \r\nProvide basic additional ongoing support for existing WordPress sites/themes. This might include adding a new custom post type and then customizing a new template to display it, based on existing design language\r\nWork on new features for a Laravel/AWS based web application\r\nHelp create, build and then own structured testing workflow for a Laravel/AWS web application\r\nHelp create and implement a new front-end javascript-based interface for an existing Laravel/AWS web application\r\nHelp create a corresponding ios app to consume some of the data/functionality provided by an existing Laravel/AWS web application', '2021-09-02 04:34:15', '2021-09-02 04:34:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_12_124224_create_tb_calons_table', 1),
(5, '2021_08_19_102723_create_gambars_table', 2),
(6, '2021_08_19_102759_create_profils_table', 2),
(7, '2021_08_20_131431_create_provinsis_table', 3),
(8, '2021_08_20_131512_create_kotas_table', 3),
(9, '2021_08_20_131649_create_kecamatans_table', 3),
(10, '2021_08_23_141244_create_lowkers_table', 4),
(11, '2021_08_23_142559_create_perusahaans_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaans`
--

CREATE TABLE `perusahaans` (
  `id_perusahaan` int(10) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profil` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perusahaans`
--

INSERT INTO `perusahaans` (`id_perusahaan`, `logo`, `perusahaan`, `email`, `profil`, `created_at`, `updated_at`) VALUES
(2, 'pbmt.png', 'PT.PBMT ROWASIA', 'ptbmtrowasia@gmail.com', 'PT PBMT ROWASIA adalah perusahaan yang bergerak dalam bidang Sistem Informasi dan Teknologi untuk layanan lembaga keuangan syariah dan koperasi syariah di Indonesia, bekerjasama dengan berbagai lembaga perbankan syariah, seperti bank umum, BPR Syariah dan Koperasi Syariah yang tersebar diseluruh Indonesia', NULL, NULL),
(3, 'Dreta.png', 'PT Dreta Teknologi Solusindo', 'ptdretateknologisolusindo@gmail.com', 'PT. DRETA TEKNOLOGI SOLUSINDO dibentuk pada tahun 2015, memiliki tim profesional berpengalaman yang telah berkecimpung dalam industri selama lebih dari 10 tahun. Tujuan kami adalah untuk melayani industri TI dengan solusi inovatif dan terjangkau. Semua aplikasi kami dikembangkan di rumah. Ini memberi kami kontrol penuh atas aplikasi kami dan memungkinkan kami menyesuaikan aplikasi agar sesuai dengan kebutuhan klien. Kami percaya dalam mengembangkan ide yang akan memungkinkan klien untuk melayani pelanggan mereka dengan lebih baik.', NULL, NULL),
(4, 'sydeco.png', 'PT Sydeco', 'ptsydeco@gmail.com', 'PT Sydeco adalah perusahaan IT di Indonesia dan Satu satunya Perusahaan IT Asli indonesia yang berkonsentrasi pada Cyber Securiti. PT Sydeco Berdiri sejak Tahun 2010. PT Sydeco dengan bangga menjadi salah satu perusahaan yang menangani masalah Cyber Attact di Indonesia Maupun Dunia. PT Sydeco juga bekerja sama dengan beberapa perusahaan di Dalam maupun Luar Negeri dalam Penjualan Produknya. Archangel adalah salah satu Produk untuk melindungi perusahaan/Instansi/Lembaga dari berbagai Cyber Attack.', NULL, NULL),
(5, 'raisyah.png', 'PT Raisyah', 'snuraisah3@gmail.com', 'Perusahaan yang bergerak di bidang bisnis fashion muslimah', NULL, NULL),
(6, 'indosoft.PNG', 'Indosoft', 'indosoft@gmail.com', 'INDOSOFT adalah perusahaan yang didirikan untuk menjawab tingginya permintaan akan custom web applications yang bermutu tinggi.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id_profil` bigint(20) UNSIGNED NOT NULL,
  `id` bigint(20) NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id_profil`, `id`, `jenis_kelamin`, `foto`, `no_hp`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 1, 'Perempuan', 'admin.jpg', '0853126372644', 'Bandung', '2021-08-31', 'Bandung', NULL, NULL),
(2, 2, 'Perempuan', 'admin.jpg', '090178347', 'ciami', 'njdw', 'dbjqla', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provinsis`
--

CREATE TABLE `provinsis` (
  `id_provinsi` int(10) UNSIGNED NOT NULL,
  `nama_provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsis`
--

INSERT INTO `provinsis` (`id_provinsi`, `nama_provinsi`, `created_at`, `updated_at`) VALUES
(11, 'Aceh', NULL, NULL),
(12, 'Sumatera Utara', NULL, NULL),
(13, 'Sumatera Barat', NULL, NULL),
(14, 'Riau', NULL, NULL),
(15, 'Jambi', NULL, NULL),
(16, 'Sumatera Selatan', NULL, NULL),
(17, 'Bengkulu', NULL, NULL),
(18, 'Lampung', NULL, NULL),
(19, 'Kepulauan Bangka Belitung', NULL, NULL),
(21, 'Kepulauan Riau', NULL, NULL),
(31, 'Dki Jakarta', NULL, NULL),
(32, 'Jawa Barat', NULL, NULL),
(33, 'Jawa Tengah', NULL, NULL),
(34, 'Di Yogyakarta', NULL, NULL),
(35, 'Jawa Timur', NULL, NULL),
(36, 'Banten', NULL, NULL),
(51, 'Bali', NULL, NULL),
(52, 'Nusa Tenggara Barat', NULL, NULL),
(53, 'Nusa Tenggara Timur', NULL, NULL),
(61, 'Kalimantan Barat', NULL, NULL),
(62, 'Kalimantan Tengah', NULL, NULL),
(63, 'Kalimantan Selatan', NULL, NULL),
(64, 'Kalimantan Timur', NULL, NULL),
(65, 'Kalimantan Utara', NULL, NULL),
(71, 'Sulawesi Utara', NULL, NULL),
(72, 'Sulawesi Tengah', NULL, NULL),
(73, 'Sulawesi Selatan', NULL, NULL),
(74, 'Sulawesi Tenggara', NULL, NULL),
(75, 'Gorontalo', NULL, NULL),
(76, 'Sulawesi Barat', NULL, NULL),
(81, 'Maluku', NULL, NULL),
(82, 'Maluku Utara', NULL, NULL),
(91, 'Papua Barat', NULL, NULL),
(94, 'Papua', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Siti Nuraisah', 'Sitinuraisah323@gmail.com', '$2y$10$CCRMZlsh.NovM2GH27/NWOYN1idZLczCGW4YIFFWrNFkbZD9Tjcoq', 'User', '2021-08-16 18:22:52', '2021-08-16 18:22:52'),
(2, 'Aisyah', 'aisyah123@gmail.com', '$2y$10$EewRCnCaB9MM5LEjkh46Ze.lfRRLbRe65017917WDyrsulrObD7ky', 'Admin', '2021-08-17 03:50:53', '2021-08-17 03:50:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeryphoto`
--
ALTER TABLE `galeryphoto`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `gambars`
--
ALTER TABLE `gambars`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kotas`
--
ALTER TABLE `kotas`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `lowkers`
--
ALTER TABLE `lowkers`
  ADD PRIMARY KEY (`id_lowker`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `perusahaans`
--
ALTER TABLE `perusahaans`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id_provinsi`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeryphoto`
--
ALTER TABLE `galeryphoto`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambars`
--
ALTER TABLE `gambars`
  MODIFY `id_gambar` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kotas`
--
ALTER TABLE `kotas`
  MODIFY `id_kota` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3580;

--
-- AUTO_INCREMENT for table `lowkers`
--
ALTER TABLE `lowkers`
  MODIFY `id_lowker` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `perusahaans`
--
ALTER TABLE `perusahaans`
  MODIFY `id_perusahaan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id_profil` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id_provinsi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 06:18 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sentosa`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1200) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `title`, `description`, `picture`, `author`, `created_at`, `updated_at`) VALUES
(1, 'Perusahaan Jasa Bangun Rumah Terpercaya', 'Penggunaan jasa bangun rumah untuk pembangunan rumah itu penting, kecuali jika anda orang yang ahli di bidang bangunan. Jika anda berncana unutk mebangun rumah, maka jasa bangun rumah akan menjadi sangat diperlukan untuk meminimalis kesalahan yang mungkin ada. Walaupun ini berarti bahwa anda harus mengeluarkan lebih banyak biaya, kualitas rumah anda harus menjadi pertimbangan utama.\r\n\r\nJasa bangun rumah biasanya menyediakan semua layanan yang berhubungan dengan bangun rumah, seperti konstruksi bangunan, desain rumah, dan juga renovasi rumah. Mereka memiliki tenaga ahli yang akan membantu anda mewujudkan rumah idaman anda. Namun demikinan, anda tidak bisa sembarang memilih jasa bangun rumah. Anda harus mengetahui latar belakang perusaaan jasa tersebut sehingga anda bisa yakin bahwa perusahaan tersebut bisa menjalankan tugasnya dengan baik.\r\n\r\nJika anda mencari perusahaan yang mampu memberikan solusi terbaik bagi kebutuhan rancang bangun rumah anda, maka anda akan menemukan banyak sekali penyedia jasa tersebut. Salah satu perusahaan yang memiliki reliabilitas dan kredibilitas adalah PT. Ghezank Karya Mandiri. Perusahaan ini focus pada pengerjaan bangun rumah, renovasi rumah, kontrakt', NULL, 'Pinhome', NULL, NULL),
(2, 'Perusahaan Arsitektur Ini Rampungkan Pembangunan Rumah Berkonsep Kontemporer\r\n', 'Perusahaan arsitektur dan kontraktor Meirive merampungkan pembangunan sebuah rumah di kawasan Jakarta Selatan.\r\n\r\nPembangunan rumah mewah ini memakan biaya sekira Rp 30 miliar.\r\n\r\nCEO Meirive Surya mengatakan, besarnya biaya memang disebabkan rumah ini dibuat detil, modern, dan mewah.\r\n\r\nDi bagian dalam rumah, denah rumah modern dan kontemporer ini terbuka dan lapang. Pihak arsitek berusaha menanamkan perasaan santai yang menunjukan gaya hidup yang lebih santai.\r\n\r\nJendela besar, serta dek dan teras yang berlimpah adalah fitur dari rumah ini yang menghadirkan suasana luar ke dalam.\r\n\r\n“Kami ingin rumah ini tampak warm (hangat) namun tetap megah,’’ tutur Surya dalam keterangan tertulis, Rabu (5/5/2021).\r\n\r\nAksen kayu ditambahkan untuk memberi nuansa hangat namun tetap modern. Furnitur yang dipilih pun cenderung berwarna lembut seperti abu-abu, putih, atau merah gelap untuk memberi kesan elegan.\r\n\r\nLantai yang digunakan berbahan vinyl, memberikan kesan estetik serta mahal. Untuk pencahayaan, rumah mewah ini dibuat agar banyak cahaya matahari yang masuk ke dalam rumah, sehingga di siang hari tidak terlalu membutuhkan lampu.\r\n\r\nAtap dari rumah yang telah rampung ini dibangun tinggi, me', NULL, 'Chris Triasa Growth', NULL, NULL),
(3, 'Kontraktor Rumah Sakit Jakarta Peringkat Jasa Bangun Rumah Sakit ', '\r\nManfaat kontraktor rumah sakit Jakarta sangat penting untuk jasa bangun rumah sakit karena mereka menguntungkan pengguna layanan. Asosiasi Nasional Indonesia konstruksi dan kontraktor (Gapancy) menyatakan bahwa virus Corona atau Avid19 memiliki dampak yang signifikan pada kontraktor rumah sakit Jakarta, terutama kontraktor rumah sakit Jakarta skala UMKM. Ada total 30,763 Agen Layanan Perumah sakitan (Bukks) di Jakarta Timur, dan dampak mereka dipengaruhi oleh kegagalan kerja, pembayaran baku dan bentuk-bentuk standar.\r\nDari angka-angka ini, 82 persen terlibat dalam skala MSME. Memang, mayoritas akan merasakan dampak yang paling. Tak perlu dikatakan, nomor ini tidak mewakili jumlah sebenarnya dari layanan perumah sakitan di Jakarta Timur. Banyak warga Indonesia yang belum diidentifikasi.\r\n\r\nOleh karena itu, di masa depan, upaya diperlukan untuk peringkat kontraktor rumah sakit Jakarta sehingga Asosiasi benar-benar dapat menguntungkan anggotanya. Ranking tersebut dimaksudkan untuk menemukan perusahaan-perusahaan yang dapat menyebabkan bencana yang lebih sistematis di dunia konstruksi perumahan, karena pemerintah perlu terlibat, dan tingkat-tingkat bahwa pemerintah berhasil dengan b', NULL, 'Presley Sadikin', NULL, NULL),
(4, 'Kontraktor Umum Dan Subkontraktor Rekomendasi Terbaik Bagi Anda ', 'Kontraktor umum memiliki definisi sekumpulan orang yang bekerjasama melalui suatu organisasi resmi, dengan adanya kontrak kerja yang jelas guna melakukan usaha jasa konstruksi. Kontraktor yang dimaksud tidak hanya sebatas melakukan kegiatan konstruksi namun beberapa fungsi sejenis juga dikerjakan antara lain: renovasi, pembongkaran dari jalan, gedung dan bagian dari bangunan. Hal yang menegaskan sebagai kontraktor jika adanya suatu keterikatan kerja secara sah dan bertugas sebagai pengawas dan penanggung jawab.\r\nKontraktor umum memiliki beban tugas tinggi terkait perlengkapan dan sistem-sistem yang dipakai dalam melakukan kegiatan konstruksi. Kegiatan tersebutharus berlandaskan kepada peraturan pemerintah yang berlaku, serta peraturan di dalam K3. Kontraktor juga memiliki tanggung jawab akan terpenuhinya anggaran yang dipakai pada suatu proyek. Dan tidak menutup kemungkinan selalu bertanggung jawab terhadap desain dari proyek yang akan dilakukan.\r\nKetika Kontraktor BUMN Terbaik mendapatkan suatu proyek, maka mereka juga memiliki kewenangan penuh untuk pengadaan bahan baku, perlengkapan berat dan sederhana, pengadaan sumber daya manusia yang tepat, dan alokasi waktu yang tepat. Subk', NULL, 'John Scalft', NULL, NULL),
(5, 'Bagian Penting Jasa kontraktor MEP di Jakarta Dalam Proyek ', 'Jasa kontraktor MEP di Jakarta memiliki pekerjaan penting yang harus dilakukan ketika pihak arsitek telah menyelesaikan desain dari gambar proyek utamanya. Pihak manajemen dari kontraktor utama akan menunjuk bagian mep untuk merinci item-item apa saja yang digunakan beserta rincian biayanya. Hal ini dimaksudkan agar tidak ada pekerjaan yang terbuang sia-sia. Pekerjaan proyekpun akan selesai tepat waktu dengan alokasi waktu, material, desain, dan sumber daya manusia yang tepat.\r\nKontraktor utama akan menunjuk jasa kontraktor MEP di Jakarta yang memiliki jam terbang tinggi untuk berkonsolidasi dengan pihak arsitek supaya desain seutuhnya proyek selesai sesuai harapan dari customer. Kontraktor utama akan secara kontinyu melakukan komunikasi rutin dengan pelanggan dan pihak kontraktor utama terkait proyek yang dilakukan. pihak jasa kontraktor MEP di Jakarta akan rutin memberi kritik serta saran untuk kontraktor utama dalam pemilihan dari bentuk spesifikadi yang digunakan. Hal itu berkaitan dengan kesesuaian pesanan yang dilakukan Kontraktor Terbesar di Indonesia tehadap keinginan pelanggan. Sehingga risiko untuk miskomunikasi penentuan spesifikasi proyek tidak akan terjadi.\r\nJasa kontr', NULL, 'Jeff Johansson', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `bid_id` bigint(20) NOT NULL,
  `offer_price` decimal(10,0) DEFAULT NULL,
  `description` varchar(1200) DEFAULT NULL,
  `time_estimation` int(11) DEFAULT NULL,
  `total_worker` int(11) DEFAULT NULL,
  `available_start_dt` date DEFAULT NULL,
  `win_status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `worker_id` bigint(20) DEFAULT NULL,
  `project_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`bid_id`, `offer_price`, `description`, `time_estimation`, `total_worker`, `available_start_dt`, `win_status`, `created_at`, `updated_at`, `worker_id`, `project_id`) VALUES
(2, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-06 07:21:17', '2021-08-06 07:21:17', NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-06 07:21:21', '2021-08-06 07:21:21', NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-06 07:21:25', '2021-08-06 07:21:25', NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-06 07:21:51', '2021-08-06 07:21:51', NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-06 07:22:43', '2021-08-06 07:22:43', NULL, NULL),
(7, '40', 'aasasasasasasasasasas', 3, 3, '2021-08-19', NULL, '2021-08-06 08:11:22', '2021-08-06 08:11:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `faq_id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`faq_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Pembangunan rumah minimalis', 'Bahan material apa yang akan digunakan perusahaan untuk membangun rumah jenis minimalis?', '2021-07-04 10:48:34', '2021-07-10 10:48:34'),
(2, 'Pengembangan konsep pembangunan rumah', 'ada berapa banyak konsep yang disediakan dan ditawarkan oleh perusahaan?', '2021-07-18 10:48:34', '2021-07-24 10:48:34'),
(3, 'Penentuan lokasi pembangunan', 'Dimana lokasi yang relatif sering dipakai untuk melakukan pembangunan rumah bertingkat?', '2021-07-06 10:48:34', '2021-07-14 10:48:34'),
(4, 'Estimasi waktu pembangunan', 'Berapa lama pembangunan rumah dengan model ruang terbuka ini dapat selesai?', '2021-07-25 10:48:34', '2021-07-31 10:48:34'),
(5, 'Penempatan ruangan rumah', 'Bagaimana penempatan ruangan rumah yang nyaman dan terlihat luas untuk keluarga besar?', '2021-07-05 10:48:34', '2021-07-12 10:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` bigint(20) NOT NULL,
  `payment_dt` date DEFAULT NULL,
  `total_payment` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_dt`, `total_payment`, `created_at`, `updated_at`) VALUES
(1, NULL, '300000', '2021-07-28 00:46:50', '2021-07-28 00:46:50');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1200) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `width` int(11) DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ref_product_category_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `name`, `description`, `price`, `discount`, `height`, `weight`, `stock`, `width`, `length`, `created_at`, `updated_at`, `ref_product_category_id`) VALUES
(3, 'meja makan', 'produk meja makan ini menggunakan bahan kuat dari kayu pohon jati yang berumur 100 tahun dan melalui tahap penghalusan dan pemolesan yang sudah teruji', '500000', 20, 1, 10, 80, 1, 2, '2021-07-28 02:01:16', '2021-07-28 02:01:16', 1),
(4, 'kusen jendela ', 'Terbuat dari bahan besi stenlis dengan campuran bahan-bahan yang membuat tidak cepat karat ', '2000000', 10, 3, 50, 50, 1, 10, '2021-07-04 13:08:41', '2021-07-25 13:08:41', 2),
(5, 'Toilet ', 'toilet ini dibuat dengan bahan khusus sehingga anti bocor dan dapat bertahan lama', '720000', 10, 1, 40, 62, 1, 1, '2021-07-07 13:08:41', '2021-07-11 13:08:41', 5),
(6, 'sofa ', 'memiliki ukuran dan jenis yang bermacam-macam sehingga dapat disesuaikan dengan ukuran ruangan. selain itu sofa ini juga dibuat dari bahan pilihan sehingga nyaman saat digunakan.', '4250000', 15, 1, 60, 45, 3, 3, '2021-07-14 13:08:41', '2021-07-18 13:08:41', 4),
(7, 'karpet lebar', 'terbuat dari bahan yang nyaman untuk digunakan saat beraktivitas dan mudah untuk dibersihkan', '200000', 5, NULL, 5, 120, NULL, NULL, '2021-07-20 13:08:41', '2021-07-24 13:08:41', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_offering`
--

CREATE TABLE `product_offering` (
  `product_offering_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `ref_province_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` bigint(20) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(1200) DEFAULT NULL,
  `budget_range_min` decimal(10,0) DEFAULT NULL,
  `budget_range_max` decimal(10,0) DEFAULT NULL,
  `final_price` decimal(10,0) DEFAULT NULL,
  `material_from` tinyint(1) DEFAULT NULL,
  `project_start_dt` date DEFAULT NULL,
  `time_estimation` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `total_worker` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `ref_province_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `title`, `description`, `budget_range_min`, `budget_range_max`, `final_price`, `material_from`, `project_start_dt`, `time_estimation`, `status`, `created_at`, `updated_at`, `user_id`, `total_worker`, `address`, `ref_province_id`) VALUES
(1, 'pembangunan rumah', 'Pembangunan rumah minimalis untuk keluarga akan dilakukan selama 1 tahun dengan menerapkan sistem kalibrasi ', '2000', '6000', '12000', 5, '2021-07-02', 365, 'Sedang Diproses', '2021-07-27 03:28:36', '2021-07-27 03:28:36', 1, NULL, NULL, NULL),
(2, 'pembangunan balkon', 'membangun rumah dalam semalam', '1000', '9000', NULL, NULL, NULL, NULL, NULL, '2021-07-27 03:31:14', '2021-07-27 03:31:14', 3, NULL, NULL, NULL),
(15, '58', '58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-31 09:59:02', '2021-07-31 09:59:02', NULL, NULL, NULL, NULL),
(16, '01', '01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-31 10:01:08', '2021-07-31 10:01:08', NULL, NULL, NULL, NULL),
(17, '02', '02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-31 10:01:37', '2021-07-31 10:01:37', NULL, NULL, NULL, NULL),
(18, '03', '03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-31 10:03:04', '2021-07-31 10:03:04', NULL, NULL, NULL, NULL),
(19, '09', '09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-31 10:09:56', '2021-07-31 10:09:56', NULL, NULL, NULL, NULL),
(20, 'test57', 'asdadad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-01 01:57:10', '2021-08-01 01:57:10', NULL, NULL, NULL, NULL),
(21, 'test57', 'asdadad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-01 02:00:04', '2021-08-01 02:00:04', NULL, NULL, NULL, NULL),
(22, 'test57', 'asdadad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-01 02:00:12', '2021-08-01 02:00:12', NULL, NULL, NULL, NULL),
(23, '16.13', '16.13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-01 02:13:54', '2021-08-01 02:13:54', NULL, NULL, NULL, NULL),
(24, 'uts yg lama', 'sfsdfsdf', '1000000', '2000000', NULL, 1, '2021-08-05', 5, NULL, '2021-08-01 03:44:28', '2021-08-01 03:44:28', NULL, 2, 'Jln Sei Asahan No.23B', 2),
(25, '15', '15', '1000000', '2000000', NULL, 1, '2021-08-06', 36, NULL, '2021-08-02 01:01:25', '2021-08-02 01:01:25', NULL, 25, 'Jln Sei Asahan No.23B', 5),
(26, '13.11', '13.11', '22222', '333333', NULL, 1, '2021-08-31', 3344, NULL, '2021-08-03 23:11:58', '2021-08-03 23:11:58', NULL, 23, 'jl.bojong kenyot', 2),
(27, 'bangun toilet rumah', 'membuat toilet rumah dengan tema yang mewah menggunakan shower dan juga bathub dan di kasih keramik di temboknya dan lantai dengan warna putih', '22222', '2000000', NULL, 0, '2021-08-12', 2, NULL, '2021-08-03 23:20:19', '2021-08-03 23:20:19', 7, 3, 'Jln Sei Asahan No.23B', 1),
(28, 'bangun toilet aji', 'dadsdawda', '22222', '333333', NULL, 0, '2021-08-17', 3, NULL, '2021-08-03 23:21:32', '2021-08-03 23:21:32', NULL, 4, 'Jln Sei Asahan No.23B', 5),
(29, 'bangun toilet aji', 'dasdawdasd', '22222', '2000000', NULL, 1, '2021-08-25', 5, NULL, '2021-08-03 23:29:45', '2021-08-03 23:29:45', NULL, 6, 'Jln Sei Asahan No.23B', 1),
(30, 'uts yg lama', 'dadadadada', '1000000', '45645645', NULL, 1, '2021-08-17', 2, NULL, '2021-08-03 23:32:41', '2021-08-03 23:32:41', NULL, 3, 'Jln Sei Asahan No.23B', 1),
(31, '14.14', '14.14', '1000000', '333333', NULL, 1, '2021-08-18', 7, NULL, '2021-08-04 00:15:28', '2021-08-04 00:15:28', NULL, 6, 'Jln Sei Asahan No.23B', 5),
(32, '14.17', '14.17', '45645', '333333', NULL, 1, '2021-08-19', 5, NULL, '2021-08-04 00:18:12', '2021-08-04 00:18:12', NULL, 5, 'Jln Sei Asahan No.23B', 5),
(33, '14.19', '14.19', '1000000', '45645645', NULL, 1, '2021-08-27', 7, NULL, '2021-08-04 00:19:56', '2021-08-04 00:19:56', NULL, 7, 'Jln Sei Asahan No.23B', 4),
(34, 'UTS-825180041', 'abcd', '22222', '333333', NULL, 1, NULL, 5, NULL, '2021-08-04 00:23:03', '2021-08-04 00:23:03', NULL, 5, 'Jln Sei Asahan No.23B', 1),
(35, '14.26', '14.26', '22222', '45645645', NULL, 1, '2021-08-19', 6, NULL, '2021-08-04 00:26:41', '2021-08-04 00:26:41', NULL, 4, 'Jln Sei Asahan No.23B', 2),
(36, 'test57', 'dadsadw', '22222', '45645645', NULL, 0, NULL, 2, NULL, '2021-08-04 00:31:06', '2021-08-04 00:31:06', NULL, NULL, NULL, 1),
(37, '14.31', '14.31', '1000000', '45645645', NULL, 1, '2021-08-19', 7, NULL, '2021-08-04 00:31:45', '2021-08-04 00:31:45', NULL, 3, 'Jln Sei Asahan No.23B', 3),
(38, '14.58', '14.58', '22222', '2000000', NULL, 0, '2021-08-09', 9, NULL, '2021-08-04 00:58:55', '2021-08-04 00:58:55', 6, 6, 'Jln Sei Asahan No.23B', 5);

-- --------------------------------------------------------

--
-- Table structure for table `project_progress`
--

CREATE TABLE `project_progress` (
  `project_progress_id` bigint(20) NOT NULL,
  `progress_date` date DEFAULT NULL,
  `before_pict` varchar(255) DEFAULT NULL,
  `after_pict` varchar(255) DEFAULT NULL,
  `description` varchar(1200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_progress`
--

INSERT INTO `project_progress` (`project_progress_id`, `progress_date`, `before_pict`, `after_pict`, `description`, `created_at`, `updated_at`, `project_id`) VALUES
(1, NULL, 'jelek', 'bagus', 'progress pembuatan kursi ini sampai di tahap pemolesan dan penghalusan kayu', '2021-07-28 02:43:02', '2021-07-28 02:43:02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `project_service_demand`
--

CREATE TABLE `project_service_demand` (
  `project_sevice_demand_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_id` bigint(20) DEFAULT NULL,
  `ref_service_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_service_demand`
--

INSERT INTO `project_service_demand` (`project_sevice_demand_id`, `created_at`, `updated_at`, `project_id`, `ref_service_id`) VALUES
(1, '2021-07-27 03:33:36', '2021-07-27 03:33:36', 2, 2),
(2, '2021-07-31 09:59:02', '2021-07-31 09:59:02', 15, 2),
(3, '2021-07-31 09:59:02', '2021-07-31 09:59:02', 15, 3),
(4, '2021-07-31 10:01:08', '2021-07-31 10:01:08', 16, 4),
(5, '2021-07-31 10:01:08', '2021-07-31 10:01:08', 16, 5),
(6, '2021-07-31 10:01:37', '2021-07-31 10:01:37', 17, 4),
(7, '2021-07-31 10:01:37', '2021-07-31 10:01:37', 17, 5),
(8, '2021-08-01 02:13:54', '2021-08-01 02:13:54', 23, 3),
(9, '2021-08-01 02:13:54', '2021-08-01 02:13:54', 23, 4),
(10, '2021-08-01 03:44:28', '2021-08-01 03:44:28', 24, 2),
(11, '2021-08-01 03:44:28', '2021-08-01 03:44:28', 24, 3),
(12, '2021-08-02 01:01:25', '2021-08-02 01:01:25', 25, 1),
(13, '2021-08-02 01:01:25', '2021-08-02 01:01:25', 25, 3),
(14, '2021-08-03 23:11:58', '2021-08-03 23:11:58', 26, 1),
(15, '2021-08-03 23:11:58', '2021-08-03 23:11:58', 26, 2),
(16, '2021-08-03 23:20:19', '2021-08-03 23:20:19', 27, 1),
(17, '2021-08-03 23:20:19', '2021-08-03 23:20:19', 27, 2),
(18, '2021-08-03 23:21:32', '2021-08-03 23:21:32', 28, 1),
(19, '2021-08-03 23:21:32', '2021-08-03 23:21:32', 28, 2),
(20, '2021-08-03 23:29:45', '2021-08-03 23:29:45', 29, 1),
(21, '2021-08-03 23:29:45', '2021-08-03 23:29:45', 29, 2),
(22, '2021-08-03 23:32:41', '2021-08-03 23:32:41', 30, 1),
(23, '2021-08-04 00:15:28', '2021-08-04 00:15:28', 31, 1),
(24, '2021-08-04 00:15:28', '2021-08-04 00:15:28', 31, 2),
(25, '2021-08-04 00:18:12', '2021-08-04 00:18:12', 32, 1),
(26, '2021-08-04 00:18:12', '2021-08-04 00:18:12', 32, 2),
(27, '2021-08-04 00:19:56', '2021-08-04 00:19:56', 33, 1),
(28, '2021-08-04 00:19:56', '2021-08-04 00:19:56', 33, 2),
(29, '2021-08-04 00:23:03', '2021-08-04 00:23:03', 34, 1),
(30, '2021-08-04 00:23:03', '2021-08-04 00:23:03', 34, 4),
(31, '2021-08-04 00:26:41', '2021-08-04 00:26:41', 35, 1),
(32, '2021-08-04 00:26:41', '2021-08-04 00:26:41', 35, 2),
(33, '2021-08-04 00:31:45', '2021-08-04 00:31:45', 37, 1),
(34, '2021-08-04 00:31:45', '2021-08-04 00:31:45', 37, 2),
(35, '2021-08-04 00:58:55', '2021-08-04 00:58:55', 38, 1),
(36, '2021-08-04 00:58:55', '2021-08-04 00:58:55', 38, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ref_courier`
--

CREATE TABLE `ref_courier` (
  `ref_courier_id` bigint(20) NOT NULL,
  `courier_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ref_province_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_courier`
--

INSERT INTO `ref_courier` (`ref_courier_id`, `courier_name`, `phone`, `created_at`, `updated_at`, `ref_province_id`) VALUES
(1, NULL, '08124736253', '2021-07-05 13:40:56', '2021-07-05 13:40:56', 1),
(2, NULL, '08324262372', '2021-07-15 13:41:41', '2021-07-16 13:41:41', 2),
(3, NULL, '08346346734', '2021-07-23 13:41:41', '2021-07-25 13:41:41', 3),
(4, NULL, '08637452637', '2021-07-08 13:41:41', '2021-07-11 13:41:41', 4),
(5, NULL, '08647364736', '2021-07-06 13:41:41', '2021-07-06 13:41:41', 5);

-- --------------------------------------------------------

--
-- Table structure for table `ref_picture`
--

CREATE TABLE `ref_picture` (
  `ref_picture_id` bigint(20) NOT NULL,
  `picture_name` varchar(255) DEFAULT NULL,
  `picture_size` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `worker_portofolio_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_picture`
--

INSERT INTO `ref_picture` (`ref_picture_id`, `picture_name`, `picture_size`, `created_at`, `updated_at`, `worker_portofolio_id`, `product_id`) VALUES
(1, 'assets\\img\\portfolio\\portfolio-2.jpg', 30, '2021-07-28 03:18:42', '2021-07-28 03:18:42', 1, NULL),
(2, 'assets\\img\\portfolio\\portfolio-3.jpg', 30, '2021-07-12 13:38:43', '2021-07-16 13:38:43', 2, NULL),
(3, 'assets\\img\\portfolio\\portfolio-1.jpg', 30, '2021-07-06 13:39:19', '2021-07-10 13:39:19', 5, NULL),
(4, 'assets\\img\\portfolio\\portfolio-2.jpg', 30, '2021-07-13 13:39:19', '2021-07-16 13:39:19', 4, NULL),
(5, 'assets\\img\\portfolio\\portfolio-4.jpg', 30, '2021-07-16 13:39:19', '2021-07-19 13:39:19', 3, NULL),
(6, 'assets\\img\\portfolio\\portfolio-4.jpg', 20, '2021-07-31 05:55:12', '2021-07-31 05:55:12', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ref_product_category`
--

CREATE TABLE `ref_product_category` (
  `ref_product_category_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_product_category`
--

INSERT INTO `ref_product_category` (`ref_product_category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ruang Makan', '2021-07-28 00:58:37', '2021-07-28 00:58:37'),
(2, 'Ruang Tidur', '2021-07-04 10:59:09', '2021-07-08 10:59:09'),
(3, 'Ruang Keluarga', '2021-07-08 10:59:09', '2021-07-12 10:59:09'),
(4, 'Ruang Tamu', '2021-07-11 10:59:09', '2021-07-15 10:59:09'),
(5, 'Ruang Mandi', '2021-07-06 10:59:09', '2021-07-11 10:59:09');

-- --------------------------------------------------------

--
-- Table structure for table `ref_product_picture`
--

CREATE TABLE `ref_product_picture` (
  `ref_product_picture_id` bigint(20) NOT NULL,
  `picture_name` varchar(255) DEFAULT NULL,
  `picture_size` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_product_picture`
--

INSERT INTO `ref_product_picture` (`ref_product_picture_id`, `picture_name`, `picture_size`, `created_at`, `updated_at`, `product_id`) VALUES
(1, 'meja makan', 30, '2021-07-28 02:30:38', '2021-07-28 02:30:38', 3),
(2, 'kusen jendela', 30, '2021-07-13 13:34:25', '2021-07-14 13:34:25', 4),
(3, 'toilet', 30, '2021-07-12 13:34:25', '2021-07-14 13:34:25', 5),
(4, 'sofa', 30, '2021-07-25 13:34:25', '2021-07-28 13:34:25', 6),
(5, 'karpet', 30, '2021-07-22 13:34:25', '2021-07-25 13:34:25', 7);

-- --------------------------------------------------------

--
-- Table structure for table `ref_province`
--

CREATE TABLE `ref_province` (
  `ref_province_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_province`
--

INSERT INTO `ref_province` (`ref_province_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'DKI Jakarta', '2021-07-28 07:06:08', '2021-07-28 07:06:08'),
(2, 'Jawa Barat', '2021-07-14 09:49:01', '2021-07-30 09:49:01'),
(3, 'Jawa Tengah', '2021-07-20 09:49:17', '2021-07-24 09:49:17'),
(4, 'Jawa Timur', '2021-07-04 09:49:35', '2021-07-07 09:49:35'),
(5, 'Banten', '2021-07-01 09:49:35', '2021-07-06 09:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `ref_service`
--

CREATE TABLE `ref_service` (
  `ref_service_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ref_service`
--

INSERT INTO `ref_service` (`ref_service_id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tukang Umum', NULL, '2021-07-27 00:26:27', '2021-07-27 00:26:27'),
(2, 'Arsitek', NULL, '2021-07-27 00:35:10', '2021-07-27 00:35:10'),
(3, 'Design Interior', NULL, '2021-07-06 10:40:28', '2021-07-20 10:40:28'),
(4, 'Tukang Spesialis Atap', NULL, '2021-07-11 10:40:28', '2021-07-26 10:40:28'),
(5, 'Kontraktor', NULL, '2021-07-20 10:40:28', '2021-07-27 10:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` bigint(20) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `description` varchar(1200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sales_h_id` bigint(20) DEFAULT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `worker_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales_d`
--

CREATE TABLE `sales_d` (
  `sales_d_id` bigint(20) NOT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `project_id` bigint(20) DEFAULT NULL,
  `sales_h_id` bigint(20) DEFAULT NULL,
  `product_offering_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sales_h`
--

CREATE TABLE `sales_h` (
  `sales_h_id` bigint(20) NOT NULL,
  `total_price` decimal(10,0) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `referantor_id` bigint(20) DEFAULT NULL,
  `payment_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `ref_courier_id` bigint(20) DEFAULT NULL,
  `ref_province_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `survey_id` bigint(20) NOT NULL,
  `survey_dt` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `worker_id` bigint(20) DEFAULT NULL,
  `project_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`survey_id`, `survey_dt`, `created_at`, `updated_at`, `worker_id`, `project_id`) VALUES
(1, NULL, '2021-07-28 00:24:40', '2021-07-28 00:24:40', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `ref_province_id` bigint(20) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `referantor_code` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `age`, `ref_province_id`, `phone`, `referantor_code`) VALUES
(1, 'Claudette Morel', 'morel', 'claumor12@gmail.com', '2021-07-13 09:59:25', '12345', '1', '2021-07-13 09:58:55', '2021-07-16 09:58:55', 25, 1, 812474628, '001'),
(2, 'Karls Nelson', NULL, 'karlnel13@gmail.com', '2021-07-09 09:59:25', '67890', '2', '2021-07-25 09:51:00', '2021-07-28 09:51:00', 24, 2, 834759288, '002'),
(3, 'Steve Harrington', NULL, 'steveh14@gmail.com', '2021-07-01 10:00:06', '13579', '3', '2021-07-11 10:00:06', '2021-07-15 10:00:06', 29, 3, 812341423, '003'),
(4, 'William Bill Overbeck', NULL, 'willbo15@gmail.com', '2021-06-15 10:00:06', '24680', '4', '2021-06-15 10:00:06', '2021-06-19 10:00:06', 27, 4, 854327322, '004'),
(5, 'Jack Park', NULL, 'jp56@gmail.com', '2021-07-26 10:03:54', '54321', '5', '2021-07-12 10:03:54', '2021-07-16 10:03:54', 30, 5, 843472343, '005'),
(6, 'aji', 'Daboji', 'thecitizen.fa@gmail.com', NULL, 'ajiaji27', NULL, '2021-08-02 01:04:09', '2021-08-02 01:04:09', NULL, NULL, NULL, NULL),
(7, 'albert', 'fwz_27', 'akbar.ramadhan712@gmail.com', NULL, '$2y$10$1EivNq3oES.g6Li.nj4hEuroAtFo6nhyAW2ODeGPEvT8nbuNPVtNS', NULL, '2021-08-02 02:25:05', '2021-08-02 02:25:05', NULL, NULL, NULL, NULL),
(8, 'nobar fwewe', 'Daboji23', 'fwzalamrrrsyah27@gmail.com', NULL, '$2y$10$81CX1SIHVVmrbcxb3BNqkunNJBI5jmkc2L9kDjm4sg9Vtt.p5IR0C', NULL, '2021-08-02 04:59:50', '2021-08-02 04:59:50', NULL, NULL, NULL, NULL),
(9, 'user1', 'user1', 'user1@gmail.com', NULL, '12345', NULL, '2021-08-06 08:55:25', '2021-08-06 08:55:25', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `worker_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1200) DEFAULT NULL,
  `price_range` decimal(10,0) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `worker_level_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`worker_id`, `name`, `description`, `price_range`, `profile_pic`, `phone`, `created_at`, `updated_at`, `worker_level_id`) VALUES
(1, 'Albertus', 'Direktur Perusahaan ', '50000000', 'assets\\img\\team\\team-1.jpg', 832374736, '2021-07-27 00:07:29', '2021-07-27 00:07:29', 5),
(2, 'Fawwaji Mustahera', 'Wakil Direktur/Menggantikan Direktur jika berhalangan', '30000000', 'assets\\img\\team\\team-2.jpg', 823534523, '2021-07-04 10:18:34', '2021-07-07 10:18:34', 3),
(3, 'Verrent ', 'Sekretaris Perusahaan/Mengurusi bagian data-data projek perusahaan', '35000000', 'assets\\img\\team\\team-3.jpg', 843252354, '2021-07-11 10:20:12', '2021-07-13 10:20:12', 4),
(4, 'Ken', 'Bendahara Perusahaan/Mengurusi keuangan, pemasukan dan pengeluaran perusahaan selama berjalan', '20000000', 'assets\\img\\team\\team-4.jpg', 856435355, '2021-07-18 10:20:12', '2021-07-21 10:20:12', 3),
(5, 'Jeffariawan', 'Kepala Pengurus Kebersihan Perusahaan', '500000', NULL, 845653532, '2021-07-25 10:23:32', '2021-07-28 10:23:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `worker_level`
--

CREATE TABLE `worker_level` (
  `worker_level_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker_level`
--

INSERT INTO `worker_level` (`worker_level_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Trainer', '2021-07-26 23:59:44', '2021-07-26 23:59:44'),
(2, 'Beginner', '2021-07-27 00:04:00', '2021-07-27 00:04:00'),
(3, 'Intermediate', '2021-07-02 10:13:20', '2021-07-10 10:13:20'),
(4, 'Standard', '2021-07-06 10:13:59', '2021-07-15 10:13:59'),
(5, 'Expert', '2021-07-01 10:13:59', '2021-07-29 10:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `worker_portofolio`
--

CREATE TABLE `worker_portofolio` (
  `worker_portofolio_id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(1200) DEFAULT NULL,
  `time_estimation` int(11) DEFAULT NULL,
  `total_price` decimal(10,0) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `worker_id` bigint(20) DEFAULT NULL,
  `ref_service_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker_portofolio`
--

INSERT INTO `worker_portofolio` (`worker_portofolio_id`, `name`, `description`, `time_estimation`, `total_price`, `created_at`, `updated_at`, `worker_id`, `ref_service_id`) VALUES
(1, 'Design interior minimalis', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores ipsum itaque quae optio soluta architecto quisquam deserunt sint a molestias doloribus, repellat consequatur totam temporibus, quaerat cumque beatae doloremque tempore adipisci id?', 20210713, '100000000', '2021-07-28 02:53:39', '2021-07-28 02:53:39', 1, 3),
(2, 'Projek pembuatan atap rumah bapak Agus', 'Mengawasi jalannya proyek pembangunan dan membantu direktur selama menjalankan tugas', 20210715, '50000000', '2021-07-26 10:27:49', '2021-07-28 10:27:49', 2, 4),
(3, 'Renovasi rumah ibu Tini', 'e cum autem dolorem eaque cumque sequi, soluta suscipit ea error. Fuga, hic assumenda optio ullam deserunt temporibus, asperiores, itaque ipsam culpa ea aut quibusdam officia earum facere molestiae pariatur nesciunt! Minus illum odio molestias dolorum distinctio aut asperiores cupiditate vel necessitatibus quidem quibusdam, incidunt quo esse earum rerum, sed, atque at eum. Quaerat, eveniet ut dignissimos recusandae numquam veniam consequuntur cumque dicta fugit quidem, officia mollitia ex', 20210713, '70000000', '2021-07-12 10:27:49', '2021-07-18 10:27:49', 3, 1),
(4, 'Design bangunan rumag bapak ahmad', 'Mengurus segala macam keuangan perusahaan, dimulai dari pemasukan, pengeluaran, dan pembayaran projek dengan customer', 20210714, '50000000', '2021-07-20 10:31:45', '2021-07-24 10:31:45', 4, 2),
(5, 'Renovasi Toilet', 'Mengurusi bagian keberishan tempat perusahaan ', 20210713, '2000000', '2021-07-13 10:31:45', '2021-07-28 10:31:45', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `worker_service`
--

CREATE TABLE `worker_service` (
  `worker_service_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `worker_id` bigint(20) DEFAULT NULL,
  `ref_service_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker_service`
--

INSERT INTO `worker_service` (`worker_service_id`, `created_at`, `updated_at`, `worker_id`, `ref_service_id`) VALUES
(1, '2021-07-27 00:29:28', '2021-07-27 00:29:28', 1, 3),
(2, '2021-07-27 00:36:23', '2021-07-27 00:36:23', 2, 4),
(3, '2021-07-06 10:42:51', '2021-07-14 10:42:51', 3, 1),
(4, '2021-07-26 10:42:51', '2021-07-30 10:42:51', 4, 2),
(5, '2021-07-25 10:42:51', '2021-07-31 10:42:51', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `worker_service_area`
--

CREATE TABLE `worker_service_area` (
  `worker_service_area_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `worker_id` bigint(20) DEFAULT NULL,
  `ref_province_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`bid_id`),
  ADD KEY `worker_id` (`worker_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `ref_product_category_id` (`ref_product_category_id`);

--
-- Indexes for table `product_offering`
--
ALTER TABLE `product_offering`
  ADD PRIMARY KEY (`product_offering_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `ref_province_id` (`ref_province_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `ref_province_id` (`ref_province_id`);

--
-- Indexes for table `project_progress`
--
ALTER TABLE `project_progress`
  ADD PRIMARY KEY (`project_progress_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `project_service_demand`
--
ALTER TABLE `project_service_demand`
  ADD PRIMARY KEY (`project_sevice_demand_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `ref_service_id` (`ref_service_id`);

--
-- Indexes for table `ref_courier`
--
ALTER TABLE `ref_courier`
  ADD PRIMARY KEY (`ref_courier_id`),
  ADD KEY `ref_province_id` (`ref_province_id`);

--
-- Indexes for table `ref_picture`
--
ALTER TABLE `ref_picture`
  ADD PRIMARY KEY (`ref_picture_id`),
  ADD KEY `worker_portofolio_id` (`worker_portofolio_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `ref_product_category`
--
ALTER TABLE `ref_product_category`
  ADD PRIMARY KEY (`ref_product_category_id`);

--
-- Indexes for table `ref_product_picture`
--
ALTER TABLE `ref_product_picture`
  ADD PRIMARY KEY (`ref_product_picture_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `ref_province`
--
ALTER TABLE `ref_province`
  ADD PRIMARY KEY (`ref_province_id`);

--
-- Indexes for table `ref_service`
--
ALTER TABLE `ref_service`
  ADD PRIMARY KEY (`ref_service_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `sales_h_id` (`sales_h_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `worker_id` (`worker_id`);

--
-- Indexes for table `sales_d`
--
ALTER TABLE `sales_d`
  ADD PRIMARY KEY (`sales_d_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `sales_h_id` (`sales_h_id`),
  ADD KEY `product_offering_id` (`product_offering_id`);

--
-- Indexes for table `sales_h`
--
ALTER TABLE `sales_h`
  ADD PRIMARY KEY (`sales_h_id`),
  ADD KEY `payment_id` (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `ref_courier_id` (`ref_courier_id`),
  ADD KEY `ref_province_id` (`ref_province_id`),
  ADD KEY `referantor_id` (`referantor_id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `worker_id` (`worker_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `ref_province_id` (`ref_province_id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`worker_id`),
  ADD KEY `worker_level_id` (`worker_level_id`);

--
-- Indexes for table `worker_level`
--
ALTER TABLE `worker_level`
  ADD PRIMARY KEY (`worker_level_id`);

--
-- Indexes for table `worker_portofolio`
--
ALTER TABLE `worker_portofolio`
  ADD PRIMARY KEY (`worker_portofolio_id`),
  ADD KEY `worker_id` (`worker_id`),
  ADD KEY `ref_service_id` (`ref_service_id`);

--
-- Indexes for table `worker_service`
--
ALTER TABLE `worker_service`
  ADD PRIMARY KEY (`worker_service_id`),
  ADD KEY `worker_id` (`worker_id`),
  ADD KEY `ref_service_id` (`ref_service_id`);

--
-- Indexes for table `worker_service_area`
--
ALTER TABLE `worker_service_area`
  ADD PRIMARY KEY (`worker_service_area_id`),
  ADD KEY `ref_province_id` (`ref_province_id`),
  ADD KEY `worker_id` (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `article_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `bid_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `faq_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_offering`
--
ALTER TABLE `product_offering`
  MODIFY `product_offering_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `project_progress`
--
ALTER TABLE `project_progress`
  MODIFY `project_progress_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project_service_demand`
--
ALTER TABLE `project_service_demand`
  MODIFY `project_sevice_demand_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `ref_courier`
--
ALTER TABLE `ref_courier`
  MODIFY `ref_courier_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ref_picture`
--
ALTER TABLE `ref_picture`
  MODIFY `ref_picture_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ref_product_category`
--
ALTER TABLE `ref_product_category`
  MODIFY `ref_product_category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ref_product_picture`
--
ALTER TABLE `ref_product_picture`
  MODIFY `ref_product_picture_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ref_service`
--
ALTER TABLE `ref_service`
  MODIFY `ref_service_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_d`
--
ALTER TABLE `sales_d`
  MODIFY `sales_d_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales_h`
--
ALTER TABLE `sales_h`
  MODIFY `sales_h_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `survey_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `worker_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `worker_level`
--
ALTER TABLE `worker_level`
  MODIFY `worker_level_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `worker_portofolio`
--
ALTER TABLE `worker_portofolio`
  MODIFY `worker_portofolio_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `worker_service`
--
ALTER TABLE `worker_service`
  MODIFY `worker_service_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `worker_service_area`
--
ALTER TABLE `worker_service_area`
  MODIFY `worker_service_area_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid`
--
ALTER TABLE `bid`
  ADD CONSTRAINT `bid_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`),
  ADD CONSTRAINT `bid_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ref_product_category_id`) REFERENCES `ref_product_category` (`ref_product_category_id`);

--
-- Constraints for table `product_offering`
--
ALTER TABLE `product_offering`
  ADD CONSTRAINT `product_offering_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `product_offering_ibfk_2` FOREIGN KEY (`ref_province_id`) REFERENCES `ref_province` (`ref_province_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`ref_province_id`) REFERENCES `ref_province` (`ref_province_id`);

--
-- Constraints for table `project_progress`
--
ALTER TABLE `project_progress`
  ADD CONSTRAINT `project_progress_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `project_service_demand`
--
ALTER TABLE `project_service_demand`
  ADD CONSTRAINT `project_service_demand_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `project_service_demand_ibfk_2` FOREIGN KEY (`ref_service_id`) REFERENCES `ref_service` (`ref_service_id`);

--
-- Constraints for table `ref_courier`
--
ALTER TABLE `ref_courier`
  ADD CONSTRAINT `ref_courier_ibfk_1` FOREIGN KEY (`ref_province_id`) REFERENCES `ref_province` (`ref_province_id`);

--
-- Constraints for table `ref_picture`
--
ALTER TABLE `ref_picture`
  ADD CONSTRAINT `ref_picture_ibfk_1` FOREIGN KEY (`worker_portofolio_id`) REFERENCES `worker_portofolio` (`worker_portofolio_id`),
  ADD CONSTRAINT `ref_picture_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `ref_product_picture`
--
ALTER TABLE `ref_product_picture`
  ADD CONSTRAINT `ref_product_picture_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`sales_h_id`) REFERENCES `sales_h` (`sales_h_id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`),
  ADD CONSTRAINT `review_ibfk_3` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`);

--
-- Constraints for table `sales_d`
--
ALTER TABLE `sales_d`
  ADD CONSTRAINT `sales_d_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `sales_d_ibfk_2` FOREIGN KEY (`sales_h_id`) REFERENCES `sales_h` (`sales_h_id`),
  ADD CONSTRAINT `sales_d_ibfk_3` FOREIGN KEY (`product_offering_id`) REFERENCES `product_offering` (`product_offering_id`);

--
-- Constraints for table `sales_h`
--
ALTER TABLE `sales_h`
  ADD CONSTRAINT `sales_h_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`),
  ADD CONSTRAINT `sales_h_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `sales_h_ibfk_3` FOREIGN KEY (`ref_courier_id`) REFERENCES `ref_courier` (`ref_courier_id`),
  ADD CONSTRAINT `sales_h_ibfk_4` FOREIGN KEY (`ref_province_id`) REFERENCES `ref_province` (`ref_province_id`),
  ADD CONSTRAINT `sales_h_ibfk_5` FOREIGN KEY (`referantor_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `survey_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `survey_ibfk_2` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ref_province_id`) REFERENCES `ref_province` (`ref_province_id`);

--
-- Constraints for table `worker`
--
ALTER TABLE `worker`
  ADD CONSTRAINT `worker_ibfk_1` FOREIGN KEY (`worker_level_id`) REFERENCES `worker_level` (`worker_level_id`);

--
-- Constraints for table `worker_portofolio`
--
ALTER TABLE `worker_portofolio`
  ADD CONSTRAINT `worker_portofolio_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`),
  ADD CONSTRAINT `worker_portofolio_ibfk_2` FOREIGN KEY (`ref_service_id`) REFERENCES `ref_service` (`ref_service_id`);

--
-- Constraints for table `worker_service`
--
ALTER TABLE `worker_service`
  ADD CONSTRAINT `worker_service_ibfk_1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`),
  ADD CONSTRAINT `worker_service_ibfk_2` FOREIGN KEY (`ref_service_id`) REFERENCES `ref_service` (`ref_service_id`);

--
-- Constraints for table `worker_service_area`
--
ALTER TABLE `worker_service_area`
  ADD CONSTRAINT `worker_service_area_ibfk_1` FOREIGN KEY (`ref_province_id`) REFERENCES `ref_province` (`ref_province_id`),
  ADD CONSTRAINT `worker_service_area_ibfk_2` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

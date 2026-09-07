-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2026 at 04:17 AM
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
-- Database: `summit_medical_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `message` text NOT NULL,
  `status` enum('unread','read','replied') NOT NULL DEFAULT 'unread',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `phone`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'estra', 'destrajaya11@gmail.com', NULL, 'rujuk', 'pasien rujuk', 'unread', '2026-08-28 04:46:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `specialty_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `experience` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specialty_id`, `name`, `photo`, `education`, `experience`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'dr. Tirta Mandira Hudhi', 'tirta.jpg', 'Fakultas Kedokteran Universitas Gadjah Mada (UGM).', 'Ia berstatus sebagai dokter umum dengan STR (Surat Tanda Registrasi) yang aktif, tetapi ia belum mengambil kembali Surat Izin Praktik (SIP) miliknya.', 'Dokter, pengusaha, dan aktivis kesehatan yang sangat vokal serta populer di kalangan anak muda Indonesia. Ia aktif mengedukasi masyarakat mengenai gaya hidup sehat, penanganan krisis kesehatan publik (terutama saat pandemi COVID-19), dan literasi medis dengan gaya bahasa yang blak-blakan dan mudah dipahami.', 1, '2026-08-28 08:48:50', '2026-09-04 10:26:17'),
(2, 5, 'dr. Gia Pratama', 'dr4.jpg', 'Fakultas Kedokteran Universitas Atma Jaya Jakarta.', 'Praktisi klinis di rumah sakit swasta, penulis buku bestseller (seperti The Diary of a General Practitioner), pembawa acara program televisi kesehatan, serta pembicara inspiratif.', 'Dokter umum yang dikenal luas berkat kemampuan storytelling yang luar biasa dalam membagikan kisah nyata, emosional, dan inspiratif dari ruang gawat darurat (IGD) melalui media sosial maupun buku fiksi medis.', 1, '2026-08-28 10:13:29', '2026-09-04 10:26:07'),
(3, 9, 'dr. Andi Khomeini Takdir, Sp.PD', 'dr1.jpg', 'Fakultas Kedokteran Universitas Hasanuddin (Unhas), Program Pendidikan Dokter Spesialis (PPDS) Penyakit Dalam Universitas Indonesia (UI).', 'Dokter spesialis di berbagai fasilitas kesehatan klinis, narasumber ahli di berbagai stasiun televisi nasional dan seminar kedokteran, serta pegiat advokasi kesehatan masyarakat.', 'Berpraktik di rumah sakit swasta terkemuka di Jakarta serta aktif dalam pengabdian masyarakat melalui jaringan organisasi profesi medis.', 1, '2026-09-04 05:50:44', '2026-09-04 05:50:44'),
(4, 1, 'dr. Lula Kamal, M.Sc', 'dr2.jpg', 'Fakultas Kedokteran Universitas Trisakti, Master of Science (M.Sc) bidang Komunikasi Kesehatan di King\'s College London, Inggris.', 'Pembawa acara dan produser program kesehatan televisi, konsultan komunikasi kesehatan publik, pembicara utama di berbagai forum internasional dan nasional, serta relawan kemanusiaan.', 'Dokter lulusan Universitas Trisakti yang dikenal luas sebagai aktris, penyiar radio, dan presenter program talkshow kesehatan pionir di televisi Indonesia yang mengemas informasi medis menjadi mudah dipahami awam.', 1, '2026-09-04 05:52:26', '2026-09-04 10:37:14'),
(5, 7, 'dr. Boyke Dian Nugraha, Sp.OG, MARS', 'dr3.jpg', 'Fakultas Kedokteran Universitas Indonesia (FKUI), Spesialis Kebidanan dan Kandungan FKUI, serta Magister Administrasi Rumah Sakit (MARS).', 'Praktisi klinis kesehatan reproduksi puluhan tahun, pendiri jaringan klinik kesehatan keluarga, penulis buku bestseller, serta narasumber tetap di berbagai media massa nasional.', 'Dokter spesialis kandungan legendaris di Indonesia yang sangat populer sebagai edukator seksualitas sehat, keharmonisan rumah tangga, dan kesehatan reproduksi secara ilmiah namun santai.', 1, '2026-09-04 05:54:08', '2026-09-04 10:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedules`
--

CREATE TABLE `doctor_schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `day` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `room` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor_schedules`
--

INSERT INTO `doctor_schedules` (`id`, `doctor_id`, `day`, `start_time`, `end_time`, `room`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Senin', '10:00:00', '13:55:00', NULL, 1, '2026-08-28 13:49:59', NULL),
(2, 2, 'Senin', '10:00:00', '14:00:00', NULL, 1, '2026-09-01 09:46:06', NULL),
(3, 1, 'Selasa', '08:00:00', '12:00:00', NULL, 1, '2026-09-01 09:46:23', NULL),
(4, 4, 'Senin', '08:00:00', '13:00:00', NULL, 1, '2026-09-04 15:34:16', NULL),
(5, 5, 'Kamis', '10:00:00', '14:00:00', NULL, 1, '2026-09-04 15:34:35', NULL),
(6, 3, 'Rabu', '09:00:00', '14:00:00', NULL, 1, '2026-09-04 15:35:02', NULL),
(7, 3, 'Kamis', '09:00:00', '14:00:00', NULL, 1, '2026-09-04 15:35:36', NULL),
(8, 5, 'Jumat', '09:00:00', '11:00:00', NULL, 1, '2026-09-04 15:35:49', NULL),
(9, 1, 'Sabtu', '09:00:00', '12:00:00', NULL, 1, '2026-09-04 15:36:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `slug` varchar(180) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `slug`, `image`, `short_description`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'mobil jemputan', 'mobil-jemputan', 'fortuner.jpg', 'jemputan mobil', 'mobil jemputan unutk kamar vvip dari rumah ke rumahsakit bagi keluarga', 1, '2026-08-31 10:00:58', '2026-09-03 10:37:10'),
(2, 'Ambulance 24 jam', 'ambulance-24-jam', 'Screenshot_2026-09-03_153628.png', 'Armada evakuasi dan rujukan darurat medis yang siaga sedia sepanjang hari.', 'Layanan Ambulans Summit Medical Center siap siaga 24 jam penuh untuk evakuasi cepat pasien gawat darurat, penjemputan dari kediaman, maupun proses rujukan antar-rumah sakit. Armada ambulans kami dilengkapi dengan perangkat medis darurat esensial seperti tabung oksigen, tandu evakuasi, alat kejut jantung (AED), dan monitor pasien, serta didampingi oleh tenaga medis terlatih untuk memastikan keselamatan dan stabilitas kondisi pasien selama dalam perjalanan.', 1, '2026-09-03 10:36:37', '2026-09-03 10:36:37'),
(3, 'Kenyamanan Kamar Rawat Inap Eksklusif', 'kenyamanan-kamar-rawat-inap-eksklusif', 'Screenshot_2026-09-03_154707.png', 'Jaminan kenyamanan kamar perawatan dengan fasilitas modern untuk mendukung pemulihan optimal.', 'Fasilitas kamar rawat inap Summit Medical Center dirancang dengan standar kenyamanan tertinggi, memastikan kebersihan, privasi, dan ketenangan pasien terjaga penuh. Setiap kamar dilengkapi tempat tidur elektrik ergonomis, penyejuk udara, televisi, kamar mandi dalam dengan air hangat, serta sofa pendamping bagi keluarga, didukung pemantauan medis profesional secara berkala.', 1, '2026-09-03 10:47:28', '2026-09-03 10:47:28'),
(4, 'Ruang Tunggu VIP & Eksekutif', 'ruang-tunggu-vip-eksekutif', 'Screenshot_2026-09-03_154820.png', 'Area tunggu pasien dan keluarga yang luas, sejuk, dan elegan.', 'Menyediakan ruang tunggu dengan desain interior modern, kursi yang empuk, sistem pendingin ruangan yang nyaman, serta akses Wi-Fi gratis guna mengurangi kejenuhan dan memberikan ketenangan bagi pengunjung serta keluarga pasien selama menunggu proses administrasi maupun pemeriksaan medis.', 1, '2026-09-03 10:48:36', '2026-09-03 10:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_profile`
--

CREATE TABLE `hospital_profile` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `hero_image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `history` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `mission` text DEFAULT NULL,
  `director_name` varchar(150) DEFAULT NULL,
  `director_message` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `whatsapp` varchar(50) DEFAULT NULL,
  `operating_hours` varchar(255) DEFAULT NULL,
  `google_maps` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital_profile`
--

INSERT INTO `hospital_profile` (`id`, `name`, `tagline`, `logo`, `hero_image`, `description`, `history`, `vision`, `mission`, `director_name`, `director_message`, `address`, `phone`, `email`, `whatsapp`, `operating_hours`, `google_maps`, `created_at`, `updated_at`) VALUES
(1, 'Summit Medical Center', NULL, NULL, NULL, 'Summit Medical Center adalah rumah sakit modern dan pusat layanan kesehatan berstandar internasional yang berdedikasi untuk memberikan pelayanan medis komprehensif, humanis, dan berbasis teknologi terkini. Didirikan dengan komitmen tinggi terhadap keselamatan pasien, kami menghadirkan ekosistem kesehatan yang nyaman, mulai dari unit gawat darurat 24 jam, poliklinik spesialis lengkap, hingga fasilitas penunjang medis berteknologi mutakhir. Didukung oleh tim dokter spesialis berpengalaman dan tenaga medis profesional, Summit Medical Center siap menjadi mitra terpercaya bagi kesehatan Anda dan keluarga.', 'Awal Berdiri (2015)\r\nSummit Medical Center berawal dari sebuah inisiatif dan dedikasi sekelompok tenaga medis profesional yang memiliki visi yang sama: menghadirkan pelayanan kesehatan yang modern, cepat, dan berstandar tinggi bagi masyarakat. Didirikan pada tahun 2015, institusi ini mulanya beroperasi sebagai klinik spesialis terpadu yang berfokus pada kualitas diagnosis primer dan kenyamanan pasien.\r\n\r\nTransformasi Menjadi Rumah Sakit Modern (2018)\r\nSeiring dengan tingginya tingkat kepercayaan masyarakat serta kebutuhan layanan kesehatan komprehensif yang terus meningkat, pada tahun 2018 Summit Medical Center mengambil langkah besar dengan bertransformasi menjadi rumah sakit umum. Ekspansi ini mencakup pembangunan fasilitas Instalasi Gawat Darurat (IGD) 24 jam, penambahan ruang rawat inap dengan standar kenyamanan tinggi, serta pembukaan berbagai poliklinik spesialis pendukung.\r\n\r\nEra Inovasi & Teknologi Medis Mutakhir (2021)\r\nMemasuki era kesehatan digital dan modern, Summit Medical Center secara konsisten melakukan pembaruan infrastruktur teknologi. Pada tahun 2021, rumah sakit ini mengintegrasikan sistem penunjang diagnostik mutakhir seperti laboratorium otomatis terpadu, pencitraan radiologi digital, serta optimalisasi sistem manajemen layanan berbasis teknologi demi meminimalisir waktu tunggu dan meningkatkan akurasi medis.\r\n\r\nSummit Medical Center Saat Ini\r\nHingga saat ini, Summit Medical Center telah tumbuh menjadi salah satu pusat layanan kesehatan rujukan terkemuka. Dengan memegang teguh nilai-nilai utama keselamatan (Safety), keunggulan medis (Medical Excellence), dan kepercayaan (Trust), kami terus berkomitmen mendampingi masyarakat dalam mewujudkan kualitas hidup yang lebih sehat, didukung oleh tim dokter spesialis terbaik dan fasilitas yang ramah bagi setiap pasien.', 'Menjadi pusat layanan kesehatan terdepan yang berstandar internasional, menjadi rujukan utama masyarakat, serta mengutamakan keselamatan, kenyamanan, dan kesembuhan pasien.', 'Misi\r\n\r\nMenyelenggarakan pelayanan medis yang komprehensif, cepat, akurat, dan berorientasi pada kepuasan pasien (patient-centered care).\r\n\r\nMengembangkan kompetensi profesionalisme tenaga medis dan staf secara berkesinambungan melalui pelatihan berskala nasional maupun internasional.\r\n\r\nMenyediakan fasilitas dan teknologi medis modern yang aman serta ramah lingkungan.\r\n\r\nMembangun budaya keselamatan pasien dan mutu pelayanan yang terus disempurnakan (continuous quality improvement).', NULL, NULL, 'yogyakarta', '08954239870', 'contact@summitmedic.com', '089542239440', NULL, '&lt;iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9100227487575!2d110.31520447476605!3d-7.799350492220783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af81d6946ee8d:0x93928ed35435caf4!2sPku Muhammadiyah Gamping, Mejing Kidul, Ambarketawang, Kec. Gamping, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55294!5e0!3m2!1sid!2sid!4v1788166103414!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"strict-origin-when-cross-origin\"&gt;&lt;/iframe&gt;', '2026-08-31 15:48:42', '2026-09-04 08:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `slug` varchar(220) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `content` longtext NOT NULL,
  `status` enum('draft','published') NOT NULL DEFAULT 'draft',
  `published_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `title`, `slug`, `thumbnail`, `content`, `status`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 3, 'cek', 'cek', '', 'bababa\r\n', 'draft', '2026-09-02 10:28:02', '2026-09-02 10:28:02', '2026-09-03 10:24:12'),
(3, 3, 'tips menjaga kesehatan', 'tips-menjaga-kesehatan', '1788338768.png', '*Atur makanan: Batasi konsumsi garam, gula, dan minyak serta perbanyak *makanan segar.Olahraga teratur: Lakukan aktivitas fisik minimal 30 menit sehari *secara konsisten.Cukup tidur: Istirahat selama 7 sampai 8 jam setiap hari untuk *memulihkan energi.Kelola stres: Luangkan waktu untuk beristirahat agar pikiran \r\n  tetap tenang', 'published', '2026-09-02 10:46:19', '2026-09-02 10:46:08', '2026-09-02 10:46:19'),
(4, 3, 'Pentingnya Deteksi Dini Risiko Penyakit Jantung Koroner Melalui Medical Check-Up Rutin', 'pentingnya-deteksi-dini-risiko-penyakit-jantung-koroner-melalui-medical-check-up-rutin', '1788424019.png', 'Penyakit Jantung Koroner (PJK) seringkali dijuluki sebagai silent killer karena gejalanya kerap tidak disadari hingga mencapai tahap yang serius. Padahal, sebagian besar kasus serangan jantung dapat dicegah melalui langkah deteksi dini yang tepat dan gaya hidup sehat.\r\n\r\nDi Summit Medical Center, kami senantiasa menekankan pentingnya pemeriksaan kesehatan berkala, khususnya bagi individu berusia di atas 30 tahun atau mereka yang memiliki riwayat keluarga dengan penyakit kardiovaskular. Beberapa pemeriksaan kunci meliputi:\r\n\r\nElektrokardiogram (EKG): Untuk merekam aktivitas listrik jantung dan mendeteksi adanya gangguan irama atau kelainan otot jantung.\r\n\r\nTreadmill Test (Stress Test): Menilai respons kerja jantung terhadap aktivitas fisik tingkat sedang hingga berat.\r\n\r\nProfil Lipid Lengkap: Memeriksa kadar kolesterol total, LDL, HDL, dan trigliserida dalam darah.\r\n\r\nJangan tunggu hingga gejala muncul. Segera jadwalkan konsultasi bersama dokter spesialis jantung dan pembuluh darah kami untuk mendapatkan evaluasi menyeluruh demi jantung yang lebih sehat.', 'published', '2026-09-03 10:26:59', '2026-09-03 10:26:59', NULL),
(5, 3, 'Strategi Efektif Menjaga Imunitas Tubuh Menghadapi Perubahan Musim', 'strategi-efektif-menjaga-imunitas-tubuh-menghadapi-perubahan-musim', '1788424096.png', 'Perubahan cuaca yang terjadi secara ekstrem seringkali membuat tubuh lebih rentan terserang berbagai penyakit seperti flu, batuk, infeksi saluran pernapasan atas (ISPA), hingga demam berdarah. Sistem kekebalan tubuh yang prima adalah benteng pertahanan utama untuk menghadapi pancaroba ini.\r\n\r\nTim medis Summit Medical Center merangkum beberapa langkah esensial yang dapat Anda terapkan sehari-hari untuk menjaga daya tahan tubuh tetap optimal:\r\n\r\nKonsumsi Gizi Seimbang: Perbanyak asupan vitamin C dan D dari buah segar, sayuran hijau, serta sumber protein berkualitas tinggi.\r\n\r\nCukupi Kebutuhan Cairan: Minum air putih minimal 8 gelas sehari untuk menjaga metabolisme sel tetap lancar dan mencegah dehidrasi.\r\n\r\nIstirahat yang Berkualitas: Tidur selama 7 hingga 8 jam setiap malam sangat krusial bagi proses regenerasi sel imun tubuh.\r\n\r\nKelola Stres dengan Baik: Stres kronis dapat menekan produksi sel darah putih yang berfungsi melawan infeksi.\r\n\r\nJika Anda atau keluarga mengalami gejala penurunan kondisi kesehatan yang tidak kunjung membaik, segera kunjungi layanan poliklinik umum atau spesialis kami untuk mendapatkan diagnosis dan penanganan medis yang akurat.', 'published', '2026-09-03 10:28:16', '2026-09-03 10:28:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `slug` varchar(180) NOT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `icon`, `image`, `short_description`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'poli gigi', 'poli-gigi', 'fas fa-fw fa-user-tie', 'Screenshot_2026-09-01_092125.png', 'poli gigi ', 'layanan poli gigi', 1, '2026-09-01 04:21:59', '2026-09-01 04:31:14'),
(3, 'Gawat Darurat (IGD 24 Jam)', 'gawat-darurat-igd-24-jam', 'fas fa-procedures', 'Screenshot_2026-09-03_153919.png', 'Layanan penanganan medis darurat kritis cepat tanggap sepanjang hari.', 'Instalasi Gawat Darurat Summit Medical Center siap memberikan penanganan medis darurat dalam masa golden period selama 24 jam penuh. Didukung oleh tim dokter jaga kegawatdaruratan, perawat bersertifikasi, serta peralatan penunjang hidup modern untuk menstabilkan kondisi pasien secara cepat dan akurat', 1, '2026-09-03 10:38:54', '2026-09-03 10:39:26'),
(4, 'Poliklinik Umum', 'poliklinik-umum', 'fas fa-clinic-medical', 'Screenshot_2026-09-03_154038.png', 'Layanan pemeriksaan kesehatan dasar dan penanganan keluhan medis umum untuk semua usia.', 'Poliklinik Umum Summit Medical Center melayani pemeriksaan kesehatan primer, konsultasi keluhan kesehatan ringan hingga sedang, penanganan penyakit akut umum, serta penerbitan surat keterangan sehat. Ditangani oleh dokter umum yang berpengalaman dengan pendekatan ramah dan solutif.', 1, '2026-09-03 10:40:47', '2026-09-03 10:40:47'),
(5, 'Poliklinik Anak (Pediatri)', 'poliklinik-anak-pediatri', 'fas fa-child', 'Screenshot_2026-09-03_154119.png', 'Layanan kesehatan khusus tumbuh kembang, imunisasi, dan penyakit anak', 'Poliklinik Anak menyediakan layanan pemantauan tumbuh kembang anak secara berkala, konsultasi nutrisi, jadwal imunisasi lengkap, serta penanganan berbagai penyakit infeksi dan gangguan kesehatan yang sering dialami oleh bayi, anak, dan remaja oleh dokter spesialis anak.', 1, '2026-09-03 10:41:43', '2026-09-03 10:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

CREATE TABLE `specialties` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` text DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `name`, `description`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'spesialis anak', NULL, NULL, 1, '2026-08-28 13:35:03', NULL),
(5, 'dokter umum', 'tenaga medis yang melayani berbagai keluhan kesehatan awal dari pasien dari segala usia tanpa memiliki spesialisasi khusus\r\n', 'fas fa-fw fa-user-tie', 1, '2026-08-28 13:40:33', '2026-09-04 15:28:30'),
(6, 'Kardiologi', 'Layanan komprehensif untuk diagnosis dan penanganan gangguan kesehatan jantung serta pembuluh darah oleh dokter spesialis kardiovaskular berpengalaman', 'fas fa-heartbeat', 1, '2026-09-03 15:30:17', NULL),
(7, 'Pediatri', 'Perawatan kesehatan khusus untuk bayi, anak, dan remaja, mulai dari pemantauan tumbuh kembang, imunisasi rutin, hingga penanganan berbagai penyakit infeksi anak', 'fas fa-child', 1, '2026-09-03 15:30:38', NULL),
(8, 'Neurologi', 'Layanan medis tingkat lanjut untuk mendiagnosis dan mengobati gangguan pada sistem saraf pusat, sistem saraf tepi, serta keluhan nyeri otot dan tulang belakang.', 'fas fa-brain', 1, '2026-09-03 15:31:05', NULL),
(9, 'Ortopedi', 'Penanganan klinis dan bedah untuk masalah pada sistem muskuloskeletal, termasuk cedera olahraga, patah tulang, radang sendi, dan rehabilitasi gerak tubuh', '', 1, '2026-09-03 15:31:30', NULL),
(10, 'Kedokteran Gigi & Mulut', 'Layanan perawatan kesehatan gigi dan mulut secara menyeluruh, mulai dari pencegahan gigi berlubang, perawatan estetika, hingga tindakan bedah minor gigi', 'fas fa-tooth', 1, '2026-09-03 15:31:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','editor') NOT NULL DEFAULT 'admin',
  `photo` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@summitmedical.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', NULL, '2026-08-28 10:23:43', NULL),
(2, 'wijaya', 'destra11@gmail.com', '123', 'admin', 'NULL', '0000-00-00 00:00:00', '2026-08-31 11:34:00'),
(3, 'Super Admin', 'admin@summit.com', '$2y$10$IHs/QmMxrEiJ9KDLiVyzxekrHtjkCMIgw6MwzUiZElWOVEjG2MuSq', 'admin', NULL, '2026-08-31 14:00:30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_doctors_specialty` (`specialty_id`);

--
-- Indexes for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_schedule_doctor` (`doctor_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `hospital_profile`
--
ALTER TABLE `hospital_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `fk_news_user` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospital_profile`
--
ALTER TABLE `hospital_profile`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `fk_doctors_specialty` FOREIGN KEY (`specialty_id`) REFERENCES `specialties` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  ADD CONSTRAINT `fk_schedule_doctor` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `fk_news_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

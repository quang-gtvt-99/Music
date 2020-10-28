-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2020 lúc 10:50 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php_music`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `albums`
--

CREATE TABLE `albums` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_visit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `albums`
--

INSERT INTO `albums` (`id`, `name`, `number_visit`, `img_path`, `created_at`, `updated_at`) VALUES
(1, 'Có tất cả nhưng thiếu anh(Single)', '0', '/storage/songImg/Erik.jpg', '2020-10-18 02:25:50', NULL),
(2, 'Thích thì đến', '0', '/storage/songImg/Lebaobinh.jpg', '2020-10-18 02:30:50', NULL),
(3, 'Hơn cả yêu(Single)', '0', '/storage/songImg/Ducphuc.jpg', '2020-10-18 02:40:50', NULL),
(4, 'Sau tất cả(Single)', '0', '/storage/songImg/Erik.jpg', '2020-10-18 02:50:50', NULL),
(5, 'MTP 2019', '0', '/storage/songImg/Sontungmtp.jpg', '2020-10-18 03:00:50', NULL),
(6, 'Buồn', '0', '/storage/songImg/DatG.jpg', '2020-10-18 03:01:50', NULL),
(7, 'Thanh Hưng 2019', '0', '/storage/songImg/Thanhhung.jpg', '2020-10-18 03:05:50', NULL),
(8, 'Mr Siro (Single)', '0', '/storage/songImg/MrSiro.jpg', '2020-10-18 04:05:50', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `artists`
--

CREATE TABLE `artists` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_visit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `artists`
--

INSERT INTO `artists` (`id`, `name`, `address`, `number_visit`, `des`, `img_path`, `created_at`, `updated_at`) VALUES
(19, 'BinZ', 'Hà Nội', '0', 'Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', '/storage/artist/Binz.jpg', NULL, NULL),
(20, 'Châu Khải Phong', 'Nghệ An', '0', 'Nooo', '/storage/artist/Chaukhaiphong.jpg', NULL, NULL),
(21, 'Đạt G', 'Hồ Chí Minh', '0', 'Noo', '/storage/artist/DatG.jpg', NULL, NULL),
(22, 'Đức Phúc', 'Hà Nội', '0', 'Noo', '/storage/artist/Ducphuc.jpg', NULL, NULL),
(23, 'Erik', 'Hà Nội', '0', 'Noo', '/storage/artist/Erik.jpg', NULL, NULL),
(24, 'Lê Bảo Bình', 'Hà Nội', '0', 'Noo', '/storage/artist/Lebaobinh.jpg', NULL, NULL),
(25, 'Mr.Siro', 'Hà Nội', '0', 'Noo', '/storage/artist/MrSiro.jpg', NULL, NULL),
(26, 'Quân AP', 'Hà Nội', '0', 'Noo', '/storage/artist/QuanAP.jpg', NULL, NULL),
(27, 'Sơn Tùng MTP', 'Hà Nội', '0', 'Noo', '/storage/artist/Sontungmtp.jpg', NULL, NULL),
(28, 'Thanh Hưng', 'Hà Nội', '0', 'Noo', '/storage/artist/Thanhhung.jpg', NULL, NULL),
(29, 'Hoàng Touliver', 'Hà Nội', '0', 'Noo', '/storage/artist/Touliver.jpg', NULL, NULL),
(30, 'Trịnh Đình Quang', 'Hà Nội', '0', 'Noo', '/storage/artist/Trinhdinhquang.jpg', NULL, NULL),
(31, 'Trịnh Thăng Bình', 'Hà Nội', '0', 'Noo', '/storage/artist/Trinhthangbinh.jpg', NULL, NULL),
(32, '', '', '', '', '', NULL, NULL),
(33, '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `favourites`
--

CREATE TABLE `favourites` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_song` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `genres`
--

CREATE TABLE `genres` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `genres`
--

INSERT INTO `genres` (`id`, `name`, `img_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'EDM', '/storage/genres/edm.jpg', NULL, '2020-10-13 23:44:34', NULL),
(2, 'Classical', '', NULL, '2020-10-10 19:29:21', '2020-10-10 19:29:21'),
(3, 'Guitar', '/storage/genres/Guitar.jpg', NULL, '2020-10-10 20:11:42', NULL),
(4, 'Rock', '', NULL, '2020-10-10 19:29:25', '2020-10-10 19:29:25'),
(5, 'No Lyric', '/storage/genres/Nhackhongloi.jpg', NULL, '2020-10-10 20:11:54', NULL),
(6, 'Soul', '', NULL, '2020-10-10 19:29:12', '2020-10-10 19:29:12'),
(7, 'Pop', '/storage/genres/pop.jpg', NULL, '2020-10-10 20:12:08', NULL),
(8, 'Folk', '', NULL, '2020-10-10 19:29:07', '2020-10-10 19:29:07'),
(9, 'Indie', '/storage/genres/indie.jpg', NULL, '2020-10-10 20:12:30', NULL),
(10, 'Dancing', '', NULL, '2020-10-10 19:29:00', '2020-10-10 19:29:00'),
(14, 'Test', '/storage/genres/Screenshot (1).png', '2020-10-10 20:55:34', '2020-10-10 20:55:38', '2020-10-10 20:55:38'),
(15, 'nhac young', '/storage/genres/68370103_113869796636753_933810307732602880_o.jpg', '2020-10-13 23:44:54', '2020-10-13 23:47:00', '2020-10-13 23:47:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_09_20_070643_create_users_table', 1),
(2, '2020_09_20_070822_create_genres_table', 1),
(3, '2020_09_20_070916_create_songs_table', 1),
(4, '2020_09_20_071021_create_artists_table', 1),
(5, '2020_09_20_071200_create_albums_table', 1),
(6, '2020_09_20_071226_create_favourites_table', 1),
(7, '2020_09_20_071248_create_slides_table', 1),
(8, '2020_09_27_100104_create_song_album_table', 1),
(9, '2020_09_29_132554_create_song_artist_table', 1),
(10, '2020_09_29_140230_create_song_user_table', 1),
(11, '2020_10_10_071229_add_column_deleted_at_table_genres', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_song` int(10) UNSIGNED DEFAULT NULL,
  `id_album` int(10) UNSIGNED DEFAULT NULL,
  `id_artist` int(10) UNSIGNED DEFAULT NULL,
  `kind` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `songs`
--

CREATE TABLE `songs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_genres` int(10) UNSIGNED NOT NULL,
  `img_path` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `song_path` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_listen` int(11) DEFAULT NULL,
  `number_download` int(11) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `songs`
--

INSERT INTO `songs` (`id`, `name`, `time`, `id_genres`, `img_path`, `song_path`, `number_listen`, `number_download`, `cost`, `created_at`, `updated_at`) VALUES
(13, 'Âm thầm bên em', '04:51', 7, '/storage/songImg/Sontungmtp.jpg', '/storage/song/Am-Tham-Ben-Em-Son-Tung-M-TP.mp3', 13, 0, 0, '2020-10-14 06:16:37', '2020-10-27 09:23:37'),
(14, 'Bên nhau thật khó', '04:21', 7, '/storage/songImg/Chaukhaiphong.jpg', '/storage/song/Ben-Nhau-That-Kho-Chau-Khai-Phong-Khang-Viet.mp3', 7, 0, 0, '2020-10-14 06:17:40', '2020-10-27 09:23:42'),
(15, 'Buồn của anh', '04:48', 9, '/storage/songImg/DatG.jpg', '/storage/song/Buon-Cua-Anh-K-ICM-Dat-G-Masew.mp3', 10, 0, 0, '2020-10-14 06:18:31', '2020-10-27 09:22:42'),
(16, 'Buông', '03:03', 1, '/storage/songImg/Binz.jpg', '/storage/song/Buong-Binz.mp3', 7, 0, 5, '2020-10-14 06:19:28', '2020-10-27 09:23:49'),
(17, 'Buông đôi tay nhau ra', '03:46', 7, '/storage/songImg/Sontungmtp.jpg', '/storage/song/Sontungmtp.jpg', 10, 0, 0, '2020-10-14 06:20:39', '2020-10-27 08:20:45'),
(18, 'Buồn không em', '03:42', 1, '/storage/songImg/DatG.jpg', '/storage/song/Buon-Khong-Em-Masew-Mix-Dat-G-Masew.mp3', 16, 0, 0, '2020-10-14 06:22:28', '2020-10-27 09:22:47'),
(19, 'Chàng trai đang thất tình', '04:45', 3, '/storage/songImg/DatG.jpg', '/storage/song/Chang-Trai-Dang-That-Tinh-Dat-G-Binz.mp3', 2, 0, 0, '2020-10-14 06:23:18', '2020-10-26 03:43:54'),
(20, 'Chỉ một câu', '05:12', 7, '/storage/songImg/Ducphuc.jpg', '/storage/song/Chi-Mot-Cau-Duc-Phuc.mp3', 1, 0, 5, '2020-10-14 06:24:16', '2020-10-26 03:37:48'),
(21, 'Dưới những cơn mưa', '04:57', 3, '/storage/songImg/MrSiro.jpg', '/storage/song/Duoi-Nhung-Con-Mua-Mr-Siro.mp3', 3, 0, 0, '2020-10-14 06:24:58', '2020-10-27 09:24:50'),
(22, 'Em của ngày hôm qua', '03:52', 7, '/storage/songImg/Sontungmtp.jpg', '/storage/song/Em-Cua-Ngay-Hom-Qua-Son-Tung-M-TP.mp3', 4, 0, 0, '2020-10-14 06:25:50', '2020-10-27 09:25:17'),
(23, 'Giấu mặt', '04:27', 7, '/storage/songImg/Ducphuc.jpg', '/storage/song/Giau-Mat-Duc-Phuc.mp3', 2, 0, 0, '2020-10-14 06:26:37', '2020-10-27 09:49:12'),
(24, 'Hỏi thăm nhau', '05:18', 7, '/storage/songImg/Lebaobinh.jpg', '/storage/song/Hoi-Tham-Nhau-Le-Bao-Binh.mp3', 9, 0, 0, '2020-10-14 06:27:38', '2020-10-27 09:46:08'),
(25, 'Không phải dạng vừa đâu', '04:06', 1, '/storage/songImg/Sontungmtp.jpg', '/storage/song/Khong-Phai-Dang-Vua-Dau-Son-Tung-M-TP.mp3', 11, 0, 0, '2020-10-14 06:28:28', '2020-10-27 09:49:20'),
(26, 'Lạc nhau có phải muôn đời', '04:42', 7, '/storage/songImg/Erik.jpg', '/storage/song/Lac-Nhau-Co-Phai-Muon-Doi-Cho-Em-Den-Ngay-Mai-OST-ERIK.mp3', 8, 0, 0, '2020-10-14 06:29:13', '2020-10-27 09:41:52'),
(27, 'Lắng nghe nước mắt', '04:51', 7, '/storage/songImg/MrSiro.jpg', '/storage/song/Lang-Nghe-Nuoc-Mat-Mr-Siro.mp3', 4, 0, 0, '2020-10-14 06:29:55', '2020-10-27 09:28:55'),
(28, 'Ngắm hoa lệ rơi', '04:21', 7, '/storage/songImg/Chaukhaiphong.jpg', '/storage/song/Ngam-Hoa-Le-Roi-Chau-Khai-Phong.mp3', 0, 0, 0, '2020-10-14 06:30:32', '2020-10-14 06:30:32'),
(29, 'Người phản bội', '03:46', 7, '/storage/songImg/Lebaobinh.jpg', '/storage/song/Nguoi-Phan-Boi-Le-Bao-Binh.mp3', 0, 0, 0, '2020-10-14 06:31:27', '2020-10-14 06:31:27'),
(30, 'Nỗi đau mình anh', '03:46', 7, '/storage/songImg/Trinhdinhquang.jpg', '/storage/song/Noi-Dau-Minh-Anh-Chau-Khai-Phong-Trinh-Dinh-Quang.mp3', 0, 0, 0, '2020-10-14 06:32:30', '2020-10-14 06:32:30'),
(31, 'Quan trọng là thần thái', '03:42', 7, '/storage/songImg/Thanhhung.jpg', '/storage/song/Quan-Trong-La-Than-Thai-Thanh-Hung.mp3', 0, 0, 0, '2020-10-14 06:33:12', '2020-10-14 06:33:12'),
(32, 'Sai người sai thời điểm', '05:29', 7, '/storage/songImg/Thanhhung.jpg', '/storage/song/Sai-Nguoi-Sai-Thoi-Diem-Thanh-Hung.mp3', 0, 0, 0, '2020-10-14 06:34:01', '2020-10-14 06:34:01'),
(33, 'Sao cũng được', '04:27', 7, '/storage/songImg/Binz.jpg', '/storage/song/Sao-Cung-Duoc-Binz.mp3', 0, 0, 0, '2020-10-14 06:34:39', '2020-10-14 06:34:39'),
(34, 'Sau tất cả', '03:54', 7, '/storage/songImg/Erik.jpg', '/storage/song/Sau-Tat-Ca-ERIK.mp3', 0, 0, 0, '2020-10-14 06:35:21', '2020-10-14 06:35:21'),
(35, 'They said', '03:20', 1, '/storage/songImg/Touliver.jpg', '/storage/song/They-Said-Touliver-Binz.mp3', 0, 0, 0, '2020-10-14 06:36:11', '2020-10-14 06:36:11'),
(36, 'Tìm được nhau khó thế nào', '04:30', 7, '/storage/songImg/MrSiro.jpg', '/storage/song/Tim-Duoc-Nhau-Kho-The-Nao-Mr-Siro.mp3', 0, 0, 0, '2020-10-14 06:36:49', '2020-10-14 06:36:49'),
(37, 'Tình yêu chắp vá', '04:21', 7, '/storage/songImg/MrSiro.jpg', '/storage/song/Tinh-Yeu-Chap-Va-Mr-Siro.mp3', 0, 0, 0, '2020-10-14 06:37:39', '2020-10-14 06:37:39'),
(38, 'Trong trí nhớ của anh', '04:21', 7, '/storage/songImg/Erik.jpg', '/storage/song/Trong-Tri-Nho-Cua-Anh-Cover-ERIK.mp3', 0, 0, 0, '2020-10-14 06:38:21', '2020-10-14 06:38:21'),
(39, 'Thích thì đến', '04:06', 7, '/storage/songImg/Lebaobinh.jpg', '/storage/song/Thich-thi-den-Le-Bao-Binh.mp3', 0, 0, 0, NULL, NULL),
(40, 'Có tất cả nhưng thiếu anh', '05:02', 7, '/storage/songImg/Erik.jpg', '/storage/song/Co-tat-ca-nhung-thieu-anh.mp3', 0, 0, 0, NULL, NULL),
(41, 'Hơn cả yêu', '03:08', 1, '/storage/songImg/Ducphuc.jpg', '/storage/song/Hon-ca-yeu.mp3', 0, 0, 0, NULL, NULL),
(42, 'Time', '01:00', 1, '/storage/songImg/Erik.jpg', '/storage/song/Time-Intro-ERIK.mp3', 0, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song_albums`
--

CREATE TABLE `song_albums` (
  `id_album` int(10) UNSIGNED NOT NULL,
  `id_song` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `song_albums`
--

INSERT INTO `song_albums` (`id_album`, `id_song`) VALUES
(1, 40),
(2, 39),
(3, 41),
(3, 20),
(4, 34),
(4, 42),
(5, 13),
(5, 17),
(6, 15),
(6, 18),
(7, 31),
(8, 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song_artists`
--

CREATE TABLE `song_artists` (
  `id_song` int(10) UNSIGNED NOT NULL,
  `id_artist` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `song_artists`
--

INSERT INTO `song_artists` (`id_song`, `id_artist`) VALUES
(13, 27),
(14, 20),
(15, 21),
(15, 29),
(16, 19),
(17, 27),
(18, 21),
(18, 22),
(19, 19),
(19, 21),
(20, 22),
(21, 25),
(22, 27),
(23, 22),
(24, 24),
(25, 27),
(26, 23),
(27, 25),
(28, 20),
(29, 24),
(30, 20),
(30, 30),
(31, 28),
(32, 28),
(33, 19),
(34, 23),
(35, 19),
(35, 29),
(36, 25),
(37, 25),
(38, 23),
(39, 24),
(40, 23),
(41, 22),
(42, 23);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `song_user`
--

CREATE TABLE `song_user` (
  `id_song` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_path` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `active`, `password`, `img_path`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Nguyễn Thúc Quân', 'leicesterq@gmail.com', 0, '$2y$10$cliBb2Y0ig/OwUQOXW0cluNo8bMGYMhYJ3/UHu0F9DY9FYHYSzMvW', NULL, NULL, '2020-10-21 02:58:11', '2020-10-21 02:58:11'),
(3, 'Test', 'vip.pro.92@gmail.com', 0, '$2y$10$geHGB5dB08bC2dVS1KchMu.FwTT/fgfb5yyjWaJ66SyYElWDPSSeW', NULL, NULL, '2020-10-24 10:59:11', '2020-10-24 10:59:11'),
(4, 'Quân', 'Test@gmail.com', 0, '$2y$10$W50Yiu8aiJfpTeDTqrxamOcCiL.SCFTZYtOtYdPIGOlCSj0Bwxf5u', '/storage/user/Binz.jpg', NULL, '2020-10-24 11:25:02', '2020-10-25 09:07:22'),
(5, 'Test', 'adasdas@gmail.com', 0, '$2y$10$I668VrYLVSrmJqejprSng.0uJAviNzGo23jG4bHzNRAmhFrjV.g.m', NULL, NULL, '2020-10-24 11:26:13', '2020-10-24 11:26:13');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favourites_id_song_foreign` (`id_song`);

--
-- Chỉ mục cho bảng `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_id_song_foreign` (`id_song`),
  ADD KEY `slides_id_album_foreign` (`id_album`),
  ADD KEY `slides_id_artist_foreign` (`id_artist`);

--
-- Chỉ mục cho bảng `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `songs_id_genres_foreign` (`id_genres`);

--
-- Chỉ mục cho bảng `song_albums`
--
ALTER TABLE `song_albums`
  ADD KEY `song_album_id_album_foreign` (`id_album`),
  ADD KEY `song_album_id_song_foreign` (`id_song`);

--
-- Chỉ mục cho bảng `song_artists`
--
ALTER TABLE `song_artists`
  ADD KEY `song_artist_id_song_foreign` (`id_song`),
  ADD KEY `song_artist_id_artist_foreign` (`id_artist`);

--
-- Chỉ mục cho bảng `song_user`
--
ALTER TABLE `song_user`
  ADD KEY `song_user_id_song_foreign` (`id_song`),
  ADD KEY `song_user_id_user_foreign` (`id_user`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `songs`
--
ALTER TABLE `songs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_id_song_foreign` FOREIGN KEY (`id_song`) REFERENCES `songs` (`id`);

--
-- Các ràng buộc cho bảng `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slides_id_album_foreign` FOREIGN KEY (`id_album`) REFERENCES `albums` (`id`),
  ADD CONSTRAINT `slides_id_artist_foreign` FOREIGN KEY (`id_artist`) REFERENCES `artists` (`id`),
  ADD CONSTRAINT `slides_id_song_foreign` FOREIGN KEY (`id_song`) REFERENCES `songs` (`id`);

--
-- Các ràng buộc cho bảng `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_id_genres_foreign` FOREIGN KEY (`id_genres`) REFERENCES `genres` (`id`);

--
-- Các ràng buộc cho bảng `song_albums`
--
ALTER TABLE `song_albums`
  ADD CONSTRAINT `song_album_id_album_foreign` FOREIGN KEY (`id_album`) REFERENCES `albums` (`id`),
  ADD CONSTRAINT `song_album_id_song_foreign` FOREIGN KEY (`id_song`) REFERENCES `songs` (`id`);

--
-- Các ràng buộc cho bảng `song_artists`
--
ALTER TABLE `song_artists`
  ADD CONSTRAINT `song_artist_id_artist_foreign` FOREIGN KEY (`id_artist`) REFERENCES `artists` (`id`),
  ADD CONSTRAINT `song_artist_id_song_foreign` FOREIGN KEY (`id_song`) REFERENCES `songs` (`id`);

--
-- Các ràng buộc cho bảng `song_user`
--
ALTER TABLE `song_user`
  ADD CONSTRAINT `song_user_id_song_foreign` FOREIGN KEY (`id_song`) REFERENCES `songs` (`id`),
  ADD CONSTRAINT `song_user_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

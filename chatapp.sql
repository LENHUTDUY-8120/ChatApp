-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 29, 2021 lúc 04:57 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chatapp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `friends`
--

CREATE TABLE `friends` (
  `f_id` int(11) NOT NULL,
  `person1` int(11) DEFAULT NULL,
  `person2` int(11) DEFAULT NULL,
  `confirm` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `id_confirm` int(11) DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`user_id`, `id_confirm`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(8, 878943690, 'Nil', 'Nguyen', 'nilnguyenkl@gmail.com', '$2y$10$GNP9AMgyx7nVmlIEZxg.BedQ2e1T13vt4GSPQVUPqTSxaX30SIOJi', 'nil.jpg', 'Offline'),
(9, 424878108, 'Duy', 'Nhut', 'nhutduy30520@gmail.com', '$2y$10$/bmD3NDorA8uHj1zDujvGe1Zs/Y7GOZFd4pSxuFDpBAQ440wDLYiG', 'duy.jpg', 'Offline'),
(10, 53024718, 'Thuan', 'My', 'mythuan@gmail.com', '$2y$10$whIXxuo/fusrEuWV3esfV.qf2gaNmmF9Jt6ZKp1wtl5guRov2/s6q', 'thuan.jpg', 'Offline'),
(11, 1570647064, 'Chien', 'Thien', 'thienchien@gmail.com', '$2y$10$OoPoDYezo3mnXo/TKdZyP.0SIwbmkqk.p6wqNG0sWBzCGg1NEOIHC', 'chien.jpg', 'Offline'),
(12, 1250371089, 'Vi', 'Quoc', 'quocvi@gmail.com', '$2y$10$gaz4jxgXuRd2S.1CKljs/u9iYOOwFSlnhX/o9DQyT3/SJz0w.8KHi', 'vi.png', 'Offline'),
(13, 671745182, 'Minh', 'Cong', 'congminh@gmail.com', '$2y$10$7TGNPgS6PjdciY7qWw3F9OisvxDNRoxtve8BzUSKq2TQ9kreWF9w6', 'minh.jpg', 'Offline'),
(14, 1009665715, 'Mai', 'Ngan', 'maingan@gmail.com', '$2y$10$LoGwdsHeVR9KiIyAkChJeucc3Z5BPnPd6rUtts0qAIWUXRfuhI94m', 'ngan.jpg', 'Offline'),
(15, 44043662, 'Truc', 'Lam', 'truclam@gmail.com', '$2y$10$wvettFxmt0ZHQQ96iYH1EuEdS4H3ZxkQaWIXLdnG2qSGBlGAh9gGq', 'lam.jpg', 'Offline'),
(16, 589397870, 'Hoang', 'Khang', 'hoangkhang@gmail.com', '$2y$10$xh1za98uKdwf2ybpqi0Kc.qiQu0ihasKWIJr/EeFysor8ChZ13the', 'Khang.jpg', 'Offline'),
(17, 673058602, 'Thao', 'Nguyen', 'thaonguyen@gmail.com', '$2y$10$F9/zFHT/vGKbmlZ5B4TBPOejk1Cjly.tuH4u9N3tGzkXVSgVsDsyq', 'nguyen.jpg', 'Offline');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `person1` (`person1`);

--
-- Chỉ mục cho bảng `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `friends`
--
ALTER TABLE `friends`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_ibfk_1` FOREIGN KEY (`person1`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `friends_ibfk_2` FOREIGN KEY (`person1`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

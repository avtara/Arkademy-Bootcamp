-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2018 at 07:50 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogsaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comments` int(11) NOT NULL,
  `comment` text NOT NULL,
  `postId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comments`, `comment`, `postId`) VALUES
(4, 'Ah masa??', 1),
(5, 'Serius?', 1),
(6, 'Bonbin mana?', 1),
(16, 'WOW saya jadi mengerti cara menggunakan Python ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id_posts` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `createdBy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id_posts`, `title`, `content`, `createdBy`) VALUES
(1, 'Wanita itu diserang kadal saat mengunjungi kebun binatang', 'Jakarta, CNN Indonesia -- Kisah komodo menyerang manusia ternyata bukan hanya mitos, karena menurut penjelasan Kepala Taman Nasional Komodo (TNK), sejak 1987 sudah ada 16 orang yang pernah digigit spesies kadal terbesar di dunia itu. Empat orang di antaranya meninggal dunia.\r\n<br/>\r\nKabar mengenai serangan komodo belum lama ini kembali terdengar, setelah wisatawan asal Singapura, mendapat gigitan di betis karena berada terlalu dekat dengan kawanan hewan bertelur ini. ', 2),
(4, 'Tutorial Menggunakan Phyton', 'Baca dan tulis file adalah teknik dasar yang harus dipahami dalam pemrograman Python, karena banyak digunakan untuk pengolahan dan pemerosesan file.', 1),
(5, 'Tutorial Belajar PHP Dasar Untuk Pemula', 'utorial Belajar PHP ini cocok untuk pemula yang ingin menguasai PHP, maupun yang sudah mahir sebagai penyegaran dan bahan referensi. Untuk belajar PHP, anda dianggap telah mengetahui sedikit tentang HTML. Karena pada dasarnya PHP digunakan untuk memanipulasi HTML agar bisa tampil dinamis.', 3),
(7, 'Dua Cara Membuat JavaScript di HTML', 'Di HTML, Anda bisa menampilkan konten yang bersifat statis, misalnya gambar. Namun, belakangan ini, konten statis sudah tidak begitu lagi digemari. Kebanyakan konten saat ini sangat interaktif dan memuat slideshow, formulir, dan menu dengan tampilan yang menarik. Konten-konten tersebut memberi kesempatan pada pengguna untuk lebih berekspresi dalam mengelola dan mengembangkan websitenya. Jika Anda menginginkan tampilan konten yang demikian, maka salah satu cara yang bisa dilakukan adalah script bahasa pemrograman dan JavaScript adalah yang paling populer di antaranya. Adanya JavaScript memampukan para developer untuk membuat website dapat berinteraksi dengan user dan sebaliknya. Meskipun ada banyak sekali bahasa pemrograman yang bisa dipilih, tak ada yang sepopuler JavaScript. Agar potensi dan keunggulannya dapat dimaksimalkan, JavaScript sebaiknya digunakan secara bersama-sama dengan HTML.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`) VALUES
(1, 'Krisjhon'),
(2, 'Hesa Suryana'),
(3, 'Pambudi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comments`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_posts`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id_posts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

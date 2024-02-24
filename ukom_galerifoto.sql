-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2024 at 01:22 AM
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
-- Database: `ukom_galerifoto`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `Albumid` int(11) NOT NULL,
  `Namaalbum` varchar(255) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Tanggalbuat` date NOT NULL,
  `Userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`Albumid`, `Namaalbum`, `Deskripsi`, `Tanggalbuat`, `Userid`) VALUES
(3, 'Kota', '                                                                    galeri                                                                    ', '2024-02-23', 1),
(7, 'motor', '                                  kendaraan roda 2\r\n                     ', '2024-02-23', 2),
(8, 'mobil', 'kendaraan roda 4', '2024-02-23', 2),
(9, 'pantai', 'wisata pantai', '2024-02-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `Fotoid` int(11) NOT NULL,
  `Judulfoto` varchar(255) NOT NULL,
  `Deskripsifoto` text NOT NULL,
  `Tanggalunggah` date NOT NULL,
  `Lokasifile` varchar(255) NOT NULL,
  `Albumid` int(11) NOT NULL,
  `Userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`Fotoid`, `Judulfoto`, `Deskripsifoto`, `Tanggalunggah`, `Lokasifile`, `Albumid`, `Userid`) VALUES
(4, 'Surabaya', 'Kota Surabaya (Jawa: Hanacaraka: ꦏꦹꦛꦯꦹꦫꦨꦪ; Pegon: كوڟا سورابايا), pengucapan bahasa Jawa: [kuʈɔ surɔˈbɔjɔ], Hanzi: 泗水, pelafalan dalam bahasa Indonesia: [suraˈbaja] ⓘ) adalah ibu kota Provinsi Jawa Timur yang menjadi pusat pemerintahan dan perekonomian dari Provinsi Jawa Timur sekaligus kota terbesar di provinsi tersebut. Surabaya juga merupakan sebuah kota yang terletak di Provinsi Jawa Timur, Indonesia. Surabaya merupakan kota terbesar kedua di Indonesia setelah Kota Jakarta. Kota ini terletak 800 km sebelah timur Jakarta, atau 435 km sebelah barat laut Denpasar, Bali. Letak kota ini berada di pantai utara Pulau Jawa bagian timur yang berhadapan dengan Selat Madura serta Laut Jawa.', '2024-02-21', '1160145702.MG5aEqKFcQi6ksuzVh6JJptBJCL6eFwx2gvRnpcRhTRKgmTKc5WMfwE9HYAaVNzPYNBr12sd5txWwLm9fcXf1dkM654h89Gbg.jfif', 3, 1),
(9, 'nmax', 'Yamaha Nmax tersedia dalam pilihan mesin Petrol di Indonesia Scooter baru dari Yamaha hadir dalam 1 varian. Bicara soal spesifikasi mesin Yamaha Nmax, ini ditenagai dua pilihan mesin Petrol berkapasitas 155 cc. Nmax tersedia dengan transmisi CVT tergantung variannya. Nmax adalah Scooter 2 seater dengan panjang 1955 mm, lebar 740 mm, wheelbase 1350 mm. serta ground clearance 124 mm.', '2024-02-21', '109504347.2024011218055599711U37222.png', 7, 2),
(10, 'vario', 'Honda Vario 150 eSP – “Ride The Perfection” merupakan skutik flagship AHM dengan desain dan fitur yang tercanggih di Indonesia. Motor ini sudah menggunakan mesin Honda terbaru berteknologi eSP dan berbagai fitur lainnya seperti Answer Back System, lampu depan LED, PGM-FI, Combi Brake System, ISS dan lainnya.\r\nDengan kombinasi desain dan fitur yang premium, tidak heran apabila motor ini menjadi motor yang amat ditunggu tunggu konsumen tanah air\r\nHonda Vario 150 eSP ini memiliki performa tinggi jauh di atas motor skutik lainnya. Motor ini mampu mencatat waktu 11,9 detik untuk jarak 0-200 m dengan top speed 102 km/jam. Selain bertenaga, model ini juga memiliki konsumsi BBM teririt di kelasnya sebesar 52,9 km/liter.\r\nTenaga canggih dan irit secara bersamaan. Ini bisa didapatkan melalui pengaktifan fitur Idling Stop System (metode ECE R40). Emisi yang dihasilkan pun lebih baik dari standar emisi EURO 3.', '2024-02-21', '1582773576.honda-vario-125-esp-slant-rear-view-full-image-260783.webp', 7, 2),
(11, 'jogyakarta', 'Nama Yogyakarta terambil dari dua kata, yaitu Ayogya atau Ayodhya yang berarti \"kedamaian\" (atau tanpa perang, a \"tidak\", yogya merujuk pada yodya atau yudha, yang berarti \"perang\"), dan Karta yang berarti \"baik\". Ayodhya merupakan kota yang bersejarah di India di mana wiracarita Ramayana terjadi. Tapak keraton Yogyakarta sendiri menurut babad (misalnya Babad Giyanti) dan leluri (riwayat oral) telah berupa sebuah dalem yang bernama Dalem Gerjiwati; lalu dinamakan ulang oleh Sunan Pakubuwana II sebagai Dalem Ayogya.', '2024-02-23', '1284195226.651656d3448a6.jpg', 3, 1),
(12, 'Bali', 'Bali, dikenal juga sebagai Kepulauan Bali atau Pulau Dewata adalah sebuah provinsi yang terletak di Indonesia. Ibu kotanya adalah Denpasar. Provinsi Bali terletak di bagian barat Kepulauan Nusa Tenggara. Di awal kemerdekaan Indonesia, pulau ini termasuk dalam Provinsi Sunda Kecil yang beribu kota di Singaraja, dan kini terbagi menjadi 3 provinsi, yakni Bali, Nusa Tenggara Barat, dan Nusa Tenggara Timur.[9][10] Pada tahun 2020, penduduk provinsi Bali berjumlah 4.317.404 jiwa, dengan kepadatan 747 jiwa/km2, dan pada akhir 2023 berjumlah 4.344.554 jiwa                                  ', '2024-02-23', '992860092.Bedugul.jpg', 3, 1),
(13, 'aerox', 'Yamaha Aerox 155VVA tersedia dalam pilihan mesin Petrol di Indonesia Scooter baru dari Yamaha hadir dalam 6 varian. Bicara soal spesifikasi mesin Yamaha Aerox 155VVA, ini ditenagai dua pilihan mesin Petrol berkapasitas 155.1 cc. Aerox 155VVA tersedia dengan transmisi CVT tergantung variannya. Aerox 155VVA adalah Scooter 2 seater dengan panjang 1990 mm, lebar 700 mm, wheelbase 1350 mm. serta ground clearance 142 mm.', '2024-02-23', '769322620.2023102519190474792T91675.png', 7, 2),
(14, 'toyota 86', 'Toyota 86 adalah mobil sport Coupe berukuran kompak hasil kolaborasi antara Toyota dan Subaru. Mobil ini disebut Toyota GT-86 di Eropa, atau Scion FR-S di indonesia, serta dijual oleh Subaru sebagai Subaru BRZ. Mobil yang menggunakan mesin Boxer 2.0 liter dan penggerak roda belakang / rear wheel drive (RWD) ini terinspirasi dari Corolla Levin dan Sprinter Trueno AE86 yang terkenal dengan sebutan Hachiroku.', '2024-02-23', '52858032.Toyota-86-1024x576.jpg', 8, 2),
(15, 'pajero', 'Mitsubishi Challenger atau Mitsubishi Pajero Sport adalah sebuah kendaraan yang dibuat oleh Mitsubishi Motors.\r\n\r\nMulai diproduksi di Jepang tahun 1996, dan mulai diekspor keluar tahun 1997. Di beberapa negara, mobil ini dinamai berbeda, seperti Nativa (Amerika Tengah), Montero Sport (Amerika Utara), Shogun Sport (Inggris), dan G-Wagon (Thailand). Semakin meningkatnya popularitas mobil ini, maka Mitsubishi membuat pabrik perakitan di China tahun 2003.', '2024-02-23', '1681343466.Mitsubishi_Pajero_Sport_Australia__3_.jpg', 8, 2),
(16, 'yaris', 'Toyota Yaris atau Toyota Vitz adalah mobil hatchback kecil yang diproduksi oleh Toyota. Yaris diluncurkan pertama kali pada tahun 1999 di Eropa dengan desain, performa mesin, dan jaminan keselamatan serta konsumsi bahan bakar yang optimal, untuk memasuki pangsa pasar Eropa. Satu tahun setelah awal peluncurannya, tepatnya pada tahun 2000 Yaris memperoleh penghargaan European Car of The Year Award. Bukan hanya itu saja Yaris juga diakui sebagai standar model kendaraan Compact two box di Jepang dan Amerika Utara.', '2024-02-23', '908068041.toyota-yaris.jfif', 8, 2),
(17, 'pantai blue lagonn', 'Blue Lagoon Beach adalah pantai yang bagus untuk snorkeling. Terumbu karang berada tepat di atas pantai dan sangat cantik. Cara terbaik adalah masuk ke sisi paling kiri, dimana ada kanal terumbu karang yang mengarah ke titik snorkling. Terdapat titik snorkeling yang bagus di teluk, meski snorkeling di Blue Lagoon atau White Sand Beach jauh lebih baik.', '2024-02-23', '662571934.Pantai-Kelingking-di-Nusa-Penida-Bali-900x643.jpg', 9, 1),
(18, 'pantai pasir putih', 'Jika berbicara dan membahas Pantai Anyer Banten memang tidak akan ada habisnya. Pasalnya beberapa kawasan yang berada di Anyer ini terdapat banyak pantai yang bisa Anda kunjungi salah satunya yaitu Pantai Pasir Putih Sirih. Pantai yang satu ini juga memiliki hamparan pasir yang berwarna putih.\r\n\r\nSelain itu, pantai yang hanya berjarakan sekitar 200 meter dari Pantai Marbella juga bisa menjadi tempat wisata berikutnya yang Anda kunjungi. Kawasan pantai ini juga menawarkan banyak wahana permainan air yang bisa Anda nikmati nantinya.', '2024-02-23', '417746180.Pantai-Pasir-Putih-Sirih.jpg', 9, 1),
(19, 'pantai indah kapuk', 'PIK 2 memiliki kawasan pantai dengan hamparan pasir putih sepanjang 4 km yang dipenuhi dengan jalur pejalan kaki, jogging, dan jalur sepeda yang cukup luas. Selain itu, terdapat fasilitas pinggir pantai yang dapat dinikmati seperti pier point, jetty untuk yacht dan jetski, kawasan komersial dan makanan, infinity pool, beach club, dan area bersantap al fresco.                                  ', '2024-02-23', '387453334.pantai-pasir-putih-pik.jpeg', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `komentarfoto`
--

CREATE TABLE `komentarfoto` (
  `Komentarid` int(11) NOT NULL,
  `Fotoid` int(11) NOT NULL,
  `Userid` int(11) NOT NULL,
  `Isikomentar` text NOT NULL,
  `Tanggalkomentar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likefoto`
--

CREATE TABLE `likefoto` (
  `Likeid` int(11) NOT NULL,
  `Fotoid` int(11) NOT NULL,
  `Userid` int(11) NOT NULL,
  `Tanggallike` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Userid` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Pasword` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `NamaLengkap` varchar(255) NOT NULL,
  `Alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `Username`, `Pasword`, `Email`, `NamaLengkap`, `Alamat`) VALUES
(1, 'alif', '099a147c0c6bcd34009896b2cc88633c', 'alif@gmail.com', 'alif', 'alif'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user@gmail.com', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`Albumid`),
  ADD KEY `Userid` (`Userid`);

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`Fotoid`),
  ADD KEY `Albumid` (`Albumid`),
  ADD KEY `Userid` (`Userid`);

--
-- Indexes for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  ADD PRIMARY KEY (`Komentarid`),
  ADD KEY `Fotoid` (`Fotoid`),
  ADD KEY `Userid` (`Userid`);

--
-- Indexes for table `likefoto`
--
ALTER TABLE `likefoto`
  ADD PRIMARY KEY (`Likeid`),
  ADD KEY `Fotoid` (`Fotoid`),
  ADD KEY `Userid` (`Userid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `Albumid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `Fotoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  MODIFY `Komentarid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `likefoto`
--
ALTER TABLE `likefoto`
  MODIFY `Likeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `album`
--
ALTER TABLE `album`
  ADD CONSTRAINT `album_ibfk_1` FOREIGN KEY (`Userid`) REFERENCES `user` (`Userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`Userid`) REFERENCES `user` (`Userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `foto_ibfk_2` FOREIGN KEY (`Albumid`) REFERENCES `album` (`Albumid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentarfoto`
--
ALTER TABLE `komentarfoto`
  ADD CONSTRAINT `komentarfoto_ibfk_1` FOREIGN KEY (`Userid`) REFERENCES `user` (`Userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentarfoto_ibfk_2` FOREIGN KEY (`Fotoid`) REFERENCES `foto` (`Fotoid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likefoto`
--
ALTER TABLE `likefoto`
  ADD CONSTRAINT `likefoto_ibfk_1` FOREIGN KEY (`Userid`) REFERENCES `user` (`Userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likefoto_ibfk_2` FOREIGN KEY (`Fotoid`) REFERENCES `foto` (`Fotoid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

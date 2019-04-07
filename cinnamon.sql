-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 09:49 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinnamon`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(10) NOT NULL,
  `judul` varchar(80) NOT NULL,
  `isi` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(50) NOT NULL,
  `nilai` int(5) NOT NULL,
  `id_resep` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resep`
--

CREATE TABLE `tbl_resep` (
  `id_resep` int(50) NOT NULL,
  `judul` varchar(80) NOT NULL,
  `porsi` varchar(100) NOT NULL,
  `biaya` decimal(50,0) NOT NULL,
  `prosedur` text NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `bahan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_resep`
--

INSERT INTO `tbl_resep` (`id_resep`, `judul`, `porsi`, `biaya`, `prosedur`, `gambar`, `bahan`) VALUES
(17, 'Babat Gongso', '4 orang', '50000', '<p><strong>Bahan : </strong></p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>500</strong>g babat sapi, bersihkan</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>5</strong>butir bawang merah, iris kasar</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>2</strong>lembar daun salam</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>2</strong>cm lengkuas, memarkan</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>2</strong>batang serai, memarkan</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>3</strong>sdm kecap manis</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>1</strong>sdt garam</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&frac12;</strong>sdt gula pasir</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>300</strong>ml air</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>5</strong>sdm minyak, untuk menumis</p><p><strong>Bumbu Halus :</strong></p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>5</strong>butir bawang merah</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>3</strong>siung bawang putih</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>3</strong>butir kemiri, sangrai</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>3</strong>buah cabai merah</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>3</strong>buah cabai merah keriting</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>2</strong>buah cabai rawit merah</p><p>&middot;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>1</strong>cm kunyit, bakar</p><p><strong>Cara Membuat: </strong></p><p><strong>1</strong>. Rebus babat sapi bersama 2 lembar daun salam, 2 cm lengkuas, dan 2 cm jahe dalam 1 L air sampai hingga matang. Angkat, Potong-potong.</p><p><strong>2.&nbsp;</strong>Panaskan minyak. Tumis bawang merah, daun salam, lengkuas, serai, dan bumbu halus hingga harum.</p><p><strong>3</strong>. Masukkan babat. Aduk rata.</p><p><strong>4</strong>. Tambahkan kecap manis<strong> </strong>, garam dan gula pasir. Aduk rata. Tuangkan air, didihkan.</p><p><strong>5</strong>. Kecilkan api, lanjutkan memasak hingga bumbu meresap dan air mengering. Angkat.</p><p><strong>6</strong>. Sajikan segera ditemani nasi putih.</p>', 'upload/babat_gongso.jpg', 'babat, salam, lengkuas, serai, bawang, kemiri, kunyit '),
(18, 'Daging Kambing Lada Hitam', '4 orang', '70000', '<p><strong>Bahan : </strong></p><ul><li><strong>350</strong>g daging kambing</li><li><strong>5</strong>sdm nanas parut</li><li><strong>&frac12;</strong>buah paprika merah, potong kotak</li><li><strong>&frac12;</strong>buah paprika hijau</li><li><strong>1</strong>buah bawang bombay</li><li><strong>4</strong>siung bawang putih, memarkan</li><li><strong>1</strong>cm jahe, cincang</li><li><strong>3</strong>sdm kecap manis</li><li><strong>1</strong>sdt merica hitam, gerus kasar</li><li><strong>&frac12;</strong>sdt merica hitam bubuk</li><li><strong>1</strong>sdm saus tiram</li><li><strong>1</strong>sdm minyak wijen</li><li><strong>1</strong>sdm tepung maizena</li><li><strong>1</strong>sdm margarin</li><li><strong>1</strong>sdm kecap asin</li><li><strong>1</strong>sdt gula pasir</li><li><strong>&frac12;</strong>sdt garam</li><li><strong>50</strong>ml air</li></ul><p><strong>Cara Membuat: </strong></p><p><strong>1</strong>. Lumuri daging kambing dengan parutan nanas. Diamkan selama beberapa saat.</p><p><strong>2</strong>. Aduk rata daging kambing dengan tepung maizena dan garam.</p><p><strong>3</strong>. Tumis bawang putih dan jahe hingga harum lalu masukkan daging kambing, tumis hingga berubah warna.</p><p><strong>4</strong>. Tambahkan bawang bombay, saus tiram, gula, kecap asin, kecap manis, minyak wijen, merica hitam halus.</p><p><strong>5</strong>. Tambahkan air, masak hingga matang, lalu masukkan paprika dan minyak wijen. Tumis hingga paprika matang lau tambahkan lada hitam kasar.</p><p><strong>6</strong>. Sajikan hangat.</p>', 'upload/daging_kambing_lada_hitam1.jpg', 'daging kambing, nanas, paprika, jahe, bawang,  maizena'),
(19, 'Bandeng Pucung Bekasi', '4 orang', '30000', '<p><strong>Bahan : </strong></p><ul><li><strong>2</strong>ekor ikan bandeng, potong-potong</li><li><strong>1</strong>buah jeruk nipis, ambil airnya</li><li><strong>&frac12;</strong>sdt garam</li><li><strong>&frac14;</strong>sdt merica</li><li>minyak, untuk menggoreng</li></ul><p><strong>Bumbu Halus :</strong></p><ul><li><strong>2</strong>cm kunyit, bakar</li><li><strong>4</strong>butir kemiri, sangrai</li><li><strong>4</strong>buah keluwek, rendam</li><li><strong>12</strong>butir bawang merah</li><li><strong>4</strong>siung bawang putih</li></ul><p><strong>Bahan Kuah:</strong></p><ul><li><strong>2</strong>lembar daun salam</li><li><strong>2</strong>cm lengkuas</li><li><strong>6</strong>lembar daun jeruk</li><li><strong>2</strong>batang serai, memarkan</li><li><strong>1</strong>buah tomat, potong-potong</li><li><strong>1.5</strong>L air</li><li><strong>3</strong>sdm kecap manis</li><li><strong>1</strong>sdm garam</li><li><strong>&frac12;</strong>sdt gula pasir</li><li><strong>1</strong>batang daun bawang, potong 1 cm</li><li><strong>2</strong>sdm minyak, untuk menumis</li></ul><p><strong>Cara Membuat: </strong></p><p><strong>1</strong>. Lumuri ikan dengan air jeruk nipis, garam, dan merica. Diamkan 15 menit.</p><p><strong>2</strong>. Goreng di dalam minyak yang sudah dipanaskan sampai berkulit. Angkat. Sisihkan.</p><p><strong>3.&nbsp;</strong><strong><em>Kuah:</em></strong>&nbsp;Panaskan minyak. Tumis bumbu halus, daun salam, lengkuas, dan serai sampai harum. Tambahkan tomat dan ikan. Aduk rata.</p><p><strong>4</strong>. Masukkan air, kecap manis, garam, dan gula pasir. Aduk rata. Masak hingga matang. Tambahkan daun jeruk dan daun bawang. Aduk rata.</p>', 'upload/bandeng_pucung_bekasi.jpg', 'ikan bandeng, jeruk nipis, kunyit, kemiri, lengkuas'),
(20, 'Popcorn Ikan Dori', '4 orang', '40000', '<p><strong>Bahan : </strong></p><ul><li><strong>200</strong>g fillet ikan dori, potong dadu</li><li><strong>1</strong>sdt air jeruk nipis</li><li><strong>&frac14;</strong>sdt penyedap rasa</li><li>minyak</li><li><strong>150</strong>ml air es</li><li><strong>100</strong>g tepung terigu</li><li><strong>â…›</strong>sdt merica putih bubuk</li><li><strong>200</strong>g tepung terigu</li><li><strong>25</strong>g tepung beras</li><li><strong>&frac12;</strong>sdt&nbsp;<a target=\"_blank\" href=\"https://www.masakapahariini.com/produk/royco-kaldu-ayam/\">penyedap</a> rasa</li><li><strong>&frac14;</strong>sdt bubuk bawang putih</li><li><strong>&frac12;</strong>sdt baking powder</li></ul><p><strong>Cara Membuat: </strong></p><p><strong>1</strong>. Lumuri ikan dori bersama air jeruk nipis dan penyedap rasa. Diamkan 10 menit.</p><p><strong>2.&nbsp;</strong>Aduk rata bahan pencelup, sisihkan. Aduk rata bahan pelapis, sisihkan.</p><p><strong>3.&nbsp;</strong>Celupkan ikan ke dalam larutan pencelup. Gulingkan di atas pelapis. Cubit-cubit hingga keriting.</p><p><strong>4.&nbsp;</strong>Goreng di dalam minyak yang sudah dipanaskan di atas api sedang sampai matang dan renyah.</p>', 'upload/popcorn_ikan_dori.jpg', 'ikn dori, jerik nipis, terigu, merica, bawang'),
(21, 'Pallubasa', '5 orang', '87000', '<p><strong>Bahan : </strong></p><ul><li><strong>350</strong>g daging sapi has dalam, potong dadu</li><li><strong>1.5</strong>L air</li><li><strong>30</strong>g kelapa parut, sangrai</li><li><strong>1</strong>batang serai</li><li><strong>2</strong>cm lengkuas</li><li><strong>1</strong>cm kayu manis</li><li><strong>1</strong>sdt gula merah</li><li><strong>3</strong>buah cengkih</li><li><strong>30</strong>ml air asam jawa</li><li><strong>1</strong>sdt garam</li><li><strong>2</strong>sdt penyedap rasa</li><li><strong>1</strong>sdm&nbsp;kecap manis</li></ul><p><strong>Bumbu Halus :</strong></p><ul><li><strong>8</strong>butir bawang merah</li><li><strong>4</strong>siung bawang putih</li><li><strong>6</strong>buah cabai merah keriting</li><li><strong>2</strong>cm jahe</li><li><strong>&frac12;</strong>sdt pala bubuk</li><li><strong>1</strong>sdt ketumbar bubuk</li><li><strong>&frac12;</strong>sdt jintan</li><li><strong>1</strong>sdt minyak</li></ul><p><strong>Cara Membuat: </strong></p><p><br /><strong>1.&nbsp;</strong>Tumis bumbu halus dengan sedikit minyak hingga harum. Masukkan potongan daging, masak sebentar. Masukkan gula merah, serai, lengkuas, kayu manis, cengkih. Tumis hingga semua bahan tercampur rata.</p><p><strong>2.&nbsp;</strong>Tuang air, aduk. Bubuhi penyedap rasa, aduk rata, masak hingga mendidih.</p><p><strong>3.&nbsp;</strong>Masukkan air asam jawa, garam,&nbsp;kecap manis&nbsp;dan kelapa sangrai. Aduk rata dan masak hingga daging empuk dan kuah mengental.</p><p><strong>4.&nbsp;</strong>Angkat dan sajikan dengan pelengkap.</p>', 'upload/pallubasa.jpg', 'daging sapi, kelapa, kayu manis, cengkih, serai, lengkuas'),
(22, 'Semur Lidah Sapi Panggang', '6 orang', '48000', '<p><strong>Bahan : </strong></p><ul><li><strong>750</strong>g lidah sapi, kupas kulitnya yang tebal</li><li><strong>4</strong>cm lengkuas, memarkan</li><li><strong>2</strong>lembar daun salam</li><li><strong>3</strong>sdm margarin</li><li><strong>4</strong>sdm minyak</li><li><strong>&frac12;</strong>butir pala, memarkan</li><li><strong>3</strong>butir cengkih</li><li><strong>4</strong>cm kayu manis</li><li><strong>350</strong>ml air</li><li><strong>6</strong>sdm&nbsp;kecap manis</li><li><strong>2</strong>sdm saus tomat</li><li><strong>4</strong>buah jamur merang, iris tipis</li></ul><p><strong>Bumbu Halus :</strong></p><ul><li><strong>7</strong>butir bawang merah</li><li><strong>4</strong>siung bawang putih</li><li><strong>4</strong>butir kemiri</li><li><strong>1</strong>sdt merica putih bubuk</li><li><strong>1</strong>sdt garam</li></ul><p><strong>Cara Membuat: </strong></p><p><strong>1.&nbsp;</strong>Rebus lidah sapi dalam 1 liter air, tambahkan lengkuas, daun salam, dan 1 sendok teh garam hingga empuk. Angkat dan iris setebal 1 cm.</p><p><strong>2.&nbsp;</strong>Panaskan margarin dalam wajan tebal, panggang lidah sebentar hingga kecokelatan, balikkan. Angkat dan sisihkan.</p><p><strong>3.&nbsp;</strong>Panaskan minyak goreng, tumis bumbu halus, pala, cengkeh, dan kayu manis, hingga harum.</p><p><strong>4.&nbsp;</strong>Tambahkan air,&nbsp;kecap manis, saus tomat, dan jamur merang, masak hingga mendidih dan kental, angkat. Tata lidah panggang dalam piring saji, siram atasnya dengan bumbu semur. Sajikan</p>', 'upload/semur_lidah_sapi_panggang.jpg', 'lidah sapi, lengkuas, salam, pala, cengkih'),
(23, 'Ayam Betutu', '4 orang', '36000', '<p><strong>Bahan : </strong></p><ul><li><strong>700</strong>g ayam (1 ekor utuh)</li><li><strong>2</strong>sdm air jeruk nipis</li><li><strong>1</strong>sdt garam</li><li><strong>2</strong>sdm minyak, untuk menumis</li><li><strong>2</strong>batang serai, iris tipis</li><li><strong>2</strong>sdt penyedap rasa</li><li><strong>200</strong>g daun singkong, rebus</li><li><strong>4</strong>lembar daun jeruk</li><li>daun pisang, untuk membungkus</li></ul><p><strong>Bumbu Halus :</strong></p><ul><li><strong>8</strong>butir bawang merah</li><li><strong>6</strong>siung bawang putih</li><li><strong>12</strong>buah cabai merah keriting</li><li><strong>2</strong>cm kunyit, bakar</li><li><strong>&frac12;</strong>sdt ketumbar butiran</li><li><strong>2</strong>cm jahe, parut</li><li><strong>2</strong>cm lengkuas, parut</li><li><strong>1</strong>sdt garam</li><li><strong>1</strong>sdm gula merah</li><li><strong>1</strong>sdt minyak</li></ul><p><strong>Cara Membuat: </strong></p><p><br /><strong>1.&nbsp;</strong>Lumuri ayam utuh dengan garam dan jeruk nipis secara merata. Diamkan hingga meresap selama kurang lebih 15 menit. Sisihkan.</p><p><strong>2.&nbsp;</strong>Panaskan minyak, tumis bumbu halus dan serai hingga harum. Masukkan penyedap rasa, aduk. Angkat.</p><p><strong>3.&nbsp;</strong>Ambil setengah bagian bumbu, aduk bersama daun singkong dan daun jeruk. Masukkan hingga ke dalam rongga perut ayam.</p><p><strong>4.&nbsp;</strong>Lumuri sisa bumbu halus ke seluruh permukaan ayam secara merata. Bungkus dengan daun pisang. Kukus selama 45 menit. Angkat.</p><p><strong>5.&nbsp;</strong>Panggang di atas wajan pemanggang dengan alas daun pisang hingga kecokelatan. Belah ayam memanjang dua bagian.</p>', 'upload/ayam_betutu.jpg', 'ayam, serai, singkong, daun jeruk, pisang'),
(24, 'Rujak Tahu', '2 orang', '13000', '<p><strong>Bahan : </strong></p><ul><li><strong>1</strong>kotak besar tahu putih, goreng sebentar, potong-potong</li><li><strong>100</strong>g taoge, seduh air panas, tiriskan</li><li><strong>2</strong>lembar daun kol, iris tipis</li><li>seledri, iris</li><li>bawang merah goring</li><li>kecap manis</li></ul><p><strong>Bumbu :</strong></p><ul><li><strong>1</strong>kotak besar tahu putih, goreng sebentar, potong-potong</li><li><strong>100</strong>g taoge, seduh air panas, tiriskan</li><li><strong>2</strong>lembar daun kol, iris tipis</li><li>seledri, iris</li><li>bawang merah goreng<strong>Cara Membuat: </strong></li></ul><p><strong>1.&nbsp;<em>Membuat kuah gula merah:</em></strong>&nbsp;Satukan gula merah, air, garam, asam jawa, dan daun salam dan masak sampai mendidih serta gula larut. Dinginkan, saring, sisihkan.</p><p><strong>2.&nbsp;<em>Membuat bumbu kacang:</em></strong>&nbsp;Haluskan bawang putih, garam, cabai rawit, lalu tambahkan kacang tanah yang sudah disangrai dan ditumbuk kasar. Tumbuk lagi sampai tercampur rata.</p><p><strong>3.&nbsp;<em>Tata dalam piring:</em></strong>&nbsp;Tahu goreng, irisan kol, serta taoge. Tambahkan bumbu kacang, taburi dengan irisan seledri dan bawang goreng, kemudian siram dengan kuah gula merah.</p><p><strong>4.&nbsp;</strong>Bubuhkan&nbsp;kecap manis. Sajikan.</p>', 'upload/rujak_tahu.jpg', 'tahu, taoge, kol, seledri, kecap'),
(25, 'Pindang Ikan Bunga Kecombrang', '3 orang', '27000', '<p><strong>Bahan : </strong></p><ul><li><strong>500</strong>g ikan tenggiri, potong bulat dengan ketebalan 2 cm</li><li><strong>2</strong>L air</li><li><strong>5</strong>buah belimbing wuluh, potong dua memanjang</li><li><strong>5</strong>buah tomat hijau, potong-potong</li><li><strong>10</strong>buah cabai merah rawit</li><li><strong>4</strong>buah cabai merah besar, bakar, belah dua memanjang</li><li><strong>4</strong>lembar bunga kecombrang, iris</li><li><strong>2</strong>lembar daun salam</li><li><strong>5</strong>sdm kecap manis</li><li><strong>3</strong>sdt garam</li><li><strong>1</strong>sdt gula pasir</li><li><strong>&frac14;</strong>sdt merica bubuk</li></ul><p><strong>Bumbu Bakar :</strong></p><ul><li><strong>8</strong>butir bawang merah</li><li><strong>4</strong>siung bawang putih</li><li><strong>3</strong>cm jahe</li><li><strong>6</strong>cm kunyit</li></ul><p><strong>Cara Membuat: </strong></p><p><strong>1.&nbsp;</strong>Tumbuk kasar bawang merah, bawang putih, jahe, dan kunyit.</p><p><strong>2.&nbsp;</strong>Rebus bumbu bersama belimbing, tomat hijau, cabai rawit merah, cabai merah bakar, daun salam, kecap manis, garam, gula pasir, dan merica. Rebus sampai harum.</p><p><strong>3.&nbsp;</strong>Masukkan ikan dan bunga kecombrang. Masak hingga matang.</p>', 'upload/pindang_ikan_bunga_kecombrang.jpg', 'tenggiri, belimbing, tomat, cabai, bunga kecombrang'),
(26, 'Lodeh Ikan Asap', '4 orang', '20000', '<p><strong>Bahan : </strong></p><ul><li><strong>2</strong>sdt&nbsp;penyedap rasa</li><li><strong>700</strong>ml air</li><li><strong>200</strong>ml santan</li><li><strong>1</strong>buah labu siam, potong dadu</li><li><strong>1</strong>buah terung, potong dadu</li><li><strong>5</strong>batang kacang panjang, potong 5 cm</li><li><strong>1</strong>buah jagung muda pipil</li><li><strong>100</strong>g daun melinjo</li><li><strong>100</strong>g tahu pong</li><li><strong>1</strong>lembar daun salam</li><li><strong>1</strong>buah lengkuas</li><li><strong>250</strong>g ikan asap</li></ul><p><strong>Cara Membuat: </strong></p><p><strong>1.&nbsp;</strong>Didihkan air dan&nbsp;penyedap rasa, masukkan salam dan lengkuas.</p><p><strong>2.&nbsp;</strong>Masukkan labu, terung, jagung dan kacang panjang, masak sampai sayuran lembut.</p><p><strong>3.&nbsp;</strong>Masukkan santan sedikit demi sedikit sambil diaduk.</p><p><strong>4.&nbsp;</strong>Masukkan tahu dan daun melinjo dan ikan asap, didihkan kembali.</p><p><strong>5.&nbsp;</strong>Sajikan.</p>', 'upload/lodeh_ikan_asap.jpg', 'santan, labu siam, terong, jagung, melinjo'),
(27, 'Tongseng Daging Kambing', '2 orang', '43000', '<p><strong>Bahan : </strong></p><ul><li><strong>&frac12;</strong>ruas jahe</li><li><strong>4</strong>siung bawang putih</li><li><strong>&frac12;</strong>sdt ketumbar</li><li><strong>1</strong>batang serai, memarkan</li><li><strong>4</strong>butir bawang merah</li><li><strong>200</strong>g daging kambing, potong kotak</li><li><strong>1</strong>buah cabai rawit, cincang</li><li><strong>400</strong>ml susu rendah lemak</li><li><strong>300</strong>ml air</li><li><strong>1</strong>sdt merica putih bubuk</li><li><strong>1</strong>buah tomat, potong-potong</li><li><strong>1</strong>sdm kecap manis</li><li><strong>1</strong>sdt garam</li><li><strong>2</strong>sdt air asam jawa</li><li><strong>70</strong>g kol, potong kasar</li></ul><p><strong>Cara Membuat: </strong></p><p><strong>1.&nbsp;</strong>Haluskan jahe, ketumbar, bawang putih, dan garam.</p><p><strong>2.&nbsp;</strong>Panaskan minyak, tumis bawang merah, bumbu halus, dan serai hingga harum. Masukkan daging, tumis hingga daging berubah warna, tuang air dan air asam jawa.</p><p><strong>3.&nbsp;</strong>Masak hingga daging matang. Tuang susu dan kecap manis, aduk rata. Masak hingga mendidih dan daging matang.</p><p><strong>4.&nbsp;</strong>Masukkan merica, cabai, dan susu rendah lemak. Aduk rata.</p><p><strong>5.&nbsp;</strong>Masukkan tomat dan kol, masak hingga tomat dan kol layu. Angkat. Sajikan.</p>', 'upload/tongseng_daging_kambing.jpg', 'daging kambing, serai, bawang, cabai, merica, tomat'),
(28, 'Tumis Sapi Dengan jamur', '4 orang', '51000', '<p><strong>Bahan : </strong></p><ul><li><strong>150</strong>g daging sapi</li><li><strong>1</strong>sdt minyak sayur</li><li><strong>2</strong>siung bawang putih, memarkan, cincang</li><li><strong>1</strong>batang daun bawang, potong 5 cm</li><li><strong>&frac12;</strong>buah bawang bombay</li><li><strong>&frac14;</strong>sdt&nbsp;penyedap rasa</li><li><strong>&frac14;</strong>sdt lada hitam</li><li><strong>2</strong>sdm mentega</li><li><strong>1</strong>sdm kecap manis</li><li><strong>100</strong>g jamur kancing, iris tebal</li><li><strong>1.5</strong>sdt garam</li></ul><p><strong>Cara Membuat: </strong></p><p><strong>1.&nbsp;</strong>Campurkan jadi satu: daging sapi, bawang putih,&nbsp;penyedap rasa, lada hitam dan minyak sayur. Lalu aduk campuran tersebut hingga merata dan tercampur semua.</p><p><strong>2.&nbsp;</strong>Tumis campuran daging dengan mentega hingga wangi dan matang kecoklatan. Masukkan kecap, garam, sedikit&nbsp;penyedap rasa dan jamur kancing tumis hingga layu. Masukkan daun bawang dan bawang bombay. Masak hingga matang.</p><p><strong>3.&nbsp;</strong>Angkat, dan sajikan hangat-hangat dengan nasi pulen yang nikmat.</p>', 'upload/tumis_sapi_dengan_jamur.jpg', 'daging sapi, lada hitam, jamur kancing, bawang bombay'),
(29, 'Sate Sapi Bumbu Ketumbar', '4 orang', '47000', '<p><strong>Bahan : </strong></p><ul><li><strong>300</strong>g daging sapi has luar, potong dadu</li><li><strong>160</strong>ml kecap manis</li><li><strong>1</strong>sdm ketumbar bubuk</li><li><strong>2</strong>sdm minyak</li><li><strong>1</strong>sdm air asam jawa</li><li>tusuk satai</li><li><strong>3</strong>batang daun ketumbar, petik daun</li></ul><p><strong>Bumbu Halus :</strong></p><ul><li><strong>8</strong>butir bawang merah</li><li><strong>4</strong>siung bawang putih</li><li><strong>4</strong>buah cabai merah, buang biji</li><li><strong>2</strong>sdm saus tomat</li><li><strong>2</strong>sdt garam</li><li><strong>&frac12;</strong>sdt merica putih bubuk</li><li><strong>2</strong>sdm gula merah, sisir</li></ul><p><strong>Cara Membuat: </strong></p><p><strong>1.&nbsp;</strong>Lumuri daging sapi dengan bumbu halus, kecap manis, ketumbar bubuk, minyak, dan air asam jawa. Diamkan selama 30 menit.</p><p><strong>2.&nbsp;</strong>Tusukkan daging dengan tusuk satai.</p><p><strong>3.&nbsp;</strong>Bakar di atas bara api hingga matang sambil sesekali diolesi bumbu. Angkat.</p><p><strong>4.&nbsp;</strong>Tata di atas piring saji. Taburi dengan daun ketumbar.</p>', 'upload/sate_sapi_bumbu_ketumbar.jpg', 'daging sapi, kecap, ketumbar, asam jawa'),
(30, 'Cumi Asin Asam', '4 orang', '36000', '<p><strong>Bahan : </strong></p><ul><li><strong>3</strong>sdm minyak</li><li><strong>200</strong>g cumi-cumi telur asin, seduh dengan air panas, tiriskan</li><li><strong>4</strong>siung bawang putih, iris tipis</li><li><strong>8</strong>siung bawang merah, iris tipis</li><li><strong>2</strong>lembar daun salam</li><li><strong>2</strong>cm lengkuas, memarkan</li><li><strong>10</strong>buah cabai hijau, iris serong</li><li><strong>3</strong>buah tomat hijau kecil, potong-potong</li><li><strong>2</strong>batang daun bawang, iris serong</li><li><strong>4</strong>buah belimbing wuluh, iris 1/2 cm</li><li><strong>1</strong>sdm gula pasir</li><li><strong>1.5</strong>sdt&nbsp;penyedap rasa</li><li><strong>100</strong>ml air</li><li>minyak, untuk menggoreng</li></ul><p><strong>Cara Membuat: </strong></p><p><strong>1.&nbsp;</strong>Panaskan minyak banyak lalu masukkan cumi, goreng hingga setengah matang. Angkat, tiriskan.</p><p><strong>2.&nbsp;</strong>Panaskan 3 sdm minyak, tumis bawang putih dan bawang merah hingga harum. Masukkan daun salam, lengkuas, cabai hijau, tomat hijau, daun bawang, belimbing wuluh, petai, dan gula, aduk rata. Masak hingga layu.</p><p><strong>3.&nbsp;</strong>Masukkan cumi yang telah digoreng, aduk rata.Tambahkan air dan&nbsp;penyedap rasa. Aduk rata, masak hingga matang dan kuah kental, angkat.</p><p><strong>4.&nbsp;</strong>Sajikan hangat.</p>', 'upload/cumi_asin_asam.jpg', 'cumi, bawang, salam, tomat, belimbing'),
(31, 'Bebek Cabe Hijau', '4 orang', '42000', '<p><strong>Bahan : </strong></p><ul><li><strong>750</strong>g bebek, bersihkan, potong 4 bagian</li><li><strong>&frac12;</strong>sdm garam</li><li><strong>2</strong>sdm cuka masak</li><li><strong>3</strong>sdm minyak</li></ul><p><strong>Bumbu Halus :</strong></p><ul><li><strong>250</strong>g cabai hijau</li><li><strong>10</strong>butir bawang merah</li><li><strong>6</strong>siung bawang putih</li><li><strong>2</strong>cm lengkuas</li><li><strong>2</strong>cm jahe</li><li><strong>2</strong>cm kunyit</li><li><strong>4</strong>butir kemiri, sangrai</li><li><strong>2</strong>sdt garam</li></ul><p><strong>Cara Membuat: </strong></p><p><strong>1.&nbsp;</strong>Lumuri bebek dengan garam dan cuka. Diamkan selama 15 menit. Cuci bersih. Tiriskan.</p><p><strong>2.&nbsp;</strong>Di dalam wajan, panaskan minyak di atas api sedang. Tumis bumbu halus, daun kunyit, daun jeruk, dan serai hingga harum.</p><p><strong>3.&nbsp;</strong>Masukkan bebek, aduk hingga tersalut bumbu. Masak hingga bebek berubah warna.</p><p><strong>4.&nbsp;</strong>Tuangkan air, didihkan. Kecilkan api. Masak hingga daging bebek matang dan empuk serta bumbu mengental. Angkat.</p><p><strong>5.&nbsp;</strong>Sajikan segera disertai pelengkapnya.</p>', 'upload/bebek_cabe_hijau.jpg', 'bebek, lengkuas, jahe, kunyit, kemiri'),
(32, 'Fuyunghai Asam Manis', '2 orang', '28000', '<p><strong>Bahan : </strong></p><ul><li><strong>100</strong>g daging ayam cincang</li><li><strong>2</strong>butir telur bebek</li><li><strong>1</strong>buah bawang bombay, potong dadu</li><li><strong>1</strong>buah wortel, iris korek api</li><li><strong>1</strong>siung bawang putih</li><li><strong>1</strong>batang seledri</li><li><strong>2</strong>sdm kecap manis</li><li><strong>2</strong>sdm saus tomat</li><li><strong>&frac12;</strong>sdm tepung maizena</li><li>air</li><li>garam</li><li>merica putih bubuk</li><li>minyak</li></ul><p><strong>Cara Membuat: </strong></p><p><strong>1.&nbsp;</strong>Dalam mangkuk, kocok telor sampai rata. Kemudian, masukkan daging ayam cincang dan bawang bombay. Bubuhkan garam dan merica.</p><p><strong>2.&nbsp;</strong>Panaskan sedikit minyak, goreng dengan api kecil sampai kecokelatan. Sisihkan.</p><p><strong>3.&nbsp;</strong>Tumis bawang putih sampai harum. Masukkan wortel, air, saus tomat,&nbsp;kecap manis, garam dan merica. Tambahkan daun seledri. Kentalkan dengan maizena.</p><p><strong>4.&nbsp;</strong>Siramkan diatas telur. Sajikan.</p>', 'upload/fuyunghai_asam_manis.jpg', 'daging ayam, telur bebek, bombay, seledri'),
(33, 'Ayam Tomat Aroma', '6 orang', '58000', '<p><strong>Bahan : </strong></p><ul><li><strong>1</strong>kg ayam kampung, potong 8-12 bagian, goreng setengah matang</li><li><strong>1</strong>buah bawang bombay, iris tipis memanjang</li><li><strong>4</strong>butir cengkih</li><li><strong>2</strong>buah tomat, parut</li><li><strong>3</strong>buah kentang, potong dadu 2 cm</li><li><strong>50</strong>ml air</li><li><strong>1</strong>sdm margarin</li><li><strong>1.25</strong>sdt&nbsp;penyedap rasa</li><li><strong>&frac14;</strong>sdt pala bubuk</li><li>garam</li><li>gula pasir</li><li><strong>2</strong>sdm bawang merah goreng</li></ul><p><strong>Cara Membuat: </strong></p><p><strong>1.&nbsp;</strong>Panaskan margarin di dalam wajan di atas api sedang. Tumis bumbu halus hingga harum. Masukkan cengkih, pala, gula, dan&nbsp;penyedap rasa, aduk rata. Masukan bawang bombay dan ayam yang telah digoreng.</p><p><strong>2.&nbsp;</strong>Tambahkan tomat, air, dan kentang. Masak menggunakan api kecil hingga kuahnya agak mengering.</p><p><strong>3.&nbsp;</strong>Setelah matang, sajikan di piring saji lalu taburi dengan bawang goreng sesuai selera. Hidangan ini akan lebih sempurna bila disajikan dengan nasi hangat yang masih mengepul.</p>', 'upload/ayam_tomat_aroma.jpg', 'ayam, bawang, cengkih, tomat, kentang');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `nama`, `password`) VALUES
('fadlihdytullah', 'Fadli Hidayatullah', '$2y$10$3WqyETAlKgY60Bcxf3daDu4ItwNIhiWKVoza5/YxEwjfOMyKiGO.W'),
('nisa', 'nisa', '$2y$10$afKxQlKUU92HKipT0CVsJ.tKv/vsweuqK6TZVWZ2de2Q87v/DjBE6'),
('sasa', 'sasa', '$2y$10$2d2giWgCx4ePy3VWdtoE5.9azx1VTr0.JZtfb/rLV6.mcpUsrma6e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_resep` (`id_resep`);

--
-- Indexes for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
  ADD PRIMARY KEY (`id_resep`),
  ADD KEY `id_resep` (`id_resep`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_resep`
--
ALTER TABLE `tbl_resep`
  MODIFY `id_resep` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_resep`) REFERENCES `tbl_resep` (`id_resep`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

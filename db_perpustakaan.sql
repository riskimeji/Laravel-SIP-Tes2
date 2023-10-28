-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: db_perpustakaan
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` date NOT NULL,
  `page` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `books_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'Fur Immer Dein Ian','fur-immer-dein-ian','Valerie','Mystery','2002-01-19',150,20,'Apakah ada yang lebih menyebalkan dari menyembunyikan perasaan atas nama pertemanan? Saling berdekatan tetapi harus menjaga jarak aman. Semata-mata agar yang kita cintai tetap merasa nyaman.\r\n\r\nSekuat hati mencoba untuk bersikap biasa saja. Nyatanya, setiap kata-kata yang keluar clan bibirnya adalah pemikat luar biasa. Setiap gerak-geriknya adalah candu yang tak bisa diabaikan begitu saja. Tentu, menjadi pengagum dalam diam penuh dengan tantangan.\r\n\r\nBagi Atika dan Damian, pertemuan tak sengaja mereka membawa harapan. Namun, rasanya mereka tak sanggup untuk sating membuka hati. Dan semua rasa lesap bersama udara dingin Munchen sore itu. Dua hati yang diam-diam sating mendambakan menjadi ragu, apakah mungkin bersatu?','public/image/fur-immer-dein-ian1.jpg','2023-10-27 23:33:25','2023-10-27 23:33:25'),(2,'Majnun','majnun','Anton Kurnia','Romance','1999-01-01',190,10,'Majnun adalah kisah tentang cinta dan persahabatan, sekaligus semacam catatan kaki atas sejarah yang dilupakan. Selain itu, pembelaan atas kebebasan dan gugatan terhadap ketidakadilan adalah pokok novel ini. Cerita mengalir dalam bayang-bayang ingatan dan luka masa lalu tokoh-tokohnya, berkelindan dengan riwayat sebuah negeri yang pernah dikoyak oleh kolonialisme, represi politik, dan konflik agama.','public/image/majnun2.jpg','2023-10-27 23:34:06','2023-10-27 23:34:06'),(3,'I Think I Love You','i-think-i-love-you','Cha Mirae','Sci-Fi','2020-02-20',176,10,'Dua priatampan,Jang. Taehyun dan Han Seokjin menjadi bintang kelas di Kyunghee University. Mereka sama-sama tampan dan menjadi bintang kelas. Seorang siswi bernama Jennie Park terlibat konflik dengan Taehyun. Seokjin merasa terpanggil untuk menyelamatkan Jennie dari intimidasi Taehyun. Sampai akhirnya, Seokjin jatuh cinta kepada Jennie. Jika nenunggu itu membosankan, apaka','public/image/i-think-i-love-you3.jpg','2023-10-27 23:34:45','2023-10-27 23:34:45'),(4,'Where Stories Begin','where-stories-begin','Wacaku','Fantasy','2020-02-20',800,10,'Where Stories Begin adalah antologi cerpen hasil kurasi Redaksi Novel Elex Media dari perlombaan yang diadakan oleh Wacaku. Where Stories Begin menyuguhkan cerita pendek dari sepuluh penulis yang terpilih dari perlombaan yang diadakan pada 2022 lalu. Cerita-cerita karya Stanza Alquisha, Maria Perdana, Robin Wijaya, Arata Kim, Kanigara, Meera, Nureesh Vhalega, Ratifa Mazari, Tian Topandi, dan Zaidatul Uyun Akrami mengisahkan bahwa perkara cinta tak melulu soal kebahagiaan. Bahwa cinta tak selalu semanis gulali, dan indah seperti gumpalan awan merah muda. Because these are where stories begin….','public/image/where-stories-begin4.jpg','2023-10-27 23:35:33','2023-10-27 23:35:33'),(5,'Ramai Yang Dulu Kita Bawa Pergi','ramai-yang-dulu-kita-bawa-pergi','Suci Berliana','Mystery','1999-12-19',850,40,'Cerita ini hanya kilas balik pertemuan kita. Cerita yang hanya mampu kujabarkan lewat rentetan kata. Tentang semua kenangan yang memenuhi rongga kepala. Tentang semua gelak tawa yang menggema di rongga telinga.\r\n\r\nAda satu pertanyaanku, “Apa benar tidak lagi ada aku di sana? Lebih jelasnya, di dalam hati dan pikiranmu.”\r\n\r\nTentang Penulis\r\nPenulis yang akrab disapa Ber ini memiliki nama lengkap Suci Berliana, lahir pada 2 September dan merupakan sarjana ekonomi. Ia menjadi sosok penggagas akun @_y2ui. Mungkin sebagian besar follower dan pembaca belum mengetahui arti dari nama akun @_y2ui. Nama akun Instagram ini bermakna: yang berumur 20 tahun untuk saat ini. Betul sekali, akun ini terbentuk di saat pemilik akun genap berusia 20 tahun.','public/image/ramai-yang-dulu-kita-bawa-pergi5.jpg','2023-10-27 23:36:06','2023-10-27 23:36:06'),(6,'172 Days','172-days','Nadzira Shafa','Fantasy','2003-02-19',500,20,'Bisakah aku melanjutkan hidup ini? Dia adalah rumahku dan duniaku. “Aku harus bagaimana sekarang melanjutkan hidupku?” Lirihku dalam hati. Dengan sekejap hidupku berubah. Kebahagiaanku terrenggut dalam hitungan menit. Pikiranku kalut dan tak bisa berpikir dengan jernih. Ingin rasanya untuk ikut pergi bersamanya. Dalam hati berteriak, “Bawa aku yaa bang, aku sudah tidak punya tujuan lagi setelah ini. Aku harus bagaimana? Jemput aku, bang! Abang, Ade rindu”, lirihku sambil menahan hati yang sesak. Hatiku hancur berkeping keping. 172 hari yang sangat berarti, istimewa di hati dan tak kan terganti.','public/image/172-days6.jpg','2023-10-27 23:36:38','2023-10-27 23:36:38'),(7,'Funiculi Funicula (Before the Coffee Gets Cold)','funiculi-funicula-before-the-coffee-gets-cold','Toshikazu Kawaguchi','Romance','2023-09-09',738,92,'Di sebuah gang kecil di Tokyo, ada kafe tua yang bisa membawa pengunjungnya menjelajahi waktu. Keajaiban kafe itu menarik seorang wanita yang ingin memutar waktu untuk berbaikan dengan kekasihnya, seorang perawat yang ingin membaca surat yang tak sempat diberikan suaminya yang sakit, seorang kakak yang ingin menemui adiknya untuk terakhir kali, dan seorang ibu yang ingin bertemu dengan anak yang mungkin takkan pernah dikenalnya.','public/image/funiculi-funicula-before-the-coffee-gets-cold7.jpg','2023-10-27 23:37:20','2023-10-27 23:37:20'),(8,'Terpikat','terpikat','Ghefira Zakhira','Mystery','2020-09-09',500,23,'Kisah ini dimulai sejak Aruna yang tidak sengaja melihat Abian dan seketika ia langsung jatuh cinta pada pandangan pertama kepada laki-laki itu. Aruna dan Abian memiliki sifat yang sangat berbeda. Abian terkenal sebagai sosok laki-laki yang sangat kaku bahkan sangat cuek kepada orang-orang yang tidak memiliki kepentingan dengannya, Abian pun tidak mengerti bagaimana bisa menjalani suatu hubungan.','public/image/terpikat8.jpg','2023-10-27 23:37:58','2023-10-27 23:37:58'),(9,'Oh My Savior','oh-my-savior','Washashira','Romance','2003-09-09',300,20,'Mencintai cowok sempurna seperti Zidane Hamizan adalah tantangan sekaligus keberuntungan bagi Zelda Farzana atau yang biasa dipanggil Zee. Cowok yang semua love language-nya bisa digunakan dan pemilik sifat penolong tanpa pamrih. Zee sendiri, adalah gadis yang sejak lahir hidupnya serba kekurangan dan harus bekerja keras demi bisa bertahan hidup bersama Ibu Peri dan adik-adiknya di panti.','public/image/oh-my-savior9.jpg','2023-10-27 23:38:42','2023-10-27 23:38:42'),(10,'The Chronicles of Narnia','the-chronicles-of-narnia','The Magician`s Nephew','Romance','2003-09-09',900,21,'Petualangan dimulai! Narnia… tanah tempat para Hewan yang Bisa Bicara tinggal… tempat sang penyihir menunggu… dan dunia yang baru akan terbentuk. Dalam petualangan untuk menyelamatkan seseorang, dua sahabat dipaksa masuk ke dunia lain, tempat seorang penyihir jahat berniat memperbudak mereka. Tetapi, Aslan Sang Singa menyanyikan lagu yang membuat tanah baru tercipta, tanah yang di kemudian hari dikenal sebagai Narnia. Dan di Narnia, segala hal mungkin terjadi…','public/image/the-chronicles-of-narnia10.jpg','2023-10-27 23:39:40','2023-10-27 23:39:40'),(11,'Heartbreak Motel','heartbreak-motel','Motel','Sci-Fi','2003-02-20',405,20,'Dalam hidup yang tidak pernah berhenti menyimpan misteri dan menyembunyikan arti, tidak selalu memberikan jawaban atas setiap pertanyaan, dan waktu bergulir—satu jam, satu momen, satu hari, satu minggu, satu bulan—pertanyaan dan permasalahan baru terus lahir sebelum yang lama sempat terurai, Ava menemukan panggilan hati sebagai aktris sejak usianya enam belas tahun.','public/image/heartbreak-motel11.jpg','2023-10-27 23:40:21','2023-10-27 23:40:21'),(12,'The Horse & His Boy','the-horse-his-boy','The Chronicles of Narnia','Romance','2003-02-20',500,20,'Narnia… tanah tempat para kuda bisa bicara… pengkhianatan mengintai… dan takdir menanti. Dalam perjalanan penuh tantangan, empat pelarian bertemu dan bergabung. Meski awalnya hanya berusaha membebaskan diri dari kehidupan yang kejam dan menekan, tak lama kemudian mereka mendapati diri mereka berada di tengah-tengah pertempuran dahsyat. Pertempuran yang akan memutuskan bukan hanya nasib mereka, tetapi juga nasib Narnia.','public/image/the-horse-his-boy12.jpg','2023-10-27 23:40:59','2023-10-27 23:40:59'),(13,'Sagaras','sagaras','Sagaras','Romance','2003-09-18',600,20,'Akhirnya. Siapa orang tua Ali dijawab di buku ini. Ali, bertahun-tahun, berusaha memecahkan misteri itu. Paib dan Seli tentu tidak akan membiarkan Ali sendirian, mereka sahabat sejati. Dan jangan lupakan, Batozar alias Master B, dengan segenap kalimat kasar, seolah tidak peduli, dia selalu siap membela. Tapi bagaimana jika misteri itu terhadang tembok kokoh SagaraSe? Dan mereka harus bertarung hidup-mati lima ronde melawan Ksatria Sagaras? Jangan khawatir, kalian akan tersenyum lebar (dan boleh jadi sambil menangis), saat tiba di halaman terakhir buku ini. Buku ini adalah buku ke-13 dari serial Bumi.','public/image/sagaras13.jpeg','2023-10-27 23:42:15','2023-10-27 23:42:15'),(14,'Melangkah','melangkah','Riski','Romance','2016-09-19',600,20,'Listrik padam di seluruh Jawa dan Bali secara misterius! Ancaman nyata kekuatan baru yang hendak menaklukkan Nusantara.\r\n\r\nSaat yang sama, empat sahabat mendarat di Sumba, hanya untuk mendapati nasib ratusan juta manusia ada di tangan mereka! Empat mahasiswa ekonomi ini, harus bertarung melawan pasukan berkuda yang bisa melontarkan listrik! Semua dipersulit oleh seorang buronan tingkat tinggi bertopeng pahlawan yang punya rencana mengerikan.','public/image/melangkah14.jpg','2023-10-27 23:42:57','2023-10-27 23:42:57'),(15,'Black Showman dan Pembunuhan di Kota Tak Bernama','black-showman-dan-pembunuhan-di-kota-tak-bernama','Meji','Sci-Fi','2020-09-09',600,20,'Pembunuhan bisa terjadi di mana saja, termasuk di sebuah kota kecil, terpencil, dan nyaris terlupakan di tengah pandemi Covid-19. Seorang mantan guru SMP ditemukan tewas tercekik di halaman rumahnya sendiri. Polisi tidak tahu apakah ini pembunuhan terencana, pembunuhan tak disengaja, atau aksi pencurian yang berakhir dengan pembunuhan.','public/image/black-showman-dan-pembunuhan-di-kota-tak-bernama15.jpg','2023-10-27 23:43:30','2023-10-27 23:43:30'),(16,'Perpustakaan Tengah Malam (The Library)','perpustakaan-tengah-malam-the-library','Midnight','Fantasy','2019-02-20',670,20,'Di antara kehidupan dan kematian terdapat sebuah perpustakaan yang jumlah bukunya tak terhingga. Tiap—tiap buku menyediakan satu kesempatan untuk mencoba kehidupan lain yang bisa dijalani sehingga kau bisa melihat apa yang terjadi kalau kau mengambil keputusan—keputusan berbeda…','public/image/perpustakaan-tengah-malam-the-library16.jpg','2023-10-27 23:44:18','2023-10-27 23:44:18'),(17,'Layangan Putus','layangan-putus','Alvin','Romance','2014-09-09',1231,12,'Seorang gadis remaja polos yang berasal dari daerah, tumbuh, berkembang, dan menemukan cinta di kota besar yang sangat berbeda dengan iklim daerah asalnya. Mimpi sederhananya menyambung pendidikan dan menyelesaikannya tepat waktu, namun berubah setelah ia mengenal sosok lelaki tangguh Lelaki yang mandiri dan berpendirian keras mengenalkannya dengan dunia baru yang belum pernah ia temui. Dunia yang asyik dan menyenangkan yang berbeda total dengan kehidupan remaja di daerah asalnya.','public/image/layangan-putus17.jpg','2023-10-27 23:44:58','2023-10-27 23:44:58'),(18,'Kita Pergi Hari Ini','kita-pergi-hari-ini','Dafa','Romance','2012-09-09',1237,12,'Mi dan Ma dan Mo tidak pernah melihat kucing seperti Nona Gigi. Tentu saja, mereka sudah pernah melihat kucing biasa. Tapi Nona Gigi adalah Kucing Luar Biasa. Kucing Luar Biasa berarti kucing yang di luar kebiasaan.\r\n\r\nNona Gigi adalah Cara Lain yang dinantikan oleh Bapak dan Ibu Mo untuk menjaga Mi, Ma, dan Mo ketika keduanya keluar rumah mencari uang. Sebab di Kota Suara, semua uang yang tersedia di dasar laut sudah diambil oleh para perompak, uang di bawah tanah diambil oleh para perampok, dan uang di ranting pohon diambil oleh pengusaha kayu yang jahat.','public/image/kita-pergi-hari-ini18.jpg','2023-10-27 23:45:40','2023-10-27 23:45:40'),(19,'Laut Bercerita','laut-bercerita','Pangestu','Romance','2023-09-09',1234,125,'Laut Bercerita, novel terbaru Leila S. Chudori, bertutur tentang kisah keluarga yang kehilangan, sekumpulan sahabat yang merasakan kekosongan di dada, sekelompok orang yang gemar menyiksa dan lancar berkhianat, sejumlah keluarga yang mencari kejelasan makam anaknya, dan tentang cinta yang tak akan luntur.','public/image/laut-bercerita19.jpg','2023-10-27 23:46:18','2023-10-27 23:46:18'),(20,'Dikta dan Hukum','dikta-dan-hukum','dikta','Romance','2021-08-09',1411,145,'UUDN = Undang-Undang Dikta Nadhira.\r\n\r\nPasal satu, dasar hukum perjodohan yang mengikat kedua belah pihak (Nadhira dan Dikta).\r\nPasal dua, memuat tentang bagaimana keduanya tanpa sadar saling menghindar agar tak jatuh hati.\r\nPasal tiga, kenjelaskan kedua belah pihak terhukum dengan jatuh hati yang tak bisa mereka hindari lagi.\r\nPasal empat, ketentuan umum keduanya sebagai kekasih yang saling mengasihi.\r\nPasal lima, kewenangan absolut Semesta menentukan akhir dari cerita yang mereka yakini akan abadi.','public/image/dikta-dan-hukum20.jpg','2023-10-27 23:46:49','2023-10-27 23:46:49'),(21,'Bumi Karya','bumi-karya','Tere Liye','Romance','2003-11-11',1241,12,'Tere Liye kembali mengkreasikan imajinasinya kedalam kedalam beberapa rangkaian novel. Bumi, merupakan rangkaian awal dari kisah sekelompok anak remaja berkemampuan istimewa. Mereka yang istimewa, mampu pergi ke dunia pararel bumi, bertemu dengan klan lain dan berhadapan dengan Tamus yang memiliki ambisi membebaskan si Tanpa Mahkota dan kemudian, menguasai bumi. Perkenalkan, Raib, seorang gadis belia berusia lima belas tahun yang tidak biasa. Dia bisa menghilang. Jangan beritahu siapapun, Itu adalah rahasia terbesar yang tak pernah ia ceritakan pada siapapun, termasuk kedua orangtuanya. Kehidupannya tetap berjalan normal, meskipun untuk dirinya sendiri. tidak jarang Raib menjahili orangtuanya dengan tiba-tiba menghilang, lalu muncul kembali secara tiba-tiba membuat kaget kedua orangtuanya. Tere Liye memberikan banyak kejutan ditiap halaman yang direpresentasikan oleh Raib, membuat pembaca dapat menikmati cerita yang seolah tidak akan ada habisnya. Tere Liye berhasil meracik buku ini sebagai bahan baca para pecinta novel sastra maupun fantasi.','public/image/bumi-karya21.jpg','2023-10-28 01:15:43','2023-10-28 01:15:43'),(22,'Hujan','hujan','Tere Liye','Romance','2014-11-11',1231,123,'Novel Hujan berkisah tentang persahabatan, tentang cinta, tentang perpisahan, tentang melupakan, dan tentang hujan','public/image/hujan22.jpg','2023-10-28 01:16:28','2023-10-28 01:16:28'),(23,'Bedebah di Ujung Tanduk','bedebah-di-ujung-tanduk','Meji','Romance','2015-12-18',1238,12,'Di Negeri Para Bedebah, pencuri, perampok, bagai musang berbulu domba. Di depan, wajah mereka tersenyum penuh pencitraan. Di belakang penuh tipu-tipu. Di Negeri di Ujung Tanduk, pencuri, perampok, berkeliaran menjadi penegak hukum. Di depan, di belakang, mereka tidak malu-malu lagi. Tapi setidaknya, Kawan, dalam situasi apapun, petarung sejati akan terus memilih kehormatan hidupnya. Bahkan ketika nasib di ujung tanduk. Dia akan terus bertarung habis-habisan, bersama sahabat sejati. Karena esok, matahari akan terbit sekali lagi. Bersama harapan.','public/image/bedebah-di-ujung-tanduk23.jpg','2023-10-28 01:17:00','2023-10-28 01:17:00'),(24,'00.00','0000','Ameylia Falensia','Romance','2018-12-19',1241,12,'Kehidupan Lengkara Putri Langit berubah kacau setelah ayahnya memutuskan untuk menikah lagi dengan seorang janda beranak satu. Kebahagiannya kini terenggut. Tidak ada lagi rumah hangat untuknya berlindung. Adik tirinya, Nilam, merebut segala yang ia miliki. Papanya, perhatiannya, teman-temannya, bahkan kekasihnya. Gadis yang selalu dipenuhi iri dengki itu tidak pernah membiarkan Lengkara bahagia. Lengkara lelah hidup dalam rasa sakit. Ia lelah berjuang seorang diri. Sampai akhirnya, ia memilih cara lain untuk menemukan kebahagiaannya. Yaitu, melalui kematian.','public/image/000024.jpg','2023-10-28 01:17:34','2023-10-28 01:17:34'),(25,'Gadis Minimarket','gadis-minimarket','Sayaka Murata','Romance','2022-09-18',512,12,'Novel dengan judul Gadis Minimarket adalah novel terjemahan dari bahasa Jepang yang ditulis oleh Sayaka Murata dan dialihbahasakan oleh Ninuk Sulistyawati. Novel ini mengisahkan seorang gadis bernama Keiko Furukura dan akrab dipanggil Keiko. Semasa sekolah hingga kuliah, ia sangat pendiam dan suka menyendiri, sehingga ia hampir tidak memiliki teman semasa menempuh pendidikan.','public/image/gadis-minimarket25.jpg','2023-10-28 01:18:16','2023-10-28 01:18:16'),(26,'YoungAdult: Ten Years Challenge','youngadult-ten-years-challenge','Mutriani','Romance','2001-12-19',918,11,'Jika kamu suka dengan novel dengan genre romantis, maka novel YoungAdult: Ten Years Challenge Mutriani cocok untuk dijadikan bacaan dikala waktu senggang. Kisah romantis yang ada di dalam novel ini tidak jauh dalam kehidupan sehari-hari atau mungkin saja kamu juga mengalami kisah cinta yang hampir sama dengan novel yang diterbitkan tahun 2020 ini. Namun, pada pertengahan 2021 novel yang dipenuhi dengan drama cinta ini masih digemari oleh pencinta novel.','public/image/youngadult-ten-years-challenge26.jpg','2023-10-28 01:18:55','2023-10-28 01:18:55'),(27,'Puya ke Puya','puya-ke-puya','Faisal Oddang','Romance','2018-12-18',1928,12,'Novel dengan judul Puya ke Puya adalah novel yang memenangkan sayembara novel Dewan Kesenian Jakarta (DKJ) dan Novel Terbaik Versi Tempo pada tahun 2015. Novel yang sudah mendapatkan penghargaan tersebut buah karya dari pengarang Faisal Oddang. Novel ini memang pertama kali dicetak pada tahun 2015, tetapi di tahun 2021 baru diterbitkan versi digitalnya. Dengan adanya versi digital, kamu bisa membaca novel ini dari telepon genggam yang hampir digunakan sehari-hari.','public/image/puya-ke-puya27.jpg','2023-10-28 01:19:21','2023-10-28 01:19:21'),(28,'Wingit','wingit','Sara Wijayanto','Mystery','2018-12-19',1241,12,'Bagi kamu yang sering menonton youtube horor, pastinya tidak asing dengan youtuber horor, Sara Wijayanto. Ia sering mencari dan menemukan tempat-tempat yang dihuni oleh makhluk-makhluk gaib dan ia juga suka berbicara dengan makhluk-makhluk gaib yang ada di tempat yang sedang dikunjungi. Dari salah satu tempat yang pernah dikunjungi oleh Sara Wijayanto ditulis ulang ke dalam bentuk sebuah novel dengan genre horor. Ketika kamu membaca novel ini, maka kamu ikut merasakan suasana horor.','public/image/wingit28.jpg','2023-10-28 01:20:10','2023-10-28 01:20:10'),(29,'Selamat Tinggal','selamat-tinggal','Tere Liye','Romance','2018-02-21',982,21,'Siapa yang tidak mengenal seorang penulis sekaligus pengarang novel Tere Liye, sepertinya hanya sedikit orang saja yang tak mengenal Tere Liye. Hamir setiap novel yang ditulis olehnya, selalu menjadi best seller, seperti novel tentang kamu, novel serial bumi, dan masih banyak lagi. Apakah kamu pernah membaca novel Tere Liye atau kamu memiliki salah satu dari novel Tere Liye? Pada pertengahan 2020, Tere Liye menerbitkan sebuah novel dengan judul Selamat Tinggal. Meskipun terbit pada tahun 2020, tetapi di pertengahan 2021, novel ini masih diminati oleh banyak orang.','public/image/selamat-tinggal29.jpg','2023-10-28 01:20:56','2023-10-28 01:20:56'),(30,'Twenty Four Eyes','twenty-four-eyes','Tere Liye','Romance','0206-01-18',981,19,'Twenty Four Eyes terdiri dari sepuluh bab yang membuat cerita di dalamnya semakin menyentuh segi kemanusiaan. Novel karya Sakae Tsuboi ini diklaim sebagai novel antiperang yang tidak menunjukkan sisi gelap dari perang. Sakae hanya memperlihatkan pengaruh perang pada kehidupan orang-orang sesudahnya, bahkan walaupun perang telah berakhir, segala hal yang sudah terjadi selama perang pun mengubah banyak hal, khususnya persoalan pendidikan dan kesehatan.','public/image/twenty-four-eyes30.jpg','2023-10-28 01:21:42','2023-10-28 01:21:42');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `borroweds`
--

DROP TABLE IF EXISTS `borroweds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `borroweds` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `borrow_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `status` enum('Dipinjam','Dikembalikan','Terlambat','Hilang','Rusak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `borroweds_book_id_foreign` (`book_id`),
  KEY `borroweds_user_id_foreign` (`user_id`),
  CONSTRAINT `borroweds_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  CONSTRAINT `borroweds_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `borroweds`
--

LOCK TABLES `borroweds` WRITE;
/*!40000 ALTER TABLE `borroweds` DISABLE KEYS */;
INSERT INTO `borroweds` VALUES (1,'38ZtMIaDeu',2,14,'Hilang','2023-10-27 23:47:24','2023-10-27 23:47:24'),(2,'WUykpLlywo',15,10,'Dikembalikan','2023-10-27 23:47:24','2023-10-27 23:47:24'),(3,'2l6GIs2lwV',3,2,'Hilang','2023-10-27 23:47:24','2023-10-27 23:47:24'),(4,'H8renHsOZm',6,7,'Hilang','2023-10-27 23:47:24','2023-10-27 23:47:24'),(5,'NqRwbRcl3E',15,8,'Rusak','2023-10-27 23:47:24','2023-10-27 23:47:24'),(6,'C5ns83HLi6',17,12,'Terlambat','2023-10-27 23:47:24','2023-10-27 23:47:24'),(7,'i0ejOINI2J',17,8,'Terlambat','2023-10-27 23:47:24','2023-10-27 23:47:24'),(8,'wzvEuVINaf',18,9,'Hilang','2023-10-27 23:47:24','2023-10-27 23:47:24'),(9,'7QE6ewDDCp',19,5,'Terlambat','2023-10-27 23:47:24','2023-10-27 23:47:24'),(10,'eZxvdNRBSM',9,12,'Terlambat','2023-10-27 23:47:24','2023-10-27 23:47:24'),(11,'QQexcteRaU',14,10,'Hilang','2023-10-27 23:47:24','2023-10-27 23:47:24'),(12,'lmLwQZgm8J',14,8,'Hilang','2023-10-27 23:47:24','2023-10-27 23:47:24'),(13,'CPVxmRNtMx',17,8,'Dipinjam','2023-10-27 23:47:24','2023-10-27 23:47:24'),(14,'sFTb9zL6ui',9,15,'Dipinjam','2023-10-27 23:47:24','2023-10-27 23:47:24'),(15,'enzMLkb3BE',11,5,'Rusak','2023-10-27 23:47:24','2023-10-27 23:47:24'),(16,'wdmqglx8yy',8,14,'Terlambat','2023-10-27 23:47:24','2023-10-27 23:47:24'),(17,'qsTbmNMoFv',14,8,'Terlambat','2023-10-27 23:47:24','2023-10-27 23:47:24'),(18,'1WjkCeQcY4',4,5,'Rusak','2023-10-27 23:47:24','2023-10-27 23:47:24'),(19,'YCCugot7k6',15,11,'Rusak','2023-10-27 23:47:24','2023-10-27 23:47:24'),(20,'ZeFQYofdlY',18,12,'Terlambat','2023-10-27 23:47:24','2023-10-27 23:47:24'),(21,'7ejEplvcd0',5,10,'Hilang','2023-10-27 23:47:24','2023-10-27 23:47:24'),(22,'dryTMd8HmL',12,10,'Hilang','2023-10-27 23:47:24','2023-10-27 23:47:24'),(23,'IbW3sUJ00H',18,8,'Rusak','2023-10-27 23:47:24','2023-10-27 23:47:24'),(24,'kzmyZQyAVY',5,7,'Dikembalikan','2023-10-27 23:47:24','2023-10-27 23:47:24'),(25,'N8dQsnbMNB',18,7,'Terlambat','2023-10-27 23:47:24','2023-10-27 23:47:24'),(26,'lYA5przgdq',19,1,'Hilang','2023-10-27 23:47:24','2023-10-27 23:47:24'),(27,'rNDbgRpwci',10,7,'Dipinjam','2023-10-27 23:47:24','2023-10-27 23:47:24'),(28,'VXWuISdy3s',2,7,'Rusak','2023-10-27 23:47:24','2023-10-27 23:47:24'),(29,'icQnF0gnih',3,7,'Dipinjam','2023-10-27 23:47:24','2023-10-27 23:47:24'),(30,'hgRtfD3ZWe',13,14,'Terlambat','2023-10-27 23:47:24','2023-10-27 23:47:24');
/*!40000 ALTER TABLE `borroweds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (23,'2014_10_12_000000_create_users_table',1),(24,'2014_10_12_100000_create_password_reset_tokens_table',1),(25,'2019_08_19_000000_create_failed_jobs_table',1),(26,'2019_12_14_000001_create_personal_access_tokens_table',1),(27,'2023_10_27_043242_create_books_table',1),(28,'2023_10_27_150309_create_borroweds_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('staff','visitor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Ezequiel Will','staff@test.com','staff','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','cLJSdDi8Wa','2023-10-27 23:19:04','2023-10-28 01:31:24'),(2,'Trevor Abbott','visitor@test.com','visitor','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','Is5mZGglug','2023-10-27 23:19:04','2023-10-28 01:31:34'),(3,'Charlotte Friesen','horacio94@example.com','visitor','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','etlCM00fmS','2023-10-27 23:19:04','2023-10-27 23:19:04'),(4,'Lyla Senger IV','garfield45@example.net','visitor','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','3hdJq3WUgD','2023-10-27 23:19:04','2023-10-27 23:19:04'),(5,'Deshawn Osinski','yasmine.brown@example.com','visitor','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','zOIJaH7wg2','2023-10-27 23:19:04','2023-10-27 23:19:04'),(6,'Mr. Adan Paucek DVM','alysa38@example.com','visitor','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','QjTYmMPALD','2023-10-27 23:19:04','2023-10-27 23:19:04'),(7,'Dr. Emilie Kulas DDS','fadel.danial@example.org','visitor','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','ganrJQRtYc','2023-10-27 23:19:04','2023-10-27 23:19:04'),(8,'Ernie Stanton','pfeffer.jeromy@example.org','visitor','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','BWCLzHiVWz','2023-10-27 23:19:04','2023-10-27 23:19:04'),(9,'Jammie Okuneva','ddeckow@example.com','visitor','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','JVy6KVkvGc','2023-10-27 23:19:04','2023-10-27 23:19:04'),(10,'Roxanne Hansen','courtney80@example.org','visitor','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','uW34GCKiXn','2023-10-27 23:19:04','2023-10-27 23:19:04'),(11,'Woodrow Nienow','reilly.olga@example.com','visitor','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','gonyaGeWdV','2023-10-27 23:19:04','2023-10-27 23:19:04'),(12,'Modesta Carter DDS','ckerluke@example.org','visitor','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','AzjGl5Ch8l','2023-10-27 23:19:04','2023-10-27 23:19:04'),(13,'Lillie Fay I','macy40@example.org','visitor','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','wSyJI0gXvG','2023-10-27 23:19:04','2023-10-27 23:19:04'),(14,'Dave Eichmann','heath07@example.net','visitor','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','lGahGEam7X','2023-10-27 23:19:04','2023-10-27 23:19:04'),(15,'Heidi Aufderhar','kerluke.isabell@example.org','visitor','2023-10-27 23:19:04','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','8PjKFw0Ngy','2023-10-27 23:19:04','2023-10-27 23:19:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-28 15:35:20

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 27 May 2024, 11:32:22
-- Sunucu sürümü: 8.2.0
-- PHP Sürümü: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kitap_e-ticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL,
  `adminAdi` varchar(20) COLLATE utf8mb3_turkish_ci NOT NULL,
  `parola` varchar(255) COLLATE utf8mb3_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `adresbilgileri`
--

DROP TABLE IF EXISTS `adresbilgileri`;
CREATE TABLE IF NOT EXISTS `adresbilgileri` (
  `Adres_ID` int NOT NULL AUTO_INCREMENT,
  `Kullanici_ID` int DEFAULT NULL,
  `Adres_basligi` varchar(100) COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `Siparis_Veren_AdiSoyad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `Telefon` varchar(15) COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `Adres_Tanimi` text COLLATE utf8mb3_turkish_ci,
  PRIMARY KEY (`Adres_ID`),
  KEY `Kullanici_ID` (`Kullanici_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `adresbilgileri`
--

INSERT INTO `adresbilgileri` (`Adres_ID`, `Kullanici_ID`, `Adres_basligi`, `Siparis_Veren_AdiSoyad`, `Telefon`, `Adres_Tanimi`) VALUES
(1, 1, 'Ev', 'Gülbahar Elik', '11111111111', 'Çakmak Mahallesi, İkbal caddesi, sefir sokak, no:10, daire:2, Ümraniye/İstanbul');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `favoriler`
--

DROP TABLE IF EXISTS `favoriler`;
CREATE TABLE IF NOT EXISTS `favoriler` (
  `Favori_ID` int NOT NULL AUTO_INCREMENT,
  `Kullanici_ID` int DEFAULT NULL,
  `Urun_ID` int DEFAULT NULL,
  PRIMARY KEY (`Favori_ID`),
  KEY `Kullanici_ID` (`Kullanici_ID`),
  KEY `Urun_ID` (`Urun_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `kategori_ID` int NOT NULL AUTO_INCREMENT,
  `kategoriAdi` varchar(100) COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`kategori_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`kategori_ID`, `kategoriAdi`) VALUES
(1, 'Ajanda'),
(2, 'Defter');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap_ozellikleri`
--

DROP TABLE IF EXISTS `kitap_ozellikleri`;
CREATE TABLE IF NOT EXISTS `kitap_ozellikleri` (
  `KitOzellik_ID` int NOT NULL AUTO_INCREMENT,
  `Urun_ID` int DEFAULT NULL,
  `Sayfa_Ozelligi` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `Kenar_Cesidi` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `Buyukluk` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`KitOzellik_ID`),
  KEY `Urun_ID` (`Urun_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `kitap_ozellikleri`
--

INSERT INTO `kitap_ozellikleri` (`KitOzellik_ID`, `Urun_ID`, `Sayfa_Ozelligi`, `Kenar_Cesidi`, `Buyukluk`) VALUES
(1, NULL, 'Düz', 'Spiralli', 'A4'),
(2, NULL, 'Düz', 'Spiralli', 'A5'),
(3, NULL, 'Düz', 'Spiralsiz', 'A4'),
(4, NULL, 'Düz', 'Spiralsiz', 'A5'),
(5, NULL, 'Çizgili', 'Spiralli', 'A4'),
(6, NULL, 'Çizgili', 'Spiralli', 'A5'),
(7, NULL, 'Çizgili', 'Spiralsiz', 'A4'),
(8, NULL, 'Çizgili', 'Spiralsiz', 'A5'),
(9, NULL, 'Kareli', 'Spiralli', 'A4'),
(10, NULL, 'Kareli', 'Spiralli', 'A5'),
(11, NULL, 'Kareli', 'Spiralsiz', 'A4'),
(12, NULL, 'Kareli', 'Spiralsiz', 'A5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

DROP TABLE IF EXISTS `kullanici`;
CREATE TABLE IF NOT EXISTS `kullanici` (
  `kullanici_ID` int NOT NULL AUTO_INCREMENT,
  `adSoyad` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `cep_telefonu` varchar(15) COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `sifre` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`kullanici_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_ID`, `adSoyad`, `email`, `cep_telefonu`, `sifre`) VALUES
(1, 'Gülbahar Elik', 'bahar@gmail.com', '11111111111', '12345');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepetdetay`
--

DROP TABLE IF EXISTS `sepetdetay`;
CREATE TABLE IF NOT EXISTS `sepetdetay` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kullanici_id` int NOT NULL,
  `urun_id` int NOT NULL,
  `miktar` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kullanici_id` (`kullanici_id`),
  KEY `urun_id` (`urun_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisdetay`
--

DROP TABLE IF EXISTS `siparisdetay`;
CREATE TABLE IF NOT EXISTS `siparisdetay` (
  `SipDetay_ID` int NOT NULL AUTO_INCREMENT,
  `Siparis_ID` int DEFAULT NULL,
  `Urun_ID` int DEFAULT NULL,
  `miktar` int DEFAULT NULL,
  `Birim_Fiyati` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`SipDetay_ID`),
  KEY `Siparis_ID` (`Siparis_ID`),
  KEY `Urun_ID` (`Urun_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparisler`
--

DROP TABLE IF EXISTS `siparisler`;
CREATE TABLE IF NOT EXISTS `siparisler` (
  `Siparis_ID` int NOT NULL AUTO_INCREMENT,
  `kullanici_ID` int DEFAULT NULL,
  `siparis_tarihi` date DEFAULT NULL,
  PRIMARY KEY (`Siparis_ID`),
  KEY `kullanici_ID` (`kullanici_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

DROP TABLE IF EXISTS `urunler`;
CREATE TABLE IF NOT EXISTS `urunler` (
  `Urun_ID` int NOT NULL AUTO_INCREMENT,
  `UrunAdi` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `UrunFiyat` decimal(10,2) DEFAULT NULL,
  `uretimYili` int DEFAULT NULL,
  `Aciklama` text CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci,
  `stokMiktari` int DEFAULT NULL,
  `fotograf` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_turkish_ci DEFAULT NULL,
  `kategori_ID` int DEFAULT NULL,
  PRIMARY KEY (`Urun_ID`),
  KEY `kategori_ID` (`kategori_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`Urun_ID`, `UrunAdi`, `UrunFiyat`, `uretimYili`, `Aciklama`, `stokMiktari`, `fotograf`, `kategori_ID`) VALUES
(1, 'Çiçek Motifli Ajanda', 350.00, 2023, 'Resim, kaliteli bir kağıt üzerinde yapılmıştır ve profesyonel bir yöntemle boyanmıştır. Pencere ve kapı açıkları, binanın içini gösterir ve bu da, daha fazla derinlik ve boyut kazandırır.', 10, ':/image/kitap8.webp', 1),
(2, 'Modern Binası', 400.00, 2024, 'Bu eser, modern mimariyi ve güzel sanatları bir araya getiren bir şekilde yaratılmıştır. Resim, bir binanın görünümünü gösterir, bu binanın mimariyi modern, renkleri az, geometrik ve doğal estetiğe sahip bir şekilde tasarlanmıştır.', 10, ':/image/kitap10.webp', 1),
(3, 'Sade Şık Ajanda', 250.00, 2024, 'Sade ve şıklığı arayanlar içindir.Renkleri canlı ve parlaktır. Resim, modern bir dekorasyon için idealdir.', 5, ':/image/kitap1.jpg', 1),
(4, 'Modern Mimari Motiflerle Sürgün Defteri', 450.00, 2022, 'Modern Mimari Motiflerle Sürgün Defteri, günlük yaşamınızı keyifle ve estetik olarak zenginleştirecektir. Defter, kaliteli bir kağıt kullanılarak üretilmiştir ve modern mimari motiflerle dekoratif bir şekilde tasarlanmıştır.', 5, ':/image/kitap5.webp', 1),
(5, 'Doğal Çiçek Desenli Kumaş Kapak Ajanda', 350.00, 2022, 'Bu eşsiz ajanda, doğal çiçek desenleriyle süslenmiş yeşil kumaş kapağıyla göz kamaştırıyor. El yapımı dokunuşlarla tasarlanan ajandamız, hem estetik hem de işlevsel özellikleriyle dikkat çekiyor.', 5, ':image/kitap21.webp', 1),
(6, '\r\nGotik Kafatası Temalı Deri Kapak Ajanda', 350.00, 2022, 'Bu eşsiz ajanda, gotik ve karanlık tasarımıyla dikkat çekiyor. El yapımı deri kapak, detaylı kafatası motifi ve çarpıcı dikişlerle süslenmiştir. Dayanıklı yapısı ve sağlam kilidi ile notlarınızı güvenle saklamanızı sağlar.', 5, ':/image/kitap11.webp', 1),
(7, 'Güneşin Son Işığı', 250.00, 2024, 'Güneşin son ışıklarıyla yeni yıla hazırlanıyoruz. Yeni yıl yeni hedefler için.', 5, ':/image/kitap22.webp', 1),
(8, 'Papatya Ajandası', 250.00, 2020, 'Yılın son ayında, papatya gibi güneşli anılar yaratmak için', 5, ':/image/kitap20.webp', 1),
(9, 'İyi Şanslar', 200.00, 2020, 'Kedi severler için siyah renkli defter', 5, ':/image/kitap24.webp', 2),
(10, 'Kova Listesi Kitabı', 200.00, 2020, 'Şık ve sadelikten yana olan Kova burcuna sahipler olanlar için ', 5, ':/image/kitap13.png', 2),
(11, 'Tarihsiz Planlayıcı', 250.00, 2020, 'Planlamanın sınırı yok! UNDATE Planner ile hayatınızı organize edin. Tarih sınırı olmadan, istediğiniz şekilde planlayıp organize edin. Bu defter, günlük, haftalık veya aylık planlamalar için idealdir. ', 5, ':/image/kitap3.webp', 2),
(12, 'Kahverengi Minimalist Tasarım Defter', 250.00, 2024, 'kahverengi kumaş kaplamasıyla zarif bir görünüm sunar. Esnek kapak, dayanıklılığı ve taşınabilirliği ile günlük kullanım için idealdir. İç sayfaları, notlarınızı, planlarınızı ve fikirlerinizi düzenlemenize yardımcı olacak şekilde tasarlanmıştır. ', 5, ':/image/kitap2.jpg', 2),
(13, 'El Nakışı Kitap ve Kuş Temalı Defter', 350.00, 2024, 'Bu zarif defter, ön kapağında yer alan el nakışı kitap ve kuş deseni ile dikkat çekiyor. Yüksek kaliteli kumaş kapak, detaylı nakış işçiliği ile birleşerek deftere sanatsal bir dokunuş katıyor. İç sayfaları kaliteli kağıttan üretilmiş olup yazma ve çizim için idealdir.', 10, ':/image/kitap15.webp', 2),
(14, 'Ay Işığı', 250.00, 2023, 'Ayın döngüsü gibi, hayatınızın döngüsünü yönetin. Düzenli not alma ve planlama ile başarıya ulaşın', 5, ':/image/kitap25.webp', 2),
(15, 'Gül Defteri', 250.00, 2024, 'Gül Defteri, gülün doğasına ve güçlü sembolüne dayanarak tasarlanmış bir defterdir. Gül, doğa ve yaşamın simgesidir ve güçlü bir pozitif enerji kaynağıdır. Gül Defteri, bu pozitif enerjiyi hayatınızda aktarmak ve keyifle yaşamak için kullanılabilir. ', 5, ':/image/kitap23.webp', 2),
(16, 'Mavi Çiçek Düşleri', 350.00, 2024, 'arı kapaklı bir defterdir ve onun üstüne mavi renkli çiçekler çizilmiştir. Bu defter, not alma, planlama ve kreatif yaratıcılığınızın harikasına imkan tanıyan bir ürünüdür. Mavi çiçekler, rahatlatıcı ve pozitif bir duygusal durumu oluşturan renklerden biridir. Bu defteri kullanarak, günlük yaşamınızın keyfini çıkarmak ve daha organizasyonlu yaşamak için kullanabilirsiniz.', 5, ':/image/kitap3.jpg', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

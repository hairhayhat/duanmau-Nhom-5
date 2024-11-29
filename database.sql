-- MySQL dump 10.13  Distrib 8.4.3, for Win64 (x86_64)
--
-- Host: localhost    Database: du an mau 1
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `brand_id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `logo` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (3,'SamSung','samsung.png','Samsung ─æ╞░ß╗úc th├ánh lß║¡p v├áo n─âm 1938 tß║íi H├án Quß╗æc bß╗ƒi Lee Byung-chul. Ban ─æß║ºu, Samsung l├á mß╗Öt c├┤ng ty th╞░╞íng mß║íi nhß╗Å, nh╞░ng sau ─æ├│ ─æ├ú ph├ít triß╗ân th├ánh mß╗Öt g├ú khß╗òng lß╗ô c├┤ng nghß╗ç vß╗¢i nhß╗»ng sß║ún phß║⌐m ─æiß╗çn tß╗¡ nß╗òi tiß║┐ng, ─æß║╖c biß╗çt l├á smartphone v├á tivi th├┤ng minh. Samsung ─æ├ú trß╗ƒ th├ánh biß╗âu t╞░ß╗úng cß╗ºa sß╗▒ s├íng tß║ío v├á ─æß╗òi mß╗¢i, nß╗òi bß║¡t vß╗¢i c├┤ng nghß╗ç m├án h├¼nh OLED v├á nhß╗»ng th├ánh tß╗▒u vß╗ü ─æiß╗çn tß╗¡ ti├¬u d├╣ng.','2024-11-27 12:24:09',NULL),(4,'LG','LG.png','LG, ra ─æß╗¥i v├áo n─âm 1958, c┼⌐ng tß║íi H├án Quß╗æc, l├á mß╗Öt trong nhß╗»ng t├¬n tuß╗òi lß╗¢n trong ng├ánh ─æiß╗çn tß╗¡. Vß╗¢i sß╗⌐ mß╗çnh cß║úi thiß╗çn chß║Ñt l╞░ß╗úng cuß╗Öc sß╗æng cß╗ºa ng╞░ß╗¥i ti├¬u d├╣ng, LG ─æ├ú ph├ít triß╗ân nhß╗»ng sß║ún phß║⌐m ti├¬n tiß║┐n nh╞░ tivi OLED v├á m├íy giß║╖t th├┤ng minh. LG c┼⌐ng l├á c├┤ng ty ti├¬n phong trong viß╗çc ph├ít triß╗ân c├┤ng nghß╗ç m├án h├¼nh hiß╗ân thß╗ï.','2024-11-27 12:25:09',NULL),(5,'Panasonic','panasonic.jpg','Panasonic, s├íng lß║¡p v├áo n─âm 1918 tß║íi Nhß║¡t Bß║ún, l├á mß╗Öt trong nhß╗»ng tß║¡p ─æo├án ─æiß╗çn tß╗¡ l├óu ─æß╗¥i v├á uy t├¡n nhß║Ñt tr├¬n thß║┐ giß╗¢i. Panasonic nß╗òi bß║¡t trong c├íc l─⌐nh vß╗▒c tß╗½ sß║ún xuß║Ñt thiß║┐t bß╗ï gia dß╗Ñng, m├íy giß║╖t, tß╗º lß║ính cho ─æß║┐n c├┤ng nghß╗ç n─âng l╞░ß╗úng, ─æß║╖c biß╗çt l├á trong viß╗çc ph├ít triß╗ân c├íc giß║úi ph├íp tiß║┐t kiß╗çm n─âng l╞░ß╗úng.','2024-11-27 12:25:38',NULL),(6,'Electrolux','Electrolux.jpg','Electrolux, th├ánh lß║¡p v├áo n─âm 1901 tß║íi Thß╗Ñy ─Éiß╗ân, nß╗òi tiß║┐ng vß╗¢i c├íc sß║ún phß║⌐m thiß║┐t bß╗ï gia dß╗Ñng nh╞░ m├íy h├║t bß╗Ñi, tß╗º lß║ính v├á m├íy giß║╖t. Electrolux lu├┤n ─æß║╖t chß║Ñt l╞░ß╗úng v├á sß╗▒ tiß╗çn ├¡ch l├¬n h├áng ─æß║ºu, mang ─æß║┐n cho ng╞░ß╗¥i ti├¬u d├╣ng nhß╗»ng sß║ún phß║⌐m tiß╗çn nghi v├á tiß║┐t kiß╗çm n─âng l╞░ß╗úng.','2024-11-27 12:25:55',NULL),(7,'Sony','Sony.webp','Sony, ra ─æß╗¥i v├áo n─âm 1946 tß║íi Nhß║¡t Bß║ún, l├á th╞░╞íng hiß╗çu to├án cß║ºu nß╗òi bß║¡t vß╗¢i nhß╗»ng sß║ún phß║⌐m ─æiß╗çn tß╗¡ chß║Ñt l╞░ß╗úng cao, tß╗½ tivi, m├íy ß║únh cho ─æß║┐n hß╗ç thß╗æng giß║úi tr├¡ nh╞░ PlayStation. Sony lu├┤n dß║½n ─æß║ºu trong c├íc xu h╞░ß╗¢ng c├┤ng nghß╗ç v├á ─æ├ú c├│ nhß╗»ng b╞░ß╗¢c tiß║┐n lß╗¢n trong c├íc ng├ánh c├┤ng nghiß╗çp ├óm thanh v├á giß║úi tr├¡.','2024-11-27 12:26:09',NULL),(8,'Toshiba','toshiba.jpg','Toshiba, s├íng lß║¡p v├áo n─âm 1875, l├á mß╗Öt trong nhß╗»ng th╞░╞íng hiß╗çu l├óu ─æß╗¥i nhß║Ñt trong ng├ánh c├┤ng nghiß╗çp ─æiß╗çn tß╗¡ v├á c├┤ng nghß╗ç. Toshiba nß╗òi bß║¡t trong c├íc sß║ún phß║⌐m m├íy t├¡nh, thiß║┐t bß╗ï ─æiß╗çn tß╗¡ v├á c├┤ng nghß╗ç b├ín dß║½n, ─æ├│ng g├│p lß╗¢n v├áo sß╗▒ ph├ít triß╗ân cß╗ºa ng├ánh c├┤ng nghiß╗çp ─æiß╗çn tß╗¡ Nhß║¡t Bß║ún.','2024-11-27 12:26:49',NULL),(9,'Sharp','Sharp.webp','Sharp, th├ánh lß║¡p v├áo n─âm 1912, l├á mß╗Öt th╞░╞íng hiß╗çu h├áng ─æß║ºu trong ng├ánh c├┤ng nghß╗ç ─æiß╗çn tß╗¡, ─æß║╖c biß╗çt nß╗òi bß║¡t vß╗¢i nhß╗»ng sß║ún phß║⌐m m├án h├¼nh LCD v├á c├íc thiß║┐t bß╗ï gia dß╗Ñng. Sharp lu├┤n ─æ╞░ß╗úc biß║┐t ─æß║┐n vß╗¢i nhß╗»ng sß║ún phß║⌐m ─æß╗òi mß╗¢i s├íng tß║ío v├á chß║Ñt l╞░ß╗úng v╞░ß╗út trß╗Öi.','2024-11-27 12:27:11',NULL),(10,'Midea','midea.png','Midea, th├ánh lß║¡p v├áo n─âm 1968 tß║íi Trung Quß╗æc, l├á mß╗Öt trong nhß╗»ng th╞░╞íng hiß╗çu h├áng ─æß║ºu trong ng├ánh ─æiß╗çn lß║ính v├á c├íc thiß║┐t bß╗ï gia dß╗Ñng. Midea ─æß║╖c biß╗çt th├ánh c├┤ng vß╗¢i c├íc sß║ún phß║⌐m m├íy lß║ính, nß╗ôi c╞ím ─æiß╗çn, v├á c├íc thiß║┐t bß╗ï ─æiß╗çn tß╗¡ gia ─æ├¼nh, ─æß╗ông thß╗¥i lu├┤n ch├║ trß╗ìng v├áo t├¡nh n─âng th├┤ng minh v├á tiß║┐t kiß╗çm n─âng l╞░ß╗úng.','2024-11-27 12:27:24',NULL),(11,'Haier','haier.jpg','Haier, ─æ╞░ß╗úc s├íng lß║¡p v├áo n─âm 1984 tß║íi Trung Quß╗æc, l├á mß╗Öt th╞░╞íng hiß╗çu nß╗òi bß║¡t trong c├íc sß║ún phß║⌐m gia dß╗Ñng nh╞░ tß╗º lß║ính, m├íy giß║╖t, v├á m├íy lß║ính. Haier ─æ├ú trß╗ƒ th├ánh mß╗Öt biß╗âu t╞░ß╗úng to├án cß║ºu trong ng├ánh ─æiß╗çn gia dß╗Ñng nhß╗¥ v├áo nhß╗»ng sß║ún phß║⌐m ─æß╗Öt ph├í v├á c├┤ng nghß╗ç ti├¬n tiß║┐n.','2024-11-27 12:27:39',NULL),(12,'Beko','beko.png','Beko, ra ─æß╗¥i v├áo n─âm 1955 tß║íi Thß╗ò Nh─⌐ Kß╗│, nß╗òi tiß║┐ng vß╗¢i c├íc sß║ún phß║⌐m thiß║┐t bß╗ï gia dß╗Ñng hiß╗çu suß║Ñt cao, ─æß║╖c biß╗çt l├á m├íy rß╗¡a ch├⌐n v├á bß║┐p tß╗½. Beko lu├┤n ch├║ trß╗ìng ─æß║┐n sß╗▒ tiß╗çn lß╗úi v├á tiß║┐t kiß╗çm n─âng l╞░ß╗úng, mang ─æß║┐n cho ng╞░ß╗¥i ti├¬u d├╣ng nhß╗»ng giß║úi ph├íp gia dß╗Ñng th├┤ng minh v├á hiß╗çn ─æß║íi.','2024-11-27 12:27:54',NULL);
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `carts` (
  `cart_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `variant_id` int NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`),
  KEY `variant_id` (`variant_id`),
  CONSTRAINT `carts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `carts_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  CONSTRAINT `carts_ibfk_3` FOREIGN KEY (`variant_id`) REFERENCES `product_variants` (`variant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carts`
--

LOCK TABLES `carts` WRITE;
/*!40000 ALTER TABLE `carts` DISABLE KEYS */;
/*!40000 ALTER TABLE `carts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category` (
  `category_id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `status` enum('Hidden','Active') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (18,'Thiß║┐t bß╗ï l├ám lß║ính','Active','thiet_bi_lam_lanh.webp','Thiß║┐t bß╗ï l├ám lß║ính: C├íc thiß║┐t bß╗ï l├ám lß║ính nh╞░ tß╗º lß║ính, m├íy lß║ính v├á tß╗º ─æ├┤ng ─æ├│ng vai tr├▓ quan trß╗ìng trong viß╗çc bß║úo quß║ún thß╗▒c phß║⌐m, giß╗» cho ch├║ng lu├┤n t╞░╞íi ngon v├á an to├án. M├íy lß║ính gi├║p ─æiß╗üu chß╗ënh nhiß╗çt ─æß╗Ö trong kh├┤ng gian sß╗æng, mang lß║íi cß║úm gi├íc thoß║úi m├íi trong nhß╗»ng ng├áy n├│ng bß╗⌐c. C├íc thiß║┐t bß╗ï l├ám lß║ính c├▓n gi├║p giß║úm thiß╗âu l├úng ph├¡ thß╗▒c phß║⌐m v├á tiß║┐t kiß╗çm thß╗¥i gian nß║Ñu n╞░ß╗¢ng.','2024-11-27 12:32:09',NULL),(19,'Thiß║┐t bß╗ï nß║Ñu ─ân','Active','LHLR1010FW.jpg','Thiß║┐t bß╗ï nß║Ñu ─ân: C├íc thiß║┐t bß╗ï nß║Ñu ─ân nh╞░ bß║┐p tß╗½, bß║┐p gas, l├▓ vi s├│ng, nß╗ôi c╞ím ─æiß╗çn v├á l├▓ n╞░ß╗¢ng gi├║p tiß║┐t kiß╗çm thß╗¥i gian v├á c├┤ng sß╗⌐c trong viß╗çc chß║┐ biß║┐n m├│n ─ân. Nhß╗»ng thiß║┐t bß╗ï n├áy gi├║p tß║ío ra bß╗»a ─ân ngon miß╗çng, tiß║┐t kiß╗çm n─âng l╞░ß╗úng v├á giß╗» cho thß╗▒c phß║⌐m lu├┤n giß╗» ─æ╞░ß╗úc h╞░╞íng vß╗ï tß╗▒ nhi├¬n. Sß╗▒ tiß╗çn lß╗úi cß╗ºa c├íc thiß║┐t bß╗ï n├áy gi├║p c├íc gia ─æ├¼nh bß║¡n rß╗Ön dß╗à d├áng chuß║⌐n bß╗ï bß╗»a ─ân cho cß║ú gia ─æ├¼nh.\r\n\r\n','2024-11-27 12:32:38','2024-11-27 12:33:22'),(20,'Thiß║┐t bß╗ï giß║╖t gi┼⌐','Active','thiet_bi_giat_giu.jpg','Thiß║┐t bß╗ï giß║╖t gi┼⌐: M├íy giß║╖t v├á m├íy sß║Ñy quß║ºn ├ío gi├║p tiß║┐t kiß╗çm thß╗¥i gian v├á c├┤ng sß╗⌐c trong viß╗çc giß║╖t gi┼⌐ quß║ºn ├ío. C├íc thiß║┐t bß╗ï n├áy c├│ khß║ú n─âng giß║╖t sß║ích v├á bß║úo vß╗ç sß╗úi vß║úi, giß╗» cho quß║ºn ├ío lu├┤n bß╗ün ─æß║╣p. M├íy sß║Ñy gi├║p l├ám kh├┤ quß║ºn ├ío nhanh ch├│ng, ─æß║╖c biß╗çt trong thß╗¥i tiß║┐t ß║⌐m ╞░ß╗¢t, v├á gi├║p bß║ín kh├┤ng phß║úi ph╞íi ─æß╗ô ngo├ái trß╗¥i.','2024-11-27 12:34:15',NULL),(21,'Thiß║┐t bß╗ï l├ám sß║ích','Active','thiet_bi_lam_sach.jpg','Thiß║┐t bß╗ï l├ám sß║ích: M├íy h├║t bß╗Ñi, m├íy lau nh├á v├á robot h├║t bß╗Ñi gi├║p l├ám sß║ích bß╗Ñi bß║⌐n, r├íc thß║úi tr├¬n s├án nh├á v├á c├íc bß╗ü mß║╖t kh├íc. Thiß║┐t bß╗ï l├ám sß║ích gi├║p giß║úm thiß╗âu thß╗¥i gian d├ánh cho c├┤ng viß╗çc dß╗ìn dß║╣p, ─æß╗ông thß╗¥i duy tr├¼ m├┤i tr╞░ß╗¥ng sß╗æng sß║ích sß║╜, bß║úo vß╗ç sß╗⌐c khß╗Åe gia ─æ├¼nh. C├íc thiß║┐t bß╗ï n├áy rß║Ñt hß╗»u ├¡ch trong c├íc gia ─æ├¼nh c├│ trß║╗ nhß╗Å hoß║╖c th├║ c╞░ng.','2024-11-27 12:34:44',NULL),(22,'Thiß║┐t bß╗ï l├ám m├ít v├á s╞░ß╗ƒi ß║Ñm','Active','thiet_bi_lam_mat.jpg','Thiß║┐t bß╗ï l├ám m├ít v├á s╞░ß╗ƒi ß║Ñm: Quß║ít, ─æiß╗üu h├▓a kh├┤ng kh├¡ v├á m├íy s╞░ß╗ƒi gi├║p ─æiß╗üu chß╗ënh nhiß╗çt ─æß╗Ö trong kh├┤ng gian sß╗æng, tß║ío ra m├┤i tr╞░ß╗¥ng sß╗æng dß╗à chß╗ïu. Trong m├╣a h├¿, m├íy lß║ính v├á quß║ít gi├║p l├ám m├ít kh├┤ng kh├¡, trong khi m├íy s╞░ß╗ƒi gi├║p giß╗» ß║Ñm trong m├╣a ─æ├┤ng. Nhß╗»ng thiß║┐t bß╗ï n├áy gi├║p cß║úi thiß╗çn chß║Ñt l╞░ß╗úng cuß╗Öc sß╗æng v├á tß║ío sß╗▒ thoß║úi m├íi cho mß╗ìi ng╞░ß╗¥i trong gia ─æ├¼nh.','2024-11-27 12:35:14',NULL),(23,'Thiß║┐t bß╗ï gia dß╗Ñng nhß╗Å','Active','may-xay-sinh-to-philips-hr229141.jpg','Thiß║┐t bß╗ï gia dß╗Ñng nhß╗Å: C├íc thiß║┐t bß╗ï gia dß╗Ñng nhß╗Å nh╞░ m├íy pha c├á ph├¬, m├íy xay sinh tß╗æ, nß╗ôi chi├¬n kh├┤ng dß║ºu, v├á b├án ß╗ºi gi├║p n├óng cao sß╗▒ tiß╗çn lß╗úi trong sinh hoß║ít h├áng ng├áy. Ch├║ng kh├┤ng chß╗ë gi├║p tiß║┐t kiß╗çm thß╗¥i gian m├á c├▓n g├│p phß║ºn tß║ío ra nhß╗»ng bß╗»a ─ân ngon v├á tiß╗çn ├¡ch trong viß╗çc ch─âm s├│c gia ─æ├¼nh. C├íc thiß║┐t bß╗ï n├áy gi├║p cuß╗Öc sß╗æng trß╗ƒ n├¬n hiß╗çn ─æß║íi v├á dß╗à d├áng h╞ín.','2024-11-27 12:36:07',NULL),(24,'Thiß║┐t bß╗ï chiß║┐u s├íng','Active','OIP (1).jpg','Thiß║┐t bß╗ï chiß║┐u s├íng: ─É├¿n LED, ─æ├¿n huß╗│nh quang v├á c├íc loß║íi ─æ├¿n trang tr├¡ gi├║p cung cß║Ñp ├ính s├íng cho c├íc kh├┤ng gian sß╗æng, tß║ío n├¬n m├┤i tr╞░ß╗¥ng thoß║úi m├íi v├á dß╗à chß╗ïu. Thiß║┐t bß╗ï chiß║┐u s├íng c├▓n ─æ├│ng vai tr├▓ quan trß╗ìng trong viß╗çc tiß║┐t kiß╗çm n─âng l╞░ß╗úng, ─æß║╖c biß╗çt l├á vß╗¢i c├íc loß║íi ─æ├¿n LED, gi├║p giß║úm chi ph├¡ ─æiß╗çn n─âng v├á bß║úo vß╗ç m├┤i tr╞░ß╗¥ng.','2024-11-27 12:37:19',NULL),(25,'Thiß║┐t bß╗ï vß╗ç sinh c├íc nh├ón','Active','593_may_say_toc_panasonic_eh_nd11_w645_1000w_chinh_hang_org.jpg','Thiß║┐t bß╗ï vß╗ç sinh c├í nh├ón: C├íc thiß║┐t bß╗ï nh╞░ m├íy sß║Ñy t├│c, m├íy cß║ío r├óu, m├íy rß╗¡a mß║╖t v├á b├án chß║úi ─æiß╗çn gi├║p ch─âm s├│c sß╗⌐c khß╗Åe v├á l├ám ─æß║╣p c├í nh├ón. Nhß╗»ng thiß║┐t bß╗ï n├áy gi├║p tiß║┐t kiß╗çm thß╗¥i gian, n├óng cao chß║Ñt l╞░ß╗úng cuß╗Öc sß╗æng v├á bß║úo vß╗ç sß╗⌐c khß╗Åe. Ch├║ng hß╗ù trß╗ú duy tr├¼ th├│i quen vß╗ç sinh h├áng ng├áy, gi├║p bß║ín lu├┤n cß║úm thß║Ñy tß╗▒ tin v├á thoß║úi m├íi.ß║┐t','2024-11-27 12:38:21',NULL);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coupon`
--

DROP TABLE IF EXISTS `coupon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `coupon` (
  `coupon_id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `coupon_code` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `star_date` date NOT NULL,
  `end_date` date NOT NULL,
  `quantity` int NOT NULL,
  `status` enum('Hidden','Active') NOT NULL,
  `created_at` timestamp NOT NULL,
  `update_at` timestamp NOT NULL,
  PRIMARY KEY (`coupon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coupon`
--

LOCK TABLES `coupon` WRITE;
/*!40000 ALTER TABLE `coupon` DISABLE KEYS */;
/*!40000 ALTER TABLE `coupon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favorites`
--

DROP TABLE IF EXISTS `favorites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `favorites` (
  `farorite_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`farorite_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorites`
--

LOCK TABLES `favorites` WRITE;
/*!40000 ALTER TABLE `favorites` DISABLE KEYS */;
/*!40000 ALTER TABLE `favorites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `order_detail`
--

DROP TABLE IF EXISTS `order_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `order_detail` (
  `order_detail_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `variant_id` int NOT NULL,
  `amount` int NOT NULL,
  `note` text NOT NULL,
  `coupon_id` int NOT NULL,
  `shipping_id` int NOT NULL,
  `created_id` timestamp NULL DEFAULT NULL,
  `update_id` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_detail_id`),
  KEY `user_id` (`user_id`),
  KEY `product_id` (`product_id`),
  KEY `variant_id` (`variant_id`),
  KEY `shipping_id` (`shipping_id`),
  KEY `coupon_id` (`coupon_id`),
  CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  CONSTRAINT `order_detail_ibfk_3` FOREIGN KEY (`variant_id`) REFERENCES `product_variants` (`variant_id`),
  CONSTRAINT `order_detail_ibfk_4` FOREIGN KEY (`shipping_id`) REFERENCES `ships` (`shipping_id`),
  CONSTRAINT `order_detail_ibfk_5` FOREIGN KEY (`coupon_id`) REFERENCES `coupon` (`coupon_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order_detail`
--

LOCK TABLES `order_detail` WRITE;
/*!40000 ALTER TABLE `order_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `order_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `order_detail_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `total` float NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `order_detail_id` (`order_detail_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_detail_id`) REFERENCES `order_detail` (`order_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_galleries`
--

DROP TABLE IF EXISTS `product_galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_galleries` (
  `product_gallery_id` int NOT NULL AUTO_INCREMENT,
  `gallery_image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`product_gallery_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `product_galleries_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_galleries`
--

LOCK TABLES `product_galleries` WRITE;
/*!40000 ALTER TABLE `product_galleries` DISABLE KEYS */;
INSERT INTO `product_galleries` VALUES (10,'6748ae9146a22-593maysaytocpanasonicehnd11w6451000wchinhhangorg.jpg','2024-11-28 17:55:29',NULL,12),(11,'6748ae9146f8c-mayxaysinhtophilipshr229141.jpg','2024-11-28 17:55:29',NULL,12),(12,'6748ae9147475-LHLR1010FW.jpg','2024-11-28 17:55:29',NULL,12);
/*!40000 ALTER TABLE `product_galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_variants`
--

DROP TABLE IF EXISTS `product_variants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `product_variants` (
  `variant_id` int NOT NULL AUTO_INCREMENT,
  `variant_price` float NOT NULL,
  `variant_sale_price` float NOT NULL,
  `quantity` int NOT NULL,
  `product_id` int NOT NULL,
  `variant_color_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`variant_id`),
  KEY `product_id` (`product_id`),
  KEY `variant_color_id` (`variant_color_id`),
  CONSTRAINT `product_variants_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`),
  CONSTRAINT `product_variants_ibfk_2` FOREIGN KEY (`variant_color_id`) REFERENCES `variant_colors` (`variant_color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_variants`
--

LOCK TABLES `product_variants` WRITE;
/*!40000 ALTER TABLE `product_variants` DISABLE KEYS */;
INSERT INTO `product_variants` VALUES (12,199,165,100,12,1,'2024-11-28 17:55:29',NULL),(13,199,165,100,12,2,'2024-11-28 17:55:29',NULL);
/*!40000 ALTER TABLE `product_variants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `price` float NOT NULL,
  `sale_price` float NOT NULL,
  `slug` text NOT NULL,
  `description` text NOT NULL,
  `category_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `brand_id` int NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `category_id` (`category_id`),
  KEY `brand_id` (`brand_id`),
  CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  CONSTRAINT `products_ibfk_2` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (12,' M├íy sß║Ñy t├│c si├¬u hot','6748ae9145754-593maysaytocpanasonicehnd11w6451000wchinhhangorg.jpg',199,165,'may-say-toc-sieu-hot','sieu hot',23,'2024-11-28 17:55:29',NULL,10);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `roly_type` enum('ADMIN','USER') NOT NULL,
  `description` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ships`
--

DROP TABLE IF EXISTS `ships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ships` (
  `shipping_id` int NOT NULL AUTO_INCREMENT,
  `shipping_name` text NOT NULL,
  `shipping_price` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`shipping_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ships`
--

LOCK TABLES `ships` WRITE;
/*!40000 ALTER TABLE `ships` DISABLE KEYS */;
/*!40000 ALTER TABLE `ships` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `avatar` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `phone` int NOT NULL,
  `password` text NOT NULL,
  `role_id` int NOT NULL,
  `gender` enum('Man','Woman') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `variant_colors`
--

DROP TABLE IF EXISTS `variant_colors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `variant_colors` (
  `variant_color_id` int NOT NULL AUTO_INCREMENT,
  `color_name` text NOT NULL,
  `color_code` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`variant_color_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `variant_colors`
--

LOCK TABLES `variant_colors` WRITE;
/*!40000 ALTER TABLE `variant_colors` DISABLE KEYS */;
INSERT INTO `variant_colors` VALUES (1,'M├áu ─æen','#000000','2024-11-27 14:07:24',NULL),(2,'M├áu x├ím','#808080','2024-11-27 14:07:24',NULL),(3,'M├áu trß║»ng','#FFFFFF','2024-11-27 14:07:24',NULL);
/*!40000 ALTER TABLE `variant_colors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `variant_sizes`
--

DROP TABLE IF EXISTS `variant_sizes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `variant_sizes` (
  `variant_size_id` int NOT NULL,
  `size_name` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`variant_size_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `variant_sizes`
--

LOCK TABLES `variant_sizes` WRITE;
/*!40000 ALTER TABLE `variant_sizes` DISABLE KEYS */;
/*!40000 ALTER TABLE `variant_sizes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-11-29  1:45:40

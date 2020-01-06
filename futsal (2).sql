-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 07:05 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `futsal`
--

-- --------------------------------------------------------

--
-- Table structure for table `datalatih`
--

CREATE TABLE IF NOT EXISTS `datalatih` (
  `nama` varchar(50) NOT NULL,
  `tb` int(11) NOT NULL,
  `bb` int(11) NOT NULL,
  `ability` int(11) NOT NULL,
  `posisi` varchar(25) NOT NULL,
  `euclidien` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datalatih`
--

INSERT INTO `datalatih` (`nama`, `tb`, `bb`, `ability`, `posisi`, `euclidien`) VALUES
('I Made Wirawan', 177, 75, 49, 'Keeper', 42.77849927241488),
('M. Natshir', 182, 73, 54, 'Keeper', 38.781438859330635),
('Aji Saka', 180, 72, 56, 'Keeper', 36.124783736376884),
('Satria Tama', 176, 77, 51, 'Keeper', 41.24318125460256),
('Andritany A.', 178, 85, 57, 'Keeper', 39.408120990476064),
('Rizky D.', 173, 68, 50, 'Keeper', 40.22437072223753),
('R. Mokodompit', 188, 85, 57, 'Keeper', 42.579337712087536),
('Deny Marcel', 180, 76, 52, 'Keeper', 40.80441152620633),
('M. Ridho', 184, 75, 52, 'Keeper', 41.71330722922842),
('David Ariyanto', 188, 85, 52, 'Keeper', 46.561786907291264),
('V. Vujovic', 190, 81, 53, 'Back', 45),
('Henhen H.', 176, 77, 49, 'Back', 43.139309220245984),
('Obet Yulius', 169, 53, 49, 'Back', 42.731721238442994),
('Chairul Rivan', 181, 75, 47, 'Back', 45.4972526643093),
('Ismed Sofyan', 168, 62, 52, 'Back', 38.17066936798463),
('R. Hehanusa', 170, 70, 50, 'Back', 40.311288741492746),
('Hamka Hamzah', 182, 73, 53, 'Back', 39.71145930332956),
('S. Paulle', 187, 82, 52, 'Back', 44.96665431183423),
('Matheus', 190, 86, 54, 'Back', 46.22769732530488),
('K. Yamashita', 182, 84, 52, 'Back', 44.14748010928823),
('Ferbri Hariadi', 180, 70, 51, 'Tengah', 40.570925550201586),
('Atep', 168, 65, 54, 'Tengah', 36.05551275463989),
('H. Y. Choi', 179, 71, 54, 'Tengah', 37.589892258425),
('Agus Indra', 174, 68, 49, 'Tengah', 41.30375285612676),
('Sandi Sute', 170, 63, 50, 'Tengah', 40.049968789001575),
('R. Chand', 179, 68, 53, 'Tengah', 38.19685850956856),
('Asnawi M.', 166, 58, 50, 'Tengah', 40.80441152620633),
('w. Pluim', 190, 85, 56, 'Tengah', 44.22668877499196),
('Wahyudi Hamisi', 170, 65, 49, 'Tengah', 41),
('Ponaryo Astaman', 174, 70, 53, 'Tengah', 37.54996671103717),
('C. Cole', 191, 78, 55, 'Depan', 42.83689998120779),
('Angga Febryanto', 177, 71, 48, 'Depan', 43),
('A. Yusgiantoro', 172, 62, 48, 'Depan', 42.15447781671598),
('Kushedya Yudo', 173, 65, 47, 'Depan', 43.104524124504614),
('Bambang P.', 170, 68, 51, 'Depan', 39.11521443121589),
('Sutanto Tan', 179, 70, 50, 'Depan', 41.30375285612676),
('F. Sinaga', 172, 64, 51, 'Depan', 39.06404996924922),
('Reinaldo', 194, 85, 53, 'Depan', 48.425200051213004),
('S. Smeltz', 185, 80, 54, 'Depan', 41.78516483155236),
('Rifal Lastori', 160, 61, 49, 'Depan', 42.391036788453285);

-- --------------------------------------------------------

--
-- Table structure for table `datauji`
--

CREATE TABLE IF NOT EXISTS `datauji` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama1` varchar(40) NOT NULL,
  `tb1` int(11) NOT NULL,
  `bb1` int(11) NOT NULL,
  `ability1` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `datauji`
--

INSERT INTO `datauji` (`id`, `nama1`, `tb1`, `bb1`, `ability1`) VALUES
(1, '', 0, 0, 0),
(2, 'Angga Fantiya Hermawan', 210, 65, 90),
(3, 'Devi Cantik', 180, 65, 100),
(4, 'Ngetes', 10, 90, 20),
(5, 'Fantiya', 1001, 90, 20),
(6, 'Fantiya Hermawan', 200, 100, 45),
(7, 'Angga Fantiya Hermawan', 167, 59, 45),
(8, 'Irfan', 170, 65, 90);

--
-- Triggers `datauji`
--
DROP TRIGGER IF EXISTS `heuclidien`;
DELIMITER //
CREATE TRIGGER `heuclidien` AFTER INSERT ON `datauji`
 FOR EACH ROW BEGIN
UPDATE datalatih SET euclidien=sqrt(POW(tb-NEW.tb1,2)+POW(bb-NEW.bb1,2)+POW(ability-NEW.ability1,2));
END
//
DELIMITER ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

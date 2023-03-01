-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table db_enneagram.tb_jurusan
CREATE TABLE IF NOT EXISTS `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jurusan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_enneagram.tb_jurusan: ~7 rows (approximately)
/*!40000 ALTER TABLE `tb_jurusan` DISABLE KEYS */;
INSERT IGNORE INTO `tb_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
	(1, 'APAT'),
	(2, 'APHPI'),
	(3, 'MM'),
	(4, 'NKPI'),
	(5, 'TKJ'),
	(6, 'TKPI'),
	(7, 'TKR');
/*!40000 ALTER TABLE `tb_jurusan` ENABLE KEYS */;

-- Dumping structure for table db_enneagram.tb_kelas
CREATE TABLE IF NOT EXISTS `tb_kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_enneagram.tb_kelas: ~3 rows (approximately)
/*!40000 ALTER TABLE `tb_kelas` DISABLE KEYS */;
INSERT IGNORE INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
	(1, 'X'),
	(2, 'XI'),
	(3, 'XII');
/*!40000 ALTER TABLE `tb_kelas` ENABLE KEYS */;

-- Dumping structure for table db_enneagram.tb_kelasjurusan
CREATE TABLE IF NOT EXISTS `tb_kelasjurusan` (
  `id_kelasjurusan` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelas` int(11) DEFAULT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `nama_kelasjurusan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_kelasjurusan`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_enneagram.tb_kelasjurusan: ~24 rows (approximately)
/*!40000 ALTER TABLE `tb_kelasjurusan` DISABLE KEYS */;
INSERT IGNORE INTO `tb_kelasjurusan` (`id_kelasjurusan`, `id_kelas`, `id_jurusan`, `nama_kelasjurusan`) VALUES
	(1, 1, 1, 'X APAT'),
	(2, 2, 1, 'XI APAT'),
	(3, 3, 1, 'XII APAT'),
	(4, 1, 2, 'X APHPI'),
	(5, 2, 2, 'XI APHPI'),
	(6, 3, 2, 'XII APHPI'),
	(7, 1, 3, 'X MM'),
	(8, 2, 3, 'XI MM'),
	(9, 3, 3, 'XII MM'),
	(10, 1, 4, 'X NKPI'),
	(11, 2, 4, 'XI NKPI'),
	(12, 3, 4, 'XII NKPI'),
	(13, 1, 5, 'X TKJ 1'),
	(14, 2, 5, 'XI TKJ 1'),
	(15, 3, 5, 'XII TKJ 1'),
	(16, 1, 5, 'X TKJ 2'),
	(17, 2, 5, 'XI TKJ 2'),
	(18, 3, 5, 'XII TKJ 2'),
	(19, 1, 6, 'X TKPI'),
	(20, 2, 6, 'XI TKPI'),
	(21, 3, 6, 'XII TKPI'),
	(22, 1, 7, 'X TKR'),
	(23, 2, 7, 'XI TKR'),
	(24, 3, 7, 'XII TKR');
/*!40000 ALTER TABLE `tb_kelasjurusan` ENABLE KEYS */;

-- Dumping structure for table db_enneagram.tb_personality
CREATE TABLE IF NOT EXISTS `tb_personality` (
  `id_personality` int(11) NOT NULL AUTO_INCREMENT,
  `nama_personality` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_personality`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_enneagram.tb_personality: ~9 rows (approximately)
/*!40000 ALTER TABLE `tb_personality` DISABLE KEYS */;
INSERT IGNORE INTO `tb_personality` (`id_personality`, `nama_personality`) VALUES
	(1, 'Tipe Pembaharu (Reformer / Perfeksionis)'),
	(2, 'Tipe Penolong (Giver / Helper)'),
	(3, 'Tipe Motivator (Achiever/ Motivator/ Performer)'),
	(4, 'Tipe Individualis (Romantic / Artist/ Individualis'),
	(5, 'Tipe Pemikir (Observer / Thinker / Investigator)'),
	(6, 'Tipe Loyalis (Loyalist / Pessimist)'),
	(7, 'Tipe Antusias (Generalist / Optimist / Adventure)'),
	(8, 'Tipe Pemimpin (Challenger/ Leader / Boss/ Protecto'),
	(9, 'Tipe Pembawa Damai (Peacemaker / Mediator/ Accomod');
/*!40000 ALTER TABLE `tb_personality` ENABLE KEYS */;

-- Dumping structure for table db_enneagram.tb_siswa
CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `id_kelasjurusan` int(11) DEFAULT NULL,
  `nama_siswa` varchar(50) DEFAULT NULL,
  `no_absen` int(11) DEFAULT NULL,
  `id_personalitiy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table db_enneagram.tb_siswa: ~7 rows (approximately)
/*!40000 ALTER TABLE `tb_siswa` DISABLE KEYS */;
INSERT IGNORE INTO `tb_siswa` (`id_siswa`, `id_kelasjurusan`, `nama_siswa`, `no_absen`, `id_personalitiy`) VALUES
	(1, 8, 'Iqbal Maulana', 12, 8),
	(2, 1, 'Muhammad Iqbal Maulana', 16, 8),
	(3, 10, 'Muhammad Iqbal Maulana', 12, 8),
	(4, 11, 'Oke siap bosqu', 21, 8),
	(5, 12, 'Iqbal Maulana', 12, 8),
	(6, 8, 'Yoi ken', 12, 8),
	(7, 18, 'Mohamad Rizaldi Pratama', 26, 6),
	(8, 18, 'Muhammad Iqbal Maulana', 29, 8),
	(9, 11, 'oke oke', 27, 6);
/*!40000 ALTER TABLE `tb_siswa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

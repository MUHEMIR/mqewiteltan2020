CREATE TABLE IF NOT EXISTS `toy` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `datel` varchar(50) NOT NULL,
  `sto` varchar(20) NOT NULL,
  `tproman` varchar(255) NOT NULL,
  `nticket` varchar(255) NOT NULL,
  `tunderspec` varchar(255) NOT NULL,
  `klabor` varchar(255) NOT NULL,
  `rawal` varchar(255) NOT NULL,
  `rakhir` varchar(255) NOT NULL,
  `odpre` varchar(255) NOT NULL,
  `podpr` varchar(255) NOT NULL,
  `oms` varchar(255) NOT NULL,
  `ket` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`id`)
) 

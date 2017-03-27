-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2017 at 04:03 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_soctree`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categoria_tip`
--

CREATE TABLE `tbl_categoria_tip` (
  `cat_tip_id` int(11) NOT NULL,
  `cat_tip_nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comentaris`
--

CREATE TABLE `tbl_comentaris` (
  `com_id` int(11) NOT NULL,
  `tip_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `com_id_resposta` int(11) NOT NULL,
  `com_cos` int(11) NOT NULL,
  `com_data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ecochange`
--

CREATE TABLE `tbl_ecochange` (
  `eco_id` int(11) NOT NULL,
  `eco_nom_premi` varchar(30) NOT NULL,
  `eco_preu_tokens` int(10) NOT NULL,
  `eco_descripcio` text NOT NULL,
  `eco_foto` varchar(20) NOT NULL,
  `patr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `eve_id` int(11) NOT NULL,
  `eve_nom` varchar(50) NOT NULL,
  `eve_descripcio` text NOT NULL,
  `eve_tipus` enum('Esports','Gastronomic','3R','DIY','Solidari') NOT NULL,
  `eve_data` date NOT NULL,
  `eve_hora` time NOT NULL,
  `eve_localitzacio` varchar(50) NOT NULL,
  `usu_id` int(11) DEFAULT NULL,
  `eve_estat` enum('actiu','inactiu','finalitzat','') NOT NULL,
  `eve_min_part` int(11) NOT NULL,
  `eve_max_part` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`eve_id`, `eve_nom`, `eve_descripcio`, `eve_tipus`, `eve_data`, `eve_hora`, `eve_localitzacio`, `usu_id`, `eve_estat`, `eve_min_part`, `eve_max_part`) VALUES
(1, 'wdasdcas', 'sdadadas', 'Esports', '2017-03-28', '00:00:00', 'dafmafa', 1, 'actiu', 0, 0),
(2, 'hdolaa', 'mu bonico todo', '3R', '2017-03-21', '00:00:00', 'localitzacio', 2, 'actiu', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `foto_id` int(11) NOT NULL,
  `foto_nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_icona_marcador`
--

CREATE TABLE `tbl_icona_marcador` (
  `ico_id` int(11) NOT NULL,
  `ico_nom` varchar(20) NOT NULL,
  `tip_marc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_icona_marcador`
--

INSERT INTO `tbl_icona_marcador` (`ico_id`, `ico_nom`, `tip_marc_id`) VALUES
(2, 'basquet.png', 1),
(3, 'bitlles.png', 1),
(4, 'esports.png', 1),
(5, 'tenis.png', 1),
(6, 'futbol.png', 1),
(7, 'pingpong.png', 1),
(8, 'running.png', 1),
(9, 'rocodrom.png', 1),
(10, 'voley.png', 1),
(20, 'senderisme.png', 1),
(31, 'fuentes.png', 2),
(32, 'comerçJust.png', 3),
(33, 'ecobotiga.png', 3),
(34, 'mascotes.png', 4),
(35, 'parcGossos.png', 4),
(37, 'puntVerd.png', 5),
(38, 'plantes.png', 5),
(39, 'exercici.png', 6),
(40, 'peses.png', 6),
(41, 'parcnens.png', 6),
(42, 'parc.png', 6),
(43, 'skate.png', 6),
(44, 'bicicleta.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inter_blog`
--

CREATE TABLE `tbl_inter_blog` (
  `inter_blog_id` int(11) NOT NULL,
  `com_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `inter_blog_magrada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inter_event`
--

CREATE TABLE `tbl_inter_event` (
  `inter_eve_id` int(11) NOT NULL,
  `eve_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `inter_eve_magrada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inter_tip`
--

CREATE TABLE `tbl_inter_tip` (
  `inter_tip_id` int(11) NOT NULL,
  `tip_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `inter_tip_magrada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_marcador`
--

CREATE TABLE `tbl_marcador` (
  `marc_id` int(11) NOT NULL,
  `tip_marc_id` int(11) DEFAULT NULL,
  `marc_nom_lloc` varchar(40) NOT NULL,
  `marc_descripcio` text NOT NULL,
  `marc_foto` varchar(20) DEFAULT NULL,
  `marc_adreca` varchar(100) DEFAULT NULL,
  `marc_coordenadas` varchar(50) DEFAULT NULL,
  `ico_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_marcador`
--

INSERT INTO `tbl_marcador` (`marc_id`, `tip_marc_id`, `marc_nom_lloc`, `marc_descripcio`, `marc_foto`, `marc_adreca`, `marc_coordenadas`, `ico_id`, `usu_id`) VALUES
(21, NULL, 'ruta de senderisme a collserola', 'per aquesta zona es pot fer un bon senderisme', NULL, 'Ctra. de l''Església, 92, 08017 Barcelona, Spain ', NULL, 20, 1),
(22, NULL, 'parc de la ermita de bellvitge', 'es un bon parc per pasejar i anar amb bici', NULL, 'Av. Mare de Déu de Bellvitge, 1, 08907 L''Hospitalet de Llobregat, Barcelona ', NULL, 42, 1),
(23, NULL, 'zona riu llobregat bici', 'es una bona zona del riu llobregat per anar amb bici ', NULL, 'Parc agrari del Baix Llobregat, 08830 Sant Boi de Llobregat, Barcelona ', NULL, 44, 1),
(24, NULL, 'j23', 'cole ', NULL, NULL, '{"lat": 41.3517501, "lng": 2.1155787}', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_moneder`
--

CREATE TABLE `tbl_moneder` (
  `mon_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `mon_quantitat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_participants`
--

CREATE TABLE `tbl_participants` (
  `part_id` int(11) NOT NULL,
  `eve_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_participants`
--

INSERT INTO `tbl_participants` (`part_id`, `eve_id`, `usu_id`) VALUES
(1, 2, 2),
(2, 2, 1),
(3, 1, 1),
(4, 1, 2),
(5, 1, 2),
(6, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patrocinador`
--

CREATE TABLE `tbl_patrocinador` (
  `patr_id` int(11) NOT NULL,
  `patr_nom` varchar(50) NOT NULL,
  `patr_logo` varchar(20) NOT NULL,
  `patr_telf_contacte` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tip`
--

CREATE TABLE `tbl_tip` (
  `tip_id` int(11) NOT NULL,
  `cat_tip_id` int(11) NOT NULL,
  `tip_titol` varchar(50) NOT NULL,
  `tip_descripcio` varchar(100) NOT NULL,
  `tip_puntuacio` int(11) NOT NULL,
  `foto_id` int(11) DEFAULT NULL,
  `video_id` int(11) DEFAULT NULL,
  `usu_id` int(11) NOT NULL,
  `tip_data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tipus_marcador`
--

CREATE TABLE `tbl_tipus_marcador` (
  `tip_marc_id` int(11) NOT NULL,
  `tip_marc_tipus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tipus_marcador`
--

INSERT INTO `tbl_tipus_marcador` (`tip_marc_id`, `tip_marc_tipus`) VALUES
(1, 'Esportius'),
(2, 'Fonts'),
(3, 'Ecochange'),
(4, 'mascotes'),
(5, 'Punts verds'),
(6, 'Parcs');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usuari`
--

CREATE TABLE `tbl_usuari` (
  `usu_id` int(11) NOT NULL,
  `usu_nom` varchar(30) NOT NULL,
  `usu_cognom` varchar(30) NOT NULL,
  `usu_email` varchar(40) NOT NULL,
  `usu_password` varchar(500) NOT NULL,
  `usu_foto` varchar(20) NOT NULL,
  `usu_tipus` enum('admin','normal','','') NOT NULL DEFAULT 'normal',
  `usu_data_registre` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usuari`
--

INSERT INTO `tbl_usuari` (`usu_id`, `usu_nom`, `usu_cognom`, `usu_email`, `usu_password`, `usu_foto`, `usu_tipus`, `usu_data_registre`) VALUES
(1, 'marc', 'mpetit', 'mpetit@gmail.com', '12345', '', 'normal', '2017-03-15'),
(2, 'mike', 'gomez', 'miquelgomezv@gmail.com', '1234', '', 'normal', '2017-03-24');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_valoracio`
--

CREATE TABLE `tbl_valoracio` (
  `val_id` int(11) NOT NULL,
  `part_id` int(11) NOT NULL,
  `val_nota` int(11) NOT NULL,
  `val_comentari` varchar(100) NOT NULL,
  `val_recomenacio` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `video_id` int(11) NOT NULL,
  `video_nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_categoria_tip`
--
ALTER TABLE `tbl_categoria_tip`
  ADD PRIMARY KEY (`cat_tip_id`);

--
-- Indexes for table `tbl_comentaris`
--
ALTER TABLE `tbl_comentaris`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `FK_tip_comentaris` (`tip_id`),
  ADD KEY `FK_usu_comentaris` (`usu_id`),
  ADD KEY `FK_resposta_comentaris` (`com_id_resposta`);

--
-- Indexes for table `tbl_ecochange`
--
ALTER TABLE `tbl_ecochange`
  ADD PRIMARY KEY (`eco_id`),
  ADD KEY `FK_ecochange_patr` (`patr_id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`eve_id`),
  ADD KEY `FK_event_usuari` (`usu_id`);

--
-- Indexes for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`foto_id`);

--
-- Indexes for table `tbl_icona_marcador`
--
ALTER TABLE `tbl_icona_marcador`
  ADD PRIMARY KEY (`ico_id`),
  ADD KEY `FK_icono_marcador` (`tip_marc_id`);

--
-- Indexes for table `tbl_inter_blog`
--
ALTER TABLE `tbl_inter_blog`
  ADD PRIMARY KEY (`inter_blog_id`),
  ADD KEY `FK_interblog_com` (`com_id`),
  ADD KEY `FK_interblog_usu` (`usu_id`);

--
-- Indexes for table `tbl_inter_event`
--
ALTER TABLE `tbl_inter_event`
  ADD PRIMARY KEY (`inter_eve_id`),
  ADD KEY `FK_intereve_eve` (`eve_id`),
  ADD KEY `FK_intereve_usu` (`usu_id`);

--
-- Indexes for table `tbl_inter_tip`
--
ALTER TABLE `tbl_inter_tip`
  ADD PRIMARY KEY (`inter_tip_id`),
  ADD KEY `FK_intertip_tip` (`tip_id`),
  ADD KEY `FK_intertip_usu` (`usu_id`);

--
-- Indexes for table `tbl_marcador`
--
ALTER TABLE `tbl_marcador`
  ADD PRIMARY KEY (`marc_id`),
  ADD KEY `FK_marcador_usuari` (`usu_id`),
  ADD KEY `FK_tipus_marcador` (`tip_marc_id`);

--
-- Indexes for table `tbl_moneder`
--
ALTER TABLE `tbl_moneder`
  ADD PRIMARY KEY (`mon_id`),
  ADD KEY `FK_moneder_usuari` (`usu_id`);

--
-- Indexes for table `tbl_participants`
--
ALTER TABLE `tbl_participants`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `FK_event_part` (`eve_id`),
  ADD KEY `FK_usuari_part` (`usu_id`);

--
-- Indexes for table `tbl_patrocinador`
--
ALTER TABLE `tbl_patrocinador`
  ADD PRIMARY KEY (`patr_id`);

--
-- Indexes for table `tbl_tip`
--
ALTER TABLE `tbl_tip`
  ADD PRIMARY KEY (`tip_id`),
  ADD KEY `FK_cat_tip` (`cat_tip_id`),
  ADD KEY `FK_foto_tip` (`foto_id`),
  ADD KEY `FK_video_tip` (`video_id`),
  ADD KEY `FK_usuario_tip` (`usu_id`);

--
-- Indexes for table `tbl_tipus_marcador`
--
ALTER TABLE `tbl_tipus_marcador`
  ADD PRIMARY KEY (`tip_marc_id`);

--
-- Indexes for table `tbl_usuari`
--
ALTER TABLE `tbl_usuari`
  ADD PRIMARY KEY (`usu_id`);

--
-- Indexes for table `tbl_valoracio`
--
ALTER TABLE `tbl_valoracio`
  ADD PRIMARY KEY (`val_id`),
  ADD KEY `FK_part_val` (`part_id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_categoria_tip`
--
ALTER TABLE `tbl_categoria_tip`
  MODIFY `cat_tip_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_comentaris`
--
ALTER TABLE `tbl_comentaris`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_ecochange`
--
ALTER TABLE `tbl_ecochange`
  MODIFY `eco_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `eve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `foto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_icona_marcador`
--
ALTER TABLE `tbl_icona_marcador`
  MODIFY `ico_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tbl_inter_blog`
--
ALTER TABLE `tbl_inter_blog`
  MODIFY `inter_blog_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_inter_event`
--
ALTER TABLE `tbl_inter_event`
  MODIFY `inter_eve_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_inter_tip`
--
ALTER TABLE `tbl_inter_tip`
  MODIFY `inter_tip_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_marcador`
--
ALTER TABLE `tbl_marcador`
  MODIFY `marc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_moneder`
--
ALTER TABLE `tbl_moneder`
  MODIFY `mon_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_participants`
--
ALTER TABLE `tbl_participants`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_patrocinador`
--
ALTER TABLE `tbl_patrocinador`
  MODIFY `patr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tip`
--
ALTER TABLE `tbl_tip`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_tipus_marcador`
--
ALTER TABLE `tbl_tipus_marcador`
  MODIFY `tip_marc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_usuari`
--
ALTER TABLE `tbl_usuari`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_valoracio`
--
ALTER TABLE `tbl_valoracio`
  MODIFY `val_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_comentaris`
--
ALTER TABLE `tbl_comentaris`
  ADD CONSTRAINT `FK_resposta_comentaris` FOREIGN KEY (`com_id_resposta`) REFERENCES `tbl_comentaris` (`com_id`),
  ADD CONSTRAINT `FK_tip_comentaris` FOREIGN KEY (`tip_id`) REFERENCES `tbl_tip` (`tip_id`),
  ADD CONSTRAINT `FK_usu_comentaris` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`);

--
-- Constraints for table `tbl_ecochange`
--
ALTER TABLE `tbl_ecochange`
  ADD CONSTRAINT `FK_ecochange_patr` FOREIGN KEY (`patr_id`) REFERENCES `tbl_patrocinador` (`patr_id`);

--
-- Constraints for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD CONSTRAINT `FK_event_usuari` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`);

--
-- Constraints for table `tbl_icona_marcador`
--
ALTER TABLE `tbl_icona_marcador`
  ADD CONSTRAINT `FK_icono_marcador` FOREIGN KEY (`tip_marc_id`) REFERENCES `tbl_tipus_marcador` (`tip_marc_id`);

--
-- Constraints for table `tbl_inter_blog`
--
ALTER TABLE `tbl_inter_blog`
  ADD CONSTRAINT `FK_interblog_com` FOREIGN KEY (`com_id`) REFERENCES `tbl_comentaris` (`com_id`),
  ADD CONSTRAINT `FK_interblog_usu` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`);

--
-- Constraints for table `tbl_inter_event`
--
ALTER TABLE `tbl_inter_event`
  ADD CONSTRAINT `FK_intereve_eve` FOREIGN KEY (`eve_id`) REFERENCES `tbl_events` (`eve_id`),
  ADD CONSTRAINT `FK_intereve_usu` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`);

--
-- Constraints for table `tbl_inter_tip`
--
ALTER TABLE `tbl_inter_tip`
  ADD CONSTRAINT `FK_intertip_tip` FOREIGN KEY (`tip_id`) REFERENCES `tbl_tip` (`tip_id`),
  ADD CONSTRAINT `FK_intertip_usu` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`);

--
-- Constraints for table `tbl_marcador`
--
ALTER TABLE `tbl_marcador`
  ADD CONSTRAINT `FK_marcador_usuari` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`),
  ADD CONSTRAINT `FK_tipus_marcador` FOREIGN KEY (`tip_marc_id`) REFERENCES `tbl_tipus_marcador` (`tip_marc_id`);

--
-- Constraints for table `tbl_moneder`
--
ALTER TABLE `tbl_moneder`
  ADD CONSTRAINT `FK_moneder_usuari` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`);

--
-- Constraints for table `tbl_participants`
--
ALTER TABLE `tbl_participants`
  ADD CONSTRAINT `FK_event_part` FOREIGN KEY (`eve_id`) REFERENCES `tbl_events` (`eve_id`),
  ADD CONSTRAINT `FK_usuari_part` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`);

--
-- Constraints for table `tbl_tip`
--
ALTER TABLE `tbl_tip`
  ADD CONSTRAINT `FK_cat_tip` FOREIGN KEY (`cat_tip_id`) REFERENCES `tbl_categoria_tip` (`cat_tip_id`),
  ADD CONSTRAINT `FK_foto_tip` FOREIGN KEY (`foto_id`) REFERENCES `tbl_foto` (`foto_id`),
  ADD CONSTRAINT `FK_usuario_tip` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`),
  ADD CONSTRAINT `FK_video_tip` FOREIGN KEY (`video_id`) REFERENCES `tbl_video` (`video_id`);

--
-- Constraints for table `tbl_valoracio`
--
ALTER TABLE `tbl_valoracio`
  ADD CONSTRAINT `FK_part_val` FOREIGN KEY (`part_id`) REFERENCES `tbl_participants` (`part_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

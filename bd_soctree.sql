-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-03-2017 a las 17:05:42
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_soctree`
--
CREATE DATABASE IF NOT EXISTS `bd_soctree` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_soctree`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria_tip`
--

CREATE TABLE `tbl_categoria_tip` (
  `cat_tip_id` int(11) NOT NULL,
  `cat_tip_nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_comentaris`
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
-- Estructura de tabla para la tabla `tbl_ecochange`
--

CREATE TABLE `tbl_ecochange` (
  `eco_id` int(11) NOT NULL,
  `eco_nom_premi` varchar(30) NOT NULL,
  `eco_preu_tokens` int(10) NOT NULL,
  `eco_descripcio` text NOT NULL,
  `eco_foto` varchar(20) NOT NULL,
  `patr_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_ecochange`
--

INSERT INTO `tbl_ecochange` (`eco_id`, `eco_nom_premi`, `eco_preu_tokens`, `eco_descripcio`, `eco_foto`, `patr_id`) VALUES
(1, 'Descuento del 20%', 1000, 'Vale descuento del 20% en nuestros productos válido hasta el 20 de Mayo del 2017.', 'foto', 1),
(2, 'Curso Arcadia de Papel', 2500, 'Aprende y descubre con el mini curso dibujo, pintura y manualidades con la famosa artista Esther Rovira. Con la entrega del cupón accederás al curso.', 'foto', 6),
(3, 'Descuento 10%', 1000, 'Descuento del 10% en nuestros productos en supermercados como el Corte Inglés y Mercadona', 'foto', 5),
(4, 'Aula de Trabajo', 7000, 'Aula en perfecto estado para trabajos en grupo o individual, con ambiente confortable. ', 'foto', 4),
(5, 'Plantar un arbre', 500, 'Planta un Arbre per ajudar al medi ambient amb Ecosia y SocTree', 'foto', 7),
(6, '2x1 Entrades', 3000, '2x1 en les entrades del museu MNAC.', 'foto', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_events`
--

CREATE TABLE `tbl_events` (
  `eve_id` int(11) NOT NULL,
  `eve_nom` varchar(50) NOT NULL,
  `eve_descripcio` text NOT NULL,
  `eve_tipus` enum('Esports','Gastronomic','3R','DIY','Solidari') NOT NULL,
  `eve_data` datetime NOT NULL,
  `eve_localitzacio` varchar(50) NOT NULL,
  `usu_id` int(11) DEFAULT NULL,
  `eve_estat` enum('actiu','inactiu','finalitzat','') NOT NULL,
  `eve_min_part` int(11) NOT NULL,
  `eve_max_part` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_events`
--

INSERT INTO `tbl_events` (`eve_id`, `eve_nom`, `eve_descripcio`, `eve_tipus`, `eve_data`, `eve_localitzacio`, `usu_id`, `eve_estat`, `eve_min_part`, `eve_max_part`) VALUES
(1, '', '', '', '2017-03-28 00:00:00', '', NULL, '', 0, 0),
(2, 'Classe de ioga', 'classe de ioga amb el gran mestre Miquel Gómez, aprèn a relaxar-te i descobreix un nou món. Domina l''art fenshui de les mans combinats amb el massatge tailandès.', 'Esports', '2017-04-03 15:00:00', 'Av. Mare de Deu de Bellvitge 184, 08907', 7, 'actiu', 2, 5),
(3, 'Cocina Peruana', 'Aprende a cocinar comida de Perú. Ricos tallarines saltados, ceviche, causa rellena, papa a la Huancaina. Ven y disfruta de un trato agradable y del buen ambiente.', 'Gastronomic', '2017-04-12 09:00:00', 'Carrer Provença 12, Hospitalet de Llobregat', 8, 'actiu', 2, 10),
(4, 'Fira de Webs', 'Benvingut a la segona Fira de webs de la institució educativa JOAN XXIII. \r\nOn els alumnes de DAW2 mostraran les seves pàgines web que han realizat aquests dies.', 'Solidari', '2017-04-05 10:00:00', 'Av. Mare de Deu de Bellvitge 100-110', 10, 'actiu', 0, 100),
(5, 'Cosplay casero', 'Hola otakus!! En este evento aprenderemos a hacer nuestros propios cosplays para el saló del manga que está cerca :D', 'DIY', '2017-05-24 17:00:00', 'Av. Mare de Deu de Bellvitge 184', 9, 'actiu', 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `foto_id` int(11) NOT NULL,
  `foto_nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_icona_marcador`
--

CREATE TABLE `tbl_icona_marcador` (
  `ico_id` int(11) NOT NULL,
  `ico_nom` varchar(20) NOT NULL,
  `tip_marc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_icona_marcador`
--

INSERT INTO `tbl_icona_marcador` (`ico_id`, `ico_nom`, `tip_marc_id`) VALUES
(45, 'Basquet.png', 1),
(46, 'Bitlles.png', 1),
(47, 'Esports.png', 1),
(48, 'Tenis.png', 1),
(49, 'Futbol.png', 1),
(50, 'Ping Pong.png', 1),
(51, 'Running.png', 1),
(52, 'Rocodrom.png', 1),
(53, 'Voley.png', 1),
(54, 'Senderisme.png', 1),
(55, 'Fonts.png', 2),
(56, 'Comerç Just.png', 3),
(57, 'Eco-botiga.png', 3),
(58, 'Mascotes.png', 4),
(59, 'Parc de Gossos.png', 4),
(60, 'Punt Verd.png', 5),
(61, 'Plantes.png', 5),
(62, 'Exercici.png', 6),
(63, 'Parc exercici.png', 6),
(64, 'Parc Infantil.png', 6),
(65, 'Skate.png', 6),
(66, 'Bicicleta.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inter_blog`
--

CREATE TABLE `tbl_inter_blog` (
  `inter_blog_id` int(11) NOT NULL,
  `com_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `inter_blog_magrada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inter_event`
--

CREATE TABLE `tbl_inter_event` (
  `inter_eve_id` int(11) NOT NULL,
  `eve_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `inter_eve_magrada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inter_tip`
--

CREATE TABLE `tbl_inter_tip` (
  `inter_tip_id` int(11) NOT NULL,
  `tip_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `inter_tip_magrada` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_marcador`
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
-- Volcado de datos para la tabla `tbl_marcador`
--

INSERT INTO `tbl_marcador` (`marc_id`, `tip_marc_id`, `marc_nom_lloc`, `marc_descripcio`, `marc_foto`, `marc_adreca`, `marc_coordenadas`, `ico_id`, `usu_id`) VALUES
(21, NULL, 'ruta de senderisme a collserola', 'per aquesta zona es pot fer un bon senderisme', NULL, 'Ctra. de l''Església, 92, 08017 Barcelona, Spain ', NULL, 54, 1),
(22, NULL, 'parc de la ermita de bellvitge', 'es un bon parc per pasejar i anar amb bici', NULL, 'Av. Mare de Déu de Bellvitge, 1, 08907 L''Hospitalet de Llobregat, Barcelona ', NULL, 63, 1),
(23, NULL, 'zona riu llobregat bici', 'es una bona zona del riu llobregat per anar amb bici ', NULL, 'Parc agrari del Baix Llobregat, 08830 Sant Boi de Llobregat, Barcelona ', NULL, 66, 1),
(24, NULL, 'j23', 'cole ', NULL, NULL, '{"lat": 41.3517501, "lng": 2.1155787}', 59, 1),
(25, NULL, 'fbhadgh', 'afbgadf', NULL, NULL, '{"lat": 41.3517501, "lng": 2.1155787}', 0, 1),
(26, NULL, 'Parc de Can Xic, viladecans', 'el parc de la biblioteca de viladecans', NULL, 'Carrer de Jaume Abril, 79, 08840 Viladecans, Barcelona, Spain ', NULL, 63, 1),
(27, NULL, 'Parc de la Torre-roja', 'parc de la torre roja viladecans', NULL, 'Lloc Torre Roja, 201B, 08840 Viladecans, Barcelona, Spain ', NULL, 64, 1),
(29, NULL, 'sadfg', 'sadfgh', NULL, NULL, '{"lat": 41.3517501, "lng": 2.1155787}', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_moneder`
--

CREATE TABLE `tbl_moneder` (
  `mon_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `mon_quantitat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_moneder`
--

INSERT INTO `tbl_moneder` (`mon_id`, `usu_id`, `mon_quantitat`) VALUES
(1, 7, 2000),
(2, 8, 0),
(3, 9, 0),
(4, 10, 0),
(5, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_participants`
--

CREATE TABLE `tbl_participants` (
  `part_id` int(11) NOT NULL,
  `eve_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_participants`
--

INSERT INTO `tbl_participants` (`part_id`, `eve_id`, `usu_id`) VALUES
(1, 4, 7),
(2, 3, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_patrocinador`
--

CREATE TABLE `tbl_patrocinador` (
  `patr_id` int(11) NOT NULL,
  `patr_nom` varchar(50) NOT NULL,
  `patr_logo` varchar(100) NOT NULL,
  `patr_telf_contacte` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_patrocinador`
--

INSERT INTO `tbl_patrocinador` (`patr_id`, `patr_nom`, `patr_logo`, `patr_telf_contacte`) VALUES
(1, 'Aquabona', 'logo-aquabona.png', 685978623),
(2, 'Jesüites Educació', 'logo-jesuites.png', 933351543),
(3, 'Ayuntamiento de Barcelona', 'logo-ayun.png', 645217893),
(4, 'CETEI', 'logo-cetei.png', 987456123),
(5, 'Fanta', 'logo-fanta.png', 621534987),
(6, 'Arcadia de Papel', 'logo-arcadiadepapel.png', 697427442),
(7, 'Ecosia', 'logo-ecosia.png', 123456789);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tip`
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
-- Estructura de tabla para la tabla `tbl_tipus_marcador`
--

CREATE TABLE `tbl_tipus_marcador` (
  `tip_marc_id` int(11) NOT NULL,
  `tip_marc_tipus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_tipus_marcador`
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
-- Estructura de tabla para la tabla `tbl_usuari`
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
-- Volcado de datos para la tabla `tbl_usuari`
--

INSERT INTO `tbl_usuari` (`usu_id`, `usu_nom`, `usu_cognom`, `usu_email`, `usu_password`, `usu_foto`, `usu_tipus`, `usu_data_registre`) VALUES
(1, 'marc', 'mpetit', 'mpetit@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '', 'normal', '2017-03-15'),
(7, 'Miquel', 'Gómez', 'mgomez@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '0.jpg', 'normal', '2017-03-29'),
(8, 'Edhu', 'chacaliaza', 'echacaliaza@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '0.jpg', 'normal', '2017-03-29'),
(9, 'Eric', 'Petit', 'epetit@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '0.jpg', 'normal', '2017-03-29'),
(10, 'Esther', 'Rovira', 'erovira@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '0.jpg', 'normal', '2017-03-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_valoracio`
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
-- Estructura de tabla para la tabla `tbl_video`
--

CREATE TABLE `tbl_video` (
  `video_id` int(11) NOT NULL,
  `video_nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categoria_tip`
--
ALTER TABLE `tbl_categoria_tip`
  ADD PRIMARY KEY (`cat_tip_id`);

--
-- Indices de la tabla `tbl_comentaris`
--
ALTER TABLE `tbl_comentaris`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `FK_tip_comentaris` (`tip_id`),
  ADD KEY `FK_usu_comentaris` (`usu_id`),
  ADD KEY `FK_resposta_comentaris` (`com_id_resposta`);

--
-- Indices de la tabla `tbl_ecochange`
--
ALTER TABLE `tbl_ecochange`
  ADD PRIMARY KEY (`eco_id`),
  ADD KEY `FK_ecochange_patr` (`patr_id`);

--
-- Indices de la tabla `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`eve_id`),
  ADD KEY `FK_event_usuari` (`usu_id`);

--
-- Indices de la tabla `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`foto_id`);

--
-- Indices de la tabla `tbl_icona_marcador`
--
ALTER TABLE `tbl_icona_marcador`
  ADD PRIMARY KEY (`ico_id`),
  ADD KEY `FK_icono_marcador` (`tip_marc_id`);

--
-- Indices de la tabla `tbl_inter_blog`
--
ALTER TABLE `tbl_inter_blog`
  ADD PRIMARY KEY (`inter_blog_id`),
  ADD KEY `FK_interblog_com` (`com_id`),
  ADD KEY `FK_interblog_usu` (`usu_id`);

--
-- Indices de la tabla `tbl_inter_event`
--
ALTER TABLE `tbl_inter_event`
  ADD PRIMARY KEY (`inter_eve_id`),
  ADD KEY `FK_intereve_eve` (`eve_id`),
  ADD KEY `FK_intereve_usu` (`usu_id`);

--
-- Indices de la tabla `tbl_inter_tip`
--
ALTER TABLE `tbl_inter_tip`
  ADD PRIMARY KEY (`inter_tip_id`),
  ADD KEY `FK_intertip_tip` (`tip_id`),
  ADD KEY `FK_intertip_usu` (`usu_id`);

--
-- Indices de la tabla `tbl_marcador`
--
ALTER TABLE `tbl_marcador`
  ADD PRIMARY KEY (`marc_id`),
  ADD KEY `FK_marcador_usuari` (`usu_id`),
  ADD KEY `FK_tipus_marcador` (`tip_marc_id`);

--
-- Indices de la tabla `tbl_moneder`
--
ALTER TABLE `tbl_moneder`
  ADD PRIMARY KEY (`mon_id`),
  ADD KEY `FK_moneder_usuari` (`usu_id`);

--
-- Indices de la tabla `tbl_participants`
--
ALTER TABLE `tbl_participants`
  ADD PRIMARY KEY (`part_id`),
  ADD KEY `FK_event_part` (`eve_id`),
  ADD KEY `FK_usuari_part` (`usu_id`);

--
-- Indices de la tabla `tbl_patrocinador`
--
ALTER TABLE `tbl_patrocinador`
  ADD PRIMARY KEY (`patr_id`);

--
-- Indices de la tabla `tbl_tip`
--
ALTER TABLE `tbl_tip`
  ADD PRIMARY KEY (`tip_id`),
  ADD KEY `FK_cat_tip` (`cat_tip_id`),
  ADD KEY `FK_foto_tip` (`foto_id`),
  ADD KEY `FK_video_tip` (`video_id`),
  ADD KEY `FK_usuario_tip` (`usu_id`);

--
-- Indices de la tabla `tbl_tipus_marcador`
--
ALTER TABLE `tbl_tipus_marcador`
  ADD PRIMARY KEY (`tip_marc_id`);

--
-- Indices de la tabla `tbl_usuari`
--
ALTER TABLE `tbl_usuari`
  ADD PRIMARY KEY (`usu_id`);

--
-- Indices de la tabla `tbl_valoracio`
--
ALTER TABLE `tbl_valoracio`
  ADD PRIMARY KEY (`val_id`),
  ADD KEY `FK_part_val` (`part_id`);

--
-- Indices de la tabla `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_categoria_tip`
--
ALTER TABLE `tbl_categoria_tip`
  MODIFY `cat_tip_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_comentaris`
--
ALTER TABLE `tbl_comentaris`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_ecochange`
--
ALTER TABLE `tbl_ecochange`
  MODIFY `eco_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `eve_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `foto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_icona_marcador`
--
ALTER TABLE `tbl_icona_marcador`
  MODIFY `ico_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT de la tabla `tbl_inter_blog`
--
ALTER TABLE `tbl_inter_blog`
  MODIFY `inter_blog_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_inter_event`
--
ALTER TABLE `tbl_inter_event`
  MODIFY `inter_eve_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_inter_tip`
--
ALTER TABLE `tbl_inter_tip`
  MODIFY `inter_tip_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_marcador`
--
ALTER TABLE `tbl_marcador`
  MODIFY `marc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `tbl_moneder`
--
ALTER TABLE `tbl_moneder`
  MODIFY `mon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_participants`
--
ALTER TABLE `tbl_participants`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_patrocinador`
--
ALTER TABLE `tbl_patrocinador`
  MODIFY `patr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tbl_tip`
--
ALTER TABLE `tbl_tip`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tipus_marcador`
--
ALTER TABLE `tbl_tipus_marcador`
  MODIFY `tip_marc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `tbl_usuari`
--
ALTER TABLE `tbl_usuari`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbl_valoracio`
--
ALTER TABLE `tbl_valoracio`
  MODIFY `val_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_comentaris`
--
ALTER TABLE `tbl_comentaris`
  ADD CONSTRAINT `FK_resposta_comentaris` FOREIGN KEY (`com_id_resposta`) REFERENCES `tbl_comentaris` (`com_id`),
  ADD CONSTRAINT `FK_tip_comentaris` FOREIGN KEY (`tip_id`) REFERENCES `tbl_tip` (`tip_id`),
  ADD CONSTRAINT `FK_usu_comentaris` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`);

--
-- Filtros para la tabla `tbl_ecochange`
--
ALTER TABLE `tbl_ecochange`
  ADD CONSTRAINT `FK_ecochange_patr` FOREIGN KEY (`patr_id`) REFERENCES `tbl_patrocinador` (`patr_id`);

--
-- Filtros para la tabla `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD CONSTRAINT `FK_event_usuari` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`);

--
-- Filtros para la tabla `tbl_icona_marcador`
--
ALTER TABLE `tbl_icona_marcador`
  ADD CONSTRAINT `FK_icono_marcador` FOREIGN KEY (`tip_marc_id`) REFERENCES `tbl_tipus_marcador` (`tip_marc_id`);

--
-- Filtros para la tabla `tbl_inter_blog`
--
ALTER TABLE `tbl_inter_blog`
  ADD CONSTRAINT `FK_interblog_com` FOREIGN KEY (`com_id`) REFERENCES `tbl_comentaris` (`com_id`),
  ADD CONSTRAINT `FK_interblog_usu` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`);

--
-- Filtros para la tabla `tbl_inter_event`
--
ALTER TABLE `tbl_inter_event`
  ADD CONSTRAINT `FK_intereve_eve` FOREIGN KEY (`eve_id`) REFERENCES `tbl_events` (`eve_id`),
  ADD CONSTRAINT `FK_intereve_usu` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`);

--
-- Filtros para la tabla `tbl_inter_tip`
--
ALTER TABLE `tbl_inter_tip`
  ADD CONSTRAINT `FK_intertip_tip` FOREIGN KEY (`tip_id`) REFERENCES `tbl_tip` (`tip_id`),
  ADD CONSTRAINT `FK_intertip_usu` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`);

--
-- Filtros para la tabla `tbl_marcador`
--
ALTER TABLE `tbl_marcador`
  ADD CONSTRAINT `FK_marcador_usuari` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`),
  ADD CONSTRAINT `FK_tipus_marcador` FOREIGN KEY (`tip_marc_id`) REFERENCES `tbl_tipus_marcador` (`tip_marc_id`);

--
-- Filtros para la tabla `tbl_moneder`
--
ALTER TABLE `tbl_moneder`
  ADD CONSTRAINT `FK_moneder_usuari` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`);

--
-- Filtros para la tabla `tbl_participants`
--
ALTER TABLE `tbl_participants`
  ADD CONSTRAINT `FK_event_part` FOREIGN KEY (`eve_id`) REFERENCES `tbl_events` (`eve_id`),
  ADD CONSTRAINT `FK_usuari_part` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`);

--
-- Filtros para la tabla `tbl_tip`
--
ALTER TABLE `tbl_tip`
  ADD CONSTRAINT `FK_cat_tip` FOREIGN KEY (`cat_tip_id`) REFERENCES `tbl_categoria_tip` (`cat_tip_id`),
  ADD CONSTRAINT `FK_foto_tip` FOREIGN KEY (`foto_id`) REFERENCES `tbl_foto` (`foto_id`),
  ADD CONSTRAINT `FK_usuario_tip` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuari` (`usu_id`),
  ADD CONSTRAINT `FK_video_tip` FOREIGN KEY (`video_id`) REFERENCES `tbl_video` (`video_id`);

--
-- Filtros para la tabla `tbl_valoracio`
--
ALTER TABLE `tbl_valoracio`
  ADD CONSTRAINT `FK_part_val` FOREIGN KEY (`part_id`) REFERENCES `tbl_participants` (`part_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

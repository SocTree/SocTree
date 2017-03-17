-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2017 a las 18:41:00
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_soctree`
--

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_events`
--

CREATE TABLE `tbl_events` (
  `eve_id` int(11) NOT NULL,
  `eve_nom` varchar(50) NOT NULL,
  `eve_descripcio` text NOT NULL,
  `eve_tipus` varchar(20) NOT NULL,
  `eve_data` date NOT NULL,
  `eve_localitzacio` varchar(50) NOT NULL,
  `usu_id` int(11) DEFAULT NULL,
  `eve_estat` enum('actiu','inactiu','finalitzat','') NOT NULL,
  `eve_min_part` int(11) NOT NULL,
  `eve_max_part` int(11) NOT NULL,
  `eve_actual_part` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `tip_marc_id` int(11) NOT NULL,
  `marc_nom_lloc` varchar(40) NOT NULL,
  `marc_descripcio` text NOT NULL,
  `marc_foto` varchar(20) NOT NULL,
  `marc_adreca` varchar(100) NOT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_moneder`
--

CREATE TABLE `tbl_moneder` (
  `mon_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  `mon_quantitat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_participants`
--

CREATE TABLE `tbl_participants` (
  `part_id` int(11) NOT NULL,
  `eve_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_patrocinador`
--

CREATE TABLE `tbl_patrocinador` (
  `patr_id` int(11) NOT NULL,
  `patr_nom` varchar(50) NOT NULL,
  `patr_logo` varchar(20) NOT NULL,
  `patr_telf_contacte` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`com_id`);

--
-- Indices de la tabla `tbl_ecochange`
--
ALTER TABLE `tbl_ecochange`
  ADD PRIMARY KEY (`eco_id`);

--
-- Indices de la tabla `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`eve_id`);

--
-- Indices de la tabla `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`foto_id`);

--
-- Indices de la tabla `tbl_icona_marcador`
--
ALTER TABLE `tbl_icona_marcador`
  ADD PRIMARY KEY (`ico_id`);

--
-- Indices de la tabla `tbl_inter_blog`
--
ALTER TABLE `tbl_inter_blog`
  ADD PRIMARY KEY (`inter_blog_id`);

--
-- Indices de la tabla `tbl_inter_event`
--
ALTER TABLE `tbl_inter_event`
  ADD PRIMARY KEY (`inter_eve_id`);

--
-- Indices de la tabla `tbl_inter_tip`
--
ALTER TABLE `tbl_inter_tip`
  ADD PRIMARY KEY (`inter_tip_id`);

--
-- Indices de la tabla `tbl_marcador`
--
ALTER TABLE `tbl_marcador`
  ADD PRIMARY KEY (`marc_id`);

--
-- Indices de la tabla `tbl_moneder`
--
ALTER TABLE `tbl_moneder`
  ADD PRIMARY KEY (`mon_id`);

--
-- Indices de la tabla `tbl_participants`
--
ALTER TABLE `tbl_participants`
  ADD PRIMARY KEY (`part_id`);

--
-- Indices de la tabla `tbl_patrocinador`
--
ALTER TABLE `tbl_patrocinador`
  ADD PRIMARY KEY (`patr_id`);

--
-- Indices de la tabla `tbl_tip`
--
ALTER TABLE `tbl_tip`
  ADD PRIMARY KEY (`tip_id`);

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
  ADD PRIMARY KEY (`val_id`);

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
  MODIFY `eco_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `eve_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `foto_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_icona_marcador`
--
ALTER TABLE `tbl_icona_marcador`
  MODIFY `ico_id` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `marc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_moneder`
--
ALTER TABLE `tbl_moneder`
  MODIFY `mon_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_participants`
--
ALTER TABLE `tbl_participants`
  MODIFY `part_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_patrocinador`
--
ALTER TABLE `tbl_patrocinador`
  MODIFY `patr_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tip`
--
ALTER TABLE `tbl_tip`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_tipus_marcador`
--
ALTER TABLE `tbl_tipus_marcador`
  MODIFY `tip_marc_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_usuari`
--
ALTER TABLE `tbl_usuari`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-01-2017 a las 07:38:07
-- Versión del servidor: 5.7.12-log
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoget2know`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcalificacion`
--

CREATE TABLE `tblcalificacion` (
  `idcontent` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `Calificacion` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Para poder calificar los contenidos ingresados';

--
-- Volcado de datos para la tabla `tblcalificacion`
--

INSERT INTO `tblcalificacion` (`idcontent`, `idusuario`, `idPregunta`, `Calificacion`) VALUES
(1, 1, 1, 2),
(1, 1, 2, 3),
(1, 1, 3, 5),
(3, 1, 1, 4),
(3, 1, 2, 5),
(3, 2, 1, 5),
(3, 2, 2, 3),
(3, 6, 1, 4),
(3, 10, 2, 5),
(4, 5, 3, 5),
(4, 5, 4, 5),
(4, 6, 3, 4),
(4, 6, 4, 3),
(5, 5, 5, 4),
(5, 6, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcategoria`
--

CREATE TABLE `tblcategoria` (
  `idCategoria` int(11) NOT NULL,
  `NomCategoria` varchar(15) NOT NULL,
  `Esmusica` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblcategoria`
--

INSERT INTO `tblcategoria` (`idCategoria`, `NomCategoria`, `Esmusica`) VALUES
(11, 'lol2', b'0'),
(12, 'Prueba2', b'0'),
(13, 'lol', b'0'),
(14, 'PruebaErrof For', b'0'),
(15, 'Arte Abstracto', b'0'),
(17, 'Fotografias', b'0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcomentario`
--

CREATE TABLE `tblcomentario` (
  `idcontent` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `Comentario` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblcomentario`
--

INSERT INTO `tblcomentario` (`idcontent`, `idusuario`, `idPregunta`, `Comentario`) VALUES
(1, 1, 2, 'second!.'),
(1, 2, 1, 'putol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcontenido`
--

CREATE TABLE `tblcontenido` (
  `idcontent` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `nombreCont` varchar(150) NOT NULL,
  `fechaCont` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fechaCambio` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `descripCont` varchar(200) NOT NULL,
  `Calificación` float NOT NULL DEFAULT '0',
  `Cont` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Esta echa para el contenido del proyecto';

--
-- Volcado de datos para la tabla `tblcontenido`
--

INSERT INTO `tblcontenido` (`idcontent`, `idusuario`, `idcategoria`, `nombreCont`, `fechaCont`, `fechaCambio`, `descripCont`, `Calificación`, `Cont`) VALUES
(2, 1, 13, 'hello', '0000-00-00 00:00:00', '2016-12-15 19:41:10', '0', 0, 0x4c6561677565206f66204c6567656e64732030392d31312d323031362031382d34372d35352d3535312e6a7067),
(3, 1, 12, 'hello', '0000-00-00 00:00:00', '2016-12-15 19:09:50', '4.33333', 4.33333, 0x4c6561677565206f66204c6567656e64732030392d31312d323031362031392d30312d33362d3437362e6a7067),
(4, 1, 11, 'hello lol', '0000-00-00 00:00:00', '2017-01-10 00:28:23', '4.26', 4.26, 0x4c6561677565206f66204c6567656e64732030392d31312d323031362031382d35372d33322d3738342e6a7067),
(5, 1, 14, 'hello', '0000-00-00 00:00:00', '2017-01-09 20:22:32', '4.5', 4.5, 0x433a2f78616d70702f6874646f63732f50726f796563746f2f66696c652f4c65616775655f6f665f4c6567656e64735f30392d31312d323031365f31382d34372d35352d353531332e6a7067),
(6, 1, 15, 'vvvv', '0000-00-00 00:00:00', '2017-01-14 20:58:23', 'ultimofuncional3', 0, 0x44534330313631342e4a5047),
(7, 1, 17, 'hello', '0000-00-00 00:00:00', '2017-01-14 21:25:26', 'ultimofuncional', 0, 0x4453433031363134312e4a5047),
(8, 5, 15, 'Musica', '2017-01-14 00:00:00', NULL, 'Arte abstracto de musica', 0, 0x61627374726163746f2e6a7067),
(9, 5, 15, 'Michael Jackson', '2017-01-14 00:00:00', NULL, 'Arte abstracto de Michael Jackson', 0, 0x6d69636861656c2d6a61636b736f6e2e6a7067),
(10, 5, 15, 'Futbol', '2017-01-14 00:00:00', NULL, 'Arte abstracto de futbol', 0, 0x333530363134363834363038343132382e6a7067),
(11, 5, 15, 'Tigre', '2017-01-14 00:00:00', NULL, 'Arte abstracto de tigre', 0, 0x696d6167656e2d64656c2d617274652d61627374726163746f2d636f6e2d656c2d74696772652d34333535393234302e6a7067),
(12, 5, 17, 'Playa', '2017-01-14 00:00:00', NULL, 'Fotografía de playa', 0, 0x4c41532d4d454a4f5245532d464f544f532d4a414d41532d544f4d414441532d312d373330783438362e6a7067),
(13, 5, 17, 'Concierto', '2017-01-14 00:00:00', NULL, 'Fotografía de un concierto', 0, 0x466f746f677261666961732d746f75722d6d756e6469616c2d7265616c697a612d4d61726f6f6e5f4c4e43494d4132303136303431345f303131355f312e6a7067),
(14, 5, 17, 'Arcoiris', '2017-01-14 00:00:00', NULL, 'Fotografía arcoiris', 0, 0x756e612d706172656a612d70657273696775652d746f726d656e7461732d706172612d63726561722d666f746f677261666961732d616c7563696e616e7465732d6b6975626f6c652d312e6a7067),
(15, 5, 17, 'Arboles', '2017-01-14 00:00:00', NULL, 'Fotografía camino de arboles', 0, 0x746970732d706172612d746f6d61722d6275656e61732d666f746f677261666961732e6a7067);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpregunta`
--

CREATE TABLE `tblpregunta` (
  `idPregunta` int(11) NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `PreguntaC` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Eta tabla se relaciona con comentario y categoría haciendo v';

--
-- Volcado de datos para la tabla `tblpregunta`
--

INSERT INTO `tblpregunta` (`idPregunta`, `idCategoria`, `PreguntaC`) VALUES
(1, 0, ''),
(2, 12, 'Sirve?'),
(3, 11, 'Pregunta Prueba 1'),
(4, 11, 'Pregunta Prueba 2'),
(5, 14, 'Prueba For'),
(6, 15, 'Califique la originalidad de la pintura'),
(7, 15, 'Califique la técnica de la pintura'),
(8, 15, 'Califique las combinaciones de los colores utilizados'),
(9, 15, 'Que tanto entiende la temática que quiere expresar la pintura'),
(14, 17, 'Califique el enfoque de la fotografía'),
(15, 17, 'Califique el momento captado'),
(16, 17, 'Califique la iluminación de la fotografía'),
(17, 17, 'Califique la perspectiva de la fotografía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuario`
--

CREATE TABLE `tblusuario` (
  `idusuario` int(3) NOT NULL,
  `UsuarioName` varchar(80) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `email` varchar(120) NOT NULL,
  `sobre` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblusuario`
--

INSERT INTO `tblusuario` (`idusuario`, `UsuarioName`, `Password`, `Nombre`, `Apellido`, `email`, `sobre`) VALUES
(1, 'usuario1', 'usuario1', 'usuario', '1', 'heyo@gmail.com', ''),
(4, 'dgfdgf', 'hgdhg', 'hgfhg', 'hgdhg', 'hgd', 'dhgd'),
(5, 'j', 'Narutito1', 'jamil', 'Ma-what', 'lronquillo@gmail.com', 'me gusta pokemon'),
(6, 'pedrito', 'lol', 'pedro', 'lopez', 'lasd', 'asdasd'),
(10, 'peedrito', 'lol', 'pedro', 'lopez', 'laspd', 'asdasd'),
(11, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd'),
(12, 'sebas1008', 'sebas-1008', 'Sebastián', 'Guerra', 'lsguerra@udlanet.ec', 'Sobre Mi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblcalificacion`
--
ALTER TABLE `tblcalificacion`
  ADD PRIMARY KEY (`idcontent`,`idusuario`,`idPregunta`);

--
-- Indices de la tabla `tblcategoria`
--
ALTER TABLE `tblcategoria`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `tblcomentario`
--
ALTER TABLE `tblcomentario`
  ADD PRIMARY KEY (`idcontent`,`idusuario`),
  ADD KEY `paraPregunta` (`idPregunta`);

--
-- Indices de la tabla `tblcontenido`
--
ALTER TABLE `tblcontenido`
  ADD PRIMARY KEY (`idcontent`,`idusuario`,`idcategoria`);

--
-- Indices de la tabla `tblpregunta`
--
ALTER TABLE `tblpregunta`
  ADD PRIMARY KEY (`idPregunta`,`idCategoria`);

--
-- Indices de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `UsuarioName` (`UsuarioName`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblcategoria`
--
ALTER TABLE `tblcategoria`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `tblcontenido`
--
ALTER TABLE `tblcontenido`
  MODIFY `idcontent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tblpregunta`
--
ALTER TABLE `tblpregunta`
  MODIFY `idPregunta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `tblusuario`
--
ALTER TABLE `tblusuario`
  MODIFY `idusuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

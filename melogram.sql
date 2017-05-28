-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2017 a las 19:40:23
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `melogram`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genres`
--

CREATE TABLE `genres` (
  `id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `genres`
--

INSERT INTO `genres` (`id`) VALUES
('Blues'),
('Clasica'),
('Country'),
('HipHop'),
('House'),
('Jazz'),
('Metal'),
('Pop'),
('Rap'),
('Reggae'),
('Rock'),
('Techno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` varchar(20) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `min_age` int(10) NOT NULL,
  `max_age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `genre`, `min_age`, `max_age`) VALUES
('313', 'Techno', 18, 30),
('Amnesia', 'Techno', 21, 50),
('DaBush', 'Reggae', 25, 60),
('Death', 'Metal', 24, 58),
('Explicit', 'HipHop', 35, 55),
('HellsBells', 'Rock', 15, 80),
('Heroes', 'House', 20, 50),
('Hunters', 'Blues', 30, 70),
('I<3Techno', 'Techno', 23, 60),
('Juicy', 'HipHop', 20, 45),
('Roots', 'Reggae', 25, 70),
('Route66', 'Rock', 30, 50),
('Stardust', 'House', 20, 35),
('statesboro', 'Blues', 20, 65);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `members`
--

CREATE TABLE `members` (
  `user` varchar(20) NOT NULL,
  `chat_group` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `members`
--

INSERT INTO `members` (`user`, `chat_group`) VALUES
('axwell', 'Heroes'),
('guyman', 'Heroes'),
('tbangalter', 'Heroes'),
('davemustaine', 'Death'),
('dio', 'Death'),
('jhetfield', 'Death'),
('kirkhammet', 'Death'),
('philanselmo', 'Death'),
('rhalford', 'Death'),
('slash', 'Death'),
('altonellis', 'Roots'),
('bobmarley', 'Roots'),
('burningspear', 'Roots'),
('culture', 'Roots'),
('damianmarley', 'Roots'),
('leeperry', 'Roots'),
('mutabaruka', 'Roots'),
('petertosh', 'Roots'),
('evedder', 'Route66'),
('jcasablancas', 'Route66'),
('mbellamy', 'Route66'),
('mstipe', 'Route66'),
('2pac', 'Juicy'),
('biggiesmalls', 'Juicy'),
('drdre', 'Juicy'),
('jayz', 'Juicy'),
('kanyewest', 'Juicy'),
('klamar', 'Juicy'),
('nas', 'Juicy'),
('snoopdogg', 'Juicy'),
('biggiesmalls', 'Explicit'),
('altonellis', 'DaBush'),
('bobmarley', 'DaBush'),
('burningspear', 'DaBush'),
('culture', 'DaBush'),
('damianmarley', 'DaBush'),
('leeperry', 'DaBush'),
('mutabaruka', 'DaBush'),
('buddyguy', 'Hunters'),
('ericclapton', 'Hunters'),
('ettajames', 'Hunters'),
('howlinwolf', 'Hunters'),
('jlhooker', 'Hunters'),
('littlewalter', 'Hunters'),
('raycharles', 'Hunters'),
('williedixon', 'Hunters'),
('bbking', 'statesboro'),
('buddyguy', 'statesboro'),
('ericclapton', 'statesboro'),
('ettajames', 'statesboro'),
('freddieking', 'statesboro'),
('howlinwolf', 'statesboro'),
('jlhooker', 'statesboro'),
('littlewalter', 'statesboro'),
('raycharles', 'statesboro'),
('williedixon', 'statesboro'),
('angusyoung', 'HellsBells'),
('axlrose', 'HellsBells'),
('bdickinson', 'HellsBells'),
('bobdylan', 'HellsBells'),
('bono', 'HellsBells'),
('eltonjohn', 'HellsBells'),
('evedder', 'HellsBells'),
('gallman', 'HellsBells'),
('jcasablancas', 'HellsBells'),
('jhendrix', 'HellsBells'),
('malcolmyoung', 'HellsBells'),
('mbellamy', 'HellsBells'),
('mstipe', 'HellsBells'),
('axwell', 'Stardust'),
('tbangalter', 'Stardust'),
('greenvelvet', '313'),
('miss4play', '313'),
('nmoudaber', '313'),
('richiehawtin', '313'),
('rvillalobos', '313'),
('adambeyer', 'Amnesia'),
('greenvelvet', 'Amnesia'),
('idaengberg', 'Amnesia'),
('lenfaki', 'Amnesia'),
('marcocarola', 'Amnesia'),
('miss4play', 'Amnesia'),
('nmoudaber', 'Amnesia'),
('pacoosuna', 'Amnesia'),
('richiehawtin', 'Amnesia'),
('rvillalobos', 'Amnesia'),
('snoferini', 'Amnesia'),
('svenvath', 'Amnesia'),
('adambeyer', 'I<3Techno'),
('carlcox', 'I<3Techno'),
('greenvelvet', 'I<3Techno'),
('idaengberg', 'I<3Techno'),
('lenfaki', 'I<3Techno'),
('marcocarola', 'I<3Techno'),
('miss4play', 'I<3Techno'),
('nmoudaber', 'I<3Techno'),
('pacoosuna', 'I<3Techno'),
('richiehawtin', 'I<3Techno'),
('rvillalobos', 'I<3Techno'),
('snoferini', 'I<3Techno'),
('svenvath', 'I<3Techno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(20) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `m_text` text NOT NULL,
  `m_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`id`, `sender`, `receiver`, `subject`, `m_text`, `m_date`) VALUES
(34, 'axwell', 'guyman', 'Concierto House (Heroes)', 'Buenas, este finde damos un concierto por si os quereis pasar.', '2017-05-28'),
(35, 'axwell', 'tbangalter', 'Concierto House (Heroes)', 'Buenas, este finde damos un concierto por si os quereis pasar.', '2017-05-28'),
(36, 'axwell', 'tbangalter', 'Daft Punk (Stardust)', 'Habeis escuchado Daft Punk?', '2017-05-28'),
(37, 'axwell', '2pac', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(38, 'axwell', 'adambeyer', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(39, 'axwell', 'albertking', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(40, 'axwell', 'altonellis', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(41, 'axwell', 'angusyoung', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(42, 'axwell', 'axlrose', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(43, 'axwell', 'bbking', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(44, 'axwell', 'bdickinson', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(45, 'axwell', 'biggiesmalls', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(46, 'axwell', 'bobdylan', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(47, 'axwell', 'bobmarley', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(48, 'axwell', 'bono', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(49, 'axwell', 'buddyguy', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(50, 'axwell', 'burningspear', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(51, 'axwell', 'carlcox', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(52, 'axwell', 'cassius', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(53, 'axwell', 'culture', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(54, 'axwell', 'dadalife', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(55, 'axwell', 'damianmarley', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(56, 'axwell', 'davemustaine', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(57, 'axwell', 'dio', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(58, 'axwell', 'drdre', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(59, 'axwell', 'eltonjohn', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(60, 'axwell', 'ericclapton', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(61, 'axwell', 'ettajames', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(62, 'axwell', 'evanhalen', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(63, 'axwell', 'evedder', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(64, 'axwell', 'freddieking', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(65, 'axwell', 'gallman', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(66, 'axwell', 'greenvelvet', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(67, 'axwell', 'guyman', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(68, 'axwell', 'howlinwolf', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(69, 'axwell', 'idaengberg', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(70, 'axwell', 'ingrosso', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(71, 'axwell', 'jayz', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(72, 'axwell', 'jcasablancas', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(73, 'axwell', 'jhanneman', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(74, 'axwell', 'jhendrix', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(75, 'axwell', 'jhetfield', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(76, 'axwell', 'jlhooker', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(77, 'axwell', 'kanyewest', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(78, 'axwell', 'kirkhammet', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(79, 'axwell', 'klamar', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(80, 'axwell', 'leeperry', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(81, 'axwell', 'lenfaki', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(82, 'axwell', 'littlewalter', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(83, 'axwell', 'malcolmyoung', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(84, 'axwell', 'marcocarola', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(85, 'axwell', 'mbellamy', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(86, 'axwell', 'miss4play', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(87, 'axwell', 'mstipe', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(88, 'axwell', 'muddywaters', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(89, 'axwell', 'mutabaruka', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(90, 'axwell', 'nas', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(91, 'axwell', 'nmoudaber', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(92, 'axwell', 'pacoosuna', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(93, 'axwell', 'petertosh', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(94, 'axwell', 'philanselmo', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(95, 'axwell', 'raycharles', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(96, 'axwell', 'rhalford', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(97, 'axwell', 'richiehawtin', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(98, 'axwell', 'rvillalobos', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(99, 'axwell', 'slash', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(100, 'axwell', 'snoferini', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(101, 'axwell', 'snoopdogg', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(102, 'axwell', 'svenvath', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(103, 'axwell', 'tbangalter', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(104, 'axwell', 'williedixon', 'Difundido', 'No esta mal esto de enviar difundidos', '2017-05-28'),
(105, 'angusyoung', 'axlrose', 'Highway to Hell (HellsBells)', 'Hemos sacado nuevo album, se llama Highway to Hell', '2017-05-28'),
(106, 'angusyoung', 'bdickinson', 'Highway to Hell (HellsBells)', 'Hemos sacado nuevo album, se llama Highway to Hell', '2017-05-28'),
(107, 'angusyoung', 'bobdylan', 'Highway to Hell (HellsBells)', 'Hemos sacado nuevo album, se llama Highway to Hell', '2017-05-28'),
(108, 'angusyoung', 'bono', 'Highway to Hell (HellsBells)', 'Hemos sacado nuevo album, se llama Highway to Hell', '2017-05-28'),
(109, 'angusyoung', 'eltonjohn', 'Highway to Hell (HellsBells)', 'Hemos sacado nuevo album, se llama Highway to Hell', '2017-05-28'),
(110, 'angusyoung', 'evedder', 'Highway to Hell (HellsBells)', 'Hemos sacado nuevo album, se llama Highway to Hell', '2017-05-28'),
(111, 'angusyoung', 'gallman', 'Highway to Hell (HellsBells)', 'Hemos sacado nuevo album, se llama Highway to Hell', '2017-05-28'),
(112, 'angusyoung', 'jcasablancas', 'Highway to Hell (HellsBells)', 'Hemos sacado nuevo album, se llama Highway to Hell', '2017-05-28'),
(113, 'angusyoung', 'jhendrix', 'Highway to Hell (HellsBells)', 'Hemos sacado nuevo album, se llama Highway to Hell', '2017-05-28'),
(114, 'angusyoung', 'malcolmyoung', 'Highway to Hell (HellsBells)', 'Hemos sacado nuevo album, se llama Highway to Hell', '2017-05-28'),
(115, 'angusyoung', 'mbellamy', 'Highway to Hell (HellsBells)', 'Hemos sacado nuevo album, se llama Highway to Hell', '2017-05-28'),
(116, 'angusyoung', 'mstipe', 'Highway to Hell (HellsBells)', 'Hemos sacado nuevo album, se llama Highway to Hell', '2017-05-28'),
(117, 'bobmarley', 'altonellis', '400 years (Roots)', 'No sun will shine in my day today (no sun will shine)\r\nThe high yellow moon won\'t come out to play...', '2017-05-28'),
(118, 'bobmarley', 'burningspear', '400 years (Roots)', 'No sun will shine in my day today (no sun will shine)\r\nThe high yellow moon won\'t come out to play...', '2017-05-28'),
(119, 'bobmarley', 'culture', '400 years (Roots)', 'No sun will shine in my day today (no sun will shine)\r\nThe high yellow moon won\'t come out to play...', '2017-05-28'),
(120, 'bobmarley', 'damianmarley', '400 years (Roots)', 'No sun will shine in my day today (no sun will shine)\r\nThe high yellow moon won\'t come out to play...', '2017-05-28'),
(121, 'bobmarley', 'leeperry', '400 years (Roots)', 'No sun will shine in my day today (no sun will shine)\r\nThe high yellow moon won\'t come out to play...', '2017-05-28'),
(122, 'bobmarley', 'mutabaruka', '400 years (Roots)', 'No sun will shine in my day today (no sun will shine)\r\nThe high yellow moon won\'t come out to play...', '2017-05-28'),
(123, 'bobmarley', 'petertosh', '400 years (Roots)', 'No sun will shine in my day today (no sun will shine)\r\nThe high yellow moon won\'t come out to play...', '2017-05-28'),
(124, 'ingrosso', 'axwell', 'Re: Difundido', 'Pues si que esta guapo tio', '2017-05-28'),
(125, 'ingrosso', 'adambeyer', 'House vs. Techno', 'El House es mejor que el techno', '2017-05-28'),
(126, 'marcocarola', 'adambeyer', 'Sabado (I<3Techno)', 'Hola amigos, pincho el sabado en Ibiza!', '2017-05-28'),
(127, 'marcocarola', 'carlcox', 'Sabado (I<3Techno)', 'Hola amigos, pincho el sabado en Ibiza!', '2017-05-28'),
(128, 'marcocarola', 'greenvelvet', 'Sabado (I<3Techno)', 'Hola amigos, pincho el sabado en Ibiza!', '2017-05-28'),
(129, 'marcocarola', 'idaengberg', 'Sabado (I<3Techno)', 'Hola amigos, pincho el sabado en Ibiza!', '2017-05-28'),
(130, 'marcocarola', 'lenfaki', 'Sabado (I<3Techno)', 'Hola amigos, pincho el sabado en Ibiza!', '2017-05-28'),
(131, 'marcocarola', 'miss4play', 'Sabado (I<3Techno)', 'Hola amigos, pincho el sabado en Ibiza!', '2017-05-28'),
(132, 'marcocarola', 'nmoudaber', 'Sabado (I<3Techno)', 'Hola amigos, pincho el sabado en Ibiza!', '2017-05-28'),
(133, 'marcocarola', 'pacoosuna', 'Sabado (I<3Techno)', 'Hola amigos, pincho el sabado en Ibiza!', '2017-05-28'),
(134, 'marcocarola', 'richiehawtin', 'Sabado (I<3Techno)', 'Hola amigos, pincho el sabado en Ibiza!', '2017-05-28'),
(135, 'marcocarola', 'rvillalobos', 'Sabado (I<3Techno)', 'Hola amigos, pincho el sabado en Ibiza!', '2017-05-28'),
(136, 'marcocarola', 'snoferini', 'Sabado (I<3Techno)', 'Hola amigos, pincho el sabado en Ibiza!', '2017-05-28'),
(137, 'marcocarola', 'svenvath', 'Sabado (I<3Techno)', 'Hola amigos, pincho el sabado en Ibiza!', '2017-05-28'),
(138, 'raycharles', 'buddyguy', 'Hunter (Hunters)', 'Man, Albert King is the maaan', '2017-05-28'),
(139, 'raycharles', 'ericclapton', 'Hunter (Hunters)', 'Man, Albert King is the maaan', '2017-05-28'),
(140, 'raycharles', 'ettajames', 'Hunter (Hunters)', 'Man, Albert King is the maaan', '2017-05-28'),
(141, 'raycharles', 'howlinwolf', 'Hunter (Hunters)', 'Man, Albert King is the maaan', '2017-05-28'),
(142, 'raycharles', 'jlhooker', 'Hunter (Hunters)', 'Man, Albert King is the maaan', '2017-05-28'),
(143, 'raycharles', 'littlewalter', 'Hunter (Hunters)', 'Man, Albert King is the maaan', '2017-05-28'),
(144, 'raycharles', 'williedixon', 'Hunter (Hunters)', 'Man, Albert King is the maaan', '2017-05-28'),
(145, 'carlcox', '2pac', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(146, 'carlcox', 'adambeyer', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(147, 'carlcox', 'albertking', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(148, 'carlcox', 'altonellis', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(149, 'carlcox', 'angusyoung', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(150, 'carlcox', 'axlrose', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(151, 'carlcox', 'axwell', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(152, 'carlcox', 'bbking', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(153, 'carlcox', 'bdickinson', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(154, 'carlcox', 'biggiesmalls', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(155, 'carlcox', 'bobdylan', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(156, 'carlcox', 'bobmarley', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(157, 'carlcox', 'bono', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(158, 'carlcox', 'buddyguy', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(159, 'carlcox', 'burningspear', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(160, 'carlcox', 'cassius', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(161, 'carlcox', 'culture', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(162, 'carlcox', 'dadalife', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(163, 'carlcox', 'damianmarley', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(164, 'carlcox', 'davemustaine', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(165, 'carlcox', 'dio', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(166, 'carlcox', 'drdre', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(167, 'carlcox', 'eltonjohn', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(168, 'carlcox', 'ericclapton', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(169, 'carlcox', 'ettajames', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(170, 'carlcox', 'evanhalen', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(171, 'carlcox', 'evedder', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(172, 'carlcox', 'freddieking', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(173, 'carlcox', 'gallman', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(174, 'carlcox', 'greenvelvet', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(175, 'carlcox', 'guyman', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(176, 'carlcox', 'howlinwolf', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(177, 'carlcox', 'idaengberg', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(178, 'carlcox', 'ingrosso', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(179, 'carlcox', 'jayz', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(180, 'carlcox', 'jcasablancas', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(181, 'carlcox', 'jhanneman', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(182, 'carlcox', 'jhendrix', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(183, 'carlcox', 'jhetfield', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(184, 'carlcox', 'jlhooker', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(185, 'carlcox', 'kanyewest', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(186, 'carlcox', 'kirkhammet', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(187, 'carlcox', 'klamar', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(188, 'carlcox', 'leeperry', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(189, 'carlcox', 'lenfaki', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(190, 'carlcox', 'littlewalter', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(191, 'carlcox', 'malcolmyoung', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(192, 'carlcox', 'marcocarola', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(193, 'carlcox', 'mbellamy', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(194, 'carlcox', 'miss4play', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(195, 'carlcox', 'mstipe', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(196, 'carlcox', 'muddywaters', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(197, 'carlcox', 'mutabaruka', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(198, 'carlcox', 'nas', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(199, 'carlcox', 'nmoudaber', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(200, 'carlcox', 'pacoosuna', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(201, 'carlcox', 'petertosh', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(202, 'carlcox', 'philanselmo', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(203, 'carlcox', 'raycharles', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(204, 'carlcox', 'rhalford', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(205, 'carlcox', 'richiehawtin', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(206, 'carlcox', 'rvillalobos', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(207, 'carlcox', 'slash', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(208, 'carlcox', 'snoferini', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(209, 'carlcox', 'snoopdogg', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(210, 'carlcox', 'svenvath', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(211, 'carlcox', 'tbangalter', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28'),
(212, 'carlcox', 'williedixon', 'Boiler Room', 'Boiler room este jueves amigos, estais todos mas que invitados', '2017-05-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `age` int(10) DEFAULT NULL,
  `music` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `password`, `age`, `music`) VALUES
('2pac', '2pac', 28, 'HipHop'),
('adambeyer', 'adambeyer', 40, 'Techno'),
('admin', 'admin', NULL, NULL),
('albertking', 'albertking', 18, 'Blues'),
('altonellis', 'altonellis', 34, 'Reggae'),
('angusyoung', 'angusyoung', 60, 'Rock'),
('axlrose', 'axlrose', 55, 'Rock'),
('axwell', 'axwell', 32, 'House'),
('bbking', 'bbking', 20, 'Blues'),
('bdickinson', 'bdickinson', 60, 'Rock'),
('biggiesmalls', 'biggiesmalls', 35, 'HipHop'),
('bobdylan', 'bobdylan', 67, 'Rock'),
('bobmarley', 'bobmarley', 35, 'Reggae'),
('bono', 'bono', 55, 'Rock'),
('buddyguy', 'buddyguy', 58, 'Blues'),
('burningspear', 'burningspear', 35, 'Reggae'),
('carlcox', 'carlcox', 55, 'Techno'),
('cassius', 'cassius', 19, 'House'),
('culture', 'culture', 42, 'Reggae'),
('dadalife', 'dadalife', 56, 'House'),
('damianmarley', 'damianmarley', 45, 'Reggae'),
('davemustaine', 'davemustaine', 54, 'Metal'),
('dio', 'dio', 54, 'Metal'),
('drdre', 'drdre', 28, 'HipHop'),
('eltonjohn', 'eltonjohn', 70, 'Rock'),
('ericclapton', 'ericclapton', 34, 'Blues'),
('ettajames', 'ettajames', 30, 'Blues'),
('evanhalen', 'evanhalen', 23, 'Metal'),
('evedder', 'evedder', 40, 'Rock'),
('freddieking', 'freddieking', 25, 'Blues'),
('gallman', 'gallman', 64, 'Rock'),
('greenvelvet', 'greenvelvet', 30, 'Techno'),
('guyman', 'guyman', 43, 'House'),
('howlinwolf', 'howlinwolf', 30, 'Blues'),
('idaengberg', 'idaengberg', 37, 'Techno'),
('ingrosso', 'ingrosso', 17, 'House'),
('jayz', 'jayz', 28, 'HipHop'),
('jcasablancas', 'jcasablancas', 30, 'Rock'),
('jhanneman', 'jhanneman', 22, 'Metal'),
('jhendrix', 'jhendrix', 60, 'Rock'),
('jhetfield', 'jhetfield', 45, 'Metal'),
('jlhooker', 'jlhooker', 40, 'Blues'),
('kanyewest', 'kanyewest', 28, 'HipHop'),
('kirkhammet', 'kirkhammet', 28, 'Metal'),
('klamar', 'klamar', 28, 'HipHop'),
('leeperry', 'leeperry', 54, 'Reggae'),
('lenfaki', 'lenfaki', 33, 'Techno'),
('littlewalter', 'littlewalter', 49, 'Blues'),
('malcolmyoung', 'malcolmyoung', 64, 'Rock'),
('marcocarola', 'marcocarola', 47, 'Techno'),
('mbellamy', 'mbellamy', 35, 'Rock'),
('miss4play', 'miss4play', 28, 'Techno'),
('mstipe', 'mstipe', 45, 'Rock'),
('muddywaters', 'muddywaters', 80, 'Blues'),
('mutabaruka', 'mutabaruka', 56, 'Reggae'),
('nas', 'nas', 28, 'HipHop'),
('nmoudaber', 'nmoudaber', 25, 'Techno'),
('pacoosuna', 'pacoosuna', 35, 'Techno'),
('petertosh', 'petertosh', 63, 'Reggae'),
('philanselmo', 'philanselmo', 35, 'Metal'),
('raycharles', 'raycharles', 60, 'Blues'),
('rhalford', 'rhalford', 43, 'Metal'),
('richiehawtin', 'richiehawtin', 30, 'Techno'),
('rvillalobos', 'rvillalobos', 25, 'Techno'),
('slash', 'slash', 34, 'Metal'),
('snoferini', 'snoferini', 43, 'Techno'),
('snoopdogg', 'snoopdogg', 28, 'HipHop'),
('svenvath', 'svenvath', 45, 'Techno'),
('tbangalter', 'tbangalter', 23, 'House'),
('williedixon', 'williedixon', 56, 'Blues');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genre` (`genre`);

--
-- Indices de la tabla `members`
--
ALTER TABLE `members`
  ADD KEY `user` (`user`),
  ADD KEY `chat_group` (`chat_group`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender` (`sender`),
  ADD KEY `receiver` (`receiver`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `music` (`music`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`genre`) REFERENCES `genres` (`id`);

--
-- Filtros para la tabla `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`chat_group`) REFERENCES `groups` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`music`) REFERENCES `genres` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-08-2023 a las 04:37:16
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pronew`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test36`
--

CREATE TABLE `test36` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `tipo_pregunta` varchar(20) NOT NULL,
  `respuesta` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `test36`
--

INSERT INTO `test36` (`id`, `id_usuario`, `tipo_pregunta`, `respuesta`) VALUES
(118, 1, 'visual', 5),
(119, 1, 'auditivo', 5),
(120, 1, 'kinestesico', 5),
(121, 1, 'auditivo', 1),
(122, 1, 'visual', 5),
(123, 1, 'kinestesico', 5),
(124, 1, 'kinestesico', 5),
(125, 1, 'kinestesico', 1),
(126, 1, 'visual', 3),
(127, 1, 'visual', 5),
(128, 1, 'visual', 5),
(129, 1, 'auditivo', 1),
(130, 1, 'auditivo', 1),
(131, 1, 'kinestesico', 1),
(132, 1, 'auditivo', 5),
(133, 1, 'visual', 5),
(134, 1, 'visual', 3),
(135, 1, 'kinestesico', 5),
(136, 1, 'auditivo', 5),
(137, 1, 'auditivo', 5),
(138, 1, 'kinestesico', 5),
(139, 1, 'visual', 1),
(140, 1, 'auditivo', 5),
(141, 1, 'auditivo', 1),
(142, 1, 'kinestesico', 5),
(143, 1, 'visual', 5),
(144, 1, 'visual', 5),
(145, 1, 'auditivo', 5),
(146, 1, 'auditivo', 5),
(147, 1, 'kinestesico', 5),
(148, 1, 'kinestesico', 1),
(149, 1, 'visual', 5),
(150, 1, 'auditivo', 1),
(151, 1, 'kinestesico', 5),
(152, 1, 'kinestesico', 1),
(153, 1, 'visual', 5),
(154, 5, 'visual', 1),
(155, 5, 'auditivo', 3),
(156, 5, 'kinestesico', 2),
(157, 5, 'auditivo', 2),
(158, 5, 'visual', 2),
(159, 5, 'kinestesico', 2),
(160, 5, 'kinestesico', 2),
(161, 5, 'kinestesico', 2),
(162, 5, 'visual', 2),
(163, 5, 'visual', 2),
(164, 5, 'visual', 2),
(165, 5, 'auditivo', 4),
(166, 5, 'auditivo', 2),
(167, 5, 'kinestesico', 2),
(168, 5, 'auditivo', 2),
(169, 5, 'visual', 2),
(170, 5, 'visual', 2),
(171, 5, 'kinestesico', 2),
(172, 5, 'auditivo', 2),
(173, 5, 'auditivo', 2),
(174, 5, 'kinestesico', 2),
(175, 5, 'visual', 2),
(176, 5, 'auditivo', 3),
(177, 5, 'auditivo', 3),
(178, 5, 'kinestesico', 2),
(179, 5, 'visual', 2),
(180, 5, 'visual', 2),
(181, 5, 'auditivo', 2),
(182, 5, 'auditivo', 2),
(183, 5, 'kinestesico', 2),
(184, 5, 'kinestesico', 2),
(185, 5, 'visual', 2),
(186, 5, 'auditivo', 3),
(187, 5, 'kinestesico', 2),
(188, 5, 'kinestesico', 2),
(189, 5, 'visual', 2),
(190, 4, 'visual', 5),
(191, 4, 'auditivo', 3),
(192, 4, 'kinestesico', 2),
(193, 4, 'auditivo', 2),
(194, 4, 'visual', 3),
(195, 4, 'kinestesico', 3),
(196, 4, 'kinestesico', 2),
(197, 4, 'kinestesico', 3),
(198, 4, 'visual', 5),
(199, 4, 'visual', 3),
(200, 4, 'visual', 4),
(201, 4, 'auditivo', 3),
(202, 4, 'auditivo', 3),
(203, 4, 'kinestesico', 3),
(204, 4, 'auditivo', 3),
(205, 4, 'visual', 3),
(206, 4, 'visual', 3),
(207, 4, 'kinestesico', 3),
(208, 4, 'auditivo', 2),
(209, 4, 'auditivo', 3),
(210, 4, 'kinestesico', 3),
(211, 4, 'visual', 2),
(212, 4, 'auditivo', 3),
(213, 4, 'auditivo', 3),
(214, 4, 'kinestesico', 2),
(215, 4, 'visual', 3),
(216, 4, 'visual', 2),
(217, 4, 'auditivo', 3),
(218, 4, 'auditivo', 3),
(219, 4, 'kinestesico', 2),
(220, 4, 'kinestesico', 3),
(221, 4, 'visual', 3),
(222, 4, 'auditivo', 3),
(223, 4, 'kinestesico', 2),
(224, 4, 'kinestesico', 2),
(225, 4, 'visual', 3),
(226, 7, 'visual', 5),
(227, 7, 'auditivo', 5),
(228, 7, 'kinestesico', 5),
(229, 7, 'auditivo', 1),
(230, 7, 'visual', 5),
(231, 7, 'kinestesico', 5),
(232, 7, 'kinestesico', 5),
(233, 7, 'kinestesico', 1),
(234, 7, 'visual', 3),
(235, 7, 'visual', 5),
(236, 7, 'visual', 5),
(237, 7, 'auditivo', 1),
(238, 7, 'auditivo', 1),
(239, 7, 'kinestesico', 1),
(240, 7, 'auditivo', 5),
(241, 7, 'visual', 5),
(242, 7, 'visual', 3),
(243, 7, 'kinestesico', 5),
(244, 7, 'auditivo', 5),
(245, 7, 'auditivo', 5),
(246, 7, 'kinestesico', 5),
(247, 7, 'visual', 1),
(248, 7, 'auditivo', 5),
(249, 7, 'auditivo', 1),
(250, 7, 'kinestesico', 5),
(251, 7, 'visual', 5),
(252, 7, 'visual', 5),
(253, 7, 'auditivo', 5),
(254, 7, 'auditivo', 5),
(255, 7, 'kinestesico', 5),
(256, 7, 'kinestesico', 1),
(257, 7, 'visual', 5),
(258, 7, 'auditivo', 1),
(259, 7, 'kinestesico', 5),
(260, 7, 'kinestesico', 1),
(261, 7, 'visual', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test40`
--

CREATE TABLE `test40` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `numero_pregunta` varchar(20) NOT NULL,
  `respuesta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `test40`
--

INSERT INTO `test40` (`id`, `id_usuario`, `numero_pregunta`, `respuesta`) VALUES
(13, 5, 'pregunta1', 'auditivo'),
(14, 5, 'pregunta2', 'kinestecico'),
(15, 5, 'pregunta3', 'auditivo'),
(16, 5, 'pregunta4', 'kinestesico'),
(17, 5, 'pregunta5', ''),
(18, 5, 'pregunta6', ''),
(19, 5, 'pregunta7', ''),
(20, 5, 'pregunta8', ''),
(21, 5, 'pregunta9', ''),
(22, 5, 'pregunta10', ''),
(23, 5, 'pregunta11', ''),
(24, 5, 'pregunta12', ''),
(25, 5, 'pregunta13', ''),
(26, 5, 'pregunta14', ''),
(27, 5, 'pregunta15', ''),
(28, 5, 'pregunta16', ''),
(29, 5, 'pregunta17', ''),
(30, 5, 'pregunta18', ''),
(31, 5, 'pregunta19', ''),
(32, 5, 'pregunta20', ''),
(33, 4, 'pregunta1', 'visual'),
(34, 4, 'pregunta2', 'kinestecico'),
(35, 4, 'pregunta3', 'visual'),
(36, 4, 'pregunta4', 'auditivo'),
(37, 4, 'pregunta5', 'auditivo'),
(38, 4, 'pregunta6', 'visual'),
(39, 4, 'pregunta7', 'auditivo'),
(40, 4, 'pregunta8', 'visual'),
(41, 4, 'pregunta9', 'kinestesico'),
(42, 4, 'pregunta10', 'auditivo'),
(43, 4, 'pregunta11', 'visual'),
(44, 4, 'pregunta12', 'visual'),
(45, 4, 'pregunta13', 'kinestesico'),
(46, 4, 'pregunta14', 'auditivo'),
(47, 4, 'pregunta15', 'visual'),
(48, 4, 'pregunta16', 'kinestesico'),
(49, 4, 'pregunta17', 'auditivo'),
(50, 4, 'pregunta18', 'kinestecico'),
(51, 4, 'pregunta19', 'auditivo'),
(52, 4, 'pregunta20', 'kinestesico'),
(53, 4, 'pregunta21', 'visual'),
(54, 4, 'pregunta22', 'kinestesico'),
(55, 4, 'pregunta23', 'auditivo'),
(56, 4, 'pregunta24', 'visual'),
(57, 4, 'pregunta25', 'auditivo'),
(58, 4, 'pregunta26', 'auditivo'),
(59, 4, 'pregunta27', 'visual'),
(60, 4, 'pregunta28', 'auditivo'),
(61, 4, 'pregunta29', 'visual'),
(62, 4, 'pregunta30', 'auditivo'),
(63, 4, 'pregunta31', 'visual'),
(64, 4, 'pregunta32', 'kinestesico'),
(65, 4, 'pregunta33', 'kinestesico'),
(66, 4, 'pregunta34', 'visual'),
(67, 4, 'pregunta35', 'visual'),
(68, 4, 'pregunta36', 'kinestesico'),
(69, 4, 'pregunta37', 'auditivo'),
(70, 4, 'pregunta38', 'visual'),
(71, 4, 'pregunta39', 'visual'),
(72, 4, 'pregunta40', 'kinestesico'),
(73, 1, 'pregunta1', 'visual'),
(74, 1, 'pregunta2', 'kinestesico'),
(75, 1, 'pregunta3', 'auditivo'),
(76, 1, 'pregunta4', 'visual'),
(77, 1, 'pregunta5', 'visual'),
(78, 1, 'pregunta6', 'kinestesico'),
(79, 1, 'pregunta7', 'auditivo'),
(80, 1, 'pregunta8', 'auditivo'),
(81, 1, 'pregunta9', 'kinestesico'),
(82, 1, 'pregunta10', 'visual'),
(83, 1, 'pregunta11', 'visual'),
(84, 1, 'pregunta12', 'kinestesico'),
(85, 1, 'pregunta13', 'auditivo'),
(86, 1, 'pregunta14', 'kinestesico'),
(87, 1, 'pregunta15', 'auditivo'),
(88, 1, 'pregunta16', 'kinestesico'),
(89, 1, 'pregunta17', 'visual'),
(90, 1, 'pregunta18', 'auditivo'),
(91, 1, 'pregunta19', 'kinestesico'),
(92, 1, 'pregunta20', 'visual'),
(93, 1, 'pregunta21', 'kinestesico'),
(94, 1, 'pregunta22', 'auditivo'),
(95, 1, 'pregunta23', 'visual'),
(96, 1, 'pregunta24', 'visual'),
(97, 1, 'pregunta25', 'visual'),
(98, 1, 'pregunta26', 'visual'),
(99, 1, 'pregunta27', 'kinestesico'),
(100, 1, 'pregunta28', 'visual'),
(101, 1, 'pregunta29', 'visual'),
(102, 1, 'pregunta30', 'visual'),
(103, 1, 'pregunta31', 'kinestesico'),
(104, 1, 'pregunta32', 'visual'),
(105, 1, 'pregunta33', 'kinestesico'),
(106, 1, 'pregunta34', 'auditivo'),
(107, 1, 'pregunta35', 'kinestesico'),
(108, 1, 'pregunta36', 'visual'),
(109, 1, 'pregunta37', 'kinestesico'),
(110, 1, 'pregunta38', 'visual'),
(111, 1, 'pregunta39', 'auditivo'),
(112, 1, 'pregunta40', 'auditivo'),
(113, 7, 'pregunta1', 'visual'),
(114, 7, 'pregunta2', 'kinestesico'),
(115, 7, 'pregunta3', 'auditivo'),
(116, 7, 'pregunta4', 'visual'),
(117, 7, 'pregunta5', 'visual'),
(118, 7, 'pregunta6', 'kinestesico'),
(119, 7, 'pregunta7', 'auditivo'),
(120, 7, 'pregunta8', 'auditivo'),
(121, 7, 'pregunta9', 'kinestesico'),
(122, 7, 'pregunta10', 'visual'),
(123, 7, 'pregunta11', 'visual'),
(124, 7, 'pregunta12', 'kinestesico'),
(125, 7, 'pregunta13', 'auditivo'),
(126, 7, 'pregunta14', 'kinestesico'),
(127, 7, 'pregunta15', 'auditivo'),
(128, 7, 'pregunta16', 'kinestesico'),
(129, 7, 'pregunta17', 'visual'),
(130, 7, 'pregunta18', 'auditivo'),
(131, 7, 'pregunta19', 'kinestesico'),
(132, 7, 'pregunta20', 'visual'),
(133, 7, 'pregunta21', 'kinestesico'),
(134, 7, 'pregunta22', 'auditivo'),
(135, 7, 'pregunta23', 'visual'),
(136, 7, 'pregunta24', 'visual'),
(137, 7, 'pregunta25', 'visual'),
(138, 7, 'pregunta26', 'visual'),
(139, 7, 'pregunta27', 'kinestesico'),
(140, 7, 'pregunta28', 'visual'),
(141, 7, 'pregunta29', 'visual'),
(142, 7, 'pregunta30', 'visual'),
(143, 7, 'pregunta31', 'kinestesico'),
(144, 7, 'pregunta32', 'visual'),
(145, 7, 'pregunta33', 'kinestesico'),
(146, 7, 'pregunta34', 'auditivo'),
(147, 7, 'pregunta35', 'kinestesico'),
(148, 7, 'pregunta36', 'visual'),
(149, 7, 'pregunta37', 'kinestesico'),
(150, 7, 'pregunta38', 'visual'),
(151, 7, 'pregunta39', 'auditivo'),
(152, 7, 'pregunta40', 'auditivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test80`
--

CREATE TABLE `test80` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `tipo_pregunta` varchar(20) NOT NULL,
  `respuesta` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `test80`
--

INSERT INTO `test80` (`id`, `id_usuario`, `tipo_pregunta`, `respuesta`) VALUES
(9, 5, 'pragmatico', 1),
(10, 5, 'teorico', 1),
(11, 5, 'activo', 1),
(12, 5, 'reflexivo', 1),
(13, 4, 'pragmatico', 1),
(14, 4, 'teorico', 1),
(15, 4, 'activo', 1),
(16, 4, 'teorico', 0),
(17, 4, 'activo', 1),
(18, 4, 'teorico', 1),
(19, 4, 'activo', 1),
(20, 4, 'pragmatico', 0),
(21, 4, 'activo', 1),
(22, 4, 'reflexivo', 1),
(23, 4, 'teorico', 1),
(24, 4, 'pragmatico', 1),
(25, 4, 'activo', 0),
(26, 4, 'pragmatico', 1),
(27, 4, 'teorico', 0),
(28, 4, 'reflexivo', 1),
(29, 4, 'teorico', 1),
(30, 4, 'reflexivo', 1),
(31, 4, 'reflexivo', 1),
(32, 4, 'activo', 1),
(33, 4, 'teorico', 1),
(34, 4, 'pragmatico', 1),
(35, 4, 'teorico', 0),
(36, 4, 'pragmatico', 1),
(37, 4, 'teorico', 1),
(38, 4, 'activo', 1),
(39, 4, 'activo', 0),
(40, 4, 'reflexivo', 1),
(41, 4, 'teorico', 1),
(42, 4, 'pragmatico', 0),
(43, 4, 'reflexivo', 1),
(44, 4, 'reflexivo', 1),
(45, 4, 'teorico', 0),
(46, 4, 'reflexivo', 1),
(47, 4, 'activo', 1),
(48, 4, 'reflexivo', 1),
(49, 4, 'activo', 0),
(50, 4, 'pragmatico', 0),
(51, 4, 'reflexivo', 1),
(52, 4, 'pragmatico', 1),
(53, 4, 'activo', 1),
(54, 4, 'reflexivo', 1),
(55, 4, 'activo', 0),
(56, 4, 'reflexivo', 1),
(57, 4, 'teorico', 1),
(58, 4, 'activo', 1),
(59, 4, 'pragmatico', 1),
(60, 4, 'activo', 0),
(61, 4, 'reflexivo', 1),
(62, 4, 'teorico', 1),
(63, 4, 'activo', 1),
(64, 4, 'pragmatico', 1),
(65, 4, 'pragmatico', 1),
(66, 4, 'teorico', 1),
(67, 4, 'reflexivo', 1),
(68, 4, 'pragmatico', 1),
(69, 4, 'pragmatico', 1),
(70, 4, 'reflexivo', 1),
(71, 4, 'pragmatico', 1),
(72, 4, 'teorico', 1),
(73, 4, 'activo', 1),
(74, 4, 'pragmatico', 1),
(75, 4, 'reflexivo', 1),
(76, 4, 'teorico', 1),
(77, 4, 'reflexivo', 1),
(78, 4, 'teorico', 1),
(79, 4, 'activo', 1),
(80, 4, 'pragmatico', 0),
(81, 4, 'reflexivo', 1),
(82, 4, 'reflexivo', 1),
(83, 4, 'teorico', 1),
(84, 4, 'pragmatico', 1),
(85, 4, 'pragmatico', 1),
(86, 4, 'activo', 0),
(87, 4, 'activo', 1),
(88, 4, 'pragmatico', 1),
(89, 4, 'activo', 0),
(90, 4, 'teorico', 1),
(91, 4, 'reflexivo', 1),
(92, 4, 'teorico', 1),
(93, 7, 'pragmatico', 1),
(94, 7, 'teorico', 0),
(95, 7, 'activo', 1),
(96, 7, 'teorico', 0),
(97, 7, 'activo', 1),
(98, 7, 'teorico', 1),
(99, 7, 'activo', 1),
(100, 7, 'pragmatico', 0),
(101, 7, 'activo', 1),
(102, 7, 'reflexivo', 1),
(103, 7, 'teorico', 1),
(104, 7, 'pragmatico', 1),
(105, 7, 'activo', 0),
(106, 7, 'pragmatico', 1),
(107, 7, 'teorico', 0),
(108, 7, 'reflexivo', 1),
(109, 7, 'teorico', 1),
(110, 7, 'reflexivo', 1),
(111, 7, 'reflexivo', 1),
(112, 7, 'activo', 1),
(113, 7, 'teorico', 1),
(114, 7, 'pragmatico', 1),
(115, 7, 'teorico', 0),
(116, 7, 'pragmatico', 1),
(117, 7, 'teorico', 1),
(118, 7, 'activo', 1),
(119, 7, 'activo', 0),
(120, 7, 'reflexivo', 1),
(121, 7, 'teorico', 1),
(122, 7, 'pragmatico', 0),
(123, 7, 'reflexivo', 1),
(124, 7, 'reflexivo', 1),
(125, 7, 'teorico', 0),
(126, 7, 'reflexivo', 1),
(127, 7, 'activo', 1),
(128, 7, 'reflexivo', 1),
(129, 7, 'activo', 0),
(130, 7, 'pragmatico', 0),
(131, 7, 'reflexivo', 1),
(132, 7, 'pragmatico', 1),
(133, 7, 'activo', 1),
(134, 7, 'reflexivo', 1),
(135, 7, 'activo', 0),
(136, 7, 'reflexivo', 1),
(137, 7, 'teorico', 1),
(138, 7, 'activo', 1),
(139, 7, 'pragmatico', 1),
(140, 7, 'activo', 0),
(141, 7, 'reflexivo', 1),
(142, 7, 'teorico', 1),
(143, 7, 'activo', 1),
(144, 7, 'pragmatico', 1),
(145, 7, 'pragmatico', 1),
(146, 7, 'teorico', 1),
(147, 7, 'reflexivo', 0),
(148, 7, 'pragmatico', 1),
(149, 7, 'pragmatico', 0),
(150, 7, 'reflexivo', 1),
(151, 7, 'pragmatico', 1),
(152, 7, 'teorico', 1),
(153, 7, 'activo', 1),
(154, 7, 'pragmatico', 1),
(155, 7, 'reflexivo', 1),
(156, 7, 'teorico', 1),
(157, 7, 'reflexivo', 1),
(158, 7, 'teorico', 1),
(159, 7, 'activo', 1),
(160, 7, 'pragmatico', 0),
(161, 7, 'reflexivo', 1),
(162, 7, 'reflexivo', 1),
(163, 7, 'teorico', 1),
(164, 7, 'pragmatico', 1),
(165, 7, 'pragmatico', 1),
(166, 7, 'activo', 0),
(167, 7, 'activo', 1),
(168, 7, 'pragmatico', 1),
(169, 7, 'activo', 0),
(170, 7, 'teorico', 1),
(171, 7, 'reflexivo', 1),
(172, 7, 'teorico', 1),
(173, 1, 'pragmatico', 1),
(174, 1, 'teorico', 1),
(175, 1, 'activo', 1),
(176, 1, 'teorico', 1),
(177, 1, 'activo', 1),
(178, 1, 'teorico', 0),
(179, 1, 'activo', 1),
(180, 1, 'pragmatico', 1),
(181, 1, 'activo', 1),
(182, 1, 'reflexivo', 1),
(183, 1, 'teorico', 1),
(184, 1, 'pragmatico', 1),
(185, 1, 'activo', 0),
(186, 1, 'pragmatico', 1),
(187, 1, 'teorico', 0),
(188, 1, 'reflexivo', 1),
(189, 1, 'teorico', 1),
(190, 1, 'reflexivo', 1),
(191, 1, 'reflexivo', 1),
(192, 1, 'activo', 1),
(193, 1, 'teorico', 1),
(194, 1, 'pragmatico', 1),
(195, 1, 'teorico', 0),
(196, 1, 'pragmatico', 1),
(197, 1, 'teorico', 1),
(198, 1, 'activo', 1),
(199, 1, 'activo', 0),
(200, 1, 'reflexivo', 1),
(201, 1, 'teorico', 1),
(202, 1, 'pragmatico', 0),
(203, 1, 'reflexivo', 1),
(204, 1, 'reflexivo', 1),
(205, 1, 'teorico', 0),
(206, 1, 'reflexivo', 1),
(207, 1, 'activo', 1),
(208, 1, 'reflexivo', 1),
(209, 1, 'activo', 0),
(210, 1, 'pragmatico', 0),
(211, 1, 'reflexivo', 1),
(212, 1, 'pragmatico', 1),
(213, 1, 'activo', 1),
(214, 1, 'reflexivo', 1),
(215, 1, 'activo', 0),
(216, 1, 'reflexivo', 1),
(217, 1, 'teorico', 1),
(218, 1, 'activo', 1),
(219, 1, 'pragmatico', 1),
(220, 1, 'activo', 0),
(221, 1, 'reflexivo', 1),
(222, 1, 'teorico', 1),
(223, 1, 'activo', 1),
(224, 1, 'pragmatico', 1),
(225, 1, 'pragmatico', 1),
(226, 1, 'teorico', 1),
(227, 1, 'reflexivo', 1),
(228, 1, 'pragmatico', 0),
(229, 1, 'pragmatico', 1),
(230, 1, 'reflexivo', 1),
(231, 1, 'pragmatico', 1),
(232, 1, 'teorico', 1),
(233, 1, 'activo', 1),
(234, 1, 'pragmatico', 1),
(235, 1, 'reflexivo', 1),
(236, 1, 'teorico', 1),
(237, 1, 'reflexivo', 1),
(238, 1, 'teorico', 1),
(239, 1, 'activo', 1),
(240, 1, 'pragmatico', 0),
(241, 1, 'reflexivo', 1),
(242, 1, 'reflexivo', 1),
(243, 1, 'teorico', 1),
(244, 1, 'pragmatico', 1),
(245, 1, 'pragmatico', 1),
(246, 1, 'activo', 0),
(247, 1, 'activo', 1),
(248, 1, 'pragmatico', 1),
(249, 1, 'activo', 0),
(250, 1, 'teorico', 1),
(251, 1, 'reflexivo', 1),
(252, 1, 'teorico', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `tipo_usuario` enum('alumno','psicologo','jefe de area') NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `nombre_completo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `tipo_usuario`, `correo`, `contrasena`, `nombre_completo`) VALUES
(1, 'alumno', 'Cesarin@gmail.com', '12345', 'cesar ivan torres manriquez'),
(2, 'alumno', 'Cesarin@gmail.com', '123', 'cesar ivan torres manriquez'),
(3, 'psicologo', 'erick@gmail.com', '123', 'erick morales catalan'),
(4, 'alumno', 'rivera@gmail.com', '123', 'Fernando Rivera Herrera'),
(5, 'alumno', 'morales@gmail.com', '123', 'morales catalan'),
(6, 'jefe de area', 'emiliano@gmail.com', '123', 'Emiliano Valdovinos'),
(7, 'alumno', 'denys@gmail.com', '123', 'Jose Denys Hernandez Espinoza'),
(8, 'alumno', 'alumno@gmail.com', '1234', 'JOSE DENYS HERNANDEZ ESPINOZA'),
(9, 'psicologo', 'psicologo@gmail.com', '1234', 'JOSE DENYS HERNANDEZ ESPINOZA'),
(10, 'jefe de area', 'jefe@gmail.com', '1234', 'JOSE DENYS HERNANDEZ ESPINOZA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `test36`
--
ALTER TABLE `test36`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `test40`
--
ALTER TABLE `test40`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `test80`
--
ALTER TABLE `test80`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `test36`
--
ALTER TABLE `test36`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT de la tabla `test40`
--
ALTER TABLE `test40`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT de la tabla `test80`
--
ALTER TABLE `test80`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=253;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `test40`
--
ALTER TABLE `test40`
  ADD CONSTRAINT `test40_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

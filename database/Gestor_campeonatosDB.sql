-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-02-2019 a las 10:57:07
-- Versión del servidor: 5.6.37
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Gestor_campeonatosDB`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campeonato`
--

CREATE TABLE IF NOT EXISTS `campeonato` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `place` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `campeonato`
--

INSERT INTO `campeonato` (`id`, `name`, `place`, `date`, `type`, `updated_at`, `created_at`) VALUES
(1, 'Open Ciudad del Sol', 'Lorca', '2020-05-06', 'Kumite', '2019-02-04 09:11:28', '2019-02-04 09:11:28'),
(4, 'Spanish open', 'Sabadell', '2019-01-02', 'Kata y kumite', '2019-02-04 09:40:10', '2019-02-04 09:40:10'),
(5, 'Campeonato prueba', 'Una ciudad', '2017-01-31', 'Kata y kumite', '2019-02-07 10:08:14', '2019-02-07 10:08:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competidores`
--

CREATE TABLE IF NOT EXISTS `competidores` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `belt` varchar(15) NOT NULL,
  `weight` int(11) DEFAULT NULL,
  `dojo` varchar(60) NOT NULL,
  `round` int(11) DEFAULT NULL,
  `gender` varchar(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_campeonato` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `competidores`
--

INSERT INTO `competidores` (`id`, `name`, `type`, `age`, `belt`, `weight`, `dojo`, `round`, `gender`, `updated_at`, `created_at`, `id_campeonato`) VALUES
(19, 'Prueba', 'Kumite', 42, '10º Kyu', 986, 'Dojoj qjqb', NULL, 'Masculino', '2019-02-05 12:45:53', '2019-02-05 12:45:53', 4),
(20, 'Prueba', 'Kumite', 42, '10º Kyu', 986, 'Dojoj qjqb', NULL, 'Masculino', '2019-02-05 13:14:12', '2019-02-05 13:14:12', 4),
(22, 'gfd', 'Kumite', 3, '10º Kyu', 3, 'fd', NULL, 'Masculino', '2019-02-06 11:30:22', '2019-02-06 11:30:22', 4),
(23, 'Participante de prueba', 'Kumite', 56, '10º Kyu', 6, 'dojo aleatorio', NULL, 'Masculino', '2019-02-07 10:18:03', '2019-02-07 10:18:03', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Francisco', 'franciscoruiz5398@gmail.com', NULL, '$2y$10$FwG8BE7Xt7pnVvLtUmbtbu8dvs.HzGRy3x9hoYBCJ4eE9pJx80kPm', NULL, '2019-01-31 13:51:39', '2019-01-31 13:51:39'),
(2, 'Silvia Alcaraz', 'silviasar99@gmail.com', NULL, '$2y$10$px9s..H4JuO6LXQa8D.A8e0FyHiq78f7/pyiUVy3Zcvju7mwS67JC', NULL, '2019-02-03 19:06:34', '2019-02-03 19:06:34');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `campeonato`
--
ALTER TABLE `campeonato`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `competidores`
--
ALTER TABLE `competidores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `campeonato`
--
ALTER TABLE `campeonato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `competidores`
--
ALTER TABLE `competidores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

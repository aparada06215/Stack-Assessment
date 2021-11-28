-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2021 a las 16:00:31
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `stackassessmentdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answers`
--

CREATE TABLE `answers` (
  `Id` int(11) NOT NULL,
  `Answer` varchar(400) NOT NULL,
  `Correct` tinyint(1) NOT NULL,
  `IdQuestion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `Id` int(11) NOT NULL,
  `Question` varchar(400) NOT NULL,
  `IdSection` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Id` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`Id`, `Name`) VALUES
(2, 'Administrador'),
(1, 'Estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `section`
--

CREATE TABLE `section` (
  `Id` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL,
  `IdSubject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `Id` int(11) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `Lastname` varchar(70) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `IdUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`Id`, `Name`, `Lastname`, `Email`, `IdUsuario`) VALUES
(1, 'Kaherine', 'Romero', 'dromero40801@universidadean.edu.co', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subjects`
--

CREATE TABLE `subjects` (
  `Id` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE `test` (
  `Id` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `LimitTime` time NOT NULL,
  `IdSection` int(11) NOT NULL,
  `TotalQuestions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testuser`
--

CREATE TABLE `testuser` (
  `Id` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `IdTest` int(11) NOT NULL,
  `TotalCorrectsAnswer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(150) NOT NULL,
  `Password` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `counter` (
  `visitors` int(11) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `counter` (`visitors`) VALUES
(1);

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `Password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'katherine.Romero', 'katherine.Romero@ean.edu.co', '$2y$10$98l1BUsoOjNnnxs.O2GygOoT4UBeiDe58BdZqWyjP2hpinox6mBIm', '2021-11-22 22:17:12', '2021-11-22 22:17:51', '0000-00-00 00:00:00'),
(3, 'katheTest1', 'kathe@kathe.com', '$2y$10$98l1BUsoOjNnnxs.O2GygOoT4UBeiDe58BdZqWyjP2hpinox6mBIm', '2021-11-24 18:39:47', '2021-11-24 18:39:47', NULL),
(7, 'asdfadsf', 'katddhe@kathe.com', '$2y$10$98l1BUsoOjNnnxs.O2GygOoT4UBeiDe58BdZqWyjP2hpinox6mBIm', '2021-11-24 22:46:49', '2021-11-24 22:46:49', NULL),
(8, '123', '123@123.cs', '$2y$10$98l1BUsoOjNnnxs.O2GygOoT4UBeiDe58BdZqWyjP2hpinox6mBIm', '2021-11-24 22:48:04', '2021-11-24 22:48:04', NULL),
(9, 'adfadsf', 'asdfarwer@werasd.co', '$2y$10$98l1BUsoOjNnnxs.O2GygOoT4UBeiDe58BdZqWyjP2hpinox6mBIm', '2021-11-24 22:51:24', '2021-11-24 22:51:24', NULL),
(10, 'adfadsf34', 'asdfa34rwer@werasd.co', '$2y$10$98l1BUsoOjNnnxs.O2GygOoT4UBeiDe58BdZqWyjP2hpinox6mBIm', '2021-11-24 22:51:49', '2021-11-24 22:51:49', NULL),
(11, 'aaabbb', 'aaabbb@aaabbb.com', '$2y$10$98l1BUsoOjNnnxs.O2GygOoT4UBeiDe58BdZqWyjP2hpinox6mBIm', '2021-11-25 19:05:27', '2021-11-25 19:05:27', NULL),
(12, 'katheTest2', 'kathe2@kathe.com', '$2y$10$1MSI4fHR3sLDpjHrSG7z0OXIFGIPyDV6NErj6pc8kgeoERhdIZBlG', '2021-11-27 00:04:37', '2021-11-27 00:04:37', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ix_Question` (`IdQuestion`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ix_Section` (`IdSection`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `RolNameUnique` (`Name`);

--
-- Indices de la tabla `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `ux_Name_Section` (`Name`),
  ADD KEY `ix_Subject` (`IdSubject`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `EmailUnique` (`Email`),
  ADD KEY `IdUsuario` (`IdUsuario`);

--
-- Indices de la tabla `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `ux_Name_Subjects` (`Name`);

--
-- Indices de la tabla `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ix_Section` (`IdSection`);

--
-- Indices de la tabla `testuser`
--
ALTER TABLE `testuser`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ix_user_Test` (`IdUser`,`IdTest`),
  ADD KEY `IdTest` (`IdTest`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UserUnique` (`name`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `answers`
--
ALTER TABLE `answers`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `section`
--
ALTER TABLE `section`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `subjects`
--
ALTER TABLE `subjects`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `test`
--
ALTER TABLE `test`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `testuser`
--
ALTER TABLE `testuser`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`IdQuestion`) REFERENCES `questions` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`IdSection`) REFERENCES `section` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`IdSubject`) REFERENCES `subjects` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`IdUsuario`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`IdSection`) REFERENCES `section` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `testuser`
--
ALTER TABLE `testuser`
  ADD CONSTRAINT `testuser_ibfk_1` FOREIGN KEY (`IdUser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `testuser_ibfk_2` FOREIGN KEY (`IdTest`) REFERENCES `test` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

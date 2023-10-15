-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2023 a las 17:43:17
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `api`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_services`
--

CREATE TABLE `clientes_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `servicio_id` bigint(20) UNSIGNED NOT NULL,
  `asiento` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(57, '2014_10_12_000000_create_users_table', 1),
(58, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(59, '2019_08_19_000000_create_failed_jobs_table', 1),
(60, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(61, '2023_10_06_171936_create_clientes_table', 1),
(62, '2023_10_06_171950_create_servicios_table', 1),
(63, '2023_10_06_172220_create_clientes_services_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'auth_token', '444e50156aa0a0d227a9cec9ffbd6911d2a9b46ca6670594b2468cb8df10f29c', '[\"*\"]', NULL, NULL, '2023-10-12 02:41:01', '2023-10-12 02:41:01'),
(2, 'App\\Models\\User', 1, 'auth_token', '8fcf427733f9dbbfad5f5b8c27bfc3165e8e380a1173313d61828142c5635331', '[\"*\"]', NULL, NULL, '2023-10-12 02:41:19', '2023-10-12 02:41:19'),
(3, 'App\\Models\\User', 2, 'auth_token', 'ed4efffa00870e4e68a5a451dd5912372b5a6619b1876a30a7e0109626aea6b8', '[\"*\"]', NULL, NULL, '2023-10-12 02:51:44', '2023-10-12 02:51:44'),
(4, 'App\\Models\\User', 2, 'auth_token', '4a8aeae9780a5f272a762a448e6adf1ca6f6753a2dfc4a3243fb02e1cdd4510d', '[\"*\"]', NULL, NULL, '2023-10-12 02:51:51', '2023-10-12 02:51:51'),
(5, 'App\\Models\\User', 1, 'auth_token', 'ed66c622a18eb97e955d75dff0d37f3fde19d845c77a02bffe733288a28e07a8', '[\"*\"]', NULL, NULL, '2023-10-12 17:30:35', '2023-10-12 17:30:35'),
(6, 'App\\Models\\User', 3, 'auth_token', 'fe1feaccdad8febdb65a8a6c040bbdb2e87f905ad92ac96daecc41ea8d6ed080', '[\"*\"]', NULL, NULL, '2023-10-12 22:24:01', '2023-10-12 22:24:01'),
(7, 'App\\Models\\User', 3, 'auth_token', '8ff4c65ded9310aa6e0261621362c757556d88257634db96141dd74e9a82c8c1', '[\"*\"]', NULL, NULL, '2023-10-12 22:24:10', '2023-10-12 22:24:10'),
(8, 'App\\Models\\User', 1, 'auth_token', '510741f17072d47a85f869d7f6f66e8c2df483e7c2362470f7f4eb2cbb21dbe2', '[\"*\"]', NULL, NULL, '2023-10-12 22:26:51', '2023-10-12 22:26:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `clima` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `horario` datetime NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `costo` int(11) NOT NULL,
  `descuento` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `ubicacion`, `clima`, `descripcion`, `horario`, `imagen`, `costo`, `descuento`, `created_at`, `updated_at`) VALUES
(1, 'Huanuco', 'Perú', 'soleado', 'Hola', '2023-10-13 18:44:00', '04a51572-1fca-4468-b74c-640dbdfec72d.jpg', 100, 40, '2023-10-12 02:43:24', '2023-10-12 22:27:24'),
(2, 'Ica', 'Perú', 'soleado', 'CIUDAD DEL ETERNO SOL', '2023-10-13 18:45:00', '1dd4a7a0-44a1-457e-9b6e-811c69be1b14.jpg', 200, 20, '2023-10-12 02:44:22', '2023-10-12 02:44:22'),
(3, 'Lima', 'Perú', 'soleado', 'CIUDAD DE LOS REYES', '2023-10-14 18:47:00', '66678cf0-7848-462e-9d18-ebe9e9ba06d0.jpg', 200, 10, '2023-10-12 02:45:50', '2023-10-12 02:45:50'),
(4, 'Tingo Maria', 'Perú', 'soleado', 'CIUDAD DE LA BELLA DURMIENTE', '2023-10-14 18:49:00', 'f18ca395-20e7-4640-9ad5-1096b3eb0bc4.jpg', 40, 10, '2023-10-12 02:47:55', '2023-10-12 02:47:55'),
(5, 'Cuzco', 'Perú', 'soleado', 'MARAVILLA DEL MUNDO', '2023-10-13 18:51:00', '645b07db-7083-46c6-8efd-c8bec44f08cb.jpg', 300, 10, '2023-10-12 02:49:13', '2023-10-12 02:49:13'),
(6, 'Arequipa', 'Perú', 'soleado', 'CIUDAD BLANCA', '2023-10-14 18:52:00', '3b61054d-2f49-4144-9da9-a412176014c4.png', 200, 10, '2023-10-12 02:51:01', '2023-10-12 02:51:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `apellidos`, `telefono`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jhon', 'Rosales', '916236760', 'Rosales@gmail.com', NULL, '$2y$10$rl44UIT8SItJ9AnRHxhsFuZatEnJEIYLCgDblajDBzK5tB/ywtvki', NULL, '2023-10-12 02:41:01', '2023-10-12 02:41:01'),
(2, 'Jhordi', 'Rosales', '916236761', 'Jhon@gmail.com', NULL, '$2y$10$yXJBWbmpQ39oKMJ2/8W9be1tijrGOhN2tGS01gQD6VmA22Ezk8ocK', NULL, '2023-10-12 02:51:44', '2023-10-12 02:51:44'),
(3, 'Jhordi2', 'Rosales2', '9162367612', 'yhordiyhom65@gmail.com', NULL, '$2y$10$S00aMuEMxT1qHkCDLK9VO.bactrnGAxvKjBqIMmy5QwEAJTvv5MN2', NULL, '2023-10-12 22:24:01', '2023-10-12 22:24:01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clientes_telefono_unique` (`telefono`),
  ADD UNIQUE KEY `clientes_email_unique` (`email`);

--
-- Indices de la tabla `clientes_services`
--
ALTER TABLE `clientes_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clientes_services_user_id_foreign` (`user_id`),
  ADD KEY `clientes_services_servicio_id_foreign` (`servicio_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_telefono_unique` (`telefono`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes_services`
--
ALTER TABLE `clientes_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes_services`
--
ALTER TABLE `clientes_services`
  ADD CONSTRAINT `clientes_services_servicio_id_foreign` FOREIGN KEY (`servicio_id`) REFERENCES `servicios` (`id`),
  ADD CONSTRAINT `clientes_services_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

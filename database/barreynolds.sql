-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql
-- Tiempo de generación: 13-01-2023 a las 13:04:41
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `barreynolds`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_mesa` int UNSIGNED NOT NULL,
  `hora` timestamp NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `mesas_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_tickets`
--

CREATE TABLE `linea_tickets` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `producto_id` int UNSIGNED NOT NULL,
  `cantidad` int NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cuentas_id` bigint UNSIGNED NOT NULL,
  `productos_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesas`
--

CREATE TABLE `mesas` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1),
(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(25, '2023_01_11_125012_create_productos_table', 1),
(26, '2023_01_11_125056_create_mesas_table', 1),
(27, '2023_01_11_125126_create_cuentas_table', 1),
(28, '2023_01_11_125150_create_linea_tickets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponibilidad` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `created_at`, `updated_at`, `precio`, `nombre`, `categoria`, `disponibilidad`) VALUES
(1, NULL, NULL, '2.00', 'COCA COLA', 'REFRESCOS', 50),
(2, NULL, NULL, '2.00', 'COCA COLA LIGHT', 'REFRESCOS', 50),
(3, NULL, NULL, '2.00', 'COCA COLA ZERO', 'REFRESCOS', 50),
(4, NULL, NULL, '2.50', 'FANTA NARANJA ', 'REFRESCOS', 50),
(5, NULL, NULL, '2.50', 'FANTA LIMÓN ', 'REFRESCOS', 50),
(6, NULL, NULL, '2.00', 'AGUA(1L)', 'REFRESCOS', 50),
(7, NULL, NULL, '2.30', 'AQUARIUS NARANJA', 'REFRESCOS', 50),
(8, NULL, NULL, '2.30', 'AQUARIUS LIMÓN', 'REFRESCOS', 50),
(9, NULL, NULL, '2.50', 'VICHY', 'REFRESCOS', 50),
(10, NULL, NULL, '2.30', 'NESTAE', 'REFRESCOS', 50),
(11, NULL, NULL, '2.50', 'RED BULL', 'REFRESCOS', 50),
(12, NULL, NULL, '2.20', 'SCHWEPPES', 'REFRESCOS', 50),
(13, NULL, NULL, '2.50', 'BITTER KAS', 'REFRESCOS', 50),
(14, NULL, NULL, '2.50', 'SEVEN UP', 'REFRESCOS', 50),
(15, NULL, NULL, '2.50', 'SPRITE', 'REFRESCOS', 50),
(16, NULL, NULL, '2.80', 'Jarra o Cañon con Limon Radler', 'CERVEZA', 50),
(17, NULL, NULL, '2.80', 'Jarra Tostada Export', 'CERVEZA', 50),
(18, NULL, NULL, '2.00', 'Caña Tostada', 'CERVEZA', 50),
(19, NULL, NULL, '1.80', 'Caña con Limon', 'CERVEZA', 50),
(20, NULL, NULL, '2.30', 'Estrella Galicia', 'CERVEZA', 50),
(21, NULL, NULL, '1.30', 'Zurito Tostada', 'CERVEZA', 50),
(22, NULL, NULL, '1.20', 'Mini o Zurito', 'CERVEZA', 50),
(23, NULL, NULL, '2.50', 'Jarra', 'CERVEZA', 50),
(24, NULL, NULL, '2.50', 'Cañon', 'CERVEZA', 50),
(25, NULL, NULL, '1.80', 'Caña', 'CERVEZA', 50),
(26, NULL, NULL, '12.00', 'El Coto', 'VINO', 30),
(27, NULL, NULL, '12.50', 'Berona', 'VINO', 30),
(28, NULL, NULL, '12.50', 'Rioja Brodon', 'VINO', 30),
(29, NULL, NULL, '12.50', 'Viña Salceda', 'VINO', 30),
(30, NULL, NULL, '12.00', 'Marques de Cáceres', 'VINO', 30),
(31, NULL, NULL, '9.00', 'Príncipe de Viana', 'VINO', 30),
(32, NULL, NULL, '12.00', 'Inurrieta 400', 'VINO', 30),
(33, NULL, NULL, '12.00', 'Albret', 'VINO', 30),
(34, NULL, NULL, '12.50', 'Pago de Cirsus', 'VINO', 30),
(35, NULL, NULL, '14.00', 'Calamares a la andaluza', 'RACIONES', 50),
(36, NULL, NULL, '14.00', 'Ensalada de pimientos rojos asados', 'RACIONES', 50),
(37, NULL, NULL, '20.00', 'Jamón Ibérico o lomo ibérico', 'RACIONES', 50),
(38, NULL, NULL, '15.50', 'Mollejas de cordero al ajo', 'RACIONES', 50),
(39, NULL, NULL, '3.00', 'Montado de chorizo de olla', 'RACIONES', 50),
(40, NULL, NULL, '2.80', 'Montado de lomo adobado a la plancha', 'RACIONES', 50),
(41, NULL, NULL, '3.50', 'Montado de lomo de olla', 'RACIONES', 50),
(42, NULL, NULL, '14.00', 'Milhoja de morcilla y calabaza a la plancha', 'RACIONES', 50),
(43, NULL, NULL, '12.00', 'Oreja a la plancha', 'RACIONES', 50),
(44, NULL, NULL, '6.00', 'Patatas bravas o mixtas', 'RACIONES', 50),
(45, NULL, NULL, '22.00', 'Entrecot Troceado', 'COMIDA', 50),
(46, NULL, NULL, '25.00', 'Paletilla de Lechal', 'COMIDA', 50),
(47, NULL, NULL, '18.00', 'Chuletillas de Lechal', 'COMIDA', 50),
(48, NULL, NULL, '25.00', 'Cachopo Asturiano', 'COMIDA', 50),
(49, NULL, NULL, '28.00', 'Pulpito de Ría a la Gallega', 'COMIDA', 50),
(50, NULL, NULL, '22.00', 'Pulpo a la Gallega', 'COMIDA', 50),
(51, NULL, NULL, '25.00', 'Pulpo a la Piedra', 'COMIDA', 50),
(52, NULL, NULL, '13.00', 'Sepia Fresca', 'COMIDA', 50),
(53, NULL, NULL, '13.00', 'Calamares a la Romana', 'COMIDA', 50),
(54, NULL, NULL, '10.00', 'Boquerones Fritos', 'COMIDA', 50),
(55, NULL, NULL, '14.00', 'Chipirones Encabollados o Plancha', 'COMIDA', 50),
(56, NULL, NULL, '16.00', 'Chopitos Fritos', 'COMIDA', 50),
(57, NULL, NULL, '22.00', 'Calamar de Pota a la Plancha', 'COMIDA', 50),
(58, NULL, NULL, '8.00', 'Ensalada Mixta', 'COMIDA', 50),
(59, NULL, NULL, '15.00', 'Ensalada de Pimientos con Ventresca', 'COMIDA', 50),
(60, NULL, NULL, '15.00', 'Ensalada de Tomate con Ventresca', 'COMIDA', 50),
(61, NULL, NULL, '8.00', 'Pimientos del Padrón', 'COMIDA', 50),
(62, NULL, NULL, '14.00', 'Parrillada de Verduras', 'COMIDA', 50),
(63, NULL, NULL, '14.00', 'Ensalada de Burrata', 'COMIDA', 50),
(64, NULL, NULL, '21.00', 'Alcachofas Naturales con Jamón', 'COMIDA', 50);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cuentas_mesas_id_foreign` (`mesas_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `linea_tickets`
--
ALTER TABLE `linea_tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `linea_tickets_cuentas_id_foreign` (`cuentas_id`),
  ADD KEY `linea_tickets_productos_id_foreign` (`productos_id`);

--
-- Indices de la tabla `mesas`
--
ALTER TABLE `mesas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `linea_tickets`
--
ALTER TABLE `linea_tickets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mesas`
--
ALTER TABLE `mesas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD CONSTRAINT `cuentas_mesas_id_foreign` FOREIGN KEY (`mesas_id`) REFERENCES `mesas` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `linea_tickets`
--
ALTER TABLE `linea_tickets`
  ADD CONSTRAINT `linea_tickets_cuentas_id_foreign` FOREIGN KEY (`cuentas_id`) REFERENCES `cuentas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `linea_tickets_productos_id_foreign` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

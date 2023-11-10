-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Ноя 10 2023 г., 16:44
-- Версия сервера: 8.0.35-0ubuntu0.20.04.1
-- Версия PHP: 7.4.3-4ubuntu2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hotel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Apartamento`
--

CREATE TABLE `Apartamento` (
  `ID` int NOT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `DireccionPostal` varchar(255) DEFAULT NULL,
  `Latitud` decimal(10,8) DEFAULT NULL,
  `Longitud` decimal(11,8) DEFAULT NULL,
  `Descripcion` text,
  `MetrosCuadrados` int DEFAULT NULL,
  `NumeroHabitaciones` int DEFAULT NULL,
  `PrecioDiaTemporadaBaja` decimal(10,2) DEFAULT NULL,
  `PrecioDiaTemporadaAlta` decimal(10,2) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `addedBy` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Apartamento`
--

INSERT INTO `Apartamento` (`ID`, `Titulo`, `DireccionPostal`, `Latitud`, `Longitud`, `Descripcion`, `MetrosCuadrados`, `NumeroHabitaciones`, `PrecioDiaTemporadaBaja`, `PrecioDiaTemporadaAlta`, `img`, `addedBy`) VALUES
(1, 'Apartamento en la playa', '123 Calle de la Playa', '41.12345600', '2.34567800', 'Hermoso apartamento frente al mar', 80, 2, '231.00', '150.00', 'img/1.webp', 8),
(2, 'Apartamento céntrico', '456 Calle del Centro', '41.98765400', '2.76543200', 'Cómodo apartamento en el corazón de la ciudad', 60, 1, '321.00', '120.00', 'img/2.webp', 9),
(3, 'Hi Fi Apartment', 'Cyberpank 321231', '30.00000000', '40.00000000', 'Lorem Ispum', 40, 4, '340.00', '231.00', 'img/3.webp', 8),
(4, 'Classic Apartment', 'Calle Bracelona 32', '33.00000000', '23.00000000', 'A well-appointed hotel room exudes comfort and elegance. It features a plush king-sized bed with premium linens, a spacious and tastefully decorated en-suite bathroom with a luxurious bathtub and shower, and a balcony with a picturesque view. The room offers modern amenities, including a large flat-screen TV, a work desk, and complimentary high-speed Wi-Fi. Impeccable cleanliness and attentive room service complete the perfect hotel experience.', 32, 3, '140.00', '150.00', 'img/4.webp', 9),
(5, 'Beautiful Villa', '123 Main St, City, Country', '37.12345600', '-122.98765400', 'A luxurious villa with a stunning view.', 250, 5, '200.00', '400.00', 'img/5.webp', 8),
(6, 'Cozy Apartment', '456 Elm St, City, Country', '37.23456700', '-122.87654300', 'A comfortable apartment in the heart of the city.', 80, 2, '75.00', '150.00', 'img/6.jpeg', 9),
(7, 'Seaside Cottage', '789 Ocean Dr, City, Country', '37.34567800', '-122.76543200', 'A charming cottage by the sea with a private beach.', 120, 3, '120.00', '240.00', 'img/7.jpeg', 8),
(8, 'Mountain Chalet', '101 Forest Rd, City, Country', '37.45678900', '-122.65432100', 'A rustic chalet nestled in the mountains.', 180, 4, '160.00', '320.00', 'img/8.jpeg', 9),
(9, 'Urban Loft', '210 Downtown Ave, City, Country', '37.56789000', '-122.54321000', 'A modern loft in the heart of the city.', 90, 1, '90.00', '180.00', 'img/9.jpeg', 8),
(10, 'Ski Resort Cabin', '321 Snow Rd, City, Country', '37.67890100', '-122.43210900', 'A cozy cabin near the ski slopes.', 150, 3, '180.00', '360.00', 'img/10.jpeg', 9),
(11, 'Historic Mansion', '555 Heritage Ln, City, Country', '37.78901200', '-122.32109800', 'An elegant mansion with a rich history.', 400, 8, '400.00', '800.00', 'img/11.jpeg', 9),
(12, 'Lakefront Retreat', '777 Lakeside Dr, City, Country', '37.89012300', '-122.21098700', 'A peaceful retreat by the lake with a private dock.', 200, 4, '220.00', '440.00', 'img/12.jpeg', 8),
(13, 'Desert Oasis', '999 Sand Dune Rd, City, Country', '38.01234500', '-122.09876500', 'An oasis in the desert with a refreshing pool.', 160, 3, '150.00', '300.00', 'img/13.jpeg', 9),
(14, 'Rural Farmhouse', '222 Country Rd, City, Country', '38.12345600', '-122.98765400', 'A charming farmhouse in the countryside.', 120, 2, '100.00', '200.00', 'img/14.jpeg', 8),
(15, 'Beachfront Bungalow', '444 Shoreline Ave, City, Country', '38.23456700', '-122.87654300', 'A cozy bungalow right on the beach.', 80, 1, '80.00', '160.00', 'img/15.jpeg', 9),
(16, 'Urban Oasis', '101 Main St, City, Country', '37.67890100', '40.00000000', 'A charming cottage  the heart of the city.', 200, 4, '232.00', '324.00', 'img/16.jpeg', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `Reserva`
--

CREATE TABLE `Reserva` (
  `ID` int NOT NULL,
  `FechaEntrada` date DEFAULT NULL,
  `FechaSalida` date DEFAULT NULL,
  `PrecioTotal` decimal(10,2) DEFAULT NULL,
  `FechaReserva` date DEFAULT NULL,
  `IDUsuario` int DEFAULT NULL,
  `IDApartamento` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Reserva`
--

INSERT INTO `Reserva` (`ID`, `FechaEntrada`, `FechaSalida`, `PrecioTotal`, `FechaReserva`, `IDUsuario`, `IDApartamento`) VALUES
(11, '2023-11-08', '2023-11-22', '3234.00', '2023-11-09', 9, 3),
(14, '2023-11-08', '2023-11-30', '17600.00', '2023-11-10', 9, 11),
(15, '2023-11-15', '2023-11-29', '2100.00', '2023-11-10', 9, 4),
(16, '2023-11-07', '2023-11-28', '6804.00', '2023-11-10', 9, 16),
(17, '2023-11-16', '2023-11-22', '720.00', '2023-11-10', 12, 2),
(18, '2023-11-01', '2023-11-22', '3150.00', '2023-11-10', 12, 1),
(21, '2023-12-21', '2023-12-28', '840.00', '2023-11-10', 12, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `Temporada`
--

CREATE TABLE `Temporada` (
  `ID` int NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `FechaInicio` date DEFAULT NULL,
  `FechaFin` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `Usuario`
--

CREATE TABLE `Usuario` (
  `ID` int NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Apellidos` varchar(255) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `CorreoElectronico` varchar(255) DEFAULT NULL,
  `Rol` enum('cliente','gestor','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Direccion2` varchar(255) DEFAULT NULL,
  `Ciudad` varchar(255) DEFAULT NULL,
  `CodigoPostal` varchar(10) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Usuario`
--

INSERT INTO `Usuario` (`ID`, `Nombre`, `Apellidos`, `Telefono`, `CorreoElectronico`, `Rol`, `Direccion`, `Direccion2`, `Ciudad`, `CodigoPostal`, `login`, `password`) VALUES
(9, 'Anton', 'Stamov', '123456789', 'stamovanton233@gmail.com', 'admin', '1234 Aaaa', '5b ', 'Roses', '17480', 'remmko2', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918'),
(12, 'Anatoliy', 'Artamonov', '+79670167085', 'tolyanboy2005@gmail.com', 'cliente', '1234 main st', 'Apartament 2', 'Балашиха г', '143980', 'remmko', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Apartamento`
--
ALTER TABLE `Apartamento`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `Reserva`
--
ALTER TABLE `Reserva`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IDUsuario` (`IDUsuario`),
  ADD KEY `IDApartamento` (`IDApartamento`);

--
-- Индексы таблицы `Temporada`
--
ALTER TABLE `Temporada`
  ADD PRIMARY KEY (`ID`);

--
-- Индексы таблицы `Usuario`
--
ALTER TABLE `Usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Apartamento`
--
ALTER TABLE `Apartamento`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT для таблицы `Reserva`
--
ALTER TABLE `Reserva`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `Temporada`
--
ALTER TABLE `Temporada`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `Usuario`
--
ALTER TABLE `Usuario`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Reserva`
--
ALTER TABLE `Reserva`
  ADD CONSTRAINT `Reserva_ibfk_1` FOREIGN KEY (`IDUsuario`) REFERENCES `Usuario` (`ID`),
  ADD CONSTRAINT `Reserva_ibfk_2` FOREIGN KEY (`IDApartamento`) REFERENCES `Apartamento` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

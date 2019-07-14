-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Cze 2019, 17:19
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11

/* SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; */
AUTOCOMMIT := 0;
START TRANSACTION;
time_zone := "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE categories (
  id int NOT NULL,
  Name varchar(128) CHARACTER SET utf8mb4 NOT NULL,
  updated_at timestamp(0) DEFAULT CURRENT_TIMESTAMP,
  created_at timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP
)  ;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO categories (id, Name, updated_at, created_at) VALUES
(5, 'Stoły', '2019-06-17 11:43:22', '2019-06-17 11:43:22'),
(6, 'Lampy', '2019-06-17 11:43:28', '2019-06-17 11:43:28'),
(7, 'Krzesła', '2019-06-17 11:43:33', '2019-06-17 11:43:33');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `images`
--

CREATE TABLE images (
  id int NOT NULL,
  path varchar(256) NOT NULL,
  ProductID int NOT NULL
)  ;

--
-- Zrzut danych tabeli `images`
--

INSERT INTO images (id, path, ProductID) VALUES
(4, 'public/storage/images/aa_1560758750.jpg', 1),
(5, 'public/storage/images/aaa_1560758750.jpg', 1),
(6, 'public/storage/images/aaa_1560758758.jpg', 26),
(7, 'public/storage/images/aa_1560758765.jpg', 27),
(8, 'public/storage/images/a_1560758774.jpg', 28),
(9, 'public/storage/images/aaaa_1560758774.jpg', 28),
(10, 'public/storage/images/aaaaaaa_1560758774.jpg', 28),
(11, 'public/storage/images/a_1560758781.jpg', 29),
(12, 'public/storage/images/aaaaaaa_1560758781.jpg', 29),
(13, 'public/storage/images/aaaa_1560758791.jpg', 30),
(14, 'public/storage/images/aaaaaaa_1560758791.jpg', 30),
(15, 'public/storage/images/aaaaaaa_1560758796.jpg', 31),
(16, 'public/storage/images/aaaaaaa_1560758801.jpg', 32),
(17, 'public/storage/images/c_1560758808.jpg', 33),
(18, 'public/storage/images/cc_1560758808.jpg', 33),
(19, 'public/storage/images/ccc_1560758808.jpg', 33),
(20, 'public/storage/images/c_1560758814.jpg', 34),
(21, 'public/storage/images/ccc_1560758814.jpg', 34),
(22, 'public/storage/images/c_1560758821.jpg', 35),
(23, 'public/storage/images/cc_1560758821.jpg', 35),
(24, 'public/storage/images/cc_1560758828.jpg', 36),
(25, 'public/storage/images/ccc_1560758828.jpg', 36),
(26, 'public/storage/images/cc_1560758836.jpg', 37),
(39, 'public/storage/images/aaa_1560764307.jpg', 41),
(40, 'public/storage/images/c_1560764307.jpg', 41),
(41, 'public/storage/images/cc_1560764307.jpg', 41),
(42, 'public/storage/images/aaaaaaa_1560764621.jpg', 42),
(43, 'public/storage/images/aaaaaaa_1560764628.jpg', 43),
(44, 'public/storage/images/aa_1560764664.jpg', 44),
(45, 'public/storage/images/aaa_1560764664.jpg', 44),
(46, 'public/storage/images/aa_1560764749.jpg', 45),
(47, 'public/storage/images/aaa_1560764749.jpg', 45),
(48, 'public/storage/imagesc_1560764830.jpg', 46),
(49, 'public/storage/imagescc_1560764830.jpg', 46),
(50, 'public/storage/imagesccc_1560764830.jpg', 46),
(51, 'public/storage/images/a_1560764875.jpg', 47),
(54, 'public/storage/images/a_1560765548.jpg', 48),
(55, 'public/storage/images/aaaa_1560765548.jpg', 48),
(56, 'public/storage/images/aaaaaaa_1560765548.jpg', 48),
(59, 'public/storage/images/c_1560770785.jpg', 47),
(60, 'public/storage/images/cc_1560770785.jpg', 47);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE migrations (
  id int CHECK (id > 0) NOT NULL,
  migration varchar(191) NOT NULL,
  batch int NOT NULL
)  ;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO migrations (id, migration, batch) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE password_resets (
  email varchar(191) NOT NULL,
  token varchar(191) NOT NULL,
  created_at timestamp(0) NULL DEFAULT NULL
)  ;

--
-- Zrzut danych tabeli `password_resets`
--

INSERT INTO password_resets (email, token, created_at) VALUES
('xdawidoskipl@gmail.com', '$2y$10$H/qBS0Lfh7SvLoR2UzQP3.HKbtgf4Z/PYnI44bpfCo3XFJOszhBoi', '2019-06-15 07:45:07');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE posts (
  Id int NOT NULL,
  Nazwa varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  Description text CHARACTER SET utf8mb4 NOT NULL,
  Category int NOT NULL,
  Oncarousel smallint NOT NULL DEFAULT '0'
)  ;

--
-- Zrzut danych tabeli `posts`
--

INSERT INTO posts (Id, Nazwa, Description, Category, Oncarousel) VALUES
(47, 'aaaaaaa', 'aaaaaaaaaaa', 5, 1),
(48, 'vvvvvvvv', 'vvvvvvvvv', 5, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE users (
  id bigint CHECK (id > 0) NOT NULL,
  name varchar(191) NOT NULL,
  email varchar(191) NOT NULL,
  email_verified_at timestamp(0) NULL DEFAULT NULL,
  password varchar(191) NOT NULL,
  remember_token varchar(100) DEFAULT NULL,
  created_at timestamp(0) NULL DEFAULT NULL,
  updated_at timestamp(0) NULL DEFAULT NULL
)  ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES
(2, 'test', 'test@gmial.com', NULL, '$2y$10$xYDK0YMtXi9X/1wel4kAkOxk7lhgSuJVClCQRrxYNKWqCA4oVGMEm', NULL, '2019-06-17 13:17:03', '2019-06-17 13:17:03');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE categories
  ADD PRIMARY KEY (id);

--
-- Indeksy dla tabeli `images`
--
ALTER TABLE images
  ADD PRIMARY KEY (id);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE migrations
  ADD PRIMARY KEY (id);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE password_resets
  ADD CREATE INDEX password_resets_email_index ON password_resets (email);

--
-- Indeksy dla tabeli `posts`
--
ALTER TABLE posts
  ADD PRIMARY KEY (Id),
  ADD KEY `Category` (Category);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE users
  ADD PRIMARY KEY (id),
  ADD UNIQUE KEY `users_email_unique` (email);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE categories
  MODIFY id cast(11 as int) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `images`
--
ALTER TABLE images
  MODIFY id cast(11 as int) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE migrations
  MODIFY id cast(10 as int) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE posts
  MODIFY Id cast(11 as int) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE users
  MODIFY id bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

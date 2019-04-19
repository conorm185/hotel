-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 02:29 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2050hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerlogon`
--

CREATE TABLE `customerlogon` (
  `customerID` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `state` int(11) DEFAULT NULL,
  `dateJoined` datetime DEFAULT NULL,
  `dateLastModified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customerlogon`
--

INSERT INTO `customerlogon` (`customerID`, `userName`, `pass`, `salt`, `state`, `dateJoined`, `dateLastModified`) VALUES
(16, 'aaronmitchell@yahoo.ca', 'cad0020cfe7be03ec30799f3a555614a', 'G2tZArYb7JR25d02apafzwZ0GFFb6tIP', 1, '2013-02-12 00:00:00', '2013-03-21 00:00:00'),
(7, 'astrid.gruber@apple.at', '6f8c4eed1a70ab63cc010e49157871fb', 'eWGrN16jTtprvlNS3ynaUUIZwYZSaYv3', 1, '2012-06-05 00:00:00', '2013-01-10 00:00:00'),
(4, 'bjorn.hansen@yahoo.no', '9cad8e966c8b47a27e2703e51a75d23e', 'vFDJ8jISdVfCIMkTpbze5ECLMeritDe8', 1, '2012-07-31 00:00:00', '2012-08-14 00:00:00'),
(21, 'camille.bernard@yahoo.fr', '417ea2d71b3d61dd12c7bf126fc8e83d', 'p3L5I7yj8OSnR43VFi8jKGHSeNY7MpsI', 1, '2012-10-29 00:00:00', '2012-12-07 00:00:00'),
(34, 'diego.gutierrez@yahoo.ar', 'cdcabbb42c07586007f367353c2bd241', 'YP6aWNCsANhgpmQ8vrrmZBb6L54sOxkp', 1, '2013-07-05 00:00:00', '2013-07-05 00:00:00'),
(33, 'dominiquelefebvre@gmail.com', '5a2b2e0fcff2d5d36bd0f988b1acfe41', 'VubVwUzwUC29gpVff7iZm3Aoe6LWba57', 1, '2013-07-01 00:00:00', '2013-07-01 00:00:00'),
(13, 'edfrancis@yachoo.ca', 'd1b76d1c9e9a0af1b243348d6aa208db', 'CdQkKYIAH7784lUQ7CbJtXDwcgCuVnql', 1, '2012-12-20 00:00:00', '2013-01-11 00:00:00'),
(17, 'ellie.sullivan@shaw.ca', '6edddf2a896de8586087175dfff26b25', 're1Hjavg48wRI7Kt0GOA8HquU2fczMY1', 1, '2012-09-10 00:00:00', '2012-11-05 00:00:00'),
(23, 'emma_jones@hotmail.com', '02982989b8ceb5e2276e85633ff7fe02', 'tCr41u0Ap5wwyjki778lGcV9hYVHHOwg', 1, '2013-05-14 00:00:00', '2013-05-14 00:00:00'),
(38, 'enrique_munoz@yahoo.es', '6f8c4eed1a70ab63cc010e49157871fb', 'eWGrN16jTtprvlNS3ynaUUIZwYZSaYv3', 1, '2013-07-13 00:00:00', '2013-07-13 00:00:00'),
(8, 'fharris@google.com', 'e62798b951bab59d58bcbd6b49159bed', '8kLYNpRXd57yHh2NG8xeMedFLb9q3v4V', 1, '2012-09-25 00:00:00', '2012-11-18 00:00:00'),
(41, 'fralston@gmail.com', 'badc7aadfb35a97f503d2d0643fc48aa', 'LYRv2m2DkHT0er5GqAtnX4DiZ7pAKtA4', 1, '2013-07-17 00:00:00', '2013-07-17 00:00:00'),
(5, 'frantisekw@jetbrains.com', '6d465b9782c5a1ffd5e64b8be43a25f1', 't5llWFtASh1LwDjbSuAcA7gZ7d8MBz2J', 1, '2012-08-06 00:00:00', '2012-09-25 00:00:00'),
(3, 'ftremblay@gmail.com', 'cdcabbb42c07586007f367353c2bd241', 'YP6aWNCsANhgpmQ8vrrmZBb6L54sOxkp', 1, '2012-10-28 00:00:00', '2012-11-16 00:00:00'),
(20, 'hannah.schneider@yahoo.de', '5b07a28fc054211e3ca3b1ea79fdd5e4', 'TMBUkDfMyv6hRez3KVDnCfjLht3yLvJX', 1, '2012-08-01 00:00:00', '2012-11-02 00:00:00'),
(6, 'hholy@gmail.com', '7eb81f3fdd0c1c96951b85905da420f2', 'VoTVT17OHoGxaZwmit3g07uwwdx0FoFE', 1, '2012-11-01 00:00:00', '2012-12-14 00:00:00'),
(43, 'hleacock@gmail.com', 'acb354fef1df68cea98f75bfb4e11efe', 'NeNAmefofIuB18TsKSlySz8hTLw4NJXv', 1, '2013-07-17 00:00:00', '2013-07-17 00:00:00'),
(53, 'hughoreilly@apple.ie', '44494012fa8815059890b206d78b15e4', '1pUQJIlNVYAAPv0HYmkt8hWrErMfJKAg', 1, '2013-08-26 00:00:00', '2013-08-26 00:00:00'),
(22, 'isabelle_mercier@apple.fr', '0ccc0904c901d7bf847c42a70f7fb187', 'aIP5DI349uWKfng6V084FTAauGKCKhnI', 1, '2012-11-12 00:00:00', '2013-01-21 00:00:00'),
(9, 'jacksmith@microsoft.com', '3ce9cf0d08e544eaace1f5280b7e79ad', 'WLwDFTyhbHpBFySCJ8a6pqgpXkHM1oAV', 1, '2012-11-16 00:00:00', '2013-01-18 00:00:00'),
(48, 'jenniferp@rogers.ca', 'd1b76d1c9e9a0af1b243348d6aa208db', 'CdQkKYIAH7784lUQ7CbJtXDwcgCuVnql', 1, '2013-07-18 00:00:00', '2013-07-18 00:00:00'),
(18, 'jfernandes@yahoo.pt', '44494012fa8815059890b206d78b15e4', '1pUQJIlNVYAAPv0HYmkt8hWrErMfJKAg', 1, '2012-08-27 00:00:00', '2012-09-03 00:00:00'),
(39, 'joakim.johansson@yahoo.se', 'e62798b951bab59d58bcbd6b49159bed', '8kLYNpRXd57yHh2NG8xeMedFLb9q3v4V', 1, '2013-07-15 00:00:00', '2013-07-15 00:00:00'),
(37, 'johavanderberg@yahoo.nl', '7eb81f3fdd0c1c96951b85905da420f2', 'VoTVT17OHoGxaZwmit3g07uwwdx0FoFE', 1, '2013-07-13 00:00:00', '2013-07-13 00:00:00'),
(42, 'johngordon22@yahoo.com', '9ebc2309a19d8b6cc30a78b627d2a8d0', 'PgJBPfjDqmY30b6w38H0QBqolgyAQPpE', 1, '2013-07-17 00:00:00', '2013-07-17 00:00:00'),
(40, 'jubarnett@gmail.com', '3ce9cf0d08e544eaace1f5280b7e79ad', 'WLwDFTyhbHpBFySCJ8a6pqgpXkHM1oAV', 1, '2013-07-16 00:00:00', '2013-07-16 00:00:00'),
(52, 'kachase@hotmail.com', '6edddf2a896de8586087175dfff26b25', 're1Hjavg48wRI7Kt0GOA8HquU2fczMY1', 1, '2013-08-23 00:00:00', '2013-08-23 00:00:00'),
(51, 'kara.nielsen@jubii.dk', 'cad0020cfe7be03ec30799f3a555614a', 'G2tZArYb7JR25d02apafzwZ0GFFb6tIP', 1, '2013-08-22 00:00:00', '2013-08-22 00:00:00'),
(35, 'ladislav_kovacs@apple.hu', '9cad8e966c8b47a27e2703e51a75d23e', 'vFDJ8jISdVfCIMkTpbze5ECLMeritDe8', 1, '2013-07-06 00:00:00', '2013-07-08 00:00:00'),
(2, 'leonekohler@surfeu.de', '5a2b2e0fcff2d5d36bd0f988b1acfe41', 'VubVwUzwUC29gpVff7iZm3Aoe6LWba57', 1, '2012-08-22 00:00:00', '2012-10-15 00:00:00'),
(36, 'lucas.mancini@yahoo.it', '6d465b9782c5a1ffd5e64b8be43a25f1', 't5llWFtASh1LwDjbSuAcA7gZ7d8MBz2J', 1, '2013-07-11 00:00:00', '2013-07-11 00:00:00'),
(1, 'luisg@embraer.com.br', '81c71e87e09e4310e3b974c79a8f817b', 'HoGiVlunac11vDbbFHpoB0OdDOEkA6Uk', 1, '2012-10-08 00:00:00', '2012-11-15 00:00:00'),
(54, 'luisrojas@yahoo.cl', '3d708043f9b48cbf0b6906609864659f', 'KxWAVWa3dtIEFg9smi8v0vX0lii8vHBI', 1, '2013-08-27 00:00:00', '2013-08-27 00:00:00'),
(25, 'manoj.pareek@rediff.com', '57a618989f36d9a360b28a3137d21ea7', 'VIlh0rsTTk16V9zcxqLvh2gclZyQOUqS', 1, '2013-05-07 00:00:00', '2013-05-07 00:00:00'),
(27, 'mark.taylor@yahoo.au', '01a5da61e8b9cfa23fc60d755ae9dd41', 'MPNdWXkMvW2lUfD4B1GCjjc897xQGodV', 1, '2013-05-17 00:00:00', '2013-05-17 00:00:00'),
(15, 'marthasilk@gmail.com', '701a6c379457427da2109b6a5cc4db4e', 'rh5PWxACiKkaWhL8XjRoEiTB4vOjjnRH', 1, '2012-11-17 00:00:00', '2012-12-01 00:00:00'),
(19, 'masampaio@sapo.pt', '3d708043f9b48cbf0b6906609864659f', 'KxWAVWa3dtIEFg9smi8v0vX0lii8vHBI', 1, '2012-07-29 00:00:00', '2012-12-10 00:00:00'),
(49, 'michael@chinookcorp.com', '4d5df99ea28d85bee1943057c0fa5af1', '5JD3H7F7FCgA3XySfVUqn7IvZRRvkyLD', 1, '2013-07-18 00:00:00', '2013-07-18 00:00:00'),
(10, 'michelleb@aol.com', 'badc7aadfb35a97f503d2d0643fc48aa', 'LYRv2m2DkHT0er5GqAtnX4DiZ7pAKtA4', 1, '2012-12-07 00:00:00', '2013-03-07 00:00:00'),
(14, 'mphilips12@shaw.ca', '4d5df99ea28d85bee1943057c0fa5af1', '5JD3H7F7FCgA3XySfVUqn7IvZRRvkyLD', 1, '2012-05-21 00:00:00', '2012-10-28 00:00:00'),
(32, 'nschroder@surfeu.de', '81c71e87e09e4310e3b974c79a8f817b', 'HoGiVlunac11vDbbFHpoB0OdDOEkA6Uk', 1, '2013-07-01 00:00:00', '2013-07-01 00:00:00'),
(29, 'patrick.gray@aol.com', '7824ba805eb58f0d8b5e4607f3d70b09', 'RwdSqVGvp4hfSSsVLGhpbKoJwUmv7vG1', 1, '2013-05-27 00:00:00', '2013-05-27 00:00:00'),
(24, 'phil.hughes@gmail.com', '4f3a9fa4ab53fd6d486e1825d0923e13', '9A9GY16GX7LY02Y3M9vWV0ruYZHToRQT', 1, '2013-05-24 00:00:00', '2013-05-24 00:00:00'),
(26, 'puja_srivastava@yahoo.in', '40df37ea86d9eca113d9792920ea8f5f', 'yRh5Y1wmaitivmZquChMWdmsw7Qp7Zlm', 1, '2013-06-01 00:00:00', '2013-06-01 00:00:00'),
(28, 'ricunningham@hotmail.com', 'f67ea90a2e7d22c2a1f1efb5db58cbb9', 'gfFw77kT6E2cujRF4k40Eekp0374PqXk', 1, '2013-05-21 00:00:00', '2013-05-21 00:00:00'),
(12, 'robbrown@shaw.ca', 'acb354fef1df68cea98f75bfb4e11efe', 'NeNAmefofIuB18TsKSlySz8hTLw4NJXv', 1, '2013-02-07 00:00:00', '2013-06-11 00:00:00'),
(31, 'stanisław.wójcik@wp.pl', '50096c8cc2ee2915e26989554bf7b190', 'cDw2VtsHAFhyQlOoc7nYCHyivicq1mzG', 1, '2013-05-25 00:00:00', '2013-06-25 00:00:00'),
(50, 'steve@chinookcorp.com', '701a6c379457427da2109b6a5cc4db4e', 'rh5PWxACiKkaWhL8XjRoEiTB4vOjjnRH', 1, '2013-07-19 00:00:00', '2013-07-20 00:00:00'),
(30, 'terhi.hamalainen@apple.fi', 'be8ecb3abe6abd9a83235cd731d3b3f3', 'LnirideCAMlz2LoILM2fb7nPE8yiqnRT', 1, '2013-05-24 00:00:00', '2013-05-26 00:00:00'),
(11, 'tgoyer@apple.com', '9ebc2309a19d8b6cc30a78b627d2a8d0', 'PgJBPfjDqmY30b6w38H0QBqolgyAQPpE', 1, '2013-01-14 00:00:00', '2013-04-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `firstName` varchar(128) DEFAULT NULL,
  `lastName` varchar(128) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `region` varchar(128) DEFAULT NULL,
  `country` varchar(128) DEFAULT NULL,
  `postal` varchar(128) DEFAULT NULL,
  `phone` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `privacy` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `firstName`, `lastName`, `address`, `city`, `region`, `country`, `postal`, `phone`, `email`, `privacy`) VALUES
(1, 'Luís', 'Gonçalves', 'Av. Brigadeiro Faria Lima, 2170', 'São José dos Campos', 'SP', 'Brazil', '12227-000', '+55 (12) 3923-5555', 'luisg@embraer.com.br', '1'),
(2, 'Leonie', 'Köhler', 'Theodor-Heuss-Straße 34', 'Stuttgart', NULL, 'Germany', '70174', '+49 0711 2842222', 'leonekohler@surfeu.de', '1'),
(3, 'Bjørn', 'Hansen', 'Ullevålsveien 14', 'Oslo', NULL, 'Norway', '0171', '+47 22 44 22 22', 'bjorn.hansen@yahoo.no', '1'),
(4, 'François', 'Tremblay', '1498 rue Bélanger', 'Montréal', 'QC', 'Canada', 'H2G 1A7', '+1 (514) 721-4711', 'ftremblay@gmail.com', '1'),
(5, 'František', 'Wichterlová', 'Klanova 9/506', 'Prague', NULL, 'Czech Republic', '14700', '+420 2 4172 5555', 'frantisekw@jetbrains.com', '2'),
(6, 'Astrid', 'Gruber', 'Rotenturmstraße 4, 1010 Innere Stadt', 'Vienna', NULL, 'Austria', '1010', '+43 01 5134505', 'astrid.gruber@apple.at', '1'),
(7, 'Helena', 'Holý', 'Rilská 3174/6', 'Prague', NULL, 'Czech Republic', '14300', '+420 2 4177 0449', 'hholy@gmail.com', '2'),
(8, 'Frank', 'Harris', '1600 Amphitheatre Parkway', 'Mountain View', 'CA', 'USA', '94043-1351', '+1 (425) 882-8080', 'fharris@google.com', '1'),
(9, 'Jack', 'Smith', '1 Microsoft Way', 'Redmond', 'WA', 'USA', '98052-8300', '+1 (425) 882-8080', 'jacksmith@microsoft.com', '2'),
(10, 'Michelle', 'Brooks', '627 Broadway', 'New York', 'NY', 'USA', '10012-2612', '+1 (212) 221-3546', 'michelleb@aol.com', '1'),
(11, 'Tim', 'Goyer', '1 Infinite Loop', 'Cupertino', 'CA', 'USA', '95014', '+1 (408) 996-1010', 'tgoyer@apple.com', '1'),
(12, 'Robert', 'Brown', '796 Dundas Street West', 'Toronto', 'ON', 'Canada', 'M6J 1V1', '+1 (416) 363-8888', 'robbrown@shaw.ca', '2'),
(13, 'Edward', 'Francis', '230 Elgin Street', 'Ottawa', 'ON', 'Canada', 'K2P 1L7', '+1 (613) 234-3322', 'edfrancis@yachoo.ca', '2'),
(14, 'Mark', 'Philips', '8210 111 ST NW', 'Edmonto', 'AB', 'Canada', 'T6G 2C7', '+1 (780) 434-4554', 'mphilips12@shaw.ca', '1'),
(15, 'Martha', 'Silk', '194A Chain Lake Drive', 'Halifax', 'NS', 'Canada', 'B3S 1C5', '+1 (902) 450-0450', 'marthasilk@gmail.com', '1'),
(16, 'Aaron', 'Mitchell', '696 Osborne Street', 'Winnipeg', 'MB', 'Canada', 'R3L 2B9', '+1 (204) 452-6452', 'aaronmitchell@yahoo.ca', '2'),
(17, 'Ellie', 'Sullivan', '5112 48 Street', 'Yellowknife', 'NT', 'Canada', 'X1A 1N6', '+1 (867) 920-2233', 'ellie.sullivan@shaw.ca', '2'),
(18, 'João', 'Fernandes', 'Rua da Assunção 53', 'Lisbon', NULL, 'Portugal', NULL, '+351 (213) 466-111', 'jfernandes@yahoo.pt', '2'),
(19, 'Madalena', 'Sampaio', 'Rua dos Campeões Europeus de Viena, 4350', 'Porto', NULL, 'Portugal', NULL, '+351 (225) 022-448', 'masampaio@sapo.pt', '2'),
(20, 'Hannah', 'Schneider', 'Tauentzienstraße 8', 'Berlin', NULL, 'Germany', '10789', '+49 030 26550280', 'hannah.schneider@yahoo.de', '1'),
(21, 'Camille', 'Bernard', '4, Rue Milton', 'Paris', NULL, 'France', '75009', '+33 01 49 70 65 65', 'camille.bernard@yahoo.fr', '1'),
(22, 'Isabelle', 'Mercier', '68, Rue Jouvence', 'Dijon', NULL, 'France', '21000', '+33 03 80 73 66 99', 'isabelle_mercier@apple.fr', '1'),
(23, 'Emma', 'Jones', '202 Hoxton Street', 'London', NULL, 'United Kingdom', 'N1 5LH', '+44 020 7707 0707', 'emma_jones@hotmail.com', '1'),
(24, 'Phil', 'Hughes', '113 Lupus St', 'London', NULL, 'United Kingdom', 'SW1V 3EN', '+44 020 7976 5722', 'phil.hughes@gmail.com', '1'),
(25, 'Manoj', 'Pareek', '12,Community Centre', 'Delhi', NULL, 'India', '110017', '+91 0124 39883988', 'manoj.pareek@rediff.com', '1'),
(26, 'Puja', 'Srivastava', '3,Raj Bhavan Road', 'Bangalore', NULL, 'India', '560001', '+91 080 22289999', 'puja_srivastava@yahoo.in', '2'),
(27, 'Mark', 'Taylor', '421 Bourke Street', 'Sidney', 'NSW', 'Australia', '2010', '+61 (02) 9332 3633', 'mark.taylor@yahoo.au', '1'),
(28, 'Richard', 'Cunningham', '2211 W Berry Street', 'Fort Worth', 'TX', 'USA', '76110', '+1 (817) 924-7272', 'ricunningham@hotmail.com', '1'),
(29, 'Patrick', 'Gray', '1033 N Park Ave', 'Tucson', 'AZ', 'USA', '85719', '+1 (520) 622-4200', 'patrick.gray@aol.com', '2'),
(30, 'Terhi', 'Hämäläinen', 'Porthaninkatu 9', 'Helsinki', NULL, 'Finland', '00530', '+358 09 870 2000', 'terhi.hamalainen@apple.fi', '2'),
(31, 'Stanisław', 'Wójcik', 'Ordynacka 10', 'Warsaw', NULL, 'Poland', '00-358', '+48 22 828 37 39', 'stanisław.wójcik@wp.pl', '1'),
(32, 'Niklas', 'Schröder', 'Barbarossastraße 19', 'Berlin', NULL, 'Germany', '10779', '+49 030 2141444', 'nschroder@surfeu.de', '1'),
(33, 'Dominique', 'Lefebvre', '8, Rue Hanovre', 'Paris', NULL, 'France', '75002', '+33 01 47 42 71 71', 'dominiquelefebvre@gmail.com', '2'),
(34, 'Diego', 'Gutiérrez', '307 Macacha Güemes', 'Buenos Aires', NULL, 'Argentina', '1106', '+54 (0)11 4311 4333', 'diego.gutierrez@yahoo.ar', '2'),
(35, 'Ladislav', 'Kovács', 'Erzsébet krt. 58.', 'Budapest', NULL, 'Hungary', 'H-1073', NULL, 'ladislav_kovacs@apple.hu', '1'),
(36, 'Lucas', 'Mancini', 'Via Degli Scipioni, 43', 'Rome', 'RM', 'Italy', '00192', '+39 06 39733434', 'lucas.mancini@yahoo.it', '2'),
(37, 'Johannes', 'Van der Berg', 'Lijnbaansgracht 120bg', 'Amsterdam', 'VV', 'Netherlands', '1016', '+31 020 6223130', 'johavanderberg@yahoo.nl', '1'),
(38, 'Enrique', 'Muñoz', 'C/ San Bernardo 85', 'Madrid', NULL, 'Spain', '28015', '+34 914 454 454', 'enrique_munoz@yahoo.es', '2'),
(39, 'Joakim', 'Johansson', 'Celsiusg. 9', 'Stockholm', NULL, 'Sweden', '11230', '+46 08-651 52 52', 'joakim.johansson@yahoo.se', '1'),
(40, 'Julia', 'Barnett', '302 S 700 E', 'Salt Lake City', 'UT', 'USA', '84102', '+1 (801) 531-7272', 'jubarnett@gmail.com', '1'),
(41, 'Frank', 'Ralston', '162 E Superior Street', 'Chicago', 'IL', 'USA', '60611', '+1 (312) 332-3232', 'fralston@gmail.com', '1'),
(42, 'John', 'Gordon', '69 Salem Street', 'Boston', 'MA', 'USA', '2113', '+1 (617) 522-1333', 'johngordon22@yahoo.com', '2'),
(43, 'Heather', 'Leacock', '120 S Orange Ave', 'Orlando', 'FL', 'USA', '32801', '+1 (407) 999-7788', 'hleacock@gmail.com', '1'),
(48, 'Jennifer', 'Peterson', '700 W Pender Street', 'Vancouver', 'BC', 'Canada', 'V6C 1G8', '+1 (604) 688-2255', 'jenniferp@rogers.ca', '1'),
(49, 'Michael', 'Mitchell', '5827 Bowness Road NW', 'Calgary', 'AB', 'Canada', 'T3B 0C5', '+1 (403) 246-9887', 'michael@chinookcorp.com', '1'),
(50, 'Steve', 'Johnson', '7727B 41 Ave SW', 'Calgary', 'AB', 'Canada', 'T3B 1Y7', '+1 (780) 836-9987', 'steve@chinookcorp.com', '1'),
(51, 'Kara', 'Nielsen', 'Sønder Boulevard 51', 'Copenhagen', NULL, 'Denmark', '1720', '+453 3331 9991', 'kara.nielsen@jubii.dk', '1'),
(52, 'Kathy', 'Chase', '801 W 4th Street', 'Reno', 'NV', 'USA', '89503', '+1 (775) 223-7665', 'kachase@hotmail.com', '2'),
(53, 'Hugh', 'O\'Reilly', '3 Chatham Street', 'Dublin', NULL, 'Ireland', NULL, '+353 01 6792424', 'hughoreilly@apple.ie', '1'),
(54, 'Luis', 'Rojas', 'Calle Lira, 198', 'Santiago', NULL, 'Chile', NULL, '+56 (0)2 635 4444', 'luisrojas@yahoo.cl', '2');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(11) NOT NULL,
  `hotelID` int(11) NOT NULL,
  `firstName` varchar(128) NOT NULL,
  `lastName` varchar(128) NOT NULL,
  `age` int(11) NOT NULL,
  `start` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `HotelID` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `rating` decimal(5,2) NOT NULL,
  `state` char(2) NOT NULL,
  `city` varchar(128) NOT NULL,
  `address` varchar(128) NOT NULL,
  `zip` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `resID` int(11) NOT NULL,
  `roomID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `hotelID` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `hotelID` int(11) NOT NULL,
  `date` date NOT NULL,
  `rating` int(2) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomID` int(11) NOT NULL,
  `hotelID` int(11) NOT NULL,
  `typeID` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `interiorpath` varchar(255) NOT NULL,
  `exteriorpath` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `typeID` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `rate` decimal(10,2) NOT NULL,
  `beds` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`typeID`, `name`, `rate`, `beds`, `description`) VALUES
(1, 'Solo Queen', '50.25', 1, 'A singe queen sized bed with a foldout couch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerlogon`
--
ALTER TABLE `customerlogon`
  ADD PRIMARY KEY (`userName`),
  ADD KEY `customerID` (`customerID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`),
  ADD KEY `hotelID` (`hotelID`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`HotelID`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`resID`),
  ADD KEY `customerID` (`customerID`),
  ADD KEY `roomID` (`roomID`),
  ADD KEY `hotelID` (`hotelID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `customerID` (`customerID`),
  ADD KEY `hotelID` (`hotelID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomID`),
  ADD KEY `hotelID` (`hotelID`),
  ADD KEY `typeID` (`typeID`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`typeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `HotelID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `resID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `typeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customerlogon`
--
ALTER TABLE `customerlogon`
  ADD CONSTRAINT `customerlogon_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`hotelID`) REFERENCES `hotels` (`HotelID`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`roomID`) REFERENCES `rooms` (`roomID`),
  ADD CONSTRAINT `reservations_ibfk_3` FOREIGN KEY (`hotelID`) REFERENCES `hotels` (`HotelID`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`customerID`) REFERENCES `customers` (`customerID`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`hotelID`) REFERENCES `hotels` (`HotelID`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`hotelID`) REFERENCES `hotels` (`HotelID`),
  ADD CONSTRAINT `rooms_ibfk_2` FOREIGN KEY (`typeID`) REFERENCES `roomtype` (`typeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

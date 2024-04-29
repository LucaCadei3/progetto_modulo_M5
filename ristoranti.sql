-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Apr 29, 2024 alle 09:41
-- Versione del server: 8.0.36-0ubuntu0.22.04.1
-- Versione PHP: 8.1.2-1ubuntu2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ristoranti`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `admin`
--

CREATE TABLE `admin` (
  `codiceOperatore` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `psw` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cognome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `idLocale` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `admin`
--

INSERT INTO `admin` (`codiceOperatore`, `psw`, `nome`, `cognome`, `idLocale`) VALUES
('OP001', 'admin123', 'Admin', 'One', '1'),
('OP002', 'admin456', 'Admin', 'Two', '2'),
('OP003', 'admin789', 'Admin', 'Three', '3');

-- --------------------------------------------------------

--
-- Struttura della tabella `azienda`
--

CREATE TABLE `azienda` (
  `PIVA` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cfImprenditore` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descrizione` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `azienda`
--

INSERT INTO `azienda` (`PIVA`, `nome`, `cfImprenditore`, `descrizione`) VALUES
('12345678901', 'Pizza Express', 'ABC123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '),
('23456789012', 'Bakery Delight', 'DEF456', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. '),
('34567890123', 'Fashion Hub', 'GHI789', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ');

-- --------------------------------------------------------

--
-- Struttura della tabella `cliente`
--

CREATE TABLE `cliente` (
  `id` int NOT NULL,
  `username` varchar(16) COLLATE utf8mb4_general_ci NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cognome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `cliente`
--

INSERT INTO `cliente` (`id`, `username`, `mail`, `nome`, `cognome`, `telefono`, `password`, `token`) VALUES
(1, 'jane', 'jane@example.com', 'Jane', 'Smith', '9876543210', 'letmein', ''),
(2, 'spino', 'john@example.com', 'John', 'Doe', '1234567890', 'ciao', '1RMAP2JHZvm1LxEj1FJ/lw=='),
(3, 'mike', 'mike@example.com', 'Mike', 'Johnson', '5551234567', 'mypass', ''),
(4, 'sarah', 'sarah@example.com', 'Sarah', 'Brown', '9998887777', 'hello123', ''),
(5, 'hhhh', '', 'd', '', '', '', 'whH3eVCLVgoIwRsaONd3wA==');

-- --------------------------------------------------------

--
-- Struttura della tabella `imprenditore`
--

CREATE TABLE `imprenditore` (
  `CF` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cognome` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `imprenditore`
--

INSERT INTO `imprenditore` (`CF`, `nome`, `cognome`, `telefono`) VALUES
('ABC123', 'Mario', 'Rossi', '1112223333'),
('DEF456', 'Laura', 'Bianchi', '4445556666'),
('GHI789', 'Luigi', 'Verdi', '7778889999');

-- --------------------------------------------------------

--
-- Struttura della tabella `locale`
--

CREATE TABLE `locale` (
  `ID` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `civico` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `via` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `postiMax` int DEFAULT NULL,
  `idpaese` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `idProvincia` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `recensione` int NOT NULL DEFAULT '2',
  `assegnate` int NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `locale`
--

INSERT INTO `locale` (`ID`, `civico`, `via`, `postiMax`, `idpaese`, `idProvincia`, `recensione`, `assegnate`) VALUES
('1', '10', 'Via Garibaldi', 50, 'Milano', 'Milano', 2, 2),
('2', '25', 'Via Roma', 30, 'Roma', 'Roma', 2, 2),
('3', '5', 'Via Toledo', 40, 'Napoli', 'Napoli', 2, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `paese`
--

CREATE TABLE `paese` (
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nomeProvincia` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `paese`
--

INSERT INTO `paese` (`nome`, `nomeProvincia`) VALUES
('Milano', 'Milano'),
('Napoli', 'Napoli'),
('Roma', 'Roma');

-- --------------------------------------------------------

--
-- Struttura della tabella `prenota`
--

CREATE TABLE `prenota` (
  `mailPrenotazione` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `idLocale` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `data` date DEFAULT NULL,
  `numeroPosti` int DEFAULT NULL,
  `idTurno` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `prenota`
--

INSERT INTO `prenota` (`mailPrenotazione`, `idLocale`, `data`, `numeroPosti`, `idTurno`) VALUES
('jane@example.com', '2', '2024-04-22', 2, 2),
('john@example.com', '1', '2024-04-20', 3, 1),
('mike@example.com', '3', '2024-04-25', 4, 3),
('sarah@example.com', '1', '2024-04-28', 5, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `provincia`
--

CREATE TABLE `provincia` (
  `nome` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `provincia`
--

INSERT INTO `provincia` (`nome`) VALUES
('Milano'),
('Napoli'),
('Roma');

-- --------------------------------------------------------

--
-- Struttura della tabella `turno`
--

CREATE TABLE `turno` (
  `IDTurno` int NOT NULL,
  `oraInizio` time DEFAULT NULL,
  `oraFine` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `turno`
--

INSERT INTO `turno` (`IDTurno`, `oraInizio`, `oraFine`) VALUES
(1, '09:00:00', '12:00:00'),
(2, '12:00:00', '15:00:00'),
(3, '15:00:00', '18:00:00');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`codiceOperatore`),
  ADD KEY `admin_ibfk_1` (`idLocale`);

--
-- Indici per le tabelle `azienda`
--
ALTER TABLE `azienda`
  ADD PRIMARY KEY (`PIVA`),
  ADD KEY `cfImprenditore` (`cfImprenditore`);

--
-- Indici per le tabelle `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `mail` (`mail`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `telefono` (`telefono`);

--
-- Indici per le tabelle `imprenditore`
--
ALTER TABLE `imprenditore`
  ADD PRIMARY KEY (`CF`);

--
-- Indici per le tabelle `locale`
--
ALTER TABLE `locale`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idpaese` (`idpaese`),
  ADD KEY `idProvincia` (`idProvincia`);

--
-- Indici per le tabelle `paese`
--
ALTER TABLE `paese`
  ADD PRIMARY KEY (`nome`),
  ADD KEY `nomeProvincia` (`nomeProvincia`);

--
-- Indici per le tabelle `prenota`
--
ALTER TABLE `prenota`
  ADD PRIMARY KEY (`mailPrenotazione`,`idLocale`),
  ADD KEY `idTurno` (`idTurno`),
  ADD KEY `prenota_ibfk_2` (`idLocale`);

--
-- Indici per le tabelle `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`nome`);

--
-- Indici per le tabelle `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`IDTurno`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`idLocale`) REFERENCES `locale` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limiti per la tabella `azienda`
--
ALTER TABLE `azienda`
  ADD CONSTRAINT `azienda_ibfk_1` FOREIGN KEY (`cfImprenditore`) REFERENCES `imprenditore` (`CF`);

--
-- Limiti per la tabella `locale`
--
ALTER TABLE `locale`
  ADD CONSTRAINT `locale_ibfk_1` FOREIGN KEY (`idpaese`) REFERENCES `paese` (`nome`),
  ADD CONSTRAINT `locale_ibfk_2` FOREIGN KEY (`idProvincia`) REFERENCES `provincia` (`nome`);

--
-- Limiti per la tabella `paese`
--
ALTER TABLE `paese`
  ADD CONSTRAINT `paese_ibfk_1` FOREIGN KEY (`nomeProvincia`) REFERENCES `provincia` (`nome`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

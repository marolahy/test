-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 27, 2016 at 02:47 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tresor`
--

-- --------------------------------------------------------

--
-- Table structure for table `adc`
--

CREATE TABLE `adc` (
`id` int(11) unsigned NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_compte` int(11) NOT NULL,
  `id_convention` int(11) NOT NULL,
  `id_exercice` int(11) NOT NULL,
  `id_financement` int(11) NOT NULL,
  `id_ministere` int(11) NOT NULL,
  `id_mission` int(11) NOT NULL,
  `id_ordonateur` int(11) NOT NULL,
  `id_programme` int(11) NOT NULL,
  `id_soa` int(11) NOT NULL,
  `num_mandat` varchar(255) NOT NULL DEFAULT '',
  `date` date DEFAULT NULL,
  `montant` decimal(10,2) DEFAULT NULL,
  `objet` varchar(255) DEFAULT NULL,
  `code_assignataire` varchar(128) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adc`
--

INSERT INTO `adc` (`id`, `id_category`, `id_compte`, `id_convention`, `id_exercice`, `id_financement`, `id_ministere`, `id_mission`, `id_ordonateur`, `id_programme`, `id_soa`, `num_mandat`, `date`, `montant`, `objet`, `code_assignataire`) VALUES
(1, 1, 1, 3, 10, 1, 1, 1, 1, 1, 1, '201301008250', '2013-03-11', 500000.00, 'Charges de reprÃ©sentation - Visites officielles', '10101.300'),
(2, 1, 2, 3, 10, 1, 1, 1, 1, 1, 1, '201301008243', '2013-03-11', 150000.00, 'Carburants et Lubrifiants', '10101.300'),
(3, 1, 3, 3, 10, 1, 1, 1, 1, 1, 1, '201301008251', '2013-03-11', 1600000.00, 'Frais de dÃ©placement extÃ©rieur', '10101.300'),
(4, 1, 2, 3, 10, 1, 1, 1, 1, 1, 1, '201301009243', '2013-03-11', 250000.00, 'Carburants et Lubrifiants', '10101.300'),
(5, 1, 1, 3, 10, 1, 1, 1, 2, 1, 1, '201301009244', '2013-03-11', 250000.00, 'Carburants et Lubrifiants', '10101.300');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
`id` int(11) unsigned NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `label` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `code`, `label`) VALUES
(1, '3', 'test category');

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

CREATE TABLE `compte` (
`id` int(11) unsigned NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `label` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `compte`
--

INSERT INTO `compte` (`id`, `code`, `label`) VALUES
(1, '6222', 'Compte 1'),
(2, '6131', 'Compte 2'),
(3, '6232', 'compte 3');

-- --------------------------------------------------------

--
-- Table structure for table `convention`
--

CREATE TABLE `convention` (
`id` int(11) unsigned NOT NULL,
  `code` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `convention`
--

INSERT INTO `convention` (`id`, `code`, `label`) VALUES
(3, '000', 'test 1');

-- --------------------------------------------------------

--
-- Table structure for table `devise`
--

CREATE TABLE `devise` (
`id` int(11) unsigned NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `label` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `devise`
--

INSERT INTO `devise` (`id`, `code`, `label`) VALUES
(2, 'â‚¬', 'Euro'),
(3, '$', 'Dollars Us');

-- --------------------------------------------------------

--
-- Table structure for table `exercice`
--

CREATE TABLE `exercice` (
`id` int(11) unsigned NOT NULL,
  `annee` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exercice`
--

INSERT INTO `exercice` (`id`, `annee`, `titre`) VALUES
(10, 2013, 'Test Bezama');

-- --------------------------------------------------------

--
-- Table structure for table `financement`
--

CREATE TABLE `financement` (
`id` int(11) unsigned NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `label` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `financement`
--

INSERT INTO `financement` (`id`, `code`, `label`) VALUES
(1, '10-001-001-A', 'Financement');

-- --------------------------------------------------------

--
-- Table structure for table `ministere`
--

CREATE TABLE `ministere` (
`id` int(11) unsigned NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `label` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ministere`
--

INSERT INTO `ministere` (`id`, `code`, `label`) VALUES
(1, '11', 'Ministere de finance et du budget');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
`id` int(11) unsigned NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `label` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`id`, `code`, `label`) VALUES
(1, '110', 'test mission 1');

-- --------------------------------------------------------

--
-- Table structure for table `ordonateur`
--

CREATE TABLE `ordonateur` (
`id` int(11) unsigned NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `label` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ordonateur`
--

INSERT INTO `ordonateur` (`id`, `code`, `label`) VALUES
(1, '00-110-2-00000', 'ordonateur 1'),
(2, '00-110-3-00000', 'ordonateur 2');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
`id` int(11) unsigned NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `label` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`id`, `code`, `label`) VALUES
(1, '601', 'test 2');

-- --------------------------------------------------------

--
-- Table structure for table `soa`
--

CREATE TABLE `soa` (
`id` int(11) unsigned NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `label` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soa`
--

INSERT INTO `soa` (`id`, `code`, `label`) VALUES
(1, '00-11-4-604-00000', 'test 2');

-- --------------------------------------------------------

--
-- Table structure for table `taux_chancelerie`
--

CREATE TABLE `taux_chancelerie` (
`id` int(11) unsigned NOT NULL,
  `id_devise` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `montant` decimal(11,2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `taux_chancelerie`
--

INSERT INTO `taux_chancelerie` (`id`, `id_devise`, `date`, `montant`) VALUES
(1, 2, '2016-01-01', 3620.00),
(2, 3, '2016-05-27', 3200.00),
(3, 2, '2017-01-01', 3000.00),
(4, 2, '2016-05-27', 3621.00),
(5, 2, '2016-05-27', 3621.00),
(6, 3, '2016-05-27', 3201.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adc`
--
ALTER TABLE `adc`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compte`
--
ALTER TABLE `compte`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `convention`
--
ALTER TABLE `convention`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devise`
--
ALTER TABLE `devise`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exercice`
--
ALTER TABLE `exercice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `financement`
--
ALTER TABLE `financement`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ministere`
--
ALTER TABLE `ministere`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordonateur`
--
ALTER TABLE `ordonateur`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soa`
--
ALTER TABLE `soa`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taux_chancelerie`
--
ALTER TABLE `taux_chancelerie`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adc`
--
ALTER TABLE `adc`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `compte`
--
ALTER TABLE `compte`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `convention`
--
ALTER TABLE `convention`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `devise`
--
ALTER TABLE `devise`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `exercice`
--
ALTER TABLE `exercice`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `financement`
--
ALTER TABLE `financement`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ministere`
--
ALTER TABLE `ministere`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ordonateur`
--
ALTER TABLE `ordonateur`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `programme`
--
ALTER TABLE `programme`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `soa`
--
ALTER TABLE `soa`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `taux_chancelerie`
--
ALTER TABLE `taux_chancelerie`
MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
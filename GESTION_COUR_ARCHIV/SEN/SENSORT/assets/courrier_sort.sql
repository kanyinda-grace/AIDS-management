-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 23 déc. 2018 à 08:45
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestcourrier_archivage`
--

-- --------------------------------------------------------

--
-- Structure de la table `courrier_ent`
--

DROP TABLE IF EXISTS `courrier_sort`;
CREATE TABLE IF NOT EXISTS `courrier_sort` (
  `num_lettre_sort` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_type_document_sort` varchar(100) DEFAULT NULL,
  `code_service` varchar(15) DEFAULT NULL,
  `mat_agent` varchar(15) DEFAULT NULL,
  `objet_sort` text,
  `jour_sort` int(2) NOT NULL,
  `mois_sort` int(2) NOT NULL,
  `annee_sort` int(4) NOT NULL,
  `observation_sort` text,
  `code_sexe` varchar(1) NOT NULL,
  `nom_sort` varchar(200) NOT NULL,
  `postnom_sort` varchar(30) NOT NULL,
  `prenom_sort` varchar(30) NOT NULL,
  `entreprise_sort` varchar(50) NOT NULL,
  `email_sort` varchar(90) NOT NULL,
  `telephone_sort` varchar(15) NOT NULL
    PRIMARY KEY (`num_lettre_sort`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `courrier_ent`
--

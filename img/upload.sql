-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 23 Octobre 2018 à 10:07
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `upload`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant_ulk`
--

CREATE TABLE `etudiant_ulk` (
  `id_etudiant_ulk` int(11) NOT NULL,
  `nom_etudiant_ulk` varchar(40) NOT NULL,
  `postnom_etudiant_ulk` varchar(40) NOT NULL,
  `prenom_etudiant_ulk` varchar(40) NOT NULL,
  `uname_ulk` varchar(20) NOT NULL,
  `upass_ulk` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant_unikol`
--

CREATE TABLE `etudiant_unikol` (
  `id_etudiant_unikol` int(11) NOT NULL,
  `nom_etudiant_unikol` varchar(40) NOT NULL,
  `postnom_etudiant_unikol` varchar(40) NOT NULL,
  `prenom_etudiant_unikol` varchar(40) NOT NULL,
  `uname_unikol` varchar(20) NOT NULL,
  `upass_unikol` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant_unilu`
--

CREATE TABLE `etudiant_unilu` (
  `id_etudiant_unilu` int(11) NOT NULL,
  `nom_etudiant_unilu` varchar(40) NOT NULL,
  `postnom_etudiant_unilu` varchar(40) NOT NULL,
  `prenom_etudiant_unilu` varchar(40) NOT NULL,
  `uname_unilu` varchar(20) NOT NULL,
  `upass_unilu` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant_upc`
--

CREATE TABLE `etudiant_upc` (
  `id_etudiant_upc` int(11) NOT NULL,
  `nom_etudiant_upc` varchar(20) NOT NULL,
  `postnom_etudiant_upc` varchar(20) NOT NULL,
  `prenom_etudiant_upc` varchar(20) NOT NULL,
  `uname_upc` varchar(20) NOT NULL,
  `upass_upc` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `forum_etudiant_ulk`
--

CREATE TABLE `forum_etudiant_ulk` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date_pub` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `forum_etudiant_unikol`
--

CREATE TABLE `forum_etudiant_unikol` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date_pub` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `forum_etudiant_unilu`
--

CREATE TABLE `forum_etudiant_unilu` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date_pub` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `forum_etudiant_upc`
--

CREATE TABLE `forum_etudiant_upc` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date_pub` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `note_tp_etudiant_ulk`
--

CREATE TABLE `note_tp_etudiant_ulk` (
  `note_tp_etudiant_upc` int(11) NOT NULL,
  `id_etudiant_ulk` int(11) NOT NULL,
  `num_tp_upc` int(11) NOT NULL,
  `note_obtenue` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `note_tp_etudiant_unikol`
--

CREATE TABLE `note_tp_etudiant_unikol` (
  `note_tp_etudiant_upc` int(11) NOT NULL,
  `id_etudiant_unikol` int(11) NOT NULL,
  `num_tp_upc` int(11) NOT NULL,
  `note_obtenue` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `note_tp_etudiant_unilu`
--

CREATE TABLE `note_tp_etudiant_unilu` (
  `note_tp_etudiant_upc` int(11) NOT NULL,
  `id_etudiant_unilu` int(11) NOT NULL,
  `num_tp_upc` int(11) NOT NULL,
  `note_obtenue` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `note_tp_etudiant_upc`
--

CREATE TABLE `note_tp_etudiant_upc` (
  `note_tp_etudiant_upc` int(11) NOT NULL,
  `id_etudiant_upc` int(11) NOT NULL,
  `num_tp_upc` int(11) NOT NULL,
  `note_obtenue` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tp_numerotation_ulk`
--

CREATE TABLE `tp_numerotation_ulk` (
  `num_tp_upc` int(11) NOT NULL,
  `libelle_numerotation_tp_upc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tp_numerotation_ulk`
--

INSERT INTO `tp_numerotation_ulk` (`num_tp_upc`, `libelle_numerotation_tp_upc`) VALUES
(3, 'Tp Numero 3'),
(2, 'Tp Numero 2'),
(1, 'Tp Numero 1');

-- --------------------------------------------------------

--
-- Structure de la table `tp_numerotation_unikol`
--

CREATE TABLE `tp_numerotation_unikol` (
  `num_tp_upc` int(11) NOT NULL,
  `libelle_numerotation_tp_upc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tp_numerotation_unikol`
--

INSERT INTO `tp_numerotation_unikol` (`num_tp_upc`, `libelle_numerotation_tp_upc`) VALUES
(1, 'Tp Numero 1'),
(2, 'Tp Numero 2'),
(3, 'Tp Numero 3'),
(4, 'Tp Numero 4'),
(5, 'Tp Numero 5'),
(6, 'Tp Numero 6');

-- --------------------------------------------------------

--
-- Structure de la table `tp_numerotation_unilu`
--

CREATE TABLE `tp_numerotation_unilu` (
  `num_tp_upc` int(11) NOT NULL,
  `libelle_numerotation_tp_upc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tp_numerotation_unilu`
--

INSERT INTO `tp_numerotation_unilu` (`num_tp_upc`, `libelle_numerotation_tp_upc`) VALUES
(1, 'Tp Numero 1'),
(2, 'Tp Numero 2'),
(3, 'Tp Numero 3');

-- --------------------------------------------------------

--
-- Structure de la table `tp_numerotation_upc`
--

CREATE TABLE `tp_numerotation_upc` (
  `num_tp_upc` int(11) NOT NULL,
  `libelle_numerotation_tp_upc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `tp_numerotation_upc`
--

INSERT INTO `tp_numerotation_upc` (`num_tp_upc`, `libelle_numerotation_tp_upc`) VALUES
(1, 'Tp Numero 1'),
(2, 'Tp Numero 2'),
(3, 'Tp Numero 3');

-- --------------------------------------------------------

--
-- Structure de la table `type_tp_ulk`
--

CREATE TABLE `type_tp_ulk` (
  `code_type_upc` int(1) NOT NULL,
  `libelle_type_tp_upc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_tp_ulk`
--

INSERT INTO `type_tp_ulk` (`code_type_upc`, `libelle_type_tp_upc`) VALUES
(1, 'Tp Individuel'),
(2, 'Tp En Groupe');

-- --------------------------------------------------------

--
-- Structure de la table `type_tp_unikol`
--

CREATE TABLE `type_tp_unikol` (
  `code_type_upc` int(1) NOT NULL,
  `libelle_type_tp_upc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_tp_unikol`
--

INSERT INTO `type_tp_unikol` (`code_type_upc`, `libelle_type_tp_upc`) VALUES
(1, 'Tp Individuel'),
(2, 'Tp En Groupe');

-- --------------------------------------------------------

--
-- Structure de la table `type_tp_unilu`
--

CREATE TABLE `type_tp_unilu` (
  `code_type_upc` int(1) NOT NULL,
  `libelle_type_tp_upc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_tp_unilu`
--

INSERT INTO `type_tp_unilu` (`code_type_upc`, `libelle_type_tp_upc`) VALUES
(1, 'Tp Individuel'),
(2, 'Tp En Groupe');

-- --------------------------------------------------------

--
-- Structure de la table `type_tp_upc`
--

CREATE TABLE `type_tp_upc` (
  `code_type_upc` int(1) NOT NULL,
  `libelle_type_tp_upc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_tp_upc`
--

INSERT INTO `type_tp_upc` (`code_type_upc`, `libelle_type_tp_upc`) VALUES
(1, 'Tp Individuel'),
(2, 'Tp En Groupe');

-- --------------------------------------------------------

--
-- Structure de la table `up_files`
--

CREATE TABLE `up_files` (
  `id_tp` int(11) NOT NULL,
  `code_type_upc` int(1) NOT NULL,
  `floc` text NOT NULL,
  `fdatein` varchar(30) NOT NULL,
  `fuplder` text NOT NULL,
  `description` varchar(100) NOT NULL,
  `num_tp_upc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `up_files_etudiant`
--

CREATE TABLE `up_files_etudiant` (
  `id` int(11) NOT NULL,
  `code_type_upc` int(1) NOT NULL,
  `floc` text NOT NULL,
  `fdatein` varchar(30) NOT NULL,
  `id_etudiant_upc` int(11) NOT NULL,
  `fuplder` text NOT NULL,
  `num_tp_upc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `up_files_etudiant_ulk`
--

CREATE TABLE `up_files_etudiant_ulk` (
  `id` int(11) NOT NULL,
  `code_type_upc` int(1) NOT NULL,
  `floc` text NOT NULL,
  `fdatein` varchar(30) NOT NULL,
  `id_etudiant_ulk` int(11) NOT NULL,
  `fuplder` text NOT NULL,
  `num_tp_upc` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `up_files_etudiant_unikol`
--

CREATE TABLE `up_files_etudiant_unikol` (
  `id` int(11) NOT NULL,
  `code_type_upc` int(1) NOT NULL,
  `floc` text NOT NULL,
  `fdatein` varchar(30) NOT NULL,
  `id_etudiant_unikol` int(11) NOT NULL,
  `fuplder` text NOT NULL,
  `num_tp_upc` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `up_files_etudiant_unilu`
--

CREATE TABLE `up_files_etudiant_unilu` (
  `id` int(11) NOT NULL,
  `code_type_upc` int(1) NOT NULL,
  `floc` text NOT NULL,
  `fdatein` varchar(30) NOT NULL,
  `id_etudiant_unilu` int(11) NOT NULL,
  `fuplder` text NOT NULL,
  `num_tp_upc` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `up_files_ulk`
--

CREATE TABLE `up_files_ulk` (
  `id_tp` int(11) NOT NULL,
  `code_type_upc` int(1) NOT NULL,
  `floc` text NOT NULL,
  `fdatein` varchar(30) NOT NULL,
  `fuplder` text NOT NULL,
  `description` varchar(30) NOT NULL,
  `num_tp_upc` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `up_files_unikol`
--

CREATE TABLE `up_files_unikol` (
  `id_tp` int(11) NOT NULL,
  `code_type_upc` int(1) NOT NULL,
  `floc` text NOT NULL,
  `fdatein` varchar(30) NOT NULL,
  `fuplder` text NOT NULL,
  `description` varchar(30) NOT NULL,
  `num_tp_upc` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `up_files_unilu`
--

CREATE TABLE `up_files_unilu` (
  `id_tp` int(11) NOT NULL,
  `code_type_upc` int(1) NOT NULL,
  `floc` text NOT NULL,
  `fdatein` varchar(30) NOT NULL,
  `fuplder` text NOT NULL,
  `description` varchar(30) NOT NULL,
  `num_tp_upc` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `uname_prof_upc` varchar(20) NOT NULL,
  `upass_prof_upc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`uname_prof_upc`, `upass_prof_upc`) VALUES
('profkapend', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `users_cp_ulk`
--

CREATE TABLE `users_cp_ulk` (
  `uname_cp_ulk` varchar(30) NOT NULL,
  `upass_ulk` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users_cp_ulk`
--

INSERT INTO `users_cp_ulk` (`uname_cp_ulk`, `upass_ulk`) VALUES
('cpulk98', '9875'),
('cpaulk86', '7654');

-- --------------------------------------------------------

--
-- Structure de la table `users_cp_unikol`
--

CREATE TABLE `users_cp_unikol` (
  `users_cp_unikol` varchar(30) NOT NULL,
  `upass_unikol` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users_cp_unikol`
--

INSERT INTO `users_cp_unikol` (`users_cp_unikol`, `upass_unikol`) VALUES
('cpunikol87', '5642'),
('cpaunikol64', '5422');

-- --------------------------------------------------------

--
-- Structure de la table `users_cp_unilu`
--

CREATE TABLE `users_cp_unilu` (
  `users_cp_unilu` varchar(30) NOT NULL,
  `upass_unilu` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users_cp_unilu`
--

INSERT INTO `users_cp_unilu` (`users_cp_unilu`, `upass_unilu`) VALUES
('cpunilu30', '5436'),
('cpaunilu54', '3267');

-- --------------------------------------------------------

--
-- Structure de la table `users_cp_upc`
--

CREATE TABLE `users_cp_upc` (
  `users_cp_upc` varchar(30) NOT NULL,
  `upass_upc` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users_cp_upc`
--

INSERT INTO `users_cp_upc` (`users_cp_upc`, `upass_upc`) VALUES
('cpupc42', '3456'),
('cpaupc40', '5634');

-- --------------------------------------------------------

--
-- Structure de la table `users_prof_ulk`
--

CREATE TABLE `users_prof_ulk` (
  `uname_prof_ulk` varchar(20) NOT NULL,
  `upass_prof_ulk` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users_prof_ulk`
--

INSERT INTO `users_prof_ulk` (`uname_prof_ulk`, `upass_prof_ulk`) VALUES
('profkapend', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `users_prof_unikol`
--

CREATE TABLE `users_prof_unikol` (
  `uname_prof_unikol` varchar(20) NOT NULL,
  `upass_prof_unikol` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users_prof_unikol`
--

INSERT INTO `users_prof_unikol` (`uname_prof_unikol`, `upass_prof_unikol`) VALUES
('profkapend', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `users_prof_unilu`
--

CREATE TABLE `users_prof_unilu` (
  `uname_prof_unilu` varchar(20) NOT NULL,
  `upass_prof_unilu` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users_prof_unilu`
--

INSERT INTO `users_prof_unilu` (`uname_prof_unilu`, `upass_prof_unilu`) VALUES
('profkapend', '1234');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `etudiant_ulk`
--
ALTER TABLE `etudiant_ulk`
  ADD PRIMARY KEY (`id_etudiant_ulk`);

--
-- Index pour la table `etudiant_unikol`
--
ALTER TABLE `etudiant_unikol`
  ADD PRIMARY KEY (`id_etudiant_unikol`);

--
-- Index pour la table `etudiant_unilu`
--
ALTER TABLE `etudiant_unilu`
  ADD PRIMARY KEY (`id_etudiant_unilu`);

--
-- Index pour la table `etudiant_upc`
--
ALTER TABLE `etudiant_upc`
  ADD PRIMARY KEY (`id_etudiant_upc`);

--
-- Index pour la table `forum_etudiant_ulk`
--
ALTER TABLE `forum_etudiant_ulk`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `forum_etudiant_unikol`
--
ALTER TABLE `forum_etudiant_unikol`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `forum_etudiant_unilu`
--
ALTER TABLE `forum_etudiant_unilu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `forum_etudiant_upc`
--
ALTER TABLE `forum_etudiant_upc`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `note_tp_etudiant_ulk`
--
ALTER TABLE `note_tp_etudiant_ulk`
  ADD PRIMARY KEY (`note_tp_etudiant_upc`);

--
-- Index pour la table `note_tp_etudiant_unikol`
--
ALTER TABLE `note_tp_etudiant_unikol`
  ADD PRIMARY KEY (`note_tp_etudiant_upc`);

--
-- Index pour la table `note_tp_etudiant_unilu`
--
ALTER TABLE `note_tp_etudiant_unilu`
  ADD PRIMARY KEY (`note_tp_etudiant_upc`);

--
-- Index pour la table `note_tp_etudiant_upc`
--
ALTER TABLE `note_tp_etudiant_upc`
  ADD PRIMARY KEY (`note_tp_etudiant_upc`);

--
-- Index pour la table `tp_numerotation_ulk`
--
ALTER TABLE `tp_numerotation_ulk`
  ADD PRIMARY KEY (`num_tp_upc`);

--
-- Index pour la table `tp_numerotation_unikol`
--
ALTER TABLE `tp_numerotation_unikol`
  ADD PRIMARY KEY (`num_tp_upc`);

--
-- Index pour la table `tp_numerotation_unilu`
--
ALTER TABLE `tp_numerotation_unilu`
  ADD PRIMARY KEY (`num_tp_upc`);

--
-- Index pour la table `tp_numerotation_upc`
--
ALTER TABLE `tp_numerotation_upc`
  ADD PRIMARY KEY (`num_tp_upc`);

--
-- Index pour la table `up_files`
--
ALTER TABLE `up_files`
  ADD PRIMARY KEY (`id_tp`);

--
-- Index pour la table `up_files_etudiant`
--
ALTER TABLE `up_files_etudiant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `up_files_etudiant_ulk`
--
ALTER TABLE `up_files_etudiant_ulk`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `up_files_etudiant_unikol`
--
ALTER TABLE `up_files_etudiant_unikol`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `up_files_etudiant_unilu`
--
ALTER TABLE `up_files_etudiant_unilu`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `up_files_ulk`
--
ALTER TABLE `up_files_ulk`
  ADD PRIMARY KEY (`id_tp`);

--
-- Index pour la table `up_files_unikol`
--
ALTER TABLE `up_files_unikol`
  ADD PRIMARY KEY (`id_tp`);

--
-- Index pour la table `up_files_unilu`
--
ALTER TABLE `up_files_unilu`
  ADD PRIMARY KEY (`id_tp`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `etudiant_ulk`
--
ALTER TABLE `etudiant_ulk`
  MODIFY `id_etudiant_ulk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `etudiant_unikol`
--
ALTER TABLE `etudiant_unikol`
  MODIFY `id_etudiant_unikol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `etudiant_unilu`
--
ALTER TABLE `etudiant_unilu`
  MODIFY `id_etudiant_unilu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `etudiant_upc`
--
ALTER TABLE `etudiant_upc`
  MODIFY `id_etudiant_upc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `forum_etudiant_ulk`
--
ALTER TABLE `forum_etudiant_ulk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT pour la table `forum_etudiant_unikol`
--
ALTER TABLE `forum_etudiant_unikol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT pour la table `forum_etudiant_unilu`
--
ALTER TABLE `forum_etudiant_unilu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT pour la table `forum_etudiant_upc`
--
ALTER TABLE `forum_etudiant_upc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT pour la table `note_tp_etudiant_ulk`
--
ALTER TABLE `note_tp_etudiant_ulk`
  MODIFY `note_tp_etudiant_upc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `note_tp_etudiant_unikol`
--
ALTER TABLE `note_tp_etudiant_unikol`
  MODIFY `note_tp_etudiant_upc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `note_tp_etudiant_unilu`
--
ALTER TABLE `note_tp_etudiant_unilu`
  MODIFY `note_tp_etudiant_upc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `note_tp_etudiant_upc`
--
ALTER TABLE `note_tp_etudiant_upc`
  MODIFY `note_tp_etudiant_upc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT pour la table `tp_numerotation_ulk`
--
ALTER TABLE `tp_numerotation_ulk`
  MODIFY `num_tp_upc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `tp_numerotation_unikol`
--
ALTER TABLE `tp_numerotation_unikol`
  MODIFY `num_tp_upc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `tp_numerotation_unilu`
--
ALTER TABLE `tp_numerotation_unilu`
  MODIFY `num_tp_upc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `tp_numerotation_upc`
--
ALTER TABLE `tp_numerotation_upc`
  MODIFY `num_tp_upc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `up_files`
--
ALTER TABLE `up_files`
  MODIFY `id_tp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `up_files_etudiant`
--
ALTER TABLE `up_files_etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `up_files_etudiant_ulk`
--
ALTER TABLE `up_files_etudiant_ulk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `up_files_etudiant_unikol`
--
ALTER TABLE `up_files_etudiant_unikol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `up_files_etudiant_unilu`
--
ALTER TABLE `up_files_etudiant_unilu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `up_files_ulk`
--
ALTER TABLE `up_files_ulk`
  MODIFY `id_tp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `up_files_unikol`
--
ALTER TABLE `up_files_unikol`
  MODIFY `id_tp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `up_files_unilu`
--
ALTER TABLE `up_files_unilu`
  MODIFY `id_tp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

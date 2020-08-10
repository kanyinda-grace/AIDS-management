-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 08 Mai 2019 à 11:10
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Structure de la table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `mat_agent` varchar(15) DEFAULT NULL,
  `code_departement` varchar(10) NOT NULL,
  `nom_agent` varchar(30) DEFAULT NULL,
  `postnom_agent` varchar(30) DEFAULT NULL,
  `prenom_agent` varchar(30) DEFAULT NULL,
  `uname_agent_daf` varchar(30) NOT NULL,
  `upass_agent_daf` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `agent`
--

INSERT INTO `agent` (`id`, `mat_agent`, `code_departement`, `nom_agent`, `postnom_agent`, `prenom_agent`, `uname_agent_daf`, `upass_agent_daf`) VALUES
(6, '00010', 'SEN', 'merline', 'merline', 'merline', 'merline', '1234'),
(7, '1235', 'SEN', 'lokuli', 'bokoluka', 'brunele', 'bul', '22243');

-- --------------------------------------------------------

--
-- Structure de la table `courrier_archive`
--

CREATE TABLE `courrier_archive` (
  `id_courrier_archive` int(10) NOT NULL,
  `numero` int(10) NOT NULL,
  `libelle_type_document_archive` varchar(100) NOT NULL,
  `fichier_document_archive` text NOT NULL,
  `mat_agent` varchar(15) NOT NULL,
  `lien_fichier_document_archive` text NOT NULL,
  `jour_saisie_courrier_archive` int(2) NOT NULL,
  `mois_saisie_courrier_archive` int(2) NOT NULL,
  `annee_saisie_courrier_archive` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `courrier_ent`
--

CREATE TABLE `courrier_ent` (
  `num_lettre_ent` int(100) NOT NULL,
  `libelle_type_document_ent` varchar(100) DEFAULT NULL,
  `code_service` varchar(15) DEFAULT NULL,
  `mat_agent` varchar(15) DEFAULT NULL,
  `objet_ent` text,
  `jour_ent` int(2) NOT NULL,
  `mois_ent` int(2) NOT NULL,
  `annee_ent` int(4) NOT NULL,
  `observation_ent` text,
  `code_sexe` varchar(1) NOT NULL,
  `nom_ent` varchar(200) NOT NULL,
  `postnom_ent` varchar(30) NOT NULL,
  `prenom_ent` varchar(30) NOT NULL,
  `entreprise_ent` varchar(50) NOT NULL,
  `email_ent` varchar(90) NOT NULL,
  `telephone_ent` varchar(15) NOT NULL,
  `date_alerte` varchar(50) NOT NULL,
  `commentaire` varchar(200) NOT NULL,
  `dat_traite` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `courrier_ent`
--

INSERT INTO `courrier_ent` (`num_lettre_ent`, `libelle_type_document_ent`, `code_service`, `mat_agent`, `objet_ent`, `jour_ent`, `mois_ent`, `annee_ent`, `observation_ent`, `code_sexe`, `nom_ent`, `postnom_ent`, `prenom_ent`, `entreprise_ent`, `email_ent`, `telephone_ent`, `date_alerte`, `commentaire`, `dat_traite`) VALUES
(1, 'Courrier', 'DAFF', '00010', 'Demande d\'appui', 22, 4, 2019, 'Déjà traité', 'M', 'RACOJ', '', '', 'RACOJ', '', '', ' 2019/04/30', 'ok', '2019/5/7'),
(2, 'Courrier', 'DAFF', '00010', 'Notre proposition', 22, 4, 2019, 'A traité', 'M', '', '', '', 'Systemage ', '', '', ' 2019/04/26', 'pas de proposition', ''),
(3, 'Courrier', 'DAFR', '00010', 'Demande de congé', 22, 4, 2019, 'A traité', 'M', '', '', '', 'SEP/SUD Ubangi', '', '', ' 2019/04/26', 'A traiter', ''),
(4, 'Courrier', 'DAFR', '00010', 'Demande d\'emploi', 22, 4, 2019, 'En cours', 'M', '', '', '', 'Sylvie MBULU KAMBA', '', '', ' 2019/04/28', 'A traiter ', ''),
(5, 'Courrier', 'DAFR', '00010', 'Demande de mise en disponibilité', 22, 4, 2019, 'A traité', 'M', '', '', '', 'SEP/TSHOPO', '', '', ' 2019/04/28', 'En cours', ''),
(6, 'Courrier', 'DAFF', '00010', 'Frais de participation du Dr Lisa à la revue annuelle PNLS', 23, 4, 2019, 'Déjà traité', 'M', '', '', '', 'Dpt S&E', '', '', ' 2019/04/29', 'OK ', '2019/5/2'),
(7, 'Courrier', 'DAFR', '00010', 'Recommandation de stage', 23, 4, 2019, 'A traité', 'M', 'ULK', '', '', 'ULK', '', '', ' 2019/04/29', 'En cours', ''),
(8, 'Courrier', 'DAFR', '00010', 'Recommandation de stage', 24, 4, 2019, 'A traité', 'M', 'Recommandation de stage', '', '', 'ULK', '', '', ' 2019/04/30', 'En cours', ''),
(9, 'Courrier', 'DAFL', '00010', 'Requête ', 24, 4, 2019, 'Déjà traité', 'M', '', '', '', 'Min de l\'Interieur', '', '', ' 2019/04/30', 'En cours', ''),
(10, 'Courrier', 'DAFL', '00010', 'Sollicitation location salle', 24, 4, 2019, 'Déjà traité', 'M', '', '', '', 'Cabinet d\'Avocat', '', '', ' 2019/04/30', 'En cours', ''),
(11, 'Courrier', 'DAFF', '00010', 'Acompte facture mois d\'Avril', 24, 4, 2019, 'Déjà traité', 'M', '', '', '', 'KAT SECURITY', '', '', ' 2019/04/30', 'ok déjà servi', ''),
(12, 'Courrier', 'DAFF', '00010', 'Solde mois d\'Avril', 24, 4, 2019, 'Déjà traité', 'M', '', '', '', 'KAT SECURITY', '', '', ' 2019/04/30', 'déjà servi', ''),
(13, 'Courrier', 'DAFF', '00010', 'Réponse à votre lettre du 20/03/2019   ', 25, 4, 2019, 'Déjà traité', 'M', '', '', '', 'KAT SECURITY', '', '', ' 2019/04/30', 'ok', ''),
(14, 'Courrier', 'DAFL', '00010', 'Réparation Vitara Nissan', 25, 4, 2019, 'A traité', 'M', '', '', '', 'SEP/KIKWIT', '', '', ' 2019/04/30', 'En cours ', ''),
(15, 'Courrier', 'DAFF', '00010', 'Ordre de mission collectif', 25, 4, 2019, 'En cours', 'M', '', '', '', 'Min des Finances', '', '', ' 2019/04/30', 'Fin à travailler avec l\'équipe', ''),
(16, 'Courrier', 'DAFF', '00010', 'Traitement et analyse de données REDES 2016, 2017 et 2017', 25, 4, 2019, 'Déjà traité', 'M', '', '', '', 'Dpt S&E', '', '', ' 2019/04/30', 'A suivre', ''),
(17, 'Courrier', 'DAFF', '00010', 'Paiement frais de formation en audit ', 25, 1, 2019, 'Déjà traité', 'M', '', '', '', 'FINANCES', '', '', ' 2019/04/30', 'paiement en cours', ''),
(18, 'Courrier', 'DAFR', '00010', 'Blocage et remplacement d\'un agent', 25, 4, 2019, 'Déjà traité', 'M', '', '', '', 'SEN', '', '', ' 2019/04/30', 'A suivre ', ''),
(19, 'Courrier', 'DAFL', '00010', 'Impression carte de visite SEN', 26, 4, 2019, 'Déjà traité', 'M', '', '', '', 'Logistique', '', '', ' 2019/05/02', 'Ok', ''),
(20, 'Courrier', 'DAFF', '00010', 'Ouverture de compte frais de fonctionnement', 29, 1, 2019, 'Déjà traité', 'M', '', '', '', 'SEN', '', '', ' 2019/05/05', 'A suivre ', ''),
(21, 'Courrier', 'DAFL', '00010', 'Frais de relire de pièce justificatif', 29, 1, 2019, 'Déjà traité', 'M', '', '', '', 'Logistique', '', '', ' 2019/04/JJ', 'Déjà traité', ''),
(22, 'Courrier', 'DAFF', '00010', 'Demande d\'autorisation pour la formation et congé annuel', 29, 4, 2019, 'Déjà traité', 'M', '', '', '', 'David MUAMBAi', '', '', ' 2019/05/05', 'Dossier en cours', ''),
(23, 'Courrier', 'DAFR', '00010', 'Facture n° 17/19', 29, 4, 2019, 'A traité', 'M', '', '', '', 'CGAT', '', '', ' 2019/05/05', 'Dossier en cours', ''),
(24, 'Courrier', 'DAFR', '00010', 'Échéancier pour solder la cotisation de la 2ème tranche', 29, 4, 2019, 'Déjà traité', 'M', '', '', '', 'CGAT', '', '', ' 2019/05/05', 'ok', ''),
(25, 'Courrier', 'DAFR', '00010', 'Demande de stage', 29, 4, 2019, 'A traité', 'M', '', '', '', 'NABINTU UVIRA', '', '', ' 2019/05/05', 'En cours', ''),
(26, 'Courrier', 'DAFR', '00010', 'Recommandation de stage', 29, 4, 2019, 'A traité', 'M', '', '', '', 'UNKIN', '', '', ' 2019/05/05', 'En cours', ''),
(27, 'Courrier', 'DAFR', '00010', 'Demande de de stage', 29, 4, 2019, 'A traité', 'M', '', '', '', 'Sylvain KABILA', '', '', ' 2019/05/05', 'Dossier en cours', ''),
(28, 'Courrier', 'DAFF', '00010', 'Rapport sur les activités réalisées mois avril 2019', 29, 4, 2019, 'Déjà traité', 'M', '', '', '', 'Logistique', '', '', ' 2019/05/05', 'A suivre ', ''),
(29, 'Courrier', 'DAFR', '00010', 'Recommandation pour stage', 29, 4, 2019, 'A traité', 'M', '', '', '', 'IFASIC', '', '', ' 2019/05/05', 'En cours', ''),
(30, 'Courrier', 'DAFF', '00010', 'Prime Adm/mission SEN', 3, 5, 2019, 'En cours', 'M', '', '', '', 'Logistique', '', '', ' 2019/05/06', 'A traiter', ''),
(31, 'Courrier', 'DAFR', '00010', 'Demande de stage professionnel', 3, 5, 2019, 'A traité', 'M', '', '', '', 'HEKINA KIDOGE', '', '', ' 2019/05/9', 'En cours', ''),
(32, 'Courrier', 'DAFR', '00010', 'Demande de stage', 3, 5, 2019, 'A traité', 'M', '', '', '', 'MAKOLO BILOTA', '', '', ' 2019/05/9', 'En cours', '');

-- --------------------------------------------------------

--
-- Structure de la table `courrier_sort`
--

CREATE TABLE `courrier_sort` (
  `num_lettre_sort` int(11) NOT NULL,
  `code_service` varchar(30) NOT NULL,
  `mat_agent` varchar(50) NOT NULL,
  `objet_sort` varchar(150) NOT NULL,
  `jour_sort` int(2) NOT NULL,
  `mois_sort` int(2) NOT NULL,
  `annee_sort` int(4) NOT NULL,
  `observation_sort` varchar(50) NOT NULL,
  `code_sexe` varchar(5) NOT NULL,
  `nom_sort` varchar(30) NOT NULL,
  `postnom_sort` varchar(30) NOT NULL,
  `prenom_sort` varchar(30) NOT NULL,
  `entreprise_sort` varchar(200) NOT NULL,
  `email_sort` varchar(50) NOT NULL,
  `telephone_sort` varchar(15) NOT NULL,
  `commentaire_sort` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `code_departement` varchar(15) DEFAULT NULL,
  `libelle_departement` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `departement`
--

INSERT INTO `departement` (`code_departement`, `libelle_departement`) VALUES
('SEN', 'SECRETARIAT EXECUTIF NATIONAL'),
('', '');

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id_fonction` varchar(15) DEFAULT NULL,
  `libelle_fonction` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `fonction`
--

INSERT INTO `fonction` (`id_fonction`, `libelle_fonction`) VALUES
('SA', 'SECRETAIRE ASSISTANT(E)'),
('SD', 'SECRETAIRE DE DIRECTION'),
('SEN', 'SECRETAIRE EXECUTIF NATIONAL');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `code_service` varchar(15) DEFAULT NULL,
  `libelle_service` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`code_service`, `libelle_service`) VALUES
('DAFF', 'DAF/FINANCE'),
('DAFL', 'DAF/LOGISTIQUE'),
('DAFR', 'DAF/RH'),
('CP', 'COPERATION ET PARTENARIAT'),
('PRC', 'PLANIFICATION ET RENFORCEMENT DES CAPACITES'),
('SEV', 'SUIVI ET EVALUATION'),
('SEN', 'SECRETARIAT EXECUTIF NATIONAL'),
('SEP', 'SECRETARIAT ET PROTOCOLE'),
('AC', 'AUDIT ET CONTENTIEUX'),
('INFO', 'INFORMATIQUE');

-- --------------------------------------------------------

--
-- Structure de la table `sexe`
--

CREATE TABLE `sexe` (
  `code_sexe` varchar(1) NOT NULL,
  `libelle_sexe` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `sexe`
--

INSERT INTO `sexe` (`code_sexe`, `libelle_sexe`) VALUES
('M', 'MASCULIN'),
('F', 'FEMININ');

-- --------------------------------------------------------

--
-- Structure de la table `type_courrier`
--

CREATE TABLE `type_courrier` (
  `id` int(11) NOT NULL,
  `id_type_courrier` varchar(15) DEFAULT NULL,
  `libelle_type_courrier` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type_courrier`
--

INSERT INTO `type_courrier` (`id`, `id_type_courrier`, `libelle_type_courrier`) VALUES
(1, 'ARV', 'ARRIVE'),
(2, 'DPR', 'DEPART');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `courrier_archive`
--
ALTER TABLE `courrier_archive`
  ADD PRIMARY KEY (`id_courrier_archive`);

--
-- Index pour la table `courrier_ent`
--
ALTER TABLE `courrier_ent`
  ADD PRIMARY KEY (`num_lettre_ent`);

--
-- Index pour la table `courrier_sort`
--
ALTER TABLE `courrier_sort`
  ADD PRIMARY KEY (`num_lettre_sort`);

--
-- Index pour la table `type_courrier`
--
ALTER TABLE `type_courrier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `courrier_archive`
--
ALTER TABLE `courrier_archive`
  MODIFY `id_courrier_archive` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `courrier_ent`
--
ALTER TABLE `courrier_ent`
  MODIFY `num_lettre_ent` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT pour la table `courrier_sort`
--
ALTER TABLE `courrier_sort`
  MODIFY `num_lettre_sort` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `type_courrier`
--
ALTER TABLE `type_courrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 03, 2019 at 06:35 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestcourrier_archivage`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

DROP TABLE IF EXISTS `agent`;
CREATE TABLE IF NOT EXISTS `agent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mat_agent` varchar(15) DEFAULT NULL,
  `code_departement` varchar(10) NOT NULL,
  `nom_agent` varchar(30) DEFAULT NULL,
  `postnom_agent` varchar(30) DEFAULT NULL,
  `prenom_agent` varchar(30) DEFAULT NULL,
  `uname_agent_daf` varchar(30) NOT NULL,
  `upass_agent_daf` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `mat_agent`, `code_departement`, `nom_agent`, `postnom_agent`, `prenom_agent`, `uname_agent_daf`, `upass_agent_daf`) VALUES
(6, '00010', 'SEN', 'merline', 'merline', 'merline', 'merline', '1234'),
(7, '1235', 'SEN', 'lokuli', 'bokoluka', 'brunele', 'bul', '22243');

-- --------------------------------------------------------

--
-- Table structure for table `courrier_archive`
--

DROP TABLE IF EXISTS `courrier_archive`;
CREATE TABLE IF NOT EXISTS `courrier_archive` (
  `id_courrier_archive` int(10) NOT NULL AUTO_INCREMENT,
  `numero` int(10) NOT NULL,
  `libelle_type_document_archive` varchar(100) NOT NULL,
  `fichier_document_archive` text NOT NULL,
  `mat_agent` varchar(15) NOT NULL,
  `lien_fichier_document_archive` text NOT NULL,
  `jour_saisie_courrier_archive` int(2) NOT NULL,
  `mois_saisie_courrier_archive` int(2) NOT NULL,
  `annee_saisie_courrier_archive` int(4) NOT NULL,
  PRIMARY KEY (`id_courrier_archive`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courrier_archive`
--

INSERT INTO `courrier_archive` (`id_courrier_archive`, `numero`, `libelle_type_document_archive`, `fichier_document_archive`, `mat_agent`, `lien_fichier_document_archive`, `jour_saisie_courrier_archive`, `mois_saisie_courrier_archive`, `annee_saisie_courrier_archive`) VALUES
(1, 726, 'Courrier', '37674-upload-de-fichiers-par-formulaire.pdf', '00010', 'uploads/37674-upload-de-fichiers-par-formulaire.pdf', 3, 10, 2018),
(2, 727, 'Courrier', '134798-apprenez-a-programmer-en-vb-net.pdf', '00010', 'uploads/134798-apprenez-a-programmer-en-vb-net.pdf', 3, 10, 2018),
(3, 728, 'Courrier', '31976-stocker-les-sessions-dans-votre-base-de-donnees.pdf', '00010', 'uploads/31976-stocker-les-sessions-dans-votre-base-de-donnees.pdf', 3, 10, 2018),
(4, 729, 'Courrier', '2018-08-3-08-32-46_lettre_Mairie_Lubumbashi_sur_arrive_Moise.pdf', '00010', 'uploads/2018-08-3-08-32-46_lettre_Mairie_Lubumbashi_sur_arrive_Moise.pdf', 10, 10, 2018),
(5, 730, 'Courrier', '32719-creer-un-systeme-de-newsletter.pdf', '00010', 'uploads/32719-creer-un-systeme-de-newsletter.pdf', 10, 10, 2018),
(6, 731, 'Courrier', '31976-stocker-les-sessions-dans-votre-base-de-donnees.pdf', '00010', 'uploads/31976-stocker-les-sessions-dans-votre-base-de-donnees.pdf', 13, 10, 2018),
(7, 732, 'Courrier', '235061-creer-des-gif-animes.pdf', '00010', 'uploads/235061-creer-des-gif-animes.pdf', 10, 10, 2018),
(8, 733, 'Courrier', '346829-apprenez-le-fonctionnement-des-reseaux-tcp-ip.pdf', '00010', 'uploads/346829-apprenez-le-fonctionnement-des-reseaux-tcp-ip.pdf', 9, 10, 2018),
(9, 734, 'Courrier', '235061-creer-des-gif-animes.pdf', '00010', 'uploads/235061-creer-des-gif-animes.pdf', 12, 10, 2018),
(10, 735, 'Courrier', '32719-creer-un-systeme-de-newsletter.pdf', '00010', 'uploads/32719-creer-un-systeme-de-newsletter.pdf', 14, 10, 2018),
(11, 5555, 'LETTRE', '37674-upload-de-fichiers-par-formulaire.pdf', '00010', 'uploads/37674-upload-de-fichiers-par-formulaire.pdf', 9, 10, 2018);

-- --------------------------------------------------------

--
-- Table structure for table `courrier_ent`
--

DROP TABLE IF EXISTS `courrier_ent`;
CREATE TABLE IF NOT EXISTS `courrier_ent` (
  `num_lettre_ent` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`num_lettre_ent`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courrier_ent`
--

INSERT INTO `courrier_ent` (`num_lettre_ent`, `libelle_type_document_ent`, `code_service`, `mat_agent`, `objet_ent`, `jour_ent`, `mois_ent`, `annee_ent`, `observation_ent`, `code_sexe`, `nom_ent`, `postnom_ent`, `prenom_ent`, `entreprise_ent`, `email_ent`, `telephone_ent`, `date_alerte`) VALUES
(1, 'Courrier', 'DAFF', '00010', ' fgygu', 1, 1, 2018, 'A traité', 'M', 'benga', 'fidelijne', 'fidele', 'OMS', 'desiibukasa@gmail.com', '0817711903', ' 2018/12/28'),
(2, 'Courrier', 'CP', '00010', 'hhjji', 1, 4, 2018, 'Déjà traité', 'M', 'malamba', 'fidelijne', 'fidele', 'individu', 'desiibukasa@gmail.com', '0976164329', ' 2018/12/24');

-- --------------------------------------------------------

--
-- Table structure for table `courrier_sort`
--

DROP TABLE IF EXISTS `courrier_sort`;
CREATE TABLE IF NOT EXISTS `courrier_sort` (
  `num_lettre_sort` int(11) NOT NULL AUTO_INCREMENT,
  `num_lettre_ent` int(11) NOT NULL,
  `mat_agent` varchar(15) DEFAULT NULL,
  `jour_sort` int(2) NOT NULL,
  `mois_sort` int(2) NOT NULL,
  `annee_sort` int(4) NOT NULL,
  `dat_traite` varchar(15) NOT NULL,
  PRIMARY KEY (`num_lettre_sort`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courrier_sort`
--

INSERT INTO `courrier_sort` (`num_lettre_sort`, `num_lettre_ent`, `mat_agent`, `jour_sort`, `mois_sort`, `annee_sort`, `dat_traite`) VALUES
(1, 1, '00010', 1, 1, 2018, '2018/1/1'),
(2, 2, '00010', 12, 12, 2018, '2018/12/12');

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `code_departement` varchar(15) DEFAULT NULL,
  `libelle_departement` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`code_departement`, `libelle_departement`) VALUES
('SEN', 'SECRETARIAT EXECUTIF NATIONAL'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `fonction`
--

DROP TABLE IF EXISTS `fonction`;
CREATE TABLE IF NOT EXISTS `fonction` (
  `id_fonction` varchar(15) DEFAULT NULL,
  `libelle_fonction` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fonction`
--

INSERT INTO `fonction` (`id_fonction`, `libelle_fonction`) VALUES
('SA', 'SECRETAIRE ASSISTANT(E)'),
('SD', 'SECRETAIRE DE DIRECTION'),
('SEN', 'SECRETAIRE EXECUTIF NATIONAL');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `code_service` varchar(15) DEFAULT NULL,
  `libelle_service` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
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
-- Table structure for table `sexe`
--

DROP TABLE IF EXISTS `sexe`;
CREATE TABLE IF NOT EXISTS `sexe` (
  `code_sexe` varchar(1) NOT NULL,
  `libelle_sexe` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sexe`
--

INSERT INTO `sexe` (`code_sexe`, `libelle_sexe`) VALUES
('M', 'MASCULIN'),
('F', 'FEMININ');

-- --------------------------------------------------------

--
-- Table structure for table `type_courrier`
--

DROP TABLE IF EXISTS `type_courrier`;
CREATE TABLE IF NOT EXISTS `type_courrier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_type_courrier` varchar(15) DEFAULT NULL,
  `libelle_type_courrier` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_courrier`
--

INSERT INTO `type_courrier` (`id`, `id_type_courrier`, `libelle_type_courrier`) VALUES
(1, 'ARV', 'ARRIVE'),
(2, 'DPR', 'DEPART');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

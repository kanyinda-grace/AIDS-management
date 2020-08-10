-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mar 26 Février 2019 à 09:37
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
  `commentaire` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `courrier_ent`
--

INSERT INTO `courrier_ent` (`num_lettre_ent`, `libelle_type_document_ent`, `code_service`, `mat_agent`, `objet_ent`, `jour_ent`, `mois_ent`, `annee_ent`, `observation_ent`, `code_sexe`, `nom_ent`, `postnom_ent`, `prenom_ent`, `entreprise_ent`, `email_ent`, `telephone_ent`, `date_alerte`, `commentaire`) VALUES
(1, 'Courrier', 'DAFF', '00010', 'Facture N002/01/019', 7, 1, 2019, 'Déjà traité', 'M', 'MICHEL OMBA', '', '', 'CABINET AND PARTNERS LAW FIRM', '', '', ' 2019/02/7', '  '),
(2, 'Courrier', 'DAFF', '00010', ' Demande de paiement des arrieres primes pour les septembre,octobre,novembre et decembre 2018', 7, 1, 2019, 'A traité', 'M', '', '', '', 'Ministrere de l\'interieur  et Securité  police Nat', '', '', ' 2019/01/21', '  '),
(3, 'Courrier', 'DAFF', '00010', ' Transmis etat de paie mois de janvier 2019', 7, 1, 2019, 'A traité', 'M', '', '', '', 'Ministrere de l\'interieur  et Securité  police Nat', '', '', ' 2019/01/14', '  '),
(4, 'Courrier', 'SEN', '00010', ' Demande de la ration alimenataire des policiers en détachement au PNMLS', 7, 1, 2019, 'A traité', 'M', '', '', '', 'Ministrere de l\'interieur  et Securité  police Nat', '', '', ' 2019/01/14', '  '),
(5, 'Courrier', 'DAFF', '00010', ' Demande de la salle de réunion pour la la réunion mensuelle', 7, 1, 2019, 'A traité', 'M', '', '', '', 'The internasional community of women living with h', '', '', ' 2019/01/14', '  '),
(6, 'Courrier', 'DAFF', '00010', ' Demande de contrat pour disposition de préparation de la clocture prélligne de PNMLS', 8, 1, 2019, 'A traité', 'M', '', '', '', 'Commune de kasa-Vubu', '', '', ' 2019/01/22', '  '),
(7, 'Courrier', 'SEN', '00010', ' Demande de Partenariat', 8, 1, 2019, 'A traité', 'M', '', '', '', 'Grace Fondaction', '', '', ' 2019/01/22', '  '),
(8, 'Courrier', 'SEN', '00010', ' Demande d\'emploi', 15, 1, 2019, 'A traité', 'M', 'KABAMBA', 'MUIKADILA', '', '', '', '', ' 2019/01/30', '  '),
(9, 'Courrier', 'DAFR', '00010', 'Demande de stage Professionnel', 15, 1, 2019, 'A traité', 'M', 'kUETE KIMANGA', '', '', '', '', '', ' 2019/01/30', '  '),
(10, 'Courrier', 'DAFF', '00010', ' Demande  d\'avance sur prime', 15, 1, 2019, 'A traité', 'M', 'MOSI', 'TUDILA', '', '', '', '', ' 2019/01/30', '  '),
(11, 'Courrier', 'SEN', '00010', ' Invitation\r\nParquet Tripaix', 15, 1, 2019, 'A traité', 'M', '', '', '', 'Près le Pont kasa-vubu', '', '', ' 2019/01/30', '  '),
(12, 'Courrier', 'SEN', '00010', ' Accusé de réception', 15, 1, 2019, 'A traité', 'M', '', '', '', 'Inspectorat Général des Forces Armées de la RDC', '', '', ' 2019/01/30', '  '),
(13, 'Courrier', 'SEN', '00010', ' ICW \r\nles voeux', 15, 1, 2019, 'Déjà traité', 'M', 'SENA', '', '', '', '', 'PNMLS', ' 2019/01/30', '  '),
(14, 'Courrier', 'SEN', '00010', ' ICW\r\nLes voeux', 15, 1, 2019, 'Déjà traité', 'M', 'SENA', '', '', 'PNMLS', '', '', ' 2019/01/30', '  '),
(15, 'Courrier', 'SEN', '00010', ' Transmission rapport financier Annuel 2018', 15, 1, 2019, 'A traité', 'M', '', '', '', 'Secrétariat Excutif Provincial du Kasai', '', '', ' 2019/01/30', '  '),
(16, 'Courrier', 'SEN', '00010', ' Demande de congé statutaire 2018', 21, 1, 2019, 'A traité', 'M', 'Paulin BUSHIRI', '', '', 'PNMLS', '', '', ' 2019/01/28', '  '),
(17, 'Courrier', 'SEN', '00010', ' Demande d\'expertise pour la supervission ', 21, 1, 2019, 'A traité', 'M', '', '', '', 'UCOP+', '', '', ' 2019/01/28', '  '),
(18, 'Courrier', 'SEN', '00010', ' Demande de prêt', 21, 1, 2019, 'A traité', 'M', '', '', '', 'NSIKU MAVINGA', '', '', ' 2019/01/28', '  '),
(19, 'Courrier', 'SEN', '00010', ' Motivation', 21, 1, 2019, 'A traité', 'M', 'MUSHIYA ', 'ELEMBO', '', '', '', '', ' 2019/01/28', '  '),
(20, 'Courrier', 'SEN', '00010', ' Facture', 21, 1, 2019, 'A traité', 'M', 'MULHILE', '', 'OLIVIER', '', '', '', ' 2019/01/28', '  '),
(21, 'Courrier', 'DAFF', '00010', 'Situation de votre compte en nos livres \r\nau 31/12/2018. police N°1299000434K. ', 21, 1, 2019, 'A traité', 'M', '', '', '', 'Sonas', '', '', ' 2019/01/28', '  '),
(22, 'Courrier', 'SEN', '00010', ' Assistance pour les soins', 21, 1, 2019, 'A traité', 'M', 'BONDO', 'NDOMBASI', '', '', '', '', ' 2019/01/28', '  '),
(23, 'Courrier', 'SEN', '00010', ' Demande de transfert', 21, 1, 2019, 'A traité', 'M', 'Dr MPALE', '', 'RAMS', '', '', '', ' 2019/01/28', '  '),
(24, 'Courrier', 'SEN', '00010', ' Rapport  financier Annuel 2018\r\n', 21, 1, 2019, 'A traité', 'M', '', '', '', 'Sep Kwango', '', '', ' 2019/01/28', '  '),
(25, 'Courrier', 'SEN', '00010', 'Note Explicative', 21, 1, 2019, 'A traité', 'M', '', '', '', 'ICW', '', '', ' 2019/01/28', '  '),
(26, 'Courrier', 'SEN', '00010', ' Transmission de Rapport Financier et pièces\r\nJustificatives Fonctionnement mois d&quot;octobre 2018\r\n', 21, 1, 2019, 'Déjà traité', 'M', '', '', '', 'Sep Nord-Kivu', '', '', ' 2019/01/28', '  '),
(27, 'Courrier', 'SEN', '00010', ' Rapport Financier des frais de Fonctionnement', 21, 1, 2019, 'A traité', 'M', '', '', '', 'Sep Katanga', '', '', ' 2019/01/28', '  '),
(28, 'Courrier', 'SEN', '00010', ' Demande de Stage', 21, 1, 2019, 'A traité', 'F', 'NDUAYA', 'MUKENGE', 'Sophie', '', '', '', ' 2019/01/28', '  '),
(29, 'Courrier', 'SEN', '00010', ' Demande d\'Emploi', 22, 1, 2019, 'A traité', 'M', 'MUSAKA ', 'MUELA', 'Karmey', '', '', '', ' 2019/01/29', '  '),
(30, 'Courrier', 'SEN', '00010', ' Recommandation', 22, 1, 2019, 'A traité', 'M', '', '', '', 'Ministère des affaires Etrangere et integraction R', '', '', ' 2019/01/29', '  '),
(31, 'Courrier', 'SEN', '00010', ' Soutien du Projet', 22, 1, 2019, 'A traité', 'M', 'KIANSUMBA', 'SUKAMA', '', '', '', '', ' 2019/01/29', '  '),
(32, 'Courrier', 'SEN', '00010', ' Demande Retro Projecteur', 22, 1, 2019, 'A traité', 'M', '', '', '', 'ICW', '', '', ' 2019/01/29', '  '),
(33, 'Courrier', 'SEN', '00010', ' Meilleur Voeux pour l\'Année 2019', 22, 1, 2019, 'A traité', 'M', '', '', '', 'CGAT', '', '', ' 2019/01/29', '  '),
(34, 'Courrier', 'SEN', '00010', ' Demande de Stage Professionnel', 22, 1, 2019, 'A traité', 'F', 'MATONDO', '', 'Syntiche', '', '', '', ' 2019/01/29', '  '),
(35, 'Courrier', 'SEN', '00010', ' Demande de Stage Professionnel', 22, 1, 2019, 'A traité', 'M', 'MATONDO', 'MAMONEKE', 'Espoir', '', '', '', ' 2019/01/29', '  '),
(36, 'Courrier', 'SEN', '00010', 'Facture', 22, 1, 2019, 'A traité', 'M', 'SHEKINAH', 'SAGE', 'SONS', '', '', '', ' 2019/01/29', '  '),
(37, 'Courrier', 'SEN', '00010', ' Rapport de paie des arrierés de smois de septembre, octobre, novembre et decembre 2018', 22, 1, 2019, 'A traité', 'M', '', '', '', 'Ministrere de l\'interieur  et Securité  police Nat', '', '', ' 2019/01/29', '  '),
(38, 'Courrier', 'SEN', '00010', ' Désignation Experts', 22, 1, 2019, 'A traité', 'M', '', '', '', 'Ministère des affaires Etrangere et integraction R', '', '', ' 2019/01/29', '  '),
(39, 'Courrier', 'SEN', '00010', ' Demande de Pret', 22, 1, 2019, 'A traité', 'M', 'INYONGO', '', 'Serge', '', '', '', ' 2019/01/29', '  '),
(40, 'Courrier', 'SEN', '00010', ' Demande de Stage Professionnel', 24, 1, 2019, 'A traité', 'F', 'OLONE ', '', 'Joèlle', '', '', '', ' 2019/01/30', '  '),
(41, 'Courrier', 'SEN', '00010', ' Rapport Financier Annuel 2018', 24, 1, 2019, 'A traité', 'M', '', '', '', 'Sep Lualaba/Kolwezi', '', '', ' 2019/01/30', '  '),
(42, 'Courrier', 'SEN', '00010', ' Transmission justificatifs mois de septembre Rapport Financier Annuel 2018', 24, 1, 2019, 'A traité', 'M', '', '', '', 'Sep/Haut-Uele', '', '', ' 2019/01/30', '  '),
(43, 'Courrier', 'SEN', '00010', ' Tansmission Justificatifs mois d\'octobre 2018', 24, 1, 2019, 'A traité', 'M', '', '', '', 'Sep/Haut-Uele', '', '', ' 2019/01/30', '  '),
(44, 'Courrier', 'SEN', '00010', ' Transmission Rapport Annuel de Gestion Personnel', 24, 1, 2019, 'A traité', 'M', '', '', '', 'Sep/Haut-Uele', '', '', ' 2019/01/30', '  '),
(45, 'Courrier', 'SEN', '00010', ' Rapport Financier 4eme Trimestre2018', 24, 1, 2019, 'A traité', 'M', '', '', '', 'Sep/Bas-Uele', '', '', ' 2019/01/30', '  '),
(46, 'Courrier', 'SEN', '00010', ' Justification des frais  de fonctionnement mois d\'otobre 2018', 24, 1, 2019, 'A traité', 'M', '', '', '', 'Sep/Bas-Uele', '', '', ' 2019/01/30', '  '),
(47, 'Courrier', 'SEN', '00010', ' L\'arrté partour ma nomination ', 24, 1, 2019, 'A traité', 'M', 'SINDANI', '', 'Gratien', '', '', '', ' 2019/01/30', '  '),
(48, 'Courrier', 'SEN', '00010', ' Tableau Recapulatif Budgetaire mois Janvier 2019', 24, 1, 2019, 'A traité', 'M', '', '', '', 'Sep/Tshopo', '', '', ' 2019/01/30', '  '),
(49, 'Courrier', 'SEN', '00010', ' Rapport menseul d\'activités Réalisées Décembre 2019', 24, 1, 2019, 'A traité', 'M', '', '', '', 'Sep/Kasai', '', '', ' 2019/01/30', '  '),
(50, 'Courrier', 'SEN', '00010', ' Transmission Prièce Justificatif frais de Fonctionnement d\'otobre 2018', 24, 1, 2019, 'A traité', 'M', '', '', '', 'Sep/Kasai Cenral', '', '', ' 2019/01/30', '  '),
(51, 'Courrier', 'SEN', '00010', ' Transmission Rapport Financier Synthèse 2018 ', 24, 1, 2019, 'A traité', 'M', '', '', '', 'Sep/Kasai Cenral', '', '', ' 2019/02/31', '  '),
(52, 'Courrier', 'SEN', '00010', ' Facture N°0024', 24, 1, 2019, 'A traité', 'M', '', '', '', 'Kat Security', '', '', ' 2019/02/31', '  '),
(53, 'Courrier', 'SEN', '00010', ' Facture n°0025', 28, 1, 2019, 'A traité', 'M', '', '', '', 'Sage-Sons', '', '', ' 2019/02/07', '  '),
(54, 'Courrier', 'SEN', '00010', ' Congé de reconstitution ', 28, 1, 2019, 'A traité', 'F', 'MUMBA', '', 'Pélagie', 'PNMLS', '', '', ' 2019/02/JJ', '  '),
(55, 'Courrier', 'SEN', '00010', ' Fonctionnement Octobre 2018', 28, 1, 2019, 'A traité', 'M', '', '', '', 'Sep/Kasai Oriental', '', '', ' 2019/02/7', '  '),
(56, 'Courrier', 'SEN', '00010', ' Demande de Soutien', 28, 1, 2019, 'A traité', 'M', '', '', '', 'Archidiocèse de Kinshasa/Saint Kibuta', '', '', ' 2019/02/07', '  '),
(57, 'Courrier', 'SEN', '00010', ' Demande de soutien  et sponsoring pour final concours MISS', 28, 1, 2019, 'A traité', 'M', '', '', '', 'Amogo Starmodel', '', '', ' 2019/02/07', '  '),
(58, 'Courrier', 'SEN', '00010', ' Modification d\'Opposition et Assignation ', 28, 1, 2019, 'A traité', 'F', '', '', '', 'Maison Communal de Kasa-vubu', '', '', ' 2019/02/07', '  '),
(59, 'Courrier', 'SEN', '00010', ' Demande  d\'occupation de la salle de Réunion PNMLS ', 28, 1, 2019, 'A traité', 'M', '', '', '', 'Ciels', '', '', ' 2019/02/07', '  '),
(60, 'Courrier', 'DAFF', '00010', ' Autorisation de sortie n°006', 28, 1, 2019, 'A traité', 'M', '', '', '', 'Etat Majort du Renseignement du département  SECUR', '', '', ' 2019/02/07', '  '),
(61, 'Courrier', 'SEN', '00010', ' Demande de stage Professionnel', 29, 1, 2019, 'A traité', 'F', 'NGOWE', '', 'Dena', '', '', '', ' 2019/02/08', '  '),
(62, 'Courrier', 'SEN', '00010', 'Mission suivi par cours kalemie et katanga', 29, 1, 2019, 'A traité', 'M', '', '', '', 'PNUD', '', '', ' 2019/02/08', '  '),
(63, 'Courrier', 'SEN', '00010', ' Congé annuel de reconstitution ', 30, 1, 2019, 'A traité', 'M', 'BOKELO', '', 'Rufin', '', '', '', ' 2019/02/06', '  '),
(64, 'Courrier', 'SEN', '00010', 'Désignation point focal', 30, 1, 2019, 'A traité', 'M', '', '', '', 'AUDITORAT GENERAL', '', '', ' 2019/02/06', '  '),
(65, 'Courrier', 'SEN', '00010', ' Rapport  Narratif  D\'activité JMS 2018', 30, 1, 2019, 'A traité', 'M', '', '', '', 'Sep/Kasai Cenral', '', '', ' 2019/02/06', '  '),
(66, 'Courrier', 'SEN', '00010', ' Etat de lieu valise VSAT', 30, 1, 2019, 'A traité', 'M', '', '', '', 'Sep/Ituri', '', '', ' 2019/02/06', '  '),
(67, 'Courrier', 'SEN', '00010', ' Micro - évaluation', 30, 1, 2019, 'A traité', 'M', '', '', '', 'UNFPA', '', '', ' 2019/02/06', '  '),
(68, 'Courrier', 'SEN', '00010', ' Invitation', 30, 1, 2019, 'A traité', 'M', '', '', '', 'Ciels', '', '', ' 2019/02/06', '  '),
(69, 'Courrier', 'SEN', '00010', ' Justification de frais de fonctionnement ', 30, 1, 2019, 'A traité', 'M', '', '', '', 'Sep/Ituri', '', '', ' 2019/02/06', '  '),
(70, 'Courrier', 'SEN', '00010', ' Rapport financier Décembre 2018', 30, 1, 2019, 'A traité', 'M', 'SEN', '', '', 'PNMLS', '', '', ' 2019/02/06', '  '),
(71, 'Courrier', 'SEN', '00010', 'Demande de la régularisation administrative', 30, 1, 2019, 'A traité', 'M', '', '', '', 'Equipe d\'entretien  parcelle du PNMLS', '', '', ' 2019/02/06', '  '),
(72, 'Courrier', 'SEN', '00010', ' Facture', 31, 1, 2019, 'A traité', 'M', '', '', '', 'ORANGE', '', '', ' 2019/02/07', '  '),
(73, 'Courrier', 'SEN', '00010', ' Transmission de la convention de collaboration', 31, 1, 2019, 'A traité', 'M', '', '', '', 'CGAT', '', '', ' 2019/02/07', '  '),
(74, 'Courrier', 'SEN', '00010', ' Rapport des activités JMS 2018', 31, 1, 2019, 'A traité', 'M', '', '', '', 'Sep/Maniema', '', '', ' 2019/02/07', '  '),
(75, 'Courrier', 'SEN', '00010', ' Demande d\'installation des containers/Bureau provincial du RENADEF', 1, 2, 2019, 'A traité', 'M', '', '', '', 'RENADEF', '', '', ' 2019/02/08', '  '),
(76, 'Courrier', 'SEN', '00010', ' Lettre d\'engagement ', 1, 2, 2019, 'A traité', 'M', 'KIBWA', '', 'Michée ', '', '', '', ' 2019/02/08', '  '),
(77, 'Courrier', 'SEN', '00010', ' Demande de Partenariat et Paie partie des réseaux PNMLS', 4, 2, 2019, 'A traité', 'M', '', '', '', 'ONGD', '', '', ' 2019/02/11', '  '),
(78, 'Courrier', 'SEN', '00010', ' Transmission facture d\'abonnement mensuel  mois de janvier 2019 et Solde décembre', 4, 2, 2019, 'A traité', 'M', 'OMBA', '', 'Michel', '', '', '', ' 2019/02/11', '  '),
(79, 'Courrier', 'SEN', '00010', ' Prise en demeure ', 4, 2, 2019, 'A traité', 'M', '', '', '', 'SNEL', '', '', ' 2019/02/11', '  '),
(80, 'Courrier', 'SEN', '00010', ' Facture', 4, 2, 2019, 'A traité', 'M', '', '', '', 'ORANGE', '', '', ' 2019/02/11', '  '),
(81, 'Courrier', 'SEN', '00010', 'Bon de sortie des calendriers 2019', 4, 2, 2019, 'A traité', 'M', '', '', '', 'PNUD', '', '', ' 2019/02/11', '  '),
(82, 'Courrier', 'DAFF', '00010', ' Attestation médical/000j/4+813/2019', 1, 2, 2019, 'A traité', 'M', '', '', '', 'Centre médical Angiologue', '', '', ' 2019/02/JJ', '  '),
(83, 'Courrier', 'SEN', '00010', ' Demande de ration alimentaire pris de février ', 4, 2, 2019, 'A traité', 'M', '', '', '', 'Police de Garde ', '', '', ' 2019/02/11', '  '),
(84, 'Courrier', 'SEN', '00010', ' Facture de mois de janvier ', 4, 2, 2019, 'A traité', 'M', '', '', '', 'FENIX', '', '', ' 2019/02/11', '  '),
(85, 'Courrier', 'AC', '00010', 'Sommation de conclure', 4, 2, 2019, 'A traité', 'M', '', '', '', 'Pouvoir Judiciaire', '', '', ' 2019/02/18', 'Voir le Cabinet Me OMBA'),
(86, 'Courrier', 'CP', '00010', 'Rapport de commémoration JMS 2018', 4, 2, 2019, 'A traité', 'M', '', '', '', 'SEP/KWANGO', '', '', ' 2019/02/JJ', 'Voir partenariat'),
(87, 'Courrier', 'DAFF', '00010', 'Facture', 4, 2, 2019, 'A traité', 'M', '', '', '', 'Printing HOUSE', '', '', ' 2019/02/JJ', 'Voir le DAF'),
(88, 'Courrier', 'CP', '00010', 'Dépôt de rapport de stage', 4, 2, 2019, 'A traité', 'M', '', '', '', 'KANYAMA JOEL', '', '', ' 2019/02/JJ', 'Voir CSCP'),
(89, 'Courrier', 'DAFR', '00010', 'Demande de stage professionnel', 11, 2, 2018, 'A traité', 'M', '', '', '', 'MAXIM CONSULT', '', '', ' 2019/02/JJ', 'Voir RH'),
(90, 'Courrier', 'DAFR', '00010', 'Demande de stage ', 11, 2, 2018, 'A traité', 'M', '', '', '', 'TUMBA MUKENDI', '', '', ' 2019/02/JJ', 'Voir RH pour la suite'),
(91, 'Courrier', 'DAFL', '00010', 'Demande de la salle des conférences', 11, 2, 2018, 'A traité', 'M', '', '', '', 'ASOJEDEC', '', '', ' 2019/02/JJ', 'voir Logistique'),
(92, 'Courrier', 'DAFR', '00010', 'Lettre de motivation ', 11, 2, 2018, 'A traité', 'M', '', '', '', 'NGALULA LUMBALA', '', '', ' 2019/02/JJ', 'Voir RH pour la suite'),
(93, 'Courrier', 'SEN', '00010', 'Transmission du rapport sur les comptes de la santé 2016 RDC', 11, 2, 2018, 'A traité', 'M', '', '', '', 'Ministère de la Santé Publique', '', '', ' 2019/02/JJ', 'Voir SENA'),
(94, 'Courrier', 'DAFL', '00010', 'Désaffectation matériels', 11, 2, 2019, 'A traité', 'M', '', '', '', 'sep/kasai', '', '', ' 2019/02/15', 'DAF pour la suite'),
(95, 'Courrier', 'DAFF', '00010', 'Brieffing des membres des cellules luttes contre le sida des Ministères', 11, 2, 2019, 'A traité', 'M', '', '', '', 'CSCP', '', '', ' 2019/02/JJ', 'Voir Mathieu NZAMBE '),
(96, 'Courrier', 'DAFL', '00010', 'Demande facture proformat', 11, 2, 2019, 'A traité', 'M', '', '', '', 'ABEEF-ND', '', '', ' 2019/02/JJ', ' DAF pour la suite '),
(97, 'Courrier', 'DAFR', '00010', 'Lettre de recherche', 12, 2, 2018, 'A traité', 'M', 'NKUMBI ', 'LENGELA', '', '', '', '', ' 2019/02/JJ', 'Voir le RH pour l\'orientation '),
(98, 'Courrier', 'DAFF', '00010', 'Demande de stage professionnel', 12, 2, 2018, 'A traité', 'M', 'MAYINDOMBE', 'IKOKO', '', '', '', '', ' 2019/02/JJ', 'Voir RH pour la suite'),
(99, 'Courrier', 'DAFL', '00010', 'Offre de vente et maintenance des groupes électrognes', 12, 2, 2018, 'A traité', 'M', '', '', '', 'USCT SARL', '', '', ' 2019/02/19', 'Voir logistique pour la suite'),
(100, 'Courrier', 'DAFR', '00010', 'Lettre de recherche', 12, 2, 2018, 'A traité', 'M', 'AMBAGO ', 'MBATI', '', '', '', '', ' 2019/02/JJ', 'Voir RH pour la suite'),
(101, 'Courrier', 'SEV', '00010', 'A/R Désignation experts', 12, 2, 2019, 'A traité', 'M', '', '', '', 'INSS', '', '', ' 2019/02/JJ', 'Voir Dr lisa Ntumba'),
(102, 'Courrier', 'DAFR', '00010', 'Demande de recherche', 12, 2, 2019, 'A traité', 'M', 'BISSY', 'TADINA', '', '', '', '', ' 2019/02/JJ', 'Voir RH pour la suite'),
(103, 'Courrier', 'DAFR', '00010', 'Demande de recherche', 12, 1, 2019, 'A traité', 'M', 'BOSOMBA ', 'MANGO', '', '', '', '', ' 2019/02/JJ', 'Voir RH pour la suite'),
(104, 'Courrier', 'DAFR', '00010', 'Demande de recherche', 12, 2, 2019, 'A traité', 'M', 'MAKOMBO ', 'YOKE', '', '', '', '', ' 2019/02/JJ', 'Voir RH pour la suite'),
(105, 'Courrier', 'DAFR', '00010', 'Demande de stage professionnel', 12, 2, 2019, 'A traité', 'M', 'KATSHINGA ', 'KESHIWEN ', '', '', '', '', ' 2019/02/JJ', 'Voir RH pour la suite'),
(106, 'Courrier', 'DAFF', '00010', 'RACAJ/SIDA', 12, 2, 2019, 'A traité', 'M', '', '', '', '', '', '', ' 2019/02/JJ', 'Voir le DAF'),
(107, 'Courrier', 'DAFL', '00010', 'Notre indignation contre les vols dans nos bureau', 13, 2, 2019, 'A traité', 'M', '', '', '', 'FDSS', '', '', ' 2019/02/JJ', 'Voir DAF et LOG pour la suite'),
(108, 'Courrier', 'DAFL', '00010', ' Location de la salle', 13, 2, 2019, 'A traité', 'M', '', '', '', 'Médecin sans Frontière', '', '', ' 2019/02/JJ', 'Voir logistique pour la suite'),
(109, 'Courrier', 'DAFL', '00010', 'Sollicitation des locaux pour PNMCV', 13, 2, 2019, 'A traité', 'M', '', '', '', 'PNMCV Dr LIMBOLE', '', '', ' 2019/02/JJ', 'Voir logistique pour la suite'),
(110, 'Courrier', 'DAFF', '00010', 'Facture', 13, 2, 2019, 'A traité', 'M', '', '', '', 'EN VRAC', '', '', ' 2019/02/JJ', 'Voir DAF pour la suite'),
(111, 'Courrier', 'DAFL', '00010', 'Lettre de motivation', 18, 2, 2018, 'A traité', 'M', 'MANDEMBO', 'LIKWELA', 'CAMPO', '', '', '', ' 2019/02/JJ', 'Voir RH pour la suite'),
(112, 'Courrier', 'DAFF', '00010', 'Demande d\'accréditation', 18, 2, 2018, 'A traité', 'M', '', '', '', 'RÉFÉRENCE +', '', '', ' 2019/02/JJ', 'Voir le DAF'),
(113, 'Courrier', 'CP', '00010', 'Etat de besoin en préservatifs', 18, 2, 2019, 'A traité', 'M', '', '', '', 'SEP/HAUT UELE', '', '', ' 2019/02/JJ', 'Voir CSCP pour la suite '),
(114, 'Courrier', 'DAFR', '00010', 'Mise en garde', 18, 2, 2018, 'A traité', 'M', '', '', '', 'Haut Uele', '', '', ' 2019/02/JJ', 'Voir DAR et RH pour la suite à donné'),
(115, 'Courrier', 'SEN', '00010', 'Acte de reconnaissance au comité provincial du reseau des associations congolaises des jeunes RACOJ/SIDA', 18, 2, 2018, 'A traité', 'M', '', '', '', 'SEP/HAUT UELE', '', '', ' 2019/02/JJ', 'Au SEN'),
(116, 'Courrier', 'DAFR', '00010', 'A/R Votre lettre de mise en demeure à la CIELS', 18, 2, 2018, 'A traité', 'M', '', '', '', 'CIELS', '', '', ' 2019/02/JJ', 'DAF/LOGISTIQUE pour la suite'),
(117, 'Courrier', 'DAFR', '00010', 'Demande de stage professionnel', 18, 2, 2019, 'A traité', 'M', 'MVITA KALONGA', 'Frederic', '', '', '', '', ' 2019/02/JJ', 'Voir RH pour la suite'),
(118, 'Courrier', 'DAFR', '00010', 'Facture', 1, 1, 2019, 'A traité', 'M', '', '', '', 'ORANGE', '', '', ' 2019/02/JJ', 'Voir RH pour la suite'),
(119, 'Courrier', 'DAFR', '00010', 'Lettre de motivation', 21, 2, 2019, 'En cours', 'M', 'MATSHIMBUY ', 'LYDIA', '', '', '', '', ' 2019/02/JJ', 'Voir RH pour la suite'),
(120, 'Courrier', 'DAFF', '00010', 'ORDRE DE MISSION', 18, 2, 2019, 'A traité', 'M', 'CCM-RDC', '', '', '', '', '', ' 2019/02/JJ', 'Voir le DAF');

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

--
-- Contenu de la table `courrier_sort`
--

INSERT INTO `courrier_sort` (`num_lettre_sort`, `code_service`, `mat_agent`, `objet_sort`, `jour_sort`, `mois_sort`, `annee_sort`, `observation_sort`, `code_sexe`, `nom_sort`, `postnom_sort`, `prenom_sort`, `entreprise_sort`, `email_sort`, `telephone_sort`, `commentaire_sort`) VALUES
(1, 'DAFF', '00010', 'Demande d\'engagement des fonds sur la ligne intervention économique, sociales, scientifique et culturelles', 14, 1, 2019, 'Déjà traité', 'M', '', '', '', 'Ministère de la Santé Publique', '', '', 'DAF pour suivi'),
(2, 'DAFF', '00010', 'Demande d\'engagement des fonds sur la ligne interventions économiques, sociales, scientifiques et culturelles', 14, 1, 2019, 'Déjà traité', 'M', '', '', '', 'Son Excellence Mr le Ministre de la santé publique', '', '', 'DAF pour suivi'),
(3, 'DAFF', '00010', 'Demande d\'engagement des fonds sur la ligne intervention économique, sociales, scientifique et culturelles', 14, 1, 2019, 'Déjà traité', 'M', '', '', '', 'Son Excellence Mr le Ministre de la santé publique', '', '', 'DAF pour suivi'),
(4, 'DAFF', '00010', 'Demande d\'engagement des fonds sur la ligne intervention économique, sociales, scientifique et culturelles', 14, 1, 2019, 'Déjà traité', 'M', '', '', '', 'Son Excellence Mr le Ministre de la santé publique', '', '', 'DAF pour suivi'),
(5, 'DAFF', '00010', 'Ouverture de compte salaire en CDF', 14, 1, 2019, 'Déjà traité', 'M', '', '', '', 'RAWBANK', '', '', 'DAF pour suivi'),
(6, 'DAFF', '00010', 'Changement de cosignataire compte : PNMLS/VIC n° 130-10590 79 93 en USD', 14, 1, 2019, 'Déjà traité', 'M', '', '', '', 'BCDC', '', '', 'DAF pour suivi'),
(7, 'SEP', '00010', 'Recommandation', 14, 1, 2019, 'Déjà traité', 'M', '', '', '', 'Son Excellence Madame la Ministre du Genre, Famille et Enfant', '', '', 'Voir le SENA'),
(8, 'DAFF', '00010', 'Votre demande de stage', 22, 1, 2019, 'Déjà traité', 'F', 'Mr MPANGI', 'MAVUNGA', ' SARHA', '', '', '', 'ok'),
(9, 'DAFF', '00010', 'Votre demande stage professionnel', 25, 1, 2019, 'Déjà traité', 'M', 'MUSHIYA ', 'ELEMBO', '', '', '', '', 'DAF DAF pour suivi'),
(10, 'DAFR', '00010', 'Recommandation stage ', 25, 1, 2019, 'Déjà traité', 'M', 'ISEKO ', 'MONDONGA', '', '', '', '', 'RH suivi'),
(11, 'DAFF', '00010', 'Votre demande de stage professionnel', 25, 1, 2019, 'Déjà traité', 'M', 'HENESA ', 'GYMBALU', '', '', '', '', 'ok'),
(12, 'DAFF', '00010', 'Demande de congé annuel', 25, 1, 2019, 'Déjà traité', 'F', 'Mme MUMBA', 'LUIMBA', 'PELAGIE', '', '', '', 'ok'),
(13, 'DAFF', '00010', 'Demande d\'engagement des fonds sur les prestations intellectuelle d\'origimisme de formation', 13, 2, 2019, 'Déjà traité', 'M', '', '', '', 'Son Excellence Monsieur le Ministre d\'Etat Ministre de la Santé', '', '', 'ok'),
(14, 'DAFF', '00010', 'Votre demande de stage professionnel', 29, 1, 2019, 'Déjà traité', 'M', 'OLONE', '', 'JOELLE', '', '', '', 'ok'),
(15, 'DAFF', '00010', 'Votre demande de stage professionnel', 29, 1, 2019, 'Déjà traité', 'F', 'MUADI', '', 'AMINATA', '', '', '', 'ok'),
(16, 'DAFF', '00010', 'votre demande de congé', 29, 2, 2019, 'Déjà traité', 'M', 'Mme MUMBA', 'LUIMBA', 'PELAGIE', '', '', '', 'C\'es OK'),
(17, 'DAFF', '00010', 'Transmission des documents note de briefing au rapport annuel PNMLS 2017, rapport synthése sida 2018 en RDC et rapport ', 5, 2, 2019, 'Déjà traité', 'M', '', '', '', 'Son Excellence Monsieur le Président de la République', '', '', 'ok'),
(18, 'SEN', '00010', 'Félicitation, transmission des documents et demande d\'audience', 5, 2, 2019, 'Déjà transmis', 'M', '', '', '', 'Son Excellence Monsieur le Directeur de Cabinet du Président de la République', '', '', 'SEN SUIVI'),
(19, 'DAFF', '00010', 'Félicitation', 5, 2, 2019, 'Déjà transmis', 'M', '', '', '', 'Son Excellence Monsieur le Directeur de Cabinet Adjoint du Président de la République', '', '', 'ok'),
(20, 'DAFR', '00010', 'Votre absence prolongé', 6, 2, 2019, 'En cours', 'M', 'KAVIRA ', 'NDAHINDWA ', 'GINETTE', '', '', '', 'pour le suivi'),
(21, 'DAFR', '00010', 'Votre demande de stage professionnel', 6, 2, 2019, 'Déjà traité', 'M', 'ISEKO ', 'MONDONGA', '', '', '', '', 'ok'),
(22, 'DAFR', '00010', 'Transmission de la liste actualisé par la mutualiste 2019-2020', 6, 2, 2019, 'Déjà transmis', 'M', '', '', '', 'CGAT', '', '', ''),
(23, 'DAFR', '00010', 'Votre demande de transfert', 6, 2, 2019, 'En cours', 'M', '', '', '', 'SEP/HAUT KATANGA', '', '', ''),
(24, 'DAFF', '00010', 'Demande d\'engement des fonds sur les Préstations Intellectuelles dirigisme de formation et divers', 13, 2, 2019, 'En cours', 'M', '', '', '', 'Son Excellence Monsieur le Ministre du Budget', '', '', 'en cours d\'exécution '),
(25, 'DAFF', '00010', 'Demande d\'engagement des Fonds sur les prestations Intellectuelles', 13, 2, 2019, 'En cours', 'M', '', '', '', 'Son Excellence Monsieur le Ministre du Budget', '', '', 'DAF pour suivi'),
(26, 'DAFF', '00010', 'Mise en demeure', 13, 2, 2019, 'En cours', 'M', '', '', '', 'CIELS', '', '', 'DAF pour suivi'),
(27, 'DAFF', '00010', 'Mise en demeure', 13, 2, 2019, 'En cours', 'M', '', '', '', 'CRTJ', '', '', 'DAF pour suivi'),
(28, 'DAFF', '00010', 'Mise en demeure', 13, 2, 2019, 'En cours', 'M', '', '', '', 'PSSP', '', '', 'DAF pour suivi'),
(29, 'DAFF', '00010', 'Mise en demeure', 13, 2, 2019, 'En cours', 'M', '', '', '', 'COGEDEV', '', '', 'DAF pour suivi'),
(30, 'DAFF', '00010', 'Mise en demeure', 13, 2, 2019, 'En cours', 'M', '', '', '', 'FEMME+', '', '', 'DAF pour suivi'),
(31, 'DAFF', '00010', 'Mise en demeure', 13, 2, 2019, 'En cours', 'M', '', '', '', 'MARCEL ILUNGA TASK FORCE', '', '', 'DAF pour suivi'),
(32, 'DAFF', '00010', 'Mise en demeure', 13, 2, 2019, 'En cours', 'M', '', '', '', 'FOSI', '', '', 'DAF pour suivi'),
(33, 'DAFF', '00010', 'Mise en demeure', 13, 2, 2019, 'En cours', 'M', '', '', '', 'RIGIAC', '', '', 'DAF pour suivi'),
(34, 'DAFR', '00010', 'NOTIFICATION', 13, 2, 2019, 'En cours', 'M', 'ALUBA', 'SHADARI', '', '', '', '', 'RH suivi'),
(35, 'DAFF', '00010', 'NOTIFICATION', 13, 2, 2019, 'En cours', 'M', 'MPUTU ', 'MULAMBA', '', '', '', '', 'RH suivi'),
(36, 'DAFR', '00010', 'NOTIFICATION', 13, 2, 2019, 'En cours', 'M', 'MBUYI ', 'NGANDU', '', '', '', '', 'RH suivi'),
(37, 'DAFF', '00010', 'NOTIFICATION', 13, 2, 2019, 'En cours', 'M', 'KANDALA', 'TSHIBONGE', 'OLIVIER', '', '', '', 'RH suivi'),
(38, 'DAFR', '00010', 'NOTIFICATION', 13, 2, 2019, 'En cours', 'M', 'AMUNDIANDRAY', 'MAAMBA ', 'Emile', '', '', '', 'RH suivi'),
(39, 'DAFF', '00010', 'Séance de travail sur le plan opérationnel de l\'exe 2 Adolescence et jeunes) du PNS 2018-2021', 13, 2, 2019, 'En cours', 'M', '', '', '', 'Monsieur et Madame', '', '', 'RH suivi'),
(40, 'DAFF', '00010', 'ouverture de compte salaire en CDF', 19, 2, 2019, 'En cours', 'M', '', '', '', 'Monsieur le Directeur Général de la RAW BANK', '', '', 'RH suivi'),
(41, 'DAFF', '00010', 'Votre indignation contre les vols dans vos bureau', 21, 1, 2019, 'En cours', 'M', 'KOKOLOMAMI', 'JACQUES', '', 'Monsieur ', '', '', 'DAF et sécurité pour la suite');

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
  MODIFY `num_lettre_ent` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT pour la table `courrier_sort`
--
ALTER TABLE `courrier_sort`
  MODIFY `num_lettre_sort` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT pour la table `type_courrier`
--
ALTER TABLE `type_courrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 24 sep. 2021 à 12:02
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `reservation`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `Actif` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `password`, `login`, `Actif`) VALUES
(12, 'heddaoui', 'salem', '123', 'salem', '1'),
(14, 'ahmed', 'hhh', '123', 'admin1', '2'),
(16, 'ahmedkk', 'hhh', '1234', 'adminn', '1');

-- --------------------------------------------------------

--
-- Structure de la table `archives`
--

CREATE TABLE `archives` (
  `num_client` int(11) NOT NULL,
  `nom_client` varchar(50) NOT NULL,
  `prenom_client` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `num_phone` varchar(10) NOT NULL,
  `type_r` varchar(20) NOT NULL,
  `Type_de_service` varchar(20) NOT NULL,
  `date_Res` date NOT NULL,
  `nombre_d_individus` int(10) NOT NULL,
  `prix_intial` varchar(20) NOT NULL,
  `prix_somme` varchar(20) NOT NULL,
  `date_n` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `archives`
--

INSERT INTO `archives` (`num_client`, `nom_client`, `prenom_client`, `email`, `num_phone`, `type_r`, `Type_de_service`, `date_Res`, `nombre_d_individus`, `prix_intial`, `prix_somme`, `date_n`) VALUES
(35, 'SALEM', 'HEDDAOUI', 'salem.sale2015@gmail.com', '0667281357', '3', '2', '2021-09-25', 100, '1000', '100000 DZ', '1996-04-14');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `num_client` int(11) NOT NULL,
  `nom_client` varchar(50) NOT NULL,
  `prenom_client` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `num_phone` varchar(10) NOT NULL,
  `type_r` varchar(20) NOT NULL,
  `Type_de_service` varchar(20) NOT NULL,
  `date_Res` date NOT NULL,
  `nombre_d_individus` int(10) NOT NULL,
  `prix_intial` varchar(20) NOT NULL,
  `prix_somme` varchar(20) NOT NULL,
  `date_n` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`num_client`, `nom_client`, `prenom_client`, `email`, `num_phone`, `type_r`, `Type_de_service`, `date_Res`, `nombre_d_individus`, `prix_intial`, `prix_somme`, `date_n`) VALUES
(36, 'SALEM', 'HEDDAOUI', 'salem.sale2015@gmail.com', '0667281357', '3', '2', '2021-09-25', 100, '1000', '100000 DZ', '1996-04-14');

-- --------------------------------------------------------

--
-- Structure de la table `demandesr`
--

CREATE TABLE `demandesr` (
  `num_client` int(11) NOT NULL,
  `nom_client` varchar(50) NOT NULL,
  `prenom_client` varchar(50) NOT NULL,
  `date_n` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `num_phone` varchar(10) NOT NULL,
  `type_r` varchar(20) NOT NULL,
  `Type_de_service` varchar(20) NOT NULL,
  `date_Res` date NOT NULL,
  `nombre_d_individus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `entraineurs`
--

CREATE TABLE `entraineurs` (
  `id` int(10) NOT NULL,
  `nom_prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entraineurs`
--

INSERT INTO `entraineurs` (`id`, `nom_prenom`, `email`, `tel`) VALUES
(6, 'amina ', 'amina@gmail.com', '0655852858');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(22, 'IMG-61374b5a45e137.26760626.jpg'),
(23, 'IMG-61374b68e4a5a5.94310090.jpg'),
(24, 'IMG-61374b785d0c38.47438717.jpg'),
(25, 'IMG-61374ba5496446.89918908.jpg'),
(26, 'IMG-61374c3d764a65.09723408.jpg'),
(27, 'IMG-61374c47badd48.04116770.jpg'),
(28, 'IMG-61374c52b7cba8.22825004.jpg'),
(29, 'IMG-61374c5cb466c6.81035286.jpg'),
(30, 'IMG-61374c7118f458.84819938.jpg'),
(31, 'IMG-61374c854c0ad3.16614567.jpg'),
(32, 'IMG-61374c959f8c65.58961015.jpg'),
(33, 'IMG-61374c9fb1adf0.56716597.jpg'),
(34, 'IMG-61374caaad8719.52082286.jpg'),
(35, 'IMG-61374cb6203e16.45556106.jpg'),
(36, 'IMG-61374cc5954954.75547525.jpg'),
(37, 'IMG-61374cd1287e36.18217274.jpg'),
(38, 'IMG-61374f5054cde6.66232469.jpg'),
(39, 'IMG-61374f6c526e31.93100022.jpg'),
(40, 'IMG-61374f7ed1a628.41675634.jpg'),
(42, 'IMG-6138d60a7adb89.19110279.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `imagesn`
--

CREATE TABLE `imagesn` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `imagesn`
--

INSERT INTO `imagesn` (`id`, `image_url`) VALUES
(10, 'IMG-6137497fe55fd9.87156491.jpg'),
(11, 'IMG-61374986b9af88.29723547.jpg'),
(12, 'IMG-613749f4310df4.42057232.jpg'),
(13, 'IMG-613749fd51a2a7.96067629.jpg'),
(14, 'IMG-61375071a2fee0.92102698.jpg'),
(15, 'IMG-6137507a77fbc7.53615425.jpg'),
(16, 'IMG-61375082d0f1b6.13617091.jpg'),
(17, 'IMG-6137509f83dc10.51272152.jpg'),
(18, 'IMG-613750a845caf6.46532731.jpg'),
(19, 'IMG-613750fa2cfc17.17000151.jpg'),
(20, 'IMG-61375101f2be45.80438406.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `nager`
--

CREATE TABLE `nager` (
  `id` int(10) NOT NULL,
  `nom` varchar(20) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(20) CHARACTER SET latin1 NOT NULL,
  `date_n` date NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tel` varchar(10) CHARACTER SET latin1 NOT NULL,
  `Genre` varchar(10) CHARACTER SET latin1 NOT NULL,
  `entrain` varchar(100) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `nager`
--

INSERT INTO `nager` (`id`, `nom`, `prenom`, `date_n`, `email`, `tel`, `Genre`, `entrain`, `prix`) VALUES
(36, 'souzan', 'souzan', '1995-04-24', 'souzan@gmail.com', '0666666664', '1', 'amina', 1500);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`num_client`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`num_client`);

--
-- Index pour la table `demandesr`
--
ALTER TABLE `demandesr`
  ADD PRIMARY KEY (`num_client`);

--
-- Index pour la table `entraineurs`
--
ALTER TABLE `entraineurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `imagesn`
--
ALTER TABLE `imagesn`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nager`
--
ALTER TABLE `nager`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `archives`
--
ALTER TABLE `archives`
  MODIFY `num_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `num_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `demandesr`
--
ALTER TABLE `demandesr`
  MODIFY `num_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `entraineurs`
--
ALTER TABLE `entraineurs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `imagesn`
--
ALTER TABLE `imagesn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `nager`
--
ALTER TABLE `nager`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

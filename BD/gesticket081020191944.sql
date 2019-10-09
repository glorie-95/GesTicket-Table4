-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Mar 08 Octobre 2019 à 19:43
-- Version du serveur :  5.7.27-0ubuntu0.18.04.1
-- Version de PHP :  7.2.20-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gesticket`
--

-- --------------------------------------------------------

--
-- Structure de la table `affecter`
--

CREATE TABLE `affecter` (
  `id` int(11) NOT NULL,
  `id_referentiel` int(11) NOT NULL,
  `Effectif` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `referentiel`
--

CREATE TABLE `referentiel` (
  `id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Anneecreation` year(4) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Annee` int(50) NOT NULL,
  `Datedebut` date NOT NULL,
  `Datefin` date NOT NULL,
  `Effectif` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `session`
--

INSERT INTO `session` (`id`, `Nom`, `Annee`, `Datedebut`, `Datefin`, `Effectif`) VALUES
(1, 'klm', 1996, '2018-10-15', '2019-10-10', 899);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prenoms` varchar(50) NOT NULL,
  `Profil` varchar(50) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `Motdepasse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `Nom`, `Prenoms`, `Profil`, `Login`, `Motdepasse`) VALUES
(1, 'NDIAYE', 'Astou', 'AD', 'astoundiaye@gmail.com', 'sonatelacademy'),
(3, 'AYIVI', 'Dragon', 'simpleuser', 'gloryayivi@gmail.com', '1234'),
(4, 'AYIVI', 'Dragon', 'simpleuser', 'gloryayivi@gmail.com', '1234'),
(8, 'dragon', 'hupocrite', 'simpleuser', '896', '789');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `affecter`
--
ALTER TABLE `affecter`
  ADD PRIMARY KEY (`id`,`id_referentiel`),
  ADD KEY `affecter_referentiel0_FK` (`id_referentiel`);

--
-- Index pour la table `referentiel`
--
ALTER TABLE `referentiel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referentiel_user_FK` (`id_user`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `referentiel`
--
ALTER TABLE `referentiel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `affecter`
--
ALTER TABLE `affecter`
  ADD CONSTRAINT `affecter_referentiel0_FK` FOREIGN KEY (`id_referentiel`) REFERENCES `referentiel` (`id`),
  ADD CONSTRAINT `affecter_session_FK` FOREIGN KEY (`id`) REFERENCES `session` (`id`);

--
-- Contraintes pour la table `referentiel`
--
ALTER TABLE `referentiel`
  ADD CONSTRAINT `referentiel_user_FK` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

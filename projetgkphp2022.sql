-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 18 nov. 2022 à 16:52
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetgkphp2022`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(3) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `prixCommande` decimal(10,0) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `date`, `prixCommande`, `idUser`, `idProduit`) VALUES
(8, '2022-11-18 15:49:38', '2500', 3, 1),
(9, '2022-11-18 15:50:43', '1900', 3, 2),
(10, '2022-11-18 15:50:46', '12000', 3, 3);

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id` int(3) NOT NULL,
  `dateTransaction` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `idUser` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(3) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `description` text NOT NULL,
  `disponibilite` bit(1) NOT NULL,
  `photo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `libelle`, `prix`, `description`, `disponibilite`, `photo`) VALUES
(1, 'Photo PC HP', '2500', 'PC portable avec les caractéristiques suivantes : processeur : i7, DD 512 SSD, RAM 24 G, Cache 8G', b'1', 'https://www.zoom.com.tn/48110/pc-portable-hp-pavilion-gaming-15-dk2014nk-i7-11370h-16go-1to-256go-ssd-gtx-1650-win-11612a4ea.jpg'),
(2, 'Smart Phone Samsung A33 5G', '1900', 'Samsung Smart Phone avec RAM 128 Go, 5G et caméra front 32Mo  et back 64Mo', b'0', 'https://www.samsungshop.tn/22812-large_default/galaxy-a33-5g-128go-prix-tunisie.jpg'),
(3, 'Samsung A31', '12000', 'Samsung A31 - 8G - 64 Go - Caméra front 16 - Back 48', b'0', 'https://www.tunisianet.com.tn/160701-large/samsung-galaxy-a31-noir.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `dateCreationCompte` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `password`, `role`, `dateCreationCompte`) VALUES
(1, 'Mezghich', 'Mohamed Amine', 'amine.mezghich@gmail.com', '123456', 'admin', '2022-11-18 09:49:15'),
(2, 'Toto', 'Amine', 'client@gmail.com', '123', 'client', '2022-11-18 09:49:15'),
(3, 'Amine', 'Mohamed', 'mohamed.mezghich@sesame.com.tn', '123456789', 'client', '2022-11-18 13:05:32');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

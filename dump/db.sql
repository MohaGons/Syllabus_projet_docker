-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : jeu. 09 sep. 2021 à 12:40
-- Version du serveur : 5.7.35
-- Version de PHP : 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetdocker`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`) VALUES
(4, 'Sylvain', '$2y$10$2zsamz6nZ5nWTBts/x.O4OAnFqQqweqgSgAgMGQlpm5hXYteew3iC'),
(5, 'Selim', '$2y$10$NSQvdEJrJGRL34QjYsedqerVwrJ6qsCNbrGj1isJ5t6Vw4seRUnQC'),
(6, 'Ossama', '$2y$10$.mM1Q0HR/wQKMU/KrAoRmeeckSIy1NsTIfHN4DAYOtcUexNpWH2wS'),
(7, 'Julien', '$2y$10$tkOnwmiS.KZ.XY6liu/m3uYX0/SLZb8WRseVtIAdXIfDAlObvADQ2'),
(8, 'Maxime', '$2y$10$277VLeSut0JtoT5pYXCrXuyVMp0tR38nIkuyXAuqepIHCwSJlpyLe'),
(9, 'Leo', '$2y$10$AnXIdXS09iq/byqosJ8ZEObyFXxL4yDADatdNqmsf0SoMP1YpordC'),
(10, 'Sananes', '$2y$10$ybfQqqNsVMB8JlZl/opFs.H1tcK7WeHUU/5RGxLzx5ufwwUtuK7BK'),
(11, 'Briatte', '$2y$10$3FF5zZ5y5iXJXulmbvvCEO1mXQLcXLCkgk71b6wz5qwZcmx.Zr4pS');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

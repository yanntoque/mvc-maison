-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 26 mai 2018 à 17:37
-- Version du serveur :  5.7.21-log
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `pokegame`
--

-- --------------------------------------------------------

--
-- Structure de la table `dresseur`
--

CREATE TABLE `dresseur` (
  `id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `nom` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `mail` varchar(150) COLLATE latin1_general_ci NOT NULL,
  `mdp` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `credit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `inventaire`
--

CREATE TABLE `inventaire` (
  `idDresseur` int(3) UNSIGNED ZEROFILL NOT NULL,
  `idPokemon` int(3) UNSIGNED ZEROFILL NOT NULL,
  `lieuCapture` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `nom` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `courbexp` char(1) COLLATE latin1_general_ci NOT NULL,
  `evolution` char(1) COLLATE latin1_general_ci NOT NULL,
  `type1` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `type2` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `montagne` tinyint(1) NOT NULL,
  `prairie` tinyint(1) NOT NULL,
  `ville` tinyint(1) NOT NULL,
  `foret` tinyint(1) NOT NULL,
  `plage` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `pokemon`
--

INSERT INTO `pokemon` (`id`, `nom`, `courbexp`, `evolution`, `type1`, `type2`, `montagne`, `prairie`, `ville`, `foret`, `plage`) VALUES
(001, 'Bulbizarre', 'P', 'n', 'PLANTE', 'POISON', 0, 1, 0, 0, 1),
(002, 'Herbizarre', 'P', 'o', 'PLANTE', 'POISON', 0, 1, 0, 0, 1),
(003, 'Florizarre', 'P', 'o', 'PLANTE', 'POISON', 0, 1, 0, 0, 1),
(004, 'Salamèche', 'P', 'n', 'FEU', '', 0, 1, 0, 0, 0),
(005, 'Reptincel', 'P', 'o', 'FEU', '', 0, 1, 0, 0, 0),
(006, 'Dracaufeu', 'P', 'o', 'FEU', 'VOL', 0, 1, 0, 1, 0),
(007, 'Carapuce', 'P', 'n', 'EAU', '', 0, 0, 0, 0, 1),
(008, 'Carabaffe', 'P', 'o', 'EAU', '', 0, 0, 0, 0, 1),
(009, 'Tortank', 'P', 'o', 'EAU', '', 0, 0, 0, 0, 1),
(010, 'Chenipan', 'M', 'n', 'INSECTE', '', 0, 0, 0, 1, 0),
(011, 'Chrysacier', 'M', 'o', 'INSECTE', '', 0, 0, 0, 1, 0),
(012, 'Papilusion', 'M', 'o', 'INSECTE', 'VOL', 0, 1, 0, 1, 0),
(013, 'Aspicot', 'M', 'n', 'INSECTE', 'POISON', 0, 0, 0, 1, 1),
(014, 'Coconfort', 'M', 'o', 'INSECTE', 'POISON', 0, 0, 0, 1, 1),
(015, 'Dardargnan', 'M', 'o', 'INSECTE', 'POISON', 0, 0, 0, 1, 1),
(016, 'Roucool', 'P', 'n', 'NORMAL', 'VOL', 1, 1, 1, 1, 1),
(017, 'Roucoups', 'P', 'o', 'NORMAL', 'VOL', 1, 1, 1, 1, 1),
(018, 'Roucarnage', 'P', 'o', 'NORMAL', 'VOL', 1, 1, 1, 1, 1),
(019, 'Rattata', 'M', 'n', 'NORMAL', '', 1, 1, 1, 1, 1),
(020, 'Rattatac', 'M', 'o', 'NORMAL', '', 1, 1, 1, 1, 1),
(021, 'Piafabec', 'M', 'n', 'NORMAL', 'VOL', 1, 1, 1, 1, 1),
(022, 'Rapasdepic', 'M', 'o', 'NORMAL', 'VOL', 1, 1, 1, 1, 1),
(023, 'Abo', 'M', 'n', 'POISON', '', 0, 0, 0, 0, 1),
(024, 'Arbok', 'M', 'o', 'POISON', '', 0, 0, 0, 0, 1),
(025, 'Pikachu', 'M', 'n', 'ELECTRIK', '', 0, 0, 1, 0, 0),
(026, 'Raichu', 'M', 'o', 'ELECTRIK', '', 0, 0, 1, 0, 0),
(027, 'Sabelette', 'M', 'n', 'SOL', '', 0, 1, 0, 0, 0),
(028, 'Sablaireau', 'M', 'o', 'SOL', '', 0, 1, 0, 0, 0),
(029, 'Nidoran_', 'P', 'n', 'POISON', '', 0, 0, 0, 0, 1),
(030, 'Nidorina', 'P', 'o', 'POISON', '', 0, 0, 0, 0, 1),
(031, 'Nidoqueen', 'P', 'o', 'POISON', 'SOL', 0, 1, 0, 0, 1),
(032, 'Nidoran_', 'P', 'n', 'POISON', '', 0, 0, 0, 0, 1),
(033, 'Nidorino', 'P', 'o', 'POISON', '', 0, 0, 0, 0, 1),
(034, 'Nidoking', 'P', 'o', 'POISON', 'SOL', 0, 1, 0, 0, 1),
(035, 'Mélofée', 'R', 'n', 'FEE', '', 0, 0, 0, 0, 0),
(036, 'Mélodelfe', 'R', 'o', 'FEE', '', 0, 0, 0, 0, 0),
(037, 'Goupix', 'M', 'n', 'FEU', '', 0, 1, 0, 0, 0),
(038, 'Feunard', 'M', 'o', 'FEU', '', 0, 1, 0, 0, 0),
(039, 'Rondoudou', 'R', 'n', 'NORMAL', 'FEE', 1, 1, 1, 1, 1),
(040, 'Grodoudou', 'R', 'o', 'NORMAL', 'FEE', 1, 1, 1, 1, 1),
(041, 'Nosferapti', 'M', 'n', 'POISON', 'VOL', 0, 1, 0, 1, 1),
(042, 'Nosferalto', 'M', 'o', 'POISON', 'VOL', 0, 1, 0, 1, 1),
(043, 'Mystherbe', 'P', 'n', 'PLANTE', 'POISON', 0, 1, 0, 0, 1),
(044, 'Ortide', 'P', 'o', 'PLANTE', 'POISON', 0, 1, 0, 0, 1),
(045, 'Rafflesia', 'P', 'o', 'PLANTE', 'POISON', 0, 1, 0, 0, 1),
(046, 'Paras', 'M', 'n', 'INSECTE', 'PLANTE', 0, 1, 0, 1, 0),
(047, 'Parasect', 'M', 'o', 'INSECTE', 'PLANTE', 0, 1, 0, 1, 0),
(048, 'Mimitoss', 'M', 'n', 'INSECTE', 'POISON', 0, 0, 0, 1, 1),
(049, 'Aéromite', 'M', 'o', 'INSECTE', 'POISON', 0, 0, 0, 1, 1),
(050, 'Taupiqueur', 'M', 'n', 'SOL', '', 0, 1, 0, 0, 0),
(051, 'Triopikeur', 'M', 'o', 'SOL', '', 0, 1, 0, 0, 0),
(052, 'Miaouss', 'M', 'n', 'NORMAL', '', 1, 1, 1, 1, 1),
(053, 'Persian', 'M', 'o', 'NORMAL', '', 1, 1, 1, 1, 1),
(054, 'Psykokwak', 'M', 'n', 'EAU', '', 0, 0, 0, 0, 1),
(055, 'Akwakwak', 'M', 'o', 'EAU', '', 0, 0, 0, 0, 1),
(056, 'Férosinge', 'M', 'n', 'COMBAT', '', 0, 0, 1, 0, 0),
(057, 'Colossinge', 'M', 'o', 'COMBAT', '', 0, 0, 1, 0, 0),
(058, 'Caninos', 'L', 'n', 'FEU', '', 0, 1, 0, 0, 0),
(059, 'Arcanin', 'L', 'o', 'FEU', '', 0, 1, 0, 0, 0),
(060, 'Ptitard', 'P', 'n', 'EAU', '', 0, 0, 0, 0, 1),
(061, 'Tétarte', 'P', 'o', 'EAU', '', 0, 0, 0, 0, 1),
(062, 'Tartard', 'P', 'o', 'EAU', 'COMBAT', 0, 0, 1, 0, 1),
(063, 'Abra', 'P', 'n', 'PSY', '', 0, 0, 1, 0, 0),
(064, 'Kadabra', 'P', 'o', 'PSY', '', 0, 0, 1, 0, 0),
(065, 'Alakazam', 'P', 'o', 'PSY', '', 0, 0, 1, 0, 0),
(066, 'Machoc', 'P', 'n', 'COMBAT', '', 0, 0, 1, 0, 0),
(067, 'Machopeur', 'P', 'o', 'COMBAT', '', 0, 0, 1, 0, 0),
(068, 'Mackogneur', 'P', 'o', 'COMBAT', '', 0, 0, 1, 0, 0),
(069, 'Chétiflor', 'P', 'n', 'PLANTE', 'POISON', 0, 1, 0, 0, 1),
(070, 'Boustiflor', 'P', 'o', 'PLANTE', 'POISON', 0, 1, 0, 0, 1),
(071, 'Empiflor', 'P', 'o', 'PLANTE', 'POISON', 0, 1, 0, 0, 1),
(072, 'Tentacool', 'L', 'n', 'EAU', 'POISON', 0, 0, 0, 0, 1),
(073, 'Tentacruel', 'L', 'o', 'EAU', 'POISON', 0, 0, 0, 0, 1),
(074, 'Racaillou', 'P', 'n', 'ROCHE', 'SOL', 1, 1, 0, 0, 0),
(075, 'Gravalanch', 'P', 'o', 'ROCHE', 'SOL', 1, 1, 0, 0, 0),
(076, 'Grolem', 'P', 'o', 'ROCHE', 'SOL', 1, 1, 0, 0, 0),
(077, 'Ponyta', 'M', 'n', 'FEU', '', 0, 1, 0, 0, 0),
(078, 'Galopa', 'M', 'o', 'FEU', '', 0, 1, 0, 0, 0),
(079, 'Ramoloss', 'M', 'n', 'EAU', 'PSY', 0, 0, 1, 0, 1),
(080, 'Flagadoss', 'M', 'o', 'EAU', 'PSY', 0, 0, 1, 0, 1),
(081, 'Magnéti', 'M', 'n', 'ELECTRIK', 'ACIER', 1, 0, 1, 0, 0),
(082, 'MagnÌ©ton', 'M', 'o', 'ELECTRIK', 'ACIER', 1, 0, 1, 0, 0),
(083, 'Canarticho', 'M', 'n', 'NORMAL', 'VOL', 1, 1, 1, 1, 1),
(084, 'Doduo', 'M', 'n', 'NORMAL', 'VOL', 1, 1, 1, 1, 1),
(085, 'Dodrio', 'M', 'o', 'NORMAL', 'VOL', 1, 1, 1, 1, 1),
(086, 'Otaria', 'M', 'n', 'EAU', '', 0, 0, 0, 0, 1),
(087, 'Lamantine', 'M', 'o', 'EAU', 'GLACE', 1, 0, 0, 0, 1),
(088, 'Tadmorv', 'M', 'n', 'POISON', '', 0, 0, 0, 0, 1),
(089, 'Grotadmorv', 'M', 'o', 'POISON', '', 0, 0, 0, 0, 1),
(090, 'Kokiyas', 'L', 'n', 'EAU', '', 0, 0, 0, 0, 1),
(091, 'Crustabri', 'L', 'o', 'EAU', 'GLACE', 1, 0, 0, 0, 1),
(092, 'Fantominus', 'P', 'n', 'SPECTRE', 'POISON', 0, 0, 0, 1, 1),
(093, 'Spectrum', 'P', 'o', 'SPECTRE', 'POISON', 0, 0, 0, 1, 1),
(094, 'Ectoplasma', 'P', 'o', 'SPECTRE', 'POISON', 0, 0, 0, 1, 1),
(095, 'Onix', 'M', 'n', 'ROCHE', 'SOL', 1, 1, 0, 0, 0),
(096, 'Soporifik', 'M', 'n', 'PSY', '', 0, 0, 1, 0, 0),
(097, 'Hypnomade', 'M', 'o', 'PSY', '', 0, 0, 1, 0, 0),
(098, 'Krabby', 'M', 'n', 'EAU', '', 0, 0, 0, 0, 1),
(099, 'Krabboss', 'M', 'o', 'EAU', '', 0, 0, 0, 0, 1),
(100, 'Voltorbe', 'M', 'n', 'ELECTRIK', '', 0, 0, 1, 0, 0),
(101, 'Electrode', 'M', 'o', 'ELECTRIK', '', 0, 0, 1, 0, 0),
(102, 'Noeunoeuf', 'L', 'n', 'PLANTE', 'PSY', 0, 1, 1, 0, 0),
(103, 'Noadkoko', 'L', 'o', 'PLANTE', 'PSY', 0, 1, 1, 0, 0),
(104, 'Osselait', 'M', 'n', 'SOL', '', 0, 1, 0, 0, 0),
(105, 'Ossatueur', 'M', 'o', 'SOL', '', 0, 1, 0, 0, 0),
(106, 'Kicklee', 'M', 'n', 'COMBAT', '', 0, 0, 1, 0, 0),
(107, 'Tygnon', 'M', 'n', 'COMBAT', '', 0, 0, 1, 0, 0),
(108, 'Excelangue', 'M', 'n', 'NORMAL', '', 1, 1, 1, 1, 1),
(109, 'Smogo', 'M', 'n', 'POISON', '', 0, 0, 0, 0, 1),
(110, 'Smogogo', 'M', 'o', 'POISON', '', 0, 0, 0, 0, 1),
(111, 'Rhinocorne', 'L', 'n', 'SOL', 'ROCHE', 1, 1, 0, 0, 0),
(112, 'Rhinoféros', 'L', 'o', 'SOL', 'ROCHE', 1, 1, 0, 0, 0),
(113, 'Leveinard', 'R', 'n', 'NORMAL', '', 1, 1, 1, 1, 1),
(114, 'Saquedeneu', 'M', 'n', 'PLANTE', '', 0, 1, 0, 0, 0),
(115, 'Kangourex', 'M', 'n', 'NORMAL', '', 1, 1, 1, 1, 1),
(116, 'Hypotrempe', 'M', 'n', 'EAU', '', 0, 0, 0, 0, 1),
(117, 'HypocÌ©an', 'M', 'o', 'EAU', '', 0, 0, 0, 0, 1),
(118, 'PoissirÌ¬ne', 'M', 'n', 'EAU', '', 0, 0, 0, 0, 1),
(119, 'Poissoroy', 'M', 'o', 'EAU', '', 0, 0, 0, 0, 1),
(120, 'Stari', 'L', 'n', 'EAU', '', 0, 0, 0, 0, 1),
(121, 'Staross', 'L', 'o', 'EAU', 'PSY', 0, 0, 1, 0, 1),
(122, 'M. Mime', 'M', 'n', 'PSY', 'FEE', 0, 0, 1, 0, 0),
(123, 'Insécateur', 'M', 'n', 'INSECTE', 'VOL', 0, 1, 0, 1, 0),
(124, 'Lippoutou', 'M', 'n', 'GLACE', 'PSY', 1, 0, 1, 0, 0),
(125, 'Elektek', 'M', 'n', 'ELECTRIK', '', 0, 0, 1, 0, 0),
(126, 'Magmar', 'M', 'n', 'FEU', '', 0, 1, 0, 0, 0),
(127, 'Scarabrute', 'L', 'n', 'INSECTE', '', 0, 0, 0, 1, 0),
(128, 'Tauros', 'L', 'n', 'NORMAL', '', 1, 1, 1, 1, 1),
(129, 'Magicarpe', 'L', 'n', 'EAU', '', 0, 0, 0, 0, 1),
(130, 'Léviator', 'L', 'o', 'EAU', 'VOL', 0, 1, 0, 1, 1),
(131, 'Lokhlass', 'L', 'n', 'EAU', 'GLACE', 1, 0, 0, 0, 1),
(132, 'Métamorph', 'M', 'n', 'NORMAL', '', 1, 1, 1, 1, 1),
(133, 'Evoli', 'M', 'n', 'NORMAL', '', 1, 1, 1, 1, 1),
(134, 'Aquali', 'M', 'o', 'EAU', '', 0, 0, 0, 0, 1),
(135, 'Voltali', 'M', 'o', 'ELECTRIK', '', 0, 0, 1, 0, 0),
(136, 'Pyroli', 'M', 'o', 'FEU', '', 0, 1, 0, 0, 0),
(137, 'Porygon', 'M', 'n', 'NORMAL', '', 1, 1, 1, 1, 1),
(138, 'Amonita', 'M', 'n', 'ROCHE', 'EAU', 1, 0, 0, 0, 1),
(139, 'Amonistar', 'M', 'o', 'ROCHE', 'EAU', 1, 0, 0, 0, 1),
(140, 'Kabuto', 'M', 'n', 'ROCHE', 'EAU', 1, 0, 0, 0, 1),
(141, 'Kabutops', 'M', 'o', 'ROCHE', 'EAU', 1, 0, 0, 0, 1),
(142, 'Ptéra', 'L', 'n', 'ROCHE', 'VOL', 1, 1, 0, 1, 0),
(143, 'Ronflex', 'L', 'n', 'NORMAL', '', 1, 1, 1, 1, 1),
(144, 'Artikodin', 'L', 'n', 'GLACE', 'VOL', 1, 1, 0, 1, 0),
(145, 'Electhor', 'L', 'n', 'ELECTRIK', 'VOL', 0, 1, 1, 1, 0),
(146, 'Sulfura', 'L', 'n', 'FEU', 'VOL', 0, 1, 0, 1, 0),
(147, 'Minidraco', 'L', 'n', 'DRAGON', '', 1, 0, 0, 0, 1),
(148, 'Draco', 'L', 'o', 'DRAGON', '', 1, 0, 0, 0, 1),
(149, 'Dracolosse', 'L', 'o', 'DRAGON', 'VOL', 1, 1, 0, 1, 1),
(150, 'Mewtwo', 'L', 'n', 'PSY', '', 0, 0, 1, 0, 0),
(151, 'Mew', 'P', 'n', 'PSY', '', 0, 0, 1, 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `dresseur`
--
ALTER TABLE `dresseur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inventaire`
--
ALTER TABLE `inventaire`
  ADD PRIMARY KEY (`idDresseur`,`idPokemon`),
  ADD KEY `fk_idPokemon` (`idPokemon`);

--
-- Index pour la table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `dresseur`
--
ALTER TABLE `dresseur`
  MODIFY `id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `inventaire`
--
ALTER TABLE `inventaire`
  ADD CONSTRAINT `fk_idDresseur` FOREIGN KEY (`idDresseur`) REFERENCES `dresseur` (`id`),
  ADD CONSTRAINT `fk_idPokemon` FOREIGN KEY (`idPokemon`) REFERENCES `pokemon` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

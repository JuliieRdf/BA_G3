-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 12 fév. 2023 à 14:28
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blogart23`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `numArt` int NOT NULL AUTO_INCREMENT,
  `dtCreArt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `libTitrArt` varchar(100) DEFAULT NULL,
  `libChapoArt` text,
  `libAccrochArt` varchar(100) DEFAULT NULL,
  `parag1Art` text,
  `libSsTitr1Art` varchar(100) DEFAULT NULL,
  `parag2Art` text,
  `libSsTitr2Art` varchar(100) DEFAULT NULL,
  `parag3Art` text,
  `libConclArt` text,
  `urlPhotArt` varchar(70) DEFAULT NULL,
  `numThem` int NOT NULL,
  PRIMARY KEY (`numArt`),
  KEY `ARTICLE_FK` (`numArt`),
  KEY `FK_ASSOCIATION_1` (`numThem`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`numArt`, `dtCreArt`, `libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numThem`) VALUES
(20, '2023-02-12 14:26:17', 'Les internautes révèlent les dessous de TBM ', 'Vous souhaitez en apprendre davantage sur les difficultés qu\'un bon nombre d’entre vous rencontrons lors de vos trajets quotidiens à bord du tram de Bordeaux, vous êtes au bon endroit !', 'On s’est infiltré parmi vous lors de vos trajets d’enfer à bord des trams à l’heure de pointe.', 'Tous les matins avant d’aller au travail, toutes les personnes qui habitent à Bordeaux sont déjà passées par là. Certaines personnes font des crises d\'angoisses à l’idée de monter dans un tram à l’heure de pointe. En effet, le tram est perçu comme le pire moyen de transport de Bordeaux selon vous. Certains se sont même obligés à passer le permis pour être tranquille le matin et le soir. Le moment que vous redoutez le plus en entrant dans le tram c’est le monde ! On met un pied à l’intérieur, on ressent une sensation d’étouffement, de chaleur et d\'écrasement durant tout le trajet. Ce moment où on peut hésiter à sortir plus tôt que son arrêt pour mieux respirer et ne pas sentir la transpiration des autres. Cette odeur qu’on sent même le nez bouché. Une fois le trajet effectué, on a qu’une envie, c’est d’être seul. On a plus de contact physique avec des personnes inconnues dans le tram que dans notre propre famille.\r\nD’autant plus que l’organisation du réseau de tram est parfois compliquée à cerner. Les correspondances entre les trams sont mal desservies en raison de leur éloignement d’arrêt. \r\nBeaucoup d’utilisateurs préfèrent utiliser d’autres services alternatifs notamment les différentes lignes de bus ou vélo qui comportent cependant un risque tout comme les trams. \r\nCependant, ce n’est pas la fin des bouchons dans le tram aux heures de pointes.', ' Au coeur des secrets du tram', 'Lorsqu’on ne connaît pas suffisamment Bordeaux, tous les nouveaux usagers se retournent sur le réseau TBM qui pensent être la meilleure solution. En effet, on ne risque pas d’être coincés dans les embouteillages pendant des heures. En utilisant les tram ce problème est résolu mais on en rajoute forcément plein d’autre à côté. Notamment lors des grèves qui exaspèrent les utilisateurs et les font patienter dès heures sans aucun tram apparent. Les retards accumulés, les tram interrompus en raison de divers problèmes mécaniques. Les bagages abandonnés alors qu’elle sont juste oublier et que les policiers croient que c’est une bombe alors que ce sont des vêtements. Et nous font attendre encore plus pour au final nous évacuer. \r\nLa ligne de Tram où vous avez repéré le plus de problème régulier est la ligne B. Cette ligne est selon vous la plus problématique. Elle est souvent interrompue entre Peixotto et Nicolas aux heures de pointe occasionnant des retards importants pour les utilisateurs l\'utilisant.\r\nLes horaires sont réduits, elle ne circule pas à partir de 00 h. Difficile pour les étudiants de rentrer chez eux, les soirs de fête.\r\nLes anecdotes dans le tram sont très diverses, tous les utilisateurs peuvent raconter une histoire vécue.', 'On vous écoute !', 'Les utilisateurs qui débarquent à Bordeaux, utilisent le tram pour moyen de locomotion le plus simple, car selon vous “il y a trop de voitures dans la ville et souvent des embouteillages”. Toutefois, le tram peut s\'avérer être une aventure à lui tout seul si on n’est pas familiarisé par le monde de transport. Il a beaucoup de “ligne veille et mal desservie”, cependant TBM ne résout pas le problème et préfère prolonger une nouvelle ligne pour relier l’aéroport à Bordeaux centre. Ce qui ne vous arrange pas forcément “cela rallonge considérablement le temps de trajet” et “diminue le nombre de tram circulant sur les lignes”. Les commerçants sont souvent impactés surtout pendant les travaux “les rues sont souvent bloquées en raison des travaux sur la ligne et nous privent de clients pendant un certain temps”. Les étudiants peuvent rencontrer des difficultés à arriver à l’heure “j’arrive trop souvent en retard !” et le soir pour rentrer “le tram B s\'arrête hyper tôt le soir vers 00 h ” . De nombreux usagers ont recours aux services alternatifs proposés comme les lignes de bus, vélo ou trottinettes “il n’est pas assez stable pour dépendre que de lui en fait !”. Les moyens de communication de TBM sont malheureusement peu connus des voyageurs “Je n’étais pas au courant alors que cela fait deux ans que j’utilise le service”. Les réclamations communes des usagers à l’encontre de TBM sont “ plus de tram, moins de problèmes sur les lignes, moins de retard, plus de stabilité sur les lignes et réparez les trams”. ', 'Les utilisateurs qui utilisent régulièrement le tram de bordeaux sont très nombreux. Au lieu de créer des nouvelles lignes, selon les utilisateurs réguliers, le service TBM devrait d’abord régler les problèmes sur leurs anciennes lignes pour avoir plus d’horaire et moins de problèmes mécaniques. Beaucoup d’usagers sont excédés par les services proposés par TBM est beaucoup se replie vers des solutions alternatives parfois plus économique et écologique pour aller d’un point A à un point B.', '/source/images/uploads/63e647c59c0751200x680_plaque2.jpg', 2),
(21, '2023-02-09 23:00:00', 'L\'aéroport et Bordeaux centre, enfin réunis!', 'Récemment, le réseau de Transport Bordeaux Métropole (TBM) s’est félicité sur les réseaux sociaux de la très prochaine extension de la ligne A. En effet, la TBM a initié les tests le 25 janvier dernier. Mais quand le public va-t-il enfin pouvoir l’utiliser ?', 'Tous les Bordelais l’ont déjà vécu. Les vacances tant méritées se présentent enfin.', ' Avec elles, vient le voyage tant attendu vers les Pays-Bas. Tout est planifié quand soudain… Problème ! Comment se rendre à l’aéroport ? La voiture ? Le parking est hors de prix. Le bus ? De longues minutes, à traverser toutes les rues de Bordeaux.\r\nEn effet, à l’heure actuelle, il existe peu de solutions pour se rendre du centre de Bordeaux jusqu’à l\'aéroport de Mérignac. La ligne de bus 1 permet de faire ce trajet urbain. D’autres alternatives de bus existent également, mais chacune ajoute de longues minutes aux temps de trajet. Les Bordelais se sont plaints depuis des années, encore et encore. Comment la seule possibilité est réduite à un bus toujours saturé de voyageurs ? Comment l’aéroport de Bordeaux, une destination fortement fréquentée, peut t\'elle être aussi mal desservie ? Ancrés dans le quotidien, les tramways bordelais sont les transports en commun les plus utilisés par ses habitants. Et pourtant aucun n\'atteint l’aéroport. Les élus de Bordeaux, réveillés par les plaintes des citoyens, ont donc logiquement pris la décision de prolonger la ligne A.\r\nCependant, ce n’est pas la fin de la longue attente des Bordelais.', 'Nos espoirs repoussés jusqu’au bout', 'Après de nombreux reports, cette nouvelle vient éclairer nos espoirs d’enfin avoir un moyen de se rendre à l\'aéroport plus facilement et rapidement. Depuis que le prolongement de la ligne a été approuvé par les élus de Bordeaux vendredi 29 avril 2016, nous sommes tous impatients de voir ce projet prendre vie. Les premiers travaux ont commencé en 2019, malheureusement la pandémie de Covid-19 a retardé les travaux et un premier report a été annoncé en septembre 2020. Celui-ci repousse la fin du projet de mars 2022 à septembre 2022. Hélas, en juillet 2021, un nouveau retard est annoncé. Décalant de septembre 2022 à janvier 2023 la mise en marche de l\'extension . En septembre 2022, de nouveau, la date finale est reportée en avril 2023. Nous voici en février 2023, plus d’un an après la date butoir initialement prévue début 2022. L’ouverture de la ligne est planifiée dans moins de 2 mois, enfin ! Espérons cette fois-ci, que les reports ne seront qu’un lointain mauvais souvenir.\r\nCette extension sera aménagée en voie unique. Celle-ci desservira 5 nouveaux arrêts sur les 5 km d’extensions. Elle pourra ainsi relier l\'aéroport et la place Pey Berland en seulement 35 min. Un gain de temps évident pour les passagers. Avec celle-ci, des travaux d’aménagement ont été réalisés.', 'Le monde ne tourne pas autour du tram!', 'En effet, après l’allongement de la voie vers l’aéroport, il y aura en tout 13 km de voies avec 18 stations, et 1 parc relais supplémentaire avec une planification du lancement de 35 nouveaux trams, espérons qu’ils ne soient pas tous aussi bondés ! Mais tous ces changements n\'affectent pas seulement les voyageurs du tram.En effet, après l’allongement de la voie vers l’aéroport, il y aura en tout 13 km de voies avec 18 stations, et 1 parc relais supplémentaire avec une planification du lancement de 35 nouveaux trams, espérons qu’ils ne soient pas tous aussi bondés ! L’implémentation de 1000 nouvelles batteries électriques pour les V3, au cas où vous adoreriez les vélos, mais n’aimez pas pédaler.\r\nMais au cas où si vous n\'avez ni vélo, ni tram opérationnel, ni envie de marcher ; l’autre projet du réseau bordelais se concentre sur les bus : plusieurs autres travaux sont prévus sur la première ligne de bus. Pour fluidifier la circulation des prochains tramways, plusieurs giratoires sur les avenues Cassin et de Beaudésert ont été aménagés. Des barreaux routiers pour connecter les rues Isaac Newton et Euler, des aménagements de connexions avec la rue Ariane pour relier le tram à l’avenue JF Kennedy, ainsi que la rue Caroline Aigle, avec un couloir de bus et une voie verte large de 4 mètres pour une bonne continuité cyclable et piétonne pour nos chers voyageurs non-polluant.', 'Aujourd\'hui, le prolongement de la ligne A semble enfin à portée de vue. Seuls quelques mois nous séparent de l\'ouverture tant attendue par les Bordelais. Cependant, nous espérons que la nouvelle ligne sera fonctionnelle. En effet, la plupart des usagers actuels du réseau TBM ne cachent pas leur colère. Les problèmes à répétition, chaque jour, sont un véritable fléau pour les usagers.', '/source/images/uploads/63e649780ef13COUV-ARTICLES-1920x1080-80.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `numCom` int NOT NULL AUTO_INCREMENT,
  `dtCreCom` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `libCom` text NOT NULL,
  `attModOK` tinyint(1) DEFAULT '0',
  `dtModCom` timestamp NULL DEFAULT NULL,
  `notifComKOAff` text,
  `delLogiq` tinyint(1) DEFAULT '0',
  `numArt` int NOT NULL,
  `numMemb` int NOT NULL,
  PRIMARY KEY (`numCom`),
  KEY `COMMENT_FK` (`numCom`),
  KEY `FK_ASSOCIATION_2` (`numArt`),
  KEY `FK_ASSOCIATION_3` (`numMemb`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `likeart`
--

DROP TABLE IF EXISTS `likeart`;
CREATE TABLE IF NOT EXISTS `likeart` (
  `numMemb` int NOT NULL,
  `numArt` int NOT NULL,
  `likeA` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`numMemb`,`numArt`),
  KEY `LIKEART_FK` (`numMemb`,`numArt`),
  KEY `FK_LIKEART1` (`numArt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `numMemb` int NOT NULL AUTO_INCREMENT,
  `prenomMemb` varchar(70) NOT NULL,
  `nomMemb` varchar(70) NOT NULL,
  `pseudoMemb` varchar(70) NOT NULL,
  `passMemb` varchar(70) NOT NULL,
  `eMailMemb` varchar(100) NOT NULL,
  `dtCreaMemb` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `numStat` int NOT NULL,
  PRIMARY KEY (`numMemb`),
  KEY `MEMBRE_FK` (`numMemb`),
  KEY `FK_ASSOCIATION_4` (`numStat`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`numMemb`, `prenomMemb`, `nomMemb`, `pseudoMemb`, `passMemb`, `eMailMemb`, `dtCreaMemb`, `numStat`) VALUES
(10, 'Amelie', 'Perrot', 'Amelie*7', '$2y$10$pEp90XSze9MXzh8zyOKiKuSUng3WR2x9v1RIdfZ6EmWal2r8/lpBS', 'Amelie@gmail.com', '2023-02-12 14:05:56', 1),
(11, 'Joel', 'Bart', 'Martine02', '$2y$10$T4k3TvyfBpjAwXC7lN0jgu4C7H8D6.JGletNTT5CuX5sFAojQJouO', 'JoelBart@gmail.com', '2023-02-12 14:03:07', 3);

-- --------------------------------------------------------

--
-- Structure de la table `motcle`
--

DROP TABLE IF EXISTS `motcle`;
CREATE TABLE IF NOT EXISTS `motcle` (
  `numMotCle` int NOT NULL AUTO_INCREMENT,
  `libMotCle` varchar(60) NOT NULL,
  PRIMARY KEY (`numMotCle`),
  KEY `MOTCLE_FK` (`numMotCle`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `motcle`
--

INSERT INTO `motcle` (`numMotCle`, `libMotCle`) VALUES
(1, 'Bordeaux'),
(15, 'Tramway'),
(16, 'Aéroport'),
(17, 'Transport en commun'),
(18, 'ProblèmesdeTransports'),
(19, 'Mécontent'),
(20, 'Voyage');

-- --------------------------------------------------------

--
-- Structure de la table `motclearticle`
--

DROP TABLE IF EXISTS `motclearticle`;
CREATE TABLE IF NOT EXISTS `motclearticle` (
  `numArt` int NOT NULL,
  `numMotCle` int NOT NULL,
  PRIMARY KEY (`numArt`,`numMotCle`),
  KEY `MOTCLEARTICLE_FK` (`numArt`),
  KEY `MOTCLEARTICLE2_FK` (`numMotCle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `motclearticle`
--

INSERT INTO `motclearticle` (`numArt`, `numMotCle`) VALUES
(20, 1),
(20, 15),
(20, 17),
(20, 18),
(20, 19),
(21, 1),
(21, 15),
(21, 16),
(21, 17),
(21, 20);

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `numStat` int NOT NULL AUTO_INCREMENT,
  `libStat` varchar(25) NOT NULL,
  PRIMARY KEY (`numStat`),
  KEY `STATUT_FK` (`numStat`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`numStat`, `libStat`) VALUES
(1, 'Administrateur'),
(2, 'Modérateur'),
(3, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `thematique`
--

DROP TABLE IF EXISTS `thematique`;
CREATE TABLE IF NOT EXISTS `thematique` (
  `numThem` int NOT NULL AUTO_INCREMENT,
  `libThem` varchar(60) NOT NULL,
  PRIMARY KEY (`numThem`),
  KEY `THEMATIQUE_FK` (`numThem`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `thematique`
--

INSERT INTO `thematique` (`numThem`, `libThem`) VALUES
(1, 'L\'événement'),
(2, 'L\'acteur-clé');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_ASSOCIATION_1` FOREIGN KEY (`numThem`) REFERENCES `thematique` (`numThem`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_ASSOCIATION_2` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_ASSOCIATION_3` FOREIGN KEY (`numMemb`) REFERENCES `membre` (`numMemb`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `likeart`
--
ALTER TABLE `likeart`
  ADD CONSTRAINT `FK_LIKEART1` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_LIKEART2` FOREIGN KEY (`numMemb`) REFERENCES `membre` (`numMemb`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `FK_ASSOCIATION_4` FOREIGN KEY (`numStat`) REFERENCES `statut` (`numStat`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Contraintes pour la table `motclearticle`
--
ALTER TABLE `motclearticle`
  ADD CONSTRAINT `FK_MotCleArt1` FOREIGN KEY (`numMotCle`) REFERENCES `motcle` (`numMotCle`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `FK_MotCleArt2` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

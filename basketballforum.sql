-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 02 Décembre 2018 à 04:57
-- Version du serveur :  5.6.17-log
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `basketballforum`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `news` smallint(6) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `contenu` text NOT NULL,
  `moderation` varchar(10) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `news`, `auteur`, `contenu`, `moderation`, `date`) VALUES
(6, 5, 'Fan', 'Bel Article sur la NCAA', 'NON', '2018-04-02 17:42:22'),
(7, 5, 'henry', 'Le temps passe mais l\'amour du basket demeure.', 'NON', '2018-05-30 12:42:22');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` smallint(5) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(30) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `dateAjout` datetime NOT NULL,
  `dateModif` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `auteur`, `titre`, `contenu`, `dateAjout`, `dateModif`) VALUES
(3, 'BASKETBALL USA', 'Avec un Ricky Rubio revanchard, le Jazz gifle les Timberwolves', 'Ce Wolves â€“ Jazz devait Ãªtre un des matches les plus importants de la saison en vue des playoffs Ã  lâ€™Ouest, et il sâ€™est vite transformÃ© en dÃ©monstration. Les visiteurs nâ€™ont pas fait de dÃ©tail pour sâ€™imposer 121-97 dans une de leurs meilleures performances offensives de la saison. PortÃ© par lâ€™ancien de la maison Ricky Rubio, meilleur marqueur des siens (23 points Ã  9/16), les hommes de Quin Snyder se sont offert le scalp et la place de Minnesota en grimpant Ã  la 6e place. PrivÃ©s de Jimmy Butler mais aussi de Jeff Teague et Derrick Rose sur cette rencontre, les joueurs de Minneapolis semblent au bout de leurs capacitÃ©s actuelles. Il est temps que la rÃ©guliÃ¨re se termine. ProblÃ¨me, Denver est revenu Ã  une victoire et demi derriÃ¨reâ€¦\r\n\r\nLâ€™opposition nâ€™aura finalement durÃ© quâ€™un quart-temps. DiminuÃ©, le groupe de Tom Thibodeau doit compter sur ses cadres pour tenir la baraque. Andrew Wiggins fait mieux que cela et sâ€™occupe de tout en dÃ©but de match. Scoring, rebond, et mÃªme un peu de dÃ©fense, le Canadien se dÃ©multiplie (11 points, 3 rebonds, 2 passes dans le premier acte) et met Minnesota sur les bons rails (15-11, 6â€²). Un peu trop portÃ© par le tir extÃ©rieur, Utah se recadre rapidement. Lâ€™acadÃ©mie de jeu de Quin Snyder reprend ses droits, les tirs faciles avec. Derrick Favors est dans le bon ton, Dante Exum aussi. Lâ€™Australien est tranchant dÃ¨s son entrÃ©e en jeu et le Jazz passe devant en fin de premier quart-temps (26-28).', '2018-04-02 17:36:28', '2018-04-02 19:50:38'),
(4, 'Basket info', 'Anthony Davis : Â« De la nÃ©gligence Â»', 'Outre la performance Â« dÃ©cevante Â» (comme LeBron James, il est parfois victime du niveau fou quâ€™il propose tout au long de la saison) dâ€™Anthony Davis (25 points Ã  8/17, 11 rebonds, 3 passes, 2 contres, 3 interceptions et 4 ballons perdus), les Pelicans ont surtout payÃ© leurs 21 ballons perdus contre Oklahoma City, dans un match pourtant crucial en vue des playoffs.\r\n\r\nÂ« Câ€™est difficile de battre qui que ce soit quand vous perdez 21 ballons. Si vous perdez autant de ballons contre une Ã©quipe de qualitÃ©, lÃ  forcÃ©ment vous allez avoir du mal, surtout contre une aussi bonne Ã©quipe quâ€™OKC. Â» Alvin Gentry via NBA', '2018-04-02 17:38:43', '2018-04-02 17:38:43'),
(5, 'Basket retro', '[NCAA] La poignÃ©e de main du changement', 'Â« Les temps changent Â» chante Bob Dylan  en 1963. La mÃªme annÃ©e, une poignÃ©e de main entre deux joueurs montre que dans le basket universitaire, les choses bougent aussi. Mais en prÃ©ambule, nous revenons sur les incidents hors basket de Ole Miss en 1962, pour vous mettre dans lâ€™ambiance qui rÃ¨gne dans lâ€™Etat du Mississippi lors de la deuxiÃ¨me annÃ©e du mandat de John F. Kennedy.\r\n30 septembre 1962, Oxford, Etat de Mississippi. James Meredith entre pour la premiÃ¨re fois par la grande porte Ã  Ole Miss, surnom de Mississippi University. Costume et cravate sombres, chemise blanche, petit cartable en cuir Ã  la main, Meredith ressemble davantage Ã  un jeune professeur quâ€™Ã  un Ã©tudiant bizu. Il a dÃ©jÃ  29 ans et ses neuf annÃ©es passÃ©es dans lâ€™Air Force lui ont permis dâ€™obtenir une bourse. Mais ce nâ€™est ni son Ã¢ge, ni son allure qui attire lâ€™attention, ce sont les dizaines dâ€™agents fÃ©dÃ©raux qui lâ€™escortent. Car James Meredith est noir. Et en 1962, le Mississippi demeure probablement lâ€™Etat de lâ€™Union le plus rÃ©fractaire Ã  lâ€™Ã©mancipation des Â« gens de couleur Â».', '2018-04-02 17:40:44', '2018-04-02 17:40:44');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 22 Février 2016 à 23:01
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `contene` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date` int(11) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contene`, `date`, `img`) VALUES
(52, 'test article 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas varius mi at tristique vehicula. Cras posuere vitae magna nec pretium. Suspendisse rhoncus dolor orci, id vulputate massa tincidunt et. Aenean tincidunt ultrices ornare. Nullam sapien sem, hendrerit in molestie vel, lobortis at nibh. Curabitur at urna elementum, dapibus nibh ac, scelerisque enim. Praesent pharetra posuere quam. Integer condimentum eleifend massa vitae eleifend. Sed id nisi et nulla fringilla laoreet. Aenean non felis non libero molestie volutpat sed sit amet dui. Curabitur at dolor odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In rutrum odio non nisl posuere dapibus. Donec efficitur euismod ante non semper. Curabitur in purus dapibus, tempus tortor in, pulvinar risus.', 160203, 'minions_2015_movie_fond_ecran.jpg'),
(53, 'Article 1', 'enean semper, dui sit amet gravida efficitur, libero metus ullamcorper dolor, vitae gravida augue mauris sit amet ligula. Phasellus imperdiet turpis at elit condimentum, ut porttitor nibh ultricies. Mauris a aliquam augue, vitae hendrerit massa. Nulla eget leo posuere, convallis lorem vel, lacinia purus. Suspendisse sit amet velit in nunc interdum facilisis eget quis ex. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis felis mi, venenatis ac augue quis, lacinia fringilla lorem. Aliquam ex tortor, vehicula dignissim nisl nec, pretium condimentum purus.', 160203, 'man-jersey-arm-planet-globe-continents-the-sun-line-creative_1920x1080_sc.jpg'),
(54, 'Article 2', 'enean semper, dui sit amet gravida efficitur, libero metus ullamcorper dolor, vitae gravida augue mauris sit amet ligula. Phasellus imperdiet turpis at elit condimentum, ut porttitor nibh ultricies. Mauris a aliquam augue, vitae hendrerit massa. Nulla eget leo posuere, convallis lorem vel, lacinia purus. Suspendisse sit amet velit in nunc interdum facilisis eget quis ex. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis felis mi, venenatis ac augue quis, lacinia fringilla lorem. Aliquam ex tortor, vehicula dignissim nisl nec, pretium condimentum purus.', 160203, 'noelboulewallpaperhd.jpg'),
(55, 'CCS3', 'Les feuilles de style en cascade1, gÃ©nÃ©ralement appelÃ©es CSS, forment un langage informatique qui dÃ©crit la prÃ©sentation des documents HTML et XML. Introduit au milieu des annÃ©es 1990, CSS devient couramment utilisÃ© dans la conception de sites web et bien pris en charge par les navigateurs web dans les annÃ©es 2000.', 160217, '');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`,`email`,`mdp`,`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `email`, `mdp`, `sid`, `nom`, `prenom`) VALUES
(1, 'hibon.francois@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '41b8499c74196d84e86dcae65299ec0b', 'hibon', 'francois'),
(8, 'fr@fr.fr', 'e10adc3949ba59abbe56e057f20f883e', '86b63326e0a0ca4b8316b8bccb9bc7be', '', ''),
(9, 'francois.hibon@cabinet-watel.fr', 'e10adc3949ba59abbe56e057f20f883e', 'ba4ae73e98da5f1ad50e227e84ff2467', '', ''),
(10, 're@re.fr', 'e10adc3949ba59abbe56e057f20f883e', 'f11ff0a1d47ca2edb854cca146e5b022', '', ''),
(11, 'gt@gt.gt', 'e10adc3949ba59abbe56e057f20f883e', 'c5b66bb1738f7d4109248fd46e0501d3', 'hibon', 'francois');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

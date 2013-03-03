-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Dim 03 Mars 2013 à 15:00
-- Version du serveur: 5.5.20
-- Version de PHP: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cakerollist`
--

-- --------------------------------------------------------

--
-- Structure de la table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL,
  `valid` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `friend_id`, `message`, `created`, `valid`) VALUES
(3, 4, 1, 'dazdadzad', '2013-02-26 17:47:28', 0),
(8, 5, 3, 'Bien le bonjour prince, souhaitez vous partagez mon aventure ?', '2013-02-27 15:01:54', 0),
(10, 4, 6, 'Bonjour noble paladin, rejoignez moi pour participer Ã  de grandes quÃªtes.', '2013-02-27 17:16:16', 1);

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'peon'),
(3, 'hÃ©ros');

-- --------------------------------------------------------

--
-- Structure de la table `langs`
--

CREATE TABLE IF NOT EXISTS `langs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `race_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `info` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `langs`
--

INSERT INTO `langs` (`id`, `race_id`, `name`, `info`) VALUES
(1, 1, 'Le gobelin', 'Dialecte des gobelins'),
(2, 2, 'L''elfe', 'Dialecte elfique'),
(3, 3, 'L''humain', 'Dialecte humain'),
(4, 4, 'Le nain', 'Dialecte nain');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `dest_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `dest_id`, `message`, `created`) VALUES
(1, 1, 2, 'hello', '2013-02-20 00:00:00'),
(2, 1, 3, 'aaa', '2013-02-26 14:45:24'),
(3, 4, 3, 'salut ! ', '2013-02-26 14:47:03'),
(4, 1, 3, 'salut !', '2013-03-03 14:58:18'),
(5, 1, 5, 'Ã§a va ?', '2013-03-03 14:59:26');

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(200) NOT NULL,
  `legend` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `pictures`
--

INSERT INTO `pictures` (`id`, `url`, `legend`, `created`, `user_id`) VALUES
(1, 'http://cdn03.cdnwp.celebuzz.com/wp-content/uploads/2010/12/05/justin-bieber.jpg', 'moi en bg', '0000-00-00 00:00:00', 3),
(2, 'http://www.aceshowbiz.com/images/wennpic/justin-bieber-40th-anniversary-american-music-awards-06.jpg', 'moi a mon anniversaire', '0000-00-00 00:00:00', 3),
(3, 'http://img3.xooimage.com/files/9/b/f/banana-boy-tux-perso-2990-4ccb36.png', 'Pingu !', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `races`
--

CREATE TABLE IF NOT EXISTS `races` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `races`
--

INSERT INTO `races` (`id`, `name`, `description`) VALUES
(1, 'gobelin', 'un etre vert tout moche'),
(2, 'elfe', 'un etre beau et Ã©lÃ©gant'),
(3, 'humain', 'un humain');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `background` text,
  `group_id` int(10) unsigned DEFAULT NULL,
  `race_id` int(10) unsigned DEFAULT NULL,
  `user_lang_id` int(10) NOT NULL,
  `picture_id` int(10) unsigned DEFAULT NULL,
  `work_id` int(10) unsigned DEFAULT NULL,
  `xp_id` int(10) unsigned DEFAULT '1',
  `xp_nb` int(10) unsigned DEFAULT '0',
  `user_pseudo` varchar(50) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created`, `updated`, `background`, `group_id`, `race_id`, `user_lang_id`, `picture_id`, `work_id`, `xp_id`, `xp_nb`, `user_pseudo`) VALUES
(1, 'bob', '37de4f3ae6ed019aaebb68e1770ed0db03e13fdc', 'bob@bob.com', '2013-02-25 16:11:49', '2013-03-03 14:59:26', 'je suis un gobelin ! et j''aime les frites !', 2, 1, 0, 3, 1, 2, 0, 'BobLeGob'),
(2, 'Adele', '37de4f3ae6ed019aaebb68e1770ed0db03e13fdc', 'adele@mail.com', '2013-02-25 16:15:03', '2013-02-26 09:53:35', 'Je suis une elfe vraiment trÃ¨s jolie 90-65-85', 2, 2, 0, NULL, 1, 2, 0, 'Eldorine'),
(3, 'JR', '56ca5510548ce3defe704e84cca5f646dec28897', 'jr@mail.com', '2013-02-25 16:15:49', '2013-02-26 17:22:16', 'Je suis un fier guerrier d''Irul, mon royaume, (je suis un prince, inclinez vous !)', 3, 3, 0, 1, 2, 3, 1, 'JR le prince Corse'),
(5, 'Blaugier', '37de4f3ae6ed019aaebb68e1770ed0db03e13fdc', 'blaugier@gmail.com', '2013-02-25 22:03:57', '2013-02-26 16:07:51', 'Je suis l''admin, j''ai tous les pouvoirs ! :)', 1, 3, 0, NULL, 2, 5, 5, 'Echo');

-- --------------------------------------------------------

--
-- Structure de la table `user_langs`
--

CREATE TABLE IF NOT EXISTS `user_langs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Structure de la table `works`
--

CREATE TABLE IF NOT EXISTS `works` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `workname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `works`
--

INSERT INTO `works` (`id`, `workname`) VALUES
(1, 'assassin'),
(2, 'pretre');

-- --------------------------------------------------------

--
-- Structure de la table `xps`
--

CREATE TABLE IF NOT EXISTS `xps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `xp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `xps`
--

INSERT INTO `xps` (`id`, `xp`) VALUES
(1, 0),
(2, 1000),
(3, 3000),
(4, 6000),
(5, 10000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

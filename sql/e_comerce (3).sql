-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 21 juin 2019 à 14:23
-- Version du serveur :  10.1.33-MariaDB
-- Version de PHP :  7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `e_comerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `adress`
--

CREATE TABLE `adress` (
  `id_adress` int(11) NOT NULL,
  `client` int(11) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `cartline`
--

CREATE TABLE `cartline` (
  `id_cartline` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `meta_keywords` varchar(200) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `created_at`, `is_active`, `meta_keywords`, `name`, `slug`, `updated_at`) VALUES
(1, '2019-05-14 15:00:00', 1, 'rdfghkbj;', 'jghvghvgh', 'hgvghv', '2019-05-14 04:10:00');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `e_mail` varchar(50) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `perenom` varchar(30) DEFAULT NULL,
  `telephone` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `username`, `e_mail`, `nom`, `password`, `perenom`, `telephone`) VALUES
(2, 'Moustapha_out', 'm.el_outmani@mundiapolis.ma', 'ElOutmani Moustapha', '4a7d1ed414474e4033ac29ccb8653d9b', NULL, '+212697195869');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `username` int(11) DEFAULT NULL,
  `body_text` varchar(1000) DEFAULT NULL,
  `post_date` datetime DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id_facture` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL,
  `facture_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ordeer`
--

CREATE TABLE `ordeer` (
  `id_order` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_adress` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `prix_livraison` decimal(65,0) DEFAULT NULL,
  `shipping_date` date DEFAULT NULL,
  `shipping_status` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id_order_detail` int(11) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `product_unit_price` float DEFAULT NULL,
  `qty` int(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `posted_by` varchar(50) DEFAULT NULL,
  `allow_comments` tinyint(1) DEFAULT NULL,
  `body_text` varchar(1000) DEFAULT NULL,
  `comment_count` int(10) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `posted` datetime DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `title` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `caracteristique` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `meta_description` varchar(500) DEFAULT NULL,
  `meta_keywords` varchar(200) DEFAULT NULL,
  `name_product` varchar(50) DEFAULT NULL,
  `old_price` decimal(65,0) DEFAULT NULL,
  `price` decimal(65,0) DEFAULT NULL,
  `quantity` int(20) DEFAULT NULL,
  `sku` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `id_sous_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id_product`, `brand`, `caracteristique`, `created_at`, `description`, `image`, `is_active`, `meta_description`, `meta_keywords`, `name_product`, `old_price`, `price`, `quantity`, `sku`, `slug`, `updated_at`, `id_category`, `id_sous_category`) VALUES
(6, 'HC-SR04', '1', '2019-06-20 11:59:22', 'Un capteur economique pour mesurer une distance par ultrson.', '../front-end/img/products/CAPTEUR-DE-DISTANCE-ULTRASON-HC-SR04.jpg', NULL, NULL, NULL, 'CAPTEUR DE DISTANCE ULTRASON HC-SR04', '50', '55', 27, NULL, 'CAPTEUR-DE-DISTANCE-ULTRASON-HC-SR04', NULL, 1, NULL),
(7, 'Arduino', 'SKU	AR169OT0YSD9SNAFAMZ Poids (kg)	0.2', '2019-06-20 11:56:39', 'Nb ports Â« Analogique/NumÃ©rique Â»     6 Courant max. par E/S     40 mA Courant pour broches 3.3 V     50 mA MÃ©moire Flash     32 KB (ATmega328) dont 0.5 KB utilisÃ© par le bootloader SRAM     2 KB', '../front-end/img/products/Arduino-UNO-R3-+-cÃ¢ble.jpg', NULL, NULL, NULL, 'Arduino UNO R3 + cÃ¢ble', '100', '115', 30, NULL, 'Arduino-UNO-R3-+-cÃ¢ble', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sous_category`
--

CREATE TABLE `sous_category` (
  `id_sous_category` int(11) NOT NULL,
  `id_categorie` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `meta_keywords` varchar(200) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `slug` varchar(50) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `thumb`
--

CREATE TABLE `thumb` (
  `id_thumb` int(11) NOT NULL,
  `id_product` int(11) DEFAULT NULL,
  `thumb` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vente_detail`
--

CREATE TABLE `vente_detail` (
  `id_vente` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_commande` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `qty` int(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wish_list` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `wishlist`
--

INSERT INTO `wishlist` (`id_wish_list`, `id_client`, `id_product`, `quantity`) VALUES
(3, 2, 6, 6),
(4, 2, 7, 2),
(5, 2, 7, 1),
(6, 2, 7, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`id_adress`),
  ADD KEY `client` (`client`);

--
-- Index pour la table `cartline`
--
ALTER TABLE `cartline`
  ADD PRIMARY KEY (`id_cartline`),
  ADD KEY `client` (`id_client`),
  ADD KEY `product` (`id_product`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `e_mail` (`e_mail`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `username` (`username`),
  ADD KEY `user_email` (`user_email`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id_facture`),
  ADD KEY `client` (`id_client`),
  ADD KEY `id_order` (`id_order`);

--
-- Index pour la table `ordeer`
--
ALTER TABLE `ordeer`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `client` (`id_client`),
  ADD KEY `id_adress` (`id_adress`);

--
-- Index pour la table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id_order_detail`),
  ADD KEY `orderr` (`id_order`),
  ADD KEY `product` (`id_product`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `posted_by` (`posted_by`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_sous_category` (`id_sous_category`);

--
-- Index pour la table `sous_category`
--
ALTER TABLE `sous_category`
  ADD PRIMARY KEY (`id_sous_category`),
  ADD KEY `categorie` (`id_categorie`);

--
-- Index pour la table `thumb`
--
ALTER TABLE `thumb`
  ADD PRIMARY KEY (`id_thumb`),
  ADD KEY `product` (`id_product`);

--
-- Index pour la table `vente_detail`
--
ALTER TABLE `vente_detail`
  ADD PRIMARY KEY (`id_vente`),
  ADD KEY `client` (`id_client`),
  ADD KEY `commande` (`id_commande`),
  ADD KEY `product` (`id_product`);

--
-- Index pour la table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wish_list`),
  ADD KEY `client` (`id_client`),
  ADD KEY `product` (`id_product`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adress`
--
ALTER TABLE `adress`
  MODIFY `id_adress` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cartline`
--
ALTER TABLE `cartline`
  MODIFY `id_cartline` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id_facture` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ordeer`
--
ALTER TABLE `ordeer`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id_order_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `sous_category`
--
ALTER TABLE `sous_category`
  MODIFY `id_sous_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `thumb`
--
ALTER TABLE `thumb`
  MODIFY `id_thumb` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `vente_detail`
--
ALTER TABLE `vente_detail`
  MODIFY `id_vente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wish_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adress`
--
ALTER TABLE `adress`
  ADD CONSTRAINT `adress_ibfk_1` FOREIGN KEY (`client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `cartline`
--
ALTER TABLE `cartline`
  ADD CONSTRAINT `cartline_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `cartline_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`username`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_email`) REFERENCES `client` (`e_mail`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `facture_ibfk_2` FOREIGN KEY (`id_order`) REFERENCES `ordeer` (`id_order`);

--
-- Contraintes pour la table `ordeer`
--
ALTER TABLE `ordeer`
  ADD CONSTRAINT `ordeer_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `ordeer_ibfk_2` FOREIGN KEY (`id_adress`) REFERENCES `adress` (`id_adress`);

--
-- Contraintes pour la table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `ordeer` (`id_order`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`posted_by`) REFERENCES `client` (`username`);

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id_category`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`id_sous_category`) REFERENCES `sous_category` (`id_sous_category`) ON DELETE CASCADE;

--
-- Contraintes pour la table `sous_category`
--
ALTER TABLE `sous_category`
  ADD CONSTRAINT `sous_category_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `category` (`id_category`);

--
-- Contraintes pour la table `thumb`
--
ALTER TABLE `thumb`
  ADD CONSTRAINT `thumb_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Contraintes pour la table `vente_detail`
--
ALTER TABLE `vente_detail`
  ADD CONSTRAINT `vente_detail_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `vente_detail_ibfk_2` FOREIGN KEY (`id_commande`) REFERENCES `ordeer` (`id_order`),
  ADD CONSTRAINT `vente_detail_ibfk_3` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`);

--
-- Contraintes pour la table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`id_product`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `slug` varchar(60) NOT NULL,
  `contenu` longtext,
  `date_creation` datetime DEFAULT NULL,
  `date_modification` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

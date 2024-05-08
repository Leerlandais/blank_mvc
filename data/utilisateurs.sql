CREATE TABLE IF NOT EXISTS `utilisateurs` (
                                              `idutilisateurs` int UNSIGNED NOT NULL AUTO_INCREMENT,
                                              `username` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT 'case sensitive',
                                              `passwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
                                              PRIMARY KEY (`idutilisateurs`),
                                              UNIQUE KEY `username_UNIQUE` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Insertion des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`idutilisateurs`, `username`, `passwd`) VALUES
    (1, 'admin', '$2y$10$2sn4jJ0LgUkGCQHNDfsEPOlybZlC20j.Lk3JCM7lfyAwwrizsEaem');

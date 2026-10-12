UPDATE `lien` SET lien=REPLACE(lien, 'Chords', 'accords') WHERE lien like '%Chords%';
ALTER TABLE `etablissement` CHANGE `etablissement` `nom` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'nom de l\'endroit';
ALTER TABLE `lien` CHANGE `lien` `url` VARCHAR(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL;
ALTER TABLE `proposition` CHANGE `ID` `ID` INT NOT NULL;
ALTER TABLE `proposition` DROP PRIMARY KEY, ADD PRIMARY KEY(`idSong`);
Suppression ID de la table proposition
ALTER TABLE `proposition` CHANGE `idSong` `ID` INT NOT NULL DEFAULT '0';
ALTER TABLE `setlist` CHANGE `nom` `nomListe` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL COMMENT 'Nom de la liste';
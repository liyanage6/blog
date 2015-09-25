CREATE TABLE `billet` (
	`id_billet` INT(3) NOT NULL AUTO_INCREMENT,
	`date` DATE NOT NULL,
	`titre` VARCHAR(75) NOT NULL DEFAULT '0',
	`contenu` VARCHAR(255) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id_billet`)
)
	COLLATE='latin1_swedish_ci'
	ENGINE=InnoDB
;


CREATE TABLE `commentaire` (
	`id_commentaire` INT(4) NOT NULL AUTO_INCREMENT,
	`date` DATE NOT NULL,
	`auteur` VARCHAR(75) NULL DEFAULT NULL,
	`contenu` VARCHAR(255) NULL DEFAULT NULL,
	PRIMARY KEY (`id_commentaire`)
)
	COLLATE='latin1_swedish_ci'
	ENGINE=InnoDB
;

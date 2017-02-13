CREATE TABLE `practica`.`utilizatori`( `uid` VARCHAR(15) NOT NULL, `nume` VARCHAR(254), `tip` VARCHAR(10), PRIMARY KEY (`uid`) ); 

CREATE TABLE `practica`.`activitati`( `uid` VARCHAR(15) NOT NULL, `tip` VARCHAR(15), `titlu` VARCHAR(254), `descriere` TEXT, `data_inceput` DATETIME, `data_sfarsit` DATETIME, `locuri` INT, `proprietar` VARCHAR(15), `activ` TINYINT(1), PRIMARY KEY (`uid`), FOREIGN KEY (`proprietar`) REFERENCES `practica`.`utilizatori`(`uid`) );

CREATE TABLE `practica`.`Aplicari`( `uid` VARCHAR(15) NOT NULL, `aplicant` VARCHAR(15), `activitate` VARCHAR(15), `descriere` TEXT, `acceptat` TINYINT(1), PRIMARY KEY (`uid`), FOREIGN KEY (`aplicant`) REFERENCES `practica`.`utilizatori`(`uid`), FOREIGN KEY (`activitate`) REFERENCES `practica`.`activitati`(`uid`) ); 
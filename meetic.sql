DROP DATABASE IF EXISTS meetic;
CREATE DATABASE IF NOT EXISTS meetic;

USE meetic;

DROP TABLE IF EXISTS user;
CREATE TABLE IF NOT EXISTS `user` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nom` VARCHAR(255) NOT NULL,
    `prénom` VARCHAR(255) NOT NULL,
    `date_de_naissance` DATE NOT NULL,
    `genre` VARCHAR(255) NOT NULL,
    `ville` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `mot_de_passe` TEXT NOT NULL,
    `loisir` VARCHAR(255) NOT NULL,
    `loisir2` VARCHAR(255),
    `loisir3` VARCHAR(255),
    PRIMARY KEY (id)
);

INSERT INTO user (nom, prénom, date_de_naissance, genre, ville, email, mot_de_passe, loisir, loisir2, loisir3)
VALUES ("Falla", "Enzo", "2003-06-15", "Homme", "Saint-Cloud", "enzo.falla@epitech.eu", MD5('root'), "Jeux Vidéo", "Manga/Anime", "Musique japonaise"),
("Pretre", "Renaud", "1976-08-24", "Homme", "Paris", "renaud.pretre@mail.com", MD5('Pretre'), "Littérature", "Voiture", NULL),
("Brunet", "Axel", "2000-05-01", "Homme", "Marseille", "axel.brunet@mail.com", MD5('Brunet'), "Jeux Vidéo", "Manga/Anime", "Voiture"),
("Boulanger", "Alceste", "1970-12-31", "Autre", "Poitier", "alceste.boulanger@mail.com", MD5('Boulanger'), "Patisserie", "Littérature", NULL),
("Girault", "Blaise", "1997-10-25", "Autre", "Bordeau", "blaise.girault@mail.com", MD5('Girault'), "Musique", "Cosmétique", NULL),
("Quint", "Roxane", "1993-04-07", "Femme", "Marseille", "roxane.quint@mail.com", MD5('Quint'), "Littérature", "Musique", NULL),
("Manoury", "Séverine", "1977-07-06", "Femme", "Paris", "severine.manoury@mail.com", MD5('Manoury'), "Littérature", "Natation", "Musique"),
("Milhaud", "Angeline", "1990-09-11", "Autre", "Boulogne", "angeline.milhaud@mail.com", MD5('Milhaud'), "Musique", "Cosmétique", NULL),
("Gribelin", "Emeline", "1999-11-28", "Autre", "Bordeau", "emeline.gribelin@mail.com", MD5('Gribelin'), "Cosmétique", "Fashion", NULL);
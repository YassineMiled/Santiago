-- Création de la base de données
CREATE DATABASE IF NOT EXISTS superlibros CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE superlibros;

-- Table des plateformes de jeux
CREATE TABLE IF NOT EXISTS plateforme (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(50) NOT NULL,
  fabricant VARCHAR(50) NOT NULL
);

-- Table des genres de jeux
CREATE TABLE IF NOT EXISTS genre (
  id INT AUTO_INCREMENT PRIMARY KEY,
  libelle VARCHAR(50) NOT NULL
);

-- Table des jeux vidéos
CREATE TABLE IF NOT EXISTS jeu (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(100) NOT NULL,
  annee INT NOT NULL,
  idPlateforme INT NOT NULL,
  idGenre INT NOT NULL,
  FOREIGN KEY (idPlateforme) REFERENCES plateforme(id),
  FOREIGN KEY (idGenre) REFERENCES genre(id)
);

-- Insertion des données de test pour les plateformes
INSERT INTO plateforme (nom, fabricant) VALUES 
('PlayStation 5', 'Sony'),
('Xbox Series X', 'Microsoft'),
('Nintendo Switch', 'Nintendo'),
('PC', 'Divers');

-- Insertion des données de test pour les genres
INSERT INTO genre (libelle) VALUES 
('Action'),
('Aventure'),
('RPG'),
('FPS'),
('Stratégie'),
('Simulation'),
('Sport');

-- Insertion des données de test pour les jeux
INSERT INTO jeu (titre, annee, idPlateforme, idGenre) VALUES 
('The Last of Us Part II', 2020, 1, 2),
('Halo Infinite', 2021, 2, 4),
('The Legend of Zelda: Breath of the Wild', 2017, 3, 2),
('FIFA 23', 2022, 1, 7),
('Cyberpunk 2077', 2020, 4, 3),
('Minecraft', 2011, 4, 2),
('Call of Duty: Modern Warfare', 2019, 2, 4),
('Animal Crossing: New Horizons', 2020, 3, 6),
('God of War', 2018, 1, 1),
('Forza Horizon 5', 2021, 2, 6);
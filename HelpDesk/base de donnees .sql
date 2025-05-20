 installer xampp
mysql -u root
USE bddhelpdesk
    CREATE DATABASE bddhelpdesk
    CREATE TABLE utilisateur (
    id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(50),
    mail VARCHAR(50),
    titre VARCHAR(30),
    urgence VARCHAR(10),
    prob VARCHAR(255),    
    incident INTEGER NOT NULL,
    date VARCHAR(15),
    heure VARCHAR(15),
    statut VARCHAR(15),
    reponse VARCHAR(255)
    os varchar(15) NOT NULL,
    version varchar(15) NOT NULL,
    
  PRIMARY KEY (`id`)
    );

mysql -u root -p nom_de_la_base_de_donnees < nom_du_fichier.sql
https://openclassrooms.com/fr/courses/6971126-implementez-vos-bases-de-donnees-relationnelles-avec-sql/7142232-creez-votre-base-de-donnees-bdd

SHOW DATABASES;
SHOW tables;
SHOW COLUMNS FROM utilisateur;
DROP TABLE utilisateur ;
TRUNCATE TABLE table_name;  ***pour vider les tables
exit; *** pour sortir ***

INSERT INTO `utilisateur` (`nom`, `prenom`, `email`)
VALUES ('Durantay', 'Quentin', 'quentin@gmail.com');

SELECT * FROM utilisateur; pour visualiser la table
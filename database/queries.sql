CREATE DATABASE db_pardadise;
USE db_pardadise;

CREATE TABLE client (cinClient VARCHAR(30) PRIMARY KEY,
                     nom VARCHAR(50),
                     prenom VARCHAR(50),
                     adresse VARCHAR(50),
                     email VARCHAR(50),
                     tele VARCHAR(50)
                     );

CREATE TABLE Chambre (idChambre INT PRIMARY KEY,
                      Categorie VARCHAR(20)  NOT NULL,
                      prix FLOAT NOT NULL
                      );

CREATE TABLE reservation(idRes int AUTO_INCREMENT PRIMARY KEY,
                     	 cinClient VARCHAR(30),
                     	 idChambre INT,
                     	 date_debut DATE,
                     	 date_fin DATE,
                     	 FOREIGN KEY(cinClient) REFERENCES client(cinClient),
                         FOREIGN KEY(idChambre) REFERENCES chambre(idChambre)
                     	);

INSERT INTO chambre VALUES(101,"Confort",400); 
INSERT INTO chambre VALUES(102,"Delux",600); 
INSERT INTO chambre VALUES(103,"Economique",350); 
INSERT INTO chambre VALUES(104,"Familiale",750); 
INSERT INTO chambre VALUES(105,"Familiale",750); 
INSERT INTO chambre VALUES(206,"Confort",400); 
INSERT INTO chambre VALUES(207,"Confort",400); 
INSERT INTO chambre VALUES(208,"Delux",600); 
INSERT INTO chambre VALUES(209,"Economique",350); 
INSERT INTO chambre VALUES(210,"Confort",400); 
INSERT INTO chambre VALUES(311,"Economique",350); 
INSERT INTO chambre VALUES(312,"Delux",600); 
INSERT INTO chambre VALUES(313,"Confort",400); 
INSERT INTO chambre VALUES(314,"Economique",350); 
INSERT INTO chambre VALUES(315,"Delux",600); 
INSERT INTO chambre VALUES(416,"Confort",400); 
INSERT INTO chambre VALUES(417,"Familiale",750); 
INSERT INTO chambre VALUES(418,"Familiale",750); 
INSERT INTO chambre VALUES(419,"Delux",600); 
INSERT INTO chambre VALUES(420,"Delux",600); 


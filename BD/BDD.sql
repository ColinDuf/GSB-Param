#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: TypeCompte
#------------------------------------------------------------

CREATE TABLE TypeCompte(
        niv     Int NOT NULL ,
        libelle Varchar (50) NOT NULL
	,CONSTRAINT TypeCompte_PK PRIMARY KEY (niv)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Compte
#------------------------------------------------------------

CREATE TABLE Compte(
        id      Int  Auto_increment  NOT NULL ,
        mail    Varchar (50) NOT NULL ,
        nom     Varchar (50) NOT NULL ,
        prenom  Varchar (50) NOT NULL ,
        tel     Varchar (50) NOT NULL ,
        ville   Varchar (50) NOT NULL ,
        adresse Varchar (50) NOT NULL ,
        cp      Int NOT NULL ,
        mdp     Varchar (255) NOT NULL ,
        niv     Int NOT NULL
	,CONSTRAINT Compte_PK PRIMARY KEY (id)

	,CONSTRAINT Compte_TypeCompte_FK FOREIGN KEY (niv) REFERENCES TypeCompte(niv)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Avis
#------------------------------------------------------------

CREATE TABLE Avis(
        idAvis Int  Auto_increment  NOT NULL ,
        note   Varchar (50) NOT NULL ,
        avis   Int NOT NULL ,
        id     Int NOT NULL
	,CONSTRAINT Avis_PK PRIMARY KEY (idAvis)

	,CONSTRAINT Avis_Compte_FK FOREIGN KEY (id) REFERENCES Compte(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commande
#------------------------------------------------------------

CREATE TABLE Commande(
        idCommande Int  Auto_increment  NOT NULL ,
        date       Date NOT NULL ,
        etat       Int NOT NULL ,
        montant    Float NOT NULL
	,CONSTRAINT Commande_PK PRIMARY KEY (idCommande)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Marque
#------------------------------------------------------------

CREATE TABLE Marque(
        idMarque Int  Auto_increment  NOT NULL ,
        nom      Varchar (50) NOT NULL
	,CONSTRAINT Marque_PK PRIMARY KEY (idMarque)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Categorie
#------------------------------------------------------------

CREATE TABLE Categorie(
        idCategorie Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL
	,CONSTRAINT Categorie_PK PRIMARY KEY (idCategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Produit
#------------------------------------------------------------

CREATE TABLE Produit(
        idProduit   Int  Auto_increment  NOT NULL ,
        nom         Varchar (50) NOT NULL ,
        image       Varchar (50) NOT NULL ,
        prix        Float NOT NULL ,
        idMarque    Int NOT NULL ,
        idCategorie Int NOT NULL
	,CONSTRAINT Produit_PK PRIMARY KEY (idProduit)

	,CONSTRAINT Produit_Marque_FK FOREIGN KEY (idMarque) REFERENCES Marque(idMarque)
	,CONSTRAINT Produit_Categorie0_FK FOREIGN KEY (idCategorie) REFERENCES Categorie(idCategorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Contenance
#------------------------------------------------------------

CREATE TABLE Contenance(
        idContenance Int  Auto_increment  NOT NULL ,
        volume       Float NOT NULL ,
        nom          Varchar (50) NOT NULL
	,CONSTRAINT Contenance_PK PRIMARY KEY (idContenance)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Faire
#------------------------------------------------------------

CREATE TABLE Faire(
        idCommande Int NOT NULL ,
        id         Int NOT NULL
	,CONSTRAINT Faire_PK PRIMARY KEY (idCommande,id)

	,CONSTRAINT Faire_Commande_FK FOREIGN KEY (idCommande) REFERENCES Commande(idCommande)
	,CONSTRAINT Faire_Compte0_FK FOREIGN KEY (id) REFERENCES Compte(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Detenir
#------------------------------------------------------------

CREATE TABLE Detenir(
        idProduit  Int NOT NULL ,
        idCommande Int NOT NULL
	,CONSTRAINT Detenir_PK PRIMARY KEY (idProduit,idCommande)

	,CONSTRAINT Detenir_Produit_FK FOREIGN KEY (idProduit) REFERENCES Produit(idProduit)
	,CONSTRAINT Detenir_Commande0_FK FOREIGN KEY (idCommande) REFERENCES Commande(idCommande)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Contenir
#------------------------------------------------------------

CREATE TABLE Contenir(
        idContenance Int NOT NULL ,
        idProduit    Int NOT NULL ,
        stock        Int NOT NULL ,
        prix         Decimal NOT NULL
	,CONSTRAINT Contenir_PK PRIMARY KEY (idContenance,idProduit)

	,CONSTRAINT Contenir_Contenance_FK FOREIGN KEY (idContenance) REFERENCES Contenance(idContenance)
	,CONSTRAINT Contenir_Produit0_FK FOREIGN KEY (idProduit) REFERENCES Produit(idProduit)
)ENGINE=InnoDB;


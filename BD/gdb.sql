#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Contenance
#------------------------------------------------------------

CREATE TABLE Contenance(
        idContenance Int  Auto_increment  NOT NULL ,
        unite        Varchar (50) NOT NULL
	,CONSTRAINT Contenance_PK PRIMARY KEY (idContenance)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Categorie
#------------------------------------------------------------

CREATE TABLE Categorie(
        idCat      Int  Auto_increment  NOT NULL ,
        codeCat    Varchar (50) NOT NULL ,
        libelleCat Varchar (50) NOT NULL
	,CONSTRAINT Categorie_PK PRIMARY KEY (idCat)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Produit
#------------------------------------------------------------

CREATE TABLE Produit(
        id          Int  Auto_increment  NOT NULL ,
        description Varchar (50) NOT NULL ,
        image       Varchar (50) NOT NULL ,
        idCategorie Varchar (50) NOT NULL ,
        idCat       Int NOT NULL
	,CONSTRAINT Produit_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Contenir
#------------------------------------------------------------

CREATE TABLE Contenir(
        idContenance Int NOT NULL ,
        id           Int NOT NULL ,
        Stock        Int NOT NULL ,
        prix         Float NOT NULL
	,CONSTRAINT Contenir_PK PRIMARY KEY (idContenance,id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Client
#------------------------------------------------------------

CREATE TABLE Client(
        id        Int  Auto_increment  NOT NULL ,
        nom       Varchar (50) NOT NULL ,
        prenom    Varchar (50) NOT NULL ,
        mail      Varchar (50) NOT NULL ,
        telephone Varchar (50) NOT NULL ,
        cp        Int NOT NULL ,
        ville     Varchar (50) NOT NULL ,
        adresse   Varchar (50) NOT NULL ,
        idCompte  Int NOT NULL
	,CONSTRAINT Client_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Commande
#------------------------------------------------------------

CREATE TABLE Commande(
        idCommande     Int  Auto_increment  NOT NULL ,
        dateCommande   Date NOT NULL ,
        prixCommande   Float NOT NULL ,
        statusCommande Varchar (5) NOT NULL ,
        id             Int NOT NULL
	,CONSTRAINT Commande_PK PRIMARY KEY (idCommande)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Avis
#------------------------------------------------------------

CREATE TABLE Avis(
        idAvis      Int  Auto_increment  NOT NULL ,
        note        Int NOT NULL ,
        commentaire Varchar (50) NOT NULL ,
        id          Int NOT NULL ,
        id_Produit  Int NOT NULL
	,CONSTRAINT Avis_PK PRIMARY KEY (idAvis)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Compte
#------------------------------------------------------------

CREATE TABLE Compte(
        idCompte Int  Auto_increment  NOT NULL ,
        lvl      Varchar (50) NOT NULL ,
        mdp      Varchar (50) NOT NULL ,
        id       Int NOT NULL
	,CONSTRAINT Compte_PK PRIMARY KEY (idCompte)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Detenir
#------------------------------------------------------------

CREATE TABLE Detenir(
        id         Int NOT NULL ,
        idCommande Int NOT NULL
	,CONSTRAINT Detenir_PK PRIMARY KEY (id,idCommande)
)ENGINE=InnoDB;




ALTER TABLE Produit
	ADD CONSTRAINT Produit_Categorie0_FK
	FOREIGN KEY (idCat)
	REFERENCES Categorie(idCat);

ALTER TABLE Contenir
	ADD CONSTRAINT Contenir_Contenance0_FK
	FOREIGN KEY (idContenance)
	REFERENCES Contenance(idContenance);

ALTER TABLE Contenir
	ADD CONSTRAINT Contenir_Produit1_FK
	FOREIGN KEY (id)
	REFERENCES Produit(id);

ALTER TABLE Client
	ADD CONSTRAINT Client_Compte0_FK
	FOREIGN KEY (idCompte)
	REFERENCES Compte(idCompte);

ALTER TABLE Client 
	ADD CONSTRAINT Client_Compte0_AK 
	UNIQUE (idCompte);

ALTER TABLE Commande
	ADD CONSTRAINT Commande_Client0_FK
	FOREIGN KEY (id)
	REFERENCES Client(id);

ALTER TABLE Avis
	ADD CONSTRAINT Avis_Client0_FK
	FOREIGN KEY (id)
	REFERENCES Client(id);

ALTER TABLE Avis
	ADD CONSTRAINT Avis_Produit1_FK
	FOREIGN KEY (id_Produit)
	REFERENCES Produit(id);

ALTER TABLE Compte
	ADD CONSTRAINT Compte_Client0_FK
	FOREIGN KEY (id)
	REFERENCES Client(id);

ALTER TABLE Compte 
	ADD CONSTRAINT Compte_Client0_AK 
	UNIQUE (id);

ALTER TABLE Detenir
	ADD CONSTRAINT Detenir_Produit0_FK
	FOREIGN KEY (id)
	REFERENCES Produit(id);

ALTER TABLE Detenir
	ADD CONSTRAINT Detenir_Commande1_FK
	FOREIGN KEY (idCommande)
	REFERENCES Commande(idCommande);

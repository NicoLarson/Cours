DROP TABLE AUTEUR;
DROP TABLE OUVRAGE;
DROP TABLE ECRIRE;
DROP TABLE EXEMPLAIRE;
DROP TABLE ABONNE;
DROP TABLE EMPRUNTER;

CREATE TABLE AUTEUR(
    numauteur integer primary key,
    prenomauteur varchar(32),
    nomauteur varchar(32)
);
CREATE TABLE OUVRAGE(
    numouvrage integer primary key,
    nomouvrage varchar(32)
);
CREATE TABLE ECRIRE(
    numauteur integer, 
    numouvrage integer,
    primary key(numauteur, numouvrage),
    foreign key (numauteur) references AUTEUR (numauteur),
    foreign key (numouvrage) references OUVRAGE (numouvrage)
);
CREATE TABLE EXEMPLAIRE(
    numouvrage integer,
    numexemplaire integer,
    empruntable boolean,
    primary key(numouvrage, numexemplaire),
    foreign key (numouvrage) references OUVRAGE (numouvrage)
);
CREATE TABLE ABONNE(
    numabonne integer primary key,
    prenomabonne varchar(32),
    nomabonne varchar(32),
    daterenouvellement boolean
);
CREATE TABLE EMPRUNTER(
    numabonne integer,
    numouvrage integer,
    numexemplaire integer,
    dateemprunt date,
    dateretour date,
    primary key(numabonne, numouvrage, numexemplaire, dateemprunt),
    foreign key (numabonne) references ABONNE (numabonne),
    foreign key (numouvrage) references OUVRAGE (numouvrage),
    foreign key (numouvrage, numexemplaire) 
        references EXEMPLAIRE (numouvrage, numexemplaire)
);
--------------------------------------------------
CREATE TABLE AUTEUR(
        numauteur integer,
        prenomauteur varchar(32),
        nomauteur varchar(32),
        PRIMARY KEY(numauteur));

CREATE TABLE OUVRAGE(
        numouvrage integer,
        nomouvrage varchar(32),
        PRIMARY KEY(numouvrage));

CREATE TABLE ECRIRE(
        numauteur integer, 
        numouvrage integer,
        PRIMARY KEY(numauteur,numouvrage),
        FOREIGN KEY (numauteur) REFERENCES AUTEUR(numauteur),
        FOREIGN KEY (numouvrage) REFERENCES OUVRAGE(numouvrage));

CREATE TABLE EXEMPLAIRE(
        numouvrage integer,
        numexemplaire integer,
        empruntable boolean,
        PRIMARY KEY(numexemplaire,numouvrage),
        FOREIGN KEY (numouvrage) REFERENCES OUVRAGE(numouvrage));

CREATE TABLE ABONNE(
        numabonne integer,
        prenomabonne varchar(32),
        nomabonne varchar(32),
        daterenouvellement boolean,
        PRIMARY KEY (numabonne));

CREATE TABLE EMPRUNTER(
        numabonne integer,
        numouvrage integer,
        numexemplaire integer,
        dateemprunt date,
        dateretour date,
        PRIMARY KEY (dateemprunt, numabonne,numouvrage,numexemplaire),
        FOREIGN KEY (numabonne) REFERENCES ABONNE(numabonne),
        FOREIGN KEY (numouvrage) REFERENCES OUVRAGE(numouvrage),
        FOREIGN KEY (numexemplaire,numouvrage) REFERENCES EXEMPLAIRE(numexemplaire,numouvrage));

----------------------------------------------------
INSERT INTO AUTEUR VALUES(1, 'JK', 'Rowlings');
INSERT INTO OUVRAGE VALUES(1, 'Harry Potter 1');
INSERT INTO OUVRAGE VALUES(2, 'Harry Potter 2');
INSERT INTO ECRIRE VALUES(1, 1);
INSERT INTO ECRIRE VALUES(1, 2);
INSERT INTO EXEMPLAIRE VALUES(1, 1, 1);
INSERT INTO EXEMPLAIRE VALUES(1, 2, 1);
INSERT INTO EXEMPLAIRE VALUES(1, 3, 0);
INSERT INTO EXEMPLAIRE VALUES(2, 2, 1);
INSERT INTO EXEMPLAIRE VALUES(2, 3, 1);
INSERT INTO EXEMPLAIRE VALUES(2, 4, 0);
INSERT INTO ABONNE VALUES (1, 'Draco', 'Malfoy', now());
INSERT INTO ABONNE VALUES (2, 'Severus', 'Snape', now());
INSERT INTO EMPRUNTER VALUES (1, 1, 3, now(), now());
INSERT INTO EMPRUNTER VALUES (2, 2, 2, now(), now());

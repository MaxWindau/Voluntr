CREATE TABLE Gebruikers (
    id              int(10)         NOT NULL        AUTO_INCREMENT,
    password        char(60)        NOT NULL,
    voornaam        varchar(50)     NOT NULL,
    tussenvoegsel   varchar(15),
    achternaam      varchar(50)     NOT NULL,
    geboortedatum   date            NOT NULL,
    email           varchar(100)    NOT NULL,
    land            varchar(30)     NOT NULL,
    woonplaats      varchar(50)     NOT NULL,
    straatnaam      varchar(50)     NOT NULL,
    huisnummer      smallint        NOT NULL,
    toevoegsel      varchar(20),
    postcode        varchar(10)     NOT NULL,
    PRIMARY KEY (id),
    UNIQUE (email),
    CONSTRAINT checkLand CHECK (land IN ('Nederland', 'Duitsland', 'Belgie'))
);

CREATE TABLE GebruikerTelefoon (
    id              int(10)         NOT NULL,
    telefoonnummer  varchar(20)     NOT NULL,
    PRIMARY KEY (id, telefoonnummer),
    FOREIGN KEY (id) REFERENCES Gebruikers(id) ON UPDATE CASCADE ON DELETE NO ACTION
);

CREATE TABLE Evenementen (
    evenementnaam   varchar(50)     NOT NULL,
	evenementid 	int (10)		NOT NULL	AUTO_INCREMENT,
    locatie         varchar(80)     NOT NULL,
    begindatum      datetime            NOT NULL,
    einddatum       datetime           NOT NULL,
    PRIMARY KEY(evenementid)
);

CREATE TABLE Inschrijving (
    id              int(20)            NOT NULL,
    evenementid		int(10)     NOT NULL,
    type            varchar(20)     NOT NULL,
    PRIMARY KEY(id, evenementid),
    FOREIGN KEY (id) REFERENCES Gebruikers(id) ON UPDATE NO ACTION ON DELETE NO ACTION,
    FOREIGN KEY (evenementid) REFERENCES Evenementen(evenementid) ON UPDATE NO ACTION ON DELETE NO ACTION,
    CONSTRAINT typecheck CHECK (type IN ('Vrijwilliger', 'Organisator'))
);

CREATE TABLE EvenementTaak (
    evenementid   	int(10)     NOT NULL,
    taaknaam        varchar(80)     NOT NULL,
    moment          datetime            NOT NULL,
    aantal          smallint        NOT NULL,
    PRIMARY KEY (evenementid, taaknaam, moment),
    FOREIGN KEY (evenementid) REFERENCES Evenementen(evenementid) ON UPDATE NO ACTION ON DELETE NO ACTION
);

CREATE TABLE GebruikerBeschikbaar (
    id              int(10)         NOT NULL,
    evenementid   	int(10)    		NOT NULL,
    moment          date            NOT NULL,
    PRIMARY KEY (id, moment),
    FOREIGN KEY (evenementid) REFERENCES Evenementen(evenementid) ON UPDATE NO ACTION ON DELETE NO ACTION
);

CREATE TABLE GebruikerTaak (
    id              int(10)         NOT NULL,
    evenementid   int(10)     NOT NULL,
    taaknaam        varchar(80)     NOT NULL,
    moment          datetime            NOT NULL,
    PRIMARY KEY (id, evenementid, moment),
    FOREIGN KEY (evenementid) REFERENCES Evenementen(evenementid) ON UPDATE NO ACTION ON DELETE NO ACTION
);
    

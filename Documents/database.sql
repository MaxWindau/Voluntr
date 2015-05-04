CREATE TABLE Gebruikers (
    id              int(10)             NOT NULL        AUTO_INCREMENT,
	password		char(60)		NOT NULL,
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
	INDEX idxId (id),
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
    locatie         varchar(80)     NOT NULL,
    begindatum      date            NOT NULL,
    einddatum       date            NOT NULL,
    PRIMARY KEY(evenementnaam)
);

CREATE TABLE Inschrijving (
    id              int(20)            NOT NULL,
    evenementnaam   varchar(50)     NOT NULL,
    type            varchar(20)     NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY (id) REFERENCES Gebruikers(id) ON UPDATE NO ACTION ON DELETE NO ACTION,
    FOREIGN KEY (evenementnaam) REFERENCES Evenementen(evenementnaam), ON UPDATE NO ACTION ON DELETE NO ACTION
    CONSTRAINT checkLand CHECK (land IN ('Vrijwilliger', 'Organisator'))
);

CREATE TABLE EvenementTaak (
    evenementnaam   varchar(50)     NOT NULL,
    taaknaam        varchar(80)     NOT NULL,
    moment          date            NOT NULL,
    aantal          smallint        NOT NULL,
    PRIMARY KEY (evenementnaam, taaknaam, moment),
    FOREIGN KEY (evenementnaam) REFERENCES Evenementen(evenementnaam) ON UPDATE NO ACTION ON DELETE NO ACTION
);

CREATE TABLE GebruikerBeschikbaar (
    id              int(10)         NOT NULL,
    evenementnaam   varchar(50)     NOT NULL,
    moment          date            NOT NULL,
    PRIMARY KEY (id, moment),
    FOREIGN KEY (evenementnaam) REFERENCES Evenementen(evenementnaam) ON UPDATE NO ACTION ON DELETE NO ACTION
);

CREATE TABLE GebruikerTaak (
    id              int(10)         NOT NULL,
    evenementnaam   varchar(50)     NOT NULL,
    taaknaam        varchar(80)     NOT NULL,
    moment          date            NOT NULL,
    PRIMARY KEY (id, evenementnaam, moment),
    FOREIGN KEY (evenementnaam) REFERENCES Evenementen(evenementnaam) ON UPDATE NO ACTOIN ON DELETE NO ACTION
);
    
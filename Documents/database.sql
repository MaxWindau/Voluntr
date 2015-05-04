CREATE TABLE Gebruikers (
	id				int 			NOT NULL 		AUTO_INCREMENT,
	voornaam 		varchar(50) 	NOT NULL,
	tussenvoegsel 	varchar(15),
	achternaam		varchar(50) 	NOT NULL,
	geboortedatum	date			NOT NULL,
	email			varchar(100)	NOT NULL,
	land			varchar(30)		NOT NULL,
	woonplaats		varchar(50)		NOT NULL,
	straatnaam		varchar(50)		NOT NULL,
	huisnummer		smallint		NOT NULL,
	toevoegsel		varchar(20),
	postcode		varchar(10)		NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (id) REFERENCES GebruikerTelefoon(id),
	UNIQUE (email),
	CONSTRAINT checkLand CHECK (land IN ('Nederland', 'Duitsland', 'Belgie'))
);

CREATE TABLE GebruikerTelefoon (
	id				int 			NOT NULL,
	telefoonnummer	varchar(20)		NOT NULL,
	PRIMARY KEY (id, telefoonnummer),
	FOREIGN KEY (id) REFERENCES Gebruikers(id),
	CONSTRAINT maxTelNr CHECK (4 > ALL (SELECT COUNT(*) FROM GebruikerTelefoon GROUP BY id))
);

CREATE TABLE Evenementen (
	evenementnaam	varchar(50)		NOT NULL,
	locatie			varchar(80)		NOT NULL,
	begindatum		date			NOT NULL,
	einddatum		date			NOT NULL,
	PRIMARY KEY(evenementnaam)
);

CREATE TABLE Inschrijving (
	id				int				NOT NULL,
	evenementnaam	varchar(50)		NOT NULL,
	type			varchar(20)		NOT NULL,
	PRIMARY KEY(id),
	FOREIGN KEY (id) REFERENCES Gebruikers(id),
	FOREIGN KEY (evenementnaam) REFERENCES Evenementen(evenementnaam),
	CONSTRAINT checkLand CHECK (land IN ('Vrijwilliger', 'Organisator'))
);

CREATE TABLE EvenementTaak (
	evenementnaam	varchar(50)		NOT NULL,
	taaknaam		varchar(80)		NOT NULL,
	moment			date			NOT NULL,
	aantal			smallint		NOT NULL,
	PRIMARY KEY (evenementnaam, taaknaam, moment),
	FOREIGN KEY (evenementnaam) REFERENCES Evenementen(evenementnaam)
);

CREATE TABLE GebruikerBeschikbaar (
	id				int 			NOT NULL,
	evenementnaam	varchar(50)		NOT NULL,
	moment			date			NOT NULL,
	PRIMARY KEY (id, moment),
	FOREIGN KEY (evenementnaam) REFERENCES Evenementen(evenementnaam),
	FOREIGN KEY (id, evenementnaam, moment) REFERENCES EvenementTaak(evenementnaam, taaknaam, moment),
	FOREIGN KEY (id, evenementnaam, moment) REFERENCES GebruikerTaak(evenementnaam, taaknaam, moment)
);

CREATE TABLE GebruikerTaak (
	id				int				NOT NULL,
	evenementnaam	varchar(50)		NOT NULL,
	taaknaam		varchar(80)		NOT NULL,
	moment			date			NOT NULL,
	PRIMARY KEY (id, evenementnaam, moment),
	FOREIGN KEY (evenementnaam) REFERENCES Evenementen(evenementnaam),
	FOREIGN KEY (id, evenementnaam, moment) REFERENCES EvenementTaak(evenementnaam, taaknaam, moment)
);
	
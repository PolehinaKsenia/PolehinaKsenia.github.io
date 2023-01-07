CREATE TABLE Turist_Incognito(
id_turista int(5) NOT NULL AUTO_INCREMENT,
Adress varchar(255) NOT NULL,
PasportNomer varchar(4) NOT NULL,
PasportSeria varchar(6) NOT NULL,
PasKemVydan varchar(255) NOT NULL,
PasKogdaVydan DATE NOT NULL,
PRIMARY KEY (id_turista)
);

CREATE TABLE Turist(
idt int(5) NOT NULL AUTO_INCREMENT,
Familia varchar(255) NOT NULL,
Ima varchar(255) NOT NULL,
Otchestvo varchar(255) NOT NULL,
Strana varchar(255) NOT NULL,
Gorod varchar(255) NOT NULL,
Telefon varchar(11),
PRIMARY KEY (idt)
);

CREATE TABLE Tur(
idtur int(5) NOT NULL AUTO_INCREMENT,
Nazvanie varchar(255) NOT NULL,
Strana varchar(255) NOT NULL,
Marschrut set('Stambul','Antalya','Bodrum','Trabzon','Izmir','Nevschehir','Ankara','Bursa','Eskischerhir','Mugla') NOT NULL,
Stoimost int(255) NOT NULL,
Spravka_Prim varchar(255) NOT NULL,
KolVoDney int(255) NOT NULL,
PRIMARY KEY (idtur)
);

CREATE TABLE SesonTura(
idst int(10) NOT NULL AUTO_INCREMENT,
id_tura int(255) NOT NULL,
id_sesona int(255) NOT NULL,
PRIMARY KEY (idst)
);

CREATE TABLE Seson(
ids int(5) NOT NULL AUTO_INCREMENT,
Data_nachala DATE NOT NULL,
Data_okonchania DATE NOT NULL,
KolVo_mest int(255) NOT NULL,
TheEndSesona bool NOT NULL,
Skidka int(255) NOT NULL,
PRIMARY KEY (ids)
);

CREATE TABLE Putevka(
idp int(10) NOT NULL AUTO_INCREMENT,
id_SesonTura int(255) NOT NULL,
id_Turista int(225) NOT NULL,
DataOtpravlenia DATE NOT NULL,
PRIMARY KEY (idp)
);

CREATE TABLE Oplata(
ido int(5) NOT NULL AUTO_INCREMENT,
id_putevki int(5) NOT NULL,
Data_oplaty DATETIME NOT NULL,
Summa int(5) NOT NULL,
Vozmoznost_oplaty enum('Polnaya','Chast','Kredit') NOT NULL,
PRIMARY KEY (ido)
);

ALTER TABLE Turist ADD CONSTRAINT Turist FOREIGN KEY (idt) REFERENCES Turist_Incognito(id_turista);

ALTER TABLE Putevka ADD CONSTRAINT Putevka FOREIGN KEY (id_Turista) REFERENCES Turist(idt);

ALTER TABLE Oplata ADD CONSTRAINT Oplata FOREIGN KEY (id_putevki) REFERENCES Putevka(idp);

ALTER TABLE Putevka ADD CONSTRAINT Putevka1 FOREIGN KEY (id_SesonTura) REFERENCES SesonTura(idst);

ALTER TABLE SesonTura ADD CONSTRAINT SesonTura1 FOREIGN KEY (id_sesona) REFERENCES Seson(ids);
INSERT INTO Seson (Data_nachala, Data_okonchania, KolVo_mest, TheEndSesona, Skidka)
VALUES 
('2022-01-01', '2022-01-31', 15, True, 10),
('2022-01-01', '2022-01-26', 15, True, 10),
('2022-01-01', '2022-01-26', 20, True, 25),
('2022-01-01', '2022-01-31', 15, True, 10),
('2022-01-01', '2022-01-16', 10, True, 25),
('2022-05-05', '2022-05-15', 15, True, 10),
('2022-10-15', '2022-10-30', 10, True, 10),
('2022-01-05', '2022-01-15', 15, True, 5),
('2022-10-01', '2022-10-14', 10, False, 0),
('2022-01-01', '2022-01-15', 15, True, 15),
('2022-02-15', '2022-02-23', 15, True, 15),
('2022-01-01', '2022-01-08', 30, False, 15),
('2022-07-01', '2022-07-08', 30, False, 0),
('2022-11-01', '2022-11-15', 30, False, 0),
('2022-11-25', '2022-12-06', 15, False, 5);



INSERT INTO Tur (Nazvanie, Strana, Marschrut, Stoimost, Spravka_Prim, KolVoDney)
VALUES 
("Do", "Turce", 'Stambul,Antalya', 30000, "Tur v Turce", "30"),
("Re", "USA", 'Antalya,Bodrum,Trabzon', 35000, "vse vkl", "25"),
("Mi", "Turce", 'Stambul,Antalya,Bodrum', 35000, "Tur v Turce", "25"),
("Fa", "Turce", 'Trabzon,Izmir', 25000, "ne vse vkl", "30"),
("So", "Turce", 'Bodrum,Trabzon', 40000, "Tur v Turce", "15"),
("La", "USA", 'Bodrum,Trabzon', 33999, "Tur v Turce", "15"),
("Si", "Turce", 'Bodrum,Trabzon', 30000, "Tur v Turce", "10"),
("Do", "Turce", 'Bodrum,Trabzon', 33999, "Tur v Turce", "14"),
("Re", "Turce", 'Izmir,Nevschehir', 30000, "Tur v Turce", "14"),
("Mi", "Turce", 'Izmir,Nevschehir', 5000, "Tur v Turce", "7"),
("Fa", "Turce", 'Izmir,Nevschehir,Ankara,Bursa', 50000, "Tur v Turce", "7"),
("So", "Turce", 'Izmir,Nevschehir', 30000, "Tur v Turce", "7"),
("La", "Turce", 'Izmir,Nevschehir', 30000, "ne gory", "7"),
("Go", "Turce", 'Ankara,Bursa,Eskischerhir,Mugla', 50000, "Gory", "14"),
("Go", "Turce", 'Nevschehir,Ankara,Bursa', 33999, "Tur v Turce", "15");




INSERT INTO Turist_Incognito (Adress, PasportNomer,PasportSeria,PasKemVydan,PasKogdaVydan)
VALUES 
("Orel", "0001", "000001", "UMVD", '2001-01-01'),
("Tula", "0021", "000001", "UMVD", '2011-01-01'),
("Orel", "0021", "000201", "UMVD", '2002-02-01'),
("Voronej", "0003", "003001", "UMVD", '2003-02-02'),
("Orel", "0001", "000441", "UMVD", '2004-03-03'),
("Belgorod", "0091", "280001", "UMVD", '2012-03-05'),
("Orel", "953", "011101", "UMVD", '2012-03-01'),
("Moscow", "3578", "987456", "UMVD", '2013-03-25'),
("Voronej", "0001", "123456", "UMVD", '2011-07-16'),
("Tula", "9874", "123456", "UMVD", '2011-07-27'),
("Orel", "9874", "987456", "UMVD", '2014-08-30'),
("Voronej", "1234", "000001", "UMVD", '2004-08-01'),
("Moscow", "1234", "963258", "UMVD", '2004-08-01'),
("Orel", "0931", "000001", "UMVD", '2005-09-01'),
("Voronej", "0111", "000001", "UMVD", '2003-09-07'),
("Tula", "0991", "000001", "UMVD", '2005-06-16'),
("Orel", "0061", "147852", "UMVD", '2005-10-01'),
("Belgorod", "0051", "000001", "UMVD", '2005-10-18'),
("Voronej", "0802", "000001", "UMVD", '2005-11-01'),
("Orel", "0061", "000001", "UMVD", '2003-11-09'),
("Belgorod", "0101", "000001", "UMVD", '2003-11-09'),
("Moscow", "0701", "000001", "UMVD", '2003-12-03'),
("Voronej", "0071", "000001", "UMVD", '2003-01-01'),
("Moscow", "0081", "852654", "UMVD", '2004-02-17'),
("Belgorod", "0081", "000001", "UMVD", '2004-02-01');



INSERT INTO Turist (Familia, Ima, Otchestvo, Strana, Gorod, Telefon)
VALUES 
("Ivanov", "Ivan", "Ivanovich", "Russia", "Orel", NULL),
("Ivanov", "Petr", "Ivanovich", "Russia", "Tula", "99999999999"),
("Petrov", "Ivan", "Petrovich", "Russia", "Orel", "89999999999"),
("Petrov", "Petr", "Petrovich", "Russia", "Voronej", "89898989898"),
("Petrov", "Andrey", "Ivanovich", "Russia", "Orel", "89632574123"),
("Sidorov", "Ivan", "Andreevich", "Russia", "Belgorod", "89632587412"),
("Sidorov", "Ivan", "Ivanovich", "Russia", "Orel", "88888888899"),
("Petrov", "Ivan", "Ivanovich", "Russia", "Moscow", "88888889999"),
("Sidorov", "Ivan", "Petrovich", "Russia", "Voronej", "98745632147"),
("Ivanov", "Ivan", "Andreevich", "Russia", "Tula", "96325874123"),
("Smit", "Ivan", "Petrovich", "Belarussia", "Orel", "32112332112"),
("Smit", "Petr", "Ivanovich", "Russia", "Voronej", "96969696969"),
("Ivanov", "Andrey", "Ivanovich", "Russia", "Moscow", "65656565656"),
("Petrov", "Ivan", "Andreevich", "Russia", "Orel", "74747474747"),
("Smit", "Ivan", "Ivanovich", "Russia", "Voronej", "80321569840"),
("Ivanov", "Andrey", "Ivanovich", "Russia", "Tula", "35795125865"),
("Ivanov", "Ivan", "Ivanovich", "Belarussia", "Orel", "65425885265"),
("Smit", "Ivan", "Petrovich", "Russia", "Belgorod", "65425845625"),
("Sidorov", "Ivan", "Andreevich", "Russia", "Voronej", "12551225112"),
("Ivanov", "Ivan", "Ivanovich", "Russia", "Orel", "86386386386"),
("Ivanov", "Ivan", "Ivanovich", "Russia", "Belgorod", "98798798798"),
("Smit", "Ivan", "Ivanovich", "Russia", "Moscow", "78978978978"),
("Ivanov", "Andrey", "Petrovich", "Russia", "Voronej", "74174174174"),
("Sidorov", "Petr", "Andreevich", "Russia", "Moscow", "32132132165"),
("Smit", "Andrey", "Ivanovich", "Russia", "Belgorod", "85858585858");




INSERT INTO SesonTura (id_tura, id_sesona)
VALUES 
(1,1),
(3,2),
(4,1),
(5,2),
(6,3),
(7,3),
(8,5),
(9,4),
(10,4),
(11,5),
(15,15),
(13,14),
(14,13),
(14,13),
(15,3);




INSERT INTO Putevka (id_SesonTura, id_Turista,DataOtpravlenia)
VALUES 
(1,1,'2001-11-25'),
(15,1,'2001-01-01'),
(1,2,'2001-01-01'),
(2,3,'2001-01-01'),
(3,3,'2001-01-01'),
(4,3,'2001-01-01'),
(5,9,'2001-01-01'),
(4,10,'2001-01-01'),
(5,4,'2001-01-01'),
(6,1,'2001-05-05'),
(7,8,'2001-10-16'),
(8,10,'2001-01-05'),
(8,11,'2001-01-06'),
(9,12,'2001-10-01'),
(10,13,'2001-01-01'),
(11,14,'2001-02-15'),
(12,15,'2001-01-01'),
(13,16,'2001-07-01'),
(14,17,'2001-11-01'),
(15,20,'2001-11-25');




INSERT INTO Oplata (id_putevki, Data_oplaty, Summa, Vozmoznost_oplaty)
VALUES 
(1, '2021-10-25 08:00:00', 30000, 'Polnaya'),
(2, '2021-10-25 09:00:00', 30000, 'Polnaya'),
(3, '2021-10-30 10:00:00', 30000, 'Polnaya'),
(4, '2021-10-25 08:00:00', 30000, 'Chast'),
(5, '2021-9-25 08:00:00', 30000, 'Kredit'),
(6, '2021-11-25 08:15:00', 30000, 'Chast'),
(7, '2021-10-25 08:00:00', 30000, 'Polnaya'),
(8, '2021-12-26 08:00:30', 30000, 'Polnaya'),
(9, '2021-10-25 08:00:00', 30000, 'Kredit'),
(10, '2021-10-27 08:00:00', 30000, 'Polnaya'),
(11, '2021-10-01 08:00:00', 30000, 'Chast'),
(12, '2021-10-25 08:00:00', 30000, 'Kredit'),
(13, '2021-10-25 08:00:00', 30000, 'Kredit'),
(14, '2021-10-25 08:00:00', 30000, 'Chast'),
(15, '2021-10-25 08:00:00', 30000, 'Polnaya'),
(16, '2021-10-25 08:00:00', 30000, 'Kredit'),
(17, '2021-10-25 08:00:00', 30000, 'Chast'),
(18, '2021-10-25 08:00:00', 30000, 'Polnaya'),
(19, '2021-10-25 08:00:00', 50000, 'Polnaya'),
(20, '2021-10-25 08:00:00', 25000, 'Kredit');
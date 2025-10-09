CREATE DATABASE polska;
use polska;

-- kontakt
CREATE TABLE kontakt(
    id int PRIMARY KEY auto_increment,
    imie_nazwisko varchar(999),
    email varchar(999),
    temat varchar(999),
    wiadomosc varchar(999)
);



-- galeria
CREATE TABLE zdjecia(
    id INT PRIMARY KEY auto_increment,
    zdjecie varchar(999),
    nazwa varchar(999),
    opis varchar(999)
);


INSERT INTO zdjecia(zdjecie,nazwa,opis)
VALUES
('zdjecie1.jpeg','Krakow','Historyczna rezydencja krolewska na wzgorzu nad Wisla'),
('zdjecie2.jpeg','Warszawa','Odbudowane po wojnie, wpisane na liste UNESCO'),
('zdjecie3.jpeg','Gdansk','Nadmorska perla z bogata historia handlowa'),
('zdjecie4.jpeg','Tatry','Najwyzsze gory w Polsce z przepieknymi szlakami'),
('zdjecie5.jpeg','Wroclaw','Miasto stu mostow i krasnali'),
('zdjecie6.jpeg','Zakopane','Zimowa stolica Polski u stop Tatr'),
('zdjecie7.jpeg','Mazury','Kraina tysieca jezior idealna na zeglarstwo'),
('zdjecie8.jpeg','Malbork','Najwiekszy ceglany zamek w Europie'),
('zdjecie9.jpeg','Morze Baltyckie','Piaszczyste plaze i nadmorskie kurorty');


-- atrakcje
CREATE TABLE atrakcje(
    ID int PRIMARY KEY auto_increment,
    svg varchar(999),
    nazwa varchar(999),
    opis varchar(999),
    przyklady varchar(999)
);


INSERT INTO atrakcje(svg,nazwa,opis,przyklady)
VALUES
('castle-svgrepo-com.svg','Zamki i Palace','Odwiedz sredniowieczne zamki i barokowe rezydencje','Przyklady: Wawel, Malbork, Ksiaz, Lancut'),
('mountain-svgrepo-com.svg','Gory i Szlaki','Odkryj najpiekniejsze gorskie szlaki turystyczne','Przyklady: Tatry, Karkonosze, Bieszczady, Beskidy'),
('ocean-sea-water-svgrepo-com.svg','Wybrzeze Baltyckie','Relaks na plazach i spacery po nadmorskich kurortach','Przyklady: Sopot, Gdynia, Miedzyzdroje, Leba'),
('city-svgrepo-com.svg','Miasta i Kultura','Poznaj historyczne miasta i wspolczesna kulture','Przyklady: Krakow, Warszawa, Wroclaw, Poznan'),
('tree-frame-svgrepo-com.svg','Parki Narodowe','Przyroda w najczystszej formie – 23 parki narodowe','Przyklady: Bialowieski, Kampinoski, Karkonoski'),
('church-svgrepo-com.svg','Szlaki Dziedzictwa','Trasy tematyczne po miejscach UNESCO i nie tylko','Przyklady: Drewniane koscioly, kopalnie soli, miasta');
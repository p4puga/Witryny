-- skrypt1 form kontakty
INSERT INTO kontakt(imie_nazwisko,email,temat,wiadomosc)
VALUES
('imie_nazwisko','email','temat','wiadomosc');

-- skrypt2 galeria
SELECT id,zdjecie,nazwa,opis FROM zdjecia;


-- skrypt3 atrakcje
SELECT id,svg,nazwa,opis,przyklady FROM atrakcje;


-- kontakt
SELECT * FROM kontakt;
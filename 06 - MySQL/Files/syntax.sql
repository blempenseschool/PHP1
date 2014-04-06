
-- GEGEVENS TOEVOEGEN

-- Vul alle kolommen in
INSERT INTO users 
  VALUES (null,'bert','blempens@eschool.be','paswoord');

-- Vul enkel naam, email en paswoord kolommen in
INSERT INTO users (naam,email,paswoord) 
  VALUES ('bert','blempens@eschool','paswoord');





-- GEGEVENS SELECTEREN - basis

-- Selecteer enkel email en paswoord
SELECT email, paswoord FROM users;

-- Selecteer alle kolommen
SELECT * FROM users;





-- GEGEVENS SELECTEREN - limiteren

-- Selecteer enkel de gegevens van een rij die een id 2 heeft
SELECT * FROM users WHERE id=2;

-- Selecteer alle rijen die een id hoger als 4 hebben
SELECT * FROM users WHERE id>4;

-- Selecteer alle rijen die ofwel een id 2 ofwel een id 4 hebben
SELECT * FROM users WHERE id=2 OR id=4;

-- Selecteer alle rijen die een id tussen 4 en 8 hebben
SELECT * FROM users WHERE id>4 AND id<8;





-- GEGEVENS AANPASSEN

-- Verander de naam en het email adres van een rij die als id 2 heeft
UPDATE users 
  SET naam='toon', email='tgorissen@eschool.be' 
  WHERE id=2;

-- Verander de naam naar Bert van alle rijen die als naam Toon hebben
UPDATE users  
  SET naam='bert'
  WHERE naam='toon';





-- GEGEVENS VERWIJDEREN

-- Verwijder alle gegevens van een rij die als id 3 heeft
DELETE FROM users 
  WHERE id=3;






-- GESELECTEERDE GEGEVENS - sorteren

-- Sorteer de gegevens op naam in oplopende volgorde
SELECT * FROM users ORDER BY naam ASC;

-- Sorteer de gegevens op naam in aflopende volgorde
SELECT * FROM users ORDER BY naam DESC;





-- GESELECTEERDE GEGEVENS - aantal rijen limiteren

-- Selecteer maar 10 rijen van de users tabel
SELECT * FROM users LIMIT 10;

-- Selecteer maar 10 rijen van de users tabel, maar sla er eerst 5 over
SELECT * FROM users LIMIT 5, 10;





-- GEGEVENS SELECTEREN met wildcards en LIKE

-- Alle namen die beginnen met "n"
SELECT * FROM users WHERE naam LIKE 'n%';

-- Alle namen die een "b" bevatten
SELECT * FROM users WHERE naam LIKE '%b%';

-- Alle namen die eindigen op een "n"
SELECT * FROM users WHERE naam LIKE '%n';

-- Alle namen die beginnen met een "j" en maar uit 3 tekens bestaan
SELECT * FROM users WHERE naam LIKE 'j__';

-- Alle namen die beginnen met een "b", "a" of "r"
SELECT * FROM users WHERE naam LIKE '[bar]%';

-- Alle namen die niet beginnen met een "b", "a" of "r"
SELECT * FROM users WHERE naam LIKE '[!bar]%';





-- MYSQL FUNCTIES

-- Tel het aantal gebruikers in de tabel
SELECT COUNT(*) AS totaal FROM users;

-- Selecteer een willekeurige rij uit de tabel
SELECT * FROM users 
  ORDER BY RAND()
  LIMIT 1;





-- JOIN query - Gegevens uit verschillende tabellen combineren en samenvoegen

-- Selecteer alle blogposts, en selecteer de bijhorende naam van de gebruiker die de blogpost gepost heeft
SELECT blogposts.*, users.naam 
  FROM blogposts 
  INNER JOIN users ON blogposts.userID=users.id 
  WHERE blogposts.id=4;
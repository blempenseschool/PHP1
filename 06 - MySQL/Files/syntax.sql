
-- Gegevens toevoegen 

INSERT INTO users 
  VALUES (null,'bert','blempens@eschool.be','paswoord');

INSERT INTO users (naam,email,paswoord) 
  VALUES ('bert','blempens@eschool','paswoord');


-- Gegevens selecteren - basis

SELECT email, paswoord FROM users;

SELECT * FROM users;


-- Gegevens selecteren - limiteren

SELECT * FROM users WHERE id=2;

SELECT * FROM users WHERE id>4;


SELECT * FROM users WHERE id=2 OR id=4;

SELECT * FROM users WHERE id>4 AND id<8;


-- Gegevens aanpassen

UPDATE users 
  SET naam='toon', email='tgorissen@eschool.be' 
  WHERE id=2;

UPDATE users  
  SET naam='bert'
  WHERE naam='toon';


-- Gegevens verwijderen

DELETE FROM users 
  WHERE id=3;

-- Geselecteerde gegevens - sorteren

SELECT * FROM users ORDER BY naam ASC;

SELECT * FROM users ORDER BY naam DESC;

-- Geselecteerde gegevens - aantal rijen limiteren

SELECT * FROM users LIMIT 10;

SELECT * FROM users LIMIT 5, 10;

-- Gegevens selecteren met wildcards en LIKE

SELECT * FROM users WHERE naam LIKE 'n%';

SELECT * FROM users WHERE naam LIKE '%b%';

SELECT * FROM users WHERE naam LIKE '%n';

SELECT * FROM users WHERE naam LIKE 'j__';

SELECT * FROM users WHERE naam LIKE '[bar]%';

SELECT * FROM users WHERE naam LIKE '[!bar]%';

-- MySQL functies

SELECT COUNT(*) AS totaal FROM users;

SELECT * FROM users 
  ORDER BY RAND()
  LIMIT 1;

-- JOIN query

SELECT blogposts.*, users.naam 
  FROM blogposts 
  INNER JOIN users ON blogposts.userID=users.id 
  WHERE blogposts.id=4;
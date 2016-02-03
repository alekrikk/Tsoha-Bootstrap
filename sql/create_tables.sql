CREATE TABLE Kayttaja(
  user_id SERIAL PRIMARY KEY,
  name varchar(100) NOT NULL,
  password varchar(25) NOT NULL
);

CREATE TABLE Prioriteetti(
  pr_id SERIAL PRIMARY KEY,
  kuvaus varchar(200)
);

CREATE TABLE Askare(
  askare_id SERIAL PRIMARY KEY,
  Kayttaja_id INTEGER REFERENCES Kayttaja(user_id),
  Prioriteetti_id INTEGER REFERENCES Prioriteetti(pr_id),
  name varchar(200) NOT NULL 
); 

CREATE TABLE Luokka(
  class_id SERIAL PRIMARY KEY,
  nimi varchar(200)
);

CREATE TABLE AskareLuokka(
  Askare_id INTEGER REFERENCES Askare(askare_id),
  Luokka_id INTEGER REFERENCES Luokka(class_id)
);



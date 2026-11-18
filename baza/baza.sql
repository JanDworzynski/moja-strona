CREATE TABLE wpisy (
  id INT AUTO_INCREMENT PRIMARY KEY,
  imie VARCHAR(50),
  nazwisko VARCHAR(50),
  data TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO wpisy (imie, nazwisko) VALUES ('Jan', 'Dworzyński');

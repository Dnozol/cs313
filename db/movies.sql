--Drop tables to be able to create them
DROP TABLE IF EXISTS
  actor
, movie
, movie_actor
CASCADE;

CREATE TABLE actor (
  actor_id SERIAL PRIMARY KEY
, name VARCHAR(100) NOT NULL
);

CREATE TABLE movie (
  movie_id SERIAL PRIMARY KEY
, title VARCHAR(100) NOT NULL
, year SMALLINT
);

INSERT INTO movie(title, year) VALUES ('Avengers: Endgame', 2019);
INSERT INTO movie(title, year) VALUES 
	('The Wizard of Oz', 1939), 
	('Return of the Jedi', 2002),
	('Harry Potter', 2005),
	('The Return of the King', 2003);

INSERT INTO actor(name) VALUES
	('Orlando Bloom'),
	('Jackie Chan'),
	('Elijah Wood'),
	('Mel Gibson'),
	('Daniel Radcliffe');

UPDATE actor SET name = 'Melvin Gibson' WHERE id=4;

CREATE TABLE movie_actor (
  id SERIAL PRIMARY KEY
, movie_id INT NOT NULL REFERENCES movie(movie_id)
, actor_id INT NOT NULL REFERENCES actor(actor_id)
);

INSERT INTO movie_actor(movie_id, actor_id) VALUES
	(2, 3),
	(3, 5),
	(1, 4),
	(4, 1),
	(4, 2);

SELECT * FROM movie m
JOIN movie_actor ma ON m.id = ma.movie_id
JOIN actor a ON ma.actor_id = a.id
WHERE title = 'The Return of the King';


SELECT a.name, m.title FROM movie m
JOIN movie_actor ma ON m.id = ma.movie_id
JOIN actor a ON ma.actor_id = a.id
WHERE title = 'The Return of the King';
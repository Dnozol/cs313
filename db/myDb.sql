--Drop tables to be able to create them
DROP TABLE IF EXISTS
  team
, trainer
, pokemon
CASCADE;

-- Create tables
CREATE TABLE trainer
( trainer_id 	SERIAL PRIMARY KEY
, trainer_name 	VARCHAR(20) NOT NULL
, password
);

CREATE TABLE pokemon
( pokemon_id 	SERIAL PRIMARY KEY
, pokemon_name  VARCHAR(20)
, type_1 		VARCHAR(8) NOT NULL
, type_2 		VARCHAR(8)
);

CREATE TABLE team
( team_id 	SERIAL PRIMARY KEY
, team_name	VARCHAR(20) NOT NULL
, pokemon_1 VARCHAR(20) REFERENCES pokemon(pokemon_id)
, pokemon_2 VARCHAR(20) REFERENCES pokemon(pokemon_id)
, pokemon_3 VARCHAR(20) REFERENCES pokemon(pokemon_id)
, pokemon_4 VARCHAR(20) REFERENCES pokemon(pokemon_id)
, pokemon_5 VARCHAR(20) REFERENCES pokemon(pokemon_id)
, pokemon_6 VARCHAR(20) REFERENCES pokemon(pokemon_id)
);


INSERT INTO pokemon
( pokemon_name
, type_1
, type_2
)
VALUES
( 'Bulbasaur', 'Grass', 'Poison'),
( 'Ivysaur', 'Grass', 'Poison'),
( 'Venusaur', 'Grass', 'Poison'),
( 'Charmander', 'Fire', NULL),
( 'Charmeleon', 'Fire', NULL),
( 'Charizard', 'Fire', 'Flying'),
( 'Squirtle', 'Water', NULL),
( 'Wartortle', 'Water', NULL),
( 'Blastoise', 'Water', NULL),
( 'Caterpie', 'Bug', NULL),
( 'Metapod', 'Bug', NULL),
( 'Butterfree', 'Bug', 'Flying'),
( 'Weedle', 'Bug', 'Poison'),
( 'Kakuna', 'Bug', 'Poison'),
( 'Beedrill', 'Bug', 'Poison'),
( 'Pidgey', 'Normal', 'Flying'),
( 'Pidgeotto', 'Normal', 'Flying'),
( 'Pidgeot', 'Normal', 'Flying'),
( 'Rattata', 'Normal', NULL),
( 'Raticate', 'Normal', NULL),
( 'Spearow', 'Normal', 'Flying'),
( 'Fearow', 'Normal', 'Flying'),
( 'Ekans', 'Poison', NULL),
( 'Arbok', 'Poison', NULL),
( 'Pikachu', 'Electric', NULL),
( 'Raichu', 'Electirc', NULL);

INSERT INTO team
( team_name
, pokemon_1
, pokemon_2
, pokemon_3
, pokemon_4
, pokemon_5
, pokemon_6
)
VALUES
( 'Example_Team_Name'
, 'Charizard'
, 'Venusaur'
, 'Blastoise'
, 'Rattata'
, 'Butterfree'
, 'Pidgeotto');
--Drop tables to be able to create them
DROP TABLE IF EXISTS
  team
, trainer
, pokemon
, usertable
CASCADE;

-- Create tables
CREATE TABLE trainer
( trainer_id 	SERIAL PRIMARY KEY
, trainer_name 	VARCHAR(20) NOT NULL
, num_battles 	INTEGER
, num_wins 		INTEGER
);

CREATE TABLE pokemon
( pokemon_id 	SERIAL PRIMARY KEY
, pokemon_name  VARCHAR(20)
, type_1 		VARCHAR(8) NOT NULL
, type_2 		VARCHAR(8)
);

CREATE TABLE team
( team_id 	SERIAL PRIMARY KEY
, trainer 	VARCHAR(20) REFERENCES trainer(trainer_name)
, team_name	VARCHAR(20) NOT NULL
, pokemon_1 VARCHAR(20) REFERENCES pokemon(pokemon_name)
, pokemon_2 VARCHAR(20) REFERENCES pokemon(pokemon_name)
, pokemon_3 VARCHAR(20) REFERENCES pokemon(pokemon_name)
, pokemon_4 VARCHAR(20) REFERENCES pokemon(pokemon_name)
, pokemon_5 VARCHAR(20) REFERENCES pokemon(pokemon_name)
, pokemon_6 VARCHAR(20) REFERENCES pokemon(pokemon_name)
);

CREATE TABLE usertable
( user_id 	SERIAL PRIMARY KEY
, user_name VARCHAR(20)
, password 	VARCHAR(100)
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
( 'Charmander', 'Fire'),
( 'Charmeleon', 'Fire'),
( 'Charizard', 'Fire', 'Flying'),
( 'Squirtle', 'Water'),
( 'Wartortle', 'Water'),
( 'Blastoise', 'Water'),
( 'Caterpie', 'Bug'),
( 'Metapod', 'Bug'),
( 'Butterfree', 'Bug', 'Flying'),
( 'Weedle', 'Bug', 'Poison'),
( 'Kakuna', 'Bug', 'Poison'),
( 'Beedrill', 'Bug', 'Poison'),
( 'Pidgey', 'Normal', 'Flying'),
( 'Pidgeotto', 'Normal', 'Flying'),
( 'Pidgeot', 'Normal', 'Flying'),
( 'Rattata', 'Normal'),
( 'Raticate', 'Normal'),
( 'Spearow', 'Normal', 'Flying'),
( 'Fearow', 'Normal', 'Flying'),
( 'Ekans', 'Poison'),
( 'Arbok', 'Poison'),
( 'Pikachu', 'Electric'),
( 'Raichu', 'Electirc');

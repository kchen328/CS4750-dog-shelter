DELIMITER $$
CREATE PROCEDURE getDogsForShelter (IN shelterName VARCHAR(255))
SELECT * 
FROM dog JOIN resides JOIN dog_shelter ON dog.dog_shelter=dog_shelter.name 
WHERE dog_shelter.name=shelterName;
$$
DELIMITER ;

SET @p0='Dogs in DC';
CALL getDogsForShelter(@p0);



DELIMITER $$
CREATE PROCEDURE getPotentialAdopterMatches (IN shelterName VARCHAR(255))
SELECT  potential_adopter.first_name, potential_adopter.last_name, dog.name, potential_adopter.email FROM potential_adopter JOIN interested_in ON potential_adopter.AdopterID = interested_in.AdopterID JOIN dog ON dog.DogID = interested_in.DogID AND dog.dog_shelter=shelterName;

$$
DELIMITER ;

SET @p0='Dogs in DC';
CALL getPotentialAdopterMatches(@p0);



SELECT name, Dog_breed, age FROM dog;


SELECT dog.name, dog.Dog_breed, dog.age FROM dog, 
	(SELECT * 
 FROM potential_adopter NATURAL JOIN potential_adopter_dog_breed 
     	WHERE AdopterID = '39202') AS pd 
WHERE pd.dog_breed = dog.Dog_breed;

SELECT dog.name, dog.color, dog.age FROM dog, 
		(SELECT * 
 FROM potential_adopter NATURAL JOIN   potential_adopter_color 
     		WHERE AdopterID = '39202') AS pd 
WHERE pd.dog_color = dog.color;

SELECT *  FROM dog, 
		(SELECT * FROM potential_adopter NATURAL JOIN 
potential_adopter_dog_Size
     		WHERE AdopterID = '39202') AS pd 
WHERE pd.dog_Size = dog.dog_Size;


SELECT * FROM dog WHERE name=  'Bella';

UPDATE potential_adopter SET max_age =2 WHERE AdopterID = "12345";
UPDATE potential_adopter SET email = "cathy@gmail.com" WHERE AdopterID = "12345";
UPDATE potential_adopter SET age = 21 WHERE AdopterID = "12346";
UPDATE potential_adopter SET Number_of_kids = 1 WHERE AdopterID = "23456";
INSERT INTO potential_adopter VALUES(22222, "Dummy", "Dummy_lastname", "F", 20, "Charlottesville", "dummyl@virginia.edu", "City apartment", 0, 1, "high", 30, 1000, 1, "N/A");
DELETE FROM potential_adopter WHERE AdopterID = "22222";

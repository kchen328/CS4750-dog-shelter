
CREATE TABLE potential_adopter(AdopterID int NOT NULL AUTO_INCREMENT,
                                             PRIMARY KEY (AdopterID), first_name VARCHAR(255),
                                                                                 last_name VARCHAR(255),
                                                                                           gender VARCHAR(255),
                                                                                                  age int CHECK (age >= 18), location VARCHAR(255),
                                                                                                                                      email VARCHAR(255),
                                                                                                                                            living_style VARCHAR(255),
                                                                                                                                                         number_of_kids int, number_of_adults int, activeness_level VARCHAR(255),
                                                                                                                                                                                                                    max_age int, max_price int, hypoallergenic BOOLEAN, additional_information VARCHAR(255));


CREATE TABLE dog_shelter(DogShelterID int NOT NULL AUTO_INCREMENT,
                                          name varchar(255),
                                               location varchar(255),
                                                        email varchar(255),
                                                              phone_number varchar(255),
                                                                           PRIMARY KEY(DogShelterID));


CREATE TABLE dog(DogID int NOT NULL AUTO_INCREMENT,
                           Preferred_environment VARCHAR(255),
                                                 Dog_breed VARCHAR(255),
                                                           dog_size VARCHAR(255),
                                                                    color VARCHAR(255),
                                                                          activeness_level VARCHAR(255),
                                                                                           age int, name VARCHAR(255),
                                                                                                         dog_shelter VARCHAR(255),
                                                                                                                     current_location VARCHAR(255),
                                                                                                                                                            shots_uptodate BOOLEAN, gender VARCHAR(255),
                                                                                                                                                                                           hypoallergenic BOOLEAN, fee int, ok_with_kids BOOLEAN, ok_with_other_pets BOOLEAN, description VARCHAR(255),
                                                                                                                                                                                                                                                                                          PRIMARY KEY(DogID));


CREATE TABLE communicate
  (AdopterID int NOT NULL,
                 DogShelterID int NOT NULL,
                                  PRIMARY KEY(AdopterID, DogShelterID),
   FOREIGN KEY (AdopterID) REFERENCES potential_adopter (AdopterID) ON DELETE CASCADE);


CREATE TABLE interested_in
  (AdopterID int NOT NULL,
                 DogID int NOT NULL,
                           PRIMARY KEY(AdopterID, DogID),
   FOREIGN KEY (DogID) REFERENCES dog (DogID) ON DELETE CASCADE,
   FOREIGN KEY (AdopterID) REFERENCES potential_adopter (AdopterID) ON DELETE CASCADE);


CREATE TABLE resides
  (DogID int NOT NULL,
             DogShelterID int, PRIMARY KEY(DogID),
   FOREIGN KEY (DogID) REFERENCES dog (DogID) ON DELETE CASCADE);


CREATE TABLE potential_adopter_dog_breed
  (AdopterID int NOT NULL,
                 Dog_breed VARCHAR(255),
                           PRIMARY KEY(AdopterID, Dog_Breed),
   FOREIGN KEY (AdopterID) REFERENCES potential_adopter (AdopterID) ON DELETE CASCADE);


CREATE TABLE potential_adopter_color
  (AdopterID int NOT NULL,
                 PRIMARY KEY(AdopterID, dog_color),
                         dog_color VARCHAR(255),
   FOREIGN KEY (AdopterID) REFERENCES potential_adopter (AdopterID) ON DELETE CASCADE);


CREATE TABLE potential_adopter_dog_Size
  (AdopterID int NOT NULL,
                 PRIMARY KEY(AdopterID, dog_size),
                         dog_size VARCHAR(255),
   FOREIGN KEY (AdopterID) REFERENCES potential_adopter (AdopterID) ON DELETE CASCADE);


CREATE TABLE dog_underlying_conditions
  (DogID int NOT NULL,
             underlying_conditions VARCHAR(255),
                                   PRIMARY KEY(DogID, underlying_conditions),
   FOREIGN KEY (DogID) REFERENCES dog (DogID) ON DELETE CASCADE);

/* insert into potential_adopter */
INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)
VALUES("Cathy", "Nguyen", "F", 21, "Charlottesville", "cathysemail@virginia.edu", "City apartment", 0, 1, "low", 20, 10000, 1, "I have a cat at home it would have to get along with");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES("Catherine", "Le", "F", 50, "Ashburn", "dogloveraddress@vt.edu", "Single family home", 3, 2, "any", 100, 5000, 1, "Nope");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES("John", "Doe", "M", 54, "000 Fake Address", "johndoe@gmail.com", "Farmhouse", 2, 2, "high", 10, 200, 0, "Must be ok with other animals");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES("Kelly", "Chen", "F", 20, "123 Main Street", "fakeemail@virginia.edu", "Suburban home", 0, 3, "low", 20, 10000, 0, "None");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES("Cristiano", "Ronaldo", "M", 35, "Los Angeles", "therealcristianoronaldo@gmail.com", "Family home", 4, 2, "high", 25,10000000, 0, "I have a big backyard");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES("Kat", "Kemper", "F", 20, "Charlottesville", "kat@virginia.edu", "City apartment", 0, 2, "low", 5, 500, 0, "None");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES ("Anna", "Brower", "F", 21, "Charlottesville", "annab@gmail.com", "Suburban", 0, 3, "High", 10, 350, 0, "None");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES ("Max", "Smith", "M", 50, "Chicago", "maxwell@gmail.com", "City apartment", 5, 1, "medium", 2, 250, 0, "I have two cats");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES("Renee", "Park", "F", 41, "Lovettsville", "rfpark@yahoo@com", "Single family home", 0, 1, "low", 20, 200, 1, " ");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES("Frank", "Senato", "M", 35, "Charlottesville", "frankieps3@gmail.edu", "City apartment", 2, 1, "low", 10, 100, 1, " ");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES("Quincy", "Ray", "F", 21, "Ashburn", "qaray@neu.edu", "suburban home", 0, 1, "low", 20, 300, 1, "I go to school virtually so I can take care of a dog");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES("Patrick", "Leonard", "M", 21, "Charlottesville", "patrickpj@virginia.edu", "City apartment", 0, 2, "low", 20, 10000, 1, "We have a large dog who gets along well with big dogs");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES("Jason", "Mandoza", "M", 27, "Farmville", "DJasonmandoza@yahoo.com", "shared house", 5, 0, "low", 20, 150, 1, "I have a cat");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES("Tim", "French", "M", 22, "Charlottesville", "tjf8921@virginia.edu", "House", 0,8, "low", 5, 150, 0, " ");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES("Shreyas", "Mehta", "M", 20, "Charlottesville", "shreyascville@virginia.edu", "City apartment", 0, 4, "low", 2, 100, 0, "I have a 3 roommates who have dogs");


INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information)VALUES("Lindsay", "Bowden", "F", 20, "Charlottesville", "lindsyd@virginia.edu", "House", 0, 4, "low", 20, 10000, 1, "I live in a sorority house so she would have to be social");

/* Table 2: dog_shelter */
INSERT INTO dog_shelter(name, location, email, phone_number)
VALUES ("Friends of Dogs No Kill Shelter", "Charlottesville", "FDNKS@gmail.com", "1234555555");


INSERT INTO dog_shelter(name, location, email, phone_number)
VALUES ("Charlottesville Dog Shelter", "Charlottesville", "cvilledogs@gmail.com", "8309298444");


INSERT INTO dog_shelter(name, location, email, phone_number)
VALUES ("Dogs in DC", "Washington D.C.", "dogsindc@gmail.com", "7049390401");


INSERT INTO dog_shelter(name, location, email, phone_number)
VALUES ("Paws for Applause", "Fairfax", "pawsshelter@gmail.com", "8002255989");


INSERT INTO dog_shelter(name, location, email, phone_number)
VALUES ("One Loudoun Dog Shelter", "Ashburn", "OLDS@gmail.com", "5713948395");


INSERT INTO dog_shelter(name, location, email, phone_number)
VALUES ("Blacksburg Dogs", "Blacksburg", "blacksburgdogs@gmail.com", "1123824943");


INSERT INTO dog_shelter(name, location, email, phone_number)
VALUES ("Happy Pups Shelter", "Reston", "happypups@gmail.com", "5612873894");


INSERT INTO dog_shelter(name, location, email, phone_number)
VALUES ("Rich Dogs", "Richmond", "richdogs@gmail.com", "2321892834");


INSERT INTO dog_shelter(name, location, email, phone_number)
VALUES ("Sunny Sands Shelter", "Virginia Beach", "sunnysands@gmail.com", "1374828394");


INSERT INTO dog_shelter(name, location, email, phone_number)
VALUES ("Jim’s Dog Shelter", " Charlottesville", "jim.ryan@gmail.com", "2290384923");



/* Table 3: dog */




INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Apartment", "Pomeranian", "small", "white", "high", 2, "Bella", "Charlottesville Dog Shelter", "Charlottesville", 0, "F", 0, 100, 0, 0, "very high energy");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Japanese Chin", "small", "black and white", "medium", 11, "Panda", "Dogs in DC", "Washington D.C.", 1, "M", 0, 50, 1, 0, "friendly dog looking for a home!");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Labrador", "large", "brown", "high", 9, "Buddy", "Friends of Dogs No Kill Shelter", "Charlottesville", 1, "M", 0, 80, 1, 1, "loves to play fetch");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES(" Farmhouse", "Beagle", "small", "white with brown spots", "high", 1, "Benny", "Dogs in DC", "Washington D.C.", 1, "M", 0, 90, 0,1, " loving beagle looking for a forever home");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("City", "Poodle", "medium", "black", "low", 3, "Princess", "Friends of Dogs No Kill Shelter", "Charlottesville", 0, "F", 1, 200, 1,1, "looking for her castle to stay in!");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Suburban", "Greyhound", "large", "white", "high",2, "Bunny", "Dogs in DC", "Washington D.C", 1, "F", 0, 200, 1,1, "loves kids and loves long walks ");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Suburban", "Chihuahua", "small", "black", "low", 14, "Jim", "Dogs in DC", "Washington D.C.", 1, "M", 0, 250, 1, 1, "very friendly and great with kids!");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("City", "French Bulldog", "small", "grey", "medium", 1, "Frank", "Charlottesville Dog Shelter", "Charlottesville", 0, "M", 0, 150, 1,0, "looking for a loving home!");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Shiba Inu", "medium", "tan and white", "medium", 5, "Toast", "One Loudoun Dog Shelter", "Ashburn", 0, "M", 0, 100, 1, 0, "loves playing fetch!");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Suburban", "Bulldog", "medium", "brown and white", "low", 8, "Bobby", "Rich Dogs", "Richmond", 1, "M", 0, 200, 1, 1, "loves belly rubs!");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Golden Retriever", "large", "yellow", "high", 3, "Goldie", "Happy Pups Shelter", "Reston", 1, "F", 1, 250, 1, 1, "loves to swim!");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Suburban", "Mixed", "medium", "brown", "medium", 7, "Lola", "Sunny Sands Shelter", "Virginia Beach", 1, "F", 0, 50, 1, 1, "need to watch her diet");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "German Shepherd", "large", "black and brown", "high", 6, "Sammie", "Jim’s Dog Shelter", "Charlottesville", 1, "M", 0, 300, 1,1, "looking for a home!");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Bichon Frise", "medium", "white", "low", 2, "Alfie", "Jim’s Dog Shelter", "Charlottesville", 1, "M", 1, 400, 1, 0, "very fluffy!");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Golden Retriever", "large", "yellow", "medium", 7, "Wasabi", "Paws for Applause", "Fairfax", 1, "M", 0, 200, 0, 0, "anxious with kids and other pets");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Apartment", "Shih Tzu", "small", "grey and white", "low", 2, "Lisa", "Blacksburg Dogs", "Blacksburg", 1, "F", 1, 100, 1, 1, "loves eating chicken");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Chow chow", "large", "brown", "medium", 5, "Mia", "One Loudoun Dog Shelter", "Ashburn",1, "F", 0, 300, 1, 1, "very fluffy");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Suburban", "beagle", "medium", "brown and white", "low", 5, "Kayla", "Sunny Sands Shelter", "Virginia Beach", 1, "F", 0, 200, 0, 1, "needs specialized diet");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Cocker Spaniel", "medium", "brown", "medium", 4, "Mickey", "Paws for Applause", "Fairfax", 1, "M", 0, 100, 1, 1, "Minnie’s brother");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Cocker Spaniel", "medium", "brown and white", "medium", 4, "Minnie", "Paws for Applause", "Fairfax", 1, "F", 0, 100, 1, 1, "Mickey’s sister");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Shar Pei", "large", "brown", "low", 12, "Jack", "Blacksburg Dogs", "Blacksburg", 1, "M", 0, 150, 1,1, "a very chill dog");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Samoyed", "large", "white", "medium", 1, "Snow", "Jim’s Dog Shelter", "Charlottesville", 0, "F", 0, 500, 1, 0, "fluffy");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Mixed", "small", "black", "high", 9, "Love", "Happy Pups Shelter", "Reston", 1, "F", 0, 60, 1, 1, "very friendly and playful");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Husky", "large", "black and white", "high", 3, "Fido", "One Loudoun Dog Shelter", "Ashburn", 1, "M", 0, 300, 0, 0, "chases animals around");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Dachshund", "small", "black and brown", "medium", 5, "Sausage", "Sunny Sands Shelter", "Virginia Beach", 1, "F", 0, 250, 1, 1, "will steal treats");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Rottweiler", "large", "black and brown", "high", 3, "Spike", "Happy Pups Shelter", "Reston", 1, "M", 0, 200, 1, 1, "very friendly and looking for a home!");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Rural or suburban", "Lab-Pitt mix", "large", "yellow", "low", 4, "Luke Bryan", "Happy Pups Shelter", "Reston", 0, "F", 1, 150, 1, 1, "Very timid, big softie");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Rural or suburban", "Pitt bull", "large", "brindle", "medium", 1, "Toby", "One Loudoun Dog Shelter", "Ashburn", 0, "M", 0, 100, 1, 1, "Came from hard background, scared of other dogs");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Rural or suburban", "Staffordshire Terrier", "large", "Brown", "medium", 1, "George", "One Loudoun Dog Shelter", "Ashburn", 0, "M", 0, 100, 1, 1, "Needs big backyard");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Rural or suburban", "Lab mix", "medium", "Brown", "medium", 1, "Luna", "Rich Dogs", "Richmond", 0, "F", 0, 100, 1, 1, "Best friends with Beca");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Beagle mix", "medium", "Brown", "medium", 1, "Beca", "Rich Dogs", "Richmond", 0, "F", 0, 100, 1, 1, "Best friends with Luna");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Lab mix", "medium", "Brown", "medium", 1, "Beamer", "Dogs in DC", "Washington D.C.", 0, "M", 0, 100, 1, 1, "Great with kids, dogs, and cats");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Rural", "Shepherd mix", "large", "Brown", "medium", 1, "Boomer", "Charlottesville Dog Shelter", "Charlottesville", 0, "M", 0, 100, 1, 1, "Great with kids, dogs, and cats");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Rural", "German Shepherd", "large", "Brown", "large", 1, "Sage", "Blacksburg Dogs", "Blacksburg",0, "M", 0, 100, 1, 1, "Not good with men");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Rural", "Shepherd mix", "medium", "Brown", "large", 1, "Stella", "Blacksburg Dogs", "Blacksburg", 0, "F", 0, 150, 1, 1, "  ");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Rural", "Hound mix", "medium", "Brown", "medium", 1, "Rose", "Happy Pups Shelter", "Reston", 0, "F", 0, 150, 1, 1, "  ");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Mix", "medium", "Brown", "medium", 1, "Darrell", "Charlottesville Dog Shelter", "Charlottesville", 0, "M", 0, 200, 1, 1, "Great with other dogs! ");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Lab", "medium", "Black", "medium", 1, "Jake", "Charlottesville Dog Shelter", "Charlottesville", 0, "M", 0, 200, 1, 1, "Scared of other dogs ");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Lab", "medium", "Yellow", "medium", 1, "Iris", "Charlottesville Dog Shelter", "Charlottesville", 0, "F", 0, 200, 1, 1, "Great with small dogs");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Lab mix", "medium", "Brown", "medium", 1, "Rettenah", "Sunny Sands Shelter", "Virginia Beach", 0, "F", 0, 300, 1, 1, "Blind");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Lab mix", "medium", "Yellow", "medium", 1, "Buddy", "Rich Dogs", "Richmond", 0, "M", 0, 300, 1, 1, "");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Beagle mix", "medium", "Brown", "medium", 1, "Underdog", "Dogs in DC", "Washington D.C.", 0, "M", 0, 300, 1, 1, "");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Rural", "Doberman", "Large", "Black", "high", 9, "Dino", "Jim’s Dog Shelter", "Charlottesville", 0, "M", 0, 300, 1, 0, "");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Rural", "Lab", "Large", "Black", "high", 4, "Jimmy", "Jim’s Dog Shelter", "Charlottesville", 0, "M", 0, 300, 1, 0, "");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Rural", "Husky mix", "Large", "Black and white", "high", 4, "Maya", "Friends of Dogs No Kill Shelter", "Charlottesville", 0, "F", 0, 300, 1, 0, "");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Terrier mix", "Large", "Brown and black", "medium", 3, "Shadow", "Dogs in DC", "Washington D.C.", 0, "M", 0, 300, 1, 1, "");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Lab", "Large", "Brown", "medium", 2, "Aspen", "Friends of Dogs No Kill Shelter", "Charlottesville", 0, "M", 0, 100, 1, 1, "");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Lab mix", "medium", "yellow", "medium", 6, "Paul", "Jim’s Dog Shelter", "Charlottesville", 0, "M", 0, 100, 1, 1, "");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Shepherd mix", "large", "black and brown", "medium", 6, "Maxim", "Friends of Dogs No Kill Shelter", "Charlottesville", 0, "M", 0, 100, 1, 1, "");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)
VALUES("Any", "Rottweiler-Lab mix", "medium", "black and brown", "medium", 6, "Rosie", "Paws for Applause", "Fairfax", 0, "F", 0, 150, 1, 1, "");

/* Table 4: communicate --communicate(AdopterID, DogShelterID) 
INSERT INTO communicate
VALUES (12345, 343281);


INSERT INTO communicate
VALUES (33333, 343283);


INSERT INTO communicate
VALUES (98760, 877241);


INSERT INTO communicate
VALUES(23456, 343281);


INSERT INTO communicate
VALUES(90877, 343281);


INSERT INTO communicate
VALUES(12346,877241);


INSERT INTO communicate
VALUES(39209, 877241);


INSERT INTO communicate
VALUES(39202, 343281);


INSERT INTO communicate
VALUES(14300, 866491);


INSERT INTO communicate
VALUES(55355, 432464);
*/
/* Table 5: interested_in (AdopterID, DogID)  
INSERT INTO interested_in
VALUES (12345, 1000001);


INSERT INTO interested_in
VALUES (33333, 1382043);


INSERT INTO interested_in
VALUES(98760, 1382043);


INSERT INTO interested_in
VALUES(23456, 1000001);


INSERT INTO interested_in
VALUES(90877, 4444445);


INSERT INTO interested_in
VALUES(12346, 2134525);


INSERT INTO interested_in
VALUES(39209,1382043);


INSERT INTO interested_in
VALUES(39202,3828392);


INSERT INTO interested_in
VALUES(14300,9000281);


INSERT INTO interested_in
VALUES(55355, 2318390);
*/
/* Table 6: Resides(DogID, DogShelterID) 
INSERT INTO resides VALUES(34892345, 259384);
INSERT INTO resides VALUES(23532358,343281);
INSERT INTO resides VALUES(9038523,432464);
INSERT INTO resides VALUES(9028192,877241);
INSERT INTO resides VALUES(9000281, 343281);
INSERT INTO resides VALUES(8937293,746247);
INSERT INTO resides VALUES(8902859,877241);
INSERT INTO resides VALUES(8839482, 259384);
INSERT INTO resides VALUES(8339412,877241);
INSERT INTO resides VALUES(8009012,833192);
INSERT INTO resides VALUES(7867687, 343281);
INSERT INTO resides VALUES(7429842, 545242);
INSERT INTO resides VALUES(6730928, 259384);
INSERT INTO resides VALUES(6673823, 545242);
INSERT INTO resides VALUES(6642242,833192);
INSERT INTO resides VALUES(5637281, 259384);
INSERT INTO resides VALUES(5467281, 343281);
INSERT INTO resides VALUES(4534354, 545242);
INSERT INTO resides VALUES(4482931,746247);
INSERT INTO resides VALUES(4473829, 545242);
INSERT INTO resides VALUES(4444445,343283);
INSERT INTO resides VALUES(4245321,833192);
INSERT INTO resides VALUES(3828392,343283);
INSERT INTO resides VALUES(3726183, 554837);
INSERT INTO resides VALUES(3582930, 545242);
INSERT INTO resides VALUES(3453829,877241);
INSERT INTO resides VALUES(3423101, 554837);
INSERT INTO resides VALUES(3392053, 343281);
INSERT INTO resides VALUES(3335353, 343281);
INSERT INTO resides VALUES(3283753,877241);
INSERT INTO resides VALUES(3243578,833192);
INSERT INTO resides VALUES(2318390,866491);
INSERT INTO resides VALUES(2291201,877241);
INSERT INTO resides VALUES(2210982, 554837);
INSERT INTO resides VALUES(2134525,833192);
INSERT INTO resides VALUES(1938293,866491);
INSERT INTO resides VALUES(1920395,866491);
INSERT INTO resides VALUES(1912118, 259384);
INSERT INTO resides VALUES(1912111,343283);
INSERT INTO resides VALUES(1829321, 259384);
INSERT INTO resides VALUES(1424645,746247);
INSERT INTO resides VALUES(1424644,833192);
INSERT INTO resides VALUES(1382043, 554837);
INSERT INTO resides VALUES(1294028, 343281);
INSERT INTO resides VALUES(1291823, 554837);
INSERT INTO resides VALUES(1239189, 259384);
INSERT INTO resides VALUES(1207648,877241);
INSERT INTO resides VALUES(1010101,877241);
INSERT INTO resides VALUES(1001212, 343281);
*/

/* Table 7: potential_adopter_dog_breed(AdopterID, Dog_breed)
INSERT INTO potential_adopter_dog_breed
VALUES(12345,"any");


INSERT INTO potential_adopter_dog_breed
VALUES(33333, "any");


INSERT INTO potential_adopter_dog_breed
VALUES(98760, "Shepherds");


INSERT INTO potential_adopter_dog_breed
VALUES(23456, "any");


INSERT INTO potential_adopter_dog_breed
VALUES(90877, "any");


INSERT INTO potential_adopter_dog_breed
VALUES(12346, "any");


INSERT INTO potential_adopter_dog_breed
VALUES(39209, "Lab");


INSERT INTO potential_adopter_dog_breed
VALUES(06843, "French bulldog");


INSERT INTO potential_adopter_dog_breed
VALUES(06843, "Dalmatian");


INSERT INTO potential_adopter_dog_breed
VALUES(22356, "Terrier");


INSERT INTO potential_adopter_dog_breed
VALUES(14300, "any");


INSERT INTO potential_adopter_dog_breed
VALUES(77733, "lab");


INSERT INTO potential_adopter_dog_breed
VALUES(77733, "poodle");


INSERT INTO potential_adopter_dog_breed
VALUES(69900, "lab");


INSERT INTO potential_adopter_dog_breed
VALUES(55355, "any");


INSERT INTO potential_adopter_dog_breed
VALUES(22123, "any");


INSERT INTO potential_adopter_dog_breed
VALUES(44543, "any");
*/
/*Table 8: potential_adopter_color(AdopterID, dog_color)
INSERT INTO potential_adopter_color
VALUES(12345, "any");


INSERT INTO potential_adopter_color
VALUES(33333, "any");


INSERT INTO potential_adopter_color
VALUES(98760, "any");


INSERT INTO potential_adopter_color
VALUES(23456, "any");


INSERT INTO potential_adopter_color
VALUES(90877, "any");


INSERT INTO potential_adopter_color
VALUES(12346, "black");


INSERT INTO potential_adopter_color
VALUES(12346, "white");


INSERT INTO potential_adopter_color
VALUES(39209, "brown");


INSERT INTO potential_adopter_color
VALUES(39202, "white");


INSERT INTO potential_adopter_color
VALUES(06843, "any");


INSERT INTO potential_adopter_color
VALUES(22356, "any");


INSERT INTO potential_adopter_color
VALUES(14300, "black");


INSERT INTO potential_adopter_color
VALUES(77733, "any");


INSERT INTO potential_adopter_color
VALUES(69900, "any");


INSERT INTO potential_adopter_color
VALUES(55355, "yellow");


INSERT INTO potential_adopter_color
VALUES(55355, "brown");


INSERT INTO potential_adopter_color
VALUES(22123, "brown");


INSERT INTO potential_adopter_color
VALUES(44543, "white");

/*Table 9: potential_adopter_dog_Size(AdopterID, dog_Size)
INSERT INTO potential_adopter_dog_Size
VALUES(12345, "small");


INSERT INTO potential_adopter_dog_Size
VALUES(12345, "medium");


INSERT INTO potential_adopter_dog_Size
VALUES(33333, "medium");


INSERT INTO potential_adopter_dog_Size
VALUES(33333, "big");


INSERT INTO potential_adopter_dog_Size
VALUES(98760, "large");


INSERT INTO potential_adopter_dog_Size
VALUES(23456, "small");


INSERT INTO potential_adopter_dog_Size
VALUES(12346, "medium");


INSERT INTO potential_adopter_dog_Size
VALUES(39209, "large");


INSERT INTO potential_adopter_dog_Size
VALUES(39202, "small");


INSERT INTO potential_adopter_dog_Size
VALUES(06843, "medium");


INSERT INTO potential_adopter_dog_Size
VALUES(22356, "small");


INSERT INTO potential_adopter_dog_Size
VALUES(22356, "medium");


INSERT INTO potential_adopter_dog_Size
VALUES(77733, "big");


INSERT INTO potential_adopter_dog_Size
VALUES(69900, "medium");


INSERT INTO potential_adopter_dog_Size
VALUES(69900, "small");


INSERT INTO potential_adopter_dog_Size
VALUES(55355, "medium");


INSERT INTO potential_adopter_dog_Size
VALUES(55355, "big");


INSERT INTO potential_adopter_dog_Size
VALUES(22123, "medium");


INSERT INTO potential_adopter_dog_Size
VALUES(22123, "small");


INSERT INTO potential_adopter_dog_Size
VALUES(44543, "small");


INSERT INTO potential_adopter_dog_Size
VALUES(44543, "medium");
*/

/* Table 10: dog_underlying_conditions(DogID, underlying_conditions) 
INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1010101, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1000001, "Knee problem");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1382043, "heart palpitations");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1382043, "Bad hips");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1001212, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(2134525, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(4444445, "Blind");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(3828392, "Missing an eye");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(3828392, "Overweight");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(7429842, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(8009012, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(2291201, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1912118, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(2210982, "Diabetes");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1239189, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1938293, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(3335353, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1294028, "Deaf");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(4482931, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1829321, "Overweight");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1424644, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1424645, "Diabetes");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(8339412, "Blind");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(4245321, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(6642242, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(3392053, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(23532358, "Overweight");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(34892345, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1912111, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(6673823, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(8839482, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(4473829, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(3582930, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(9038523, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1291823, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1207648, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(9028192, "Diabetes");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(3453829, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(3283753, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(5467281, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(6730928, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(3726183, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(4534354, "Blind");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(7867687, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(1920395, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(3243578, "Deaf");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(5637281, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(8937293, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(3423101, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(2318390, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(8902859, "None");


INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description)_underlying_conditions
VALUES(9000281, "None");

*/

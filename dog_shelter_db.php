<?php
// CREATE TABLE friends (
//    name varchar(30) NOT NULL,
//    major varchar(10) NOT NULL,
//    year int NOT NULL,
//    PRIMARY KEY (name) );  

// Prepared statement (or parameterized statement) happens in 2 phases:
//   1. prepare() sends a template to the server, the server analyzes the syntax
//                and initialize the internal structure.
//   2. bind value (if applicable) and execute
//      bindValue() fills in the template (~fill in the blanks.
//                For example, bindValue(':name', $name);
//                the server will locate the missing part signified by a colon
//                (in this example, :name) in the template
//                and replaces it with the actual value from $name.
//                Thus, be sure to match the name; a mismatch is ignored.
//      execute() actually executes the SQL statement


function addDog($preferred_environment, $dog_breed, $dog_size, $color, $activeness_level, $age, $name, $dog_shelter, $current_location, $shots_uptodate, $gender, $hypoallergenic, $fee, $ok_with_kids, $ok_with_other_pets, $description) 
{
        echo "happy dog"
        global $db;
   
/       $query = "INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location,  shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description) VALUES(:preferred_enironment, :dog_breed, :dog_size, :color, :activeness_level, :age, :name, :dog_shelter, :current_location,  :shots_uptodate, :gender, :hypoallergenic, :fee, :ok_with_kids, :ok_with_other_pets, :descrition)";
        $statement = $db->prepare($query);
        $statement->bindValue(':preferred_environment', $preferred_environment);
        $statement->bindValue(':dog_breed', $dog_breed);
        $statement->bindValue(':dog_size', $dog_size);
        $statement->bindValue(':color', $color);
        $statement->bindValue(':activeness_level', $activeness_level);
        $statement->bindValue(':age', $age);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':dog_shelter', $dog_shelter);
        $statement->bindValue(':current_location', $current_location);
        $statement->bindValue(':shots_uptodate', $shots_uptodate);
        $statement->bindValue(':gender', $gender);
        $statement->bindValue(':hypoallergenic', $hypoallergenic);
        $statement->bindValue(':fee', $fee);
        $statement->bindValue(':ok_with_kids', $ok_with_kids);
        $statement->bindValue(':ok_with_other_pets', $ok_with_other_pets);
        $statement->bindValue(':description', $description);
        $statement->execute();
        echo "executed";
        $statement->closeCursor();
}
 
function addPotentialAdopter($first_name, $last_name, $gender, $age, $location, $email, $living_style, $number_of_kids, $number_of_adults, $activeness_level, $max_age, $max_price, $hypoallergenic, $additional_information)
{
 	global $db;
        $query = "INSERT INTO potential_adopter(first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information) VALUES(:first_name, :last_name, :gender, :age, :location, :email, :living_style, :number_of_kids, :number_of_adults, :activeness_level, :max_age, :max_price, :hypoallergenic, :additional_information)";
        $statement = $db->prepare($query);
        $statement->bindValue(':first_name', $first_name);
        $statement->bindValue(':last_name', $last_name);
        $statement->bindValue(':age', $age);
        $statement->bindValue(':location', $location);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':living_style', $living_style);
        $statement->bindValue(':number_of_kids', $number_of_kids);
        $statement->bindValue(':number_of_adults', $number_of_adults);
        $statement->bindValue(':activeness_level', $activeness_level);
        $statement->bindValue(':max_age', $max_age);
        $statement->bindValue(':max_price', $max_price);
        $statement->bindValue(':hypoallergenic', $hypoallergenic);
        $statement->bindValue(':additional_information', $additional_information);
        $statement->execute();
        $statement->closeCursor();

}
?>

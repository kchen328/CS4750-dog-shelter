<?php
require('connectdb.php');
//require('dog_shelter_db.php');
$dog_breeds = getAllDogBreeds();
$dog_colors = getAllDogColors();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
        if (!empty($_POST['action']) && ($_POST['action'] == 'Add'))
        {
             addPotentialAdopter($_POST['username'], $_POST['password'], $_POST['first_name'], $_POST['last_name'], $_POST['gender'], $_POST['age'],
                                 $_POST['location'], $_POST['email'], $_POST['living_style'], $_POST['number_of_kids'],
                                 $_POST['number_of_adults'], $_POST['activeness_level'], $_POST['max_age'],
                                 $_POST['max_price'], $_POST['hypoallergenic'], $_POST['additional_information']);
             $adopter_id = selectAdopterID($_POST['email']);
             if(!empty($_POST['sizes'])){
                foreach($_POST['sizes'] as $size){
                    addSizeForAdopter($adopter_id, $size);
                 }
             }
             if(!empty($_POST['breeds'])){
                foreach($_POST['breeds'] as $breed){
                    addDogBreedForAdopter($adopter_id, $breed);
                 }
             }
             if(!empty($_POST['colors'])){
                foreach($_POST['colors'] as $dog_color){
                    addColorForAdopter($adopter_id, $dog_color);
                 }
             }

        }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="your name">
  <meta name="description" content="include some description about your page">      
  <title>DB interfacing</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="shortcut icon" href="http://www.cs.virginia.edu/~up3f/cs4750/images/db-icon.png" type="image/ico" />  
</head>

<body>
<div class="container">

<h1>Potential Adopter Create Account</h1>

<!-- <form action="formprocessing.php" method="post">  -->
<form name="mainForm" action="potential_adopter_form.php" method="post">
     <div class="form-group">
    Username:
    <input type="text" class="form-control" name="username" required />
  </div>
  <div class="form-group">
    Password:
    <input type="text" class="form-control" name="password" required />
  </div>
  <div class="form-group">
    First name:
    <input type="text" class="form-control" name="first_name" required />
  </div>
  <div class="form-group">
    Last name:
    <input type="text" class="form-control" name="last_name" required />
  </div>

  <div class="form-group">
    Gender:
    <input type="text" class="form-control" name="gender" required />
</div>
  <div class="form-group">
    Age:
    <input type="number" class="form-control" name="age" required max="125" min="18"/>
  </div>
  <div class="form-group">
    Location:
    <input type="text" class="form-control" name="location" required/>
  </div>
<div class="form-group">
    Email:
    <input type="text" class="form-control" name="email" required />
  </div>
  <div class="form-group">
   Living style:
    <input type="text" class="form-control" name="living_style" required />
  </div>
  <div class="form-group">
    Number of kids:
    <input type="number" class="form-control" name="number_of_kids" required max="50" min="0"/>
  </div>
  <div class="form-group">
    Number of adults:
    <input type="number" class="form-control" name="number_of_adults" required max="50" min="0" />
  </div>
   <div class="form-group">
    Activeness level:
    <input type="text" class="form-control" name="activeness_level"    />
  </div>
 <div class="form-group">
   Additional information:
    <input type="text" class="form-control" name="additional_information" required />
  </div>
  <div class="form-group">
    <div> Hypoallergenic:</div>
     <input type="radio" name="hypoallergenic" value="1">
     <label for="1">Yes</label><br>
     <input type="radio" name="hypoallergenic" value="0">
     <label for="0">No</label><br>
   </div>
  <div class="form-group">
       <h3>Dog breed preference</h3>
       <div class="breedSection">
           <input type="checkbox" name=breeds[]  value="any">
           <label for="any">Any</label><br>
           <?php foreach($dog_breeds as $breed): ?>
               <div>
                   <input type="checkbox" name=breeds[]  value="<?php echo $breed['dog_breed'] ?>">
                   <label for="<?php echo $breed['dog_breed'] ?>"><?php echo $breed['dog_breed'] ?></label><br>
               </div>
           <?php endforeach; ?>
       </div>
  </div>
  <div class="form-group">
       <div>Dog color prefernce<div>
       <div class="breedSection">
           <input type="checkbox" name=colors[]  value="any">
           <label for="any">Any</label><br>
           <?php foreach($dog_colors as $color): ?>
               <div>
                   <input type="checkbox" name=colors[]  value="<?php echo $color['color'] ?>">
                   <label for="<?php echo $color['color'] ?>"><?php echo $color['color'] ?></label><br>
               </div>
           <?php endforeach; ?>
       </div>
  </div>
  <div class="form-group">
   Max age of dog:
<input type="number" class="form-control" name="max_age" required max="25" min="0"/>
  </div>
  <div class="form-group">
    Max price of dog:
    <input type="number" class="form-control" name="max price" required max="10000" min="0" />
  </div>
<div class="form-group">
  Size of dog: <br>
  <input type="checkbox" name="sizes[]" value="small">
  <label for="small">Small</label><br>
  <input type="checkbox" name="sizes[]" value="medium">
  <label for="medium">Medium</label><br>
  <input type="checkbox" name="sizes[]" value="large">
  <label for="large">Large</label>
</div>
 <input type="submit" value="Add" name="action" class="btn btn-dark" title="Insert a friend into a friends table" />
</form>

</div>
<!--  <input type="submit" value="Confirm update" name="action" class="btn btn-dark" title="Confirm update a friend" /> -->
<?php
function addPotentialAdopter($username, $password,$first_name, $last_name, $gender, $age, $location, $email, $living_style, $number_of_kids, $number_of_adults, $activeness_level, $max_age, $max_price, $hypoallergenic, $additional_information)
{
        global $db;
        $query = "INSERT INTO potential_adopter(username, password, first_name, last_name, gender, age, location, email, living_style, number_of_kids, number_of_adults, activeness_level, max_age, max_price, hypoallergenic, additional_information) VALUES(:username, :password, :first_name, :last_name, :gender, :age, :location, :email, :living_style, :number_of_kids, :number_of_adults, :activeness_level, :max_age, :max_price, :hypoallergenic, :additional_information)";
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->bindValue(':first_name', $first_name);
        $statement->bindValue(':last_name', $last_name);
        $statement->bindValue(':age', $age);
        $statement->bindValue(':location', $location);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':gender', $gender);
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

function selectAdopterID($email){
      global $db;
      $query = "SELECT AdopterID FROM potential_adopter WHERE email=:email;";

      $statement = $db->prepare($query);
      $statement->bindValue(':email', $email);
      $statement->execute();
      $results = $statement->fetch();
      $statement->closeCursor();
      return $results[0];
}

function addSizeForAdopter($adopter_id, $size){
     global $db;
     $query = "INSERT INTO potential_adopter_dog_size(AdopterID, dog_size) VALUES(:adopter_id, :size);";

     $statement = $db->prepare($query);
     $statement->bindValue(':adopter_id', $adopter_id);
     $statement->bindValue(':size', $size);
     $statement->execute();
     $statement->closeCursor();
}


function addDogBreedForAdopter($adopter_id, $breed){
     global $db;
     $query = "INSERT INTO potential_adopter_dog_breed(AdopterID, dog_breed) VALUES(:adopter_id, :breed);";

     $statement = $db->prepare($query);
     $statement->bindValue(':adopter_id', $adopter_id);
     $statement->bindValue(':breed', $breed);
     $statement->execute();
     $statement->closeCursor();
}


function addColorForAdopter($adopter_id, $dog_color){
     global $db;
     $query = "INSERT INTO potential_adopter_dog_color(AdopterID, dog_color) VALUES(:adopter_id, :dog_color);";

     $statement = $db->prepare($query);
     $statement->bindValue(':adopter_id', $adopter_id);
     $statement->bindValue(':dog_color', $dog_color);
     $statement->execute();
     $statement->closeCursor();
}

function getAllDogBreeds(){
        global $db;
        $query= "SELECT DISTINCT(dog_breed) FROM dog ORDER BY dog_breed DESC;";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
}
function getAllDogColors(){
        global $db;
        $query= "SELECT DISTINCT(color) FROM dog ORDER BY color DESC;";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
}
?>


</form>


</div>
</body>
</html>


                         

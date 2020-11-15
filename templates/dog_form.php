<?php
require('connectdb.php');
// require('dog_shelter_db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
        if (!empty($_POST['action']) && ($_POST['action'] == 'Add'))
	{
		addDog($_POST['preferred_environment'], $_POST['dog_breed'], $_POST['dog_size'], 
                       $_POST['color'], $_POST['activeness_level'], $_POST['age'],
                       $_POST['name'], $_POST['dog_shelter'], $_POST['current_location'],
                       $_POST['shots_uptodate'], $_POST['gender'], $_POST['hypoallergenic'],
                       $_POST['fee'], $_POST['ok_with_kids'], $_POST['ok_with_other_pets'],
                       $_POST['description']); 
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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="shortcut icon" href="http://www.cs.virginia.edu/~up3f/cs4750/images/db-icon.png" type="image/ico" />  
</head>

<body>
<div class="container">

<h1>Add a Dog</h1>

<form name="mainForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
  <div class="form-group">
    Name:
    <input type="text" class="form-control" name="name"   />        
  </div>  
  <div class="form-group">
    Breed:
    <input type="text" class="form-control" name="dog_breed"   /> 
  </div>  
  <div class="form-group">
    Size:
    <input type="text" class="form-control" name="dog_size"   />        
  </div> 
  <div class="form-group">
    Color:
    <input type="text" class="form-control" name="color"   />
  </div>
  <div class="form-group">
    Age:
    <input type="number" class="form-control" name="age"   max="25" min="0" />
  </div>
<div class="form-group">
    Gender:
    <input type="text" class="form-control" name="gender"   />
  </div>
  <div class="form-group">
    Dog shelter:
    <input type="text" class="form-control" name="dog_shelter"   />
  </div>
  <div class="form-group">
    Current location:
    <input type="text" class="form-control" name="current_location"   />
  </div>
  <div class="form-group">
    Activeness level:
    <input type="text" class="form-control" name="activeness_level"    />
  </div>
  <div class="form-group">
    Shots up to date:
    <input type="number" class="form-control" name="shots_uptodate"   max="1" min="0" />
  </div>
<div class="form-group">
   Hypoallergenic:
    <input type="number" class="form-control" name="hypoallergenic"     max="1" min="0"/>
  </div>
  <div class="form-group">
    Preferred environment:
    <input type="text" class="form-control" name="preferred_environment"   />
  </div>
  <div class="form-group">
    Fee:
    <input type="number" class="form-control" name="fee"   max="10000" min="0" />
  </div>
   <div class="form-group">
   OK with kids:
    <input type="number" class="form-control" name="ok_with_kids"   max="1" min="0"/>
  </div>
  <div class="form-group">
   OK with other pets:
    <input type="number" class="form-control" name="ok_with_other_pets"     max="1" min="0"/>
  </div>
  <div class="form-group">
   Description
    <input type="text" class="form-control" name="description"   />
  </div>
     
 <input type="submit" value="Add" name="action" class="btn btn-dark" title="Insert a friend into a friends table" /> 
  
</form>  

  
</div>    
<?php
function addDog($preferred_environment, $dog_breed, $dog_size, $color, $activeness_level, $age, $name, $dog_shelter, $current_location, $shots_uptodate, $gender, $hypoallergenic, $fee, $ok_with_kids, $ok_with_other_pets, $description) 
{
        global $db;
        $query = "INSERT INTO dog(preferred_environment, dog_breed,   dog_size  ,   color  ,   activeness_level  ,   age  ,   name  ,   dog_shelter  ,   current_location  ,    shots_uptodate  ,   gender  ,   hypoallergenic  ,   fee  ,   ok_with_kids  ,   ok_with_other_pets  ,   description  ) VALUES(:preferred_environment, :dog_breed, :dog_size, :color, :activeness_level, :age, :name, :dog_shelter, :current_location,  :shots_uptodate, :gender, :hypoallergenic, :fee, :ok_with_kids, :ok_with_other_pets, :description)";
        $statement = $db->prepare($query);
        $statement->bindParam(':preferred_environment', $preferred_environment);
        $statement->bindValue(':dog_breed', $dog_breed);
        $statement->bindValue(':dog_size', $dog_size);
        $statement->bindValue(':color', $color);
        $statement->bindValue(':activeness_level', $activeness_level);
        $statement->bindValue(':age', $age);
        $statement->bindParam(':name', $name);
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
        $statement->closeCursor();
}

?>
</body>
</html>
  


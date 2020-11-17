<?php
require('connectdb.php');
session_start();
if (!isset($_SESSION['loggedin'])) {
  header('Location: http://www.localhost/CS4750-dog-shelter/templates/login.php');
  exit;
} 
// require('dog_shelter_db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
        if (isset($_POST['action']))
	{
		addDog($_POST['preferred_environment'], $_POST['dog_breed'], $_POST['size'], 
                       $_POST['color'], $_POST['activeness_level'], $_POST['age'],
                       $_POST['name'], $_POST['dog_shelter'], $_POST['current_location'],
                       $_POST['shots_uptodate'], $_POST['gender'], $_POST['hypoallergenic'],
                       $_POST['fee'], $_POST['ok_with_kids'], $_POST['ok_with_other_pets'],
                       $_POST['description']); 
                $dog_id = selectDogID($_POST['name'], $_POST['dog_shelter']);
                if(!empty($_POST['health_conditions'])){
                    foreach($_POST['health_conditions'] as $health_cond){
                  
                        addUnderlyingCondition($dog_id, $health_cond);
                     }
                 }
                 header('Location:http://www.localhost/CS4750-dog-shelter/templates/index2.php');
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
  <title>Add dog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="shortcut icon" href="http://www.cs.virginia.edu/~up3f/cs4750/images/db-icon.png" type="image/ico" />  
  <script type="text/javascript">
        var intTextBox=0;
        //FUNCTION TO ADD TEXT BOX ELEMENT
        function addElement()
        {
            intTextBox = intTextBox + 1;
            var contentID = document.getElementById('content');
            var newTBDiv = document.createElement('div');
            newTBDiv.setAttribute('id','Hosp'+intTextBox);
            newTBDiv.innerHTML = "<input type='text' id='hospital_" + intTextBox + "'    name='health_conditions[]'/> <a class='btn btn-outline-danger btn-sm' href='javascript:removeElement(\"" + intTextBox + "\")'>Remove</a>";
            contentID.appendChild(newTBDiv);
        }
        //FUNCTION TO REMOVE TEXT BOX ELEMENT
        function removeElement(id)
        {

            if(intTextBox != 0)
            { 
                var contentID = document.getElementById('content');
                //alert(contentID);
                contentID.removeChild(document.getElementById('Hosp'+id));
                intTextBox = intTextBox-1;
            }
        }
    </script>
</head>

<body>
<div class="container">

<h1>Add a Dog</h1>

<form name="mainForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    Name:
    <input type="text" class="form-control" name="name"   />        
  </div>  
  <div class="form-group">
    Breed:
    <input type="text" class="form-control" name="dog_breed"   /> 
  </div>  
 <div class="form-group">
  Size: <br>
  <input type="radio" name="size" value="small">
  <label for="small">Small</label><br>
  <input type="radio" name="size" value="medium">
  <label for="medium">Medium</label><br>
  <input type="radio" name="size" value="large">
  <label for="large">Large</label>
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
    <div> Shots up to date:</div>
     <input type="radio" name="shots_uptodate" value="1">
     <label for="1">Yes</label><br>
     <input type="radio" name="shots_uptodate" value="0">
     <label for="0">No</label><br>
   </div>
 <div class="form-group">
    <div> Hypoallergenic:</div>
     <input type="radio" name="hypoallergenic" value="1">
     <label for="1">Yes</label><br>
     <input type="radio" name="hypoallergenic" value="0">
     <label for="0">No</label><br>
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
    <div> OK with kids:</div>
     <input type="radio" name="ok_with_kids" value="1">
     <label for="1">Yes</label><br>
     <input type="radio" name="ok_with_kids" value="0">
     <label for="0">No</label><br>
   </div>

  <div class="form-group">
    <div> OK with other pets:</div>
     <input type="radio" name="ok_with_other_pets" value="1">
     <label for="1">Yes</label><br>
     <input type="radio" name="ok_with_other_pets" value="0">
     <label for="0">No</label><br>
   </div>

  <div class=form-group>
  Health conditions:
<p><a href="javascript:addElement();" ><label type="button" class="btn btn-outline-primary btn-sm">Add condition</label></a></p>
    <div id="content"></div>
  </div>
  <div class="form-group">
   Description
    <input type="text" class="form-control" name="description"   />
  </div>
 <input type="submit" value="Add" name="action" class="btn btn-dark" title="Insert a friend into a friends table" /> 
  
</form>  

  
</div>    
<?php
function addDog($preferred_environment, $dog_breed, $dog_size, $color, $activeness_level, $age, $name, 
                $dog_shelter, $current_location, $shots_uptodate, $gender, $hypoallergenic, $fee, 
                $ok_with_kids, $ok_with_other_pets, $description ) 
{
        global $db;
        
     
$query = "INSERT INTO dog(name,preferred_environment,ok_with_kids,ok_with_other_pets,description,dog_size,color,activeness_level,age,dog_shelter,current_location,shots_uptodate,gender,hypoallergenic,dog_breed,price) 
          VALUES(:name,:preferred_environment,:ok_with_kids,:ok_with_other_pets,:description,:dog_size,:color,:activeness_level,:age,:dog_shelter,:current_location,:shots_uptodate,:gender,:hypoallergenic,:dog_breed,:fee)";
        
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
        $statement->closeCursor();
}

function selectDogID($name, $dog_shelter){
      global $db;
      $query = "SELECT DogID FROM dog WHERE name=:name and dog_shelter=:dog_shelter;";

      $statement = $db->prepare($query);
      $statement->bindValue(':dog_shelter', $dog_shelter);
      $statement->bindValue(':name', $name);
      $statement->execute();
      $results = $statement->fetch();
      $statement->closeCursor();
      return $results[0];
}

function addUnderlyingCondition($dog_id, $underlying_condition){
     global $db;
     $query = "INSERT INTO dog_underlying_conditions(DogID, underlying_conditions) VALUES(:dog_id, :underlying_condition);";
    
     $statement = $db->prepare($query);
     $statement->bindValue(':dog_id', $dog_id);
     $statement->bindValue(':underlying_condition', $underlying_condition);
     $statement->execute();
     $statement->closeCursor();
}


function insertImage($dog_id, $imagepath){
    global $db;
    $query = "INSERT INTO dog(imagepath) VALUES(:imagepath) WHERE DogID=:dog_id";
     $statement = $db->prepare($query);
     $statement->bindValue(':dog_id', $dog_id);
     $statement->bindValue(':imagepath', $imagepath);
     $statement->execute();
     $statement->closeCursor();

}


?>
</body>
</html>
<!-- <?php
// require('connectdb.php');
// // require('dog_shelter_db.php');

// if ($_SERVER['REQUEST_METHOD'] == 'POST')
// {
//         if (isset($_POST['action'] ))
// 	{
// 		addDog($_POST['preferred_environment'], $_POST['dog_breed'], $_POST['size'], 
//                        $_POST['color'], $_POST['activeness_level'], $_POST['age'],
//                        $_POST['name'], $_POST['dog_shelter'], $_POST['current_location'],
//                        $_POST['shots_uptodate'], $_POST['gender'], $_POST['hypoallergenic'],
//                        $_POST['fee'], $_POST['ok_with_kids'], $_POST['ok_with_other_pets'],
//                        $_POST['description']); 
//                 $dog_id = selectDogID($_POST['name'], $_POST['dog_shelter']);
//                 if(!empty($_POST['health_conditions'])){
//                     foreach($_POST['health_conditions'] as $health_cond){
//                         addUnderlyingCondition($dog_id, $health_cond);
//                      }
//                  }
// 	}
// }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="your name">
  <meta name="description" content="include some description about your page">      
  <title>Add dog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="shortcut icon" href="http://www.cs.virginia.edu/~up3f/cs4750/images/db-icon.png" type="image/ico" />  
  <script type="text/javascript">
        var intTextBox=0;
        //FUNCTION TO ADD TEXT BOX ELEMENT
        function addElement()
        {
            intTextBox = intTextBox + 1;
            var contentID = document.getElementById('content');
            var newTBDiv = document.createElement('div');
            newTBDiv.setAttribute('id','Hosp'+intTextBox);
            newTBDiv.innerHTML = "<input type='text' id='hospital_" + intTextBox + "'    name='health_conditions[]'/> <a class='btn btn-outline-danger btn-sm' href='javascript:removeElement(\"" + intTextBox + "\")'>Remove</a>";
            contentID.appendChild(newTBDiv);
        }
        //FUNCTION TO REMOVE TEXT BOX ELEMENT
        function removeElement(id)
        {

            if(intTextBox != 0)
            { 
                var contentID = document.getElementById('content');
                //alert(contentID);
                contentID.removeChild(document.getElementById('Hosp'+id));
                intTextBox = intTextBox-1;
            }
        }
    </script>
</head>

<body>
<div class="container">

<h1>Add a Dog</h1>

<form name="mainForm" action="<?php //$_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    Name:
    <input type="text" class="form-control" name="name"   />        
  </div>  
  <div class="form-group">
    Breed:
    <input type="text" class="form-control" name="dog_breed"   /> 
  </div>  
 <div class="form-group">
  Size: <br>
  <input type="radio" name="size" value="small">
  <label for="small">Small</label><br>
  <input type="radio" name="size" value="medium">
  <label for="medium">Medium</label><br>
  <input type="radio" name="size" value="large">
  <label for="large">Large</label>
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
    <div> Shots up to date:</div>
     <input type="radio" name="shots_uptodate" value="1">
     <label for="1">Yes</label><br>
     <input type="radio" name="shots_uptodate" value="0">
     <label for="0">No</label><br>
   </div>
 <div class="form-group">
    <div> Hypoallergenic:</div>
     <input type="radio" name="hypoallergenic" value="1">
     <label for="1">Yes</label><br>
     <input type="radio" name="hypoallergenic" value="0">
     <label for="0">No</label><br>
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
    <div> OK with kids:</div>
     <input type="radio" name="ok_with_kids" value="1">
     <label for="1">Yes</label><br>
     <input type="radio" name="ok_with_kids" value="0">
     <label for="0">No</label><br>
   </div>

  <div class="form-group">
    <div> OK with other pets:</div>
     <input type="radio" name="ok_with_other_pets" value="1">
     <label for="1">Yes</label><br>
     <input type="radio" name="ok_with_other_pets" value="0">
     <label for="0">No</label><br>
   </div>

  <div class=form-group">
  Health conditions:
<p><a href="javascript:addElement();" ><label type="button" class="btn btn-outline-primary btn-sm">Add condition</label></a></p>
    <div id="content"></div>
  </div>
  <div class="form-group">
   Description
    <input type="text" class="form-control" name="description"   />
  </div>

 <input type="submit" value="Add" name="action" class="btn btn-dark" title="Insert a friend into a friends table" /> 
  
</form>  

  
</div>    
<?php
// function addDog($preferred_environment, $dog_breed, $dog_size, $color, $activeness_level, $age, $name, $dog_shelter, $current_location, $shots_uptodate, $gender, $hypoallergenic, $fee, $ok_with_kids, $ok_with_other_pets, $description ) 
// {
//         global $db;
//         echo($dog_size)
//         $query = "INSERT INTO dog(preferred_environment, dog_breed, dog_size, color, activeness_level, age, name, dog_shelter, current_location, shots_uptodate, gender, hypoallergenic, fee, ok_with_kids, ok_with_other_pets, description) VALUES(:preferred_environment, :dog_breed, :dog_size, :color, :activeness_level, :age, :name, :dog_shelter, :current_location,  :shots_uptodate, :gender, :hypoallergenic, :fee, :ok_with_kids, :ok_with_other_pets, :description)";
//         $statement = $db->prepare($query);
//         $statement->bindParam(':preferred_environment', $preferred_environment);
//         $statement->bindValue(':dog_breed', $dog_breed);
//         $statement->bindValue(':dog_size', $dog_size);
//         $statement->bindValue(':color', $color);
//         $statement->bindValue(':activeness_level', $activeness_level);
//         $statement->bindValue(':age', $age);
//         $statement->bindParam(':name', $name);
//         $statement->bindValue(':dog_shelter', $dog_shelter);
//         $statement->bindValue(':current_location', $current_location);
//         $statement->bindValue(':shots_uptodate', $shots_uptodate);
//         $statement->bindValue(':gender', $gender);
//         $statement->bindValue(':hypoallergenic', $hypoallergenic);
//         $statement->bindValue(':fee', $fee);
//         $statement->bindValue(':ok_with_kids', $ok_with_kids);
//         $statement->bindValue(':ok_with_other_pets', $ok_with_other_pets);
//         $statement->bindValue(':description', $description);
//         $statement->execute();
//         $statement->closeCursor();
// }

// function selectDogID($name, $dog_shelter){
//       global $db;
//       $query = "SELECT DogID FROM dog WHERE name=:name and dog_shelter=:dog_shelter;";

//       $statement = $db->prepare($query);
//       $statement->bindValue(':dog_shelter', $dog_shelter);
//       $statement->bindValue(':name', $name);
//       $statement->execute();
//       $results = $statement->fetch();
//       $statement->closeCursor();
//       return $results[0];
// }

// function addUnderlyingCondition($dog_id, $underlying_condition){
//      global $db;
//      echo $dog_id;
//      $query = "INSERT INTO dog_underlying_conditions(DogID, underlying_condition) VALUES(:dog_id, :underlying_condition);";
//      echo $underlying_condition;
    
//      $statement = $db->prepare($query);
//      $statement->bindValue(':dog_id', $dog_id);
//      $statement->bindValue(':underlying_condition', $underlying_condition);
//      $statement->execute();
//      $statement->closeCursor();
// }


// function insertImage($dog_id, $imagepath){
//     global $db;
//     $query = "INSERT INTO dog(imagepath) VALUES(:imagepath) WHERE DogID=:dog_id";
//      $statement = $db->prepare($query);
//      $statement->bindValue(':dog_id', $dog_id);
//      $statement->bindValue(':imagepath', $imagepath);
//      $statement->execute();
//      $statement->closeCursor();

// }


?>
</body>
</html> -->
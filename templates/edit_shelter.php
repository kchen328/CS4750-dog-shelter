 <?php
require('connectdb.php');
// require('dog_shelter_db.php');

 function setVars() {
        global $db;
//        $id = $_GET['DogID'];
        $query = "SELECT * FROM dog_shelter WHERE DogShelterID=5";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closecursor();
        return $results;
      }


    $id = 3;
    $sqlQuery = setVars();

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
       if (!empty($_POST['action']) && ($_POST['action'] == 'Update'))
	{
		updateShelter($_POST['password'], $_POST['name'], $_POST['location'], $_POST['email'], $_POST['phone_number'], $id); 
                $sqlQuery = setVars();
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

<h1>Edit Shelter Account</h1>
<?php foreach($sqlQuery as $item): ?>
<form name="mainForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
<div class="form-group">
    Password:
    <input type="text" class="form-control" name="password"  required />        
  </div> 
  <div class="form-group">
    Name:
    <input type="text" class="form-control" name="name"  value="<?php echo $item['name']?>"/>        
  </div>  
  <div class="form-group">
    Location:
    <input type="text" class="form-control" name="location"  value="<?php echo $item['location']?>" /> 
  </div>  
  <div class="form-group">
    Phone number:
    <input type="text" class="form-control" name="phone_number"  value="<?php echo $item['phone_number']?>"/>        
  </div> 
  <div class="form-group">
    Email 
    <input type="text" class="form-control" name="email" value="<?php echo $item['email']?>" />
  </div>
     
 <input type="submit" value="Update" name="action" class="btn btn-dark" title="Insert a friend into a friends table" /> 
  
</form>  
<?php endforeach; ?>


  
</div>    
<?php
function updateShelter($password, $name, $location, $email, $phone_number, $shelter_id)
{
        global $db;
        $query = "UPDATE dog_shelter SET password=:password, name=:name, location=:location, email=:email, phone_number=:phone_number WHERE DogShelterID=:shelter_id";
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':location', $location);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':phone_number', $phone_number);
        $statement->bindValue(':shelter_id', $shelter_id);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
}

?>
</body>
</html>
  
 


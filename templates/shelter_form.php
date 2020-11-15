 <?php
require('connectdb.php');
// require('dog_shelter_db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
        if (!empty($_POST['action']) && ($_POST['action'] == 'Add'))
	{
		addShelter($_POST['username'], $_POST['password'], $_POST['name'], $_POST['location'], $_POST['email'], $_POST['phone_number']); 
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

<h1>Create Shelter Account</h1>

<form name="mainForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
   <div class="form-group">
    Username:
    <input type="text" class="form-control" name="username"   />        
  </div> 
<div class="form-group">
    Password:
    <input type="text" class="form-control" name="password"   />        
  </div> 
  <div class="form-group">
    Name:
    <input type="text" class="form-control" name="name"   />        
  </div>  
  <div class="form-group">
    Location:
    <input type="text" class="form-control" name="location"   /> 
  </div>  
  <div class="form-group">
    Phone number:
    <input type="text" class="form-control" name="phone_number"   />        
  </div> 
  <div class="form-group">
    Email 
    <input type="text" class="form-control" name="email"   />
  </div>
     
 <input type="submit" value="Add" name="action" class="btn btn-dark" title="Insert a friend into a friends table" /> 
  
</form>  

  
</div>    
<?php
function addShelter($username, $password, $name, $location, $email, $phone_number)
{
        global $db;
        $query = "INSERT INTO dog_shelter(username, password, name, location, email, phone_number) VALUES(:username, :password, :name, :location, :email, :phone_number)";
        $statement = $db->prepare($query);
        $statement->bindParam(':name', $name);
        $statement->bindValue(':location', $location);
        $statement->bindValue(':email', $email);
        $statement->bindValue(':phone_number', $phone_number);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->execute();
        $statement->closeCursor();
}

?>
</body>
</html>
  
 


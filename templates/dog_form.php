<?php
require('connectdb.php');
require('dog_shelter_db.php');

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

<h1>Friend book</h1>

<!-- <form action="formprocessing.php" method="post">  -->
<form name="mainForm" action="dog_form.php" method="post">
  <div class="form-group">
    Name:
    <input type="text" class="form-control" name="name" required />        
  </div>  
  <div class="form-group">
    Breed:
    <input type="text" class="form-control" name="dog_breed" required /> 
  </div>  
  <div class="form-group">
    Size:
    <input type="text" class="form-control" name="dog_size" required />        
  </div> 
  <div class="form-group">
    Color:
    <input type="text" class="form-control" name="color" required />
  </div>
  <div class="form-group">
    Age:
    <input type="number" class="form-control" name="age" required max="25" min="0" />
  </div>
<div class="form-group">
    Gender:
    <input type="text" class="form-control" name="gender" required />
  </div>
  <div class="form-group">
    Dog shelter:
    <input type="text" class="form-control" name="dog_shelter" required />
  </div>
  <div class="form-group">
    Current location:
    <input type="text" class="form-control" name="current_location" required />
  </div>
  <div class="form-group">
    Activeness level:
    <input type="text" class="form-control" name="activeness_level" required  />
  </div>
  <div class="form-group">
    Shots up to date:
    <input type="number" class="form-control" name="shots_uptodate" required max="1" min="0" />
  </div>
<div class="form-group">
   Hypoallergenic:
    <input type="number" class="form-control" name="hypoallergenic" required required max="1" min="0"/>
  </div>
  <div class="form-group">
    Preferred environment:
    <input type="text" class="form-control" name="preferred_environment" required />
  </div>
  <div class="form-group">
    Fee:
    <input type="number" class="form-control" name="fee" required max="10000" min="0" />
  </div>
   <div class="form-group">
   OK with kids:
    <input type="number" class="form-control" name="ok_with_kids" required max="1" min="0"/>
  </div>
  <div class="form-group">
   OK with other pets:
    <input type="number" class="form-control" name="ok_with_other_pets" required required max="1" min="0"/>
  </div>
  <div class="form-group">
   Description
    <input type="text" class="form-control" name="description" required />
  </div>
     
 <input type="submit" value="Add" name="action" class="btn btn-dark" title="Insert a friend into a friends table" /> 
  
</form>  

  
</div>    
</body>
</html>
  


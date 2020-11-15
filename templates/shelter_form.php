<?php
require('connectdb.php');
require('dog_shelter_db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
        if (!empty($_POST['action']) && ($_POST['action'] == 'Add'))
	{
             addPotentialAdopter($_POST['first_name'], $_POST['last_name'], $_POST['gender'], $_POST['age'], 
                                 $_POST['location'], $_POST['email'], $_POST['living_style'], $_POST['number_of_kids'], 
                                 $_POST['number_of_adults'], $_POST['activeness_level'], $_POST['max_age'], 
                                 $_POST['max_price'], $_POST['hypoallergenic'], $_POST['additional_information']);
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
<form name="mainForm" action="potential_adopter_form.php" method="post">
  <div class="form-group">
    First name:
    <input type="text" class="form-control" name="first_name" required />        
  </div>  
  <div class="form-group">
    Last Name:
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
   Hypoallergenic:
    <input type="number" class="form-control" name="activeness_level" required max="1" min="0"/>
  </div>
  <div class="form-group">
    Max age:
    <input type="number" class="form-control" name="max_age" required max="25" min="0"/>
  </div>
  <div class="form-group">
    Max price:
    <input type="number" class="form-control" name="max price" required max="10000" min="0" />
  </div>
   <div class="form-group">
   Hypoallergenic:
    <input type="number" class="form-control" name="hypoallergenic" required max="1" min="0"/>
  </div>
  <div class="form-group">
   Additional information:
    <input type="text" class="form-control" name="additional_information" required />
  </div>
     
 <input type="submit" value="Add" name="action" class="btn btn-dark" title="Insert a friend into a friends table" /> 
<!--  <input type="submit" value="Confirm update" name="action" class="btn btn-dark" title="Confirm update a friend" /> -->
  
</form>  

  
</div>    
</body>
</html>
  


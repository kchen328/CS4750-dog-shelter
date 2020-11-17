<?php 

include('containers/header.php');
?>
<div role="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
          
          </button>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="http://www.localhost/CS4750-dog-shelter/templates/index3.php">Home</a></li>
          </ul>
         
        </div>
      </div>
    </div>
	
	<div class="container" style="min-height:500px;">
<?php
session_start();
      if (!isset($_SESSION['loggedin'])) {
        header('Location: https://www.localhost/CS4750-dog-shelter/templates/login.php');
        exit;
      }
require('connectdb.php');
//require('dog_shelter_db.php');
$dog_names = getAllDogNames();
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{

        if (isset($_POST['action']))
        {
          
             if(!empty($_POST['dogs'])){
                foreach($_POST['dogs'] as $dog){

                    interestedIn( $_SESSION['id'], $dog);
                 }
             }
             header('Location: https://www.localhost/CS4750-dog-shelter/templates/index3.php');

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
  <!-- <link rel="shortcut icon" href="http://www.cs.virginia.edu/~up3f/cs4750/images/db-icon.png" type="image/ico" />   -->
</head>

<body>
<div class="container">

<h1>Who are you interested in?</h1>

<!-- <form action="formprocessing.php" method="post">  -->
<form name="mainForm" action="interested.php" method="post">
  <div class="form-group">
       <div class="breedSection">
           <?php foreach($dog_names as $dog): ?>
               <div>
                   <input type="checkbox" name=dogs[]  value="<?php echo $dog['DogID'] ?>">
                   <label for="<?php echo $dog['name'] ?>"><?php echo $dog['name'] ?>, <?php echo $dog['dog_shelter'] ?></label><br>
               </div>
           <?php endforeach; ?>
       </div>


</div>
 <input type="submit" value="Submit" name="action" class="btn btn-dark" />
</form>

</div>
<!--  <input type="submit" value="Confirm update" name="action" class="btn btn-dark" title="Confirm update a friend" /> -->
<?php



function getAllDogNames(){
        global $db;
        $query= "SELECT name, dog_shelter, DogID FROM dog ORDER BY name DESC;";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results;
}

function interestedIn($adopter_id, $dog_id){
        global $db;
        $query= "INSERT INTO interested_in VALUES(:adopter_id, :dog_id);";
        $statement = $db->prepare($query);
        $statement->bindValue(':adopter_id', $adopter_id);
        $statement->bindValue(':dog_id', $dog_id);
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


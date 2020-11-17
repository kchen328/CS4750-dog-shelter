<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>The Dog Network</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
  <link rel="stylesheet" type="text/css" href="../css/main.css"> 
</head>
  <body>

    <?php require('connectdb.php'); ?> 

    <?php
      session_start();
      if (!isset($_SESSION['loggedin'])) {
        header('Location: http://www.localhost/CS4750-dog-shelter/templates/login.php');
        exit;
      } 
      $id = $_SESSION['id'];
      // echo($id);
      function setVars() {
        global $db;
//        $id = $_GET['DogID'];
        $query = "SELECT * FROM potential_adopter WHERE AdopterID='" . $_SESSION['id'] . "';"; 
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closecursor();
        return $results;
}
$sqlQuery = setVars();

    ?>
 
    <section>
    <button name="goback" class="login100-form-btn" onclick="window.location.href ='https://www.localhost/CS4750-dog-shelter/templates/index3.php';" >Go Back</button> <br>
      <div class="card">
        
        <h1>Welcome to your Adopter's profile!</h1>
        <hr>
        <?php foreach($sqlQuery as $item): ?>
        <div class="oneline" style="padding-top:15px;"> 
          <span class="title1">First Name:</span> 
          <span class="title2"><?php echo $item['first_name'];?></span>
        </div>
        <div class="oneline"> 
          <span class="title1">Last Name:</span> 
          <span class="title2"><?php echo $item['last_name'];?></span>
        </div>

        <div class="oneline"> 
          <span class="title1">Username: </span> 
          <span class="title2"><?php echo $item['username'];?></span>
        </div>

        <div class="oneline"> 
          <span class="title1">Gender: </span> 
          <span class="title2"><?php echo $item['gender'];?></span>
        </div>

        <div class="oneline"> 
          <span class="title1">Age: </span> 
          <span class="title2"><?php echo $item['age'];?></span>
        </div>

        <div class="oneline"> 
          <span class="title1">Location: </span> 
          <span class="title2"><?php echo $item['location'];?></span>
        </div>

        <div class="oneline"> 
          <span class="title1">Email:</span> 
          <span class="title2"><?php echo $item['email'];?></span>
        </div>

        <div class="oneline"> 
          <span class="title1">Desired Activeness Level:</span> 
          <span class="title2"><?php echo $item['activeness_level'];?></span>
        </div>

        <div class="oneline"> 
          <span class="title1">Living Style: </span> 
          <span class="title2"><?php echo $item['living_style'];?></span>
        </div>
        <div class="oneline"> 
          <span class="title1">Number of kids in your household: </span> 
          <span class="title2"><?php echo $item['number_of_kids'];?></span>
        </div>
        <div class="oneline"> 
          <span class="title1">Number of adults: </span> 
          <span class="title2"><?php echo $item['number_of_adults'];?></span>
        </div>
        <div class="oneline"> 
          <span class="title1">Number of Activeness Level: </span> 
          <span class="title2"><?php echo $item['activeness_level'];?></span>
        </div>
        <div class="oneline"> 
          <span class="title1">Max Age: </span> 
          <span class="title2"><?php echo $item['max_age'];?></span>
        </div>
        <div class="oneline"> 
          <span class="title1">Max Price: </span> 
          <span class="title2"><?php echo $item['max_price'];?></span>
        </div>
        <div class="oneline"> 
          <span class="title1">Hypoallergenic: </span> 
          <span class="title2"><?php echo $item['hypoallergenic'];?></span>
        </div>
        <div class="oneline"> 
          <span class="title1">Additional Information: </span> 
          <span class="title2"><?php echo $item['additional_information'];?></span>
        </div>
        <button  class="login100-form-btn" onclick="window.location.href = 'http://www.localhost/CS4750-dog-shelter/templates/edit_adopter.php';">Edit Info</button> <br>
        <p>-or-</p>
        <form method="post"> 
        <button name="deletebutton" style="color:red" class="login100-form-btn" >Delete Account</button> <br>
        </form>
        <?php endforeach; ?>
      </div>
    </section>

  </body>
  <script>
  function redirect_potent(){ //for potential adopter
    window.location.href = 'http://www.localhost/CS4750-dog-shelter/templates/index.php';
  }
</script>
  <?php 
  if(isset($_POST['deletebutton'])){
    $id = $_SESSION['id'];
    global $db;
	
	$query = "DELETE FROM potential_adopter WHERE AdopterID=:id";
	$statement = $db->prepare($query);
	$statement->bindValue(':id', $id);
	$statement->execute();
  $statement->closeCursor();
  session_destroy();
  echo '<script>',
  'redirect_potent();',
  '</script>';
  } 
  ?>
  <style>
       
      .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 550px;
        margin: auto;
        text-align: center;
        margin-top:5%;
        background: -webkit-linear-gradient(top, #7579ff, #b224ef);
        background: -o-linear-gradient(top, #7579ff, #b224ef);
        background: -moz-linear-gradient(top, #7579ff, #b224ef);
        background: linear-gradient(top, #7579ff, #b224ef);
      }

      .title1 {
        color: #0B3F72;
        font-size: 20px;
        font-weight: 600;
        color: white;
      }

      .title2 {
        color: #259DDD;
        font-size: 20px;
        color: white;
      }

      .oneline{
        display:inline;
        padding: 5px;
      }

      button {
        padding: 4px;     
        text-align: center;
        cursor: pointer;
        width: 60%;
        font-size: 18px;
        margin:auto;
        border-radius:5px;
        color: white;
      }
      h1{
        
        padding:7px;
        color: white;
      }

      hr {
        padding:0px;
        color: #0B3F72; 
        margin:0px;
        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
      }
      }
    </style>
</html>
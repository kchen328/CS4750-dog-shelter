<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Dog_Who</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
  <link rel="stylesheet" type="text/css" href="../css/main.css"> 
  <link rel="stylesheet" href="../css/style.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/css/bootstrap-slider.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.0/bootstrap-slider.min.js"></script>
<script src="js/search.js"></script>

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
        $query = "SELECT * FROM dog_shelter WHERE DogShelterID='" . $_SESSION['id'] . "';"; 
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closecursor();
        return $results;
}
$sqlQuery = setVars();
    ?>
    <section>
      <div class="card">
        <h1>Welcome to your dog shelter's profile!</h1>
        <hr>
        <?php foreach($sqlQuery as $items): ?>
        <div class="oneline" style="padding-top:15px;"> 
          <span class="title1">Name:</span> 
          <span class="title2"><?php echo $items['name'];?></span>
        </div>
        <div class="oneline"> 
          <span class="title1">Username: </span> 
          <span class="title2"><?php echo $items['username'];?></span>
        </div>

        <div class="oneline"> 
          <span class="title1">Location: </span> 
          <span class="title2"><?php echo $items['location'];?></span>
        </div>

        <div class="oneline"> 
          <span class="title1">Email:</span> 
          <span class="title2"><?php echo $items['email'];?></span>
        </div>

        <div class="oneline" style="padding-bottom:15px;"> 
          <span class="title1">Phone Number:</span> 
          <span class="title2"><?php echo $items['phone_number'];?></span>
        </div>
        <?php endforeach; ?>
        <!-- get all the dogs and be able to edit or delete them -->

        <button  class="login100-form-btn" style="border:2px solid black;" onclick="window.location.href = 'http://www.localhost/CS4750-dog-shelter/templates/edit_shelter.php';">Edit Info</button> <br>
    
        </div>
        <div class="card">
            <?php
$results = give_all_dogs();
    function give_all_dogs(){
        global $db;
        $query = "SELECT DISTINCT dog.name, dog.DogID FROM dog JOIN resides JOIN dog_shelter ON dog.dog_shelter=dog_shelter.name WHERE dog_shelter.name='" . $_SESSION['name'] . "';";  
        $statement = $db ->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results; 
    }
?>
<br>

<h1>Your Dogs</h1>
        <hr>
            <?php foreach($results as $item): ?>
            
        <br>
        <p><?php echo $item['name']; ?><p>
        <!-- <button class="login100-form-btn" style="width:30%;border:2px solid black;" onclick="window.location.href = 'http://www.localhost/CS4750-dog-shelter/templates/edit_dog.php';">Edit <?php //echo $item['name']; ?>'s Info</button> <br> -->
        <a style="width:30%;margin-left:35%;border:2px solid black;" class="login100-form-btn" href="http://www.localhost/CS4750-dog-shelter/templates/edit_dog.php?id=<?php echo($item['DogID'])?>">edit </a>
            <form method= "POST" action="<?php $_SERVER['PHP_SELF'] ?>" >
        <a href="delete.php?id=<?php echo($item['DogID'])?>" style="width:30%;margin-left:35%;border:2px solid black;" class=" button login100-form-btn" onclick="return confirm('Are you sure you want to completely remove this dog?');">Delete <?php echo $item['name']; ?></a>
    </form>
        <?php endforeach; ?>
        <br>
</div>
    </section>

  </body>

</html>
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
        color: #0B3F72; 
        padding:0px;
        margin:0px;
        border: 0;
        height: 1px;
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
      }
      }
    </style>
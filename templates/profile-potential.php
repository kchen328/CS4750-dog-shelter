<?php include('containers/header.php'); ?>
  <title>Dog_Who</title>
  <link rel="stylesheet" type="text/css" href="../css/main.css"> 
  <link rel="stylesheet" href="../css/style.css">
</head>
  <body>

    <?php require('connectdb.php'); ?> 

    <?php
      session_start();
      if (!isset($_SESSION['loggedin'])) {
        header('Location: http://www.localhost/CS4750-dog-shelter/templates/login-potential.php');
        exit;
      } 
      include('containers/container3.php');
    ?>
 
    <section>
      <div class="card">
        <h1>Welcome to your Adopter's profile!</h1>
        <hr>

        <div class="oneline" style="padding-top:15px;"> 
          <span class="title1">First Name:</span> 
          <span class="title2"><?php echo $_SESSION['first_name'];?></span>
        </div>
        <br>
        <div class="oneline"> 
          <span class="title1">Last Name:</span> 
          <span class="title2"><?php echo $_SESSION['last_name'];?></span>
        </div>
        <br>
        <div class="oneline"> 
          <span class="title1">Username: </span> 
          <span class="title2"><?php echo $_SESSION['username'];?></span>
        </div>
        <br>
        <div class="oneline"> 
          <span class="title1">Gender: </span> 
          <span class="title2"><?php echo $_SESSION['gender'];?></span>
        </div>
        <br>
        <div class="oneline"> 
          <span class="title1">Age: </span> 
          <span class="title2"><?php echo $_SESSION['age'];?></span>
        </div>
        <br>
        <div class="oneline"> 
          <span class="title1">Location: </span> 
          <span class="title2"><?php echo $_SESSION['location'];?></span>
        </div>
        <br>
        <div class="oneline"> 
          <span class="title1">Email:</span> 
          <span class="title2"><?php echo $_SESSION['email'];?></span>
        </div>
        <br>
        <div class="oneline"> 
          <span class="title1">Desired Activeness Level:</span> 
          <span class="title2"><?php echo $_SESSION['activeness_level'];?></span>
        </div>
        <br>
        <div class="oneline"> 
          <span class="title1">Living Style: </span> 
          <span class="title2"><?php echo $_SESSION['living_style'];?></span>
        </div>
        <br>
        <div class="oneline"> 
          <span class="title1">Number of kids in your household: </span> 
          <span class="title2"><?php echo $_SESSION['number_of_kids'];?></span>
        </div>
        <br>
        <div class="oneline"> 
          <span class="title1">Number of adults: </span> 
          <span class="title2"><?php echo $_SESSION['number_of_adults'];?></span>
        </div>
        <button  class="login100-form-btn" onclick="window.location.href = 'http://localhost/CS4750-dog-shelter/templates/potential_adopter_form.php';"><h4>Edit Info</h4></button> <br>
        <p>-or-</p>
        <form method="post"> 
        <button name="deletebutton" style="color:red" class="login100-form-btn" ><h4>Delete Account<h4></button> <br>
        </form>
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
  <?php include('containers/footer.php'); ?>
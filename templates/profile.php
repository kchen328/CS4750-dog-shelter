<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Dog_Who</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
  <link rel="stylesheet" type="text/css" href="../css/main.css"> 
  <link rel="stylesheet" href="../css/style.css">
  
</head>
  <body>

    <?php require('connectdb.php'); ?> 

    
    <?php
      session_start();
      if (!isset($_SESSION['loggedin'])) {
        header('Location: http://localhost/CS4750-dog-shelter/templates/login.php');
        exit;
      } 
    ?>
    <section>
      <div class="card">
        <h1>Welcome to your dog shelter's profile!</h1>
        <hr>

        <div class="oneline" style="padding-top:15px;"> 
          <span class="title1">Name:</span> 
          <span class="title2"><?php echo $_SESSION['name'];?></span>
        </div>

        <div class="oneline"> 
          <span class="title1">Location: </span> 
          <span class="title2"><?php echo $_SESSION['location'];?></span>
        </div>

        <div class="oneline"> 
          <span class="title1">Email:</span> 
          <span class="title2"><?php echo $_SESSION['email'];?></span>
        </div>

        <div class="oneline" style="padding-bottom:15px;"> 
          <span class="title1">Phone Number:</span> 
          <span class="title2"><?php echo $_SESSION['phone_number'];?></span>
        </div>

        <button  class="login100-form-btn" onclick="window.location.href = 'http://localhost/CS4750-dog-shelter/templates/shelter-form.php';">Edit Info</button> <br>
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
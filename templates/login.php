<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dog_Who</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/main.css">  
  

<!-- must connect to the DB -->
<?php require('connectdb.php'); ?> 

</head>

<body>
  
    <div class="container-login100" >
      <div class="wrap-login100">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
          <span class="login100-form-title">
            Login
          </span>
          <br>
           <p> Are you a potential adopter or dog shelter?</p>
          <div style="color:white;padding:10px;">

  <label style="padding:10px;"><input type="radio" id="potential_adopter" name="potential_adopter" value="potential_adopter" > Potential Adopter</label>
  <label><input type="radio" id="dog_shelter" name="dog_shelter" value="dog_shelter" > Dog Shelter</label>
          </div>
          <br>
          <br>
          <div class="wrap-input100 ">
            <label>Username: </label>
            <input class="input100" type="text" name="username">
            <span class="focus-input100" ></span>
          </div>
          <span class="msg1"><strong><?php validate_username();?></strong></span>
          <div class="wrap-input100">
            <label>Password: </label>
            <input class="input100" type="password" name="pwd">
            <span class="focus-input100"> </span>
          </div>
          <span class="msg1"><strong><?php validate_pwd();?></strong></span>
          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit" name="Submit" value="submit">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>

</body>
</html>
<?php
    // error message for username
    function validate_username(){
      global $db;
      if( isset($_POST['username']) && (strlen($_POST['username']) == 0) ){ 
        echo "Please enter your username!";
      }
      elseif( isset($_POST['username']) && (strlen($_POST['username']) != 0) ){
        $username = trim($_POST['username']);
        if($query = $db->prepare('SELECT DogShelterid, password FROM dog_shelter WHERE username = :username')){
          $query->bindValue(':username', $username);
          $query->execute();
          $user = $query->fetchAll();
          if(count($user) > 0){
            // user found
          }
          else{
            echo "username doesn't match our records! <br />";
          }
        }
      }
    }

    function validate_pwd(){
      global $db; //database
      if(isset($_POST['username']) && (strlen($_POST['username']) == 0) ){ 
        echo "Please enter your password!";
      }

      elseif(isset($_POST['username'])){
        $username = trim($_POST['username']);
        $pwd = trim($_POST['pwd']);
      
        if( (isset($_POST['username'])) && ($query = $db->prepare('SELECT * FROM dog_shelter WHERE username = :username')) ){
          $query->bindValue(':username', $username);
          $query->execute();

          $results = $query->fetch();
          $password_hashed = $results[2];

          // account exists, now we verify the password
          if(password_verify($pwd, $password_hashed)){
            // password matches
          }
          else{
            echo "Password doesn't match our records!";
          }
        }
      }
    }
?>

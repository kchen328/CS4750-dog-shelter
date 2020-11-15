<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dog_Who</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/main.css">  
  
  <?php ob_start(); ?>
<?php require('connectdb.php'); ?> 
<?php session_start(); ?>
</head>

<body>
  
    <div class="container-login100" >
      <div class="wrap-login100">
        <form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
          <span class="login100-form-title">
            Adopter Login 
</span>
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
    function validate_username(){
      global $db;
      if( isset($_POST['username']) && (strlen($_POST['username']) == 0) ){ 
        echo "Please enter your username!";
      }
      elseif( isset($_POST['username']) && (strlen($_POST['username']) != 0) ){
        $username = trim($_POST['username']);
        if($query = $db->prepare('SELECT AdopterID, password FROM potential_adopter WHERE username = :username')){
          $query->bindValue(':username', $username);
          $query->execute();
          $user = $query->fetchAll();
          if(count($user) > 0){
            // user found
          }
          else{
            echo "username doesn't exist! <br />";
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
      
        if( (isset($_POST['username'])) && ($query = $db->prepare('SELECT * FROM potential_adopter WHERE username = :username')) ){
          $query->bindValue(':username', $username);
          $query->execute();

          $results = $query->fetch();
          $password_hashed = $results[2];
            if($password_hashed == $pwd){
                
            }
          else{
            echo "Password doesn't exist!";
          }
        }
      }
    }
?>
<script type="text/javascript">
  function redirect(){
    window.location.href = 'http://localhost/CS4750-dog-shelter/templates/profile-potential.php';
  }
</script>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = trim($_POST['username']);
    $pwd = trim($_POST['pwd']);
    if($query = $db->prepare('SELECT * FROM potential_adopter WHERE username = :username')){
      $query->bindValue(':username', $username);
      $query->execute();

      $results = $query->fetch();
      $id = $results[0]; 
      $username = $results[1]; 
      $password_hash = $results[2];
      $fname = $results[3];
      $lname = $results[4];
      $gender = $results[5];
      $age = $results[6];
      $location = $results[7];
      $email = $results[8];
      $phone_number = $results[9];
      $living_style = $results[10];
      $number_of_kids= $results[11];
      $number_of_adults= $results[12];
      if(($password_hash == $pwd)){
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['pwd'] = trim($_POST['pwd']);
        $_SESSION['pwd_hashed'] = $password_hash;
        $_SESSION['first_name'] = $fname;
        $_SESSION['last_name'] = $lname;
        $_SESSION['gender'] = $lname;
        $_SESSION['age'] = $lname;
        $_SESSION['location'] = $location;
        $_SESSION['phone_number'] = $phone_number;
        $_SESSION['living_style'] = $living_style;
        $_SESSION['number_of_kids'] = $number_of_kids;
        $_SESSION['number_of_adults'] = $number_of_adults;
  
        echo '<script type="text/javascript">',
        'redirect();',
        '</script>';
      }
      else{
          echo "failed the session";
      }
    }
  }
?>
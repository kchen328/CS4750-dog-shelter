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
            Login
          </span>

          <br>
          <p> Are you a potential adopter or dog shelter?</p>
          <div style="color:white;padding:10px;">
        
          <br>
          <select name="taskOption" id="type">
              <option value="1">Dog Shelter</option>
              <option value="2">Potential Adopter</option>
            </select> 
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
      // $selectOption = $_POST['taskOption'];
      if( isset($_POST['username']) && (strlen($_POST['username']) == 0) ){ 
        echo "Please enter your username!";
      }
      elseif( isset($_POST['username']) && (strlen($_POST['username']) != 0) ){
        $username = trim($_POST['username']);
        //dog_shelter
        if($_POST['taskOption'] == 1){
        if($query = $db->prepare('SELECT DogShelterID, password FROM dog_shelter WHERE username = :username')){
          $query->bindValue(':username', $username);
          $query->execute();
          $user = $query->fetchAll();
          if(count($user) > 0){
            // user found
          }
          else{
              
            echo "Username doesn't exist! <br />";
          }
        }
        }
        if($_POST['taskOption'] == 2){
          if($query = $db->prepare('SELECT AdopterID, password FROM potential_adopter WHERE username = :username')){
            $query->bindValue(':username', $username);
            $query->execute();
            $user = $query->fetchAll();
            if(count($user) > 0){
              // user found
            }
            else{
                
              echo "Username doesn't exist! <br />";
            }
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
        if($_POST['taskOption'] == 1){
        if( (isset($_POST['username'])) && ($query = $db->prepare('SELECT * FROM dog_shelter WHERE username = :username')) ){
          $query->bindValue(':username', $username);
          $query->execute();

          $results = $query->fetch();
          $password_hashed = $results[2];
            if(password_verify($pwd,$password_hashed)){
                
            }
          else{
            echo "Password doesn't exist!";
          }
        }
      }
      if($_POST['taskOption'] == 2){
      if( (isset($_POST['username'])) && ($query = $db->prepare('SELECT * FROM potential_adopter WHERE username = :username')) ){
        $query->bindValue(':username', $username);
        $query->execute();

        $results = $query->fetch();
        $password_hashed = $results[2];
          // if($password_hashed == $pwd){
            if(password_verify($pwd,$password_hashed)){
          }
        else{
          echo "Password doesn't exist!";
        }
      }
      }
    }
    }
?>
<script>
  function redirect(){ //for dog shelter
    // window.location.href = 'http://www.cs.virginia.edu/~aeb2de/CS4750-dog-shelter/templates/profile.php';
    // window.location.href = 'https://www.cs.virginia.edu/~aeb2de/CS4750-dog-shelter/templates/index2.php';
    window.location.href = 'https://www.cs.virginia.edu/~aeb2de/CS4750-dog-shelter/templates/index2.php';
  }
  function redirect_potent(){ //for potential adopter
    // window.location.href = 'https://www.cs.virginia.edu/~aeb2de/CS4750-dog-shelter/templates/index3.php';
    window.location.href = 'https://www.cs.virginia.edu/~aeb2de/CS4750-dog-shelter/templates/index3.php';
  }
</script>
<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $selectOption = $_POST['taskOption'];
    if($selectOption == 1){
      // echo "selected dog shelter";
    $username = trim($_POST['username']);
    $pwd = trim($_POST['pwd']);
    if($query = $db->prepare('SELECT * FROM dog_shelter WHERE username = :username')){
      $query->bindValue(':username', $username);
      $query->execute();

      $results = $query->fetch();
      $id = $results[0]; 
      $username = $results[1]; 
      $password_hash = $results[2];
      $name = $results[3];
      $location = $results[4];
      $email = $results[5];
      $phone_number = $results[6];
      if(password_verify(trim($_POST['pwd']),$password_hash)){
        session_regenerate_id(); // replaces current session ID with new one
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['id'] = $id;
        $_SESSION['email'] = $email;
        $_SESSION['pwd'] = trim($_POST['pwd']);
        $_SESSION['pwd_hashed'] = $password_hash;
        $_SESSION['name'] = $name;
        $_SESSION['location'] = $location;
        $_SESSION['phone_number'] = $phone_number;
        echo '<script>',
        'redirect();',
        '</script>';
      }
      else{
          
      }
    }
  }
  elseif($selectOption == 2){
    $username = trim($_POST['username']);
    // $pwd = trim($_POST['pwd']);
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
      $living_style = $results[9];
      $number_of_kids = $results[10];
      $number_of_adults= $results[11];
      $activeness_level= $results[12];
      if(password_verify(trim($_POST['pwd']),$password_hash)){
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['id'] = $id;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['pwd'] = trim($_POST['pwd']);
        $_SESSION['pwd_hashed'] = $password_hash;
        $_SESSION['first_name'] = $fname;
        $_SESSION['last_name'] = $lname;
        $_SESSION['gender'] = $gender;
        $_SESSION['age'] = $age;
        $_SESSION['location'] = $location;
        $_SESSION['living_style'] = $living_style;
        $_SESSION['number_of_kids'] = $number_of_kids;
        $_SESSION['number_of_adults'] = $number_of_adults;
        $_SESSION['activeness_level'] = $activeness_level;
        echo '<script>',
        'redirect_potent();',
        '</script>';
      }
      else{
        echo "<span class='msg'>Username and password do not match our record</span> <br/>";
      }
    }
  }



}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dog_Who</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/main.css">  
<?php require('connectdb.php'); ?> 
</head>
<?php
      session_start();
      if (!isset($_SESSION['loggedin'])) {
        header('Location: http://www.localhost/CS4750-dog-shelter/templates/login.php');
        exit;
      } 
    ?>
<?php
 $results = match_potentialadopter_dog();
    function match_potentialadopter_dog(){
        // $sheltername = $_SESSION['name'];
        echo "List of interested potential adopters for each dog in the shelter:  ";
        global $db;
        $query = "SELECT potential_adopter.first_name, potential_adopter.last_name, dog.name, potential_adopter.email FROM potential_adopter JOIN interested_in ON potential_adopter.AdopterID = interested_in.AdopterID JOIN dog ON dog.DogID = interested_in.DogID AND dog.dog_shelter='" . $_SESSION['name'] . "';";  
        $statement = $db ->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closeCursor();
        return $results; 
    }
?>

<body>
<br>
 <?php foreach($results as $item): ?>
    <tr>
        <br>
        <td><?php echo $item['name']; // name of dog ?></td>
        <br>
        <td><?php echo $item['first_name']; //name & email of potential adopter who stated interest in dog ?></td> 
        <?php echo " " ?>
        <td><?php echo $item['last_name']; ?></td> 
        <br>
        <td><?php echo $item['email']; ?></td> 
        <br>
    </tr>
 <?php endforeach; ?>
</body>




</html>
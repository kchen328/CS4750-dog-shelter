<?php require('connectdb.php'); ?> 
<?php 
if(isset($_GET['id'])){
    global $db;
    $query = sprintf("DELETE FROM dog WHERE DogID = %s",$_GET['id']);
	$statement = $db->prepare($query);
	// $statement->bindValue(':id', $id);
	$statement->execute();
    $statement->closeCursor();
    echo "successfully deleted";
}
    ?>
    <!-- https://stackoverflow.com/questions/29879408/php-button-in-a-for-each-loop -->
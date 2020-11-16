<?php
require('connectdb.php');
// require('dog_shelter_db.php');
  function setVars() {
        global $db;
//        $id = $_GET['DogID'];
        $query = "SELECT * FROM dog WHERE DogID=2";
        $statement = $db->prepare($query);
        $statement->execute();
        $results = $statement->fetchAll();
        $statement->closecursor();
        return $results;
      }
    

    $id = 2;
    $sqlQuery = setVars();
    $health_conditions = getUnderlyingCondition($id); 
    if (!empty($_POST['action']) && ($_POST['action'] == 'Update')) {

         updateDog($_POST['preferred_environment'], $_POST['dog_breed'], $_POST['size'],
                       $_POST['color'], $_POST['activeness_level'], $_POST['age'],
                       $_POST['name'], $_POST['current_location'],
                       $_POST['shots_uptodate'], $_POST['gender'], $_POST['hypoallergenic'],
                       $_POST['fee'], $_POST['ok_with_kids'], $_POST['ok_with_other_pets'],
                       $_POST['description'], $id);

         if(!empty($_POST['health_conditions'])){
               foreach($_POST['health_conditions'] as $health_cond){
                    addUnderlyingCondition($id, $health_cond);
               }
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
  <title>Edit dog</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="shortcut icon" href="http://www.cs.virginia.edu/~up3f/cs4750/images/db-icon.png" type="image/ico" />  
  <script type="text/javascript">
        var intTextBox=0;
        //FUNCTION TO ADD TEXT BOX ELEMENT
        function addElement()
        {
            intTextBox = intTextBox + 1;
            var contentID = document.getElementById('content');
            var newTBDiv = document.createElement('div');
            newTBDiv.setAttribute('id','Hosp'+intTextBox);
            newTBDiv.innerHTML = "<input type='text' id='hospital_" + intTextBox + "'    name='health_conditions[]'/> <a class='btn btn-outline-danger btn-sm' href='javascript:removeElement(\"" + intTextBox + "\")'>Remove</a>";
            contentID.appendChild(newTBDiv);
        }
        //FUNCTION TO REMOVE TEXT BOX ELEMENT
        function removeElement(id)
        {

            if(intTextBox != 0)
            { 
                var contentID = document.getElementById('content');
                //alert(contentID);
                contentID.removeChild(document.getElementById('Hosp'+id));
                intTextBox = intTextBox-1;
            }
        }
let deleteBtn = document.getElementsByClassName("del_btn");
// converting html collection to array, to use array methods
 var btn = document.getElementsByClassName('del_btn')

for (var i = 0; i < btn.length; i++) {
  btn[i].addEventListener('click', function(e) {
    e.currentTarget.parentNode.remove();
    //this.closest('.single').remove() // in modern browsers in complex dom structure
    //this.parentNode.remove(); //this refers to the current target element 
    //e.target.parentNode.parentNode.removeChild(e.target.parentNode);
  }, false);
}
 function deleteItem(item ){
return item.parentNode.remove();
}
function myAjax() {
      $.ajax({
           type: "POST",
           url: 'your_url/ajax.php',
           data:{action:''},
           success:function(html) {
             alert(html);
           }

      });
     return item.parentNode.remove();

 }

    </script>
</head>

<body>
<div class="container">

<h1>Edit dog</h1>
<?php foreach($sqlQuery as $item): ?>
<form name="mainForm" action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    Name:
    <input type="text" class="form-control" name="name"  value="<?php echo $item['name']?>" />        
  </div>  
  <div class="form-group">
    Breed:
    <input type="text" class="form-control" name="dog_breed"  value="<?php echo $item['dog_breed']?>" /> 
  </div>  
 <div class="form-group">
  Size: <br>
  <input type="radio" name="size" value="small" <?php echo ($item['dog_size']=='small' ? 'checked' : '')?> />
  <label for="small">Small</label><br>
  <input type="radio" name="size" value="medium" <?php echo ($item['dog_size']=='medium' ? 'checked' : '')?> />
  <label for="medium">Medium</label><br>
  <input type="radio" name="size" value="large" <?php echo ($item['dog_size']=='large' ? 'checked' : '')?> />
  <label for="large">Large</label>
  </div> 
  <div class="form-group">
    Color:
    <input type="text" class="form-control" name="color"   value="<?php echo $item['color']?>" />
  </div>
  <div class="form-group">
    Age:
    <input type="number" class="form-control" name="age"   max="25" min="0" value="<?php echo $item['age']?>"/>
  </div>
<div class="form-group">
    Gender:
    <input type="text" class="form-control" name="gender" value="<?php echo $item['gender']?>" />
  </div>
  <div class="form-group">
    Current location:
    <input  value=<?php echo $item['current_location']?>  type="text" class="form-control" name="current_location"   />
  </div>
  <div class="form-group">
    Activeness level:
    <input type="text" class="form-control" name="activeness_level"  value="<?php echo $item['activeness_level']?>"   />
  </div>
<div class="form-group">
    <div> Shots up to date:</div>
     <input type="radio" name="shots_uptodate" value="1" <?php echo ($item['shots_uptodate']=='1' ? 'checked' : '')?> />
     <label for="1">Yes</label><br>
     <input type="radio" name="shots_uptodate" value="0" <?php echo ($item['shots_uptodate']=='0' ? 'checked' : '')?> />
     <label for="0">No</label><br>
   </div>
 <div class="form-group">
    <div> Hypoallergenic:</div>
     <input type="radio" name="hypoallergenic" value="1" <?php echo ($item['hypoallergenic']=='1' ? 'checked' : '')?> />
     <label for="1">Yes</label><br>
     <input type="radio" name="hypoallergenic" value="0" <?php echo ($item['hypoallergenic']=='0' ? 'checked' : '')?> />
     <label for="0">No</label><br>
   </div>
  <div class="form-group">
    Preferred environment:
    <input type="text" class="form-control" name="preferred_environment"   value="<?php echo $item['preferred_environment']?>" />
  </div>
  <div class="form-group">
    Fee:
    <input type="number" class="form-control" name="fee"   max="10000" min="0"  value="<?php echo $item['fee']?>" />
  </div>
  <div class="form-group">
    <div> OK with kids:</div>
     <input type="radio" name="ok_with_kids" value="1" <?php echo ($item['ok_with_kids']=='1' ? 'checked' : '')?> />
     <label for="1">Yes</label><br>
     <input type="radio" name="ok_with_kids" value="0" <?php echo ($item['ok_with_kids']=='0' ? 'checked' : '')?> />
     <label for="0">No</label><br>
   </div>

  <div class="form-group">
    <div> OK with other pets:</div>
     <input type="radio" name="ok_with_other_pets" value="1 <?php echo ($item['ok_with_other_pets']==1 ? 'checked' : '')?> />" />
     <label for="1">Yes</label><br>
     <input type="radio" name="ok_with_other_pets" value="0" <?php echo ($item['ok_with_other_pets']==0 ? 'checked' : '')?> />
     <label for="0">No</label><br>
   </div>

  <div class="form-group">
  Health conditions:
<p><a href="javascript:addElement();" ><label type="button" class="btn btn-outline-primary btn-sm">Add condition</label></a></p>
  
    <div id="content">
 <?php foreach($health_conditions as $hc): ?>
 <div>
    <input type="text"  name=<?php echo $hc['underlying_conditions']?>  value="<?php echo $hc['underlying_conditions']?>"/>
    <!-- <button class='btn btn-outline-primary btn-sm del_btn btn-outline-danger' onclick="deleteItem(this); '<?php// deleteUnderlyingCondition($dog_id, $hc['underlying_conditions'])?>'" >Remove</button>  -->

        <button name="deletebutton" style="color:red" class="login100-form-btn" >Delete Account</button> <br>
  </div>
<?php endforeach; ?>
</div>
  <div class="form-group">
   Description
    <input type="text" class="form-control" name="description" value="<?php echo $item['description']?>"/>
  </div>
<!--

  <div class=="form-group">
  Add image: <br>
    <input type="file" name="dog_image" value="" /><div> 

  
 <form method="POST" action="index.php" enctype="multipart/form-data">
 </div> 
-->
 <input type="submit" value="Update" name="action" class="btn btn-dark" title="Insert a friend into a friends table" /> 
  

</form>  

<?php 
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
  if(isset($_POST['deletebutton'])){
  global $db;
  $condition = $hc['underlying_conditions'];
  $dog_id = $id;
  $query = "DELETE FROM dog_underlying_conditions WHERE DogID=:dog_id and underlying_conditions=:condition;";
  $statement = $db->prepare($query);
  $statement->bindValue(':dog_id', $dog_id);
  $statement->bindValue(':condition', $condition);
  $statement->execute();
  $statement->closeCursor();
  }
}
 ?>
<?php endforeach; ?>
  
</div>    
<?php
function updateDog($preferred_environment, $dog_breed, $dog_size, $color, $activeness_level, $age, $name, $current_location, $shots_uptodate, $gender, $hypoallergenic, $fee, $ok_with_kids, $ok_with_other_pets, $description, $dog_id) 
{
        global $db;
        $query = "UPDATE dog SET preferred_environment=:preferred_environment, dog_breed=:dog_breed, dog_size=:dog_size, color=:color, activeness_level=:activeness_level, age=:age, name=:name, current_location=:current_location, shots_uptodate=:shots_uptodate, gender=:gender, hypoallergenic=:hypoallergenic, fee=:fee, ok_with_kids=:ok_with_kids, ok_with_other_pets=:ok_with_other_pets, description=:description WHERE DogID=:dog_id";

        $statement = $db->prepare($query);
        $statement->bindValue(':preferred_environment', $preferred_environment);
        $statement->bindValue(':dog_breed', $dog_breed);
        $statement->bindValue(':dog_size', $dog_size);
        $statement->bindValue(':color', $color);
        $statement->bindValue(':activeness_level', $activeness_level);
        $statement->bindValue(':age', $age);
        $statement->bindParam(':name', $name);
        $statement->bindValue(':current_location', $current_location);
        $statement->bindValue(':shots_uptodate', $shots_uptodate);
        $statement->bindValue(':gender', $gender);
        $statement->bindValue(':hypoallergenic', $hypoallergenic);
        $statement->bindValue(':fee', $fee);
        $statement->bindValue(':ok_with_kids', $ok_with_kids);
        $statement->bindValue(':ok_with_other_pets', $ok_with_other_pets);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':dog_id', $dog_id);
        $statement->execute();
        $statement->closeCursor();
}

function selectDogID($name, $dog_shelter){
      global $db;
      $query = "SELECT DogID FROM dog WHERE name=:name and dog_shelter=:dog_shelter;";

      $statement = $db->prepare($query);
      $statement->bindValue(':dog_shelter', $dog_shelter);
      $statement->bindValue(':name', $name);
      $statement->execute();
      $results = $statement->fetch();
      $statement->closeCursor();
      return $results[0];
}

function addUnderlyingCondition($dog_id, $underlying_condition){
     global $db;
     $query = "INSERT INTO dog_underlying_conditions(DogID, underlying_conditions) VALUES(:dog_id, :underlying_condition);";
    
     $statement = $db->prepare($query);
     $statement->bindValue(':dog_id', $dog_id);
     $statement->bindValue(':underlying_condition', $underlying_condition);
     $statement->execute();
     $statement->closeCursor();
}

function getUnderlyingCondition($dog_id){
    global $db;
    $query = "SELECT underlying_conditions FROM dog_underlying_conditions WHERE DogID=:dog_id";
    $statement = $db->prepare($query);
    $statement->bindValue(':dog_id', $dog_id);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
    return $results;
    
}

function deleteUnderlyingCondition($dog_id, $condition){
    global $db;
    $query = "DELETE FROM dog_underlying_conditions WHERE DogID=:dog_id and underlying_conditions=:condition;";
    echo $query;
    $statement = $db->prepare($query);
    $statement->bindValue(':dog_id', $dog_id);
    $statement->bindValue(':condition', $condition);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();
    return $results;

}
?>
<script>
  function redirect(){ //for dog shelter
    window.location.href = 'https://www.cs.virginia.edu/~aeb2de/CS4750-dog-shelter/templates/profile.php';
    // window.location.href = 'https://www.cs.virginia.edu/~aeb2de/CS4750-dog-shelter/templates/profile.php';
  }
 
</script>
</body>
</html>
  

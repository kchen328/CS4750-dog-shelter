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

    <?php require('../connectdb.php'); ?> 

    
    <?php
      session_start();

      function setVars() {
        global $db;
        $id = $_GET['DogID'];
        $query = "SELECT * FROM dog WHERE DogID='$id'";
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
      <?php foreach($sqlQuery as $item): ?>
        <h1><?php echo $item['name']?></h1>
        <hr>
        <div class="oneline" style="padding-top:15px;"> 
          <span class="title1">Breed:</span> 
          <span class="title2"><?php echo $item['Dog_breed']?></span>
          <br>
          <span class="title1">Price:</span> 
          <span class="title2"><?php echo $item['price']?></span>
          <br>
          <span class="title1">Gender:</span> 
          <span class="title2"><?php echo $item['gender']?></span>
          <br>
          <span class="title1">Color:</span> 
          <span class="title2"><?php echo $item['color']?></span>
          <br>
          <span class="title1">Size:</span> 
          <span class="title2"><?php echo $item['dog_size']?></span>
          <br>
          <span class="title1">Age:</span> 
          <span class="title2"><?php echo $item['age']?></span>
          <br>
          <span class="title1">Preferred Environment:</span> 
          <span class="title2"><?php echo $item['Preferred_environment']?></span>
          <br>
          <span class="title1">Activeness Level:</span> 
          <span class="title2"><?php echo $item['activeness_level']?></span>
          <br>
          <span class="title1">Dog Shelter:</span> 
          <span class="title2"><?php echo $item['dog_shelter']?></span>
          <br>
          <span class="title1">Current Location:</span> 
          <span class="title2"><?php echo $item['current_location']?></span>
          <br>
          <span class="title1">Hypoallergenic:</span> 
          <span class="title2"><?php echo (($item['hypoallergenic'] == 1) ? "Yes" : "No")?></span>
          <br>
          <span class="title1">Shots Up to Date?</span> 
          <span class="title2"><?php echo (($item['shots_uptodate'] == 1) ? "Yes" : "No")?></span>
          <br>
          <span class="title1">Ok with Kids?</span> 
          <span class="title2"><?php echo (($item['ok_with_kids'] == 1) ? "Yes" : "No")?></span>
          <br>
          <span class="title1">Ok with Other Pets?</span> 
          <span class="title2"><?php echo (($item['ok_with_other_pets'] == 1) ? "Yes" : "No")?></span>
          <br>
          <span class="title1">Description:</span> 
          <span class="title2"><?php echo $item['description']?></span>
        </div>
      <?php endforeach; ?>
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
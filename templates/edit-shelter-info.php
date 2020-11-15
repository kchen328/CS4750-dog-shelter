<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head
<?php require('../connect-db.php');?> 
<?php
      session_start();
      if (!isset($_SESSION['loggedin'])) {
        header('Location: http://localhost/CS4750-dog-shelter/templates/login.php');
        exit;
      } 
?>

<?php
    session_start();
    session_destroy();
    header('Location: http://localhost/CS4750-dog-shelter/templates/index.php');
?>
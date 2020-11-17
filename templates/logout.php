<?php
    session_start();
    session_destroy();
    header('Location: http://www.localhost/CS4750-dog-shelter/templates/index.php');
?>
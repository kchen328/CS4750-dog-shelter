<?php
    session_start();
    session_destroy();
    header('Location: http://www.cs.virginia.edu/~aeb2de/CS4750-dog-shelter/templates/index.php');
?>
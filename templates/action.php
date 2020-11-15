<?php
session_start();
include 'main/Dog.php';
$dog = new Dog();
if(isset($_POST["action"])){
	$html = $dog->searchDogs($_POST);
	$data = array(
		"html"	=> $html,	
	);
	echo json_encode($data);	
}

?>
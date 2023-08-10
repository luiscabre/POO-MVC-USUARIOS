<?php
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
	$miArray[] = $_POST['idnumber']; 
    $miArray[] = $_POST['nombre'];	
	$miArray[] = $_POST['profesion'];  
	$miArray[] = $_POST['edocivil']; 
	$miArray[] = $_POST['estudios']; 
 	$obj->guardar(  $miArray  );  //First Table 

	

?>
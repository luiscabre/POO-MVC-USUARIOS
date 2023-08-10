<?php
    require("c://xampp/htdocs/proyecto/controller/usernameController.php");
  
       
	  
	  $object = new usernameController();
      $object->update_detalle(  $_POST['idnumber'], $_POST['edocivil'], $_POST['profesion'],$_POST['estudios']  );
	  
	  $obj  = new usernameController();
	  $obj->update(  $_POST['id'],$_POST['idnumber'], $_POST['nombre'],  $_POST['edocivil'], $_POST['profesion'], $_POST['estudios']  );
  
 



?>


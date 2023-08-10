<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
    require_once("c://xampp/htdocs/proyecto/controller/usernameController.php");
    $obj = new usernameController();
    $user = $obj->show($_GET['id']); //	Call back show function
	$radio1="";
	$radio2="";
	$radio3="";
	$vari  = $user[4]; 
	$user_edocivil  =  $obj->getEdocivil( $vari );

	$var_educacion = $user[6]; 
	$radio_educacion =  $obj->getEducacion($var_educacion);
 	
	 if ($radio_educacion == "Bachiller") {
	     $radio1 =  "Checked"; 
         } elseif ($radio_educacion == "Universitario") {
		 $radio2 =  "Checked"; }
	     elseif ($radio_educacion == "Post Grado") {
	    $radio3 =  "Checked"; }

?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext"  value="<?= $user[0]?>">
        </div>
    </div>
	 <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">ID number</label>
        <div class="col-sm-10">
            <input type="text" name="idnumber" class="form-control"  value="<?= $user[1]?>" readonly>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre" class="form-control"  value="<?= $user[2]?>">
        </div>
    </div>
    <div>
	

	 <div class="mb-3 row">
	   <label for="inputPassword" class="col-sm-2 col-form-label">Edo Civil</label>
	      <div class="col-sm-10">
		      <select class="form-select" id ="edocivil" name="edocivil" aria-label="Default select example">
		     <option selected>  <?php  echo $user_edocivil; ?><option>
		     <option value="Soltero(a)">Soltero(a)</option>
             <option value="Casado(a)">Casado(a)</option>
			 <option value="Divorciado(a)">Divorciado(a)</option>
             
         </select>
		 </div>
     </div>
	
	<div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Profesion</label>
        <div class="col-sm-10">
            <input type="text" name="profesion" class="form-control"  value="<?= $user[5]?>">
        </div>
    </div>
	
	<div class="mb-3 row">
	     <div class="col-sm-10">
		 <label for="inputPassword" class="col-sm-2 col-form-label">Nivel de Estudios</label>
	    <div class="radio">
             <label><input type="radio" name="estudios" value="Bachiller" <?php echo $radio1; ?> > Bachiller</label>
            </div>
             <div class="radio">
               <label><input type="radio" name="estudios" value="Universitario" <?php echo $radio2; ?>> Universitario</label>
             </div>
             <div class="radio">
                 <label><input type="radio" name="estudios" value="Post Grado" <?php echo $radio3; ?>> Post Grado</label>
             </div>
			 </div>
         </div>
	</div>	 


    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
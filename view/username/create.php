<?php
    require_once("c://xampp/htdocs/proyecto/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre del usuario</label>
        <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		
		 <label for="exampleInputEmail1" class="form-label">Numero de identificacion: </label>
        <input type="number" name="idnumber" pattern="[0-8]*" min="0" max="99999999" step="1" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		
		<label for="exampleInputEmail1" class="form-label">Profesión</label>
		<input type="text" name="profesion" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		
		    <p>Edo Civil </p>
			<select class="form-select" id ="edocivil" name="edocivil" aria-label="Default select example">
             <option selected>- Seleccionar - <option>
             <option value="Soltero(a)">Soltero(a)</option>
             <option value="Casado(a)">Casado(a)</option>
             <option value="Divorciado(a)">Divorciado(a)</option>
         </select>
		

		
		<div class="radio">
		     <p>Nivel de Estudios</p>
             <label><input type="radio" name="estudios" value="Bachiller" >Bachiller</label>
            </div>
             <div class="radio">
               <label><input type="radio" name="estudios" value="Universitario">Universitario</label>
             </div>
             <div class="radio">
                 <label><input type="radio" name="estudios" value="Post Grado" >Post Grado</label>
             </div>
         </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("c://xampp/htdocs/proyecto/view/head/footer.php");
?>
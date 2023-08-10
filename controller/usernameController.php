<?php
    class usernameController{
        private $model;
		public  $miArray = [], $user_var, $radio1, $radio2, $radio3, $user_edocivil; 
		public $var_educacion, $radio_educacion;
        public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/model/usernameModel.php");
            $this->model = new usernameModel();
	        }
		
        public function guardar( $miArray ){
			$idnumber  = $miArray[0];
			$nombre    = $miArray[1];
			$profesion = $miArray[2];
			$edocivil  = $miArray[3];
			$estudios  = $miArray[4];
			
			// Call back Insert method 
			$id         =  $this->model->insertar($idnumber, $nombre  );
			$id2        =  $this->model->insertar_details($idnumber,$edocivil, $profesion, $estudios);

			return ($id!=false) ? header("Location:show.php?id=".$id ) : header("Location:create.php");
        }     
   
       
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }
        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update( $id, $idnumberx, $nombre,$edocivilx, $profesionx, $estudiosx   ){
            return ($this->model->update($id, $idnumberx, $nombre,$edocivilx, $profesionx, $estudiosx) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
		
		 public function update_detalle( $idnumberx, $edocivilx, $profesionx, $estudiosx  ){
           return ($this->model->update_details($idnumberx, $edocivilx, $profesionx, $estudiosx   ) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        }
		
		public function getEducacion($var_educacion){
	 	    if ($var_educacion == "Bachiller") {
                $var_educacion =  "Bachiller";
             } elseif ($var_educacion == "Universitario") {
			 $var_educacion =  "Universitario"; }
			  elseif ($var_educacion == "Post Grado") {
			  $var_educacion =  "Post Grado"; }
 		  return $var_educacion;
		} 
		
			
        public function getEdocivil( $vari ){
	 	    if ($vari == "Soltero(a)") {
                $vari =  "Soltero(a)";
             } 
			 elseif ($vari == "Casado(a)") {
                $vari         = "Casado(a)";
             } 
			 elseif  ($vari == "Divorciado(a)") {
			    $vari            = "Divorciado(a)"; }
		  return $vari; 
		}
		
	
    }

?>
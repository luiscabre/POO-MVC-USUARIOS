<?php
    class usernameModel{
        private $PDO;
	    public function __construct()
        {
            require_once("c://xampp/htdocs/proyecto/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
		
	
		
        public function insertar($idnumber, $nombre  ){
		   	$stament = $this->PDO->prepare("INSERT INTO username (id, idnumber, nombre ) VALUES (NULL, :idnumber, :nombre )");
		    $stament->bindParam(":idnumber",$idnumber);
			$stament->bindParam(":nombre",$nombre);
			return ($stament->execute()) ? $this->PDO->lastInsertId()  : false ;  
	     }
			
	
		 public function insertar_details($idnumber, $edocivil, $profesion, $estudios){
			$stmt = $this->PDO->prepare("INSERT INTO username_details (id, idnumber, edocivil, profesion, estudios) VALUES (NULL, :idnumber, :edocivil, :profesion, :estudios )");
			$stmt->bindParam(":idnumber",$idnumber);
		    $stmt->bindParam(":edocivil",$edocivil);
			$stmt->bindParam(":profesion",$profesion);
			$stmt->bindParam(":estudios",$estudios); 
			return ($stmt->execute()) ? $this->PDO->lastInsertId()  : false ;  
	     } 
			
		
        public function show($id){
           // $stament = $this->PDO->prepare("SELECT * FROM username where id = :id limit 1");
		    $stament = $this->PDO->prepare("SELECT username.id, username.idnumber, username.nombre, username_details.idnumber,  username_details.edocivil,  username_details.profesion,  username_details.estudios  FROM username INNER JOIN username_details ON username.idnumber = username_details.idnumber where username.id = :id ");
            $stament->bindParam(":id",$id);
	        return ($stament->execute()) ? $stament->fetch() : false ;			
        }
		
		
        public function index(){
            $stament = $this->PDO->prepare("SELECT username.id, username.idnumber, username.nombre,  username_details.edocivil,  username_details.profesion,  username_details.estudios  FROM username INNER JOIN username_details ON username.idnumber = username_details.idnumber");
	         return ($stament->execute()) ? $stament->fetchAll() : false;
        }
		

		 public function update($id, $idnumberx,  $nombre, $edocivilx, $profesionx, $estudiosx  ){
              $stament = $this->PDO->prepare("UPDATE username SET nombre = :nombre WHERE id = :id");
              $stament->bindParam(":nombre",$nombre);
              $stament->bindParam(":id",$id);
			return ($stament->execute()) ? $id : false;
        }
		
		 public function update_details(   $idnumber, $edocivil, $profesion, $estudios ){
		      $stmt = $this->PDO->prepare("UPDATE username_details SET edocivil = :edocivil, profesion = :profesion, estudios = :estudios  WHERE idnumber = :idnumber");
		      $stmt->bindParam(":edocivil",$edocivil);
			  $stmt->bindParam(":profesion",$profesion);
			  $stmt->bindParam(":estudios",$estudios);
			  $stmt->bindParam(":idnumber",$idnumber);
			return ($stmt->execute()) ?  true : false;
        }
		

        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM username WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? true : false;
        }
    }

?>
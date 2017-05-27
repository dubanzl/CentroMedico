<?php
require_once("model/user.model.php");

class UserController{
private $model ; 
	
 public function __CONSTRUCT(){
	 
	 $this->model= new UserModel();
	 
 }
	
  public function index(){ 
	  if(isset($_SESSION['user'])){    
	  $titulo = "Dashboard";
	  require_once("view/include/header.php");
	  require_once("view/modules/user/dashboard.php");
	  }
	  else{
		 header("location:inicio");		  
	  }
	 	 
  }
	
 public function logout(){
	 if(isset($_SESSION["user"])){
		 session_destroy();
	 	 header("location: inicio?msn=se ha cerrado correctamente la sesion"); 
	 }
	
	 else {
		 header("location: inicio"); 
	 }
 }
	
	
 public function paciente(){
	 if(isset($_SESSION['user'])){
	 $titulo="paciente";
	 require_once("view/include/header.php");
	 require_once("view/modules/user/dashboard.php");
	 require_once("view/modules/user/paciente.php");
	 	
	 }else{
		 
		 header("location: inicio ");
	 }
	
 }
	
	
public function medico(){
	 if(isset($_SESSION['user'])){
	 $tiulo="medico";
	 require("view/include/header.php");
	 require_once("view/modules/user/dashboard.php");
	 require("view/modules/user/medico.php");
	 }else{
		header("location: inicio"); 
		 
	 }
	
}
	

public function cuenta(){
	if(isset($_SESSION['user'])){		
	$titulo="cuenta";	
	 require("view/include/header.php");
	 require_once("view/modules/user/dashboard.php");
	 require("view/modules/user/cuenta.php");
	 
	}else{	
		
		header("location: inicio");		
	}
  	
}
	public function delete(){
		$id=$_GET['id'];
		$delete= $this->model->delete($id);
		header("Location: index.php?c=user&a=paciente&msn=$delete");
	}
	
	public function deleteM(){	     
		$id=$_GET['id'];
		$deleteM = $this->model->deleteM($id);
		header("Location: index.php?c=user&a=medico&msn=$deleteM");
	}
	public function deleteC(){	     
		$id=$_GET['id'];
		$deleteC = $this->model->deleteC($id);
		header("Location: index.php?c=user&a=cuenta&msn=$deleteC");
	}
	

	
	public function create(){
		$data = $_POST['data'];
		$create= $this->model->create($data);
		header("Location: index.php?c=user&a=paciente&msn=$create");
	}
		
	public function createM(){
		$data = $_POST['data'];
		$createM= $this->model->createM($data);
		header("Location: index.php?c=user&a=medico&msn=$createM");
	}
	public function createC(){
		$data = $_POST['data'];
		$createC= $this->model->createC($data);
		header("Location: index.php?c=user&a=cuenta&msn=$createC");
	}
	
	
	public function update(){
		
		$data=$_POST['data'];
		$update=$this->model->update($data);
		header("Location: index.php?c=user&a=paciente&msn=$update");
	}
   
	public function updateM(){
		
		$data=$_POST['data'];
		$updateM=$this->model->updateM($data);
		header("Location: index.php?c=user&a=medico&msn=$updateM");
	}
   public function updateC(){
		
		$data=$_POST['data'];
		$updateC=$this->model->updateC($data);
		header("Location: index.php?c=user&a=cuenta&msn=$updateC");
	}
   

} 	


?>
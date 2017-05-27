<?php
require_once("model/user.model.php");

class WebsiteController{
private $model ; 
	
 public function __CONSTRUCT(){
	 
	 $this->model= new UserModel();
	 
 }
	
  public function index(){ 
	 if(isset($_SESSION['user'])){
		header('Location: dashboard');
	 }else{
		 $titulo = "Home";
	  require_once("view/include/header.php");
	  require_once("view/include/menu.php");
	  require_once("view/modules/website/home.php");
	  require_once("view/include/footer.php");
	 }
	  
	  
	
  }
	public function acceso(){
		 $data =$_POST['data'];
		 $result = $this->model->acceso($data);
		 
		if(count($result[0])>0){
			
			$_SESSION['user']=$result['admin_id'];
			header("Location: dashboard ");
		}else{
			header("Location: inicio?msn=El usuario no se encuentra registrado en la base de datos");
		}
		
	}

	

	
	
	
   
} 	


?>
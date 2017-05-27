<?php 

class UserModel{
	
	private $pdo ;
  
	public function __CONSTRUCT(){
		
		try{
	$this->pdo=DataBase::connect(); 
	$this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			
		}catch(PDOException $e){
			die($e->getMessage()); 			
		}
	}
	public function acceso($data){
		try{
			$sql="SELECT *FROM admin WHERE admin_correo= ? AND admin_pass= ? ";
			$query=$this->pdo->prepare($sql);
			$query->execute(array($data[0],$data[1]));
			$result = $query->fetch(PDO::FETCH_BOTH);
			
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
		return $result;
		
	}
	public function paciente(){
		
		try{
			
			$sql="SELECT *FROM pacientes";
			$query=$this->pdo->prepare($sql);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_BOTH);
			
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
		return $result;	
		
		
	}
	
	public function medico(){
		
		try{
			
			$sql="SELECT *FROM medicos";
			$query=$this->pdo->prepare($sql);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_BOTH);
			
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
		return $result;	
		
		
	}	
	public function cuenta(){
		
		try{
			
			$sql="SELECT *FROM admin";
			$query=$this->pdo->prepare($sql);
			$query->execute();
			$result = $query->fetchAll(PDO::FETCH_BOTH);
			
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
		return $result;	
		
		
	}
	
	
	
	
	public function delete($id){
		
		try{
			$sql="DELETE FROM pacientes WHERE pac_id= ?";
			$query=$this->pdo->prepare($sql);
			$query->execute(array($id));
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
		return $msn='Se ha borrado exitosamente';
	}
	
		
	public function deleteM($id){
		
		try{
			$sql="DELETE FROM medicos WHERE med_id= ?";
			$query=$this->pdo->prepare($sql);
			$query->execute(array($id));
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
		return $msn='Se ha borrado exitosamente';
	}
	public function deleteC($id){
		
		try{
			$sql="DELETE FROM admin WHERE admin_id= ?";
			$query=$this->pdo->prepare($sql);
			$query->execute(array($id));
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
		return $msn='Se ha borrado exitosamente';
	}
	
	public function create($data){
		
		try{
		$sql="INSERT INTO pacientes VALUES ('',?,?,?,?,?)";
			$query=$this->pdo->prepare($sql);
			$query->execute(array($data[0],$data[1],$data[2],$data[3],$data[4]));
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
		return $msn='Se ha Creado exitosamente';
	}
	
	public function createM($data){
		
		try{
		$sql="INSERT INTO medicos VALUES ('',?,?,?,?)";
			$query=$this->pdo->prepare($sql);
			$query->execute(array($data[0],$data[1],$data[2],$data[3]));
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
		return $msn='Se ha Creado exitosamente';
	}
	public function createC($data){
		
		try{
		$sql="INSERT INTO admin VALUES ('',?,?,?)";
			$query=$this->pdo->prepare($sql);
			$query->execute(array($data[0],$data[1],$data[2]));
		}catch(PDOException $e){
			die($e->getMessage());
		}
		
		return $msn='Se ha Creado exitosamente';
	}
	
	
	public  function update($data){
	try{
	  $sql="update  pacientes set pac_nom=? , pac_ape = ? , pac_fecha_nac=? , pac_genero=? , pac_desc= ? where pac_id = ? "; 
      $query=$this->pdo->prepare($sql);
	  $query->execute(array($data[1],$data[2],$data[3],$data[4],$data[5],$data[0]));
	
		
	}catch(PDOException $e){
		
		die($e->getMessage());
	}
	
   return $msn="se ha actualizado correctamente";
 }
	
	
public  function updateM($data){
	try{
	  $sql="update  medicos set med_ced=?, med_nom=? , med_ape = ? , med_desc= ? where med_id = ? "; 
      $query=$this->pdo->prepare($sql);
	  $query->execute(array($data[1],$data[2],$data[3],$data[4],$data[0]));
	
		
	}catch(PDOException $e){
		
		die($e->getMessage());
	}
	
   return $msn="se ha actualizado correctamente";
 }
	public  function updateC($data){
	try{
	  $sql="update  admin set admin_nom=? , admin_correo = ? , admin_pass= ? where admin_id = ? "; 
      $query=$this->pdo->prepare($sql);
	  $query->execute(array($data[1],$data[2],$data[3],$data[0]));
	
		
	}catch(PDOException $e){
		
		die($e->getMessage());
	}
	
   return $msn="se ha actualizado correctamente";
 }
	
	
	
	public function __DESTRUCT(){
		try{
			DataBase::disconect();
		 	
		}catch(PDOException $e){
			die($e->getMessage());
			
		}
	}
}




?>
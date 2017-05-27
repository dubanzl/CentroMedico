<?php  

class DataBase{
	
 #region Propiedades
  private static $db_host ="localhost"; 
  private static $db_name ="centro_medico";
  private static $bd_user ="root"; 
  private static $db_pass= "";
  private static $db_conn = null;	
	
  #endregion Propiedades 	
	
  #	region Metodos 
	public static function connect(){
	   if(self::$db_conn==null){
		     
		  try{
			
	self::$db_conn = new PDO("mysql:host=".self::$db_host.";dbname=".self::$db_name,self::$bd_user,self::$db_pass);
	self::$db_conn->exec("SET CHARACTER SET utf8");
	 
		  }catch(PDOException $e){
			 die(getMessage($e)); 
		  } 
	   } 
		
	  return self::$db_conn ; 			
	}
	
	public  static function disconect(){
			
		self::$db_conn = null; 
	}
	
   #endregion Metodos 

}


?>
	
	
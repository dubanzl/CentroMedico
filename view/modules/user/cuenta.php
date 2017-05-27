<?php $cuenta = $this->model->cuenta();?>
<table width="300" border="3" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
     
      <th scope="col">Nombre</th>
      <th scope="col">Correo</th>
      <th scope="col">Contraseña</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
    </tr>
  
	<?php foreach($cuenta as $row){
		echo "
	<tr>
		<form action='updateC' method='post'>
		
		  <input style='display:none' name='data[]' type='number' value='".$row['admin_id']."'>
				
		  <th  scope='col'><input name='data[]' type='text' value='".$row['admin_nom']."'></th>
		  <th scope='col'><input name='data[]' type='text' value='".$row['admin_correo']."'></th>
		  <th scope='col'><input name='data[]' type='text' value='".$row['admin_pass']."'></th>
		  <th scope='col'><a class='btn' href='index.php?c=user&a=deleteC&id=".$row['admin_id']."'>Eliminar</button></th>
		  <th scope='col'><button>Guardar Cambios</button></th>
		</form>
    </tr>";

	 
	 } ?> 
 	<tr>
 		<form action="createC" method='post'>
 			
			<th scope='col'><input name="data[]" type='text' value=''</th>
			  <th scope='col'><input name="data[]" type='text' value=''</th>
			
			  <th scope='col'><input name="data[]" type='text' value=''</th>
			 
			<th scope='col'><button>insertar</button></th>

 		</form>
  		
    </tr>
 </tbody>
 </table>
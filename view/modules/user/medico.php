<?php $medico = $this->model->medico();?>
<table width="300" border="3" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
     
      <th scope="col">Cedula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Descripcion</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
    </tr>
  
	<?php foreach($medico as $row){
		echo "
	<tr>
		<form action='updateM' method='post'>
		
		  <input style='display:none' name='data[]' type='number' value='".$row['med_id']."'>
				
		  <th  scope='col'><input name='data[]' type='text' value='".$row['med_ced']."'></th>
		  <th scope='col'><input name='data[]' type='text' value='".$row['med_nom']."'></th>
		  <th scope='col'><input name='data[]' type='text' value='".$row['med_ape']."'></th>
		  <th scope='col'><input name='data[]' type='text' value='".$row['med_desc']."'></th>
		  <th scope='col'><a class='btn' href='index.php?c=user&a=deleteM&id=".$row['med_id']."'>Eliminar</button></th>
		  <th scope='col'><button>Guardar Cambios</button></th>
		</form>
    </tr>";

	 
	 } ?> 
 	<tr>
 		<form action="createM" method='post'>
 			
			<th scope='col'><input name="data[]" type='text' value=''</th>
			  <th scope='col'><input name="data[]" type='text' value=''</th>
			
			  <th scope='col'><input name="data[]" type='text' value=''</th>
			  <th scope='col'><input name="data[]" type='text' value=''</th>
			<th scope='col'><button>insertar</button></th>

 		</form>
  		
    </tr>
 </tbody>
 </table>
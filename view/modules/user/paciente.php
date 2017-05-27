<?php $paciente = $this->model->paciente();?>
<table width="300" border="3" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
     
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Fecha</th>
      <th scope="col">Genero</th>
      <th scope="col">Descripcion</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
    </tr>
  
	<?php foreach($paciente as $row){
		echo "
	<tr>
		<form action='update' method='post'>
		
		  <input style='display:none' name='data[]' type='number' value='".$row['pac_id']."'>
				
		  <th  scope='col'><input name='data[]' type='text' value='".$row['pac_nom']."'></th>
		  <th scope='col'><input name='data[]' type='text' value='".$row['pac_ape']."'></th>
		  <th scope='col'><input name='data[]' type='date' value='".$row['pac_fecha_nac']."'></th>
		  <th scope='col'><input name='data[]' type='text' value='".$row['pac_genero']."'></th>
		  <th scope='col'><input name='data[]' type='text' value='".$row['pac_desc']."'></th>
		  <th scope='col'><a class='btn' href='index.php?c=user&a=delete&id=".$row['pac_id']."'>Eliminar</button></th>
		  <th scope='col'><button>Guardar Cambios</button></th>
		</form>
    </tr>";

	 
	 } ?> 
 	<tr>
 		<form action="create" method='post'>
 			
			<th scope='col'><input name="data[]" type='text' value=''</th>
			  <th scope='col'><input name="data[]" type='text' value=''</th>
			  <th scope='col'><input name="data[]" type='date' value=''</th>
			  <th scope='col'><input name="data[]" type='text' value=''</th>
			  <th scope='col'><input name="data[]" type='text' value=''</th>
			<th scope='col'><button>insertar</button></th>

 		</form>
  		
    </tr>
 </tbody>
 </table>
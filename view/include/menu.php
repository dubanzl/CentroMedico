<nav >
	<div class="nav wraper mn">
	  <a href="" class="brand-logo">CentroMedico</a>
	   <ul class="right hide-on-med-and-down ">
	   	<li><a href="inicio">Inicio</a></li>
	   	<li><a href="#service">servicios</a></li>
	   	<li><a href="#footer">contactanos</a></li>
	   	  <a class="waves-effect waves-light btn" href="#modal1">iniciar sesion</a></li>	   	
	   </ul>	 	
	</div>	
</nav>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h2 class="titulo">Iniciar sesion</h2>
    </div>
    <div class="row ">
    <form class="col s12 " action="index.php?c=website&a=acceso" method="post">
      <div class="row ">
        <div class="input-field col s12">
          <i class="material-icons prefix">email</i>
          <input name="data[]" id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Correo</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">lock</i>
          <input name="data[]" id="icon_telephone" type="password" class="validate">
          <label for="icon_telephone">Contraseña</label>
        </div>
        
        	<button class="btn container offset-s3 col s6 offset-s3">inciar sesion</button>
       
      </div>
    </form>
  </div>

    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">cerrar</a>
    </div>
  </div>
  </div>
<div id="registrarse-container">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Registrarse</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Nombre <span id="campoObligatorio">*</span></label>
    		<input type="text" name="name" class="form-control" required/>
    	</div>
    	<div class="form-group">
    		<label>Primer Apellido <span id="campoObligatorio">*</span></label>
    		<input type="text" name="apellido1" class="form-control" required/>
    	</div>
    	<div class="form-group">
    		<label>Email <span id="campoObligatorio">*</span></label>
    		<input type="email" name="email" class="form-control" required/>
    	</div>
        <div class="form-group">
            <label>Contraseña <span id="campoObligatorio">*</span></label>
            <input type="password" name="contrasena" class="form-control" required/>
        </div>
        <p>Todos los campos marcados con <span id="campoObligatorio">*</span> son obligatorios.</p>
        <div id="submitButton">
    	    <input class="btn btn-danger" name="submit" type="submit" value="Registarse" />
        </div>
    </form>
  </div>
</div>
</div>
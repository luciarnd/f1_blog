<div id="iniciarsesion-container">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Iniciar Sesión</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Email</label>
    		<input type="text" name="email" class="form-control" required/>
    	</div>
    	<div class="form-group">
    		<label>Contraseña</label>
    		<input type="password" name="contrasena" class="form-control" required/>
    	</div>
        <div id="submitButton">
            <input class="btn btn-danger" name="submit" type="submit" value="Iniciar Sesión" />
        </div>
    </form>
  </div>
</div>
</div>
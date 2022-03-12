<?php include_once("../../m/SQLConexion.php");
$sql = new SQLConexion();
$row_maestro = $sql->obtenerResultado("CALL sp_select_maestro_id('".$_POST['id_maestro']."') ");

$maestro = $row_maestro[0]['nombre_maestro'];
$apellido_paterno = $row_maestro[0]['apellido_paterno'];
$apellido_materno = $row_maestro[0]['apellido_paterno'];
$correo =  $row_maestro[0]['correo'];
$fecha_nac = $row_maestro[0]['fecha_nacimiento'];
$matricula = $row_maestro[0]['matricula'];
$curp = $row_maestro[0]['curp'];
$telefono_cel = $row_maestro[0]['telefono_celular'];
$telefono_casa = $row_maestro[0]['telefono_casa'];
$direccion = $row_maestro[0]['direccion'];
$grado_academico = $row_maestro[0]['grado_academico'];
$id_maestro = $row_maestro[0]['id_maestro'];

?>
<div class="col-md-12">
	<div class="card">
	  <div class="card-header">
	    <h5 class="title">Datos del maestro</h5>
	  </div>
	  <div class="card-body">
	    <div class="row">
	      <div class="col-md-4 px-1">
	        <div class="form-group">
	          <label>Nombre</label>
	          <input type="text" id="nombre_maestro" class="form-control" placeholder="Nombre" value="<?php echo htmlspecialchars($maestro,  ENT_QUOTES, 'UTF-8'); ?>">
	        </div>
	      </div>
	      <div class="col-md-4 pl-1">
	        <div class="form-group">
	          <label for="apellido_paterno">Apellido Paterno</label>
	          <input type="text" id="apellido_paterno" class="form-control" placeholder="Paterno" value="<?php echo htmlspecialchars($apellido_paterno,  ENT_QUOTES, 'UTF-8'); ?>">
	        </div>
	      </div>
	      <div class="col-md-4 pl-1">
	        <div class="form-group">
	          <label for="apellido_materno">Apellido Materno</label>
	          <input type="text" id="apellido_materno" class="form-control" placeholder="Materno" value="<?php echo htmlspecialchars($apellido_materno,  ENT_QUOTES, 'UTF-8'); ?>">
	        </div>
	      </div>
	    </div>
	    <div class="row">
	      <div class="col-md-4">
	        <label for="correo">Correo Electronico</label>
	        <input id="correo" type="mail" id="correo" class="form-control" placeholder="Correo Electronico" value="<?php echo htmlspecialchars($correo,  ENT_QUOTES, 'UTF-8'); ?>">
	      </div>
	      <div class="col-md-4">
	        <label for="fec_nac">Fecha de Nacimiento</label>
	        <input id="fec_nac" type="date" id="fec_nac" class="form-control" placeholder="Fecha de nacimiento" value="<?php echo htmlspecialchars($fecha_nac,  ENT_QUOTES, 'UTF-8'); ?>">
	      </div>
	    </div>
	    <div class="row">
	      <div class="col-md-6 pr-1">
	        <div class="form-group">
	          <label>Matricula</label>
	          <input type="number" id="matricula" class="form-control" placeholder="Matricula" value="<?php echo htmlspecialchars($matricula,  ENT_QUOTES, 'UTF-8'); ?>">
	        </div>
	      </div>
	      <div class="col-md-6 pl-1">
	        <div class="form-group">
	          <label>CURP</label>
	          <input type="text" id="curp" class="form-control" placeholder="CURP" value="<?php echo htmlspecialchars($curp,  ENT_QUOTES, 'UTF-8'); ?>">
	        </div>
	      </div>
	    </div>
	    <div class="row">
	      <div class="col-md-6">
	        <div class="form-group">
	          <label>Telefono Celular</label>
	          <input type="number" id="tel_celular" class="form-control" placeholder="Telefono Celular" value="<?php echo htmlspecialchars($telefono_cel,  ENT_QUOTES, 'UTF-8'); ?>">
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="form-group">
	          <label>Telefono Casa</label>
	          <input type="number" id="tel_casa" class="form-control" placeholder="Telefono Casa" value="<?php echo htmlspecialchars($telefono_casa,  ENT_QUOTES, 'UTF-8'); ?>">
	        </div>
	      </div>
	    </div>
	    <div class="row">
	    	<div class="col-md-12">
		        <div class="form-group">
		          <label>Direccion</label>
		          <input type="text" id="direccion" class="form-control" placeholder="Calle Numero Colonia, Municipio" value="<?php echo htmlspecialchars($direccion,  ENT_QUOTES, 'UTF-8'); ?>">
		        </div>
	      	</div>
	    </div>
	    <div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<label>Grado academico</label>
					<input type="text" id="grado_academico" class="form-control" placeholder="Licenciatura, Ingenieria..." value="<?php echo htmlspecialchars($grado_academico,  ENT_QUOTES, 'UTF-8'); ?>">
				</div>
			</div>
	    </div>
	  </div>
	  <div class="card-footer">
	    <a href="#!" class="btn btn-primary btn-block" id="modificar_maestro" data-id="<?php echo htmlspecialchars($id_maestro,  ENT_QUOTES, 'UTF-8'); ?>">Modificar maestro</a>
	  </div>
	</div>
</div>

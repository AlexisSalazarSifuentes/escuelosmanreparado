<?php include_once("../../m/SQLConexion.php");
$sql = new SQLConexion();
$row_alumno = $sql->obtenerResultado("CALL sp_select_alumno_id('".$_POST['id_alumno']."') ");

$nombre = $row_alumno[0]['nombre']; 
$apellido_paterno = $row_alumno[0]['apellido_paterno'];
$apellido_materno = $row_alumno[0]['apellido_materno'];
$correo = $row_alumno[0]['correo'];
$fecha = $row_alumno[0]['fecha_nacimiento'];
$metricula = $row_alumno[0]['matricula'];
$curp = $row_alumno[0]['curp']; 
$telefono_celular = $row_alumno[0]['telefono_celular'];
$telefono_casa = $row_alumno[0]['telefono_casa'];
$direccion =  $row_alumno[0]['direccion'];
$id_alumno = $row_alumno[0]['id_alumno'];

?>
<div class="col-md-12">
	<div class="card">
	  <div class="card-header">
	    <h5 class="title">Datos del Alumno</h5>
	  </div>
	  <div class="card-body">
	    <div class="row">
	      <div class="col-md-4 px-1">
	        <div class="form-group">
	          <label>Nombre</label>
	          <input type="text" id="nombre_alumno" class="form-control" placeholder="Nombre" value="<?php echo $nombre; ?>">
	        </div>
	      </div>
	      <div class="col-md-4 pl-1">
	        <div class="form-group">
	          <label for="exampleInputEmail1">Apellido Paterno</label>
	          <input type="text" id="apellido_paterno" class="form-control" placeholder="Paterno" value="<?php echo $apellido_paterno; ?>">
	        </div>
	      </div>
	      <div class="col-md-4 pl-1">
	        <div class="form-group">
	          <label for="exampleInputEmail1">Apellido Materno</label>
	          <input type="text" id="apellido_materno" class="form-control" placeholder="Materno" value="<?php echo $apellido_materno; ?>">
	        </div>
	      </div>
	    </div>
	    <div class="row">
	      <div class="col-md-4">
	        <label for="correo">Correo Electronico</label>
	        <input id="correo" type="mail" id="correo" class="form-control" placeholder="Correo Electronico" value="<?php echo $correo; ?>">
	      </div>
	      <div class="col-md-4">
	        <label for="fec_nac">Fecha de Nacimiento</label>
	        <input id="fec_nac" type="date" id="fec_nac" class="form-control" placeholder="Fecha de nacimiento" value="<?php echo $fecha_naciemiento; ?>">
	      </div>
	      <div class="col-md-4">
	        <label for="sexo">Sexo</label>
	        <select name="sexo" id="sexo" class="form-control">
	          	<option selected="disabled">Selecciona un sexo</option>
	          	<option value="masculino">Masculino</option>
	          	<option value="femenino">Femenino</option>
	          </select>
	      </div>
	    </div>
	    <div class="row">
	      <div class="col-md-6 pr-1">
	        <div class="form-group">
	          <label>Matricula</label>
	          <input type="number" id="matricula" class="form-control" placeholder="Matricula" value="<?php echo
	          $matricula;  ?>">
	        </div>
	      </div>
	      <div class="col-md-6 pl-1">
	        <div class="form-group">
	          <label>CURP</label>
	          <input type="text" id="curp" class="form-control" placeholder="CURP" value="<?php echo $curp;?>">
	        </div>
	      </div>
	    </div>
	    <div class="row">
	      <div class="col-md-6">
	        <div class="form-group">
	          <label>Telefono Celular</label>
	          <input type="number" id="tel_celular" class="form-control" placeholder="Telefono Celular" value="<?php echo $telefono_celular; ?>">
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="form-group">
	          <label>Telefono Casa</label>
	          <input type="number" id="tel_casa" class="form-control" placeholder="Telefono Casa" value="<?php echo $telefono_casa ?>">
	        </div>
	      </div>
	    </div>
	    <div class="row">
	    	<div class="col-md-12">
		        <div class="form-group">
		          <label>Direccion</label>
		          <input type="text" id="direccion" class="form-control" placeholder="Calle Numero Colonia, Municipio" value="<?php echo $direccion ?>">
		        </div>
	      	</div>
	    </div>
	    <div class="row">
	      <div class="col-md-6">
	        <div class="form-group">
	          <label>Carrera</label>
	          <select name="carrera" id="carrera" class="form-control">
	          	<option selected="disabled">Selecciona una carrera</option>
	          	<option value="1">IDGS</option>
	          </select>
	        </div>
	      </div>
	      <div class="col-md-6">
	        <div class="form-group">
	          <label>Grupo</label>
	          <select name="grupo" id="grupo" class="form-control">
	          	<option selected="disabled">Selecciona un grupo</option>
	          	<option value="1">8°A</option>
	          </select>
	        </div>
	      </div>
	    </div>
	  </div>
	  <div class="card-footer">
	    <a href="#!" class="btn btn-primary btn-block" id="btn_modificar_alumno" data-id="<?php echo $id_alumno ?>">Modificar Alumno</a>
	  </div>
	</div>
</div>
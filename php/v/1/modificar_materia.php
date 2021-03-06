<?php include_once("../../m/SQLConexion.php");
$sql = new SQLConexion();
$row_materia = $sql->obtenerResultado("CALL sp_select_materia_id('".$_POST['id_materia']."') ");
$nombre_materia = $row_materia[0]['nombre_materia'];
$siglas = $row_materia[0]['siglas'];
$horas = $row_materia[0]['horas'];
$id_materia = $row_materia[0]['id_materia'];

?>
<div class="col-md-12">
	<div class="card">
	  <div class="card-header">
	    <h5 class="title">Materias</h5>
	  </div>
	  <div class="card-body">
	    <div class="row">
	      <div class="col-md-4 px-1">
	        <div class="form-group">
	          <label>Materia</label>
	          <input type="text" id="nombre_materia" class="form-control" placeholder="Materia" value="<?php echo htmlspecialchars($nombre_materia,  ENT_QUOTES, 'UTF-8');?>">
	        </div>
	      </div>
	      <div class="col-md-4 pl-1">
	        <div class="form-group">
	          <label for="apellido_paterno">Siglas</label>
	          <input type="text" id="siglas" class="form-control" placeholder="Siglas" value="<?php echo htmlspecialchars($siglas,  ENT_QUOTES, 'UTF-8') ; ?>">
	        </div>
	      </div>
	      <div class="col-md-4 pl-1">
	        <div class="form-group">
	          <label for="apellido_materno">Horas(a la semana)</label>
	          <input type="number" id="horas" class="form-control" placeholder="Horas" value="<?php echo htmlspecialchars($horas,  ENT_QUOTES, 'UTF-8'); ?>">
	        </div>
	      </div>
	    </div>
	  <div class="card-footer">
	    <a href="#" class="btn btn-primary btn-block" id="modificar_materia" data-id="<?php echo htmlspecialchars($id_materia,  ENT_QUOTES, 'UTF-8'); ?>">Modificar materia</a>
	  </div>
	</div>
</div>

<?php include_once ("../../m/SQLConexion.php");
$sql = new SQLConexion();
$row_carreras = $sql->obtenerResultado("CALL sp_select_carrera_id('".$_POST['id_carrera']."') ");

$nombre = $row_carreras[0]['nombre'];
$abreviatura = $row_carreras[0]['abreviatura'];
$id_carrera = $row_carreras[0]['id_carrera'];
?>
<div class="col-md-12">
	<div class="card">
		<div class="card-header">
			<h5 class="title">Carreras</h5>
		</div>
		<div class="card-body">
			<div class="row">
				<div class="col-md-4 px-1">
					<div class="form-group">
						<label>Nombre Carreras</label>
						<input type="text" id="nombre_carrera" class="form-control" placeholder="Nombre" value="<?php echo htmlspecialchars($nombre,  ENT_QUOTES, 'UTF-8'); ?>">
					</div>
				</div>
				<div class="col-md-4 pl-1">
					<div class="form-group">
						<label for="abreviatura">Abrieviatura</label>
						<input type="text" id="abreviatura" class="form-control" placeholder="Abrieviatura" value="<?php echo htmlspecialchars($abeviatura,  ENT_QUOTES, 'UTF-8'); ?>">
					</div>
				</div>
			</div>
		</div>
		<div class="card-footer">
    		<a href="#!" class="btn btn-primary btn-block" id="modificar_carrera" data-id="<?php echo htmlspecialchars($id_carrera,  ENT_QUOTES, 'UTF-8'); ; ?>">Modificar carrera</a>
		</div>
	</div>

</div>	  





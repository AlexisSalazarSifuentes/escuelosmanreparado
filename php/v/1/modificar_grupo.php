<?php
include_once("../../m/SQLConexion.php");
$sql = new SQLConexion();

$row_carreras = $sql->obtenerResultado("CALL sp_select_carreras()");
$total_row_carreras = count($row_carreras);

$row_grupo = $sql->obtenerResultado("CALL sp_select_grupo_id('".$_POST['id_grupo']."')");
$total_row_grupo = count($row_grupo);

$seccion = $row_grupo[0]['seccion'];
$cuatri = $row_grupo[0]['cuatri'];
$id_grupo = $row_grupo[0]['id_grupo'];
?>
<div class="col-md-12">
	<div class="card">
	  <div class="card-header">
	    <h5 class="title">Grupos</h5>
	  </div>
	  <div class="card-body">
	    <div class="row">
	      <div class="col-md-4 pl-1">
		        <div class="form-group">
		          <label for="abreviatura">Sección</label>
		          <input type="text" id="seccion" class="form-control" placeholder="Sección" value="<?php echo htmlspecialchars($nombre,  ENT_QUOTES, 'UTF-8'); $seccion; ?>">
		        </div>
      		</div>
	      <div class="col-md-4 pl-1">
	        <div class="form-group">
	          <label for="abreviatura">Cuatrimestre</label>
	          <input type="number" id="cuatrimestre" class="form-control" placeholder="Cuatrimeste" value="<?php echo htmlspecialchars($cuatri,  ENT_QUOTES, 'UTF-8'); ?>">
	        </div>
	      </div>
	    </div>
		<div class="col-md-4">
			<label for="carrera">Carrera</label>
			<select name="carrera" id="carrera" class="form-control">
				<option selected="disabled">Selecciona una carrera</option>
			<?php for ($i=0; $i < $total_row_carreras ; $i++) { 
				$abreviatura = $row_carreras[$i]['abreviatura'];
				?>
				<option value="<?php echo $row_carreras[$i]['id_carrera']; ?>"
					<?php 
						if ($row_grupo[0]['id_carrera']==$row_carreras[$i]['id_carrera']) {
						echo "selected";
					}
					?>
				><?php echo $abreviatura; ?>
				</option>
			<?php } ?>
			</select>
		</div>
	  <div class="card-footer">
	    <a href="#!" class="btn btn-primary btn-block" id="modificar_grupo" data-id="<?php echo htmlspecialchars($id_grupo,  ENT_QUOTES, 'UTF-8');?>">Modificar grupo</a>
	  </div>
	</div>
</div>
</div>





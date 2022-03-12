<?php 
include_once("../../m/SQLConexion.php");
$sql = new SQLConexion();
$row_alumnos = $sql->obtenerResultado("CALL sp_select_search_alumno('".$_POST['paterno']."') ");
$total_row_alumnos = count($row_alumnos);
$busqueda=$_POST['paterno'];
?>
<div class="col-md-12">
  <div class="card card-plain">
    <div class="card-header">
      <h4 class="card-title">Alumnos</h4>
      <div class="row">
        <div class="col-md-9">
          <input class="form-control" type="search" name="busqueda_alumno" id="busqueda_alumno" placeholder="Busqueda por apellido paterno" value="<?php echo htmlspecialchars($busqueda,  ENT_QUOTES, 'UTF-8') ; ?>">
        </div>
        <div class="col-md-3"><a href="#!" id="btn_buscar_alumno" class="btn btn-secundary">Buscar</a></div>
      </div>
      <p class="category">Resultados de la Busqueda: "<?php echo htmlspecialchars($busqueda,  ENT_QUOTES, 'UTF-8') ; ?>"</p>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table id="tbl_alumnos" class="table">
          <thead class=" text-primary">
            <th>ID</th>
            <th>Nombre(s)</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Sexo</th>
            <th>Fecha de Nacimiento</th>
            <th>Correo Eletrónico</th>
            <th>Telefono Celular</th>
            <th>Telefono Casa</th>
            <th>Dirección</th>
            <th>CURP</th>
            <th>Matricula</th>
            <th>Grupo</th>
            <th>Carrera</th>
          </thead>
          <tbody>
            <?php for ($i=0; $i < $total_row_alumnos ; $i++) { 
              $id_alumno = $row_alumnos[$i]['id_alumno'];
              $nombre = $row_alumnos[$i]['nombre'];
              $apellido_paterno = $row_alumnos[$i]['apellido_paterno'];
              $apellido_materno = $row_alumnos[$i]['apellido_materno'];
              $sexo = $row_alumnos[$i]['sexo'];
              $fecha_nacimiento = $row_alumnos[$i]['fecha_nacimiento'];
              $correo = $row_alumnos[$i]['correo'];
              $telefono_celular = $row_alumnos[$i]['telefono_celular'];
              $telefono_casa = $row_alumnos[$i]['telefono_casa'];
              $direccion = $row_alumnos[$i]['direccion'];
              $curp = $row_alumnos[$i]['curp'];
              $matricula = $row_alumnos[$i]['matricula'];
            ?>
            <tr>
              <td><?php echo htmlspecialchars($id_alumno,  ENT_QUOTES, 'UTF-8');?></td>
              <td><?php echo htmlspecialchars($nombre,  ENT_QUOTES, 'UTF-8');?></td>
              <td><?php echo htmlspecialchars($apellido_paterno,  ENT_QUOTES, 'UTF-8') ; ?></td>
              <td><?php echo htmlspecialchars($apellido_materno,  ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($sexo,  ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($fecha_nacimiento,  ENT_QUOTES, 'UTF-8') ; ?></td>
              <td><?php echo htmlspecialchars($correo,  ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($telefono_celular,  ENT_QUOTES, 'UTF-8') ; ?></td>
              <td><?php echo htmlspecialchars($telefono_casa,  ENT_QUOTES, 'UTF-8') ; ?></td>
              <td><?php echo htmlspecialchars($direccion,  ENT_QUOTES, 'UTF-8') ; ?></td>
              <td><?php echo htmlspecialchars($curp,  ENT_QUOTES, 'UTF-8') ; ?></td>
              <td><?php echo htmlspecialchars($matricula,  ENT_QUOTES, 'UTF-8') ; ?></td>
              <td>IDGS</td>
              <td>8°A</td>
              <td><a href="#!" id="editar_alumno" data-id="<?php echo htmlspecialchars($id_alumno,  ENT_QUOTES, 'UTF-8'); ?>" title="">Modificar</a></td>
              <td><a href="#!" id="eliminar_alumno" data-id="<?php echo htmlspecialchars($id_alumno,  ENT_QUOTES, 'UTF-8'); ?>" title="">Eliminar</a></td>
            <tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script src="../js/jquery.dataTables.min.js"></script>
<script src="../js/dataTables.bootstrap4.min.js"></script>
<script src="../js/datatables.js"></script>

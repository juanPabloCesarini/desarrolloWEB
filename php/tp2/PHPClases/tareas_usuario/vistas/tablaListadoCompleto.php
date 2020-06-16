
<div class="agenda-transp table-responsive">
<table class="table ">
  <thead>
    <tr class="agenda">
      <th scope="col"><p class="txt-table text-info">Fecha</p></th>
      <th scope="col"><p class="txt-table text-info">Tiempo</p></span></th>
      <th scope="col"><p class="txt-table text-info">Título</p></th>
      <th scope="col"><p class="txt-table text-info">Descripción</p></th>
      <th scope="col"><p class="txt-table text-info">Responsables</p></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
      <?php
        foreach ($agenda as $work) {
          $fechaTarea=date('d/m/Y',strtotime($work['fecha']));
          echo "<tr>
                  <th scope='row'>{$fechaTarea}</th>
                  <td>{$work['tiempo']}</td>
                  <td>{$work['descripcion']}</td>
                  <td>{$work['observaciones']}</td>
                  <td>{$work['apellido']}, {$work['nombre']}</td>
                  <td>
                  <a href='../vistas/tarea_form_modificar.php?id={$work['idTareas']}'>
                    <p class='btn'><span style='color: #000;' class='icon-pencil2'></span></p>
                  </a>
                  </td>
                  <td>
                  <a href='../controladores/borrar.php?id={$work['idTareas']}'>
                  <p class='btn'><span style='color: #000;' class='icon-bin'></span></p>
                  </td>
                </tr>";
            } 
        ?>
  </tbody>
</table>
</div>
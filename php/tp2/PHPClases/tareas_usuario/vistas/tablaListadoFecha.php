    <?php
        if (count($listaDeFecha) > 0) {
        $fechaTarea=date('d/m/Y', strtotime($listaDeFecha[0]->getFecha()));
        echo "<h3 class='h3 text-white'>Agenda del dia: {$fechaTarea}</h3>
          <div class='agenda-transp table-responsive'>
               <table class='table'>
                    <thead>
                        <tr class='calendario'>
                            <th scope='col'><p class='txt-table text-info'>Tiempo</p></th>
                            <th scope='col'><p class='txt-table text-info'>Título</p></th>
                            <th scope='col'><p class='txt-table text-info'>Descripción</p></th>
                            <th scope='col'><p class='txt-table text-info'>Responsables</p></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>";
        foreach ($listaDeFecha as $reg) {
            echo
                            "<tr>
                                <td>{$reg->getTiempo()} horas</td>
                                <td>{$reg->getDescripcion()}</td>
                                <td>{$reg->getObservaciones()}</td>
                                <td>{$reg->getApellido()}, {$reg->getNombre()}</td>
                                <td><a href='../vistas/tarea_form_modificar.php?id={$reg->getIdTareas()}'><p class='btn'><span style='color: #000;' class='icon-pencil2'></span></p></a></td>
                        <td>
                        <a href='../controladores/borrar.php?id={$reg->getIdTareas()}'><p class='btn'><span style='color: #000;' class='icon-bin'></span></p></a></td>
                            </tr>";
        }
        echo "</tbody>
                     </table> </div>";
    
        }else{
            $fecha = date("d/m/Y", strtotime($_POST['fecha']));
            echo "<h3 class='h3 text-white'>Agenda del dia: {$fecha} SIN ACTIVIDADES</h3>";
        }
    
            
         ?>
 
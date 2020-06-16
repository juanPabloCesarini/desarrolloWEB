
<?php
    echo "<h3 class='h3 text-white'>Agenda de: {$listaResp[0]->getApellido()}, 
                                               {$listaResp[0]->getNombre()}
          </h3>
          <div class='agenda-transp table-responsive'>
               <table class='table'>
                    <thead>
                        <tr class='footer'>
                        <th scope='col'><p class='txt-table text-info'>Fecha</p></th>
                        <th scope='col'><p class='txt-table text-info'>Tiempo</p></th>
                        <th scope='col'><p class='txt-table text-info'>Título</p></th>
                        <th scope='col'><p class='txt-table text-info'>Descripción</p></th>
                        <th></th>
                        <th></th>
                        </tr>
                    </thead>";
                    foreach ($listaResp as $reg) {
                        $fechaTarea=date('d/m/Y', strtotime($reg->getFecha()));
                        echo 
                            "<tr>
                                <td>{$fechaTarea}</td>
                                <td>{$reg->getTiempo()}</td>
                                <td>{$reg->getDescripcion()}</td>
                                <td>{$reg->GetObservaciones()}</td>
                                <td>
                                <a href='../vistas/tarea_form_modificar.php?id={$reg->getIdTareas()}'>
                                <p class='btn'>
                                    <span style='color: #000;' class='icon-pencil2'></span>
                                </p>
                                </a></td>
                                <td>
                                <a href='../controladores/borrar.php?id={$reg->getIdTareas()}'>
                                <p class='btn'>
                                    <span style='color: #000;' class='icon-bin'></span>
                                </p>
                                </a></td>
                            </tr>";
                    }
                echo "</tbody>
                     </table> </div>";
            
         ?>
 
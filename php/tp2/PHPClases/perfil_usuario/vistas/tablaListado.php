<table class="table">
  <thead>
    <tr>
      <th scope="col"><span style="color: #663800; font-size:25px;" class="icon-file-numbers"></span></th>
      <th scope="col"><span style="color: #663800; font-size:25px;" class="icon-user"></span></th>
      <th scope="col"><span style="color: #663800; font-size:25px;" class="icon-user"></span></th>
      <th scope="col"><span style="color: #663800; font-size:25px;" class="icon-mail"></span></th>
      <th scope="col"><span style="color: #663800; font-size:25px;" class="icon-phone"></span></th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php
      foreach ($consulta as $usuario) {
      echo "
      <th scope='row'>{$usuario->getCodigo()}</th>
      <td>{$usuario->getApellido()}</td>
      <td>{$usuario->getNombre()}</td>
      <td>{$usuario->getMail()}</td>
      <td>{$usuario->getTelefono()}</td>
      <td>
      <a href='../controladores/form_usuario_tabla.php?id={$usuario->getId()}'><p class='btn'><span style='color: #663800;' class='icon-pencil2'></span></p></a>
      </td>
      <td>
      <a href='../controladores/borrar.php?id={$usuario->getId()}'><p class='btn'><span style='color: #663800;' class='icon-bin'></span></p></a></td>
    </tr>";
     }

     ?>
  </tbody>
</table>

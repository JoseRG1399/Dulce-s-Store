
<?php 
include('header.php');
include('config.php');

$consulta = "SELECT * FROM productos";

if ($resultado = $mysqli->query($consulta)) {
    echo '<table class="table" style="border:  4px groove #171F40; text-align:center;">
    <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Precio</th>
    </tr>
  </thead>
  <tbody>
    ';

    /* obtener el array de objetos */
    while ($fila = $resultado->fetch_row()) {
        echo '<th scope="row">'.$fila[0].'</th>';
        echo '<td>'.$fila[1].'</td>';
        echo '<td>'.$fila[2].'</td>';
        echo '<td>'.$fila[3].'</td>';
        echo '<td>'.$fila[4].'</td></tr>';
    }
    echo '</tbody></table>';
    /* liberar el conjunto de resultados */
    $resultado->close();
}

/* cerrar la conexión */
$mysqli->close();
?>
<div class="container">
<div class="row">
 <div class="col-sm-12 borde1" style="position: relative; top:3rem;">
 <form action="confelimi.php" method="post">
<table class="table table-hover" style="text-align: center;">
  <tr>
  <td>Ingresar id del producto que desea eliminar</td>
  <td><input name="prod"type="text"></td>
  <td>
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Eliminar">Remove Product</button>
</td>
  </tr>
</table>
</form>
</div>
</div>
</div>

  <?php include'footer.php';?>
<?php 
$id = $_GET['id'];
include'config.php';
include'header.php';
$mostrar=false;
$consulta= "SELECT * FROM productos WHERE id=".$id;
    /* obtener el array de objetos */
    echo '<h1>Confirme su pedido</h1>';
    if ($resultado = $mysqli->query($consulta)) {

    echo '<table class="table-dark table"><th>Id</th><th>Nombre</th><th>Descripción</th><th>Existencia</th><th>Precio</th><th>Categoria</th>';

    while ($fila = $resultado->fetch_row()) {
        echo'<tr>
            <td>'.$fila[0].'</td><td>'.$fila[1].'</td><td>'.$fila[2].'</td><td>'.$fila[3].'</td><td>'.$fila[4].'</td><td>'.$fila[6].'</td><td>';
            if($fila[3]>0){
                $cantidad=$fila[3];
                $mostrar=true;
            echo'En existencias</td>';
            }else{
                echo'Agotado';
            }
            echo '</tr>';
    }
    echo '</table>';
    
    /* liberar el conjunto de resultados */
    $resultado->close();
}
/* cerrar la conexión */
$mysqli->close();
if($mostrar==true){
    echo' <div align="center" style="margin:0 auto;width:600px;">
    <form action="pedidos.php" method="POST">
    <input type="hidden" name="cantidad" value="'.$cantidad.'" required editable="false"></input><br>
    <label>Dirección</label><textarea type="text" name="direccion" required></textarea><br>
    <label>Telefono</label><input type="text" name="telefono" required></input><br>
    <button type="submit" name="comprar" value="'.$id.'">Comprar</button>
    </form>
    </div>
    ';

}




include'footer.php';
?>
<?php
include'config.php';
include'header.php';
$id=$_POST['comprar'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$cantidad=$_POST['cantidad']-1;
$fecha=date("d/m/y");
$hora=strftime("%H-%M",time());
$nombre=$_SESSION['nom'];
$consulta="UPDATE productos SET cantidad=".$cantidad." WHERE id=".$id;

if(isset($_POST['comprar'])){
    
    if ($resultado = $mysqli->query($consulta)) {
        $consulta2="INSERT INTO pedidos(nombre, cantidad, fecha, hora, direccion, telefono) VALUES('$nombre',1,'$fecha','$hora','$direccion','$telefono')";
        if($mysqli->query($consulta2)) {
            echo'<h1>Su compra se realizo con exito</h1>';
            //echo '<img src="" alt="aqui va la imagen">';
        }else{
            echo'No se pudo realizar la compra';
        }

    
    }
}
include'footer.php';





?>
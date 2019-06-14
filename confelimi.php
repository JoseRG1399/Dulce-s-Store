<?php
$emi=$_POST['prod'];
$conec=mysqli_connect("localhost","root","","panaderia") or die("Error en consulta");
if(!$conec){
	echo "Error, fallo en coneccion del servidor";
}else{
	mysqli_query($conec,"DELETE from `productos` where id=$emi") or die ("Error en consulta");
}
header('Location:index.php');
end();
?>
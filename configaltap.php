<?php
$nombre=$_POST['prod'];
$descrip=$_POST['desc'];
$cantidad=$_POST['canti'];
$precio=$_POST['pre'];
$image=$_POST['imach'];
$cate=$_POST['categoria'];
$conec=mysqli_connect("localhost","root","","panaderia") or die("Error en consulta");
if(!$conec){
	echo "Error, fallo en coneccion del servidor";
}else{
	mysqli_query($conec,"insert into `productos` values(default, '$nombre','$descrip','$cantidad','$precio','$image','$cate')") or die ("Error en consulta");
}
header('Location:altaprod.php');
end();
?>



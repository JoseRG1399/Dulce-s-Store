<?php

$nom=$_POST['nombre'];
$contra=$_POST['contrasena'];

$conec=mysqli_connect("localhost","root","","panaderia") or die("Error. Favor de contactar al administrador");

if(!$conec){
	echo "Error";
}
else{
	 $consulta=mysqli_query($conec,"select * from administradores where nombre='$nom' and contrasena='$contra'")or die("Error en consulta");
	 $i=mysqli_num_rows($consulta);
	 if($i==1){
		 session_start();
		 $_SESSION['autentificado']=true;
		 $_SESSION['nom']=$nom;
		 $_SESSION['contra']=$contra;
		 $reg=mysqli_fetch_array($consulta);
		 //echo $reg[0];
		
		 header('Location:index.php? id=$reg[0]');
	 }
     else{
		 echo "Error, el usuario o contraseña no existe";
	 }		 
}

?>
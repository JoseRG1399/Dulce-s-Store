<?php

if(isset($_POST['submit'])){
$nom=$_POST['nom'];
$contra=$_POST['contra'];

$conec=mysqli_connect("localhost","root","","panaderia") or die("Error. Favor de contactar al administrador");

if(!$conec){
	echo "Error";
}
else{
	 $consulta=mysqli_query($conec,"select * from usuario where Nick='$nom' and contrasena='$contra'")or die("Error en consulta");
	 $i=mysqli_num_rows($consulta);
	 if($i==1){
		 session_start();
		 $_SESSION['autentificado']=true;
		 $_SESSION['nom']=$nom;
         $reg=mysqli_fetch_array($consulta);
         $_SESSION['id']=$reg['id'];
		 //echo $reg[0];
		
		 header('Location:index.php');
	 }
     else{
		 ?>
		<script>
		 alert('Error, el usuario o contraseña no existe');
		 </script>
		 <?php 
		 echo "Error, el usuario o contraseña no existe";		 
	}		 
}
}
?>
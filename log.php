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
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingreso</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">
</head>
<body style="background-color: #f5f5f5;">
<?php include("nav3.html");?>
<div class="container" style="position: relative; left: 17rem; top: 3rem;">
<div class="col-sm-8 ">
            <div class="col-sm-8 ">
                <form action="" method="POST">
    <table class="table table-dark"; style="border: 3px solid #1f344a; ">
    <tr>
    <td>Usuario</td>
    <td><input type="text" name="nom"></td>
    </tr>
    <tr>
    <td>Contraseña</td>
    <td><input type="password" name="contra"></td>
    </tr>
<tr>
    <td></td>
    <td><button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Acceder ♥</button></td>
</tr>

    </table>
    </form>
    <div class="class row" style="position: relative; left: 7rem;">
        <p> Si aún no tienes cuenta, da clic <a href="registro_user.php" >aquí </a> </p>
       
    </div>
    <div class="class row" style="position: relative; left: 7rem;">
        <p><a href="logadmin.php" >Soy un administrador  </a> </p>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
            <script src="js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
</div>
</div>
</body>
</html>
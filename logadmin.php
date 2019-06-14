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
                <form action="configlogadmin.php" method="POST">
    <table class="table table-dark"; style="border: 3px solid #1f344a; ">
    <tr>
    <td>Nombre del administrador</td>
    <td><input type="text" name="nombre"></td>
    </tr>
    <tr>
    <td>Contraseña</td>
    <td><input type="password" name="contrasena"></td>
    </tr>
<tr>
    <td></td>
    <td><input type="submit" value="Aceptar">  </td>
</tr>

    </table>
    </form>
  

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
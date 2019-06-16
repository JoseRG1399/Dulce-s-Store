<?php include 'config_log.php';?>
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

<div class="container">
    <div class="col"> 
                <form action="" method="POST">
    <table class="table table-dark"; style="border: 3px solid #1f344a; margin: auto; text-align: center;">
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
    <td><button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="submit">Acceder</button></td>
</tr>

    </table>
    </form>
    <br>
    <a href="#ventana1" class="btn-primary btn-lg" data-toggle="modal">Registrar usuario</a>
    <div class="modal fade" id="ventana1">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h4 class="modal-title">REGISTRO DE USUARIO</h4>
    <button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    
    </div>
    <div class="modal-body">
<?php include 'registro_user.php';?>
</div>
    </div>
    </div>
    
   
    
<?php include'footer.php';?>
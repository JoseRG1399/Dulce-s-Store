
                <form action="alta.php" method="post">
<table class="table table-dark">
<tr>
    <td>Nombre</td>
    <td><input type="text" class="form-control" name="nombrrequirede"required></td>
</tr>
<tr>
    <td>Apellido paterno</td>
    <td><input type="text" class="form-control" name="apellipa"required></td>
</tr>
<tr>
    <td>Apellido materno</td>
    <td><input type="text" class="form-control" name="apellima"required></td>
</tr>
<tr>
    <td>Fecha de nacimiento</td>
    <td><input type="date" class="form-control" name="fec_na"required></td>
</tr>
<tr>
    <td>Nacionalidad</td>
    <td> <input type="text"class="form-control" name="pais"required></td>
</tr>
<tr>
    <td>Genero</td>
    <td><input type="text"class="form-control" name="gen"required></td>
</tr>
<tr>
    <td>Telefono</td>
    <td><input type="text" class="form-control" name="tel"required></td>
</tr>
<tr>
    <td>Nick</td>
    <td><input type="text" class="form-control" name="nick"required></td>
</tr>
<tr>
    <td>Contraseña</td>
    <td><input type="password" class="form-control" name="pass"required></td>
</tr>
<tr>
    <td>Confirmar contraseña</td>
    <td><input type="password" class="form-control" name="cpass"required></td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" value="Aceptar"></td>
</tr>
</table>
</form>
</div>
</div>
</div>
<?php include'footer.php';?>
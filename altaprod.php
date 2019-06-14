<?php include'header.php';?>

<div class="container">
<div class="row">
 <div class="col-sm-12 borde1" style="position: relative; top:3rem;">
 <form action="configaltap.php" method="POST">
<table class="table table-hover" style="text-align: center;">
  <tr>
  <td>Nombre del producto</td>
  <td><input name="prod" class="form-control"  maxlength="15" type="text" required></td>
  </tr>
  <tr>
  <td>Descripcion</td>
  <td><input name="desc" class="form-control" maxlength="150" type="text" required></td>
  </tr>
  <tr>
  <td>Cantidad</td>
  <td><input name="canti" class="form-control" maxlength="15" type="text" required></td>
  </tr>
  <tr>
  <td>Precio</td>
  <td><input name="pre" class="form-control" maxlength="15" type="text" required></td>
  </tr>
  <tr>
  <td>Source image</td>
  <td><input name="imach" class="form-control" maxlength="15" type="text" required></td>
  </tr>
  <tr>
  <td>Categoría</td>
  <td> <select name="categoria" id="">
  <option value="Deportes">Deportes</option>
  <option value="Articulos de Hogar">Articulos de hogar</option>
  <option value="Cocina">Cocina</option>
  <option value="Tecnologia">Tecnologia</option>
  </select></td>
  </tr>
  <tr>
  <td></td>
  <td><button class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Subir">Subir producto</button></td>
  
 
  </tr>
 </div>
 
</table>
</form>

</div>

<?php include'footer.php';?>
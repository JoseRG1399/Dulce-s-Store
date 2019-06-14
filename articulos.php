
<?php 
include('header.php');
include('config.php');
$consulta = "SELECT * FROM productos WHERE categoria='Articulos de hogar'";
?>

    <img src="img/home1.jpg" class="img-fluid" width="100%" alt="Responsive image">  
    <h1 style="text-align: center;">Articulos para el hogar</h1>
    <div class="container">
<div class="row">
 <div class="col-sm-12 " style="position: relative; top:3rem;">
 <div class="row">
 <?php include 'confcard.php'?> 
 </div>
</div>
</div>
</div>
<?php include('footer.php')?>
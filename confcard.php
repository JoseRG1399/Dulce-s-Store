<?php if($resultado = $mysqli->query($consulta)):?>
    <div class="row">
        <?php while($fila = $resultado->fetch_row()):?>
            <div class="col-3">
                <div class="card mb-4" >
                    <div class="card-header">
                        <label class="font-weight-bold mb-0"><?php echo $fila[1]; ?></label>
                        <i class="fas fa-heart float-right" style="    font-size: 1.5rem;" ></i>
                    </div>
                    <a class="text-dark" href="comprar.php?id=<?php echo $fila[0];?>" style="text-decoration: none;">
                        <img class="card-img-top" src="<?php echo $fila[5];?>"  alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><?php echo substr($fila[2],0,50);?>...</p>
                            <p class="card-text">Precio $: <?php echo $fila[4];?></p>
                        </div>
                    </a>
                </div>
            </div>
        <?php endwhile;?>
    </div>
<?php endif;?>
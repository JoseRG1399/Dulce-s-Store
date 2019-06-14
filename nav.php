<nav class="navbar navbar-dark bg-dark" >
        <a class="navbar-brand" href="index.php">Dulce's Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="secciones.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Seccioes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="deportes.php">Deportes</a>
          <a class="dropdown-item" href="alimentos.php">Cocina</a>
          <a class="dropdown-item" href="tecnologia.php">Tecnologia</a>
          <a class="dropdown-item" href="articulos.php">Articulos para el hogar</a>
        </div>
                <?php 
                if(isset($_SESSION['nom'])){
                    if($_SESSION['nom']=='Jose RG'){?>
                <li class="nav-item">
                    <a class="nav-link" href="altaprod.php">Dar de alta un producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="bajaprod.php">Eliminar producto</a>
                </li>
                <?php
                    }
                }
                    ?>             
                <li class="nav-item">
                        <a class="nav-link" href="cerrarse.php">Cerrar sesión</a>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
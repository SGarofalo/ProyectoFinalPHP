<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&family=Coming+Soon&family=Galada&family=Indie+Flower&family=Macondo&family=Oregano:ital@0;1&display=swap" rel="stylesheet">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>PedíComish</title>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">PedíComish</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="btn btn-light fw-bold text-dark" aria-current="page" href="agregar.html">Agregar producto</a>
        </li>
      </ul>

      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link me-3 fw-500 text-white" href="login.html">Cerrar Sesión</a>
        </li>
      </ul>
    </div>
  </div>
</nav>




<div class="container">
        <div class="row">
            <?php
            $conexion = mysqli_connect("127.0.0.1", "root", "");
            mysqli_select_db($conexion, "productos");

            $consulta = "SELECT * FROM producto";

            $datos = mysqli_query($conexion, $consulta);
            while ($reg = mysqli_fetch_array($datos)) { ?>
               <div class="col-xs-6 col-sm-4">
                    <div class="card">
                        <img src="data:image/jpg;base64, <?php echo base64_encode($reg['imagen']) ?>" class="card-img-top w-100 imagencard" alt="...">

                        <div class="card-body">
                            <h5 class="card-title"><?php echo ucwords($reg['comida']) ?></h5>
                            <p class="card-text">$ <?php echo $reg['precio']; ?></p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <b>Puntuación: <?php echo $reg['puntuacion']; ?>/5</b>
                                <!-- Agrega aquí la lógica para contar los comentarios -->
                                <div class="d-flex align-items-center">
                                    <img src="./img/comentarios.png" alt="Coment"><br>
                                </div>
                            </div>
                            <!-- Aquí puedes mostrar algunos comentarios -->
                            <div class="my-4">
                                <p class="m-0">"<?php echo $reg['comentario']; ?>"</p>
                            </div>
                        </div>
                        <div class="text-center mb-4">
                            <a class="btn btn-dark" href="verproductoadmin.php?id=<?php echo $reg['id']; ?>">Ver Producto</a>
                        </div>
                        <div class="modifborrar">
                            <a href="modificar.php?id=<?php echo $reg['id']; ?>">Editar <i class="bi bi-pencil-square"></i></a>
                            <a href="borrar.php?id=<?php echo $reg['id']; ?>">Borrar <i class="bi bi-trash"></i></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div><br>
    <!-- Footer -->
    <footer class="footer-baset bg-danger py-3 mt-auto d-flex justify-content-center align-items-center">
        <div class="container">
            <p class="text-white text-center mb-0">© Copyright PedíComish 2023 - María Sol Garófalo</p>
        </div>
        <div class="redes">
            <a href="https://www.facebook.com.ar" target="_blank">
                <img src="./img/facebook.png" alt="fb">
            </a>
            <a href="http://www.instagram.com.ar"target="_blank">
                <img src="./img/instagram.png" alt="ig">
            </a>
            <a href="http://www.twitter.com.ar"target="_blank">
                <img src="./img/twitter.png" alt="tw">
            </a>
            <a href="http://www.whatsapp.com.ar"target="_blank">
                <img src="./img/whatsapp.png" alt="ws">
            </a>

        </div>
        <span class="text-white">PEDICOMISH S.A. es un proveedor de servicios de pago y no está autorizado por el BCRA para operar como entidad financiera.</span>
        <img src="./img/qr.png" srcset="" height="80" width="80" alt="Data fiscal">
    </footer>
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>
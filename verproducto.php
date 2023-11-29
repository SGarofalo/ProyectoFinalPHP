<?php
$conexion = mysqli_connect("127.0.0.1", "root", "");
mysqli_select_db($conexion, "productos");

$id = $_GET['id'];

$consulta = "SELECT * FROM producto WHERE id = '$id'";

$respuesta = mysqli_query($conexion, $consulta);
$datos = mysqli_fetch_array($respuesta);?>


<!DOCTYPE html>
<html lang="en">

<head>
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
        <a class="navbar-brand text-white" href="productosadmin.php">PedíComish</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="productosadmin.php">Inicio</a>
                </li>
            </ul>

            <!-- Mueve estas listas dentro del div con la clase navbar-collapse y agrega la clase ms-auto -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html"><i class="bi bi-box-arrow-left"></i></a>
                </li>
            </ul>
        </div>
</nav>
    <?php
        $comida = $datos["comida"];
        $precio = $datos["precio"];
        $imagen = $datos["imagen"];
        $comentario = $datos["comentario"];


    ?>
    
    <div class="container-producto">


        <img src="data:image/jpg;base64, <?php echo base64_encode($datos['imagen']) ?>" alt="">
        
        <div class="precio-coment">
        <h1><?php echo $comida?></h1>

        <h6>Comentarios: <?php echo $comentario?></h6>
        <p><i class="bi bi-tags-fill"></i> $<?php echo $precio?></p>
        <button > <a href="" class="agregarcarrito" > <i class="bi bi-cart-plus"></i> Agregar al Carrito</a></button>

        </div>

    </div>

    <!-- Footer -->
    <footer class="footer-base bg-danger py-3 mt-auto d-flex justify-content-center align-items-center">
        <div class="container">
            <p class="text-white text-center mb-0">© Copyright PedíComish 2023 - María Sol Garófalo</p>
        </div>
        <div class="redes">
            <img src="./img/facebook.png" alt="fb" >
            <img src="./img/instagram.png" alt="ig" >
            <img src="./img/twitter.png" alt="tw" >
            <img src="./img/whatsapp.png" alt="ws" >

        </div>
        <span class="text-white">PEDICOMISH S.A. es un proveedor de servicios de pago y no está autorizado por el BCRA para operar como entidad financiera.</span>
        <img src="./img/qr.png" srcset="" height="80" width="80" alt="Data fiscal">
    </footer>
</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>
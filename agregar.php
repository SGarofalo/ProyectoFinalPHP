<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/styles.css">
    <title>PedíComish</title>
</head>

<body>

<nav class="navbar navbar-expand-lg bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="index.htmlproductosadmin.php" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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


   <div class="container">
   
   <?php 

//conexión
$conexion = mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conexion,"productos");

// Almacenar los datos del envío POST
$comida = $_POST['comida'];
$precio = $_POST['precio'];
$imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
$puntuacion = $_POST['puntuacion'];
$comentario = $_POST['comentario'];
// Preparar la orden SQL

$consulta = "INSERT INTO `producto`(`comida`, `precio`, `imagen`, `puntuacion`, `comentario`)
VALUES ('$comida','$precio','$imagen','$puntuacion','$comentario')";
// Ejecutar la orden e ingresar datos
  mysqli_query($conexion,$consulta);
//Redirijo a index cuando cargó
  header('location: ./agregar.html');


?>
   </div>
    <!-- Footer -->
    <footer class="footer-baset bg-danger py-3 mt-auto d-flex justify-content-center align-items-center">
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
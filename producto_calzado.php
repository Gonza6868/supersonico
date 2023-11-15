
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ecommerce</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    

    <!--EMPIEZA NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.html">SuperSónicos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Productos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Accesorios</a></li>
                            <li><a class="dropdown-item" href="#">Remeras</a></li>
                            <li><a class="dropdown-item" href="#">Pantalones</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Contacto
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">WhatsApp</a></li>
                            <li><a class="dropdown-item" href="#">Instagram</a></li>
                            <li><a class="dropdown-item" href="#">Email</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Preguntas Frecuentes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--FIN DE NAVBAR-->

   


    <div class="row mt-2 mb-2">
        <div class="col-lg-5 m-auto text-center">
            <h1>Accesorios</h1>
        </div>
    </div>
 <!--COMIENZO calzado-->
<?php>

// Consulta para recuperar los productos
$sql = "SELECT * FROM supersonicos.productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "nombre: " . $row["nombre"] . "<br>";
        echo "descripcion: " . $row["descripcion"] . "<br>";
        echo "precio: $" . $row["precio"] . "<br>";
        echo "stock disponible: " . $row["stock"] . "<br>";
        echo "talle: " . $row["talle"] . "<br>";
    }
} else {
    echo "No se encontraron productos.";
}

<?>

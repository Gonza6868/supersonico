<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ecommerce</title>
    <link rel="stylesheet" href="./estilos2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>

    <!--EMPIEZA NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="inicio.html"><img class="logo"
                    src="https://i.ibb.co/bJfth6t/DALL-E-2023-05-18-10-29-09-logo-png-nave-con-forma-de-logo-de-nike-dando-la-vuelta-al-planeta-como-c.png">SuperSónicos</a>

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

        <!--Empieza Login-->
    <div class="login-content">
        <form method="post" action="">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
             <input type="text" name="usuario" class="form-control" id="exampleFormControlInput1" placeholder="ingrese su nombre de usuario">
             <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="ingrese su contraseña">
            <input name="btningresar" class="btn" type="submit" value="INICIAR SESION"> 
    <?php
    include("conexion_bd.php");
    include("controlador.php");
    include("producto_calzado");
    ?>
        </div>
        </form>
    </div>
    
   


    <!--Empieza Footer-->
    <footer>
        <div class="container-fluid">

            <div class="row mt-3 p-3 pb-1 bg-dark text-white">

                <div class="col-xs-12 col-md-6 col-lg-4">
                    <p class="h3"><img class="logo"
                            src="https://i.ibb.co/bJfth6t/DALL-E-2023-05-18-10-29-09-logo-png-nave-con-forma-de-logo-de-nike-dando-la-vuelta-al-planeta-como-c.png">SuperSónicos
                    </p>
                    <p class="text-secondary">IES 9023 RDM</p>
                </div>
                <div class="mb-3 col-xs-12 col-md-6 col-lg-4">
                    <p class="h5">Contacto <img class="iconB" src="imagenes/correo-de-contacto.png"></p>
                    <div class="mb-2">
                        <a class="text-secondary text-decoration-none" href="#"><img class="icon"
                                src="imagenes/whatsapp.png">WhatsApp</a>
                    </div>
                    <div class="mb-2">
                        <a class="text-secondary text-decoration-none" href="#"><img class="icon"
                                src="imagenes/instagram.png">Instagram</a>
                    </div>
                    <div class="mb-2">
                        <a class="text-secondary text-decoration-none" href="#"><img class="icon"
                                src="imagenes/gmail.png">Email</a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4">
                    <div class="mb-2">
                        <a class="text-secondary text-decoration-none" href="#">Inicio</a>
                    </div>
                    <div class="mb-2">
                        <a class="text-secondary text-decoration-none" href="#">Productos</a>
                    </div>
                    <div class="mb-2">
                        <a class="text-secondary text-decoration-none" href="#">Preguntas Frecuentes</a>
                    </div>
                </div>
                <div class="col-xs-12">
                    <hr>
                    <p class="text-white text-center">Copyright - All rights © reserved - SS Company - <span
                            id="anioCopy"></span></p>
                </div>
            </div>
        </div>
    </footer>




    <script src="scriptFecha.js"></script>
    <script src="scriptSub.js"></script>
    <script src="scriptQS.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
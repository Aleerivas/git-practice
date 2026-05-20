<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferretería Don Toño</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="style/style.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">Ferretería Don Toño</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link active" href="#"></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Sucursales</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Precios</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Productos
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="productos.php">Herramientas</a></li>
                            <li><a class="dropdown-item" href="#">Construccion</a></li>
                            <li><a class="dropdown-item" href="#">Techos</a></li>
                        </ul>
                    </li>

                </ul>

    <div class="ms-auto"> 

        <?php if (isset($_SESSION['idusuario'])): ?> 

        <div class="dropdown"> 
            <a class="btn btn-outline-secondary dropdown-toggle d-flex align
        items-center" href="#" role="button" data-bs-toggle="dropdown" aria
        expanded="false"> 
                <i class="fa-solid fa-circle-user me-3"></i> 
        <?php echo $_SESSION['name']; ?> 
            </a> 

        <ul class="dropdown-menu dropdown-menu-end"> 

            <li> 
                <a class="dropdown-item" href="#"> 
                    <i class="fa-solid fa-id-card me-3"></i> Perfil 
                </a> 
            </li> 

         <li><hr class="dropdown-divider"></li> 

        <li> 
            Cerrar sesión 
                <a class="dropdown-item text-danger" href="php/logout.php"> 
                    <i class="fa-solid fa-right-from-bracket me-2"></i> 
                    </a> 
        </li> 
        </ul> 
    </div> 
    <?php else: ?> 
        <a class="btn btn-outline-primary me-2" href="login.html">Login</a> 
            <a class="btn btn-primary" href="registro.html">Registrarse</a> 
    <?php endif; ?> 
    </div> 

            </div>
        </div>
    </nav>

    <!-- Carousel -->
    <div id="carouselExampleFade" class="carousel slide carousel-fade">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="img/OIP.webp" class="d-block w-100" alt="...">

                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/istockphoto-1323082643-612x612.jpg" class="d-block w-100" alt="...">

                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/OIP (1).webp" class="d-block w-100" alt="...">

                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>

    <!-- Hero -->
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5 mx-5">

        <div class="col-10 col-sm-8 col-lg-6">
            <img src="img/ferreteria-con-herramientas-y-materiales-variados-1024x684.jpg"
                 class="d-block mx-lg-auto img-fluid"
                 alt="Bootstrap Themes"
                 width="700"
                 height="500"
                 loading="lazy">
        </div>

        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
                Responsive left-aligned hero with image
            </h1>

            <p class="lead">
                Quickly design and customize responsive mobile-first sites with Bootstrap,
                the world’s most popular front-end open source toolkit, featuring Sass
                variables and mixins, responsive grid system, extensive prebuilt
                components, and powerful JavaScript plugins.
            </p>

            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">
                    Primary
                </button>

                <button type="button" class="btn btn-outline-secondary btn-lg px-4">
                    Default
                </button>
            </div>

        </div>
    </div>

    <!-- Features -->
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3 mx-5">

        <div class="feature col">

            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                <i class="fa-solid fa-paint-roller icono"></i>
            </div>

            <h3 class="fs-2 text-body-emphasis">Featured title</h3>

            <p>
                Paragraph of text beneath the heading to explain the heading.
                We'll add onto it with another sentence and probably just keep
                going until we run out of words.
            </p>

            <a href="#" class="icon-link">Call to action</a>

        </div>

        <div class="feature col">

            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                <i class="fa-solid fa-screwdriver-wrench icono"></i>
            </div>

            <h3 class="fs-2 text-body-emphasis">Featured title</h3>

            <p>
                Paragraph of text beneath the heading to explain the heading.
                We'll add onto it with another sentence and probably just keep
                going until we run out of words.
            </p>

            <a href="#" class="icon-link">Call to action</a>

        </div>

        <div class="feature col">

            <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3 p-2 rounded">
                <i class="fa-solid fa-hammer icono"></i>
            </div>

            <h3 class="fs-2 text-body-emphasis">Featured title</h3>

            <p>
                Paragraph of text beneath the heading to explain the heading.
                We'll add onto it with another sentence and probably just keep
                going until we run out of words.
            </p>

            <a href="#" class="icon-link">Call to action</a>

        </div>

    </div>

    <div class="container">

        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">

            <div class="col-md-4 d-flex align-items-center">

                <a
                    href="/"
                    class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1"
                    aria-label="Bootstrap"
                >
                    <svg class="bi" width="30" height="24" aria-hidden="true">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>

                <span class="mb-3 mb-md-0 text-body-secondary">
                    © 2025 Company, Inc
                </span>

            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">

                <li class="ms-3">
                  <a class="text-body-secondary text-decoration-none" href="#" aria-label="Redes">
                     <i class="fa-brands fa-instagram fs-4"></i>
                     <i class="fa-brands fa-facebook fs-4 ms-3"></i>
                 </a>
                </li>
            </ul>

        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
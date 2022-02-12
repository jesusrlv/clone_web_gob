<html>
<header>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- type font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;400&display=swap" rel="stylesheet"> 


</header>

<body>
    <div class="content">
        <div class="row border-bottom p-2 pe-5">
            <div class="col-6">

            </div>
            <div class="col-6 text-end" style="color:#9ea0a4;">
                <i class="bi bi-facebook me-3"></i>
                <i class="bi bi-twitter me-3"></i>
                <i class="bi bi-youtube me-3"></i>
                <i class="bi bi-instagram me-3"></i>
                <i class="bi bi-envelope me-3"></i>
            </div>
            <!-- <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                </div>
            </nav> -->
        </div>

        <style>
            body{
                margin:0;
                padding: 0;
            }
            a{
                decoration:none;
                font-family: 'Montserrat', sans-serif;
                font-size:14px;
            }
            a:link {
                color: black;
                /* text-decoration: none; */
            }
            a:visited {
            color: black;
            }
            a:hover {
            color: red;
            }
            a:active {
            color: blue;
            }

        </style>

        <div class="row p-5">
            <div class="col-3 text-center align-content-middle my-auto">
                <img src="images/logos/logo.png" width="200" height="80" alt="" class="align-middle rounded" style="background-color:rgba(90,90,90,0.3)">
            </div>
            <div class="col-9 align-content-middle my-auto">
                <ul class="nav justify-content-end align-middle pe-5 align-middle">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gobierno</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Conoce Zacatecas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Transparencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sala de prensa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bi bi-question-circle-fill"></i></a>
                    </li>
                </ul>
            </div>

        </div>


 

    </div>
    <div class="container-fluid w-100" style="margin:0;padding:0;">
        
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="images/img01.png" class="d-block w-100" alt="..." style="width:100%; max-height:500px; object-fit: cover; object-position:center; background-repeat: no-repeat;">
                    </div>
                    <div class="carousel-item">
                    <img src="images/img02.png" class="d-block w-100" alt="..." style="width:100%; max-height:500px; object-fit: cover; object-position:center; background-repeat: no-repeat;">
                    </div>
                    <div class="carousel-item">
                    <img src="images/img03.png" class="d-block w-100" alt="..." style="width:100%; max-height:500px; object-fit: cover; object-position:center; background-repeat: no-repeat;">
                    </div>
                    <div class="carousel-item">
                    <img src="images/img04.png" class="d-block w-100" alt="..." style="width:100%; max-height:500px; object-fit: cover; object-position:center; background-repeat: no-repeat;">
                    </div>
                    <div class="carousel-item">
                    <img src="images/img05.png" class="d-block w-100" alt="..." style="width:100%; max-height:500px; object-fit: cover; object-position:center; background-repeat: no-repeat;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </div>
    <div class="container-fluid">
        <div class="row p-5">
            <div class="col-8">
                <p style=" font-family: 'Montserrat', sans-serif;
                font-size:32px;">¿Qué estás buscando?</p>
                <!-- <p class="p-3 rounded" style="background-color:#781005;"> -->
                <div class="container p-2 rounded justify-content-middle" style="background-color:#781005;">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Búsqueda en la página" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><strong><i class="bi bi-search text-light"></i></strong></button>
                    </div>
                </div>
                <!-- </p> -->
                <p class="mt-5" style=" font-family: 'Montserrat', sans-serif;
                font-size:15px;">Encuentra de manera rápida y sencilla la información que el Gobierno del Estado de Zacatecas tiene disponible en Internet.
</p>
            </div>
            <div class="col-4">
            <p style=" font-family: 'Montserrat', sans-serif;
                font-size:32px;">Lo más buscado</p>
                <div class="p-5">
                    <p><i class="bi bi-plus-circle-fill me-3" style="color:#781005;"></i> Licitaciones</p>
                    <p><i class="bi bi-plus-circle-fill me-3" style="color:#781005;"></i> Trámites y servicios</p>
                    <p><i class="bi bi-plus-circle-fill me-3" style="color:#781005;"></i> Pago referendo</p>
                    <p><i class="bi bi-plus-circle-fill me-3" style="color:#781005;"></i> Acta nacimiento</p>
                    <p><i class="bi bi-plus-circle-fill me-3" style="color:#781005;"></i> Pagos en línea</p>
                </div>
            </div>

        </div>

    </div>

    <div class="container-fluid bg-light">
            <p class="text-center pt-5" style=" font-family: 'Montserrat', sans-serif;
                font-size:32px;">Últimas noticias</p>
                <!-- card group -->
                <div class="card-group p-5" style=" font-family: 'Montserrat', sans-serif;">
                    <div class="card">
                        <img src="images/portadas/dma_01.jpg" class="card-img-top" style="width:100%; max-height:250px; object-fit: cover; object-position:center; background-repeat: no-repeat;" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Gobernador David Monreal nombra a parte de su Gabinete</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                    <img src="images/portadas/dma_02.jpg" class="card-img-top" style="width:100%; max-height:250px; object-fit: cover; object-position:center; background-repeat: no-repeat;" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">En Guadalupe de Trujillo, David Monreal inicia la transformación de las carreteras en Zacatecas</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card">
                    <img src="images/portadas/dma_03.jpg" class="card-img-top" style="width:100%; max-height:250px; object-fit: cover; object-position:center; background-repeat: no-repeat;" alt="...">
                        <div class="card-body">
                        <h5 class="card-title">Inicia Gobernador David Monreal rescate del campo; anuncia reactivación de Tianguis Ganaderos</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>

    </div>
    
    <div class="container-fluid">
    <p class="text-center pt-5" style=" font-family: 'Montserrat', sans-serif;
                font-size:32px;">Seguridad</p>
    </div>
</body>

</html>
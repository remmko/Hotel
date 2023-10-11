<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  type="text/css" rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="app/app.js"></script>
    <title>Apartaments Figuerencs</title>
</head>
    <body>
        <header>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                        <img src="img/casa.png">
                    </a>
                    <p class="hover-text">Página principal</p>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img id="star" src="img/estrella.png">
                    </a>
                    <p class="hover-text">Reserves</p>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="img/user.png">
                    </a>
                    <p class="hover-text">Perfil</p>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Log out</a>
                </li>
            </ul>
        </header>
        <div class="nav">
            <div class="container-input">
                <input type="text" placeholder="Buscar" name="text" class="input">
                <button> 
                    <img src="img/lupa.png">
                </button>
            </div>
        </div>
        <main>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="apartaments/ap1/1.webp" class="d-block w-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="apartaments/ap1/2.webp" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="apartaments/ap1/3.webp" class="d-block w-100" alt="Slide 3">
                    </div>
                    <div class="carousel-item">
                        <img src="apartaments/ap1/4.webp" class="d-block w-100" alt="Slide 4">
                    </div>
                    <div class="carousel-item">
                        <img src="apartaments/ap1/5.webp" class="d-block w-100" alt="Slide 5">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        </main>
    </body>
</html>
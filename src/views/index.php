<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  type="text/css" rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="app/app.js" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&family=Mukta&family=PT+Sans+Caption:wght@400;700&display=swap" rel="stylesheet">
    <title>Apartaments Figuerencs</title>
</head>
    <body>
       <?php include "src/controls/mainmenu.php"; ctrlMenu();?>

                <div class="nav">
            <div class="container-input">
                <input type="text" placeholder="Buscar" name="text" class="input">
                <button> 
                    <img src="img/lupa.png">
                </button>
            </div>
        </div>
       
        <!-- Button trigger modal -->
        <button type="button" class="btn custom-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="img/1.webp" alt=""> 
            <div class="info"> 
                <div class="infoheader">
                <h4>Apartament amb grans vistes al camp</h4> 
                <p>123€</p>
                </div>
                <div class="infofinal">
                <p>Figueres, Catalunya, Espanya</p>
                <p>4 hostes · 2 habitacions · 2 llits · 1 bany</p>
                <div>
            </div>
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable custom-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div id="indicators">
                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></li>
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></li>
                        </ol>
                    </div>
                    
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/1.webp" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="img/2.webp" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="img/3.webp" class="d-block w-100" alt="Slide 3">
                        </div>
                        <div class="carousel-item">
                            <img src="img/4.webp" class="d-block w-100" alt="Slide 4">
                        </div>
                        <div class="carousel-item">
                            <img src="img/5.webp" class="d-block w-100" alt="Slide 5">
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
                
                    <div class="info"> 
                        <div class="infoheader">
                            <h4>Apartament amb grans vistes al camp</h4> 
                            <p>123€</p>
                        </div>
                        <div class="infofinal">
                            <p>Figueres, Catalunya, Espanya</p>
                            <p>4 hostes · 2 habitacions · 2 llits · 1 bany</p>
                            <p>Latitud</p>
                            <p>Longitud</p>
                            <p>Descripció curta</p>
                            <p>Metres quadrats</p>
                            <div class="container">
                                <div class="services-container">
                                    <div class="service-item">Aire Acondicionado</div>
                                    <div class="service-item">Terraza</div>
                                    <div class="service-item">Piscina</div>
                                    <div class="service-item">Cocina</div>
                                    <div class="service-item">Calefacción</div>
                                    <div class="service-item">Wifi</div>
                                    <div class="service-item">TV</div>
                                    <div class="service-item">Lavadora</div>
                                    <div class="service-item">Plancha</div>
                                    <div class="service-item">Secador de pelo</div>
                                    <div class="service-item">Champú</div>
                                    <div class="service-item">Aparcamiento</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calendar">
                        <label for="start">Desde:</label>
                        <input type="date" id="start">
                    </div>
                    <div class="calendar">
                        <label for="end">Hasta:</label>
                        <input type="date" id="end">
                    </div>
                    <button class="fechas">Buscar</button>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tancar</button>
                
                <div data-tooltip="Price:-$20" class="button">
                    <div class="button-wrapper">
                        <div class="text">Buy Now</div>
                            <span class="icon">
                                <svg viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn custom-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="img/1.webp" alt=""> 
            <div class="info"> 
                <div class="infoheader">
                <h4>Apartament amb grans vistes al camp</h4> 
                <p>123€</p>
                </div>
                <div class="infofinal">
                <p>Figueres, Catalunya, Espanya</p>
                <p>4 hostes · 2 habitacions · 2 llits · 1 bany</p>
                <div>
            </div>
        </button>
        <button type="button" class="btn custom-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="img/1.webp" alt=""> 
            <div class="info"> 
                <div class="infoheader">
                <h4>Apartament amb grans vistes al camp</h4> 
                <p>123€</p>
                </div>
                <div class="infofinal">
                <p>Figueres, Catalunya, Espanya</p>
                <p>4 hostes · 2 habitacions · 2 llits · 1 bany</p>
                <div>
            </div>
        </button>
        <button type="button" class="btn custom-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="img/1.webp" alt=""> 
            <div class="info"> 
                <div class="infoheader">
                <h4>Apartament amb grans vistes al camp</h4> 
                <p>123€</p>
                </div>
                <div class="infofinal">
                <p>Figueres, Catalunya, Espanya</p>
                <p>4 hostes · 2 habitacions · 2 llits · 1 bany</p>
                <div>
            </div>
        </button>
        

            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    </body>
</html>

<!-- data-bs-theme="dark" -->
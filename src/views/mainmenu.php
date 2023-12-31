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
                    <a class="nav-link active" aria-current="page" href="index.php">
                        <img src="img/casa.png">
                    </a>
                    <p class="hover-text">Página principal</p>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?r=myreserve">
                        <img id="star" src="img/estrella.png">
                    </a>
                    <p class="hover-text">Reserves</p>
                </li>

                <?php
                if($_SESSION["is_auth"]){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?r=usermod">
                            <img src="img/user.png">
                        </a>
                        <p class="hover-text">Perfil</p>
                    </li>
                    <?php
                }else{
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?r=login">
                            <img src="img/user.png">
                        </a>
                        <p class="hover-text">Perfil</p>
                    </li>
                    <?php
                }

                ?>
               

                <?php
                    if($_SESSION["role"]=="admin"){
                        ?>
                             <li class="nav-item">
                                <a class="nav-link" href="index.php?r=adminpanel">
                                    <img style ="height:24px; width: 24px;" src="img/admin.png">
                                </a>
                                <p class="hover-text">Adminpanel</p>
                            </li>

                        <?php
                    }elseif($_SESSION["role"]=="gestor"){
                        ?>
                        <li class="nav-item">
                           <a class="nav-link" href="index.php?r=addApartment">
                               <img style ="height:24px; width: 24px;" src="img/add.png">
                           </a>
                           <p class="hover-text">Add apartment</p>
                       </li>
                       <li class="nav-item">
                           <a class="nav-link" href="index.php?r=myrooms">
                               <img style ="height:24px; width: 24px;" src="img/my.png">
                           </a>
                           <p class="hover-text">My Rooms</p>
                       </li>

                   <?php
                    }
                ?>

            
                <li>
                    <a class="nav-link" href="index.php?r=logout">

                         <?php if($_SESSION["is_auth"]){
                            echo "Logout ".$_SESSION["login"];
                         } else{

                            echo "";
                         }?>
                    </a>
                </li>
               
            </ul>
        </header>
        
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="style/registration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="app/registrationform.js"></script>
    <title>Apartaments Figuerencs</title>
</head>

<body>


    <?php include "mainmenu.php"?>
    <script>
       
    </script>
    <form action = "index.php?r=register" method = "POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Login</label>
                <input type="" class="form-control" name="login" id="inputEmail4" requered="1" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name</label>
                <input type="" class="form-control" name="name" id="inputEmail4" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Surename</label>
                <input type="" class="form-control" name="surename" id="inputEmail4" placeholder="">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" name = "email" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" name ="password" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Phone</label>
            <input type="text" class="form-control" name = "phone" id="inputAddress" placeholder="With Country code">
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" name = "address" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" name="address2"  id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" name ="city" id="inputCity">
            </div>
          
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" name = "zip" id="inputZip">
            </div>
        </div>
        <button type="submit" id = "submit" name="submit" class="btn btn-primary">Sign up</button>
        <small id="emailHelp" class="form-text text-muted"><a href="index.php?r=login">Alrady have an account? Log in!</a></small>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
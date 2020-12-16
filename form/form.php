<?php 
    require("formController.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudad Freak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styleForm.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
</head>
<body class="image-fondo">
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-2 mx-auto">
                    <img src="https://ciudadfreak.com/wp-content/uploads/2020/06/logo_ciudad_freak_2020_transp-1-e1599327102705.png" alt="">
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top font-styleNav">
            <div class="container">
                <a class="navbar-brand" href="#">Panel de control</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="../index/index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../catalogue/catalogue.php">Catálogo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Ingresar Item</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid h-100 mt-5 font-styleForms ">
            <div class="row w-100 align-items-center mt-5">
                <div class="col-sm-6 mx-auto">
                    <form method="post">
                        <div class="card bg-dark font-color">
                            <div class="card-body">
                                <form  method="post">
                                    <div class="row">
                                        <div class="col">
                                            <input type="text" class="form-control font-colorForm" placeholder="Nombre Item" aria-label="nameItem" name="nameItem">
                                        </div>
                                        <div class="col">
                                            <input type="number" class="form-control font-colorForm" placeholder="Precio" aria-label="value" name="valueItem">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Descripción</label>
                                        <textarea class="form-control font-colorForm" id="exampleFormControlTextarea1" rows="3" name="descriptionItem"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">URL Imagen</label>
                                        <input type="text" class="form-control font-colorForm" name="image" placeholder="Ej. https://github.com/davidhschz/tienda/blob/main/media/bit_pesadilla-600x600.jpg?raw=true">
                                    </div>
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-outline-dark" name="addItembtn">Ingresar Item</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
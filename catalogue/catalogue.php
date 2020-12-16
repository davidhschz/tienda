<?php 
    require("catalogueController.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciudad Freak</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="styleCatalogue.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Leckerli+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top font-styleNav mb-5">
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
                            <a class="nav-link active" href="#">Catálogo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../form/form.php">Ingresar Item</a>
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
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach ($items as $item):?>
                    <div class="col">
                        <div class="card h-100">
                            <img src="<?php echo $item['image_item']?>" class="card-img-top" alt="...">
                            <div class="card-body special-card">
                                <h5 class="card-title"><?php echo $item['name_item']?></h5>
                                <p class="card-text"><?php echo $item['description_item']?></p>
                                <p>$ <?php echo $item['value_item']?></p>
                                <form method="POST">
                                    <input name="id_item" type="hidden" value="<?php echo $item['id_item']?>">
                                    <div class="d-grid gap-2">    
                                        <button type="submit" class="btn btn-dark" name="deleteItembtn">Eliminar Item</button>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        Actualizar Información
                                        </button>
                                    </div>
                                </form>  
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content modal-background">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Actualizar Item</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form  method="post">
                                            <div class="row">
                                                <div class="col">
                                                    <input type="text" class="form-control font-colorForm" placeholder="Nombre Item" aria-label="nameItem" name="nameItem">
                                                </div>
                                                <div class="col">
                                                    <input type="number" class="form-control font-colorForm" placeholder="Valor" aria-label="value" name="valueItem">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Descripción</label>
                                                <textarea class="form-control font-colorForm" placeholder="Descripción" id="exampleFormControlTextarea1" rows="3" name="descriptionItem"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <input type="text" class="form-control font-colorForm" name="image" placeholder="URL">
                                            </div>
                                            <input name="id_item" type="hidden" value="<?php echo $item['id_item']?>">
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-dark" name="updateItembtn">Ingresar Item</button>
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach?>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>
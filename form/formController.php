<?php 
    require("../Model.php");

    if (isset($_POST['addItembtn'])) {
        $nameItem = $_POST['nameItem'];
        $valueItem = $_POST['valueItem'];
        $descriptionItem = $_POST['descriptionItem'];
        $image = $_POST['image'];

        //$addItem = new DataBase();
        $query = "INSERT INTO product(name_item, value_item, description_item, image_item) VALUES ('$nameItem', '$valueItem', '$descriptionItem', '$image')";
        var_dump($query);
    }
?>
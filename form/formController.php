<?php 
    require("../Model.php");

    if (isset($_POST['addItembtn'])) {
        $nameItem = $_POST['nameItem'];
        $valueItem = $_POST['valueItem'];
        $descriptionItem = $_POST['descriptionItem'];
        $image = $_POST['image'];
        $valueItem = intval($valueItem);
        if ($nameItem != null && $valueItem != null && $descriptionItem != null && $image != null && $valueItem > 0) {
            /* $addItem = new DataBase();
            $query = "INSERT INTO product(name_item, value_item, description_item, image_item) VALUES ('$nameItem', '$valueItem', '$descriptionItem', '$image')";
            $addItem->addData($query); */
            echo "funciona";
        } else {
            echo "<script>alert('Complete todos los campos o verifique el valor ingresado.')</script>";
        }
    }
?>
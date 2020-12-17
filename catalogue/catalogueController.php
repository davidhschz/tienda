<?php 
    require("../Model.php");
    $controlItems = new DataBase();
    $query = "SELECT * FROM product";
    $items = $controlItems->searchData($query);

    if (isset($_POST['deleteItembtn'])) {
        $deleteItems = new DataBase();
        $idItem = intval($_POST['id_item']);
        $queryDeleteItems = "DELETE FROM product WHERE id_item = $idItem";
        $deleteItems->deleteData($queryDeleteItems);
    }

    if (isset($_POST['updateItembtn'])) {
        $nameItem = $_POST['nameItem1'];
        $descriptionItem = $_POST['descriptionItem1'];
        $image = $_POST['image1'];
        $valueItem = intval($_POST['valueItem1']);
        $idItem = intval($_POST['id_item1']);
        if ($nameItem != null && $valueItem != null && $descriptionItem != null && $image != null && $valueItem > 0) {
            $updateItems = new DataBase();
            $queryUpdateItems = "UPDATE product SET name_item = '$nameItem', value_item = '$valueItem', description_item = '$descriptionItem',image_item = '$image' WHERE id_item = $idItem";
            $updateItems->updateData($queryUpdateItems);
        } else {
            echo "<script>alert('Complete todos los campos o verifique el valor ingresado.')</script>";
        }
        
    }
?>
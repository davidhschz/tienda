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
        $valueItem = $_POST['valueItem1'];
        $descriptionItem = $_POST['descriptionItem1'];
        $image = $_POST['image1'];
        $idItem = intval($_POST['id_item1']);
        /* var_dump($nameItem, $valueItem, $descriptionItem, $image, $idItem); */
        $updateItems = new DataBase();
        $queryUpdateItems = "UPDATE product SET name_item = '$nameItem', value_item = '$valueItem', description_item = '$descriptionItem',image_item = '$image' WHERE id_item = $idItem";
        $updateItems->updateData($queryUpdateItems);
        /* var_dump($queryUpdateItems); */
    }
?>
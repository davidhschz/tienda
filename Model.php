<?php 

    class DataBase{
    public $userDB = "root";
    public $passwordDB = "";

    public function __construct(){}

    public function connectDB(){
        $infoBD="mysql:host=localhost;dbname=tiendais";
        try{
            $connectionDB = new PDO($infoBD, $this->userDB, $this->passwordDB);
            return($connectionDB);
        }catch(PDOException $error){
            echo($error->getMessage());
        }
    }

    public function addData($query){
        $connectionDB = $this->connectDB();
        $queryAddData = $connectionDB->prepare($query);
        $result = $queryAddData->execute();
        if($result){
            echo("se agrego el registro con éxito");
        }else{
            echo("Error agregando el registro");
        }
        
    }

    public function searchData($query){
        $connectionDB = $this->connectDB();
        $querySearchData = $connectionDB->prepare($query);
        $querySearchData->setFetchMode(PDO::FETCH_ASSOC);
        $result = $querySearchData->execute();
        return($querySearchData->fetchAll());
    }

    public function deleteData($query){
        $connectionDB = $this->connectDB();
        $queryDeleteData = $connectionDB->prepare($query);
        $result = $queryDeleteData->execute();
        if($result){
            echo("se eliminó el registro con éxito");
        }else{
            echo("Error eliminando el registro");
        }
    }

    public function updateData($query){
        $connectionDB = $this->connectDB();
        $queryUpdateData = $connectionDB->prepare($query);
        $result = $queryUpdateData->execute();
        if($result){
            echo("se editó el registro con éxito");
        }else{
            echo("Error editando el registro");
        }
    }
}
?>
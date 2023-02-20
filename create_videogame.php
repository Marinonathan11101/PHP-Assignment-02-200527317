<?php

    require_once("./connect.php");

    $sql = "INSERT INTO Videogame ( 

        name,
        description,
        value,
        release_date 
    ) VALUES (
        :name,
        :description,
        :value,
        :release_date
         
    )";  

    
    $stmt = $conn->prepare($sql);
   
    $stmt->bindParam(":name", $_POST["name"], PDO::PARAM_STR); 
    $stmt->bindParam(":description", $_POST["description"], PDO::PARAM_STR);
    $stmt->bindParam(":value", $_POST["value"], PDO::PARAM_STR);
    $stmt->bindParam(":release_date", $_POST["release_date"], PDO::PARAM_STR);
    $stmt->execute();

    header("Location: ./index.php"); 

?>
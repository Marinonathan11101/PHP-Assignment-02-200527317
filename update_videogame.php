<?php

    require_once("./connect.php");

    $sql = "UPDATE Videogame SET
        name = :name,
        description = :description,
        value = :value,
        release_date = :release_date
    WHERE id = :id";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":name", $_POST["name"], PDO::PARAM_STR);
    $stmt->bindParam(":description", $_POST["description"], PDO::PARAM_STR);
    $stmt->bindParam(":value", $_POST["value"], PDO::PARAM_STR);
    $stmt->bindParam(":release_date", $_POST["release_date"], PDO::PARAM_STR);
    $stmt->bindParam(":id", $_POST["id"], PDO::PARAM_INT);
    $stmt->execute();

    header("Location: ./index.php");

?>
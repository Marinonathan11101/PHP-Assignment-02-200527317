<?php

require_once("./connect.php");

    $sql = "SELECT
        id, name, description, value, release_date
    FROM
        Videogame
    WHERE
        id = :id";
      
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_GET["id"], PDO::PARAM_INT); 
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Videogame</title>
        <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>

    <body class="bg-danger">>
        <nav>
            <ul>
                <li><a  class="navbar-brand" href="./">Home</a></li>
                <li><a  class="navbar-brand" href="./new_videogame.php">New Videogame</a></li>
            </ul>
        </nav>

        <h1 class="display-1 text-center">Edit Videogame</h1>
        
        <form class="display-8 text-center"action="./update_videogame.php" method="post">
            <input type="hidden" name="id" value="<?= $row->id ?>"> 
            

            <div>
                <label for="name">Name</label><br>
                <input type="text" name="name" value="<?= $row->name ?>"> 
            
            </div>

            <div>
                <label for="description">Description</label><br>
                <input type="text" name="description" value="<?= $row->description?>">
            </div>

            <div>
                <label for="value">Value</label><br>
                <input type="number" name="value" value="<?= $row->value?>">
            </div>

            <div>
                <label for="release_date">Release Date</label><br>
                <input type="date" name="release_date" value="<?= $row->release_date ?>">
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </body>
</html>
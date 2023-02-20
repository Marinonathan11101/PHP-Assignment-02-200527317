<?php

    $sql = "SELECT
        id, name, description, value, release_date
    FROM
        Videogame"; 

    require_once("./connect.php"); 

    $rows = []; 
    if ($conn) { 
        $result = $conn->query($sql); 
        $rows = $result->fetchAll(PDO::FETCH_OBJ); 
        
    }

?>

<!DOCTYPE html>
<html  lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Video Games</title>
        <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>

    <body class="bg-danger">>
        <nav>
            <ul>
                <li><a class="navbar-brand" href="./">Home</a></li>
                <li><a class="navbar-brand" href="./new_videogame.php">New Videogame</a></li>
            </ul>
        </nav>

        <h1 class="display-1 text-center">Video Games</h1>

        <table class="table table-striped table-dark table-bordered">>
            <thead>
                <tr class="align-middle text-center">
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Value</th>
                    <th>Release Date</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($rows as $row): ?>   
                    
                    <tr> 
                        <td><?= $row->id?></td>
                        <td><?= $row->name?></td>
                        <td><?= $row->description?></td>
                        <td><?= $row->value ?></td>
                        <td><?= $row->release_date?></td>
                        <td>
                            <a class="btn btn-primary" href="./edit_videogame.php?id=<?= $row->id ?>">edit</a>
                        
                            <a class="btn btn-primary"href="./delete_videogame.php?id=<?= $row->id ?>" onclick="return confirm('Are you sure you want to delete?')">delete</a>
                        </td> 
                    </tr> 
                <?php endforeach ?> 
            </tbody>
        </table>
    </body>    
</html>
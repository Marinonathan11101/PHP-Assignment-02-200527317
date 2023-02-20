<!DOCTYPE html>
<html lang="en">
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
                <li><a  class="navbar-brand" href="./">Home</a></li>
                <li><a  class="navbar-brand" href="./new_videogame.php">New Videogame</a></li>
            </ul>
        </nav>

        <h1 class="display-1 text-center">New Videogame</h1>
        
        <form class="display-8 text-center" action="./create_videogame.php" method="post">
            <div>
                <label for="name">Name</label><br> 
                <input type="text" name="name"  > 
            </div> 

            <div>
                <label for="description">Description</label><br>
                <input type="text" name="description">
            </div>

            <div>
                <label for="value">Value</label><br>
                <input type="number" name="value">
            </div>

            <div>
                <label for="release_date">Release Date</label><br>
                <input type="date" name="release_date">
            </div>

            <div>
                <button class="btn btn-outline-primary" type="submit">Submit</button>
            </div>
        </form>
    </body>
</html>
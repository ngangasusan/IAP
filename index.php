<?php
session_start();
require('dbconnect.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index Page</title>
    </head>
    <body>
        <div class="username">
            <p><?php echo $_SESSION['userFname']." ". $_SESSION['userLname']?></p>

        
        </div>

        
    </body>
</html>
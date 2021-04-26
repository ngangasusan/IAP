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
        <link rel="stylesheet" href="css/style.css">
        
    </head>
    <body>
        <div class="user">
            <p><?php echo $_SESSION['userFname']." ". $_SESSION['userLname']?></p>
            <img src="" alt="">
            <button>LOGOUT</button>

        </div>

        <div class="mainPart">
            <label for="food_item">What food item would you like to order?</label><br>
            <input type="text" name="food_item" id="food_item"><br>

            <label for="food_amount">How many of it would you like to order?</label><br>
            <input type="text" name="food_amount" id="food_amount"><br>
            inpu
        </div>

        
    </body>
</html>
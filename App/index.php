<?php
session_start();
require('dbconnect.php');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <style>
        body{
            background-color: #C3F5F3;
            margin: 10px;
            padding: 10px;
            font-family: "Times New Roman", Times, serif;
            font-size: 20px;
        }
        button{
            background-color: #37F6EE;
            
        }
    
    
    </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index Page</title>
        
    </head>
    <body>
        <div class="user">
            <p><?php echo $_SESSION['userFname']." ". $_SESSION['userLname']?></p>
            <img src="" alt="">
            <button>LOGOUT</button>

        </div>

        <div>
            <label for="food_item">What food item would you like to order?</label>
            <input type="text" name="food_item" id="food_item">

            <label for="food_amount">How many of it would you like to order?</label>
            <input type="text" name="food_amount" id="food_amount">
        </div>

        
    </body>
</html>
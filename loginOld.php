<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Simple UI Login</title>
      <link rel="stylesheet" type="text/css" href="style.css" /> 
    </head>
    <body>
      <?php
        require('dbconnect.php');

        if (isset($_POST['login'])) 
        {
          $query = "SELECT * from `users` WHERE userEmail ='$userEmail' and userPassword ='$password'";
          $result = mysqli_query($link, $query) or die(mysql_error());

          if (mysqli_num_rows($result)==1) 
          {
            //ADMINSAMESAME
            $row=mysqli_fetch_assoc($result);
      
              
            $_SESSION['userID'] = $row['userID'];
            $_SESSION['userFname'] = $row['userFname'];
            $_SESSION['userLname'] = $row['userLname'];
            $_SESSION['userEmail'] = $row['userEmail'];
              
              
            //Redirect user to index.php
            header("Location: index.php");
            // echo"Records Exists";
          }
          else
          {
            echo "<h3>Username/ Password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a><?div>";
          }
            
        }else{
        ?>
        <div class="main">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <label for="emailAddress"> Email: </label>
          <input type="email" name="userEmail" id="emailAddress" value="susan@gmail.com" />
       
          <label for="password"> Password: </label>
          <input type="password" name="userPassword" id="password" />
          <br><br>
       
          <button type="submit" id="login" name="login" >Login</button>
          
          <p>Not registered yet? <a href="registration.php">Register Here</a></p>
       
          <div><input type="checkbox" id="check" /><span>Remember me</span></div>
        </form> 
        </div> 
        <?php }?> 
    </body>
</html>
<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="css/style.css" /> 
</head>

<body>
  <div class="mainPart">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <label for="emailAddress"> Email: </label><br>
      <input type="email" name="userEmail" id="emailAddress" placeholder="example@domain.com" /><br><br>
        
      <label for="password"> Password: </label><br>
      <input type="password" name="userPassword" id="Enter password" />
      <br><br>
      
      <input type="hidden" name="event" value="login">
      <p><a href="index.php">Login</a></p> 
   
      <p>Not registered yet? <a href="registration.php">Register Here</a></p>
        
      <div><input type="checkbox" id="check" /><span>Remember me</span></div>
    </form> 
  </div>
  
</body>
</html>
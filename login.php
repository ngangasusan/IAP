<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
  <div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <label for="emailAddress"> Email: </label>
      <input type="email" name="userEmail" id="emailAddress" value="susan@gmail.com" />
        
      <label for="password"> Password: </label>
      <input type="password" name="userPassword" id="password" />
      <br><br>
      
      <input type="hidden" name="event" value="login">  
      <button type="submit" id="login" name="login">Login</button>
            
      <p>Not registered yet? <a href="registration.php">Register Here</a></p>
        
      <div><input type="checkbox" id="check" /><span>Remember me</span></div>
    </form> 
  </div>
  
</body>
</html>
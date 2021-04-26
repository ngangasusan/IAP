<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Simple UI Registration</title>

        <link rel="stylesheet" type="text/css" href="style.css" /> 
    </head>
    <body>

        <div class="main">
        <form action="process_register.php" method="POST"  enctype="multipart/form-data"> 
            <label for="firstname"> First Name: </label>
            <input type="text" name="firstname" id="firstname" value="Susan" />

            <label for="lastname"> Last Name: </label>
            <input type="text" name="lastname" id="lastname" value="Ng'ang'a" />

            <label for="email"> Email: </label>
            <input type="email" name="email" id="email" value="susan@gmail.com" />
            
            <label for="city">City: </label>
            <input type="text" name="city" id="city" value="Nairobi">
        
            <label for="phonenumber"> Phone Number:</label>
            <input type="tel" name="phonenumber" id="phonenumber" value="0787656765"/>
        
            <label for="password"> Password: </label>
            <input type="password" name="password" id="password" value="Susan" />
        
            <label for="confirmpassword"> Confirm Password: </label>
            <input type="password" name="confirmpassword" id="confirmpassword" value="Susan" />
            
            <p>Select a Profile Picture</p>
            <p>
                <input type="file" name="profile_picture"/>
            </p>

            <input type="hidden" name="event" value="signup">
        
            <button type="submit" id="signup" name="signup" formaction="index.php">Sign Up</button>

            <p>Already have an account?</p>
            <button type="submit" id="login" name="login" formaction="index.php">
            Log in
            </button>  
            
        </form>
        </div>
    </body>
</html>
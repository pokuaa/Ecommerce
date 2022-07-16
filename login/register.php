
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <meta name="viewport">
    <link rel="stylesheet" href="../css/register.css">
</head>
<body >
  
    <!--  //user register form -->
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <form method="POST" action = "./register_process.php" id="regis_form">
        <label for="firstname"><b>Firstname</b></label></br>
        <input type="text" placeholder="Enter firstname" name="customer_name" required  id="first_name"></br></br>
        <div id="error_msg_name"></div>

    <!-- email -->
        <label for="email"><b>Email</b></label></br>
        <input type="text" placeholder="Enter Email" name="customer_email" required id="regis_email"></br></br>
        <div id="error_msg"></div>

    <!-- password -->
        <label for="psw"><b>Password</b></label></br>
        <input type="password" placeholder="Enter Password" name="customer_pass" required id="regis_password"></br></br>
        <div id="error_msg"></div>

    <!-- country -->
        <label for="country"><b>Country</b></label></br>
        <input type="text" placeholder="country" name="customer_country" required id="country"></br></br>
        <div id="error_msg_country"></div>

    <!-- city -->
        <label for="city"><b>City</b></label></br>
        <input type="text" placeholder="city" name="customer_city" required id="city"></br></br>
        <div id="error_msg_city"></div>

    <!-- contact -->
        <label for="contact"><b>Contact</b></label></br>
        <input type="text" placeholder="contact" name="customer_contact" required id="contact"></br></br>
        <div id="error_msg_contact"></div>

    <!-- profile picture -->
        <label for="profile"><b>Profile picture</b></label></br>
        <input type="file" accept="image/*"  />


        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
  
        
        <div>
          <button><a href="login.php" target="_blank">login</a></button>
          <button><a href="../index.php" target="_blank">Cancel</a></button>
        </div>
          <button type="submit" class="registerbtn" name = "submit">Register</button>
        
         

    </form>
</body>
</html>





      <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/signup.css">

</head>
<body>
    
<!-- header section starts  -->

<?php require 'includes/header.php' ?>
      
<div class="body1">
<div class="container-lg">
      <div class="loginbox">
        <h1> Log in </h1>
        <form action="includes/login.php" method="post">
            <p> Username </p>
            <input type="text" name="login-username" placeholder="Enter username">
            <p> Password </p>
            <input type="password" name="login-password" placeholder="Enter password">
            <input type="submit" name="login-submit" value="Sign up">
            <a href="login.php">Not registered yet?</a>
        </form>
</div>
</div>
</div>

<script src="js/script.js"></script> 

</body>
</html>
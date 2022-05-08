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
	<div class="header-lg">
		<h2>Create Account</h2>
	</div>
	<div class="loginbox">
        <h1> Sign up </h1>
        <form action="includes/signup.php" method="post">
            <p> Username </p>
            <input type="text" name="username" placeholder="Enter username">
            <p> Email </p>
            <input type="email" name="email" placeholder="Enter email">
            <p> Password </p>
            <input type="password" name="password" placeholder="Enter password">
            <input type="submit" name="signup-submit" value="Sign up">
        </form>
</div>
</div>
</div>


<!-- custom css file link  -->
<script src="js/script.js"></script>

</body>
</html>
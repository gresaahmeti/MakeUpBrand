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

</head>
<body>
    
<!-- header section starts  -->

<?php require 'includes/header.php' ?>

<!-- header section ends -->

<section class="home">

    <div class="slides-container">

        <div class="slide active">
            <div class="content">
                <span>Reveal your natural glow</span>
                <h3>up to 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="image/Slider11.jpg" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <span>Reveal your natural glow</span>
                <h3>up to 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="image/Slider2.jpg" alt="">
            </div>
        </div>

        <div class="slide">
            <div class="content">
                <span>Reveal your natural glow</span>
                <h3>up to 50% off</h3>
                <a href="#" class="btn">shop now</a>
            </div>
            <div class="image">
                <img src="image/Slider3.png" alt="">
            </div>
        </div>

    </div>

    <div id="next-slide" class="fas fa-angle-right" onclick="next()"></div>
    <div id="prev-slide" class="fas fa-angle-left" onclick="next()"></div>

</section>

<section class="banner-container">

    <div class="banner">
        <img src="image/Product6.jpg" alt="">
        <div class="content">
            <span>limited sales</span>
            <h3>up to 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="image/Product5.jpg" alt="">
        <div class="content">
            <span>limited sales</span>
            <h3>up to 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

    <div class="banner">
        <img src="image/Product3.jpg" alt="">
        <div class="content">
            <span>limited sales</span>
            <h3>up to 50% off</h3>
            <a href="#" class="btn">shop now</a>
        </div>
    </div>

</section>


<!-- footer section starts  -->

<?php require 'includes/footer.php' ?>


<!-- footer section ends -->


<!-- custom css file link  -->
<script src="js/script.js"></script>

</body>
</html>
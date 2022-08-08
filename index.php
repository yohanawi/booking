<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <!-- css -->
    <link rel="stylesheet" href="./css/Css.css">
    <!-- Icon css -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
    <link rel="stylesheet" href="A.fonts,,_flaticon,,_font,,_flaticon.css+css,,_aos.css+css,,_style.css,Mcc.vCq_W-I72t.css.pagespeed.cf.Y1uFS9zq8K.css">

</head>

<body>
    <!-- Navigation bar -->
    <?php include './components/navigation.php'; ?>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-2">Suites</div>
                <div class="text-3">A chance to go offline and <br>get it touch with nature</div>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="./images/ximg_2.jpg.pagespeed.ic.jAvfEkr8MX.webp" alt="" class="img1">
                    <img src="./images/xhero_3.jpg.pagespeed.ic.0RfTZ9Ub16.webp" class="img2" style="margin-left: 250px; margin-top: -200px; border: 5px sloid white; width: 250px; height: 200px;">
                </div>
                <div class="column right">
                    <div class="text">Stay and Enjoy</div>
                    <p>Suscipit libero pretium nullam potenti. Interdum, blandit phasellus consectetuer dolor ornare dapibus enim ut tincidunt rhoncus tellus sollicitudin pede nam maecenas, dolor sem. Neque sollicitudin enim. Dapibus lorem feugiat facilisi faucibus et. Rhoncus.</p>
                    <center><a href="#">Read more<i class='bx bx-right-arrow-alt'></i></a></center>
                </div>
            </div>
        </div>
    </section>

    <section class="feature" id="feature">
        <div class="max-width">
            <h2 class="title">Hotel Feature</h2>
            <div class="feature-content">
                <div class="row">
                    <span><img src="./images/pool.png"></span>
                    <span><img src="./images/emergency-exit.png"></span>
                    <span><img src="./images/drink.png"></span>
                    <span><img src="./images/protection.png"></span>

                </div>
                <div class="row">
                    <span><img src="./images/food-service.png"></span>
                    <span><img src="./images/minibar.png"></span>
                    <span><img src="./images/parking.png"></span>
                    <span><img src="./images/gym.png"></span>
                    
                </div>
            </div>
        </div>
    </section>

    <?php include './components/footer1.php'; ?>
    <?php include './components/footer.php'; ?>

    <!-- java script-->
    <script src="./js/Js.js"></script>
    <script>
        TweenMax.from(".img1", 1, {
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
        })

        TweenMax.from(".img2", 1.8, {
            delay: 0.2,
            x: 20,
            opacity: 0,
            ease: Expo.easeInOut
        })

        TweenMax.from(".text-2", 1, {
            delay: 0.3,
            x: -10,
            opacity: 0,
            ease: Expo.easeInOut
        })

        TweenMax.from(".text-3", 2, {
            delay: 0.5,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
        })

        TweenMax.from(".right .green_btn ,input ,a", 1.1, {
            delay: 1.1,
            y: 20,
            opacity: 0,
            ease: Expo.easeInOut
        })
    </script>
</body>

</html>
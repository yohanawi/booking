<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Booking</title>
    <!-- css -->
    <link rel="stylesheet" href="../css/Css.css">
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
    <?php include '../components/navigation.php'; ?>

    <!-- home section start -->
    <section class="Chome" id="home">
        <div class="max-width">
            <div class="Chome-content">
                <div class="text-2">Get In Touch</div>
            </div>
        </div>
    </section>

    <section class="con">
        <div class="max-width">
            <div class="con-content">
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-map-marker-alt"></i>
                        <h3>address</h3>
                        <p>137/2, Meerigama Road, Divulapitiya</p>
                    </div>
                    <div class="icons">
                        <i class="fas fa-envelope"></i>
                        <h3>email</h3>
                        <p>suites@gmail.com</p>
                    </div>
                    <div class="icons">
                        <i class="fas fa-phone"></i>
                        <h3>phone</h3>
                        <p>+94 76 025 6656</p>
                        <p>+94 70 523 0139</p>
                    </div>
                </div>
                <div class="row">
                    <form action="" method="POST">
                        <div class="inputBox">
                            <input type="text" name="name" placeholder="your name" required maxlength="20" class="box">
                            <input type="email" name="email" placeholder="your email" required maxlength="50" class="box">
                        </div>
                        <div class="inputBox">
                            <input type="number" name="number" min="0" max="9999999999" placeholder="enter your number" required onkeypress="if(this.value.length == 10) return false;" class="box">
                            <input type="text" name="subject" placeholder="your subject" class="box">
                        </div>
                        <textarea name="msg" placeholder="your message" cols="30" rows="10" class="box"></textarea>
                        <input type="submit" value="send message" name="send" class="btn">
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include '../components/footer1.php'; ?>
    <?php include '../components/footer.php'; ?>

    <!-- java script-->
    <script src="../js/Js.js"></script>

</body>

</html>
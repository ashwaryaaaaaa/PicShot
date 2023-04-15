<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PicShot</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/47c7b0a522.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="navbar">
        <div class="nav__container">
            <a href="/" id="navbar__logo">
                <i class="fas fa-gem"></i> PicShot</a>
        </div>
        <!-- <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
            </div> -->
        <style>
            body {
                background-color: #131313;
            }
            
            nav ul {
                list-style-type: none;
                margin-left: 20;
                padding: 0;
                overflow: hidden;
                float: right;
            }
            
            li {
                float: left;
                margin: 3px 3px;
            }
            
            li a {
                display: block;
                padding: 8px;
                color: wheat;
                text-align: right;
                text-decoration: none;
                justify-content: center;
                float: right;
            }
            
            .navbar1 {
                display: inline-block;
                overflow: hidden;
                margin-left: auto;
                margin-right: 20px;
            }
        </style>
        <div class="navbar1">
            <nav>
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="library.html">Library</a></li>
                    <li><a href="contribute.html">Contribute</a></li>
                    <li><a href="register.php">SignUp</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <!--NAVBAR SECTION-->

    <!-- <div class="navbar">
        <div class="nav__container">
            <a href="/" id="navbar__logo">
                <i class="fas fa-gem"></i> PicShot</a>
            <div class="navbar__toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div> -->
    <!-- <nav>
                <ul class="navbar__menu">
                    <li class="navbar__item">
                        <a href="/" class="navbar__links"> Home </a>
                    </li>
                    <li class="navbar__item">
                        <a href="/library.html" class="navbar__links">Library </a>
                    </li>
                    <li class="navbar__item">
                        <a href="/" class="navbar__links">Contribute </a>
                    </li>
                    <li class="navbar__btn">
                        <a href="/" class="button">Sign Up </a>
                    </li>
                </ul>
            </nav> -->
    <!-- </div>
    </div> -->

    <!--HERO SECTION-->
    <div class="main"></div>
    <div class="main__container">
        <div class="main__content">
            <h1>The Insider Stories</h1>
            <h2>Every picture has an untold story...</h2>
            <button class="main__btn"><a href="/">Get Started</a></button>
        </div>
        <div class="main__image--container">
            <img src="pic1.svg" alt="pic" id="main__img">
        </div>
    </div>

    <!--SERVICES SECTION -->
    <div class="services">
        <h1>See what the hype is about?</h1>
        <div class="services__container">
            <div class="services__card">
                <h2>Experience Bliss</h2>
                <p>The only pictures you need</p>
                <button>Get Started</button>
            </div>

            <div class="services__card">
                <h2>Are you ready?</h2>
                <p>Take the leap</p>
                <button>Get Started</button>
            </div>
        </div>
    </div>

    <!-- Footer SECTION-->

    <!-- //*<div class="footer">
        <div class="col-1">
            <h3> USEFUL LINKS</h3>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Contact</a>
            <a href="#">Shop</a>
            <a href="#">Blog</a>
        </div>
        <div class="col-2">
            <h3>NEWSLETTER</h3>
            <form>

                <input type="text" placeholder="Your email address">
                <button type="" Submit>SUBSCRIBE NOW</button> </form>
        </div>
        <div class="col-3">
            <h3>CONTACT </h3>
            <p> 123, XYZ Road, BSK 3<br>Bangalore, Karnataka, INDIA</p>
         </div>
        </div>*// -->

        <!--<div class="footer__container">
        <div class="footer__links">
            < class="footer__link--wrapper">
                <div class="footer_link--items">
                    <h2>About Us</h2>
                    <a href="/">How it works</a>
                    <a href="/">Testimonials</a>
                    <a href="/">Careers</a>
                    <a href="/">Investments</a>
                    <a href="/">Terms Of Service</a>

                </div>

            <div class="social__media">
                <div class="social__media--wrap">
                    <div class="footer__logo">
                        <a href="/" id="footer__logo"><i class="fas fa-gem">PicShot</i></a>
                    </div>
                    <p class="website__rights">PicShot 2023. All rights reserved</p>
                    <div class="social__icons">
                        <a href="/" class="social__icon--link" target=" _blank ">
                            <i class="fab fa-facebook "></i>
                        </a>
                        <a href="/ " class="social__icon--link" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="/" class="social__icon--link" target=" _blank ">
                            <i class="fab fa-twitter "></i>
                        </a>
                        <a href="/ " class="social__icon--link" target="_blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                        <a href="/" class="social__icon--link" target=" _blank ">
                            <i class="fab fa-linkedln "></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>-->


        <script src="app.js "></script>
</body>

</html>
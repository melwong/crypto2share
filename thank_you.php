<?php

    //If the HTTPS is not found to be "on"
    if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on") {
        //Tell the browser to redirect to the HTTPS URL.
        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
        
        //Prevent the rest of the script from executing.
        exit;
    }

    //To prevent direct access of this page
    if ( !isset($_SERVER['HTTP_REFERER'] ) ) {

        // redirect them to your homepage
        header('location: /');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Your crypto gift is on its way - Crypto2Share</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="Giveaway your cryptocurrency as crypto gifts and presents">
    <meta name="keywords"
        content="give cryptocurrency, how to, crypto presents, crypto gifts, share cryptocurrency, christmas, lunar new year crypto packet or envelope">
    <meta name="author" content="Crypto2Share">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/tooplate-ben-resume-style.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-1TFKBV58BE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-1TFKBV58BE');
    </script>

</head>

<body>

    <div class="space">
    </div>

    <!-- HERO -->
    <section class="hero d-flex flex-column justify-content-center align-items-center" id="intro">

        <div class="container">
            <div class="row">

                <div class="mx-auto col-lg-5 col-md-5 col-10">
                    <img src="images/crypto-gift.jpg" class="img-fluid" alt="Crypto Gift Sent">
                </div>

                <div class="d-flex flex-column justify-content-center align-items-center col-lg-7 col-md-7 col-12">
                    <div class="hero-text">

                        <h3 class="my-4 pt-4 pt-lg-0"><?php echo $output_message; ?></h3>

                        <a href="https://crypto2share.com" class="email-link">
                            I want to give again
                        </a>
                    
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- TESTIMONIAL -->
    <section class="testimonials section-padding" id="testimonials">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <h3 class="mb-5 text-center">What People Say</h3>

                    <div class="owl-carousel owl-theme" id="testimonials-carousel">
                        <div class="item">
                            <div class="testimonials-thumb d-flex">
                                <div class="testimonials-image">
                                    <img src="images/testimonials/testimonial-image01.jpg" class="img-fluid"
                                        alt="testimonials image">
                                </div>

                                <div class="testimonials-info">
                                    <p>This good looking dude could be you. Please tell us about your experience.</p>

                                    <h6 class="mb-0">The Dude</h6>
                                    <span>Boss</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonials-thumb d-flex">
                                <div class="testimonials-image">
                                    <img src="images/testimonials/testimonial-image02.jpg" class="img-fluid"
                                        alt="testimonials image">
                                </div>

                                <div class="testimonials-info">
                                    <p>Something to share about us? Good or bad, we're all ears!</p>

                                    <h6 class="mb-0">The Beauty</h6>
                                    <span>Bad Ass Boss</span>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="testimonials-thumb d-flex">
                                <div class="testimonials-image">
                                    <img src="images/testimonials/testimonial-image03.jpg" class="img-fluid"
                                        alt="testimonials image">
                                </div>

                                <div class="testimonials-info">
                                    <p>You could steal this hottie's thunder. Say it and we'll post it here.</p>

                                    <h6 class="mb-0">The Hottie</h6>
                                    <span>Super Bad Ass Boss</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>

    <!-- SCRIPTS -->
    <script src="js/jquery.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
    <!--<script src="js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>-->
    <script src="js/owl.carousel.min.js" integrity="sha384-l/y5WJTphApmSlx76Ev6k4G3zxu/+19CVvn9OTKI7gs4Yu5Hm8mjpdtdr5oyhnNo" crossorigin="anonymous"></script>
    <script src="js/custom.js" integrity="sha384-to2PHQIJKDY7uk1pgr2LP8vf+R5iYFYCWx11gpYZxcGM4zCedMYNItNEgR4PI+Oq" crossorigin="anonymous"></script>

</body>

</html>
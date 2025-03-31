<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Inance</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <!-- font awesome style -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
    <div class="hero_area">
        <?php 
        include "header.php";
        nav("services");
        ?>
    </div>

    <!-- service section -->

    <section class="service_section layout_padding">
        <div class="container ">
            <div class="heading_container heading_center">
                <h2> Our Services </h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-3 mx-auto">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/os1.png" alt="" />
                        </div>
                        <div class="detail-box">
                            <h5>
                                Web Development
                            </h5>
                            <p>
                                Custom websites tailored for businesses, eCommerce, and startups.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mx-auto">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/s1.png" alt="" />
                        </div>
                        <div class="detail-box">
                            <h5>
                                Software Management
                            </h5>
                            <p>
                                Smart, scalable, and efficient software solutions tailored to your business needs.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mx-auto">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/os3.png" alt="Google Ads" />
                        </div>
                        <div class="detail-box">
                            <h5>
                                Google Ads
                            </h5>
                            <p>
                                Maximize your online visibility with our expert Google Ads services.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3 mx-auto">
                    <div class="box ">
                        <div class="img-box">
                            <img src="images/os4.png" alt="" />
                        </div>
                        <div class="detail-box">
                            <h5>
                                Cybersecurity
                            </h5>
                            <p>
                                Protect your business from online threats with our security
                                solutions.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-box">
                <a href="">
                    View More
                </a>
            </div>
        </div>
    </section>
    <!-- end service section -->

    <!-- footer section -->
    <?php include "footer.php" ?>
    <!-- footer section -->

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    </script>
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
    </script>
    <!-- End Google Map -->


</body>

</html>
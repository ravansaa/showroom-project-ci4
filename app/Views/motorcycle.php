<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <title>Igniter | Homepage</title>
</head>

<body>

    <header>
        <nav class="main-nav">
            <div class="brand text-main">
                <a href="#">
                    <img src="assets/icons/mocar.png" style="height: 10%; width: 10%;">
                </a>
            </div>
            <div class="links">
                <ul>
                    <li><a href="<?= base_url('/'); ?>">Home</a></li>
                    <li><a href="<?= base_url('motorcycle'); ?>">Motorcycle</a></li>
                    <li><a href="<?= base_url('automobile'); ?>">Automobile</a></li>
                    <li><a href="#contact">Contacts</a></li>
                </ul>
            </div>
            <div class="menu">
                <img src="assets/icons/menu.svg" alt="menu">
            </div>
        </nav>
    </header><!-- /header -->

    <main id="home">

        <!--BANNER-->
        <section class="banner">
            <div id="banner-carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#banner-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#banner-carousel" data-slide-to="1"></li>
                    <li data-target="#banner-carousel" data-slide-to="2"></li>
                    <li data-target="#banner-carousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url('assets/images/gsx150.jpg');"></div>
                    <div class="carousel-item" style="background-image: url('assets/images/satria.jpg');"></div>
                    <div class="carousel-item" style="background-image: url('assets/images/gixxer.jpg');"></div>
                    <div class="carousel-item" style="background-image: url('assets/images/avenis.jpg');"></div>
                </div>
                <a class="carousel-control-prev" href="#banner-carousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#banner-carousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </section>
        <style>
            .carousel-item {
                height: 100vh;
                background-size: cover;
                background-position: center;
            }

            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 50vh;
            }
        </style>

        <div class="container">
            <h1><b>Temukan Motor Suzuki yang tepat untuk anda!</b></h1><br>
            <p>Berkendara bukan hanya sebuah perjalanan, namun cerita dan kebanggaan.</p>
        </div>

        <section class="choose d-flex flex-wrap justify-content-center mb-4 ">
            <div class="card mr-2" style="width: 18rem;">
                <h5 class="text-second">Suzuki GSX R150</h5>

                <img src="assets/images/gsx150.jpg" class="card-img-top" alt="...">
                <div class="desc-product">Mulai Dari
                    <div class="price">
                        <a href="<?= site_url('motor1') ?>" style="text-decoration: none;"><strong>38.000.000</strong></br>
                            <span>Jelajahi </span></a>
                    </div>
                </div>
            </div>
            <div class="card mr-2" style="width: 18rem;">
                <h5 class="text-second">Suzuki Satria F150</h5>
                <img src="assets/images/satria.jpg" class="card-img-top" alt="...">
                <div class="desc-product">Mulai Dari
                    <div class="price">
                        <a href="<?= site_url('motor2') ?>" style="text-decoration: none;"><strong>30.000.000</strong></br>
                            <span>Jelajahi &gt;</span></a>
                    </div>
                </div>
            </div>
            <div class="card mr-2" style="width: 18rem;">
                <h5 class="text-second">Suzuki Gixxer SF 250</h5>
                <img src="assets/images/gixxer.jpg" class="card-img-top" alt="...">
                <div class="desc-product">Mulai Dari
                    <div class="price">
                        <a href="<?= site_url('motor3') ?>" style="text-decoration: none;"><strong>59.000.000</strong></br>
                            <span>Jelajahi &gt;</span></a>
                    </div>
                </div>
            </div>
            <div class="card mr-2" style="width: 18rem;">
                <h5 class="text-second">Suzuki Avenis 125</h5>
                <img src="assets/images/avenis.jpg" class="card-img-top" alt="...">
                <div class="desc-product">Mulai Dari
                    <div class="price">
                        <a href="<?= site_url('motor4') ?>" style="text-decoration: none;"><strong>31.800.000</strong></br>
                            <span>Jelajahi &gt;</span></a>
                    </div>
                </div>
            </div>
        </section>
        <style>
            .full-width {
                width: 100%;
                max-width: 100vw;
            }
        </style>










        <footer id="contact">
            <div class="container">
                <div class="footer-content row mb-4">
                    <div class="footer-brand col-12 col-sm-12 col-md-4 col-lg-8">
                        <div>
                            <h1 class="text-main">IGNITER INDONESIA</h1>
                            <div class="footer-item-content">

                            </div>
                            </a>
                        </div>
                    </div>

                    <div class="footer-item col-12 col-sm-12 col-md-4">
                        <div>
                            <div class="footer-item-content">
                                <h3 class="text-main">Business</h3>
                                <p><a href="#">igniter@fakemail.com</a></p>
                                <p><a href="#">088899778877</a></p>
                                <p><a href="#">Bekasi, Tambun Selatan</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>

            <div class="copyright-section border-top">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright-content text-center mt-4">
                            <p class="text-second"> Igniter Copyright &copy; 2020 All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </footer>



        <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="library/bootstrap/js/bootstrap.min.js"></script> -->
        <script src="script/index.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>

</html>
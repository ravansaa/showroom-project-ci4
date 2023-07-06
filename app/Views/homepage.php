<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('library/bootstrap/css/bootstrap.min.css') ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('library/bootstrap/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('style/main.css') ?>">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

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
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center text-center">
                    <img src="assets/images/banner.png" alt="image-banner" class="img-fluid full-width">
                </div>
            </div>
        </section>
        <style>
            .container {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 50vh;
            }
        </style>

        <div class="container">
            <h1><b>DRIVE WITH PRIDE</b></h1><br>
            <p>Igniter Indonesia is a business engaged in the automotive industry who market and sell cars and motorcycles</p>
        </div>

        <section class="choose">
            <div class="arrival-images row justify-content-center align-items-center text-center">
                <div class="arrival-image col-12 mb-4 mb-sm-0 mb-md-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4" data-aos="fade-up">
                    <a href="<?= base_url('automobile'); ?>">
                        <img src="assets/images/mobil.png" alt="pict1" class="img-fluid">
                    </a>
                </div>
                <div class="arrival-image col-12 mb-4 mb-sm-0 mb-md-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4" data-aos="fade-up">
                    <a href="<?= base_url('motorcycle'); ?>">
                        <img src="assets/images/motor.png" alt="pict2" class="img-fluid">
                    </a>
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
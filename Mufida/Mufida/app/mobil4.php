<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style/main.css">
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

        <section class="choose ">
            <div class="arrival-images row justify-content-center align-items-start text-center mt5">
                <div class="arrival-image col-12 mb-4 mb-sm-0 mb-md-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4" data-aos="fade-up">

                    <img src="assets/images/mobilempat.png" alt="pict1" width="566px" class="img-fluid">

                </div>
                <div class=" text-sm-start col-12 mb-4 mb-sm-0 mb-md-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4" data-aos="fade-up">

                    <h1 class="text-sm-start ">Grand Vitara</h1>
                    <p class="text-sm-start ">
                        <li>Desain yang Tangguh: Grand Vitara memiliki desain yang tangguh dan atletis dengan garis-garis yang tegas dan postur yang tinggi. Dengan gril yang mencolok, lampu depan yang besar, dan roda yang sporty, Grand Vitara menampilkan tampilan yang kuat dan berjiwa petualang.
                        </li>
                        <li>Performa yang Tangguh: Grand Vitara dilengkapi dengan mesin bensin yang bertenaga. Mesin yang tersedia bervariasi tergantung pada model dan generasi Grand Vitara yang tersedia di wilayah Anda. Meskipun memiliki fokus pada kemampuan off-road, Grand Vitara juga memberikan performa yang baik di jalan raya.
                        </li>
                        <li>Kemampuan Off-Road: Grand Vitara dirancang untuk memberikan performa off-road yang baik. Dilengkapi dengan sistem penggerak 4 roda (4WD) atau All-Wheel Drive (AWD), Grand Vitara mampu menghadapi berbagai kondisi medan, termasuk jalan bebatuan atau berlumpur.
                        </li>
                    </p>
                </div>
        </section>

        <section class="choose ">

            <div class="arrival-images row justify-content-center align-items-start text-center mt5">
                <div class="arrival-image col-12 mb-4 mb-sm-0 mb-md-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4" data-aos="fade-up">
                    <section class="product-prices">
                        <div class="container">
                            <p class="text-muted align-center aos-init aos-animate" data-aos="fade-up" data-offset="300">Harga On The
                                Road Jakarta
                                Juli 2023<br>
                                Harga tidak mengikat, dapat berubah sewaktu-waktu</p>
                            <div class="row align-center">
                                <div class="col-12">
                                    <div class="row" style=" justify-content:center;">
                                        <div class="">
                                            <div class="mb-20 aos-init aos-animate" data-aos="fade-up" data-offset="300">
                                                <div class="group-model">Grand Vitara</div>
                                                <div class="sales-model">Grand Vitara GL</div>
                                                <div class="price">Rp<strong>384.400.000</strong></div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class=" col-12 mb-4 mb-sm-0 mb-md-4 mb-lg-0 col-sm-12 col-md-6 col-lg-4" data-aos="fade-up">

                    <style>
                        /* Kustomisasi tambahan */


                        #myTable {
                            margin-top: 20px;
                        }

                        .hidden {
                            display: none;
                        }
                    </style>

                    <h1 style="font-weight: bold;">Book Now</h1>

                    <form action="processForm" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="nomor">Nomor:</label>
                            <input type="text" class="form-control" id="nomor" name="nomor" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </form>

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
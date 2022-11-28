    <?php
    //Connect
    $con = mysqli_connect("localhost","root","","undangan");
    //cek tombol 
    if(isset($_POST["submit"])){ 
    $name = $_POST['name'];
    $hp = $_POST['hp']; 
    $isi = $_POST['body']; 
   
    //insert
    $querry = "INSERT INTO formundangan
                VALUES ('', '$name','$hp','$isi') ";
    mysqli_query($con,$querry);
    } 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title id="title">PT Tiara Kencana</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicon -->
        <link href="banner/50thtinaanniversary.png" rel="icon"> 
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Montserrat:wght@400;600&display=swap"
            rel="stylesheet">
        <!-- Sweet Alert --> 
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    
            <!-- Customized Bootstrap Stylesheet -->
        <link href="css/style.css" rel="stylesheet">   
        <!-- Coundown Cube -->
        <link href="css/countdowncube.css" rel="stylesheet">  
            <style media="screen">
            .bg-gallery2 {
                background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(./galery/galerry10.jpg), no-repeat center center; 
                background-size: cover;
                background-attachment: fixed;
                background-position: 0 -100px;
                width: 100%;
                height: auto;
            } 
            .audio-bottom {
            position: fixed;
            display: inline;
            text-align: center;
            left: 30px;
            bottom: 30px;
            z-index: 11;
            animation: action 1s infinite alternate;
            
            }
            .content {
            position: relative;
            width: 100%;
            overflow: hidden;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
            }
            .responsive-iframe{
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                width: 100%;
                height: 360px;
            }
            </style> 
            
        </head> 
    <body data-spy="scroll" data-target=".navbar" data-offset="51" style="background-color:#ffffff" >
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-lg-5">
        <a href="#home" class="navbar-brand d-block d-lg-none">
            <h1 class="mb-n2" style="font-family:'Times New Roman', Times, serif;color:darkorange">Tiara
                Kencana</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav ml-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                <a href="#story" class="nav-item nav-link">History</a>
                <a href="#gallery" class="nav-item nav-link">Gallery</a>
            </div>
            <a href="index.html" class="navbar-brand mx-5 d-none d-lg-block">
                <h1 class="font-secondary text-white mb-n2" style="font-family:'Times New Roman', Times, serif">Tiara
                    Kencana</h1>
            </a>
            <div class="navbar-nav mr-auto py-0">
                <a href="#family" class="nav-item nav-link">Family</a>
                <a href="#event" class="nav-item nav-link">Event</a>
                <a href="#rsvp" class="nav-item nav-link">RSVP</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- audio -->  
    <audio id="myAudio" autoplay> 
  <source src="lagu/semangat_baru.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
    </audio>  
    <button onclick="playAudio()" class="audio-bottom btn btn-outline-primary text-white" type="button"><i style="color:#ED880C" class="fa fa-light fa-music"></i></button> 
    <!-- endaudio -->

  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5 pb-5" id="home">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item position-relative active" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="banner/banner1.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4"></h1>
                            <div class="simply-countdown simply-countdown-one"></div>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0"
                                    style="letter-spacing: 2px;">We're Getting Anniversary</h3>
                            </div>
                            
                            <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                data-src="video/video2.mp4" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item position-relative" style="height: 100vh; min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="banner/slider3.jpg" style="object-fit: cover;">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="display-1 font-secondary text-white mt-n3 mb-md-4"></h1>
                            <div class="d-inline-block border-top border-bottom border-light py-3 px-4">
                                <h3 class="text-uppercase font-weight-normal text-white m-0"
                                    style="letter-spacing: 2px;">We're Getting Anniversary</h3>
                            </div>
                            <button type="button" class="btn-play mx-auto" data-toggle="modal"
                                data-src="video/video2.mp4" data-target="#videoModal">
                                <span></span>
                            </button> 
                        </div> 
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev justify-content-start" href="#header-carousel" data-slide="prev">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-prev-icon mt-3"></span>
                </div>
            </a>
            <a class="carousel-control-next justify-content-end" href="#header-carousel" data-slide="next">
                <div class="btn btn-primary px-0" style="width: 68px; height: 68px;">
                    <span class="carousel-control-next-icon mt-3"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="video/video2.mp4" id="video" allowscriptaccess="always"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End --> 
    
    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                    <div id="ytplayer"></div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Countdown --> 
    <!-- About Start -->
    <div class="container-fluid py-5 mb-3" id="about">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">About</h6>
                <h1 class="font-secondary display-4" style="font-family:'Times New Roman', Times, serif">PT Tiara
                    Kencana</h1> 
                    <i class="far fa-heart text-dark"></i> 
            </div>
           
            <div class="row m-0 mb-4 mb-md-0 pb-2 pb-md-0">
                <div class="col-md-6 p-0 text-center text-md-right mt-2">
                    <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-5">
                        <p style="color:#ED880C;">PT.Tiara Kencana merupakan perusahaan yang bergerak di bidang distributor farmasi, alat kesehatan, ortopedi, dan produk disposable selama 50 tahun di bidang kesehatan. Divisi farmasi, TINA merupakan distributor utama untuk perusahaan farmasi yang berkembang pesat, Mersi Farma. Sementara di bidang peralatan medis, produk disposable, dan ortopedi, TINA mewakili lebih dari 20 produsen negara (Jerman, AS, Inggris, Austria, Belanda, dan Prancis). Ini termasuk bidang diagnostik, kardiologi, neurologi, psikiatri, radiologi, dan fisioterapi, ortopedi. TINA saat ini melayani lebih dari 3800 pelanggan, terdiri dari berbagai apotik, poliklinik, balai pengobatan daerah, dan rumah sakit.</p>  
                        <div class="position-relative mt-2">
                        <h3 class="font-secondary font-weight-normal text-muted mt-5"><i
                                class="fa-regular fa-building text-primary ml-3"></i>Tiara Kencana Head Office</h3>
                                <small class="text-muted">Wisma Tiara, Jl. Raya Pasar Minggu, RT.1/RW.1, West Pejaten, Pasar Minggu, South Jakarta City, Jakarta 12510 </small>
                        </div>
                    </div>
                </div> 
                <div class="gallery-item col-md-6 p-0 mt-2" style="min-height: 400px;">
                    <img class="position-absolute w-100 h-100" src="about/wisma_tiara.jpg" style="object-fit: cover;">
                </div> 
            </div> 
        </div>
    </div>
    <!-- About End -->


    <!-- Story Start -->
   
    <div class="container-fluid py-5" id="story">
        <div class="container pt-5 pb-3">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">History Of</h6>
                <h1 class="font-secondary display-4" style="font-family:'Times New Roman', Times, serif">PT.Tiara
                    Kencana</h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            
            <div class="container timeline position-relative p-0"> 
                <div class="row">
                    <div class="gallery-item col-md-6 text-center text-md-right">
                        <img class="img-fluid mr-md-3" src="img/paktirto.jpg" style="height:300px;width:400px">
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 ml-md-3 mt-2" style="width: 100%;">
                            <h4 class="mb-2">F. Tirto Koesnadi</h4>
                            <p class="text-uppercase mb-2">Direktur Utama</p>
                            <p class="m-0" style="color:#ED880C;">Tiara Kencana didirikan oleh <strong class="text-bold">F. Tirto Koesnadi </strong>  pada tanggal 6 Desember 1972.
                                di Jakarta
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 mr-md-3">
                            <h4 class="mb-2">First Office</h4> 
                            <p class="m-0 mt-2" style="color:#ED880C;">Kantor pertama Tiara Kencana di Jln.Hasim Asyari dan setalah jam kerja selesai pada malam hari depan ruko kantor Tiara di sulap menjadi Restoran kaki lima bergengsi </p>
                        </div>
                    </div>
                    <div class="gallery-item col-md-6 text-center text-md-left mt-2">
                        <img class="img-fluid ml-md-3" src="galery/history1.jpg" style="height:300px;width:400px">
                    </div>
                </div>
                <div class="row">
                    <div class="gallery-item col-md-6 text-center text-md-right">
                        <img class="img-fluid mr-md-3" src="galery/history2.jpg" style="height:300px;width:400px"> 
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 ml-md-3 mt-2">
                            <h4 class="mb-2">Wisma Tiara</h4>
                            <p class="m-0 mt-2" style="color:#ED880C;">Setelah mengalami perkembangan dan kemajuan Tiara Kencana membangun Head Office pada tahun 1998 yang berlokasi dijalan Raya Pasar Minggu, dan bangunan ini diberi nama Wisma Tiara </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-center text-md-right">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 ml-md-3">
                         <h4 class="mb-2">Cabang PT.Tiara Kencana</h4>
                            <p class="m-0 mt-2" style="color:#ED880C;">Kantor cabang Semarang merupakan kantor cabang pertama yang di miliki oleh PT.Tiara Kencana dan didirikan pada Maret 1978, lalu cabang kedua yang di buka setelah cabang Semarang adalah kantor cabang Yogyakarta pada tanggal 2 Januari 2020.</p>
                        </div>
                    </div>
                    <div class="gallery-item col-md-6 text-center text-md-left mt-2">
                        <img class="img-fluid mr-md-3" src="galery/tiara_2.jpg" style="width:350px;height:350px;">
                    </div>
                </div>

                <div class="row">
                    <div class="gallery-item col-md-6 text-center text-md-right">
                        <img class="img-fluid ml-md-3" src="galery/tiara_4.jpg" style="height:400px;width:400px">
                    </div>
                    <div class="col-md-6 text-center text-md-left">
                        <div class="h-100 d-flex flex-column justify-content-center bg-secondary p-4 mr-md-3 mt-2">
                            <h4 class="mb-5">Achievement In This Years</h4> 
                            <p style="color:#ED880C">Pada tahun 2022 PT.Tiara Kencana berhasil membuka empat cabang yaitu, 
                                <li style="color:#ED880C" class="ml-3"> Cabang Solo 17 Januari 2022</li>
                                <li style="color:#ED880C" class="ml-3"> Cabang Bali 17 Januari 2022</li>
                                <li style="color:#ED880C" class="ml-3"> Cabang Surabaya 9 Mei 2022</li>
                                <li style="color:#ED880C" class="ml-3"> Cabang Bandung 4 Oktober 2022</li>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
             
        </div>
    </div>
   
    <!-- Story End -->


    <!-- Gallery Start -->
    <div class="container-fluid bg-gallery2" id="gallery" style="padding: 120px 0; margin: 90px 0;">
        <div class="section-title position-relative text-center" style="margin-bottom: 120px;">
            <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Gallery</h6>
            <h1 class="font-secondary display-4 text-white" style="font-family:'Times New Roman', Times, serif;">Our
                Photo</h1>
            <i class="far fa-heart text-white"></i>
        </div>
        <div class="owl-carousel gallery-carousel">
            <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/galery1.jpg" style="height:300px;">
                <a href="galery/galery1.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/galerry2.jpg" style="height:300px;">
                <a href="galery/galerry2.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/galery3.jpg" style="height:300px;">
                <a href="galery/galery3.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/galery4.jpg" style="height:300px;">
                <a href="galery/galery4.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/galery5.jpg" style="height:300px;">
                <a href="galery/galery5.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/galery6.jpg" style="height:300px;">
                <a href="galery/galery6.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/galery7.jpg" style="height:300px;">
                <a href="galery/galery7.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/galery8.jpg" style="height:300px;">
                <a href="galery/galery8.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/galery9.jpg" style="height:300px;">
                <a href="galery/galery9.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
            <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/galery10.jpg" style="height:300px;">
                <a href="galery/galery10.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
              <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/1.jpg" style="height:300px;">
                <a href="galery/1.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
             <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/2.jpg" style="height:300px;">
                <a href="galery/2.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
             <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/3.jpg" style="height:300px;">
                <a href="galery/3.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
             <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/4.jpg" style="height:300px;">
                <a href="galery/4.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
             <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/5.jpeg" style="height:300px;">
                <a href="galery/5.jpeg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
             <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/6.jpg" style="height:300px;">
                <a href="galery/6.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
             <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/7.jpg" style="height:300px;">
                <a href="galery/7.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
             <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/8.jpg" style="height:300px;">
                <a href="galery/8.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
             <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/9.jpg" style="height:300px;">
                <a href="galery/9.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
             <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/10.jpg" style="height:300px;">
                <a href="galery/10.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
             <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/11.jpg" style="height:300px;">
                <a href="galery/11.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
             <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/12.jpg" style="height:300px;">
                <a href="galery/12.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
             <div class="gallery-item">
                <img class="img-fluid w-100" src="galery/13.jpg" style="height:300px;">
                <a href="galery/13.jpg" data-lightbox="gallery">
                    <i class="fa fa-2x fa-plus text-white"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- Gallery End -->
    <!-- Event Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;" id="event">Our Events</h6>
                <h1 class="font-secondary display-4" style="font-family:'Times New Roman', Times, serif;">Events Starts
                </h1>     
                <div class="col-mb-3">
                <i class="far fa-heart text-dark"></i>
                </div> 
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                <div class="card border-primary mb-2">
            <div class="card-header text-uppercase text-primary mb-3 border-primary" style="font-family:'Times New Roman', Times, serif;background:transparent"><button class="btn btn-outline border-0"><h6 class="text-primary" id="waktu"></h6></button>
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Dresscode Black / Navy And Gold </p>
                <footer class="blockquote-footer" style="font-family:'Times New Roman', Times, serif;color:black">Pria Kemeja Formal</footer>
                <footer class="blockquote-footer" style="font-family:'Times New Roman', Times, serif;color:black">Wanita Dress / Rok</footer>
                </blockquote>
            </div>
            </div> 
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 border-right border-primary mt-1">
                    <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0">
                        <img class="img-fluid mb-4" style="height:200px;width:450px;" src="img/bidakara.jpg" alt="">
                        <h4 class="mb-3">Hotel Bidakara,Birawa Assembly hall</h4>
                        <p class="mb-2">Jl. Gatot Subroto No.8 RT.8/RW.8 Menteng Dalam</p>
                        <p class="mb-1">Kecamatan.Tebet, Kota Jakarta Selatan</p>
                        <p class="mb-0 text-info" ><i class="fa-regular fa-clock"></i> 16:45 - Selesai</p> 
                    </div>
                     <div class="text-center text-md-right mr-md-3 mb-4 mb-md-0"> 
                         <a href="https://goo.gl/maps/nihfJKQgtksPU9oR9" class="badge bg-info border-0 text-white "><i class="fa-solid fa-map-location-dot"></i> Location</a> 
                    </div>
                </div>
              
                <div class="col-md-6 content">
                    <div class="text-center text-md-left ml-md-3">
                    <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.172980479189!2d106.83971723812394!3d-6.240919319623051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3bf7b0bc94d%3A0x6d31dde4c95fcf59!2sBirawa%20Assembly%20Hall!5e0!3m2!1sen!2sid!4v1669106424723!5m2!1sen!2sid" width="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Event End -->


    <!-- Friends & Family Start -->
    <div class="container-fluid py-5" id="family">
        <div class="container pt-5 pb-3">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;">Thank You To</h6>
                <h1 class="font-secondary display-4" style="font-family:'Times New Roman', Times, serif;">Our Partners</h1>
                <i class="far fa-heart text-dark"></i>
            </div> 
            <div class="row portfolio-container">
                  <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="position-relative">
                        <center><img class="img-fluid" style="height:200px;" src="img/merapi.jpg"></center>
                        <!-- <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">PT.Merapi Utama Farma</h4> 
                        </div> -->
                    </div>
                </div>
            <div class="col-lg-4 col-md-6 mt-5 portfolio-item">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/PT.SaptaST2.png">
                        <!-- <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">PT. UNITED DICO CITAS</h4>
                        </div> -->
                    </div>
                </div> 
                <div class="col-lg-4 col-md-6 mb-2 portfolio-item">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/udc_new.jpg">
                        <!-- <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">Kamalika ArtPrints</h4> 
                        </div> -->
                    </div>
                </div> 
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/kamalika.png">
                        <!-- <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">PT.KF Trading</h4>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-5 portfolio-item ">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/MERSI_farma.png"  alt="">
                        <!-- <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">PT. Mersifarma TM</h4>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 portfolio-item">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="img/kf_trading.jpg">
                        <!-- <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">PT.RNI</h4>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 mt-5 portfolio-item"">
                         <div class="position-relative">
                        <img class="img-fluid w-100" src="img/rni.jpg">
                        <!-- <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">PT.RNI</h4>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 portfolio-item"">
                         <div class="position-relative">
                        <img class="img-fluid w-100" src="img/PT.GloryNew.png">
                        <!-- <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">PT.RNI</h4>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 mt-3 portfolio-item"">
                         <div class="position-relative">
                        <img class="img-fluid w-100" src="img/Marrykha.jpeg">
                        <!-- <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">PT.RNI</h4>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 mb-5 portfolio-item"">
                         <div class="position-relative">
                        <img class="img-fluid w-100" src="img/PT.CahayaMutiara.jpeg">
                        <!-- <div class="bg-secondary text-center p-4">
                            <h4 class="mb-3">PT.RNI</h4>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Friends & Family End --> 

            <!-- RSVP START -->  
            <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title position-relative text-center">
                <h6 class="text-uppercase text-primary mb-3" style="letter-spacing: 3px;"  id="rsvp">RSVP</h6>
                <h1 class="font-secondary display-4" style="font-family:'Times New Roman', Times, serif;">Join Our Events
                </h1>
                <i class="far fa-heart text-dark"></i>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                    <form action="" method="POST">
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control bg-secondary border-0 py-4 px-3"
                                        placeholder="Your Name" name="name" id="name" required>
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="number" name="hp" class="form-control bg-secondary border-0 py-4 px-3"  
                                        placeholder="Your Phone Number" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control bg-secondary border-0 py-2 px-3" rows="5"
                                    placeholder="Message" name="body" required="required"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary font-weight-bold py-3 px-5" id="submit" name="submit">Submit</button> 
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RSVP End -->
 
   
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5" id="contact" style="margin-top: 90px;">
        <div class="container text-center py-5">
            <div class="section-title position-relative text-center">
                <h1 class="font-secondary display-3 text-white">Thank You</h1>
                <i class="far fa-heart text-white"></i>
            </div>
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.facebook.com/PT.TiaraKencana"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="https://www.linkedin.com/company/pt-tiarakencana/?originalSubdomain=id"><i
                        class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-lg btn-outline-light btn-lg-square ml-2" href="#"><i class="fa-brands fa-discord"></i></a>
                
            </div>
            <div class="d-flex justify-content-center py-2">
                <p class="text-white" href="#">tina@tiarakencana.com</p>
                <span class="px-3">|</span>
                <p class="text-white" href="#">(021) 7987862</p>
            </div>
            <p class="m-0">&copy;<?php echo " " . date("Y") . ""; ?> Designed by PT.Tiara Kencana
            </p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Scroll to Bottom -->
    <!-- <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i> -->
    

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-outline-primary btn-lg-square back-to-top"><i
            class="fa fa-angle-double-up"></i></a>
            
    <!-- JavaScript Libraries -->
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script> 
    <!-- Template Javascript -->
    <script src="js/main.js"></script> 
    <script src="https://kit.fontawesome.com/b6742c8760.js" crossorigin="anonymous"></script>
    <script>
    //    CountDown  
        var countDownDate = new Date("Dec 7, 2022 16:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();
            
        // Find the distance between now and the count down date
        var distance = countDownDate - now;
            
        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
        // Output the result in an element with id="demo"
        document.getElementById("waktu").innerHTML = days + "Hari " + hours + "Jam "
        + minutes + "Menit " + seconds + "Detik ";
            
        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("waktu").innerHTML = "EXPIRED";
        }
        }, 1000); 
        var x = document.getElementById("myAudio"); 

        function playAudio() { 
        x.play(); 
        } 

        function pauseAudio() { 
        x.pause(); 
        } 
    </script>
    
</body>
</html>
 
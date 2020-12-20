<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dinas Pendidikan Kab. Bone - Home</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/css.css'?>" rel="stylesheet">
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--============================= HEADER =============================-->
    <div class="header-topbar">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-8 col-md-9">
                    <div class="header-top_address">
                        <div class="header-top_list">
                            <img class="img img-responsive" width="100px" src="<?php echo base_url().'theme/images/logo-dark.png'?>"> 
                        </div>
                        <div class="header-top_desc">
                            <h4>DINAS PENDIDIKAN KAB. BONE</h4>
                            <h5>Jl. Dr. Wahidin Sudirohusodo, Macanang, Kab. Bone, Sulawesi Selatan</h5>
                            <span class="icon-phone"> (0481) 21041</span> 
                            <span class="icon-envelope-open"> disdik_bone@yahoo.com</span> 
                        </div>
                    </div>
                    <div class="header-top_login2">
                        <a href="<?php echo site_url('admin/login');?>">Login</a>
                        
                    </div>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-3">
                    <div class="header-top_login mr-sm-3">
                    <a href="<?php echo site_url('admin/login');?>" target="_blank">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2">DISDIK BONE</a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('');?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about');?>">Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pegawai');?>">Staff Pegawai</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Pengumuman</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('download');?>">Download</a>
                                </li>                                
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Galeri</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="<?php echo site_url('contact');?>">Contact</a>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>
<section>
    <div class="slider_img layout_two">
        <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider.jpg'?>" alt="First slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>PENDIDIKAN</h1>
                            <h4>adalah senjata yang paling ampuh<br> yang anda bisa gunakan untuk mengubah dunia <br> - Nelson Mandela -</h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('artikel');?>" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="carousel-item">
                    <img class="d-block" src="<?php echo base_url().'theme/images/slider-3.jpg'?>" alt="Third slide">
                    <div class="carousel-caption d-md-block">
                        <div class="slider_title">
                            <h1>Teknologi adalah tools</h1>
                            <h4>hanya suatu alat. bukan segalanya.<br>kualitas pembelajaran dalam kelas, interaksi antara guru dan murid itu esensinya<br>- Nadiem Makarim -</h4>
                            <div class="slider-btn">
                                <a href="<?php echo site_url('about');?>" class="btn btn-default">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <i class="icon-arrow-left fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <i class="icon-arrow-right fa-slider" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!--//END HEADER -->
<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
               <h2>Welcome</h2>
               <p>Terima kasih anda telah berkunjung di website Dinas Pendidikan Kab. Bone. Website ini merupakan sarana informasi pendidikan kepada masyarakat luas. Kiranya website ini bisa menjadi referensi bagi masyarakat luas yang ingin mendapatkan informasi tentang Dinas Pendidikan Kab. Bone.
               </p>
            </div>
            <div class="col-md-4">
                <img src="<?php echo base_url().'theme/images/welcome.jpeg'?>" class="img-fluid about-img" alt="#">
            </div>
        </div>
    </div>
</section>
<!--//END ABOUT -->
<!--============================= MAP =============================-->
<section class="map">
    <div class="container">
        <div class="row">
            <div class="col">
               <h2>Cek Lokasinya Disini</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.3132256967624!2d120.30542231434586!3d-4.53751484909102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbde519ee3a250f%3A0x92409ffaa0902c52!2sDinas%20Pendidikan%20%26%20Kebudayaan%20Kab.%20Bone!5e0!3m2!1sid!2sid!4v1596079968706!5m2!1sid!2sid" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col">
            <p>Jl. Dr Wahidin Sudirohusodo, Watampone, Macanang, Bone, Kabupaten Bone, Sulawesi Selatan 92713</p>
            </div>
        </div>
    </div>
</section>

<!--//END MAP -->
<!--============================= EVENTS =============================-->
<section class="event">
    <div class="container">
    <div class="row">
            <div class="col-md-12">
                <h2>Pengumuman</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-12">
                      <?php foreach ($agenda->result() as $row):?>
                        <div class="event_date">
                            <div class="event-date-wrap">
                                <p><?php echo date("d", strtotime($row->agenda_tanggal));?></p>
                                <span><?php echo date("M. y", strtotime($row->agenda_tanggal));?></span>
                            </div>
                        </div>
                        <div class="date-description">
                            <h3><a href="<?php echo site_url('agenda');?>"><?php echo $row->agenda_nama;?></a></h3>
                            <p><?php echo limit_words($row->agenda_deskripsi,10).'...';?></p>
                            <hr class="event_line">
                        </div>
                        <?php endforeach;?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--//END EVENTS -->
<!--============================= OUR COURSES =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Artikel Terbaru</h2>
            </div>
        </div>
        <div class="row">
          <?php foreach ($berita->result() as $row) :?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="courses-img">
                    </div>
                    <!-- // end .course-img-wrap -->
                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                        <h3 style="text-align:center;"><?php echo $row->tulisan_judul;?></h3>
                    </a>
                </div>
            </div>
          <?php endforeach;?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel');?>" class="btn btn-default btn-courses">View More</a>
            </div>
        </div>
    </div>
</section>
<!--//END OUR COURSES -->

<!--============================= FOOTER =============================-->
<footer>
    <div class="container">
        <div class="row">
                <div class="col-md-5">
                    <div class="address">
                        <h3>Hubungi Kami</h3>
                        <p><span>Alamat : </span> Jl. Dr. Wahidin Sudirohusodo,<br> Macanang, Kab. Bone, Sulawesi Selatan</p>
                        <p><span>Email : </span>  disdik_bone@yahoo.com
                            <br><span>Telp : </span> (0481) 21041</p>
                            <ul class="footer-social-icons">
                                <li><a href="#"><i class="fa fa-facebook fa-fb" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin fa-in" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-tw" aria-hidden="true"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3>Menu Utama</h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Home</a></li>
                            <li><a href="<?php echo site_url('about');?>">About</a></li>
                            <li><a href="<?php echo site_url('artikel');?>">Berita </a></li>
                            <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                            <li><a href="<?php echo site_url('contact');?>">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="foot-logo">
                        <a href="<?php echo site_url();?>">
                            <img src="<?php echo base_url().'theme/images/logo-dark.png'?>" class="img-fluid" alt="footer_logo" width="30%">
                        </a>
                        <p><?php echo date('Y');?> © copyright by <a href="" target="_blank"> <br><b>Dinas Pendidikan Kab. Bone</b></a>. <br>All rights reserved.</p>
                    </div>
                </div>
                
            </div>
        </div>
        </footer>
        <!--//END FOOTER -->
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
    </body>

    </html>

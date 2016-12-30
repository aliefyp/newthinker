<?php 
if(isset($POST['submit'])){
    $to = 'aliefyp@gmail.com'; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $message = $_POST['message'];

    $headers = "From:" . $from . "\r\n";
    mail($to,$message,$headers);
    if(mail)
    { 
        $respon = "Email berhasil dikirim! ";
        
    }
    else{
        $respon = "Pengiriman gagal";
    }
    echo "<script type='text/javascript'>alert('$respon');</script>";
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thinker Studio | Home</title>
    <meta name="Title" content="Thinker Studio | Home">
    <meta name="description" content="Thinker Studio merupakan penyedia jasa di bidang Teknologi Informasi dan seni yang berdiri pada tahun 2014 dan bertempat di Surabaya. Kami sedang berfokus mengembangkan berbagai macam proyek Teknologi Informasi maupun desain. Kami telah berkembang dan menjalin kerja sama dengan berbagai instansi." />
    <meta name="keywords" content="web,website,mobile,software,software,house,program,aplikasi,web-based,web-app,web-apps,mobile-app,mobile-apps,android,IT,konsultasi,startup,teknologi,sistem,informasi,erp,scm,toko,online,landing,page,surabaya,indonesia,jawa,timur">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="msnbot" content="index,follow" />
    <meta name="author" content="Thinker Studio" />
    <meta name="copyright" content="2016 www.thinkerstudio.info" />
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="bower_components/wow/css/libs/animate.css">
    <link rel="icon" 
      type="image/png" 
      href="css/img/thinker-icon.png">
</head>

<body>
    <div class="title-bar" data-responsive-toggle="thinkertop" data-hide-for="medium">
        <button class="menu-icon" type="button" data-toggle></button>
        <div class="title-bar-title">Menu</div>
    </div>
    <div data-sticky-container>
        <div class="sticky" data-sticky stickTo="top" data-margin-top="0" id="thinkertop">
            <nav class="top-bar" data-magellan data-options="barOffset:30;" activeClass="active">
                <div class="top-bar-left">
                    <ul class="menu">
                        <a href="home"><li class="menu-text"><img src="css/img/logo.png"/></li></a>
                        
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="menu" data-dropdown-menu>
                        <li><a href="error">Portofolio</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="karir">Karir</a></li>
                        <li><a href="www.facebook.com/thinkerStudio"><i class="fa fa-facebook"></i></a></li>
                        <li><a data-open="email"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>


    <section class="center" id="banner">
        <div class="row show-for-medium" data-magellan>
            <h4>Kami mengembangkan</h4>
            <h1 id="tagline"></h1>
            <a class="large hollow button" href="#tentang">Cari tahu!</a>
        </div>
        <div class="row show-for-small-only">
            <h4>Membantu Anda mengembangkan</h4>
            <h2>Aplikasi berbasis web</h2>
            <a class="large hollow button" href="#tentang" data-animate="fade-in fade-out" >Cari tahu!</a>
        </div>
    </section>


    <section id="tentang" data-magellan-target="tentang">
        <div class="row">
            <div class="large-6 columns wow slideInLeft">
                <img src="css/img/img-banner.png" id="ilus1">
            </div>
            <div class="large-6 columns wow slideInRight">
                <h1 class="section-title"><span class="left"></span>SEKILAS<span class="right"></span></h1>
                <p>Thinker Studio merupakan penyedia jasa di bidang Teknologi Informasi dan seni yang berdiri pada tahun 2014 dan bertempat di Surabaya. Kami sedang berfokus mengembangkan berbagai macam proyek Teknologi Informasi maupun desain. Kami telah berkembang dan menjalin kerja sama dengan berbagai instansi.</p>
<!--                <p>kami memadukan teknologi dan seni</p>-->
                <br>
                <!-- <a class="large button">Lihat selengkapnya</a> -->
            </div>
        </div>
    </section>

    <section id="stat">
        <div class="row">
            <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-timer-delay=3000>
                <ul class="orbit-container">
                    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                    <li class="is-active orbit-slide">
                        <h3>Visi Anda berada di tangan yang tepat!</h3>
                        <p><strong>Mewujudkan visi Anda adalah motivasi bagi kami</strong></p>
                    </li>
                    <li class="orbit-slide">
                        <h3>Bukan sekedar mengembangkan</h3>
                        <p><strong>Kami memecahkan masalah!</strong></p>
                    </li>
                    <li class="orbit-slide">
                        <h3>Responsif, komunikatif, inovatif dan kreatif</h3>
                        <p><strong>Tim kami beranggotakan talenta muda yang memiliki segudang inovasi untuk ditawarkan</strong></p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="center" id="fokus">
        <div class="row">
            <h1 class="section-title"><span class="left"></span>FOKUS<span class="right"></span></h1>
            <p>fokus kami mengembangkan aplikasi berbasis web</p>
        </div>
        <br>
        <div class="row" data-magellan>
            <div class="large-3 columns">
                <a href="#respon" class="subfokus">
                    <div class="callout wow slideInRight" id="thumbnail" data-animate="fade-in fade-out" data-wow-delay="0s">
                        <img src="css/img/img-consult.png">
                        <h4>Konsultasi IT</h4>
                        <p>Penawaran solusi IT terbaik untuk bisnis Anda</p>
                    </div>
                </a>
            </div>
            <div class="large-3 columns">
                <a href="#respon" class="subfokus">
                    <div class="callout wow slideInRight" id="thumbnail" data-animate="fade-in fade-out" data-wow-delay=".5s">
                        <img src="css/img/img-si.png">
                        <h4>Sistem Informasi</h4>
                        <p>Integrasi seluruh proses bisnis dalam satu sistem</p>
                    </div>
                </a>
            </div>
            <div class="large-3 columns">
                <a href="#respon" class="subfokus">
                    <div class="callout wow slideInRight" id="thumbnail" data-animate="fade-in fade-out" data-wow-delay="1s">
                        <img src="css/img/img-design.png">
                        <h4>Desain Web</h4>
                        <p>IT dan seni jadi kombinasi sempurna untuk bisnis Anda</p>
                    </div>
                </a>
            </div>
            <div class="large-3 columns">
                <a href="#respon" class="subfokus">
                    <div class="callout wow slideInRight" id="thumbnail" data-animate="fade-in fade-out" data-wow-delay="1.5s">
                        <img src="css/img/img-app.png">
                        <h4>Aplikasi</h4>
                        <p>Mulai membangun aplikasi multimedia yang multifungsi</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="grey center" id="respon" data-magellan-target="respon">
        <h3>Dapatkan solusi terbaik untuk bisnis Anda</h3>
        <p class="subheader">Konsultasikan dan mulai membangun sistem sesuai yang Anda inginkan</p>
        <br>
<!--        <a class="large button" data-open="email">Mulai sekarang</a>-->
        <a class="large button" data-open="email">Mulai sekarang</a>
    </section>

    <section class="footer">
        <div class="row">
            <!-- <div class="large-3 columns">
                <iframe width="360" height="240" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Jalan+Sukolilo+Sejehtera+II+No+49,+Keputih,+Surabaya+City,+East+Java,+Indonesia&key=AIzaSyBXIeL7RGvV9b7uP3iodlK-xfMjkyuuNMc" allowfullscreen></iframe>
            </div> -->
            <div class="large-3 large-offset-1 columns">
                <img src="css/img/logo-white.png">
                <p>Perumahan Sukolilo Dian Regency
                    <br>Jl Sukolilo Sejahtera II No.49
                    <br>Keputih, Sukolilo
                    <br>Surabaya 60111
                    <br>
                    <br><i class="fa fa-phone"></i> +62857-0778-8875
                    <br><i class="fa fa-envelope"></i> thinker.stu@gmail.com
                </p>
            </div>
            <div class="large-2 columns">
                <ul class="menu vertical">
                    <li><strong>CONNECT</strong></li>
                    <li><a href="#">Portofolio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="karir">Karir</a></li>
                </ul>
            </div>
            <div class="large-2 columns">
                <ul class="menu vertical">
                    <li><strong>LINK</strong></li>
                    <li><a href="http://www.ideplex.com">Ideplex</a></li>
                </ul>
            </div>
            <!-- <div class="large-3 columns">
                <ul class="menu vertical">
                    <li><strong>BLOG</strong></li>
                </ul>
            </div> -->
            <div class="large-3 end columns">
                <ul class="menu vertical">
                    <li><strong>KIRIM PESAN</strong></li>
                </ul>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="row">
                        <div class="large-12 columns">
                            <input type="text" placeholder="Nama" name="name" required>
                        </div>
                        <div class="large-12 columns">
                            <input type="email" placeholder="Email" name="email" required>
                        </div>
                        <div class="large-12 columns">
                            <textarea rows="3" placeholder="Pesan" name="message" required></textarea>
                        </div>
                        <button class="button pull-right" type="submit" style="transform: translateX(-20px);">Kirim!</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="row">
            Copyright &copy 2016 Thinker Studio. All rights reserved
        </div>
    </footer>

    <div class="tiny reveal" id="email" data-reveal data-close-on-click="true" data-animation-in="slide-in" data-animation-out="slide-out">
        <h3>Tanyakan apa saja</h3>
<!--        <p class="lead">Your couch. It is mine.</p>-->
        <form action="" method="post">
            <div class="row">
                <div class="large-12 columns">
                    <label>Nama
                        <input type="text" placeholder="Nama" name="name">
                    </label>
                </div>
                <div class="large-12 columns">
                    <label>Email
                        <input type="email" placeholder="Email" name="email">
                    </label>
                </div>
                <div class="large-12 columns">
                    <label>Pesan
                        <textarea rows="3" name="message"></textarea>
                    </label>
                </div>
                <button class="large button pull-right" type="submit">Kirim!</button>
            </div>
        </form>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <script src="bower_components/jquery/dist/jquery.js"></script>
    <script src="bower_components/typed.js/js/typed.js"></script>
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="bower_components/wow/dist/wow.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
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
    <title>Thinker Studio | Karir</title>
    <meta name="Title" content="Thinker Studio | Karir">
    <meta name="description" content="Memulai karir sebagai bagian dari Thinker Studio dengan menjadi pekerja tetap, paruh waktu/part-time maupun internship (KP, magang dan PKL)." />
    <meta name="keywords" content="web,website,mobile,software,software,house,program,aplikasi,web-based,web-app,web-apps,mobile-app,mobile-apps,android,IT,konsultasi,startup,teknologi,sistem,informasi,erp,scm,toko,online,landing,page,surabaya,indonesia,jawa,timur">
    <meta name="robots" content="index, follow" />
    <meta name="googlebot" content="index,follow" />
    <meta name="msnbot" content="index,follow" />
    <meta name="author" content="Thinker Studio" />
    <meta name="copyright" content="2016 www.thinkerstudio.info" />
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
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
                        <li><a href="http://blog.thinkerstudio.info">Blog</a></li>
                        <li><a href="karir">Karir</a></li>
                        <li><a href="www.facebook.com/thinkerStudio"><i class="fa fa-facebook"></i></a></li>
                        <li><a data-open="email"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <section id="head-karir">
        <div class="row">
            <h2>BERKARIR DI THINKER STUDIO</h2>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="small-8 large-centered columns">
                <h3>PEKERJAAN TERSEDIA</h3>
                <p>Saat ini tidak ada pekerjaan tersedia :(</p>
                <br>
                <h3>FREQUENTLY ASKED QUESTION</h3>
                <ul class="accordion" data-accordion data-allow-all-closed="true" data-multi-expand="true">
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title">Apa saya bisa mengajukan lamaran pekerjaan meskipun sedang tidak dibuka lowongan di posisi yang saya inginkan?</a>
                        <div class="accordion-content" data-tab-content>
                            Apabila Anda merasa memiliki kemampuan khusus, kirimkan CV kreatif ke <span><a mailto:thinker.stu@gmail.com>thinker.stu@gmail.com</a></span> beserta informasi lain yang relevan, seperti portofolio. Kami akan melalukan pertimbangan terhadap kemampuan yang Anda tawarkan :)
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title">Apakah Thinker Studio membuka program internship?</a>
                        <div class="accordion-content" data-tab-content>
                            Ya, Thinker Studio membuka kesempatan internship (kerja praktik, magang, PKL) bagi pelajar dan mahasiswa. Kami akan melakukan seleksi dan screening terhadap setiap lamaran yang masuk.
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title">Bagaimana cara mengajukan internship di Thinker Studio?</a>
                        <div class="accordion-content" data-tab-content>
                            Kirimkan CV kreatif ke <span><a mailto:thinker.stu@gmail.com>thinker.stu@gmail.com</a></span> beserta informasi lain yang relevan, seperti portofolio. Jangan lupa jelaskan mengapa Anda mengajukan aplikasi tersebut dan posisi apa yang Anda inginkan sebagai peserta internship di Thinker Studio. Kami akan melakukan screening kepada calon peserta
                        </div>
                    </li>
                    <li class="accordion-item" data-accordion-item>
                        <a href="#" class="accordion-title">Keuntungan apa yang bisa saya dapatkan dari program internship di Thinker Studio?</a>
                        <div class="accordion-content" data-tab-content>
                            Kesempatan untuk melanjutkan sebagai bagian dari Thinker Studio terbuka lebar bagi peserta internship. 
                        </div>
                    </li>
                </ul>
            </div>
        </div>
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
                    <li><a href="http://blog.thinkerstudio.info">Blog</a></li>
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
                        <button class="button expanded" type="submit">Kirim!</button>
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
    <script src="bower_components/what-input/what-input.js"></script>
    <script src="bower_components/foundation-sites/dist/foundation.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
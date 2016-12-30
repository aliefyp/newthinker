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
    <meta name="description" content="Thinker Studio is a IT solution community, based in Surabaya, East Java. We're not just programmers, we are innovators ! We blend technology & arts. We bring your ideas come to life.">
    <meta name="robots" content="follow">
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
        <div class="title-bar-title"><img src="css/img/logo.png" alt=""></div>
    </div>
    <div data-sticky-container>
        <div class="sticky" data-sticky stickTo="top" data-margin-top="0" id="thinkertop">
            <nav class="top-bar" data-magellan data-options="barOffset:30;" activeClass="active">
                <div class="top-bar-left show-for-medium">
                    <ul class="menu">
                        <a href="home"><li class="menu-text"><img src="css/img/logo.png"/></li></a>
                        
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="menu" data-dropdown-menu>
                        <li><a href="error">Works</a></li>
                        <li><a href="http://blog.thinkerstudio.info">Blog</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="https://www.facebook.com/thinkerStudio" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a data-open="email"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>


    <section class="center" id="banner">
        <div class="row show-for-medium" data-magellan>
            <h4>WE DEVELOP</h4>
            <h1 id="tagline"></h1>
            <a class="large hollow button" href="#tentang">Get Started!</a>
        </div>
        <div class="row show-for-small-only">
            <h4>Membantu Anda mengembangkan</h4>
            <h2>Aplikasi berbasis web</h2>
            <a class="large hollow button" href="#tentang" data-animate="fade-in fade-out" >Get Started!</a>
        </div>
    </section>


    <section id="tentang" data-magellan-target="tentang">
        <div class="row">
            <div class="large-6 columns wow slideInLeft">
                <img src="css/img/img-banner.png" id="ilus1" class="show-for-medium">
            </div>
            <div class="large-6 columns wow slideInRight">
                <h1 class="section-title"><span class="left"></span>HELLO !<span class="right"></span></h1>
                <p>We are Thinker Studio. We're not just programmers, we are innovators ! <br>We blend technology & arts. We bring your ideas come to life.</p>
                <br>
            </div>
        </div>
    </section>


    <section class="center" id="fokus">
        <div class="row" data-magellan>
            <div class="large-3 small-6 columns">
                <a href="#respon" class="subfokus">
                    <div class="callout wow slideInRight" id="thumbnail" data-animate="fade-in fade-out" data-wow-delay="0s">
                        <img src="css/img/img-consult.png">
                        <h5>IT SOLUTION</h5>
                        <p>We offer best digital solution for your business.</p>
                    </div>
                </a>
            </div>
            <div class="large-3 small-6 columns">
                <a href="#respon" class="subfokus">
                    <div class="callout wow slideInRight" id="thumbnail" data-animate="fade-in fade-out" data-wow-delay=".5s">
                        <img src="css/img/img-si.png">
                        <h5>WEB APPS</h5>
                        <p>Integrate your whole business process into a platform.</p>
                    </div>
                </a>
            </div>
            <div class="large-3 small-6 columns">
                <a href="#respon" class="subfokus">
                    <div class="callout wow slideInRight" id="thumbnail" data-animate="fade-in fade-out" data-wow-delay="1s">
                        <img src="css/img/img-design.png">
                        <h5>WEB DESIGN</h5>
                        <p>Solutions by combining technology and creativity</p>
                    </div>
                </a>
            </div>
            <div class="large-3 small-6 columns">
                <a href="#respon" class="subfokus">
                    <div class="callout wow slideInRight" id="thumbnail" data-animate="fade-in fade-out" data-wow-delay="1.5s">
                        <img src="css/img/img-app.png">
                        <h5>MOBILE APPS</h5>
                        <p>Multifunction multimedia platform is in your hand.</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section class="center" id="works">
        <div class="row">
            <h1 class="section-title"><span class="left"></span>OUR WORKS<span class="right"></span></h1>
        </div>
        <!-- <div class="row">
            <div class="large-6 columns">
                <div class="row">
                    <div class="large-12 columns">
                        <div class="img-block">
                            <a href="#">
                                <img src="css/img/journal.jpg">
                                <div class="overlay">
                                    <h1>OPEN<br>JOURNAL<br>SYSTEM</h1>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="large-6 columns">
                <div class="row">
                    <div class="large-6 columns">
                         <div class="img-block">
                            <a href="#">
                                <img src="css/img/ship.jpg">
                                <div class="overlay">
                                    <h4>SHIP ADJUSTING MANAGEMENT</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="large-6 columns">
                        <div class="img-block">
                            <a href="#">
                                <img src="css/img/ticket.jpg">
                                <div class="overlay">
                                    <h4>ONLINE TICKETING</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="large-6 columns">
                         <div class="img-block">
                            <a href="#">
                                <img src="css/img/school.jpg">
                                <div class="overlay">
                                    <h4>SCHOLARSHIP MANAGEMENT</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="large-6 columns">
                        <div class="img-block">
                            <a href="#">
                                <img src="css/img/culture.jpg">
                                <div class="overlay">
                                    <h4>CULTURE EVENT WEB PROFILE</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="large-4 small-12 columns">
                <a href="#">
                    <div class="callout">
                        <div class="row">
                            <div class="large-6 small-6 columns">
                                <img src="css/img/work1.png" alt="scm">
                            </div>
                            <div class="large-6 small-6 columns textcol">
                                <h6>Journal System</h6>
                                <p class="subheader">JGLR, IJCP</p>
                                <br>
                                <button class="tiny button hollow" href="#">Read more</button>
                            </div>
                        </div>  
                    </div>
                </a>
            </div>
            <div class="large-4 small-12 columns">
                <a href="#">
                    <div class="callout">
                        <div class="row">
                            <div class="large-6 small-6 columns">
                                <img src="css/img/work2.png" alt="ojs">
                            </div>
                            <div class="large-6 small-6 columns textcol">
                                <h6>SCM</h6>
                                <p class="subheader">Log.is</p>
                                <br>
                                <button class="tiny button hollow" href="#">Read more</button>
                            </div>
                        </div>  
                    </div>
                </a>
            </div>
            <div class="large-4 small-12 columns">
                <a href="#">
                    <div class="callout">
                        <div class="row">
                            <div class="large-6 small-6 columns">
                                <img src="css/img/work3.png" alt="ojs">
                            </div>
                            <div class="large-6 small-6 columns textcol">
                                <h6>E-Learning</h6>
                                <p class="subheader">Dokter Belajar</p>
                                <br>
                                <button class="tiny button hollow" href="#">Read more</button>
                            </div>
                        </div>  
                    </div>
                </a>
            </div>
            <div class="large-4 small-12 columns">
                <a href="#">
                    <div class="callout">
                        <div class="row">
                            <div class="large-6 small-6 columns">
                                <img src="css/img/work4.png" alt="ojs">
                            </div>
                            <div class="large-6 small-6 columns textcol">
                                <h5>Ticketing</h5>
                                <p class="subheader">Side Story Family</p>
                                <br>
                                <button class="tiny button hollow" href="#">Read more</button>
                            </div>
                        </div>  
                    </div>
                </a>
            </div>
            <div class="large-4 small-12 columns">
                <a href="#">
                    <div class="callout">
                        <div class="row">
                            <div class="large-6 small-6 columns">
                                <img src="css/img/journal.jpg" alt="ojs">
                            </div>
                            <div class="large-6 small-6 columns textcol">
                                <h5>Judul</h5>
                                <p class="subheader">Deskripsi</p>
                            </div>
                        </div>  
                    </div>
                </a>
            </div>
            <div class="large-4 small-12 columns">
                <a href="#">
                    <div class="callout">
                        <div class="row">
                            <div class="large-6 small-6 columns">
                                <img src="css/img/journal.jpg" alt="ojs">
                            </div>
                            <div class="large-6 small-6 columns textcol">
                                <h5>Judul</h5>
                                <p class="subheader">Deskripsi</p>
                            </div>
                        </div>  
                    </div>
                </a>
            </div>

        </div>
        <br>
        <a class="button hollow">See more</a>
    </section>

    <section class="grey center" id="respon" data-magellan-target="respon">
        <h3>Get a best solution for your business.</h3>
        <p class="subheader">Consult now and start to build your own system.</p>
        <br>
<!--        <a class="large button" data-open="email">Mulai sekarang</a>-->
        <a class="large button" data-open="email">Start Now</a>
    </section>

    <section class="footer">
        <div class="row">
            <!-- <div class="large-3 columns">
                <iframe width="360" height="240" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Jalan+Sukolilo+Sejehtera+II+No+49,+Keputih,+Surabaya+City,+East+Java,+Indonesia&key=AIzaSyBXIeL7RGvV9b7uP3iodlK-xfMjkyuuNMc" allowfullscreen></iframe>
            </div> -->
            <div class="large-3 large-offset-1 small-12 columns">
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
            <div class="large-2 small-6 columns">
                <ul class="menu vertical">
                    <li><strong>CONNECT</strong></li>
                    <li><a href="#">Works</a></li>
                    <li><a href="http://blog.thinkerstudio.info">Blog</a></li>
                    <li><a href="karir">Career</a></li>
                </ul>
            </div>
            <div class="large-2 small-6 columns">
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
            <div class="large-3 small -12 end columns">
                <ul class="menu vertical">
                    <li><strong>KIRIM PESAN</strong></li>
                </ul>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="row">
                        <div class="input-group">
                            <input class="input-group-field" type="text" placeholder="Nama" name="name" required>
                            <span class="input-group-label"><i class="fa fa-font"></i></span>  
                        </div>
                        <div class="input-group">
                            <input class="input-group-field" type="email" placeholder="Email" name="email" required>
                            <span class="input-group-label"><i class="fa fa-envelope-o"></i></span>  
                        </div>
                        <textarea rows="3" placeholder="Pesan" name="message" required></textarea>
                        <button class="button pull-right" type="submit">Kirim!</button>
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
                <div class="input-group">
                    <input class="input-group-field" type="text" placeholder="Nama" name="name" required>
                    <span class="input-group-label"><i class="fa fa-font"></i></span>  
                </div>
                <div class="input-group">
                    <input class="input-group-field" type="email" placeholder="Email" name="email" required>
                    <span class="input-group-label"><i class="fa fa-envelope-o"></i></span>  
                </div>
                <textarea rows="3" placeholder="Pesan" name="message" required></textarea>
                <button class="button pull-right" type="submit">Kirim!</button>
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
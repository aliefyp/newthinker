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
    <title>Open Journal System | Thinker Studio</title>
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
                        <li><a href="error">Works</a></li>
                        <li><a href="http://blog.thinkerstudio.info">Blog</a></li>
                        <li><a href="karir">Career</a></li>
                        <li><a href="https://www.facebook.com/thinkerStudio" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a data-open="email"><i class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>



    <section id="works">
        <div class="row">
            <div class="large-3 columns">
                <div class="img-block">
                    <img src="css/img/logo-ojs.jpg">
                </div>
            </div>
            <div class="large-8 large-offset-1 columns">
                <div class="row column">
                    <h3>Open Journal System</h3>
                    <p>Open Journal System (OJS) adalah platform pengelolaan jurnal ilmiah secara online. OJS memungkinkan pengelola jurnal untuk migrasi dari sistem pengelolaan offline menjadi online. Mulai dari sebuah manuscript dikirim oleh penulis, proses reviewing, tracking, dan sebagainya hingga manuscript tersebut diterima untuk diterbitkan dalam sebuah jurnal, semuanya bisa dilakukan dengan OJS. Oleh karena itu, di samping hemat karena bersifat paperless, penggunaan OJS juga sangat cocok untuk kondisi di Indonesia yang secara geografis sangat luas.</p>
                </div>
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
                    <li><a href="#">Works</a></li>
                    <li><a href="http://blog.thinkerstudio.info">Blog</a></li>
                    <li><a href="karir">Career</a></li>
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
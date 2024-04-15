<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/uikit.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="js/uikit.js"></script>
    <script src="js/uikit-icons.js"></script>

    <title>Portofolio</title>
</head>
<body>
<!-- Navigation Bar -->
    <nav class="uk-navbar-container uk-margin-small-left uk-margin-small-right uk-visible@m uk-margin-xlarge-left uk-margin-xlarge-right" uk-navbar uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
    
    <div class="uk-navbar-left">
        <a href="" class="uk-navbar-item uk-logo uk-light">Naia Fitrah Alia.</a>
    </div>
    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav uk-light">
            <li><a class="uk-button-text uk-text-capitalize" href="#about" uk-scroll>Profil</a></li>
            <li><a class="uk-button-text uk-text-capitalize" href="#projects" uk-scroll>Portofolio</a></li>
            <li><a class="uk-button-text uk-text-capitalize" href="https://www.instagram.com/naiaaliaa" uk-scroll>Kontak</a></li>

        </ul>

    </div>
</nav>
<!-- Navigation Bar Ends  -->

<!-- Navigation Bar Mobile -->
<nav class="uk-navbar-container uk-margin-small-left uk-margin-small-right uk-hidden@m uk-margin-xlarge-left uk-margin-xlarge-right" uk-navbar uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
    
    <div class="uk-navbar-left">
        <a href="" class="uk-navbar-item uk-logo uk-light">Naia Fitrah Alia.</a>
    </div>
    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav uk-light">
            <li><button uk-toggle="target: #offcanvas-nav" type="button" uk-navbar-toggle-icon></button></li>

        </ul>

    </div>
</nav>
<!-- Change This -->
<div id="offcanvas-nav" uk-offcanvas="overlay: true">
    <div class="uk-offcanvas-bar uk-flex uk-flex-column">

        <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
            <li class="uk-active"><a href="#about" uk-scroll>Profil</a></li>
            <li class="uk-active"><a href="#projects" uk-scroll>Portofolio</a></li>
            <li class="uk-active"><a href="mailto:">Kontak</a></li> <!--- change to ur email-->

        </ul>




    </div>
</div>

<!-- Navigation Bar Mobile Ends -->
<!-- Home -->
<section class="uk-margin-small-left uk-margin-small-right uk-margin-xlarge-top uk-margin-xlarge-bottom">
    <h1 class="uk-margin-xlarge-left uk-light uk-text-left uk-margin-xlarge-right">Namaku Naia Fitrah Alia, programmer yang berdedikasi <br> memiliki keahlian teknis yang kuat <br> selalu berusaha untuk menciptakan solusi inovatif</h1>
    <a href="#about" class="uk-margin-xlarge-left uk-text-capitalize uk-button uk-button-secondary" uk-scroll>Tentang Ku</a>


</section>

<!-- Home Ends -->
<br>


<hr class="uk-margin-xlarge-top uk-margin-xlarge-left uk-margin-xlarge-right">

<!-- About Me -->
<section id="about" class="uk-margin-small-left uk-margin-small-right uk-margin-xlarge-top uk-margin-xlarge-bottom">
<h3 class="uk-margin-xlarge-left uk-light">Tentang Ku</h3>
<!-- Change here to ur paragraph -->
<p class="uk-margin-xlarge-left uk-margin-xlarge-right">Saya, Naia Fitrah Alia, adalah seorang programmer berdedikasi dengan keahlian teknis yang kuat. Saya memiliki kemampuan untuk memecahkan masalah yang kompleks dan menciptakan solusi inovatif untuk tantangan yang saya hadapi. Saya selalu berusaha untuk belajar dan mengadaptasi teknologi baru, yang membuat saya menjadi aset berharga dalam setiap tim pengembangan perangkat lunak.<br><br>Dalam pekerjaan saya, saya tidak hanya fokus pada penulisan kode, tetapi juga pada pemahaman mendalam tentang bisnis dan kebutuhan pengguna. Saya percaya bahwa pemrograman bukan hanya tentang menulis kode yang berfungsi, tetapi juga tentang menciptakan aplikasi yang bermanfaat dan mudah digunakan. Dengan pendekatan ini, saya, Naia Fitrah Alia, telah membuktikan diri sebagai seorang programmer yang handal dan berpengaruh.</p>
<a href="https://www.instagram.com/naiaaliaa" class="uk-margin-xlarge-left uk-light uk-button-text" uk-icon="instagram"></a> &nbsp;<a href="https://github.com/naiaalia" class="uk-button-text uk-light" uk-icon="github"></a>

<!-- About Me Ends -->




</section>

<!-- Projects Section -->
<hr class="uk-margin-xlarge-left uk-margin-xlarge-right">
<section id="projects" class="uk-margin-small-left uk-margin-small-right uk-margin-xlarge-top uk-margin-xlarge-bottom">
<h3 class="uk-margin-xlarge-left uk-light">Portofolio</h3>
<p class="uk-margin-xlarge-left">Pekerjaan yang sudah saya selesaikan.</p>

<div class="uk-margin-xlarge-left uk-margin-xlarge-right">
    <!-- Change all of this to ur projects -->
    <div class="uk-margin uk-card uk-card-secondary uk-card-body ">
        <h4>Sistem Manajemen Inventaris</h4>
        <p>Sebuah aplikasi berbasis web yang saya kembangkan untuk membantu perusahaan dalam mengelola inventaris mereka. Aplikasi ini mencakup fitur seperti pelacakan stok, pemesanan, dan laporan penjualan.</p>
        <a class="uk-button-text uk-text-decoration-none" href="">
            <span uk-icon="icon: link">
            </span> Kunjungi </a>
        </div>
        <div class="uk-margin uk-card uk-card-secondary uk-card-body ">
            <h4>Aplikasi Mobile Perbankan</h4>
            <p>Saya telah bekerja pada proyek ini sebagai bagian dari tim pengembangan. Aplikasi ini memungkinkan pengguna untuk melakukan transaksi perbankan seperti transfer uang, pembayaran tagihan, dan pengecekan saldo.</p>
            <a class="uk-button-text uk-text-decoration-none" href="">
                <span uk-icon="icon: link">
                </span> Kunjungi </a>
            </div></div>



    <br>


</section>
<hr class="uk-margin-xlarge-left uk-margin-xlarge-right">
</div>
<!-- Projects Section Ends -->
    
</body>
</html>
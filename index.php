<!DOCTYPE html>
<html lang="en">

<head>
 <?php include "templates/component/head.php"; ?>


</head>
 
<body>
    <div class="uk-offcanvas-content">
        <?php include "templates/component/navbar.php" ?>
        <main>
            <section class="uk-position-relative uk-visible-toggle " uk-slideshow="min-height: 500; max-height: 600;">
                <ul class="uk-slideshow-items">
                    <li>
                        <div class="uk-margin-top-baru uk-flex-middle uk-margin-left" uk-grid>
                            <div class="uk-width-expand ">
                                <p style="font-size:25px;color: darkgreen" >Inovasi Bangun Negeri
                                </p>
                                 <p><i>Agromina.id adalah flatform yang memasarkan inovasi dibidang pertanian dan
                                        perikanan
                                        untuk memperkenalkan inovasi secara global guna menumbuhkan ekonomi lokal.</i>
                                </p>
                                <a class="uk-button uk-button-primary" href="#">Mari Belanja</a>
                            </div>
                            <div class="uk-width-auto">
                                <img src="images/promo/agromina " class="uk-margin-xsmall-left" alt="Image">
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="uk-flex-middle uk-margin-xsmall-left " uk-grid>
                            <div class="k-width-small uk-margin">
                                <p style="font-size:25px;color: darkgreen" class="uk-text-center">Inovasi Bangun Negeri
                                </p>
                                <p><i>Rasakan Pengalaman berbelanja dengan lebih mudah melalui aplikasi Mobile</i></p>
                                <center><a class="uk-button uk-button-primary" href="#">Get It On Googleplay </a>
                                </center>

                            </div>
                            <div class="uk-width-auto uk-margin-left">
                                <img src="images/about/slider1.png " class="uk-margin-xsmall-left" alt="Image">
                            </div>
                        </div>
                    </li>

                </ul><a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                    uk-slideshow-item="previous" uk-slidenav-previous></a><a
                    class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slideshow-item="next"
                    uk-slidenav-next></a>

                <div class="uk-position-bottom-center uk-position-small">
                    <ul class="uk-slideshow-nav uk-dotnav"></ul>
                </div>
            </section>
            <hr class="line ">
            <section class="uk-section uk-section-default uk-section-small">
                <div class="uk-container uk-margin-bottom">
                    <div class="row">
                        <div class="uk-grid">
                            <div class="uk-width-1-2 resvon">
                                <div class="uk-card">
                                    <div class="uk-flex-middle" uk-grid>
                                        <div class="uk-width-2-3@m ">
                                            <h2> Padi</h2>
                                            <h4>Kebutuhan Pokok</h4>
                                            <p>Padi merupakan komoditas yang menjadi kebutuhan pokok masyarakat</p>
                                        </div>
                                        <div class="uk-width-1-3@m uk-flex-first">
                                            <img src="images/catalog/padimas.png" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2 resvon">
                                <div class="uk-card">
                                    <div class="uk-flex-middle" uk-grid>
                                        <div class="uk-width-2-3@m">
                                            <h2>Mangrove<h2>
                                            <h4>Ekosistem laut</h4>
                                            <p>Mangrove adalah tumbuhan khas tropis yang tumbuh diwilayah pantai</p>
                                        </div>
                                        <div class="uk-width-1-3@m uk-flex-first">
                                            <img src="images/catalog/mangrove.png" alt="Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
    </div>
    </section>

    <hr class="line ">
    <section class="uk-section uk-section-default uk-section-small">
        <div class="uk-container">
                <div class="uk-flex-middle" uk-grid>
                        <div class="uk-width-2-3@m">
                            <h2>Kelompok UKM Terasi </h2>
                            <h6>Jero Acan</h6>
                            <p>Kelompok usaha bersama yang sudah dimulai sejak 1990 dan di ketahui oleh Ibu Paoziah (55) kini sudah
                                memiliki 10 anggota binaan dan produk yang dihasilkan sudah terdapat banyak </p>
                        </div>
                        <div class="uk-width-1-3@m uk-flex-first">
                            <img src="images/about/jroacan.jpg" alt="Image">
                        </div>
                    </div>
        </div>
        
    </section>
    <hr class="line ">
    <section class="uk-section uk-section-default uk-section-small">
        <div class="uk-container">
            <h4 class="uk-text-center uk-margin-bottom">Kategori</h4>
            <div class="uk-grid-small uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-6@m" uk-grid>
                <div>
                    <a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large"
                        href="KategoriBeras.php">
                        <div class="tm-ratio tm-ratio-4-3">
                            <div class="tm-media-box">
                                <figure class="tm-media-box-wrap"><img class="item-brand" src="images/catalog/beras.png"
                                        alt="beras"></figure>
                            </div>
                        </div>
                        <div class="uk-margin-small-top">
                            <div class="uk-text-truncate">Beras</div>

                        </div>
                    </a></div>
                <div><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large"
                        href="KategoriMakanan.php">
                        <div class="tm-ratio tm-ratio-4-3">
                            <div class="tm-media-box">
                                <figure class="tm-media-box-wrap"><img class="item-brand"
                                        src="images/catalog/makanan.jpg" alt="makanan"></figure>
                            </div>
                        </div>
                        <div class="uk-margin-small-top">
                            <div class="uk-text-truncate">Makanan</div>

                        </div>
                    </a></div>
                <div><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large"
                        href="KategoriMinuman.php">
                        <div class="tm-ratio tm-ratio-4-3">
                            <div class="tm-media-box">
                                <figure class="tm-media-box-wrap"><img class="item-brand"
                                        src="images/products/1/jus.png" alt="minuman"></figure>
                            </div>
                        </div>
                        <div class="uk-margin-small-top">
                            <div class="uk-text-truncate">Minuman</div>
                        </div>
                    </a></div>
                <div><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large"
                        href="Kategorisayur.php">
                        <div class="tm-ratio tm-ratio-4-3">
                            <div class="tm-media-box">
                                <figure class="tm-media-box-wrap"><img class="item-brand" src="images/catalog/sayur.jpg"
                                        alt="sayur"></figure>
                            </div>
                        </div>
                        <div class="uk-margin-small-top">
                            <div class="uk-text-truncate">Sayur-sayuran</div>

                        </div>
                    </a></div>
                <div><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large"
                        href="KategoriBumbudapur.php">
                        <div class="tm-ratio tm-ratio-4-3">
                            <div class="tm-media-box">
                                <figure class="tm-media-box-wrap"><img class="item-brand"
                                        src="images/catalog/bumbudapur.jpg" alt="bumbudapur">
                                </figure>
                            </div>
                        </div>
                        <div class="uk-margin-small-top">
                            <div class="uk-text-truncate">Bumbu Dapur</div>
                        </div>
                    </a></div>
                <div><a class="uk-link-muted uk-text-center uk-display-block uk-padding-small uk-box-shadow-hover-large"
                        href="KategoriBuah.php">
                        <div class="tm-ratio tm-ratio-4-3">
                            <div class="tm-media-box">
                                <figure class="tm-media-box-wrap"><img class="item-brand" src="images/catalog/jeruk.png"
                                        alt="buah"></figure>
                            </div>
                        </div>
                        <div class="uk-margin-small-top">
                            <div class="uk-text-truncate">Buah-buahan</div>

                        </div>
                    </a></div>
            </div>

        </div>
    </section>
    <hr class="linecolor">
    <section class="uk-section uk-section-small">
        <div class="uk-container">
        <?php include "templates/component/unggulan.php"?>
        </div>
    </section>
    <hr class="linecolor2">

    <section class="uk-section uk-section-default uk-section-small minsection">
        <div class="uk-container">
            <div class="uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2>Kerupuk Cangkang Kepiting</h2>
                    <h3>Makanan Ringan Khasiat Segudang</h3>
                    <p style="color: #1f2024" class="uk-margin-bottom">Kerupuk adalah makanan pendamping yang
                        biasanya disajikan sebagai
                        pelengkap makan seperti
                        halnya kecap. Hampir di seluruh dunia kenal dengan makanan khas yang satu ini karena
                        kemudahannya di temukan. Namun, kerupuk yang satu ini tidak hanya sebagai makanan
                        pendamping tapi dapat memberi kebaikan untuk tubuh karena kandungan senyawa yang di
                        dalamnya dapat mencegah sel kanker. Penasaran?</p>
                    <div class="uk-grid">
                        <div><a class="uk-button uk-button-primary uk-margin-small " href="#">Selengkapnya</a>
                        </div>
                        <div><a class="uk-button uk-button-success uk-margin-small" href="subcategory.php">Mari
                                belanja</a></div>
                    </div>
                </div>
                <div class="uk-width-1-2@m uk-flex-first">
                    <img src="images/products/1/kripik.png" alt="Image">
                </div>
            </div>

        </div>


    </section>
    <hr class="linecolor">

    <section class="uk-section uk-section-small">
       <?php include "templates/component/cerita.php"?>
    </section>
    <hr class="linecolor2">

    <section class="uk-section uk-section-default uk-section-small">
        <div class="uk-container uk-margin-bottom">
            <h2 class="uk-text-center">Apa pendapat Mereka ?</h2>
            <p class="uk-text-center">Testimoni masyarakat tentang produk agromina.id</p>
            <hr class="style5">
            <div class="row">
                <div class="uk-grid">
                    <div class="uk-width-1-2@m">
                        <div class="uk-card">
                            <div class="uk-width-2-3@m">
                                <div class="uk-width-1-2@m ">
                                    <img class="uk-border-circle " src="images/dedi-sunandar.jpg" alt="">
                                    <p class="textp"> Dedi Sunandar</p>
                                    <p><i class="fas fa-map-marker"></i> &nbsp;&nbsp;Masbagik</p>
                                </div>
                            </div>
                            <p>”Saya baru pertama kali beli di sini. Produk asli lokal yang higenis
                                tanpa bahan pengawet. Beda banget kalo dibandingin sama beli di
                                supermarket, dan yang paling saya suka dari sini adalah ada sisi
                                pemberdayaan masyaraktnya.”​</p>
                        </div>
                    </div>

                    <div class="uk-width-1-2@m">
                        <div class="uk-card">
                            <div class="uk-flex-middle">
                                <div class="uk-width-2-3@m">
                                    <div class="uk-width-1-2@m ">
                                        <img class="uk-border-circle " src="images/juandi.jpeg" alt="">
                                        <p class="textp">Juandi</p>
                                        <p><i class="fas fa-map-marker"></i> &nbsp;&nbsp;Suryawangi</p>
                                    </div>
                                </div>
                                <p>“Semua produk yang dikirimkan Agromina selalu memuaskan dan segar. Menurut
                                    saya, harga yang diberikan sepadan dengan kualitas yang didapatkan."​</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr class="style5">
            <div class="row">
                <div class="uk-grid">
                    <div class="uk-width-1-2@m">
                        <div class="uk-card">
                            <div class="uk-flex-middle">
                                <div class="uk-width-2-3@m">
                                    <div class="uk-width-1-2@m ">
                                        <div class="uk-width-1-0@m"><img class="uk-border-circle uk-text-center"
                                                src="images/sudana.jpg" alt=""></div>
                                        <p class="textp">Sudana Irsyad</p>
                                        <p><i class="fas fa-map-marker"></i> &nbsp;&nbsp;Tanjung</p>
                                    </div>
                                </div>
                                <p>“Alhamdulillah, selain praktis dan lebih hemat belanja di Agromina juga bisa
                                    langsung membantu petani dan ukm-ukm.”​</p>

                            </div>
                        </div>
                    </div>

                    <div class="uk-width-1-2@m">
                        <div class="uk-card">
                            <div class="uk-flex-middle">
                                <div class="uk-width-2-3@m">
                                    <div class="uk-width-1-2@m ">
                                        <img class="uk-border-circle uk-text-center" src="images/riswanda.jpeg" alt="">
                                        <p class="textp">Riswanda Alwathoni</p>
                                        <p><i class="fas fa-map-marker"></i> &nbsp;&nbsp;Sikur</p>

                                    </div>
                                </div>
                                <p>“Alhamdulillah, sudah beberapa kali belanja di agromina sesuai dengan harga
                                    yang wajar dan pelayanannya memuaskan dan sekaligus membantu pelaku usaha
                                    kecil yang ada di desa "​</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </section>
    <hr class="linecolor">




    </section>
    <section class="uk-section  uk-section-small">
        <div class="uk-container">
            <div class="uk-margin-medium-top" uk-slider="finite: true">
                <div class="uk-position-relative">
                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                        <div class="uk-visible@m"><a href="#" uk-slidenav-previous uk-slider-item="previous"></a></div>
                        <div class="uk-width-expand uk-slider-container">
                            <ul class="uk-slider-items uk-child-width-1-3 uk-child-width-1-6@s uk-grid uk-grid-large">
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box " href="#" title="Apple">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/logo-bappernas.png"
                                                    alt="Apple"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box " href="#" title="Samsung">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/lomboktimur.png"
                                                    alt="Samsung"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box " href="#" title="Sony">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/canada.png"
                                                    alt="Sony"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box" href="#" title="Microsoft">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/nslc3.png"
                                                    alt="Microsoft"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box " href="#" title="Intel">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/cwarter.png"
                                                    alt="Intel"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box " href="#" title="Intel">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/lpsdm.png"
                                                    alt="Intel"></figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box " href="#" title="HP">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/sangarit.png" alt="HP">
                                            </figure>
                                        </a></div>
                                </li>
                                <li>
                                    <div class="tm-ratio tm-ratio-16-9"><a
                                            class="uk-link-muted tm-media-box " href="#" title="LG">
                                            <figure class="tm-media-box-wrap"><img src="images/brands/agrominanusra.png" alt="LG">
                                            </figure>
                                        </a></div>
                                </li>
                               
                                
                            </ul>
                        </div>
                        <div class="uk-visible@m"><a href="#" uk-slider-item="next" uk-slidenav-next></a></div>
                    </div>
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top uk-hidden@m"></ul>
            </div>
            <div class="uk-margin uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all"></a>
            </div>
        </div>
    </section>

    <section class="uk-section uk-section-primary uk-section-small uk-light">
        <div class="uk-container">
            <div class="uk-text-center">
                <div class="uk-h2 uk-margin-remove">Berita & Pembaharuan</div>
                <div>Daftar di buletin kami untuk mendapat informasi terbaru dari kami</div>
            </div>
            <div class="uk-margin">
                <form>
                    <div class="uk-grid-small uk-flex-center" uk-grid>
                        <div class="uk-width-1-1 uk-width-medium@s">
                            <div class="uk-inline uk-width-1-1"><span class="uk-form-icon" uk-icon="mail"></span><input
                                    class="uk-input" type="email" placeholder="Your email" required></div>
                        </div>
                        <div><button class="uk-button uk-button-primary">subscribe</button></div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    </main>
    <footer>
        <?php include "templates/component/footer.php"?>
    </footer>
    <div id="nav-offcanvas" uk-offcanvas="overlay: true">
        <aside class="uk-offcanvas-bar uk-padding-remove">
            <div class="uk-card uk-card-default uk-card-small tm-shadow-remove">
                <header class="uk-card-header uk-flex uk-flex-middle">
                    <div><a class="uk-link-muted uk-text-bold" href="#">+6287881194047</a>
                        <div class="uk-text-xsmall uk-text-muted" style="margin-top: -2px;">
                            <div>Dasan&nbsp; sawe,&nbsp;RT 001/ RW 001,&nbsp;Kel/desa.Banjarsari,&nbsp;kec. Labuhan
                                &nbsp;Haji</div>
                            <div>Melayani 24 jam</div>
                            <div>Daily 10:00–22:00</div>
                        </div>
                    </div>
                </header>
                <nav class="uk-card-small uk-card-body">
                    <ul class="uk-nav-default uk-nav-parent-icon uk-list-divider" uk-nav>
                        <li><a href="index.php">Beranda</a>
                        </li>
                        <li><a href="produk.php">Produk</a>

                        </li>
                        <li><a href="#">Pesan Paket</a>
                        </li>
                        <li><a href="cerita_dan_kegiatan.php">Cerita dan Kegiatan</a></li>
                        <li><a href="about.php">Tentang Kami</a></li>
                        <li><a href="compare.php">Compare<span class="uk-badge uk-margin-xsmall-left">3</span></a>
                        </li>
                    </ul>
                </nav>
                <nav class="uk-card-small uk-card-body">
                    <ul class="uk-nav uk-nav-default">
                        <li><a href="news.php">News</a></li>
                        <li><a href="faq.php">FAQ</a></li>
                        <li><a href="#">Payment</a></li>
                    </ul>
                </nav>
                <nav class="uk-card-body">
                    <ul class="uk-iconnav uk-flex-center">
                        <li><a href="#" title="Facebook" uk-icon="facebook"></a></li>
                        <li><a href="#" title="Twitter" uk-icon="twitter"></a></li>
                        <li><a href="#" title="YouTube" uk-icon="youtube"></a></li>
                        <li><a href="#" title="Instagram" uk-icon="instagram"></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
    </div>
    <div id="cart-offcanvas" uk-offcanvas="overlay: true; flip: true">
        <aside class="uk-offcanvas-bar uk-padding-remove">
            <div class="uk-card uk-card-default uk-card-small uk-height-1-1 uk-flex uk-flex-column tm-shadow-remove">
                <header class="uk-card-header uk-flex uk-flex-middle">
                    <div class="uk-grid-small uk-flex-1" uk-grid>
                        <div class="uk-width-expand">
                            <div class="uk-h3">Cart</div>
                        </div><button class="uk-offcanvas-close" type="button" uk-close></button>
                    </div>
                </header>
                <div class="uk-card-body uk-overflow-auto">
                    <ul class="uk-list uk-list-divider">
                        <li class="uk-visible-toggle">
                            <article>
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-1-4">
                                        <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.php">
                                                <figure class="tm-media-box-wrap"><img
                                                        src="images/products/1/1-small.jpg"
                                                        alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                </figure>
                                            </a></div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="uk-text-meta uk-text-xsmall">Laptop</div><a
                                            class="uk-link-heading uk-text-small" href="product.php">Apple MacBook
                                            Pro 15&quot; Touch Bar MPTU2LL/A
                                            256GB (Silver)</a>
                                        <div class="uk-margin-xsmall uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-text-bolder uk-text-small">$1599.00</div>
                                            <div class="uk-text-meta uk-text-xsmall">1 × $1599.00</div>
                                        </div>
                                    </div>
                                    <div><a class="uk-icon-link uk-text-danger uk-invisible-hover" href="#"
                                            uk-icon="icon: close; ratio: .75" uk-tooltip="Remove"></a></div>
                                </div>
                            </article>
                        </li>
                        <li class="uk-visible-toggle">
                            <article>
                                <div class="uk-grid-small" uk-grid>
                                    <div class="uk-width-1-4">
                                        <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.php">
                                                <figure class="tm-media-box-wrap"><img
                                                        src="images/products/2/2-small.jpg"
                                                        alt="Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)">
                                                </figure>
                                            </a></div>
                                    </div>
                                    <div class="uk-width-expand">
                                        <div class="uk-text-meta uk-text-xsmall">Laptop</div><a
                                            class="uk-link-heading uk-text-small" href="product.php">Apple MacBook
                                            12&quot; MNYN2LL/A 512GB (Rose Gold)</a>
                                        <div class="uk-margin-xsmall uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-text-bolder uk-text-small">$1549.00</div>
                                            <div class="uk-text-meta uk-text-xsmall">1 × $1549.00</div>
                                        </div>
                                    </div>
                                    <div><a class="uk-icon-link uk-text-danger uk-invisible-hover" href="#"
                                            uk-icon="icon: close; ratio: .75" uk-tooltip="Remove"></a></div>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
                <footer class="uk-card-footer">
                    <div class="uk-grid-small" uk-grid>
                        <div class="uk-width-expand uk-text-muted uk-h4">Subtotal</div>
                        <div class="uk-h4 uk-text-bolder">$3148.00</div>
                    </div>
                    <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-margin-small" uk-grid>
                        <div><a class="uk-button uk-button-default uk-margin-small uk-width-1-1" href="cart.php">view
                                cart</a></div>
                        <div><a class="uk-button uk-button-primary uk-margin-small uk-width-1-1"
                                href="checkout.php">checkout</a></div>
                    </div>
                </footer>
            </div>
        </aside>
    </div>
    </div>
    <script src="scripts/script.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyClyjCemJi4m2q78gNeGkhlckpdH1hzTYA&amp;callback=initMap"
        async defer></script>
</body>

</php>
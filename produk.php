<!DOCTYPE html>
<html lang="en">

<head>
   
   <?php include "templates/component/head.php"?>
</head>

<body>
    <div class="uk-offcanvas-content">
            <header>
            <?php include "templates/component/navbar.php"?>
                </header>
        <main>
            <section class="uk-section uk-section-small">
                <div class="uk-container">
                    <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                        <div class="uk-text-center">
                            <ul class="uk-breadcrumb uk-flex-center uk-margin-remove">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="produk.php">Produk</a></li>
                                
                            </ul>
                
                        </div>
                        <div>
                            <div class="uk-grid-medium" uk-grid>
                                <aside class="uk-width-1-4 tm-aside-column tm-filters" id="filters"
                                    uk-offcanvas="overlay: true; container: false;">
                                    <div class="uk-offcanvas-bar uk-padding-remove">
                                        <div
                                            class="uk-card uk-card-default uk-card-small uk-flex uk-flex-column uk-height-1-1">
                                            <header class="uk-card-header uk-flex uk-flex-middle">
                                                <div class="uk-grid-small uk-flex-1" uk-grid>
                                                    <div class="uk-width-expand">
                                                        <div class="uk-h3">Filters</div>
                                                    </div><button class="uk-offcanvas-close" type="button"
                                                        uk-close></button>
                                                </div>
                                            </header>
                                            <div class="uk-margin-remove uk-flex-1 uk-overflow-auto"
                                                uk-accordion="multiple: true; targets: &gt; .js-accordion-section"
                                                style="flex-basis: auto">
                                                <section class="uk-card-small uk-card-body">
                                                    <h4 class="uk-margin-small-bottom">Kategori</h4>
                                                    <ul class="uk-nav uk-nav-default">
                                                        <li><a href="kategoriBeras.php">Beras</a></li>
                                                        <li><a href="KategoriMakanan.php">Makanan</a></li>
                                                        <li><a href="KategoriMinuman.php">Minuman</a></li>
                                                        <li><a href="Kategorisayur.php">Sayur-sayuran</a></li>
                                                        <li><a href="KategoriBumbudapur.php">Bumbu dapur</a></li>
                                                        <li><a href="KategoriBuah.php">Buah-Buahan</a></li>
                                                    </ul>
                                                </section>
                                                <section class="uk-card-body uk-open js-accordion-section">
                                                    <h4 class="uk-accordion-title uk-margin-remove">Harga</h4>
                                                    <div class="uk-accordion-content">
                                                        <div class="uk-grid-small uk-child-width-1-2 uk-text-small"
                                                            uk-grid>
                                                            <div>
                                                                <div class="uk-inline"><span
                                                                        class="uk-form-icon uk-text-xsmall">Dari</span><input
                                                                        class="uk-input" type="text" placeholder="Rp 15.000">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="uk-inline"><span
                                                                        class="uk-form-icon uk-text-xsmall">to</span><input
                                                                        class="uk-input" type="text"
                                                                        placeholder="Rp 100.000"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                                <div class="uk-card-body"><button
                                                        class="uk-button uk-button-default uk-width-1-1"><span
                                                            class="uk-margin-xsmall-right"
                                                            uk-icon="icon: close; ratio: .75;"></span>Reset all
                                                        filters</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </aside>
                                <?php include "templates/component/semuaproduk.php"?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
        </main>
        <footer>
                <?php include "templates/component/footer.php"?>
        <div id="nav-offcanvas" uk-offcanvas="overlay: true">
            <aside class="uk-offcanvas-bar uk-padding-remove">
                <div class="uk-card uk-card-default uk-card-small tm-shadow-remove">
                    <header class="uk-card-header uk-flex uk-flex-middle">
                        <div><a class="uk-link-muted uk-text-bold" href="#">8 800 799 99 99</a>
                            <div class="uk-text-xsmall uk-text-muted" style="margin-top: -2px;">
                                <div>St.&nbsp;Petersburg, Nevsky&nbsp;Prospect&nbsp;28</div>
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
                <div
                    class="uk-card uk-card-default uk-card-small uk-height-1-1 uk-flex uk-flex-column tm-shadow-remove">
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
                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                    href="product.php">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/products/1/1-small.jpg"
                                                            alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                    </figure>
                                                </a></div>
                                        </div>
                                        <div class="uk-width-expand">
                                            <div class="uk-text-meta uk-text-xsmall">Laptop</div><a
                                                class="uk-link-heading uk-text-small" href="product.php">Apple MacBook
                                                Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)</a>
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
                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                    href="product.php">
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
                            <div><a class="uk-button uk-button-default uk-margin-small uk-width-1-1"
                                    href="cart.php">view cart</a></div>
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
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
                                <li><span>Cart</span></li>
                            </ul>
                            <h1 class="uk-margin-small-top uk-margin-remove-bottom">Cart</h1>
                        </div>
                        <div>
                            <div class="uk-grid-medium" uk-grid>
                                <div class="uk-width-1-1 uk-width-expand@m">
                                    <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                        <header
                                            class="uk-card-header uk-text-uppercase uk-text-muted uk-text-center uk-text-small uk-visible@m">
                                            <div class="uk-grid-small uk-child-width-1-2" uk-grid>
                                                <div>product</div>
                                                <div>
                                                    <div class="uk-grid-small uk-child-width-expand" uk-grid>
                                                        <div>price</div>
                                                        <div class="tm-quantity-column">quantity</div>
                                                        <div>sum</div>
                                                        <div class="uk-width-auto">
                                                            <div style="width: 20px;"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </header>
                                        <div class="uk-card-body">
                                            <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-flex-middle"
                                                uk-grid>
                                                <!-- Product cell-->
                                                <div>
                                                    <div class="uk-grid-small" uk-grid>
                                                        <div class="uk-width-1-3">
                                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                                    href="product.php">
                                                                    <figure class="tm-media-box-wrap"><img
                                                                            src="images/products/1/1-small.jpg"
                                                                            alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)">
                                                                    </figure>
                                                                </a></div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div class="uk-text-meta">Laptop</div><a
                                                                class="uk-link-heading" href="product.php">Apple
                                                                MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB
                                                                (Silver)</a>
                                                        </div>
                                                    </div>
                                                </div><!-- Other cells-->
                                                <div>
                                                    <div class="uk-grid-small uk-child-width-1-1 uk-child-width-expand@s uk-text-center"
                                                        uk-grid>
                                                        <div>
                                                            <div class="uk-text-muted uk-hidden@m">Price</div>
                                                            <div>$1599.00</div>
                                                        </div>
                                                        <div class="tm-cart-quantity-column"><a
                                                                onclick="increment(-1, 'product-1')"
                                                                uk-icon="icon: minus; ratio: .75"></a><input
                                                                class="uk-input tm-quantity-input" id="product-1"
                                                                type="text" maxlength="3" value="1" /><a
                                                                onclick="increment(+1, 'product-1')"
                                                                uk-icon="icon: plus; ratio: .75"></a></div>
                                                        <div>
                                                            <div class="uk-text-muted uk-hidden@m">Sum</div>
                                                            <div>$1599.00</div>
                                                        </div>
                                                        <div class="uk-width-auto@s"><a class="uk-text-danger"
                                                                uk-tooltip="Remove"><span uk-icon="close"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@m uk-flex-middle"
                                                uk-grid>
                                                <!-- Product cell-->
                                                <div>
                                                    <div class="uk-grid-small" uk-grid>
                                                        <div class="uk-width-1-3">
                                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                                    href="product.php">
                                                                    <figure class="tm-media-box-wrap"><img
                                                                            src="images/products/2/2-small.jpg"
                                                                            alt="Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)">
                                                                    </figure>
                                                                </a></div>
                                                        </div>
                                                        <div class="uk-width-expand">
                                                            <div class="uk-text-meta">Laptop</div><a
                                                                class="uk-link-heading" href="product.php">Apple
                                                                MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)</a>
                                                        </div>
                                                    </div>
                                                </div><!-- Other cells-->
                                                <div>
                                                    <div class="uk-grid-small uk-child-width-1-1 uk-child-width-expand@s uk-text-center"
                                                        uk-grid>
                                                        <div>
                                                            <div class="uk-text-muted uk-hidden@m">Price</div>
                                                            <div>$1549.00</div>
                                                        </div>
                                                        <div class="tm-cart-quantity-column"><a
                                                                onclick="increment(-1, 'product-2')"
                                                                uk-icon="icon: minus; ratio: .75"></a><input
                                                                class="uk-input tm-quantity-input" id="product-2"
                                                                type="text" maxlength="3" value="1" /><a
                                                                onclick="increment(+1, 'product-2')"
                                                                uk-icon="icon: plus; ratio: .75"></a></div>
                                                        <div>
                                                            <div class="uk-text-muted uk-hidden@m">Sum</div>
                                                            <div>$1549.00</div>
                                                        </div>
                                                        <div class="uk-width-auto@s"><a class="uk-text-danger"
                                                                uk-tooltip="Remove"><span uk-icon="close"></span></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-card-footer"><label><span
                                                    class="uk-form-label uk-margin-small-right">Promo Code</span>
                                                <div class="uk-inline"><a class="uk-form-icon uk-form-icon-flip"
                                                        href="#" uk-icon="arrow-right"></a><input
                                                        class="uk-input uk-form-width-small" type="text"></div>
                                            </label></div>
                                    </div>
                                </div>
                                <div class="uk-width-1-1 tm-aside-column uk-width-1-4@m">
                                    <div class="uk-card uk-card-default uk-card-small tm-ignore-container"
                                        uk-sticky="offset: 30; bottom: true; media: @m;">
                                        <div class="uk-card-body">
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand uk-text-muted">Subtotal</div>
                                                <div>$3148</div>
                                            </div>
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand uk-text-muted">Discount</div>
                                                <div class="uk-text-danger">−$29</div>
                                            </div>
                                        </div>
                                        <div class="uk-card-body">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand uk-text-muted">Total</div>
                                                <div class="uk-text-lead uk-text-bolder">$3119</div>
                                            </div><a class="uk-button uk-button-primary uk-margin-small uk-width-1-1"
                                                href="checkout.php">checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="uk-section uk-section-default uk-section-small">
                <div class="uk-container">
                    <div uk-slider>
                        <ul
                            class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-5@m uk-grid">
                            <li>
                                <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                                    <div><span uk-icon="icon: star; ratio: 2.5;"></span></div>
                                    <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                        <div>Mauris placerat</div>
                                        <div class="uk-text-meta">Donec mollis nibh dolor, sit amet auctor</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                                    <div><span uk-icon="icon: receiver; ratio: 2.5;"></span></div>
                                    <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                        <div>Lorem ipsum</div>
                                        <div class="uk-text-meta">Sit amet, consectetur adipiscing elit</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                                    <div><span uk-icon="icon: location; ratio: 2.5;"></span></div>
                                    <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                        <div>Proin pharetra</div>
                                        <div class="uk-text-meta">Nec quam a fermentum ut viverra</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                                    <div><span uk-icon="icon: comments; ratio: 2.5;"></span></div>
                                    <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                        <div>Praesent ultrices</div>
                                        <div class="uk-text-meta">Praesent ultrices, orci nec finibus</div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="uk-grid-small uk-flex-center uk-flex-left@s" uk-grid>
                                    <div><span uk-icon="icon: happy; ratio: 2.5;"></span></div>
                                    <div class="uk-text-center uk-text-left@s uk-width-expand@s">
                                        <div>Duis condimentum</div>
                                        <div class="uk-text-meta">Pellentesque eget varius arcu</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top"></ul>
                    </div>
                </div>
            </section>
        </main>
        <footer>
                <section class="uk-section uk-section-small ">
                        <div class="uk-container">
                            <div class="uk-grid-medium uk-child-width-1-1 uk-child-width-1-4@m" uk-grid>
                                <div><a class="uk-logo" href="index.php"><img src="images/logo.png" width="90" height="32"
                                            alt="Logo"></a>
                                    <p class="uk-text-small">Agromina.id adalah sebuah platform untuk memasarkan produk-produk
                                        UMKM khususnya yang berasal dari hasil pertanian dan kelautan</p>
                                    <ul class="uk-iconnav">
                                        <li><a href="#" title="Facebook" uk-icon="facebook"></a></li>
                                        <li><a href="#" title="Twitter" uk-icon="twitter"></a></li>
                                        <li><a href="#" title="YouTube" uk-icon="youtube"></a></li>
                                        <li><a href="#" title="Instagram" uk-icon="instagram"></a></li>
                                    </ul>
                                </div>
                                <div>
                                    <nav class="uk-grid-small uk-child-width-1-2" uk-grid>
                                        <div>
                                            <ul class="uk-nav uk-nav-default">
                                                <li><a href="catalog.php">Catalog</a></li>
                                                <li><a href="brands.php">Menjadi Mitra</a></li>
                                                <li><a href="delivery.php">Delivery</a></li>
                                                <li><a href="faq.php">FAQ</a></li>
                                                <li><a href="#">Payment</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <ul class="uk-nav uk-nav-default">
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="contacts.php">Contacts</a></li>
                                                <li><a href="cerita_dan_kegiatan.php">Cerita & Kegiatan</a></li>
                                                <li><a href="news.php">News</a></li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <div>
                                    <ul class="uk-list uk-text-small">
                                        <li><a class="uk-link-muted" href="#"><span class="uk-margin-small-right"
                                                    uk-icon="receiver"></span><span class="tm-pseudo">+6287881194047</span></a>
                                        </li>
                                        <li><a class="uk-link-muted" href="#"><span class="uk-margin-small-right"
                                                    uk-icon="mail"></span><span class="tm-pseudo">support@agromina.id</span></a>
                                        </li>
                                        <li>
                                            <div class="uk-text-muted"><span class="uk-margin-small-right"
                                                    uk-icon="location"></span><span>Dasan&nbsp;
                                                    sawe,&nbsp;RT 001/ RW 001,&nbsp;Kel/desa.Banjarsari,&nbsp;kec. Labuhan
                                                    &nbsp;Haji</div>
                                            <div>Melayani 24 jam</span></div>
                                        </li>
                                        <li>
                                            <div class="uk-text-muted"><span class="uk-margin-small-right"
                                                    uk-icon="clock"></span><span>Melayani
                                                    24 jam</span></div>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <form class="uk-form-stacked"><label>
                                            <div class="uk-form-label uk-text-muted">Subscribe for updates</div>
                                            <div class="uk-inline uk-width-1-1"><a class="uk-form-icon uk-form-icon-flip"
                                                    href="#" uk-icon="mail"></a><input class="uk-input" type="email"
                                                    placeholder="Your email" required></div>
                                        </label></form>
                                    <div class="uk-margin uk-text-small uk-text-muted">Shopping Categories icons by Jaro
                                        Sigrist from Noun Project</div>
                                    <div><a class="uk-logo" href="index.php"><img src="images/play-store.png" width="90"
                                                height="32" alt="Logo"></a>
                                    </div>
                                </div>
        
                            </div>
                        </div>
                    </section>
        </footer>
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
                                <arttcle>
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
                                </arttcle>
                            </li>
                            <li class="uk-visible-toggle">
                                <arttcle>
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
                                </arttcle>
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
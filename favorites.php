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
                    <div class="uk-grid-medium" uk-grid>
                        <div class="uk-width-1-1 uk-width-1-4@m tm-aside-column">
                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container"
                                uk-sticky="offset: 90; bottom: true; media: @m;">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                                        <section>
                                            <div
                                                class="uk-width-1-3 uk-width-1-4@s uk-width-1-2@m uk-margin-auto uk-visible-toggle uk-position-relative uk-border-circle uk-overflow-hidden uk-light">
                                                <img class="uk-width-1-1" src="images/avatar.jpg"><a
                                                    class="uk-link-reset uk-overlay-primary uk-position-cover uk-hidden-hover"
                                                    href="#">
                                                    <div class="uk-position-center"><span
                                                            uk-icon="icon: camera; ratio: 1.25;"></span></div>
                                                </a></div>
                                        </section>
                                        <div class="uk-text-center">
                                            <div class="uk-h4 uk-margin-remove">Thomas Bruns</div>
                                            <div class="uk-text-meta">Joined June 6, 2018</div>
                                        </div>
                                        <div>
                                            <div class="uk-grid-small uk-flex-center" uk-grid>
                                                <div><a class="uk-button uk-button-default uk-button-small"
                                                        href="settings.php"><span class="uk-margin-xsmall-right"
                                                            uk-icon="icon: cog; ratio: .75;"></span><span>Settings</span></a>
                                                </div>
                                                <div><button class="uk-button uk-button-default uk-button-small"
                                                        href="#" title="Log out"><span
                                                            uk-icon="icon: sign-out; ratio: .75;"></span></button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <nav>
                                        <ul class="uk-nav uk-nav-default tm-nav">
                                            <li><a href="account.php">Orders
                                                    <span>(2)</span></a></li>
                                            <li class="uk-active"><a href="favorites.php">Favorites
                                                    <span>(3)</span></a></li>
                                            <li><a href="personal.php">Personal Info</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-1-1 uk-width-expand@m">
                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                <header class="uk-card-header">
                                    <h1 class="uk-h2">Favorites</h1>
                                </header>
                                <div class="uk-grid-collapse tm-products-list" uk-grid>
                                    <article class="tm-product-card">
                                        <div class="tm-product-card-media">
                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                    href="product.php">
                                                    <div class="tm-product-card-labels"><span
                                                            class="uk-label uk-label-warning">top selling</span><span
                                                            class="uk-label uk-label-danger">trade-in</span></div>
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/products/1/1-medium.jpg"
                                                            alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)" />
                                                    </figure>
                                                </a></div>
                                        </div>
                                        <div class="tm-product-card-body">
                                            <div class="tm-product-card-info">
                                                <div class="uk-text-meta uk-margin-xsmall-bottom">Laptop</div>
                                                <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                        href="product.php">Apple MacBook Pro 15&quot; Touch Bar
                                                        MPTU2LL/A 256GB (Silver)</a></h3>
                                                <ul class="uk-list uk-text-small tm-product-card-properties">
                                                    <li><span class="uk-text-muted">Diagonal display:
                                                        </span><span>15.4"</span></li>
                                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                                            i7</span></li>
                                                    <li><span class="uk-text-muted">RAM: </span><span>16&nbsp;GB</span>
                                                    </li>
                                                    <li><span class="uk-text-muted">Video Card: </span><span>AMD Radeon
                                                            Pro 555</span></li>
                                                </ul>
                                            </div>
                                            <div class="tm-product-card-shop">
                                                <div class="tm-product-card-prices"><del
                                                        class="uk-text-meta">$1899.00</del>
                                                    <div class="tm-product-card-price">$1599.00</div>
                                                </div>
                                                <div class="tm-product-card-add">
                                                    <div class="uk-text-meta tm-product-card-actions"><a
                                                            class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                            title="Add to favorites"><span
                                                                uk-icon="icon: heart; ratio: .75;"></span><span
                                                                class="tm-product-card-action-text">Add to
                                                                favorites</span></a><a
                                                            class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                            title="Add to compare"><span
                                                                uk-icon="icon: copy; ratio: .75;"></span><span
                                                                class="tm-product-card-action-text">Add to
                                                                compare</span></a></div><button
                                                        class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                            class="tm-product-card-add-button-icon"
                                                            uk-icon="cart"></span><span
                                                            class="tm-product-card-add-button-text">add to
                                                            cart</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="tm-product-card">
                                        <div class="tm-product-card-media">
                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                    href="product.php">
                                                    <div class="tm-product-card-labels"><span
                                                            class="uk-label uk-label-success">new</span><span
                                                            class="uk-label uk-label-danger">trade-in</span></div>
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/products/2/2-medium.jpg"
                                                            alt="Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)" />
                                                    </figure>
                                                </a></div>
                                        </div>
                                        <div class="tm-product-card-body">
                                            <div class="tm-product-card-info">
                                                <div class="uk-text-meta uk-margin-xsmall-bottom">Laptop</div>
                                                <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                        href="product.php">Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose
                                                        Gold)</a></h3>
                                                <ul class="uk-list uk-text-small tm-product-card-properties">
                                                    <li><span class="uk-text-muted">Diagonal display:
                                                        </span><span>12"</span></li>
                                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                                            i5</span></li>
                                                    <li><span class="uk-text-muted">RAM: </span><span>8&nbsp;GB</span>
                                                    </li>
                                                    <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD
                                                            Graphics 615</span></li>
                                                </ul>
                                            </div>
                                            <div class="tm-product-card-shop">
                                                <div class="tm-product-card-prices">
                                                    <div class="tm-product-card-price">$1549.00</div>
                                                </div>
                                                <div class="tm-product-card-add">
                                                    <div class="uk-text-meta tm-product-card-actions"><a
                                                            class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                            title="Add to favorites"><span
                                                                uk-icon="icon: heart; ratio: .75;"></span><span
                                                                class="tm-product-card-action-text">Add to
                                                                favorites</span></a><a
                                                            class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                            title="Add to compare"><span
                                                                uk-icon="icon: copy; ratio: .75;"></span><span
                                                                class="tm-product-card-action-text">Add to
                                                                compare</span></a></div><button
                                                        class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                            class="tm-product-card-add-button-icon"
                                                            uk-icon="cart"></span><span
                                                            class="tm-product-card-add-button-text">add to
                                                            cart</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <article class="tm-product-card">
                                        <div class="tm-product-card-media">
                                            <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box"
                                                    href="product.php">
                                                    <figure class="tm-media-box-wrap"><img
                                                            src="images/products/3/3-medium.jpg"
                                                            alt="Lenovo IdeaPad YOGA 920-13IKB 80Y7001RRK (Copper)" />
                                                    </figure>
                                                </a></div>
                                        </div>
                                        <div class="tm-product-card-body">
                                            <div class="tm-product-card-info">
                                                <div class="uk-text-meta uk-margin-xsmall-bottom">Laptop</div>
                                                <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                        href="product.php">Lenovo IdeaPad YOGA 920-13IKB 80Y7001RRK
                                                        (Copper)</a></h3>
                                                <ul class="uk-list uk-text-small tm-product-card-properties">
                                                    <li><span class="uk-text-muted">Diagonal display:
                                                        </span><span>13.9"</span></li>
                                                    <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                                            i7 8550U</span></li>
                                                    <li><span class="uk-text-muted">RAM: </span><span>16&nbsp;GB</span>
                                                    </li>
                                                    <li><span class="uk-text-muted">Video Card: </span><span>Intel® HD
                                                            Graphics 620</span></li>
                                                </ul>
                                            </div>
                                            <div class="tm-product-card-shop">
                                                <div class="tm-product-card-prices">
                                                    <div class="tm-product-card-price">$1199.00</div>
                                                </div>
                                                <div class="tm-product-card-add">
                                                    <div class="uk-text-meta tm-product-card-actions"><a
                                                            class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                            title="Add to favorites"><span
                                                                uk-icon="icon: heart; ratio: .75;"></span><span
                                                                class="tm-product-card-action-text">Add to
                                                                favorites</span></a><a
                                                            class="tm-product-card-action js-add-to js-add-to-compare"
                                                            title="Add to compare"><span
                                                                uk-icon="icon: copy; ratio: .75;"></span><span
                                                                class="tm-product-card-action-text">Add to
                                                                compare</span></a></div><button
                                                        class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                            class="tm-product-card-add-button-icon"
                                                            uk-icon="cart"></span><span
                                                            class="tm-product-card-add-button-text">add to
                                                            cart</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
        </main>
        <footer>
                <section class="uk-section uk-section-default uk-section-small ">
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
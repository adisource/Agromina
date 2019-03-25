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
                                            <li><a href="favorites.php">Favorites
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
                                    <h1 class="uk-h2">Settings</h1>
                                </header>
                                <div class="uk-card-body">
                                    <form class="uk-form-stacked">
                                        <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                                            <fieldset class="uk-fieldset">
                                                <legend class="uk-h4">Email</legend>
                                                <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                                                    <div><label>
                                                            <div class="uk-form-label">Current Email</div><input
                                                                class="uk-input uk-form-width-large" type="email"
                                                                value="example@example.com" disabled>
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label">New Email</div><input
                                                                class="uk-input uk-form-width-large" type="email">
                                                        </label></div>
                                                    <div><button class="uk-button uk-button-primary">update
                                                            email</button></div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="uk-fieldset">
                                                <legend class="uk-h4">Password</legend>
                                                <div class="uk-grid-small uk-child-width-1-1" uk-grid>
                                                    <div><label>
                                                            <div class="uk-form-label">Current Password</div><input
                                                                class="uk-input uk-form-width-large" type="password">
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label">New Password</div><input
                                                                class="uk-input uk-form-width-large" type="password">
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label">Confirm Password</div><input
                                                                class="uk-input uk-form-width-large" type="password">
                                                        </label></div>
                                                    <div><button class="uk-button uk-button-primary">update
                                                            password</button></div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="uk-fieldset">
                                                <legend class="uk-h4">Email Notifications</legend>
                                                <ul class="uk-list uk-margin-remove">
                                                    <li><input class="tm-checkbox" id="notification-1" type="checkbox"
                                                            name="notification" value="1" checked><label
                                                            for="notification-1"><span>Weekly Newsletter</span></label>
                                                    </li>
                                                    <li><input class="tm-checkbox" id="notification-2" type="checkbox"
                                                            name="notification" value="1" checked><label
                                                            for="notification-2"><span>New Product
                                                                Announcements</span></label></li>
                                                    <li><input class="tm-checkbox" id="notification-3" type="checkbox"
                                                            name="notification" value="1" checked><label
                                                            for="notification-3"><span>Product Specials</span></label>
                                                    </li>
                                                </ul>
                                            </fieldset>
                                        </div>
                                    </form>
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
                            <li class="uk-parent"><a href="catalog.php">Catalog</a>
                                <ul class="uk-nav-sub uk-list-divider">
                                    <li><a href="subcategory.php">Laptops &amp; Tablets</a></li>
                                    <li><a href="subcategory.php">Phones &amp; Gadgets</a></li>
                                    <li><a href="subcategory.php">TV &amp; Video</a></li>
                                    <li><a href="subcategory.php">Games &amp; Entertainment</a></li>
                                    <li><a href="subcategory.php">Photo</a></li>
                                    <li class="uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all"
                                            href="catalog.php"><span>see all categories</span><span
                                                uk-icon="icon: chevron-right; ratio: .75;"></span></a></li>
                                </ul>
                            </li>
                            <li class="uk-parent"><a href="brands.php">Brands</a>
                                <ul class="uk-nav-sub uk-list-divider">
                                    <li><a href="subcategory.php">Apple</a></li>
                                    <li><a href="subcategory.php">Samsung</a></li>
                                    <li><a href="subcategory.php">Sony</a></li>
                                    <li><a href="subcategory.php">Microsoft</a></li>
                                    <li><a href="subcategory.php">Intel</a></li>
                                    <li><a href="subcategory.php">HP</a></li>
                                    <li><a href="subcategory.php">LG</a></li>
                                    <li><a href="subcategory.php">Lenovo</a></li>
                                    <li><a href="subcategory.php">ASUS</a></li>
                                    <li><a href="subcategory.php">Acer</a></li>
                                    <li><a href="subcategory.php">Dell</a></li>
                                    <li><a href="subcategory.php">Canon</a></li>
                                    <li class="uk-text-center"><a class="uk-link-muted uk-text-uppercase tm-link-to-all"
                                            href="brands.php"><span>see all brands</span><span
                                                uk-icon="icon: chevron-right; ratio: .75;"></span></a></li>
                                </ul>
                            </li>
                            <li class="uk-parent"><a href="#">Pages</a>
                                <ul class="uk-nav-sub uk-list-divider">
                                    <li><a href="subcategory.php">Catalog</a></li>
                                    <li><a href="subcategory.php">Category</a></li>
                                    <li><a href="subcategory.php">Subcategory</a></li>
                                    <li><a href="subcategory.php">Product</a></li>
                                    <li><a href="subcategory.php">Cart</a></li>
                                    <li><a href="subcategory.php">Checkout</a></li>
                                    <li><a href="subcategory.php">Compare</a></li>
                                    <li><a href="subcategory.php">Brands</a></li>
                                    <li><a href="subcategory.php">Compare</a></li>
                                    <li><a href="subcategory.php">Account</a></li>
                                    <li><a href="subcategory.php">Favorites</a></li>
                                    <li><a href="subcategory.php">Personal</a></li>
                                    <li><a href="subcategory.php">Settings</a></li>
                                    <li><a href="subcategory.php">About</a></li>
                                    <li><a href="subcategory.php">Contacts</a></li>
                                    <li><a href="subcategory.php">cerita_dan_kegiatan</a></li>
                                    <li><a href="subcategory.php">News</a></li>
                                    <li><a href="subcategory.php">Article</a></li>
                                    <li><a href="subcategory.php">FAQ</a></li>
                                    <li><a href="subcategory.php">Delivery</a></li>
                                    <li><a href="subcategory.php">404</a></li>
                                </ul>
                            </li>
                            <li><a href="cerita_dan_kegiatan.php">cerita_dan_kegiatan</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contacts.php">Contacts</a></li>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Checkout</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,500">
    <link rel="stylesheet" href="styles/style.css">
    <script src="scripts/uikit.js"></script>
    <script src="scripts/uikit-icons.js"></script>
    <script src="scripts/svg-with-js/js/fontawesome-all.js"></script>
</head>

<body>
    <div class="uk-offcanvas-content">
            <header>
                    <div class="uk-navbar-container uk-light uk-visible@m tm-toolbar-container">
                        <div class="uk-container" uk-navbar>
                            <div class="uk-navbar-left">
                                <nav>
                                    <ul class="uk-navbar-nav">
                                        <li><a href="#"><span class="uk-margin-xsmall-right"
                                                    uk-icon="icon: receiver; ratio: .75;"></span><span
                                                    class="tm-pseudo">+6287881194047 </span></a></li>
                                        <li><a href="contacts.php" onclick="return false"><span class="uk-margin-xsmall-right"
                                                    uk-icon="icon: location; ratio: .75;"></span><span class="tm-pseudo">Dasan
                                                    sawe, RT 001/ RW 001, Kel/desa.Banjarsari, kec. Labuhan Haji</span><span
                                                    uk-icon="icon: triangle-down; ratio: .75;"></span></a>
                                            <div class="uk-margin-remove" uk-drop="mode: click; pos: bottom-center;">
                                                <div
                                                    class="uk-card uk-card-default uk-card-small uk-box-shadow-xlarge uk-overflow-hidden uk-padding-small uk-padding-remove-horizontal uk-padding-remove-bottom">
                                                    <figure class="uk-card-media-top uk-height-small js-map"
                                                        data-latitude="59.9356728" data-longitude="30.3258604" data-zoom="14">
                                                    </figure>
                                                    <div class="uk-card-body">
                                                        <div class="uk-text-small">
                                                            <div class="uk-text-bolder">Agromina.id</div>
                                                            <div>Dasan&nbsp; sawe,&nbsp;RT 001/ RW
                                                                001,&nbsp;Kel/desa.Banjarsari,&nbsp;kec. Labuhan &nbsp;Haji
                                                            </div>
                                                            <div>Melayani 24 jam</div>
                                                        </div>
                                                        <div class="uk-margin-small"><a
                                                                class="uk-link-muted uk-text-uppercase tm-link-to-all uk-link-reset"
                                                                href="contacts.php"><span>Kontak</span><span
                                                                    uk-icon="icon: chevron-right; ratio: .75;"></span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="uk-navbar-item"><span class="uk-margin-xsmall-right"
                                                    uk-icon="icon: clock; ratio: .75;"></span>Melayani
                                                24 jam</div>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="uk-navbar-right">
                                <nav>
                                    <ul class="uk-navbar-nav">
                                        <li><a href="news.php">News</a></li>
                                        <li><a href="faq.php">FAQ</a></li>
                                        <li><a href="#">Payment</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="uk-navbar-container tm-navbar-container" uk-sticky="cls-active: tm-navbar-container-fixed">
                        <div class="uk-container" uk-navbar>
                            <div class="uk-navbar-left"><button class="uk-navbar-toggle uk-hidden@m"
                                    uk-toggle="target: #nav-offcanvas" uk-navbar-toggle-icon></button><a
                                    class="uk-navbar-item uk-logo" href="index.php"><img src="images/logo.png" width="90"
                                        height="32" alt="Logo"></a>
                                <nav class="uk-visible@m">
                                    <ul class="uk-navbar-nav">
                                        <li><a href="index.php"><i class="fas fa-home"></i>&nbsp;&nbsp;Beranda</a>
                                        </li>
                                        <li><a href="produk.php"><i class="fas fa-shopping-bag "></i>&nbsp;&nbsp;Produk</a>
        
                                        </li>
                                        <li><a href="#"><i class="fas fa-gift" aria-hidden="true"></i>&nbsp;&nbsp;Pesan
                                                Paket</a>
        
                                        </li>
                                        <li><a href="blog.php"><i class="fas fa-newspaper"
                                                    aria-hidden="true"></i>&nbsp;&nbsp;Cerita
                                                & Kegiatan</a></li>
                                        <li><a href="about.php"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Tentang Kami</a></li>
        
                                    </ul>
                                </nav>
                            </div>
                            <div class="uk-navbar-right"><a class="uk-navbar-toggle tm-navbar-button" href="#"
                                    uk-search-icon></a>
                                <div class="uk-navbar-dropdown uk-padding-small uk-margin-remove"
                                    uk-drop="mode: click;cls-drop: uk-navbar-dropdown;boundary: .tm-navbar-container;boundary-align: true;pos: bottom-justify;flip: x">
                                    <div class="uk-container">
                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                            <div class="uk-width-expand">
                                                <form class="uk-search uk-search-navbar uk-width-1-1"><input
                                                        class="uk-search-input" type="search" placeholder="Search…" autofocus>
                                                </form>
                                            </div>
                                            <div class="uk-width-auto"><a class="uk-navbar-dropdown-close" href="#"
                                                    uk-close></a></div>
                                        </div>
                                    </div>
                                </div><a class="uk-navbar-item uk-link-muted uk-visible@m tm-navbar-button"
                                    href="compare.php"><i class="fas fa-heart "></i><span class="uk-badge">3</span></a><a
                                    class="uk-navbar-item uk-link-muted tm-navbar-button" href="account.php"><i
                                        class="fas fa-user"></i></a>
                                <div class="uk-padding-small uk-margin-remove"
                                    uk-dropdown="pos: bottom-right; offset: -10; delay-hide: 200;" style="min-width: 150px;">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li><a href="account.php">Pesanan
                                                <span>(2)</span></a></li>
                                        <li><a href="favorites.php">Favorites
                                                <span>(3)</span></a></li>
                                        <li><a href="personal.php">Personal</a></li>
                                        <li><a href="settings.php">Settings</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="#">Keluar</a></li>
                                    </ul>
                                </div><a class="uk-navbar-item uk-link-muted tm-navbar-button" href="cart.php"
                                    uk-toggle="target: #cart-offcanvas" onclick="return false"><i
                                        class="fas fa-shopping-cart"></i><span class="uk-badge">2</span></a>
                            </div>
                        </div>
                    </div>
                </header>
        <main>
            <section class="uk-section uk-section-small">
                <div class="uk-container">
                    <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                        <section class="uk-text-center"><a class="uk-link-muted uk-text-small" href="cart.php"><span
                                    class="uk-margin-xsmall-right" uk-icon="icon: arrow-left; ratio: .75;"></span>Return
                                to cart</a>
                            <h1 class="uk-margin-small-top uk-margin-remove-bottom">Checkout</h1>
                        </section>
                        <section>
                            <div class="uk-grid-medium" uk-grid>
                                <form class="uk-form-stacked uk-width-1-1 tm-checkout uk-width-expand@m">
                                    <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                                        <section>
                                            <h2 class="tm-checkout-title">Contact Information</h2>
                                            <div
                                                class="uk-card uk-card-default uk-card-small uk-card-body tm-ignore-container">
                                                <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s"
                                                    uk-grid>
                                                    <div><label>
                                                            <div class="uk-form-label uk-form-label-required">First Name
                                                            </div><input class="uk-input" type="text" required>
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label uk-form-label-required">Last Name
                                                            </div><input class="uk-input" type="text" required>
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label uk-form-label-required">Phone
                                                                Number</div><input class="uk-input" type="tel" required>
                                                        </label></div>
                                                    <div><label>
                                                            <div class="uk-form-label uk-form-label-required">Email
                                                            </div><input class="uk-input" type="email" required>
                                                        </label></div>
                                                </div>
                                            </div>
                                        </section>
                                        <section>
                                            <h2 class="tm-checkout-title">Shipping</h2>
                                            <div
                                                class="uk-card uk-card-default uk-card-small uk-card-body tm-ignore-container">
                                                <div class="uk-grid-small uk-grid-match uk-child-width-1-1 uk-child-width-1-3@s uk-flex-center"
                                                    uk-switcher="toggle: &gt; * &gt; .tm-choose" uk-grid>
                                                    <div><a class="tm-choose" href="#">
                                                            <div class="tm-choose-title">pick up from store</div>
                                                            <div class="tm-choose-description">Free, tomorrow</div>
                                                        </a></div>
                                                    <div><a class="tm-choose" href="#">
                                                            <div class="tm-choose-title">delivery in city</div>
                                                            <div class="tm-choose-description">Free, tomorrow</div>
                                                        </a></div>
                                                    <div><a class="tm-choose" href="#">
                                                            <div class="tm-choose-title">regional delivery</div>
                                                            <div class="tm-choose-description">Via Russian Post or
                                                                postal courier services. Sending to any country</div>
                                                        </a></div>
                                                </div>
                                                <div class="uk-switcher uk-margin">
                                                    <section>
                                                        <div class="uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s"
                                                            uk-grid>
                                                            <div>
                                                                <figure
                                                                    class="uk-card-media-top tm-ratio tm-ratio-16-9 js-map"
                                                                    data-latitude="59.9356728"
                                                                    data-longitude="30.3258604" data-zoom="14"></figure>
                                                            </div>
                                                            <div class="uk-text-small">
                                                                <div class="uk-text-bolder">Store Name</div>
                                                                <div>St.&nbsp;Petersburg, Nevsky&nbsp;Prospect&nbsp;28
                                                                </div>
                                                                <div>Daily 10:00–22:00</div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                    <section>
                                                        <div class="uk-grid-small" uk-grid>
                                                            <div class="uk-width-expand"><label>
                                                                    <div class="uk-form-label uk-form-label-required">
                                                                        Street</div><input class="uk-input" type="text">
                                                                </label></div>
                                                            <div class="uk-width-1-3 uk-width-1-6@s"><label>
                                                                    <div class="uk-form-label uk-form-label-required">
                                                                        House</div><input class="uk-input" type="text">
                                                                </label></div>
                                                        </div>
                                                        <div class="uk-grid-small uk-child-width-1-3 uk-child-width-1-4@s"
                                                            uk-grid>
                                                            <div><label>
                                                                    <div class="uk-form-label">Building</div><input
                                                                        class="uk-input" type="text">
                                                                </label></div>
                                                            <div><label>
                                                                    <div class="uk-form-label">Entrance</div><input
                                                                        class="uk-input" type="text">
                                                                </label></div>
                                                            <div><label>
                                                                    <div class="uk-form-label">Floor</div><input
                                                                        class="uk-input" type="text">
                                                                </label></div>
                                                            <div><label>
                                                                    <div class="uk-form-label">Apartment</div><input
                                                                        class="uk-input" type="text">
                                                                </label></div>
                                                            <div class="uk-width-1-1"><label>
                                                                    <div class="uk-form-label">Comment</div><textarea
                                                                        class="uk-textarea" rows="5"
                                                                        placeholder="Additional information: phone numbers or doorphone code"></textarea>
                                                                </label></div>
                                                        </div>
                                                        <div class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s"
                                                            uk-grid>
                                                            <div class="uk-width-1-1 uk-text-meta">Choose a convenient
                                                                date and delivery interval</div>
                                                            <div><select class="uk-select">
                                                                    <option>Tomorrow</option>
                                                                    <option>25 May</option>
                                                                    <option>26 May</option>
                                                                    <option>27 May</option>
                                                                    <option>28 May</option>
                                                                    <option>29 May</option>
                                                                    <option>30 May</option>
                                                                    <option>1 June</option>
                                                                </select></div>
                                                            <div><select class="uk-select">
                                                                    <option>09:00 – 12:00</option>
                                                                    <option>12:00 – 15:00</option>
                                                                    <option>15:00 – 18:00</option>
                                                                    <option>18:00 – 21:00</option>
                                                                    <option>21:00 – 23:00</option>
                                                                </select></div>
                                                        </div>
                                                    </section>
                                                    <div>
                                                        <div class="uk-grid-small" uk-grid>
                                                            <div class="uk-width-1-1"><label>
                                                                    <div class="uk-form-label uk-form-label-required">
                                                                        Country</div><select class="uk-select">
                                                                        <option>Choose the country</option>
                                                                        <option value="RU">Russia</option>
                                                                    </select>
                                                                </label></div>
                                                        </div>
                                                        <div class="uk-grid-small" uk-grid>
                                                            <div class="uk-width-expand"><label>
                                                                    <div class="uk-form-label uk-form-label-required">
                                                                        City</div><input class="uk-input" type="text">
                                                                </label></div>
                                                            <div class="uk-width-1-3 uk-width-1-6@s"><label>
                                                                    <div class="uk-form-label uk-form-label-required">
                                                                        Post Code</div><input class="uk-input"
                                                                        type="text">
                                                                </label></div>
                                                        </div>
                                                        <div class="uk-grid-small" uk-grid>
                                                            <div class="uk-width-expand"><label>
                                                                    <div class="uk-form-label uk-form-label-required">
                                                                        Street</div><input class="uk-input" type="text">
                                                                </label></div>
                                                            <div class="uk-width-1-3 uk-width-1-6@s"><label>
                                                                    <div class="uk-form-label uk-form-label-required">
                                                                        House</div><input class="uk-input" type="text">
                                                                </label></div>
                                                        </div>
                                                        <div class="uk-grid-small uk-child-width-1-3 uk-child-width-1-4@s"
                                                            uk-grid>
                                                            <div><label>
                                                                    <div class="uk-form-label">Building</div><input
                                                                        class="uk-input" type="text">
                                                                </label></div>
                                                            <div><label>
                                                                    <div class="uk-form-label">Entrance</div><input
                                                                        class="uk-input" type="text">
                                                                </label></div>
                                                            <div><label>
                                                                    <div class="uk-form-label">Floor</div><input
                                                                        class="uk-input" type="text">
                                                                </label></div>
                                                            <div><label>
                                                                    <div class="uk-form-label">Apartment</div><input
                                                                        class="uk-input" type="text">
                                                                </label></div>
                                                            <div class="uk-width-1-1"><label>
                                                                    <div class="uk-form-label">Comment</div><textarea
                                                                        class="uk-textarea" rows="5"
                                                                        placeholder="Additional information: phone numbers or doorphone code"></textarea>
                                                                </label></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <section>
                                            <h2 class="tm-checkout-title">Payment</h2>
                                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                                <div class="uk-card-body">
                                                    <div class="uk-grid-small uk-grid-match uk-child-width-1-1 uk-child-width-1-3@s uk-flex-center"
                                                        uk-switcher="toggle: &gt; * &gt; .tm-choose" uk-grid>
                                                        <div><a class="tm-choose" href="#">
                                                                <div class="tm-choose-title">payment upon receipt</div>
                                                                <div class="tm-choose-description">Cash, credit card
                                                                </div>
                                                            </a></div>
                                                        <div><a class="tm-choose" href="#">
                                                                <div class="tm-choose-title">online by card</div>
                                                                <div class="tm-choose-description">Visa, MasterCard
                                                                </div>
                                                            </a></div>
                                                        <div><a class="tm-choose" href="#">
                                                                <div class="tm-choose-title">electronic payment</div>
                                                                <div class="tm-choose-description">PayPal, Yandex.Money,
                                                                    QIWI</div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                                <div class="uk-card-footer">
                                                    <div class="uk-grid-small uk-flex-middle uk-flex-center uk-text-center"
                                                        uk-grid>
                                                        <div class="uk-text-meta"><span class="uk-margin-xsmall-right"
                                                                uk-icon="icon: lock; ratio: .75;"></span>Security of
                                                            payments is is provided by secure protocols</div>
                                                        <div><img src="images/verified-by-visa.svg"
                                                                title="Verified by Visa" style="height: 25px;"></div>
                                                        <div><img src="images/mastercard-securecode.svg"
                                                                title="MasterCard SecureCode" style="height: 25px;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                </form>
                                <div class="uk-width-1-1 uk-width-1-4@m tm-aside-column">
                                    <div class="uk-card uk-card-default uk-card-small tm-ignore-container"
                                        uk-sticky="offset: 30; bottom: true; media: @m;">
                                        <section class="uk-card-body">
                                            <h4>Items in order</h4>
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-small">Apple MacBook Pro 15&quot; Touch Bar
                                                        MPTU2LL/A 256GB (Silver)</div>
                                                    <div class="uk-text-meta">1 × $1599.00</div>
                                                </div>
                                                <div class="uk-text-right">
                                                    <div>$1599.00</div>
                                                </div>
                                            </div>
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-small">Apple MacBook 12&quot; MNYN2LL/A 512GB
                                                        (Rose Gold)</div>
                                                    <div class="uk-text-meta">1 × $1549.00</div>
                                                </div>
                                                <div class="uk-text-right">
                                                    <div>$1549.00</div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="uk-card-body">
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-muted">Shipping</div>
                                                </div>
                                                <div class="uk-text-right">
                                                    <div>Pick up from store</div>
                                                    <div class="uk-text-meta">Free, tomorrow</div>
                                                </div>
                                            </div>
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-muted">Payment</div>
                                                </div>
                                                <div class="uk-text-right">
                                                    <div>Online by card</div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="uk-card-body">
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-muted">Subtotal</div>
                                                </div>
                                                <div class="uk-text-right">
                                                    <div>$3148</div>
                                                </div>
                                            </div>
                                            <div class="uk-grid-small" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-muted">Discount</div>
                                                </div>
                                                <div class="uk-text-right">
                                                    <div class="uk-text-danger">−$29</div>
                                                </div>
                                            </div>
                                        </section>
                                        <section class="uk-card-body">
                                            <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                <div class="uk-width-expand">
                                                    <div class="uk-text-muted">Total</div>
                                                </div>
                                                <div class="uk-text-right">
                                                    <div class="uk-text-lead uk-text-bolder">$3119</div>
                                                </div>
                                            </div><button
                                                class="uk-button uk-button-primary uk-margin-small uk-width-1-1">checkout</button>
                                        </section>
                                    </div>
                                </div>
                            </div>
                        </section>
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
                                                <li><a href="blog.php">Cerita & Kegiatan</a></li>
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
                                    <li><a href="blog.php">Cerita dan Kegiatan</a></li>
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
    </div>
    <script src="scripts/script.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyClyjCemJi4m2q78gNeGkhlckpdH1hzTYA&amp;callback=initMap"
        async defer></script>
</body>

</php>
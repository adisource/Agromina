<!DOCTYPE html>
<html lang="en">

<head>
<?php include "templates/component/head.php"?>
</head>

<body>
    <div class="uk-offcanvas-content">
            <header>
            <?php include "templates/component/head.php"?>
                </header>
        <main>
            <section class="uk-section uk-section-small">
                <div class="uk-container">
                    <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                        <div class="uk-text-center">
                            <ul class="uk-breadcrumb uk-flex-center uk-margin-remove">
                                <li><a href="index.php">Home</a></li>
                                <li><span>FAQ</span></li>
                            </ul>
                            <h1 class="uk-margin-small-top uk-margin-remove-bottom">FAQ</h1>
                        </div>
                        <div>
                            <div class="uk-grid-medium" uk-grid>
                                <section class="uk-width-1-1 uk-width-expand@m">
                                    <article
                                        class="uk-card uk-card-default uk-card-small uk-card-body uk-article tm-ignore-container">
                                        <ul class="uk-list-divider uk-list-large" uk-accordion="multiple: true">
                                            <li><a class="uk-accordion-title" href="#">Lorem ipsum dolor sit amet,
                                                    consectetur adipiscing elit?</a>
                                                <div class="uk-accordion-content">
                                                    <p>Vivamus imperdiet venenatis est. Phasellus vitae mauris
                                                        imperdiet, condimentum eros vel, ullamcorper turpis. Maecenas
                                                        sed libero quis orci egestas vehicula fermentum id diam. In
                                                        sodales quam quis mi mollis eleifend id sit amet velit. Sed
                                                        ultricies condimentum magna, vel commodo dolor luctus in.
                                                        Aliquam et orci nibh. Nunc purus metus, aliquam vitae venenatis
                                                        sit amet, porta non est. Proin vehicula nisi eu molestie varius.
                                                        Pellentesque semper ex diam, at tristique ipsum varius sed.
                                                        Pellentesque non metus ullamcorper, iaculis nibh quis, facilisis
                                                        lorem. Sed malesuada eu lacus sit amet feugiat. Aenean iaculis
                                                        dui sed quam consectetur elementum.</p>
                                                </div>
                                            </li>
                                            <li><a class="uk-accordion-title" href="#">Nullam massa sem, mollis ut
                                                    luctus at, tincidunt a lorem?</a>
                                                <div class="uk-accordion-content">
                                                    <p>Aliquam sed dictum elit, quis consequat metus. Proin in mauris
                                                        finibus urna lacinia laoreet sed id orci. Pellentesque volutpat
                                                        tellus sit amet enim rutrum, vel eleifend metus consectetur. Sed
                                                        lacinia urna a neque maximus placerat. Praesent blandit
                                                        hendrerit dui non placerat. Sed malesuada sem sit amet arcu
                                                        faucibus, sit amet accumsan nisl laoreet. Quisque auctor sit
                                                        amet nisl rhoncus interdum. Nullam euismod odio sem, quis
                                                        pulvinar purus gravida eget. Nullam molestie, lacus vel vehicula
                                                        elementum, massa arcu bibendum lacus, vitae tempus justo orci id
                                                        lectus. Duis justo neque, elementum eget ante in, condimentum
                                                        condimentum ante. Maecenas quis eleifend risus. In hac habitasse
                                                        platea dictumst. Nunc posuere ultrices dolor, at auctor lacus
                                                        dignissim ut. Donec viverra imperdiet nisi, sit amet mattis
                                                        massa pellentesque ac.</p>
                                                </div>
                                            </li>
                                            <li><a class="uk-accordion-title" href="#">Aliquam pretium diam et
                                                    ullamcorper malesuada?</a>
                                                <div class="uk-accordion-content">
                                                    <p>Praesent feugiat lectus faucibus tellus congue pharetra. In
                                                        viverra vehicula pellentesque. Etiam consectetur ultricies magna
                                                        at bibendum. Sed posuere libero ut nulla ornare, faucibus
                                                        pellentesque odio pulvinar. Vestibulum feugiat ex id ex
                                                        elementum egestas. Integer laoreet mollis risus, id efficitur
                                                        neque. Pellentesque quis dolor faucibus, ultrices tellus id,
                                                        vestibulum neque. Sed eros purus, dignissim id fermentum ut,
                                                        lacinia laoreet odio. Sed mi erat, aliquet at facilisis quis,
                                                        laoreet in massa. Pellentesque eu massa accumsan, iaculis erat
                                                        eu, tincidunt sem. Quisque id orci id dui congue pretium.
                                                        Pellentesque iaculis, dolor aliquet tempor laoreet, enim metus
                                                        tincidunt massa, ut porttitor sem dui sit amet arcu. Vestibulum
                                                        sodales laoreet enim, sit amet vestibulum nisl porttitor a.</p>
                                                </div>
                                            </li>
                                            <li><a class="uk-accordion-title" href="#">Etiam suscipit at nisi eget
                                                    auctor?</a>
                                                <div class="uk-accordion-content">
                                                    <p>Mauris id pellentesque metus. In quis arcu sed enim maximus
                                                        pellentesque et eget velit. Etiam euismod enim vitae condimentum
                                                        tristique.</p>
                                                </div>
                                            </li>
                                            <li><a class="uk-accordion-title" href="#">Sed porta diam eget enim bibendum
                                                    laoreet?</a>
                                                <div class="uk-accordion-content">
                                                    <p>Donec molestie sem et tellus vestibulum venenatis. Quisque
                                                        iaculis ornare luctus. Orci varius natoque penatibus et magnis
                                                        dis parturient montes, nascetur ridiculus mus. Morbi velit nibh,
                                                        ullamcorper eu imperdiet id, rutrum quis mi. Donec eu aliquet
                                                        lorem. Nulla at lectus turpis. Sed et diam ac lorem iaculis
                                                        lacinia.</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </article>
                                </section>
                                <aside class="uk-width-1-4 uk-visible@m tm-aside-column">
                                    <section class="uk-card uk-card-default uk-card-small"
                                        uk-sticky="offset: 90; bottom: true;">
                                        <nav>
                                            <ul class="uk-nav uk-nav-default tm-nav">
                                                <li><a href="about.php">About</a></li>
                                                <li><a href="contacts.php">Contacts</a></li>
                                                <li><a href="cerita_dan_kegiatan.php">cerita_dan_kegiatan</a></li>
                                                <li><a href="news.php">News</a></li>
                                                <li class="uk-active"><a href="faq.php">FAQ</a></li>
                                                <li><a href="delivery.php">Delivery</a></li>
                                            </ul>
                                        </nav>
                                    </section>
                                </aside>
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
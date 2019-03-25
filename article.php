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
                        <section class="uk-text-center">
                            <ul class="uk-breadcrumb uk-flex-center uk-margin-remove">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="cerita_dan_kegiatan.php">Cerita Dan Kegiatan</a></li>
                                <li><span>Everything You Need to Know About the MacBook Pro</span></li>
                            </ul>
                        </section>
                        <section>
                            <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                                <section>
                                    <article
                                        class="uk-card uk-card-default uk-card-body uk-article tm-ignore-container">
                                        <header class="uk-text-center">
                                            <h1 class="uk-article-title">Everything You Need to Know About the MacBook
                                                Pro</h1>
                                            <div class="uk-article-meta"><time>May 21, 2018</time></div>
                                        </header>
                                        <section class="uk-article-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
                                                euismod nisl nunc, a dictum magna laoreet eget. Vestibulum ante ipsum
                                                primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                                            <div class="tm-wrapper uk-text-center">
                                                <figure><a href="images/articles/macbook-photo.jpg"><img
                                                            src="images/articles/macbook-photo.jpg"
                                                            alt="MacBook Pro"></a>
                                                    <figcaption>MacBook Pro</figcaption>
                                                </figure>
                                            </div>
                                            <p>Sed sit amet ante eget nunc dictum auctor sagittis in libero. Aliquam
                                                ultricies tincidunt nisi, a vestibulum nisi tempor vitae. Praesent
                                                fermentum sem semper fermentum ultrices. Duis eleifend vel sapien
                                                dignissim auctor. Vestibulum at commodo leo. In vitae eros ut sapien
                                                egestas venenatis non sit amet elit. In gravida vitae ante a rutrum.</p>
                                            <h2>Touch Bar</h2>
                                            <p>Vivamus ornare tortor elit, sed rutrum felis iaculis in. Nunc ut molestie
                                                neque. Aenean vitae elementum arcu, at rutrum ligula. Pellentesque
                                                fringilla dictum viverra. Vestibulum eu ipsum nec risus pharetra
                                                iaculis. Donec quis nulla orci. Suspendisse eget dictum augue, et
                                                lobortis justo. Suspendisse velit dui, sollicitudin quis velit nec,
                                                tincidunt consequat arcu.</p>
                                            <h2>Retina Display</h2>
                                            <p>Pellentesque dictum imperdiet rutrum. Vestibulum egestas quam eget
                                                maximus rutrum. Etiam blandit a dolor laoreet vulputate. Nulla
                                                ullamcorper ipsum et libero finibus, vitae vestibulum odio feugiat.</p>
                                            <figure class="uk-text-center"><a
                                                    href="images/articles/macbook-promo-4.jpg"><img
                                                        src="images/articles/macbook-promo-4.jpg" alt="MacBook Pro"></a>
                                            </figure>
                                            <h2>Force Touch Trackpad</h2>
                                            <p>Vivamus ornare tortor elit, sed rutrum felis iaculis in. Nunc ut molestie
                                                neque. Aenean vitae elementum arcu, at rutrum ligula. Pellentesque
                                                fringilla dictum viverra. Vestibulum eu ipsum nec risus pharetra
                                                iaculis. Donec quis nulla orci. Suspendisse eget dictum augue, et
                                                lobortis justo. Suspendisse velit dui, sollicitudin quis velit nec,
                                                tincidunt consequat arcu.</p>
                                            <div class="tm-wrapper">
                                                <figure class="tm-ratio tm-ratio-16-9"><iframe
                                                        src="https://www.youtube.com/embed/WVPRkcczXCY" frameborder="0"
                                                        allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                                </figure>
                                            </div>
                                            <p>Ut arcu lacus, tempus bibendum purus sed, iaculis sollicitudin sapien.
                                                Donec quis imperdiet arcu. Ut sagittis ipsum diam, nec tempor ex
                                                fermentum a. Nam ac vehicula erat. Curabitur id congue risus, vel
                                                iaculis enim. Donec tristique lacinia velit eu fringilla. Mauris lectus
                                                enim, aliquet eu dolor sed, porta vehicula lacus. Etiam luctus egestas
                                                scelerisque. Sed sit amet metus ante. Cras pulvinar sollicitudin nisl
                                                nec egestas. Maecenas vitae velit ut urna vestibulum venenatis ut vel
                                                ex. Quisque sit amet mattis ante. Duis blandit nisl non commodo rutrum.
                                                Nulla in velit ut arcu efficitur laoreet ut eu mauris. Duis condimentum
                                                vulputate consequat. Vestibulum aliquet suscipit purus.</p>
                                            <figure uk-slideshow>
                                                <div class="uk-position-relative uk-visible-toggle uk-light">
                                                    <ul class="uk-slideshow-items">
                                                        <li><img src="images/articles/macbook-promo-1.jpg"
                                                                alt="MacBook Pro" uk-cover></li>
                                                        <li><img src="images/articles/macbook-promo-2.jpg"
                                                                alt="MacBook Pro" uk-cover></li>
                                                    </ul><a
                                                        class="uk-position-center-left uk-position-small uk-hidden-hover"
                                                        href="#" uk-slidenav-previous
                                                        uk-slideshow-item="previous"></a><a
                                                        class="uk-position-center-right uk-position-small uk-hidden-hover"
                                                        href="#" uk-slidenav-next uk-slideshow-item="next"></a>
                                                </div>
                                                <ul class="uk-slideshow-nav uk-dotnav uk-flex-center uk-margin"></ul>
                                            </figure>
                                            <p>Mauris dignissim non nulla quis sollicitudin. Maecenas quis orci dui.
                                                Suspendisse pharetra facilisis metus, at venenatis nisl convallis et.
                                                Curabitur vulputate eget nisl sed dignissim. Sed eget metus ut orci
                                                volutpat gravida.</p>
                                            <blockquote class="twitter-tweet" data-lang="en">
                                                <p lang="en" dir="ltr">Mophie&apos;s latest battery pack is powerful
                                                    enough to charge your 15-inch MacBook Pro<a
                                                        href="https://t.co/jN4RzcxOyG">https://t.co/jN4RzcxOyG</a><a
                                                        href="https://t.co/5oJBKZRVBx">pic.twitter.com/5oJBKZRVBx</a>
                                                </p>&mdash; The Verge (@verge)<a
                                                    href="https://twitter.com/verge/status/948539601265872896?ref_src=twsrc%5Etfw">January
                                                    3, 2018</a>
                                            </blockquote>
                                            <script src="https://platform.twitter.com/widgets.js" charset="utf-8" async>
                                            </script>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sem
                                                urna, accumsan nec velit et, convallis tincidunt enim. Proin
                                                sollicitudin, metus at interdum tempus, velit mi posuere nisl, nec
                                                viverra ligula lorem sit amet felis. Class aptent taciti sociosqu ad
                                                litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                            <table
                                                class="uk-table uk-table-large uk-table-middle uk-table-divider uk-table-justify uk-table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th class="uk-width-1-4 uk-text-center">MacBook Pro 13"</th>
                                                        <th class="uk-width-1-4 uk-text-center">MacBook Pro 13" with
                                                            Touch Bar</th>
                                                        <th class="uk-width-1-4 uk-text-center">MacBook Pro 15" with
                                                            Touch Bar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th>Dimensions</th>
                                                        <td>0.59 × 11.97 × 8.36&nbsp;inches</td>
                                                        <td>0.59 × 11.97 × 8.36&nbsp;inches</td>
                                                        <td>0.61 × 13.75 × 9.48&nbsp;inches</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Weight</th>
                                                        <td>3.02&nbsp;pounds</td>
                                                        <td>3.02&nbsp;pounds</td>
                                                        <td>4.02&nbsp;pounds</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Display</th>
                                                        <td>13.3" 2560×1600,<br>60Hz Retina Display</td>
                                                        <td>13.3" 2560×1600,<br>60Hz Retina Display</td>
                                                        <td>15.4" 2880×1800,<br>60Hz Retina Display</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Inputs</th>
                                                        <td>2 × USB-C Ports,<br>1 × 3.5mm Headphone Jack</td>
                                                        <td>4 × USB-C Ports,<br>1 × 3.5mm Headphone Jack</td>
                                                        <td>4 × USB-C Ports,<br>1 × 3.5mm Headphone Jack</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Battery Life</th>
                                                        <td>Approximately 10&nbsp;hours</td>
                                                        <td>Approximately 10&nbsp;hours</td>
                                                        <td>Approximately 10&nbsp;hours</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p>Sed at diam aliquet, fringilla turpis ac, consequat ante. Duis id maximus
                                                purus. Cras rutrum erat non nibh accumsan, vitae maximus sapien
                                                elementum. Maecenas tellus libero, vulputate vitae mi eu, volutpat
                                                ornare felis. Nulla malesuada nunc urna, quis rutrum massa consequat id.
                                                Pellentesque elit diam, dignissim a lorem eu, tincidunt mollis erat.</p>
                                            <div class="tm-wrapper">
                                                <figure class="uk-text-center"><a
                                                        href="images/articles/macbook-promo-3.jpg"><img
                                                            src="images/articles/macbook-promo-3.jpg"
                                                            alt="MacBook Pro"></a>
                                                    <figcaption>13-inch and 15-inch</figcaption>
                                                </figure>
                                            </div>
                                            <p>Sed at diam aliquet, fringilla turpis ac, consequat ante. Duis id maximus
                                                purus. Cras rutrum erat non nibh accumsan, vitae maximus sapien
                                                elementum. Maecenas tellus libero, vulputate vitae mi eu, volutpat
                                                ornare felis. Nulla malesuada nunc urna, quis rutrum massa consequat id.
                                                Pellentesque elit diam, dignissim a lorem eu, tincidunt mollis erat.</p>
                                            <blockquote cite="#">
                                                <p class="uk-margin-small-bottom">You can converge a toaster and
                                                    refrigerator, but these things are probably not going to be pleasing
                                                    to the user.</p>
                                                <footer>Tim Cook</footer>
                                            </blockquote>
                                        </section>
                                    </article>
                                </section>
                                <section>
                                    <h2 class="uk-text-center">Related Articles</h2>
                                    <div class="uk-grid-medium uk-grid-match uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m"
                                        uk-grid>
                                        <div><a href="article.php">
                                                <article
                                                    class="uk-card uk-card-default uk-card-small uk-overflow-hidden uk-link-heading uk-display-block uk-box-shadow-hover-large uk-height-1-1 tm-ignore-container">
                                                    <div class="uk-card-media-top">
                                                        <figure class="uk-margin-remove tm-ratio tm-ratio-16-9">
                                                            <div class="uk-cover-container"><img
                                                                    src="images/articles/macbook-photo.jpg"
                                                                    alt="Everything You Need to Know About the MacBook Pro"
                                                                    uk-cover></div>
                                                        </figure>
                                                    </div>
                                                    <div class="uk-card-body">
                                                        <div class="uk-article-meta uk-margin-xsmall-bottom"><time>May
                                                                21, 2018</time></div>
                                                        <h3 class="uk-h4 uk-margin-remove">Everything You Need to Know
                                                            About the MacBook Pro</h3>
                                                    </div>
                                                </article>
                                            </a></div>
                                        <div><a href="article.php">
                                                <article
                                                    class="uk-card uk-card-default uk-card-small uk-overflow-hidden uk-link-heading uk-display-block uk-box-shadow-hover-large uk-height-1-1 tm-ignore-container">
                                                    <div class="uk-card-media-top">
                                                        <figure class="uk-margin-remove tm-ratio tm-ratio-16-9">
                                                            <div class="uk-cover-container"><img
                                                                    src="images/articles/macos.jpg"
                                                                    alt="Apple introduces macOS Mojave" uk-cover></div>
                                                        </figure>
                                                    </div>
                                                    <div class="uk-card-body">
                                                        <div class="uk-article-meta uk-margin-xsmall-bottom"><time>May
                                                                21, 2018</time></div>
                                                        <h3 class="uk-h4 uk-margin-remove">Apple introduces macOS Mojave
                                                        </h3>
                                                    </div>
                                                </article>
                                            </a></div>
                                    </div>
                                </section>
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
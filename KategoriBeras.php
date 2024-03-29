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
                                <li><a href="catalog.php">Kategori</a></li>
                                <li><a href="KategoriBeras.php">Beras</a></li>
                            </ul>
                            <h1 class="uk-margin-small-top uk-margin-remove-bottom">Beras</h1>
                            <div class="uk-text-meta uk-margin-xsmall-top">289 items</div>
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
                                                        <h3>Filters</h3>
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
                                                            <li><a href="KategoriBeras.php">Beras</a></li>
                                                            <li><a href="KategoriMakanan.php">Makanan</a></li>
                                                            <li><a href="KategoriMinuman.php">Minuman</a></li>
                                                            <li><a href="Kategorisayur.php">Sayur-sayuran</a></li>
                                                            <li><a href="KategoriBumbudapur.php">Bumbu dapur</a></li>
                                                            <li><a href="KategoriBuah.php">Buah-Buahan</a></li>
                                                        </ul>
                                                    </section>
                                                <section class="uk-card-body uk-open js-accordion-section">
                                                    <h4 class="uk-accordion-title uk-margin-remove">Prices</h4>
                                                    <div class="uk-accordion-content">
                                                        <div class="uk-grid-small uk-child-width-1-2 uk-text-small"
                                                            uk-grid>
                                                            <div>
                                                                <div class="uk-inline"><span
                                                                        class="uk-form-icon uk-text-xsmall">from</span><input
                                                                        class="uk-input" type="text" placeholder="$59">
                                                                </div>
                                                            </div>
                                                            <div>
                                                                <div class="uk-inline"><span
                                                                        class="uk-form-icon uk-text-xsmall">to</span><input
                                                                        class="uk-input" type="text"
                                                                        placeholder="$6559"></div>
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
                                <div class="uk-width-expand">
                                    <div class="uk-grid-medium uk-child-width-1-1" uk-grid>
                                        <div>
                                            <div class="uk-card uk-card-default uk-card-small tm-ignore-container">
                                                <div class="uk-grid-collapse uk-child-width-1-1" id="products" uk-grid>
                                                    <div class="uk-card-header">
                                                        <div class="uk-grid-small uk-flex-middle" uk-grid>
                                                            <div
                                                                class="uk-width-1-1 uk-width-expand@s uk-flex uk-flex-center uk-flex-left@s uk-text-small">
                                                                <span class="uk-margin-small-right uk-text-muted">Sort
                                                                    by:</span>
                                                                <ul class="uk-subnav uk-margin-remove">
                                                                    <li class="uk-active uk-padding-remove"><a
                                                                            class="uk-text-lowercase"
                                                                            href="#">relevant<span
                                                                                class="uk-margin-xsmall-left"
                                                                                uk-icon="icon: chevron-down; ratio: .5;"></span></a>
                                                                    </li>
                                                                    <li><a class="uk-text-lowercase" href="#">price</a>
                                                                    </li>
                                                                    <li><a class="uk-text-lowercase" href="#">newest</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div
                                                                class="uk-width-1-1 uk-width-auto@s uk-flex uk-flex-center uk-flex-middle">
                                                                <button
                                                                    class="uk-button uk-button-default uk-button-small uk-hidden@m"
                                                                    uk-toggle="target: #filters"><span
                                                                        class="uk-margin-xsmall-right"
                                                                        uk-icon="icon: settings; ratio: .75;"></span>Filters</button>
                                                                <div class="tm-change-view uk-margin-small-left">
                                                                    <ul class="uk-subnav uk-iconnav js-change-view"
                                                                        uk-switcher>
                                                                        <li><a class="uk-active" data-view="grid"
                                                                                uk-icon="grid" uk-tooltip="Grid"></a>
                                                                        </li>
                                                                        <li><a data-view="list" uk-icon="list"
                                                                                uk-tooltip="List"></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <div class="uk-grid-collapse uk-child-width-1-3 tm-products-grid js-products-grid"
                                                            uk-grid>
                                                            <article class="tm-product-card">
                                                                <div class="tm-product-card-media">
                                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                                            class="tm-media-box" href="product.php">
                                                                            <div class="tm-product-card-labels"><span
                                                                                    class="uk-label uk-label-warning">top
                                                                                    selling</span><span
                                                                                    class="uk-label uk-label-danger">trade-in</span>
                                                                            </div>
                                                                            <figure class="tm-media-box-wrap"><img
                                                                                    src="images/products/1/beras.png"
                                                                                    alt="beras" />
                                                                            </figure>
                                                                        </a></div>
                                                                </div>
                                                                <div class="tm-product-card-body">
                                                                    <div class="tm-product-card-info">
                                                                        <div
                                                                            class="uk-text-meta uk-margin-xsmall-bottom">
                                                                            Beras</div>
                                                                        <h3 class="tm-product-card-title"><a
                                                                                class="uk-link-heading"
                                                                                href="product.php">Beras Organik</a>
                                                                        </h3>
                                                                        <ul
                                                                            class="uk-list uk-text-small tm-product-card-properties">
                                                                            <p>Beras organik adalah beras yang
                                                                                dihasilkan melalui proses budidaya
                                                                                organik tanpa menggunakan pupuk dan
                                                                                pestisida (racun hama) kimia. Sedangkan
                                                                                proses organik adalah budidaya di tanah
                                                                                yang ramah lingkungan, tidak menggunakan
                                                                                pupuk dan pestisida (racun hama) kimia.
                                                                                Proses ini akan menjaga kelestarian
                                                                                lingkungan dan keseimbangan ekosistem di
                                                                                dalamnya.</p>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tm-product-card-shop">
                                                                        <div class="tm-product-card-prices">
                                                                            <div class="tm-product-card-price">Rp 12.000/kg
                                                                            </div>
                                                                        </div>
                                                                        <div class="tm-product-card-add">
                                                                            <div
                                                                                class="uk-text-meta tm-product-card-actions">
                                                                                <a class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                                                    title="Add to favorites"><span
                                                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to favorites</span></a><a
                                                                                    class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                                                    title="Add to compare"><span
                                                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to compare</span></a></div>
                                                                            <button
                                                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                    class="tm-product-card-add-button-icon"
                                                                                    uk-icon="cart"></span><span
                                                                                    class="tm-product-card-add-button-text">add
                                                                                    to cart</span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <article class="tm-product-card">
                                                                <div class="tm-product-card-media">
                                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                                            class="tm-media-box" href="product.php">
                                                                            <div class="tm-product-card-labels"><span
                                                                                    class="uk-label uk-label-success">new</span><span
                                                                                    class="uk-label uk-label-danger">trade-in</span>
                                                                            </div>
                                                                            <figure class="tm-media-box-wrap"><img
                                                                                    src="images/products/2/2-medium.jpg"
                                                                                    alt="Apple MacBook 12&quot; MNYN2LL/A 512GB (Rose Gold)" />
                                                                            </figure>
                                                                        </a></div>
                                                                </div>
                                                                <div class="tm-product-card-body">
                                                                    <div class="tm-product-card-info">
                                                                        <div
                                                                            class="uk-text-meta uk-margin-xsmall-bottom">
                                                                            Laptop</div>
                                                                        <h3 class="tm-product-card-title"><a
                                                                                class="uk-link-heading"
                                                                                href="product.php">Apple MacBook
                                                                                12&quot; MNYN2LL/A 512GB (Rose Gold)</a>
                                                                        </h3>
                                                                        <ul
                                                                            class="uk-list uk-text-small tm-product-card-properties">
                                                                            <li><span class="uk-text-muted">Diagonal
                                                                                    display: </span><span>12"</span>
                                                                            </li>
                                                                            <li><span class="uk-text-muted">CPU:
                                                                                </span><span>Intel®&nbsp;Core™ i5</span>
                                                                            </li>
                                                                            <li><span class="uk-text-muted">RAM:
                                                                                </span><span>8&nbsp;GB</span></li>
                                                                            <li><span class="uk-text-muted">Video Card:
                                                                                </span><span>Intel® HD Graphics
                                                                                    615</span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tm-product-card-shop">
                                                                        <div class="tm-product-card-prices">
                                                                            <div class="tm-product-card-price">$1549.00
                                                                            </div>
                                                                        </div>
                                                                        <div class="tm-product-card-add">
                                                                            <div
                                                                                class="uk-text-meta tm-product-card-actions">
                                                                                <a class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                                                    title="Add to favorites"><span
                                                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to favorites</span></a><a
                                                                                    class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                                                    title="Add to compare"><span
                                                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to compare</span></a></div>
                                                                            <button
                                                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                    class="tm-product-card-add-button-icon"
                                                                                    uk-icon="cart"></span><span
                                                                                    class="tm-product-card-add-button-text">add
                                                                                    to cart</span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <article class="tm-product-card">
                                                                <div class="tm-product-card-media">
                                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                                            class="tm-media-box" href="product.php">
                                                                            <figure class="tm-media-box-wrap"><img
                                                                                    src="images/products/3/3-medium.jpg"
                                                                                    alt="Lenovo IdeaPad YOGA 920-13IKB 80Y7001RRK (Copper)" />
                                                                            </figure>
                                                                        </a></div>
                                                                </div>
                                                                <div class="tm-product-card-body">
                                                                    <div class="tm-product-card-info">
                                                                        <div
                                                                            class="uk-text-meta uk-margin-xsmall-bottom">
                                                                            Laptop</div>
                                                                        <h3 class="tm-product-card-title"><a
                                                                                class="uk-link-heading"
                                                                                href="product.php">Lenovo IdeaPad YOGA
                                                                                920-13IKB 80Y7001RRK (Copper)</a></h3>
                                                                        <ul
                                                                            class="uk-list uk-text-small tm-product-card-properties">
                                                                            <li><span class="uk-text-muted">Diagonal
                                                                                    display: </span><span>13.9"</span>
                                                                            </li>
                                                                            <li><span class="uk-text-muted">CPU:
                                                                                </span><span>Intel®&nbsp;Core™ i7
                                                                                    8550U</span></li>
                                                                            <li><span class="uk-text-muted">RAM:
                                                                                </span><span>16&nbsp;GB</span></li>
                                                                            <li><span class="uk-text-muted">Video Card:
                                                                                </span><span>Intel® HD Graphics
                                                                                    620</span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tm-product-card-shop">
                                                                        <div class="tm-product-card-prices">
                                                                            <div class="tm-product-card-price">$1199.00
                                                                            </div>
                                                                        </div>
                                                                        <div class="tm-product-card-add">
                                                                            <div
                                                                                class="uk-text-meta tm-product-card-actions">
                                                                                <a class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                                                    title="Add to favorites"><span
                                                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to favorites</span></a><a
                                                                                    class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                    title="Add to compare"><span
                                                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to compare</span></a></div>
                                                                            <button
                                                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                    class="tm-product-card-add-button-icon"
                                                                                    uk-icon="cart"></span><span
                                                                                    class="tm-product-card-add-button-text">add
                                                                                    to cart</span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <article class="tm-product-card">
                                                                <div class="tm-product-card-media">
                                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                                            class="tm-media-box" href="product.php">
                                                                            <div class="tm-product-card-labels"><span
                                                                                    class="uk-label uk-label-warning">top
                                                                                    selling</span></div>
                                                                            <figure class="tm-media-box-wrap"><img
                                                                                    src="images/products/4/4-medium.jpg"
                                                                                    alt="ASUS Zenbook UX330UA-FC020T (Rose Gold)" />
                                                                            </figure>
                                                                        </a></div>
                                                                </div>
                                                                <div class="tm-product-card-body">
                                                                    <div class="tm-product-card-info">
                                                                        <div
                                                                            class="uk-text-meta uk-margin-xsmall-bottom">
                                                                            Laptop</div>
                                                                        <h3 class="tm-product-card-title"><a
                                                                                class="uk-link-heading"
                                                                                href="product.php">ASUS Zenbook
                                                                                UX330UA-FC020T (Rose Gold)</a></h3>
                                                                        <ul
                                                                            class="uk-list uk-text-small tm-product-card-properties">
                                                                            <li><span class="uk-text-muted">Diagonal
                                                                                    display: </span><span>13.3"</span>
                                                                            </li>
                                                                            <li><span class="uk-text-muted">CPU:
                                                                                </span><span>Intel®&nbsp;Core™
                                                                                    i7-6500U</span></li>
                                                                            <li><span class="uk-text-muted">RAM:
                                                                                </span><span>8&nbsp;GB</span></li>
                                                                            <li><span class="uk-text-muted">Video Card:
                                                                                </span><span>Intel® HD Graphics
                                                                                    520</span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tm-product-card-shop">
                                                                        <div class="tm-product-card-prices">
                                                                            <div class="tm-product-card-price">$749.00
                                                                            </div>
                                                                        </div>
                                                                        <div class="tm-product-card-add">
                                                                            <div
                                                                                class="uk-text-meta tm-product-card-actions">
                                                                                <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                    title="Add to favorites"><span
                                                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to favorites</span></a><a
                                                                                    class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                    title="Add to compare"><span
                                                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to compare</span></a></div>
                                                                            <button
                                                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                    class="tm-product-card-add-button-icon"
                                                                                    uk-icon="cart"></span><span
                                                                                    class="tm-product-card-add-button-text">add
                                                                                    to cart</span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <article class="tm-product-card">
                                                                <div class="tm-product-card-media">
                                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                                            class="tm-media-box" href="product.php">
                                                                            <figure class="tm-media-box-wrap"><img
                                                                                    src="images/products/5/5-medium.jpg"
                                                                                    alt="Dell XPS 15 9560-8968 (Silver)" />
                                                                            </figure>
                                                                        </a></div>
                                                                </div>
                                                                <div class="tm-product-card-body">
                                                                    <div class="tm-product-card-info">
                                                                        <div
                                                                            class="uk-text-meta uk-margin-xsmall-bottom">
                                                                            Laptop</div>
                                                                        <h3 class="tm-product-card-title"><a
                                                                                class="uk-link-heading"
                                                                                href="product.php">Dell XPS 15
                                                                                9560-8968 (Silver)</a></h3>
                                                                        <ul
                                                                            class="uk-list uk-text-small tm-product-card-properties">
                                                                            <li><span class="uk-text-muted">Diagonal
                                                                                    display: </span><span>15.6"</span>
                                                                            </li>
                                                                            <li><span class="uk-text-muted">CPU:
                                                                                </span><span>Intel®&nbsp;Core™ i7
                                                                                    7700HQ</span></li>
                                                                            <li><span class="uk-text-muted">RAM:
                                                                                </span><span>16&nbsp;GB</span></li>
                                                                            <li><span class="uk-text-muted">Video Card:
                                                                                </span><span>NVIDIA GeForce GTX
                                                                                    960M</span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tm-product-card-shop">
                                                                        <div class="tm-product-card-prices"><del
                                                                                class="uk-text-meta">$999.00</del>
                                                                            <div class="tm-product-card-price">$949.00
                                                                            </div>
                                                                        </div>
                                                                        <div class="tm-product-card-add">
                                                                            <div
                                                                                class="uk-text-meta tm-product-card-actions">
                                                                                <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                    title="Add to favorites"><span
                                                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to favorites</span></a><a
                                                                                    class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                    title="Add to compare"><span
                                                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to compare</span></a></div>
                                                                            <button
                                                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                    class="tm-product-card-add-button-icon"
                                                                                    uk-icon="cart"></span><span
                                                                                    class="tm-product-card-add-button-text">add
                                                                                    to cart</span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <article class="tm-product-card">
                                                                <div class="tm-product-card-media">
                                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                                            class="tm-media-box" href="product.php">
                                                                            <div class="tm-product-card-labels"><span
                                                                                    class="uk-label uk-label-danger">trade-in</span>
                                                                            </div>
                                                                            <figure class="tm-media-box-wrap"><img
                                                                                    src="images/products/6/6-medium.jpg"
                                                                                    alt="Apple MacBook Air 13&quot; MQD32LL/A 128GB (Silver)" />
                                                                            </figure>
                                                                        </a></div>
                                                                </div>
                                                                <div class="tm-product-card-body">
                                                                    <div class="tm-product-card-info">
                                                                        <div
                                                                            class="uk-text-meta uk-margin-xsmall-bottom">
                                                                            Laptop</div>
                                                                        <h3 class="tm-product-card-title"><a
                                                                                class="uk-link-heading"
                                                                                href="product.php">Apple MacBook Air
                                                                                13&quot; MQD32LL/A 128GB (Silver)</a>
                                                                        </h3>
                                                                        <ul
                                                                            class="uk-list uk-text-small tm-product-card-properties">
                                                                            <li><span class="uk-text-muted">Diagonal
                                                                                    display: </span><span>13.3"</span>
                                                                            </li>
                                                                            <li><span class="uk-text-muted">CPU:
                                                                                </span><span>Intel®&nbsp;Core™ i5</span>
                                                                            </li>
                                                                            <li><span class="uk-text-muted">RAM:
                                                                                </span><span>8&nbsp;GB</span></li>
                                                                            <li><span class="uk-text-muted">Video Card:
                                                                                </span><span>Intel® HD Graphics
                                                                                    6000</span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tm-product-card-shop">
                                                                        <div class="tm-product-card-prices">
                                                                            <div class="tm-product-card-price">$849.00
                                                                            </div>
                                                                        </div>
                                                                        <div class="tm-product-card-add">
                                                                            <div
                                                                                class="uk-text-meta tm-product-card-actions">
                                                                                <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                    title="Add to favorites"><span
                                                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to favorites</span></a><a
                                                                                    class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                                                    title="Add to compare"><span
                                                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to compare</span></a></div>
                                                                            <button
                                                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                    class="tm-product-card-add-button-icon"
                                                                                    uk-icon="cart"></span><span
                                                                                    class="tm-product-card-add-button-text">add
                                                                                    to cart</span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <article class="tm-product-card">
                                                                <div class="tm-product-card-media">
                                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                                            class="tm-media-box" href="product.php">
                                                                            <figure class="tm-media-box-wrap"><img
                                                                                    src="images/products/7/7-medium.jpg"
                                                                                    alt="Dell Inspiron 5378-2063 (Gray)" />
                                                                            </figure>
                                                                        </a></div>
                                                                </div>
                                                                <div class="tm-product-card-body">
                                                                    <div class="tm-product-card-info">
                                                                        <div
                                                                            class="uk-text-meta uk-margin-xsmall-bottom">
                                                                            Laptop</div>
                                                                        <h3 class="tm-product-card-title"><a
                                                                                class="uk-link-heading"
                                                                                href="product.php">Dell Inspiron
                                                                                5378-2063 (Gray)</a></h3>
                                                                        <ul
                                                                            class="uk-list uk-text-small tm-product-card-properties">
                                                                            <li><span class="uk-text-muted">Diagonal
                                                                                    display: </span><span>13.3"</span>
                                                                            </li>
                                                                            <li><span class="uk-text-muted">CPU:
                                                                                </span><span>Intel®&nbsp;Core™
                                                                                    i3-7100U</span></li>
                                                                            <li><span class="uk-text-muted">RAM:
                                                                                </span><span>4&nbsp;GB</span></li>
                                                                            <li><span class="uk-text-muted">HDD
                                                                                    Capacity:
                                                                                </span><span>1&nbsp;TB</span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tm-product-card-shop">
                                                                        <div class="tm-product-card-prices"><del
                                                                                class="uk-text-meta">$599.00</del>
                                                                            <div class="tm-product-card-price">$579.00
                                                                            </div>
                                                                        </div>
                                                                        <div class="tm-product-card-add">
                                                                            <div
                                                                                class="uk-text-meta tm-product-card-actions">
                                                                                <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                    title="Add to favorites"><span
                                                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to favorites</span></a><a
                                                                                    class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                    title="Add to compare"><span
                                                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to compare</span></a></div>
                                                                            <button
                                                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                    class="tm-product-card-add-button-icon"
                                                                                    uk-icon="cart"></span><span
                                                                                    class="tm-product-card-add-button-text">add
                                                                                    to cart</span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <article class="tm-product-card">
                                                                <div class="tm-product-card-media">
                                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                                            class="tm-media-box" href="product.php">
                                                                            <div class="tm-product-card-labels"><span
                                                                                    class="uk-label uk-label-success">new</span>
                                                                            </div>
                                                                            <figure class="tm-media-box-wrap"><img
                                                                                    src="images/products/8/8-medium.jpg"
                                                                                    alt="Lenovo Yoga 720-13IKB 80X60059RK (Silver)" />
                                                                            </figure>
                                                                        </a></div>
                                                                </div>
                                                                <div class="tm-product-card-body">
                                                                    <div class="tm-product-card-info">
                                                                        <div
                                                                            class="uk-text-meta uk-margin-xsmall-bottom">
                                                                            Laptop</div>
                                                                        <h3 class="tm-product-card-title"><a
                                                                                class="uk-link-heading"
                                                                                href="product.php">Lenovo Yoga
                                                                                720-13IKB 80X60059RK (Silver)</a></h3>
                                                                        <ul
                                                                            class="uk-list uk-text-small tm-product-card-properties">
                                                                            <li><span class="uk-text-muted">Diagonal
                                                                                    display: </span><span>13.3"</span>
                                                                            </li>
                                                                            <li><span class="uk-text-muted">CPU:
                                                                                </span><span>Intel®&nbsp;Core™
                                                                                    i5-7200U</span></li>
                                                                            <li><span class="uk-text-muted">RAM:
                                                                                </span><span>8&nbsp;GB</span></li>
                                                                            <li><span class="uk-text-muted">Video Card:
                                                                                </span><span>Intel® HD Graphics
                                                                                    620</span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tm-product-card-shop">
                                                                        <div class="tm-product-card-prices">
                                                                            <div class="tm-product-card-price">$1099.00
                                                                            </div>
                                                                        </div>
                                                                        <div class="tm-product-card-add">
                                                                            <div
                                                                                class="uk-text-meta tm-product-card-actions">
                                                                                <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                    title="Add to favorites"><span
                                                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to favorites</span></a><a
                                                                                    class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                    title="Add to compare"><span
                                                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to compare</span></a></div>
                                                                            <button
                                                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                                                    class="tm-product-card-add-button-icon"
                                                                                    uk-icon="cart"></span><span
                                                                                    class="tm-product-card-add-button-text">add
                                                                                    to cart</span></button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                            <article class="tm-product-card">
                                                                <div class="tm-product-card-media">
                                                                    <div class="tm-ratio tm-ratio-4-3"><a
                                                                            class="tm-media-box" href="product.php">
                                                                            <figure class="tm-media-box-wrap"><span
                                                                                    class="uk-text-muted"
                                                                                    uk-icon="icon: image; ratio: 3;"></span>
                                                                            </figure>
                                                                        </a></div>
                                                                </div>
                                                                <div class="tm-product-card-body">
                                                                    <div class="tm-product-card-info">
                                                                        <div
                                                                            class="uk-text-meta uk-margin-xsmall-bottom">
                                                                            Laptop</div>
                                                                        <h3 class="tm-product-card-title"><a
                                                                                class="uk-link-heading"
                                                                                href="product.php">Lenovo ThinkPad X380
                                                                                Yoga 20LH000MUS (Black)</a></h3>
                                                                        <ul
                                                                            class="uk-list uk-text-small tm-product-card-properties">
                                                                            <li><span class="uk-text-muted">Diagonal
                                                                                    display: </span><span>13.3"</span>
                                                                            </li>
                                                                            <li><span class="uk-text-muted">CPU:
                                                                                </span><span>Intel®&nbsp;Core™ i7
                                                                                    8550U</span></li>
                                                                            <li><span class="uk-text-muted">RAM:
                                                                                </span><span>4&nbsp;GB</span></li>
                                                                            <li><span class="uk-text-muted">Video Card:
                                                                                </span><span>Intel® UHD Graphics
                                                                                    620</span></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="tm-product-card-shop">
                                                                        <div class="tm-product-card-prices">
                                                                            <div class="uk-text-muted">Product not
                                                                                available</div>
                                                                        </div>
                                                                        <div class="tm-product-card-add">
                                                                            <div
                                                                                class="uk-text-meta tm-product-card-actions">
                                                                                <a class="tm-product-card-action js-add-to js-add-to-favorites"
                                                                                    title="Add to favorites"><span
                                                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to favorites</span></a><a
                                                                                    class="tm-product-card-action js-add-to js-add-to-compare"
                                                                                    title="Add to compare"><span
                                                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                                                        class="tm-product-card-action-text">Add
                                                                                        to compare</span></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </article>
                                                        </div>
                                                    </div>
                                                    <div><button
                                                            class="uk-button uk-button-default uk-button-large uk-width-1-1"
                                                            style="border-top-left-radius: 0; border-top-right-radius: 0;"><span
                                                                class="uk-margin-small-right"
                                                                uk-icon="icon: plus; ratio: .75;"></span><span>Load
                                                                more</span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <ul class="uk-pagination uk-flex-center">
                                                <li class="uk-active"><span>1</span></li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#">5</a></li>
                                                <li class="uk-disabled"><span>…</span></li>
                                                <li><a href="#">20</a></li>
                                                <li><a href="#"><span uk-pagination-next></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
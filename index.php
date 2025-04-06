<?php
// Variabel untuk meta tag
$brand = "TOTO123";
$title = "$brand: Link Situs Keluaran Toto Macau Terbaru dan Tercepat 2025";
$keywords = "$brand";
$thisPageLink = "https://miprofe.com/";
$gsc = '<meta name="-----" />';
$canonicalLink = "https://miprofe.com/";
$canonical = "<link rel='canonical' href='$canonicalLink' />"; // harus format <link rel='canonical' href='$canonicalLink' />, kosong jika tidak perlu
$description = "$brand: Situs keluaran Toto Macau terbaru dan tercepat 2025. Nikmati hasil live draw akurat dan peluang taruhan tinggi dengan pengalaman yang terpercaya.";
$author = "Admin Gacor";
$favicon = "https://studiointermedia.com/images/2025/03/23/fav70a6fe297b8df7da.png";
$logo = "https://studiointermedia.com/images/2025/04/03/toto123.png";
$link_gambar = "https://studiointermedia.com/images/2025/04/03/aslimacau.jpeg";
$link_barang =  $thisPageLink;
$nama_barang = "TOTO123 SITUS KELUARAN MACAU TERCEPAT 2025";
$nama_toko = $brand;
$harga_barang = "10,000.00";
$harga_barang_integer = "10000";

$linkout = "https://mbrew.site/slebew/toto123.html";
$artikel = '<p>Temukan link resmi TOTO123, situs keluaran Toto Macau terbaru dan tercepat di 2025! Dapatkan informasi hasil live draw Toto Macau dengan akurat dan tepat waktu. Nikmati pengalaman taruhan yang aman dan terpercaya, serta peluang menang yang tinggi setiap harinya. Jangan lewatkan kesempatan untuk mengikuti hasil terbaru dan memasang taruhan dengan lebih mudah. Segera akses situs TOTO123 dan raih kemenangan Anda sekarang juga!</p>';
?>
<!doctype html>
<html ⚡ lang="id">
<head>
    <meta charset="utf-8" />
    <title><?php echo $title ?></title>
    <link rel="icon" type="image/x-icon" href="<?php echo $favicon ?>" />
    <meta name="author" content="<?php echo $author; ?>">
    <meta name="keywords" content="<?php echo $keywords ?>" />
    <?php echo $canonical ?>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
    <meta name="description" content="<?php echo $description ?>" />

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $title ?>" />
    <meta property="og:description" content="<?php echo $description ?>" />
    <meta property="og:image" content="<?php echo $link_gambar ?>" />
    <meta property="og:url" content="<?php echo $thisPageLink ?>" />
    <meta property="og:type" content="product" />
    <meta property="og:site_name" content="<?php echo $nama_toko ?>" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $title ?>" />
    <meta name="twitter:description" content="<?php echo $description ?>" />
    <meta name="twitter:image" content="<?php echo $link_gambar ?>" />

    <meta property="product:price:amount" content="<?php echo $harga_barang_integer ?>" />
    <meta property="product:price:currency" content="IDR" />
    <meta property="product:availability" content="instock" />

    <meta itemprop="name" content="<?php echo $nama_barang ?>" />
    <meta itemprop="url" content="<?php echo $thisPageLink ?>" />
    <meta itemprop="description" content="<?php echo $description; ?>" />
    <meta itemprop="thumbnailUrl" content="<?php echo $link_gambar; ?>" />

    <!-- JSON-LD Structured Data for Product -->
    <script type="application/ld+json">
        {
            "@context": "<?php echo $thisPageLink ?>",
            "@type": "Product",
            "name": "<?php echo $nama_barang ?>",
            "image": [
                "<?php echo $link_gambar ?>"
            ],
            "description": "<?php echo $description ?>",
            "sku": "<?php echo $nama_barang ?>",
            "brand": {
                "@type": "<?php echo $brand ?>",
                "name": "<?php echo $nama_toko ?>"
            },
            "offers": {
                "@type": "Offer",
                "url": "<?php echo $link_barang ?>",
                "priceCurrency": "IDR",
                "price": "<?php echo $harga_barang_integer ?>"
            }
        }
    </script>

    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
    <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>

    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

    <style amp-custom>
        body {
            font-family: Arial, sans-serif;
            padding: 0;
            margin: 0;
            color: #333;
            display: flex;
            flex-direction: column;
        }
        .page {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        article{
            flex: 1;
            height: auto;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            flex-wrap: wrap;
            background-color: #f3a102;

            padding-top: 2vw;
            padding-bottom: 2vw;
            padding-left: 3vw;
            padding-right: 3vw;
            pointer-events: auto;
        }
        footer {
            background-color: #f3a102;
            color: white;
            text-align: center;
            padding: 30px 10px;
            font-size: 14px;
            margin-top: auto;
        }

        .logo {
            font-size: 20px;
            font-weight: bold;
            color: #333;
            text-decoration: none;
        }

        nav.desktop-menu {
            display: flex;
            gap: 20px;
            width: 33%;
        }

        nav.desktop-menu a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: bold;
        }

        .menu-button {
            background: none;
            border: none;
            font-size: 24px;
            cursor: pointer;
            display: none;
        }

        amp-sidebar {
            width: 250px;
            background: #fff;
            padding: 20px;
        }

        amp-sidebar a {
            display: block;
            padding: 10px 0;
            color: #333;
            text-decoration: none;
            font-size: 18px;
        }

        @media (max-width: 768px) {
            nav.desktop-menu {
                display: none;
            }

            .menu-button {
                display: inline-block;
            }
        }


        .n-columns-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            font-weight: 700;
        }
        .n-columns-2 a {
            text-align: center;
        }
        .login, .login-button {
            border: 1px solid #eeff00;
            background: linear-gradient(to bottom, #ea830b 0, #eeff00 100%);
        }
        .login, .register {
            color: #fff;
            padding: 13px 10px;
        }
        a {
            color: inherit;
            text-decoration: none;
        }
        .register, .register-button {
            background: linear-gradient(to bottom, #000000 0, #000000 100%);
            border: 1px solid #000000;
        }
        .header-title-logo {
            width: 165px;
        }
        .header-title-logo a {
            max-width: 100%;
            max-height: 50px;
        }
        .header-title-logo amp-img {
            width: 100%;
            height: auto;

        }
        .header-actions--right .header-actions-action {
            margin: 0 0 0 1vw;
        }
        .header-actions-action, .header-menu-actions-action {
            text-align: center;
            line-height: 1;
        }
        :not(.header--menu-open) .header-actions .icon--fill svg {
            fill: currentColor;
        }
        :not(.header--menu-open) .header-actions .icon--stroke svg {
            stroke: currentColor;
        }
        .header-actions-action .icon, .header-menu-actions-action .icon {
            flex-shrink: 0;
            height: 25px;
            width: 25px;
        }
        .header-actions-action .cart-style-icon .icon-cart-quantity, .header-menu-actions-action .cart-style-icon .icon-cart-quantity {
            line-height: 25px;
        }
        .header-actions-action .icon-cart-quantity, .header-menu-actions-action .icon-cart-quantity {
            padding-left: calc(3px + 25px / 15);
        }
        .icon--stroke svg {
            stroke-width: 1px;
        }
        .icon-cart-quantity {
            position: relative;
            text-align: center;
        }
        .header-actions-action .sqs-custom-cart, .header-menu-actions-action .sqs-custom-cart {
            display: block;
        }
        .Cart-inner {
            position: relative;
            display: flex;
        }

        .header-actions--right {
            justify-content: flex-end;
        }
        .header-actions {
            flex-grow: 0;
            flex-shrink: 1;
            display: inline-flex;
            align-items: center;
        }
        @media screen and (min-width: 768px), screen and (max-width: calc(1907px)) and (orientation: landscape) {
            .header-nav-item, .user-accounts-text-link, .cart-style-text, .icon-cart-quantity:not(.legacy-cart), .language-picker {
                font-size: calc((1.2 - 1)* 1.2vw + 1rem);
            }
            .header-actions {
                width: 33%;
            }
        }
        .container {
            display: block;
            background: #fff;
            max-width: 1800px;
            padding-top: 3vw;
            padding-left: 3vw;
            padding-right: 3vw;
            margin: 0 auto;
        }

        .content {
            display: block;
            max-width: 1800px;
            padding-left: 3vw;
            padding-right: 3vw;
            margin: 0 auto;
        }
        .content-right .img{
            width: 100%;
        }

        .content-left h1 {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .content-left, .content-right {
            flex: 1 1 100%;
            margin: 3vw;
        }
        @media (min-width: 768px) {
            .content {
                display: flex;
                max-width: 1800px;
                padding-left: 3vw;
                padding-right: 3vw;
                margin: 0 auto;
            }
            .container {
                flex-wrap: nowrap;
            }
            .content-left, .content-right {
                flex: 1;
            }
        }
        @media (max-width: 767px) {
            .content-right {
                order: -1;
            }
        }
        .price {
            font-size: 18px;
            margin: 15px 0;
        }

        .description {
            font-size: 16px;
            line-height: 1.6;
        }

        .quantity-label {
            margin-top: 20px;
            margin-bottom: 5px;
        }

        input[type="number"] {
            width: 60px;
            padding: 5px;
            font-size: 16px;
        }

        .add-to-cart {
            margin-top: 20px;
            padding: 12px 20px;
            background-color: black;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }

        .add-to-cart:hover {
            background-color: #333;
        }


    </style>


</script>

</head>
<body class="page">

<!-- Sidebar (Mobile Menu) -->
<amp-sidebar id="sidebar" layout="nodisplay" side="left">
    <a href="#" on="tap:sidebar.close">✕ Close</a>
    <a href="<?php echo $linkout ?>">Home</a>
    <a href="<?php echo $linkout ?>">All Prints</a>
    <a href="<?php echo $linkout ?>">About</a>
</amp-sidebar>

<!-- Header -->
<header class="header">
    <nav class="desktop-menu">
        <a href="<?php echo $linkout ?>">Home</a>
        <a href="<?php echo $linkout ?>">All Prints</a>
        <a href="<?php echo $linkout ?>">About</a>
    </nav>
    <div class="header-title-logo">
        <a href="<?php echo $linkout ?>" data-animation-role="header-element">
            <amp-img src="<?php echo $logo ?>" width="165" height="50" layout="responsive" alt="Produk Keren"></amp-img>
        </a>
    </div>
    <div class="header-actions header-actions--right">
        <div class="header-actions-action header-actions-action--cart">
            <a href="<?php echo $linkout ?>" class="cart-style-icon icon--stroke icon--fill icon--cart sqs-custom-cart  header-icon  show-empty-cart-state cart-quantity-zero header-icon-border-shape-none header-icon-border-style-outline">
                <span class="Cart-inner">
                  <svg class="icon icon--cart" width="61" height="49" viewBox="0 0 61 49">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 2C0.5 1.17157 1.17157 0.5 2 0.5H13.6362C14.3878 0.5 15.0234 1.05632 15.123 1.80135L16.431 11.5916H59C59.5122 11.5916 59.989 11.8529 60.2645 12.2847C60.54 12.7165 60.5762 13.2591 60.3604 13.7236L50.182 35.632C49.9361 36.1614 49.4054 36.5 48.8217 36.5H18.0453C17.2937 36.5 16.6581 35.9437 16.5585 35.1987L12.3233 3.5H2C1.17157 3.5 0.5 2.82843 0.5 2ZM16.8319 14.5916L19.3582 33.5H47.8646L56.6491 14.5916H16.8319Z"></path>
                    <path d="M18.589 35H49.7083L60 13H16L18.589 35Z"></path>
                    <path d="M21 49C23.2091 49 25 47.2091 25 45C25 42.7909 23.2091 41 21 41C18.7909 41 17 42.7909 17 45C17 47.2091 18.7909 49 21 49Z"></path>
                    <path d="M45 49C47.2091 49 49 47.2091 49 45C49 42.7909 47.2091 41 45 41C42.7909 41 41 42.7909 41 45C41 47.2091 42.7909 49 45 49Z"></path>
                  </svg>
                  <div class="icon-cart-quantity">
                    <span class="cart-quantity-container">
                      <span class="sqs-cart-quantity">0</span>
                    </span>
                  </div>
                </span>
            </a>
        </div>
    </div>
    <button class="menu-button" on="tap:sidebar.toggle">☰</button>
</header>

<!-- Konten Produk -->
<article>
<div class="content-wrapper">
    <div class="n-columns-2">
        <a href="<?php echo $linkout ?>" rel="nofollow noreferrer" class="login">LOGIN</a>
        <a href="<?php echo $linkout ?>" rel="nofollow noreferrer" class="register">DAFTAR</a>
    </div>
    <div class="container">
        <div class="content">
            <div class="content-right">
                <amp-img src="<?php echo $link_gambar ?>" width="600" height="600" layout="responsive" alt="Produk Keren"></amp-img>
            </div>
            <div class="content-left">
                <h1><?php echo $nama_barang ?></h1>
                <div class="price">IDR <?php echo $harga_barang ?></div>
                <div class="description">
                    <?php echo $artikel ?>
                </div>
                <div class="quantity-label">Quantity:</div>
                <input type="number" value="1" min="1" />
                <br>
                <button class="add-to-cart">Add To Cart</button>
            </div>
        </div>
    </div>
</div>
</article>
<footer>
    &copy; 2025 <?php echo $brand ?> - All Rights Reserved
</footer>
</body>
</html>

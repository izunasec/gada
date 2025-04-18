<?php
// Variabel untuk meta tag
$brand = "TOTO123";
$title = "$brand: Link Sistus Toto 4D Gacor dan Bandar Toto Macau Terpercaya";
$keywords = "$brand";
$thisPageLink = "https://www.floridahouseboatvacationrentals.com/";
$gsc = '<meta name="-----" />';
$canonicalLink = "https://www.floridahouseboatvacationrentals.com/";
$canonical = "<link rel='canonical' href='$canonicalLink' />"; // harus format <link rel='canonical' href='$canonicalLink' />, kosong jika tidak perlu
$description = "TOTO213 adalah situs terpercaya untuk Toto 4D dan Bandar Toto Macau, menyediakan layanan bermain yang aman, nyaman, dan mudah diakses dengan link gacor.";
$author = "Admin Gege";
$favicon = "https://studiointermedia.com/images/2025/04/18/icon.png";
$logo = "https://studiointermedia.com/images/2025/04/03/toto123.png";
$link_gambar = ["https://studiointermedia.com/images/2025/04/18/tototergacor4sd.jpeg","https://studiointermedia.com/images/2025/04/18/tototergacor4sd.jpeg"];
$link_barang =  $thisPageLink;
$nama_barang = "TOTO123";
$nama_toko = $brand;
$harga_barang = "10,000.00";
$harga_barang_integer = "10000";

$linkout = "https://mbrew.site/slebew/toto123.html";
$artikel = '<p>TOTO213 adalah situs terpercaya untuk bermain Toto 4D dan Bandar Toto Macau. Dengan link gacor yang mudah diakses, TOTO213 memberikan pengalaman bermain yang aman dan menyenangkan. Semua permainan berjalan dengan adil dan tanpa ribet, sehingga pemain bisa merasa tenang. Bergabunglah dengan TOTO213 dan nikmati permainan yang mudah dan terpercaya.</p>';
?>
<!doctype html>
<html ⚡>
<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <link rel="icon" href="https://ae01.alicdn.com/images/eng/wholesale/icon/aliexpress.ico">
    <meta name="author" content="<?php echo $author; ?>">
    <meta name="keywords" content="<?php echo $keywords ?>" />
    <?php echo $canonical ?>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1" />
    <meta name="description" content="<?php echo $description ?>" />

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $title ?>" />
    <meta property="og:description" content="<?php echo $description ?>" />
    <meta property="og:image" content="<?php echo $link_gambar[0] ?>" />
    <meta property="og:url" content="<?php echo $thisPageLink ?>" />
    <meta property="og:type" content="product" />
    <meta property="og:site_name" content="<?php echo $nama_toko ?>" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo $title ?>" />
    <meta name="twitter:description" content="<?php echo $description ?>" />
    <meta name="twitter:image" content="<?php echo $link_gambar[0] ?>" />

    <meta property="product:price:amount" content="<?php echo $harga_barang_integer ?>" />
    <meta property="product:price:currency" content="IDR" />
    <meta property="product:availability" content="instock" />

    <meta itemprop="name" content="<?php echo $nama_barang ?>" />
    <meta itemprop="url" content="<?php echo $thisPageLink ?>" />
    <meta itemprop="description" content="<?php echo $description; ?>" />
    <meta itemprop="thumbnailUrl" content="<?php echo $link_gambar[0]; ?>" />

    <!-- JSON-LD Structured Data for Product -->
    <script type="application/ld+json">
        {
            "@context": "<?php echo $thisPageLink ?>",
            "@type": "Product",
            "name": "<?php echo $nama_barang ?>",
            "image": [
                "<?php echo $link_gambar[0] ?>"
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
    <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-accordion" src="https://cdn.ampproject.org/v0/amp-accordion-0.1.js"></script>
    <style amp-custom>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.5;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px;
            border-bottom: 1px solid #eee;
            position: sticky;
            top: 0;
            background: white;
            z-index: 10;
        }
        .header-left {
            display: flex;
            align-items: center;
            height: 48px;
            padding: 0 16px;
            background: #fff;
        }
        .header-right {
            display: flex;
            gap: 16px;
        }
        .logo img{
            flex-grow: 1;
            flex-shrink: 0;
            min-width: 120px;
            margin-top: 4px;
            height: 24px;
        }
        .header svg{
            font-size: 24px;
            color: #000;
        }
        .other-icon{
            flex-shrink:0;
            display: flex;
            align-items: center;
        }
        .price-section {
            padding: 12px;
            background-color: #fff8f8;
        }
        .main-price {
            font-size: 24px;
            font-weight: bold;
            color: #f20;
        }
        .price-note {
            font-size: 12px;
            color: #999;
        }
        .discount-badge {
            background-color: #f20;
            color: white;
            padding: 2px 6px;
            border-radius: 3px;
            font-size: 12px;
            margin-left: 8px;
        }
        .discount-info {
            font-size: 14px;
            margin-top: 8px;
            color: #666;
        }
        .product-title {
            padding: 12px;
            font-size: 18px;
            font-weight: bold;
        }
        .product-subtitle {
            padding: 0 12px 12px;
            font-size: 14px;
            color: #666;
        }
        .section {
            padding: 12px;
            border-top: 1px solid #eee;
        }
        .section-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 8px;
        }
        .spec-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }
        .spec-table td {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
        }
        .spec-table td:first-child {
            color: #666;
            width: 50%;
        }
        .description {
            font-size: 14px;
            margin-bottom: 16px;
        }
        .cta-button {
            display: block;
            background-color: #f20;
            color: white;
            text-align: center;
            padding: 14px;
            font-weight: bold;
            border-radius: 4px;
            margin: 16px 12px;
            text-decoration: none;
        }
        amp-accordion section[expanded] .show-more {
            display: none;
        }
        amp-accordion section:not([expanded]) .show-less {
            display: none;
        }
        .accordion-header {
            padding: 12px;
            background-color: #f9f9f9;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .accordion-content {
            padding: 12px;
        }
        a{
            text-decoration: none;
        }
        .footer{
            align-items: center;
            display: -ms-flexbox;
            display: flex;
            background: #fff;
            bottom: 0;
            height: 52px;
            /*padding: 0 12px;*/
            position: fixed;
            width: 100%;
            z-index: 1020;
            margin:0;
        }
        .footer a.footer-icon{
            color: #191919;
            flex-shrink: 0;
            justify-content: center;
            align-items: center;
            display: -ms-flexbox;
            display: flex;
            touch-action: manipulation;
            background-color: transparent;
            outline: none;
            cursor: pointer;
            transition: color .3s;
            margin: 0;
            padding: 0 12px;
        }
        .footer a.footer-icon img{
            height: 24px;
            min-width: 24px;
            margin: 0;
            padding: 0;
            border: 0;
            max-width: 100%;
        }
        .footer-beli{
            width: 100%;
            padding: 0 12px;
        }
        .footer-beli-item{
            border-radius: 20px;
            display: -ms-flexbox;
            display: flex;
            flex-grow: 1;
            height: 40px;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }
        .footer-beli a{
            align-items: center;
            background: #ff4747;
            background-image: linear-gradient(270deg, #ff8329, #ffc200);
            color: #fff;
            display: -ms-flexbox;
            display: flex;
            flex-grow: 1;
            font-size: 14px;
            font-weight: 700;
            justify-content: center;
            text-align: center;
            width: 50%;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="header-left">
        <a aria-label="category" href="<?php echo $linkout ?>">
            <span data-spm="more" class="comet-icon comet-icon-viewlist _3L9my _2-7VE">
                <svg viewBox="0 0 1024 1024" width="1em" height="1em">
                    <path d="M906.666667 789.333333a32 32 0 0 1 0 64H117.333333a32 32 0 0 1 0-64h789.333334z m0-309.333333a32 32 0 0 1 0 64H117.333333a32 32 0 0 1 0-64h789.333334z m0-309.333333a32 32 0 0 1 0 64H117.333333a32 32 0 0 1 0-64h789.333334z"></path>
                </svg>
            </span>
        </a>
        <div class="logo">
            <a class="logo-content" href="<?php echo $linkout ?>" aria-label="aliexpress">
                <img src="//ae01.alicdn.com/kf/Sb38c5071993440b8939680d5ebcc081be/1449x315.png" alt="aliexpress">
            </a>
        </div>
    </div>
    <div class="header-right">
        <a class="wlG9s" href="<?php echo $linkout ?>" aria-label="shop">
            <span class="comet-icon">
                <svg viewBox="0 0 1024 1024" width="1em" height="1em" fill="currentColor" aria-hidden="false" focusable="false">
                    <path d="M506.666667 74.666667c130.773333 0 236.8 106.282667 236.8 237.333333a237.226667 237.226667 0 0 1-99.114667 193.109333c39.893333 12.352 76.586667 30.357333 108.010667 53.546667 100.010667 73.706667 152.789333 169.450667 156.416 284.928 0.96 30.464-25.109333 49.386667-75.605334 64.725333l-11.2 3.242667c-3.84 1.066667-7.829333 2.133333-11.946666 3.157333l-12.672 3.072-13.397334 2.986667-14.122666 2.986667c-74.965333 15.317333-168.533333 24.597333-256.789334 24.533333-88.490667-0.106667-181.802667-9.536-256.768-24.96l-14.336-3.050667a970.666667 970.666667 0 0 1-6.890666-1.536l-13.226667-3.114666C153.386667 898.901333 117.333333 879.36 117.333333 844.586667c0-154.709333 106.624-285.866667 255.658667-336.682667a237.205333 237.205333 0 0 1-103.125333-195.904c0-131.050667 106.026667-237.333333 236.8-237.333333z m3.712 474.666666c-177.621333 0-321.408 126.122667-328.746667 282.666667l-0.085333 2.026667 2.581333 1.365333a117.333333 117.333333 0 0 0 5.418667 2.517333l3.114666 1.322667c17.706667 7.296 44.245333 14.762667 76.522667 21.397333 70.72 14.570667 159.722667 23.552 243.904 23.637334 83.989333 0.064 173.248-8.768 243.925333-23.210667 32.426667-6.613333 59.029333-14.08 76.672-21.397333 3.242667-1.344 6.058667-2.645333 8.448-3.84l2.133334-1.130667-0.405334-5.76c-7.018667-85.034667-47.232-155.541333-122.112-213.226667l-7.36-5.546666c-52.906667-38.997333-126.08-60.821333-204.010666-60.821334zM506.666667 138.666667c-95.402667 0-172.8 77.589333-172.8 173.333333 0 95.744 77.397333 173.333333 172.8 173.333333 95.402667 0 172.8-77.589333 172.8-173.333333 0-95.744-77.397333-173.333333-172.8-173.333333z"></path>
                </svg>
            </span>
        </a>
        <a class="wlG9s" href="<?php echo $linkout ?>" aria-label="account">
            <span class="comet-icon">
                <svg viewBox="0 0 1024 1024" width="1em" height="1em">
                    <path d="M309.333333 746.666667a96 96 0 1 1 0 192 96 96 0 0 1 0-192z m426.666667 0a96 96 0 1 1 0 192 96 96 0 0 1 0-192z m-426.666667 64a32 32 0 1 0 0 64 32 32 0 0 0 0-64z m426.666667 0a32 32 0 1 0 0 64 32 32 0 0 0 0-64zM147.872 107.765333l0.501333 1.813334 33.152 132.608 0.832-0.725334a116.746667 116.746667 0 0 1 44.789334-23.829333l3.018666-0.8a117.333333 117.333333 0 0 1 23.669334-3.402667l4.8-0.096h517.408c64.8 0 117.333333 52.533333 117.333333 117.333334a117.333333 117.333333 0 0 1-2.442667 23.786666l-1.066666 4.672-64 256a117.333333 117.333333 0 0 1-110.72 88.832l-3.104 0.042667H322.624a117.333333 117.333333 0 0 1-113.034667-85.877333l-0.789333-2.997334L86.293333 125.098667a32 32 0 0 1 61.578667-17.333334zM776.032 277.333333H258.634667a53.333333 53.333333 0 0 0-52.266667 63.946667l0.522667 2.314667 64 256a53.333333 53.333333 0 0 0 49.312 40.352l2.432 0.053333h389.418666a53.333333 53.333333 0 0 0 51.093334-38.048l0.64-2.346667 64-256a53.333333 53.333333 0 0 0-49.418667-66.218666L776.042667 277.333333zM650.666667 426.666667a32 32 0 0 1 0 64H373.333333a32 32 0 0 1 0-64h277.333334z"></path>
                </svg>
            </span>
        </a>
    </div>
</div>

<amp-carousel width="400" height="300" layout="responsive" type="slides">
    <?php foreach ($link_gambar as $gambar) { ?>

    <div class="slide">
        <amp-img src="<?php echo $gambar; ?>" width="400" height="300" layout="responsive" alt="Product image 1"></amp-img>
    </div>
    <?php } ?>
</amp-carousel>

<div class="price-section">
    <div class="main-price">
        Rp<?php echo $harga_barang; ?>
        <span class="discount-badge">15%</span>
    </div>
    <div class="price-note">Harga ditampilkan sebelum pajak; Ekstra Diskon 15%</div>
    <div class="discount-info">
        <strong>Rp100,000 diskon pesanan di atas Rp20,000</strong>
    </div>
</div>

<div class="product-title">
    <?php echo $nama_barang; ?>>
</div>


<div class="section">
    <div class="section-title">Keamanan & privasi</div>
    <div class="description">
        Pembayaran aman: We do not share your personal data...<br>
        Privasi aman: We protect your privacy and keep your information secure...
    </div>
</div>

<amp-accordion animate>
    <section expanded>
        <h4 class="accordion-header">
            <span>Spesifikasi</span>
            <span class="show-more">+</span>
            <span class="show-less">-</span>
        </h4>
        <div class="accordion-content">
            <table class="spec-table">
                <tr>
                    <td>DAC</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Nomor Model</td>
                    <td><?php echo $brand ?></td>
                </tr>
                <tr>
                    <td>Seimbang Keluar</td>
                    <td>Tidak</td>
                </tr>
                <tr>
                    <td>Memori eksternal</td>
                    <td>Tidak</td>
                </tr>
            </table>
        </div>
    </section>

    <section>
        <h4 class="accordion-header">
            <span>Deskripsi Lengkap</span>
            <span class="show-more">+</span>
            <span class="show-less">-</span>
        </h4>
        <div class="accordion-content">
            <div class="description">
                <strong>Deskripsi:</strong><br>
                <?php echo $artikel; ?>
            </div>
        </div>
    </section>

    <section>
        <h4 class="accordion-header">
            <span>Pengiriman & Pembayaran</span>
            <span class="show-more">+</span>
            <span class="show-less">-</span>
        </h4>
        <div class="accordion-content">
            <div class="description">
                <strong>Pengiriman:</strong> Rp15,000<br>
                <strong>Estimasi:</strong> Apr 18 - 26<br><br>
                <strong>Return & refund policy:</strong> 15 hari pengembalian<br>
                <strong>Pembayaran:</strong> Kartu kredit, Transfer Bank, e-Wallet
            </div>
        </div>
    </section>
</amp-accordion>

<!--<div>-->
<!--    <a href="--><?php //echo $linkout ?><!--" class="cta-button">Beli Sekarang</a>-->
<!--</div>-->

<div class="footer">
    <a class="footer-icon" href="<?php echo $linkout ?>" rel="nofollow" aria-label="store">
        <img src="https://ae01.alicdn.com/kf/S1a4260465a2f4f8eb24f56766a46f27d2/96x96.png" alt="">
    </a>
    <div class="footer-beli">
        <div class="footer-beli-item">
            <a href="<?php echo $linkout ?>" class="action-bar--unavailableBtn--yuxj6M4">Beli Sekarang</a>
        </div>
    </div>
</div>

</body>
</html>

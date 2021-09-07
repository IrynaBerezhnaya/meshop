<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl_carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl_carousel/owl.theme.default.min.css">

    <link rel="stylesheet" href="libs/fontawesome/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/main.css">

    <title>meShop</title>

</head>
<body class="main-bg">

<!--Modal window on a dark background, basket-->
<div class="side-cart" id="side_cart">
    <div class="header-cart ib-navbar-brand">
        <span>Shopping Cart</span>
        <span class="side-cart-close" id="side_cart_close" href="#"><i class="fal fa-times"></i></span>
    </div>

    <p class="ib-nav-link m-3">Your cart is empty.</p>

    <div class="footer-cart subtitle-news fixed-bottom text-center">
        <a href="#" class="link-cart text-uppercase" id="link_cart">Continue shopping</a>
    </div>
</div>
<div class="shadow-overlay" id="shadow_overlay"></div>
<div class="ib-nav">
    <div class="message bg-fixed">
        <div class="container">
            <div class="alert alert-dismissible fade show d-flex justify-content-between align-items-center"
                 role="alert">
                <h4 class="text-fixed text-capitalize m-0">Free international shipping with $75 purchase</h4>
                <button type="button" class="btn btn-outline-dark ib-btn-close" data-dismiss="alert" aria-label="Close">
                    X
                </button>
            </div>
        </div>
    </div>

    <div class="container ib-border">
        <div class="row align-items-end align-items-lg-center">
            <div class="col-9 col-lg-6">
                <p class="nav-text">Hello guys! Welcome to MeShop <span
                        class="nav-email">Email: example@gmail.com</span></p>
            </div>
            <div class="col-3 col-lg-6">
                <nav class="nav justify-content-end">
                    <a class="nav-link ib-link active" href="#">EN</a>
                    <a class="nav-link ib-link" href="#">USD</a>
                </nav>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand ib-navbar-brand" href="index.php">MeStore</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                   <a class="ib-toggler-icon" href="#"><i class="far fa-ellipsis-v"><i
                           class="far fa-bars"></i></i></a>
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link ib-nav-link active" href="index.php">Home</a>
                    <a class="nav-item nav-link ib-nav-link" href="shop.php">Shop</a>
                    <a class="nav-item nav-link ib-nav-link" href="categories.php">Categories</a>
                    <a class="nav-item nav-link ib-nav-link" href="">Lookbook</a>
                    <a class="nav-item nav-link ib-nav-link" href="local_stores_page.php">About Us</a>
                    <a class="nav-item nav-link ib-nav-link" href="sign_up_page.php">My Account</a>
                    <div class="d-flex flex-row jcc">
                        <a class="nav-item nav-link ib-nav-link icon-link" href="#"><i class="fas fa-search"></i></a>

                        <a class="nav-item nav-link ib-nav-link icon-link basket-open" id="side_cart_open" href="#"><i
                                class="fas fa-shopping-cart"></i></a>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<div id="general_page">
    <!--Start-->
    <div class="general-page-options start-page" id="start_page">
        <h2 class="title-featured-products">Let's get started!</h2>

        <div class="boxes-categories gender">
            <div class="box-categories gender-box box" data-choice="male">
                <i class="fas fa-mars fa-5x"></i>
            </div>
            <div class="box-categories gender-box box" data-choice="female">
                <i class="fas fa-venus fa-5x"></i>
            </div>
        </div>
    </div>

    <!--Choose brand-->
    <div class="general-page-options brand-page hidden" id="brand_page">
        <h2 class="title-featured-products">Choose your favourite brand</h2>

        <div class="boxes-categories" id="boxes_categories">
            <div class="box-categories box" data-choice="logo">
                <img src="img/brand-logo_1.png" alt="">
            </div>
            <div class="box-categories box" data-choice="blueline">
                <img src="img/brand-logo_3.png" alt="">
            </div>
            <div class="box-categories box" data-choice="racer">
                <img src="img/brand-logo_4.png" alt="">
            </div>
        </div>
    </div>

    <!--Choose price-->
    <div class="general-page-options price-page hidden" id="price_page">
        <h2 class="title-featured-products">Choose your best price</h2>

        <div class="boxes-categories">
            <div class="box-categories box" data-choice="100">
                <p class="title-news">$ 100</p>
            </div>
            <div class="box-categories box" data-choice="200">
                <p class="title-news">$ 200</p>
            </div>
            <div class="box-categories box" data-choice="300">
                <p class="title-news">$ 300</p>
            </div>
        </div>
    </div>

    <!--Result-->
    <div class="result-page hidden" id="result_page">

        <div class="col-md-4 offset-1 left-column">
            <img src="img/female.png" id="result_image" alt="">
        </div>
        <div class="col-md-5 right-column p-0">
            <div class="choice-section">

                <div class="col-6 text-choice ib-border-right p-4">Our offer:
                    <div class="title-news offer" id="result_product"></div>
                </div>

                <div class="col-6 text-choice p-4">Brand:
                    <div class="title-news brand" id="result_brand"></div>
                </div>

            </div>

            <div class="total-section p-4">
                <p class="text-choice mb-0">Total: <span class="title-news" id="result_price"></span></p>
                <button type="button" class="btn btn-danger ib-btn">Shop Now</button>
            </div>
        </div>

    </div>

</div>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-11 col-lg-4 detail-block_1">
                <h3 class="title-footer">About company</h3>
                <p class="text-footer">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae,
                    sit?</p>
                <ul class="list-unstyled address-footer">
                    <li><i class="fas fa-map-marker-alt fa-sm icons-footer"></i> 0123 Main Road, Your City, NY
                        123456
                    </li>
                    <li><i class="fas fa-phone fa-sm icons-footer"></i> (000) 2345 - 6789</li>
                    <li><i class="fas fa-envelope fa-sm icons-footer"></i> info@psd.in.ua</li>
                </ul>
            </div>
            <div class="col-5 col-lg p-lg-0">
                <div class="list-group">
                    <h3 class="title-footer">My Account</h3>
                    <a href="#" class="link-footer ib-link-footer">My Account</a>
                    <a href="#" class="link-footer ib-link-footer">Contact</a>
                    <a href="#" class="link-footer ib-link-footer">Frequently Questions</a>
                    <a href="#" class="link-footer ib-link-footer">Portfolio</a>
                    <a href="#" class="link-footer ib-link-footer">Checkout</a>
                </div>
            </div>
            <div class="col-5 col-lg">
                <div class="list-group">
                    <h3 class="title-footer">Product</h3>
                    <a href="#" class="link-footer ib-link-footer">About us</a>
                    <a href="#" class="link-footer ib-link-footer">Blog</a>
                    <a href="#" class="link-footer ib-link-footer">Contact</a>
                    <a href="#" class="link-footer ib-link-footer">Services</a>
                    <a href="#" class="link-footer ib-link-footer">Portfolio</a>
                </div>
            </div>
            <div class="col-10 col-lg-3 p-lg-0">
                <h3 class="title-footer">Follow us:</h3>
                <div class="row">
                    <div class="col-6">
                        <div class="list-group">
                            <a href="#" class="link-footer ib-follow_us"><i
                                    class="fab fa-google-plus-g fa-lg"></i><span class="pl-3">Google+</span></a>
                            <a href="#" class="link-footer ib-follow_us"><i
                                    class="fab fa-pinterest-p fa-lg"><span class="pl-3">Pinterest</span></i></a>
                            <a href="#" class="link-footer ib-follow_us"><i class="fab fa-vimeo-v fa-lg"></i><span
                                    class="pl-3">Vimeo</span></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="list-group">
                            <a href="#" class="link-footer ib-follow_us"><i class="fab fa-facebook-f fa-lg"></i><span
                                    class="pl-3">Facebook</span></a>
                            <a href="#" class="link-footer ib-follow_us"><i class="fab fa-twitter fa-lg"></i><span
                                    class="pl-3">Twitter</span></a>
                            <a href="#" class="link-footer ib-follow_us"><i class="fas fa-rss fa-lg"></i><span
                                    class="pl-3">RSS</span></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h3 class="title-footer payment">Payment Methods</h3>
                        <span><i class="fab fa-cc-mastercard fa-lg icon-payment"></i></span>
                        <span><i class="fab fa-cc-discover fa-lg icon-payment"></i></span>
                        <span><i class="fab fa-cc-amex fa-lg icon-payment"></i></span>
                        <span><i class="fab fa-cc-visa fa-lg icon-payment"></i></span>
                        <span><i class="fab fa-cc-stripe fa-lg icon-payment"></i></span>
                        <span><i class="fab fa-cc-diners-club fa-lg icon-payment"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="list-group list-group-horizontal justify-content-center flex-wrap">
            <a href="#" class="nav-icons-footer active">Sitemap</a>
            <a href="#" class="nav-icons-footer">Searchs</a>
            <a href="#" class="nav-icons-footer">Searchs</a>
            <a href="#" class="nav-icons-footer">Advance</a>
            <a href="#" class="nav-icons-footer">Searchs</a>
            <a href="#" class="nav-icons-footer">Contact Us</a>
        </div>

        <p class="bottom_text-footer mb-0"><span class="circle">C</span> 2022 PSD.IN.UA | All Rights Reserved.</p>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<script src="js/owl_carousel/owl.carousel.min.js"></script>
<script src="js/common.js"></script>

</body>
</html>
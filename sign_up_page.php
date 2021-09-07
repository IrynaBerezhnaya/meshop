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

    <title>Single Product page</title>

</head>
<body class="main-bg">

<div class="ib-nav-bgc">

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
                            class="nav-email">Email: free@psd.in.ua</span></p>
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
                    <a class="nav-item nav-link ib-nav-link active" href="#">Home</a>
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

<div class="container sign_up-block">
    <div class="row m-0">
        <div class="col-xl-6 p-md-3 p-lg-5">
            <h4 class="text-uppercase mb-5 title-single_product">Sign in</h4>
            <form>
                <div class="form-row">
                    <div class="col-md-8 col-xl mb-4">
                        <input type="email" class="form-control" placeholder="Your Email" aria-describedby="emailHelp"
                               required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-8 col-xl mb-4">
                        <input type="password" class="form-control" placeholder="Your password" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-sm-6 col-md-3 col-xl-6">
                        <button class="btn btn-danger ib-btn" type="submit">Sign In</button>
                    </div>
                    <div class="col-sm-6 col-md-5 col-xl-6 pt-3 pt-sm-0 d-flex align-items-center justify-content-sm-end">
                        <a href="#" class="link-sign_up">Forgot your Password <i
                                class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-xl-6 p-md-3 p-lg-5 ib-border-left">
            <h4 class="text-uppercase mb-5 title-single_product">Register</h4>

            <form>
                <div class="form-row">
                    <div class="col-md-8 col-xl mb-4">
                        <input type="email" class="form-control" placeholder="Your Email" aria-describedby="emailHelp"
                               required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-8 col-xl mb-4">
                        <input type="password" class="form-control" placeholder="Your password" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-8 col-xl mb-4">
                        <input type="password" class="form-control" placeholder="Confirm password" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-8 col-xl mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                            <label class="custom-control-label ib-card-text" for="customControlValidation1">Sign up for exclusive
                                updates, discounts, new arrivals, contests, and more!</label>
                            <div class="invalid-feedback">Example invalid feedback text</div>
                        </div>
                    </div>
                </div>


                <div class="form-row">
                    <div class="col-sm-6 col-md-4 col-xl-6">
                        <button class="btn btn-danger ib-btn" type="submit">Create Account</button>
                    </div>
                    <div class="col-sm-6 col-md-4 col-xl-6 pt-3 pt-sm-0 text-sm-right">
                        <p class="ib-card-text">By clicking ‘Create Account’, you
                            agree to our <br> <a href="#" class="link-sign_up">Privacy Policy <i
                                    class="fas fa-long-arrow-alt-right"></i></a></p>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<footer class="footer">
    <div class="container ">
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
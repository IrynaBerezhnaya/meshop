<?php
session_start();
include( 'functions.php' );

$page = ( isset( $_GET['page'] ) && is_numeric( $_GET['page'] ) ) ? $_GET['page'] : 1;

$prev        = $page - 1;
$next        = $page + 1;
$total_pages = get_users_total_pages();

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="css/owl_carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl_carousel/owl.theme.default.min.css">

    <link rel="stylesheet" href="libs/fontawesome/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/main.css">

    <title>Users</title>

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

        <form method="post" id="add_user_form" action="add_user.php" enctype="multipart/form-data">
            <div class="form-group row justify-content-md-center mb-3">
                <label class="col-md-2 col-form-label"> Name </label>
                <div class="col-md-6 col-xl-4 ">
                    <input name="user_name" id="user_name" type="text" class="form-control" required
                           value="">
                </div>
            </div>

            <div class="form-group row justify-content-md-center mb-3">
                <label class="col-md-2 col-form-label"> Last Name </label>
                <div class="col-md-6 col-xl-4 ">
                    <input name="user_last_name" id="user_last_name" type="text" class="form-control" required
                           value="">
                </div>
            </div>

            <div class="form-group row justify-content-md-center mb-3">
                <label class="col-md-2 col-form-label"> Position </label>
                <div class="col-md-6 col-xl-4 ">
                    <select class="form-select" aria-label="Position" id="user_position" name="user_position">
                        <option disabled selected value> -- select an option --</option>
                        <option value="programmer">Programmer</option>
                        <option value="manager">Manager</option>
                        <option value="tester">Tester</option>
                    </select>
                </div>
            </div>


            <div class="form-group row justify-content-md-center">
                <label class="col-md-2 col-form-label"></label>
                <div class="col-md-6 col-xl-4 ">

                    <input name="submit" type="submit" class="btn btn-primary form-control ib-add-user-button"
                           value="Submit" id="add_user_submit">

                    <input name="product_id" type="hidden" value="">

                </div>
            </div>
        </form>

    </div>

    <div id="display_users_table"><?php ib_display_users_table(); ?></div>
    <span id="user_message"></span>
</div>

<div class="container mt-5">

    <nav aria-label="Page navigation example mt-5">
        <ul class="pagination justify-content-center">
            <li class="page-item <?php if ( $page <= 1 ) {
				echo 'disabled';
			} ?>">


				<?php
				$params           = array_merge( $_GET, array( 'page' => '' ) );
				$new_query_string = http_build_query( $params );
				?>

                <a class="page-link"
                   href="<?php if ( $page <= 1 ) {
					   echo '#';
				   } else {
					   echo "?" . $new_query_string . $prev;
				   } ?>">Previous</a>
            </li>

			<?php for ( $i = 1; $i <= $total_pages; $i ++ ): ?>
                <li class="page-item <?php if ( $page == $i ) {
					echo 'active';
				} ?>">
                    <a class="page-link" href="users.php?<?= $new_query_string ?><?= $i; ?>"> <?= $i; ?> </a>
                </li>
			<?php endfor; ?>

            <li class="page-item <?php if ( $page >= $total_pages ) {
				echo 'disabled';
			} ?>">
                <a class="page-link"
                   href="<?php if ( $page >= $total_pages ) {
					   echo '#';
				   } else {
					   echo "?" . $new_query_string . $next;
				   } ?>">Next</a>
            </li>
        </ul>
    </nav>
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


<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

<script src="js/owl_carousel/owl.carousel.min.js"></script>
<script src="js/common.js"></script>

</body>
</html>

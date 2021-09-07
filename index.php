<?php
session_start();
include( 'functions.php' );
$connection = connect_to_db();

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">


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
        <span class="side-cart-close" id="side_cart_close"><i class="fal fa-times"></i></span>
    </div>
    <div class="basket-table">
        <div class="ib-nav-link text_cart__js m-3">Your cart is empty.</div>

        <div class="basket-table-scroller side_cart_content__js">
            <div class="side-cart-item side_cart_item__js place_holder__js hidden" data-name="" data-brand="">
                <div class="row m-0">
                    <div class="col-4 col-sm-3 text-center pb-3" id="img_cart"><img src="img/image-placeholder.png"
                                                                                    width="100" height="100" alt="">
                    </div>
                    <div class="col-4 col-sm-7 p-0">
                        <p class="description-carousel mt-0 product_name__js">Product name</p>
                        <p class="description-cart product_brand__js">Product brand</p>
                        <p class="description-cart">Price: <span class="product_price__js">$0</span></p>
                    </div>
                    <div class="col-4 col-sm-2 d-flex justify-content-around justify-content-sm-between align-items-center">
                        <div class="quantity d-flex flex-column">
                            <button type="button" class="btn btn-secondary btn-sm plus__js">+</button>
                            <input type="text" class="quantity-select" readonly value="1" min="0" max="10" step="1"/>
                            <button type="button" class="btn btn-secondary btn-sm minus__js">-</button>
                        </div>
                        <span class="side-cart-item-close remove_side_cart_item__js"><i class="fal fa-times"></i></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="side-cart-footer subtitle-news">
            <div class="side_cart_footer__js hidden">
                <div class="row justify-content-between pb-1 pb-md-3 container-total">
                    <div class="text-uppercase">
                        <h6>Subtotal</h6>
                        <h6>Shipping</h6>
                        <h6>Total</h6>
                    </div>
                    <div class="pl-0">
                        <h6>$ <span id="subtotal__js"></span></h6>
                        <h6><span id="shipping__js"></span></h6>
                        <h6>$ <span id="total__js"></span></h6>
                    </div>
                </div>

                <div class="row d-flex justify-content-center">
                    <div class="col-6 col-sm-5 d-flex flex-row-reverse">
                        <button type="button" class="btn btn-outline-dark w-100">Cart</button>
                    </div>
                    <div class="col-6 col-sm-5">
                        <button type="button" class="btn btn-outline-dark w-100">Checkout</button>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-2 mt-md-3 ">

                <div class="col-6 col-sm-5 side-cart-links d-flex continue flex_row_reverse__js">
                    <a href="" class="link-cart text-uppercase" id="link_cart">Continue shopping</a>
                </div>
                <div class="col-6 col-sm-5 side-cart-links side_cart_footer__js hidden">
                    <a href="#" class="link-cart text-uppercase clear_cart__js">Clear Cart</a>
                </div>

            </div>
        </div>
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
                    <a class="nav-link ib-link active" href="">EN</a>
                    <a class="nav-link ib-link" href="">USD</a>
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

<div class="first-section">
    <div class="container card-img-overlay ib-text-center text-center">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-9 col-lg-7 text-big-title">FASHION</div>
            <div class="w-100"></div>
            <div class="col-12 col-sm-8 col-md-9 col-lg-7 text-big-title text-big-title_2">CARNIVAL</div>
            <div class="w-100"></div>
            <div class="col-12 col-sm-8 col-md-10 col-lg-7 text-big-title_year">2022</div>
            <div class="w-100"></div>
            <div class="col-12 col-sm-8 col-md-9 col-lg-7 text-bt">
                <p class="pb-5 mb-0">Lorem dolor sit amet, adipisicing elit. Consequatur, eius fuga illo itaque
                    minus
                    mollitia natus repellendus rerum sapiente sed similique soluta tenetur veniam ptate.</p>
                <button type="button" class="btn btn-danger ib-btn">Shop Now</button>
            </div>
        </div>
    </div>
</div>

<div class="container some-information">
    <div class="row">
        <div class="col-4 text-center">
            <section class="circle-icon"><img src="img/1.png" alt=""></section>
            <h3 class="title-info">Free Shipping</h3>
            <p class="ib-text-info">With &euro;50 or more orders</p>
        </div>
        <div class="col-4 text-center">
            <section class="circle-icon"><img src="img/2.png" alt=""></section>
            <h3 class="title-info">Free Refund</h3>
            <p class="ib-text-info">100% Refund Withing 3 days</p>
        </div>
        <div class="col-4 text-center">
            <section class="circle-icon"><img src="img/3.png" alt=""></section>
            <h3 class="title-info">Support 24.7</h3>
            <p class="ib-text-info">Call us anything you want</p>
        </div>
    </div>

    <div class="ib-banner">
        <div class="banners banner-01">
            <div class="card-img-overlay p-xl-5">
                <h2 class="banner-title">Fashion</h2>
                <h2 class="banner-title banner-title_2">Carnival</h2>
                <p class="banner-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button type="button" class="btn btn-danger ib-btn">Shop Now</button>
            </div>
        </div>
        <div class="banners banner-02">
            <div class="card-img-overlay p-xl-5">
                <h2 class="banner-title">Fashion</h2>
                <h2 class="banner-title banner-title_2">Carnival</h2>
                <p class="banner-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <button type="button" class="btn btn-danger ib-btn">Shop Now</button>
            </div>
        </div>
    </div>

    <div class="block-featured-products text-center">
        <h2 class="title-featured-products mb-0">Featured products</h2>
        <p class="text-featured-products mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>

    <div id="categories-carousel" class="d-flex flex-row flex-wrap">

		<?php
		$get_products = "SELECT * FROM products ORDER BY id DESC";  //сортировать записи по убыванию
		$run_products = mysqli_query( $connection, $get_products );

		while ( $row_products = mysqli_fetch_array( $run_products ) ) {
			$pro_id    = $row_products['id'];
			$pro_name  = $row_products['name'];
			$pro_brand = $row_products['brand'];

			$pro_image = $row_products['image'];
			$pro_image = empty( $pro_image ) ? get_image_placeholder() : $pro_image;

			$pro_description = $row_products['description'];
			$pro_price       = $row_products['price'];
			$pro_sale_price  = $row_products['sale_price'];

			echo '
	        
	        <div class="col-md-4 text-center section-carousel product_item__js">
            <a href="single_product_page.php">          
                <img data-src="img/' . $pro_image . '"  alt="" width="250" height="300" class="lazy">
                <img src="img/' . $pro_image . '" class="hidden product_small_image__js" alt="">
            </a>
            <p class="description-carousel selected_product__js">' . $pro_name . '</p>
            <p class="name-product selected_brand__js">' . $pro_brand . '</p>
            <div class="stars"> 
                <i class="fal fa-star fa-sm"></i>
                <i class="fal fa-star fa-sm"></i>
                <i class="fal fa-star fa-sm"></i>
                <i class="fal fa-star fa-sm"></i>
                <i class="fal fa-star fa-sm"></i>
            </div>
            <p class="ib-price"><s>$' . $pro_price . '</s><span class="new-price selected_price__js" data-price="' . $pro_sale_price . '">$' . $pro_sale_price . '</span>
            </p>
            <button type="button" class="btn btn-danger btn-single_product ib-btn add_to_cart__js">
                <i class="fas fa-shopping-cart icon-btn"></i>Add to cart
            </button>
        </div>
	           
	        ';


		}
		?>

    </div>
</div>

<div class="container-fluid p-sm-0 bg-news">
    <div class="container block-news">
        <h2 class="title-news mb-0">Latest News</h2>
        <p class="subtitle-news mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit,
            voluptatem?</p>

        <div class="row row-cols-1 row-cols-lg-3" id="last_news_items">
            <div class="col">
                <div class="card-deck ib-card-deck last-news-item last_news_item__js">
                    <div class="card card-news last-news-item-front last_news_item_front__js">
                        <img src="img/block-news-1.png" class="card-img-top" alt="">
                        <div class="card-body text-left ib-card-body">
                            <h5 class="ib-card-title">Porem ipsum dolor sit amet</h5>
                            <p class="ib-card-subtitle">Lorem ipsum dolor sit amet.</p>
                            <p class="ib-card-text">This is a longer card with supporting text below as a natural
                                lead-in to
                                additional content. This content is.</p>
                            <div class="row justify-content-between m-0">
                                <button type="button" class="btn btn-danger ib-btn-card">Read More</button>
                                <div class="btn-plus btn_plus__js"><i class="fal fa-plus"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-news ib-card-body last-news-item-back last_news_item_back__js">
                        <form class="page-form col-md-9 col-lg-12">
                            <div class="form-group">
                                <label for="validationCustom01">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" value="" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>

                            <button type="button" class="btn btn-danger ib-btn w-100 page-submit">Submit</button>

                            <div class="btn-close btn_close__js"><i class="fal fa-times"></i></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-deck ib-card-deck last-news-item last_news_item__js">
                    <div class="card card-news last-news-item-front last_news_item_front__js">
                        <img src="img/block-news-2.png" class="card-img-top" alt="">
                        <div class="card-body text-left ib-card-body">
                            <h5 class="ib-card-title">Porem ipsum dolor sit amet</h5>
                            <p class="ib-card-subtitle">Lorem ipsum dolor sit amet.</p>
                            <p class="ib-card-text">This is a longer card with supporting text below as a natural
                                lead-in to
                                additional content. This content is.</p>
                            <div class="row justify-content-between m-0">
                                <button type="button" class="btn btn-danger ib-btn-card">Read More</button>
                                <div class="btn-plus btn_plus__js"><i class="fal fa-plus"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-news ib-card-body last-news-item-back last_news_item_back__js">
                        <form class="page-form col-md-9 col-lg-12">
                            <div class="form-group">
                                <label for="validationCustom02">First name</label>
                                <input type="text" class="form-control" id="validationCustom02" value="" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail2"
                                       aria-describedby="emailHelp2">
                                <small id="emailHelp2" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                <label class="form-check-label" for="exampleCheck2">Check me out</label>
                            </div>

                            <button type="button" class="btn btn-danger ib-btn w-100 page-submit">Submit</button>

                            <div class="btn-close btn_close__js"><i class="fal fa-times"></i></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-deck ib-card-deck last-news-item last_news_item__js">
                    <div class="card card-news last-news-item-front last_news_item_front__js">
                        <img src="img/block-news-3.png" class="card-img-top" alt="">
                        <div class="card-body text-left ib-card-body">
                            <h5 class="ib-card-title">Porem ipsum dolor sit amet</h5>
                            <p class="ib-card-subtitle">Lorem ipsum dolor sit amet.</p>
                            <p class="ib-card-text">This is a longer card with supporting text below as a natural
                                lead-in to
                                additional content. This content is.</p>
                            <div class="row justify-content-between m-0">
                                <button type="button" class="btn btn-danger ib-btn-card">Read More</button>
                                <div class="btn-plus btn_plus__js"><i class="fal fa-plus"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-news ib-card-body last-news-item-back last_news_item_back__js">
                        <form class="page-form col-md-9 col-lg-12">
                            <div class="form-group">
                                <label for="validationCustom03">First name</label>
                                <input type="text" class="form-control" id="validationCustom03" value="" required>
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail3">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail3"
                                       aria-describedby="emailHelp3">
                                <small id="emailHelp3" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword3">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword3">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                <label class="form-check-label" for="exampleCheck3">Check me out</label>
                            </div>

                            <button type="button" class="btn btn-danger ib-btn w-100 page-submit">Submit</button>

                            <div class="btn-close btn_close__js"><i class="fal fa-times"></i></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-lg-3 mt-5">
            <div class="col">
                <div class="card-deck ib-card-deck">
                    <div class="card card-news">
                        <img src="img/block-news-3.png" class="card-img-top" alt="">
                        <div class="card-body text-left ib-card-body">
                            <h5 class="ib-card-title">Porem ipsum dolor sit amet</h5>
                            <p class="ib-card-subtitle">Lorem ipsum dolor sit amet.</p>
                            <p class="ib-card-text">This is a longer card with supporting text below as a natural
                                lead-in to
                                additional content. This content is.</p>
                            <div class="row">
                                <div class="col-8 col-sm-10 col-lg-8">
                                    <button type="button" class="btn btn-danger ib-btn-card">Read More</button>
                                </div>
                                <div class="col-3 col-sm-2 col-lg-4 d-flex align-items-end">
                                    <span class="icon-card"><i class="fas fa-heart"></i></span>
                                    <span class="br-icon"></span>
                                    <span class="icon-card"><i class="fas fa-comment"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="news-overlay">
                            <span class="icon-overlay hover-top-element"><i class="fal fa-image fa-lg"></i></span>
                            <ul class="text-overlay-element hover-top-element">
                                <li>Sweatshirts</li>
                            </ul>
                            <p class="text-uppercase hover-top-element title-overlay-element">Why is it cool?</p>
                            <div class="ib-line"></div>
                            <p class="small-text hover-bottom-element">High-quality and reliable clothes</p>
                            <span class="icon-plus"><i class="fal fa-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-deck ib-card-deck">
                    <div class="card card-news">
                        <img src="img/block-news-1.png" class="card-img-top" alt="">
                        <div class="card-body text-left ib-card-body">
                            <h5 class="ib-card-title">Porem ipsum dolor sit amet</h5>
                            <p class="ib-card-subtitle">Lorem ipsum dolor sit amet.</p>
                            <p class="ib-card-text">This is a longer card with supporting text below as a natural
                                lead-in to
                                additional content. This content is.</p>
                            <div class="row">
                                <div class="col-8 col-sm-10 col-lg-8">
                                    <button type="button" class="btn btn-danger ib-btn-card">Read More</button>
                                </div>
                                <div class="col-3 col-sm-2 col-lg-4 d-flex align-items-end">
                                    <span class="icon-card"><i class="fas fa-heart"></i></span>
                                    <span class="br-icon"></span>
                                    <span class="icon-card"><i class="fas fa-comment"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="news-overlay">
                            <span class="icon-overlay hover-top-element"><i class="fal fa-image fa-lg"></i></span>
                            <ul class="text-overlay-element hover-top-element">
                                <li>Sweatshirts</li>
                            </ul>
                            <p class="text-uppercase hover-top-element title-overlay-element">Why is it cool?</p>
                            <div class="ib-line"></div>
                            <p class="small-text hover-bottom-element">High-quality and reliable clothes</p>
                            <span class="icon-plus"><i class="fal fa-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-deck ib-card-deck">
                    <div class="card card-news">
                        <img src="img/block-news-2.png" class="card-img-top" alt="">
                        <div class="card-body text-left ib-card-body">
                            <h5 class="ib-card-title">Porem ipsum dolor sit amet</h5>
                            <p class="ib-card-subtitle">Lorem ipsum dolor sit amet.</p>
                            <p class="ib-card-text">This is a longer card with supporting text below as a natural
                                lead-in to
                                additional content. This content is.</p>
                            <div class="row">
                                <div class="col-8 col-sm-10 col-lg-8">
                                    <button type="button" class="btn btn-danger ib-btn-card">Read More</button>
                                </div>
                                <div class="col-3 col-sm-2 col-lg-4 d-flex align-items-end">
                                    <span class="icon-card"><i class="fas fa-heart"></i></span>
                                    <span class="br-icon"></span>
                                    <span class="icon-card"><i class="fas fa-comment"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="news-overlay">
                            <span class="icon-overlay hover-top-element"><i class="fal fa-image fa-lg"></i></span>
                            <ul class="text-overlay-element hover-top-element">
                                <li>Sweatshirts</li>
                            </ul>
                            <p class="text-uppercase hover-top-element title-overlay-element">Why is it cool?</p>
                            <div class="ib-line"></div>
                            <p class="small-text hover-bottom-element">High-quality and reliable clothes</p>
                            <span class="icon-plus"><i class="fal fa-plus"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container product-section">
    <div class="row m-0 ib-padding">
        <div class="col-11 col-sm-7 col-xl block-details mb-4 mb-xl-0 p-0">
            <h2 class="title-product-section">Our Brands</h2>
            <div class="row m-0">
                <div class="col-4 ib-products_img">
                    <img src="img/product-1.png" class="" alt="">
                </div>
                <div class="col-7 text-left ib-products_description">
                    <p class="subtitle_brand mb-0">Orange T-shirt</p>
                    <p class="name-brand mb-0">Nike</p>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm"></i></span>
                    <p class="ib-price ib-price-products m-0"><s>$74.00</s><span
                                class="new-price new-price-products">$69.00</span></p>
                </div>
                <div class="ib-border_b"></div>
            </div>
            <div class="row m-0">
                <div class="col-4 ib-products_img">
                    <img src="img/product-2.png" class="" alt="">
                </div>
                <div class="col-7 text-left ib-products_description">
                    <p class="subtitle_brand mb-0">Orange T-shirt</p>
                    <p class="name-brand mb-0">Nike</p>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm"></i></span>
                    <p class="ib-price ib-price-products m-0"><s>$74.00</s><span
                                class="new-price new-price-products">$69.00</span></p>
                </div>
                <div class="ib-border_b"></div>
            </div>
            <div class="row m-0">
                <div class="col-4 ib-products_img">
                    <img src="img/product-3.png" class="" alt="">
                </div>
                <div class="col-7 text-left ib-products_description">
                    <p class="subtitle_brand mb-0">Orange T-shirt</p>
                    <p class="name-brand mb-0">Nike</p>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm"></i></span>
                    <p class="ib-price ib-price-products m-0"><s>$74.00</s><span
                                class="new-price new-price-products">$69.00</span></p>
                </div>
                <div class="ib-border_b"></div>
            </div>
            <div class="row m-0">
                <div class="col-4 ib-products_img">
                    <img src="img/product-4.png" class="" alt="">
                </div>
                <div class="col-7 text-left ib-products_description">
                    <p class="subtitle_brand mb-0">Orange T-shirt</p>
                    <p class="name-brand mb-0">Nike</p>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm"></i></span>
                    <p class="ib-price ib-price-products m-0"><s>$74.00</s><span
                                class="new-price new-price-products">$69.00</span></p>
                </div>
            </div>
        </div>
        <div class="col-11 col-sm-7 col-xl center-banner p-0">
            <div class="text-center text-uppercase bg-center-banner">
                <h2 class="ib-fs_1">Summer</h2>
                <h2 class="ib-fs_2">Sale</h2>
                <h2 class="ib-fs_3">Discount</h2>
                <h2 class="ib-fs_4">Upto</h2>
                <div class="ib-bb"></div>
                <h2 class="ib-fs_5">80%</h2>
            </div>
        </div>
        <div class="col-11 col-sm-7 col-xl block-details p-0">
            <h2 class="title-product-section">Our Brands</h2>
            <div class="row m-0">
                <div class="col-4 ib-products_img">
                    <img src="img/product-1.png" class="" alt="">
                </div>
                <div class="col-7 text-left ib-products_description">
                    <p class="subtitle_brand mb-0">Orange T-shirt</p>
                    <p class="name-brand mb-0">Nike</p>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm"></i></span>
                    <p class="ib-price ib-price-products m-0"><s>$74.00</s><span
                                class="new-price new-price-products">$69.00</span></p>
                </div>
                <div class="ib-border_b"></div>
            </div>
            <div class="row m-0">
                <div class="col-4 ib-products_img">
                    <img src="img/product-2.png" class="" alt="">
                </div>
                <div class="col-7 text-left ib-products_description">
                    <p class="subtitle_brand mb-0">Orange T-shirt</p>
                    <p class="name-brand mb-0">Nike</p>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm"></i></span>
                    <p class="ib-price ib-price-products m-0"><s>$74.00</s><span
                                class="new-price new-price-products">$69.00</span></p>
                </div>
                <div class="ib-border_b"></div>
            </div>
            <div class="row m-0">
                <div class="col-4 ib-products_img">
                    <img src="img/product-3.png" class="" alt="">
                </div>
                <div class="col-7 text-left ib-products_description">
                    <p class="subtitle_brand mb-0">Orange T-shirt</p>
                    <p class="name-brand mb-0">Nike</p>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm"></i></span>
                    <p class="ib-price ib-price-products m-0"><s>$74.00</s><span
                                class="new-price new-price-products">$69.00</span></p>
                </div>
                <div class="ib-border_b"></div>
            </div>
            <div class="row m-0">
                <div class="col-4 ib-products_img">
                    <img src="img/product-4.png" class="" alt="">
                </div>
                <div class="col-7 text-left ib-products_description">
                    <p class="subtitle_brand mb-0">Orange T-shirt</p>
                    <p class="name-brand mb-0">Nike</p>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm checked"></i></span>
                    <span><i class="fal fa-star fa-sm"></i></span>
                    <p class="ib-price ib-price-products m-0"><s>$74.00</s><span
                                class="new-price new-price-products">$69.00</span></p>
                </div>
            </div>
        </div>
        <div class="ib-border_b pbb"></div>
    </div>
    <div class="block-subscribe">
        <h2 class="title-subscribe mb-0">Never miss any fashion trending</h2>
        <p class="subtitle-subscribe mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit?</p>

        <form action="">
            <input type="email" class="form-control ib-email">
            <button type="submit" class="btn btn-subscribe mb-2">Read More</button>
        </form>
    </div>
</div>

<div class="brands-logo">
    <div class="container">
        <div class="detail-brands-logo">
            <div class="box">
                <img src="img/brand-logo_1.png" alt="">
            </div>
            <div class="box">
                <img src="img/brand-logo_2.png" alt="">
            </div>
            <div class="box">
                <img src="img/brand-logo_3.png" alt="">
            </div>
            <div class="box">
                <img src="img/brand-logo_4.png" alt="">
            </div>
            <div class="box">
                <img src="img/brand-logo_5.png" alt="">
            </div>
            <div class="box">
                <img src="img/brand-logo_3.png" alt="">
            </div>
            <div class="box">
                <img src="img/brand-logo_4.png" alt="">
            </div>
            <div class="box">
                <img src="img/brand-logo_2.png" alt="">
            </div>
            <div class="box">
                <img src="img/brand-logo_1.png" alt="">
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
                    <a href="" class="link-footer ib-link-footer">My Account</a>
                    <a href="" class="link-footer ib-link-footer">Contact</a>
                    <a href="" class="link-footer ib-link-footer">Frequently Questions</a>
                    <a href="" class="link-footer ib-link-footer">Portfolio</a>
                    <a href="" class="link-footer ib-link-footer">Checkout</a>
                </div>
            </div>
            <div class="col-5 col-lg">
                <div class="list-group">
                    <h3 class="title-footer">Product</h3>
                    <a href="" class="link-footer ib-link-footer">About us</a>
                    <a href="" class="link-footer ib-link-footer">Blog</a>
                    <a href="" class="link-footer ib-link-footer">Contact</a>
                    <a href="" class="link-footer ib-link-footer">Services</a>
                    <a href="" class="link-footer ib-link-footer">Portfolio</a>
                </div>
            </div>
            <div class="col-10 col-lg-3 p-lg-0">
                <h3 class="title-footer">Follow us:</h3>
                <div class="row">
                    <div class="col-6">
                        <div class="list-group">
                            <a href="" class="link-footer ib-follow_us"><i
                                        class="fab fa-google-plus-g fa-lg"></i><span class="pl-3">Google+</span></a>
                            <a href="" class="link-footer ib-follow_us"><i
                                        class="fab fa-pinterest-p fa-lg"><span class="pl-3">Pinterest</span></i></a>
                            <a href="" class="link-footer ib-follow_us"><i class="fab fa-vimeo-v fa-lg"></i><span
                                        class="pl-3">Vimeo</span></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="list-group">
                            <a href="" class="link-footer ib-follow_us"><i class="fab fa-facebook-f fa-lg"></i><span
                                        class="pl-3">Facebook</span></a>
                            <a href="" class="link-footer ib-follow_us"><i class="fab fa-twitter fa-lg"></i><span
                                        class="pl-3">Twitter</span></a>
                            <a href="" class="link-footer ib-follow_us"><i class="fas fa-rss fa-lg"></i><span
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
            <a href="" class="nav-icons-footer active">Sitemap</a>
            <a href="" class="nav-icons-footer">Searchs</a>
            <a href="" class="nav-icons-footer">Searchs</a>
            <a href="" class="nav-icons-footer">Advance</a>
            <a href="" class="nav-icons-footer">Searchs</a>
            <a href="" class="nav-icons-footer">Contact Us</a>
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
<script src="js/bootstrap/bootstrap.min.js"></script>

<script src="js/owl_carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/jquery_lazy/jquery.lazy.min.js"></script>
<script src="js/common.js"></script>

</body>
</html>


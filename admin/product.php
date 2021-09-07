<?php
session_start();
include( '../functions.php' );
$connection = connect_to_db();

if ( ! isset( $_SESSION['user'] ) ) {
	header( 'Location: /admin/admin_sign_in.php' );
} else {

if ( isset( $_GET['edit_product'] ) ) {
	$edit_id     = $_GET['edit_product'];                    // 84
	$get_product = "SELECT * FROM products WHERE id='$edit_id'";
	$run_edit    = mysqli_query( $connection, $get_product );
	$row_edit    = mysqli_fetch_array( $run_edit );  //Выбирает одну строку из результирующего набора и помещает ее в ассоциативный массив, обычный массив или в оба
	$p_id        = $row_edit['id'];
	$p_name      = $row_edit['name'];
	$p_brand     = $row_edit['brand'];
	$p_image     = $row_edit['image'];
	$p_image     = empty( $p_image ) ? get_image_placeholder() : $p_image;

	$p_descr = $row_edit['description'];

	$p_price      = $row_edit['price'];
	$p_sale_price = $row_edit['sale_price'];
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
          crossorigin="anonymous">

    <link rel="stylesheet" href="../libs/fontawesome/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/croppie.css"/>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="css/admin.css">

    <title>Insert Products</title>

</head>
<body class="main-bg">

<div class="ib-nav-bgc">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand ib-navbar-brand" href="../index.php">MeStore</a>
            <a class="nav-item nav-link ib-nav-link" href="products.php">Admin panel</a>
        </div>
    </nav>
</div>

<div class="row m-0">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body card-body-bgr">
				<?php

				if ( isset( $_GET['status'] ) ) {
					if ( $_GET['edit_product'] && $_GET['status'] === 'success' ) {
						echo '<div class="alert alert-success" role="alert">Product has been successfully updated!</div>';
					} elseif ( $_GET['status'] === 'success' ) {
						echo '<div class="alert alert-success" role="alert">Product has been inserted successfully!</div>';
					}

					if ( $_GET['status'] === 'fail' ) {
						echo '<div class="alert alert-danger" role="alert">Fail...</div>';
					} elseif ( $_GET['status'] === 'error' ) {
						echo '<div class="alert alert-danger" role="alert">The Sale-Price is higher than the current Product Price, please enter the correct prices!</div>';
					}
				}

				$action = 'add_product.php';
				if ( isset( $_GET['edit_product'] ) ) {
					$action = 'edit_product.php';
				}
				?>

                <form method="post" id="insert_form" action="<?php echo $action ?>" enctype="multipart/form-data">
                    <div class="form-group row justify-content-md-center">
                        <label class="col-md-2 col-form-label"> Product Name </label>
                        <div class="col-md-6 col-xl-4 ">
                            <input name="product_name" type="text" class="form-control" required
                                   value="<?php echo $p_name; ?>">
                        </div>
                    </div>

                    <div class="form-group row justify-content-md-center">
                        <label class="col-md-2 col-form-label"> Product Brand </label>
                        <div class="col-md-6 col-xl-4 ">
                            <input name="product_brand" type="text" class="form-control" required
                                   value="<?php echo $p_brand; ?>">
                        </div>
                    </div>

                    <div class="form-group row justify-content-md-center" id="upload_image_section">
                        <label class="col-md-2 col-form-label"> Product Image </label>
                        <div class="col-md-6 col-xl-4  pt-2">

                            <input name="product_edit_img" type="hidden" class="col-12 form-control img-mini mb-3"
                                   id="file-upload">
                            <input name="image_removed" type="hidden" class="form-control" id="image_removed"
                                   value="false">
                            <div class="w-100 d-none d-md-block"></div>

							<?php
							if ( isset( $_GET['edit_product'] ) ) {
								echo '<div class="d-inline-flex"><div class="col pr-3" id="product_img_container"><img width="100" height="120" id="product-img" src="../img/' . $p_image . '" alt="' . $p_name . '"></div>';
								echo '<div class="col-5 flex-column justify-content-around p-0"><a class="nav-link ib-link-edit link_edit__js pl-0" href="#">Edit</a>';
								echo '<a class="nav-link ib-link-remove link_remove__js pl-0" href="#">Remove</a></div></div>';
							} else {
								echo '<input name="product_img" type="file" class="form-control" id="product_img">';
								echo '<div class="d-inline-flex mb-3 add-product_slider add-product_slider__js hidden"></div>';
							}
							?>
                            <div class="w-100 d-none d-md-block"></div>
                            <div class="upload-wrap upload-croppie__js hidden mt-3">
                                <div id="upload-demo" class="align-self-center"></div>
                                <button type="button" id="upload_result"
                                        class="btn btn-light align-self-center ml-3 hidden btn-result__js">
                                    Result
                                </button>
                            </div>

                            <input name="new_product_img_result" id="new_product_img_result" type="hidden"
                                   class="form-control">


                        </div>
                    </div>

                    <div class="form-group row justify-content-md-center">
                        <label class="col-md-2 col-form-label"> Product Description </label>
                        <div class="col-md-6 col-xl-4 ">
                            <textarea name="product_descr" cols="19" rows="6"
                                      class="form-control"><?php echo $p_descr; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group row justify-content-md-center">
                        <label class="col-md-2 col-form-label"> Product Price </label>
                        <div class="col-md-6 col-xl-4 ">
                            <input name="product_price" type="text" class="form-control" required
                                   value="<?php echo $p_price; ?>">
                        </div>
                    </div>

                    <div class="form-group row justify-content-md-center">
                        <label class="col-md-2 col-form-label"> Product Sale-Price </label>
                        <div class="col-md-6 col-xl-4 ">
                            <input name="product_sale_price" type="text" class="form-control" required
                                   value="<?php echo $p_sale_price; ?>">
                        </div>
                    </div>

                    <div class="form-group row justify-content-md-center">
                        <label class="col-md-2 col-form-label"></label>
                        <div class="col-md-6 col-xl-4 ">

                            <input name="submit" type="submit" class="btn btn-primary form-control"
                                   value="Submit" id="submit_insert">

                            <input name="product_id" type="hidden" value="<?php echo $p_id; ?>">

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="container d-flex justify-content-end mt-5 mb-5">
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>

<?php } ?>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<script src="js/croppie.min.js"></script>
<script src="js/admin.js"></script>
</body>
</html>
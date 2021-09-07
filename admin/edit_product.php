<?php
session_start();

include( '../functions.php' );
$connection = connect_to_db();

if ( ! isset( $_SESSION['user'] ) ) {
	header( 'Location: /admin/admin_sign_in.php' );
}

if ( isset( $_POST['submit'] ) ) {
	$product_id         = $_POST['product_id'];
	$product_name       = $_POST['product_name'];
	$product_brand      = $_POST['product_brand'];
	$product_descr      = $_POST['product_descr'];
	$product_price      = $_POST['product_price'];
	$product_sale_price = $_POST['product_sale_price'];

	$image_removed = $_POST['image_removed'];
	$remove_image  = $image_removed == 'true';

	$product_img = $_FILES['product_edit_img']['name'];
	$temp_name   = $_FILES['product_edit_img']['tmp_name'];

	$img = $_POST['new_product_img_result'];

	if ( $product_sale_price >= $product_price ) {
		header( 'Location: /admin/product.php?edit_product=' . $product_id . "&status=error" );
		die();
	}

	if ( ! empty( $img ) ) {
		define( 'UPLOAD_DIR', '../img/' );
		$img = str_replace('data:image/png;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$data = base64_decode($img);
		$file = uniqid() . '.png';
		$success = file_put_contents(UPLOAD_DIR . $file, $data);

		$update_product = "UPDATE products SET name='$product_name', brand='$product_brand', image='$file',
 	description='$product_descr', price='$product_price', sale_price='$product_sale_price' WHERE id='$product_id'";
	} elseif ( $remove_image ) {
		$update_product = "UPDATE products SET name='$product_name', brand='$product_brand', image='$product_img',
 	description='$product_descr', price='$product_price', sale_price='$product_sale_price' WHERE id='$product_id'";
	} else {
		$update_product = "UPDATE products SET name='$product_name', brand='$product_brand',
 	description='$product_descr', price='$product_price', sale_price='$product_sale_price' WHERE id='$product_id'";
	}

	$run_product = mysqli_query( $connection, $update_product );

	if ( $run_product ) {
		$get_info = "&status=success";
	} else {
		$get_info = "&status=fail";
	}

	header( 'Location: /admin/product.php?edit_product=' . $product_id . $get_info );
}


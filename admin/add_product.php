<?php
session_start();

include( '../functions.php' );
$connection = connect_to_db();

if ( ! isset( $_SESSION['user'] ) ) {
	header( 'Location: /admin/admin_sign_in.php' );  //Перенаправление браузера, отправка HTTP-заголовка
}


if ( isset( $_POST['submit'] ) ) {
	$product_name       = $_POST['product_name'];
	$product_brand      = $_POST['product_brand'];
	$product_descr      = $_POST['product_descr'];
	$product_price      = $_POST['product_price'];
	$product_sale_price = $_POST['product_sale_price'];

	$product_img = $_FILES['product_img']['name'];
	$temp_name   = $_FILES['product_img']['tmp_name'];

	$img = $_POST['new_product_img_result'];

	if ( $product_sale_price >= $product_price ) {
		header( 'Location: /admin/product.php' . "?status=error" );
		die();
	}

	if ( ! empty( $img ) ) {
		define( 'UPLOAD_DIR', '../img/' );
		$img = str_replace('data:image/png;base64,', '', $img);
		$img = str_replace(' ', '+', $img);
		$data = base64_decode($img);
		$file = uniqid() . '.png';
		$success = file_put_contents(UPLOAD_DIR . $file, $data);

		$insert_product = "INSERT INTO products (name, brand, image, description, price, sale_price)
    values ('$product_name', '$product_brand', '$file', '$product_descr', '$product_price', '$product_sale_price')";
	} else {
		$insert_product = "INSERT INTO products (name, brand, image, description, price, sale_price)
    values ('$product_name', '$product_brand','$product_img', '$product_descr', '$product_price', '$product_sale_price')";
	}

	$run_product = mysqli_query( $connection, $insert_product );

	if ( $run_product ) {
		$get_info = "?status=success";
	} else {
		$get_info = "?status=fail";
	}

	header( 'Location: /admin/product.php' . $get_info );
}

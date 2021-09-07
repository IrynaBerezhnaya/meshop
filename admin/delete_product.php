<?php
session_start();

include( '../functions.php' );
$connection = connect_to_db();

if ( ! isset( $_SESSION['user'] ) ) {
	header( 'Location: /admin/admin_sign_in.php' );
}

if (isset($_GET['delete_product'])) {
	$delete_id = $_GET['delete_product'];
	$delete_product = "DELETE FROM products WHERE id='$delete_id'";
	$run_delete = mysqli_query($connection, $delete_product);
	if ($run_delete) {
		header( 'Location: /admin/products.php' );
	}
}
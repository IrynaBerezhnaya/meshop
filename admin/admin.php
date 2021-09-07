<?php
if ( ! isset( $_SESSION['user'] ) ) {
	header( 'Location: /admin/admin_sign_in.php' );
}

if (isset($_GET['delete_product'])){
	include ("delete_product.php");
}








<?php
session_start();

$conn = mysqli_connect( 'webdev26.mysql.tools', 'webdev26_meshop', '&-7z3Tcr4C' );
if ( $conn ) {
	echo 'connection successful';
} else {
	echo 'no connection';
}

$db = mysqli_select_db( $conn, 'webdev26_meshop' );

$password_admin = 'admIn9iR';
$hash           = password_hash( $password_admin, PASSWORD_BCRYPT );

$sql   = "UPDATE admintable SET `pass` = '$hash'";
$query = mysqli_query( $conn, $sql );


if ( isset( $_POST['submit'] ) ) {
	$username = $_POST['user'];
	$password = $_POST['pass'];

	if ( password_verify( $password, $hash ) ) {

		$sql   = " select * from admintable where user = '$username'";
		$query = mysqli_query( $conn, $sql );

		$row = mysqli_num_rows( $query );  //определение числа рядов в выборке

		if ( $row == 1 ) {
			echo "login successful";
			$_SESSION['user'] = $username;
			header( 'Location: /admin/admin_page.php' );
		} else {
			echo "login failed";
			header( 'Location: /admin/admin_sign_in.php' );
		}
	}
	echo "login failed";
}
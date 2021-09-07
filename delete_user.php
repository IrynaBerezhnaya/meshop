<?php
include( 'functions.php' );
$host     = "webdev26.mysql.tools";
$user     = "webdev26_meshop";
$password = "&-7z3Tcr4C";
$database = "webdev26_meshop";

$connection = mysqli_connect( $host, $user, $password, $database )
or die( "error " . mysqli_error( $connection ) );


$message = '';


if ( isset( $_POST['user_id'] ) ) {
	$delete_id          = $_POST['user_id'];
	$delete_user_query  = "DELETE FROM users WHERE id='$delete_id'";
	$delete_user_status = mysqli_query( $connection, $delete_user_query );

	if ( $delete_user_status ) {
		$message = '<label class="text-success">User deleted successfully!</label>';
	} else {
		$message = '<label class="text-success">Fail!</label>';
	}

}


$table = '';
ob_start();
ib_display_users_table();
$table = ob_get_clean();

$data = array(
	'message' => $message,
	'table'   => $table
);
echo json_encode( $data );

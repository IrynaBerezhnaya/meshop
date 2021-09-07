<?php
include( 'functions.php' );
$host     = "webdev26.mysql.tools";
$user     = "webdev26_meshop";
$password = "&-7z3Tcr4C";
$database = "webdev26_meshop";

$connection = mysqli_connect( $host, $user, $password, $database )
or die( "error " . mysqli_error( $connection ) );


$message = '';
$status = false;

$user_name      = '';
$user_last_name = '';
$user_position  = '';

if ( empty( $_POST["user_name"] ) ) {
	$message .= '<p class="text-danger">Name is required</p>';
} else {
	$user_name = $_POST["user_name"];
}

if ( empty( $_POST["user_last_name"] ) ) {
	$message .= '<p class="text-danger">Last Name is required</p>';
} else {
	$user_last_name = $_POST["user_last_name"];
}

if ( empty( $_POST["user_position"] ) ) {
	$message .= '<p class="text-danger">Position is required</p>';
} else {
	$user_position = $_POST["user_position"];
}

if ( $message == '' ) {
	$query = "INSERT INTO users (name, last_name, position) VALUES ('$user_name', '$user_last_name', '$user_position')";

	$add_user_status = mysqli_query( $connection, $query );

	if ( $add_user_status ) {
		$message = '<label class="text-success">User Added Successfully!</label>';
		$status = true;
	} else {
		$message = '<label class="text-success">Fail!</label>';

	}
}

$table = '';
ob_start();
ib_display_users_table();
$table = ob_get_clean();

$data = array(
	'status' => $status,
	'message' => $message,
	'table'   => $table
);
echo json_encode( $data );
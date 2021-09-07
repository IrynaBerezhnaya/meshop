<?php
include( 'functions.php' );
$host     = "webdev26.mysql.tools";
$user     = "webdev26_meshop";
$password = "&-7z3Tcr4C";
$database = "webdev26_meshop";

$connection = mysqli_connect( $host, $user, $password, $database )
or die( "error " . mysqli_error( $connection ) );

$message = '';

$user_id      = $_POST["user_id"];
$user_name      = $_POST["user_name"];
$user_last_name = $_POST["user_last_name"];
$user_position  = $_POST["user_position"];


$query = "UPDATE users SET name='$user_name', last_name='$user_last_name', position='$user_position' WHERE id='$user_id'";

$update_user = mysqli_query( $connection, $query );

if ( $update_user ) {
	$message = '<label class="text-success">User Updated Successfully!</label>';

} else {
	$message = '<label class="text-success">Fail!</label>';

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
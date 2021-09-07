<?php
function connect_to_db() {
	$host     = "webdev26.mysql.tools";
	$user     = "webdev26_meshop";
	$password = "&-7z3Tcr4C";
	$database = "webdev26_meshop";

	$connection = mysqli_connect( $host, $user, $password, $database )
	or die( "error " . mysqli_error( $connection ) );

	return $connection;
}

function mb_var_dump( $variable, $text_before = '' ) {
	$text_before = ! empty ( $text_before ) ? $text_before . ': ' : '';

	echo '<pre class="' . $text_before . '">' . $text_before;
	var_dump( $variable );
	echo '</pre>';
}

function get_image_placeholder() {
	return 'placeholder.png';
}

function get_comments_limit() {
	$limit = isset( $_SESSION['records-limit'] ) ? $_SESSION['records-limit'] : 10;

	return $limit;
}

function get_comments_total_pages() {
	$connection = connect_to_db();
	$limit      = get_comments_limit();

	$sql          = "SELECT count(id) AS total  FROM products";
	$query        = mysqli_query( $connection, $sql );
	$result       = mysqli_fetch_assoc( $query );
	$totoal_pages = ceil( $result['total'] / $limit );

	return $totoal_pages;
}

function get_users_total_pages() {
	$connection = connect_to_db();
	$limit      = get_comments_limit();

	$sql          = "SELECT count(id) AS total  FROM users";
	$query        = mysqli_query( $connection, $sql );
	$result       = mysqli_fetch_assoc( $query );
	$totoal_pages = ceil( $result['total'] / $limit );

	return $totoal_pages;
}

function ib_get_formatted_file_name() {
	$timeZone = new \DateTimeZone( 'Europe/Kiev' );
	$time     = new \DateTime();
	$time->setTimezone( $timeZone );
	$formatted_name = $time->format( 'd_m_y_h_i_s.v_a' );

	return $formatted_name;
}

function ib_display_users_table( $page = 0 ) { ?>
    <div class="row">
        <div class="col-lg-12 p-0">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> User:</th>
                                <th> User Name:</th>
                                <th> User Last Name:</th>
                                <th> User Position:</th>
                                <th> User Delete:</th>
                                <th> User Edit:</th>
                            </tr>
                            </thead>

                            <tbody>

							<?php
							$connection      = connect_to_db();
							$limit           = get_comments_limit();
							$page            = $page ? $page : 1;
							$paginationStart = ( $page - 1 ) * $limit;

							$i = 0;
							$i = ( $page - 1 ) * $limit;

							$get_users = "SELECT * FROM users ORDER BY id DESC LIMIT $paginationStart, $limit";

							$run_users = mysqli_query( $connection, $get_users );

							while ( $row_users = mysqli_fetch_array( $run_users ) ) {
								$user_id        = $row_users['id'];
								$user_name      = $row_users['name'];
								$user_last_name = $row_users['last_name'];
								$user_position  = $row_users['position'];

								$i ++;


								?>

                                <tr>
                                    <td> <?php echo $i; ?> </td>
                                    <td> <?php echo $user_name; ?> </td>
                                    <td> <?php echo $user_last_name; ?> </td>
                                    <td> <?php echo $user_position; ?> </td>

                                    <td> <a href="#" data-user-id="<?php echo $user_id; ?>" class="delete-btn">x Delete</a></td>
                                    <td><a href="#"
                                            data-user-id="<?php echo $user_id; ?>"
                                            data-user-name="<?php echo $user_name; ?>"
                                            data-user-last-name="<?php echo $user_last_name; ?>"
                                            data-user-position="<?php echo $user_position; ?>"
                                            class="edit-btn">Edit</a></td>

                                </tr>

							<?php } ?>

                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php }
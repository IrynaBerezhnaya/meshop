<?php
include( 'functions.php' );
$host     = "webdev26.mysql.tools";
$user     = "webdev26_meshop";
$password = "&-7z3Tcr4C";
$database = "webdev26_meshop";

$connection = mysqli_connect( $host, $user, $password, $database )
or die( "error " . mysqli_error( $connection ) );

$user_id        = $_POST['user_id'];
$user_name      = $_POST["user_name"];
$user_last_name = $_POST["user_last_name"];
$user_position  = $_POST["user_position"];

?>
<tr>
    <td><input type="hidden" class="user_id" value="<?php echo $user_id; ?>"></td>
    <td><input type="text" class="user_name" value="<?php echo $user_name; ?>"></td>
    <td><input type="text" class="user_last_name" value="<?php echo $user_last_name; ?>"></td>
    <td>
        <select class="form-select user_position">
            <option disabled selected value> <?php echo $user_position; ?> </option>
            <option value="programmer">Programmer</option>
            <option value="manager">Manager</option>
            <option value="tester">Tester</option>
        </select>
    </td>
    <td><a href="#" data-user-id="<?php echo $user_id; ?>" class="cancel-btn">x Cancel</a></td>
    <td><a href="#" data-user-id="<?php echo $user_id; ?>" class="save-btn">Save</a></td>

</tr>

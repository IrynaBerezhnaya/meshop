<?php
session_start();
$conn = mysqli_connect( 'webdev26.mysql.tools', 'webdev26_meshop', '&-7z3Tcr4C' );
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
			header( 'Location: /admin/products.php' );
		}
	} else {
		$message = 'Your email or password is incorrect, please try again!';
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1.0, user-scalable=0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="../css/owl_carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl_carousel/owl.theme.default.min.css">

    <link rel="stylesheet" href="../libs/fontawesome/fontawesome-all.min.css">
    <link rel="stylesheet" href="../css/main.css">

    <title>Admin</title>

</head>
<body class="main-bg">

<div class="ib-nav-bgc">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand ib-navbar-brand" href="../index.php">MeStore</a>
            <a class="nav-item nav-link ib-nav-link" href="admin_sign_in.php">Admin panel</a>
        </div>
    </nav>
</div>

<div class="container sign_up-block">
    <div class="row m-0 justify-content-center">
        <div class="col-xl-6 p-md-3 p-lg-5">
            <h4 class="text-uppercase mb-5 title-single_product text-center">Sign in</h4>

            <form action="" method="post">
                <div class="form-row">
                    <div class="col-md-8 col-xl mb-4">
                        <input type="email" name="user" class="form-control"
                               placeholder="Your Email" aria-describedby="emailHelp"
                               value="" required autocomplete="off">
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-8 col-xl mb-4">
                        <input type="password" name="pass" class="form-control"
                               placeholder="Your password" value="" required autocomplete="off">
                    </div>
                </div>

                <div class="form-row"><div class="col-md-8 col-xl mb-4"><?php echo $message ?></div></div>

                <div class="form-row">
                    <div class="col text-center">
                        <button class="btn btn-danger ib-btn" type="submit" name="submit">Sign In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<script src="../js/owl_carousel/owl.carousel.min.js"></script>
<script src="js/admin.js"></script>

</body>
</html>
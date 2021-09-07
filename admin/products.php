<?php
session_start();
include( '../functions.php' );
$connection = connect_to_db();


if ( ! isset( $_SESSION['user'] ) ) {
	header( 'Location: /admin/admin_sign_in.php' );
} else {

if ( isset( $_POST['records-limit'] ) ) {                 // <select name="records-limit" = по умолчанию 5, можно изменить на [ 5, 10, 20, 30 ]
	$_SESSION['records-limit'] = $_POST['records-limit'];  // в $_SESSION сохраняем значение
}

$page = ( isset( $_GET['page'] ) && is_numeric( $_GET['page'] ) ) ? $_GET['page'] : 1;  // is_numeric - Находит, является ли переменная числом или числовой строкой //int(1)

// Prev + Next
$prev         = $page - 1;
$next         = $page + 1;
$totoal_pages = get_comments_total_pages();

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

    <link rel="stylesheet" href="../libs/fontawesome/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/croppie.css" />
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="../css/main.css">

    <title>Admin</title>

</head>
<body class="main-bg pb-5">

<div class="ib-nav-bgc">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand ib-navbar-brand" href="../index.php">MeStore</a>
            <a class="nav-item nav-link ib-nav-link" href="">Admin panel</a>
        </div>
    </nav>
</div>

<div class="container center-div shadow text-center p-0">
    <div class="heading text-white">
        <p class="mb-0">Welcome Back! <?php echo $_SESSION['user'] ?></p>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 p-0">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title d-flex justify-content-around">
                        <span>View Products</span>
                        <a href="product.php" class="font-weight-lighter">
                            + Add New
                        </a>
                    </h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th> Product:</th>
                                <th> Product Name:</th>
                                <th> Product Brand:</th>
                                <th> Product Image:</th>
                                <th> Product Description:</th>
                                <th> Product Price:</th>
                                <th> Product Sale-Price:</th>
                                <th> Product Delete:</th>
                                <th> Product Edit:</th>
                            </tr>
                            </thead>

                            <tbody>

							<?php
							$limit           = get_comments_limit();
							$page            = $page ? $page : 1;
							$paginationStart = ( $page - 1 ) * $limit;  //// Вычисляем с какого объекта начать выводить

							$i = 0;
							$i = ( $page - 1 ) * $limit;


							$get_products = "SELECT * FROM products ORDER BY id DESC LIMIT $paginationStart, $limit";

							$run_products = mysqli_query( $connection, $get_products );

							while ( $row_products = mysqli_fetch_array( $run_products ) ) {  //Получить строку результата как ассоциативный, числовой или и то, и другое
								$product_id    = $row_products['id'];
								$product_name  = $row_products['name'];
								$product_brand = $row_products['brand'];

								$product_img = $row_products['image'];
								$product_img = empty( $product_img ) ? get_image_placeholder() : $product_img;

								$product_descr      = trim( $row_products['description'] );  //trim — Удаляет пробелы (или другие символы) из начала и конца строки
								$product_price      = $row_products['price'];
								$product_sale_price = $row_products['sale_price'];
								$i ++;

								$max_length = 100;

								if ( strlen( $product_descr ) > $max_length ) {
									$offset        = ( $max_length - 3 ) - strlen( $product_descr );
									$product_descr = substr( $product_descr, 0, strrpos( $product_descr, ' ', $offset ) ) . '...';
								}
								?>

                                <tr>
                                    <td> <?php echo $i; ?> </td>
                                    <td> <?php echo $product_name; ?> </td>
                                    <td> <?php echo $product_brand; ?> </td>
                                    <td><img src="../img/<?php echo $product_img; ?>" width="75"></td>
                                    <td> <?php echo $product_descr; ?> </td>
                                    <td> $ <?php echo $product_price; ?> </td>
                                    <td> $ <?php echo $product_sale_price; ?> </td>
                                    <td>
                                        <a onClick="javascript: return confirm('Please confirm deletion!');"
                                           href='admin.php?delete_product=<?php echo $product_id; ?>'> x Delete</a>
                                    </td>
                                    <td>
                                        <a href="product.php?edit_product=<?php echo $product_id; ?>">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                    </td>
                                </tr>

							<?php } ?>

                            </tbody>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container d-flex justify-content-end mt-5 mb-5">
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>

<div class="container mt-5">
    <!-- Select dropdown -->
    <div class="d-flex flex-row-reverse mb-3">
        <form action="products.php" method="post">
            <select name="records-limit" id="records-limit" class="custom-select">
                <option disabled selected>Records Limit</option>
				<?php foreach ( [ 5, 10, 20, 30 ] as $limit ) : ?>
                    <option
						<?php if ( isset( $_SESSION['records-limit'] ) && $_SESSION['records-limit'] == $limit ) {
							echo 'selected';
						} ?>
                            value="<?= $limit; ?>">
						<?= $limit; ?>
                    </option>
				<?php endforeach; ?>
            </select>
        </form>
    </div>
    <!-- Pagination -->
    <nav aria-label="Page navigation example mt-5">
        <ul class="pagination justify-content-center">
            <li class="page-item <?php if ( $page <= 1 ) {
				echo 'disabled';
			} ?>">


				<?php
				$params           = array_merge( $_GET, array( 'page' => '' ) );
				$new_query_string = http_build_query( $params );
				?>

                <a class="page-link"
                   href="<?php if ( $page <= 1 ) {
					   echo '#';
				   } else {
					   echo "?" . $new_query_string . $prev;
				   } ?>">Previous</a>
            </li>

			<?php for ( $i = 1; $i <= $totoal_pages; $i ++ ): ?>
                <li class="page-item <?php if ( $page == $i ) {
					echo 'active';
				} ?>">
                    <a class="page-link" href="products.php?<?= $new_query_string ?><?= $i; ?>"> <?= $i; ?> </a>
                </li>
			<?php endfor; ?>

            <li class="page-item <?php if ( $page >= $totoal_pages ) {
				echo 'disabled';
			} ?>">
                <a class="page-link"
                   href="<?php if ( $page >= $totoal_pages ) {
					   echo '#';
				   } else {
					   echo "?" . $new_query_string . $next;
				   } ?>">Next</a>
            </li>
        </ul>
    </nav>
</div>


<?php } ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>

<script src="js/croppie.min.js"></script>
<script src="js/admin.js"></script>
</body>
</html>
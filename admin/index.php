<?php
require_once 'DB.class.php';
$db = new DB();

//Fetch the images data
$condition = array('where' => array('status' => 1));
$images = $db -> getRows('images', $condition);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Image Gallery</title>

	<!-- fancybox css -->
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.min.css">

	<!-- stylesheet file-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- jquery library -->
	<script src="js/jquery.min.js"></script>

	<!-- fancybox js library -->
	<script src="fancybox/jquery.fancybox.min.js"></script>

	<!-- bootstrap css  -->
	<link rel="stylesheet" href="bootstrap/bootstrap.min.css">

	<!-- bootstrap script  -->
	<script src="bootstrap/bootstrap.min.js"></script>

	<!-- initialize fancybox -->
	<script>
		$("[data-fancybox]").fancybox();
	</script>
</head>

<body>

	<?php require '../partials/_header.php';
?>

<section class="container-fluid gallery-banner">
    <div class="container ">
      
    </div>
  </section>

	<div class="container my-5">

		<section class="login">
			<form>
				<div class="mb-3">
					<label for="exampleInputEmail1" class="form-label">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
				</div>
				<div class="mb-3">
					<label for="exampleInputPassword1" class="form-label">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1">
				</div>
				<div class="mb-3 form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				<a href="manage.php" class="glink mx-5">Login</a>
			</form>
		</section>
	</div>

<div class="my-5">
		<?php 
		require '../partials/_footer.php'; 
		?>

	
		</div>
</body>

</html>
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

	<div class="container">
		<h1>Dynamic Images Gallery</h1>
		<hr>
		<div class="head">
			<a href="manage.php" class="glink">Manage</a>
		</div>
		<div class="gallery">
			<?php
            if(!empty($images)){
							foreach($images as $row){
                $uploadDir = 'uploads/images/';
								$imageURL = $uploadDir.$row["file_name"];
								
            ?>
			<div class="col-lg-3">
				<a href="<?php echo $imageURL; ?>" data-fancybox="gallery" data-caption="<?php echo $row["title"];?>">
					<img src="<?php echo $imageURL;?> " alt="" />
					<p><?php echo $row["title"];?></p>

				</a>
			</div>
			<?php }
           } ?>
		</div>
	</div>				
</body>
</html>
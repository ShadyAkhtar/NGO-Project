<?php
session_start();
$captchaStatus = true;
$enquireStatus = false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
	if(isset($_POST['esubmit'])){
		$text = $_POST['feedback-captcha'];
if($_SESSION['code'] == $text){
  
	  include 'partials/_dbconnect.php';
		$ename = mysqli_real_escape_string($conn, $_POST['ename']);
		$eage = mysqli_real_escape_string($conn, $_POST['eage']);
		$eemail = mysqli_real_escape_string($conn, $_POST['eemail']);
		$ephone = mysqli_real_escape_string($conn, $_POST['ephone']);
		$eclass = mysqli_real_escape_string($conn, $_POST['eclass']);
		$ecclass = mysqli_real_escape_string($conn, $_POST['ecclass']);
		$emotive = mysqli_real_escape_string($conn, $_POST['emotive']);
		$emessage = mysqli_real_escape_string($conn, $_POST['emessage']);
		$estate = mysqli_real_escape_string($conn, $_POST['estate']);
		$ecity = mysqli_real_escape_string($conn, $_POST['ecity']);
	$db = "feedback";
	$query = "use $db" ;
	mysqli_query($conn, $query);
	$query2 = "INSERT INTO `enquiry` (`name`, `age`, `phone`, `email`, `class`, `cur_class`, `motive`, `Message`, `state`, `city`, `date`) VALUES ('$ename', '$eage', '$ephone', '$eemail', '$eclass', '$ecclass', '$emotive', '$emessage', '$estate', '$ecity', current_timestamp())";
	$result = mysqli_query($conn,$query2);
	if($result){
		$enquireStatus = true;
	}
}else{
	$captchaStatus = true;
	$enquireStatus = false;
}
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<script>

function refreshCaptcha() {
	$("#captcha_code").attr('src','partials/_image.php'); 
}

</script>
</head>

<body onload="refreshCaptcha();">

	<?php
        require 'partials/_header.php';
        ?>

	<section class="container-fluid work-banner">
		<div class="container ">
		</div>
	</section>

	<!-- Covid Alert  -->
	<section class="container my-5">
		<div class="alert alert-danger" role="alert">
			Due to COVID-19 lockdown we are unable to serve the society and all our projects are on hold due to official
			document verification is pending. we are looking forward to serve the society as soon as our documentation gets
			completed.
		</div>
	</section>

	<!-- Student Welfare  -->

	<hr class="container mt-5">
	<section class="container text-center">
		<h1 class="featurette-heading font-weight-normal mt-4 mb-5">Student Welfare</h1>
		<img src="img/work/NGO-student.jpg" class="img-fluid mb-5" alt="Student Welfare At Arrah">
		<h4 class="text-center">Student is a precious social element for the development of the society. In Sampurn Kirtiman
			At Arrah (Bihar) We make sure that our young generation
			progress and develop irrespective of any financial and backward crisis.</h4>
		<h5 class="text-center mb-3">We are soon coming up with the Scholarship Program for SSC, STET, CTET, BPSC, UPSC,
			RAILWAY, DEFENCE, and other government Exams Coaching.</h5>
			</section>
<!-- Enquire Button  -->

<?php

?>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Become Volunteer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- modal body start  -->
      <form action="" method="POST">
            <div class="form-group">
              <label for="ename">Name </label>
              <input type="text" class="form-control" id="ename" name="ename" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="eage">Age </label>
              <input type="Number" class="form-control" id="eage" name="eage" placeholder="Age" maxlength="3" required>
            </div>
            <div class="form-group">
              <label for="eemail">Email address</label>
              <input type="email" class="form-control" id="eemail" name="eemail" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="ephone">Phone No.</label>
              <input type="phone" class="form-control" id="ephone" name="ephone" placeholder="8888888888" maxlength="10" required>
            </div>
            <div class="form-group">
              <label for="eclass">Class (Previous Class with year)</label>
              <input type="text" class="form-control" id="eclass" name="eclass" placeholder="Previous Class (year)">
            </div>
            <div class="form-group">
              <label for="ecclass">Current Class </label>
              <input type="text" class="form-control" id="ecclass" name="ecclass" placeholder="Current class">
            </div>
            <div class="form-group">
              <label for="emotive">Motive </label>
              <input type="text" class="form-control" id="emotive" name="emotive" placeholder="Your Motive">
            </div>
            <div class="form-group">
              <label for="emessage">Message</label>
              <textarea class="form-control" id="emessage" name="emessage" id="emessage" rows="2"></textarea>
            </div>
			<div class="form-group">
              <label for="estate">State </label>
              <input type="text" class="form-control" id="estate" name="estate" placeholder="State">
            </div>
            <div class="form-group">
              <label for="ecity">City </label>
              <input type="text" class="form-control" id="ecity" name="ecity" placeholder="City">
            </div>

			<div class="form-group form-inline">
            <img id="captcha_code" src="" alt="Sampurn Kirtiman Captcha"><span class="ml-3">
            <img class="mr-2" src="img/icon/refresh2.png" onClick="refreshCaptcha();" style="cursor: pointer;">
            <input class="form-control" id="feedback-captcha" type="text" name="feedback-captcha" placeholder="Enter Captcha"></span>
            </div>
            <?php
            if(!$captchaStatus){
            echo '<p class="text-danger"><b>Invalid captcha.</b> Plz <b>Refresh the captcha</b> before submitting</p>';
            }?>
          
<!-- modal body end -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="esubmit">Submit</button>
      </div>
    </div></form>
  </div>
</div>
   <section class="container my-5">
  <div class="text-center">
  <?php
  if($enquireStatus){
	  echo '<p>Your Request has been submitted Successfully</p>';
  }
  ?>
  <button type="button" class="btn btn-outline-success mb-3" data-toggle="modal" data-target="#exampleModalCenter">Enquire Here!</button>
</div>
</section>

<!-- Enquire Button End -->
	

	<!-- Previous Other Works -->

	<section class="container mb-5">
		<hr class="featurette-divider">
		<h1 class="text-center featurette-heading font-weight-normal mb-4">Our Other Works</h1>
		<div class="row featurette">
			<div class="col-md-6 order-md-2">
				<h2 class="featurette-heading">Tree plantation. <span class="text-muted">Environment.</span></h2>
				<p class="lead">Tree Plantation work is carried out at Ansarnagar in Nawada district (Bihar) with collaboration
					with Iqra Public Library under the guidance of Iqra Public Library's Volunteers.
				</p>
			</div>
			<div class="col-md-6 order-md-1">
				<img src="img/work/tree-plantation-SAmpurn-kirtiman-Arrah.jpg"
					class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="600"
					alt="tree plantation from sampurn kirtiman at arrah">
				<!-- <rect width="100%" height="100%" fill="#eee"/> -->
			</div>
		</div>

		<div class="row featurette mt-5">
			<div class="col-md-6 order-md-1">
				<h2 class="featurette-heading">Winter Packets.<br> <span class="text-muted">Homeless.</span></h2>
				<p class="lead">Winter relieve package such as blanket, shawl, winter are distributed from the sampurn Kirtiman
					- Ek Asara at Arrah to the needy homeless people.
					And we make sure to provide the food as well.
				</p>
			</div>
			<div class="col-md-6 order-md-2">
				<img src="img/work/blanket-distribution-winter.jpeg"
					class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="600"
					alt="Winter Package from NGO to homeless, helping homeless">
			</div>
		</div>

		<div class="row featurette mt-5">
			<div class="col-md-6 order-md-2">
				<h2 class="featurette-heading mt-5">Meeting for Peace and Harmony. <span class="text-muted">Society.</span></h2>
				<p class="lead">
					We at Sampurn Kirtiman, we make sure that our Society and surrounding have peace and harmony among each other.
					This meeting is organized during Election
					to maintain Peace and Harmony in our Surrounding.
				</p>
			</div>
			<div class="col-md-6 order-md-1">
				<img src="img/work/election-meeting-harmony.jpeg"
					class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="600">
				<!-- <rect width="100%" height="100%" fill="#eee"/> -->
			</div>
		</div>
		<div class="row featurette mt-5">
			<div class="col-md-6 order-md-1">
				<h2 class="featurette-heading">Flag hoisting.<br> <span class="text-muted">Women Empowerment.</span></h2>
				<p class="lead">We believe the Woman should not be lag behind any social element in the society. We believe in Social Equality and to empower women in every sector.
					 We provide all necessary requirement to the woman in Education, or becoming self Independent.
				</p>
			</div>
			<div class="col-md-6 order-md-2">
				<img src="img/work/independence-day-flag-by-woman.jpeg"
					class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="600"
					alt="Winter Package from NGO to homeless, helping homeless">
			</div>
		</div>
	</section>

	<?php 
        require 'partials/_footer.php';
        ?>

</body>

</html>
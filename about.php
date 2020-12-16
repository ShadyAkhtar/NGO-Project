<?php
$showAlert = false;
$captchaStatus = true;
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    
  if(isset($_POST['vsubmit']) && !empty($_POST['feedback-captcha'])){
      $text = $_POST['feedback-captcha'];
if($_SESSION['code'] == $text){
  $showAlert = true;
}else{
  $captchaStatus = false;
}   
      
      if((isset($_POST['vname']) && !empty($_POST['vname'])) && (isset($_POST['vage']) && !empty($_POST['vage'])) && (isset($_POST['vmail']) && !empty($_POST['vmail'])) && (isset($_POST['vphone']) && !empty($_POST['vphone'])) && (isset($_POST['voccupation']) && !empty($_POST['voccupation'])) && (isset($_POST['vstate']) && !empty($_POST['vstate'])) && (isset($_POST['vcity']) && !empty($_POST['vcity'])))
      {
          if(isset($_POST['vtitle']) && !empty($_POST['vtitle'])){
              die();
          }

    include 'partials/_dbconnect.php';
      $vname = mysqli_real_escape_string($conn, $_POST['vname']);
      $vage = mysqli_real_escape_string($conn, $_POST['vage']);
      $vmail = mysqli_real_escape_string($conn, $_POST['vmail']);
      $vphone = mysqli_real_escape_string($conn, $_POST['vphone']);
      $voccupation = mysqli_real_escape_string($conn, $_POST['voccupation']);
      $vstate = mysqli_real_escape_string($conn, $_POST['vstate']);
      $vcity = mysqli_real_escape_string($conn, $_POST['vcity']);
      $vinspire = mysqli_real_escape_string($conn, $_POST['vinspire']);
  $db = "feedback";
  $query = "use $db" ;
  mysqli_query($conn, $query);
  $vquery="insert into `volunteer` (name,age,email,phone,occupation,state,city,inspiration,date) values('$vname','$vage','$vmail','$vphone','$voccupation','$vstate','$vcity','$vinspire',current_timestamp())";
  $result = mysqli_query($conn,$vquery);
  if($result){
  $vmsg = "Volunteer request for Sampurn Kirtiman - Ek Asara \nI would like to volunteer for your NGO. \n \n" . "Name : " . $vname . "\n" ."Age : " . $vage . "\n" . "Email : " . $vmail . "\n" . "Phone : " . $vphone . "\n" . "Occupation : " . $voccupation . "\n" . "State : " . $vstate . "\n" . "City : " . $vcity . "\n" . "Inspiration : " . "$vinspire" . "\n" . "\nHoping For Your Reply Soon. \nThank you";
    mail("sampurnkirtimanekasara@gmail.com", "New Volunteer Request", $vmsg);}
}}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sampurn Kirtiman | About Us</title>
</head>

<script>
function refreshCaptcha() {
	$("#captcha_code").attr('src','partials/_image.php');
}
</script>

<body onload="refreshCaptcha();">
 <?php
        require 'partials/_header.php';
?>
  <section class="container-fluid about-banner">
    <div class="container ">

    </div>
  </section>

  <!-- Paragraph Start -->
  <section class="container mt-5 intro-para">
    <div>
      <h2> Sampurn Kirtiman - Ek Asara </h2>
      <p>Sampurn Kirtiman - Ek Asara, We work for the welfare of the society and help the needful people around us for
        the welfare of the humanity. we also work in student welfare, so no skillful student lag behind because of any
        difficulties and hardship.
        Always looking forward for the opportunity to help the needful people in our surrounding. And Sampurn Kirtiman
        also inspired the common people to join the movement as a volunteer in this good cause. Lets be someone's
        "Asara". </p>

      <p>Sampurn Kirtiman is inspired by the National political leader Jayprakash Narayan's ideology of 7 revolutionary
        slogan (Kranti) Politics, Economics, Social, Culture,
        Intelltual/intelligence, Education & Spiritual. with all these 7 (kranti) revolutionary ideology "Sampurn
        Kirtiman - Ek Asara" is formed to help the homeless, backward and minorities,
        women. Sampurn Kirtiman situated in Arrah (Bihar) believe in total development of the society by getting over
        the caste based discrimination and get our society on new direction of development with humanity and equality.
      </p>
    </div>
  </section>
  
<!-- Basic Info -->
  <section class="container">
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-6 order-md-2">
        <h2 class="featurette-heading">Student Welfare.
          <!-- <span class="text-muted">See for yourself.</span> -->
        </h2>
        <p class="lead">Student is the future of any Nation, our first aim is that No Youth remains uneducated. Sampurn
          Kirtiman focuses on overall development of student,
          At Arrah we interact with student intellectual development. We conduct Education awareness campaign. We help
          the student who can't afford the education due to their low family income.
          We also conduct Scholarship for Students to inspire them to learn more.</p>
      </div>
      <div class="col-md-6 order-md-1">
        <img src="img/about-us/student.jpg" alt="Sampurn Kirtiman | NGO at Arrah | Student Welfare"
          class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="600">
        <!-- <rect width="100%" height="100%" fill="#eee"/> -->
      </div>
    </div>

    <div class="row featurette mt-5">
      <div class="col-md-6 order-md-1">
        <h2 class="featurette-heading">Women Empowerment.
          <!-- <span class="text-muted">It’ll blow your mind.</span>  -->
        </h2>
        <p class="lead">Women is the important aspect of Society, we ensure that all women around us are self reliable
          and self-efficient.
          Sampurn Kirtiman help Women in education and other type of skill activity. We provide information about
          sewing, embroidery, knitting, cashing, painting,
          doll making and other professional training beauty, etc. by the organization to make women employment
          oriented. </p>
      </div>
      <div class="col-md-6 order-md-2">
        <img src="img/about-us/women.jpg" alt="Sampurn Kirtiman | NGO at Arrah | Women Empowerment"
          class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="600">
      </div>
    </div>

    <div class="row featurette mt-5">
      <div class="col-md-6 order-md-2">
        <h2 class="featurette-heading">Society Development.
          <!-- <span class="text-muted">See for yourself.</span> -->
        </h2>
        <p class="lead">We Human being recognize by the term called "Society", Society Development is the need of the
          generation. We make sure that everything around us is living peacefully and happily.
          Our aim is that each person should be Employed, we provide the Job oppourtunity and train the unemployed and
          needful person with different skills like typewriters, stenography, computer electronics, electrical, painting
          etc.
        </p>
      </div>
      <div class="col-md-6 order-md-1">
        <img src="img/about-us/society.jpg" alt="Sampurn Kirtiman | NGO at Arrah | Society Development"
          class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="600" height="600">
        <!-- <rect width="100%" height="100%" fill="#eee"/> -->
      </div>
    </div>
    <p class="lead"> We believe in overall development of society with respect to Education, Social, political,
      economical, Cultural, Intelltual and spiritual. We beleive in Equality of every Individual irrespective of any
      majority and minority, religion or any caste sytem.
      We also make sure we protect our Environment by small initative like plantation.</p>
  </section>

  <!-- head members information -->

  <hr class="featurette-divider">

  <section class="container my-3">
    <h1 class="text-center mb-5">Head Members</h1>
    <div class="row row-cols-1 row-cols-md-3">
      <div class="col mb-3">
        <div class="card">
          <img src="img/volunteer/irshad.png" class="card-img-top"
            alt="Sampurn Kirtiman | NGO at Arrah | Irshad Ahmad (Director)">
          <div class="card-body">
            <h4 class="card-title">Irshad Ahmad</h4>
            <p class="card-text">(Director)</p>
          </div>
        </div>
      </div>
      <div class="col mb-3">
        <div class="card">
          <img src="img/volunteer/shamsul.png" class="card-img-top"
            alt="Sampurn Kirtiman | NGO at Arrah | Shamsul Huda (Secretary)">
          <div class="card-body">
            <h4 class="card-title">Shamsul Huda</h4>
            <p class="card-text">(Secretary)</p>
          </div>
        </div>
      </div>
      <div class="col mb-3">
        <div class="card">
          <img src="img/volunteer/majhar1.png" class="card-img-top"
            alt="Sampurn Kirtiman | NGO at Arrah | Majhar Imam (Treasurer)">
          <div class="card-body">
            <h4 class="card-title">Majhar Imam</h4>
            <p class="card-text">(Treasurer)
            </p>
          </div>
        </div>
      </div>

    </div>

  </section>

 <!-- volunteer button -->
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
          <input type="text" name="vtitle" hidden class="hidden" >
            <div class="form-group">
              <label for="Name">Name </label>
              <input type="text" class="form-control" id="vname" name="vname" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="Name">Age </label>
              <input type="number" class="form-control" id="vage" name="vage" placeholder="Age" maxlength="3" min="5" max="199" required>
            </div>
            <div class="form-group">
              <label for="contact-email">Email address</label>
              <input type="email" class="form-control" id="vmail" name="vmail" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="contact-phone">Phone No.</label>
              <input type="phone" class="form-control" id="vphone" name="vphone" placeholder="8888888888" maxlength="10" required>
            </div>
            <div class="form-group">
              <label for="contact-email">Occupation (Example: Student, Self-Employed,etc.)</label>
              <input type="text" class="form-control" id="voccupation" name="voccupation" placeholder="Occupation">
            </div>
            <div class="form-group">
              <label for="contact-email">State </label>
              <input type="text" class="form-control" id="vstate" name="vstate" placeholder="State">
            </div>
            <div class="form-group">
              <label for="contact-email">City </label>
              <input type="text" class="form-control" id="vcity" name="vcity" placeholder="City">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">What Inspired You ?</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="vinspire" rows="2" required></textarea>
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
        <button type="submit" class="btn btn-primary" name="vsubmit">Submit</button>
      </div>
    </div></form>
  </div>
</div>
   <section class="container my-5">
       <?php if($showAlert){
       echo '<p class="text-danger text-center lead">We will reach you soon.</p>';
           
       }
       ?>
  <div>
  <button type="button" class="btn btn-block btn-lg btn-outline-success" data-toggle="modal" data-target="#exampleModalCenter">To become Volunteer</button>
</div>
</section>


  <?php
        require 'partials/_footer.php';
        ?>
</body>

</html>
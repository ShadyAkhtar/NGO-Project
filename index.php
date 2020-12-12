<?php
$showAlert = false;
$captchaStatus = true;
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
$text = $_POST['feedback-captcha'];
if($_SESSION['code'] == $text){
  $showAlert = true;
}else{
  $captchaStatus = false;
}}
if($showAlert){
  include 'partials/_dbconnect.php';
    $name = mysqli_real_escape_string($conn, $_POST['Name']);
    $email = mysqli_real_escape_string($conn, $_POST['Email']);
    $phone = mysqli_real_escape_string($conn, $_POST['Phone']);
    $message = mysqli_real_escape_string($conn, $_POST['Suggestions']);
$db = "feedback";
$query = "use $db" ;
mysqli_query($conn, $query);
$query1="insert into `contact` (name,email,phone,message,date) values('$name','$email','$phone','$message',current_timestamp())";

$result = mysqli_query($conn,$query1);
if($result){
   $showAlert = true;
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="">
  <title>NGO</title>
<script>

function refreshCaptcha() {
	$("#captcha_code").attr('src','partials/_image.php');

  
}

</script>

</head>

<body onload="refreshCaptcha();">
<!-- <?php $_SESSION['code']; ?> -->
  <?php
        require 'partials/_header.php';
        ?>
        
  <!-- Carousel -->
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/child.jpg" class="d-block w-100" alt="Help Poor Family">
        <div class="carousel-caption d-none d-md-block">
          <h4>Be A Reason Of Someone's Smile</h4>
          <a class="btn btn-primary" href="donation" role="button">Donate!</a>
        </div>
      </div>
      <div class="carousel-item">
        <!-- <img src="img/homeless_old.jpg" class="d-block w-100" alt="Help Homeless"height ="650p"> -->
        <img src="img/homeless_old_Copy.jpg" class="d-block w-100" alt="Help Homeless">
        <div class="carousel-caption d-none d-md-block">
          <h4>Help The Homeless</h4>
          <a class="btn btn-primary" href="donation" role="button">Donate!</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/poor.jpg" class="d-block w-100" alt="Help Backward And Tribes">
        <div class="carousel-caption d-none d-md-block">
          <h4>Unite For A Good Cause</h4>
          <a class="btn btn-primary" href="donation" role="button">Donate!</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/poor_education.jpg" class="d-block w-100" alt="Educate The Nation">
        <div class="carousel-caption d-none d-md-block">
          <h4>Let Them Learn And Build The New Nation</h4>
          <a class="btn btn-primary" href="donation" role="button">Donate!</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- Carousel End  -->
  <!-- Paragraph Start -->
  <section class="container intro-para">
    <div>
      <h2> Sampurn Kirtiman - Ek Asara </h2>
      <p>Sampurn Kirtiman - Ek Asara, We work for the welfare of the society and help the needful people around us for
        the welfare of the humanity. we also work in student welfare, so no skillful student lag behind because of any
        difficulties and hardship.
        Always looking forward for the opportunity to help the needful people in our surrounding. And Sampurn Kirtiman
        also inspired the common people to join the movement as a volunteer in this good cause. Lets be someone's
        "Asara". </p>
        <p>Sampurn Kirtiman is inspired by the National political leader Jayprakash Narayan's ideology of 7 revolutionary slogan (Kranti) Politics, Economics, Social, Culture,
Intelltual/intelligence, Education & Spiritual. with all these 7 (kranti) revolutionary ideology "Sampurn Kirtiman - Ek Asara" is formed to help the homeless, backward and minorities,
women. Sampurn Kirtiman situated in Arrah (Bihar) believe in total development of the society by getting over the caste based discrimination and get our society on new direction of development with humanity and equality.
</p>
    </div>
  </section>

  <!-- Social Work home section
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container-fluid px-0 social-work-home">
    <div class="px-0 social-work-home-card">
      <section class="container">
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img src="img/student-welfare-1.png" alt="Student Welfare" class="bd-placeholder-img rounded-circle"
              width="140" height="140">
            <h2 class="text-black font-weight-bolder">Student Welfare</h2>
            <p class="text-black text-card">Sampurn Kirtiman help in the intellectual development of the people by
              conducting
              various programs for the promotion of education and residential schools, colleges,
              adult education, all education, library, reading room, reading room, hostel adult education, informal
              education.</p>

          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="img/homeless.png" alt="Helping Homeless" class="bd-placeholder-img rounded-circle" width="140"
              height="140">
            <h2 class="text-black font-weight-bolder">Helping Homeless</h2>
            <p class="text-black text-card">Every year since its foundation in 2018, the Sampurn kirtiman donate
              blankets, dry ration, warm clothes, and dignity kits to the people who live on the streets or in night
              shelters in Arrah District of Bihar.</p>

          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img src="img/women-empowerment.png" alt="Women Empowerment" class="bd-placeholder-img rounded-circle"
              width="140" height="140">
            <h2 class="text-black font-weight-bolder">Women Empowerment</h2>
            <p class="text-black text-card ">To make women self-relaint we provide information about sewing, embroidery,
              knitting, cashing, painting,
              doll making and other professional training beauty and toilet etc.
              by the Sampurn Kirtiman to make women employment oriented.
            </p>

          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </section>
    </div>
  </div>

  <!-- volunteer testimonial section -->
  <section class="container my-5">
    <h1 class="text-center mb-5">Our Volunteers</h1>
    <div class="row row-cols-1 row-cols-md-4">
      <div class="col mb-3">
        <div class="card">
          <img src="img/volunteer/usha_kumari.png" class="card-img-top" alt="Usha Kumari">
          <div class="card-body">
            <h4 class="card-title">Usha Kumari</h4>
            <p class="card-text">In my journey with Sampurn kirtiman at Arrah, I learnt the importance of the little
              things we take for granted and from the homeless children, I also learnt what it means to be happy.
              Sometimes, it is not the big things, but the little things that make us happy.
              Working with NGO at Arrah in small town of Bihar made me a more humble and empathizing person.</p>
          </div>
        </div>
      </div>
      <div class="col mb-3">
        <div class="card">
          <img src="img/volunteer/asif_raza.png" class="card-img-top" alt="Asif Raza">
          <div class="card-body">
            <h4 class="card-title">Asif Raza</h4>
            <p class="card-text">Sampurn Kirtiman, has taught me the importance of enriching people’s lives. It has
              helped me to cherish the small things in life.
              It has taught me not to complain about the setbacks and to face all challenges no matter what!!!</p>
          </div>
        </div>
      </div>
      <div class="col mb-3">
        <div class="card">
          <img src="img/volunteer/vivek_kumar_gupta.png" class="card-img-top" alt="Vivek Kumar Gupta">
          <div class="card-body">
            <h4 class="card-title">Vivek Kumar Gupta</h4>
            <p class="card-text">. Bringing smile on faces gives the deepest satisfaction that cannot be verbalized.
              Volunteering at Sampurn Kirtiman is all about bringing a smile on faces and that gives meaning to my life.
            </p>
          </div>
        </div>
      </div>
      <div class="col mb-3">
        <div class="card">
          <img src="img/volunteer/soni_kumari.png" class="card-img-top" alt="Soni Kumari">
          <div class="card-body">
            <h4 class="card-title">Soni Kumari</h4>
            <p class="card-text"> I feel happy and honored to be a volunteer of Sampurn Kirtiman. Hours pass like
              minutes when interacting with people. The happiness we feel cannot be explained when a wish is fulfilled.
              I feel it would be great, if the days are longer and weekends are extended so that I can contribute even
              more.</p>
          </div>
        </div>
      </div>
    </div>

  </section>

 
   <!-- volunteer button -->
   <section class="container my-5">
  <div>
  <button type="button" class="btn btn-block btn-lg btn-outline-success">To become Volunteer</button>
</div>
</section>


<section id="feedback" class="contact-home container-fluid py-5">
    <div class="container ">
      <div class="row featurette">
        <div class="col-md-6 order-md-1">
          <h2>Reach Us!</h2>
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d498.7272900428936!2d0!3d0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398d5f55af449ab5%3A0x9fcbe16337e6f48c!2sSampurn%20Kirtiman!5e0!3m2!1sen!2sin!4v1603985025353!5m2!1sen!2sin"
            class="contact-map img-fluid mx-auto" width="550" height="550" frameborder="0" style="border:0;"
            allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-md-6 order-md-2">
          <h2>Suggestion/Feedback</h2>
          <p>We Will Be Happy To Hear From You</p>
          <div id="sent">
        <?php
        if($showAlert){
         
          echo ' <div class="alert alert-success" role="alert">
          Thanks For Your Valuable Words!
          </div> '; 
        }
        ?>
        </div>
          <form action="index.php?#feedback" method="POST">
            <div class="form-group">
              <label for="Name">Name </label>
              <input type="text" class="form-control" id="Name" name="Name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="contact-email">Email address</label>
              <input type="email" class="form-control" id="contact-email" name="Email" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="contact-phone">Phone No.</label>
              <input type="phone" class="form-control" id="contact-phone" name="Phone" placeholder="8888888888" required>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Suggestion</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="Suggestions" rows="5" required></textarea>
            </div>
            <div class="form-group form-inline">
            <img id="captcha_code" src="" alt="Sampurn Kirtiman Captcha"><span class="ml-3">
            <img class="mr-2" src="img/icon/refresh2.png" onClick="refreshCaptcha();" style="cursor: pointer;">
            <input class="form-control" id="feedback-captcha" type="text" name="feedback-captcha" placeholder="Enter Captcha"></span>
            </div>
            <?php
            if(!$captchaStatus){
            echo $_SESSION['code'] . '<p class="text-danger"><b>Invalid captcha.</b> Plz <b>Refresh the captcha</b> before submitting</p>';
            }?>
            <div class="form-group contact-submit">
              <button type="submit" class="btn btn-info">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php
        require 'partials/_footer.php';
        ?>

</body>

</html>
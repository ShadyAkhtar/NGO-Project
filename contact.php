<?php
$showAlert = false;
$captchaStatus = true;
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
  if((isset($_POST['contact-submit'])) && (!empty($_POST['feedback-captcha']))){

$text = $_POST['feedback-captcha'];
if($_SESSION['code'] == $text){
  $showAlert = true;
}else{
  $captchaStatus = false;
}
if($showAlert){
  if((isset($_POST['Name']) && !empty($_POST['Name'])) && (isset($_POST['Phone']) && !empty($_POST['Phone'])) && (isset($_POST['Suggestions']) && !empty($_POST['Suggestions'])))
  {
    if(isset($_POST['ctitle']) && !empty($_POST['ctitle'])){
          die();
      }
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
  $msg = "Contact Us for Sampurn Kirtiman - Ek Asara \nHere is my concern for your NGO. \n \n" . "Name : " . $name . "\n" . "Email : " . $email . "\n" . "Phone : " . $phone . "\n" . "message : " . $message . "\nHoping For Your Reply Soon. \nThank you";
  // mail("demo@mail.com", "Contact Us Message", $msg);
   $showAlert = true;
}}
}}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sampurn Kirtiman | Contact Us</title>
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
  <section class="container-fluid contact-banner">
    <div class="container ">
      
    </div>
  </section>

  <section class="container">

    <div class="row featurette mt-3">
      <div class="col-md-6 order-md-1">
        <h2>Reach Us!</h2>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d498.7272900428936!2d0!3d0!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398d5f55af449ab5%3A0x9fcbe16337e6f48c!2sSampurn%20Kirtiman!5e0!3m2!1sen!2sin!4v1603985025353!5m2!1sen!2sin"
          class="contact-map img-fluid mx-auto" width="550" height="550" frameborder="0" style="border:0;"
          allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      
<!--Contact Form-->
      <div class="col-md-6 order-md-2">
        <h2>Get In Touch</h2>
        <p>We Will Be Happy To Hear From You</p>
          <div id="sent">
        <?php
        if($showAlert){
          echo ' <div class="alert alert-success" role="alert">
          Thanks For Your Valuable Time!
          </div> '; 
        }
        ?>
        </div>
        <form method="POST">
            <input type="text" name="ctitle" hidden class="hidden">
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
            <input type="phone" class="form-control" id="contact-phone" name="Phone" placeholder="987654210" maxlength="10" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="Suggestions" rows="4" required></textarea>
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
          <div class="form-group contact-submit">
            <button type="submit" name="contact-submit" class="btn btn-info">Submit</button>
          </div>
        </form>
      </div>
    </div>

  </section>


  <section class="container my-5">
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-4 order-md-1">
        <img src="img/phone.png" alt="phone no.">
        <h2 class="my-3">Phone No.</h2>
        <a href="tel:+91 93343 19690" style="text-decoration: none; color:black;">
          <p>+91 93343 19690</p>
        </a>

        <a href="tel:+91 93869 31696" style="text-decoration: none; color:black;">
          <p>+91 93869 31696</p>
        </a>
      </div>

      <div class="col-md-4 order-md-2">
        <img src="img/email.png" alt="email id">
        <h2 class="my-3">Email Address</h2>
        <a href="mailto:sampurnkirtimanekasara@gmail.com" style="text-decoration: none; color:black;">
          <p>help@sampurnkirtiman.org</p>
        </a>
        <a href="mailto:sampurnkirtimanekasara@gmail.com" style="text-decoration: none; color:black;">
          <p>support@sampurnkirtiman.org</p>
        </a>
      </div>

      <div class="col-md-4 order-md-3">
        <img src="img/address.png" alt="office address ">
        <h2 class="my-3">Office Address</h2>
        <a href="https://g.page/r/CYz05jdj4cufEAg/review" style="text-decoration: none; color:black;">
          <p>Al-Hafeez College Campus, <br>
            Old Police Line, Arrah Bhojpur , <br>
            Bihar - 802301</p>
        </a>
      </div>
    </div>
  </section>

  <?php
        require 'partials/_footer.php';
        ?>
</body>

</html>
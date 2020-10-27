<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
        require 'header.php';
        ?>

  <section class="container intro-para">
    <div>
      <h2> Sampurn Kirtiman - Ek Asara </h2>
      <p>Sampurn Kirtiman - Ek Asara, We work for the welfare of the society and help the needful people around us
        for the welfare of the humanity. we also work in student welfare, so no skillful student lag behind
        because of any difficulties and hardship.
        Always looking forward for the opportunity to help the needful people in our surrounding. And Sampurn
        Kirtiman also inspired the common people to join the movement as a volunteer in this good cause. Lets be
        someone's "Asara". </p>
    </div>
  </section>

  <section class="container">

    <div class="row featurette">
      <div class="col-md-6 order-md-1">
        <h2>Reach Us!</h2>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224.94923369519054!2d84.66285731796509!3d25.565420043230247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398d5f62069a3ad1%3A0x68e156a04c5fce69!2sOld%20Police%20Line!5e0!3m2!1sen!2sin!4v1603207919182!5m2!1sen!2sin"
          class="contact-map img-fluid mx-auto" width="550" height="550" frameborder="0" style="border:0;"
          allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="col-md-6 order-md-2">
        <h2>Get In Touch</h2>
        <p>We Will Be Happy To Hear From You</p>
        <form action="" method="POST">
          <div class="form-group">
            <label for="Name">Name </label>
            <input type="text" class="form-control" id="Name" placeholder="Name">
          </div>
          <div class="form-group">
            <label for="contact-email">Email address</label>
            <input type="email" class="form-control" id="contact-email" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="contact-phone">Phone No.</label>
            <input type="phone" class="form-control" id="contact-phone" placeholder="987654210">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
          <div class="form-group contact-submit">
            <button type="button" class="btn btn-info">Info</button>
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
        <a href="https://goo.gl/maps/nyv7KFGBtYbTUXbU8" style="text-decoration: none; color:black;">
          <p>Al-Hafeez College Campus, <br>
            Old Police Line, Arrah Bhojpur , <br>
            Bihar - 802301</p>
        </a>
      </div>
    </div>
  </section>

  <?php
        require 'footer.php';
        ?>
</body>

</html>
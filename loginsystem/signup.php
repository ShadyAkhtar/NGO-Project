<?php


SELECT * FROM `ngo-admin-user` WHERE `phone` = 9167937391
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>Hello, world!</title>
</head>

<body>
    <!-- Navbar  -->
    <?php 
    require 'partials/_nav.php'; 
?>

    <h1 class="text-center">Admin Sign Up</h1>

    <!-- sign up form  -->
    <div class="container">

        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name " required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number </label>
                <input type="phone" class="form-control" maxlength="12" id="phone" name="phone" placeholder="9876543210">
            </div>
            <div class="form-group">
                <label for="dob">Date Of Birth </label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>
            <div class="form-group">
                <label for="gender">Gender </label><br>
                <label for="gender-male"> Male
                    <input type="radio" id="gender-male" value="male" name="gender">
                </label>
                <label for="gender-male">
                    Female <input type="radio" id="gender" value="female" name="gender"></label>
            </div>
            <div class="form-group">
                <label for="address">Address </label>
                <textarea class="form-control" id="address" name="address" rows="3" placeholder="Address..."></textarea>
            </div>
            <div class="form-group">
                <label for="state">State </label>
                <input type="text" class="form-control" id="state" name="state" placeholder="State">
            </div>
            <div class="form-group">
                <label for="city">City </label>
                <input type="text" class="form-control" id="city" name="city" placeholder="City">
            </div>
            <div class="form-group">
                <label for="pin">Pin Code </label>
                <input type="number" class="form-control" id="pin" name="pin" maxlength="6" placeholder="000000">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="name@example.com">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
            </div>
            
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>

    <?php
    require 'partials/_footer.php';
    ?>
</body>

</html>
<!-- XU LY DANG KY -->
<?php
  require_once "func/connect-db.php";
  if isset($_POST["btn-register"])
  {

  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Jimmy Choo | Luxury Shoes</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/signin.css" type="text/css">
    <script type="text/javascript" src="script/signin.js"></script>
    <script type="text/javascript" src="script/signup.js"></script>
  </head>
  <body class="full-height-grow">
    <div class="container">
      <?php
        require "header.php";
       ?>

      <section class="signup-main-section">
        <div class="form">
          <form class="form-signup" action="signup.php" method="post" onsubmit="checkSignUp()">
            <div class="form-title">
              <p class="title">REGISTERATION</p>
              <p class="subtitle">Register to receive our best online customers services</p>
            </div>
            <div class="form-element">
              <label for="full-name">FULL NAME <span class="require">*</span></label>
              <input type="text" name="full-name" placeholder="Please enter your full name"
                id="inp-fname" onblur="checkRequire(id)">
              <span class="message" id="inp-fname-message">Please enter a name.</span>
            </div>
            <div class="form-element">
              <label for="email">EMAIL <span class="require">*</span> </label>
              <input type="email" name="email" placeholder="Please enter your email"
                id="inp-email" onblur="checkRequire(id)">
              <span class="message" id="inp-email-message">Please enter an email.</span>
            </div>
            <div class="form-element">
              <label for="password">PASSWORD <span class="require">*</span></label>
              <input type="password" name="password" placeholder="Please enter your password"
                id="inp-pass" onblur="checkRequire(id)">
              <span class="message" id="inp-pass-message">Please enter a password.</span>
            </div>
            <div class="form-element">
              <label for="confirm">CONFIRM PASSWORD <span class="require">*</span></label>
              <input type="password" name="confirm" placeholder="Please confirm your password"
               id="inp-confirm" onblur="checkRequire(id)">
              <span class="message" id="inp-confirm-message">Please confirm password.</span>
            </div>
            <div class="form-element">
              <label for="phone">PHONE NUMBER</label>
              <input type="text" name="phone" placeholder="Please enter your phone number" value="">
            </div>
            <div class="form-element">
              <label for="address">ADDRESS</label>
              <input type="text" name="address" placeholder="Please enter your address" value="">
            </div>
            <div class="form-element">
              <input type="submit" name="btn-register" value="REGISTER">
            </div>
          </form>
        </div>
        <div class="main-image">
          <img src="images/register-img.jpg" alt="">
        </div>
      </section>

    </div>
  </body>

</html>

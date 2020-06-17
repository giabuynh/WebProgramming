<!-- XU LY DANG KY -->
<?php
  // require_once 'func/connect-db.php';
  // if (isset($_POST["btn-register"]))
  // {
  //   $email = $_POST["email"];
  //   $sql = "SELECT * FROM ACCOUNTS WHERE email = '$email'";
  //   $res = $conn->query($sql);
  //   if ($res->num_rows != 0)
  //   {
  //     echo "email da dang ky";
  //   }
  //   else
  //   {
  //     $sql = "CALL ADD_ACCOUNT(?, ?, ?, ?, ?, 0)";
  //     $stmt = $conn->prepare($sql);
  //     $stmt->bind_param("sssss", $fname, $email, $password, $address, $phone);
  //     $fname = $_POST["full-name"];
  //     $password = $_POST["password"];
  //     $address = $_POST["address"];
  //     $phone = $_POST["phone"];
  //     $stmt->execute();
  //     $stmt->close();
  //   }
  // }
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
          <form class="form-signup" action="signup.php" method="post" onsubmit="return checkRegister();">
            <div class="form-title">
              <p class="title">REGISTERATION</p>
              <p class="subtitle">Register to receive our best online customers services</p>
            </div>
            <div class="message" id="signup-message">
              Your email has been register before. Do you forget your password?
            </div>
            <div class="form-element">
              <label for="full-name">FULL NAME <span class="require">*</span></label>
              <input type="text" name="full-name" placeholder="Please enter your full name" value=""
                id="inp-fname" onblur="checkRequire(id)">
              <span class="message" id="inp-fname-message">Please enter a name.</span>
            </div>
            <div class="form-element">
              <label for="email">EMAIL <span class="require">*</span> </label>
              <input type="email" name="email" placeholder="Please enter your email" value=""
                id="inp-email" onblur="checkRequire(id)">
              <span class="message" id="inp-email-message">Please enter an email.</span>
              <span class="message" id="inp-notemail-message">Retry entering a correct email.</span>
            </div>
            <div class="form-element">
              <label for="password">PASSWORD <span class="require">*</span></label>
              <input type="password" name="password" placeholder="Please enter your password" value=""
                id="inp-pass" onblur="checkRequire(id)">
              <span class="message" id="inp-pass-message">Please enter a password.</span>
            </div>
            <div class="form-element">
              <label for="confirm">CONFIRM PASSWORD <span class="require">*</span></label>
              <input type="password" name="confirm" placeholder="Please confirm your password" value=""
               id="inp-confirm" onblur="checkRequire(id)">
              <span class="message" id="inp-confirm-message">Please confirm password.</span>
              <span class="message" id="inp-notmatch-message">Passwords are different. Please enter the same password.</span>
            </div>
            <div class="form-element">
              <label for="phone">PHONE NUMBER</label>
              <input type="text" name="phone" placeholder="Please enter your phone number" id="inp-phone" value="">
              <span class="message" id="inp-phone-message">Retry entering a correct phone number.</span>
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

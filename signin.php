<!-- XU LY DANG NHAP -->
<?php
  require_once "func/connect-db.php";

  if (isset($_POST["btn-signin"]))
  {
    $username = $_POST["email"];
    $password = $_POST["pass"];

    $username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);

    if ($username != "" && $password != "")
    {
      $sql = "SELECT * FROM ACCOUNTS
        WHERE email = '$username' AND pass = '$password'";
      $res = $conn->query($sql);
      if ($res->num_rows == 1)
      {
        $_SESSION["user"] = $username;
        // echo "CUS";
        $row = $res->fetch_assoc();
        echo $row["admin"];
        header("Location: index.php");
      }
      else
      {
        echo "FAIL";
      }
    }
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Jimmy Choo | Luxury Shoes</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/signin.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <script type="text/javascript" src="script/signin.js"></script>
  </head>
  <body class="full-height-grow">
    <div class="container">
      <?php
        require "header.php";
       ?>

      <section class="signin-main-section">
        <div class="form">
          <form class="form-signin" action="signin.php" method="post">
            <div class="form-title">
              <p class="title">SIGN IN</p>
              <p class="subtitle">If you are a registered user, please enter your email and password.</p>
            </div>
            <div class="message" id="signin-message">
              Sorry, your user name or password does not match our records. Please check your spelling and try again.
            </div>
            <div class="form-element">
              <label for="email" class="label">EMAIL ADDRESS <span class="require">*</span> </label>
              <input type="email" name="email" value=""  placeholder="Please enter your email address"
                id="inp-uname" onblur="checkRequire(id)">
              <span class="message" id="inp-uname-message">Please enter your email.</span>
            </div>
            <div class="form-element">
              <label for="pass" class="label">PASSWORD <span class="require">*</span> </label>
              <input type="password" name="pass" value="" placeholder="Please enter your password"
                id="inp-pass" onblur="checkRequire(id)">
              <span class="message" id="inp-pass-message">Please enter your password.</span>
            </div>
            <div class="pretty p-default">
              <input type="checkbox" />
              <div class="state label">
                <label>REMEMBER ME</label>
              </div>
            </div>
            <div class="inline form-element">
              <input type="submit" name="btn-signin" value="SIGN IN">
              <a onclick="">FOGOT YOUR PASSWORD?</a>
            </div>
          </form>
        </div>

        <div class="form">
          <form class="form-order-status" action="signin.php" method="post">
            <div class="form-element">
              <p class="title">ORDER STATUS & RETURNS</p>
              <p class="subtitle">View the details and progress of your order, including delivery tracking information.</p>
            </div>
            <div class="form-element">
              <label class="label">ORDER NUMBER <span class="require">*</span> </label>
              <input type="text" name="orderno" value="" placeholder="Please enter your order number"
                id="inp-orderno" onblur="checkRequire(id)">
              <span class="message" id="inp-orderno-message">Please enter a order number.</span>
            </div>
            <div class="form-element">
              <label class="label">EMAIL ADDRESS <span class="require">*</span> </label>
              <input type="text" name="email" value="" placeholder="Please enter your email address"
                id="inp-email" onblur="checkRequire(id)">
              <span class="message" id="inp-email-message">Please enter the email address used for this order.</span>
            </div>
            <div class="form-element">
              <input type="submit" name="btn-order-status" value="CHECK STATUS">
            </div>
          </form>
        </div>
      </section>

    </div>

    <?php
      require "footer.php";
     ?>
  </body>
</html>

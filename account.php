<?php
  
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Jimmy Choo | Luxury Shoes</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
  </head>
  <body class="full-height-grow">
    <div class="container">
      <?php
        require "header.php";
       ?>

      <form class="" action="account.php" method="post">
        <input type="submit" name="btn-logout" value="Log out">
      </form>

    </div>

    <?php
      require "footer.php";
     ?>
  </body>

</html>

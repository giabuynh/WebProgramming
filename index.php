<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>Jimmy Choo | Luxury Shoes</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <script type="text/javascript" src="script/home.js"></script>
  </head>
  <body class="full-height-grow">
    <div class="container">
      <?php
        require "header.php";
        echo $_SESSION["user"];
       ?>

      <section class="home-main-section">
        <div class="banner">
          <img src="images/banner.webp" alt="">
          <p class="pre-title">SIGNATURE STYLES</p>
          <p class="banner-title">PUMP IT UP</p>
        </div>
        <div class="bestsellers">
          <p class="title">BESTSELLERS</p>
          <div class="slides">
            <img src="images/products/HAWAIIFCLF_081071_SIDE.webp" alt="">
            <img src="images/products/RAY65SPT_000074_SIDE.webp" alt="">
            <img src="images/products/ROMY85SUE_035099_SIDE.webp" alt="">
          </div>
          <div class="slides">
            <img src="images/products/RAY65SPT_000074_SIDE.webp" alt="">
            <img src="images/products/ROMY85SUE_035099_SIDE.webp" alt="">
            <img src="images/products/THANDI100CCL_020005_SIDE.webp" alt="">
          </div>
          <div class="slides">
            <img src="images/products/ROMY85SUE_035099_SIDE.webp" alt="">
            <img src="images/products/THANDI100CCL_020005_SIDE.webp" alt="">
            <img src="images/products/ALODIEFLATMNA_OO0022_SIDE.jpg" alt="">
          </div>
          <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
          </div>
        </div>
      </section>
    </div>

    <?php
      require "footer.php";
     ?>
  </body>

  <script type="text/javascript">
    autoSlide();
  </script>

</html>

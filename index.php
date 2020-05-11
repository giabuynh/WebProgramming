<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jimmy Choo | Luxury Shoes</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <script type="text/javascript" src="script/home.js"></script>
  </head>
  <body class="full-heigh-grow">
    <div class="container">
      <header class="main-header">
        <a href="#" class="brand-logo"> <img src="images/logo.svg" alt="Logo" height="60px"> </a>
        <nav class="main-nav">
          <ul>
            <li> <a href="#">Home</a> </li>
            <li> <a href="#">Products</a> </li>
            <li> <a href="#"> <?php printSVG("images/icon-search.svg"); ?> </a> </li>
            <li> <a href="#"> <?php printSVG("images/icon-login.svg"); ?> </a> </li>
            <li> <a href="#"> <?php printSVG("images/icon-cart.svg"); ?> </a> </li>
          </ul>
        </nav>
      </header>

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

    <footer>
      <div class="call-for-action">
        <p class="title">SIGN UP FOR JIMMY CHOO UPDATES</p>
        <p class="subtitle">Be the first to discover our lastest collections, events and news</p>
        <form class="collect-email" action="index.php" method="post">
          <input class="inp" type="text" name="email" value="" placeholder="Enter your email address">
          <span class="messages"></span>
          <input class="btn" type="button" name="btn-signup" value="SIGN UP">
        </form>
      </div>
      <div class="footer-nav">

      </div>
    </footer>
  </body>

  <script type="text/javascript">
    autoSlide();
  </script>

  <?php
    function printSVG($src) {
      $svg_file= file_get_contents($src);
      echo $svg_file;
    }
   ?>

</html>

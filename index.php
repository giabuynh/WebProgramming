<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Jimmy Choo | Luxury Shoes</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link rel="stylesheet" href="css/index.css" type="text/css">
  </head>
  <body class="container full-heigh-grow">
    <header class="main-header">
      <a href="#" class="brand-logo"> <img src="images/logo.svg" alt="Logo" height="60px"> </a>
      <nav class="main-nav">
        <ul>
          <li> <a href="#">Home</a> </li>
          <li> <a href="#">Products</a> </li>
          <!-- <li> <a href="#"> <img src="images/icon-search.svg" alt="search" width="20px"> </a> </li> -->
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
        <div class="bestsellers-obj">
          <img src="images/icon-left.svg" alt="">
          <img src="images/HAWAIIFCLF_081071_SIDE.webp" alt="">
          <img src="images/RAY65SPT_000074_SIDE.webp" alt="">
          <img src="images/ROMY85SUE_035099_SIDE.webp" alt="">
          <img src="images/icon-right.svg" alt="">
        </div>
      </div>
      <div class="call-to-action">

      </div>
    </section>
  </body>

  <?php
    function printSVG($src) {
      $svg_file= file_get_contents($src);
      echo $svg_file;
    }
   ?>

</html>

<?php
  session_start();
  $signin = 'signin.php';
  if ($_SESSION && $_SESSION["user"] != null) $signin = 'account.php';
 ?>

<header class="main-header">
  <a href="index.php" class="brand-logo"> <img src="images/logo.svg" alt="Logo" height="60px"> </a>
  <nav class="main-nav">
    <ul>
      <li> <a href="index.php">Home</a> </li>
      <li> <a href="products.php">Products</a> </li>
      <li> <a href="#"> <?php printSVG("images/icon-search.svg"); ?> </a> </li>
      <li> <a href="<?php echo $signin ?>"> <?php printSVG("images/icon-login.svg"); ?> </a> </li>
      <li> <a href="#"> <?php printSVG("images/icon-cart.svg"); ?> </a> </li>
    </ul>
  </nav>
</header>

<?php
  function printSVG($src) {
    $svg_file= file_get_contents($src);
    echo $svg_file;
  }
 ?>

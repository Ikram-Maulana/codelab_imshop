<!DOCTYPE html>
<html lang="en">

<head>
  <meta author="Ikram Maulana | 1930511075">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cart - Toko Handphone</title>

  <!-- Jquery mobile-->
  <link rel="stylesheet" href="assets/css/jquery.mobile-1.4.5.css" />
  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/js/jquery.mobile-1.4.5.js"></script>

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

  <!-- Custom style for this template -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div data-role="page">
    <div data-role="header">
      <h1 class="cart">My Cart</h1>
      <div class="ui-nodisc-icon ui-alt-icon">
        <button class="ui-btn-left ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-carat-l back"
          onclick="window.location.href='home.php'">Back</button>
      </div>
    </div>
    <div data-role="content" class="ui-content home" id="cart">
      <ul data-role="listview">
        <li>
          <img src="assets/img/iphone12.jpg" id="img-film">
          <h2 id="hp">Iphone 12</h2>
          <p id="harga">IDR 1.000.000</p>
          <input type="range" name="slider-1" id="slider-1" min="0" max="100" value="1" data-popup-enabled="true">
        </li>
      </ul>
      <p class="total2">Total</p>
      <p class="uang2">IDR 1.000.000</p>
      <a href="transaction.php" data-transition="fade" class="ui-btn ui-corner-all button-cart">Buy Now</a>
    </div>
  </div>
</body>

</html>
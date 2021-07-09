<?php
include "conn.php";
$query = mysqli_query($connection,"SELECT * FROM tb_barang");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta author="Ikram Maulana | 1930511075">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home - Toko Handphone</title>

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
      <h1></h1>
      <div class="ui-nodisc-icon ui-alt-icon">
        <button
          class="ui-btn-right ui-btn ui-shadow ui-corner-all ui-btn-icon-right ui-icon-user ui-btn-icon-notext users"
          onclick="window.location.href='login.php'">users</button>
      </div>
    </div>
    <div data-role="content" class="ui-content home" id="home">
      <h1 class="hellouser">Hello Ikram,</h1>
      <p class="bawahhello">Lets get something?</p>
      <div class="kotak">
        <h1 class="diskon">30% Off During <br> Covid 19</h1>
        <button class="ui-btn shopnow">Shop Now</button>
        <img src="assets/img/rain.svg" alt="rain" class="rain">
      </div>

      <!-- Produk -->
      <ul data-role="listview" data-filter="true" data-filter-placeholder="Search phone..." data-inset="true">
        <?php foreach($query as $b): ?>
        <li>
          <img src="assets/img/<?= $b['gambar']; ?>" id="img-film">
          <h2 id="hp"><?= $b['nama_barang']; ?></h2>
          <p id="harga">IDR <?= $b['harga']; ?></p>
          <button class="ui-btn-right ui-btn ui-shadow ui-corner-all homie"
            onclick="window.location.href='detail.php?id_barang=<?= $b['id']; ?>'">Detail</button>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
    <div data-role="footer">
      <div data-role="navbar">
        <ul>
          <li><a href="#home" data-icon="home" class="ui-btn-active" id="homee">Home</a></li>
          <li><a href="wishlist.php" data-icon="heart" id="homee">Wishlist</a></li>
          <li><a href="cart.php" data-icon="shop" id="homee">Cart</a></li>
        </ul>
      </div><!-- /navbar -->
    </div><!-- /footer -->
  </div>
</body>

</html>
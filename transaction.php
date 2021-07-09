<!DOCTYPE html>
<html lang="en">

<head>
  <meta author="Ikram Maulana | 1930511075">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Toko Handphone</title>

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
        <button class="ui-btn-left ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-carat-l back"
          onclick="window.location.href='cart.php'">Back</button>
      </div>
    </div>
    <div data-role="content" class="ui-content auth">
      <h1 class="hey">Payment <br>Form</h1>
      <p class="bawahhey">Fill the form below to proceed payment</p>
      <div class="container">
        <label for="textinput-4" class="ui-hidden-accessible">Name:</label>
        <input type="text" name="textinput-4" id="textinput-4" placeholder="Name">
        <label for="textinput-4" class="ui-hidden-accessible">Phone:</label>
        <input class="pw" type="text" data-clear-btn="false" name="password-1" id="password-1" placeholder="Phone">
        <label for="textinput-4" class="ui-hidden-accessible">Email:</label>
        <input type="text" name="textinput-4" id="addr" placeholder="Email">
        <label for="textinput-4" class="ui-hidden-accessible">Address:</label>
        <input type="text" name="textinput-4" id="addr" placeholder="Address">
        <div class="ui-field-contain">
          <label for="jpaket" class="ui-hidden-accessible">Jenis Paket</label>
          <select name="jpaket" id="jpaket" data-mini="true">
            <option value="">Jenis Paket</option>
            <option value="1day">1 Hari Sampai</option>
            <option value="reguler">Reguler</option>
            <option value="kargo">Kargo</option>
          </select>
        </div>
      </div>
      <p class="total">Total</p>
      <p class="uang">IDR 1.000.000</p>
      <a href="success.php" data-transition="fade" class="ui-btn ui-corner-all button-pay">Buy Now</a>
    </div>
  </div>
</body>

</html>
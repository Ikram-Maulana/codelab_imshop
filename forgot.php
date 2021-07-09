<!DOCTYPE html>
<html lang="en">

<head>
  <meta author="Ikram Maulana | 1930511075">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password - Toko Handphone</title>

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
          onclick="window.location.href='home.php'">Back</button>
      </div>
    </div>
    <div data-role="content" class="ui-content auth">
      <h1 class="hey">Reset <br>Password.</h1>
      <p class="bawahhey">Enter your email address to request a password reset</p>
      <div class="container">
        <label for="textinput-4" class="ui-hidden-accessible">Email:</label>
        <input type="text" name="textinput-4" id="textinput-4" placeholder="Email">
      </div>
      <a href="login.php" class="back">Back to signin?</a>
      <a href="#" data-transition="fade" class="ui-btn ui-corner-all button-forgot">Send new password</a>
    </div>
  </div>
</body>

</html>
<!DOCTYPE html>
<html>
<center>
  <head>
    <title>Welcome to the E-register prototype</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  body {
  margin: 0;
  }
  header {
    padding: 25px;
    margin: 0;
    color: black;
    background-color: #316A9C;
    text-align: left;
  }
  footer {
    text-align: center;
    background-color: orange;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 12px;
    color: black;
    background-color: #316A9C;
  }
  </style>
</head>
<body>
  <link rel="icon" href="https://www.vosadvies.nl/wp-content/uploads/2016/09/nl_thomasvisch_windesheim.png">
  <header>
    <img src="https://www.windesheim.nl/Images/Windesheim/windesheim-logo.png" align="left" />
    <h2 align="left">E-register prototype</h2>
  </header>

  <?php require(APP_PATH . '/routes.php'); ?>

  <footer>
      <br><br>
      <hr>
      &copy; 2018 - Team 02 -prototype E-register
    </hr>
  </footer>
</body>
</center>
</html>

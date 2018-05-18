
<html>
<body>
<h1>E-register</h1>
<form action="https://www.windesheimflevoland.nl/">
    <input type="submit" value="Terug naar de homepagina" />
</form>
<div class="loginmodal-container">
    <form method="post" action="">
        Vul hier uw email in: <br>
        <input type="text" name="email" required placeholder="email" maxlength="40"> <br>
        Vul hier uw wachtwoord in:<br>
        <input type="password" name="wachtwoord" required placeholder="wachtwoord" maxlength="25"><br>
        <input type="submit" class="login loginmodal-submit" value="login">
    </form>
</body>
</html>

<?php
if (isset($_POST['email'])) {

if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $_POST['email'])) {
  echo "onjuiste email address.";
} }


?>

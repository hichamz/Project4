<!DOCTYPE html>

<html>

<link rel="stylesheet" href="bootstrap-4.1.0-dist/css/bootstrap.css">

<title> <h1>WhatStudy Login </h1></title>
<body>
<div class="jumbotron text-center">
    <img src="bootstrap-4.1.0-dist/pictures/windesheim_logo.gif" style="width:30%;">
</div>
    <div class="container"">
        <div class="col-sm-4" style="position:fixed; right: 30px">
            <h1>E-Register </h1>
            <p><form method="post" action="http://localhost:63342/webdevelopment/whatstudy/index.php?action=login">
                    Vul hier uw username in:<br>
                    <input type="text" name="username"><br>
                    Vul hier uw wachtwoord in: <br>
                    <input type="password" name="password"><br>
            <p>
                <input type="submit" value="login" class="btn btn-success">
            </p>
            </form>
        </div>
    </div>

    <img src="bootstrap-4.1.0-dist/pictures/windesheim.png" style="width:40%; position: fixed;left: 100px">
</body>
</html>

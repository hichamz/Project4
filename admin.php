<!DOCTYPE html>
<html>

<link rel="stylesheet" href="bootstrap-4.1.0-dist/css/bootstrap.css">

<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-fixed-top">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php?controller=home&action=welcome">Home</a></li>
        <li class="nav-item active">
            <a class="nav-link" href="index.php?controller=products&action=showall"></a></li>
        <li class="nav-item active">
            <a class="nav-link" href="index.php?controller=email&action=show"></a></li>
    </ul>

</nav>

<img src="bootstrap-4.1.0-dist/pictures/windesheim_logo.gif" style="width:20%;">
<br/>

<img src="bootstrap-4.1.0-dist/pictures/homepagina.png" style="width:100%;">
<br/>
<center>
    <div class="container" style="background-color: #D7A500;   width: 500px; height: 300px; position:fixed; left: 400px">
        <div class="col-sm-8" style="position: center; margin-top:80px;     color: #ffffff; size: letter">
            <form method="post" action="http://localhost:63342/webdevelopment/whatstudy/index.php?action=login">
                <h1> Studentonderhoud<br>
                </h3>

            </form>
        </div>
    </div>
</center>
<center>
    <div class="container" style="background-color: #d756d6;   width: 500px; height: 300px; position:fixed; left: 900px">
        <div class="col-sm-8" style="position: relative; margin-top:80px;     color: #ffffff; size: letter">
            <form method="post" action="http://localhost:63342/webdevelopment/whatstudy/index.php?action=login">
                <h1> Moduleonderhoud<br>
                </h3>

            </form>
        </div>
    </div>
</center>


</body>
</html>

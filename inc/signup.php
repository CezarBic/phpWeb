<?php
require '../cont/conn.php';
require '../cont/error.php';
?>
<!DOCTYPE html>
<html>
<title>Contact me</title>
<head>
    <meta name="vieport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2/dist/jquery.min.js"></script>
    <script src="./main.js"></script>
    <link href="../css/style.css" rel="stylesheet">

</head>
<body>
<div class="containerAbout">
    <div class="boxAbout">
        <div class="iconAbout">
            <a class="aAbout" href="../index.php">
                <img class="logoAbout" src="../css/home.png">
            </a>
        </div>

        <div class="boxAbout">
            <div class="iconAbout">
                <a class="aAbout" href="contact.php">
                    <img class="logoAbout" src="../css/contact.png">
                </a>
            </div>
        </div>

        <div class="boxAbout">
            <div class="iconAbout">
                <a class="aAbout" href="portfolio.php">
                    <img class="logoAbout" src="../css/portfolio.png">
                </a>
            </div>
        </div>


        <div class="boxAbout">
            <div class="iconAbout">
                <a class="aAbout" href="about.php">
                    <img class="logoAbout" src="../css/about.png">
                </a>
            </div>
        </div>
    </div>
    <div class="boxGoogle">
        <div class="iconGoogle">
            <a class="" href="http://www.google.com">
                <img class="logoGoogle" src="../css/google.png">
            </a>
        </div>
    </div>
    <div class="boxGoogle">
        <div class="iconGoogle">
            <a class="" href="http://www.yahoo.com">
                <img class="logoGoogle" src="../css/yahoo.png">
            </a>
        </div>
    </div>
    <div class="boxGoogle">
        <div class="iconGoogle">
            <a class="" href="http://www.facebook.com">
                <img class="logoGoogle" src="../css/facebook.png">
            </a>
        </div>
    </div>

</div>
</div>
<br>
<h1>Sign up form</h1>
<form action="../cont/signup.php" method="post">
<div class="containercf" action="" method="post">
    <div align="center" class="containercf" >

        <div class="div">

            <label><input type="text" name="name" placeholder="Your name" id="name"></label>
        </div>

        <div class="div">

            <label><input type="text" name="username" placeholder="Choose username" id="username"></label>
        </div>

        <div class="div">

            <label><input type="email" name="email" placeholder="Your e-mail" id="email"></label>

        </div>

        <div class="div">

            <label><input type="password" name="password" placeholder="Choose password" id="password"></label>

        </div>

        <div class="div">

            <label><input type="password" name="repeatPassword" placeholder="Repeat password" id="repeatPassword"></label>

        </div>


        <button type="submit" class="submit" name="signup-submit">Sign up</button>

    </div>

</div>


</form>
</body>
<br><br><br><br><br><br><br><br><br><br><br><br>
<p>Created by Cezar Bican </p>
</html>

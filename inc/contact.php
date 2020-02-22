<?php

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
<h1>Contact me</h1>
<form class="containerc" action="../cont/contact.php" method="post">
<div align="center" class="containerc" >

    <div class="div">

        <label><input type="text" name="name" placeholder="Your Name" class="name"></label>
    </div>

    <div class="div">

        <label><input type="text" name="subject" placeholder="Subject" class="subject"></label>
    </div>

    <div class="div">

        <label><input type="email" name="mail" placeholder="Your E-mail" class="email"></label>

    </div>



    <textarea style="overflow:auto;resize:none" rows="13" cols="20" class="text" name="message"></textarea><br>
    <button name="submit-mail" type="submit" class="submit">Send</button>

</div>
<div>

</div>

</form>
</body>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script type="text/javascript">


</script>
<p>Created by Cezar Bican </p>
</html>
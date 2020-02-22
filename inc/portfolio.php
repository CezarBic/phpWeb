<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<title>About me</title>
<head>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
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
<div class="port0">

    <div class="port1">
        <h2 class="hi">Projects</h2>

        <a href="../pro/game.php" class=""><h3>X & O Game</h3></a>
        <a href="../car" class=""><h3>Car moving</h3></a>
        <a href="book.php" class=""><h3>Book a table</h3></a>

    </div>
    <div class="port3">
        <h2 class="hi">To access booking reservation login</h2>
        <form class="form" action="../cont/login.php" method="post">
            <input type="text" id="user" name="usr" placeholder="Username" >
            <input type="password" id="password" name="pwp" placeholder="Password" >
            <br>
            <button type="submit" name="login" class="submit2" id="login">Login</button>
            <button type="submit" class="submit2" id="s"><a class="link" href="signup.php">Sign up</a></button>
        </form>
    </div>
</div>
</body>
<br><br>
<p>Created by Cezar Bican </p>
</html>

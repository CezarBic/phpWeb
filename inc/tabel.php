<?php
require '../cont/conn.php';
require '../cont/tabeldata.php';




session_start();
if(isset($_SESSION['usernameUser'])){
    echo "<h3>Welcome ".$_SESSION['usernameUser']."</h3>";
}



?>
<!DOCTYPE html>
<html>
<title>Table</title>
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
<h1>Table</h1>
<div align="center">
    <table border="1" style="border-collapse: collapse" class="table">
        <tr>

            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Persons</th>
            <th>Special Requests</th>
            <th>Date</th>
            <th>Edit</th>
            <th>Delete</th>


        </tr>

        <?php
        foreach ($result as $row) { ?>
            <tr>

                <td><?= $row['id']?></td>
                <td><?= $row['firstname']?></td>
                <td><?= $row['lastname']?></td>
                <td><?= $row['op'] ?></td>
                <td><?= $row['message'] ?></td>
                <td><?= $row['date'] ?></td>
                <form method="post" action="../cont/delete-edit-table.php"><td><input id="edit" name="edit" type="submit" value="Edit"></td></form>
                <form method="post" action="tabel.php"> <td><input id="delete" name="delete" type="submit" value="Delete"></td></form>

            </tr>
        <?php } ?>
<?php



?>

    </table>
    <form action="../cont/logout.php" method="post">
    <button type="submit" class="submit2" id="logout" name="logout">Logout</button>
    </form>
</div>

</body>

<p>Created by Cezar Bican </p>
</html>
<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Book a table</title>
    <link href="../css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower&display=swap" rel="stylesheet">
</head>
<body>
<div class="port2">
    <h2 class="hi">Restaurant table reservation</h2>
    <form class="form" action="../cont/table.php" method="post">
        <input id="date" name="date" type="date">


        <input type="text" id="fName" name="fname" placeholder="First Name">
        <input type="text" id="lName" name="lname" placeholder="Last Name">
        <br><br>
        <label>How manny persons</label>
        <select name="option">
            <option>1</option>
            <option>2</option>
            <option>4</option>
            <option>8</option>
            <option>10</option>
            <option>12</option>
            <option>14</option>
        </select><br><br>
        <textarea style="overflow:auto;resize:none" rows="13" cols="20" name="text" class="text2"
                  placeholder="Special requests"></textarea>

        <button name="submit-table" type="submit" class="submit2">Book</button>


    </form>
    <a id="aa"  href="portfolio.php">Back to portfolio</a>
</div>
</body>
</html>

<?php
$winner = 'n';
$box = array('','','','','','','','','');
if(isset($_POST['submit'])){
    $box[0] = $_POST["box0"];
    $box[1] = $_POST["box1"];
    $box[2] = $_POST["box2"];
    $box[3] = $_POST["box3"];
    $box[4] = $_POST["box4"];
    $box[5] = $_POST["box5"];
    $box[6] = $_POST["box6"];
    $box[7] = $_POST["box7"];
    $box[8] = $_POST["box8"];

   if(($box[0] == 'x'&& $box[1] == 'x'&& $box[2] == 'x') || ($box[3] == 'x'&& $box[4] == 'x'&& $box[5] == 'x')||($box[6] == 'x'&& $box[7] == 'x'&& $box[8] == 'x')
   || ($box[0] == 'x'&& $box[3] == 'x'&& $box[6] == 'x') || ($box[1] == 'x'&& $box[4] == 'x'&& $box[7] == 'x') || ($box[2] == 'x'&& $box[5] == 'x'&& $box[8] == 'x')
   || ($box[0] == 'x'&& $box[4] == 'x'&& $box[8] == 'x') || ($box[2] == 'x'&& $box[4] == 'x'&& $box[6] == 'x')){

      if($winner = 'x'){
           print('<h1>X WINS</h1>');
       }

   }

    $blanc = 0;
    for($i = 0; $i <= 8; $i++){
        if($box[$i] == '' ){
            $blanc = 1;
        }
    }
    if($blanc == 1 && $winner == 'n'){

        $i = rand() % 8;

        while ($box[$i] !=''){
            $i = rand() % 8;
        }
        $box[$i] ='o';
        if(($box[0] == 'o'&& $box[1] == 'o'&& $box[2] == 'o') || ($box[3] == 'o'&& $box[4] == 'o'&& $box[5] == 'o')||($box[6] == 'o'&& $box[7] == 'o'&& $box[8] == 'o')
            || ($box[0] == 'o'&& $box[3] == 'o'&& $box[6] == 'o') || ($box[1] == 'o'&& $box[4] == 'o'&& $box[7] == 'o') || ($box[2] == 'o'&& $box[5] == 'o'&& $box[8] == 'o')
            || ($box[0] == 'o'&& $box[4] == 'o'&& $box[8] == 'o') || ($box[2] == 'o'&& $box[4] == 'o'&& $box[6] == 'o')){

         if  ( $winner = 'o') {
             print ('<h1>O WINS</h1>');
         }
        }

    }
    else if($winner == 'n'){
        $winner = 't';
        print ('<h1>Tied Game!</h1>');
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>X & O</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form name="game" action="game.php" method="post">
<div class="divgol"></div>
    <div>
    <?php

    for($i =0; $i <= 8; $i++){
        printf('<input class="box" type="text" name="box%s" value="%s">',$i, $box[$i]);
        if($i == 2 || $i == 5 || $i == 8){
            print('<br>');
        }
    }
    if($winner == 'n') {
        print('<input class="buton" type="submit" name="submit" value="PLAY">');
    }else{
        print('<input class="buton" type="button" name="submit" value="PLAY AGAIN" onclick="window.location.href=\'game.php\'">');
    }
    print('<a class="buton"  href="../inc/portfolio.php"><h3>Go back to portfolio</h3></a>');
    ?>
    </div>
</form>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    var a = $('h1');
    console.log(a);
    var div = $('.divgol');
    console.log(div);
    a.appendTo(div);
</script>
</html>

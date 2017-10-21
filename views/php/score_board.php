<?php
$scores = array();
$f = fopen('../db/scores.txt', 'r');
$i = 0;
while (($line = fgets($f)) !== false){
  $score[$i] = $line;
  $i++;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Score Board</title>
</head>
<body>
 <div class="score1"> <?php echo score[0] ?></div>
 <div class="score2"> <?php echo score [1] ?></div>
 <div class="score"> <?php echo score[2] ?></div>
 <div class="score"> <?php echo score[3] ?></div>
 <div class="score"> <?php echo score[4] ?></div>
 <div class="score"> <?php echo score[5] ?></div>
 <div class="score"> <?php echo score[6] ?></div>
 <div class="score"> <?php echo score[7] ?></div>
 <div class="score"> <?php echo score[8] ?></div>
 <div class="score"> <?php echo score[9] ?></div>


</body>
</html>
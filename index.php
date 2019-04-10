<?php

# hi there don't touch anything thanks
$name = "Burns Vaughan";
$sentence = 'a crisp and clean code who is incredibly cool';

$sentenceComplete = str_shuffle("{$name} is {$sentence}");

$x = "John";
$x .= " Doe";



?>


<html>

<body>
    <?php 
    echo $sentenceComplete;
    ?>

    <?php echo 3* 12 ?>

    <?php echo $x ?>

</body>

</html>


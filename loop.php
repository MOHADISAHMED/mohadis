<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $array=["web development","Graphic designing","Mobile application","Full stack"];
      echo $array [3]. "<br>"
    ?>
    <ul>
        <?php
        for($i=0 ; $i<count($array); $i++){
        ?>    
    <li><?php echo$array[$i]?></li>
    <?php 
        }
   ?>
    </ul>
</body>
</html>
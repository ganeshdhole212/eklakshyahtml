<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=40;
    $b=50;
   
    $third = $a;  
    $a = $b;  
    $b = $third;  
    echo "After swapping:<br><br>";  
    echo "a =".$a."  b=".$b;  
    ?>  
</body>
</html>
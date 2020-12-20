<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $number1=$_GET["number1"];
    $number2=$_GET["number2"];
    $number3=$_GET["number3"];
    if ($number1=='' && $number2=='' && $number3=='' ){
    ?>
    <form action="greatest.php" method="get">
    <input type="text" name="num1" placeholder="Enter number 1"><br>
    <input type="text" name="num2" placeholder="Enter number 2"><br>
    <input type="text" name="num3" placeholder="Enter number 3"><br><br>
    <input type="submit" value="submit"><br><br>
    </form>
    <?php }?>
    <?php  
    if($number1>$number2 && $number1>$number3)
    {
        echo "greatest number is ",$number1;
    } 
    else if($number2>$number1 && $number2>$number3)
    {
        echo "greatest number is ",$number2;
    }
    else
    {
        echo "greatest number is ",$number3;
    }
    ?>
</body>
</html>
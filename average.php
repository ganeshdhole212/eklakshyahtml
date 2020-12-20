<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    $num3=$_GET["num3"];
    if ($num=='' && $num2=='' && $num3=='' ){
    ?>

    <form action="average.php" method="get"> 
    <input type="text" name="num1" ><br>
    <input type="text" name="num2" ><br>
    <input type="text" name="num3" ><br>
    <input type="submit" value="Grade check">
    </form>

    <?php } ?>
    
    <?php 
    
    $sum=$num1+$num2+$num3;
    echo "<br>sum is: ",$sum;
    $avg=$sum/3;
    echo "<br>";
    if($avg>90){
        echo"Grade of student is A+";
    }
    else if($avg>80&&$avg<=90){
        echo"Grade of student is B";
    }
    else if($avg>70&&$avg<=80){
        echo"Grade of student is C";
    }
    else{
        echo"Grade of student is F";
    } 
    ?>   
</body>
</html>

</body>
</html>
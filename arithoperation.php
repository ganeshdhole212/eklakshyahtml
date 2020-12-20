<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $n1=$_GET["n1"];
    $n2=$_GET["n2"];
    $oper=$_GET["oper"];
    if ($n1=='' && $n2==''){
    ?>
    <form action="arithoperation.php" method="get"> 
    Num1<input type="number" name="num1"><br>
    Num2<input type="number" name="num2"><br>
    operation<input type="text" name="oper"><br>
    <input type="submit" value="submit">
    </form>
    <?php } ?>
    <?php
        
             if($oper=='+'){
                $result=$n1+$n2;
                  echo"Addition of two number is : ",$result;
             }
             if($oper=='-'){  
                 $result=$n1-$n2;
                echo "Subtraction  of two number is : ",$result;
             }
             if($oper=='*'){
                $result=$n1*$n2;
                echo"multiplication of two number is : ",$result;
             }
             if($oper=='/'){
                 $result=$n1/$n2;
                 echo"Division of two numberis : ",$result;
             }
             
    ?>
</body>
</html>
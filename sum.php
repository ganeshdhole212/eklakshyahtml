<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
     $number=$_GET["number"];
    if($number==''){?>
        <form action="sum.php" method="get">
        <input type="text" name="num" placeholder="number">
        <input type="submit" value="submit">
        </form>

    <?php } ?>

    <?php 
        $rem=0;
        
        for ($i =0; $i<=strlen($number);$i++)  
        {  
         $rem=$number%10;  
          $sum = $sum + $rem;  
          $num=$num/10;  
         }  
         echo "Sum of digit is: $sum";
    ?>    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $select=$_GET["select"];
    if($select==''){
    ?>
       
    <form action="environment.php" method="get">
    <select name="select">
	<option>select</option>
	<option>Sunny</option>
    <option>Windy</option>
	<option>Cold</option>
	<option>Rainy</option>
    </select>
    <input type="submit" value="submit">   
    </form>

    <?php } ?>

    <?php
      switch($select){
        
        case 'Sunny';
            echo"This environment is Sunny";
            break; 
        case 'Windy';
            echo"This environment is Windy";
            break;
        case 'Cold';
            echo"This environment  is Cold";
            break; 
        case 'Rainy';
            echo"This environment is Rainy";
            break;          
      } 
    ?>    
</body>
</html>
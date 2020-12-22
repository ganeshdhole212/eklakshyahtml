<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    class Product{
        public $brand;
        public $price;
        public $quantity;


    function __construct($brand,$price,$quantity)
    {
        $this->brand=$brand;
        $this->price=$price;
        $this->quantity=$quantity;
    }
    function totalCost()
    {
        echo ( $this->price * $this->quantity),"<br>";
    }
    }
    
    class Laptop extends Product{
       public $accessories=array("charger","earphone","connector");

    function showAccessories(){
        for ($i=0; $i <count($this->accessories) ; $i++) { 
            echo "accessories are:" . $this->accessories[$i],"<br>";
        }
    }

    }
    $prod=new Laptop("hp",50000,30);
    $prod-> totalCost();
    $prod-> showAccessories();

    $prod1=new Laptop("apple",500000,3);
    $prod1-> totalCost();
    $prod1-> showAccessories();
    
    ?>
</body>
</html>
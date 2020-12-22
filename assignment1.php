<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class Mobile{
        public $brand;
        public $price;
        public $model;
        public static $accessories = array("charger","earphone");

        public function __construct($brand,$price,$model){
            $this->brand =$brand;
            $this->price =$price;
            $this->model =$model;
        }
  
        public function __destruct(){
            echo "close";
        }
        function printDetails(){
            echo $this->brand,"<br>";
            echo $this->price,"<br>";
            echo $this->model,"<br>";
        }
        public function showDiscountedprice($amount){
            echo "discount ", $this->price-$amount,"<br>";
        }

    }
    $mob = new Mobile("realme",10300,"c15");
    $mob->printDetails();
    $mob->showDiscountedprice(200);
?>
</body>
</head>


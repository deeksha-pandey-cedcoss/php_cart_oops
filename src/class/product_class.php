<?php
// include_once "./detail/product.php";
// product session array
$_SESSION["products"] =array (
    "Basket Ball"=> array("id"=> 101, "name"=> "Basket Ball","image"=>"../images/basketball.png", "price"=> 150),
    "Football"=>  array("id"=> 102, "name"=> "Football", "image"=> "../images/football.png", "price"=> 120 ),
    "Soccer"=>  array("id"=> 103, "name"=> "Soccer", "image"=> "../images/soccer.png", "price"=> 110 ),
    "Table Tennis"=>   array("id"=> 104, "name"=> "Table Tennis", "image"=> "../images/table-tennis.png", "price"=> 130),
    "Tennis"=>  array("id"=> 105, "name"=> "Tennis", "image"=> "../images/tennis.png", "price"=> 100)
  ); 
  if(!isset($_SESSION["products"]))
{
   $_SESSION["products"]=$products;
}
// product seession class
class products{
    public $products;
    public function __construct($products){
        $this->products=$products;
    }
    public function product_return(){
        return $this->products;
    }
}

?>

            
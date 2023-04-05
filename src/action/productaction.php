<?php
// product object
if(isset($_SESSION['products']))
{
   $product_new=new products($_SESSION['products']);
   $arr=$product_new->product_return();
   $i=0;
   foreach($arr as $key=>$value)
   { 
      echo "<div id='product-101' class='product'>";
      echo " <img src='".$value['image']."'>";
      echo "<h3 class='title'><a href='#'><h3>".$value['name']."</a></h3>";
      echo "<span>Price: $".$value['price'].".00</span>" ;
      echo "<form action='#' method ='post'>";
      echo "<button type='button' class='add-to-cart' id='$key'onclick='addtocart(this.id)' value='Add to cart'>Add to cart</button>";
      echo " <input type='hidden' value='".$key."' name='submitvalue' ></form></div>";
         
   $i++;
   }
}

?>
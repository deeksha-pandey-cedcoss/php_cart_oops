<?php
session_start();
error_reporting(0);
include_once "../detail/product.php";
include_once "../class/product_class.php";
include_once "../detail/cartdata.php";
// cart class
class cart{
    public $cart;
    public function __construct($cart){
        $this->cart=$cart;
    }
    // add to cart function
    function addToCart($id){
        if (isset($this->cart[$id])) {
            $this->cart[$id]['price'] += ($this->cart[$id]['price'] / $this->cart[$id]['quantity']) * 1;
            $this->cart[$id]['quantity'] += 1;

        } else {
            $this->cart[$id] = array(
                'name' => $_SESSION['products'][$id]['name'],
                'image' => $_SESSION['products'][$id]['image'],
                'quantity' => 1,
                'price' => $_SESSION['products'][$id]['price']
            );
        }
    }
    // remove item from cart
    function remove($id){
        unset($this->cart[$id]);
         
    }
    // increase quantity by one in cart
    function increase_quantity($id){
       
        $this->cart[$id]['price'] +=($this->cart[$id]['price']/$this->cart[$id]['quantity'])* 1;
        $this->cart[$id]['quantity']+=1;
    }
    // decrease quantity by 1 in cart
    function decrease_quantity($id){
        $this->cart[$id]['price'] -=($this->cart[$id]['price']/$this->cart[$id]['quantity']) * 1;
        $this->cart[$id]['quantity']-=1;
        if($this->cart[$id]['quantity']==0){
            unset($this->cart[$id]);
        }
    }
    // empty the cart
    function empty(){
        unset($this->cart);
    }
    // return the cart
    function cart_return(){
        return $this->cart;
    }
}


?>
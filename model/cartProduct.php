<?php

class CartProduct
{
    public $shopId;
    public $name;
    public $price = 0;
    public $quantity = 0;
    public $total = 0;

    //Constructor for ease of use.
    public __construct($shopId, $name, $price, $qty)
    {
        $this->shopId = $shopId;
        $this->name = $name;
        $this->price = $price;
        $this->quantity += $qty;
        $this->total = $price * $qty;
    }
}

?>
<?php

class CartProduct
{
    public $Name;
    public $Price = 0;
    public $Quantity = 0;
    public $Total = 0;

    //Constructor for ease of use.
    public __construct($name, $price, $qty)
    {
        $Name = $name;
        $Price = $price;
        $Quantity += $qty;
        $Total = $price * $qty;
    }
}

?>
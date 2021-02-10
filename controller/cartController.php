<?php

include_once "../model/cartProduct.php";
include_once "../model/shopProducts.php";

$cartProducts=[];
$grandTotal=0;

if(count($_COOKIE) <= 1) //Empty cookie still contains a session id
{
  echo '<p>There is nothing in the cart.</p>';
  return;
}

ksort($_COOKIE);

foreach($_COOKIE as $product => $qty)
{
  if($product != "PHPSESSID")
  {
    storeToCart($product, $qty);
  }
}

//View and totals
foreach($cartProducts as $product)
{
  echo '
  <div class="row">
    <div class="col-2"></div>
    <div class="col-sm-8">
      <div class="row">
        <div class="col-sm-2">
          <img src="'.$GLOBALS["productImages"][$product->shopId]["src"].'">
        </div>
        <div class="col">
          <h5>'. $product->name .'</h5>
          <h6>$'. number_format($product->price, 2, '.', ',') .'</h6>
          <p>Qty: '. $product->quantity .'</p>
          <h5>Total: $'. number_format($product->total, 2, '.', ',') .'</h5>
          <button type="button" class="btn btn-danger" id="'.$product->shopId.'" onclick="removeProduct(this)">Remove</button>
        </div>
      </div>
      <br>
    </div>
    <div class="col-2"></div>
  </div>';

  $grandTotal += $product->total;
}

//Grand total
echo '
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">
    <h1>Total: $'.$grandTotal.'</h1>
    <br>
  </div>
  <div class="col-2"></div>
</div>
';

function storeToCart($product, $qty)
{
  $stringArray = str_split($product);
  $index = $stringArray[count($stringArray)-1]; //Not the most elegant way to get item index...
  echo '<br>';
  
  array_push($GLOBALS["cartProducts"], new CartProduct($index, $GLOBALS["products"][$index]["name"], $GLOBALS["products"][$index]["price"], $qty));
}

?>
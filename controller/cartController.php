<?php

$cartProducts;
$grandTotal;

echo '<br>';

if(count($_COOKIE) <= 1) //Empty cookie still has a session id
{
  echo '<p>There is nothing in the cart.</p>';
  return;
}

// for($i=0;$i<count($_COOKIE);++$i)
// {
//   setcookie("nameProduct".$i, "", time() - 3600);
//   setcookie("qtyProduct".$i, "", time() - 3600);
//   setcookie("priceProduct".$i, "", time() - 3600);
// }

ksort($_COOKIE);
print_r($_COOKIE);

//Get data from cookies
var_dump($_COOKIE);
foreach($_COOKIE as $product => $qty)
{
  storeToCart($product, $qty);
}

//View and totals
foreach($cartProducts as $product)
{
  echo '
  <div class="row">
    <div class="col-2"></div>
    <div class="col-8">
      <div class="col-4">

      </div>
      <div class="col-8">
        <h5>'; $product->name; echo '</h5>
        <h6>$'; $product->price; echo '</h6>
        <p>Qty: '; $product->quantity; echo '</p>
        <button type="button" class="btn btn-danger" id="'.$product->shopId.'" onclick="removeProduct(this)">Remove</button>
      </div>
    </div>
    <div class="col-2"></div>
  </div>';

  $grandTotal += $product->total;
}

echo '
<div class="row">
  <div class="col-2"></div>
  <div class="col-8">
    <h6>Total: '.$grandTotal.'</h6>
  </div>
  <div class="col-2"></div>
</div>
';

function storeToCart($product, $qty)
{
  $index = $product[count($product)-1]; //Not the most elegant way to get item index...
  array_push($cartProducts, new CartProduct($index, $products[$index]["name"], $products[$index]["price"], parseInt($qty)));
}

?>
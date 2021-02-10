<?php

echo '<br>';

if(count($_COOKIE) == 0)
{
  echo '<p>There is nothing in the cart.</p>';
  return;
}


// for($i=0;$i<count($_COOKIE);++$i)
// {
//   echo $_COOKIE."<br>";
// }

ksort($_COOKIE);

print_r($_COOKIE);


//Get data from cookies
// for($i=0;$i<count($_COOKIE);++$i)
// {
//   echo '
//   <div class="row">
//     <div class="col-2"></div>
//     <div class="col-8">
//       <div class="col-4">

//       </div>
//       <div class="col-8">
//         <h5>'; $_COOKIE["nameProduct".$i]; echo '</h5>
//         <h6>$'; $_COOKIE["priceProduct".$i]; echo '</h6>
//         <p>Qty: '; $_COOKIE["qtyProduct".$i]; echo '</p>
//         <button type="button" class="btn btn-danger" id="'.$i.'" onclick="removeProduct(this)">Remove</button>
//       </div>
//     </div>
//     <div class="col-2"></div>
//   </div>';
// }

?>
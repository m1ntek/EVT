<?php

include_once "../model/shopProducts.php";

//Products displayed in rows of 3

//Separate k variable for the indices of each product
//without it being reset.
$k = 0;

echo '
    <div class="row">
';

for ($i = 0; $i < count($products); ++$i)
{
    //New row.
    echo '
        <div class="col-2"></div>
        <div class="col-8">
        <br>
        <div class="row">
    ';

    //Create a small gallery
    for ($j = 0; $j < 3; ++$j)
    {
        echo '
            <div class="col-4">
                <img src="' . $productImages[$k]["src"] . '" class="img-thumbnail">
                <h5 id="nameProduct'.$k.'">' . $products[$k]["name"] . '</h5>
                <h6 id="priceProduct'.$k.'">$' . number_format($products[$k]["price"], 2, '.', ',') . '</h6>
                <div class="row align-items-center">
                    <div class="col-3">
                        <label for="qtyProduct'.$k.'">Qty</label>
                    </div>
                    <div class="col-3">
                        <form action="cartController.php" method="get">
                            <input type="number" id="qtyProduct'.$k.'" name="qtyProduct'.$k.'" min="1" value="1" class="form-control" for="addProduct'.$k.'">
                        </form>
                    </div>
                </div>
                <button type="button" class="btn btn-success" id="'.$k.'" onclick="addProduct(this)">Add</button>
            </div>
        ';

        //Increment k as long as the end of the array is not reached.
        if($k != count($products) - 1) ++$k;
        else return; //Otherwise return.
    }

    echo '
        </div>
    </div>
    <div class="col-2" id="updateSection"></div>
    ';
}

//Close final div row.
echo '</div>';

?>
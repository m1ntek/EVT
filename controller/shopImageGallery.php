<?php

 // ######## please do not alter the following code ########
 $products = [
    [ "name" => "Sledgehammer", "price" => 125.75 ],
    [ "name" => "Axe", "price" => 190.50 ],
    [ "name" => "Bandsaw", "price" => 562.131 ],
    [ "name" => "Chisel", "price" => 12.9 ],
    [ "name" => "Hacksaw", "price" => 18.45 ],
];
// ########################################################

//To avoid altering above code, separate image array is created
//with matching indices.
$productImages = [
    ["src" => "../view/images/sledgehammer.png"],
    ["src" => "../view/images/axe.png"],
    ["src" => "../view/images/bandsaw.png"],
    ["src" => "../view/images/chisel.png"],
    ["src" => "../view/images/hacksaw.png"]
];

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
        <div class="row">
    ';

    for ($j = 0; $j < 3; ++$j)
    {
        echo '
            <div class="col-4">
                <img src=' . $productImages[$k]["src"] . 'class="img-thumbnail">
                <h5>' . $products[$k]["name"] . '</h5>
                <div class="row">
                    <div class="col-6">
                        <p>Qty</p>
                    </div>
                    <div class="col-6">
                        
                    </div>
                </div>
            </div>
        ';

        if($k != count($products)-1) ++$k;
        else return;
    }

    echo '
        </div>
    </div>
    <div class="col-2"></div>
    ';
}

//Close final div row.
echo '</div';

?>
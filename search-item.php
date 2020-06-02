<?php
// Array with names
$a[] = "Shirt";
$a[] = "T Shirt";
$a[] = "Western Wear";
$a[] = "Jeans";
$a[] = "Mens Winter Wear";
$a[] = "Womens Winter Wear";
$a[] = "Casual Wear";
$a[] = "Womens FootWear ";
$a[] = "Mens FootWear";
$a[] = "Sunglasses";
$a[] = "Watches";
$a[] = "Bags";
$a[] = "Hand Bags";
$a[] = "Only";
$a[] = "Veromoda";
$a[] = "Jack and Jones";
$a[] = "John Players";
$a[] = "Biba";
$a[] = "Mango";
$a[] = "Home Deco";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "" : $hint;
?>

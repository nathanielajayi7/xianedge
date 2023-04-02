<?php

if (isDebug())
    require 'config.php';

// if (isDebug()) {
//     // require("router.php");
// }

// $ROUTE = "/product/air-cargo";


$products = $db->get('products');
$services = $db->get('services');

// if (!empty($ROUTE)) {
//     include 'templates/header.php';
//     // echo $ROUTE;
//     $product = $db->where('slug', 'air-cargo')->getOne('products');
//     // var_dump($product);
//     include 'templates/product.php';
//     include 'templates/contact_us.php';
//     die();
// }


// $mysqli = new mysqli("localhost", "root", "", "test");

// print_r($products);

//this adds a nav bar to the page
include 'templates/header.php';

//this adds a hero to the page
include 'templates/hero.php';

//this adds a section to the page
include 'templates/section_1.php';

//this adds a feature section to the page
include 'templates/features.php';

//this adds a contact us section to the page
include 'templates/contact_us.php';

?>
</body>

</html>
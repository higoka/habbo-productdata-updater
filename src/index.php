<?php

ini_set('display_errors', true);
ini_set('display_startup_errors', true);

$furnidata = simplexml_load_string(
    // php has trouble parsing '&' so replace with encoded value
    str_replace('&', '&amp;', file_get_contents('resource/furnidata.xml'))
);

$productdata = simplexml_load_string(
    // same as above
    str_replace('&', '&amp;', file_get_contents('resource/productdata.xml'))
);

foreach ($furnidata->xpath('//furnitype') as $item) {
    $product = $productdata->xpath("//product[@code='{$item->attributes()->classname}']");

    if (empty($product)) {
        /**
         * UNCOMMENT THIS CODE IF YOU WANT TO ADD MISSING ITEMS TO PRODUCTDATA
         */

        // $node = $productdata->addChild('product');
        // $node->addAttribute('code', $item->attributes()->classname);
        // $node->addChild('name', $item->name);
        // $node->addChild('description', $item->description);
        // echo "added: {$item->attributes()->classname}\n";

        continue;
    }

    $product[0]->name = $item->name;
    $product[0]->description = $item->description;

    echo "updated: {$item->attributes()->classname}\n";
}

file_put_contents('resource/productdata_new.xml', $productdata->asXML());

exit('done');

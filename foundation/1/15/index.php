<?php
$products = [
    "0" => [
        "price" => 26000,
        "discount" => 20,
    ],
    "1" => [
        "price" => 5900,
        "discount" => 15,
    ],
    "2" => [
        "price" => 45000,
        "discount" => 10,
    ],
    "3" => [
        "price" => 7900,
        "discount" => 5,
    ],
    "4" => [
        "price" => 33000,
        "discount" => 15,
    ],
];

$totalPrice = 0;
$totalDiscountToProducts = 0;
$totalPriceApplyDiscount = 0;

foreach ($products as $product) {
    $totalPrice += $product['price'];
    $totalDiscountToProducts += $product['price'] * ($product['discount'] / 100);
    $totalPriceApplyDiscount += $product['price'] * ((100 - $product['discount']) / 100);
}
echo "قیمت کل محصولات : " . $totalPrice;
echo "<br />";
echo "  مبلغ کل تخفیف : " . $totalDiscountToProducts;
echo "<br />";
echo "   مبلغ کل بعد از تخفیف   :" . $totalPriceApplyDiscount;
echo "<br />";
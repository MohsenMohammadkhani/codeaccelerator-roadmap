<?php
function generateCSVFile($fileName)
{

    $products = [
        0 => [
            "title" => "pen",
            "price" => 123000,
            "stock" => 23,
            "discount" => 5,
            "seller" => "mohsen",
            "created_at" => "2012/5/6",
        ],
        1 => [
            "title" => "pencil",
            "price" => 15000,
            "stock" => 15,
            "discount" => 20,
            "seller" => "mohammad",
            "created_at" => "2022/5/6",
        ],
        2 => [
            "title" => "car",
            "price" => 63000,
            "stock" => 40,
            "discount" => 20,
            "seller" => "mohammad",
            "created_at" => "2018/7/6",
        ],
        3 => [
            "title" => "phone",
            "price" => 123000,
            "stock" => 63,
            "discount" => 5,
            "seller" => "mohsen",
            "created_at" => "2012/5/6",
        ],
        4 => [
            "title" => "laptop",
            "price" => 9600,
            "stock" => 10,
            "discount" => 15,
            "seller" => "yasin",
            "created_at" => "2007/5/6",
        ],
        5 => [
            "title" => "computer",
            "price" => 5577,
            "stock" => 244,
            "discount" => 55,
            "seller" => "maryam",
            "created_at" => "2020/5/6",
        ],
        6 => [
            "title" => "mouse",
            "price" => 98300,
            "stock" => 12,
            "discount" => 5,
            "seller" => "reza",
            "created_at" => "2005/5/6",
        ],
        7 => [
            "title" => "keyboard",
            "price" => 85300,
            "stock" => 65,
            "discount" => 35,
            "seller" => "reza",
            "created_at" => "2002/5/6",
        ],
        8 => [
            "title" => "pad",
            "price" => 85300,
            "stock" => 67,
            "discount" => 5,
            "seller" => "reza",
            "created_at" => "2002/5/6",
        ],
        9 => [
            "title" => "monitor",
            "price" => 56930,
            "stock" => 14,
            "discount" => 20,
            "seller" => "mohammad",
            "created_at" => "2007/12/6",
        ],
    ];

    header('Content-Type: text/csv');
    header("Content-Disposition: attachment; filename=$fileName.csv");
    $columns = [
        "#",
        "title",
        "price",
        "stock",
        "discount",
        "seller",
        "created_at"];
    $fp = fopen('php://output', 'wb');
    fputcsv($fp, $columns);
    foreach ($products as $key => $product) {
        fputcsv($fp, [
            "#" => $key + 1,
            ...$product
        ]);
    }
    fclose($fp);
    exit;
}

if (isset($_POST['file-name'])) {
    generateCSVFile($_POST['file-name']);
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label>نام فایل</label>
    <input type="text" name="file-name">
    <button>
        دریافت فایل
    </button>
</form>
</body>
</html>

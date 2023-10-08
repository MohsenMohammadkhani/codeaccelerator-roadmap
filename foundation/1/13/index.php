<?php

function dump($var)
{
    if (is_array($var)) {
        $out = print_r($var, true);
    } else if (is_object($var)) {
        $out = var_export($var, true);
    } else {
        $out = $var;
    }

    echo "\n<pre style='direction: ltr'>$out</pre>\n";
}

$shops = [
    1 => ["name" => "amir",
        "category" => "fast-food",
        "economic_code" => "56465"
    ],
    2 => ["name" => "mohsen",
        "category" => "cafe",
        "economic_code" => "198564"
    ],
    3 => ["name" => "reza",
        "category" => "restaurant",
        "economic_code" => "9669"
    ],
    4 => ["name" => "maryam",
        "category" => "cafe",

        "economic_code" => "8654"
    ],
    5 => ["name" => "nahid",
        "category" => "fast-food",
        "economic_code" => "6546"
    ],
    6 => ["name" => "marjan",
        "category" => "cafe",
        "economic_code" => "96998"
    ],
    7 => ["name" => "hassan",
        "category" => "restaurant",
        "economic_code" => "49999"
    ],
    8 => ["name" => "mohammad",
        "category" => "juice-shop",
        "economic_code" => "9656111"
    ],
];

$shopsCategories = array_unique(array_map(function ($shop) {
    return $shop["category"];
}, $shops));

$shopBaseOnCategory = [];
foreach ($shopsCategories as $key => $shopsCategory) {
    foreach ($shops as $key => $shop) {
        if ($shop["category"] == $shopsCategory) {
            $shopBaseOnCategory[$shopsCategory][] = $shop;
        }
    }
}
dump($shopBaseOnCategory);





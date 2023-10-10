<?php
$employees = [
    "0" => [
        "first-name" => "mohsen",
        "last-name" => "mohammadkhani",
        "ID" => "456",
        "national-code" => "786547",
        "hire-at" => "2012/2/9",
        "type-hire" => "full-time",
        "salary" => "123000",
        "organization" => "apple",
    ],
    "1" => [
        "first-name" => "reza",
        "last-name" => "mohammadi",
        "ID" => "799",
        "national-code" => "46972",
        "hire-at" => "2022/2/9",
        "type-hire" => "full-time",
        "salary" => "99000",
        "organization" => "apple",
    ],
    "2" => [
        "first-name" => "ali",
        "last-name" => "rezaei",
        "ID" => "368",
        "national-code" => "45319",
        "hire-at" => "2009/8/9",
        "type-hire" => "part-time",
        "salary" => "336000",
        "organization" => "google",
    ],
    "3" => [
        "first-name" => "hamid",
        "last-name" => "ahmadi",
        "ID" => "6693",
        "national-code" => "12994",
        "hire-at" => "2007/12/9",
        "type-hire" => "full-time",
        "salary" => "33965",
        "organization" => "google",
    ],
    "4" => [
        "first-name" => "ahmad",
        "last-name" => "jalali",
        "ID" => "36975",
        "national-code" => "12395",
        "hire-at" => "2002/7/9",
        "type-hire" => "part-time",
        "salary" => "339015",
        "organization" => "apple",
    ],
    "5" => [
        "first-name" => "sajjad",
        "last-name" => "hassani",
        "ID" => "2396",
        "national-code" => "14793",
        "hire-at" => "2009/3/12",
        "type-hire" => "full-time",
        "salary" => "2239900",
        "organization" => "google",
    ],
    "6" => [
        "first-name" => "mojtaba",
        "last-name" => "mohammadi",
        "ID" => "859645",
        "national-code" => "12444",
        "hire-at" => "2016/3/12",
        "type-hire" => "part-time",
        "salary" => "322900",
        "organization" => "google",
    ],
    "7" => [
        "first-name" => "morteza",
        "last-name" => "rahmati",
        "ID" => "22464",
        "national-code" => "336478",
        "hire-at" => "2017/8/12",
        "type-hire" => "full-time",
        "salary" => "336922",
        "organization" => "google",
    ],
    "8" => [
        "first-name" => "sadegh",
        "last-name" => "hadavi",
        "ID" => "33964",
        "national-code" => "23495",
        "hire-at" => "2018/5/14",
        "type-hire" => "full-time",
        "salary" => "122300",
        "organization" => "google",
    ],
    "9" => [
        "first-name" => "bagher",
        "last-name" => "kazemi",
        "ID" => "124777",
        "national-code" => "13884",
        "hire-at" => "2013/4/12",
        "type-hire" => "full-time",
        "salary" => "123660",
        "organization" => "apple",
    ],
];

$organizations = array_map(function ($employee) {
    return $employee["organization"];
}, $employees);


foreach ($organizations as $key => $organization) {
    mkdir($organization);
}

foreach ($employees as $employee) {
    $pathFolder = $employee['organization'] . "/" . $employee["first-name"] . "-" . $employee["last-name"];
    mkdir($pathFolder);
    $fp = fopen($pathFolder . "/" . $employee["first-name"] . "-" . $employee["last-name"] . "-" . "مشخصات" . ".json", "wb");
    fwrite($fp, json_encode($employee));
    fclose($fp);
}
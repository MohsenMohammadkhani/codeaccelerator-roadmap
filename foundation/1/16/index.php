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

$barometerMultiple = [
    "IQ" => 5,
    "general-infomation" => 3,
    "IT" => 4,
];

$candidatesMarks = [
    "0" => [
        "name" => "Mohsen Mohammadkhani",
        "IQ" => 25,
        "general-infomation" => 60,
        "IT" => 90,
    ],
    "1" => [
        "name" => "Reza Mohammadi",
        "IQ" => 68,
        "general-infomation" => 80,
        "IT" => 80,
    ],
    "2" => [
        "name" => "Mojtaba hamidi",
        "IQ" => 75,
        "general-infomation" => 85,
        "IT" => 94,
    ],
    "3" => [
        "name" => "ahmad rezaei",
        "IQ" => 82,
        "general-infomation" => 67,
        "IT" => 86,
    ],
    "4" => [
        "name" => "ali rajabi",
        "IQ" => 75,
        "general-infomation" => 36,
        "IT" => 41,
    ],
    "5" => [
        "name" => "hassan sajjadi",
        "IQ" => 57,
        "general-infomation" => 37,
        "IT" => 43,
    ],
];

$candidatesTotalMark = [];
foreach ($candidatesMarks as $candidateMarks) {
    $totalMark = $candidateMarks['IQ'] * $barometerMultiple['IQ'] + $candidateMarks['general-infomation'] * $barometerMultiple['general-infomation'] + $candidateMarks['IT'] * $barometerMultiple['IT'];
    $candidatesTotalMark [$candidateMarks['name']] = $totalMark;
}

$bestCandidate = array_keys($candidatesTotalMark, max($candidatesTotalMark));
dump($candidatesTotalMark);
echo "best candidate: " . $bestCandidate[0];
echo "<br />";
echo "score total: " . max($candidatesTotalMark);


<?php
// for run code enter `php -S localhost:8000` on terminal
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

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

$allCharactersArray = str_split("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ");
$allNumbersArray = str_split("0123456789");
$allSymbolsArray = str_split("!@#$%^&*()_+");

$charactersOnExampleStringArray = array();
$numbersOnExampleStringArray = array();
$symbolsOnExampleStringArray = array();

$exampleString = generateRandomString(20);
$exampleStringArray = str_split($exampleString);

for ($counter = 0; $counter < count($exampleStringArray); $counter++) {
    $characterOnArray = $exampleStringArray[$counter];
    if (in_array($characterOnArray, $allCharactersArray)) {
        $charactersOnExampleStringArray[] = $characterOnArray;
    } else if (in_array($characterOnArray, $allNumbersArray)) {
        $numbersOnExampleStringArray[] = $characterOnArray;
    } else if (in_array($characterOnArray, $allSymbolsArray)) {
        $symbolsOnExampleStringArray[] = $characterOnArray;
    }
}

?>

<div dir="rtl" lang="fa" style="font-size: 40px">
    <p>
        <span>رشته نمونه          </span>
        <span><?php
            echo($exampleString);
            ?></span>
    </p>
    <hr/>
    <p>
        <span>حروف داخل رشته </span>
        <span><?php
            echo implode("", $charactersOnExampleStringArray);
            ?></span>
        <br>
        <span>تعداد حروف داخل رشته </span>
        <span><?php
            echo count($charactersOnExampleStringArray);
            ?></span>
    </p>
    <hr/>

    <p>
        <span>اعداد داخل رشته </span>
        <span><?php
            echo implode("", $numbersOnExampleStringArray);
            ?></span>
        <br>
        <span> تعداد اعداد داخل رشته </span>
        <span><?php
            echo count($numbersOnExampleStringArray);
            ?></span>
    </p>
    <hr/>

    <p>
        <span>کاراکتر خاص داخل رشته </span>
        <span><?php
            echo implode("", $symbolsOnExampleStringArray);
            ?></span>
        <br>
        <span>تعداد کاراکتر خاص داخل رشته </span>
        <span><?php
            echo count($symbolsOnExampleStringArray);
            ?></span>
    </p>
    <hr/>

</div>


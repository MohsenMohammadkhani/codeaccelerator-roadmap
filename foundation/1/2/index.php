<?php
// for run code enter `php -S localhost:8000` on terminal

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

function getSpecificCharOnString($string, $index)
{
    return substr($string, $index - 1, 1);
}

$exampleString = generateRandomString(20);
$newString = "";

for ($counter = strlen($exampleString); $counter > 0; $counter--) {
    $newString .= getSpecificCharOnString($exampleString, $counter);
}
?>
<div dir="rtl" style="font-size: 25px">
    <div>
        <span>ورودی : </span>
        <span><?php echo $exampleString;?></span>
    </div>
    <div>
        <span>خروجی : </span>
        <span><?php echo $newString;?></span>
    </div>
</div>

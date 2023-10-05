<?php
// for run code enter `php -S localhost:8000` on terminal

function generateRandomString($length = 10)
{
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

$allLowerLettersArray = str_split("abcdefghijklmnopqrstuvwxyz");
$countLowerLettersArray = 0;

$allUpperLettersArray = str_split("ABCDEFGHIJKLMNOPQRSTUVWXYZ");
$countUpperLettersArray = 0;

$allLowerLetters = "";
$allUpperLetter = "";


function getSpecificCharOnString($string, $index)
{
    return substr($string, $index - 1, 1);
}

$exampleString = generateRandomString(15);
$newString = "";

for ($counter = 1;
     $counter <= strlen($exampleString);
     $counter++) {
    $char = getSpecificCharOnString($exampleString, $counter);
    if (in_array($char, $allUpperLettersArray)) {
        $allUpperLetter .= $char;
        $countUpperLettersArray++;
    } else if (in_array($char, $allLowerLettersArray)) {
        $allLowerLetters .= $char;
        $countLowerLettersArray++;
    }
}

?>

<div dir="rtl" style="font-size: 25px">
    <div>
        <span>  رشته    :  </span>
        <span><?php echo $exampleString; ?></span>
    </div>
    <hr />
    <div>
        <span> حروف بزرگ :  </span>
        <span><?php echo $allUpperLetter; ?></span>
    </div>
    <div>
        <span> تعداد حروف بزرگ :  </span>
        <span><?php echo $countUpperLettersArray; ?></span>
    </div>
    <hr />
    <div>
        <span> حروف کوچک :  </span>
        <span><?php echo $allLowerLetters; ?></span>
    </div>
    <div>
        <span> تعداد حروف کوچک :  </span>
        <span><?php echo $countLowerLettersArray; ?></span>
    </div>
</div>

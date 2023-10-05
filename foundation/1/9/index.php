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

$countWords = 0;
$countLetter = 0;
$countSpace = 0;

$file = fopen('index.txt', 'r');
while ($line = fgets($file)) {
    $line = trim($line);
    $countSpace += substr_count($line, " ");
    $wordsInLine = explode(" ", $line);
    $wordsInLine = array_filter($wordsInLine, function ($word) {
        if (!ctype_space($word)) {
            return $word;
        }
    });
    $countWords += count($wordsInLine);
    dump($wordsInLine);
    foreach ($wordsInLine as $key => $word) {
        $countLetter = $countLetter + mb_strlen(trim($word));
    }
}


?>
<div>
    <span>تعداد کلمات : </span>
    <span><?php echo $countWords; ?></span>
</div>
<div>
    <span>تعداد حروف : </span>
    <span><?php echo $countLetter; ?></span>
</div>
<div>
    <span>تعداد فاصله ها : </span>
    <span><?php echo $countSpace; ?></span>
</div>

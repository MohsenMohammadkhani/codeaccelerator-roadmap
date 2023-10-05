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

$allWordsInFile = [];
$file = fopen('index.txt', 'r');

while ($line = fgets($file)) {
    $line = trim($line);
    $wordsInLine = explode(" ", $line);
    $wordsInLine = array_filter($wordsInLine, function ($word) {
        if (!ctype_space($word)) {
            return $word;
        }
    });
    if (count($wordsInLine) == 0) {
        continue;
    }
    $allWordsInFile = [...$allWordsInFile, ...$wordsInLine];
}

$wordsRepeatArray = [];
foreach ($allWordsInFile as $key => $word) {
    if (isset($wordsRepeatArray[$word])) {
        $wordsRepeatArray[$word] = $wordsRepeatArray[$word] + 1;
        continue;
    }
    $wordsRepeatArray[$word] = 1;
}

$wordsRepeatArray = array_filter($wordsRepeatArray, function ($item) {
    if ($item > 1) {
        return $item;
    }
});
?>
<div style="font-size: 28px;">

    <?php foreach ($wordsRepeatArray as $word => $countRepeatWord) { ?>
        <div>
            <span>
                  کلمه
            </span>
            <span>
             [<?php echo $word; ?>]
            </span>
            <span>
                تکرار :
            </span>
            <span>
                <?php echo $countRepeatWord; ?>
            </span>
        </div>
    <?php } ?>
</div>
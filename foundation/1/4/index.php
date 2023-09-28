<div dir="rtl"   style="font-size: 40px">
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


    $countWords = 0;
    $countLineBiggerThanFourWords = 0;

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
        $countWords = $countWords + count($wordsInLine);

        if ($countWords > 4) {
            $countLineBiggerThanFourWords++;
        }
        ?>
        <div>
            <span><?php echo $line ?> </span>
        </div>
        <hr/>
        <?php
    }
    ?>
    <hr/>
    <div>
        <span>تعداد کلمات : </span>
        <span><?php echo $countWords; ?></span>
    </div>
    <div>
        <span>تعداد خطوط با بیشتر از ۴ کلمه:  </span>
        <span><?php echo $countLineBiggerThanFourWords; ?> </span>
    </div>

    <?php
    fclose($file);
    ?></div>
<?php

function isNumberIsPrime($number)
{
    for ($counter = 2; $counter < $number; $counter++) {
        if ($number % $counter == 0) {
            return false;
        }
    }
    return true;
}

$number = 200;
if (isset($_POST['number'])) {
    $number = $_POST['number'];
}

$numbersPrimeArray = [2, 3];
for ($counter = 4; $counter < $number; $counter++) {
    if (isNumberIsPrime($counter)) {
        $numbersPrimeArray[] = $counter;
    }
}
?>
    <div style="font-size: 28px;">
        number = <?php echo $number; ?>
        <br>
        <form method="post">
            <input placeholder="enter your number" name="number"/>
            <button>enter</button>
        </form>

        <?php foreach ($numbersPrimeArray as $value) { ?>
            <span>
                <?php echo $value; ?>
                ,
            </span>
        <?php } ?>
        <span>
    </span>
    </div>
<?php
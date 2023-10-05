<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="date" name="date-specify">
    <button> get different</button>
</form>
</body>
</html>

<?php
date_default_timezone_set('Asia/Tehran');
function getSecondOnDay()
{
    return 24 * 60 * 60;
}

$state = "روز باقیماده";
if (!$_POST["date-specify"]) {
    return;
}

$dateEntered = $_POST["date-specify"];
$dateEnteredToSecond = strtotime("$dateEntered " . Date("H:i:s"));
$currentDateToSecond = strtotime(Date("y-m-d H:i:s"));


$differentDateToSecond = $dateEnteredToSecond - $currentDateToSecond;
if ($differentDateToSecond < 0) {
    $state = " روز گذشته";
    $differentDateToSecond = -$differentDateToSecond;
}

$countDayDifferentBetweenTowDates = ceil($differentDateToSecond / getSecondOnDay());

?>
<hr/>
<div>
        <span>
            تاریخ جاری
        </span>
    <span>
            <?php echo Date("y-m-d"); ?>
        </span>
</div>
<hr/>
<div>
        <span>
            تاریخ انتخاب شده
        </span>
    <span>
            <?php echo $dateEntered; ?>
        </span>
</div>
<hr/>
<div>
        <span>
            <?php
            if ($countDayDifferentBetweenTowDates == 0) {
                echo "در همین روز هستیم";
            } else {
                echo $countDayDifferentBetweenTowDates . " " . $state;
            }
            ?>
        </span>
</div>
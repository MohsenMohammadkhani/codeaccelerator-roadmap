<?php
date_default_timezone_set('Asia/Tehran');
$currentDateTimeToSecond = strtotime(Date("y-m-d H:i:s"));
$currentDateToSecond = strtotime(Date("y-m-d 00:00:00"));
$second = $currentDateTimeToSecond - $currentDateToSecond;
?>
<span>
     تعداد ثانیه ها از ابتدای امروز :
    <?php echo $second; ?>
    ثانیه
</span>
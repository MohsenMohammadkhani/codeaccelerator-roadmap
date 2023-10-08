<?php
function showCalculatorPrice($postArray)
{
    $priceProductWithDiscount = $postArray['price'] * (100 - $postArray['discount']) / 100;
    ?>
    <div>
        <span>قیمت اصلی محصول :</span>
        <span><?php echo $postArray['price']; ?></span>
        <span>تومان</span>
    </div>
    <div>
        <span>درصد تخفیف : </span>
        <span><?php echo $postArray['discount']; ?></span>
        <span>تومان</span>
    </div>
    <div>
        <span>قیمت نهایی محصول : </span>
        <span><?php echo $priceProductWithDiscount; ?></span>
        <span>تومان</span>
    </div>
    <?php
}

?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="font-size: 25px">
<form method="POST">
    <div>
        <label>
            قمیمت محصول
        </label>
        <input type="number" name="price">
    </div>
    <br/>
    <div>
        <label>
            درصد تخفیف
        </label>
        <input type="number" name="discount">
    </div>
    <button type="submit">
        محاسبه
    </button>
</form>
<hr/>

<?php
if (count($_POST) > 0) {
    showCalculatorPrice($_POST);
}
?>
<hr/>
</body>
</html>
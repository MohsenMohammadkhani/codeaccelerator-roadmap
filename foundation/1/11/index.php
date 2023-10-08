<?php

function calculateAverageStudent()
{
    $studentName = $_POST['student-name'];
    $math = $_POST['math'];
    $physics = $_POST['physics'];
    $programming = $_POST['programming'];
    $softwareEngineering = $_POST['software-engineering'];
    $hardwareLaboratory = $_POST['hardware-laboratory'];

    $averageStudent = ($math + $physics + $programming + $softwareEngineering + $hardwareLaboratory) / 5;

    $contentFile = "نام دانشجو : $studentName  ";
    $contentFile .= "\n";
    $contentFile .= " درس ریاضی    : $math  ";
    $contentFile .= "\n";
    $contentFile .= " درس فیزیک    : $physics  ";
    $contentFile .= "\n";
    $contentFile .= " درس برنامه نویسی    : $programming  ";
    $contentFile .= "\n";
    $contentFile .= " درس مهندسی نرم افزار : $softwareEngineering  ";
    $contentFile .= "\n";
    $contentFile .= " درس  آزمایشگاه سخت افزار : $hardwareLaboratory  ";
    $contentFile .= "\n";
    $contentFile .= "  معدل دانشجو    : $averageStudent  ";


    $fileName = "$studentName.txt";
    file_put_contents($fileName, $contentFile);

}

if (count($_POST) > 0) {
    calculateAverageStudent();
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
            نام دانشجو
        </label>
        <input type="text" name="student-name" required>
    </div>
    <br/>
    <div>
        <label>
            ریاضی
        </label>
        <input type="number" name="math" min="0" max="20" required>
    </div>
    <br/>
    <div>
        <label>
            فیزیک
        </label>
        <input type="number" name="physics" min="0" max="20" required>
    </div>
    <br/>
    <div>
        <label>
            برنامه نویسی مقدماتی
        </label>
        <input type="number" name="programming" min="0" max="20" required>
    </div>
    <br/>
    <div>
        <label>
            مهندسی نرم افزار ۱
        </label>
        <input type="number" name="software-engineering" min="0" max="20" required>
    </div>
    <br/>
    <div>
        <label>
            آزمایشگاه سخت افزار
        </label>
        <input type="number" name="hardware-laboratory" min="0" max="20" required>
    </div>
    <button type="submit">
        محاسبه
    </button>
</form>
</body>
</html>
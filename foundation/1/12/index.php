<?php
ini_set('display_errors', 1);
header('Content-Type: text/html; charset=utf-8');
function getUsersFromFile()
{
    $fileName = "users.json";
    if (file_exists($fileName)) {
        return json_decode(file_get_contents($fileName));
    }
    return [];
}

function addUserToFile($post)
{
    $fileName = "users.json";
    $newUser = array(
        "نام" => $post['first-name'],
        "نام خانوادگی" => $post['last-name'],
        "شماره همراه" => $post['mobile'],
        "آدرس ایمیل" => $post['email'],
    );

    $users = getUsersFromFile();
    $users[] = $newUser;
    file_put_contents($fileName, json_encode($users, JSON_UNESCAPED_UNICODE));
}


if (count($_POST) > 0) {
    addUserToFile($_POST);
}


?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body style="font-size: 25px">
<form method="POST">
    <div>
        <label>
            نام
        </label>
        <input type="text" name="first-name" required>
    </div>
    <br/>
    <div>
        <label>
            نام خانوادگی
        </label>
        <input type="text" name="last-name" required>
    </div>
    <br/>
    <div>
        <label>
            شماره همراه
        </label>
        <input type="number" name="mobile" required>
    </div>
    <br/>
    <div>
        <label>
            آدرس ایمیل
        </label>
        <input type="email" name="email" required>
    </div>
    <br/>
    <button type="submit">
        ذخیره
    </button>
</form>
</body>
</html>
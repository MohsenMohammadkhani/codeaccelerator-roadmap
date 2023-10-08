<?php
$users = [
    1 => [
        "name" => "mohsen",
        "family" => "mohseni",
        "active" => true,
        "email" => "mohsen@gmail.com"
    ],
    2 => [
        "name" => "mohammad",
        "family" => "mohammadi",
        "active" => false,
        "email" => "mohammad@gmail.com"
    ],
    3 => [
        "name" => "reza",
        "family" => "rezaei",
        "active" => true,
        "email" => "reza@gmail.com"
    ],
    4 => [
        "name" => "yasin",
        "family" => "yasini",
        "active" => true,
        "email" => "yasin@gmail.com"
    ],
    5 => [
        "name" => "hassan",
        "family" => "hassani",
        "active" => false,
        "email" => "hassan@gmail.com"
    ],
    6 => [
        "name" => "ali",
        "family" => "aliyan",
        "active" => true,
        "email" => "ali@gmail.com"
    ],
    7 => [
        "name" => "ahmad",
        "family" => "ahmadi",
        "active" => false,
        "email" => "ahmad@gmail.com"
    ],
];


$usersActive = array_filter($users, function ($user) {
    if ($user['active'] == true) {
        return $user;
    }
});

$usersDeactive = array_filter($users, function ($user) {
    if ($user['active'] == false) {
        return $user;
    }
});

?>

<div>
    <span>تعداد کاربران فعال:</span>
    <span><?php echo count($usersActive); ?></span>
</div>
<div>
    <span>تعداد کاربران غیر فعال :</span>
    <span><?php echo count($usersDeactive); ?></span>
</div>

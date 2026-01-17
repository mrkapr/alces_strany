<?php
session_start();

$users = [
    "admin" => "1234",
    "karel" => "heslo123",
    "vasa"  => "tajneheslo"
];

$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

if (isset($users[$username]) && $users[$username] === $password) {
    $_SESSION["user"] = $username;
    header("Location: home.php");
    exit;
} else {
    echo "Špatné jméno nebo heslo";
}

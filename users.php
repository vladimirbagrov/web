<?php
declare(strict_types=1);

use MyProject\Classes\User;
use MyProject\Classes\SuperUser;
use MyProject\Classes\SuperUserInterface;

spl_autoload_register(function ($class) {
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    require_once __DIR__ . "/{$classPath}.php";
});

ob_start(); // Буферизация вывода, чтобы всё вставить в HTML

echo "<div class='section'>";
$user1 = new User("Иван", "ivan123", "12345");
$user2 = new User("Мария", "maria88", "qwerty");
$user3 = new User("Петр", "petya77", "pass123");

$user1->showInfo();
$user2->showInfo();
$user3->showInfo();
echo "</div><hr>";

echo "<div class='section'>";
$superUser = new SuperUser("Анна", "admin1", "rootpass", "Администратор");
$superUser->showInfo();

echo "</div><hr>";

echo "<div class='section'>";
echo "Всего обычных пользователей: " . User::$count . "<br>";
echo "Всего супер-пользователей: " . SuperUser::$count . "<br>";
echo "</div>";

$content = ob_get_clean(); // Сохраняем вывод в переменную
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Пользователи</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Bangers&display=swap');

    body {
        font-family: 'Bangers', cursive;
        color: #ffffff;
        margin: 0;
        padding: 40px;
        background: #000;
        background-image: url('i.webp');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        overflow: hidden;
    }

    h1 {
        font-size: 48px;
        color: #e50914;
        text-align: center;
        text-shadow: 3px 3px 0 #000;
        margin-bottom: 40px;
    }

    .section {
        background: rgba(0, 0, 0, 0.20);
        border: 2px solid #e50914;
        border-radius: 16px;
        padding: 20px;
        margin-bottom: 30px;
        box-shadow: 0 0 20px #e50914;
        backdrop-filter: blur(6px);
    }

    hr {
        border: none;
        height: 3px;
        background: linear-gradient(to right, #e50914, #0b1d3a);
        margin: 30px 0;
    }

    pre {
        background: rgba(255,255,255,0.1);
        padding: 15px;
        border-radius: 10px;
        color: #90e0ef;
        font-family: monospace;
        overflow-x: auto;
    }

    .count {
        font-size: 20px;
        color: #ffffff;
        text-align: center;
    }
</style>
</head>
<body>

<h1>🕷 Пользователи 🕷</h1>

<?= $content ?>

</body>
</html>
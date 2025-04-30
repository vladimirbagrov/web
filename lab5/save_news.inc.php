<?php
// Проверка на наличие всех данных из формы
if (
    !isset($_POST['title']) || !isset($_POST['category']) ||
    !isset($_POST['description']) || !isset($_POST['source'])
) {
    $errMsg = "Заполните все поля формы!";
    return;
}

$title = trim(strip_tags($_POST['title']));
$category = (int)$_POST['category'];
$description = trim(strip_tags($_POST['description']));
$source = trim(strip_tags($_POST['source']));

// Проверка на пустые значения
if ($title === "" || $description === "" || $source === "") {
    $errMsg = "Заполните все поля формы!";
    return;
}

// Убедимся, что объект $news существует
if (!isset($news) || !method_exists($news, 'saveNews')) {
    $errMsg = "Ошибка: база данных недоступна.";
    return;
}

// Пытаемся сохранить новость
if (!$news->saveNews($title, $category, $description, $source)) {
    $errMsg = "Произошла ошибка при добавлении новости";
} else {
    // Увеличиваем счётчик добавлений (если он есть в сессии)
    if (session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['added'])) {
        $_SESSION['added']++;
    }

    // Редиректим на текущую страницу, чтобы избежать повторной отправки формы
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>

<?php
if (!isset($_POST['title']) || !isset($_POST['category']) || !isset($_POST['description']) || !isset($_POST['source'])) {
    $errMsg = "Заполните все поля формы!";
} else {
    $title = trim(strip_tags($_POST['title']));
    $category = (int)$_POST['category'];
    $description = trim(strip_tags($_POST['description']));
    $source = trim(strip_tags($_POST['source']));

    if ($title == "" || $description == "" || $source == "") {
        $errMsg = "Заполните все поля формы!";
    } else {
        if (!$news->saveNews($title, $category, $description, $source)) {
            $errMsg = "Произошла ошибка при добавлении новости";
        } else {
            header("Location: news.php");
            exit;
        }
    }
}
?>

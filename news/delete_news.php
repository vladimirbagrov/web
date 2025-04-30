<?php
require_once "NewsDB.class.php";
$news = new NewsDB();
$id = (int)$_GET['id'];
if ($id) {
    $news->deleteNews($id);
}
header("Location: news.php");
exit;
?>

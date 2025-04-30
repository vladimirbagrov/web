<?php
$newsList = $news->getNews();
if (!$newsList) {
    $errMsg = "Произошла ошибка при выводе новостной ленты";
} else {
    echo '<div class="news-container">';
    foreach ($newsList as $item) {
        echo "<div class='news-card'>";
        echo "<h2>" . htmlspecialchars($item['title']) . "</h2>";
        echo "<p><b>Категория:</b> " . htmlspecialchars($item['category']) . "</p>";
        echo "<p>" . nl2br(htmlspecialchars($item['description'])) . "</p>";
        echo "<p><i>Источник:</i> " . htmlspecialchars($item['source']) . "</p>";
        echo "<p><i>Дата:</i> " . date("d-m-Y H:i:s", $item['datetime']) . "</p>";
        echo "<a href='?del=" . $item['id'] . "'>Удалить</a>";
        echo "</div>";
    }
    echo '</div>';
}
?>
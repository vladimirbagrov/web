<?php
session_start();
require_once "INewsDB.class.php";
require_once "NewsDB.class.php";
require_once "NumbersSquared.php";

$news = new NewsDB();
$errMsg = "";

// Категория из фильтра
$filterCategory = isset($_GET['cat']) ? (int)$_GET['cat'] : 0;

// Счётчики
if (!isset($_SESSION['added'])) $_SESSION['added'] = 0;
if (!isset($_SESSION['deleted'])) $_SESSION['deleted'] = 0;
if (!isset($_SESSION['last_added_id'])) $_SESSION['last_added_id'] = 0;

// Удаление
if (isset($_GET['del'])) {
    require_once "delete_news.inc.php";
    $_SESSION['deleted']++;
}

// Добавление
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require "save_news.inc.php";
}

$nums = new NumbersSquared(3, 7);
$allNews = $news->getNews();
$newsList = $filterCategory > 0
    ? array_filter($allNews, fn($n) => (int)$n['category_id'] === $filterCategory)
    : $allNews;
$totalNews = count($newsList);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Лабораторная работа №5</title>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        body {
            background: url("scarlett-johansson-as-black-widow-cgi-fanart-wallpaper-3840x2400_9.jpg") no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', sans-serif;
            color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 40px;
            color: #ffffff;
            text-shadow: 0 0 10px #000000;
        }
        .section {
            background: rgba(25, 25, 25, 0.6);
            max-width: 700px;
            margin: 30px auto;
            padding: 25px;
            border-radius: 16px;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(4px);
        }
        form input, form select, form textarea {
            width: 95%;
            padding: 8px 10px;
            margin-bottom: 12px;
            border: 1px solid #666;
            border-radius: 6px;
            font-size: 0.95rem;
            background: rgba(255, 255, 255, 0.07);
            color: #fff;
            backdrop-filter: blur(2px);
        }
        form textarea {
            height: 100px;
            resize: vertical;
        }
        select option {
            color: #000;
            background: #fff;
        }
        input[type="submit"] {
            background-color: #b71c1c;
            color: white;
            font-weight: bold;
            border: none;
            padding: 12px;
            cursor: pointer;
            transition: background 0.3s;
            border-radius: 8px;
        }
        input[type="submit"]:hover {
            background-color: #7f0000;
        }
        .error {
            color: #ff6666;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .news-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
        }
        .news-card {
            background: rgba(20, 20, 20, 0.5);
            padding: 18px;
            width: 300px;
            border-radius: 12px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.4);
            color: #eee;
            backdrop-filter: blur(2px);
            transition: transform 0.3s ease;
            animation: fadeIn 0.5s ease;
        }
        .news-card:hover {
            transform: scale(1.03);
        }
        .news-card h2 {
            color: #ff8a80;
        }
        .news-card a {
            color: #ff5252;
            text-decoration: none;
        }
        .news-card.new {
            box-shadow: 0 0 15px #ff1744;
            border: 1px solid #ff5252;
        }
        .counter {
            text-align: center;
            margin-bottom: 15px;
            font-size: 16px;
            color: #ccc;
        }
        .filter-form {
            text-align: center;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <h1>Лабораторная работа №5</h1>

    <div class="section">
        <h2>I. Квадраты чисел от 3 до 7</h2>
        <ul>
            <?php foreach ($nums as $key => $val): ?>
                <li><?= $key ?><sup>2</sup> = <?= $val ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="section">
        <h2>II. Добавление новости</h2>
        <form method="post">
            <?php if ($errMsg): ?>
                <div class="error"><?= $errMsg ?></div>
            <?php endif; ?>
            Заголовок:<br>
            <input type="text" name="title"><br>
            Категория:<br>
            <select name="category">
                <?php foreach ($news as $id => $name): ?>
                    <option value="<?= $id ?>"><?= htmlspecialchars($name) ?></option>
                <?php endforeach; ?>
            </select><br>
            Текст новости:<br>
            <textarea name="description"></textarea><br>
            Источник:<br>
            <input type="text" name="source"><br>
            <input type="submit" value="Добавить новость">
        </form>
    </div>

    <div class="section">
        <h2>III. Последние новости</h2>

        <div class="filter-form">
            <form method="get">
                Фильтр по категории:
                <select name="cat" onchange="this.form.submit()">
                    <option value="0">Все категории</option>
                    <?php foreach ($news as $id => $name): ?>
                        <option value="<?= $id ?>" <?= $filterCategory === $id ? 'selected' : '' ?>><?= htmlspecialchars($name) ?></option>
                    <?php endforeach; ?>
                </select>
            </form>
        </div>

        <div class="counter">
            Всего новостей: <?= $totalNews ?> |
            Добавлено за сессию: <?= $_SESSION['added'] ?> |
            Удалено: <?= $_SESSION['deleted'] ?>
        </div>

        <div class="news-container">
            <?php if ($newsList): ?>
                <?php foreach ($newsList as $item): ?>
                    <div class="news-card <?= ($_SESSION['last_added_id'] ?? 0) === $item['id'] ? 'new' : '' ?>">
                        <h2><?= htmlspecialchars($item['title']) ?></h2>
                        <p><b>Категория:</b> <?= htmlspecialchars($item['category']) ?></p>
                        <p><?= nl2br(htmlspecialchars($item['description'])) ?></p>
                        <p><i>Источник:</i> <?= htmlspecialchars($item['source']) ?></p>
                        <p><i>Дата:</i> <?= date("d-m-Y H:i:s", $item['datetime']) ?></p>
                        <a href="?del=<?= $item['id'] ?>" onclick="return confirm('Удалить новость?')">Удалить</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Новостей пока нет.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>

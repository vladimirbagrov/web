<?php
require_once "NewsDB.class.php";
$news = new NewsDB();
$errMsg = "";

if (isset($_GET['del'])) {
    require_once "delete_news.inc.php";
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require "save_news.inc.php";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Лабораторная работа №4</title>
    <style>
    body {
        background: url("avengers-endgame-thor-strombreaker-axe-lightning-uhdpaper.com-4K-119.jpg") no-repeat center center fixed;
        background-size: cover;
    font-family: 'Segoe UI', sans-serif;
    color: #fff;
    margin: 0;

}

h1.lab-title {
    font-size: 2.5rem;
    font-weight: bold;
    text-align: center;
    
    margin-bottom: 20px;
    color: #00ccff;
    animation: lightning-text 2s infinite ease-in-out, glow 1.5s infinite alternate;
    text-shadow:
        0 0 5px #00ccff,
        0 0 10px #00ccff,
        0 0 20px #00ccff,
        0 0 40px #00ccff;
    transform-origin: center;
    position: relative;
    -webkit-text-stroke: 1px #ffffff; /* белый контур */
    text-stroke: 1px #ffffff; /* на всякий случай */
}

/* Переливающийся цвет */
@keyframes lightning-text {
    0%   { color: #00ccff; transform: rotate(0deg); }
    25%  { color: #33eaff; transform: rotate(0.4deg); }
    50%  { color: #00ffff; transform: rotate(-0.4deg); }
    75%  { color: #00bfff; transform: rotate(0.4deg); }
    100% { color: #00ccff; transform: rotate(0deg); }
}

/* Светящееся пульсирование */
@keyframes glow {
    0% {
        text-shadow:
            0 0 5px #00ccff,
            0 0 10px #00ccff,
            0 0 20px #00ccff,
            0 0 40px #00ccff;
    }
    100% {
        text-shadow:
            0 0 10px #00eaff,
            0 0 25px #00eaff,
            0 0 35px #00eaff,
            0 0 60px #00eaff;
    }
}

form.centered-form {
    margin: 50px auto;
}

form {
    background: rgba(0, 0, 0, 0.5);
    width: 350px;
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0, 204, 255, 0.5);
    overflow: hidden;
    transition: 0.3s;
    z-index: 1;
    margin: 40px auto;
}

form.animate-lightning::before {
    content: "";
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: radial-gradient(circle, rgba(0, 204, 255, 0.7) 0%, transparent 80%);
    animation: lightning-flash 0.5s ease-out;
    z-index: 10;
    pointer-events: none;
}

@keyframes lightning-flash {
    0% {
        opacity: 0.9;
        transform: scale(0.3) rotate(0deg);
    }
    100% {
        opacity: 0;
        transform: scale(1.5) rotate(720deg);
    }
}

input[type="text"], textarea, select {
    width: 100%;
    padding: 6px 10px;
    margin-bottom: 12px;
    border: none;
    border-radius: 5px;
    font-size: 0.9rem;
    box-sizing: border-box;
    position: relative;
    z-index: 1;
}

textarea {
    height: 70px;
    resize: vertical;
}

input[type="submit"] {
    background-color: #00ccff;
    color: black;
    border: none;
    padding: 10px;
    font-size: 1rem;
    cursor: pointer;
    border-radius: 5px;
    width: 100%;
    transition: background-color 0.3s;
    position: relative;
    z-index: 1;
}

input[type="submit"]:hover {
    background-color: #0099cc;
}

.error-message {
    background-color: rgba(255, 50, 50, 0.9);
    color: white;
    padding: 8px;
    margin-bottom: 15px;
    border-radius: 5px;
    text-align: center;
    font-size: 0.95rem;
    z-index: 1;
    position: relative;
}

.news-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 40px;
    margin-bottom: 40px;
    padding: 0 20px;
}

.news-card {
    background: rgba(0, 0, 0, 0.6);
    border-radius: 12px;
    padding: 20px;
    width: 300px;
    box-shadow: 0 0 10px #00ccff;
    transition: transform 0.3s, box-shadow 0.3s;
}

.news-card:hover {
    transform: scale(1.03);
    box-shadow: 0 0 20px #00eaff;
}

.news-card h2 {
    color: #00ccff;
    margin-top: 0;
}

.news-card a {
    color: #ff4d4d;
    text-decoration: none;
}
</style>
</head>
<body>
<h1 class="lab-title">Лабораторная работа №4</h1>

<form method="post" class="centered-form">
    <?php if ($errMsg): ?>
    <div class="error-message"><?= $errMsg ?></div>
    <?php endif; ?>
    Заголовок:<br><input type="text" name="title"><br><br>
    Категория:<br>
    <select name="category">
        <?php foreach ($news as $id => $name): ?>
            <option value="<?= $id ?>"><?= htmlspecialchars($name) ?></option>
        <?php endforeach; ?>
    </select><br><br>
    Текст новости:<br><textarea name="description" rows="5" cols="50"></textarea><br><br>
    Источник:<br><input type="text" name="source"><br><br>
    <input type="submit" value="Добавить новость">
</form>

<?php require "get_news.inc.php"; ?>

<script>
document.querySelector("form").addEventListener("submit", function (e) {
    const form = this;
    form.classList.add("animate-lightning");
    setTimeout(() => form.classList.remove("animate-lightning"), 500);
});
</script>
</body>
</html>

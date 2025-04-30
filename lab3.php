<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Лабораторные работы Багров</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet" />
  <style>
    body {
      margin: 0;
      padding: 50px 20px;
      font-family: 'Orbitron', sans-serif;
      background-image: url('captain-america-avengers-endgame-movie-hv-3840x2400.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: #fff;
    }

    h1 {
      text-align: center;
      font-size: 42px;
      color: #fff;
      text-shadow:
        0 0 10px #ff0000,
        0 0 20px #ff0000,
        0 0 30px #ff4b4b,
        0 0 40px #ff4b4b;
      padding-top: 20px;
      margin-bottom: 50px;
    }

    .cards {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .card {
      background: rgba(0, 0, 0, 0.75);
      border: 2px solid #ff4b4b;
      box-shadow: 0 0 15px rgba(255, 75, 75, 0.6);
      border-radius: 16px;
      padding: 25px 30px;
      width: 300px;
      text-align: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 30px #ff4b4b;
    }

    .card a {
      display: block;
      color: #ffffff;
      text-decoration: none;
      font-size: 18px;
      margin: 10px 0;
      transition: color 0.2s ease;
    }

    .card a:hover {
      color: #ff4b4b;
    }

    @media (max-width: 600px) {
      .card {
        width: 90%;
      }
    }
  </style>
</head>
<body>

  <h1>Лабораторная работа №3</h1>

  <div class="cards">
    <div class="card">
      <a href="lab3/patterns/singleton/settings_use.php">Singleton</a>
    </div>
    <div class="card">
      <a href="lab3/patterns/factory-method/factory_use.php">Factory Method</a>
      <a href="lab3/patterns/factory-method/factory-method.html">Factory Method диаграмма</a>
    </div>
    <div class="card">
      <a href="lab3/patterns/mvc/mvc_use.php">MVC</a>
      <a href="lab3/patterns/mvc/mvc-pattern.html">MVC диаграмма</a>
    </div>
  </div>

</body>
</html>

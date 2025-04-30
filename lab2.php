<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Лабораторные работы Багров</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet" />
  <style>
    html, body {
      margin: 0;
      padding: 0;
      font-family: 'Orbitron', sans-serif;
      background-color: #000;
      background-image: url('avengers-age-of-ultron-avengers-2-robert-downey-jr-iron-man-wallpaper.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: #fff;
      overflow-x: hidden;
    }

    h1 {
      text-align: center;
      font-size: 42px;
      margin: 40px 0 20px;
      color: #00eaff;
      text-shadow: 0 0 8px #00eaff, 0 0 20px #00eaff;
    }

    .section-title {
      font-size: 30px;
      text-align: center;
      font-weight: bold;
      color: #00eaff;
      text-shadow: 0 0 5px #0088aa;
      margin-top: 40px;
      margin-bottom: 10px;
    }

    .cards {
      max-width: 1000px;
      margin: 0 auto 60px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      padding: 0 20px;
    }

    .card {
      width: 260px;
      background: rgba(0, 10, 20, 0.75);
      border: 2px solid #00eaff;
      border-radius: 14px;
      padding: 20px;
      text-align: center;
      box-shadow: 0 0 20px rgba(0, 234, 255, 0.3);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 30px #00eaff;
    }

    .card a {
      color: #00eaff;
      font-size: 18px;
      text-decoration: none;
      font-weight: bold;
      display: block;
    }

    .card a:hover {
      color: #ffffff;
      text-shadow: 0 0 10px #00eaff;
    }

    @media (max-width: 600px) {
      .card {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <h1>Лабораторная работа №2</h1>

  <div class="section-title">Порождающие паттерны</div>
  <div class="cards">
    <div class="card"><a href="lab2/src/RefactoringGuru/FactoryMethod/Conceptual/index.php">Factory Method</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/AbstractFactory/Conceptual/index.php">Abstract Factory</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Builder/Conceptual/index.php">Builder</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Prototype/Conceptual/index.php">Prototype</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Singleton/Conceptual/index.php">Singleton</a></div>
  </div>

  <div class="section-title">Структурные паттерны</div>
  <div class="cards">
    <div class="card"><a href="lab2/src/RefactoringGuru/Adapter/Conceptual/index.php">Adapter</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Bridge/Conceptual/index.php">Bridge</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Composite/Conceptual/index.php">Composite</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Decorator/Conceptual/index.php">Decorator</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Facade/Conceptual/index.php">Facade</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Flyweight/Conceptual/index.php">Flyweight</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Proxy/Conceptual/index.php">Proxy</a></div>
  </div>

  <div class="section-title">Поведенческие паттерны</div>
  <div class="cards">
    <div class="card"><a href="lab2/src/RefactoringGuru/ChainOfResponsibility/Conceptual/index.php">Chain of Responsibility</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Command/Conceptual/index.php">Command</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Iterator/Conceptual/index.php">Iterator</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Mediator/Conceptual/index.php">Mediator</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Memento/Conceptual/index.php">Memento</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Observer/Conceptual/index.php">Observer</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/State/Conceptual/index.php">State</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Strategy/Conceptual/index.php">Strategy</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/TemplateMethod/Conceptual/index.php">Template Method</a></div>
    <div class="card"><a href="lab2/src/RefactoringGuru/Visitor/Conceptual/index.php">Visitor</a></div>
  </div>
</body>
</html>

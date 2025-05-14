<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Лабораторные работы Багров</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&display=swap" rel="stylesheet" />
  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      overflow: auto;
      height: 100%;
      font-family: 'Orbitron', sans-serif;
      background-color: #000;
      background-image: url('5c6e9a3aec4385a86a1790295a9c9f9c.webp');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: #fff;
    }

    h1.title_all {
      text-align: center;
      font-size: 48px;
      color: #fbbf24;
      text-shadow: 0 0 8px #ff0080, 0 0 14px #6e00ff;
      margin: 50px 0 40px;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0 auto;
      max-width: 1000px;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    li {
      width: 280px;
      position: relative;
    }

    .lab-card1 {
      height: 300px;
      width: 250px;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center; 
      gap: 12px;
      background: rgba(15, 8, 25, 0.85);
      padding: 25px 20px;
      text-align: center;
      border: 2px solid #6e00ff;
      border-radius: 16px;
      box-shadow: 0 0 15px #6e00ff;
      transition: all 0.3s ease;
      font-size: 18px;
      overflow: hidden;
      z-index: 1;
    }

    .lab-card1:hover {
      transform: scale(1.06);
      box-shadow: 0 0 30px #ff0080;
    }

    .lab-card1::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-image: url('ironman35.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      z-index: 0;
    }

    .lab-card1 a {
      display: block;
      color: #fbbf24;
      text-decoration: none;
      font-weight: bold;
      position: relative;
      z-index: 2;
      transition: 0.3s;
    }

    .lab-card1 a:hover {
      color: #ffffff;
      text-shadow: 0 0 10px #fbbf24;
    }

    .lab-card {
      height: 300px;
      width: 250px;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      gap: 12px;
      background: rgba(15, 8, 25, 0.85);
      padding: 25px 20px;
      text-align: center;
      border: 2px solid #6e00ff;
      border-radius: 16px;
      box-shadow: 0 0 15px #6e00ff;
      transition: all 0.3s ease;
      font-size: 18px;
      overflow: hidden;
      z-index: 1;
    }

    .lab-card:hover {
      transform: scale(1.06);
      box-shadow: 0 0 30px #ff0080;
    }

    .lab-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-image: url('dc9mn8a-a34a8d4a-9fe3-427a-9675-6b912a811704.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      z-index: 0;
    }

    .lab-card a {
      display: block;
      color: #fbbf24;
      text-decoration: none;
      font-weight: bold;
      position: relative;
      z-index: 2;
      transition: 0.3s;
    }

    .lab-card a:hover {
      color: #ffffff;
      text-shadow: 0 0 10px #fbbf24;
    }

    .lab-card1 {
      height: 300px;
      width: 250px;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center; 
      gap: 12px;
      background: rgba(15, 8, 25, 0.85);
      padding: 25px 20px;
      text-align: center;
      border: 2px solid #6e00ff;
      border-radius: 16px;
      box-shadow: 0 0 15px #6e00ff;
      transition: all 0.3s ease;
      font-size: 18px;
      overflow: hidden;
      z-index: 1;
    }

    .lab-card1:hover {
      transform: scale(1.06);
      box-shadow: 0 0 30px #ff0080;
    }

    .lab-card2 {
      height: 300px;
      width: 250px;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center; 
      gap: 12px;
      background: rgba(15, 8, 25, 0.85);
      padding: 25px 20px;
      text-align: center;
      border: 2px solid #6e00ff;
      border-radius: 16px;
      box-shadow: 0 0 15px #6e00ff;
      transition: all 0.3s ease;
      font-size: 18px;
      overflow: hidden;
      z-index: 1;
    }

    .lab-card2:hover {
      transform: scale(1.06);
      box-shadow: 0 0 30px #ff0080;
    }

    .lab-card2::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-image: url('chris-evans-captain-america-first-avenger-leather-jacket.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      z-index: 0;
    }

    .lab-card2 a {
      display: block;
      color: #fbbf24;
      text-decoration: none;
      font-weight: bold;
      position: relative;
      z-index: 2;
      transition: 0.3s;
    }

    .lab-card2 a:hover {
      color: #ffffff;
      text-shadow: 0 0 10px #fbbf24;
    }

    .lab-card3 {
      height: 300px;
      width: 250px;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center; 
      gap: 12px;
      background: rgba(15, 8, 25, 0.85);
      padding: 25px 20px;
      text-align: center;
      border: 2px solid #6e00ff;
      border-radius: 16px;
      box-shadow: 0 0 15px #6e00ff;
      transition: all 0.3s ease;
      font-size: 18px;
      overflow: hidden;
      z-index: 1;
      margin-bottom:20px;
    }

    .lab-card3:hover {
      transform: scale(1.06);
      box-shadow: 0 0 30px #ff0080;
    }

    .lab-card3::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-image: url('303faaa2c0243ddffc436d70734d4996.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      z-index: 0;
    }

    .lab-card3 a {
      display: block;
      color: #fbbf24;
      text-decoration: none;
      font-weight: bold;
      position: relative;
      z-index: 2;
      transition: 0.3s;
    }

    .lab-card3 a:hover {
      color: #ffffff;
      text-shadow: 0 0 10px #fbbf24;
    }

  .lab-card4 {
      height: 300px;
      width: 250px;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center; 
      gap: 12px;
      background: rgba(15, 8, 25, 0.85);
      padding: 25px 20px;
      text-align: center;
      border: 2px solid #6e00ff;
      border-radius: 16px;
      box-shadow: 0 0 15px #6e00ff;
      transition: all 0.3s ease;
      font-size: 18px;
      overflow: hidden;
      z-index: 1;
      margin-bottom:20px;
    }

    .lab-card4:hover {
      transform: scale(1.06);
      box-shadow: 0 0 30px #ff0080;
    }

    .lab-card4::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-image: url('333fafd8496c9bfb14348836f3c6aca7.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      z-index: 0;
    }

    .lab-card4 a {
      display: block;
      color: #fbbf24;
      text-decoration: none;
      font-weight: bold;
      position: relative;
      z-index: 2;
      transition: 0.3s;
    }

    .lab-card4 a:hover {
      color: #ffffff;
      text-shadow: 0 0 10px #fbbf24;
    }

    .lab-card5 {
      height: 300px;
      width: 250px;
      position: relative;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center; 
      gap: 12px;
      background: rgba(15, 8, 25, 0.85);
      padding: 25px 20px;
      text-align: center;
      border: 2px solid #6e00ff;
      border-radius: 16px;
      box-shadow: 0 0 15px #6e00ff;
      transition: all 0.3s ease;
      font-size: 18px;
      overflow: hidden;
      z-index: 1;
      margin-bottom:20px;
    }

    h6{
      z-index: 2;
    }

    .lab-list::-webkit-scrollbar {
      display: none;
    }

    .lab-list{
      overflow-x: hidden;
      color: #fbbf24;
      text-decoration: none;
      font-weight: bold;
      position: relative;
      z-index: 2;
      transition: 0.3s;
    }

    .lab-card5 h6:hover {
      color: #ffffff;
      text-shadow: 0 0 10px #fbbf24;
    }

    .lab-card5:hover {
      transform: scale(1.06);
      box-shadow: 0 0 30px #ff0080;
    }

    .lab-card5::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-image: url('01ff98372e45edb6fb2897db13a94cfa.png');
      background-size: contain;
      background-repeat: no-repeat;
      background-position: center;
      z-index: 0;
    }

    .lab-card5 a {
      display: block;
      color: #fbbf24;
      text-decoration: none;
      font-weight: bold;
      position: relative;
      z-index: 2;
      transition: 0.3s;
    }

    .lab-card5 a:hover {
      color: #ffffff;
      text-shadow: 0 0 10px #fbbf24;
    }


    @media (max-width: 600px) {
      li {
        width: 100%;
      }

      h1.title_all {
        font-size: 32px;
      }
    }
  </style>
</head>
<body>
  <h1 class="title_all">Лабораторные работы</h1>

  <ul>
    <li>
      <div class="lab-card">
        <a href="users.php">Лабораторная работа №1</a>
        <a href="MyProject/uml.html">Лабораторная работа №1 (диаграмма)</a>
      </div>
    </li>
    <li>
        <div class="lab-card1">
            <a href="lab2.php">Лабораторная работа №2</a>
        </div>
    </li>
    <li>
        <div class="lab-card2">
            <a href="lab3.php">Лабораторная работа №3</a>
        </div>
    </li>
    <li>
        <div class="lab-card3">
            <a href="news/news.php">Лабораторная работа №4</a>
            <a href="https://www.plantuml.com/plantuml/svg/lL11YW8n4BptA_emXnrsPovxMvPbMBm88eWF235fXq1C9DsZYFftesGS_80vfOgkwkhgM7IIOUS1N11AMsq8vqiwykmVpu3vVIBh0zsfZqgSUFh2ocYXFgPJ_bfYaznUN0mPSHoIeRe8UvA7RiIMF4cnShQ6Au3ncXbV5ZQexEO7rwk54_ekKgLC32nfCFAqKyhIHBqfwXWBnfP-BsrR3e12DStVDDTHiBdW6m00">Лабораторная работа №4 (диаграмма)</a>
        </div>
    </li>
    <li>
        <div class="lab-card4">
            <a href="lab5/lab5.php">Лабораторная работа №5</a>
            <a href="https://www.plantuml.com/plantuml/svg/dP0n3i8m34NtdC9ZAw07O41TMLWuG9KcHef84-4afQXmTz88B8IOsEndVp_9ROYIOXgiK5Q608Sqz4ZXU4cIKCCi03PWN8IonnqwpRLAHEYMsGgwJdaN8YKLAqwjtv6wx11UZTDLlONH6rtGAAqffFVU5l8wcjaIBkYCjy_MuHJvo4E8p95EKY7iSo6Z9vZ_yWrcGir61h-SNzzgclkExQ95f_DZdm00">Лабораторная работа №5 (диаграмма)</a>
        </div>
    </li>
    <li>
        <div class="lab-card5">
        <a href="#">Лабораторная работ №6</a>
          <ul class="lab-list">
          <li> <a href="http://cg38360.tw1.ru/test/1/">Act1</a></li>
          <li> <a href="http://cg38360.tw1.ru/test/2/">Act2</a></li>
          <li> <a href="http://cg38360.tw1.ru/test/3/">Act3 </a></li>
          <li> <a href="http://cg38360.tw1.ru/nums/7/7/7/">NumController </a></li>
          <li> <a href="http://cg38360.tw1.ru/user/3/">UserController: show </a></li>
          <li> <a href="http://cg38360.tw1.ru/user/1/name/">UserController: info </a></li>
          <li> <a href="http://cg38360.tw1.ru/user/all/">UserController: all </a></li>
          <li> <a href="http://cg38360.tw1.ru/user/first/3/">UserController: first </a></li>
          <li> <a href="http://cg38360.tw1.ru/product/1/">Product: show </a></li>
          <li> <a href="http://cg38360.tw1.ru/products/all/">Product: all </a></li>
          <li> <a href="http://cg38360.tw1.ru/project/webroot/webroot.php/">Webroot: css </a></li>
          <li> <a href="http://cg38360.tw1.ru/page/">Page: test </a></li>
          <li> <a href="http://cg38360.tw1.ru/page/2">Page: one </a></li>
          <li> <a href="http://cg38360.tw1.ru/pages/">Page: all </a></li>
          <li> <a href="http://cg38360.tw1.ru/products/1/">Products: one </a></li>
          <li> <a href="http://cg38360.tw1.ru/products/">Products: all </a></li>
          </ul>
        </div>
    </li>
  </ul>
</body>
</html>
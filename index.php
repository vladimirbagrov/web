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
            <a href="https://plantuml.online/svg/jP9RIm915CVVzrCSy24baxOBXKJW9K6eAApdPN97NLntOcTBw0Af4GIHhn7qq3SmkscXd-7CD-hiQfeLlRN3NkOtvx_x_v_PAS0xRAcQggipx6CNtx03s5TrcZmGQk4BFcCFEwe9gaRm4T_zUa9zK6UgGO8-jkbyyb-2RTM0BPivtkx6kYRBbhFFN5Q1Omtea2LcYghb5A70RCa3nbnNL5F25Yw4z6L_ZF5EoSgN7IubwB7P0ETj9cLIk2PtVse6YonVBhhYm3671HdT7-E2Z72yd7N4GLy8eELut2smFFzBEIxwvTkdcZO5U8CzolzCFJcdZdLL3RARl2hJIMqa_YImiWBXR3IKN4WihIr6O7Lrs233g72l94nf6C5y6YGxvBue78d3eR3C8IvoxnTgSfjxa-K3RxU3JIDF0mDHsZeosIBSmLVLKDVgafwwG9TlARIWQV35U2eQIgJJUd9kmdZ1ulR8zmmOvbuSSjlhbiVd0_Il-UxflsjIaAk9N1JvWkuTRTJsarXicEG3">Лабораторная работа №4 (диаграмма)</a>
        </div>
    </li>
    <li>
        <div class="lab-card4">
            <a href="lab5/lab5.php">Лабораторная работа №5</a>
            <a href="https://plantuml.online/svg/lLJBRjD05DtxAwwKHHDX8W95eAYgb0UL8XK42gojgJrnHd4yPMRIY9VKD6nOGBS8YGL_40ff4w3vXfa_ulhH96uJA1jYnVASUy_rd7kkPmFqPpqo0tDa3lLCJ_KFFG4zCqUu-8hGI9_giJxN4tCCPe3WD_qpoaTe1kRG394mqoVu_nuLqITc28y34gfd3tSjsM7XFX6a2wyim9zi4u_tMUX3YmIInXWHWlThFE02SgNxqRM0dxQPsmcfb50gtefXDo1ILhdmgBZAIOB4xVY2zq8lJTWfHTSYOOU7gibUKYXjnY0B5HKjuj8_CHT9Azxznh8sG7_KvwX_Z3rvYnsRcW4q7j6-h5UjEVa2WQqjo3ViN7MpSk_1tG9iRwSDSfmkLMtkISU9rpT0aWCQaVAAgO3Qu195VIvUsE1HwGgshnWFRP2y9rnQACC1PrvAzQcAcLdKem5LIKdcNOGI1PyIQt7doJPjD1YbZ12Uw3CpD1_CEtoQ0jxMQOrR34ioQtQkKg-NghSpCbkC1dELDy7nzihGVBBB5BqJGskwuJWk3wKIFLVb2tCCEv65_a_JveHQKfxHopICDT1wehZ8PrkzObZIn8hl2-fZnUMnkHpxXm5QluSbktlTFIfaytcF2EgjjVtg5bEtC_JhkouL4QeSVLifG4DliRp62CG5x8XM-AlQBtWq7Ukpw7JxXUfEyRmQWdcF8iSn4FanmgU9DVz8NnUBwIHRAno8endblm40">Лабораторная работа №5 (диаграмма)</a>
        </div>
    </li>
  </ul>
</body>
</html>
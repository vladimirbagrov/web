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
            <a href="https://www.plantuml.com/plantuml/svg/TP71IiD048RlUOgvcI3x0Zb8AHxqu4szbZ6xbC0caTs94goWddq4mLSGQK4e-WoJDt8IjzrAwHuMzf-FVsR-dNX2Hsrba-G8b5B0R_p3IrxnkdyTXAImw3rSDDfOU4X0ZWADX3cWSzYDoZ7CPaLJUt9jGMaMDDkWFXKotS6p7EwQKWTYRcW4ib2DyfKtRjgTwxJKc-AYRgtzJ_XfTzdTcfJasdey9c7cWOXpxqyfO4IKMfoCMyOatlidoM7PF_Sl_C6Vl9RNDt_nQim5RyG82uA_PjUbkT_cKmq-UR3RRxrRteJbJAsD6v8GgApdSOqpgcnmFunEH9DV_0K0">Лабораторная работа №4 (диаграмма)</a>
        </div>
    </li>
    <li>
        <div class="lab-card4">
            <a href="lab5/lab5.php">Лабораторная работа №5</a>
            <a href="https://www.plantuml.com/plantuml/svg/pPEnRXD148RxUufH6X9XtD1P0YLHA29191HwQtqtd5QSzs1spy429Dj2K514I1I8fp2GI2R6UORPDsBss3jp0b77bVVp_BCp_x_UjqwHgyP5ajm2_imRl-1BF_Dl-P9_-3dm1Q_zEVWPB_ahN_k5_m01R_YQlybvBkISV_8gqSOXFLKfml49djcZGtYLW7nkWrKJ36ZNQLVW0AmZRV8UfCfXNj9q0ABjGOOs9VtSwT9iQsnPKTfgzWOmAiiYzitHrMs5AY8rZJZ30jtl2tLMzsvaR-ebl_2Qbtx-d-K-ygVEXi6B92sKjT1PxGuS7GvF3XuzQEQ3Ux1ZfAAVZNPYnJ0R3U3qyKFjy6v4ydLikpCFXsbff4ULkjszcsPRApjsICgL5AHFICOZgqO51b-ZB_t-w_jD_bqMfGTvJfZB1l-EWh-Brvlm0eM_unMlWAyaXYLVr6WHGW7_dbT-BfNhyEkIhq3Eab9JucTDMjLuX6HFNrIAC6jJgzzylM84QB8_Zsb5X2PM_1tGLjvhbKreX6VQPC6WIQcp22UgqC8wTiOx0jtUyWodNM3mfMkRYStTXRhM9ic-J2D_vLy0">Лабораторная работа №5 (диаграмма)</a>
        </div>
    </li>
  </ul>
</body>
</html>
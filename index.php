<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="images/logo.png">
    <script src="js/script.js"></script>
    <title>53</title>
</head>
<body>
    <!-- Проверка в системе ли пользователь -->
    <?php if($_COOKIE['online'] == "1"): ?>
    <div id="mess">
        <div class="wrapp">
            <div class="logo1">
                <img src="images/logo.png" class="logo1" alt="Логотип сайта">
            </div>
            <div class="btns">
                <a onclick="aside('1')" class="btn">
                    <div class="text">
                        <div class="img">
                            <img src="images/diary.png" alt="">
                        </div>
                        
                        Дневник
                    </div>
                </a>
                <a onclick="aside('2')" class="btn">
                    <div class="text">
                        <div class="img">
                            <img src="images/otchet.png" alt="">
                        </div>
                        
                        Отчет об успеваемости
                    </div>
                </a>
                <a onclick="aside('3')" class="btn">
                    <div class="text">
                        <div class="img">
                            <img src="images/raspisanie.png" alt="">
                        </div>
                        
                        Расписание
                    </div>
                </a>
                <a onclick="aside('4')" class="btn">
                    <div class="text">
                        <div class="img">
                            <img src="images/missions.png" alt="">
                        </div>
                        Задания
                    </div>
                </a>
                <a onclick="aside('5')" href="chat.php" class="btn">
                    <div class="text">
                        <div class="img">
                            <img src="images/chat.png" alt="">
                        </div>
                        Чат
                    </div>
                </a>
                <a onclick="aside('6')" href="" class="btn">
                    <div class="text">
                        <div class="img">
                            <img src="images/community.png" alt="">
                        </div>
                        Ученики
                    </div>
                </a>
                <a onclick="aside('7')" class="btn exit">
                    <div class="text">
                        <div class="img">
                            <img src="images/exit.png" alt="">
                        </div>
                        Выход
                    </div>
                </a>
            </div>
        </div>
    </div>
    <section class="top">
        <div class="container">
            <div id="menu" onclick="menu()">
                <span></span>
            </div>
            <div class="logo">
                <img src="images/logo.png" class="logo" alt="Логотип сайта">
            </div>
            <div class="box">
                <div class="login">
                    <img src="images/login.png" class="login_img" alt="Фото профиля">
                </div>
                <a class="name">
                    <?php echo $_COOKIE['name'] . " " . $_COOKIE['lastname'];?>
                </a>
            </div>
    </section>
    <section class="main">
        <div class="container">
            <aside>
                <a class="btn" onclick="aside('1')">
                    <div class="text">
                        <div class="img">
                            <img src="images/diary.png" alt="">
                        </div>
                        Дневник
                    </div>
                </a>
                <a class="btn" onclick="aside('2')">
                    <div class="text">
                        <div class="img">
                            <img src="images/otchet.png" alt="">
                        </div>
                        Отчет об успеваемости
                    </div>
                </a>
                <a class="btn" onclick="aside('3')">
                    <div class="text">
                        <div class="img">
                            <img src="images/raspisanie.png" alt="">
                        </div>
                        
                        Расписание
                    </div>
                </a>
                <a class="btn" onclick="aside('4')">
                    <div class="text">
                        <div class="img">
                            <img src="images/missions.png" alt="">
                        </div>
                        Задания
                    </div>
                </a>
                <a class="btn" onclick="aside('5')">
                    <div class="text">
                        <div class="img">
                            <img src="images/chat.png" alt="">
                        </div>
                        Чат
                    </div>
                </a>
                <a class="btn" onclick="aside('6')">
                    <div class="text">
                        <div class="img">
                            <img src="images/community.png" alt="">
                        </div>
                        Группы
                    </div>
                </a>
                <a class="btn exit" onclick="aside('7')">
                    <div class="text">
                        <div class="img">
                            <img src="images/exit.png" alt="">
                        </div>
                        Выход
                    </div>
                </a>
            </aside>
            <iframe src="points/1.php" class="des" id="frame">

            </iframe>
        </div>
    </section>
    <section class="footer"></section>
    <!-- Если не в системе то переводим на страницу авторизации-->
    <?php else :?>
    <script>
        location.href = "autorize.html";
    </script>
    <?php endif; ?>
</body>
</html>
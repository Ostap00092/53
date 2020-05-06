<?php
//Импорт подключение к базе данных
include("connect.php");
//Импорт данных
$pin = $_POST['pin'];
$link = filter_var(trim($_POST['link']), FILTER_SANITIZE_STRING);
//Хэширование пина
$pin = md5($pin);
//Проверка
$result = $mysql->query("SELECT * FROM `groups` WHERE `pin` = $pin AND `link` = $link");

if(count($result) == 0) {
    echo "Неправильный пин";
}
$mysql->close();
header("Location: ../group.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles2.css">
    <link rel="icon" href="../images/logo.png">
    <title>Присоединение</title>
</head>
<body>
    <div class="img">
        <img class="img" src="../images/logo.png" alt="">
    </div>
    <form action="join.php" method="POST">
        <input type="text" name="pin" placeholder="Пин">
        <input type="text" name="link" placeholder="Ссылка потдверждение">
        <div class="btns">
            <input type="submit" value="Присоединиться">
        </div>
    </form>
</body>
</html>


<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" a href="../css/styles2.css">
    <title>Создание класса</title>
</head>
<body>
    <form action="create_group.php" method="POST">
        <input type="text" name="title" placeholder="Номер класса">
        <input type="text" name="pin" placeholder="Четырехзначный пин для подключения">
        <input type="submit" value="Создать">
    </form>
</body>
</html>
<?php
//Импорт данных
$title = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
$link = "http://53.com/$_COOKIE['id']";
$pin = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
//Проверка
if (mb_strlen($title) == "" || mb_strlen($title) > 32) {
    echo "Пишите название класса";
    exit();
}elseif (mb_strlen($pin) == "" || mb_strlen($pin) > 4) {
    echo "Пишите четырехзначный пин для поключения";
    exit();
}
//Хэширование пина
$pin = md5($pin);
//Занесем в таблицу
include("connect.php");
$sql = "INSERT INTO `groups` (`group_id`, `title`, `link`) VALUES (NULL, "$title", "$link")";
$mysql->query($sql);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles3.css">
    <link rel="stylesheet" href="../css/diary.css">
    <title>Group</title>
</head>
<body>
<section class="classes">
        <a>Классы</a>
        <?php for ($i = 8; $i < 10; $i++) : ?>
        <form method="POST" class="class">
            <a href="../group.php"><?=$i?> класс</a>
            <div class="line"></div>
            <div class="humans">
                <?php for ($h = 0; $h < 4; $h++) : ?>
                    <div class="ava">
                        <img src="" alt="">
                    </div>
                <?php endfor;?>
                <a>+5</a>
            </div>
            <div class="join">
                <a href="../uploads/join.php">Присоединиться</a>
            </div>
        </form>    
        <?php endfor;?>
        <div class="class">
            <a  href="../uploads/create_group.php"><img class="plus" src="../images/+.png" alt=""></a>
            <a class="dob" href="../uploads/create_group.php">Создать</a>
        </div>
    </section>
</body>
</html>
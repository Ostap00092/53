<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/diary.css">
    <title>Diary</title>
</head>
<body>
    <form class="search">
        <input type="text" id="poisk" placeholder="Search" name="search">
        <div class="cont">
            <img class="lypa" src="../images/search.png" alt="">
        </div>
    </form>
    <section class="classes">
        <a>Классы</a>
        <?php for ($i = 8; $i < 10; $i++) : ?>
        <form method="POST" class="class">
            <a href="../group.php"><?=$i?> класс</a>
            <input type="hidden" name="group_id" value="<?php echo $num['group_id'] ?>">
            <div class="line"></div>
            <div class="humans">
                <?php for ($h = 0; $h < 4; $h++) : ?>
                    <div class="ava">
                        <img src="" alt="">
                    </div>
                <?php endfor;?>
                <a>+5</a>
            </div>
            <div href="" class="join">
                <a href="../uploads/join.php">Присоединиться</a>
            </div>
        </form>    
        <?php endfor;?>
        <div class="class">
            <a  href="../uploads/create_group.php"><img class="plus" src="../images/+.png" alt=""></a>
            <a class="dob" href="../uploads/create_group.php">Создать</a>
        </div>
    </section>
    <section class="messages">
        <a>Сообщения (<?=$i?>)</a>
        <?php for($k = 0; $k < 5; $k++):?>
        <div class="message">
            <div class="user">
                <div class="photo"></div>
                <div class="dan">
                    <div class="name">
                        Вася
                    </div>
                    <div class="date">
                        05.05.2020
                    </div>
                </div>
            </div>
            <div class="theme">
                <h6><?php echo $_COOKIE['name'] ." " . $_COOKIE['lastname']?></h6>
            </div>
            <div id="text">
                Lorem ipsusdf dsfsdf sdfd df f  Lorem ipsum  
            </div>
        </div>
        <?php endfor; ?>
    </section>
</body>
</html>
<?php
//Импорт идентификатора группы
$id = $_POST["id"];
//Подключение к базе данных
$connection = mysqli_connect('localhost', 'root', '', 'freetime');
// $result = mysqli_query($connection, "SELECT * FROM `messages` WHERE `group_id` = "$id"");       
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles3.css">
    <link rel="stylesheet" href="css/chat.css">
    <title>Группа <?=$num['title']?></title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        var username = null, start = 0, url = "http://53.com/uploads/messages.php";
        $(document).ready(function() {
            username = "<?php echo $_COOKIE['name'] . ' ' . $_COOKIE['lastname'];?>";
            load();
            var group_id = <?=$id?>;
            $('form').submit(function(e) {
                $.post(url, {
                    message: String($('#message').val()),
                    username: username,
                    group_id: group_id
                });
                $('#message').val('');
                return false;
            })
        });
        function load() {
            $.get(url + '?start=' + start, function(result){
                if(result.items){
                    result.items.forEach(item=>{
                        start = item.id;
                        $('#messages').append(renderMessage(item));
                    });
                    $('#messages').animate({scrollTop: $('#messages')[0].scrollHeight});
                };
                load();
            });
        }
        function renderMessage(item) {
            let time = new Date(item.created);
            time = `${time.getHours()}:${time.getMinutes() < 10 ? '0' : ''}${time.getMinutes()}`;
            return `<div class="msg"><p>${item.username}</p>${item.message}<span>${time}</span></div>`;
        }
    </script>
</head>
<body>
    <!-- 9 класс большой блок -->
    <div class="main">
        <div class="upTittle">
            <a href="#"><?=$num["title"]?></a>
            Ваша ссылка подтверждения<br>
            <a href="#"><?=$num["link"]?></a>
        </div>
        <div class="bottomBlock">
            <!-- сам чат -->
            <div class="chat">
                <div id="messages">
                </div>
                <form>
                    <input type="text" id="message" placeholder="Пишите здесь...">
                    <input type="submit" value="Отправить">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
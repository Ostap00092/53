<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/chat.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script>
        var username = null, start = 0, url = "http://53.com/uploads/messages.php";
        $(document).ready(function() {
            username = "<?php echo $_COOKIE['name'] . ' ' . $_COOKIE['lastname'];?>";
            load();
            $('form').submit(function(e) {
                $.post(url, {
                    message: String($('#message').val()),
                    username: username
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
    <title>53</title>
</head>
<body>
    
    <div id="messages">
    </div>
    <form>
        <input type="text" id="message" placeholder="Пишите здесь...">
        <input type="submit" value="Отправить">
    </form>
</body>
</html>
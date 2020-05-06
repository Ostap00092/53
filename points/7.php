<?php
//Удаление куки
unset($_COOKIE['online']);
setcookie('online', null, -1, '/');
unset($_COOKIE['role']);
setcookie('role', null, -1, '/');
unset($_COOKIE['id']);
setcookie('id', null, -1, '/');
unset($_COOKIE['name']);
setcookie('name', null, -1, '/');
unset($_COOKIE['lastname']);
setcookie('lastname', null, -1, '/');
?>

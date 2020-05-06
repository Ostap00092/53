<?php

include("connect.php");

$result = array();
$message = isset($_POST['message']) ? $_POST['message'] : null;
$username = isset($_POST['username']) ? $_POST['username'] : null;
if(!empty($message) && !empty($username)){
    $sql = "INSERT INTO `messages` (`message`, `username`) VALUES ('".$message."', '".$username."')";
    $result['send_status'] = $db->query($sql);
}

//Получаем сообщения
$start = isset($_GET['start']) ? intval($_GET['start']) : 0;
$items = $db->query("SELECT * FROM `messages` WHERE `id` > " . $start);
while($row = $items->fetch_assoc()){
    $result['items'][] = $row;
}
$db->close();

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

echo json_encode($result);
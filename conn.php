<?php
// SQL连接
// IP，用户名，密码，数据库名↓
$link = new mysqli('localhost','Name','Password','Database');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("Failed to connect: " . $conn->connect_error);
}
// SQL数据表↓
$ranking = "kano_rank";
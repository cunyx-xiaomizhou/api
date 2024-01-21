<?php
require('json.php');
require('config.php');
$data = isConfig();
$conn = new mysqli(
    $data['host'],
    $data['databse_username'],
    $data['databse_password'],
    $data['databse']);
if ($conn->connect_error) {
    echo sent(500,"连接失败: ".$conn->connect_error);
    exit;
} else {
    $conn->query("set names utf8"); 
    return true;
}
?>
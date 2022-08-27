<?php
$w1 = $_GET['w1'];
$w2 = $_GET['w2'];
$mysql = new mysqli('localhost', 'root', '', 'stardom');
$result = $mysql->query("DELETE FROM `5stargp` WHERE `Рестлер1`='$w1' AND `Рестлер2`='$w2'");
$mysql->close();
header('Location: gp2022.php');
?>
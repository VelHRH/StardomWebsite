<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Top Matches</title>
</head>
<body>
    <?php
    require_once 'header.php';
    $w = filter_var(trim($_GET['w']), FILTER_SANITIZE_STRING);
    $wrestlers = array();
    $mysql = new mysqli('localhost', 'root', '', 'stardom');
    $result = $mysql->query("SELECT * FROM `stardom` WHERE `Матч` LIKE '%$w%' order by `Рейтинг` desc");
    ?>
    <table>
    <tr>
        <th>Match</th>
        <th>Rating</th>
    </tr>
    <?php
    while ($match = $result->fetch_assoc()){
        $i = $match['Матч'];
        $j = $match['Рейтинг'];
        if ($j==5){
        ?> 
        <tr> 
            <td><a href="#"><?php echo $i; ?></a></td>
            <td style="background-color: rgb(0, 81, 0); color: white;"><?php echo $j; ?></td>
        </tr>
        
        <?php
        }
        if ($j==4.75){
            ?> 
            <tr> 
                <td><a href="#"><?php echo $i; ?></a></td>
                <td style="background-color: rgb(0, 111, 0); color: white;"><?php echo $j; ?></td>
            </tr>
            
            <?php
        }
        if ($j==4.5){
            ?> 
            <tr> 
                <td><a href="#"><?php echo $i; ?></a></td>
                <td style="background-color: rgb(0, 141, 0); color: white;"><?php echo $j; ?></td>
            </tr>
            
            <?php
        }
        if ($j==4.25){
            ?> 
            <tr> 
                <td><a href="#"><?php echo $i; ?></a></td>
                <td style="background-color: rgb(0, 171, 0); color: white;"><?php echo $j; ?></td>
            </tr>
            
            <?php
        }
        if ($j==4){
            ?> 
            <tr> 
                <td><a href="#"><?php echo $i; ?></a></td>
                <td style="background-color: rgb(0, 201, 0); color: white;"><?php echo $j; ?></td>
            </tr>
            
            <?php
        }
        if ($j==3.75){
            ?> 
            <tr> 
                <td><a href="#"><?php echo $i; ?></a></td>
                <td style="background-color: rgb(0, 231, 0); color: white;"><?php echo $j; ?></td>
            </tr>
            
            <?php
        }
    }
    ?>
    </table>
</body>
</html>

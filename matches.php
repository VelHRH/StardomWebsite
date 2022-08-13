<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Top Matches</title>
</head>
<style>
    table{
        display: flex;
        justify-content: center;
        border-collapse:separate; 
        border-spacing: 0.5em 0.5em;
    }
table th, td {
    padding:.25em .5em;
    text-align:left;
    border-radius: 10px;
    margin: 10px;
  }
  td {
    background-color:#eee; 
       
  }
  th {
    background-color:#009;
    color:#fff;
  }
</style>
<body>
    <?php
    require_once 'header.php';
    
    $wrestlers = array();
    $mysql = new mysqli('localhost', 'root', '', 'betdb');
    $result = $mysql->query("SELECT * FROM `stardom` order by `Рейтинг` desc");
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

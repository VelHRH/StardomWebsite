<?php

    $match = filter_var(trim($_POST['mname']), FILTER_SANITIZE_STRING);
    $show = filter_var(trim($_POST['show']), FILTER_SANITIZE_STRING);
    $year = filter_var(trim($_POST['year']), FILTER_SANITIZE_STRING);
    $rating = filter_var(trim($_POST['rating']), FILTER_SANITIZE_STRING);
    







    





    if (($match=="") || ($show=="") || ($year=="") || ($rating=="None")){
        echo "Uncorrect input!";
    }
    else{
        $mysql = new mysqli('localhost', 'root', '', 'stardom');
        $result = $mysql->query("INSERT INTO `5stargp`(`Рестлер1`, `Рестлер2`, `Год`, `Рейтинг`) VALUES ('$match','$show','$year','$rating')");
        $mysql->close();
        header('Location: gp2022.php');
    }
?>
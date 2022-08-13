<?php

    $match = filter_var(trim($_POST['mname']), FILTER_SANITIZE_STRING);
    $show = filter_var(trim($_POST['show']), FILTER_SANITIZE_STRING);
    $year = filter_var(trim($_POST['year']), FILTER_SANITIZE_STRING);
    $rating = filter_var(trim($_POST['rating']), FILTER_SANITIZE_STRING);
    
    if (($match=="") || ($show=="") || ($year=="") || ($rating=="None")){
        echo "Uncorrect input!";
    }
    else{
        $mysql = new mysqli('localhost', 'root', '', 'betdb');
        $result = $mysql->query("INSERT INTO `stardom`(`Матч`, `Шоу`, `Год`, `Рейтинг`) VALUES ('$match','$show','$year','$rating')");
        $mysql->close();
        header('Location: matches.php');
    }
?>
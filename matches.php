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
    
    $wrestlers = array();
    $mysql = new mysqli('localhost', 'root', '', 'betdb');
    $result = $mysql->query("SELECT * FROM `stardom`");
    $i=0;
    while ($match = $result->fetch_assoc()){
        $i++;
        $j=0;
        foreach ($match as $k => $v){
            if ($j==0){echo "$i. $v | ";}
            elseif ($j==3){
                echo "$v";
            }
            else {
                echo "$v | ";
            }
            $j++;
        }
        ?> <br> <?php
    }
    ?>
</body>
</html>

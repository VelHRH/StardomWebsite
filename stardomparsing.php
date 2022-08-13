<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Top Wrestlers</title>
</head>
<body>
    <?php
    require_once 'header.php';
    function multiexplode ($delimiters,$string) {

        $ready = str_replace($delimiters, $delimiters[0], $string);
        $launch = explode($delimiters[0], $ready);
        return  $launch;
    }
    
    $wrestlers = array();
    $mysql = new mysqli('localhost', 'root', '', 'betdb');
    $result = $mysql->query("SELECT `Матч` FROM `stardom`");
    while ($user = $result->fetch_assoc()){
        foreach ($user as $k => $v){
            $piec = multiexplode(array(", "," пр. ", " и "),$v);
            foreach ($piec as $kk => $vv){
                $wrestlers[] = $vv; 
            }
        }
    }
    $unique = array();
    foreach ($wrestlers as $kk => $vv){
        $i = 0;
        foreach ($unique as $kkk => $vvv){
            if ($vv == $vvv) {$i=100; break;} 
        }
        if ($i == 0){
            $unique[]=$vv;
        }
     }
     $final = array();
     foreach ($unique as $kk => $vv){
        $i = 0;
        foreach ($wrestlers as $kkk => $vvv){
            if ($vv == $vvv) {$i++;} 
        }
            $final[$vv] = $i;
     }
     asort($final);
     $final2 = array_reverse($final);
     $i = 0;
     foreach ($final2 as $kkk => $vvv){
        $i++;
        if ($i<11){
            ?>
            <span style="font-size:40px"><?php echo "$i. $kkk - $vvv"; ?></span>
            <?php
        } else {echo "$i. $kkk - $vvv";}
        ?> <br> <?php
    }
    ?>
</body>
</html>

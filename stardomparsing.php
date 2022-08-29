<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Top Wrestlers</title>
    <style>
        img.profile{
            width: 200px;
            height: 200px;
            object-fit: cover;
            object-position: 0 0;
            background-color: rgba(0, 78, 147, 0.201);
            border-radius: 10px;
            margin: 10px 10px;
        }
        img.profile:hover{
            transition: .5s; filter: blur(2px);
            background-color: rgba(0, 78, 147, 0.918);
            cursor:pointer;
        }
        .row-block{
            display: flex;
            justify-content:center;
            flex-wrap:wrap;
            
        }
        a.profile{
            position: relative;
        }
        .col {
            position: absolute;
  font-size: 35px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color:white;
  opacity:0;
}
img.profile:hover ~ .col{
    text-shadow: 0 0 5px black;
    transition: 0.5;
    opacity:1;
}
    </style>
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
    $mysql = new mysqli('localhost', 'root', '', 'stardom');
    $result = $mysql->query("SELECT `Матч` FROM `stardom`");
    while ($user = $result->fetch_assoc()){
        foreach ($user as $k => $v){
            $piec = multiexplode(array(", "," пр. ", " и "),$v);
            foreach ($piec as $kk => $vv){
                if ($vv=="Каири Ходжо") {$vv="Каири";}
                $wrestlers[] = $vv; 
            }
        }
    }
    $mysql = new mysqli('localhost', 'root', '', 'stardom');
    $result = $mysql->query("SELECT `Матч` FROM `ajw`");
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
        ?> <br><div class="block"><div class="row-block"> <?php
    foreach ($final2 as $k => $v){
                $st = $k;
                $n = str_replace(" ", "", $st);
                $n = "./img/" . $n . ".png";
            ?>
            <a class="profile" href="wrestler.php?w=<?php echo $st ?>"><img class="profile" src="<?php echo $n; ?>" alt="<?php echo $st; ?>"><span class="col"><?php echo $v; ?></span></a>
            <?php
            }
            ?></div></div>
</body>
</html>

<?php

    $MA = filter_var(trim($_POST['mname']), FILTER_SANITIZE_STRING);
    $SH = filter_var(trim($_POST['show']), FILTER_SANITIZE_STRING);
    $YE = filter_var(trim($_POST['year']), FILTER_SANITIZE_STRING);
    $RA = filter_var(trim($_POST['rating']), FILTER_SANITIZE_STRING);
    






    $mysql = new mysqli('localhost', 'root', '', 'stardom');
    $res = $mysql->query("SELECT `Рестлер1` FROM `5stargp` ORDER BY `Рейтинг` desc");
            $wrsetlers = array();
            while ($match = $res->fetch_assoc()){
                $i = $match['Рестлер1'];
                $kontrol = 0;
                foreach ($wrsetlers as $k => $v){
                    if ($v==$i){
                        $kontrol++;
                        break;
                    }
                }
                if($kontrol==0){
                    $wrsetlers[] = $i;
                }
            }
            $res = $mysql->query("SELECT `Рестлер2` FROM `5stargp` ORDER BY `Рейтинг` desc");
            while ($match = $res->fetch_assoc()){
                $i = $match['Рестлер2'];
                $kontrol = 0;
                foreach ($wrsetlers as $k => $v){
                    if ($v==$i){
                        $kontrol++;
                        break;
                    }
                }
                if($kontrol==0){
                    $wrsetlers[] = $i;
                }
            }
            $w = array();
            foreach ($wrsetlers as $k => $v){
                $res = $mysql->query("SELECT AVG(`Рейтинг`) AS `avg` FROM `5stargp` WHERE `Рестлер1`='$v' or `Рестлер2`='$v'");
                $m = $res->fetch_assoc();
                $okr = $m['avg'];
                $okr = round($okr, 2);
                $w[$v]=$okr;
            }

            $kont=0;
            foreach ($w as $k => $v){
                if ($MA==$k){
                    $kont++;
                    break;
                }
            }
            $kont1=0;
            foreach ($w as $k => $v){
                if ($SH==$k){
                    $kont1++;
                    break;
                }
            }
            if ($kont==0) {echo "Неправильный ввод 'Рестлер 1'"; echo "<br>";
            }
            elseif ($kont1==0) {echo "Неправильный ввод 'Рестлер 2'"; echo "<br>";
            }





    elseif (($MA=="") || ($SH=="") || ($YE=="") || ($RA=="None")){
        echo "Пустые поля!"; echo "<br>";
    }
    else{
        $result = $mysql->query("INSERT INTO `5stargp`(`Рестлер1`, `Рестлер2`, `Год`, `Рейтинг`) VALUES ('$MA','$SH','$YE','$RA')");
        $mysql->close();
        header('Location: gp2022.php');
    }
?>
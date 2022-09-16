<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <title>5STAR Grand Prix</title>
</head>
<style>
.fo{
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }
    form{
        font-size:20px;
    }
    input, select{
        font-size:20px;
        border:none;
        margin-bottom: 20px;
        width: 300px;
        height: 1.5em;
        border-radius: 5px;
    }
    button{
        font-family: Trebuchet MS, Verdana, Geneva, Tahoma, sans-serif;
        width: 100%;
        border-radius: 5px;
        background-color: rgba(0, 78, 147, 0.918);
        opacity: 0.5;
        color:#fff;
        border: none;
        font-size:20px;
        height: 2em;
        transition: .5s;
    }
    button:hover{
        opacity: 1;
    }

.wrapper {
    display: grid;
    grid-template-areas: "A B"
                         "C B";
    grid-template-columns: repeat(2, 1fr);
  }
  .box1{
      grid-area: A;
     
  }
  .box2{
      grid-area: B;
      height: 92vh;
      overflow:scroll;
  }
  .box3{
      grid-area: C;
      display: flex;
      height: 53vh;
      overflow:scroll;
      
  }
  .part{
    display: inline-block;
  }
  .inline-block{
   
  }
  img  {
   height: 45vh;
}

.fa-times{
    color: red;
    opacity: 0.3;
}

.fa-times:hover{
    opacity: 1;
}

</style>
<body>
    <?php
    require_once 'header.php';
    ?>
    <div class="wrapper">
        <div class="box1">
            <div class="fo">
                <form action="addhandlegp.php" method="post">
                    <div class = "part">
                    <label for="mname">Рестлер 1:</label><br>
                    <input type="text" id="mname" name="mname"><br>
                    <label for="show">Рестлер 2:</label><br>
                    <input type="text" id="show" name="show"><br>
                    </div>
                    <div class = "part">
                        <label for="year">Год:</label><br>
                        <input type="number" min="2011" max="2023" step="1" name="year" value="2022"/><br>
                        <label for="rating">Рейтинг:</label><br>
                        <select name="rating" id="rating">
                            <option value="None" selected>Choose</option>
                            <option value="5">5</option>
                            <option value="4.75">4.75</option>
                            <option value="4.5">4.5</option>
                            <option value="4.25">4.25</option>
                            <option value="4">4</option>
                            <option value="3.75">3.75</option>
                            <option value="3.5">3.5</option>
                            <option value="3.25">3.25</option>
                            <option value="3">3</option>
                            <option value="2.75">2.75</option>
                            <option value="2.5">2.5</option>
                            <option value="2.25">2.25</option>
                            <option value="2">2</option>
                            <option value="1.75">1.75</option>
                            <option value="1.5">1.5</option>
                            <option value="1.25">1.25</option>
                            <option value="1">1</option>
                            <option value="0.75">0.75</option>
                            <option value="0.5">0.5</option>
                            <option value="0.25">0.25</option>
                            <option value="0">0</option>
                        </select>
                    </div>
                    <br><br>
                    <button type="submit">Send</button>
                </form>
            </div>
        </div>
        <div class="box2">
        <table>
            <tr>
                <th>Match</th>
                <th>Rating</th>
            </tr>
    <?php
    $mysql = new mysqli('localhost', 'root', '', 'stardom');
    $result = $mysql->query("SELECT `Рестлер1`, `Рестлер2`, `Рейтинг` FROM `5stargp` ORDER BY `Рейтинг` desc");
    $schet = 0;
    while ($match = $result->fetch_assoc()){
        $schet++;
        $i = $match['Рестлер1'];
        $i2 = $match['Рестлер2'];
        $j = $match['Рейтинг'];
        if ($j==5){
        ?> 
        <tr> 
            <td><a href="#"><?php echo "$schet. $i vs. $i2"; ?></a></td>
            <td style="background-color: rgb(0, 81, 0); color: white;"><?php echo $j; ?></td>
            <td style="background-color: rgba(212, 232, 249, 0.918);"><a href="deletehandle.php?w1=<?php echo $i ?>&w2=<?php echo $i2 ?>" class="fa fa-times"></a></td>
        </tr>
        
        <?php
        }
        if ($j==4.75){
            ?> 
            <tr> 
                <td><a href="#"><?php echo "$schet. $i vs. $i2"; ?></a></td>
                <td style="background-color: rgb(0, 111, 0); color: white;"><?php echo $j; ?></td>
                <td style="background-color: rgba(212, 232, 249, 0.918);"><a href="deletehandle.php?w1=<?php echo $i ?>&w2=<?php echo $i2 ?>" class="fa fa-times"></a></td>
            </tr>
            
            <?php
        }
        if ($j==4.5){
            ?> 
            <tr> 
                <td><a href="#"><?php echo "$schet. $i vs. $i2"; ?></a></td>
                <td style="background-color: rgb(0, 141, 0); color: white;"><?php echo $j; ?></td>
                <td style="background-color: rgba(212, 232, 249, 0.918);"><a href="deletehandle.php?w1=<?php echo $i ?>&w2=<?php echo $i2 ?>" class="fa fa-times"></a></td>
            </tr>
            
            <?php
        }
        if ($j==4.25){
            ?> 
            <tr> 
                <td><a href="#"><?php echo "$schet. $i vs. $i2"; ?></a></td>
                <td style="background-color: rgb(0, 171, 0); color: white;"><?php echo $j; ?></td>
                <td style="background-color: rgba(212, 232, 249, 0.918);"><a href="deletehandle.php?w1=<?php echo $i ?>&w2=<?php echo $i2 ?>" class="fa fa-times"></a></td>
            </tr>
            
            <?php
        }
        if ($j==4){
            ?> 
            <tr> 
                <td><a href="#"><?php echo "$schet. $i vs. $i2"; ?></a></td>
                <td style="background-color: rgb(0, 201, 0); color: white;"><?php echo $j; ?></td>
                <td style="background-color: rgba(212, 232, 249, 0.918);"><a href="deletehandle.php?w1=<?php echo $i ?>&w2=<?php echo $i2 ?>" class="fa fa-times"></a></td>
            </tr>
            
            <?php
        }
        if ($j==3.75){
            ?> 
            <tr> 
                <td><a href="#"><?php echo "$schet. $i vs. $i2"; ?></a></td>
                <td style="background-color: rgb(0, 231, 0); color: white;"><?php echo $j; ?></td>
                <td style="background-color: rgba(212, 232, 249, 0.918);"><a href="deletehandle.php?w1=<?php echo $i ?>&w2=<?php echo $i2 ?>" class="fa fa-times"></a></td>
            </tr>
            
            <?php
        }
        if ($j<3.75){
            ?> 
            <tr> 
                <td><a href="#"><?php echo "$schet. $i vs. $i2"; ?></a></td>
                <td style="background-color: #eee; color: rgba(0, 109, 204, 0.918);"><?php echo $j; ?></td>
                <td style="background-color: rgba(212, 232, 249, 0.918);"><a href="deletehandle.php?w1=<?php echo $i ?>&w2=<?php echo $i2 ?>" class="fa fa-times"></a></td>
            </tr>
            
            <?php
        }
    }
    ?>
    </table>
        </div>
        <div class="box3" id="box3">
            <?php
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
            arsort($w);
            foreach ($w as $k => $v){
                $st = $k;
                $n = str_replace(" ", "", $st);
                $n = "./img/" . $n . ".png";
            ?>
            <div class="inline-block"><img src="<?php echo $n; ?>" alt="<?php echo $st; ?>"><div style="text-align: center; font-size: 24px; color: rgba(0, 109, 204, 0.918);"><?php echo $v ?></div></div>
            <?php
            }
            ?>
        </div>
    </div>
    <script>
        const scrollContainer = document.getElementById('box3');

        scrollContainer.addEventListener("wheel", function (e) {
        if (e.deltaY > 0) {
            scrollContainer.scrollLeft += 70;
            e.preventDefault();
        }
        else {
            scrollContainer.scrollLeft -= 70;
            e.preventDefault();
        }
        });
    </script>
</body>
</html>

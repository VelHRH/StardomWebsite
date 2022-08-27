<link rel="stylesheet" href="./styles/styles.css">
<script src="menubtn.js"></script>
<nav>
        <a onclick="show()">Топ матчей</a>
        <a href="./stardomparsing.php">Топ рестлеров</a>
        <a href="./adding.php">Добавить матч</a>
        <a onclick="showw()">5STAR Grand Prix</a>
</nav>

<style>
        .imgmenu {height: 80px; border-radius: 10px; padding: 5px;}
.imgmenu:hover {background: #eee; transition: .5s; filter: blur(2px);}
#slidebarr {left: -100%; background: rgba(0, 78, 147, 0.918); position: absolute; width: 100%; opacity: 0; transition: .5s}
#slidebarr.active {opacity: 1; left:0;}
#gp2022 {
  position: absolute;
  font-size: 20px;
  top: 50%;
  left: 75px;
  transform: translate(-50%, -50%);
  color:white;
  opacity:0;
}
#gp2022:hover .imgmenu {background: #eee; transition: .5s; filter: blur(2px);}
.imgmenu:hover ~ #gp2022{
        opacity:1;
        transition: .5s;
}
</style>
<div id="slidebar">
        <a href="./matches.php"><img class="imgmenu" src="https://www.pwtorch.com/site/wp-content/uploads/post/2019/06/world-wonder-ring-stardom.png" alt="Stardom"></a>
        <a href="./ajwmatches.php"><img class="imgmenu" src="https://www.pwponderings.com/wp-content/uploads/2022/03/PsUnZjWA1e9fCOF7rS1T.jpg" alt="AJW"></a>
</div>

<div id="slidebarr">
        <a href="./gp2022.php"><img class="imgmenu" src="https://i.ytimg.com/vi/pFFo5-Z7e0s/maxresdefault.jpg" alt="Stardom"><div id="gp2022">2022</div></a>
</div>

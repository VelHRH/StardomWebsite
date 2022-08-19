<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>Top Matches</title>
</head>
<script>
    let promise = new Promise(function(resolve, reject) {

setTimeout(() => console.log("done!"), 1000);

});


promise.then(

result => alert(result), 

error => alert(error) 

);
</script>
<style>
    .fo{
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }
    form{
        font-size:20px;
        width: 300px;
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
</style>
<body>
    <?php
    require_once 'header.php';
    ?>
    <div class="fo">
    <form action="addhandle.php" method="post">
        <label for="mname">Матч:</label><br>
        <input type="text" id="mname" name="mname"><br>
        <label for="show">Шоу:</label><br>
        <input type="text" id="show" name="show"><br>
        <label for="year">Год шоу:</label><br>
        <input type="number" min="2011" max="2023" step="1" name="year"/><br>
        <label for="rating">Рейтинг:</label><br>
        <select name="rating" id="rating">
            <option value="None" selected>Choose</option>
            <option value="5">5</option>
            <option value="4.75">4.75</option>
            <option value="4.5">4.5</option>
            <option value="4.25">4.25</option>
            <option value="4">4</option>
            <option value="3.75">3.75</option>
        </select><br><br>
        <button type="submit">Send</button>
    </form></div>
</body>
</html>

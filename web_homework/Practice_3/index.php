<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="container_k">
<form action="" method="post">
    <label>Логин</label><input type="text" name="login"> 
    <label>Пароль</label><input type="password" name="password"> 
    <label>Почта</label><input type="email" name="email">
    <input class="input_submit_yes" type="submit" value="Отправить">
    </form>
        <div id="dd">
     <?php
     if (isset($_POST["login"]) and isset($_POST["password"]) and isset($_POST["email"])){
     echo "<p>Ваш логин:</p>" . " " . strip_tags($_POST["login"]);
     echo "<br>";
     echo "<p>Ваш пароль:</p>" . " " . strip_tags($_POST["password"]);
     echo "<br>";
     echo "<p>Ваша почта:</p>" . " " . strip_tags($_POST["email"]);
     }
         ?>
        </div> 
</div>
</body>
</html>




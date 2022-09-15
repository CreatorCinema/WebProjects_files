<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form1</title>
</head>
<body>
<form action="" method="post">

<p><input type="text" name="surname"></p>
<p><input type="date" name="date_bt"></p>
<p>Пол: Мужской<input type="radio" name="gender" value="м">Женский<input type="radio" name="gender" value="ж"></p>
<input type="submit" value="Отправить" name="submit" id="submit_id1">
</form>

    <?php
    $host='localhost';
    $login='a0717798_root';
    $password='root';
    $base='a0717798_root';
    $db=mysqli_connect($host, $login, $password, $base);
    mysqli_set_charset($con, "utf8");
    
    if (isset($_POST["submit"])) {
        $surname = $_POST["surname"];
        $data = $_POST["date_bt"];
        $gender=$_POST["gender"];

        $ins=mysqli_query($db, "INSERT INTO `actors` (`id`, `surname`, `date_bt`, `gender`) VALUES (NULL, '$surname', '$data', '$gender');");

        if ($ins){
            echo "Данные, котовые Вы ввели:"; echo "<br>";
            echo $surname; echo "<br>";
            echo $data; echo "<br>";
            echo $gender; echo "<br>";
        }
        
    }

?>
</body>
</html>


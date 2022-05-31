<!DOCTYPE html>
<html>
    <head>
        <title>Metanit.com</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>
            <?= "Первый сайт на PHP"; ?>
        </h1>
        <div>
        <?php
        $name = "не определено";
        $age = "не определен";
            if(isset($_GET["name"])){
  
                $name = $_GET["name"];
            }
            if(isset($_GET["age"])){
  
                $age = $_GET["age"];
            }
        echo "Имя: $name <br> Возраст: $age";
        ?>
        </div>
    </body>
<html>
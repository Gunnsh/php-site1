<!doctype html>
<html>
    <head>
        <title>UL'TANIT.com</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
        $name = "не определено";
        $age = "не определено";
        if (isset($_POST["name"])){
            $name = strip_tags($_POST["name"]);
        }
        if (isset($_POST["age"])){
            $age = strip_tags($_POST["age"]);
        }
        echo "Имя: $name <br> Возраст: $age";
        ?>
        <h3>Форма ввода данных</h3>
            <form method="POST">
                <p>Имя: <input type="text" name="name" /></p>
                <p>Возраст: <input type="number" name="age" /></p>
                <input type="submit" value="Отправить">
            </form>
    </body>
</html>
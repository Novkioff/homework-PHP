<?php if (isset($_POST["speed"])); {$speed = ($_POST["speed"]);}?>
<?php if (isset($_POST["value"])); {$but_sub = ($_POST["value"]);}?>

<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Homewowk PHP 1</title>
        <style type="text/css">
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .wrapper {
                width: 960px;
                height: 960px;
                min-height: 100%;
                max-width: 960px;
                min-width: 470px;
                margin: 0 auto;
                border: 1px solid black;
                padding: 10px;
            }
            h1 {
                text-align: center;
                padding-bottom: 50px;
            }
            form[name="speed_control"] {
                padding-bottom: 50px;
            }
            input[name="speed"] {
                height: 50px;
                width: 550px;
            }
            button[name="button_submit"] {
                height: 50px;
                width: 150px;
                border: none;
                color: #ffffff;
                background-color: red;
            }
            p {
                padding-bottom: 50px;
            }
            a {
                text-decoration: none;
                padding: 40px;
                background-color: chartreuse;
                border-radius: 5px;
                color: grey;
                text-align: center;
            }
            .red {
                color: red;
                font-size: 22px;
            }
            .green {
                color: green;
                font-size: 22px;
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <h1>Домашнее задание по PHP - форма контроля скорости</h1>
            <div class="form_speed">
                <form name="speed_control" action="index.php" method="post">
                    <input type="text" name="speed" placeholder="Введите скорость">
                    <button type="submit" name="button_submit">Проверить</button>
                </form>
            </div>
            <?php
                $normal = 60;
                if ($speed > $normal) {
                    $excess = ($speed - $normal);
                    echo "<p class='red'>Вы превысили скорость на ", $excess, " км/ч</p>";
                    echo "<a href='http://homework040717/' title='назад'>НАЗАД</a>";


                }
                elseif ($speed <= $normal and isset($speed)) {
                    echo "<p class='green'>Скорость в норме</p>";
                    echo "<a href='http://homework040717/' title='назад'>НАЗАД</a>";
                }


            ?>
    </body>
</html>

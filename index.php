<html>
<head>
    <title>introduction</title>
    <style>
        @font-face {
            font-family: "BebasRegular";
            src: url("fonts/BebasRegular/BebasRegular.eot");
            src: url("fonts/BebasRegular/BebasRegular.eot?#iefix")format("embedded-opentype"),
            url("fonts/BebasRegular/BebasRegular.woff") format("woff"),
            url("fonts/BebasRegular/BebasRegular.ttf") format("truetype");
            font-style: normal;
            font-weight: normal;
        }

        @font-face {
            font-family: "BebasBold";
            src: url("fonts/BebasBold/BebasBold.eot");
            src: url("fonts/BebasBold/BebasBold.eot?#iefix")format("embedded-opentype"),
            url("fonts/BebasBold/BebasBold.woff") format("woff"),
            url("fonts/BebasBold/BebasBold.ttf") format("truetype");
            font-style: normal;
            font-weight: normal;
        }

        @font-face {
            font-family: "RobotoLight";
            src: url("fonts/RobotoLight/RobotoLight.eot");
            src: url("fonts/RobotoLight/RobotoLight.eot?#iefix")format("embedded-opentype"),
            url("fonts/RobotoLight/RobotoLight.woff") format("woff"),
            url("fonts/RobotoLight/RobotoLight.ttf") format("truetype");
            font-style: normal;
            font-weight: normal;
        }

        body {
            padding: 40px 100px 20px 100px;
        }
        h1 {
            background-color: #f7931e;
            font-family: 'BebasBold';
            text-align: center;
            font-size: 40px;
        }
        h2 {
            margin-bottom: 15px;
            padding: 15px;
            border: 2px dashed black;
            font-family: 'BebasRegular';
            text-align: center;
            font-size: 25px;
        }
        h3 {
            font-family: 'RobotoLight';
            font-size: 18px;
        }
        p {
            font-family: 'RobotoLight';
            font-size: 15px;
        }
        span{
            font-size: 18px;
            font-family: 'RobotoLight';
            font-weight: bold;
            text-decoration: underline;
        }
        .code {
            background-color:#0221ed;
            color: #fff;
        }
        .el {
            padding-top: 20px;
            padding-bottom: 20px;
            padding-left: 35%;
            padding-right: 35%;
        }
    </style>
</head>
<body>
<h1>Здравствуйте, меня зовут Анастасия.</h1>
<h2>Я начинающий php-разработчик, и эту страницу я создала специально для команды BeeGee, чтобы продемеонтрировать cвой код, и лучше познакомиться. Здесь Вы найдёте два блока, которые я успела сделать за час, вместе с этой страничкой. Пролистайте, пока отправляете тестовое задание. </h2>
<p><span>Небольшой стори тайм:</span> <br><br>Закончила 11 классов в этом году, успешно сдала ЕГЭ по математике и информатике и поступила в МТУСИ на факультет ИТ. Я выбрала для себя заочное обучение, потому что очень хочу как можно больше времени уделять работе и практике, над чем, собственно говоря, сейчас плотно работаю. <br><br>Около года я активно занималась версткой. Сначала только для себя, изучала сорвеменные стандарты и технологии. Освоила responsive-верстку на HTML/CSS, работала с системами управления MODx и Wordpress, для верстки в основном использовала фреймворк Twitter Bootstrap, также неплохо освоила дизайн продающих страниц и графические редакторы. В итоге сделала пару проектов для знакомых, после чего поняла, что не хочу останавливаться на создании статических страниц и использовать библиотеки скриптов и готовые CMS. Так я пришла к изучению PHP. Изначально моей целью было создать собственную CMS, без лишних функций и примочек, чтобы все в ней было сделано исключительно для меня. Я окунулась с головой в серверное программироавние и это меня крайне увлекло. <br><br>Ваша стажировка мне крайне интересна, потому что я хочу получить бесценный опыт реальной работы. Пусть я еще, возможно, не доросла до оплачиваемого даже junior developer-а, однако, я очень быстро учусь и намного приятнее было бы делать это не в одиночку) </p>
<div class="el"><img src="kiKByR9dT.png"></div>

<?php

echo "<h1>Hello, world!</h1><br><br>";
echo "<h3>1. Простой калькулятор на php. </h3><br>";
if($_POST['submit'])
{
    $a=(int) $_POST['num1'];
    $b=(int) $_POST['num2'];
    $p=$_POST['operation'];
    $c;
    if($p=='+')
        $c=$a+$b;
    if($p=='-')
        $c=$a-$b;
    if($p=='*')
        $c=$a*$b;
    if($p=='/')
    {
        if($b==0)
            echo "Наймите репетитора по математике";
        else  $c=$a/$b;
    }
    if($p=='^')
        $c=pow($a,$b);

}

?>
<form action="" method="post">
    <input type="textbox" name="num1" required>

    <select name="operation" required>
        <option value ="+">+</option>
        <option value ="-">-</option>
        <option value ="*">*</option>
        <option value ="/">/</option>
        <option value ="^">^</option>
    </select>

    <input type="textbox" name="num2" required>
    <input type="submit" name="submit">
</form>
<?php
echo $c;
echo "<br><br>"
?>

<span>Исходный код: </span>

<div class="code" style="height:200px;width:500px; overflow : scroll;">
    <p>&lt?php<br>

        if($_POST['submit'])<br>
        {<br>
            $a=(int) $_POST['num1'];<br>
            $b=(int) $_POST['num2'];<br>
            $p=$_POST['operation'];<br>
            $c;<br>
            if($p=='+')<br>
                $c=$a+$b;<br>
            if($p=='-')<br>
                $c=$a-$b;<br>
            if($p=='*')<br>
                $c=$a*$b;<br>
            if($p=='/')<br>
            {<br>
                if($b==0)<br>
                    echo "Наймите репетитора по математике";<br>
                else  $c=$a/$b;<br>
            }<br>
            if($p=='^')<br>
                $c=pow($a,$b);<br>

        }<br>

        ?&gt<br>
    < form action="" method="post"><br>
        < input type="textbox" name="num1" required><br>

        < select name="operation" required><br>
            < option value ="+">+< /option><br>
            < option value ="-">-< /option><br>
            < option value ="*">*< /option><br>
            < option value ="/">/< /option><br>
            < option value ="^">^< /option><br>
        < /select><br>

        < input type="textbox" name="num2" required><br>
        < input type="submit" name="submit"><br>
    < /form><br>
    < ?php<br>
    echo $c;<br>
    ?></p>
</div>

<br><br>
<h3>2. Небольшая задачка на php</h3><br>
<p>Рассчитать скорость движения машины и вывести её в удобочитаемом виде. Осуществить возможность вывода в км/ч, м/c.<br>
    Исходные данные: Пройденный путь - S; Время движения - t.<br>
    Представить решение задачи с помощью одной функции.</p><br>




<?php
session_start();

function speed($s, $t, $val){
    $speed[1] = $s / $t . " км/ч";
    $speed[2] = $speed[1] / 3.6 . " м/с";
    return $speed[$val];
}

if(!empty($_POST['submit'])){
    if($_POST['S'] <= 0 || $_POST['t'] <= 0){
        $_SESSION['error'] = '<strong><em>Число должно быть положительным!</em></strong>';
        header("Location: index.php");
        exit();
    }else{
        $_SESSION['res'] = "<strong><em>" .speed($_POST['S'], $_POST['t'], $_POST['val']). "</em></strong>";
        header("Location: index.php");
        exit();
    }
}
?>

<span>Рассчет скорости</span>

<?php
echo $_SESSION['error'];
echo $_SESSION['res'];
session_unset();
session_destroy();
?>
<form method="post" action="">
    <table>
        <tr>
            <td>Введите расстояние (км):</td> <td><input type="text" name="S" /></td>
        </tr>
        <tr>
            <td>Введите время движения(ч):</td> <td><input type="text" name="t" /></td>
        </tr>
        <tr>
            <td><input type="radio" name="val" value="1" checked="checked" /> км/ч</td> <td><input type="radio" name="val" value="2" /> м/с</td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Рассчитать" /></td>
        </tr>
    </table>
</form>



<span>Исходный код: </span>
<div class="code" style="height:200px;width:700px; overflow : scroll;">
    <p>
        < ?php<br>
        session_start();<br>

        function speed($s, $t, $val){<br>
            $speed[1] = $s / $t . " км/ч";<br>
            $speed[2] = $speed[1] / 3.6 . " м/с";<br>
            return $speed[$val];<br>
        }<br>

        if(!empty($_POST['submit'])){<br>
            if($_POST['S'] <= 0 || $_POST['t'] <= 0){<br>
                $_SESSION['error'] = '< strong>< em>Число должно быть положительным!< /em>< /strong>';<br>
                header("Location: index.php");<br>
                exit();<br>
            }else{<br>
                $_SESSION['res'] = "< strong>< em>" .speed($_POST['S'], $_POST['t'], $_POST['val']). "< /em>< /strong>";<br>
                header("Location: index.php");<br>
                exit();<br>
            }<br>
        }<br>
        ?><br>

    < h3>Рассчет скорости< /h3><br>

    < ?php<br>
    echo $_SESSION['error'];<br>
    echo $_SESSION['res'];<br>
    session_unset();<br>
    session_destroy();<br>
    ?><br>
    < form method="post" action=""><br>
        < table><br>
            < tr><br>
                < td>Введите расстояние (км):< /td> < td>< input type="text" name="S" />< /td><br>
            < /tr><br>
            < tr><br>
                < td>Введите время движения(ч):< /td> < td>< input type="text" name="t" />< /td><br>
            < /tr><br>
            < tr><br>
                < td>< input type="radio" name="val" value="1" checked="checked" /> км/ч< /td> < td>< input type="radio" name="val" value="2" /> м/с< /td><br>
            < /tr><br>
            < tr><br>
                < td colspan="2">< input type="submit" name="submit" value="Рассчитать" / >< /td><br>
            < /tr><br>
        < /table><br>
    < /form>
    </p>
</div>




<h2>Благодарю за внимание! Жду от Вас интересного тестового задания=) </h2>
</body>
</html>
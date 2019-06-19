<?php include_once ("function.php");?>
<!doctype html>
<head>
    <meta charset="UTF-8">
    <title>Чат</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<div class="content">
    <div class="header">
        <div class="contact">
            <p style="color: black">Телефон: (499) 340-94-71</p>
            <p>Email: info@future-group.ru</p>
        </div>
        <div class="title">Комментарии</div>
        <div class="logo"><img src="images/logo.png"></div>
    </div>
    <div class="body">
        <?php userList($connect);?>
        <?php
        $connect->close();
        ?>
        <form method="post">
            <input name="name" type="text" placeholder="Имя"/></br>
            <textarea name="text" type="text" placeholder="Текст"></textarea>
            <input type="submit" name="add" value="Отправить"/>
        </form>
    </div>
</div>
</body>
</html>
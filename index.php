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
        <h2>Комментарии </h2>
    </div>
    <div class="body">
        <?php userList($connect);?>
        <?php
        $connect->close();
        ?>
        <form method="post">
            <input name="name" type="text" placeholder="Имя"/>
            <input name="text" type="text" placeholder="Текст"/>
            <input type="submit" name="add" value="Отправить"/>
        </form>
    </div>
</div>
</body>
</html>
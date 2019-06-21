<?php
//Подключаемся к БД Хост, Имя пользователя MySQL, его пароль, имя нашей базы
$connect = new mysqli("localhost", "root", "password", "database");

$connect->query("SET NAMES 'utf8' ");

function addMessage($name, $text, $connect)
{
    $add = $connect->query("INSERT INTO chat (id, name, text, date) VALUES  (NULL, '$name', '$text', now() )");
}

if($_POST['add'])
{
    $name = $_POST['name'];
    $text = $_POST['text'];
    addMessage($name, $text, $connect);
}
echo "<p style='color: darkgreen; font-size: 18px;'>".$sysMessages."</p>" ;
function userList($connect)
{
    $comments = $connect->query("SELECT *, DATE_FORMAT(date,'%H:%i %d.%m.%y') as date_format FROM chat 
									ORDER BY date DESC");
    $num = 0;
    
    while(($comment = $comments->fetch_assoc()) != FALSE){
        
        echo "<p><b>".$comment['name']."</b> ".$comment['date_format']." </br> ".$comment['text']."</p>";
    }
}

?>
<?php
//Подключаемся к БД Хост, Имя пользователя MySQL, его пароль, имя нашей базы
$connect = new mysqli("localhost", "root", "", "future_test");
//Кодировка данных получаемых из базы
$connect->query("SET NAMES 'utf8' ");
// --------------------------------- Добавление пользователей
//Функция добавления пользователей
function addMessage($name, $text, $connect)
{
    $add = $connect->query("INSERT INTO chat (id, name, text, date) VALUES  (NULL, '$name', '$text', now() )");
}
//Если было добавление пользователя, то занести все данные в базу
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
    //засовываем все записи в ассоциативный массив и перебираем их
    while(($comment = $comments->fetch_assoc()) != FALSE){
        //выводим список на экран
        echo "<p><b>".$comment['name']."</b> ".$comment['date_format']." </br> ".$comment['text']."</p>";
    }
}
//вывод системных сообщений
?>